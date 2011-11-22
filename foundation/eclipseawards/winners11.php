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
	$pageTitle 		= "Eclipse Awards Winners 2011";
	$pageKeywords	= "eclipse, foundation, community, award, winners, 2010";
	$pageAuthor		= "Christopher Guindon";
	
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
		<h2>Individual Award Winners</h2>
		<p>Presented below is the list of award winners and finalists for each of the individual awards catagories as
		determined by votes from the community.</p>

		<div class="homeitem3col">
			<h3>Top Committer</h3>
			<ul>
				<li class="finalist"> Lauren Goubet</li>	
				<li class="finalist">Tom Schindl</li>
				<li class="winner">Sebastian Zarnekow  (Winner)</li>					
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Top Contributor</h3>
			<ul>
			
				<li class="finalist">James Sugrue</li>
				<li class="finalist">Brian de Alwis</li>
				<li class="winner">Dariusz Luksza (Winner)</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Top Newcomer Evangelist</h3>
			<ul>
				<li class="finalist"> Cedric Brun</li>	
				<li class="finalist">James Sugrue</li>
                <li class="winner">Boris Bokowski  (Winner)</li>
			</ul>
		</div>			 

	<h2><br>Project Award Winners</h2>
		<p>Presented below is the list of award winners and finalists for each of the project awards catagories as
		determined by votes from the community.</p>
			
		<div class="homeitem3col">
		<h3>Most Innovative New Feature or Eclipse Project</h3>
			<ul>
				<li class="finalist">Mylyn Builds</li>
				<li class="finalist">Extended Editing Framework (EEF)</li>
				<li class="winner">EGit</li>
			</ul>
		</div>	
			
		<div class="homeitem3col">
			<h3>Most Open Project</h3>
			<ul>
			
				<li class="finalist">Modeling Amalgamation</li>
	<li class="winner">e4 (Winner)</li>
			</ul>
		</div>

	<h2><br>Technology Award Winners</h2>
		<p>Presented below is the list of award winners and finalists for each of the technology awards catagories as determined
			by this year's judging panels.</p>
			
		<div class="homeitem3col">
		<h3>Best Developer Tool</h3>
			<ul>
				
			  <li class="finalist"><a href="http://diver.sf.net/" target="_blank">Diver</a></li>
                <li class="winner"><a href="http://pydev.org/" target="_blank">PyDev</a> (Winner)</li>
			</ul>
		</div>	
			
		<div class="homeitem3col">
			<h3>Best Modeling Tool</h3>
			<ul>
				
                <li class="finalist"><a href="http://www.actifsource.com/" target="_blank">actifsource</a></li>
                <li class="finalist"><a href="http://www.obeodesigner.com/" target="_blank">Obeo Designer</a></li>
                <li class="winner"><a href="http://www.bonitasoft.com/" target="_blank">Bonita Open Solutions</a> (Winner)</li>
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Moble Tool</h3>
			<ul>
				<li class="finalist"> <a href="http://genuitec.com/mobile" target="_blank">MobiOne Studio</a></li>
				<li class="winner"> <a href="http://developer.motorola.com/docstools/motodevstudio/" target="_blank">MOTODEV Studio for Android</a> (Winner)</li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best RCP Application</h3>
			<ul>
				<li class="finalist"><a href="http://www.justinmind.com/" target="_blank">Justinmind Prototyper</a></li>
				<li class="finalist"><a href="http://wireframesketcher.com/" target="_blank">WireframeSketcher</a></li>
				<li class="winner"><a href="http://www.openchrom.net/" target="_blank">OpenChrom</a> (Winner)</li>
			</ul>
		</div>			
		
	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage("Nova", $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>