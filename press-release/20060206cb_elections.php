<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Elections";
	$pageKeywords	= "Eclipse Foundation, foundation, governance, board, elections";
	$pageAuthor		= "Type your name here";
	
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
<h2 ALIGN="CENTER">Eclipse Foundation Board Representative Elections</h2>
	Voting for the Eclipse Foundation Board Representative Elections for the committer and 
	add-in provider communities begins on February 13th.   Please review the <a href="http://www.eclipse.org/org/elections/nominees.php">
	candidates' statements</a> and participate in discussions on the eclipse.foundation newsgroup 
	(<a href="news://news.eclipse.org/eclipse.foundation">news</a>, <a href="/newsportal/thread.php?group=eclipse.foundation">html</a>).  
	You'll find more information about the election process on the <a href="http://www.eclipse.org/org/elections/">elections page</a>. 
	Remember, voting ends on February 24th.   <br /> <br /> <br /><br /> <br /> <br />
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
