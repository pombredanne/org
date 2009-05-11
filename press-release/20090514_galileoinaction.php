
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Galileo In Action";
	$pageKeywords	= "eclipse, Galileo, action, webinar, release";
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
		
      	<p>The Eclipse community is preparing to release Galileo, the annual simultaneous release, at the end
      	of June.  The release has now grown to 33 projects with over 18??? million lines of code, contributed
      	by committers around the world.  With such a large globabl community, Eclipse wants to bring Galileo
      	to you!</p>

 		<p>On June 26, the Eclipse Foundation is presenting Galileo In Action - a day of virtual meetings
 		where you can interact with project leads involved in the release and see demos of the new
 		features.  Galileo In Action is free to attend and registering gets you into all 5 sessions:
 		<ul>
 			<li>10:00 am EST - <b>What is Galileo and Why do I Love it?</b>, presented by Doug Schaaefer
 			(C/C++ Development Tooling)	and Brian Fitzpatrick (Data Tools Platform)</li>
 			<li>11:00 am EST - <b>Frameworks Showcase</b>, presented by Scott Lewis (Eclipose Communication
 			Framework) and Pascal Rapicault (p2)</li>
 			<li>12:00 pm EST - <b>Runtime Showcase</b>, presented by Tom Watson (Equinox) and Doug Clarke (EclipseLink)</li>
 			<li>01:00 pm EST - <b>Tools Showcase</b>, presented by Roy Ganor & Michael Spector (PHP Development
 			Tools)</li>
 			<li>02:00 pm EST - <b>Galileo In Action</b>, presented by Jason Weathersby (Business Intelligence
 			and Reporting Tools) and Mik Kersten (Mylyn)</li>
 		</ul>
 		</p>
 		
 		<p>To attend, register through <a href="https://www2.gotomeeting.com/register/207615571" target="blank">
 		GoToMeeting</a>.</p>

 	<br><br>
	</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

