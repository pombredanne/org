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
	$pageTitle 		= "Eclipse Awards Finalists 2010";
	$pageKeywords	= "eclipse, foundation, community, award, winners, 2010";
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
		<p>Presented below is the list of award finalists for each of the individual awards catagories as
		determined by votes from the community.</p>

		<div class="homeitem3col">
			<h3>Top Committer</h3>
			<ul>
				<li class="finalist">Boris Bokowski</li>	
				<li class="finalist">Markus Schorn</li>
				<li class="finalist">Eike Stepper</li>					
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Top Contributor</h3>
			<ul>
				<li class="finalist">Matt Hall</li>
				<li class="finalist">Laurens Holst</li>
				<li class="finalist">James Sugrue</li>
				<li class="finalist">Lars Vogel</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Top Newcomer Evangelist</h3>
			<ul>
				<li class="finalist">Russell Bateman</li>	
				<li class="finalist">Walter Harley</li>
				<li class="finalist">Lars Vogel</li>
			</ul>
		</div>			
		<br />
		<a href="individual.php">A complete list of the nominees for the 2010 Individual Awards can be found here.</a>
		<br /><br />

	<h2><br>Project Award Finalists</h2>
		<p>Presented below is the list of award finalists for each of the project awards catagories as
		determined by votes from the community.</p>
			
		<div class="homeitem3col">
		<h3>Most Innovative New Feature or Eclipse Project</h3>
			<ul>
				<li class="finalist">EclipseLink</li>
				<li class="finalist">Standard Widget Toolkit (SWT) Cocoa Port</li>
				<li class="finalist">Textual Modeling Framework (TMF) Xtext</li>
			</ul>
		</div>	
			
		<div class="homeitem3col">
			<h3>Most Open Project</h3>
			<ul>
				<li class="finalist">e4</li>
				<li class="finalist">Equinox p2</li>
				<li class="finalist">Mylyn</li>
				<li class="finalist">XML Tools in Web Tools Platform (WTP) Incubator</li>
			</ul>
		</div>
		<br />
		<a href="project.php">A complete list of the nominees for the 2010 Project Awards can be found here.</a>
		<br /><br />

	<h2><br>Technology Award Finalists</h2>
		<p>Presented below is the list of award finalists for each of the technology awards catagories as determined
			by this year's judging panels.</p>
			
		<div class="homeitem3col">
		<h3>Best Commerical Developer Tool</h3>
			<ul>
				<li class="finalist"><a href="http://www.birt-exchange.com/be/marketplace/app-showcase/" target="blank">BIRT Mashboard Application</a></li>
				<li class="finalist"><a href="http://www.guidancer.com/" target="blank">GUIdancer</a></li>
				<li class="finalist"><a href="http://www.zend.com/products/studio" target="blank">Zend Studio 7</a></li>
			</ul>
		</div>	
			
		<div class="homeitem3col">
			<h3>Best Open Source Developer Tool</h3>
			<ul>
				<li class="finalist">There is 1 winner in this category with no additional finalists. The winning tool will be announced at the Eclipse Awards ceremony.
				<a href="technology.php">See all nominees</a>.</li>
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best EclipseRT Application</h3>
			<ul>
				<li class="finalist"><a href="http://www.actuate.com/products/iserver/iserver-enterprise/" target="blank">BIRT iServer Enterprise</a></li>
				<li class="finalist"><a href="http://www.springsource.org/dmserver" target="blank">SpringSource dm Server</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best RCP Application</h3>
			<ul>
				<li class="finalist"><a href="http://www.bioclipse.net/" target="blank">Bioclipse</a></li>
				<li class="finalist"><a href="http://www.postergenius.com/" target="blank">PosterGenius</a></li>
				<li class="finalist"><a href="http://tasktop.com/" target="blank">Tasktop Pro</a></li>
			</ul>
		</div>			
		<br />
		<a href="technology.php">A complete list of the nominees for the 2010 Technology Awards can be found here.</a>
		<br /><br />
	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>
				<li><a href="individual.php">Individual Nominees</a></li>
				<li><a href="project.php">Project Nominees</a></li>
				<li><a href="technology.php">Technology Nominees</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage("Nova", $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>