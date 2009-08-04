<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Summit Europe Call for Participation";
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
		
		<p>
			The call for participation is now open for Eclipse Summit Europe, the Eclipse Foundation&#146;s
			annual European community event, taking place October 27-29, 2009 in
			Ludwigsburg, Germany. You are invited to submit proposals in five categories: 1) embedded,
			2) IDEs, 3) modeling, 4) runtime, or 5) other new & noteworthy that is of interest to the
			Eclipse community.	
		</p>
		
		<p>
			The Eclipse Summit Europe schedule will consist of one day of tutorials and symposia followed by
			two days of technical and business sessions, so many opportunities are available for you to present your
			Eclipse expertise to conference attendees.  We encourage you to submit early, as proposals
			will be open to the community for questions, comments and feedback.
		</p> 

		<p>
			Guidelines for submissions are available at
			<a href="http://www.eclipse.org/go/ESEcfp@cbjun11">http://www.eclipsecon.org/summiteurope2009/submissions</a>.
			The deadline to submit is August 18, 2009. We anticipate an exciting program at this
			year&#146;s conference and look forward to hearing from you!
		</p>
 
		<p>
			Please note as well that attendee registration will open in July and conference
			<a href="http://www.eclipse.org/go/ESEsponsor@cbjun11">
			sponsorship packages</a> are already available.	
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