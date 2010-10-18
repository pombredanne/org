
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Attend Eclipse Day Paris";
	$pageKeywords	= "Eclipse, event, day, Paris, France";
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
		
		<a href="http://www.eclipsedayparis.com">
		<img src="http://www.eclipsedayparis.com/img/BandeauTitre.png" width="500" alt="Eclipse Day Paris" border="0">
		</a>
		
     	<p>
			<a href="http://www.eclipsedayparis.com" target="blank">Eclipse Day Paris</a> takes place November 5,
			2010 and is a day-long event to explore Eclipse projects and topics for the French community.
			The event is ideal for IT decision makers, software architects and process and methods engineers that
			are interested in using Eclipse.
			
		</p>
		<p>
			Eclipse Day Paris will feature Eclipse experts presenting innovations within the Eclipse projects, and
			organizations discussing how they benefit from using Eclipse for their needs. The event will bring
			members of the Eclipse ecosystem together to discuss the following themes: 1) Data Management; 2) Eclipse 4.0;
			3) Embedded; 4) Modeling; and 5) Runtime.
			See the event page	for a <a href="http://www.eclipsedayparis.com/?page=Agenda&lang=en" target="blank">full agenda</a>.  
		</p>
		<p>	
			We hope you can join in for Eclipse Day Paris!  <a href="http://www.eclipsedayparis.com/?page=Registration&lang=en" target="blank">Register</a>
			while space is still available.			
		</p>
		  
	</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


