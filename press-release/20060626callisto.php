<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Callisto Press Release";
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
		<h2></h2>
		<h2 ALIGN="CENTER"><strong>ECLIPSE COMMUNITY DELIVERS ON SCHEDULE WITH THE RELEASE OF 
TEN OPEN SOURCE PROJECTS</strong></h2>
		<ul>
		<li>Callisto Demonstrates the Predictability of Open Source Software Development for Large Scale Projects</li>
		</ul>
		<p><strong>OTTAWA, CANADA – June 26, 2006 </strong>–The Eclipse Foundation today announced the release of 10 
		Eclipse open source projects. This release event, named Callisto, is one of the largest multi-project 
		releases undertaken by an open source community. The roll-out of Callisto marks the third consecutive year 
		Eclipse has shipped a major release on schedule.  </p>

		<p>Callisto was a major undertaking for the Eclipse community, involving 10 different project teams, 260 
		committers and over 7 million lines of code. Demonstrating the multi-vendor and global nature of the Eclipse 
		community, 15 different ISVs contributed open source developers to work on the projects included in 
		Callisto. Those developers were located around the globe in 12 different countries; Canada, US, Finland, 
		Turkey, China, France, Russia, Czech Republic, India, Switzerland, Germany, and Austria.  </p>

		</p>“Callisto demonstrates that the open source development model is very effective in delivering a platform 
		for software development,” says Mike Milinkovich, executive director of Eclipse Foundation. “Last year, when 
		we first started the Callisto release, it was a risk to try to bring together so many projects. Now the 
		Eclipse projects have proven that a multi-project, multi-vendor, distributed community is very effective in 
		shipping software on a predictable schedule.”</p>

		<p>A major emphasis of Callisto is to make it easier for organizations, such as ISVs and enterprise 
		developers, to adopt Eclipse as the platform for application development. Adopters are able to benefit 
		from Eclipse’s modular architecture to use a variety of different Eclipse projects to build their 
		applications. Callisto provides a single release event that synchronizes version compatibility and 
		schedules. ISVs planning to use the projects in the Callisto release include Actuate, AvantSoft, BEA, 
		Borland, Business Objects, IBM, ILOG, Innoopract,  Intalio,  Intervoice, Klocwork, Lattix, LogicLibrary, 
		Lombardi, Lynxworks, Oracle, QNX and Scapa Technologies.  </p>

		<p>Callisto includes major functional release of the following Eclipse projects: 
		<ul><br>
			<li>Business Intelligence and Reporting Tools (BIRT) 2.1
			<li>C/C++ IDE (CDT) 3.1
			<li>Data Tools Platform (DTP) 1.0
			<li>Eclipse Modeling Framework (EMF) 2.2
			<li>Graphical Editor Framework (GEF) 3.2
			<li>Graphical Modeling Framework (GMF)1.0
			<li>Eclipse Project 3.2
			<li>Test and Performance Tools Platform (TPTP) 4.2, 
			<li>Web Tools Platform (WTP) 1.5
			<li>Visual Editor (VE) 1.2.
		</ul>
		</p>

		<p>Some of the technology highlights of the project releases include:
			<ul><br>
			<li><p><strong>New Standalone OSGi Runtime:</strong> Developers now have the flexibility to use the 
			Eclipse OSGI runtime as a standalone framework.  The OSGi runtime, part of the Eclipse Equinox 
			project, is the foundation of the Eclipse Rich Client Platform. As a standalone framework it will 
			enable developers to use it in a variety of application architectures, including embedded, client and 
			server applications.</p<

			<li><p><strong>Web Services Tooling: </strong>Offering of tools to simplify the creation, deployment 
			and profile of Web services. New tools will be offered in the Web Tools Project (WTP) and in Test and 
			Performance Tools Platform (TPTP).</p>

			<li><p><strong>New Platform Support for OSX on Intel and preview of Windows Vista:</strong> Eclipse 
			developers can now build applications that run on OSX on Intel and Windows Vista. </p>

			<li><p><strong>Release 1.0 of DTP and GMF:</strong> Data Tools Platform (DTP) delivers the frameworks 
			required for building data-centric applications. Graphical Modeling Framework makes it easy to create 
			applications that incorporate graphical editors.</p>
			</ul>

		<p>The projects in the Callisto release will be available for download June 30, 2006. Please visit 
		<a href="http://www.eclipse.org/callisto">www.eclipse.org/callisto</a> for more information.</p>
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		John Moran/Laura Ackerman<br>
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

