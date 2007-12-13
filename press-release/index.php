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
		<li><a href="20071213_eclipsecon_program.php">The EclipseCon 2008 Technical Program Rocks!</a> - December 13th, 2007</li>
		<li><a href="20071106_cbsurvey.php">Donate to Eclipse</a> - December 3rd, 2007</li>
		<li><a href="20071106_cbsurvey.php">Results of the Eclipse Community Survey</a> - November 6th, 2007</li>
		<li><a href="20071105_hibachi.php">Eclipse Hibachi Project Unites Ada Suppliers in Common Environment</a> - November 5th, 2007</li>
		<li><a href="20071101_econkeepthedate.php">Fifth Annual Eclipse Community Conference Announces Keynotes</a> - November 1st, 2007</li>
		<li><a href="20071022eclipsedemocamp.php">See Cool Stuff, Meet Interesting People - Attend an Eclipse DemoCamp</a> - October 22nd, 2007</li>	
		<li><a href="20071016_EclipseConCFP.php">Submit a Talk or Tutorial for EclipseCon 2008</a> - October 16th, 2007</li>
		<li><a href="20071015_raprelease.php">Eclipse Releases First Ajax Platform Based on OSGi</a> - October 15th, 2007</li>
		<li><a href="20071009eclpseworld_party.php">Eclipse Foundation Party at Eclipse World</a> - October 9th, 2007</li>
		<li><a href="20070912_pdtrelease.php">Eclipse Announces New Tools for PHP Developers</a> - September 18th, 2007</li>
		<li><a href="20070830_ESEearlyreg.php">ESE Early Registration Deadline is Thursday, September 6</a> - August 30th, 2007</li>
		<li><a href="20070827_RCPregistration.php">Early Discount for RCP Training Ends Friday, August 31</a> - August 27th, 2007</li>
		<li><a href="20070815_EclipseSurvey.php">Eclipse Community Survey Opens</a> - August 15th, 2007</li>
		<li><a href="20070731_RCPtraining.php">Eclipse RCP Training Announced</a> - July 31st, 2007</li>
		<li><a href="20070719_ESEregopen.php">Eclipse Summit Europe Registration Opens</a> - July 19th, 2007</li>
		<li><a href="20070627_europarelease.php">Eclipse Ships Largest-Ever Release of Leading Open Source Software Development Platform</a> - June 27th 2007</li>				
		<li><a href="20070627_europarelease.php">Eclipse liefert den bisher größten Release der führenden Open Source Software-Entwicklungsplattform aus</a> - June 27th 2007</li>
		<li><a href="20070619_cbsummitasia">Community Bulletin: OS Summit Asia</a> - June 19th 2007</li>
		<li><a href="20070612cb_europareviews.php">Write a Review, Win an Eclipse Shirt</a> - June 13th 2007</li>		
		<li><a href="20070529cb_cbsummitcall.php">Eclipse Summit Europe Call for Participation - Talks & Demo</a> - May 29th 2007</li>
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
