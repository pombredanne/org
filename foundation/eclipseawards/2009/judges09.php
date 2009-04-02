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
	$pageTitle 		= "Eclipse Community Awards Judges 2009";
	$pageKeywords	= "eclipse, foundation, community, award, winners, 2009, judges";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<p>Presented below is the list of Technology Awards judges for the 2009 Eclipse Community Awards.</p>
		<div class="homeitem3col">
			<h3>Commercial Awards</h3>
			<ul>
				<li>Alex Blewitt - InfoQ</li>
				<li>Michael Cot&eacute; - RedMonk</li>
				<li>Don Dingee - Embedded Computing Design</li>
				<li>James Sugrue - DZone</li>
				<li>Jeffrey Hammond - Forrester Research</li>
				<li>Peter Varhol - TechTarget</li>
				<li>Alan Zeichick - BZ Media</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Open Source Awards</h3>
			<ul>
				<li>Chris Aniszczyk - Plugin Development Environment (PDE) Project</a></li>
				<li>Rob Elves - Mylyn Project</li>
				<li>Kenn Hussey - Modeling Project</li>
				<li>Markus Knauer - g-Eclipse &amp; Packaging Projects</li>
				<li>Carlos Sanchez - Integration for Apache Maven (IAM) Project</li>
				<li>Tom Schindl - Nebula Project</li>
				<li>Gunnar Wagenknecht - Gyrex Project</li>
				<li>Greg Watson - Parallel Tools Platform (PTP) Project</li>
				<li>David Williams - Web Tools Project</li>	
			</ul>
		</div>		
	
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="winners09.php">2009 Winners</a></li>
				<li><a href="individual.php">Individual Nominations</a></li>
				<li><a href="technology.php">Technology Nominations</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>

			</ul>
		</div>


	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>