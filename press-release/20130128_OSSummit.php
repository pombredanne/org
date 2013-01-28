<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Announcing New Open Source Executive Summit at EclipseCon";
	$pageKeywords	= "";
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
<br>
<p>The Eclipse Foundation is pleased to announce it will be hosting an Open Source Executive Summit on March 26, 2013 in Boston, MA.  This 1 day event is for 
IT managers and executives who are interested in open source software strategies, open innovation and collaboration. The Summit will focus on the best 
practices and strategies companies be used to drive open innovation within their own organization and industry.</p>

<p>Today, IT organizations and technology companies make extensive use of open source software.  The next step for many of these organization is to leverage open 
source communities and techniques for improving their software development processes and collaborations with external partners.   The Open Source Executive 
Summit will feature speakers from industry and open source communities who have been highly successful using open source to drive open innovation. A detailed 
agenda is available at <a href="http://eclipseopeninnovationsummit.eventbrite.com/">eclipseopeninnovationsummit.eventbrite.com</a></p>

<p>The Summit will take place at the Seaport World Trade Center in Boston, MA on March 26, 2013. The event is co-located with the annual <a href="http://www.eclipsecon.org/2013/">EclipseCon</a> 
and <a href="http://www.eclipsecon.org/2013/almconnect">ALM Connect</a> conferences.  There is no cost to attend the Summit. IT managers and executives can request an invitation to attend at 
<a href="http://eclipseopeninnovationsummit.eventbrite.com/">eclipseopeninnovationsummit.eventbrite.com</a>/</p>

Thank you to Black Duck for sponsoring the Open Source Executive Summit.


	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipseopeninnovationsummit.eventbrite.com/">Agenda</a></li>
			</ul>
		</div>
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


