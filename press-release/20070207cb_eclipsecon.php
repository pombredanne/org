<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nominations for the Open Source Pavilion at EclipseCon 2007";
	$pageKeywords	= "Eclipsecon, Open Source Pavillion, 2007";
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
		
<p><strong>February 7th, 2007</strong> - The Eclipse Foundation is pleased to announce the addition of the Open Source Pavillion at EclipseCon 2007, 
March 5th-8th in Santa Clara, CA.  The Open Source Pavilion will showcase open source projects that support and 
complement the spirit of the Eclipse community. <a href="http://www.activegrid.com">ActiveGrid</a> and <a href="http://www.businessobjects.com/">Business Objects</a> are co-sponsoring this event at EclipseCon.
</p> 

<table width="100%">
	<tr>
		<td align="center">
			<a href="http://www.activegrid.com"><img src="http://www.eclipsecon.org/2007/image.php?gif=sponsors/silver/activegrid/activegrid"></a>
		</td>
		<td  align="center">
			<a href="http://www.businessobjects.com/"><img src="http://www.eclipsecon.org/2007/image.php?gif=sponsors/gold/businessobjects/businessobjects"></a>
		</td>
	</tr>
</table>

<p>Nominations are now being accepted for open source projects that would like to participate in the Open Source 
Pavilion.  Please email your nominations to <a HREF="MAILTO:osp.nominations@eclipse.org">osp.nominations@eclipse.org</a> and include project name, contact 
information and a brief explanation how the project has contributed to the open source community. Nominations will close February 12, 2007. Recipients will receive a full conference pass to <a href="http://www.eclipsecon.org/2007">EclipseCon 2007</a>.</p> 

<p>Recipients must be able to bring their own hardware (laptop preferred) and must be available during exhibitor hours on Tuesday March 5th from 2pm - 8pm, 
to present their project at the Open Source Pavilion.  
</p>


	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

