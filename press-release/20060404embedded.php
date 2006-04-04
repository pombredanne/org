<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Continues Momentum in Device and Embedded Software Development";
	$pageKeywords	= "Eclipse Foundation, community, rcp, press release, eclipsecon";
	$pageAuthor		= "Nathan Gervais";
	
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
		<h2 ALIGN="CENTER"><strong>Eclipse Continues Momentum in Device and Embedded Software Development with 
		New Open Source Project Initiatives </strong></h2>
		<p><strong>EMBEDDED SYSTEMS CONFERENCE (BOOTH 5095), San Jose, Calif. (Apr. 4, 2006)</strong> — The Eclipse 
		Foundation today announced new project initiatives and releases for the Device Software Development Platform
		 (DSDP) and C/C++ Development Tools (CDT) Projects, both increasingly popular with original equipment 
		 manufacturers (OEMs) and vendors of real-time operating systems (RTOSs), software development tools, and 
		 electronic design automation (EDA) tools. These new initiatives further extend the Eclipse ecosystem into 
		 the embedded and device software markets.</p>
		<p>“Eclipse is quickly becoming the universal platform for tools integration with OEMs and tools vendors,” 
		said Mike Milinkovich, executive director of the Eclipse Foundation. “The CDT and DSDP projects are 
		extending the platform and provide the frameworks specific for embedded and device developers. In the 
		last year we have seen tremendous success with vendors and users adopting these projects as their tools 
		solution.”</p>
		<p>These project initiatives include:<br><br>
		<ul>
		<li><p>CDT Project – The next release of the CDT Project will focus on supporting large C/C++ projects as 
		well as integrations with a more diverse collection of build and debug tools.  It will feature a new indexer 
		architecture that makes it easier to search and cross-reference C/C++ code and new expanded debugger support 
		to handle different variants of gdb/MI protocols often found in large scale C/C++ development organizations. 
		The managed build system will also be updated to support a larger diversity of tool chains, offer greater 
		flexibility of build options and improve CDT's knowledge of the build process, which will eliminate the need 
	    for an external build tool like "make." CDT 3.1 will be released as part of the June Callisto release train.  .
	   </p> </li>
		<li><p>Mobile Tools for the Java Platform (MTJ) Project – This new DSDP project,  
			will provide frameworks for runtime management of devices and emulators, build management and 
			deployment of J2ME applications, mobile device debugging, application creation wizards, UI design 
			tools, localization, and mobile security extensions. The initial release is scheduled for June and 
			will focus on runtime management, build and deployment of J2ME applications.
		</p></li>
		<li><p>Native Application Builder (NAB) Project – Another DSDP project, proposed and led by Fujitsu, NAB provides a visual GUI builder and graphics runtime libraries for device applications running on Linux, Windows CE, ITRON and other device operating systems. The visual GUI builder generates C++ source code and uses CDT for the edit-compile-debug cycle where applicable for the device operating system. It brings to Eclipse, technology originally developed in the WideStudio project, a very popular open source project in the Japanese market. NAB will release in June. 
		</p></li>
		<li><p>The Device Debugging (DD) Project – The project focuses on building enhanced debug models, APIs and views to provide greater visibility into and control over device software targets. The DD project is working to improve the flexibility and customization of the Eclipse Debug Model Interfaces, and new versions of these Interfaces, as well as debugger view enhancements, which will be released in June as part of the Callisto release. These Interfaces can be used on top of the Eclipse Platform or inside CDT to build custom debugger implementations for multi-core development and on-chip debugging support. 
		</p></li>
		<li><p>The Target Management (TM) Project – TM is creating data models and frameworks to configure and manage remote systems, their connections and their services. The Target Management architecture will be based on a software contribution from IBM called Remote Systems Explorer. The initial release of Target Manager will occur in September and will include remote target launch capabilities compatible with CDT. 
		</p></li> 
		</ul>
		</p> 
	<p>“We’ve demonstrated significant progress since DSDP was established as a top-level Eclipse project last year,” said Doug Gaff, leader of the DSDP Project Management Council (PMC) from Wind River. “Community participation and our vision for a common, open standards based device software development platform are taking shape more quickly than expected. The first projects will release this June and commercial products are expected to ship shortly after.”
		</p>
	<p>“CDT is quickly becoming the industry standard for C and C ++ development in the embedded world,” said Doug Schaefer, project leader for the CDT and senior software developer at QNX Software Systems. “The fact that the CDT is being used by commercial vendors for applications from tiny embedded microcontrollers to large multi-core targets validates the functionality of the CDT feature set for embedded environments.”
	</p>
	<p>The CDT project forms the basis of at least 17 commercially available development tools including those from QNX Software Systems, Intel, Texas Instruments and Siemens. Currently, more than 25 companies contribute to the CDT project. Since the creation of the Device Software Development Platform (DSDP) as a top-level Eclipse project in June 2005, representatives from more than 20 companies have joined the project and actively contribute source code. Both projects are actively recruiting new users and contributors to their technology.
	</p>
	<p>Demos of CDT and DSDP projects can be seen in action this week at the Embedded Systems Conference in San Jose, Calif. Eclipse-focused sessions include “The Eclipse Device Software Platform Project” (April 6, 2006, 8:30 a.m. – 10:00 a.m. PT) and “Eclipse: Under the Hood” (April 6, 2006, 11:00 a.m. – 12:30 p.m. PT).
	</p>

		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		Laura Ackerman<br>
		Schwartz Communications<br>
		781-684-0770<br>
		eclipse@schwartz-pr.com <br>
		<br>
		<br>

		</p>
							
	</div>

		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

