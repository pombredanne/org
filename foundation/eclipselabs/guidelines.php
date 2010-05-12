<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# guidlines.php
	#
	# Author: 		Ian Skerrett
	# Date:			2005-11-07
	#
	# Description: These are the guidelines for Eclipse Labs, a site hosted by Google in collaboration with the Eclipse Foundation.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Labs User Guidelines";
	$pageKeywords	= "eclipse, labs";
	$pageAuthor		= "Ian Skerrett";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		Date: May 13, 2010<br><br><br>
		
		<P>Welcome to <a href="http://www.eclipselabs.org">Eclipse Labs</a>, a place to build open source projects based on the Eclipse platform.  Eclipse Labs is a collaboration 
		between the Eclipse Foundation and Google Code.  We ask all projects hosted on Eclipse Labs to respect and follow these guidelines.  
		</P>
	<ol>
	<LI>Eclipse Labs is part of Google Code.  Users of Eclipse Labs must agree to the current <a href="http://code.google.com/projecthosting/terms.html">Google Code Terms of Use</a>.
	<LI>The Eclipse Foundation supports Eclipse Labs by promoting the service to the Eclipse community.  The Eclipse Labs name is used by permission of
	the Eclipse Foundation, Inc.
	<LI>Projects hosted on Eclipse Labs are not considered official Eclipse Foundation projects. Therefore, we ask project owners to respect the 
	<a href="http://www.eclipse.org/legal/logo_guidelines.php">Eclipse Foundation trademark guidelines</a>, including 1) not using Eclipse or an existing Eclipse project 
	name in your Eclipse Labs project name, and 2) not using org.eclipse as the prefix for your bundle or package name.  We would encourage you to use
	org.eclipselabs as your namespace.  In general, projects hosted on Eclipse Labs should not portray themselves as
	official Eclipse Foundation projects.
	<LI>Projects hosted on Eclipse Labs are expected to be either Eclipse plugins or built using Eclipse technology.  Therefore, the open source license for
	your project must be the Eclipse Public License (EPL) or one of	these compatible license: Apache 2.0, MIT License, Mozilla Public
	License or New BSD.
	<LI>We expect some projects on Eclipse Labs will eventually move to become Eclipse Foundation projects.  If you wish for this option to be available to
	your project we suggest you do the following: a) select the EPL as your initial license, b) keep track of all contributions and ensure
	they are contributed under the EPL.  c) do not include or linked to any code that is licensed under GPL and LGPL.  Unfortunately, those licenses are
	not approved for use by Eclipse projects.  
	
	<LI>Each Eclipse Labs project is encouraged to list their project on the <a href="http://marketplace.eclipse.org/">Eclipse Marketplace</a>.  
	We also suggest each project to publish an update site and complete the project tagging information available on Eclipse Labs.
</OL>
		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
