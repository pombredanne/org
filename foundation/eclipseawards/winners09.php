<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_3col.php
	#
	# Author: 		Denis Roy
	# Date:			2005-11-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Awards Finalists 2009";
	$pageKeywords	= "eclipse, foundation, community, award, winners, 2009";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		
<link rel="stylesheet" type="text/css" href="layout.css" media="screen" />
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<h2>Individual Award Finalists</h2>
		<p>Presented below is the list of award winners and finalists for each of the individual awards catagories.</p>
		<div class="homeitem3col">
			<h3>Top Ambassador</h3>
			<ul>
				<li class="winner">Nick Boldt (Winner)</li>
				<li class="finalist">Mik Kersten</li>
				<li class="finalist">Tom Schindl</li>
			</ul>
		</div>	
		
		<div class="homeitem3col">
			<h3>Top Committer</h3>
			<ul>
				<li class="finalist">Martin Oberhuber</li>	
				<li class="finalist">Jason Weathersby</li>
				<li class="winner">Paul Webster (Winner)</li>					
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Top Contributor</h3>
			<ul>
				<li class="winner">Benjamin Cabe (Winner)</li>
				<li class="finalist">Dave Carver</li>
				<li class="finalist">Tom Schindl</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Top Newcomer Evangelist</h3>
			<ul>
				<li class="finalist">Nick Boldt</li>	
				<li class="finalist">Walter Harley</li>
				<li class="winner">Ed Merks (Winner)</li>
			</ul>
		</div>			

		<br /><br />

	<h2><br>Technology Award Winners</h2>
		<p>Presented below is the list of award winners and finalists for each of the technology awards catagories as determined
			by this year's judging panels.</p>
			
		<div class="homeitem3col">
		<h3>Best Commerical Eclipse-Based Developer Tool</h3>
			<ul>
				<li class="finalist"><a href="http://www.adobe.com/products/flex/" target="blank">Adobe Flex Builder 3</a></li>
				<li class="finalist"><a href="http://www.guidancer.com" target="blank">Bredex GUIdancer</a></li>
				<li class="winner"><a href="http://www.instantiations.com/windowbuilder/index.html?id=1" target="blank">Instantiations WindowBuilder Pro</a> (Winner)</li>
			</ul>
		</div>	
			
		<div class="homeitem3col">
			<h3>Best Open Source Eclipse-Based Developer Tool</h3>
			<ul>
				<li class="winner"><a href="http://www.acceleo.org" target="blank">Acceleo</a> (Winner)</li>
				<li class="finalist"><a href="http://andrei.gmxhome.de/anyedit/index.html" target="blank">AnyEdit Tools</a></li>
				<li class="finalist"><a href="http://openrules.com" target="blank">OpenRules</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Commercial Equinox Application</h3>
			<ul>
				<li class="finalist"><a href="http://www.cas-pia.de" target="blank">CAS PIA</a></li>
				<li class="winner"><a href="http://www.prosyst.com/products/osgi_ext_smart.html" target="blank">ProSyst mBedded Server Smart Home Extension</a> (Winner)</li>
				<li class="finalist"><a href="http://eclipsesource.com/en/products/yoxos-enterprise/" target="blank">Yoxos Enterprise</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Open Source Equinox Application</h3>
			<ul>
				<li class="winner"><a href="http://www.modulefusion.org" target="blank">ModuleFusion</a> (Winner)</li>
				<li class="finalist"><a href="http://vif.sourceforge.net/" target="blank">VIF - Virtual Forum</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Commercial RCP Application</h3>
			<ul>
				<li class="winner"><a href="http://www.pluck-n-play.com" target="blank">Chord Scale Generator</a> (Winner)</li>
				<li class="finalist"><a href="http://www.anyware-tech.com/en/st/eclipse_platform/ecr_rcp_application.html" target="blank">ECR (Enregistrement Centralis&eacute; en R&eacute;seau - Centralized Network Recording)</a></li>
				<li class="finalist"><a href="http://demos.netcetera.ch/nets" target="blank">NeTS - Network-wide Track Management System</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Open Source RCP Application</h3>
			<ul>
				<li class="winner"><a href="http://directory.apache.org/studio" target="blank">Apache Directory Studio</a> (Winner)</li>
				<li class="finalist"><a href="http://mae.cee.uiuc.edu/software_and_tools/maeviz.html" target="blank">MAEviz</a></li>
			</ul>
		</div>			

		<br /><br />
	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage("Nova", $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>