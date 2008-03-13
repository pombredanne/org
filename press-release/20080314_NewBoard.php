<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Announces 2008 Board Member Election Results";
	$pageKeywords	= "Eclipse Foundation, foundation, governance, board, elections";
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
      	<p><br />
        The Eclipse Foundation announced the results of the Add-in Provider and Committer elections for representatives to the board of directors. 
        <br/><br/>Congratulations to Tracy Ragan, Mike Taylor and Todd Williams for being re-elected, and Robert Day and Emma McGrattan as new Add-in Provider representatives. 
        <br/><br/>Chris Aniszczyk, Jeff McAffer and Ed Merks will be returning as Committer representatives, joined by the newly elected Doug Gaff and Mik Kersten.
        We&#146;re looking forward to working with you on the Eclipse Foundation Board of Directors. <br />
        <br />
        The Eclipse Foundation would also like to recognize the contributions of Eliane Fourgeau, Konstantin Komissarchik, Howard Lewis and Darin Swanson who are leaving the Eclipse Board after having served positions last year. 
		The Eclipse community owes them a great deal for their many hours of effort on behalf of the Eclipse community.
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
