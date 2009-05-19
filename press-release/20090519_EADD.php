
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Application Developer Day";
	$pageKeywords	= "Eclipse, developer day, EADD, Karlsruhe, Germany, application";
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
     		<a href="http://wiki.eclipse.org/EclipseApplicationDeveloperDayKarlsruhe" target="blank">An Eclipse
     		Application Developer Day (EADD)</a> is being held in Karlsruhe, Germany on July 7, 2009.  This 
     		full-day event will provide an opportunity for both new experienced Eclipse developers to learn
     		more about the Eclipse platform and how it is being used in every day applications. 
		</p>
		<p>
			The Eclipse Runtime will be featured in many aspects of the program including a joint keynote on
			Equinox, RCP and other runtime technologies by Jochen Krause from EclipseSource and Harald Mueller
			from SAP. You'll learn more about the individual Runtime projects in presentations including
			Christian Campo from compeople on the Riena Project, Benjamin Muskalla from EclipseSource on RAP
			(Rich Ajax Platform) and Heiko Seeberger from Weigle Wilczek on OSGi.  Steffen Becker from FZI will
			contribute with a talk on modelling. 
		</p>
		<p>
			The call for presentations is open until May 21st so stay tuned for more exciting additions to the
			program. 
		</p>
		<p>
			Eclipse Application Developer Day is supported by andrena objects, the Eclipse Foundation,
			EclipseSource, FZI Forschungszentrum Informatik and Silverstroke.  The sponsorship provided by 
			these organizations has made it possible to offer this event free of charge to participants.
		</p>
		  
	</div>
	</div>
</div>
	

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


