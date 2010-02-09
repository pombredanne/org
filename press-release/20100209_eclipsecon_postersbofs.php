<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Submit a Poster or BoF for EclipseCon";
	$pageKeywords	= "eclipse, cfp, poster, bof, unconference";
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
		
     	<p>	
			The call for posters and Birds of a Feather (BoF) sessions at EclipseCon is open. It's not
			too late to be a part of the program!
		</p>
		
		<p>
			Posters will be presented during the Wednesday evening reception.  It's a great way to present
		   	your topic informally while people browse the poster displays and enjoy a few beverages.
		</p>

		<p>
			Birds of a Feather sessions are informal, one-hour gatherings of people who want to talk about
			a particular topic. BOFs are scheduled for the evenings, after the receptions, and serve as
			a great way to continue the conversations that have been started that day. They are open to
			everyone.
     	</p>
     	
     	<p>
     		New to EclipseCon is the Unconference. Monday through Wednesday, you can present an Eclipse-related
     		talk by signing up each evening at 5:30pm in the registration area. It's first-come,
     		first-served, and presentations must be short, to a maximum of 25 minutes.
		</p>

		<p>
			The Program Committee will send invitations to prospective session leaders in early March
			2010. The final symposium agenda and registration details will be available on March 17,
			2010 and posted at: <a href="http://www.omg.org/news/meetings/tc/mn/special-events/Eclipse.htm" target="blank">
			http://www.omg.org/news/meetings/tc/mn/special-events/Eclipse.htm</a>.
		</p>
		
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
