
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
		is now open.  The fourth annual Eclipse community event will be held October 27-29 in Ludwigsburg Germany. 
		</p>
		<p>This year the conference will feature five tracks: Runtime, IDE, Embedded, Modeling, and Other/New & Noteworthy.  The
		<a href="http://www.eclipsecon.org/summiteurope2009/submissions">Call for Papers</a> is now open. Individuals that are interested 
		in presenting at the conference are encouraged to submit a proposal before August 18, 2009.  
		The full conference agenda will be published in early September.
		</p>
		
		<p>The cost to attend the conference is EURO.  Employees of Eclipse Foundation member companies, Eclipse committers, and conference alumni will receive a
		15% discount on the full registration price.  More information about the conference and
		registration can be found at <a href="http://www.eclipsesummit.org">www.eclipsesummit.org</a>.</p>
		
		<p><a href="http://www.eclipsecon.org/summiteurope2009/sponsorship/">Sponsorship opportunities</a> are still avaiable for Eclipse Summit Europe.  Sponsorship is
		a great way for organizations to gain exposure with Eclipse users.
		</p>
		
		<p>
		Don't miss out on this excellent opportunity - <a href="http://www.eclipsesummit.org">register for Eclipse Summit Europe</a> today!
		</p>
		<p>Follow Eclipse Summit Europe on <a href="http://twitter.com/eclipsesummit">Twitter</a></p>
	</div>
	
	<div id="rightcolumn"><br/><br/><br/>
	<a href="http://www.eclipsesummit.org/"><img border="0" src="http://www.eclipsecon.org/summiteurope2009/datedimage/image125x125.gif" height="125" width="125" alt="Eclipse Summit Europe 2009"/></a>
	</div>
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

