
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Keynotes and Technical Program Announced for Eclipse Summit Europe 2009";
	$pageKeywords	= "eclipse, summit, europe, program, keynotes";
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
     	
      	<p>The Eclipse Foundation is pleased to announce the keynote speakers and technical program for the
      	upcoming <a href="http://www.eclipsecon.org/summiteurope2009/</a>Eclipse Summit Europe</a>
      	(ESE) conference to be held October 27-29 in Ludwigsburg, Germany.
      	ESE is the annual Eclipse European community conference that features sessions, tutorials and
      	symposia on the latest Eclipse technologies.</p> 
		
		<p>Professor Tony Bailetti, from Carleton University in Ottawa, and Don Syme, Senior Researcher at
		Microsoft, will be the keynote speakers.  Professor Bailetti, an expert on ecosystems and open
		source, will present "Open Source Maturity Curve and Ecosystems Interactions - Lessons Learned".
		Mr. Syme is the creator of the F# programming language. His keynote is titled "Taking Functional
		Programming into the Mainstream".</p>
		 		
 		<p>The <a href="http://www.eclipsecon.org/summiteurope2009/sessions?">technical program</a>
 		for Eclipse Summit Europe is now available. This year the program focuses
 		on five different tracks: 1) Runtime, 2) Modeling, 3) Embedded, 4) IDEs, and 5) Other New &amp;
 		Noteworthy. The program includes in-depth technical content from Eclipse experts and industry case
 		studies from Eclipse users.  Attendees can choose from 80 sessions in total.</p>
 		
 		<p><a href="http://www.eclipsecon.org/summiteurope2009/registration/">Registration is now open</a>
 		for Eclipse Summit Europe. Attendees are encouraged to register and
 		book hotel rooms as early as possible.</p>
 		
 	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

