<<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon 2012 Keynotes, Technical Program, and Tutorials Announced";
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
  <p><strong>Ottawa, Canada – December 15, 2011</strong> – The Eclipse Foundation is pleased to announce the technical program and tutorials 
  for the upcoming <a href="http://www.eclipsecon.org/2012/">EclipseCon 2012</a> conference. The annual Eclipse community conference is being held March 26-29, 2012 at a new location in 
  Reston, Virginia. The conference will be co-located with the new Agile ALM Connect conference and the annual OSGi DevCon.
  </p>

<p>The <a href="http://www.eclipsecon.org/2012/keynotes">keynotes</a> for EclipseCon 2012 feature three important industry trends:
<ul>
<li><strong>Open Web Platform.</strong> Alex Russell from the Google Chrome development team will talk about the rising importance of JavaScript, HTML5, and 
CSS as the open web application platform.
<li><strong>Open Hardware.</strong> Peter Semmelhack of Bug Labs and K. Venkatesh Prasad of Ford Motor Company will present their vision of combining open 
source hardware and software to create an application platform for the car of the future.
<li><strong>Future Developer Tool Chains.</strong> Mik Kersten, creator of Eclipse Mylyn and CEO of Tasktop Technologies, will talk about the future of ALM 
and how many developers are starting to externalize their development work, just as they are use social networking tools to externalize 
their relationships.
</ul>
</p>
<p>EclipseCon will feature 120 technical sessions and 16 tutorials on a range of Eclipse-oriented topics, including sessions on:
<ul>
<li>Migrating and adopting the new Eclipse 4 platform
<li>Developing domain specific languages (DSL) 
<li>Key advancements in EclipseRT technology, including Virgo, p2, Equinox, and EclipseLink
<li>Support for new programming languages, such as JavaScript, Lua, Ceylon, Dart, and Xtend
</ul>
</p>
<p>Attendees to EclipseCon also have access to the new <a href="http://www.eclipsecon.org/2012/agilealm">Agile ALM Connect</a>, a conference focused on connecting the tools, agile methods, and 
people to improve the application development lifecycle. Agile ALM Connect features talks on popular open source projects, such as Puppet, 
Selenium, Sonar, Git, Hudson, Gerrit, Eclipse Mylyn, Eclipse Jubula, Tycho, and more.
</p>

<p>Registration for EclipseCon 2012 is <a href="http://www.eclipsecon.org/2012/registration">now open</a>. Very early registration prices are in effect through December 31, 2011. Sponsorship 
opportunities are also available for EclipseCon 2012 and Agile ALM Connect.   
</p>
  


	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipsecon.org/2012/agilealm">Agile ALM Connect</a></li>
				<li><a href="http://www.eclipsecon.org/2012/">EclipseCon</a></li>
				
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



