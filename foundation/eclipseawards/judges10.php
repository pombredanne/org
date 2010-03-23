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
	$pageTitle 		= "Eclipse Community Awards Judges 2010";
	$pageKeywords	= "eclipse, foundation, community, award, winners, 2010, judges";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
	$html = <<<EOHTML
	
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<p>Presented below is the list of Technology Awards judges for the 2010 Eclipse Community Awards.</p>

			<h3>Best Commercial and Open Source Developer Tool Awards</h3>
			<ul>
				<li>Don Dingee - Embedded Computing Design</li>
				<li>Sven Efftinge - itemis & Textual Modeling Framework (TMF) Project</li>
				<li>Daniel Ford - IBM & Spatiotemporal Epidemiological Modeler (STEM) Project</li>
				<li>Jeffrey Hammond - Forrester Research</li>
				<li>Markus Knauer - EclipseSource & g-Eclipse and Packaging Projects</li>
				<li>Daniel Megert - IBM & Java Development Tools (JDT) Project</li>
				<li>Greg Watson - IBM & Parallel Tools Platform (PTP) Project</li>

			</ul>

			<h3>Best EclipseRT Award</h3>
			<ul>
				<li>Nick Boldt - Red Hat & Modeling and Athena Projects</li>
				<li>Michael Cot&eacute; - RedMonk</li>
				<li>Shaun Smith - Oracle & Dali JPA Tools Project
				<li>Alan Zeichick - BZ Media</li>
			</ul>

			<h3>Best RCP Award</h3>
			<ul>
				<li>Chris Aniszczyk - EclipseSource & Plugin Development Environment (PDE) Project</a></li>
				<li>Nick Boldt - Red Hat & Modeling and Athena Projects</li>
				<li>Michael Cot&eacute; - RedMonk</li>
				<li>Wenfeng Li - Actuate & Business Intelligence and Reporting Tools (BIRT) Project</li>
				<li>Shaun Smith - Oracle & Dali JPA Tools Project
				<li>Alan Zeichick - BZ Media</li>
			</ul>			
			
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="winners10.php">2010 Winners</a></li>
				<li><a href="judges10.php">2010 Judges</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>
				<li><a href="individual.php">Individual Nominees</a></li>
				<li><a href="project.php">Project Nominees</a></li>
				<li><a href="technology.php">Technology Nominees</a></li>
			</ul>
		</div>


	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>