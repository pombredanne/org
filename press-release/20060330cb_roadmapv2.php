<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Development Road Map version 2 Approved";
	$pageKeywords	= "Eclipse Foundation, roadmap, roadmap v2";
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
      	<p><br />
        <b>March 30th, 2006</b> - The Eclipse Foundation is pleased to announce the board of directors approved version 2 of the Eclipse Development Road Map on March 20th, 2006.  This road map is important for making Eclipse a predictable and reliable community for open source technology.  The open and transparent governance of Eclipse facilitated a great deal of community involvement during the revisions of the road map.<br /><br />
		The road map can be found in the Projects section of Eclipse.org, or by following this URL: <a href="http://www.eclipse.org/org/councils/roadmap_v2_0/index.php">http://www.eclipse.org/org/councils/roadmap_v2_0/index.php</a>
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
