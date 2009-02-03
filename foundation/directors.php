<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
	#				Further revamping and bios added by Karl Matthias
	#				2008-04-01
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


# Global Functions

function mysql_error_check() {
	if(mysql_errno() != 0) {
		die('<h1 style="color: red">' . mysql_errno() . ': ' . mysql_error() . '</h1>');
	}
}

function display_one($fname, $lname, $param, $orgid = null) {
	$name = $fname . '_' . $lname;
	if(file_exists('boardbios/' . $name . '.php')) {
		$content = file_get_contents('boardbios/' . $fname . '_' . $lname . '.php');
	}
	
//	if(file_exists('boardbios/photos/' . $name . '.jpg')) {
//		$photo = "
//			<div style='border-right: 1px solid #999999; 
//				border-bottom: 1px solid #999999;
//				margin-right: 1em;'>
//			<div style='border: solid 1px black; padding: 1em'
//			<img src='boardbios/photos/$name.jpg'>
//			</div>
//			</div>
//		";
//	}
	
	if($orgid != null) {
		$img = "
			<div>
			<img src='http://www.eclipse.org/membership/scripts/get_image.php?id=$orgid&size=small'>
			</div>
		";
	}
	
	return 	"<tr>
				<td>
					<span style='font-size: large; font-weight: bold'> " .
						 ucwords($fname) . ' ' . ucwords($lname) . " 
					</span>
					<br/>
					<div style='padding-left: 1em'>
						$param<br/><br/>
						$content <br/><!--$img--><br/>
					</div>
					<br/>
				</td>
				<td valign='top'><!--$photo-->$img</td>
			</tr>
			<tr>
				<td colspan='2'>
					<div style='border-bottom: dotted 1px black;'></div><br/>
				</td>
			</tr>
			";
}

# Lookup the relations and return the list
function find_relations() {
	global $App;

	$people = array();
	/*
	 * members with company relationships
	 */
	$result = $App->foundation_sql("SELECT FName, LName, Name1, Organizations.OrganizationID " .
			"FROM  People, OrganizationContacts, Organizations " .
			"WHERE People.PersonID = OrganizationContacts.PersonID " .
			"	AND Relation = 'BR' " .
			"	AND OrganizationContacts.OrganizationID = Organizations.OrganizationID;");

	while($row = mysql_fetch_assoc($result)) {
		$people[ucwords($row['LName'].', '.$row['FName'])] =
			display_one($row['FName'], $row['LName'], $row['Name1'], $row['OrganizationID']);
	}

	/*
	 * elected add-in provider reps
	 */
	$result = $App->foundation_sql("SELECT FName, LName " .
			"FROM  People, PeopleRelations " .
			"WHERE People.PersonID = PeopleRelations.PersonID " .
			"	AND Relation = 'AR';");
	while($row = mysql_fetch_assoc($result)) {
		if( !isset($people[ucwords($row['LName'].', '.$row['FName'])]) ) {
			$people[ucwords($row['LName'].', '.$row['FName'])] =
				display_one($row['FName'], $row['LName'], 'Elected Add-in Provider Representative');

		}
	}

	/*
	 * elected committer reps
	 */
	$result = $App->foundation_sql("SELECT FName, LName " .
			"FROM  People, PeopleRelations " .
			"WHERE People.PersonID = PeopleRelations.PersonID " .
			"	AND Relation = 'CB';");
	while($row = mysql_fetch_assoc($result)) {
		if( !isset($people[ucwords($row['LName'].', '.$row['FName'])]) ) {
			$people[ucwords($row['LName'].', '.$row['FName'])] =
				display_one($row['FName'], $row['LName'], 'Elected Committer Representative');
		}
	}

	return $people;
}

ob_start();
?>
<style>
#midcolumn h1, h2, h3 {
	font-weight: bold;
}
</style>
<div class="midcolumn" style="padding-right: 2em;">
<h1>Eclipse Foundation Board of Directors</h1>
<table>
<?php
$people = find_relations();
ksort($people);
foreach($people as $name=>$value) {
	echo "		<tr>$value</tr>\n";
}
?>
</table>
</div>
<?php
$html = ob_get_contents();
ob_end_clean();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>