
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Win an iPod - Eclipse Plugin Central (EPIC) Survey Now Live";
	$pageKeywords	= "Eclipse Foundation, EPIC, community, bulletin";
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
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		<table width="100%">
			<tr>
				<td width="50%" valign="top">
     	<p>Provide feedback on Eclipse Plugin Central (EPIC) and have a chance to win a 30 gig iPod or one of 
     	four Amazon $100 gift certificates!  We need your your feedback to help guide the ongoing
     	enhancement of EPIC.  Complete the online survey between now and September 20th, 2006 and you will 
     	be entered into the draw.  The survey will only take a few minutes of your time.
     		</td>
				<td width="40%">
					
					<a href="http://www.eclipseplugincentral.com/"><img src="http://eclipseplugincentral.com/themes/wvMSN/images/new_logo_1.jpg" border=0 alt="EPIC" title="EPIC"></a>					
				</td>
			</tr>
		</table>
      	<p>
     	<a href="http://www.surveymonkey.com/s.asp?u=938742505376">Click here to take the survey.</a>
    	
     	  </p>
		
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

