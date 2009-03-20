<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Announces First Release of Swordfish, a Next Generation ESB";
	$pageKeywords	= "eclipse, SOA, java, Swordfish, ESB";
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

	<p><strong>Santa Clara, Calif. – EclipseCon 2009 – March 23, 2009 </strong> – The Eclipse Foundation announced today the 
	first release of Swordfish, a next-generation enterprise service bus (ESB) that provides the flexibility 
	and extensibility required by enterprises to successfully deploy a service-oriented architecture (SOA) 
	strategy. Swordfish is based on the OSGi standard and builds upon successful open source projects, 
	including Eclipse Equinox and Apache ServiceMix.</p>

	<p>Swordfish is grounded in real-world SOA deployment experience and knowledge.  It provides the features 
	and extensible framework required by enterprises and system integrators to customize their ESB to meet the 
	specific needs of an enterprise.  These features include:
	<ul>
	<li>Support for distributed deployment, which results in more scalable and reliable application deployments by removing a central coordinating server. 
	<li>A runtime Service Registry allows services to be loosely coupled, making it easier to change and update different parts of a deployed application. The Registry uses policies to match service consumers and service providers based on their capabilities and requirements. 
	<li>An extensible Monitoring Framework manages events that allow for detailed tracking of how messages are processed. These events can be stored for trend analysis and reporting, or integrated into a complex event processing system (CEP).    
	<li>A Remote Configuration Agent makes it possible to configure a large number of distributed servers from a central configuration repository without the need to touch individual installed instances.
	</ul></p>
	
	<p>“We are developing Swordfish to meet the requirements we experienced deploying large scale SOA 
	applications at Deutsche Post and other large enterprises,” explained Ricco Deutscher, CTO of Sopera and 
	a member of the Eclipse Runtime Project Management Committee. “Using Equinox and OSGi, we are able to 
	provide the flexible and extensible architecture required for SOA deployments to be successful.”</p>
	

	<p> “Last year we announced a strategy to provide open source runtime technology based on Equinox and 
	OSGi,” remarked Mike Milinkovich, Executive Director of the Eclipse Foundation. “The first release of 
	Swordfish is a great example of the progress that is being made to develop our runtime technology 
	portfolio. Over the next year I expect we will see more interesting runtime technology built at Eclipse.”</p>

	<p>The first release of Swordfish 0.8 will be available for download the first week of April from 
	<a href="www.eclipse.org/swordfish/">www.eclipse.org/swordfish/</a>.</p>
		
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
		<a href="www.eclipse.org/swordfish/">Swordfish Home Page</a></li>
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

