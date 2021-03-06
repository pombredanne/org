<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "Eclipse Development Process";

ob_start();
?>
<div id="maincontent">
<div id="midcolumn">

<p>The current Eclipse Development Process is now <a href="/projects/dev_process/development_process.php">located here</a>.
<p>The original (and now superseded) document is located <a href="Eclipse Development Process 2003_11_09 FINAL_old.php">here</a>.

</div><!-- midcolumn -->

</div><!-- maincontent -->
<?php
	# Paste your HTML content between the EOHTML markers!	
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
