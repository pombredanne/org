
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Registration for EclipseDay in Valencia is Open";
	$pageKeywords	= "Eclipse, spain, valencia, bpmn, uml";
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
     		<a href="http://www.moskitt.org/eng/3moskittday-eclipseday_2010/" target="blank">EclipseDay in Valencia</a>
     		is being held in Spain on November 30 - December 1.  This two-day event will
     		bring together the Spanish community of Eclipse users and developers from a wide range of academic, institutional
     		and business backgrounds.  The main theme of the conference is Modeling, Methodologies and Model Driven Development.  There will also
			be other topics related to Eclipse projects.
		</p>
		<p>
			Conselleria de Infraestructruras y Transporte (CIT) of the Valencian Comunity Regional Government is
			organizing MOSKittDay together with EclipseDay. CIT is a member of the Eclipse Foundation and heads the
			MOSKitt (Modeling Software Kitt) project in the development of an open source CASE tool based on Eclipse.
			Registration for both events is free, but you must fill out a
			<a href="http://www.moskitt.org/eng/3moskittday_inscripcion/" target="blank">registration form</a>
			in advance.
		</p> 
		<p>
			Please join us in Valencia for EclipseDay 2010!
		</p>
	</div>
	</div>
</div>
	

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


