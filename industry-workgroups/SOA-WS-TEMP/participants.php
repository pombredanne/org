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

	<h1>Goals of the Eclipse SOA Initiative</h1>
     	<p>The goal of the proposed Industry Working Group, to be called the "Eclipse SOA Initiative", will be to define, implement and promote a common 
     	Equinox-based SOA platform including both 
     	design time and runtime components. By adopting this platform the different vendor platforms achieve interoperability. The Eclipse SOA Initiative will be 
     	the forum for collaboration between the industry players on the vendor and user side to define and deliver a common SOA platform, it will facilitate 
     	collaboration between existing SOA-related Eclipse projects, and initiate new projects based on identified un-met requirements.
     	</p>
     	<p>
     	The Eclipse SOA Initiative will focus on the following areas:
     	<ol>
     		<li>It will define and maintain requirements and a roadmap that defines a SOA platform and encourage broader participation from different solution providers. All requirements are evaluated with respect to the overarching goal of providing an interoperable SOA Platform. Requirements to integrate with technologies that are not part of the SOA Platform are considered out of scope by the SOA IWG.</li>
			<li>It will define the technical requirements for an Eclipse package "Eclipse SOA" and specify the set of relevant Eclipse projects (so called "Eclipse SOA projects") to implement these requirements. The initial set of relevant projects is listed in the appendix. This set of Eclipse SOA projects will be revised on a regular basis.</li>
			<li>It will collaborate with the Eclipse Packaging Project (EPP) to deliver an extensible Eclipse SOA package branded with a brand to be established (see 5.1.)</li>
			<li>It will create a set of best practices and extension mechanisms that simplify the use of the Eclipse SOA platform by a wide range of application developers and SOA vendors through a common set of test suites, training materials and documentation. (That may belong into the new top-level project)</li>
			<li>It will develop a consistent communication and promotion program to help raise the awareness of the Eclipse SOA platform in the software industry. </li>
			 <li>It will define measurable criteria that allow interested parties outside the Eclipse SOA Initiative to benefit from their commitment to the Eclipse SOA platform. </li>
		</ol>
		</p>

	<h1>The Eclipse SOA Initiative Charter</h1>
	<p> <a href="http://www.eclipse.org/org/industry-workgroups/soawg.php">The Eclipse SOA Initiative Proposal.</a> </p>




	<h1>About the Eclipse SOA Initiative Participants</h1>

<h2>Steering Committee Participants</h2>
<p>
				<a href="http://www.itemis.com/"><img src="itemis120.png" align="left" hspace="6" vspace="6"/></a>
itemis AG is an independent IT consulting company supporting its customers in planning, realizing and implementing of business solutions. Specializing in model driven technologies since its inception in 2003, itemis is one of the driving forces behind the well-known openArchitectureWare project and the Eclipse Modeling Project. Our team of software architects and engineers delivers leading-edge services and technologies for Eclipse and Eclipse-based modeling solutions.	
</p>		
	

<p>		
				<a href="http://www.obeo.fr/index.php?lang=en"><img src="obeo120.png"  align="left" hspace="6" vspace="6"/></a>
	OBEO We bring to our customers efficiency and improved productivity in software development. Acceleo (OpenSource MDA code generator : http://www.acceleo.org) and Obeo agility, our Application Lifecycle Management solutions, are fully based on eclipse and EMF environments, covering design, development, maintenance and re-engineering phases. Obeo is involved in several Eclipse projects (Eclipse modeling, Eclipse STP) and is leader of the EMF Compare project (http://www.eclipse.org/emft/projects/compare/).
</p>


<p>		
				<a href="http://www.sopera.de/en/home/"><img src="sopera120.gif"  align="left" hspace="6" vspace="6"/></a>
Sopera GmbH is a service provider dedicated solely to the SOA strategy. The managing director of the Bonn-based IT company is Dr. Ricco Deutscher, former McKinsey technology expert and experienced software company founder. The company emerged from an SOA development unit attached to Deutsche Post, the latter having begun work on a service-oriented platform (SOP) as early as 2000. Founded in March 2007 and now independent of Deutsche Post, Sopera GmbH continues to work in close partnership with the logistics player. Focus of operations is the ongoing joint development of the SOA framework SOPERA. This software was created by an in-house development team at Deutsche Post and relies on open standards and modular components.
</p>

<h2>Member Participants</h2>
<p>	<a href="http://www.softwareag.com/corporate/default.asp"><img src="softwareag120.png" align="left" hspace="6" vspace="6"/></a>
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
