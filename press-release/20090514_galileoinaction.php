
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Galileo In Action";
	$pageKeywords	= "eclipse, Galileo, action, webinar, release";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="fullcolumn">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>
		
		<h2>Community Bulletin</h2>
		
      	<p>On June 26, the Eclipse Foundation is presenting Galileo In Action - a virtual conference
 		where you can interact with project leads involved in the release and see demos of the new
 		features. The annual simultaneous release has now grown to 33 projects with over 24 million
 		lines of code, contributed by committers around the world.  With such a large global community,
 		Eclipse wants to bring Galileo to you!</p>

 		<p>Galileo In Action is free to attend and registering gets you into all 5 sessions:
 		<ul>
 			<li>10:00 am EST - <b>What is Galileo and Why do I Love it?</b>
 			<br>
 			Presented by Doug Schaefer (C/C++ Development Tooling) and Brian Fitzpatrick (Data Tools Platform)
 			<br><br>
 			Doug and Brian will give an overview of what exactly the Galileo release is all about.  They
 			will explain what makes Eclipse projects want to participate in the simultaneoue release and
 			what is required for them to do so.  Doug and Brian will describe the improvements Galileo
 			brings to the community and from their perspective as project leads, what they see as the
 			impact to the Eclipse ecosystem.
 			</li>
 			
 			<li>11:00 am EST - <b>Frameworks Showcase</b>
 			<br>
 			Presented by Scott Lewis (Eclipse Communication Framework) and Pascal Rapicault (p2)
 			<br><br>
 			ECF is a framework for supporting the development of distributed Eclipse-based tools and
 			applications. It can be used to create other plugins, tools or full Eclipse RCP applications
 			that require asynchronous point-to-point or publish-and-subscribe messaging.
			<br><br>
 			p2 provides a framework for provisioning Eclipse-based applications. It replaces Update Manager
 			as a mechanism for managing your Eclipse install, searching for updates and installing new
 			functionality. 
 			<br><br>
 			Scott and Pascal will give a short introduction to ECF and p2 and explain what these projects
 			have contributed to the Galileo release.
 			</li>
 			
 			<li>12:00 pm EST - <b>Runtime Showcase</b>
 			<br>
 			Presented by Tom Watson (Equinox) and Doug Clarke (EclipseLink)
 			<br><br>
 			From a code point of view, Equinox is an implementation of the OSGi R4 core framework
 			specification, a set of bundles that implement various optional OSGi services and other
 			infrastructure for running OSGi-based systems. The goal of the Equinox project is to be a
 			first class OSGi community and foster the vision of Eclipse as a landscape of bundles. As part
 			of this, it is responsible for developing and delivering the OSGi framework implementation
 			used for all of Eclipse.
 			<br><br>
 			EclipseLink, or the Eclipse Persistence Services Project, delivers a comprehensive open-source
 			Java persistence solution. It has a set of persistence services enabling developers to
 			efficiently develop applications that access data in a variety of data sources and formats.
			<br><br>
 			Join Tom and Doug for a review of these runtime projects and the new features they bring
 			to Galileo.
 			</li>
 			
 			<li>01:00 pm EST - <b>Tools Showcase</b>
 			<br>
 			Presented by Andreas Buchen (SAP) and Roy Ganor & Michael Spector (PHP Development Tools)
 			<br><br>
 			The Eclipse Memory Analyzer is a fast and feature-rich Java heap analyzer that helps you find
 			memory leaks and reduce memory consumption.  Developers use the Memory Analyzer to analyze
 			productive heap dumps with hundreds of millions of objects, quickly calculate the retained
 			sizes of objects, see who is preventing the Garbage Collector from collecting objects, and run
 			reports to automatically extract leak suspects.
 			<br><br>
			The PHP Development Tools project provides a framework for the Eclipse platform. The project
			encompasses all development components necessary to develop PHP and facilitate extensibility.
			It leverages the existing Web Tools Platform (WTP) and Dynamic Languages Toolkit (DLTK) i
			in providing developers with PHP capabilities.
			<br><br>
			Andreas, Roy and Michael will talk about the new and noteworthy features their respective
			projects will introduce in the Galileo release.
 			</li>
 			
 			<li>02:00 pm EST - <b>Galileo In Action</b>
 			<br>
 			Presented by Jason Weathersby (Business Intelligence and Reporting Tools) and Mik Kersten (Mylyn)
 			<br><br>
 			    * what does Galileo mean to your end customer, product delivery?
    * what value does the release train bring? 
 			</li>
 		</ul>
 		</p>
 		
 		<p>To attend, register through <a href="https://www2.gotomeeting.com/register/207615571" target="blank">
 		GoToMeeting</a>.</p>

 	<br><br>
	</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

