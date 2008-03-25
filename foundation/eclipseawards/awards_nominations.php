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
	$pageTitle 		= "Nominations";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Type your name here";
	
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
			Anyone may nominate an individual in each category.	 To nominate an individual visit the following Bugzilla entries.  
			Nominations close January 25, 2008.
		</p>
		
		<ul class="midlist">
		  <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=213056">Nominations for Top Ambassador Award</a></li>
		  <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=213059">Nominations for Top Committer Award</a></li>
		  <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=214525">Nominations for Top Contributor Award</a></li>
		</ul>
		
		<p>
			NOTE: The <strong>Most Prolific Newcomer Evangelist Award</strong> is not open to nominations.  It will be calculated based on the
			number of responses posted to the <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.newcomer">eclipse.newcomer</a> newsgroup.
		</p>
		
		<h2>Technology Awards</h2>
		
		<p>
			To submit a nomination for a Technology Award, send an e-mail by January 25, 2008 to <a href="mailto:awards@eclipse.org">
			awards@eclipse.org</a> with the information indicated below.
		</p>

		<ol>
			<li>Category of award</li>
			<li>Name of person submitting award</li>
			<li>Contact information of person (telephone and e-mail)</li>
			<li>Name of product</li>
			<li>URL of product</li>
			<li>100 word description of product</li> 
			<li>Description of the usability features</li> 
			<li>Description of why and how the product uniquely solves a particular problem.  Ensure you also explain the problem.</li> 
			<li>Description of the completeness of the solution, including the technology, but also documentation, white papers, tutorials, and
			web site.  Include everything you think is important for your customers to be successful with the product.</li> 
			<li>OPTIONAL: Feel free to send a 3-5 minute screen cam demo of your product</li> 
		</ol>

		
		<h3>Previous Year Winners</h3>
		
		<p>
			Eclipse is a large, vibrant community of many well deserving individuals and technologies.  Therefore, to ensure diversity of
			award winners, we have decided that winners from the previous year will not be eligible for a repeat award.  This does not mean
			that they are not deserving, it is just an acknowledgment that others are also deserving of recognition.
		</p>

	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Awards Categories</a></li>
				<li><a href="winners08.php">Winners &amp; Finalists</a></li>
				<li><a href="technology_nominations.php">Technology Nominations</a></li>
				<li><a href="judges08.php">Technology Judges</a></li>
				<li><a href="individual_awards_guidelines.php">Guidelines for Individual Awards</a></li>
				<li><a href="technology_awards_guidelines.php">Guidelines for Technology Awards</a></li>
				<li><a href="awards_nominations.php">How to Make a Nomination</a></li>
			</ul>
		</div>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
