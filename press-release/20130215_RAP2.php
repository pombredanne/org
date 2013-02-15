<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse RAP Project Release 2.0 Now Supports Native Client Platfo";
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
<p><strong>Ottawa, Canada – February 15, 2013 </strong>– The <a href="http://eclipse.org/rap/">Eclipse Remote Application Platform (RAP)</a> project has announced the RAP 2.0 release. This new release represents 
a significant engineering effort that transforms RAP from a platform for creating browser-based rich internet applications to a universal platform for 
creating applications that target many different types of devices, including native mobile platforms, point-of-sale devices, inventory control devices, etc. </p>

<p>Mobile development and M2M development have made support for multiple types of devices an important requirement for enterprise application development. 
RAP 2.0 introduces a new JSON-based communications protocol that allows Java applications to be written once, deployed on a server, and then support a native 
client look-and-feel supported on a range of different target devices and platforms, such as iOS, Android, web browsers, and others. The RAP protocol makes it 
significantly easier to support applications on new clients without re-writing the applications for each new device platform.</p>

<p>RAP 2.0 also includes the following new and improved features:
<ul>
<li>A new Client-API for discovery of services that are provided by the respective client implementation. These services can, for example, open documents, execute script code, or determine the current geo-position. Each client application can provide its own services.
<li>Simplified creation of custom widgets and add-ons. Custom widgets can communicate directly with the client and server components via the RAP protocol.
<li>A faster table widget for displaying large amounts of data.
</ul>
</p>
<p>Eclipse RAP 2.0 is now available for <a href="http://eclipse.org/rap/downloads/">download</a>. More details about the 2.0 release can be found in the <a href="http://eclipse.org/rap/noteworthy/2.0/"New and Noteworthy</a> document.


	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipse.org/rap/">RAP Home Page</a></li>
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


