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
		<li><a href="20061127cb_ibmtranslations.php">IBM Donates Translations for Eclipse 3.2.1</a> - November 27th, 2006</li>
		<li><a href="20061112dsdp_milestone.php">Series of DSDP Releases Demonstrate the Growing Significance of Eclipse for Device Software Developers</a> - November 13th, 2006</li>
		<li><a href="20061107eclipsebirthday5.php">Eclipse Celebrates Five Years as an Open Source Community and Ecosystem</a> - November 7th, 2006</li>
		<li><a href="20061025cb_eclipsebirthday5.php">Celebrate Eclipse's 5th Birthday</a> - October 30th, 2006</li>
		<li><a href="20061017cb_eclispecon2007.php">EclipseCon 2007 Call for Participation Now Open</a> - October 17th, 2006</li>		
		<li><a href="20061003cb_betahomepage.php">New Re-design of Eclipse.org Home Page</a> - October 3rd, 2006</li>
		<li><a href="20060913cb_ese.php">Participate at the Eclipse Summit in Esslingen, October 11-12th, 2006!</a> - Sept 13th, 2006</li>
		<li><a href="20060908aperi.php">Eclipse Foundation Approves APERI Storage Management Project</a> - Sept 7th, 2006</li>
		<li><a href="20060905rcp.php">Second Annual Eclipse Global Enterprise Survey Points to Rapid Adoption of Eclipse Rich Client Platform</a> - Sept 5th, 2006</li>		
		<li><a href="20060803tailgate_party.php">Eclipse Tailgate Party at Eclipse World</a> - Aug 3rd, 2006</li>
		<li><a href="20060626callisto.php">Eclipse Community Delivers on Schedule with the Release of Ten Open Source Projects</a> - June 26th, 2006</li>
		<li><a href="20060515modeling.php">New Top-Level Eclipse Project Encourages Adoption of Open Standards for Model-Based Development</a> - May 15th, 2006</li>
		<li><a href="20060515epic.php">Eclipse Foundation Launches Community Portal to Promote the Eclipse Ecosystem</a> - May 15th, 2006</li>
		<li><a href="20060508cb_thirstybear.php">Eclipse Party at JavaOne</a> - May 8th, 2006</li>
		<li><a href="20060404embedded.php">Eclipse Continues Momentum in Device and Embedded Software Development</a>  - April 4th, 2006</li><br />		
		<li><a href="20060330cb_roadmapv2.php">Eclipse Development Road Map version 2 Approved</a> - March 30th, 2006</li><br />
		<li><a href="20060321eclipsealf.php">Eclipse Foundation announces expanded support for Eclipse Integration Platform</a>  - March 21st, 2006</li><br />
		<li><a href="20060321zendphpide.php">Eclipse Foundation, Zend Technologies, and IBM Announce the Approval of the PHP IDE Project</a>  - March 21st, 2006</li><br />
		<li><a href="20060321eclipsercp.php">Eclipse Rich Client Platform Continues Momentum with New Releases and Projects</a> - March 21st, 2006</li><br />
		<li><a href="20060321corona_compuware.php">Compuware and the Eclipse Foundation Announce the Tools Services Framework (Corona) Project</a>  - March 21st, 2006</li><br />
		<li><a href="20060321eclipsecommunity.php">EclipseCon 2006 Opens with Strong Participation from the Eclipse Community</a> - March 21st, 2006</li><br />
		<li><a href="20060321eclipsecommunityawards.php">Eclipse Community Awards Winners Announced</a> - March 21th, 2006</li><br>
		<li><a href="20060309cb_elections.php">Eclipse Foundation Announces 2006 Board Member Election Results</a> - March 9th, 2006</li><br>		
		<li><a href="20060123birt20.php">Actuate, IBM, Pentaho, Scapa Technologies and Zend Commit to Eclipse BIRT 2.0</a> - January 23, 2006 </li> <br>
		<li><a href="20060120cb_pavilion.php">Nominations for the <i>Open Source Pavilion</i> at EclipseCon 2006</a> - January 20, 2006 </li> <br>
		<li><a href="20060117goldsponsors.php">Gold Sponsors Announced for EclipseCon 2006 </a> - January 17, 2006 </li> <br>
		<li><a href="20060104seminars.php">Eclipse Foundation Kicks Off Seminar Series: “Eclipse In Motion”</a> - January 4, 2006 </li><br>
		<li><a href="20051219wtp10release.php">Eclipse Foundation Announces Web Tools Platform 1.0</a> - December 19, 2005 </li>
		</ul>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="main.html">2001-2005 Archives</a></li>
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
