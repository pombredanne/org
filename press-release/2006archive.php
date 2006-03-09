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
	$pageTitle 		= "Eclipse Foundation 2006 Press Releases Archive";
	$pageKeywords	= "2006, press, releases, eclipse, foundation";
	$pageAuthor		= "Nathan Gervais";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<h2>2006 Press Releases</h2>
		<hr size="1" />
		<ul>
		<li><a href="20060309cb_elections.php">Eclipse Foundation Announces 2006 Board Member Election Results</a> - March 9th, 2006</li><br>		
		<li><a href="20060123birt20.php">Actuate, IBM, Pentaho, Scapa Technologies and Zend Commit to Eclipse BIRT 2.0</a> - January 23, 2006 </li> <br>
		<li><a href="20060120cb_pavilion.php">Nominations for the <i>Open Source Pavilion</i> at EclipseCon 2006</a> - January 20, 2006 </li> <br>
		<li><a href="20060117goldsponsors.php">Gold Sponsors Announced for EclipseCon 2006 </a> - January 17, 2006 </li> <br>
		<li><a href="20060104seminars.php">Eclipse Foundation Kicks Off Seminar Series: “Eclipse In Motion”</a> - January 4, 2006 </li><br>
		</ul>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="main.html">2001-2005 Archives</a></li>
				<li><a href="pressrelease_guidelines.php">Press Release Guidelines</a></li>

			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>