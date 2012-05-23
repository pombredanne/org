<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse M2M Industry Working Group Moves toward Open M2M Tools and Frameworks";
	$pageKeywords	= "eclipse, M2M Industry Working Group, m2m, Tools and Frameworks";
	$pageAuthor		= "Christopher Guindon";
	
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
<p><strong>Toulouse,  France &mdash; May 24, 2012 &ndash; </strong>The Eclipse M2M Industry Working Group (IWG) was  established in November 2011 as an industry collaboration with the purpose of  creating an open platform of tools and frameworks to simplify the creation of  M2M and Internet of Things (IoT) applications. The goal of the group is to break down the  silos that often occur between M2M applications and enable interoperability among  different M2M devices, M2M servers, and enterprise applications. </p>


<p>After six months, the participants have made substantial  progress toward making available the open source technology to support this  mission.</p>

<ul>
  <li>Java and C/C++ source code for the MQTT client  reference implementation is now available as part of the <a href="http://eclipse.org/paho/">Eclipse Paho</a> project. MQTT is an M2M  connectivity protocol that is useful for connections between small devices over  low bandwidth networks. The Eclipse Paho project provides the reference  implementation for the MQTT protocol. A contribution of an MQTT client implementation in the Lua language has also been proposed by Andy Gelme.</li>
  
  <li>The source code for a new M2M application framework has  been made available. The purpose of this framework is to provide a consistent workflow  for M2M development, and to allow M2M applications to interact with different  device types and communication protocols. Creating a consistent framework will  enable interoperability and information sharing between M2M applications.</li>
  
  <li>The <a href="http://eclipse.org/koneki/">Eclipse  Koneki</a> project has made available a Lua development tools  environment and an integrated simulator for the OMA-DM protocol. Lua is a  popular programming language for embedded and M2M development. Koneki provides  Lua developers with an Eclipse-based IDE similar to what is available to Java  and C/C++ developers. OMA-DM is a device management protocol. The new OMA-DM simulator allows developers to  test interactions between a simulated M2M device running in Eclipse, and an OMA-DM server.</li>
  
</ul>
<p>The Eclipse M2M Industry Working Group is open to  participation by any individual or organization working on M2M solutions. The  current active participants include Band XI, Eurotech, IBM, and Sierra  Wireless. More information about the M2M IWG can be found at <a href="http://wiki.eclipse.org/Machine-to-Machine">http://wiki.eclipse.org/Machine-to-Machine</a></p>
<p><strong>About the Eclipse Foundation</strong><br />
  Eclipse is an open source community whose projects  are focused on building an open development platform comprised of extensible  frameworks, tools, and runtimes for building, deploying, and managing software  across the lifecycle. A large, vibrant ecosystem of major technology vendors,  innovative start-ups, universities, research institutions, and individuals  extend, complement, and support the Eclipse Platform.</p>
<p>The Eclipse Foundation is a not-for-profit,  member supported corporation that hosts the Eclipse projects. Full details of  Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org/">www.eclipse.org</a>.</p>
	
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipse.org/paho/">Eclipse Paho project</a></li>
				<li><a href="http://eclipse.org/koneki/">Eclipse  Koneki project</a></li>
				<li><a href="http://wiki.eclipse.org/Machine-to-Machine">Information about the M2M IWG</a></li>
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
