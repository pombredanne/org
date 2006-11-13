<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Device Software Development Platform (DSDP) Announces Three Milestone Releases ";
	$pageKeywords	= "Eclipse, dsdp, November, 2006, milestone, release";
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
		<h2>Press Release</h2>
		<strong>Series of DSDP Releases Demonstrate the Growing Significance of Eclipse for Device Software Developers</strong><br/>
		<p><strong>OTTAWA, Canada – November 13, 2006— </strong>The Eclipse Foundation, an open source community committed to the implementation of a universal software development platform, today announced three milestone releases within the Eclipse Device Software Development Platform (DSDP). Founded in 2005 as a top-level Eclipse project, the mission of DSDP is to create an open, extensible, scalable and standards-based development platform to address the needs of the device software market. This series of releases demonstrates the growing momentum and diversity of projects in DSDP.  Created by Wind River, the DSDP project now has over forty committers from ten companies and contains more than 550,000 lines of code.
Beyond highlighting momentum within DSDP, these milestone releases demonstrate an increasing significance of Eclipse to the device software market overall. As they move forward, the DSDP projects are aiming to help developers and vendors create specialized, interoperable solutions so that customers and users of Eclipse-based products can develop device software faster, better and at lower cost.
		</p>
		<p><strong>DSDP Milestone Releases</strong></p>
		<p>The three DSDP projects achieving milestone releases include:
		<ol>
			<li><b><a href="http://www.eclipse.org/dsdp/tm/">Target Management</a> (TM), release version 1.0<br/></b>
				<i>Mission</i>: The goal of Target Management is to create data models and frameworks to configure and manage embedded systems, their connections and services. Since there are many different vendors and solutions in the device software space, the main charter of target management is to provide data models and frameworks that are flexible and open enough for vendor-specific extensions. For the 1.0 release, sample implementations will be provided for TCP/IP connections, FTP data transfer and GDB remote launching in the CDT environment. The base technology for the TM project is an open-source version of the <a href="http://www-304.ibm.com/jct09002c/isv/rational/remote_system_explorer.html">IBM Remote System Explorer</a>.<br/><br/>
				<i>1.0 Features</i>: Remote System Explorer framework, CDT remote launch capabilities and integrated Jakarta Commons Net library for FTP access.<br/><br/>
				<i>Contributors</i>: Wind River (project lead), IBM, MontaVista, PalmSource, Symbian and Tradescape.<br/><br/>
				<i>Supports</i>	: Windows, Solaris, Linux and Mac.<br/><br/></li>

			<li><b><a href="http://www.eclipse.org/ercp/">Embedded Rich Client Platform (eRCP)</a>, release version 1.0<br/></b>
				<i>Mission</i>: The goal of this project is to extend the Eclipse Rich Client Platform (RCP) to embedded devices. eRCP enables the same Eclipse development model used to create applications on desktop machines to also be used on devices.  The project includes a subset of <a href="http://wiki.eclipse.org/index.php/Rich_Client_Platform">RCP</a> components tailored to mobile devices.<br/><br/>
				<i>1.0 Features</i>: Utilizes the familiar Eclipse programming model of applications providing Views to a workbench, reduces RCP footprint to fit on constrained devices, provides patches to core components to enable running those components on JME <a href="http://jcp.org/en/jsr/detail?id=218">CDC</a>/Foundation Profile mobile devices, and enables application binary compatibility across a range of devices with different input mechanisms and screen types/sizes.<br/><br/>
				<i>Contributors</i>: IBM (project lead), Nokia and Motorola.<br/><br/>
				<i>Supports</i>: Windows Mobile 2003/2005, Nokia Series 80 and S60.<br/><br/></li>

			<li><b><a href="http://www.eclipse.org/dsdp/mtj/">Mobile Tools for the Java Platform (MTJ)</a>, release version 0.7<br/></b>
				<i>Mission</i>: The goal of MTJ is to extend the Eclipse platform to support mobile device Java application development. The purpose is to develop both frameworks that can be extended by tool vendors and tools that can be used by third party mobile java application developers. Mobile Java domain contains several combinations for configuration (<a href="http://jcp.org/en/jsr/detail?id=139">CLDC</a> and CDC) and profile (<a href="http://jcp.org/en/jsr/detail?id=118">MIDP</a>, <a href="http://jcp.org/en/jsr/detail?id=219">Foundation Profile</a> and <a href="http://jcp.org/en/jsr/detail?id=216">Personal Profile</a>). Currently the most common combination is CLDC+MIDP.<br/><br/> 
				<i>0.7 Features</i>: A device and emulator framework, a deployment framework, generic build processes for mobile application development, mobile device debugging, application creation wizards, UI design tools, localization, optimization and security.</i>
				<i>Contributors</i>: Nokia (project lead), IBM and SonyEricsson.
				<i>Supports</i>: Windows tools, Mobile deployment (Nokia).<br/><br/></li>
		</ol>
		
		<p>"The DSDP project is crucial to fulfilling Eclipse’s goal of creating a universal development platform for increasingly complex software," said Mike Milinkovich, executive director of the Eclipse Foundation. "DSDP has gained rapid momentum, and with these three major releases, the project now provides a broad foundation for commercial device software." </p>
		<p>"These three releases are important milestones in DSDP’s progress as a top-level Eclipse project," said Doug Gaff, leader of the DSDP Project Management Committee (PMC) from Wind River. "Wind River is particularly pleased that because of Target Management’s successful release, device software developers now have an open source framework and a set of views for managing remote embedded systems from Eclipse. Wind River plans to adopt the Target Management technology in our next release of Wind River Workbench."</p>
		<p>"With the eRCP and MTJ project releases, mobile Java developers have two new open source projects to facilitate the development and execution of Java ME applications," said DSDP Project Management Committee member Mark Rogalski. "IBM is using the eRCP project as the base runtime for IBM's Lotus Expeditor Client for Devices. Lotus Expeditor provides a programming model that delivers a universal client experience across the Lotus client portfolio, including Websphere Portal, Lotus Sametime and the new version of Lotus Notes code-named Hannover. The Lotus Expeditor Toolkit plugs directly into Eclipse or Rational Application Developer." </p>
		<p>"Nokia sees the first GA releases of these projects as major progress in combining the power of open source development and commercial products for development in the device market," said Mika Hoikkala, project lead for Mobile Tools for the Java Platform from Nokia. "Though developed in our open source Eclipse project group, the frameworks from MTJ will provide a foundation for Nokia’s Carbide.j commercial mobile development tools."</p>
		<p><strong>Availability</strong></p>
		<p>Device Software Development Platform releases are available for download at: <a href="http://www.eclipse.org/dsdp">www.eclipse.org/dsdp</a>. 

		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		
		<p><center><i>All company/product names and service marks may be trademarks or registered trademarks of their respective companies.</i></center></p>
		
		<br /><br /><strong>Press Contact</strong><br>	
		John Moran<br>
		Schwartz Communications<br>
		781-684-0770<br>
		eclipse@schwartz-pr.com <br>
		<br />
		
		Ashish Patel<br>
		Bite Communications for Wind River<br>
		415-365-0466<br>
		ashish.patel@bitepr.com<br>
		<br />
		
		<center># # #</center> 
		<br />
		<br>
			<br>
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

