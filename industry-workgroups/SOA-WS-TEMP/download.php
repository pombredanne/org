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
			<p>Choose from a package hosted at Eclipse.org, one of our participating member distros, or from a 
			a customized package including additional software from one of the working group participants.</p>
			
			<h2>Download from eclipse.org</h2>
			<p><a href="http://www.eclipse.org/downloads/packages/eclipse-soa-platform-java-and-soa-developers/galileosr1">
			
			<img src="/downloads/images/soa.jpg" align="left" style="padding:12px;"> 
			Eclipse SOA Platform for Java and SOA Developers (137 MB)</a>  
			<br>Eclipse SOA Platform is a runtimes and tools integration platform for SOA developers. It makes 
			it easy to get the environment you need for developing and executing SOA. It includes a Java IDE, 
			Swordfish Tooling, the Plugin Development Environment (PDE), an XML Editor and a WSDL Editor.</p>

			<h2>Get it faster from a Member Distro</h2>
			<p>  

		<table class="contentTable">
			<tr class='tableData'>
				<td valign='top'><a href='http://eclipse.org/go/DISTRO_SOPERA_GALILEO@IWGPAGE'>
				<img class='distrologo' src='/downloads/distros/images/sopera64x64.png' align='left' /></a>
				</td><td valign='top'><a href='http://eclipse.org/go/DISTRO_SOPERA_GALILEO@IWGPAGE'>
				<b>SOPERA</b></a><br />Download Eclipse SOA Platform and Swordfish. Try SOPERA ASF - the leading 
				Open Source SOA Platform</td>
			</tr>

			<tr class='tableData'>
				<td valign='top'><a href='http://eclipse.org/go/DISTRO_OBEO_GALILEO@IWGPAGE'>
				<img class='distrologo' src='/downloads/distros/images/obeo.png' align='left' /></a>
				</td><td valign='top'><a href='http://eclipse.org/go/DISTRO_OBEO_GALILEO@IWGPAGE'>
				<b>OBEO</b></a><br />Dedicated to modeling, providing base framework, editors, graphical 
				modelers, model to model transformation and code generation for Eclipse.</td>
			</tr>


		</table>
			</p>

			<h2>Customized Packages from Working Group Participants</h2>
			<p>
			<table>
			<tr>
				<td width=80><img src='/downloads/distros/images/obeo.png'/></td>
				<td>
					The Eclipse SOA/SCA Obeo Distro is a runtimes and tools integration platform for SOA/SCA developers.
					It includes the official 
					<a href="http://www.eclipse.org/downloads/packages/eclipse-soa-platform-java-and-soa-developers/galileosr1">Eclipse SOA Platform</a>, 
					and the following Eclipse tools:
					<ul>
						<li><a href="http://www.eclipse.org/stp/sca/">SCA Tools</a>,</li>
						<li><a href="http://www.eclipse.org/bpel/">BPEL Editor</a>,</li>
						<li><a href="http://www.eclipse.org/bpmn/">BPMN Modeler</a>, </li>
						<li><a href="http://www.eclipse.org/modeling/emft/?project=compare#compare">EMF Compare</a> (to compare SCA, BPEL and BPMN files),</li>
						<li><a href="http://www.eclipse.org/modeling/m2t/?project=acceleo">Acceleo</a> (to generate code automatically), and</li>
						<li><a href="http://www.eclipse.org/subversive/">Subversive</a>.</li>
					</ul>
					Moreover, this package provides also 2 open source SCA runtimes: <a href="http://tuscany.apache.org/">Apache Tuscany</a> 1.5 and <a href="http://frascati.ow2.org/">OW2 FraSCAti</a> 1.0.1.
					
					Downloads:
					<ul>
						<li>Windows platform: <a href="http://www.obeo.fr/download/soa/galileo-sr1/eclipse-soasca-galileo-SR1-obeo-win32.zip">eclipse-soasca-galileo-SR1-obeo-win32.zip</a> (size: 390M).</li>
						<li>Linux platform: <a href="http://www.obeo.fr/download/soa/galileo-sr1/eclipse-soasca-galileo-SR1-obeo-linux-gtk.tar.gz">eclipse-soasca-galileo-SR1-obeo-linux-gtk.tar.gz</a> (size: 387M).</li>
					</ul>
				</td>
			</tr></table>
	</p>
	</div>	

	<?
	$html = ob_get_clean();
	# Generate the web page
	$App->Promotion = TRUE;
	$App->AddExtraHtmlHeader('<link type="text/css" href="style.css" rel="stylesheet"/>');
	$App->generatePage("Nova", $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
