<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Party at JavaOne";
	$pageKeywords	= "Eclipse Foundation, java one, party, community, bulletin";
	$pageAuthor		= "Nathan Gervais";
	
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
        The Eclipse Foundation is hosting a party for the Eclipse community at JavaOne. If you will be attending the conference, this is your opportunity to connect with other Eclipse fans and to have some fun. The party will happen Wednesday, May 9 from 7:00pm-10:00pm at Jillian’s (<a href="http://www.jilliansbilliards.com">www.jilliansbilliards.com</a>). This is just around the corner from the Moscone Center in the southwest corner of the Metreon.  If you are interested in attending, please send an e-mail to <a href="mailto:JavaOneParty@eclipse.org">JavaOneParty@eclipse.org</a> to be added to the guest list.  We look forward to seeing you there!<br/><br/>
        Details:<br/><br/>
        Location: Jillian’s @ Metreon<br/>
		Address: 101 Fourth Street, Suite 170 (<a href="http://maps.google.ca/maps/ms?ie=UTF8&hl=en&msa=0&msid=102535397083652435677.0000011200ac112cfedc1">see map</a>)<br/>
		Date and Time: Wednesday May 9, from 7:00 pm - 10:00 PM<br/>
		RSVP: <a href="mailto:JavaOneParty@eclipse.org ">JavaOneParty@eclipse.org </a><br/>
        </p>
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

