<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Plan to Attend ALM Connect Executive Day";
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
<p>The Eclipse Foundation is pleased to announce it will be hosting an <a href="http://almexecutiveday.eventbrite.com/">ALM Connect Executive Day</a> on March 27, 2013 at the Seaport Hotel in Boston, MA. The 
objective of the ALM Connect Executive Day is to provide a platform for software delivery executives to discuss modern ALM practices in the context of business 
problems. This 1-day event is open to IT executives looking to an organizations ability to improve their software delivery.</p>

<p>The intersection of tools, process, and new business models is changing the way practioners view software delivery tools across the lifecycle. 
The ability to manufacture software is, for many organizations, a competitive advantage; thus ALM is becoming a key business process. ALM Connect Executive Day 
will bring together industry leaders in the areas of ALM and software delivery management to have open discussions on how ALM must adapt in response to a 
changing software delivery landscape. It will address questions such as:
<ul>
<li>How does ALM work in shifting from Systems of Record to Systems of Engagement?
<li>How do SaaS, Mobile, and Opensource change ALM?
<li>What does Agile mean to ALM?
<li>What does complex sourcing do to ALM?
</ul>
A <a href="http://almexecutiveday.eventbrite.com/">detailed agenda</a> of topics and speakers is now available. 
</p>



<p>ALM Connect Executive Day will take place at the Seaport World Trade Center in Boston, MA on March 27, 2013. The event is co-located with the annual <a href="http://www.eclipsecon.org/2013/">EclipseCon</a> 
and <a href="http://www.eclipsecon.org/2013/almconnect">ALM Connect</a> conferences.  There is no cost to attend this event. To register IT managers and executives may <a href="mailto:execday2013@eclipse.org&subject=Invitation%20request%20for%20ALM%20Connect%20Executive%20Day">request an invitation</a>
 to attend the Eclipse Open Source Executive Summit.</p>

<p>Thank you to HP and Tasktop for sponsoring the ALM Connect Executive Day.</p>


	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://almexecutiveday.eventbrite.com/">Agenda</a></li>
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


