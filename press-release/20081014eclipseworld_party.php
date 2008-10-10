
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Party at EclipseWorld";
	$pageKeywords	= "Eclipse Foundation, EclipseWorld, party, reception, community, bulletin";
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
     	<p>
     		The Eclipse Foundation is hosting a community party at the upcoming <a href="http://www.eclipseworld.net/"
     		target="blank">
     		EclipseWorld</a> conference.  If you will be attending the conference, this is your opportunity to connect
     		with Eclipse project leaders and committers, who will be on hand to demo their projects
     		and	answer your questions.
		</p>
 
		<p>
			<b>Details</b><br>
			Wednesday, October 29, 2008<br>
			7:00pm - 9:00pm<br>
			<a href="http://www.eclipseworld.net" target="blank">EclipseWorld</a> at the Hyatt Regency<br>
			Reston, VA
		</p>
		
		<p>
			Come out to chat and network with other members of the Eclipse community and have some fun!  We look forward to seeing you
			there. 
		</p>
		  
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

