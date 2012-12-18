<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ALM Connect Program Announced";
	$pageKeywords	= "ALM Connect, Program, 2013, eclipsecon";
	$pageAuthor		= "Roxanne Joncas";
	
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
<p><strong>Ottawa,Canada</strong> - December 19, 2012</strong> The Eclipse Foundation is pleased to announce the second annual <a href="http://eclipsecon.org/2013/almconnect/program/session-schedule" target="_blank">ALM Connect conference</a> on March 25-28, 2013 in Boston. ALM Connect is for senior developers, development managers, and executives who require a detailed understanding of the tools and methodologies that are used across the entire software development lifecycle.  ALM Connect is co-located with EclipseCon 2013, the annual Eclipse community conference.</p>

<p>The program for ALM Connect features 40 technical sessions and four in-depth tutorials over four days. Session topics include requirements management, project planning, agile methodologies, continuous deployment, continuous integration, testing strategies, and strategies for devops. Talks will cover popular open source tools like Git, Gerrit, Sonar, Puppet, Hudson, Jenkins, Eclipse Jubula, Eclipse Mylyn, Eclipse Tycho, and many more. Attendees have access to the EclipseCon sessions as well as the ALM Connect session.</p>

<p>The detailed ALM Connect program may be seen on the <a href="http://eclipsecon.org/2013/almconnect" target="_blank">conference website</a>.</p>				

<p><b>New Prices</b></p>
<p>To bring ALM Connect to a wider community, the conference registration price has been significantly reduced. Attendees who register by December 31, 2012 pay only $800. More details about registration prices and volunteering are available on the EclipseCon <a href="http://eclipsecon.org/2013/registration" target="_blank">Registration page</a>.</p>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipsecon.org/2013/registration" target="_blank">Registration page</a></li>
				<li><a href="http://eclipsecon.org/2013/almconnect" target="_blank">ALM Connect Website</a></li>
				<li><a href="http://eclipsecon.org/2013/almconnect/program/session-schedule" target="_blank">ALM Connect Website</a></li>
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

