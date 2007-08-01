<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Community Survey";
	$pageKeywords	= "Eclipse Survey";
	$pageAuthor		= "Ian Skerrett";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
		<p>
			<strong>Tell us your opinion by completing the Eclipse Community Survey</strong>
		</p>
		<p>
			The Eclipse Foundation, in partnership with <a href="http://www.idc.com">IDC</a>, has created the first Eclipse Community Survey. 
			The purpose of the survey is to better understand how individuals and organizations participate in 
			and contribute to the Eclipse community.   We are asking everyone on the Eclipse community to please 
			take the time to complete the survey and let us know your opinion.   
		</p>
		<p>  
			The survey will take 10-15 minutes to complete and all information will be held in confidence by IDC.
			  Later this Fall, IDC will publish a report and analysis of the consolidated results.  This report 
			  will be freely available to everyone in the Eclipse community. 
		</p>
		<p> 
			Participants in the survey will have a chance to win a Nokia N95 phone and some cool Eclipse shirts.  
			Thanks to Nokia for donating the phone visit <a href="http://www.forum.nokia.com">www.forum.nokia.com</a> to see how to build exciting 
			applications for the Nokia N95 phone. 
		</p>
 
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
