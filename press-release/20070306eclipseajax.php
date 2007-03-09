<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Announces Initiatives for Ajax Applications and Dynamic Languages ";
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
		<h2 ALIGN="CENTER"><strong>Eclipse Foundation Announces Initiatives for Ajax Applications and Dynamic Languages</strong></h2>

		<p><strong>ECLIPSECON 2007, SANTA CLARA, Calif., March 06, 2007</strong> — The Eclipse Foundation today announced three new project milestones that extend the Eclipse platform for Ajax applications and dynamic languages.  The three projects include the Eclipse Rich Ajax Platform (RAP), the Eclipse Ajax Toolkit Framework (ATF) and the Eclipse Dynamic Language Toolkit (DLTK). These projects provide innovative new Eclipse-based technology to be utilized by Ajax developers and developers using dynamic languages such as Python, Ruby and Tcl.</p> 
		<p>The Eclipse Rich Ajax Platform (RAP) project provides a runtime enabling organizations to build rich Ajax-enabled Internet applications. RAP extends the existing Eclipse Rich Client Platform (RCP) by adding a series of frameworks that allow developers to quickly create Ajax applications.  Based on Eclipse RCP technologies, this new initiative will allow organizations to use a common component model and platform to build both rich desktop applications and rich browser based applications. The first milestone release of RAP is now available.  More information can be found at <a href="www.eclipse.org/rap">www.eclipse.org/rap</a>.</p> 
		<p>"RAP allows us to build the next generation of our products with full Ajax capabilities, the productivity we are used to from rich client development, and without the need to write complex JavaScript,” explains Ludwig Neer, CTO of CAS AG, a leading German CRM vendor.  “By using Eclipse as a platform we get a consistent development model that is all Java and can be used for Rich Clients, Ajax Clients and even for server side implementations."</p>
		<p>The Eclipse Ajax Toolkit Framework (ATF) project provides the tools and frameworks for building an Ajax IDE. ATF makes it easy for developers to build, debug and deploy their Ajax applications. It includes a variety of components, including a Javascript debugger that supports debugging of local and network files and tools for inspecting running Ajax applications. Eclipse ATF supports a number of the more popular Ajax frameworks, including Dojo, Rico and Zimbra. The latest available download of ATF now provides support for Mac OSX, in addition to existing Windows and Linux support.  More information can be found at <a href="http://www.eclipse.org/atf">www.eclipse.org/atf</a>.</p>
		<p>“Nexaweb has incorporated ATF into our Nexaweb Studio, a visual drag and drop environment for developing enterprise Ajax applications,” explains Coach Wei, CTO of Nexaweb Technologies Inc. “This is incredibly innovative technology that allows us to create innovative commercial products and demonstrates that Eclipse is well positioned to be the standard for Ajax IDEs.”</p>
		<p>The Eclipse Dynamic Language Toolkit project (DLTK) extends the Eclipse platform to other dynamic computer languages, like Python, Ruby and Tcl. DLTK provides the frameworks and components, such as debugging and interactive console, code indexing and refactoring, to simplify the task of adding support for dynamically typed languages to Eclipse. The initial release of DLTK is now available and provides support for Tcl. Future releases will have support for Ruby and Python.  More information can be found at <a href="http://www.eclipse.org/dltk">www.eclipse.org/dltk</a>.</p>
		<p>“Eclipse is important part of the Cisco development tool strategy and we have plans to expand its use as a development tool," said Ed Warnicke, a software engineer at Cisco. "We have and will continue to contribute to the DLTK project, specifically to the Tcl, in support of several thousand engineers at Cisco and elsewhere who are using this technology.”</p>
		<p>All three of these projects will be featured at the EclipseCon conference, March 5-8 in Santa Clara, California. EclipseCon features tutorials and technical sessions about the various Eclipse projects. In addition, the OSGi Developer Conference is being co-located at EclipseCon.</p>  
		
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

