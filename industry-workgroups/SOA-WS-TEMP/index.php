<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();	$theme = "Phoenix"; include($App->getProjectCommon());   # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 	 	Nathan Gervais
	# Date:			2008-04-21
	#
	# Description: Ganymede Landing Page
	#
	#****************************************************************************
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "SOA Initiative";
	$pageKeywords	= "eclipse pulsar, mobile, working group";
	$pageAuthor		= "Eclipse Foundation, Inc.";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	include('newsfeeds.php');
	$sopera =  rss_to_small_news_html("sopera.rss", 2);	
	# Place your html content in a file called content/en_pagename.php
	ob_start();
	?>	
	<div id="fullcolumn" class="galileo">

		<div id="midcolumn">
			<div id="banner">
				<img src='eclipsesoa.png'/>
			</div>
			<p class="description">
			Eclipse SOA Platform is a runtimes and tools integration platform for SOA developers. It makes easy 
			to get the environment you need for developing and executing SOA.</P>


			<div class="homeitem">
				<div class="block">
					<div class="image">
						<a href=""><img src="http://dev.eclipse.org/huge_icons/actions/go-bottom.png"/></a>
					</div>
					<div class="text">
						<h4><a href="http://www.eclipse.org/downloads/">Download</a></h4>
						<p>Download the SOA IWG Package</p> 
					</div>
				</div>	
				

				<div class="block">
					<div class="image">
						<a href="./gettingstarted.php"><img src="http://dev.eclipse.org/huge_icons/emblems/emblem-symbolic-link.png"/></a>
					</div>
					<div class="text">
						<h4><a href="quickinstall/">Getting Started</a></h4>
						<p>Quick install instructions</p> 
					</div>
				</div>
		
						
				<div class="block">
					<div class="image">
						<a href="./participants.php"><img src="http://dev.eclipse.org/huge_icons/categories/applications-internet.png"/></a>
					</div>
					<div class="text">
						<h4><a href="./participants.php">SOA Initiative Consortium</a></h4>
						<p>About the SOA Initiative and Participants</p> 
					</div>
				</div>
				
				<div class="block">
					<div class="image">
						<a href=""><img src="http://dev.eclipse.org/huge_icons/apps/system-users.png"/></a>
					</div>
					<div class="text">
						<h4><a href="./support.php">Community, Support and Service</a></h4>
						<p>Looking for help?  Want more?</p> 
					</div>
				</div>

			
			</div>
		</div>
		
		
		
		<div id="rightcolumn">
		<p><h2>Initiative Members<h2></p>
		
			<div class="sideitem">
				<a href="http://www.itemis.com/"><img src="itemis120.png"/></a>
			</div>
			
			
			<div class="sideitem">
				<a href="http://www.obeo.fr/index.php?lang=en"><img src="obeo120.png"/></a>
			</div>
			

			<div class="sideitem">
				<a href="http://www.softwareag.com/corporate/default.asp"><img src="softwareag120.png"/></a>
			</div>
			
			
			<div class="sideitem">
				<a href="http://www.sopera.de/en/home/"><img src="sopera120.gif"/></a>
			</div>



		</div>	
	</div>
	<?
	$html = ob_get_clean();
	# Generate the web page
	$App->Promotion = TRUE;
	$App->AddExtraHtmlHeader('<link type="text/css" href="style.css" rel="stylesheet"/>');
	$App->generatePage("Nova", $Menu, NULL, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>