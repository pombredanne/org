<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse RCP Training Registration";
	$pageKeywords	= "Eclipse RCP Training registration deadline";
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
		
		<p>
			<strong>Early Discount for RCP Training Ends Friday</strong>
		</p>
		<p>
			The 10% early bird discount for Eclipse RCP training ends this Friday, August 31, 2007.  The Eclipse Foundation, in
			partnership with Eclipse training companies, is holding training sessions that will take place in Amsterdam, Berlin,
			Boston, Braunschweig, Brussels, Chicago, Copenhagen, Denver, Luxembourg, Paris, San Francisco, San Jose, Stockholm,
			Stuttgart and Portland.  The sessions in each city last 4 days and have start dates ranging from September 17 to
			October 2.  
		</p>
		<p>  
			The RCP course will help you understand how to implement your own application based on Eclipse RCP. It will explain the
			core frameworks in Eclipse, the plug-in architecture, extension points, and scenarios for building on the common
			configurations of Eclipse technology.  Participants will take home lecture and lab books, and exercise code.
		</p>
		<p> 
			For more information and to register, go to <a href="https://www.regonline.com/CalendarNET/EventCalendar.aspx?CustomerId=240004&EventId=143622&view=Month"
			target="blank">www.regonline.com/eclipseRCP</a>.
		</p>
 
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
