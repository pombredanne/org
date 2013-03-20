<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Xtend 2.4 Adds Support for Android and Active Annotations";
	$pageKeywords	= "eclipse, community, xtend, android";
	$pageAuthor		= "Roxanne Joncas";
	
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
<p><b>Ottawa, Canada – March 20, 2013 –</b> The Eclipse Foundation has announced the release of Eclipse Xtend 2.4, a new statically-typed programming language that translates to readable Java source code. Xtend focusses on seamless and bidirectional interoperability with Java and runs on all Java VMs and Android’s Dalvik VM.</p>
<p>A number of new JVM based languages have been introduced into the Java ecosystem, such as Clojure, JRuby, Groovy, Scala, Xtend and others. Each new language aims to improve the language design and simplify the task of software development. Xtend provides a better Java language by adding language features such as lambdas, operator overloading, and extension methods that reduce the verbosity of the Java language. Unlike most other JVM languages, Xtend works seamlessly with Java, allowing developers to easily reuse existing Java libraries, frameworks, and tools.</p> 
<p>The new features in the Xtend 2.4 release include</p>
	<ul>
		<li><b>Support for writing Android applications.</b> Android developers can now use Xtend to create efficient Android applications with less code than the normal Java language. Xtend works with the existing Android Development Kit so has minimal impact on the size of the final application.</li>
		<li><b>Active Annotations.</b> The new Active Annotation feature in Xtend builds upon Java annotations and makes it possible to participate in the translation process of Xtend source code to Java source code. Code patterns can now be formally implemented and automatically expanded during compilation, which significantly reduces the amount of boiler plate developers have to write, read, and maintain.</li>
		<li><b>New language features.</b> Xtend 2.4 introduces several new language features, including collection literals, extension variables, and support for declaring enums, interfaces, and regular annotations.</li>
		<li><b>Improved tool support.</b> The Xtend plugin for the Eclipse IDE has been improved, providing even better developer tooling support than other JVM languages. This new release includes organize imports, extract method refactoring, formatter, improved content assist, and more.</li>
	</ul>
<p>“Xtend 2.4 is a very significant release for the Xtend project,” said Sven Efftinge, project lead of Xtend. “We are particularly proud of the new Active Annotation feature since it solves many of the problems developers are working around with wizards and code generators today. We are also excited about reaching into the Android community to offer a new language for building Android applications.”</p>
<p>Eclipse Xtend 2.4 is now available for <a href="http://www.eclipse.org/xtend/download.html">download</a>. More details about the 2.4 release can be found in the <a href="http://www.eclipse.org/xtend/releasenotes_2_4.html">release notes</a>.</p>
<h3>About the Eclipse Foundation</h3>
<p><i>Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</i></p>
<p><i>The Eclipse Foundation is a not-for-profit, member-supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at www.eclipse.org.</i></p>
				
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipse.org/xtend/">Xtend Home Page</a></li>
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
