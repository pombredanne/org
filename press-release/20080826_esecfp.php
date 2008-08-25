<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Summit Europe - Call for Papers Deadline is Septebmer 1";
	$pageKeywords	= "eclipse, summit, europe, call for papers, cfp, submit, demo, noteworthy";
	$pageAuthor		= "Lynn Gayowski";
	
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
		<h2>Community Bulletin</h2>
	
		<p>
			The deadline for the Eclipse Summit Europe Call for Papers is Monday, September 1, 2008.  Eclipse Summit Europe is the
			Eclipse Foundation&#146;s annual community event for the European Eclipse ecosystem and is scheduled for November
			19-20 in Ludwigsburg, Germany.
		</p>
		
		<p>
			Everyone in the Eclipse community is encouraged to submit a session proposal.  There are 4 tracks at the conference:
			<ul>
				<li><b>Consumer Stories</b> - explore your company&#146;s or your experience using Eclipse-based technologies</li>
				<li><b>Demos</b> - give a technical presentation showing code examples from your project</li>
				<li><b>Ganymede Talks</b> - share new features and improvements coming out of Eclipse&#146;s Ganymede release</li>
				<li><b>New &amp; Noteworthy Talks</b> - explain what innovations have already come out of your work and what you plan to
				achieve next</li>
			</ul>
		</p>

		<p>
			You may submit as many proposals as you want online at <a href="https://www.eclipsecon.org/submissions/">
			eclipsecon.org/submissions</a>, using your <a href="https://bugs.eclipse.org/bugs/">Bugzilla account</a>.
			We anticipate an exciting program at this year&#146;s conference and look forward to hearing from you!
		<br><br>
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
