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
			Individuals may be nominated by anyone in each category.  Nominations opened December 8, 2008 and
			closed January 30, 2009.  Winners will be announced at <a href="http://www.eclipsecon.org/">EclipseCon 2009</a>.
			To see the nominations visit the following Bugzilla entries.
		</p>
		
		<ul class="midlist">
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=257950">Nominations for Top Ambassador Award</a> - voted on by
			everyone.</li>
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=257952">Nominations for Top Committer Award</a> - voted on by
			everyone.</li>
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=257953">Nominations for Top Contributor Award</a> - voted on by
			everyone.</li>
			<li>The <strong>Most Prolific Newcomer Evangelist Award</strong> is awarded to the individual that answered the most questions posted on
			the <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.newcomer">eclipse.newcomer</a> newsgroup. It is not open
			to nominations. The period of calculation is from February 27, 2008 to February 27, 2009.</li>
		</ul>

		<h2>Voting</h2>
	
		<p>
		The Individual Award winners are determined by a vote of the community. One vote per person, per category.  
		After nominations closed, voting commenced February 2, 2009 and finished February 27, 2008 at 5:00 pm EST.  
		</p>
		
		<h2>Past Winners</h2>
		<p>
			Eclipse is a large, vibrant community of many well-deserving individuals and technologies.
			Therefore, to ensure diversity of award winners, we have decided that winners from the previous year will not be eligible
			for a repeat award.  This does not mean that they are not deserving, it is just an acknowledgment that others are also 
			deserving of recognition.
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
				<li><a href="individual.php">Individual Nominees</a></li>
				<li><a href="project.php">Project Nominees</a></li>
				<li><a href="technology.php">Technology Nominees</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>
			</ul>
		</div>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
