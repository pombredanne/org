	<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Hibachi Project Unites Ada Suppliers in Common Environment";
	$pageKeywords	= "eclipse, hibachi, ada, 2007";
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
		<h2 ALIGN="CENTER"><strong>Aonix, DDC-I, CohesionForce, and other suppliers providing industry support</strong></h2>		
		<h2>Press Release</h2>
		<p><strong>SIGAda Conference, Fairfax, VA - November 5, 2007 </strong> - The Eclipse Foundation today announced the creation of a new open-source project called Hibachi. The Hibachi project provides an industrial-strength, vendor-neutral Ada integrated development environment (IDE) that also serves as a platform for other contributors to provide value-added functionality for Ada developers. Hibachi is a sub-project of the Eclipse Tools Project, and it parallels and complements CDT, the C/C++ Development Tooling project, providing a multi-language native embedded software development environment. The name Hibachi is an anagram honoring the late Jean Ichbiah, lead designer of the Ada language.</p>  
		<p>To initiate the project, Aonix has contributed the source code of AonixADT, an existing commercial Eclipse plug-in technology that supports Aonix ObjectAda as well as GNAT tool chains on a variety of host and target platforms, as the initial code for the project. AonixADT is based on JDT and CDT, the Java and C Eclipse development toolkits. Additional contributions to Hibachi are being actively solicited by the project team.</p>
		<p>Tom Grosman of Aonix was selected as project lead, supported by Adam Haselhuhn of Aonix, Lisa Jett of DDC-I, Mandy McMillion and David Philips of CohesionForce, and other industry participants. Other organizations planning to contribute to Hibachi include OC Systems, Praxis High Integrity Systems, existing opensource Ada projects, as well as universities and interested individuals. The Hibachi Project is mentored by CDT Project Lead Doug Schaefer of QNX and DSDP Lead Doug Gaff of Wind River.</p>
		<p>“The Eclipse Hibachi project will promote wider adoption of Eclipse-based development by the Ada community, which includes many major high-integrity projects worldwide,” said Mike Milinkovich, executive director of the Eclipse Foundation. “Formally adopting Ada functionality into Eclipse will encourage easier integration of Ada development alongside other development tools and language platforms supported by Eclipse. Eclipse provides an ideal solution, giving Ada developers a universal open-source platform with a broad ecosystem of plug-ins.”</p>
		<p>“Aonix is excited to play a central role in Hibachi and to extend our involvement in the Eclipse community for the benefit of our customers and Ada users in general,” said Dave Wood, Aonix VP marketing. “For years, we have been committed to Eclipse solutions for the benefit of our Java and Ada customers, and our ability to provide proven sources and project leadership to help launch the Hibachi project represents the next stage of our commitment.”</p>
		<p>Major Hibachi functionality includes:</p>
		<ul class="paddedlist">
			<li>Ada editor with semantic navigation, code assist, structural representations, and formatting</li>  
			<li>Build configurations</li>
			<li>Debugging support</li>
			<li>Refactoring</li>
			<li>Support for multiple tool chains</li>
			<li>Native or embedded launch capability</li>
			<li>Wizards and templates</li>
		</ul>	
		
		<p>The Hibachi project aims to become the benchmark Ada IDE, by which all other Ada environments are measured, and the first choice for Ada developers. Functionally, Hibachi will shadow the ongoing development evolution of CDT. The first year development will focus on supporting multiple Ada compiler technologies, offering closer evolution with the CDT architecture, providing useful and stable APIs, and integrating with the Eclipse DSDP/TM and DSDP/DD projects. Subsequent phases will emphasize implementation of new and improved functionality, such as refactoring and analysis tools, and ever-increasing integration with more varied tools.</p>
		<p>In addition, Hibachi will provide an open framework for the integration and use of other tools used during the lifecycle of large-scale Ada application development. These tools include but are not limited to analysis, modeling, testing, verification, documentation, refactoring, and configuration management.</p>
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<p><strong>About Aonix®</strong><br />
		<p>Aonix offers mission- and safety-critical solutions primarily to the military and aerospace, telecommunications and transportation-related industries. Aonix delivers the leading high-reliability, real-time embedded virtual machine solution for running Java™ programs deployed today and has the largest number of certified Ada applications at the highest level of criticality. Headquartered in San Diego, CA and Paris, France, Aonix operates sales offices throughout North America and Europe in addition to offering a network of international distributors. For more information, visit <a href="http://www.aonix.com">www.aonix.com. </a></p>
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contacts</strong><br/>	
		Eclipse Foundation: <br/>
		Steve Eisenstadt<br/>
		Page One Public Relations<br/>
		919-781-8096<br/>
		steve@pageonepr.com<br/>
		<br/>
		<br/>Aonix: <br/>
		Janice Hughes<br/>
		Media Relations<br/>
		janice@hughescom.net<br/>
		(705) 751-9740<br/>
		Cell: (705) 774-8686<br/>
		<br/>
		Tom Grosman<br/>
		Hibachi Project Lead<br/>
		grosman@aonix.fr<br/>
		+33 1 41 46 19 60<br/>
		</p>
							
	</div>

</div>


EOHTML;

	$html = mb_convert_encoding($html, "HTML-ENTITIES");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
