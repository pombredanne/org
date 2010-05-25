<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Summit Europe 2010 Call for Participation";
	$pageKeywords	= "eclipse, Helios, conference";
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
	<div id="fullcolumn">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>
		
		<h2>Community Bulletin</h2>
		
		<p>
			The Eclipse Summit Europe (ESE) 2010 call for participation is <a href="http://www.eclipsecon.org/summiteurope2010/submissions/?page=submissions">now open</a>. You are invited to submit proposals in four categories: 1) Embedded,
			2) e4, 3) Modeling, and 4) Runtime.  ESE 2010 will take place November 2-4, 2010 in Ludwigsburg, Germany. 
		</p>
		
		<p>
			The Eclipse Summit Europe schedule will consist of one day of tutorials and symposia followed by
			two days of technical sessions, so many opportunities are available for you to present your
			Eclipse expertise to conference attendees.  We encourage you to submit early, as proposals
			will be open to the community for questions, comments and feedback.
		</p> 

		<p>
			Guidelines for submissions are available 
			<a href="http://www.eclipsecon.org/summiteurope2010/submissions/?page=submissions">here</a>.
			The deadline to submit is August 16, 2010. 
		</p>
 
		<p>
			Please note if your organization is interested in sponsoring ESE, conference	<a href="http://www.eclipse.org/go/ESEsponsor@cbjun11">
			sponsorship packages</a> are available.	
		</p>

		<br><br>		
				
 	<br><br>
 	
	</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>