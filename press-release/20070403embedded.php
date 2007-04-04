	<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "New Project Releases Continue to Drive Adoption of Eclipse in the Embedded and Device Development Community";
	$pageKeywords	= "embedded, device, new project, 2007, press, release";
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
		<h2 ALIGN="CENTER"><strong>New Project Releases Continue to Drive Adoption of Eclipse in the Embedded and Device Development Community</strong></h2>

		<p><strong>Embedded Systems Conference, Silicon Valley, Calif., April 3, 2007 </strong>—The Eclipse Foundation is pleased to announce the upcoming releases of the Eclipse C/C++ IDE (CDT) 4.0 and Device Software Development Platform (DSDP) projects. These Eclipse projects represent the core technology that is being developed for the embedded and device development community and have been widely adopted by organizations across the embedded and device software market.
		<br /><br />
		Within the last five years, the scope of Eclipse projects focused primarily around embedded and device development have spawned a healthy, vibrant and significant movement within the Eclipse community. From the early success and adoption of the C/C++ Development Tooling (CDT) project to the creation of the Eclipse Device Software Development Platform (DSDP), Eclipse-based development has emerged as a defacto standard within the embedded industry. Embedded and device developers have a number of Eclipse projects that can assist them with building their applications, including IDEs for C/C++, mobile Java (J2ME)and mobile Linux. </p>
		<p>In June, the Eclipse community will release its next comprehensive code base to the public, the Eclipse Europa release. Features aimed at the embedded and device development include: </p>
		<ul>
			<li>The new CDT 4.0 release includes substantial productivity enhancements for C/C++ developers including a simplified new project wizard supporting project templates, new source navigation views and improved performance of index-based features. CDT 4.0 also features tighter integration with the MinGW gnu tool chain thus making it easier to develop C/C++ applications on the Windows platform. Finally, CDT 4.0 has added support for GDB-based JTAG embedded debugging. </li>
			<li>A new debugger services framework from the DSDP Device Debugging (DD) project that provides additional performance, functionality and modularity for commercial embedded debuggers built on Eclipse;</li>
			<li>Also from the Device Debugging project, a new IP-XACT editor and sample debugger view contributed from the SPIRIT consortium</li>
			<li>Expanded mobile platform support for WinCE 5.0 and Nokia S60 in the DSDP embedded Rich Client Platform (eRCP) project;</li>
			<li>Enhancements to the DSDP Mobile Tools for Java project, including Visual Flow editor, LCDUI Designer, support for external obfuscators, localization, new profiles and configurations (such as MIDP 2.1, Multi SDK support in a single project);</li>
			<li>DSDP Target Management (TM) enhancements including: 
				<ul>
					<li>User-defined actions on remote systems</li>
					<li>Full Eclipse File System (EFS) support on all connections</li>
					<li>Integrated Terminal Emulation</li>
					<li>Improved Flexibility, APIs and Platform Integration</li>
				</ul>
			</li>
		</ul>				
		<p>Organizations already leveraging the newer DSDP projects for commercial products include MontaVista DevRocket 5.0, Atmel AVR32 Studio 1.0, IBM Lotus Expeditor 6.1, and the EMAC Eclipse Distribution, with additional products such as Wind River Workbench 3.0, Motorola MOTODEV Studio, Tradescape Clearing Tool, QNX Momentics, and the ACCESS Linux Platform Development Suite v2.0 coming later this year. Other examples of CDT-based commercial offerings include Luminosity from LynuxWorks, QNX Momentics, Wind River Workbench, ACCESS Linux Platform Development Suite from Access Systems Americas, EDGE Developer Studio and Platform Express from Mentor Graphics,  and Tau from Telelogic.</p>
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		John Moran or Lori Kroll<br>
		Schwartz Communications<br>
		781-684-0770<br>
		eclipse@schwartz-pr.com <br>
		<br>

		</p>
							
	</div>
		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

