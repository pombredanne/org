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
	$pageTitle 		= "SOA Initiative";
	$pageKeywords	= "eclipse soa, soa, working group";
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


	<p></p>
	

			<h1>Download the Eclipse SOA Platform</h1>
			<h2>Download from Eclipse.org</h2>
			<p><a href="http://www.eclipse.org/downloads/packages/eclipse-soa-platform-java-and-soa-developers/galileosr1">
			
			<img src="/downloads/images/soa.jpg" align="left" style="padding:8px;"> 
			Eclipse SOA Platform for Java and SOA Developers (137 MB)</a>  
			<br>Eclipse SOA Platform is a runtimes and tools integration platform for SOA developers. It makes 
			easy to get the environment you need for developing and executing SOA. It includes a Java IDE, 
			Swordfish Tooling, the Plugin Development Environment (PDE), an XML Editor and a WSDL Editor.</p>

			<h2>Customized Packages from Working Group Participants</h2>
			<p> COMING SOON! </p>

			<h2>Get it faster from a Member Distros</h2>
			<p>  

		<table class="contentTable">
		<tr class='tableData'>
		<td valign='top'><a href='http://eclipse.org/go/DISTRO_SOPERA_GALILEO@IWGPAGE'>
		<img class='distrologo' src='/downloads/distros/images/sopera64x64.png' align='left' /></a>
		</td><td valign='top'><a href='http://eclipse.org/go/DISTRO_SOPERA_GALILEO@IWGPAGE'>
		<b>SOPERA</b></a><br />Fast and free download of Eclipse Galileo powered by SOPERA, Specialist 
		for Eclipse-based SOA Solutions.</td></tr>
		</table>
			
			</p>

	</div>	

	<?
	$html = ob_get_clean();
	# Generate the web page
	$App->Promotion = TRUE;
	$App->AddExtraHtmlHeader('<link type="text/css" href="style.css" rel="stylesheet"/>');
	$App->generatePage("Nova", $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
