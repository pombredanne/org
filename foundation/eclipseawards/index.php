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
		<p>The Eclipse Community Awards are to recognize and 
		thank the individuals and technologies that make Eclipse such a vibrant
		robust community.    There are two categories of awards: 1) awards 
		for individuals, and 2) awards for technologies and 
		products.   The awards will be presented on March 5, 2007 at
		<a href="http://www.eclipsecon.org/2007/">EclipseCon 2007</a>. </p>
	

	<h3>Individual Awards</h3>
		<p><ol>
		<li><strong>Top Ambassador</strong> - Recognizes an individual (committer or non-committer) who 
		best promotes and supports the Eclipse community.  Everyone can vote on this award.</li>
 			
 		<li><strong>Top Contributor</strong> - Recognizes an individual (non-committer) 
		who has made substantial contribution to one or more Eclipse projects.  Committers vote for this award.
		</li>
		<li><strong>Top Committer</strong> - Recognizes an Eclipse committer who best exemplifies supporting 
		the community through newsgroups, bugzilla, white papers, conference presentations, blogs, etc.  Everyone can vote for this award.
		</li>
		<li><strong>Newcomer Evangelist</strong> - This individual best exemplifies welcoming new people into the Eclipse community.  This
		award will be presented to the individual that has answered the most questions raised on the <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.newcomer">eclipse.newcomer</a> newsgroup.</li>
		</ol> 	
 		<a href="http://www.eclipsecon.org/2007/index.php?page=awardsvote/">Vote</a> for an individual.</p>
</p>

	<h3>Technology Awards</h3>
		<p>
<ol>
			<li><strong>Best open source RCP application</strong> - Recognizes an open source project (not hosted at Eclipse) that illustrates the most innovative use of Eclipse RCP for end user applications.
			<li><strong>Best commercial RCP application</strong> - Recognizes a commercial product that illustrates the most innovative use of Eclipse RCP for end user applications.
			<li><strong>Best open source Eclipse based developer tool</strong> - Recognizes an open source project (not hosted at Eclipse) that provides an innovative, high quality product for software developers.
			<li><strong>Best commercial Eclipse based developer tool</strong> - Recognizes a commercial product that provides an innovative, high quality product for software developers.
			<li><strong>Best deployment of Eclipse technology in an enterprise</strong> - Recognizes an organization (non-ISV) that has used and deployed Eclipse within an enterprise.
		</ol>
 		<a href="./technology_nominations.php">Review</a> who has been nominated.
		</p>
		
	<h3>Important Dates</h3>
	<p><ul>
		<li><font color="#A9A9A9">Nominations opened - December 15, 2006</font></li>
		<li><font color="#A9A9A9">Nominations closed - January 22, 2007</font></li>
		<li><font color="#A9A9A9">Voting Begins for Individual Awards - January 29, 2007</font></li>
		<li>Voting Ends for Individual Awards - February 16, 2007</li>
		<li>Awards Announced - March 5, 2007</li>
	</ul></p><br>

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="individual_awards_guidelines.php">Guidelines for Individual Awards</a></li>
				<li><a href="technology_awards_guidelines.php">Guidelines for Technology Awards</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Top Contributor</h6>
			<div align="center"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=168237"><img 
		  		src="contributor-picture.gif" border="0"/></a></div>
		</div>
		<div class="sideitem">
			<h6>Top Committer</h6>
			<div align="center"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=168238"><img 
		  		src="committer-picture.gif" border="0"/></a></div>
		</div>
		<div class="sideitem">
			<h6>Top Ambassador</h6>
			<div align="center"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=168235"><img 
		  		src="ambassador-picture.gif" border="0"/></a></div>
		</div>

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>