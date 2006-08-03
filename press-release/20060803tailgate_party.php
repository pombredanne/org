
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Tailgate Party at Eclipse World";
	$pageKeywords	= "Eclipse Foundation, Eclipse World, party, community, bulletin";
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
		<table width="100%">
			<tr>
				<td width="50%" valign="top">
     	<p>Help kick-off <a href="http://www.eclipseworld.net/">Eclipse World</a> at the Eclipse Tailgate party.   
     	Come early to chat and network with some of the leaders of the Eclipse projects.  Introduce yourself to other Eclipse users, 
     	as you get ready for the big event on Thursday and Friday. </p>
     		</td>
				<td width="40%">
					
					<a href="http://www.eclipseworld.net/"><img src="http://www.eclipseworld.net/_borders/EclipseWorld-129.gif" border=0 alt="Eclipse Tailgate Party" title="Eclipse Tailgate Party"></a>					
				</td>
			</tr>
		</table>
 
		<p>The Eclipse Foundation is pleased to host this informal get together at Eclipse World.   We hope you take 
		this opportunity to meet some Eclipse project leaders and other Eclipse users attending the conference. </p>
		   
		<p>Please join us from Wednesday, September 6, from 8-10pm at the Hyatt Regency Cambridge.   
		We will have a limited number of Eclipse shirts to give out at the party.   To reserve your t-shirt, 
		please RSVP to <a href="mailto:tailgate-party@eclipse.org">tailgate-party@eclipse.org</a>   </p>
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

