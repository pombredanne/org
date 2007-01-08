<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "2007 Eclipse Webinar Series Kickoff";
	$pageKeywords	= "Eclipse, webinar, 2007";
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
		
		<p>Eclipse is kicking off its webinar series with 2 events in January.  Both webinars are free to attend, so please register if you are interested.<br/>
		<br/>
		<b>Eclipse Data Binding Test Drive</b><br/>
		January 10, 2007 at 8:00 am PST / 11:00 am EST / 5:00 pm CET<br/>
		Presented by David Orme, Eclipse Committer<br/>
		To register email <a href="mailto:webinar-databinding@eclipse.org">webinar-databinding@eclipse.org</a><br/>
		<br/>
		<b>The Javaserver Faces Tools Project</b><br/>
		January 23, 2007 at 8:00 am PST / 11:00 am EST / 5:00 pm CET<br/>
		Presented by Raghu Srinivasan, JSF Project Leader<br/>
		To register email <a href="mailto:webinar-jsf@eclipse.org">webinar-jsf@eclipse.org</a><br/>
		<br/>
		For more information visit <a href="http://www.eclipse.org/community/webinars2006.php">http://www.eclipse.org/community/webinars2006.php.</a><br/>
		<br/>
		<br/>
		Special thanks to Adobe for contributing access to their Adobe Connect meeting service to host these webinars.<br/>
		</p>
		


	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

