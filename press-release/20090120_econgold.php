<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Announces Gold Sponsors for EclipseCon 2009";
	$pageKeywords	= "eclipse, community, awards, nominations, EclipseCon, 2009";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<style>
		.paddedlist li {	padding-bottom:7px;	}
	</style>
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<p><b>Ottawa, Canada - January 20, 2009</b> - The Eclipse Foundation today announced the Gold Sponsors for EclipseCon 2009, which will take place March 23-26 in Santa Clara, Calif.  Actuate, Blu Age, IBM, Red Hat, Sopera and Wind River have all agreed to act as the premier Gold Sponsors for the annual Eclipse community conference.</p>
	
		<p>"The support and leadership of these companies make EclipseCon a world-class conference," said Mike Milinkovich.  "These companies also demonstrate the diversity of the Eclipse community by offering solutions in a wide variety of markets, including business intelligence, modeling, enterprise Java development, SOA runtimes and embedded development."</p>
		
		<p>In addition, EclipseCon 2009 will feature unique keynotes, each delivered by two speakers with complementary positions on topics relevant to the Eclipse community:
		<ul class="paddedlist">
			<li>"The Social Mind as a Runtime Environment: Designing Like Groups Matter," presented by Clay Shirky, writer and expert on the social and economic effects of Internet technologies and director of the Interactive Telecommunications Program at NYU, and Jeff Atwood, CEO of stackoverflow.com </li>
			<li>"Building Applications for the Cloud with Amazon Web Services," delivered by Peter Vosshall, VP and distinguished engineer at Amazon.com focusing on cloud computing, and Don MacAskill, co-founder and CEO of AWS infrastructure company SmugMug.com </li>
			<li>"Darwin Among the IDEs," offered by Tim Wagner, principal development manager for the Microsoft Visual Studio Platform, and Kevin McGuire, IBM's UI design usability lead for the Eclipse UI </li>
		</ul>
		<p>For the complete program, go to <a href="http://www.eclipsecon.org/2009/">www.eclipsecon.org/2009/.</a>   
		</p>
		<p>
		
		<p><b>Register Today</b><br/>
		Registration for EclipseCon 2009 is now open. An early bird discount is available until February 14. 
		Complimentary registration is available to press and analysts. To register, visit <a href="http://www.eclipsecon.org/2009/registration">www.eclipsecon.org/2009/registration</a>.   Sponsorship opportunities are also available for EclipseCon. More information is available at <a href="http://www.eclipsecon.org/2009/sponsorship">www.eclipsecon.org/2009/sponsorship</a>.</p>
		
		<p><b>About the Eclipse Foundation</b><br />
		Information about Eclipse can be found at <a href="http://www.eclipse.org/">www.eclipse.org</a></p>
		<br />
		<br />**All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		
	</div>
</div>
<div id="rightcolumn">
	<div class="sideitem">
	<h6>Related Links</h6>
	<ul>
		<li><a href="http://www.eclipsecon.org/2009/registration">EclipseCon Registration</a></li>
		<li><a href="http://www.eclipsecon.org/2009/sponsorship">EclipseCon Sponsorship</a></li>
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
