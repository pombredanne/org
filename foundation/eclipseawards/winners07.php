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
	$pageTitle 		= "Eclipse Awards Winners 2007";
	$pageKeywords	= "eclipse, foundation, community, award, winners, 2007";
	$pageAuthor		= "Nathan Gervais";
	
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
		<p>Presented below is the list of award finalists and winners for each of the individual awards catagories.</p>
		<div class="homeitem3col">
			<h3>Top Ambassador</h3>
			<ul>
				<li class="winner"><b>Chris Aniszczyk (Winner)</b></li>
				<li class="finalist">Alex Blewitt</li>
				<li class="finalist">Doug Schaefer</li>
				<br>
			</ul>
		</div>		
		<div class="homeitem3col">

			<h3>Top Contributor</h3>
			<ul>
				<li class="finalist">Eugene Kuleshov</li>
				<li class="finalist">Philippe Ombredanne</li>
				<li class="winner"><b>Kimberley Peter (Winner - tie)</b></li>
				<li class="winner"><b>Tom Schindl (Winner - tie)</b></li>
				<br>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Top Committer</h3>
			<ul>
				<li class="finalist">Mik Kersten</li>	
				<li class="winner"><b>Ed Merks (Winner)</b></li>
				<li class="finalist">Thomas Watson</li>	
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Top Newcomer Evangelist</h3>
			<ul>
				<li class="finalist">Hendrik Maryns</li>	
				<li class="winner"><b>Daniel Megert (Winner)</b></li>
				<li class="finalist">Eric Rizzo</li>
			</ul>
		</div>

	<h2>Technology Award Winners</h2>
		<p>Presented below is the list of award finalists and winners for each of the technology awards catagories as determined
			by this year's judging panels.</p>
		<div class="homeitem3col">
			<h3>Best Open Source RCP Application</h3>
			<ul>
				<li class="finalist"><a href="http://eclipsetrader.sourceforge.net">EclipseTrader</a> </li>
				<li class="winner"><a href="http://portal.chronos.org/psicat-site/"><b>PSICAT</a> (Winner)</b></li>
				<li class="finalist"><a href="http://www.rssowl.org/">RSSOwl</a></li>
				<br>
			</ul>
		</div>		
		<div class="homeitem3col">

			<h3>Best Commercial RCP Application</h3>
			<ul>
				<li class="winner"><a href="http://www.tibco.com/devnet/business_studio/product_resources.jsp?tab=downloads"><b>TIBCO Business Studio</a> (Winner)</b></li>
				<li class="finalist"><a href="http://www.ivis.com/public/products/xprocess/index.cfm">Ivis Technologies xProcess</a></li>
				<br>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Open Source Eclipse Based Developer Tool</h3>
			<ul>
				<li class="finalist"><a href="http://www.eclemma.org/">EclEmma</a></li>
				<li class="winner"><a href="http://eclipse-cs.sourceforge.net"><b>eclipse-cs Checkstyle Plugin</a> (Winner)</b></li>
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Commerical Eclipse Based Developer Tool</h3>
			<ul>
				<li class="finalist"><a href="http://www.adobe.com/products/flex/productinfo/overview/">Adobe Flex 2.0</a></li>
				<li class="winner"><a href="http://www.qnx.com/products/development"><b>QNX Momentics IDE</a> (Winner)</b></li>
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Deployment of Eclipse Technology in an Enterprise</h3>
			<ul>
				<li class="finalist"><a href="http://www.bardusch.de">Bardusch GmbH</a></li>
				<li class="winner"><a href="http://www.jpmchase.com"><b>JPMorgan Chase</a> (Winner)</b></li>
				<li class="finalist"><a href="http://www.jpl.nasa.gov/">NASA Ensemble Team</a></li>
			</ul>
		</div>

		<br /><br />

	</div>

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
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>