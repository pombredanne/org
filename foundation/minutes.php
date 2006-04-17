<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_3col.php
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
	$pageTitle 		= "Meeting Minutes";
	$pageKeywords	= "foundation, minutes, legal";
	$pageAuthor		= "Mike Milinkovich, Nov 24, 2005";
	
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
		<div class="homeitem3col">
			<h3>Members Meetings</h3>
			<ul>
        		<li><a href="membersminutes/20060320MembersMeeting/MeetingMinutesMar20.php">Eclipse Members Meeting, March 20, 2006, Santa Clara, CA </a></li>  
       			<li><a href="membersminutes/20050922MembersMeeting/MeetingMinutesSept22.html">Eclipse Members Meeting, September 22, 2005, Chicago, IL </a></li>  
        		<li><a href="membersminutes/20050921MarketingSymposium/MeetingMinutessept21.html">Eclipse Marketing Symposium, September 21, 2005, Chicago. IL</a> </li>  
        		<li><a href="membersminutes/June%202005%20Meeting%20Presentation.pdf">Eclipse Members Meeting, June 10, 2005 Teleconference Presentation Material (pdf) </a> </li>  
        		<li><a href="membersminutes/20050228MembersMeeting/MeetingMinutesFeb28.html">Eclipse Members Meeting, February 28, 2005, Burlingame, CA</a> </li>
        		<li> <a href="membersminutes/Members%20Meeting%20Presentation%20Package%20Dec.%2016.pdf">Eclipse Members Meeting, December 16, 2004, Teleconference Presentation Material (pdf)</a></li>
        		<li><a href="membersminutes/MembersMeetingOct04.html">Eclipse Members 
        			Meeting, October 27, 2004, Dallas, Texas</a>        </li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Board of Directors Meetings</h3>
			<ul>
        		<li>Abridged Minutes 
          			- <a href="../board/minutes/2005_12_13-14_Abridged_Minutes.pdf">December 13-14, 
          			2005 (pdf)</a><img src="../../images/new.gif" alt="new"></li>
        		<li>Abridged Minutes 
          			- <a href="../board/minutes/2005_09_21_Abridged_Minutes.pdf">September 21, 
          			2005 (pdf)</a><img src="../../images/new.gif" alt="new"></li>
        		<li>Abridged Minutes 
          			- <a href="../board/minutes/2005_06_07_Abridged_Minutes.pdf">June 7-8, 
          			2005 (pdf)</a></li>
        		<li>Abridged Minutes 
          			- <a href="../board/minutes/2005_02_28_Abridged_Minutes.pdf">February 28, 
          			2005 (pdf)</a></li>
        		<li>Abridged Minutes 
        			- <a href="../board/minutes/2004_12_08_Meeting_Abridged-Minutes.pdf">December 8, 2004 (pdf)</a></li>
        		<li>Abridged Minutes 
        			- <a href="../board/minutes/2004_09_15_Abridged_Minutes.pdf">September 15, 2004 (pdf</a>)</li>
        		<li>Abridged Minutes 
          			- <a href="../board/minutes/2004_06_25%20Abridged%20Minutes.pdf">June 25, 
          			2004 (pdf</a>)</li>
			</ul>	
		</div>
		<div class="homeitem3col">
			<h3>Council Meetings</h3>
			<ul>
			    <li><a href="../councils/rcminutes050824.html">Requirements Council Meeting, 
          			August 24, 2005</a><img src="../../images/new.gif" alt="new"></li>
        		<li><a href="../councils/20050517RCMinutes.htm">Requirements Council Meeting, 
          			May 17, 2005</a></li>
        		<li><a href="../councils/20041130RCMinutes.pdf">Requirements Council Meeting, 
          			November 30, 2004 (.pdf)</a></li>
        		<li><a href="../councils/20041201PCMinutes.pdf">Planning Council Meeting, 
          			December 1, 2004 (.pdf)</a></li>
        		<li><a href="../councils/20041202ACMinutes.pdf">Architecture Council Meeting, 
          			December 2, 2004 (.pdf)</a></li>
        		<li><a href="../councils/20040831RCMinutes.pdf">Requirements Council Meeting, 
          			August 31, 2004 (.pdf)</a></li>
        		<li><a href="../councils/20040901PCMinutes.pdf">Planning Council Meeting, 
          			September 1, 2004 (.pdf)</a></li>
        		<li><a href="../councils/20040902ACMinutes.pdf">Architecture Council Meeting, 
          			September 2, 2004 (.pdf)</a></li>
			</ul>	
		</div>
		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
