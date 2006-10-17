<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon 2007 Call for Participation Now Open";
	$pageKeywords	= "Eclipse, eclipsecon, participation, 2007";
	$pageAuthor		= "Nathan Gervais";
	
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
      	<p>EclipseCon 2007 is now accepting submissions for tutorial and session topics.   Once again this year the Eclipse community is welcomed to submit ideas for the annual Eclipse conference.   The deadline for tutorial submission is November 1, long talk submissions is December 15 and Short Talk and Demos is January 15.   Details for submission guidelines can be found at <a href="http://www.eclipsecon.org/2007/index.php?page=submissions/">http://www.eclipsecon.org/2007/index.php?page=submissions/</a>.</p>
		<p>EclipseCon 2007 will be held March 5-8 at the Santa Clara Convention Center in Santa Clara, CA.</p>
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

