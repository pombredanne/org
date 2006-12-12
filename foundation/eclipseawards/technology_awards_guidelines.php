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
	$pageTitle 		= "Technology Awards";
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
		<p>The Technology Awards will be determined by a panel of judges.   The judges will be selected from Eclipse oriented editors and 
		Eclipse project leaders.  The panel of judges will determine the winner based on a 
		majority vote.  </p>
		<p>Anyone may nominate an open source project, product or organization.  Vendors 
		may nominate their own products and may nominate organization for the 
		'Best deployment' award.   <strong>Nominations will close January 22, 2007.</strong></p>
		
		
		<h3>Judging Criteria</h3>
		<p>The criteria for judging for the open source and commercial product awards will be: 
		<ol> <li>Usability and intuitiveness of the user interface - Is the product user interface easy to understand</li>
			<li>Innovation and Uniqueness - How cleverly does it solve the problem</li>
			<li>Completeness - How well does it solve the problem, including technology, documentation, 
			tutorials, web site, community support, etc.</li>
		</ol></p>
		<p>The criteria for judging for the 'best deployment' award will be: 
		<ol> <li> The number of Eclipse projects being used. </li>
			<li>The scale & importance of internal applications being deployed </li>
			<li>The scale of the deployment, ie how many people are affected. </li>
		</ol> </p>	<br>
		
		<p><strong>Note:</strong> Eclipse is a large vibrant community of many well deserving individuals and technologies.  Therefore, to ensure diversity of award winners, we have decided
		that previous year winners will not be eligible for a repeat award.   This does not mean that they are not deserving, it is just a recognition that others are also 
		deserving of recognition.</p><br><br>

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
