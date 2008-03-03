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
	$pageTitle 		= "Eclipse Community Awards";
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
		
		<p>
			The Eclipse Community Awards were created to recognize and thank the individuals and technologies that make Eclipse a
			vibrant	community.  There are two categories of awards: 1) awards for individuals, and 2) awards for technologies and
			products.   The awards will be presented on March 17, 2008 at <a href="http://www.eclipsecon.org/2008/">EclipseCon
			2008</a>.
		</p>
	
		<h3>Individual Awards</h3>
		<p>
			<ol>
				<li><strong>Top Ambassador</strong> - Recognizes an individual (committer or non-committer) who best promotes and
				supports the Eclipse community.  Everyone can vote on this award.</li>
				<li><strong>Top Committer</strong> - Recognizes an Eclipse committer who best exemplifies support for the community
				through newsgroups, Bugzilla, white papers, conference presentations, blogs and other forums.  Everyone can vote for
				this award.</li>
				<li><strong>Top Contributor</strong> - Recognizes an Eclipse contributor who best exemplifies support for the community through submission of patches & comments on bugs,
						posts to newsgroups, creation of white papers, presentations at conferences, blogs, IRC 
						and other forums.  Top contributors make their contributions due to their passion for 
						making Eclipse a better community.  In general, no one is paying them for the time they 
						spend on making their Eclipse contributions. Everyone can vote on this award.
 				<li><strong>Most Prolific Newcomer Evangelist</strong> - This individual best exemplifies the welcoming of new people into the
				Eclipse community.  This award will be presented to the individual that has answered the most questions raised on the
				<a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.newcomer">eclipse.newcomer</a> newsgroup.</li>
			</ol> 	
		</p>

		<h3>Technology Awards</h3>
		<p>
			<ol>
				<li><strong>Best Commercial Eclipse-Based Developer Tool</strong> - Recognizes a commercial product that provides an
				innovative, high quality product for software developers.</li>
				<li><strong>Best Open Source Eclipse-Based Developer Tool</strong> - Recognizes an open source project (not hosted at
				Eclipse) that provides an innovative, high quality product for software developers.</li>
				<li><strong>Best Commercial Equinox Application</strong> - Recognizes a commercial product that illustrates the
				most innovative use of Eclipse Equinox.</li>
				<li><strong>Best Open Source Equinox Application</strong> - Recognizes an open source project (not hosted at
				Eclipse) that illustrates the most innovative use of Eclipse Equinox.</li>
				<li><strong>Best Commercial RCP Application</strong> - Recognizes a commercial product that illustrates the
				most innovative use of Eclipse RCP for end user applications.</li>
				<li><strong>Best Open Source RCP Application</strong> - Recognizes an open source project (not hosted at
				Eclipse) that illustrates the most innovative use of Eclipse RCP for end user applications.</li>
			</ol>
		</p>
		
		<h3>Important Dates</h3>
		<p>
			<ul>
				<li><font color="#A9A9A9">Nominations open - December 14, 2007</font></li>
				<li><font color="#A9A9A9">Nominations close - January 25, 2008</font></li>
				<li><font color="#A9A9A9">Voting begins for Individual Awards - January 30, 2008</font></li>
				<li><font color="#A9A9A9">Voting ends for Individual Awards - February 21, 2008 at 5:00 pm EST</font></li>
				<li>Awards Announced - March 17, 2008</li>
			</ul>
		<br><br>	
		</p>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
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
		<div class="sideitem">
			<h6>Top Ambassador</h6>
			<div align="center"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=213056"><img 
		  		src="ambassador-picture.gif" border="0"/></a></div>
		</div>
		<div class="sideitem">
			<h6>Top Committer</h6>
			<div align="center"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=213059"><img 
		  		src="committer-picture.gif" border="0"/></a></div>
		</div>
		<div class="sideitem">
			<h6>Top Contributor</h6>
			<div align="center"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=214525"><img 
		  		src="contributor-picture.gif" border="0"/></a></div>
		</div>


	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>