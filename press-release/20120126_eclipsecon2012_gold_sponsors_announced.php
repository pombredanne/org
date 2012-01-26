<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon 2012 Gold Sponsors Announced";
	$pageKeywords	=  "eclipse, foundation, eclipsecon, gold sponsors, eclipse conference, agile alm";
	$pageAuthor		= "Christopher Guindon";
	
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

	<p><strong>Ottawa, Canada – January, 25, 2012</strong> – The Eclipse Foundation is pleased to announce the Gold sponsors for the upcoming EclipseCon 2012 conference in Reston, Virginia on March 26-29, 2012.   Actuate, IBM, Oracle, Red Hat and SAP have all agreed to be the premier sponsors of the annual Eclipse community event.</p>

<p>“We are thrilled to have Actuate, IBM, Oracle, Red Hat and SAP be Gold sponsors for EclipseCon,” explains Mike Milinkovich, Executive Director of the Eclipse Foundation.  “The companies are leaders in the Eclipse community and we welcome their ongoing support.”</p>

<p>EclipseCon 2012 is a 4 day technical conference featuring 120 session and 16 tutorials.  This year the conference features tracks on Domain Specific Languages, Modeling, EclipseRT, Eclipse 4, Mobile and Embedded Development.   A new co-located conference, Agile ALM Connect, has been added to the program which will focus on the tools and practices across the entire software development lifecycle.</p>   

<p>Registration for EclipseCon and Agile ALM Connect is now open.   People that register by February 14, 2012 receive an early registration discount.  Sponsorship opportunities are also still available for companies to spotlight their products to the Eclipse and Agile ALM community. </p>


<p><strong>About the Eclipse Foundation</strong><br/>
Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>

<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org/" target="_blank">www.eclipse.org</a>.</p>

<p>All company/product names and service marks may be trademarks or registered trademarks of their respective companies.</p>
		

  

	</div>


	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipsecon.org/2012" target="_blank">eclipsecon.org/2012</a></li>
			</ul>
		</div>
	</div>	

</div>
 

EOHTML;
	$html = mb_convert_encoding($html, "HTML-ENTITIES", "ISO-8859-1");
	$pageTitle = mb_convert_encoding($pageTitle, "HTML-ENTITIES", "ISO-8859-1");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>



