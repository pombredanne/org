<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Juno Release Train Has Arrived";
	$pageKeywords	= "eclipse, release, open source, Juno";
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
		#midcolumn ul ul{padding-bottom:0px;}
	</style>
	
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
<br>
<p><strong>Ottawa,Canada - June 27, 2012</strong> - As is the tradition for the end of June, the Eclipse community celebrates the release of the annual 
Eclipse release train, this year code-named Juno.  This is the ninth year the community has shipped a release train, and each year the 
release gets bigger.  Juno represents the work of 72 project teams by 445 open source committers on 55 million lines of code, and the 
participation of 40+ Eclipse member companies.</p>

<p>For a release this size it is difficult to itemize all of the new features, but here are some highlights:
<ul>
<li><a href="http://www.eclipse.org/eclipse4/">Eclipse 4.2</a> in now the mainstream platform for the Eclipse community.  The existing Eclipse 3.x code stream is being put into maintenance mode.  Eclipse 4.2 includes a compatibility layer that allows existing Eclipse plugins and RCP applications to work on the new platform.
<li><a href="http://www.eclipse.org/recommenders/">Code Recommenders</a> is a new project that makes Eclipse code completion a lot smarter. Code Recommenders analyzes how applications make use of specific Java APIs to build up a database of best practices. It then provides smarter hints to a developer trying to build applications using those Java APIs. Just like Amazon recommends shopping suggestions, Code Recommenders recommends proper API usage.
<li>Eclipse <a href="http://www.eclipse.org/virgo/">Virgo</a> ships the new Nano kernel that provides the ability to build very small OSGi based applications.  
<li>The new <a href="http://www.eclipse.org/koneki/">Koneki project</a> delivers a Lua IDE. Lua is an embeddable scripting language that is popular in the gaming industry and gaining importance in the M2M industry. Koneki is an important part of the Eclipse M2M Industry Working Group initiative.
<li><a href="http://www.eclipse.org/Xtext/">Xtext</a> has added support for integrated debugging of JVM-based DSLs created using Xtext, and tighter integration with the Java Development Tools (JDT).
<li>Eclipse <a href="http://www.eclipse.org/equinox/">Equinox</a> ships the reference implementation of the new OSGi R5 specifications. 
<li>Two new packages have been introduced: 1) Eclipse IDE for Automotive Software Developer contains the tools and framework required for embedded automotive software development. It is the result of the work completed by the Eclipse Automotive Industry Working Group. 2) Eclipse for Mobile Developers will make it easier for developers to download and use Eclipse with a variety of mobile SDKs, including the Android SDK.
</ul>
</p>
<p>"Each year the commitment and dedication of the Eclipse committers demonstrate that Eclipse is a great example of open source 
distributed development that ships on a predictable schedule, and scales to tens of millions of lines of code,” explains Mike Milinkovich, 
Executive Director of the Eclipse Foundation. "I am especially happy Juno is based on the Eclipse 4.2 platform, thus providing a stable 
platform for continued innovation in the Eclipse community."</p>
<p>More information about Juno, the projects of Juno, and downloads is available at <a href="http://eclipse.org/juno/">eclipse.org/juno</a>.</p>

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipse.org/juno/">Juno</a></li>
				<li><a href="http://eclipse.org/downloads/">Downloads</a></li>
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

