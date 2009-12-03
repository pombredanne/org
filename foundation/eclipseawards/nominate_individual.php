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
	$pageTitle 		= "How to Make an Individual Nomination";
	$pageKeywords	= "eclipse, awards, individual, nomination, eclipsecon";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<h2>Individual Awards</h2>
		
		<p>
			Individuals may be nominated by anyone in each category.  All that's required to make a nomination
			is to list the individual's name and a paragraph on why you think they are worthy of an award in
			the appropriate Bugzilla entry link below. Nominations opened December 3, 2009 and will close January 29,
			2009.  Winners will be announced at <a href="http://www.eclipsecon.org/">EclipseCon 2010</a>.
		</p>

		<h2>Nomination Links</h2>
		<ul class="midlist">
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=257952">Nominate a Top Committer</a></li>
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=257953">Nominate a Top Contributor</a></li>
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=257953">Nominate a Top Newcomer Evangelist</a></li>
		</ul>

		<h2>Determining Winners</h2>
		<p>
		The Individual Award winners will be determined by a vote of the community. One vote per person, per category.  
		After nominations close on January 29, 2009, voting will run from February 1-26, 2009, 5:00 pm EST.  
		</p>
		
		<h2>Past Winners</h2>
		<p>
			Eclipse is a large, vibrant community of many well-deserving individuals. Therefore, to ensure
			diversity of award winners, we have decided that individuals are not eligible in any category
			they have already won in the previous 3 years.  Individuals can also only win one category per
			year. There are certainly individuals deserving of multiple awards, however we would like to
			acknowledge others also worthy of recognition.
		</p>

	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_project.php">Make a Project Nomination</a></li>				
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>
			</ul>
		</div>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
