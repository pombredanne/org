<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

require_once("/home/data/httpd/eclipse-php-classes/system/dbconnection_foundation_ro.class.php");
	#*****************************************************************************
	#
	# directors.php
	#
	# Author: 		Denis Roy
	# Date:			2005-11-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	# History:		DB-driven version Karl Matthias
	#				2007-07-06
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Eclipse Foundation Board of Directors";
	$pageKeywords	= "foundation, board, legal";
	$pageAuthor		= "Mike Milinkovich, Nov. 22, 2005";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#

$fdbc = new DBConnectionFoundation();
$dbh = $fdbc->connect()
	or die('Could not connect: ' . mysql_error());

# Global Functions

function mysql_error_check() {
	if(mysql_errno() != 0) {
		die('<h1 style="color: red">' . mysql_errno() . ': ' . mysql_error() . '</h1>');
	}
}

# Lookup the relations and return the list
function find_relations() {
	global $dbh;

	$people = array();
	/*
	 * members with company relationships
	 */
	$result = mysql_query("SELECT FName, LName, Name1 " .
			"FROM  People, OrganizationContacts, Organizations " .
			"WHERE People.PersonID = OrganizationContacts.PersonID " .
			"	AND Relation = 'BR' " .
			"	AND OrganizationContacts.OrganizationID = Organizations.OrganizationID;", $dbh);
	mysql_error_check();

	while($row = mysql_fetch_assoc($result)) {
		$people[ucwords($row['LName'].', '.$row['FName'])] =
		'<td>' . ucwords($row['FName']) . ' ' . ucwords($row['LName']) .
		'</td><td>' . $row[Name1] . '</td>';
	}

	/*
	 * elected add-in provider reps
	 */
	$result = mysql_query("SELECT FName, LName " .
			"FROM  People, PeopleRelations " .
			"WHERE People.PersonID = PeopleRelations.PersonID " .
			"	AND Relation = 'AR';", $dbh);
	mysql_error_check();
	while($row = mysql_fetch_assoc($result)) {
		if( !isset($people[ucwords($row['LName'].', '.$row['FName'])]) ) {
			$people[ucwords($row['LName'].', '.$row['FName'])] =
			'<td>' . ucwords($row['FName']) . ' ' . ucwords($row['LName']) .
			'</td><td>' . '&nbsp;' . '</td><td>Elected add-in provider representative</td>';
		}
	}

	/*
	 * elected committer reps
	 */
	$result = mysql_query("SELECT FName, LName " .
			"FROM  People, PeopleRelations " .
			"WHERE People.PersonID = PeopleRelations.PersonID " .
			"	AND Relation = 'CB';", $dbh);
	mysql_error_check();
	while($row = mysql_fetch_assoc($result)) {
		if( !isset($people[ucwords($row['LName'].', '.$row['FName'])]) ) {
			$people[ucwords($row['LName'].', '.$row['FName'])] =
			'<td>' . ucwords($row['FName']) . ' ' . ucwords($row['LName']) .
			'</td><td>Elected committer representative</td>';
		}
	}

	return $people;
}

ob_start();
?>
<table width="95%" border="0" cellspacing="0" cellpadding="1" align="center">
<tr><td><b>Director</b></td><td><b>Organization</b></td></tr>
<?php
$people = find_relations($planning_relations);
ksort($people);
foreach($people as $name=>$value) {
	echo "		<tr>$value</tr>\n";
}
?>
</table>
<?php
$html = ob_get_contents();
ob_end_clean();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
