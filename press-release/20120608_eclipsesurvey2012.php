<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Result of 2012 Eclipse Community Survey";
	$pageKeywords	= "eclipse, survey, open source";
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
		#midcolumn ul ul{padding-bottom:0px;}
	</style>
	
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
<br>
<p>The Eclipse Foundation has released the results of the Eclipse Community Survey 2012. The purpose of the survey is to better understand 
how the Eclipse community uses Eclipse and open source software and how people participate in and perceive open source software. A 
<a href="http://www.slideshare.net/IanSkerrett/eclipse-survey-2012-report-final">report</a>, an <a href="http://ianskerrett.wordpress.com/2012/06/08/eclipse-community-survey-result-for-2012/">analysis</a>
and the detailed data <a href="http://eclipse.org/org/community_survey/Survey_Final_Results_2012.ods>[ods]</a> <a href="http://eclipse.org/org/community_survey/Survey_Final_Results_2012.xls">[xls]</a> are all available.</p>


	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.slideshare.net/IanSkerrett/eclipse-survey-2012-report-final">Report</a></li>
				<li><a href="">Analysis</a>http://ianskerrett.wordpress.com/2012/06/08/eclipse-community-survey-result-for-2012/</li>
				<li>Detailed Data<a href="http://eclipse.org/org/community_survey/Survey_Final_Results_2012.ods">[ods]</a><a href="http://eclipse.org/org/community_survey/Survey_Final_Results_2012.xls">[xls]</a></li>
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

