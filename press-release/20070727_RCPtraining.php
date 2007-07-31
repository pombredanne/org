<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse RCP Training";
	$pageKeywords	= "RCP Training, RCP Course Outline";
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
			<strong>Announcing a New Eclipse RCP Training Series</strong>
		</p>
		<p>
			The Eclipse Foundation, in partnership with Eclipse training companies Anyware Technologies, AvantSoft, BREDEX, Industrial TSI, Innoopract and WeigleWilczek, are pleased
			to annouce a series of RCP training classes.  Classes will occur between September 17 and October 5 and will take place in Amsterdam, Berlin, Boston, Braunschweig, Brussels, 
			Chicago, Denver, Luxembourg, Paris, San Francisco, San Jose, Stuttgart and Portland.  The participating Eclipse training companies will be organizing the classes in each city 
			and offering them at prices that are greatly reduced from their regular rates.
		</p>	
		<p>	
			The RCP training series will provide in-depth education for developers building Eclipse RCP based applications.
			Each class will run for four days and feature instructor-led classroom instruction and in-depth hands-on labs and tutorials. 					
			The class will help developers understand the core RCP concepts and Eclipse plug-in architecture, and provide in-depth insight into SWT, JFace and other RCP components.
		</p>
		<p>
			For more informaiton, locations, dates and registration please go to 
			<a href="http://www.regonline.com/RCPtraining">www.regonline.com/RCPtraining</a>.  Students that register before
			August 31, 2007 will receive a 10% early bird discount on the registration price.
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
