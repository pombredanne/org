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
	$pageTitle 		= "Eclipse Awards Winners 2008";
	$pageKeywords	= "eclipse, foundation, community, award, winners, 2008";
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
		<h2>Individual Award Winners</h2>
		<p>Presented below is the list of award winners and finalists for each of the individual awards catagories.</p>
		<div class="homeitem3col">
			<h3>Top Ambassador</h3>
			<ul>
				<li class="finalist">Jeff McAffer</li>
				<li class="winner">Ed Merks <b>(Winner)</b></li>
			</ul>
		</div>	
		
		<div class="homeitem3col">
			<h3>Top Committer</h3>
			<ul>
				<li class="winner">Chris Aniszczyk <b>(Winner)</b></li>	
				<li class="finalist">Mik Kersten</li>
				<li class="finalist">Paul Webster</li>					
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Top Contributor</h3>
			<ul>
				<li class="finalist">Jacek Pospychala</li>
				<li class="winner">Remy Chi Jian Suen <b>(Winner)</b></li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Top Newcomer Evangelist</h3>
			<ul>
				<li class="finalist">Mark Dexter</li>	
				<li class="finalist">Walter Harley</li>
				<li class="winner">Eric Rizzo <b>(Winner)</b></li>
			</ul>
		</div>


	<h2><br>Technology Award Winners</h2>
		<p>Presented below is the list of award finalists for each of the technology awards catagories as determined
			by this year's judging panels.</p>
			
		<div class="homeitem3col">
		<h3>Best Commerical Eclipse-Based Developer Tool</h3>
			<ul>
				<li class="finalist"><a href="http://www.nexaweb.com/home/us/index.html@cid=2301.html">Nexaweb Studio</a></li>
				<li class="finalist"><a href="http://www.polarion.com/products/alm/team.php">Polarion&reg; ALM <i>Team</i> for Subversion&trade;</a></li>
				<li class="winner"><a href="http://www.windriver.com/products/development_suite/">Wind River Workbench</a> <b>(Winner)</b></li>
			</ul>
		</div>	
			
		<div class="homeitem3col">
			<h3>Best Open Source Eclipse-Based Developer Tool</h3>
			<ul>
				<li class="winner"><a href="http://www.eclemma.org/">EclEmma</a> <b>(Winner)</b></li>
				<li class="finalist"><a href="http://springide.org">Spring IDE</a></li>
				<br>
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Commercial Equinox Application</h3>
			<ul>
				<li class="finalist"><a href="http://www.birt-exchange.com/modules/products/index.php?productid=3 ">BusinessReport Studio</a></li>
				<li class="winner"><a href="http://www.bandxi.com/cyrano/index.html">CYRANO</a> <b>(Winner)</b></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Commercial RCP Application</h3>
			<ul>
				<li class="finalist"><a href="http://www.openmethods.com/products.php">openVXML</a></li>
				<li class="winner"><a href="http://www.xmind.org/us/">XMIND 2008</a> <b>(Winner)</b></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Open Source RCP Application</h3>
			<ul>
				<li class="finalist"><a href="http://directory.apache.org/studio">Apache Directory Studio</a></li>
				<li class="winner"><a href="http://mytourbook.sourceforge.net/">MyTourbook</a> <b>(Winner)</b></li>
			</ul>
		</div>			
	</div>

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
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>