
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Registration is Open for Eclipse Embedded Day Spain";
	$pageKeywords	= "Eclipse, event, day, Paris, France";
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
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
		<a href="http://www.esi.es/eclipseembeddedday/">
		<img src="http://www.esi.es/eclipseembeddedday/images/logoEclipseED.jpg" alt="Eclipse Embedded Day Spain" border="0">
		</a>
		
     	<p>
     		The European Software Institute-Technalia is pleased to announce
			<a href="http://www.esi.es/eclipseembeddedday/" target="blank">Eclipse Embedded Day Spain</a>, which
			takes place November 9, 2010. The event is a day-long
			conference for technical experts, developers, users and researchers from the Spanish embedded systems
			community.
		</p>
		<p>
			Eclipse Embedded Day will explore the challenges in industrial environments, new scientific and
			technological developments in Eclipse for embedded systems, and how to transfer new research and
			development technology to current challenges.  See the program page
			for a <a href="http://www.esi.es/eclipseembeddedday/index.php?op=4" target="blank">full agenda</a>.  
		</p>
		<p>	
			We hope to see you at Eclipse Embedded Day Spain!  <a href="http://www.esi.es/eclipseembeddedday/index.php?op=6" target="blank">Register</a>
			while space is still available.	
		</p>
		  
	</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


