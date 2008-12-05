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
				<li>Ed Burnette <b>(Winner)</b></a>
				<li class="finalist">Erich Gamma <b>(Finalist)</b></a>
				<li class="finalist">Pat McCarthy <b>(Finalist)</b></a>				
				<br>
			</ul>
		</div>		
		<div class="homeitem3col">

			<h3>Top Contributor</h3>
			<ul>
				<li>Linda Watson <b>(Winner)</b></a>
				<li class="finalist">Gunnar Wagenknecht <b>(Finalist)</b></a>
				<li class="finalist">Mik Kersten <b>(Finalist)</b></a>
				<br>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Top Committer</h3>
			<ul>
				<li>Alain Magliore <b>(Winner)</b></a>
				<li class="finalist">Ed Merks <b>(Finalist)</b></a>
				<li class="finalist">Jeff McAffer <b>(Finalist)</b></a>				
			</ul>
		</div>

	<h2>Technology Award Winners</h2>
		<p>Presented below is the list of award winners and finalists for each of the technology awards catagories.</p>
		<div class="homeitem3col">
			<h3>Best Open Source RCP Application</h3>
			<ul>
				<li><a href="http://gumtree.sourceforge.net/">Gumtree <b>(Winner)</b></a>
				<li class="finalist"><a href="http://udig.refractions.net/">User-friendly Desktop Internet GIS (uDig) <b>(Finalist)</b></a>
				<br>
			</ul>
		</div>		
		<div class="homeitem3col">

			<h3>Best Commercial RCP Application</h3>
			<ul>
				<li><a href="http://www.lombardisoftware.com/bpm-software-teamworks.php">Lombardi Software TeamWorks <b>(Winner)</b></a>
				<li class="finalist"><a href="http://www.logicmindguide.com/demo.htm ">Logic MindGuide - Plan&Decide  <b>(Finalist)</b></a>
				<br>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Open Source Eclipse based developer tool</h3>
			<ul>
				<li><a href="http://www.radrails.org/">RadRails <b>(Winner)</b></a>	
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Commerical Eclipse based developer tool</h3>
			<ul>
				<li><a href="http://www.bea.com/framework.jsp?CNT=index.htm&FP=/content/products/workshop/studio/">BEA Workshop Studio 3.0 <b>(Winner)</b></a>
				<li class="finalist"><a href="http://www.exadel.com/web/portal/products">Exadel Studio Pro 3.5  <b>(Finalist)</b></a>
				<li class="finalist"><a href="http://www.qnx.com/products/development/">QNX Momentics Development Suite Professional Edition <b>(Finalist)</b></a>
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Deployment of Eclipse technology in an enterprise</h3>
			<ul>
				<li><a href="http://www.ji.co.za">Compass Group Southern Africa via Jigsaw Interactive <b>(Winner)</b></a>
				<br>
			</ul>
		</div>			
		<br />
		<a href="technology_nominations.php">A complete list of the nominees for 2006 Technology Awards can be found here.</a>
		<br /><br />
		</div>
	
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->


<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>