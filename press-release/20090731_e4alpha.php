
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Early Alpha Release of e4";
	$pageKeywords	= "Eclipse Foundation, eclipse, e4";
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
		<h2>Community Bulletin</h2>
     	
	<p>The e4 project team is please to announce the availability of the 0.9 release, an early alpha release of 
	the e4 technology.  e4, a project initiated 18 months ago, is focused on building the next generation Eclipse 
	platform.  The e4 vision and implementation is led by a community of 53 committers.  </e>

	<p>The key technical areas of e4 are:
	<ul>
		<li>A service-oriented programming model, based on OSGi, that provides better isolation of software components from their surround environment. 
		<li>The GUI is represented as a uniform model that can be generically queried, manipulated, tooled, and extended, allowing for rapid design and customization of the user interface with little or no coding effort.
		<li>Use of web styling technology (CSS), allows the presentation of user interface elements to be infinitely tweaked and reconfigured without any modification of application code.
		<li>Bringing Eclipse runtime technology into the JavaScript world, and enabling software written in JavaScript to be executed in the Eclipse runtime.
		<li>A framework for defining the design and structure of Standard Widget Toolkit (SWT) applications declaratively. This eliminates writing of repetitive boilerplate SWT code, thus reducing development cost, improving UI consistency, and enabling customized application rendering.
		<li>A new port of SWT, dubbed "browser edition", that allows existing SWT applications to be executed on web platforms such as ActionScript/Flash.
		<li>In the development tools space, a more flexible resource model that provides better support for complex project layouts.
	</ul>
	</p>
	
	<p>A goal of this early release is to attract more potential contributors to the e4 project.  Developers are 
	encouraged to explore and experiment with e4 and then provide feedback to the project team.  The project team 
	is also encouraging additional developers to begin contributing as committers to the success of the e4 
	project.
	</p>

	<p>A number of resources are available to make it easier for developers to understand e4, including:
	<ul>
	<li><a href="http://eclipse.org/e4/development/readme/readme_e4_0.9.html#R-Demos 
">Demos and sample applications</a> have been included to show what is possible with the release.    
	<li>Two <a href="http://www.eclipse.org/community/e4webinar/abstracts.php">e4 Webinars</a> has been scheduled for August 20 and August 26.  This on-line conference will feature e4 committers explaining different aspects of the project.  The webinars are free to attend but attendees must pre-register.  <need url>
	<li>The <a href="http://eclipse.org/e4/resources/e4-whitepaper.php">e4 whitepaper</a> provides a technical overview of the technology.
	<li><a href="http://download.eclipse.org/e4/downloads/drops/R-0.9-200907291930/e4-news-all.html ">New and Noteworthy</a> documentation describes in more detail what is available in this release.  <need url>
	<li>Detailed project information is available on the <a href="http://wiki.eclipse.org/E4">e4 wiki</a>.
	<li>Developers are welcome to join and participate in the <a href="https://dev.eclipse.org/mailman/listinfo/e4-dev">e4 developer mailing list</a>.

	</p>
	
	<p>Developers can <a href="http://download.eclipse.org/e4/downloads/drops/R-0.9-200907291930/index.html">download e4 0.9 now</a>.   The first general release of e4 is expected in 2010.
	</p>
	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://download.eclipse.org/e4/downloads/drops/R-0.9-200907291930/index.html">Download e4</a></li>
				<li><a href="http://download.eclipse.org/e4/downloads/drops/R-0.9-200907291930/e4-news-all.html">New and Noteworthy</a></li>
				<li><a href="http://eclipse.org/e4/resources/e4-whitepaper.php">e4 White Paper</a></li>
				<li><a href="http://www.eclipse.org/community/e4webinar/abstracts.php">e4 Webinars</a></li>
			</ul>
		</div>
	</div>	
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

