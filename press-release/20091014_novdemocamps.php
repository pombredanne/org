
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Attend an Eclipse DemoCamp";
	$pageKeywords	= "eclipse, demo, camp";
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
		
     	<p>The Eclipse Foundation is inviting the community to attend
     	<a href="http://wiki.eclipse.org/Eclipse_DemoCamps_November_2009">Eclipse DemoCamps</a> around
     	 the world during the month of November and the beginning of December.  The DemoCamps are informal
     	 meetings where Eclipse fans can present what they&#146;re doing with Eclipse. The demos can be of
     	 open source projects, research projects, applications based on Eclipse, commercial products using
     	 Eclipse, or anything Eclipse-related that you think attendees will find interesting.</p>

     	 <p>There are over 25 DemoCamps scheduled already. To register to attend or present at an event, add
     	 your name to the wiki page of your local DemoCamp. Space may be limited at some locations.  If there
     	 isn&#146;t a DemoCamp near you, why not try to <a href="http://www.eclipse.org/community/democamp/organizedemocamp.php">
     	 organize one</a>?</p>
     	  
     	 <p>Check out the <a href="http://wiki.eclipse.org/Eclipse_DemoCamps_November_2009">
     	 DemoCamp wiki</a> for details on all the dates and locations.</p>
 
 <br><br>
</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

