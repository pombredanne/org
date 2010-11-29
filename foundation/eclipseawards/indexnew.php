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
	$pageTitle 		= "Eclipse Community Awards 2011";
	$pageKeywords	= "eclipse, awards, individual, project, technology, nomination, eclipsecon";
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

	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<p>
			The Eclipse Community Awards recognize the best of the Eclipse community. Individuals, projects
			and technologies may be nominated by anyone in each category.  Self nominations
			are welcome. Nominations open December 6, 2010 and close January 28,
			2011.  Winners will be announced at <a href="http://www.eclipsecon.org">EclipseCon 2011</a>.
		</p>

		<h2>Make an Individual Nomination</h2>
		<ul class="midlist">
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=296856" target="blank">Top Committer</a> - The Eclipse committer who best exemplifies support for the community through code contributions, fixing bugs, forum and mailing list posts, conference presentations, blogs and other areas.</li>
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=296857" target="blank">Top Contributor</a> - The individual who best helps the Eclipse community through submission of patches, comments on bugs, tutorials, blogs, and other areas. Contributors typically are not paid for their Eclipse contributions.</li>
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=296857" target="blank">Top Newcomer Evangelist</a> - The individual who best welcomes new people into the Eclipse community through the Newcomers forum, blogging, creating resources like demos and tutorials, participating in Eclipse groups on social media sites and IRC.</li>		
		</ul>		
		<p>
			<a href="individual.php">Current Nominees</a>
		</p>		
		
		<h2>Make a Project Nomination</h2>
		<ul class="midlist">
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=296861" target="blank">Most Innovative New Feature or Project</a> - A feature added to an existing Eclipse project in 2010 or a new Eclipse project introduced in 2010 that is used and loved by the community.</li>
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=296860" target="blank">Most Open Project</a> - An Eclipse project that best exemplifies the openness, transparency and diversity expected of great open source projects.</li>
		</ul>
		<p>
			<a href="project.php">Current Nominees</a>
		</p>
		
		<h2>Mae a Technology Nomination</h2>
		<ul class="midlist">
			<li><a href="http://marketplace.eclipse.org" target="blank">Best Application</a> - An application that illustrates the most innovative use of Eclipse technology.</li>	
			<li><a href="http://marketplace.eclipse.org" target="blank">Best Developer Tool</a> - A commercial or open source product that provides an innovative, high quality tool for software developers.</li>
			<li><a href="http://marketplace.eclipse.org" target="blank">Best Mobile Product</a> - An Eclipse-based product for mobile devices that </li>
			<li><a href="http://marketplace.eclipse.org" target="blank">Best Modeling Product</a> - An Eclipse-based modeling product that</li>
		</ul>
		<p>
			<a href="technology.php">Current Nominees</a>
		</p>
		
		<h2>Determining Winners</h2>
		<p>
		The Individual and Project Award winners will be determined by a vote of the community. Each person will
		get to vote once per category from January 31, 2011 - February 25, 2011, 5:00 pm EST.  The Technology
		Award winners will be determined by a panel of judges selected from Eclipse-oriented editors and
		Eclipse project leaders. The panel of judges will determine winners based on a majority vote.   
		</p>	
		
		<h2>Past Winners</h2>
		<p>
			<a href="pastwinners.php">See the Past Winners of the Eclipse Community Awards</a>
		</p>
		<p>
			Eclipse is a large, vibrant community of many well-deserving individuals. Therefore, to ensure
			diversity of award winners, we have decided that nominees are not eligible in any category
			they have already won in the previous 3 years.  Nominees can also only win one category per
			year. There are certainly many deserving of multiple awards, however we would like to
			acknowledge others also worthy of recognition.
		</p>

	</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
