
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Attend Eclipse Government Day";
	$pageKeywords	= "Eclipse, Government, Enterprise";
	$pageAuthor		= "Donald Smith";
	
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
     		Along with sponsors including Actuate, BandXI, EclipseSource, Oracle and Open Source for America,
     		the Eclipse Foundation is pleased to announce the 
     		<a href="http://wiki.eclipse.org/Eclipse_Government_Day">Eclipse Government Day</a>.	    		
		</p>
		<p>
			<a href="http://wiki.eclipse.org/Eclipse_Government_Day">Eclipse in Government Day</a>,
			October 12, 2010 in Reston, VA, is a day-long event that shows 
			insights into how Eclipse 
			technology and Open Source is being used in various governmental agencies and related 
			industries. This day is targeted primarily for technical managers, architects and 
			directors who oversee and use Eclipse technology on a daily basis in Government. 
		</p>
		<p>	
		This event is limited to a number of attendees -- please RSVP ASAP following the instructions
		on each event page.	We hope you can join us!
		</p>
		  
	</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


