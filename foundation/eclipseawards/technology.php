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
	$pageTitle 		= "Eclipse Technology Awards Nominations";
	$pageKeywords	= "eclipse, awards, technology, nomination, eclipsecon";
	$pageAuthor		= "Lynn Gayowski";
	
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
		
		<p>
			The following is a list of nominations submitted for the Technology Awards.  Nominations close on January 30, 2009.
		</p>
		
		<div class="homeitem3col">
			<h3>Best Commerical Eclipse-Based Developer Tool</h3>
			<ul>
				<li><a href="http://www.eclipse.org"> </a></li>		
			</ul>
		</div>
				
		<div class="homeitem3col">
			<h3>Best Open Source Eclipse-Based Developer Tool</h3>
			<ul>
				<li><a href="http://www.eclipse.org"> </a></li>		
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Best Commercial Equinox Application</h3>
			<ul>
				<li><a href="http://www.eclipse.org"> </a></li>	
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Best Open Source Equinox Application</h3>
			<ul>
				<li><a href="http://www.eclipse.org"> </a></li>			
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Best Commercial RCP Application</h3>
			<ul>
				<li><a href="http://www.eclipse.org"> </a></li>	
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Best Open Source RCP Application</h3>
			<ul>
				<li><a href="http://www.eclipse.org"> </a></li>			
			</ul>
		</div>
	<br><br>	
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>
				<li><a href="technology.php">Technology Nominations</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>