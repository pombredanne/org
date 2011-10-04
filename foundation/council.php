<?php
/*******************************************************************************
* Copyright (c) 205, 2011 Eclipse Foundation and others.
* All rights reserved. This program and the accompanying materials
* are made available under the terms of the Eclipse Public License v1.0
* which accompanies this distribution, and is available at
* http://www.eclipse.org/legal/epl-v10.html
*
* Contributors:
*    Denis Roy (Eclipse Foundation)- initial API and implementation
*    Wayne Beaton (Eclipse Foundation) - Bug 359782
*******************************************************************************/
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");

$App  = new App();
$Nav = new Nav();
$Menu = new Menu();
include($App->getProjectCommon());  

$pageTitle 		= "Eclipse Foundation Councils";
$pageKeywords	= "foundation, legal, councils, emo";
$pageAuthor		= "Mike Milinkovich, Nov. 22, 2005";


# Lookup the relations and return the list
function find_relations($relations_array, $include_year = false) {
	global $App;

	$relations = "'" . implode( "','", $relations_array ) . "'";
	/*
	 * people and chairs are arrays of
	 *	"Last, First" => array( 
	 *		the html for the row in the table
	 *			<td>name</td><td>employer</td><td>reason</td>
	 *		, PersonID )
	 * each code section overwrites the results of the previous ones
	 * if they have a result for the same person. Thus if a person is
	 * both a PMC member and a company member, then whichever query
	 * was *last* determines what shows for that person.
	 */
	$people = array();
	$chairs = array();
	/*
	 * chairs
	 */
	$rel = 'NONE';
	foreach( $relations_array as $r ) {
		if( $r == 'PZ' || $r == 'AZ' || $r == 'RZ' ) {
			$rel = $r;
		}
	}
	$result = $App->foundation_sql("SELECT PersonID
		FROM PeopleRelations
		WHERE Relation = '$rel'
		");
	
	while($row = mysql_fetch_assoc($result)) {
		$chairs[$row['PersonID']] = 1;
	}
	/*
	 * appointed members with company relationships
	 */
	$result = $App->foundation_sql("SELECT distinct(People.PersonID), FName, LName, Name1, year(EntryDate) as year
		FROM PeopleRelations, People, Organizations,
			OrganizationContacts
		WHERE PeopleRelations.Relation IN ($relations)
			AND People.PersonID = PeopleRelations.PersonID
			AND OrganizationContacts.PersonID =
				People.PersonID
			AND Organizations.OrganizationID =
				OrganizationContacts.OrganizationID");

	while($row = mysql_fetch_assoc($result)) {
		$people[ucwords($row['LName'].', '.$row['FName'])] = array(
		'<td>' .
		((isset($chairs[$row['PersonID']]) && $chairs[$row['PersonID']] == 1) ? '<b>' : '') .
		ucwords($row['FName']) .
		' ' . ucwords($row['LName']) .
		((isset($chairs[$row['PersonID']]) && $chairs[$row['PersonID']] == 1) ? '*</b>' : '') .
		'</td><td>' . $row['Name1'] .
		'</td><td>appointed' .
		($include_year ? (' (' . $row['year'] . ')') : '') .
		'</td>', $row['PersonID'] );
	}

	/*
	 * appointed members without company relationships
	 */
	$result = $App->foundation_sql("SELECT distinct(People.PersonID), FName, LName, year(EntryDate) as year
		FROM PeopleRelations, People
		WHERE PeopleRelations.Relation IN ($relations)
			AND People.PersonID = PeopleRelations.PersonID
			");
	while($row = mysql_fetch_assoc($result)) {
		if( !isset($people[ucwords($row['LName'].', '.$row['FName'])]) ) {
			$people[ucwords($row['LName'].', '.$row['FName'])] = array(
			'<td>' .
			((isset($chairs[$row['PersonID']]) && $chairs[$row['PersonID']] == 1) ? '<b>' : '') .
			ucwords($row['FName']) .
			' ' . ucwords($row['LName']) .
			((isset($chairs[$row['PersonID']]) && $chairs[$row['PersonID']] == 1) ? '*</b>' : '') .
			'</td><td>' . '&nbsp;' . '</td><td>appointed' .
			($include_year ? (' (' . $row['year'] . ')') : '') .
			'</td>', $row['PersonID'] );
		}
	}

	/*
	 * company members
	 */
	$result = $App->foundation_sql("SELECT distinct(People.PersonID),
			Name1, FName, LName
		FROM OrganizationContacts, Organizations, People
		WHERE OrganizationContacts.Relation IN ($relations)
			AND OrganizationContacts.OrganizationID =
				Organizations.OrganizationID
			AND OrganizationContacts.PersonID =
				People.PersonID");
	
	while($row = mysql_fetch_assoc($result)) {
		$people[ucwords($row['LName'].', '.$row['FName'])] = array(
		'<td>' .
		((isset($chairs[$row['PersonID']]) && $chairs[$row['PersonID']] == 1) ? '<b>' : '') .
		ucwords($row['FName']) .
		' ' . ucwords($row['LName']) .
		((isset($chairs[$row['PersonID']]) && $chairs[$row['PersonID']] == 1) ? '*</b>' : '') .
		'</td><td>' . $row['Name1'] . '</td><td>Strategic Developer</td>', $row['PersonID'] );
	}

	/*
	 * project members with company relationships
	 */
	$result = $App->foundation_sql("SELECT distinct(People.PersonID),
			ProjectID, FName, LName, Name1
		FROM PeopleProjects, People, OrganizationContacts,
			Organizations
		WHERE PeopleProjects.Relation IN ($relations)
			AND PeopleProjects.PersonID =
				People.PersonID
			AND InactiveDate IS NULL
			AND OrganizationContacts.PersonID =
				People.PersonID
			AND OrganizationContacts.Relation =
				'CC'
			AND Organizations.OrganizationID =
				OrganizationContacts.OrganizationID");
	
	while($row = mysql_fetch_assoc($result)) {
		$people[ucwords($row['LName'].', '.$row['FName'])] = array(
		'<td>' .
		((isset($chairs[$row['PersonID']]) && $chairs[$row['PersonID']] == 1) ? '<b>' : '') .
		ucwords($row['FName']) .
		' ' . ucwords($row['LName']) .
		((isset($chairs[$row['PersonID']]) && $chairs[$row['PersonID']] == 1) ? '*</b>' : '') .
		'</td><td>' . $row['Name1'] . "</td><td>" .
		ucfirst($row['ProjectID']) . " PMC</td>", $row['PersonID'] );
	}

	/*
	 * project members without company relationships
	 */
	$result = $App->foundation_sql("SELECT distinct(People.PersonID),
			ProjectID, FName, LName
		FROM PeopleProjects, People
		WHERE PeopleProjects.Relation IN ($relations)
			AND PeopleProjects.PersonID =
				People.PersonID
			AND InactiveDate IS NULL
			");
	
	while($row = mysql_fetch_assoc($result)) {
		if( !isset($people[ucwords($row['LName'].', '.$row['FName'])]) ) {
			$people[ucwords($row['LName'].', '.$row['FName'])] = array(
			'<td>' .
		((isset($chairs[$row['PersonID']]) && $chairs[$row['PersonID']] == 1) ? '<b>' : '') .
			ucwords($row['FName']) .
			 ' ' . ucwords($row['LName']) .
		((isset($chairs[$row['PersonID']]) && $chairs[$row['PersonID']] == 1) ? '*</b>' : '') .
			'</td><td>' . '&nbsp;' . "</td><td>" .
			ucfirst($row['ProjectID']) . " PMC</td>", $row['PersonID'] );
		}
	}

	return $people;
}


ob_start();
?>
<div id="midcolumn">
	<h1><?= $pageTitle ?></h1>
	<p>As defined by the <a href="/projects/dev_process/development_process.php">Eclipse Development Process</a>,
	the open source projects in Eclipse are guided and co-ordinated by two Councils:</p>
	<ul class="midlist">
        <li><strong><a href="#planning">Planning</a></strong>: The Planning Council
          is responsible for establishing a coordinated Platform Release Plan
          that supports the Roadmap, and balances the many competing requirements.
          The Platform Release Plan describes the themes and priorities that focus
          these Releases, and orchestrates the dependencies among Project Plans.
        </li>
        <li><strong><a href="#architecture">Architecture</a></strong>: The Architecture
		  Council is responsible for (i) monitoring, guiding, and influencing the software 
		  architectures used by Projects,  (ii) new  project mentoring,  and (iii) maintaining  
		  and revising  the Eclipse Development Process subject to the approval of the Board. 
		  More explanation of the Architecture Council
		  can be found in the <a href="/projects/dev_process/development_process.php#4_5_Councils">Eclipse Development Process</a> and in
		  the <a href="http://wiki.eclipse.org/Architecture_Council">guidelines and checklists</a>
		  for the Architecture Council.</li>
      </ul>

<div class="homeitem3col">
	<h3><a name="planning"></a>Planning council</h3>

	<table width="95%" border="0" cellspacing="0" cellpadding="1" align="center">
<?php
// Planning Council
$planning_relations = array( 'EP', 'PC', 'RP', 'PZ' );
$people = find_relations($planning_relations);
ksort($people);
foreach($people as $name=>$value) {
	echo "		<tr>" . $value[0] . "</tr>\n";
}
?>
	</table>
      <ul>
<li><a href="http://wiki.eclipse.org/Planning_Council">Planning Council's wiki page and meeting minutes</a>.
      </ul>
    </div>
<div class="homeitem3col">
<h3><a name="architecture"></a>Architecture council</h3>
<p align=right><em>Architecture Council members and the projects they are mentoring.</em>
<p/>
	<table width="95%" border="0" cellspacing="0" cellpadding="1" align="center">
<?php
// Architecture Council
$architecture_relations = array( 'AC', 'RA', 'EA', 'AZ' );
$people = find_relations($architecture_relations, true);
ksort($people);

$mentors = array();
$result = $App->foundation_sql("SELECT PP.PersonID, PP.ProjectID, P.UrlIndex FROM PeopleProjects PP INNER JOIN Projects P ON PP.ProjectId = P.ProjectID  WHERE Relation = 'ME' and InactiveDate is null");

while($obj = mysql_fetch_object($result)) {
	if( !isset($mentors[$obj->PersonID]) ) $mentors[$obj->PersonID] = array();

	// WTB While we're here... set the link to go to the project info page.
	$mentors[$obj->PersonID][] = "<a href=\"/projects/project.php?id=$obj->ProjectID\">$obj->ProjectID</a>";
}

foreach($people as $name => $value) {
	echo "		<tr>" . $value[0] . "</tr>\n";
	if( isset($mentors[$value[1]]) ) {
		echo "<tr><td colspan=\"3\" align=\"right\" style=\"padding-left:20px;font-size: 90%\">Mentor for: " . implode(', ', $mentors[$value[1]] ) . "</td></tr>\n";
	}
}
?>
	</table>

<ul>
<li><a href="http://wiki.eclipse.org/Architecture_Council">Architecture Council's wiki page and meeting minutes</a>.
</ul>
</div>

<p><em>* chair</em></p>
</div>
<?php

$html = ob_get_contents();
ob_end_clean();
# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
