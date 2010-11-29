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
	$pageTitle 		= "Eclipse Community Awards";
	$pageKeywords	= "eclipse, awards, community, nomination, eclipsecon, 2011";
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
			The Eclipse Community Awards recognize the best of the Eclipse community.
		</p>
		
		<h3>Individual Awards</h3>	
		<h4>Description</h2>
		<h4><a href="nominatenew.php">Nominate</a></h2>
		<h4><a href="individual.php">Current Nominees</a></h2>
		<h4>Past Winners</h2>
		
		<h3>Project Awards</h3>
		<h4>Description</h2>
		<h4><a href="nominatenew.php">Nominate</a></h2>
		<h4><a href="project.php">Current Nominees</a></h2>
		<h4>Past Winners</h2>
		
		<h3>Technology Awards</h3>
		<h4>Description</h2>
		h4><a href="nominatenew.php">Nominate</a></h2>
		<h4><a href="technology.php">Current Nominees</a></h2>
		<h4>Past Winners</h2>		
			
		<h3>Important Dates</h3>
		<p>
			<ul>
				<li><font color="#A9A9A9">Nominations open - December 6, 2010</font></li>
				<li>Nominations close - January 28, 2011</font></li>
				<li>Voting begins for Individual & Project Awards - January 31, 2011</font></li>
				<li>Voting ends for Individual & Project Awards - February 25, 2011 at 5:00 pm EST</font></li>
				<li>Awards Announced at EclipseCon 2010 - March 21, 2011</li>
			</ul>
		</p>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="indexnew.php">Eclipse Community Awards</a></li>
				<li><a href="nominatenew.php">Make a Nomination</a></li>
				<li><a href="individual.php">Individual Nominees</a></li>
				<li><a href="project.php">Project Nominees</a></li>
				<li><a href="technology.php">Technology Nominees</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>	
			</ul>
		</div>
		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>