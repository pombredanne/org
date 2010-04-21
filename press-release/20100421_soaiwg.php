<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Announces New SOA Initiative";
	$pageKeywords	= "eclipse, soa, ";
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

   <p><b>OTTAWA, Canada, April 21, 2010 </b>- The Eclipse Foundation is pleased to announce the creation of a new SOA Industry Working Group.  The goal of this new 
   initiative is to define a common Equinox-based SOA platform, including tools and runtime components, that can be used by vendors, system integrators and enterprises for SOA 
   deployments.   A common platform will enhance the interoperability between different vendor solutions and provide a technology platform for new projects that address future 
   SOA customer requirements.</p>

	<p>The working group is a collaboration of industry players, including Engineering Group, itemis, Obeo and Sopera.   Each of these companies will use the Eclipse SOA platform 
	for their own commercial solutions.  The collaboration will  focus on defining an 'Eclipse SOA package' that will be available for download from eclipse.org and on the definition 
	and implementation of future requirements for the SOA platform.	</p>
	
	<p>The Eclipse SOA Platform will include a focus on some key technology areas, such as:
	<ul>
	<li>REST and SOAP support for OSGi remote services.
	<li>An extensible SOA framework based on open standards that provides enterprise-grade features such as the integration of a runtime service registry and policy-based endpoint 
	negotiation and message processing.
	<li>A new extended Business Activity Monitoring (eBAM) project that will provide a platform to monitor the performance and manage analysis of external systems.
	<li>A new Eclipse Business Process Management (eBPM) project will provide a complete BPM solution (tools and runtime) based on Equinox and OSGi.
	<li>Tool support to help developers create, test and deploy JAX-WS web services easily.
	</ul>
	</p>
	<p>The first release of the Eclipse SOA Platform is now available.  An updated version will be released as part of the Helios release train in June 2010.  More information about 
	the SOA Industry Working Group can be found at <a href="http://www.eclipse.org/eclipsesoa/">www.eclipse.org/eclipsesoa</a>
	</P>
	
	<b>Quotes from Member Organizations</b>

	<p>"Engineering Group has successfully helped customers deploy large-scale open source SOA deployments in organizations working in different domains, such as the government, finance and 
	healthcare. Our participation in the Eclipse SOA Platform and especially the eBAM and eBPM projects will allow us accelerate the industry adoption of this new technology."<br>
- Antonio Majori, Engineering Group, Technical Manager and founder of Spagic project</p>


	<p>"The Eclipse SOA IWG will foster a business-driven development of a common SOA platform, which supports users and system integrators to realize their integration and application 
	development projects better and faster. As an Open Source SOA pioneer SOPERA has in-depth SOA know-how, from which the IWG will benefit."<br>
- Dr. Ricco Deutscher, CTO of SOPERA </p>

	<p>"Based on cartography and migration tools, OBEO helps its customers in the modernization of existing applications to align them to a Service Oriented Architecture. Using SCA and 
	other Eclipse SOA facilities allow to refactor applications with interconnections between legacy systems and modernized systems based on a free software ESB."<br>
- Stephane Drapeau, Obeo</p>


<b>About the Eclipse Foundation</b><br>

<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, 
deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and 
individuals extend, complement and support the Eclipse Platform.</p>

<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at 
<a href="http://www.eclipse.org">eclipse.org</a> 
</p>
	
	
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Project Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/eclipsesoa/">Eclipse SOA</a></li>

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
