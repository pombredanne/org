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
	$pageTitle 		= "Eclipse Awards Winners 2012";
	$pageKeywords	= "eclipse, foundation, community, award, winners, 2012";
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
        <h3>Lifetime Achievement Award</h3>
        
        	<ul>
	
				<li class="winner">Ed Merks (Winner)</li>					
			</ul>
        </div>

		<div class="homeitem3col">
			<h3>Top Committer</h3>
			<ul>
				<li class="finalist">Daniel Megert</li>	
				<li class="finalist">Kim Moir</li>
				<li class="winner">Sven Efftinge  (Winner)</li>					
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Top Contributor</h3>
			<ul>
			
				
				<li class="finalist">Stephan Herrmann <span class="winner">(Winner)</span></li>
                <li class="finalist">Alex Blewitt <span class="winner">(Winner)</span></li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Top Newcomer Evangelist</h3>
			<ul>
				<li class="finalist">Russell Bateman</li>	
				<li class="finalist">Lu Yang</li>
                <li class="winner"> Lars Vogel  (Winner)</li>
			</ul>
		</div>			 

	<h2><br>Project Award Winners</h2>
		<p>Presented below is the list of award winners and finalists for each of the project awards catagories as
		determined by votes from the community.</p>
			
		<div class="homeitem3col">
		<h3>Most Innovative New Feature or Eclipse Project</h3>
			<ul>
				<li class="finalist"><a href="http://www.eclipse.org/orion/">Orion</a></li>
				<li class="finalist"><a href="http://www.eclipse.org/Xtext/">Xtend</a></li>
				<li class="winner"><a href="http://www.eclipse.org/recommenders/">Eclipse Code Recommenders</a> (Winner)</li>
			</ul>
		</div>	
			
		<div class="homeitem3col">
			<h3>Most Open Project</h3>
			<ul>
				<li class="finalist"><a href="http://www.eclipse.org/cdt/">C/C++ Development Tooling</a></li>
				<li class="finalist"><a href="http://www.eclipse.org/projects/project.php?id=modeling.gmp.gmf-tooling">GMF Tooling</a></li>
				<li class="winner"><a href="http://www.eclipse.org/ecf/">Eclipse Communication Framework</a> (Winner)</li>
			</ul>
		</div>

	<h2><br>Technology Award Winners</h2>
		<p>Presented below is the list of award winners and finalists for each of the technology awards catagories as determined
			by this year's judging panels.</p>
			
		<div class="homeitem3col">
		<h3>Best Developer Tool</h3>
			<ul>
				<li class="finalist"><a href="http://bndtools.org/">Bndtools</a></li>
			  <li class="finalist"><a href="http://www.arm.com/products/tools/software-tools/ds-5/community-edition/index.php">DS-5 Community Edition</a></li>
                <li class="winner"><a href="http://www.chrononsystems.com/">Chronon Time Travelling Debugger</a> (Winner)</li>
			</ul>
		</div>	
			
		<div class="homeitem3col">
			<h3>Best Modeling Tool</h3>
			<ul>
                <li class="finalist"><a href="http://www.umlet.com/">UMLet</a></li>
                <li class="winner"><a href="http://maintainj.com/">MaintainJ</a> (Winner)</li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Best Application</h3>
			<ul>
				<li class="finalist"><a href="http://www.bonitasoft.com/">Bonita Open Solutions</a></li>
				<li class="finalist"><a href="http://www.diligent-it.com/files/ea2012/CCTVnet.html">CCTVnet</a></li>
				<li class="winner"><a href="http://justinmind.com/">Justinmind Prototyper</a> (Winner)</li>
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