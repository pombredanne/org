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
		<p>Presented below is the list of Technology Awards judges for the 2008 Eclipse Community Awards.</p>
		<div class="homeitem3col">
			<h3>Commercial Awards</h3>
			<ul>
				<li>Judge 1 - Company</li>
				<li>Judge 2 - Company</li>
				<li>Judge 3 - Company</li>
				<li>Judge 4 - Company</li>
				<li>Judge 5 - Company</li>
				<li>Judge 6 - Company</li>
				<li>Judge 7 - Company</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Open Source Awards</h3>
			<ul>
				<li>Judge 1 - Project</li>
				<li>Judge 2 - Project</a></li>
				<li>Judge 3 - Project</li>
				<li>Judge 4 - Project</li>
				<li>Judge 5 - Project</li>
				<li>Judge 6 - Project</li>
				<li>Judge 7 - Project</li>
			</ul>
		</div>		
	
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="index.php">Explanation of Awards Categories</a></li>
				<li><a href="individual_awards_guidelines.php">Guidelines for Individual Awards</a></li>
				<li><a href="technology_awards_guidelines.php">Guidelines for Technology Awards</a></li>
			</ul>
		</div>
	</div>


<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>