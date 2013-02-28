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
	$pageTitle 		= "Eclipse Awards Finalists 2013";
	$pageKeywords	= "eclipse, foundation, community, award, winners, 2010";
	$pageAuthor		= "Roxanne Joncas";
	
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
		<p>Presented below is the list of award finalists for each of the individual awards catagories as
		determined by votes from the community.</p>

		<div class="homeitem3col">
			<h3>Top Committer</h3>
			<ul>
				<li class="finalist">Edward D. Willink</li>	
				<li class="finalist">John Arthorne</li>
				<li class="finalist">Markus Knauer</li>					
			</ul>
			<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=396183">Full list of nominees</a>
		</div>


		<!-- <div class="homeitem3col">
			<h3>Top Contributor</h3>
			<ul>
				<li class="finalist">Matt Hall</li>
				<li class="finalist">Laurens Holst</li>
				<li class="finalist">James Sugrue</li>
				<li class="finalist">Lars Vogel</li>
			</ul>
		</div>-->

		<div class="homeitem3col">
			<h3>Top Newcomer Evangelist</h3>
			<ul>
				<li class="finalist">Benjamin Cabé</li>	
				<li class="finalist">Jonas Helming</li>
				<li class="finalist">Russell Bateman</li>
			</ul>
			<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=396185">Full list of nominees</a>
		</div>			
		<br />
		<br /><br />

	<h2><br>Project Award Finalists</h2>
		<p>Presented below is the list of award finalists for each of the project awards catagories as
		determined by votes from the community.</p>
			
		<div class="homeitem3col">
		<h3>Most Innovative New Feature or Eclipse Project</h3>
			<ul>
				<li class="finalist">Eclipse Paho</li>
				<li class="finalist">EMF Diff/Merge</li>
				<li class="finalist">Intent</li>
				<li class="finalist">VJET Java Script IDE</li>
			</ul>
			<a href="http://marketplace.eclipse.org/nominations/most-innovative-project">Full list of nominees</a>
		</div>	
			
		<div class="homeitem3col">
			<h3>Most Open Project</h3>
			<ul>
				<li class="finalist">C/C++ Development tooling - CDT</li>
				<li class="finalist">EGit</li>
				<li class="finalist">The Orion Project</li>
			</ul>
			<a href="http://marketplace.eclipse.org/nominations/most-open-project">Full list of nominees</a>
		</div>
		<br />
		<br /><br />

	<h2><br>Technology Award Finalists</h2>
		<p>Presented below is the list of award finalists for each of the technology awards catagories as determined
			by this year's judging panels.</p>
			
		<div class="homeitem3col">
		<h3>Best Application</h3>
			<ul>
				<li class="finalist">Bonita Open Solution</li>
				<li class="finalist">Chronon 4 'Ops'r</li>
				<li class="finalist">Talend Open Studio</li>
			</ul>
			<a href="http://marketplace.eclipse.org/nominations/best-application">Full list of nominees</a>
		</div>	
			
		<div class="homeitem3col">
			<h3>Best Developer Tool</h3>
			<ul>
				<li class="finalist">Klockwork Insight</li>
				<li class="finalist">Sonar</li>
				<li class="finalist">WireframeSketcher Wireframing Tool</li>
			</ul>
			<a href="http://marketplace.eclipse.org/nominations/best-developer-tool">Full list of nominees</a>
		</div>
		<div class="homeitem3col">
		<h3>Best Developer Plugin</h3>
			<ul>
				<li class="finalist">e(fx)clipse</li>
				<li class="finalist">FindBugs Eclipse Plugin</li>
				<li class="finalist">JUnitLoop</li>
			</ul>
			<a href="http://marketplace.eclipse.org/nominations/best-developer-plugin">Full list of nominees</a>
		</div>
		<div class="homeitem3col">
			<h3>Best Modeling Product</h3>
			<ul>
				<li class="finalist">Obeo Designer</li>
				<li class="finalist">UMLet</li>
			</ul>
			<a href="http://marketplace.eclipse.org/nominations/best-modeling-product">Full list of nominees</a>
		</div>			
		<br />
		<br /><br />
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