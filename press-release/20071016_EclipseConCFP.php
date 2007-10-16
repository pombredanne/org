<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Submit a Talk or Tutorial for EclipseCon 2008";
	$pageKeywords	= "EclipseCon submit talk tutorial";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
		<p>
			<strong>EclipseCon 2008</strong><br>
			<strong>March 17-20, 2007</strong><br>
			<strong>Santa Clara, CA</strong><br>
			<strong><a href="http://www.eclipsecon.org/2008/index.php?page=submissions/" target="blank">http://www.eclipsecon.org</a></strong><br>
		</p>
		<p>
			It is now time to submit your talk or tutorial for EclipseCon 2008.  The entire Eclipse community is invited to submit ideas
			for tutorials, long talks, short talks, posters and birds-of-a-feather sessions.  The EclipseCon program committee has
			identified different topic areas or categories for submissions, including business topics, C/C++, Data Tooling, Java, Mobile
			and Embedded, Modeling, OSGi, RCP, Reporting, SOA, Test and Performance, Web Tools and Industry Verticals.  The deadline for
			tutorial and talk submissions is <strong>November 19, 2007</strong>.
		</p>
 
		<p> 
			EclipseCon 2008 will be held March 17-20 in Santa Clara, CA.
		</p>
 
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php
/*
 * Created on 20-Jan-2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
