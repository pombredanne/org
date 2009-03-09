<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Announces Pulsar Initiative to Define a Tools Platform for Mobile Development";
	$pageKeywords	= "eclipse, mobile, java, pulsar";
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
		.paddedlist li {	padding-bottom:7px;	}
	</style>
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<i>Handset manufacturers Motorola, Nokia, RIM and Sony Ericsson collaborate to simplify mobile development</i><br><br>
		
		<p><b>OTTAWA – March 10, 2009 </b>-- The Eclipse Foundation today announced Pulsar, a new industry 
		initiative to define and create a standard mobile application development tools platform.  The 
		initiative is led by Motorola, Nokia and Genuitec. Participating members also include IBM, RIM and 
		Sony Ericsson Mobile Communications. </p>
		
		<p>The Pulsar initiative will focus on four areas: <ul>
<li>The creation of the packaged distribution called Eclipse Pulsar Platform; 
<li>A technical roadmap to advance the capabilities of the platform; 
<li>A set of best practices which includes documentation and test suites; and 
<li>Education and outreach to drive adoption of Pulsar with mobile application developers.  </ul>

As part of the roadmap, Pulsar will support major mobile development environments such as JavaME, 
mobile Web technologies, and native mobile platforms. </p>

<p>Today, mobile developers are required to use a variety of software development kits (SDK) to develop 
their applications for different handset manufacturers. This presents an unnecessary burden for developers 
who want to create applications for a range of devices from different manufacturers. Pulsar will define a 
common set of Eclipse-based tools in a packaged distribution that will interoperate with the various handset 
SDKs. This will enable developers to stay within one familiar development environment while creating mobile 
applications that target multiple device families.</p>

<p>The first release of Pulsar Platform is expected to be available at the end of June 2009 and will be part 
of the Eclipse Galileo annual release.</p>

 <p>“By providing a common development environment defined collaboratively across the mobile industry, the 
 Eclipse Pulsar Platform is enabling more developers to create innovative applications for multiple devices,” 
 said Dino Brusco, Senior Director, Developer Platforms & Services, Motorola. “This initiative aligns with 
 Motorola’s commitment to provide developers the most advanced and flexible tools available.” </p>

 <p>“Nokia is proud to participate in the Pulsar initiative, as it brings new energy to improving the mobile 
 centric features of Eclipse,” said Rich Bartlett, Director, Development Tools, Nokia. “We see this a key 
 step forward in making Eclipse a premier environment for mobile development, supporting our efforts to 
 attract innovative applications and services to our smartphone platforms.” </p>

 <p>“The new crop of smartphones blur the traditional lines between desktop computing and mobile 
 connectivity, and are redefining the standards for Net applications,” said Wayne Parrott, Vice President of 
 Product Development for Genuitec. “Through collaboration with the world’s leading mobile technology 
 providers, it’s our goal to lay the groundwork for the next generation of mobile application development.”</p>

<p>“This industry initiative drives the leveraging of a state of the art development platform, so that the 
global development community will be empowered to create applications easily, quickly and securely that 
provide rich mobile experiences for consumers on their mobile phones,” said Vildan Hasanbegovic, Development 
Tools Product Manager of Sony Ericsson. “Sony Ericsson fully supports this as we regard it as a key step to 
increase the speed to market for applications and content from our developer communities and through our 
channels to consumers.”</p>

<p>“The Pulsar initiative is a great example of how open source can foster industry collaborations,’ 
explains Mike Milinkovich, Executive Director, Eclipse Foundation. “Congratulations to the major handset 
manufacturers Motorola, Nokia, RIM and Sony Ericsson for driving this initiative to collaborate on the 
definition of a common mobile application development tools platform.”</p>
		
		
		<p><b>About the Eclipse Foundation</b><br />
		Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
		Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		
		
		<p><b>Contacts:</b><br/>
		Chantal Yang<br/>
		Page One PR for Eclipse Foundation<br/>
		415-875-7494<br/>
		eclipse@pageonepr.com<br/>
		</p>
		</div>
</div>
<div id="rightcolumn">
	<div class="sideitem">
	<h6>Related Links</h6>
	<ul>
		<li><a href="http://wiki.eclipse.org/EMIWG">Eclipse Mobile WG (Pulsar)</a></li>
	</ul>
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

