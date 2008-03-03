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
	$pageTitle 		= "Technology Awards";
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
		
		<h2>Guidelines</h2>
		
		<p>
			The Technology Awards are determined by a panel of judges.   The judges were selected from Eclipse-oriented editors and 
			Eclipse project leaders.  The panel of judges determines winners based on a majority vote.
		 </p>
		 
		<p>
			Open source projects and products may be nominated by anyone, and vendors are allowed to nominate their own products.
		</p>		
		
		<h3>Judging Criteria</h3>
		
		<p>
			The criteria for judging the commercial and open source product awards are: 
			<ol>
				<li>Usability and intuitiveness of the user interface - is the product user interface easy to understand?</li>
				<li>Innovation and uniqueness - how cleverly does the product solve the problem?</li>
				<li>Completeness - how well does the product solve the problem, including technology, documentation, tutorials, web site
				and community support?</li>
			</ol>
		</p>

		<p>
			Nominations open December 14, 2007 and close January 25, 2008.  Winners will be announced at
			<a href="http://www.eclipsecon.org/">EclipseCon 2008</a>.
		</p>
		
		<p>
			<strong>Note:</strong> Eclipse is a large, vibrant community of many well-deserving individuals and technologies.  Therefore,
			to ensure diversity of award winners, we have decided that winners from the previous year will not be eligible for a repeat
			award.  This does not mean that they are not deserving, it is just an acknowledgment that others are also deserving of
			recognition.
		</p>

	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Awards Categories</a></li>			
				<li><a href="technology_nominations.php">Technology Nominations</a></li>
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
