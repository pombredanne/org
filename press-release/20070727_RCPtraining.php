<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse RCP Training";
	$pageKeywords	= "RCP Training, RCP Course Outline";
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
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
		<p>
			<strong>Eclipse RCP Training</strong>
		</p>
		<p>
			Go back to school with Eclipse to learn the techniques, tips and tricks required for successfully building and deploying an
			RCP application.  The Eclipse Foundation, in partnership with several Eclipse training companies, is holding a series of
			RCP training classes in Europe and North America.  Each RCP class will run for four days and will feature instructor-led
			classroom instruction and in-depth hands-on labs and tutorials. 					
		
		<p>
			The RCP course will help you understand how to implement your own application based on Eclipse RCP. It will explain the
			core frameworks in Eclipse, the plug-in architecture, extension points and scenarios for building on the common
			configurations of Eclipse technology.  Participants will begin working with simple examples, which will become more
			complex as the course progresses. Topics will include:
			<ul>
				<li>Eclipse RCP – introduction and concepts</li> 
				<li>Eclipse plug-in architecture</li> 
				<li>RCP development environment</li> 
				<li>RCP application structure, lifecycle and extensibility</li> 
				<li>The Standard Widget Toolkit (SWT) and JFace</li> 
				<li>Workbench, perspectives and views </li> 
				<li>Actions</li> 
				<li>Editors</li>  
				<li>Dialogs (preference pages)</li>  
				<li>Wizards</li>  
				<li>Adding help</li>  
				<li>Features, branding, product customization and updates</li> 
			</ul>
		</p>
		<p>
			For training class locations, dates, and registtration go to
			<a href="http://www.regonline.com/RCPtraining">www.regonline.com/RCPtraining</a>.	
		</p>

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
