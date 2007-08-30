<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ESE Early Registration Deadline is Thursday, September 6";
	$pageKeywords	= "Eclipse Summit Europe registration early discount deadline";
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
			<strong>Eclipse Summit Europe</strong><br>
			<strong>October 10-11, 2007</strong><br>
			<strong>Ludwigsburg, Germany</strong><br>
			<strong><a href="http://www.eclipsecon.org/summiteurope2007/index.php?page=registration/" target="blank">http://www.eclipsecon.org/summiteurope2007</a></strong><br>
		</p>
		<p>
			Register soon! Early bird registration pricing for ESE ends Thursday, September 6, 2007. Check out the conference site at
			<a href="http://www.eclipsecon.org/summiteurope2007" target="blank">http://www.eclipsecon.org/summiteurope2007</a> to
			register, and for information on the program schedule and the exciting speakers that will be presenting at this year&#146;s
			event. 
		</p>
		<p>  
			Eclipse Summit Europe is the Eclipse Foundation&#146;s premier event designed to create opportunities for the European Eclipse
			community to explore, share and collaborate on the latest ideas and information about Eclipse and its members.
		</p>
		<p>  
			If you attended Eclipse Summit Europe 2006, you are eligible for an additional 15% alumni discount on your 2007 registration.
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
