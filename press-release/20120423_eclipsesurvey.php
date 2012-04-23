<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Provide Your Input to the Eclipse Community Survey";
	$pageKeywords	= "eclipse, community, awards, winners";
	$pageAuthor		= "Anne Jacko";
	
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
		#midcolumn ul ul{padding-bottom:0px;}
	</style>
	
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
<p> The Eclipse Foundation would like your participation in the <a href="http://www.surveymonkey.com/s/eclipse_survey">Eclipse Community Survey</a>.  
This annual survey helps document the requirements and trends within the Eclipse developer community.  The survey results will be published in June 2012.  </p>
<p>Everyone in the Eclipse community is encouraged to complete the <a href="http://www.surveymonkey.com/s/eclipse_survey">online survey.</a>   It should take between 5-10 minutes to provide your feedback.   
As a token of appreciation, all respondents will be entered into a draw for a chance to Eclipse shirts and win a pass to EclipseCon Europe or EclipseCon NA.  
The deadline to particiate in the survey is May 15, 2012.</p>

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
