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
	$pageTitle 		= "Individual Awards";
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
		<h2>Guidelines</h2>
		<p>The Individual Awards will determined by a vote of the community. One vote per person, per category.</p>
		<p>Anyone may nominate an individual in each category.   
		To nominate an individual visit the following Bugzilla entries. <strong>Nominations will close January 27. </strong> </p>
		<ul class="midlist">
		  <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=119197">Nominations for Top Contributor Award</a> 
		  		- to be voted on by Committers.<p>
		  		<div align="center"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=119197"><img 
		  		src="contributor-picture.gif" border="0"/></a></div></li>
		  <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=119198">Nominations for Top Committer Award</a>
		  		- to be voted on by non-Committers.</li>
		  <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=119199">Nominations for Top Ambassador Award</a>
		  		- to be voted on by everyone.</li>
		</ul>
		<p> Voting will commence February 10, 2006 and finishes March 10, 2006. 
		Winners will be announced at <a href="http://www.eclipsecon.org/">EclipseCon 2006</a>. </p>

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
