
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Summit Europe 2009 Open for Registration";
	$pageKeywords	= "Eclipse Foundation, eclipse, summit, europe, open source, registration";
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
		Registration for <a href="http://www.eclipsecon.org/summiteurope2009/">Eclipse Summit Europe 2009</a>
		is now open. A single fee
		provides access to the entire conference, including technical sessions, keynotes, a symposia &amp;
		tutorial day, networking receptions and Birds of a Feather gatherings.
		</p>
		
		<p>Eclipse Summit Europe will be held October 27-29 in Ludwigsburg, Germany. 
		Eclipse Summit Europe is the Foundation's premier event for the European community, designed to
		create opportunities to explore, share and collaborate on the latest ideas and information about
		Eclipse and its members.
		</p>
 
		<p>Employees of Eclipse member companies, Eclipse committers, and conference alumni will receive a
		15% discount on the full registration price.  More information about the conference and
		registration can be found at <a href="http://www.eclipsesummit.org">www.eclipsesummit.org</a>.</p>
		
		<p>
		Don't miss out on this excellent opportunity - <a href="http://www.eclipsesummit.org">register for Eclipse Summit Europe</a> today!
		</p>
	</div>
	
	<div id="rightcolumn"><br/><br/><br/>
	<a href="http://www.eclipsesummit.org/"><img border="0" src="http://www.eclipsecon.org/summiteurope2009/datedimage/image125x125.gif" height="125" width="125" alt="Eclipse Summit Europe 2009"/></a>
	</div>
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

