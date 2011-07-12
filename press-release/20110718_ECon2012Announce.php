<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Announcing EclipseCon 2012";
	$pageKeywords	= "eclipse, Indigo, conference, eclipsecon";
	$pageAuthor		= "Ian Skerrett";
	
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
		
		<p>EclipseCon North America is moving! The Eclipse Foundation is pleased to announce that EclipseCon 2012 will be 
		March 26-29 at the Hyatt Regency in Reston, Virginia, outside Washington, D.C. We are excited about the great new location, 
		and about moving to the east coast of the U.S.</p> 
		
		<p>Doug Schaefer of Wind River is Program Chair, and we expect to announce the rest of the committee 
		shortly. The new website is coming soon, as well as the Call for Papers. Follow us 
		on <a href="http://twitter.com/eclipsecon">Twitter</a> and 
		<a href="http://www.facebook.com/pages/Eclipse/259655700571">Facebook</a> for updates.</p> 

		<p>Be sure to save the dates, and we look forward to seeing you in Reston next March.</p> 

		<br><br>		
				
 	<br><br>
 	
	</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>