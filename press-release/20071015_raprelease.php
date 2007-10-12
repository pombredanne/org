	<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Releases First Ajax Platform Based on OSGi";
	$pageKeywords	= "eclipse, rap, rich ajax platform, OSGi, 2007";
	$pageAuthor		= "Nathan Gervais";
	
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
		<h1 align="center">$pageTitle</h1>
		
		<h2 ALIGN="CENTER"><strong>Eclipse Rich Ajax Platform (RAP) 1.0 is Now Available</strong></h2>
		<h2>Press Release</h2>
		<p><strong>OTTAWA - October 15, 2007 </strong> - The Eclipse Foundation today announced the availability of Eclipse Rich Ajax Platform (RAP) 1.0, a freely downloadable Ajax platform for creating and deploying Rich Internet Applications. </p>  
		<p>RAP 1.0 is the first Ajax platform that allows developers to create Rich Internet Applications (RIA) using the Eclipse component model, based on the OSGi standard. OSGi is a service-oriented, component-based environment that promotes the interoperability of applications and services.  Organizations using RAP are now able to create Ajax and RIA applications that are component-based and integrate into existing enterprise systems.</p>
		<p>"Using the OSGi component architecture for our Browser-based applications allows us to quickly create and deploy customizable applications, explains Ludwig Neer, CTO of CAS Software.  'The Eclipse Rich Ajax Platform enables us to create components that can be reused and extended by our partner companies. In addition, since Eclipse is open source and a de facto standard, we are avoiding proprietary frameworks, which is a very important thing for our partners.'"</p>
		<p>RAP 1.0 includes features well-suited for enterprises that are building a large number of new applications based on Ajax and RIA technologies.   These features include:</p>
		<ul class="paddedlist">
			<li>The ability to create and deploy RIA or RCP applications from the same Java code base, allowing organizations the flexibility to create browser-based RIA application or desktop-based rich client applications.</li>  
			<li>Support for creating Ajax applications based on the OSGi component model.</li>
			<li>Java development tools that tightly integrate with the Eclipse platform and allow developers to quickly develop, test, debug and deploy RIA applications.</li>
			<li>A complete set of frameworks for creating Ajax applications that support scalable user interfaces, complex widgets, databinding and loose coupling for UI elements.</li> 
		</ul>
		<p>"We are supporting the RAP project because it provides a great way for Java developers to create RIA applications," explains Jens Lautenbacher, VP of Core Development at 1and1, the world’s largest web host by known servers. "The ability to create RIA and RCP applications from the same code base allows for very interesting new deployment scenarios. We will continue to contribute to RAP by providing our qooxdoo JavaScript framework".</p>
		<p>“The response we are getting to RAP has been wonderful”, said Jochen Krause, project leader of Eclipse RAP and CEO of Innoopract.  “We see a lot of interest from organizations that want to create Ajax applications but can't sacrifice developer productivity. They like making use of a component model that integrates RIA applications with existing web services and JEE systems.  Eclipse and OSGi provide the technology that makes Ajax ready for these organizations”.</p>
		<p>Eclipse RAP 1.0 is now available at <a href="www.eclipse.org/rap/downloads.php">www.eclipse.org/rap/downloads.php</a>.  More information about the project is available at <a href="http://www.eclipse.org/rap/">http://www.eclipse.org/rap/</a>.
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br/>	
		Steve Eisenstadt<br/>
		Page One Public Relations<br/>
		919-781-8096<br/>
		steve@pageonepr.com<br/>
		<br/>
		</p>
							
	</div>

</div>


EOHTML;

	$html = mb_convert_encoding($html, "HTML-ENTITIES");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

