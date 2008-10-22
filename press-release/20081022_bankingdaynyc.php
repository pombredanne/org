
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Banking Day in NYC";
	$pageKeywords	= "Eclipse Foundation, banking, financial, open source";
	$pageAuthor		= "Ian Skerrett";
	
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
			The Eclipse Foundation is please to announce a new event, called <a href="http://wiki.eclipse.org/EclipseBankingDayNYC">
			Eclipse Banking Day in NYC</a>, on 
			December 9, 2008 in New York City.  This event is for architects, development managers and senior 
			developers who work for a financial institution and use Eclipse.  It is an opportunity to learn from 
			Eclipse experts and discover what leading financial institutions, such as JP Morgan, Morgan Stanley 
			and RBC Capital, are doing with Eclipse.
		</p>
		<p>A detailed agenda is <a href="http://wiki.eclipse.org/EclipseBankingDayNYC#Attendee">available</a> and additional information 
		<a href="http://ianskerrett.wordpress.com/2008/10/16/announcing-eclipse-banking-day-in-nyc/">here</a>.  There is no cost to attend but you need to work for a financial 
		institution and <a href="http://wiki.eclipse.org/EclipseBankingDayNYC#Attendee_Registration">pre-register</a>.</p>
 		<p>
 		The Eclipse Foundation would like to thank Morgan Stanley for hosting the event at 
 		their location in Manhatten and our sponsors, Actuate and Sybase, who are helping to make it possible to 
 		have it as a no-cost event.</p>
		  
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

