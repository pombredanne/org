
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Win Prizes in the Ganymede Around the World Contest";
	$pageKeywords	= "eclipse, demo, camp, ganymede, user groups";
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
		
     	<p>Join the Eclipse community in celebrating the Ganymede release by sharing your thoughts on the new project features.  People
     	that write a review of Ganymede will receive an Eclipse shirt and one lucky winner will also get a pass to
     	<a href="http://www.eclipsecon.org/2009/">EclipseCon 2009</a> or <a href="http://eclipsesummit.org/summiteurope2008/">Eclipse
     	Summit Europe 2008</a>.</p>
     	
     	<p>To qualify for the contest, post a link to your video, podcast or blog review of Ganymede using the online
     	<a href="http://www.eclipse.org/ganymede/map.php">Around the World contest form</a>.  More details can be found on the
     	<a href="http://www.eclipse.org/ganymede/aroundtheworld.php">contest page</a>.  You may also win an Eclipse shirt in a random
     	draw by submitting a brief message or photo.</p>
     	 
     	<p>All submissions will be added to the <a href="http://www.eclipse.org/ganymede/map.php">Ganymede Around the World map</a>.
     	Entries in all languages are welcome and contest entries must be received by July 31, 2008.  Represent your place in Eclipse&#146;s
     	global community!</p>
 
 <br><br>
</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

