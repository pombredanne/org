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

	<h1>About the Eclipse SOA Initiative</h1>



	<h1>About the Eclipse SOA Initiative Participants</h1>

<h2>Steering Committee Participants</h2>
<p>
				<a href="http://www.itemis.com/"><img src="itemis120.png"/></a>
itemis AG is an independent IT consulting company supporting its customers in planning, realizing and implementing of business solutions. Specializing in model driven technologies since its inception in 2003, itemis is one of the driving forces behind the well-known openArchitectureWare project and the Eclipse Modeling Project. Our team of software architects and engineers delivers leading-edge services and technologies for Eclipse and Eclipse-based modeling solutions.	
</p>		
	

<p>		
				<a href="http://www.obeo.fr/index.php?lang=en"><img src="obeo120.png"/></a>
	OBEO We bring to our customers efficiency and improved productivity in software development. Acceleo (OpenSource MDA code generator : http://www.acceleo.org) and Obeo agility, our Application Lifecycle Management solutions, are fully based on eclipse and EMF environments, covering design, development, maintenance and re-engineering phases. Obeo is involved in several Eclipse projects (Eclipse modeling, Eclipse STP) and is leader of the EMF Compare project (http://www.eclipse.org/emft/projects/compare/).
</p>


<p>		
				<a href="http://www.sopera.de/en/home/"><img src="sopera120.gif"/></a>
Sopera GmbH is a service provider dedicated solely to the SOA strategy. The managing director of the Bonn-based IT company is Dr. Ricco Deutscher, former McKinsey technology expert and experienced software company founder. The company emerged from an SOA development unit attached to Deutsche Post, the latter having begun work on a service-oriented platform (SOP) as early as 2000. Founded in March 2007 and now independent of Deutsche Post, Sopera GmbH continues to work in close partnership with the logistics player. Focus of operations is the ongoing joint development of the SOA framework SOPERA. This software was created by an in-house development team at Deutsche Post and relies on open standards and modular components.
</p>

<h2>Member Participants</h2>
<p>	<a href="http://www.softwareag.com/corporate/default.asp"><img src="softwareag120.png"/></a>
Software AG is a global leader in mission-critical software infrastructure and advanced Service-Oriented Architecture 
(SOA) solutions.</p></p>

	</div>	

	<?
	$html = ob_get_clean();
	# Generate the web page
	$App->Promotion = TRUE;
	$App->AddExtraHtmlHeader('<link type="text/css" href="style.css" rel="stylesheet"/>');
	$App->generatePage("Nova", $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
