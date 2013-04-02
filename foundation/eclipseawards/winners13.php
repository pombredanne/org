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
	$pageKeywords	= "eclipse, foundation, community, award, winners, 2013";
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
     
	
        
        
		<h2>Individual Award Winners</h2>
		<p>Presented below is the list of award winners and finalists for each of the individual awards catagories as
		determined by votes from the community.</p>
        
        <div class="homeitem3col">
        <h3>Lifetime Achievement Award</h3>
        
        	<ul>
	
				<li class="winner">Chris Aniszczyk (Winner)</li>					
			</ul>
        </div>

		<div class="homeitem3col">
			<h3>Top Committer</h3>
			<ul>
				<li class="finalist">Edward D. Willink</li>	
				<li class="finalist">John Arthorne</li>
				<li class="winner">Markus Knauer</li>					
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Top Newcomer Evangelist</h3>
			<ul>
				<li class="finalist">Benjamin Cabé</li>	
				<li class="winner">Jonas Helming</li>
				<li class="finalist">Russell Bateman</li>
			</ul>
		</div>			 

	<h2><br>Project Award Winners</h2>
		<p>Presented below is the list of award winners and finalists for each of the project awards catagories as
		determined by votes from the community.</p>
			
	    <div class="homeitem3col">
		<h3>Most Innovative New Feature or Eclipse Project</h3>
			<ul>
				<li class="finalist"><a href="http://www.eclipse.org/paho/">Eclipse Paho</a></li>
				<li class="winner"><a href="http://www.eclipse.org/diffmerge/">EMF Diff/Merge</a></li>
				<li class="finalist"><a href="http://www.eclipse.org/intent/">Intent</a></li>
				<li class="finalist"><a href="http://www.eclipse.org/vjet/">VJET Java Script IDE</a></li>
			</ul>
		</div>	
		
		<div class="homeitem3col">
			<h3>Most Open Project</h3>
			<ul>
				<li class="finalist"><a href="http://www.eclipse.org/cdt/">C/C++ Development tooling - CDT</a></li>
				<li class="winner"><a href="http://www.eclipse.org/egit/">EGit</a></li>
				<li class="finalist"><a href="http://www.eclipse.org/orion/">The Orion Project</a></li>
			</ul>
		</div>

	<h2><br>Technology Award Winners</h2>
		<p>Presented below is the list of award winners and finalists for each of the technology awards catagories as determined
			by this year's judging panels.</p>
			
		<div class="homeitem3col">
			<h3>Best Application</h3>
			<ul>
				<li class="finalist"><a href="http://www.bonitasoft.com/">Bonita Open Solution</a></li>
				<li class="winner"><a href="http://chrononsystems.com/chronon4">Chronon 4 'Ops'</a></li>
				<li class="finalist"><a href="http://www.talend.com/products/talend-open-studio">Talend Open Studio</a></li>
			</ul>
		</div>
		
		<div class="homeitem3col">
		<h3>Best Developer Tool</h3>
			<ul>
				<li class="finalist"><a href="http://www.klocwork.com/products/insight/index.php">Klocwork Insight</a></li>
			    <li class="finalist"><a href="http://www.sonarsource.org/">Sonar</a></li>
                <li class="winner"><a href="http://wireframesketcher.com/">WireframeSketcher Wireframing Tool</a></li>
			</ul>
		</div>	
		
		<div class="homeitem3col">
		<h3>Best Developer Plugin</h3>
			<ul>
				<li class="finalist"><a href="http://www.efxclipse.org/">e(fx)clipse</a></li>
				<li class="winner"><a href="http://findbugs.sourceforge.net/index.html">FindBugs Eclipse Plugin</a></li>
			    <li class="finalist"><a href="http://www.junitloop.org/index.php/JUnitLoop">JUnitLoop</a></li>
                
			</ul>
		</div>	
			
		<div class="homeitem3col">
			<h3>Best Modeling Product</h3>
			<ul>
                <li class="winner"><a href="http://www.obeodesigner.com/">Obeo Designer</a></li>
                <li class="finalist"><a href="http://www.umlet.com/">UMLet</a></li> 
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