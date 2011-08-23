<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon Europe 2011 Keynotes";
	$pageKeywords	= "eclipse, Indigo, conference, eclipsecon, keynote";
	$pageAuthor		= "Anne Jacko";
	
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
		
		<p>The Eclipse Foundation is pleased to announce the <a href="http://www.eclipsecon.org/europe2011/content/keynotes">keynote presenters</a> 
		for EclipseCon Europe 2011 (ECE), the premier European event for the Eclipse community.</p> 
		
		<ul>
		<li>John Swainson, former vice-president at IBM, will reflect on IBM's decision to open-source Eclipse in 2001, and the impact of that decision on the software industry</li>
		<li>David Cuartielles, an inventor of Arduino, will talk about this popular open-source hardware platform</li>
		<li>Bran Selic, an expert on designing large-scale industrial software systems, will present <i>Model-Based Software Engineering in Industry: Revolution, Evolution, or Smoke?</i></li>
		</ul>

		<p>ECE also includes the <a href="http://www.eclipsecon.org/europe2011/content/java-7-summit">Java 7 Summit</a>, organized in collaboration with Oracle. 
		<a hrf="http://www.eclipsecon.org/europe2011/registration">Registration</a> is open, with early prices in effect now. The conference will be November 2 - 4, 2011, in Ludwigsburg, Germany.
		</p> 

		<br><br>		
				
 	<br><br>
 	
	</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>