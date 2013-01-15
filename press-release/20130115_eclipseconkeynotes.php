<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon and ALM Connect Keynotes Announced";
	$pageKeywords	= "";
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
<br>
<p><strong>Ottawa, Canada - January 15, 2013</strong> - The Eclipse Foundation is pleased to announce the keynote speakers for the upcoming <a href="http://www.eclipsecon.org/2013/">EclipseCon</a> and <a href="http://www.eclipsecon.org/2013/almconnect">ALM Connect</a> 
conference.  The keynote speakers will include: 
<ul>
<li>Stephen O'Grady, Principal Analyst and Co-Founder, RedMonk
<li>Jeffrey Hammond, Principal Analyst, Forrester Research
<li>Zach Holman, GitHub
<li>Adam Messinger, VP of Application Development, Twitter
<li>Jim Laskey, Multi-language Lead for Java Lang/Tools, Oracle
</ul>
</p>
<p>The keynote presentations will discuss the influence developers have in the software development industry, discuss future trends for Application Lifecycle 
Management (ALM) tools and explore software engineering best practices and technology. </p>
<p>ALM Connect and EclipseCon will be held March 25-28, 2013 in Boston. MA.  The conferences feature over 140 tutorials and technical sessions for software 
developers and managers that want to better understand how to improve their software development practices. </p>
<p>Registration is <a href="http://www.eclipsecon.org/2013/registration">now open</a> for EclipseCon. Sponsorship opportunities are also still available.</p>

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipsecon.org/2013/program/session-schedule" target="_blank">Session Schedule</a></li>
				<li><a href="http://eclipsecon.org/2013/registration" target="_blank">Registration page</a></li>
			</ul>
		</div>
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

