
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse DemoCamp";
	$pageKeywords	= "Eclipse Demo Camp, Eclipse User Groups";
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
		<h1>See Cool Stuff, Meet Interesting People - Attend an Eclipse DemoCamp</h1>
		<h2>Community Bulletin</h2>
     	<p>During the months of November and December, we are inviting individuals to organize and attend <a href="http://wiki.eclipse.org/Eclipse_DemoCamp">Eclipse DemoCamps</a> around
     	 the world.  Eclipse DemoCamp is an opportunity to showcase all of the interesting technology being built
     	by the Eclipse community.   It is also an opportunity for you to meet Eclipse enthusiasts in your city.
     	 </p>
     	 <p>The format of the DemoCamp is pretty informal.  The idea is for a group of Eclipse developers to meet up and
     	 demo what they are doing with Eclipse.  The demos can be of research projects, Eclipse open source projects, applications 
     	 based on Eclipse, commercial products using Eclipse, whatever you think might be of interest to the attendees.   The only stipulation 
     	 is that the demo is about something that is Eclipse related.  </p>
     	 
     	 <b>What and When Are DemoCamps Being Organized?</b>
     	 <p>We expect DemoCamps to be organized all around the world.  Check out the <a href="http://wiki.eclipse.org/Eclipse_DemoCamp">DemoCamp wiki</a> for a location near you.  Also register to let
     	 the organizers know you will be attending.  Space maybe limited at some locations.</p>
     	 
     	 <b>Can I Demo My Cool Stuff?</b>
     	 <p>We want to encourage as many people as possible to showcase what they are doing with Eclipse.  If you want to demo at a DemoCamp we
     	 encourage you to add your name as a presenter to the local DemoCamp.   If there is no DemoCamp mear you, why not try to organize one in your city. </p>
     	 
     	 <b>I Want to Help Organize a DemoCamp in My City</b>
     	 <p>First check out the list of cities with <a href="http://wiki.eclipse.org/Eclipse_DemoCamp">DemoCamps already organized</a>.  If one already exists, maybe contact the organizer and volunteer to help out.
     	 If your city is not on the list then checkout the  
     	 <a href="../../community/democamp/organizedemocamp.php">details for organizing a DemoCamp.</a></p>
 
 <br><br>
</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

