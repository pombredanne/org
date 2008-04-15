<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Expands Open Source Technologies for Embedded and Mobile Developers";
$pageKeywords	= "eclipse, embedded, ESC, mobile";
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
		.paddedlist li {padding-bottom:3px;	}
		p {padding-bottom:10px;}
		</style>
<div id="maincontent">
	<div id="midcolumn">
		<h2>Press Release</h2>

		<center>
		<h1>$pageTitle</h1>
		</center>
		
		<p><strong>Ottawa, Canada - April 15, 2008  - </strong>
		The Eclipse Foundation today announced new initiatives to develop open source technologies for embedded and mobile developers. The new initiatives, part of the Eclipse Device Software Development Platform (DSDP) Project, make it easier for developers to debug, manage and deploy software on embedded and mobile devices. These new projects build on the continued success the Eclipse community has had in creating open source technology for the embedded and mobile industry.		 
		</p>
		
		<p>
			"We have made tremendous progress building a diverse community of developers creating open source embedded and mobile technology at Eclipse," said Doug Gaff, Project Management Committee Leader of the DSDP Project and Senior Manager at Wind River.  "It is great to see new projects and organizations participating in the Eclipse community."
		</p>
		
		<p>
			The four new initiatives include:			
		</p>
		<div style="padding-left:25px;">
		<p>
			<u><b>Real-Time Software Components (RTSC):</b></u><br/>
			Led by Texas Instruments, RTSC is a new project that will focus on developing Eclipse tools for the development and configuration of C (and C++) applications for highly constrained devices such as digital signal processors (DSPs) and microcontrollers. RTSC supports a C-based programming model for developing, delivering and deploying embedded real-time software components targeted for diverse, highly resource-constrained hardware platforms.
		</p>
		<p>
			<u><b>Windows Embedded CE Support:</b></u><br/>
			New support for Windows Embedded CE in the Eclipse Target Management project allows those who are developing Windows CE applications to remotely edit, update and delete files directly on the Windows Embedded CE device. This unique feature makes Eclipse a very productive environment for building Windows CE applications.
		</p>
		<p>
			<u><b>Eclipse Device Debugging (DD) Project:</b></u><br/>
			The 1.0 release of the Eclipse Device Debugging project will be made available as part of the Ganymede release train in June. Central to DD is the Debugger Services Framework (DSF), an extensible framework designed to allow commercial tool vendors to build advanced debugger integrations in Eclipse. DSF includes a reference implementation, contributed by Ericsson, which supports debugging via the popular and ubiquitous GDB debug engine.   
		</p>
		<p>
			<u><b>Target Communications Framework (TCF):</b></u><br/>
			TCF is a new initiative started to develop a lightweight extensible communications protocol to standardize the way development tools - including debuggers, monitoring, analysis and test tools - communicate with different devices. A number of organizations, including Wind River, Freescale and Power.org are involved with the development of TCF. The protocol is designed to work for target agents, JTAG probes and target simulators, and allows value-adding components from multiple vendors to plug together easily, targeting heterogeneous device configurations like multicore and system-on-a chip (SoC). 
		</p>
		</div>
		<p>
"As a member of the Eclipse Foundation, TI recognizes that software is frequently the most critical component in a design, and we are committed to streamlining embedded C programming to accelerate time-to-market for our customers," said David Russo,  CTO target content infrastructure, Texas Instruments. "By open sourcing RTSC technology under the Eclipse Public License, we are moving to standardize the way embedded C content is specified, packaged and integrated so that producers and consumers of this content can more easily supply, assemble and reuse components to create integrated application solutions."			
		</p>

		<p>
			"Eclipse has made very strong progress since our first efforts developing the CDT (C Programming Developers Toolkit) and is now the dominant development environment for embedded developers", said Steve Furr, Freescale Semiconductor.  "As the embedded industry moves to ever more complex SOC's, including the extensive use of multiple symmetric cores, getting all of the various tools required to do effective development connected to the appropriate data collection mechanisms is the next big issue that needs to be addressed. TCF is a great way for the community to work together to solve this problem". 
		</p>
		
		<p>
			"Power.org is adopting the TCF protocol in some of our debug services for the Power Architecture technology platform," said Chris Ng, the chairperson of Power.org's Common Debug Interface Technical Subcommittee.  "These services provide a standardized environment for vendors to interoperate more effectively."
		</p>
		
		<p>
			The Eclipse community has quickly evolved to be the center of collaborative development for new and innovative technology that addresses the needs of the embedded and device market. There are currently nine open source projects hosted at Eclipse that specifically address the needs of embedded developers, including the widely used Eclipse C/C++ Development Tooling (CDT) Project that has been downloaded over one million times in the past 12 months. In addition, more than 30 embedded and mobile vendors are now members of the Eclipse Foundation, supporting and promoting their Eclipse-based products to embedded customers.
		</p>
		
		<p>
			For more information about the DSDP projects mentioned above, please visit the links below:<br/><br/>
			RTSC -- <a href="http://www.eclipse.org/proposals/rtsc/">http://www.eclipse.org/proposals/rtsc/</a><br/>
			Device Debugging -- <a href="http://www.eclipse.org/dsdp/dd/">http://www.eclipse.org/dsdp/dd/</a><br/>
			Target Management -- <a href="http://www.eclipse.org/dsdp/tm/">http://www.eclipse.org/dsdp/tm/</a><br/>
		</p>
		
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application
		frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle,
		including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business
		intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors,
		innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse
		Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
		Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />		
		
		<p><b>Press Contact</b><br>
		Steve Eisenstadt<br>
		Page One Public Relations<br>
		919-781-8096<br>
		<a href="mailto:steve@pageonepr.com">steve@pageonepr.com</a><br>
		<br>
	</div>

</div>


		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

