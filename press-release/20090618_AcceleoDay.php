
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Acceleo Day";
	$pageKeywords	= "Eclipse, acceleo, modeling, nantes, france, libre software";
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
	<div id="fullcolumn"
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
     	<p>
     		<a href="http://www.acceleo.org/wiki/index.php/Eclipse_Acceleo_Day" target="blank"><img src="http://www.acceleo.org/wiki/skins/acceleo/logo-acceleo.gif" border="0" alt="Acceleo logo"></a><br>
     		The first <a href="http://www.acceleo.org/wiki/index.php/Eclipse_Acceleo_Day" target="blank">Eclipse
     		Acceleo Day</a> is being held in Nantes, France on July 10, 2009.  Acceleo is a component of
     		the Eclipse Model to Text (M2T) project and the workshop will be an event where users and
     		developers of Acceleo can meet, present their planned extensions, and discuss model-driven
     		engineering.
		</p>
		<p>
			Topics of interest at the workshop will include MOF-to-Text language, validation with Acceleo,
			scripting generation, comparisons to other generative engines, and integration of Acceleo in an
			industrial tool chain. Workshop attendees are welcome to present their work in a 20-minute demo to get feedback
			from the community.  See the <a href="http://www.acceleo.org/wiki/index.php/Eclipse_Acceleo_Day#Call_for_participation" target="blank">event
			page</a> for participation details. 
		</p>
		<p>
			Eclipse Acceleo Day is co-located with the <a href="http://2009.rmll.info/?lang=en" target="blank">
			10th Libre Software Meeting</a>.  The event is free but you must
			<a href="http://spreadsheets.google.com/viewform?hl=en&formkey=ckVWMVdETDJGaVBIb3NHbnB4SG1CaFE6MA" target="blank">register</a>
			by July 3 in order to attend.
		</p>
		  
	</div>
	</div>
</div>
	

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


