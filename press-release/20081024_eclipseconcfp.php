
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Submit a Presentation for EclipseCon";
	$pageKeywords	= "Eclipse Foundation, EclipseCon, open source, cfp, submission";
	$pageAuthor		= "Lynn Gayowski";
	
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
		The Eclipse Foundation is inviting all members of the community to submit ideas for tutorials, long talks, short talks, posters
		and birds of a feather sessions for <a href="http://www.eclipsecon.org">EclipseCon 2009</a>.  The categories for submission this year
		include Runtime, C/C++, Tools, Mobile and Embedded, Modeling, Reporting, SOA, Test &amp; Performance,
		Emerging Technology, and Business and Industry Verticals.
		</p>
		
		<p>
		If you have expertise building and working
		with Eclipse, share your knowledge with the Eclipse community by making a submission today.
		The deadline for tutorial and talk proposal is <b>November 24, 2008</b>.
		</p>
		
		<p>
		EclipseCon 2009 will be held March 23-26 in Santa Clara, CA.
		</p>
	  
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

