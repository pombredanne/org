<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "New Eclipse MTJ Release Eases Cross Platform Development for Mobile Java Applications";
$pageKeywords	= "global eclipse training";
$pageAuthor		= "Ian Skerrett";

# Add page-specific Nav bars here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
# $Nav->addCustomNav("My Link", "mypage.php", "_self");
# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

# End: page-specific settings
#

# Paste your HTML content between the EOHTML markers!
ob_start();
?>
		<style>
		.paddedlist {margin-left:30px;margin-top:-10px;}
		.paddedlist li {padding-bottom:3px; }
		p {padding-bottom:10px;}
		</style>
<div id="widecontent">
	<div id="midcolumnwide">
		<h2>Press Release</h2>
	
		<center>
		<h1><?=$pageTitle?></h1>
		</center>
		
		<p><strong>Ottawa, Canada - October 15, 2008 - </strong>The Eclipse Foundation is pleased to announce the new release of the Eclipse Mobile Tools for Java Project  (MTJ).  Eclipse MTJ provides an IDE for Java developers who are creating applications for mobile devices.  The new release makes it easier to develop mobile applications that target devices from the major manufacturers, including Motorola, Nokia and Sony Ericsson.</p>
		<p>The Eclipse MTJ 0.9 release is the result of collaboration between the Eclipse MTJ project and the EclipseME open source project. A significant portion of the MTJ code is based on the source code from the popular EclipseME project. EclipseME has been providing an Eclipse-based Java ME development environment since 2003 and has been downloaded over 600,000 times. Moving forward, the EclipseME user community is encouraged to migrate to Eclipse MTJ releases.</p>
		<p>The Eclipse MTJ release includes the following:</p>
		<ul class='paddedlist'>
			<li>Functional equivalence to EclipseME 1.7.9</li> 
			<li>Support for all Unified Emulator Interface (UEI) compliant SDKs, including Motorola, Nokia, and Sony Ericsson</li> 
			<li>Support for Java ME emulators including MPowerplayer and MicroEmu </li>
			<li>Preprocessor of Java ME code integrated on the build environment</li>
			<li>Import of EclipseME and NetBeans projects</li>
			<li>Improved support for MIDlet development and deployment via the Application descriptor editor</li>
			<li>Multiple hosts support (WIN32, Linux and Mac OS X)</li>
		</ul>

		<p>Eclipse MTJ is being supported and adopted by a large vendor and user community, including a number of the major handset manufacturers. </p>
		<p>“The new MTJ release is an important milestone towards establishing Eclipse as the standard platform for mobile development,” stated Christian Kurzke, Eclipse MTJ Project Lead and Developer Tools Architect at Motorola. “We are excited to be joining forces with the EclipseME community to provide a common platform for all the mobile vendors to build upon.  Going forward, MTJ will be a key component of MOTODEV Studio for Java 2.0 which will be released later this month”</p>
		<p>"I'm excited and proud to see EclipseME grow up and take on a new role as the new Eclipse Mobile Tools for Java implementation,” explained Craig Setera, EclipseME Project Leader. “This is a recognition of all of the hard work of myself and many individuals in the EclipseME community.  I look forward to seeing the MTJ project grow and thrive under the umbrella of the Eclipse Foundation."</p>
		<p>Eclipse MTJ 0.9 is available for download from <a href="http://www.eclipse.org/dsdp/mtj/"http://www.eclipse.org/dsdp/mtj/</a>. </p>
				
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
		Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<? /*<center># # #</center> 
		
		<p><b>Press Contact</b><br>
		Chantal Yang<br>
		Page One Public Relations<br>
		650-565-9800 x752<br>
		<a href="mailto:chantal@pageonepr.com">chantal@pageonepr.com</a><br> */?>
		<br>
	</div>
	<div id="rightcolumnwide">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="/http://www.eclipse.org/dsdp/mtj/">MTJ Project Page</a></li>
			</ul>
		</div>
	</div>
</div>


<? 
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

