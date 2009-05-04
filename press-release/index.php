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
ob_start();Tha
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<h2>Current Press Releases</h2>
		<hr size="1" />
		<ul>
		<li><a href="20090504_embeddedday.php">Eclipse Embedded Day in Stuttgart</a> - May 4, 2009</li>
		<li><a href="20090422_galileodemocamps.php">Celebrate Galileo at an Eclipse DemoCamp</a> - April 22, 2009</li>
		<li><a href="20090414_CommunitySurvey.php">Eclipse Community Survey: Tell us what you are using</a> - April 14, 2009</li>
		<li><a href="20090401_WTPeducation.php">Eclipse WebTools Education Releases Developing Web Applications with Standards Courseware </a> - April 1, 2009</li>
		<li><a href="20090324_EclipseConCommunity.php">Doors Open for EclipseCon 2009</a> - March 24, 2009</li>
		<li><a href="20090323_AwardsWinners.php">Eclipse Community Awards Winners Announced</a> - March 23, 2009</li>
		<li><a href="20090323_swordfish.php">Eclipse Announces First Release of Swordfish, a Next Generation ESBs</a> - March 23, 2009</li>
		<li><a href="20090320_EclipseBoard.php">Eclipse Foundation Announces 2009 Board Election Results</a> - March 20, 2009</li>
		<li><a href="20090310_pulsar.php">Eclipse Announces Pulsar Initiative to Define a Tools Platform for Mobile Development</a> - March 10, 2009</li>
		<li><a href="20090304_AwardsFinalists.php">Finalists for the Eclipse Community Awards 2009</a> - March 4, 2009</li>
		<li><a href="20090302_training.php">Global Eclipse Training Series</a> - March 2, 2009</li>
		<li><a href="20090302riena10.php">Riena 1.0 is Now Available</a> - March 2, 2009</li>
		<li><a href="20090217_eclipsist.php">EclipsIST - Supporting the Turkish Eclipse Community</a> - February 17, 2009</li>
		<li><a href="20090206_cbstrategy.php">Announcing the Open Source Executive Strategy Summit</a> - February 6, 2009</li>
		<li><a href="20090202_awards.php">Voting for the Individual Eclipse Community Awards is Open</a> - February 2, 2009</li>
		<li><a href="20090121_pdt.php">Eclipse Announces Latest PHP Development Tools (PDT)</a> - January 21, 2009</li>
		<li><a href="20090120_econgold.php">Eclipse Announces Gold Sponsors for EclipseCon 2009</a> - January 20, 2009</li>
		<li><a href="20081222_bankingdaylondon.php">Eclipse Banking Day in London</a> - December 22, 2008</li>
		<li><a href="20081216_eclipsecon_program.php">EclipseCon 2009 Program Announced</a> - December 16, 2008</li>
		<li><a href="20081208_awards.php">Nominations Open for the Eclipse Community Awards 2009</a> - December 8, 2008</li>
		<li><a href="20081113_ec09regopen.php">EclipseCon 2009 Open for Registration</a> - November 13, 2008</li>
		<li><a href="20081112_termsofuse.php">Updated Web Site Terms of Use</a> - November 12, 2008</li>
		<li><a href="20081024_eclipseconcfp.php">EclipseCon 2009 Call for Participation</a> - October 24, 2008</li>
		<li><a href="20081022_bankingdaynyc.php">Eclipse Banking Day in NYC</a> - October 22, 2008</li>
		<li><a href="20081015_mtj.php">New Eclipse MTJ Release Eases Cross Platform Development for Mobile Java Applications</a> - October 15, 2008</li>
		<li><a href="20081014eclipseworld_party.php">Eclipse Foundation Party at EclipseWorld</a> - October 14, 2008</li>	
		<li><a href="20080916_ESEKeynotes.php">Eclipse Summit Europe Keynotes Announced</a> - September 16, 2008</li>
		<li><a href="20080909_training.php">New Global Eclipse Training Series Launch in 31 Cities</a> - September 9, 2008</li>
		<li><a href="20080908_novdemocamps.php">Attend or Organize an Eclipse DemoCamp</a> - September 8, 2008</li>
		<li><a href="20080825_esecfp.php">Eclipse Summit Europe - Call for Papers Deadline is September 1</a> - August 25, 2008</li>
		<li><a href="20080812_aroundtheworldwinners.php">Winners of the Ganymede Around the World Contest</a> - August 12, 2008</li>
		<li><a href="20080625_ganymede.php">Eclipse Delivers Its Annual Release Train</a> - June 23rd, 2008</li>
		<li><a href="20080426_EclipseSummitcfp.php">Eclipse Summit Europe Call for Papers Now Open</a> - April 26th, 2008 </li>
		<li><a href="20080421_ganymededemocamps.php">Eclipse DemoCamps - Ganymede Edition</a> - March 21st, 2008</li>
		<li><a href="20080415_JavaOneParty.php">Eclipse Party at JavaOne 2008</a> - March 14th, 2008</li>		
		<li><a href="20080415_embedded.php">Eclipse Expands Open Source Technologies for Embedded and Mobile Developers</a> - April 15th, 2008</li>
		<li><a href="20080318_EclipseConCommunity.php">Eclipse Kicks Off Annual EclipseCon Conference</a> - March 18th, 2008</li>
		<li><a href="20080318_AwardsWinners.php">Eclipse Community Awards Winners Announced</a> - March 18th, 2008</li>	
		<li><a href="20080317_Eclipselink.php">Eclipse Announces EclipseLink Project to Deliver JPA 2.0 Refernce Implementation</a> - March 17th, 2008</li>
		<li><a href="20080317_Equinox.php">Eclipse Announces New Runtime Initiative around Equinox</a> - March 17th, 2008</li>
		<li><a href="20080314_NewBoard.php">Eclipse Foundation Announces 2008 Board Member Election Results</a> - March 14th, 2008</li>
		<li><a href="20080304_AwardsFinalists.php">Finalists Announced for Eclipse Community Awards 2008</a> - March 4th, 2008</li>
		<li><a href="20080221_higgins.php">Eclipse Releases Its First User-Centric Identity Framework</a> - February 21st, 2008</li>
		<li><a href="20080219_RCPtraining.php">Eclipse RCP Training Series</a> - February 19th, 2008</li>
		<li><a href="20080213_riena.php">Eclipse Riena Project Enhances Building Enterprise Applications Using Eclipse RCP</a> - February 13th, 2008</li>
		<li><a href="20080130_awards.php">Voting for the Individual Eclipse Community Awards is Open</a> - January 30th, 2008</li>
		<li><a href="20080124_cbganymede.php">Ganymede M4 Packages Now Available for Testing</a> - January 24th, 2008</li>
		<li><a href="20080122_eclipsecongold.php">EclipseCon 2008 Attracts Eleven Industry-Leading Companies as Gold Sponsors</a> - January 22nd, 2008</li>
		<li><a href="20071219_omgsymposium.php">Eclipse &amp; OMG Symposium - Call for Contributions</a> - December 19th, 2007</li>
		<li><a href="20071214_awards.php">Nominations for the Eclipse Community Awards 2008 are Open</a> - December 14th, 2007</li>
		<li><a href="20071213_eclipsecon_program.php">The EclipseCon 2008 Technical Program Rocks!</a> - December 13th, 2007</li>
		<li><a href="20071106_cbsurvey.php">Donate to Eclipse</a> - December 3rd, 2007</li>
		<li><a href="20071106_cbsurvey.php">Results of the Eclipse Community Survey</a> - November 6th, 2007</li>
		<li><a href="20071105_hibachi.php">Eclipse Hibachi Project Unites Ada Suppliers in Common Environment</a> - November 5th, 2007</li>
		<li><a href="20071101_econkeepthedate.php">Fifth Annual Eclipse Community Conference Announces Keynotes</a> - November 1st, 2007</li>
		<li><a href="20071022eclipsedemocamp.php">See Cool Stuff, Meet Interesting People - Attend an Eclipse DemoCamp</a> - October 22nd, 2007</li>	
		<li><a href="20071016_EclipseConCFP.php">Submit a Talk or Tutorial for EclipseCon 2008</a> - October 16th, 2007</li>
		<li><a href="20071015_raprelease.php">Eclipse Releases First Ajax Platform Based on OSGi</a> - October 15th, 2007</li>
		<li><a href="20071009eclpseworld_party.php">Eclipse Foundation Party at Eclipse World</a> - October 9th, 2007</li>
		<li><a href="20070918_pdtrelease.php">Eclipse Announces New Tools for PHP Developers</a> - September 18th, 2007</li>
		<li><a href="20070830_ESEearlyreg.php">ESE Early Registration Deadline is Thursday, September 6</a> - August 30th, 2007</li>
		<li><a href="20070827_RCPregistration.php">Early Discount for RCP Training Ends Friday, August 31</a> - August 27th, 2007</li>
		<li><a href="20070815_EclipseSurvey.php">Eclipse Community Survey Opens</a> - August 15th, 2007</li>
		<li><a href="20070731_RCPtraining.php">Eclipse RCP Training Announced</a> - July 31st, 2007</li>
		<li><a href="20070719_ESEregopen.php">Eclipse Summit Europe Registration Opens</a> - July 19th, 2007</li>
		<li><a href="20070627_europarelease.php">Eclipse Ships Largest-Ever Release of Leading Open Source Software Development Platform</a> - June 27th 2007</li>				
		<li><a href="20070627_europarelease.php">Eclipse liefert den bisher gr��ten Release der f�hrenden Open Source Software-Entwicklungsplattform aus</a> - June 27th 2007</li>
		<li><a href="20070619_cbsummitasia.php">Community Bulletin: OS Summit Asia</a> - June 19th 2007</li>
		<li><a href="20070612cb_europareviews.php">Write a Review, Win an Eclipse Shirt</a> - June 13th 2007</li>		
		<li><a href="20070529_cbsummitcall.php">Eclipse Summit Europe Call for Participation - Talks & Demo</a> - May 29th 2007</li>
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
		<li><a href="20070108cb_trainingsurvey.php">Results of Eclipse Training Survey Released</a> - January 17th, 2007</li>
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
