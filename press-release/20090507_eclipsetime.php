
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Time";
	$pageKeywords	= "Eclipse, Eclipse Time, Toulouse, France, Anyware";
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
			<a href="http://www.eclipsetime.org" target="blank">
			<img align="right" src="http://www.eclipsetime.org/skins/Anyware/resources/img/logo.gif" alt="Eclipse Time" border="0"></a>
     		Anyware Technologies and the Eclipse Foundation are pleased to announce
     		<a href="http://www.eclipsetime.org" target="blank">Eclipse Time</a>, a 2-day event
     		taking place in Toulouse, France, June 23-24, 2009. 
     	</p>
		<p>
			Discover the Eclipse open source platform with business cases presented by experts.	
			Eclipse Time features well-known speakers from the community including Eclipse
			Foundation members, software editors and companies that use Eclipse-based solutions.
			The event consists of a conference day followed by a full day of workshops.
		</p>
		<p>
			<a href="http://www.eclipsetime.org/en/eclipse_time_2009/day_1_conference/register.html" target="blank">Registration</a>
			for the conference day is free and the workshop day is only 600 &euro; plus VAT, which includes
			attendance at 2 workshops.
		</p>
		<p>
			Eclipse Time would like to thank gold sponsor Airbus, as well as the event sponsors: Eclipse Foundation,
			Geensys, IBM, ILOG, Ingres, Instantiations, Obeo, Tests ePerformance and Anyware Technologies.
		</p>
		  
	</div>
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


