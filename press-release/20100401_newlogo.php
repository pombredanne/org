<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Annouces New Logo And Brand Identity";
	$pageKeywords	= "eclipse, logo, branding";
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

		<p>Ottawa, Canada - April 1, 2010 - The Eclipse Foundation announced today that after rounds of community feedback and market testing they have selected a new logo to help broaden the appeal of the Eclipse to a younger demographic.</p>
		<p>"Eclipse is always looking to expand our community", said Mike Milinkovich, Executive Director at the Eclipse Foundation.  "Children are the future and we need to get them using Eclipse as early as possible".</p>		
		<p>Ian Skerrett, Director of Marketing at the Eclipse Foundation spearheaded the initiative.  "At first I was hesistant to initiate a change to our branding.  The Eclipse brand is very well known around the world.  But once I sat in on one of the market tests, I was floored, the looks on the children's faces when they launched Eclipse for the first time was a real eye opener."</p>
		<p>For more information about the new logo and branding, visit our <a href="http://en.wikipedia.org/wiki/April_Fools%27_Day">new branding page</a>.</p>
		
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Eclipse Logo</h6>
				<img src="/home/promotions/newlogoSmall.png"/>
		</div>
	</div>

</div>

EOHTML;


	# Generate the web page
	$App->Promotion= true;
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
