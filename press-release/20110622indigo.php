<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Indigo Release Train Is Now Available";
	$pageKeywords	= "elipse, indigo, java";
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
		
		
  <p><strong>Ottawa, Canada - June 22, 2011</strong> - The Eclipse Foundation is pleased to announce the availability of Indigo, the 2011 annual release train.  This is the eighth 
  successive year in which the Eclipse community has shipped a coordinated release on schedule.  Indigo is available for immediate download from <a href="http://www.eclipse.org/downloads">www.eclipse.org/downloads</a>.</p>

<strong>Indigo Key Stats</strong>
<ul>
<li>62 project teams participated in Indigo
<li>46 million lines of code released on the same day (calculated by Ohloh)
<li>408 developers (committers) contributed code
<li>49 organizations collaborated on Ithe release
<li>10 pre-defined packages enable easy download and use
</ul>

<p>Highlights of the Indigo release include important new functionality for Java developers, innovations in modeling technology, and advancements in Eclipse runtime technology.
</p>

<strong>Key New Features for Java Developers</strong>
<ul>
<li>EGit 1.0 release provides first-class support for Java developers using Git for source code management
<li>WindowBuilder, a world-class Eclipse-based GUI builder, is now available as an Eclipse open source project
<li>Automated functional GUI testing for Java and HTML applications is included via Jubula
<li>m2eclipse brings tight integration with Maven and the Eclipse workspace, enabling developers to work with Maven projects directly from Eclipse
<li>Mylyn 3.6 supports Hudson build monitoring directly from the Eclipse workspace
<li>Eclipse Marketplace Client now supports drag and drop installation of Eclipse-based solutions directly into Eclipse making it significantly easier to install new solutions.
</ul>

<strong>New Innovation in Eclipse Modeling</strong>
<ul>
<li>Xtext 2.0 has added significant new features for domain-specific languages (DSLs): 1) the ability to create DSLs with embedded Java-like expressions; 2) Xtend, a new template language that allows tightly integrated code generation into the Eclipse tooling environment; and 3) a new refactoring framework for DSLs.
<li>Acceleo 3.1 integrates code generation into Ant and Maven build chains, and includes improved generator editing facilities.
<li>CDO Model Repository 4.0 integrates with several NoSQL databases such as Objectivity/DB, MongoDB, and DB4O. Cache optimizations and many other enhancements allow for models of several gigabytes.
<li>EMF 2.7 makes it easy to replicate changes across distributed systems in an optimal way: a client can send back to the server a minimal description of what's been changed rather than sending back the whole, arbitrarily-large, new instance.
<li>Eclipse Extended Editing Framework (EEF) 1.0 generates advanced and good-looking EMF editors in one click.
<li>EMF Compare 1.2 brings dedicated UML support and is more fully integrated with the SCM.
<li>EMF Facet, a  new project, allows extension of an existing Ecore metamodel without modification.
</ul>


<strong>EclipseRT Advancements</strong><br>
<ul>
<li>EclipseLink 2.3 supports multi-tenant JPA Entities, making it possible to incorporate JPA persistency into SaaS-style applications.
<li>Equinox 3.7 now implements the OSGi 4.3 specification, including use of generic signatures, generic capabilities, and requirements for bundles.
<li>Eclipse Communication Framework (ECF) implements OSGi 4.2 Remote Service and Remote Service Admin standards.
<li>Riena 3.0 now supports the creation of web browser applications using Eclipse RAP.
</ul>

	<strong>About the Eclipse Foundation</strong>
	<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible 
	frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major 
	technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the 
	Eclipse Platform.</p>
	<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse 
	and the Eclipse Foundation are available at www.eclipse.org.	</p>

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipse.org/indigo/">Indigo Site</a></li>
				<li><a href="http://eclipse.org/indigo/friends.php">Indigo 500</a></li>
				<li><a href="http://eclipse.org/downloads">Download</a></li>
			</ul>
		</div>
	</div>	
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

