
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Join the Eclipse Community for a DemoCamp Near You";
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

		<p>During the month of November and early December, members of the Eclipse community will be hosting
		<a href="http://wiki.eclipse.org/Eclipse_DemoCamps_November_2009">DemoCamps</a> in cities around the world.
		Typically a DemoCamp consists of a series of short demos and presentations from developers building new
		and interesting solutions with Eclipse.  It is a great way to discover and learn about new Eclipse
		technology.  There is also lots of time for informal conversation and networking, so DemoCamps are a
		great way to connect with colleagues and friends.</p>

		<p>Check-out the <a href="http://wiki.eclipse.org/Eclipse_DemoCamps_November_2009">list of cities hosting
		DemoCamps</a> - there are over 25 around the world.  You might even consider signing up to demo what you
		are doing with Eclipse.  If not, plan to attend and enjoy meeting some interesting Eclipse people.</p>
		 
 <br><br>
</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

