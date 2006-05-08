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
        We are having an Eclipse party at JavaOne.   If you are planning to attend JavaOne, this is your opportunity to meet other people in the Eclipse Community.   The party will happen, Wednesday, May 17 form 7:00-10:00pm at the Thirsty Bear Brewing Company  (www.thirstybear.com).  This is just down the street from the Moscone Center.   If you are interested in attending, please send an e-mail to <a href="mailto:thirstybear@eclipse.org">thirstybear@eclipse.org</a> to be added to the guest list.<br/><br/>
        Details:<br/><br/>
        Location: Thirsty Bear Brewing Company<br/>
		Address: 611 Howard Street   (close to the Moscone Center)<br/>
		Date and Time: Wednesday, May 17 from 7-10PM<br/>
		RSVP: <a href="mailto:thirstybear@eclipse.org">thirstybear@eclipse.org</a><br/>
        </p>
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

