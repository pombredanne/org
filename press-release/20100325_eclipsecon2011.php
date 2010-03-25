<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Announcing EclipseCon 2011, March 21-24 in Santa Clara";
	$pageKeywords	= "eclipse, eclipsecon, conference, 2010, Santa Clara";
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
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<h2>Community Bulletin</h2>
	
		<p>
			The Eclipse Foundation is pleased to announce <a href="http://www.eclipsecon.org/2011/">EclipseCon
			2011</a>, to take place March 21-24 in Santa Clara, California.  The conference program will be
			chaired by Chris Aniszczyk of Red Hat.
		</p>
		<p>
			EclipseCon is the conference for anyone involved in Eclipse. As an Eclipse user, EclipseCon is where
			you will learn about the latest Eclipse products as well as picking up those valuable how-to tips
			from the experts and user groups. As an Eclipse developer, EclipseCon is where you collaborate with
			your colleages and do whiteboard planning for the next generation of APIs and features. As an
			Eclipse company, EclipseCon is the place to talk directly to your users and learn how to make the
			most compelling tools on the planet.	
		</p>
		<p>
			Eclipse Foundation members and alumni will receive updates later this year when the call for
			participation, conference format and program are announced.  Anyone else wishing to sign up for
			conference updates and reminders can do so by visiting the <a href="https://dev.eclipse.org/mailman/listinfo/eclipsecon2011announce">
			EclipseCon 2011 mailing list</a>.  To sign up for
			sponsorship information, see the <a href="https://dev.eclipse.org/mailman/listinfo/eclipsecon2011sponsor">
			EclipseCon 2011 sponsor mailing list</a>.
		</p>

		<br><br>
	</div>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->

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
