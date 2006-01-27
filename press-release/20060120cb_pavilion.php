<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Open Source Pavilion At EclipseCon";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Type your name here";
	
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
<h2 ALIGN="CENTER"><strong>
Nominations for the <i>Open Source Pavilion</i> at EclipseCon 2006</strong></h2>


<p><strong>January 20, 2006</strong> - The Eclipse Foundation is pleased to announce the addition of the Open Source Pavillion at EclipseCon 2006, 
March 20-23 in Santa Clara, CA.  The Open Source Pavilion will showcase open source projects that support and 
complement the spirit of the Eclipse community. Business Objects is a co-sponsor of this new addition to EclipseCon.
</p> 

<p>Nominations are now being accepted for open source projects that would like to participate in the Open Source 
Pavilion.  Please email your nominations to <a HREF="MAILTO:osp.nominations@eclipse.org">osp.nominations@eclipse.org</a> and include project name, contact 
information and a brief explanation how the project has contributed to the open source community.  Although not a 
requirement for acceptance, be sure to include any relationship the nomination has to the Eclipse Ecosystem! 
Nominations will close February 3, 2006.</p> 

<p>Thanks to the generous contribution of <a href="http://www.businessobjects.com" target="_blank">Business Objects</a>, 
scholarships will be available to help offset the costs for the participants to attend EclipseCon.  Up to 10 
scholarships will be available that include a free conference pass, and up to $1,500 to cover travel, lodging and 
food costs. 
</p>

<p>Recipients must be able to bring their own hardware (laptop preferred) and must be available during exhibitor hours 
to present their project at the Open Source Pavilion.  
</p>
<br>
</div>

	
	
</div>





		
<div id="rightcolumn">
	<div class="sideitem">
		<h6>Related Links</h6>
		<ul>
			<li><a href="http://www.eclipsecon.org">EclipseCon</a></li>
		</ul>	
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
