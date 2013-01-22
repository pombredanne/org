<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Announces Release of Hudson 3.0";
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
<br>
<p><strong>Ottawa, Canada - January 22, 2013</strong> - The Eclipse Foundation today announced the release of Hudson 3.0. Used around the world with more than 
30,000 installations, Hudson is a continuous integration (CI) server used to significantly improve the software development process. Hudson increases 
productivity by coordinating and monitoring executions of repeated jobs, making it easier for developers to integrate changes to the project and for users to 
obtain a fresh build. Incorporating feedback from its community, Hudson 3.0 introduces important new functionality and simpler installation and administration 
for developers.</p>

<p>CI with automated test execution has seen broad adoption in recent years, changing the way companies look at Build Management, Release Management, 
Deployment Automation and Test Orchestration. A CI solution provides executives, business managers, software developers and architects a better sense of the 
development process and code quality of projects through the development lifecycle. </p>

<p>Hudson 3.0 highlights:<ul>
<li>Plug-In Manager: Simplifies management and installation from a repository of over 400 existing plug-ins. It also enables the registration of custom plug-in 
repositories. Additional administrative settings give IT control over the range of plugins available to Hudson administrators.
<li>Simplified installation: New self-installation and Bootstrap configuration enables configuration during first launch and just-in-time loading of 
non-Eclipse components. 
<li>Architectural improvements and abstraction layer: Hudson core scripting and charting layers have been abstracted to support different technologies such 
as Eclipse BIRT for charts. 
<li>Smaller footprint and Eclipse compliance: The size of Hudson footprint has been reduced by 50 percent. This was the result of the work to modernize and 
change the underlying libraries used in Hudson to meet Eclipse IP requirements. Libraries using GPL or LGPL licenses were removed, existing libraries were 
updated to the latest versions, and library redundancies were resolved. 
<li>Support and certification for top plug-ins: Ensures that the most frequently used Hudson plug-ins can integrate with the latest versions.
<li>Improved look and feel: Web interface redesign using JQuery provides a more responsive user interface.
</ul>
</p>

<p>"The wide popularity of Hudson and the feedback from its vibrant community were the key drivers of this release," said Mike Milinkovich, executive director 
of the Eclipse Foundation. "All contributors to the project have also worked to ensure Hudson evolves into a scalable, reliable and high-performance continuous 
integration server for current and future users." </p>

<p>"With a strong and engaged ecosystem, Hudson continues to thrive, and Oracle's goal in moving the project to the Eclipse Foundation has expanded this even 
further," said Chris Tonas, vice president, Application Development Tools, Oracle. "Hudson 3.0 adds key capabilities that make continuous integration easier 
than ever to implement and manage while enhancing the overall environment for developers."</p>

<p>"Open source tools now dominate the CI landscape, and thanks to their extensibility, are becoming the key infrastructure component for orchestrating 
software delivery," said Mik Kersten, CEO of Tasktop a creator of the Eclipse Mylyn project. "Given the growing dependency that many organizations have on 
their investment in Hudson-based CI, today's 3.0 release is a great sign of the benefits of combining commercial investment with Eclipse's open source 
governance to create an enterprise-grade open source CI tool."</p>


<strong>About the Eclipse Foundation</strong>

<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and 
runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, 
universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>

<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse 
Foundation are available at <a href="http://eclipse.org/">www.eclipse.org.</a></p>


	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipse.org/hudson/1" target="_blank">Hudson Project Page</a></li>
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


