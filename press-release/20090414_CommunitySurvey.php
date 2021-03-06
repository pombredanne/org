<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Community Survey: Tell us what you are using";
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

		<h2>Community Bulletin</h2>	

		<p>The Eclipse Foundation is requesting your participation in a <a href="http://www.eclipse.org/go/spring09survey">community survey</a>.  The intent of the survey
		is to better understand how individuals use development tools, use open source software and interact with the
		Eclipse community.  The Eclipse Foundation plans to publish the survey results in June 2009.
		</p>
		<p> Everyone is invited to <a href="http://www.eclipse.org/go/spring09survey">complete the survey</a> before May 15, 2009.  It should take about 5 minutes to complete.  
		All responses will be held in confidence.  As a token of appreciation, survery participants will be entered into a draw for an opportunity to win Eclipse shirts and jackets.
		</p>
		<p>Thank you in advance for your support.</p>

	</div>
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/go/spring09survey">Community Survey</a></li>
			</ul>
		</div>
	</div>	

	
</div>


		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


