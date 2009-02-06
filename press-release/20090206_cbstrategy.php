<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Announcing the Open Source Executive Strategy Summit";
	$pageKeywords	= "eclipse, strategy, summit, executive, open source";
	$pageAuthor		= "Nathan Gervais";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<style>
		.paddedlist li {	padding-bottom:7px;	}
	</style>
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
	
		<p>The Eclipse Foundation is organizing an Open Source Executive Strategy Summit on March 26 in Santa Clara, CA (same location at EclipseCon).   The Summit is for executives who are responsible for their organizations open source strategy and participation.   The purpose of event is to answer two questions: 1) 'What Open Source Strategies Are Working Today?' and 2) 'What Will Work in the Future?'.   It will feature industry speakers, case studies and group discussions that analyze the different aspects of an open source strategy, including product strategy, licensing, development models and community building.   Participants will have the opportunity to learn the success factor and challenges of existing open source strategies.
		</p>
		
		<p>Registration is by invitation.  To request an invitation please send an e-mail to <a href="mailto:strategysummit@eclipse.org">strategysummit@eclipse.org</a>.  More details about the agenda and the event are available <a href="http://www.eclipse.org/org/foundation/membersminutes/20090326StrategySummit/agenda.php">here</a>.</p>

	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/foundation/membersminutes/20090326StrategySummit/agenda.php">Open Source Executive Strategy Summit</a></li>
			</ul>
		</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php
/*
 * Created on 20-Jan-2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
