
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Help us make EPIC a better place and Win an iPod";
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
     	<p>We would like to get your feedback on Eclipse Plugin Central (EPIC).  
     	EPIC is a portal for all things in the Eclipse ecosystem and we are 
     	looking to make it better.  Please take the time to comple the online 
     	survey between now and September 20, 2006.   For everyone that completes 
     	the survey we will enter you into a draw for a free iPod or one of four 
     	Amazon $100 gift certificates.
     		</td>
				<td width="40%">
					
					<a href="http://www.surveymonkey.com/s.asp?u=938742505376"><img src="http://eclipseplugincentral.com/themes/wvMSN/images/new_logo_1.jpg" border=0 alt="EPIC" title="EPIC"></a>					
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

