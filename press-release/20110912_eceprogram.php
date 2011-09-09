<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon Europe to Celebrate 10 Years of Eclipse ";
	$pageKeywords	= "elipse, automotive, autosar";
	$pageAuthor		= "Ian Skerrett";
	
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

		
		<br>
  <p><strong>Ottawa, Canada - September 7, 2011</strong> - The Eclipse community will celebrate the 10th  birthday of the Eclipse open-source project at the upcoming <a href="http://eclipsecon.org/europe2011/">EclipseCon Europe</a>
  conference, to be held November 2 - 4, 2011 in Ludwigsburg, Germany. The annual Eclipse European community conference will feature a 10th birthday party and a retrospective keynote by 
  former IBM executive John Swainson on the 2001 release of Eclipse into the open-source community. This event will kick off a series of birthday parties around the world to celebrate the 
  important milestone./p>
  

  <p>In addition to John Swainson, two other keynote speakers will be featured at EclipseCon Europe:
  <ul>
	<li>David Cuartielles, co-creator of the popular Arduino open-source hardware platform, will illustrate how Arduino is being used to create interactive objects and environments</li>
	<li>Bran Selic, a pioneer in model-driven development, will explore how model-based software engineering is being used in industry, and its impact on software professionals</li>
	</ul>	</p>

  <p>The technical program for EclipseCon Europe includes in-depth tutorials from experts and practitioners in the Eclipse community. The three-day conference features over 100 talks that 
  will educate and enlighten the attendees on what is possible when using Eclipse in model-driven development, mobile development, and enterprise application development and deployment. 
  Industry case studies will highlight how major European organizations are using Eclipse to improve their software development practices.
</p>

<p>EclipseCon Europe is supported by 23 corporate sponsors. The Premium sponsors for this year's conference include BSI, compeople, IBM, MicroDoc, OnPositive, Oracle, SAP, Sierra Wireless, 
and Xored.
</p>

<p>Registration for EclipseCon Europe is <a href="http://eclipsecon.org/europe2011/registration">now open</a>. Attendees who register by September 30, 2011 receive a $300 discount on the full conference price.</p>



	<strong>About the Eclipse Foundation</strong>
	<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible 
	frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major 
	technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the 
	Eclipse Platform.</p>
	<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse 
	and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>	</p>
  

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipsecon.org/">EclipseCon Europe</a></li>
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


