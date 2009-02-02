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
	$pageTitle 		= "How to Make a Technology Nomination";
	$pageKeywords	= "eclipse, awards, technology, nomination, eclipsecon";
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
		
		<h2>Technology Awards</h2>
		
		<p>
			Products and open source projects not hosted at Eclipse and may be nominated by anyone. Vendors are allowed to nominate their own products.
			Nominations opened December 8, 2008 and closed January 30, 2009.  Winners will be announced at
			<a href="http://www.eclipsecon.org/">EclipseCon 2009</a>.
			Nominations for the Technology Award were sent by e-mail to <a href="mailto:awards@eclipse.org">
			awards@eclipse.org</a> with the information indicated below. 
		</p>

		<ol>
			<li>Technology award category (choose from the <a href="index.php">Eclipse Community Awards page</a>)</li>
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

		<br>
		<h2>Judging Criteria</h2>		
		<p>
			The Technology Award winners are determined by a panel of judges.   The judges were selected from Eclipse-oriented editors and 
			Eclipse project leaders.  The panel of judges determines winners based on a majority vote. The criteria for judging the commercial and open source product awards are: 
			<ol>
				<li>Usability and intuitiveness of the user interface - is the product user interface easy to understand?</li>
				<li>Innovation and uniqueness - how cleverly does the product solve the problem?</li>
				<li>Completeness - how well does the product solve the problem, including technology, documentation, tutorials, web site
				and community support?</li>
			</ol>
		</p>

		<br>
		<h2>Past Winners</h2>
		<p>
			Eclipse is a large, vibrant community of many well-deserving individuals and technologies.  Therefore,
			to ensure diversity of award winners, we have decided that winners from the previous year will not be eligible for a repeat
			award.  This does not mean that they are not deserving, it is just an acknowledgment that others are also deserving of
			recognition.
		</p>

	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>
				<li><a href="technology.php">Technology Nominations</a></li>
			</ul>
		</div>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
