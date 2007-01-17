<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Results of Eclipse Training Survey Released";
	$pageKeywords	= "Eclipse, Training, Survey, 2007";
	$pageAuthor		= "Nathan Gervais";
	
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
		
		<p>The Eclipse Training Working Group has completed its survey of the community and the results are available at <a href="http://wiki.eclipse.org/index.php/Training_Working_Group">http://wiki.eclipse.org/index.php/Training_Working_Group</a>
<br/><br/>
The survey was responded to by over 600 people and although its not a truly scientific sample, it does provide some very good insights into the area of Eclipse training and education which should be useful to us all.
<br/><br/>
Thanks to all the people who contributed to the development of the survey, to the community members who participated, and especially to Donald Smith who supported the Working Group in using "Survey Monkey" 
to prepare questionnaire and analyze the results.		</p>
		


	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

