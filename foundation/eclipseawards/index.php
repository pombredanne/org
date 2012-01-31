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
	$pageTitle 		= "Eclipse Community Awards 2012";
	$pageKeywords	= "eclipse, awards, individual, project, technology, nomination, eclipsecon";
	$pageAuthor		= "Christopher Guindon";
	
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
				
		<table>
			<tr>
			  <td>
				<h1>$pageTitle</h1>
				The Eclipse Community Awards recognize the best of the Eclipse community. Individuals, projects
				and technologies may be nominated by anyone in each category. To nominate, you must log in with a <a href="https://bugs.eclipse.org/bugs/createaccount.cgi" target="_blank">
				Bugzilla account</a>. Self nominations	are welcome. Nominations will open on December 5th, 2011 and will close January 27,
				2012.  Winners will be announced at <a href="http://www.eclipsecon.org/2012/" target="_blank">EclipseCon 2012</a>.						
			  </td>
				<td>
				<img src="images/EclipseAwardsLogo.gif" alt="Eclipse Awards" height="125">
				</td>
			</tr>
		</table>
		<!--
		<a href="http://www.surveymonkey.com/s/eclipseawards2011" target="blank"><img src="images/votenow.jpg" alt="Vote Now"></a>
		-->
		<h2>Individual Nominations</h2>
        <p>Nominations are now closed.  The winners will be announced at EclipseCon 2012</p>
		<ul class="midlist">
			<li><b>Top Committer</b> - The Eclipse committer who best exemplifies support for the community through code contributions, fixing bugs, forum and mailing list posts, conference presentations, blogs and other areas.
			<br><a href="http://marketplace.eclipse.org/nominations/top-committer" target="blank">Current nominees</a>	
			</li>
			<!--
			<li><b>Top Contributor</b> - The individual who best helps the Eclipse community through submission of patches, comments on bugs, tutorials, blogs, and other areas. Contributors typically are not paid for their Eclipse contributions.
			<br><a href="http://marketplace.eclipse.org/nominations/top-contributor" target="blank">Current nominees</a>	
			</li>
			-->
			<li><b>Top Newcomer Evangelist</b> - The individual who best welcomes new people into the Eclipse community through the Newcomers forum, blogging, creating resources like demos and tutorials, participating in Eclipse groups on social media sites and IRC.
			<br><a href="http://marketplace.eclipse.org/nominations/top-newcomer-evangelist" target="blank">Current nominees</a>	
			</li>		
		</ul>				
		
		<h2>Project Nominations</h2>
        <p>Nominations are now closed.  The winners will be announced at EclipseCon 2012</p>
				<ul class="midlist">
			<li><b>Most Innovative New Feature or Project</b> - A feature added in 2011 to an existing project hosted by the Eclipse Foundation or a new Eclipse project introduced in 2011 that is used and loved by the community.
			<br>
			<a href="http://marketplace.eclipse.org/nominations/most-innovative-project" target="blank">Current nominees</a>
			</li>
			<li><b>Most Open Project</b> - A project hosted by the Eclipse Foundation that best exemplifies the openness, transparency and diversity expected of great open source projects.
			<br><a href="http://marketplace.eclipse.org/nominations/most-open-project" target="blank">Current nominees</a>
			</li>
		</ul>
		
		<h2>Technology Nominations</h2>
        <p>Nominations are now closed.  The winners will be announced at EclipseCon 2012</p>
		
		<ul class="midlist">
			<li><b>Best Application</b> - An application that illustrates the most innovative use of Eclipse technology.
			<br><a href="http://marketplace.eclipse.org/nominations/best-application" target="blank">Current nominees</a>	
			</li>	
			<li><b>Best Developer Tool</b> - A commercial or open source product that provides an innovative, high quality tool for software developers.
			<br><a href="http://marketplace.eclipse.org/nominations/best-developer-tool" target="blank">Current nominees</a>	
			</li>
			<!--<li><b>Best Mobile Product</b> - An Eclipse-based product that best addresses the needs of mobile developers.
			<br><a href="http://marketplace.eclipse.org/nominations/best-mobile-product" target="blank">Current nominees</a>
			</li>-->
			<li><b>Best Modeling Product</b> - An Eclipse-based product that best addresses the needs of the modeling industry.
			<br><a href="http://marketplace.eclipse.org/nominations/best-modeling-product" target="blank">Current nominees</a>
			</li>
		</ul>

		<h2>Determining Winners</h2>
		<p>
		The Individual and Project Award winners will be determined by a vote of the community. Each person will
		get to vote once per category from January 30, 2012 - February 24, 2012, 5:00 pm EST.  </p>
		
		<p>The Technology
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
		
		<h2>Questions</h2>
		<p>
			<a href="mailto:awards@eclipse.org">awards@eclipse.org</a>
		</p>
		
		<h2>Important Dates</h2>
	
			<ul>
				<li>Nominations open - December 5, 2011</li>
				<li>Nominations close - January 27, 2012</li>
				<li>Voting begins for Individual & Project Awards - January 30, 2012</li>
				<li>Voting ends for Individual & Project Awards - February 24, 2012 at 5:00 pm EST</li>
				<li>Finalists Announced - March 9, 2012</li>
				<li>Winners Announced at EclipseCon - March 26, 2012</li>
			</ul>
		

	</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
