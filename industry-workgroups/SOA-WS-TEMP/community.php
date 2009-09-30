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

	<h1>Road Map </h1>
	<ul>
		<li><a href="./roadmap/roadmap0.5.pdf" target="_new">Road Map 0.5 (September 3, 2009)</a> (PDF)</li>
		<li><a href="./roadmap/roadmap0.5.png"><img src="./roadmap/roadmap0.5THUMB.png" align="left"></a>Click image for full size.</li>
		
	</ul>

	<h1>Free Community Services</h1>
		<ul>
		<li><a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=EPP&component=soa-package">Report a Bug</a></li>
		<li>a href="https://dev.eclipse.org/mailman/listinfo/soa-iwg">Join Working Group Mail List</a></li>
		<li>a href="http://dev.eclipse.org/mhonarc/lists/soa-iwg">View Mail List Arvhices</a></li>
		</ul>
	
	<h1>Commercial Services</h1>

	<table>
		<tr>
			<td valign='top'> <img src='./sopera120.gif' align='left' /> </td>
			<td valign='top'> <b>SOPERA</b><br />
				<ul>
					<li><a href="http://www.sopera.de/en/shop-download/trainings-shop/">Eclipse SOA Workshop</a> and other training.</a></li>
					<li><a href="http://www.sopera.de/en/support/service-support/">Comprehensive SOA Support and Maintenance</a></li>
					
				</ul>	
			</td>
		</tr>
		
	</table>


	</div>	

	<?
	$html = ob_get_clean();
	# Generate the web page
	$App->Promotion = TRUE;
	$App->AddExtraHtmlHeader('<link type="text/css" href="style.css" rel="stylesheet"/>');
	$App->generatePage("Nova", $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
