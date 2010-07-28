
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Testing Day in Darmstadt";
	$pageKeywords	= "Eclipse, testing, osgi, runtime, Darmstadt, Germany";
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
		
		<a href="http://wiki.eclipse.org/EclipseTestingDay201">
		<img src="http://wiki.eclipse.org/images/f/fc/EclispeTestingDay11.png" alt="Eclipse Testing Day" border="0">
		</a>
		
     	<p>
     		Bredex, MicroDoc and the Eclipse Foundation are pleased to announce
			<a href="http://wiki.eclipse.org/EclipseTestingDay2010" target="blank">Eclipse Testing Day
			in Darmstadt</a>, which takes place September 8, 2010. Eclipse Testing Day is a day-long
			event for technical developers, testers, architects and managers to learn more about testing
			with Eclipse and OSGi technology.  
		</p>
		<p>
			Industry experts from leading companies within the testing space and experts from the Eclipse
			and OSGi communities will be presenting an exciting and varied program.  Topics like acceptance/GUI testing, JUnit testing,
			scope and coverage, test generation and embedded testing will be covered.  See the event page
			for a <a href="http://wiki.eclipse.org/EclipseTestingDay2010#Agenda" target="blank">full agenda</a>.  
		</p>
		<p>	
			Eclipse Testing Day is limited to 80 participants so
			<a href="http://eclipsetestingday2010.eventbrite.com/" target="blank">register soon</a>.
			We hope you can join us!
		</p>
		  
	</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


