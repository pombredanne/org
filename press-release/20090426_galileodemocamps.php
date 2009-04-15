
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Attend or Organize an Eclipse DemoCamp";
	$pageKeywords	= "eclipse, democamp, demo, camp";
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
		
     	<p>To celebrate the Galileo release in June, the Eclipse Foundation is inviting individuals to organize and attend
     	<a href="http://wiki.eclipse.org/Eclipse_DemoCamps_Galileo_2009">Eclipse DemoCamps</a> around
     	 the world.  The DemoCamps are informal meetings where Eclipse fans can present what they&#146;re doing with Eclipse.
     	 The demos can be of open source projects, research projects, applications based on Eclipse, commercial products using
     	 Eclipse or anything Eclipse related that you think will be of interest to the attendees.</p>
     	 
     	 <p><b>Where and When are DemoCamps Being Organized?</b><br>
     	 DemoCamps will be organized all around the world from May 18 to June 26.
     	 Check out the <a href="http://wiki.eclipse.org/Eclipse_DemoCamps_Galileo_2009">
     	 DemoCamp wiki</a> for a location near you.  Also, register to let the organizers know you will be attending.  Space may be
     	 limited at some locations.</p>
     	 
     	 <p><b>Can I Demo My Cool Stuff?</b><br>
     	 We encourage everyone to showcase what projects and products they&#146;re developing with Eclipse, especially technology related
     	 to the Galileo release.  Please add your name as a presenter on the wiki page for your local DemoCamp.  If there
     	 isn&#146;t a DemoCamp near you, why not try to organize one in your city? </p>
     	 
     	 <p><b>I Want to Help Organize a DemoCamp in My City</b><br>
     	 First check out the list of cities with <a href="http://wiki.eclipse.org/Eclipse_DemoCamps_Galileo_2009">DemoCamps
     	 already organized</a>.  If one already exists in your area, contact the organizer and volunteer to help out.
     	 If a city in your area is not on the list, then check out the  
     	 <a href="../../community/democamp/organizedemocamp.php">details for organizing a DemoCamp.</a></p>
 
 <br><br>
</div>
</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

