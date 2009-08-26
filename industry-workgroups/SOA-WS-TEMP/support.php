<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();	$theme = "Phoenix"; include($App->getProjectCommon());   # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 	 	Ian Skerrett
	# Date:			2008-06-18
	#
	# Description: Pulsar Support Page
	#
	#****************************************************************************
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Pulsar - Eclipse Mobile Tools Platform";
	$pageKeywords	= "eclipse pulsar, mobile, working group";
	$pageAuthor		= "Eclipse Foundation, Inc.";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#

	# Place your html content in a file called content/en_pagename.php
	ob_start();
	?>	
	<div id="midcolumn">


			<h1>Looking for Pulsar Support?  </h1>
			<h2>Try one of these discussion forums.</h2>
			<ol>
				<li>Questions Specific to Pulsar</li>
				<p><a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.wg.pulsar">Pulsar Newsgroup</a></p>
				<li>Questions specific to a particular SDK try the following discussion forums:<br/>
					<ul>
						<li><a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.ercp">Eclipse eRCP</a>
						<li><a href="http://community.developer.motorola.com/mtrl/">MOTODEV Discussion Forum</a>
						<li><a href="http://discussion.forum.nokia.com/forum/index.php">Nokia Forum Discussion Forum</a>
					</ul>
					</p>
			</ol>
	</div>	

	<?
	$html = ob_get_clean();
	# Generate the web page
	$App->Promotion = TRUE;
	$App->AddExtraHtmlHeader('<link type="text/css" href="style.css" rel="stylesheet"/>');
	$App->generatePage("Nova", $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
