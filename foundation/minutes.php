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
			    <li><a target="_memonly" href="https://dev.eclipse.org/members-only/index.php">Members Minutes on/after June 24, 2008 is hosted on members only content page.</a> <img src="../../images/new.gif" alt="new"></li>  			
				<li><a href="membersminutes/20080317MembersMeeting/MeetingMinutes.php">Eclipse Members Meeting, March 17th, 2008, Santa Clara Convention Center </a></li>  			
				<li><a href="membersminutes/Eclipse%20December%202007%20Members%20Teleconference.pdf">Eclipse Members Meeting, December 18th, 2007 Teleconference Presentation Material (pdf) </a> </li>  			
	     		<li><a href="membersminutes/20070919MarketingSymposium/MeetingMinutes.php">Eclipse Marketing Symposium, September 19, 2007 Chicago, Illinois </a> </li>  			
	     		<li><a href="membersminutes/20070920MembersMeeting/MeetingMinutes.php">Eclipse Members Meeting, September 20, 2007 Chicago, Illinois </a></li>  			
				<li><a href="membersminutes/2007-06-19%20Members%20Meeting.pdf">Eclipse Members Meeting, June 19th, 2007 Teleconference Presentation Material (pdf) </a> </li>  			
				<li><a href="membersminutes/2007-03-05%20ED%20Update.pdf">Eclipse Members Meeting, March 5th, 2007 EclipseCon, Santa Clara Convention Center (pdf) </a> </li>  			
				<li><a href="membersminutes/Eclipse%20December%202006%20Members%20Teleconference.pdf">Eclipse Members Meeting, December 5th, 2006 Teleconference Presentation Material (pdf) </a> </li>  			
				<li><a href="membersminutes/20060921MembersMeeting/MeetingMinutesSep21.php">Eclipse Members Meeting, September 21, 2006 Dallas, Texas </a> </li>  			
	      		<li><a href="membersminutes/20060920MarketingSymposium/MeetingMinutesSep21.php">Eclipse Marketing Symposium, September 20, 2006 Dallas, Texas </a> </li>  			
        		<li><a href="membersminutes/Eclipse%20June%202006%20Members%20Teleconference.pdf">Eclipse Members Meeting, June 20, 2006 Teleconference Presentation Material (pdf) </a> </li>  
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
          			- <a href="boardminutes/2009_02_18_Minutes.php">February 18, 
          			2009 (html)</a><img src="../../images/new.gif" alt="new"></li>
				<li>Abridged Minutes 
          			- <a href="boardminutes/2009_01_21_Minutes.php">January 21, 
          			2009 (html)</a><img src="../../images/new.gif" alt="new"></li>
				<li>Abridged Minutes 
          			- <a href="boardminutes/2008_12_10-11_Minutes.php">December 10-11, 
          			2008 (html)</a><img src="../../images/new.gif" alt="new"></li>
				<li>Abridged Minutes 
          			- <a href="boardminutes/2008_11_19_Minutes.php">November 19, 
          			2008 (html)</a></li>
          		<li>Abridged Minutes 
          			- <a href="boardminutes/2008_10_15_Minutes.php">October 15, 
          			2008 (html)</a></li>
				<li>Abridged Minutes 
          			- <a href="boardminutes/2008_09_17_Minutes.php">September 17, 
          			2008 (html)</a></li>
				<li>Abridged Minutes 
          			- <a href="boardminutes/2008_08_20_Minutes.php">August 20, 
          			2008 (html)</a></li>
				<li>Abridged Minutes 
          			- <a href="boardminutes/2008_06_18-19_Minutes.php">June 18-19, 
          			2008 (html)</a></li>
				<li>Abridged Minutes 
          			- <a href="boardminutes/2008_03_17_Minutes.php">March 17, 
          			2008 (html)</a></li>
				<li>Abridged Minutes 
          			- <a href="boardminutes/2007_12_12-13_Minutes.php">December 12-13, 
          			2007 (html)</a></li>
				<li>Abridged Minutes 
          			- <a href="boardminutes/2007_09_19_Minutes.php">September 19, 
          			2007 (html)</a></li>
				<li>Abridged Minutes 
          			- <a href="boardminutes/2007_06_20-21_Minutes.php">June 20-21, 
          			2007 (html)</a></li>
			    <li>Abridged Minutes 
          			- <a href="boardminutes/2007_03_05_Minutes.php">March 5, 
          			2007 (html)</a></li>
        		<li>Abridged Minutes 
          			- <a href="boardminutes/2006_12_13-14_Abridged_Minutes.pdf">December 13-14, 
          			2006 (pdf)</a></li>
           		<li>Abridged Minutes 
          			- <a href="boardminutes/2006_09_20_Abridged_Minutes.pdf">September 20, 
          			2006 (pdf)</a></li>
        		<li>Abridged Minutes 
          			- <a href="boardminutes/2006_06_27-28_Abridged_Minutes.pdf">June 26-27,
          			2006 (pdf)</a></li>
        		<li>Abridged Minutes 
          			- <a href="boardminutes/2006_03_20_Abridged_Minutes.pdf">March 20, 
          			2006 (pdf)</a></li>          			          			
        		<li>Abridged Minutes 
          			- <a href="../board/minutes/2005_12_13-14_Abridged_Minutes.pdf">December 13-14, 
          			2005 (pdf)</a></li>          			
        		<li>Abridged Minutes 
          			- <a href="../board/minutes/2005_09_21_Abridged_Minutes.pdf">September 21, 
          			2005 (pdf)</a></li>
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
       		<li><a href="council.php">Council Meeting minutes are categorized on the council page.</a></li>
 			</ul>	
		</div>
		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
