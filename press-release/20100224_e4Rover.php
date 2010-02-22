<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "e4Rover Mars Challenge";
	$pageKeywords	= "eclipse, e4, mars, rover, challenge, contest, robot, nasa, eclipsecon";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<style>
		.paddedlist li {	padding-bottom:7px;	}
	</style>

<div id="maincontent">
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
			

		<p>
			<img src="http://www-mipl.jpl.nasa.gov/vicar/vicar330/html/pgs/ug/images/nasa_logo_only.GIF" style="float:right" width="100">	
			Do you have what it takes to be a rocket scientist? <a href="http://www.eclipse.org/go/EC10_web@cbfeb24">EclipseCon 2010</a>
			will be your opportunity to play with the top guns. The Eclipse Foundation, in collaboration
			with NASA JPL, are organizing the e4Rover Mars Challenge. EclipseCon attendees will
			participate in a contest to create the very best robotic control system to drive a robot
			across a prototypical Mars landscape. The grand prize winner will be receive an opportunity
			to visit the <a href="http://www-robotics.jpl.nasa.gov/facilities/index.cfm">NASA robotics lab</a>
			in Los Angeles, CA.
		</p>
		
		<h4>Robots and Eclipse</h4>
		
		<p>
			Jeff Norris from the NASA Jet Propulsion Lab will be featured as the keynote speaker at
			EclipseCon 2010. Jeff will present how NASA has used Eclipse technology to build a software
			platform for planning and controlling the Mars and Lunar rover missions. Building on the
			theme of robotics and Eclipse, the e4Rover Mars Challenge highlights how developers can use
			Eclipse e4 to build client software to control a Lego Mindstorm robot. Participants will use
			an e4 client to control a live Lego Mindstorm robot through a series of tasks to compete for
			points. Participants will be encouraged to extend and customize the e4 client to improve the
			control of the robot and increase their chances of collecting more points.
		</p>
 	
     	<p>
     		<a href="http://eclipse.org/e4/">e4</a> is the next generation of Eclipse platform focused on
     		making it easier to build sophisticated client applications. e4 is planning their 1.0 release
     		for July 2010.
		</p>

		<p>
			Contest details will be available online before the start of EclipseCon as well as at the
			conference.
		</p>	
		
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php
/*
 * Created on 20-Jan-2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
