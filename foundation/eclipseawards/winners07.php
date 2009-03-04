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
				<li class="winner">Chris Aniszczyk</li>
				<li class="finalist">Alex Blewitt <strong>(finalist)</strong></li>
				<li class="finalist">Doug Schaefer <strong>(finalist)</strong></li>
				<br>
			</ul>
		</div>		
		<div class="homeitem3col">

			<h3>Top Contributor</h3>
			<ul>
				<li class="finalist">Eugene Kuleshov <strong>(finalist)</strong></li>
				<li class="finalist">Philippe Ombredanne <strong>(finalist)</strong></li>
				<li class="winner">Kimberley Peter - tie</li>
				<li class="winner">Tom Schindl - tie</li>
				<br>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Top Committer</h3>
			<ul>
				<li class="finalist">Mik Kersten <strong>(finalist)</strong></li>	
				<li class="winner">Ed Merks</li>
				<li class="finalist">Thomas Watson <strong>(finalist)</strong></li>	
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Top Newcomer Evangelist</h3>
			<ul>
				<li class="finalist">Hendrik Maryns <strong>(finalist)</strong></li>	
				<li class="winner">Daniel Megert</li>
				<li class="finalist">Eric Rizzo <strong>(finalist)</strong></li>
			</ul>
		</div>

	<h2>Technology Award Finalists</h2>
		<p>Presented below is the list of award finalists and winners for each of the technology awards catagories as determined
			by this year's <a href="judges07.php">judging panels</a>.</p>
		<div class="homeitem3col">
			<h3>Best Open Source RCP Application</h3>
			<ul>
				<li class="finalist"><a href="http://eclipsetrader.sourceforge.net">EclipseTrader</a> <strong>(finalist)</strong></li>
				<li class="winner"><a href="http://portal.chronos.org/psicat-site/">PSICAT</a></li>
				<li class="finalist"><a href="http://www.rssowl.org/">RSSOwl</a> <strong>(finalist)</strong></li>
				<br>
			</ul>
		</div>		
		<div class="homeitem3col">

			<h3>Best Commercial RCP Application</h3>
			<ul>
				<li class="winner"><a href="http://www.tibco.com/devnet/business_studio/product_resources.jsp?tab=downloads">TIBCO Business Studio</a></li>
				<li class="finalist"><a href="http://www.ivis.com/public/products/xprocess/index.cfm">Ivis Technologies xProcess</a> <strong>(finalist)</strong></li>
				<br>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Open Source Eclipse Based Developer Tool</h3>
			<ul>
				<li class="finalist"><a href="http://www.eclemma.org/">EclEmma</a> <strong>(finalist)</strong></li>
				<li class="winner"><a href="http://eclipse-cs.sourceforge.net">eclipse-cs Checkstyle Plugin</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Commerical Eclipse Based Developer Tool</h3>
			<ul>
				<li class="finalist"><a href="http://www.adobe.com/products/flex/productinfo/overview/">Adobe Flex 2.0</a> <strong>(finalist)</strong></li>
				<li class="winner"><a href="http://www.qnx.com/products/development">QNX Momentics IDE</a>
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Deployment of Eclipse Technology in an Enterprise</h3>
			<ul>
				<li class="finalist"><a href="http://www.bardusch.de">Bardusch GmbH</a> <strong>(finalist)</strong></li>
				<li class="winner"><a href="http://www.jpmchase.com">JPMorgan Chase</a>
				<li class="finalist"><a href="http://www.jpl.nasa.gov/">NASA Ensemble Team</a> <strong>(finalist)</strong></li>
			</ul>
		</div>
		<br />
		<a href="technology_nominations.php">A complete list of the nominees for 2007 Technology Awards can be found here.</a>
		<br /><br />

	</div>


<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>