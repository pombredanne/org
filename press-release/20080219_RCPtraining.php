<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse RCP Training Series";
	$pageKeywords	= "eclipse, RCP, training";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<style>
		.paddedlist li {	padding-bottom:7px;	}
	</style>
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
	
		<p>
			Dut to the success of the training program Eclipse held last fall, the Foundation is
			pleased to announce that there will be a new series of <a href="http://www.regonline.com/CalendarNET/EventCalendar.aspx?CustomerId=240004&EventId=188879&view=Month">
			RCP training classes</a> between May 19 and June 13.  In partnership with member companies Ancit Consulting, Anyware
			Technologies, AvantSoft, BREDEX, Industrial TSI, Innoopract, The RCP Company and Weigle Wilczek, Eclipse will be offering the
			RCP training series to provide in-depth education for developers building Eclipse RCP-based applications.  Classes will be offered in
			Antwerp, Bangalore, Boston, Braunschweig, Chicago, Copenhagen, Karlsruhe, Munich, Paris, Portland, San Jose, Sofia Antipolis,
			Stockholm, Stuttgart, Vienna and Washington D.C.
		</p>
		<p>	
			Each training class will run for four days and will feature instructor-led classroom teaching and hands-on labs and tutorials. 					
			The class will help developers understand the core RCP concepts and Eclipse plug-in architecture, and provide in-depth
			insight into SWT, JFace and other RCP components.  There will also be a review of the new &amp; noteworthy features of
			Ganymede, the Eclipse simultaneous release occurring in June.
		</p>
		<p>
			For more information, including locations, dates and registration, visit the <a href="http://www.regonline.com/CalendarNET/EventCalendar.aspx?CustomerId=240004&EventId=188879&view=Month">
			RCP Training Classes site</a>.  Students that register before <b>March 31, 2008</b> will receive a
			10% early bird discount on the registration price.
		</p>
	
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
