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
	$pageTitle 		= "Eclipse Awards Nominations";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Type your name here";
	
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
		<h2>Current Nominations</h2>
		<p>The following is the current list of nominations for the Technology Awards.  
		Deadline for nominations is Janurary 27, 2006</p>
		<div class="homeitem3col">
			<h3>Best Open Source RCP Application</h3>
			<ul>
				<li><a href="http://www.rssowl.org">RSSOwl</a></ul>
		</div>		
		<div class="homeitem3col">

			<h3>Best Commercial RCP Application</h3>
			<ul>
				<br>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Open Source Eclipse based developer tool</h3>
			<ul>
				<li><a href="http://eclipse-cs.sourceforge.net">eclipse-cs</a>
				<li><a href="http://www.radrails.org/">RadRails</a>
				
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Commerical Eclipse based developer tool</h3>
			<ul>
				<li><a href="http://www.myeclipseide.com">MyEclipse Enterprise Workbench</a>
				<li><a href="http://www.openmake.com">OpenMake</a>
				<li><a href="http://www.cleverlance.cz/en/Products/Petra/Petra_lite/?epa">Petra</a>
				<li><a href="http://www.instantiations.com/windowbuilder">WindowBuilder Pro</a>

			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Deployment of Eclipse technology in an enterprise</h3>
			<ul>
				<br>
			</ul>
		</div>			
		<br>
		</div>

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Right column</h6>
			<ul>
				<li><a href="awards_nominations.php">Submit a nomination</a></li>
				<li><a href="technology_awards_guidelines.php">Guidelines of Technology Awards</a></li>

			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
