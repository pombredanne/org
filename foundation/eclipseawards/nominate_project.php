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
	$pageTitle 		= "How to Make a Project Nomination";
	$pageKeywords	= "eclipse, awards, project, nomination, eclipsecon";
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
		
		<h2>Project Awards</h2>
		
		<p>
			The Project Awards are for Eclipse projects and features. Nominations may be submitted by anyone
			in each category and committers are welcome to nominate their own projects. All that's
			required to make a nomination is to list the project or feature and a few points on why you
			think it's worthy of an award in the appropriate Bugzilla entry link below. The Most Innovative New Feature or Project 
			award is for features and new projects introduced in 2010.  Nominations open
			December 6, 2010 and close January 28, 2011.  Winners will be announced at
			<a href="http://www.eclipsecon.org">EclipseCon 2011</a>.
		</p>

		<h2>Nomination Links</h2>
		<ul class="midlist">
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=296861" target="blank">Nominate for the Most Innovative New Feature or Project</a></li>
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=296860" target="blank">Nominate for the Most Open Project</a></li>
		</ul>

		<h2>Determining Winners</h2>
		<p>
		The Project Award winners will be determined by a vote of the community. Each person will get
		to vote once per category. After nominations close on January 28, 2011, voting will run from
		January 31, 2011 - February 25, 2011, 5:00 pm EST.  
		</p>		
		
		<h2>Past Winners</h2>
		<p>
			Eclipse is a large, vibrant community of many well-deserving projects. Therefore, to ensure
			diversity of award winners, we have decided that projects are not eligible in any category
			they have already won in the previous 3 years.  Projects can also only win one category per
			year. There are certainly projects deserving of multiple awards, however we would like to
			acknowledge others also worthy of recognition.
		</p>

	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>
				<li><a href="individual.php">Individual Nominees</a></li>
				<li><a href="project.php">Project Nominees</a></li>
				<li><a href="technology.php">Technology Nominees</a></li>
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_project.php">Make a Project Nomination</a></li>				
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>
			</ul>
		</div>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
