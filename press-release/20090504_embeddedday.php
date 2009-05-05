
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
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
		<a href=""http://wiki.eclipse.org/EclipseEmbeddedDayStgt">
		<img src="http://wiki.eclipse.org/images/6/68/Eday-banner.jpg" alt="Eclipse Embedded Day" border="0">
		</a>
		
     	<p>
     		MicroDoc and the Eclipse Foundation are pleased to announce
			<a href="http://wiki.eclipse.org/EclipseEmbeddedDayStgt" target="blank">Eclipse Embedded Day
			in Stuttgart</a>,
     		which takes place June 25, 2009. 
		</p>
		<p>
			Eclipse Embedded Day is a day-long event for senior technical developers, architects and technical
			managers in the automotive, telematics, mobile, consumer electronic and medical industry to learn
			how to better leverage Eclipse technology and the Eclipse community as part of their development
			strategy. In addition, the event features sessions on Eclipse projects and case studies related to
			the embedded space.
		</p>
		<p>
			Attendees will have the chance to hear speakers from leading companies in the embedded space and
			experts from the Eclipse community. There is no cost to attend but
			 <a href="http://wiki.eclipse.org/EclipseEmbeddedDayStgt#Attendee_Registration" target="blank">pre-registration</a>
			is required. 
		</p>
		<p>
			Eclipse Embedded Day in Stuttgart would like to thank our sponsors Band XI International, Eclipse
			Foundation, itemis and MicroDoc who have made it possible to offer a no-cost event.
		</p>
		  
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


