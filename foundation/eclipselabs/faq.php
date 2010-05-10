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
	$pageTitle 		= "Eclipse Labs FAQ";
	$pageKeywords	= "eclipse, labs, faq";
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
		
		<b>DRAFT Proposal.  NOT FOR PUBLIC LINKING</b><br>
		
<ol>
	<li><b>What is Eclipse Labs?</b> <br><br>

	<p>Eclipse Labs is a community of open source projects that build technology based on the Eclipse platform.   It provides the infrastructure services 
	typically  required by open source projects, such as code repositories, bug tracking, project web sites/wiki.  Eclipse Labs is hosted by 
	Google Code Project Hosting, so it will be very familiar to developers already using Google Code Project Hosting.
	</p></li>
	
	<li><b>I have a technical questions about Eclipse Labs.  How do I get support?</b><br><br>
	
	<p>Please contact the normal Google Code Project Hosting support channels.  Help is available at <a href="http://code.google.com/p/support/">code.google.com/p/support/</a>	

	<li><b>Are projects on Eclipse Labs official Eclipse projects?</b><br><br>

	<p>No, Eclipse Labs projects are not official Eclipse Foundation projects.   Eclipse Labs projects are not hosted by the
	Eclipse Foundation and do not have to follow the Eclipse Foundation development and intellectual property policies. </p>

	<p>There are a number of things Eclipse Labs projects can <b>not</b> do since they are not official Eclipse Foundation projects, 
	including 1) include the word Eclipse in their name, 2) use the org.eclipse namespace for their bundles names, or 3) participate in the 
	annual Eclipse release trains, unless they are included in an official Eclipse project.</p>
	</li>
	
	<li><b>What are the rules of hosting a project on Eclipse Labs?<b></br></br>
	
	<p>All projects hosted on Eclipse Labs agreed to the standard Google Code Project Hosting <a href="http://code.google.com/projecthosting/terms.html">terms of use</a> and 
	the <a href="http://eclipse.org/org/foundation/eclipselabs/guidelines.php"Eclipse Labs User Guidelines.</a>

	<li><b>When should I consider using Eclipse Labs vs starting a project at the Eclipse Foundation?</b><br><br>

	<p>There are a number of benefits and obligations for hosting a project at the Eclipse Foundation.   The benefits for your project include:
	<ul><li>more exposure with the Eclipse community through the eclipse.org web site, newsgroupgs, Eclipse conferences, etc.   This may make it easy for you to build a community of users and contributors.
	<li>official recognition as an Eclipse project, so you can use the org.eclipse namespace and use Eclipse in your project name.   This strong association with the Eclipse brand maybe important to some organizations and individuals.
	<li>potential to be included in the annual Eclipse release train.  As a result, the project can be included in any of the packages that are visible on the eclipse.org download page.  This will expand the distribution and potential user community for your project.
	<li>participating in the Eclipse IP due diligence process, an important check for some downstream consumers of open source technology.
	</ul></p>

	<p>The obligations for being an Eclipse Foundation project may increase the effort and decrease the flexibility of starting an open 
	source project.   Eclipse Labs has been established for projects that don't want to come under the process and rules of the Eclipse 
	Foundation but still want to be part of the greater Eclipse community.   We would recommend projects starting on Eclipse Labs if one or 
	more of the factors pretain to your project:
	<ul><li>the project is experimental and the committers are not sure of the future direction.
	<li>the project is very new with a limited community.
	<li>the committers are new to open source with not a lot of experience leading an open source project.
	<li>the project is targeted at a small niche and might not benefit from the wider exposure of being an Eclipse Foundation project.
	</ul></p></li>

	<li><b>Is it possible for an Eclipse Labs project to become an Eclipse Foundation project?</b><br><br>

	<p>Yes.  In fact we hope some projects will start at Eclipse Labs, build a community and technology, then eventually migrate to the 
	Eclipse Foundation.  If you believe at one time you will want to move your project to the Eclipse Foundation we suggest you ensure 
	that 1) you keep track of all contributions and ensure they are contributed under the EPL.  2) do not include or link to any code that is 
	licensed under the GPL. Unfortunately, that license is incompatible with the EPL. You should also be aware that there are important 
	restrictions on the use and distribution of LGPL code by Eclipse projects.</p></li>

	<li><b>I have an existing project on Google Code, can I migrate it to Eclipse Labs?</b><br><br>

	<p>Google is providing the ability to migrate existing projects to Eclipse Labs.   Details are at [url]</p></li>

	<li><b>Why can't I use Git?</b><br><br>

	<p>Google Code Project Hosting only provide support for Subversion and Mercurial.  Eclipse Labs is hosted at Google Code Project Hosting
	 so we use their code managements systems.</p></li>

	<li><b>Why is the open source license selection restricted to EPL or Apache 2.0, MIT License, Mozilla Public
	License or New BSD.</b><br><br>

	<p>Projects hosted at Eclipse Labs are expected to be Eclipse plugins or built with Eclipse technology.  Therefore, the open source license you choose must be compatible with the Eclipse
	Public Licenese (EPL).   These licenses are the compatible licenses available at Google Code Project Hosting.</p>
		

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
