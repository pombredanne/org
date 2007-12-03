<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Donate to Eclipse";
	$pageKeywords	= "eclipse, donation, community, ";
	$pageAuthor		= "Nathan Gervais";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<style>
		.paddedlist li {	padding-bottom:7px;	}
	</style>
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		<h1>Now you can make a donation to Eclipse</h1>
		<p>The Eclipse Foundation has launched a new system to allow individuals to make a financial donation to the Eclipse Foundation.  The 
		donations will be used to help fund the operations of the Eclipse community, such as extra hardware for open source projects, increase 
		bandwidth and sponsorship of Eclipse community events.  
		</p>

		<p>Over the years, we have had many requests from individuals who wanted to show their appreciation and support of Eclipse by making a 
		financial donation.   Our new system will now allow people to do so.   As a token of appreciation, individuals that donate more than 
		US$35 will be designated as a "Friend of Eclipse" for the subsequent 12 months.   "Friends of Eclipse" will have the privilege of using 
		a special "Friends of Eclipse" mirror and the use of a "Friend of Eclipse" logo.
		</p>
		
		<p>
		To make a donation, individuals can use their credit card or a PayPal account.   Go to <a href="http://www.eclipse.org/donate/">
		eclipse.org/donate </a> to make a donation now.
		
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
