<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Riena 1.0 is Now Available";
	$pageKeywords	= "eclipse, riena, rcp, equinox, osgi";
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
		<i>The Eclipse Riena project leaves Incubator status</i><br><br>
		
		<p><b>Ottawa, Canada – March 2, 2009</b> –The Eclipse Foundation is pleased to announce the 1.0 release of 
		Eclipse Riena, a platform for developing multi-tier rich client applications based on the Eclipse Rich Client Platform (RCP) and 
		Equinox. With this release Riena leaves the Incubator status and graduates to a mature Eclipse project. 
		The first release provides a set of major components and is now available for download at 
		<a href="http://www.eclipse.org/riena/">www.eclipse.org/riena</a>. </p>
		
		<p>Riena provides a platform for building distributed enterprise applications that simplify the user 
		interface development and the integration of back-end systems. Core to Riena is an OSGi-based Remote 
		Services Component that allows developers to easily create distributed client/server applications. </p>
		
		<p>Riena was established as an open source project within the Eclipse community in February 2008. The 
		1.0 release of Riena delivers a set of components based on Equinox and the Eclipse RCP. These components include: 
		
		<ul>
		<li>Remote Services allows for the communication and coordination between OSGi-based components on a client and server, enabling truly distributed component deployment.
		<li>Riena User Interface and Navigation Components provide developers with the frameworks and building blocks that accelerate the development of the client user experience for business-centric applications. 
		<li>Object Transaction allows developers to isolate the object level changes on a client application before communicating those changes to a server.  This enables more efficient client/server communication and client rollback of changes. 
		<li>Authentication and Authorization extend the Equinox Security model to allow for security in a distributed system. 
 		<li>Client Monitoring is a server component that tracks the status of each client in a distributed system. 
		</ul>
		</p>
		<p>"Riena 1.0 is a great example of innovative runtime technology that is being developed at Eclipse." 
		said Mike Milinkovich, executive director of the Eclipse Foundation.  "Projects like Riena help support 
		the growth of Equinox and Eclipse RCP as a solution for developing enterprise applications."</p>
		
		<p>"We have already received extremely positive user feedback regarding Riena," commented Christian Campo,
		project group leader of Eclipse Riena and IT-consultant at compeople AG. "The availability of the first 
				release will allow even more developers to use the Riena platform for their mission-critical 
				business applications." </p>

		<p>As a next step, the Riena project has joined the Galileo release train, a coordinated release of 
		different Eclipse projects that is due June 2009. In addition, the second release of Riena is already in 
		planning and will include enhanced features and components for the development of user interfaces and 
		navigation.</p>
		
		<p><b>About the Eclipse Foundation</b><br />
		Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
		Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		
		
		<p><b>Contacts:</b><br/>
		Chantal Yang<br/>
		Page One PR for Eclipse Foundation<br/>
		415-875-7494<br/>
		eclipse@pageonepr.com<br/>
		</p>
		</div>
</div>
<div id="rightcolumn">
	<div class="sideitem">
	<h6>Related Links</h6>
	<ul>
		<li><a href="http://www.eclipse.org/riena/">Riena Homepage</a></li>

	</ul>
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

