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
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

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
		products.   The awards will be announced at 
		EclipseCon. </p>
		
		<p><a href="awards_nominations.php">Nominations</a> are now open for all of the following awards. </p>
	<h3>Individual Awards</h3>
		<p> <ol>
		<li><strong>Top contributor</strong> - Recognizes an individual (non-committer) that has made substantial contribution to the Eclipse community.</li>    
		<li><strong>Top committer</strong> – Recognizes an Eclipse committer that best exemplifies supporting the community through newsgroups, bugzilla, white papers, conference presentations, blogs, etc..</li>   
		<li><strong>Top ambassador</strong> – Recognizes an individual (committer or non-committer) that best promotes cross project interactions and building a collaborative Eclipse developer community.</li>    
		</ol> </p>
</p>

	<h3>Technology Awards</h3>
		<p><ol>
			<li><strong>Best open source RCP application</strong> – Recognizes an open source project (not hosted at Eclipse) that illustrates the most innovative use of Eclipse RCP for end user applications.
			<li><strong>Best commercial RCP application</strong> - Recognizes a commercial product that illustrates the most innovative use of Eclipse RCP for end user applications.
			<li><strong>Best open source Eclipse based developer tool</strong> – Recognizes an open source project (not hosted at Eclipse) that provides an innovative, high quality product for software developers.
			<li><strong>Best commercial Eclipse based developer tool</strong> – Recognizes a commercial product that provides an innovative, high quality product for software developers.
			<li><strong>Best deployment of Eclipse technology in an enterprise</strong> – Recognizes an organization that has used and deployed Eclipse within an enterprise.
		</ol></p>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="awards_nominations.php">Submit a Nomination</a></li>
				<li><a href="individual_awards_guidelines.php">Guidelines for Individual Awards</a></li>
				<li><a href="technology_awards_guidelines.php">Guidelines for Technology Awards</a></li>
			</ul>
		</div>

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
