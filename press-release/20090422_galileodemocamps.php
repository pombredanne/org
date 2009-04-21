
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Celebrate Galileo at an Eclipse DemoCamp";
	$pageKeywords	= "eclipse, democamp, demo, camp, Galileo";
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
	<div id="fullcolumn">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>
		
		<h2>Community Bulletin</h2>
		
     	<p>To celebrate the Galileo release in June, the Eclipse Foundation is inviting individuals to attend 
     	 Eclipse DemoCamps around the world.
     	 The DemoCamps are informal meetings where fans can present what they&#146;re doing with Eclipse.
     	 Events are planned from May 18 to June 26 and locations are listed on the
     	 <a href="http://wiki.eclipse.org/Eclipse_DemoCamps_Galileo_2009">DemoCamp wiki</a>.</p>

     	 <p>We encourage everyone to showcase what projects and products they&#146;re developing with Eclipse,
     	 especially technology related to the Galileo release.  The demos can be of open source projects,
     	 research projects, applications based on Eclipse, commercial products using Eclipse or anything
     	 Eclipse-related that you think will be of interest to the attendees.</p>

     	 <p>To join as a presenter or attendee at a DemoCamp, please add your name on the
     	 <a href="http://wiki.eclipse.org/Eclipse_DemoCamps_Galileo_2009">wiki page</a> for your
     	 local event.  Space may be limited at some locations.  If there isn&#146;t a DemoCamp near you, why not
     	 try to <a href="../../community/democamp/organizedemocamp.php">organize one in your city</a>?</p>

 <br><br>
</div>
</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

