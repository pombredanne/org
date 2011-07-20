<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "New Java 7 Summit To Be Held at EclipseCon Europe";
	$pageKeywords	= "elipse, java 7, eclipsecon";
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
	
		<h1>$pageTitle</h1>
		
		<br>
  <p>The Eclipse Foundation, in collaboration with Oracle, is pleased to announce the Java 7 Summit, to be held at the upcoming <a href="http://www.eclipsecon.org/europe2011/">EclipseCon Europe</a> in Ludwigsburg, Germany on 
  November 2-4, 2011. The Java 7 Summit offers Java developers and architects an opportunity to gain in-depth technical education on the new innovations introduced into the recent 
  <a href="http://www.oracle.com/us/corporate/events/java7/index.html">Java 7 release</a>.</p>
  
  <p>Java 7 is the first major release of the platform in almost five years. It introduces many improvements and new features including a new Fork/Join Framework, new File System API, 
  enhanced support for Language Implementers, and a collection of language changes managed in a project known as "Coin." It also represents the first release where most of the development 
  has been done in OpenJDK, with significant contributions coming from the Java community. Attendees of the Summit will receive key technical education on these new Java 7 features, and 
  learn more about OpenJDK.</p>

   <p>The Summit features expert speakers from Oracle and the wider OpenJDK community. Java experts interested in speaking at the Java 7 Summit are welcome to propose a session through 
   the <a href="http://www.eclipsecon.org/europe2011/content/submissions-are-open">Call for Papers for EclipseCon Europe</a>. The deadline for proposals is August 17, 2011.</p>

   <p>Registration for the Java 7 Summit will open in the next couple of weeks. The Java 7 Summit is co-located with EclipseCon Europe, and attendees will have access to all sessions. </p>

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipsecon.org/europe2011/">EclipseCon Europe</a></li>
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

