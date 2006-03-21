<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_3col.php
	#
	# Author: 		Denis Roy
	# Date:			2005-11-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Community Awards Judges";
	$pageKeywords	= "eclipse, foundation, community, award, winners, 2006, judges";
	$pageAuthor		= "Nathan Gervais";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<h2>Open Source Award Judges</h2>
		<p>Presented below is the list of judges for the Eclipse 2006 Community Awards</p>
		<div class="homeitem3col">
			<h3>Open Source Awards</h3>
			<ul>
				<li>Kai-Uwe Maetzel - IBM and Eclipse Platform Project</li>
				<li>Ed Burnette - SAS</a></li>
				<li>Kevin Haaland - IBM and Eclipse Platform Project</li>
				<li>Doug Schaefer - QNX and Eclipse CDT Project</li>
				<li>Richard Gronback - Borland and GMF Project</li>
				<li>Wenfeng Li - Actuate and BIRT Project</li>
			</ul>
		</div>		
		<div class="homeitem3col">
			<h3>Commercial Product Awards</h3>
			<ul>
				<li>Jean-Pierre Laisne - ObjectWeb</li>
				<li>Mik Kersten - Eclipse Mylar Project</li>
				<li>Bill Dudney - Eclipse Developer Journal</li>
				<li>Philippe Ombredame - Eclipse TechForge / NexB </li>
				<li>Alan Zeichick - BZ Media</li>
				<li>Don Dingee - Embedded Computing Design</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Deployment Awards</h3>
			<ul>
				<li>Todd Williams - Genuitec</li>
				<li>Wayne Beaton - Eclipse Foundation</li>
			</ul>
		</div>

	
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="winners.php">Award Winners</a></li>
				<li><a href="judges.php">Judges</a></li>
				<li><a href="index.php">Explanation of Awards Categories</a></li>				
			</ul>
		</div>
	</div>


<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>