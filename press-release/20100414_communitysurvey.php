<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Community Survey: Tell Us What You Are Doing";
	$pageKeywords	= "eclipse, survey, feedback";
	$pageAuthor		= "Ian Skerrett";
	
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
			

	<p>
	The Eclipse Foundation wants to better understand how you develop software, use Eclipse and interact with open source communities.  Therefore, we are asking people to give us 
	their feedback by participating in the <a href="http://www.surveymonkey.com/s/eclipse2010">Eclipse Community Survey 2010</a>.  The results will be published by the Eclipse Foundation in June 2010.
	</p>
	<p>Everyone is invited to complete the survey before May 15, 2010. It should take less than 10 minutes to complete. All responses will be held in confidence. As a token of appreciation, 
	survey participants will be entered into a draw for an opportunity to win Eclipse shirts and grand prize of a pass to <a href="http://www.eclipsecon.org/summiteurope2010/">Eclipse Summit Europe 2010</a>
	or <a href="http://www.eclipsecon.org/2011/">EclipseCon 2011</a>.
	</p>

	<p>Thank you in advance for your time and support.</p>
		
		
	</div>


	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.surveymonkey.com/s/eclipse2010">Take the Survey</a>	</ul>
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
