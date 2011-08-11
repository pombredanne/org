<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Testing Day 2011";
	$pageKeywords	= "eclipse, testing";
	$pageAuthor		= "Anne Jacko";
	
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
		
		<p>Registration is now open for Eclipse Testing Day 2011, scheduled for September 7 in Neuss, Germany. Topics range from 
		acceptance testing and usability testing to build processes and test processes. Testing Day is a unique opportunity to 
		hear from the experts on testing, test processes, and the associated tools and technology. 
		</p> 

		<p>Along with the talks, attendees can see what's new from the Testing Day sponsoring companies.</p>

		<p>For agenda, registration, prices (including discounts for Eclipse members and students), sponsoring companies, and venue details, 
		see the <a href="http://wiki.eclipse.org/Eclipse_Testing_Day_2011">Eclipse Testing Day wiki page</a>.</p>	
				
 	<br><br>
 	
	</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>