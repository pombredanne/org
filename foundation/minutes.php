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
		<h1><a name="top">$pageTitle</a></h1>
        <ul>
			<li><a href="#board">Board of Directors Meetings</a></li>
			<li><a href="#members">Members Meetings</a></li>
			<li><a href="#councils">Council Meetings</a></li>	
			<li><a href="minutes_archive.php">Meeting minutes archive</a> (for older content)</li>
		</ul>
		
		<div class="homeitem3col">
			<h3><a name="board">Board of Directors Meetings</a></h3>
			<ul><li>Abridged Minutes 
          			- <a href="boardminutes/2012_10_22_Minutes.php">October 22, 
          			2012 (html)</a> </li>
          		<li>Abridged Minutes 
          			- <a href="boardminutes/2012_09_19_Minutes.php">September 19, 
          			2012 (html)</a> </li>
          		<li>Abridged Minutes 
          			- <a href="boardminutes/2012_06_19-20_Minutes.php">June 19-20, 
          			2012 (html)</a> </li>
          		<li>Abridged Minutes 
          			- <a href="boardminutes/2012_05_16_Minutes.php">May 16, 
          			2012 (html)</a> </li>
          		<li>Abridged Minutes 
          			- <a href="boardminutes/2012_04_18_Minutes.php">April 18, 
          			2012 (html)</a> </li>
          		<li>Abridged Minutes 
          			- <a href="boardminutes/2012_03_26_Minutes.php">March 26, 
          			2012 (html)</a></li>
          		<li>Abridged Minutes 
          			- <a href="boardminutes/2012_02_15_Minutes.php">February 15, 
          			2012 (html)</a></li>
          		<li>Abridged Minutes 
          			- <a href="boardminutes/2012_01_18_Minutes.php">January 18, 
          			2012 (html)</a>
          			<!-- <img src="../../images/new.gif" alt="new"> --> </li>

          	</ul>

		Abridged minutes for older board meetings can be found in the <a href="minutes_archive.php#board">minutes archive</a>.
				
		</div>
		<div class="homeitem3col">
			<h3><a name="members">Members Meetings</a></h3>
			
		<p>The minutes for Members meetings after June, 2008 are hosted on <a target="_memonly" href="https://dev.eclipse.org/members-only/index.php">members only content page.</a></p>

		<p>Minutes for Members meetings prior to June, 2008 can be found in the <a href="minutes_archive.php#members">minutes archive</a>.</p>
	
		</div>
	<div class="homeitem3col">
			<h3><a name="councils">Council Meetings</a></h3>
			<ul>
       		<li><a href="council.php">Council Meeting minutes are categorized on the council page.</a></li>
 			</ul>	
		</div>
		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
