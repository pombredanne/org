<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseRT Community Continues to Grow with New Projects and Contributors";
	$pageKeywords	= "eclipse, rt, community, new projects, virgo, gemini";
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
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<p>Ottawa, Canada - March 22, 2010 -  Two years ago the Eclipse Foundation announced a strategy to develop and promote open source runtime technology based on Equinox, an OSGi compliant runtime.  Our vision was to create a community and ecosystem of organizations and developers focused on creating a lightweight, flexible approach to building and deploying applications on mobile, desktop and server platforms.  </p>
		<p>Our goal is to create the EclipseRT community for runtime technology similar to what Eclipse has done for developer tools.  The foundation of EclipseRT is based on  the OSGi standard, supporting a wide spectrum of contributing organizations/individuals. EclipseRT delivers the ability for organizations and developers to build customizable runtime solutions from existing open source technologies. </p>
		<p>This week at EclipseCon 2010 two new Eclipse projects, Eclipse <a href="http://www.eclipse.org/gemini">Gemini</a> and Eclipse <a href="http://www.eclipse.org/virgo">Virgo</a>, join the EclipseRT community.  These two projects provide important functionality required by organizations building enterprise solutions.   Both projects represent important milestones in the continued growth of the EclipseRT community.</p>
		<p>The goal of Eclipse <a href="http://www.eclipse.org/gemini">Gemini</a> is to provide open source reference implementations of specific OSGi Alliance Enterprise standards,  which have recently been finalized by the OSGi Alliance.  These standards focus on the requirements of large enterprise's using a modular framework to build applications.   They consider common enterprise technologies such as database access, persistence, servlets and others.  Oracle is leading the <a href="http://www.eclipse.org/gemini">Gemini</a> project. Oracle and the SpringSource division of VMware are providing  initial code contributions that include implementations of the specific OSGi Enterprise standards.  </p>
		<p>"Oracle is excited to be participating in the Eclipse RT effort by leading the EclipseLink and <a href="http://www.eclipse.org/gemini">Gemini</a> projects, as modularity is a key frontier for the Java platform," said Dennis Leung, Vice President Software Development, Oracle.  "By providing access to strategic enterprise standards like Java EE, within a modular framework like OSGi, we believe that Java can benefit and leverage emerging innovations in modularity.  The <a href="http://www.eclipse.org/gemini">Gemini</a> project allows the community to participate and contribute to the ways in which Java EE technologies integrate with module-based platforms like OSGi"</p>
		<p>Eclipse <a href="http://www.eclipse.org/virgo">Virgo</a> is a modular runtime platform, based on Equinox and OSGi, supporting server-side enterprise applications deployed as OSGi bundles. SpringSource is leading the <a href="http://www.eclipse.org/virgo">Virgo</a> project and will make an initial code contribution based on their SpringSource dm Server product.</p>
		<p>"The move of dm Server to the Eclipse <a href="http://www.eclipse.org/virgo">Virgo</a> project is natural because of its tight integration with Eclipse Equinox" said Glyn Normington, Distinguished Engineer at SpringSource. "With <a href="http://www.eclipse.org/virgo">Virgo</a> and <a href="http://www.eclipse.org/gemini">Gemini</a>, EclipseRT becomes an advanced modular platform for enterprise OSGi development. EclipseRT also provides an excellent open, collaborative environment for <a href="http://www.eclipse.org/virgo">Virgo</a> development."</p>
		<p>A number of existing EclipseRT projects have recently announced plans to support implementations of industry standards:
		<ul>
			<li>Eclipse Communication Framework (ECF) Release 3.2, was released in February 2010,  now supports the OSGi Remote Services Standard.</li>
			<li>Eclipse Jetty announced support for the new websocket protocol being specified as part of HTML5.  This will allow Jetty to better support bi-directional web applications</li>
		</ul> 
		</p>
		<p>"Jetty is a critical part of the Vodafone 360 infrastructure. Jetty Continuations give us an edge in performance for COMET and long-polling applications with thousands of concurrently connected users," explains Phil Jeffrey, Principle Development Manager, Vodafone 360. "Jetty's simplicity and reliability has been a productivity gain throughout the project." </p>
		<p>More information about EclipseRT and the specific projects can be found at <a href="http://www.eclipse.org/eclipseRT/">www.eclipse.org/eclipseRT</a>. </p>
		<p></p>
		<p></p>
		<p></p>
		<p></p>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Project Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/eclipsert">Eclipse RT</a></li>
				<li><a href="http://www.eclipse.org/gemini">Gemini</a></li>
				<li><a href="http://www.eclipse.org/virgo">Virgo</a></li>
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
