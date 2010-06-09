
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Join the Helios In Action Virtual Conference";
	$pageKeywords	= "eclipse, helios, action, webinar, release";
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
		
      	<p>On June 24, the Eclipse Foundation is presenting Helios In Action - a virtual conference
 		where you can interact with project leads involved in the release and see demos of the new
 		features. The annual simultaneous release has now grown to 39 projects with over 33 million
 		lines of code, contributed by committers around the world.  With such a large global community,
 		Eclipse wants to bring Helios to you!</p>

 		<p>Helios In Action is free to attend and registering gets you into all sessions:
 		<ul>
 			<li><b>Linux Tools</b> - Andrew Overholt (Red Hat)</li>
  			<li><b>EMF on the Web</b> - Kenn Hussey (Cloudsmith)</li>
  			 <li><b>Eclipse Git Team Provider</b> - Chris Aniszczyk (Red Hat)</li>
  			 <li><b>JavaScript Development Tools</b> - Simon Kaegi (IBM)</li>			
  			 <li><b>Java EE Standards Support from Web Tools</b> - Naci Dai (eteration)</li>
  			 <li><b>Marketplace Client & p2 Discovery Connector</b> - Mik Kersten (Tasktop Technologies)</li>	
  			 <li><b>Modeling</b> - Ed Merks</li>
  			 <li><b>Eclipse Runtime (RT)</b> - Jeff McAffer (EclipseSource)</li>
  			 <li><b>10 Reasons to Install Helios</b> - Ian Bull (EclipseSource)</li>
  		</ul>
 		</p>
 		
 		<p><a href="http://www.eclipse.org/helios/heliosinaction.php">See more details on these sessions.</a>
 		</p>
 		
 		<p>To attend, register at <a href="http://eclipse.org/go/heliosinaction" target="blank">
 		http://eclipse.org/go/heliosinaction</a>.</p>

 	<br><br>
	</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

