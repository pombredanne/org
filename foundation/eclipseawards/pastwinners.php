<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_list.php
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
	$pageTitle 		= "Past Winners of the Eclipse Awards";
	$pageKeywords	= "eclipse, awards, individual, technology, nomination, eclipsecon";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<p>
			Congratulations to all past winners of the Eclipse Community Awards.
		</p>
		
		<h3>Past Winners by Category</h3>
		<ul class="midlist">
			<li><a href="winners_lifetime.php">Lifetime Award Winners</a></li>
			<li><a href="winners_individual.php">Individual Award Winners</a></li>
			<li><a href="winners_project.php">Project Award Winners</a></li>
			<li><a href="winners_technology.php">Technology Award Winners</a></li>
		</ul>		
		
		<h3>Past Winners by Year</h3>
		<ul class="midlist">
			<li><a href="winners11.php">2011 Award Winners</li>
			<li><a href="winners10.php">2010 Award Winners</li>
			<li><a href="winners09.php">2009 Award Winners</li>
			<li><a href="winners08.php">2008 Award Winners</li>
			<li><a href="winners07.php">2007 Award Winners</li>
			<li><a href="winners06.php">2006 Award Winners</li>
		</ul>
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
			</ul>
		</div>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
