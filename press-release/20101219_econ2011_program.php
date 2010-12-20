
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon 2011 Program Announced";
	$pageKeywords	= "eclipsecon, eclipse";
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
	    
      	<p>The Eclipse Foundation is pleased to announce the technical program for EclipseCon 2011.  The 4-day conference programm will feature 20 in-depth tutorials and over 100 sessions convering a wide
      	range of topics, including Eclipse Modeling, OSGi, EclipseRT, mobile development, Eclipse 4 and much more.</p>
      	<p>EclipseCon is scheduled for March 21-24, 2011 in Santa Clara, CA.  Attendees that <a href="http://www.eclipsecon.org/2011/registration/?page=registration">register before December 31, 2010</a> will quliafy for the very early-bird discount price.</p>

 		<br><br>
	</div>
		<div id="rightcolumn">
			<a href="http://www.eclipsecon.org/2011/"><img border="0"  src="http://www.eclipsecon.org/2011/static/image/friends/125x125.gif" height="125" width="125" alt="EclipseCon 2011"/></a>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

