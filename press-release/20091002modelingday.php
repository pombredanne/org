
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Announcing Eclipse Modeling Day in NYC and Toronto; Register Now";
	$pageKeywords	= "eclipse, modeling, register";
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
		
		<p>The Eclipse Foundation is pleased to announce the <a href="http://wiki.eclipse.org/Eclipse_Modeling_Day">Eclipse Modeling Days</a> in New York City on November 16 and
		Toronto on November 18.   This day-long event is your opportunity to learn about the Eclipse Modeling projects
		and understand how they can help your organization adopt a model driven development approach.</p>
		
		<p>There is no cost to attend the event but you need to pre-register.   Registration details and the agenda are available 
		at <a href="http://wiki.eclipse.org/Eclipse_Modeling_Day">eclipse.org/Eclipse_Modeling_Day</a></p>
		<p>A complementary <a href="http://wiki.eclipse.org/EclipseRT_Day">EclipseRT Day</a> is being run in parallel.  Individuals interested in Eclipse runtime projects
		are encouraged to attend these events in Austin and Toronto.  </p>
 	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

