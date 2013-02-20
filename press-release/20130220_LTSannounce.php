<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Enables Long-Term Industrial Use of Eclipse";
	$pageKeywords	= "";
	$pageAuthor		= "Ian Skerrett";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
<br>
<p><strong>Ottawa, Canada – February 20, 2013 </strong>– The Eclipse Foundation has launched a new initiative to enable the infrastructure and ecosystem for 
the support of Eclipse in industries that require Eclipse releases maintained over a very long time. Industries such as aerospace, automotive, and enterprise 
software are expected to support their software stack for 10 to 50 years. The new Eclipse Long Term Support (LTS) initiative will allow these companies to 
release bug fixes and maintenance releases of previous versions of Eclipse technologies. </p>

<p>The Eclipse Long Term Support initiative is led by CA Technologies, IBM, EclipseSource and SAP AG.  The Eclipse Foundation, through Eclipse LTS, will 
provide the IT infrastructure to fix, build, sign and deploy updates for older versions of Eclipse. LTS will also enable an ecosystem of service providers, 
technology providers and large enterprise consumers of Eclipse to share fixes and releases. The initiative is open to any organization with an interest in 
long-term support and maintenance for Eclipse technology.</p>

<p>"This is an important next step for the Eclipse Foundation to enable the adoption of Eclipse and open source software in important industries," said Mike 
Milinkovich, Executive Director, Eclipse Foundation. "LTS is going to solve some very important challenges for organizations that rely upon open source for 
critical applications. This is a great example of how the Eclipse Foundation is extending the services we offer to make it possible for companies to adopt 
Eclipse and open source software."</p>

<p>"Long-term support is an essential part of SAP’s maintenance strategy," said Barbara Althoff-Simon, Executive Vice President, Installed Base Maintenance 
and Support, SAP. "Together with the Eclipse Foundation, SAP has helped define a long-term support model – Eclipse Long Term Support – which is a big step 
towards enterprise maturity of open source software. It will further strengthen the position of the Eclipse Foundation and its ecosystem."</p>

<p>"Collaborations like the Eclipse Long Term Support Initiative are essential to fueling innovation in the open source space and we are glad to be a part of 
this initiative," said Salvatore Vella, IBM Vice President of Software Architecture and Technology.</p>

<p>"Eclipse is once again innovating in the space of enterprise driven Open Source projects, and we are happy to be part of it. The vendor neutral and shared 
infrastructure allows us and our partners to build a long lived support ecosystem. Extended sustainability and lower cost are significant benefits for us as a 
support provider and for our customers." says Jochen Krause, CEO of EclipseSource.</p>

<p>"This is an important step that will advance the enduring value of open source," said Paul Lipton, CA Technologies vice president of industry standards and 
open source. "CA Technologies is pleased to be a part of the establishment of this important new Industry Work Group, which will further develop the unique, 
innovative contribution of the Eclipse Foundation to the IT industry and its customers."</p>

<p>LTS has been established as an Eclipse Industry Working Group and will operate under the governance of the Eclipse Foundation. More information about LTS 
can be found at <a href="http://lts.eclipse.org">lts.eclipse.org</a></p>


	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://lts.eclipse.org">LTS Home Page</a></li>
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


