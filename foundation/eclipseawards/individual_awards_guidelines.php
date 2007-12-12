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
		
		<p>
			The Individual Awards are determined by a vote of the community. One vote per person, per category.
		</p>
		
		<p>
			Individuals may be nominated by anyone in each category.  To see the Bugzilla entries for the individual nominations, visit
			the following links.
		</p>
		
		<ul class="midlist">
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=168235">Nominations for Top Ambassador Award</a> - voted on by
			everyone.</li>
			<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=168238">Nominations for Top Committer Award</a> - voted on by
			everyone.</li>
			<li>The <strong>Most Prolific Newcomer Evangelist Award</strong> is awarded to the individual that answered the most questions posted on
			the <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.newcomer">eclipse.newcomer</a> newsgroup. The period
			of calculation is from February 21, 2007 to February 21, 2008.</li>
		</ul>
		
		<p>
			Nominations open December 14, 2007 and close January 25, 2008.  After nominations are posted, voting commences January 30,
			2008 and finishes February 21, 2008.  Winners will be announced at <a href="http://www.eclipsecon.org/">EclipseCon 2008</a>.
		</p>

		<p>
			<strong>Note:</strong> Eclipse is a large, vibrant community of many well-deserving individuals and technologies.
			Therefore, to ensure diversity of award winners, we have decided that winners from the previous year will not be eligible
			for a repeat award.  This does not mean that they are not deserving, it is just an acknowledgment that others are also 
			deserving of recognition.
		</p>

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
