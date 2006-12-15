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
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Guidelines</h2>
		<p>The Individual Awards will determined by a vote of the community. One vote per person, per category.</p>
		<p>Anyone may nominate an individual in each category.   
		To nominate an individual visit the following Bugzilla entries. <strong>Nominations will close January 22, 2007. </strong> </p>
		<ul class="midlist">
		  <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=168235">Nominations for Top Ambassador Award</a>
		  		- to be voted on by everyone.</li>
		  <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=168237">Nominations for Top Contributor Award</a> 
		  		- to be voted on by Committers.</li>
		  <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=168238">Nominations for Top Committer Award</a>
		  		- to be voted on by everyone.</li>

		  <li>The <strong>Newcomer Evangelist Award</strong> will be awarded to the individual that answers the most questions posted
		  on the <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.newcomer">eclipse.newcomer</a> newsgroup. The period of calculation will be from February 15, 2006 to February 15, 2007. </li>
		</ul>
		<p> Voting will commence January 29, 2007 and finishes February 16, 2007. 
		Winners will be announced at <a href="http://www.eclipsecon.org/">EclipseCon 2007</a>. </p>

		<p><strong>Note:</strong> Eclipse is a large vibrant community of many well deserving individuals and technologies.  Therefore, to ensure diversity of award winners, we have decided
		that previous year winners will not be eligible for a repeat award.   This does not mean that they are not deserving, it is just a recognition that others are also 
		deserving of recognition.</p><br><br>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
