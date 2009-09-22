
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Register Today for Eclipse Summit Europe 2009";
	$pageKeywords	= "eclipse, summit, europe, program, register";
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
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
     	
      	<p><a href="http://www.eclipse.org/go/ESEweb@cbsep22">Eclipse Summit Europe</a> (ESE) starts soon
      	in Ludwigsburg, Germany on October 27. If you or your colleagues are planning to attend, now is a
      	good time to register and book your hotel room. Members of the Eclipse Foundation, committers and
      	conference alumni will receive a 15% discount off the full registration price.</p> 
				
 		<p>The conference program is full of technical sessions, business talks and networking opportunities.
 		The tutorial &amp; symposia day on October 27 is followed by 2 conference days on October 28-29.
 		There are over 80 sessions scheduled, including updates from Eclipse projects, business talks,
 		industry experience reports and more. Several new conference "extras" have been planned, to give
 		you a chance to meet informally with members of the community.  Microsoft is sponsoring a Library
 		Caf&eacute; Instantations is hosting a poster reception and exercise sessions will take place each
 		morning.  You can check out details on these activities at the
 		<a href="http://www.eclipsecon.org/summiteurope2009/extras/">Extras page</a>.</p>
 		
 		<p><a href="http://www.eclipse.org/go/ESEregister@cbsep3">Register</a> for Eclipse Summit Europe
 		today!</p>
 		
 	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

