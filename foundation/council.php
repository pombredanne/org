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
$dbhost = 'localhost';

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
function find_relations($relations) {
	global $dbh;

	$people = array();
	/*
	 * appointed members with company relationships
	 */
	$result = mysql_query("SELECT distinct(People.PersonID), FName, LName, Name1
		FROM PeopleRelations, People, Organizations,
			OrganizationContacts
		WHERE PeopleRelations.Relation IN ($relations)
			AND People.PersonID = PeopleRelations.PersonID
			AND OrganizationContacts.PersonID =
				People.PersonID
			AND Organizations.OrganizationID =
				OrganizationContacts.OrganizationID");
	mysql_error_check();

	while($row = mysql_fetch_assoc($result)) {
		$people[ucwords($row['LName'].', '.$row['FName'])] =
		'<td>' . ucwords($row['FName']) . ' ' . ucwords($row['LName']) .
		'</td><td>' . $row[Name1] . '</td><td>appointed</td>';
	}

	/*
	 * appointed members without company relationships
	 */
	$result = mysql_query("SELECT distinct(People.PersonID), FName, LName
		FROM PeopleRelations, People
		WHERE PeopleRelations.Relation IN ($relations)
			AND People.PersonID = PeopleRelations.PersonID
			");
	mysql_error_check();
	while($row = mysql_fetch_assoc($result)) {
		if( !isset($people[ucwords($row['LName'].', '.$row['FName'])]) ) {
			$people[ucwords($row['LName'].', '.$row['FName'])] =
			'<td>' . ucwords($row['FName']) . ' ' . ucwords($row['LName']) .
			'</td><td>' . '&nbsp;' . '</td><td>appointed</td>';
		}
	}

	/*
	 * project members with company relationships
	 */
	$result = mysql_query("SELECT distinct(People.PersonID),
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
	mysql_error_check();

	while($row = mysql_fetch_assoc($result)) {
		$people[ucwords($row['LName'].', '.$row['FName'])] =
		'<td>' . ucwords($row['FName']) . ' ' . ucwords($row['LName']) .
		'</td><td>' . $row['Name1'] . "</td><td>" .
		ucfirst($row['ProjectID']) . " PMC</td>";
	}

	/*
	 * project members without company relationships
	 */
	$result = mysql_query("SELECT distinct(People.PersonID),
			ProjectID, FName, LName
		FROM PeopleProjects, People
		WHERE PeopleProjects.Relation IN ($relations)
			AND PeopleProjects.PersonID =
				People.PersonID
			AND InactiveDate IS NULL
			");
	mysql_error_check();

	while($row = mysql_fetch_assoc($result)) {
		if( !isset($people[ucwords($row['LName'].', '.$row['FName'])]) ) {
			$people[ucwords($row['LName'].', '.$row['FName'])] =
			'<td>' . ucwords($row['FName']) . ' ' . ucwords($row['LName']) .
			'</td><td>' . '&nbsp;' . "</td><td>" .
			ucfirst($row['ProjectID']) . " PMC</td>";
		}
	}

	/*
	 * company members
	 */
	$result = mysql_query("SELECT distinct(People.PersonID),
			Name1, FName, LName
		FROM OrganizationContacts, Organizations, People
		WHERE OrganizationContacts.Relation IN ($relations)
			AND OrganizationContacts.OrganizationID =
				Organizations.OrganizationID
			AND OrganizationContacts.PersonID =
				People.PersonID");
	mysql_error_check();

	while($row = mysql_fetch_assoc($result)) {
		$people[ucwords($row['LName'].', '.$row['FName'])] =
		'<td>' . ucwords($row['FName']) . ' ' . ucwords($row['LName']) .
		'</td><td>' . $row['Name1'] . '</td><td>Strategic Developer</td>';
	}

	return $people;
}


ob_start();
?>
<div id="midcolumn">
	<h1><?= $pageTitle ?></h1>
	<h2>Eclipse Council Structure</h2>
	<p>As defined by the <a href="../documents/Eclipse%20Development%20Process%202003_11_09%20FINAL.pdf">Eclipse Development Process</a>,
	the open source projects in Eclipse are guided and co-ordinated by three Councils:</p>
	<ul class="midlist">
        <li><strong><a href="#requirements">Requirements</a></strong>: The Requirements
          Council is responsible for capturing and organizing requirements for
          all of the projects in the Eclipse community. The Requirements Council
          reviews and categorizes all of these incoming requirements - from all
          residents of the Ecosystem - and proposes a coherent set of Themes and
          Priorities that will drive the Roadmap.
          <br/><br/>
        </li>
        <li><strong><a href="#planning">Planning</a></strong>: The Planning Council
          is responsible for establishing a coordinated Platform Release Plan
          that supports the Roadmap, and balances the many competing requirements.
          The Platform Release Plan describes the themes and priorities that focus
          these Releases, and orchestrates the dependencies among Project Plans.
          <br/><br/>
        </li>
        <li><strong><a href="#architecture">Architecture</a></strong>: The Architecture
		  Council is responsible for the long-term technical health of the Eclipse
		  platforms and frameworks. More explanation of the Architecture Council
		  can be found in the <a href="/projects/dev_process/development_process.php#4_5_Councils">Eclipse Development Process</a> and in
		  the <a href="/projects/dev_process/architecture-council.php">guidelines and checklists</a> 
		  for the Architecture Council.</li>
      </ul>
      <br/>
	<div class="homeitem3col">
		<h3><a name="councildocuments"></a>Eclipse council documents</h3>
		<blockquote>
		<p> As described in the previous section, the <a href="../documents/Eclipse%20Development%20Process%202003_11_09%20FINAL.pdf">Eclipse
        	Development Process</a> calls for the Eclipse Councils to create the Eclipse
        	Roadmap documentation for approval by the Board of Directors. The <a href="/org/councils/roadmap.html">
      		Eclipse Roadmap V2.0</a> has now been released.  If you are looking for Board or Members meeting minutes,
      		<a href="minutes.php"> click here.</a>
        </p>
        </blockquote>
        </div>
	<div class="homeitem3col">
	<h3><a name="requirements"></a>Requirements council</h3>
	<br/>
	<table width="95%" border="0" cellspacing="0" cellpadding="1" align="center">
<?php
// Requirements Council
$requirements_relations = "'ER', 'RC'";
$people = find_relations($requirements_relations);
ksort($people);
foreach($people as $name=>$value) {
	echo "		<tr>$value</tr>\n";
}
?>
  	</table>
	<br/>
<ul>

<li><a href="../councils/20070122RCMinutes.pdf">Requirements Council Meeting,
          		January 22, 2007 (.pdf)</a><img src="../../images/new.gif" alt="new">
    <ul>
    <li><a href="../councils/20070122RC_Zend.pdf">Zend Member Presentation,
          		January 22, 2007 (.pdf)</a><img src="../../images/new.gif" alt="new">
    <li><a href="../councils/20070122RC_Serena.pdf">Serena Member Presentation,
          		January 22, 2007 (.pdf)</a><img src="../../images/new.gif" alt="new">
    </ul>

    </li>

<li><a href="../councils/20061010RCMinutes.pdf">Requirements Council Meeting,
          		October 10, 2006 (.pdf)</a></li>

	<li><a href="../councils/20060628RCMinutes.pdf">Requirements Council Meeting,
          		June 28, 2006 (.pdf)</a></li>

	 <li><a href="../councils/20060319RCMinutes.pdf">Requirements Council Meeting,
          		March 19, 2006 (.pdf)</a></li>

 	<li><a href="../councils/rcminutes050824.html">Requirements Council Meeting,
          		August 24, 2005</a></li>
        <li><a href="../councils/20041130RCMinutes.pdf">Requirements Council Meeting, November 30, 2004 (.pdf)</a></li>
        <li><a href="../councils/20040831RCMinutes.pdf">Requirements Council Meeting,
            August 31, 2004 (.pdf)</a></li>
		</ul>
	</div>
<div class="homeitem3col">
	<h3><a name="planning"></a>Planning council</h3>
	<br/>

	<table width="95%" border="0" cellspacing="0" cellpadding="1" align="center">
<?php
// Planning Council
$planning_relations = "'EP', 'PC', 'RP'";
$people = find_relations($planning_relations);
ksort($people);
foreach($people as $name=>$value) {
	echo "		<tr>$value</tr>\n";
}
?>
	</table>
      <ul>
        <li><a href="../councils/20070620PCMinutes.php">Planning
          	Council Meeting, June 20, 2007</a><img src="../../images/new.gif" alt="new"></li>
        <li><a href="../councils/20070123PCMinutes.php">Planning
          	Council Meeting, January 23, 2007</a>
        <li><a href="../councils/20061011PCMinutes.php">Planning
          	Council Meeting, October 11, 2006</a></li>
        <li><a href="../councils/20060629PCMinutes.php">Planning
          	Council Meeting, June 29, 2006</a></li>
        <li><a href="../councils/20051215PCMinutes.php">Planning
          	Council Meeting, December 15, 2005</a></li>
        <li><a href="../councils/20050823PCMinutes.html">Planning
          	Council Meeting, August 23, 2005</a></li>
        <li><a href="../councils/20050519PCMinutes.html">Planning
          	Council Meeting, May 19, 2005</a></li>
        <li><a href="../councils/20041201PCMinutes.pdf">Planning Council Meeting, December 1, 2004 (.pdf)</a></li>
        <li><a href="../councils/20040901PCMinutes.pdf">Planning Council Meeting,
            September 1, 2004 (.pdf)</a></li>
      </ul>
    </div>
<div class="homeitem3col">
<h3><a name="architecture"></a>Architecture council</h3>
<br/>
	<table width="95%" border="0" cellspacing="0" cellpadding="1" align="center">
<?php
// Architecture Council
$architecture_relations = "'AC', 'RA', 'EA'";
$people = find_relations($architecture_relations);
ksort($people);
foreach($people as $name=>$value) {
	echo "		<tr>$value</tr>\n";
}
?>
	</table>

		<ul>
         <li><a href="../councils/20070124ACMinutes.php">Architecture
          	Council Meeting, January 24, 2007</a><img src="../../images/new.gif" alt="new"></li>
         <li><a href="../councils/20061012ACMinutes.php">Architecture
          	Council Meeting, October 12, 2006</a></li>
         <li><a href="../councils/20060628ACMinutes.php">Architecture
          	Council Meeting, June 28, 2006</a></li>
        	<li><a href="../councils/20050517ACMinutes.html">Architecture Council
          		Meeting, May 17-18, 2005</a></li>
        	<li><a href="../councils/20041202ACMinutes.pdf">Architecture Council Meeting, December 2, 2004 (.pdf)</a></li>
        	<li><a href="../councils/20040902ACMinutes.pdf">Architecture Council Meeting,
            	September 2, 2004 (.pdf)</a></li>

		</ul>

</div>

</div>
<?php

$html = ob_get_contents();
ob_end_clean();
# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
