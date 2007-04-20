<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_list.php
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
	$pageTitle 		= "Eclipse Foundation Press Releases";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Ian Skerrett";
	
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

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<h2>Current Press Releases</h2>
		<hr size="1" />
		<ul>
		<li><a href="20070420cb_eclipseparty.php">Eclipse Party at JavaOne</a> - April 20th 2007</li>
		<li><a href="20070403embedded.php">New Project Releases Continue to Drive Adoption of Eclipse in the Embedded and Device Development Community</a> - April 3rd 2007</li>
		<li><a href="20070306eclipseajax.php">Eclipse Foundation Announces Initiatives for Ajax Applications and Dynamic Languages</a> - March 6th 2007</li>
		<li><a href="20070306eclipsecommunityawards.php">Eclipse Community Awards Winners Announced</a> - March 6th 2007</li>
		<li><a href="20070306eclipsecommunity.php">Doors Open for EclipseCon 2007</a> - March 6th 2007</li>
		<li><a href="20070301cb_elections.php">Eclipse Foundation Announces 2007 Board Member Election Results</a> - March 1st 2007</li>
		<li><a href="20070220cb_awardfinalist.php">Finalist for Eclipse Community Awards 2007</a> - February 19th 2007</li>
		<li><a href="20070207cb_eclipsecon.php">Nominations for the Open Source Pavilion at EclipseCon 2007</a> - February 7th 2007</li>
		<li><a href="20070129_higgins.php">Bandit and Higgins Projects Bridge Multiple Identity Systems to Provide a Consistent Experience of Identity</a> - January 29th 2007</li>
		<li><a href="20070123_dtprelease.php">Eclipse Foundation Launches Data Tools Platform 1.0</a> - January 23rd, 2007</li>
		<li><a href="20070122_eclipsecongold.php">Gold Sponsors Announced for EclipseCon 2007</a> - January 22nd, 2007</li>
		<li><a href="20070117cb_trainingsurvey.php">Results of Eclipse Training Survey Released</a> - January 17th, 2007</li>
		<li><a href="20070112_industryspecs.php">Eclipse Foundation joins Three Industry Specifications Groups</a> - January 12th, 2007</li>
		<li><a href="20070108cb_webinar.php">2007 Eclipse Webinar Series Kickoff</a> - January 8th, 2007</li>
		</ul>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="main.html">2001-2005 Archives</a></li>
				<li><a href="2006archive.php">2006 Archive</a></li>
				<li><a href="pressrelease_guidelines.php">Press Release Guidelines</a></li>

			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
