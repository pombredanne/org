<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon Europe 2011 Call for Papers";
	$pageKeywords	= "eclipse, Indigo, conference, eclipsecon";
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
	<div id="fullcolumn">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>
		
		<h2>Community Bulletin</h2>
		
		<p>The EclipseCon Europe (ECE) 2011 <a href="http://www.eclipsecon.org/europe2011/content/submissions-are-open">Call for Papers</a> is now open!</p> 
		
		<p>We are looking for high-quality talks on a variety of topics. This year's themes are Eclipse Technology, Building Industry Solutions, 
		Community and Collaboration, and Other. The submission deadline is August 17. We encourage you to submit early, since the community and the 
		program committee will be reviewing, commenting on, and voting for submissions between now and the submission deadline on August 17.</p> 

		<p>Details about submitting, speaker policies, and sponsorships are on the <a href="http://www.eclipsecon.org/europe2011">ECE website</a>.</p> 
 
		<p>EclipseCon Europe will be three full days of tutorials, sessions, exhibits, and networking events, November 2-4, in Ludwigsburg, Germany. 
		We are also marking the 10th birthday of Eclipse at ECE, so please join us for the celebration.</p> 

		<br><br>		
				
 	<br><br>
 	
	</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>