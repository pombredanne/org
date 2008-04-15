<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Party at JavaOne 2008";
	$pageKeywords	= "eclipse, party, javaone, thirsty, beer";
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
			The Eclipse Foundation is hosting a party for the Eclipse community at JavaOne. If you will be attending the conference,
			this is your opportunity to connect with other Eclipse fans and to have some fun. The party will happen Wednesday, May 7
			from 7:00 pm-10:00 pm at the <a href="http://www.thirstybear.com/" target="blank">ThirstyBear Restaurant & Brewery</a>.
			The ThirstyBear is just down the street from the Moscone Center, to the east. If you are interested in attending, please send an
			e-mail to <a href="mailto:javaoneparty@eclipse.org">JavaOneParty@eclipse.org</a> to be added to the guest list. We look
			forward to seeing you there!
		</p>
		
		<p>
			<b>Details</b><br>
			Location: ThirstyBear Restaurant & Brewery<br>
			Address:  661 Howard St., San Francisco (<a href="http://maps.google.ca/maps/ms?hl=en&gl=ca&ie=UTF8&oe=UTF8&msa=0&msid=102535397083652435677.0000011200ac112cfedc1"
			target="blank">see map</a>)<br>
			Date and Time: Wednesday, May 7, from 7:00 pm - 10:00 pm<br>
			RSVP: <a href="mailto:javaoneparty@eclipse.org">JavaOneParty@eclipse.org</a>
		</p>
		<br><br>
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
