<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Announces Full Support for Java 7";
	$pageKeywords	= "elipse, automotive, autosar";
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
  <p><strong>Ottawa, Canada – September 27, 2011</strong> – The Eclipse Foundation is pleased to announce the recent Eclipse Indigo SR1 release includes full production level support 
  for Java 7, the recent major release of the Java SDK.  Developers can now use Eclipse JDT to develop Java applications that take advantage of the new Java 7 features.  

<p>The new Eclipse JDT release will include the following for Java 7 support:<br>
<ul>
<li>Eclipse compiler implements all the new Java 7 language enhancements.
<li>Significant features, like Search and Refactoring, have been updated to support Java 7. 
<li>Content Assist can insert the diamond and Quick Assist allows to insert the inferred type arguments.
<li>Quick Assists and Quick Fixes are added for the multi-catch statement.
<li>Detection of unhandled exceptions thrown by automatic close().
<li>Quick Fixes to add and remove @SafeVarargs.
<li>Quick Assist to convert 'switch' to 'if-else'.</li>
</ul>

See What's <a href="http://www.eclipse.org/jdt/ui/r3_8/Java7news/whats-new-java-7.html">New for Java 7</a> for the complete feature list. </p>
<br><br>

<p>“Java 7 is a significant release for moving the Java community and platform forward”, explains Mike Milinkovich, Executive Director, Eclipse Foundation.  “The new  Eclipse support the 
new language features is an important step in having the wider developer community adopt the new features in their application development.”</p>


<p>"Java remains critical to our customers' success," said Sal Vella, Vice President Architecture and Technology, IBM.  "IBM's work with Eclipse in helping form Java 7 and our support of 
the  Eclipse Java Development Tools will allow programmers to continue to realize the benefits of a truly open standard development experience." </p>

<p>The Eclipse Foundation, in collaboration with Oracle, is also hosting the Java 7 Summit at EclipseCon Europe, November 2-4 in Ludwigsburg, Germany.  The Java 7 Summit will feature 
technical education on the new Java 7 features and the support provided by Eclipse.  More details available at <a href="http://eclipsecon.org/">www.eclipsecon.org</a>.</p>


<p>Eclipse Indigo SR1 is available for immediate download from <a href="http://eclipse.org/downloads/">www.eclipse.org/downloads.</a></p>

<br>	<strong>About the Eclipse Foundation</strong>
	<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible 
	frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major 
	technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the 
	Eclipse Platform.</p>
	<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse 
	and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>	</p>
  

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipsecon.org/">EclipseCon Europe</a></li>
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


