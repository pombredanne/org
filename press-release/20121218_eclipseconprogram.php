<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon Program Announced; New Lower Prices";
	$pageKeywords	= "eclipsecon, 2013, program, new prices";
	$pageAuthor		= "Roxanne Joncas";
	
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
<p><strong>Ottawa, Canada – December 19, 2012</strong> – The Eclipse Foundation is pleased to announce the <a href="http://eclipsecon.org/2013/program/session-schedule" target="_blank">EclipseCon 2013 technical program</a>. Planned for March 25-28 in Boston, EclipseCon is the annual technical conference focused on the latest innovations in both the Eclipse community and the software industry.</p>

<p>EclipseCon 2013 includes 140 technical sessions and 18 tutorials over four intense days. The conference features tracks on:</p>
<ul>
	<li>Eclipse 4: Sessions on migrating to Eclipse 4, and case studies of companies building applications based on Eclipse 4</li>
	<li>Mobile and Device Development: Sessions on Android, 3D printing, machine-to-machine development, embedded C++, and more</li>
	<li>Eclipse Modeling: Sessions on EMF, CDO, and domain specific languages</li>
	<li>Web Development: Sessions on Orion (a new web-based IDE), JavaScript development, and much more<li>
	<li>EclipseRT: Sessions on Eclipse Equinox, RAP, EclipseLink and more</li>
<ul>
<p>Co-located at EclipseCon 2013 is the second annual ALM Connect conference. This new conference explores the tools and methodologies that span the entire software development lifecycle. OSGi DevCon 2013 is also co-locating with EclipseCon and ALM Connect.</p>
<p><b>New Prices for EclipseCon</b></p>
<p>In order to bring EclipseCon to a wider community of Eclipse and open-source enthusiast, the conference registration price has been significantly reduced. Attendees who register by December 31, 2012 pay only $800. A new non-corporate price of $500 is available to individuals who pay their own registration fees without corporate reimbursement. Students may attend free of charge in exchange for volunteer work at the conference.</p>
<p>More details about registration prices and volunteering are available on the <a href="http://eclipsecon.org/2013/registration" target="_blank">EclipseCon 2013 Registration page.</a></p>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipsecon.org/2013/program/session-schedule" target="_blank">Session Schedule</a></li>
				<li><a href="http://eclipsecon.org/2013/registration" target="_blank">Registration page</a></li>
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

