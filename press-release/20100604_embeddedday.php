
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Embedded Day in Stuttgart";
	$pageKeywords	= "Eclipse, embedded, Stuttgart, Germany";
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
		
		<a href="http://wiki.eclipse.org/EclipseEmbeddedDayStgt2010">
		<img src="http://wiki.eclipse.org/images/a/a1/Eday2010.JPG" alt="Eclipse Embedded Day" border="0">
		</a>
		
     	<p>
     		MicroDoc and the Eclipse Foundation are pleased to announce
			<a href="http://wiki.eclipse.org/EclipseEmbeddedDayStgt2010" target="blank">Eclipse Embedded Day
			in Stuttgart</a>,
     		which takes place June 24, 2010. 
		</p>
		<p>
			Eclipse Embedded Day is a day-long event for senior technical developers, architects and technical
			managers in the automotive, consumer electronic, medical, mobile and telematics industries to learn
			how to better leverage Eclipse technology and the Eclipse community as part of their development
			strategy. 
		</p>
		<p>
			The event features sessions on Eclipse projects and case studies related to the embedded space.
			Topics include the new Eclipse Sphinx project, testing embedded GUIs, scaling configuration
			management and model-driven development. Attendees will have the chance to hear speakers from
			leading companies in the embedded space and experts from the Eclipse community.  
		</p>
		<p>	
			Eclipse Embedded Day is co-located with Open Forum 2010: International SPICE Days and Automotive
			Safety & Security.  Last year Eclipse Embedded Day had over 100 registrations so
			<a href="http://embeddedday2010.eventbrite.com/" target="blank">register soon</a>
			for this free event as space is limited. 
		</p>
		<p>
			Eclipse Embedded Day in Stuttgart would like to thank the event's sponsors: the Eclipse Foundation, EclipseSource,
			Microdoc, the Open Source Business Foundation and Open Source Region Stuttgart/Wirtschaftsf&ouml;rderung
			Region Suttgart.
		</p>
		  
	</div>
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


