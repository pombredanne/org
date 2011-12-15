<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Program and Speakers Announced for the New Agile ALM Connect Conference";
	$pageKeywords	= "agile alm, eclipse";
	$pageAuthor		= "Ian Skerrett";
	
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
	<div id="midcolumn">
<br><br><br>	
		<h1>$pageTitle</h1>

	
		<br>
  <p><strong>Ottawa, Canada – December 14, 2011</strong> – Agile ALM Connect is pleased to announce its line-up of technical sessions and 
  speakers for the upcoming conference.   <a href="http://www.eclipsecon.org/2012/agilealm">Agile ALM Connect</a> is a new conference that will focus on connecting the tools, agile methods and 
  people across the software development lifecycle.   The conference will be held March 26-29, 2012 in Reston, Virginia and be co-located 
  with the annual <a href="http://www.eclipsecon.org/2012/">EclipseCon</a> community conference.
  </p>

<p>Agile ALM Connect is for development executives and technical leaders who want to improve their application development processes through 
enhancements to their software development tool chain.  The conference features speakers from leading organizations and will explore a range 
of topics, including:
<ul>
<li>Technical talks on popular open source projects, such as Puppet, Selenium, Sonar, Git, Hudson, Gerrit, Eclipse Mylyn and 
Eclipse Jubula
<li>Sessions on best practices and agile methods such as continuous delivery, Scrum and Kanban, continuous feedback, devops, requirements 
management, agile transformation and lean ALM
<li>Insightful case studies from leading organizations, like IBM, github, Atlassian, Bosch and Boeing
</ul>
</p>

<p>Agile ALM Connect is one of the first conferences to explore the use of software tools and agile methods to improve overall efficiency 
of the software development process.   This industry conference looks at all aspects of the application lifecycle from requirements 
management to devops.  A special focus will be on integrating different industry solutions to meet the needs of specific organizations.
</p>

<p>The new conference is co-located with the annual EclipseCon community conference.  Attendees of Agile ALM Connect may attend and 
participate in any of the EclipseCon sessions.</p>

<p>Registration for Agile ALM Connect is <a href="http://www.eclipsecon.org/2012/registration">now open.</a>   Very early registration prices are available through December 31, 2011.   </p>


<strong>About Agile ALM Connect</strong><br>

Agile ALM Connect is produced by the Eclipse Foundation.  The conference is co-located with the annual EclipseCon conference.
<br><br>
The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at www.eclipse.org
  
  
 
 

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipsecon.org/2012/agilealm">Agile ALM Connect</a></li>
			</ul>
		</div>
	</div>	
</div>


EOHTML;
	$html = mb_convert_encoding($html, "HTML-ENTITIES", "ISO-8859-1");
	$pageTitle = mb_convert_encoding($pageTitle, "HTML-ENTITIES", "ISO-8859-1");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>



