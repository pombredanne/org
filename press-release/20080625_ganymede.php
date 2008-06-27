<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Delivers Its Annual Release Train";
$pageKeywords	= "eclipse, embedded, ESC, mobile";
$pageAuthor		= "Ian Skerrett";

# Add page-specific Nav bars here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
# $Nav->addCustomNav("My Link", "mypage.php", "_self");
# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

# End: page-specific settings
#

# Paste your HTML content between the EOHTML markers!
ob_start();
?>
		<style>
		.paddedlist {margin-left:10px;margin-top:-10px;}
		.paddedlist li {padding-bottom:3px; }
		p {padding-bottom:10px;}
		</style>
<div id="widecontent">
	<div id="midcolumnwide">
		<h2>Press Release</h2>

		<center>
		<h1><?=$pageTitle?></h1>
		</center>
		
		<p><strong>Ottawa, Canada - June 25, 2008  - </strong>The Eclipse Foundation and the entire Eclipse community are pleased to announce the availability of the Ganymede Release, the annual release train developed by the Eclipse community. The Ganymede Release is a coordinated release of 23 different Eclipse project teams that represents over 18 million lines of code.</p>
		<p>Ganymede delivers improvements and key features in the following areas:</p>
		<p><strong>Equinox and Runtime Projects</strong><br/>
			<ul class="paddedlist">
				<li>A new provisioning system, called <a href="http://wiki.eclipse.org/Equinox_p2">p2</a>, makes it easier for Eclipse users to install and update Eclipse.</li>
				<li><a href="/equinox/">Equinox</a> has added two new security features, including 1) a preferences-like storage for sensitive data such as passwords and login credentials. The information is encrypted using Java encryption mechanisms; and 2) the ability to easily use the Java authentication service (JAAS) in Equinox.</li>
				<li><a href="/rap/">RAP</a> 1.1 makes it easier to build great-looking, scalable and modular web applications running on Equinox. New features include 1) the ability to customize the look & feel with Presentation Factories and CSS; and 2) the ability to store application state information on a per user basis. </li>
				<li>The <a href="/ecf/">Eclipse Communication Framework (ECF)</a> has added real-time shared editing and other communications features to allow developers to communicate and collaborate from within Eclipse. </li>
			</ul>
		</p>  
		<p><strong>Modeling Features</strong><br/>
			<ul class="paddedlist">
				<li>New <a href="http://www.eclipse.org/modeling/emft/?project=ecoretools">Ecore</a> tools provide developers with a graphical environment for creating, editing and maintaining <a href="/modeling/emf/">EMF</a> Ecore models. </li>
				<li>Enhanced Resource APIs in EMF have been added to fully support REST, including support for the full CRUD life cycle. </li>
			</ul>
		</p>
		<p><strong>Developer Tools</strong><br/>
			<ul class="paddedlist">
				<li>A new JavaScript IDE, called <a href="http://wiki.eclipse.org/index.php/ATF/JSDT">JSDT</a>, provides the same level of support for JavaScript as the JDT provides for Java. Some of the new features include code completion, quick fix, formatting and validation. </li>
				<li><a href="/birt/phoenix/">BIRT</a> now provides an improved JavaScript editor and a new JavaScript debugger for debugging report event handlers. In addition, cross tables have been improved to support multiple measures, display measure values and totals as text or as charts, provide added support for cross table scripting and offer better filtering options. </li>
				<li><a href="/datatools/">DTP</a> has added a new graphical SQL query editor, called the SQL Query Builder, and improved usability of connection profile creation and management for users and adopters/extenders. </li>
				<li><a href="/webtools/">WTP</a> has improved UI support for Java EE 5: new wizards for Servlet Filters, Application Lifecycle Listeners, Session Beans and Message-Driven Beans; meta-data descriptor trees in the Project Explorer; and Bundled Libraries support for EAR projects. </li>
				<li><a href="/webtools/dali/main.php">Dali Java Persistence Tools</a> has an expanded UI including a new Persistence.xml editor, new Entity and XML Mapping File wizards and JPA specific contributions to the Project Explorer. Dali has also improved configuration and validation with support for mapping with annotations, XML, or with a combination of annotations and XML.</li>
				<li>The <a href="/webtools/jsf/main.php">WTP JSF Tools Project</a> has added features to improve web application development productivity. The release provides visual editing support for Apache MyFaces Trinidad components and enables support for future JSF 2.0 (JSR-314) enhancements such as Facelets. </li>
			</ul>
		</p>
		<p><strong>Support for SOA</strong><br/>
			<ul class="paddedlist">	
				<li>The new SCA Designer provides a graphical interface for developers who wish to create composite applications using the SCA 1.0 standard. </li>
				<li>The Policy Editor is a collection of editors and validators that makes it easy for developers to construct and manipulate XML expressions that conform to the WS-Policy W3C standard. </li>
				<li>The BPMN Editor continues to go from strength to strength and is now a mature and reliable framework that allows consumers to construct and extend the BPMN 1.1 standard notation to illustrate business processes. </li>
			</ul>
		</p>	 
		<p><strong>Availability</strong><br/>
		The projects in the Ganymede Release are now available for download. Seven Eclipse Packages have been created to make it easier for developers to download multiple projects. Please visit <a target="_blank" href="http://www.eclipse.org/ganymede/">www.eclipse.org/ganymede</a> for more information.
		</p>
		<p><strong>Supporting Quotes</strong><br/>
		“Once again the Eclipse community has delivered our annual release train and continues to deliver innovative software in a predictable manner,” said Mike Milinkovich, Executive Director of the Eclipse Foundation. “New features like the Equinox p2 provisioning system, new modeling tools and tools that support SOA developers will be popular features for Eclipse users.” <br/>
		
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Information about Eclipse can be found at <a href="http://www.eclipse.org/">www.eclipse.org</a></p>
		<br />
		<center># # #</center> 
		<br />All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		
		<p><b>Press Contact</b><br>
		Chantal Yang<br>
		Page One Public Relations<br>
		650-565-9800 x752<br>
		<a href="mailto:chantal@pageonepr.com">chantal@pageonepr.com</a><br>
		<br>
	</div>
	<div id="rightcolumnwide">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="/ganymede/">Ganymede</a></li>
				<li><a href="/ganymede/map.php">Ganymede Around the World</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Other Languages</h6>
			<ul>
				<li><a href="20080625_ganymede_fre.php">French</a></li>
				<li><a href="20080625_ganymede_ger.php">German</a></li>
				<li><a href="20080625_ganymede_spa.php">Spanish</a></li>
			</ul>
		</div>
		<center>
			<a href="http://www.eclipse.org/ganymede/"><img src="http://www.eclipse.org/ganymede/images/ganymedeFriend.jpg" border=0 alt="Ganymede is coming!" title="Ganymede is coming!" ></a>
		</center>	
	</div>
</div>


<? 
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

