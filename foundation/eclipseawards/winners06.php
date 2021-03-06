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
	$pageTitle 		= "Eclipse Community Award Winners 2006";
	$pageKeywords	= "eclipse, foundation, community, award, winners, 2006";
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
<link rel="stylesheet" type="text/css" href="layout.css" media="screen" />
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<h2>Individual Award Winners</h2>
		<p>Presented below is the list of award winners and finalists for each of the individual awards catagories.</p>
		<div class="homeitem3col">
			<h3>Top Ambassador</h3>
			<ul>
				<li class="winner"><b>Ed Burnette (Winner)</b></li>
				<li class="finalist">Erich Gamma</li>
				<li class="finalist">Pat McCarthy</li>				
			</ul>
		</div>		
		<div class="homeitem3col">

		<div class="homeitem3col">
			<h3>Top Committer</h3>
			<ul>
				<li class="winner"><b>Alain Magloire (Winner)</b></li>
				<li class="finalist">Ed Merks</li>
				<li class="finalist">Jeff McAffer</li>				
			</ul>
		</div>

			<h3>Top Contributor</h3>
			<ul>
				<li class="winner"><b>Linda Watson (Winner)</b></li>
				<li class="finalist">Gunnar Wagenknecht</li>
				<li class="finalist">Mik Kersten</li>
			</ul>
		</div>

	<h2>Technology Award Winners</h2>
		<p>Presented below is the list of award winners and finalists for each of the technology awards catagories.</p>
		<div class="homeitem3col">
		<h3>Best Deployment of Eclipse Technology in an Enterprise</h3>
			<ul>
				<li class="winner"><a href="http://www.ji.co.za"><b>Compass Group Southern Africa via Jigsaw Interactive</a> (Winner)</b></li>
			</ul>
		</div>		
		<div class="homeitem3col">
		<h3>Best Commerical Eclipse-Based Developer Tool</h3>
			<ul>
				<li class="winner"><a href="http://www.bea.com/framework.jsp?CNT=index.htm&FP=/content/products/workshop/studio/"><b>BEA Workshop Studio 3.0</a> (Winner)</b></li>
				<li class="finalist"><a href="http://www.exadel.com/web/portal/products">Exadel Studio Pro 3.5</a></li>
				<li class="finalist"><a href="http://www.qnx.com/products/development/">QNX Momentics Development Suite Professional Edition</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Open Source Eclipse-Based Developer Tool</h3>
			<ul>
				<li class="winner"><a href="http://www.radrails.org/"><b>RadRails</a> (Winner)</b></li>	
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Commercial RCP Application</h3>
			<ul>
				<li class="winner"><a href="http://www.lombardisoftware.com/bpm-software-teamworks.php"><b>Lombardi Software TeamWorks</a> (Winner)</b></li>
				<li class="finalist"><a href="http://www.logicmindguide.com/demo.htm ">Logic MindGuide - Plan&Decide</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Open Source RCP Application</h3>
			<ul>
				<li class="winner"><a href="http://gumtree.sourceforge.net/"><b>Gumtree</a> (Winner)</b></li>
				<li class="finalist"><a href="http://udig.refractions.net/">User-friendly Desktop Internet GIS (uDig)</a></li>
			</ul>
		</div>

		<br /><br />
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>