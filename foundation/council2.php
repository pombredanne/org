<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
require_once("/home/data/httpd/eclipse-php-classes/system/dbconnection_foundation_ro.class.php");
#*****************************************************************************
#
# council.php
#
# Author: 		Denis Roy
# Date:			2005-11-07
#
# Description:  Show the members of the requirements, planning, and
#	architecture councils
#
# History:		Karl Matthias
#				2007-04-30
#				Lists now generated from the Foundation DB records
#
#
#****************************************************************************

#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Foundation Councils";
$pageKeywords	= "foundation, legal, councils, emo";
$pageAuthor		= "Mike Milinkovich, Nov. 22, 2005";

# Add page-specific Nav bars here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

# End: page-specific settings
#

# DATABASE HOST
# Global Functions

$chairs = array('PZ', 'AZ', 'RZ');
$requirements_relations = array( 'ER', 'RC', 'RZ' );
$planning_relations = array( 'EP', 'PC', 'RP', 'PZ' );
$architecture_relations = array( 'AC', 'RA', 'EA', 'AZ' );
$all_relations = array_merge($chairs, $requirements_relations, $planning_relations, $architecture_relations);

class Councillor {
	var $id;
	var $firstName;
	var $lastName;
	var $organization;
	var $relations = array();
	var $year;
		
	function is_chair() {
		global $chairs;
		return count(array_intersect($chairs, $this->relationships)) > 0;
	}
	
	function on_planning() {
		global $planning_relations;
		return count(array_intersect($planning_relations, $this->relationships)) > 0;
	}
	
	function on_requirements() {
		global $requirements_relations;
		return count(array_intersect($requirements_relations, $this->relationships)) > 0;
	}

	function on_architecture() {
		global $architecture_relations;
		return count(array_intersect($architecture_relations, $this->relationships)) > 0;
	}
}

abstract class Relation {
	var $code;
}

class PeopleRelation extends Relation {
	var $year;
	
	function __toString() {
		return "People($this->code)";
	}
	
	function isPersonRelation() {
		return true;
	}
	
	function isOrganizationRelation() {
		return false;
	}

	function isProjectRelation() {
		return false;
	}
}

class ProjectRelation extends Relation {
	var $project;
	
	function __toString() {
		return "$this->project($this->code)";
	}
	
	
	function isPersonRelation() {
		return false;
	}
	
	function isOrganizationRelation() {
		return false;
	}

	function isProjectRelation() {
		return true;
	}
}

class OrganizationRelation extends Relation {	
	function __toString() {
		return "Org($this->code)";
	}
	
	function isPersonRelation() {
		return false;
	}
	
	function isOrganizationRelation() {
		return true;
	}

	function isProjectRelation() {
		return true;
	}
}


$councillors = array();
$relations = "'" . implode( "','", $all_relations ) . "'";
$sql = "SELECT 
			distinct(People.PersonID) as id, 
			People.FName as firstName, 
			People.LName as lastName, 
			Organizations.Name1 as organization, 
			PeopleRelations.Relation as peopleRelation,
			year(PeopleRelations.EntryDate) as year, 
			PeopleProjects.Relation as projectRelation,
			PeopleProjects.ProjectID as project,			
			OrganizationContacts.Relation as organizationRelation
		FROM People
			left join PeopleRelations on (People.PersonID = PeopleRelations.PersonID)
			left join OrganizationContacts on (OrganizationContacts.PersonID = People.PersonID)
			left join Organizations on (Organizations.OrganizationID = OrganizationContacts.OrganizationID)
			left join PeopleProjects on (People.PersonId = PeopleProjects.PersonID and PeopleProjects.InactiveDate IS NULL)
		WHERE
			PeopleRelations.Relation in ($relations)
			OR PeopleProjects.Relation in ($relations)
			OR OrganizationContacts.Relation in ($relations)";

function is_council_relation($relation) {
	global $all_relations;
	
	if (!$relation) return false;
	return in_array($relation, $all_relations);
}

$result = $App->foundation_sql($sql);
while( $row = mysql_fetch_assoc($result) ) {
	$id = $row['id'];
	$councillor = $councillors[$id];
	if (!$councillor) {
		$councillor = new Councillor();
		$councillor->id = $id;
		$councillor->firstName = $row['firstName'];
		$councillor->lastName = $row['lastName'];
		$councillor->organization = $row['organization'];
		$councillors[$id] = $councillor;
	}
	
	$code = $row['peopleRelation'];
	if (is_council_relation($code)) {
		$key = "people-$code";
		
		$relation = new PeopleRelation();
		$relation->code = $code;
		$relation->year = $row['year'];
		$councillor->relations[$key] = $relation;
	}
	
	$code = $row['projectRelation'];
	if (is_council_relation($code)) {
		$project = $row['project'];
		$key = "$project-$code";
	
		$relation = new ProjectRelation();
		$relation->code = $code;
		$relation->project = $project;
		$councillor->relations[$key] = $relation;
	} 
	
	$code = $row['organizationRelation'];
	if (is_council_relation($code))  {
		$key = "org-$code";
	
		$relation = new OrganizationRelation();
		$relation->code = $code;
		$councillor->relations[$key] = $relation;
	};
}

function render_councillors(&$councillors) {
	echo "<table width=\"95%\" border=\"0\" cellspacing=\"0\" cellpadding=\"1\" align=\"center\">";
	foreach($councillors as $councillor) {
		$relations = 'y';
		foreach($councillor->relations as $relation) {
			$x = $relation->__toString();
			$relations .= "$x ";
		}
		echo "<tr>";
		echo "<td>$councillor->firstName $councillor->lastName</td>";
		echo "<td>$councillor->organization</td>";
		echo "<td>$councillor->year</td>";
		echo "<td>$relations</td>";
		echo "</tr>\n";
	}
	echo "</table>";
}

ob_start();
?>

<?php render_councillors($councillors); ?>

<?php

$html = ob_get_contents();
ob_end_clean();
# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
