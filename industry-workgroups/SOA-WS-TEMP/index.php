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
						<a href="quickinstall/"><img src="http://dev.eclipse.org/huge_icons/emblems/emblem-symbolic-link.png"/></a>
					</div>
					<div class="text">
						<h4><a href="quickinstall/">Getting Started</a></h4>
						<p>How to choose, install and configure your package</p> 
					</div>
				</div>
				<div class="block">
					<div class="image">
						<a href=""><img src="http://dev.eclipse.org/huge_icons/actions/go-bottom.png"/></a>
					</div>
					<div class="text">
						<h4><a href="http://www.eclipse.org/downloads/">Download</a></h4>
						<p>Download the package that suits your needs.</p> 
					</div>
				</div>			
						
				<div class="block">
					<div class="image">
						<a href="./participants.php"><img src="http://dev.eclipse.org/huge_icons/categories/applications-internet.png"/></a>
					</div>
					<div class="text">
						<h4><a href="./participants.php">SOA Initiative Participants</a></h4>
						<p>More about the SOA Initiative Participants</p> 
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

			<div class="sideitem">
				<a href="http://www.itemis.com/"><img src="itemis120.png"/></a>
				<div class="modal noBG">
					<ul>
						<li class=""> 
						<a href="http://www.itemis.com/itemis-ag/language=en/2638/research" class="link">Research on Model Driven Software</a><br/>
						<span class="posted">2009/08/30</span>
						</li>
						<li class=""> 
						<a href="http://www.itemis.com/itemis-ag/language=en/2642/education-and-coaching" class="link">Education and Coaching</a><br/>
						<span class="posted">2009/08/30</span>
						</li>
					</ul>
				</div>
			</div>
			
			
			<div class="sideitem">
				<a href="http://www.obeo.fr/index.php?lang=en"><img src="obeo120.png"/></a>
				<div class="modal noBG">
					<ul>
						<li class=""> 
						<a href="http://www.obeo.fr/pages/mda-and-productivity/en" class="link">MDA and Productivity</a><br/>
						<span class="posted">2009/08/30</span>
						</li>
						<li class=""> 
						<a href="http://www.obeo.fr/pages/acceleo/en" class="link">Transforming Models</a><br/>
						<span class="posted">2009/08/30</span>
						</li>
					</ul>
				</div>
			</div>
			

			<div class="sideitem">
				<a href="http://web.progress.com/index.html"><img src="progress120.gif"/></a>
				<div class="modal noBG">
					<ul>
						<li class=""> 
						<a href="http://web.progress.com/products/products.html" class="link">Capabilities to Power your Progress</a><br/>
						<span class="posted">2009/08/30</span>
						</li>
						<li class=""> 
						<a href="http://web.progress.com/solutions/solutions.html" class="link">Business Event Processing</a><br/>
						<span class="posted">2009/08/30</span>
						</li>
					</ul>
				</div>
			</div>
			
			
			<div class="sideitem">
				<a href="http://www.sopera.de/en/home/"><img src="sopera120.gif"/></a>
				<div class="modal noBG">
					<ul>
						<li class=""> 
						<a href="http://www.sopera.de/en/community/eclipse-soa-initiative/" class="link">SOA at Eclipse</a><br/>
						<span class="posted">2009/08/30</span>
						</li>
						<li class=""> 
						<a href="http://www.sopera.de/en/downloads/sopera-asf-32/ " class="link">Sopera Downloads</a><br/>
						<span class="posted">2009/08/30</span>
						</li>
					</ul>
				</div>
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