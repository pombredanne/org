<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "ESE Registration Opens";
	$pageKeywords	= "Eclipse Summit Europe, registration open";
	$pageAuthor		= "Lynn Gayowski";
	
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
		
		<p>
			<b>Eclipse Summit Europe<br/>
			October 9-11, 2007<br/>
			Ludwigsburg, Germany<br/>
			<a href="http://www.eclipsecon.org/summiteurope2007/">www.eclipsecon.org/summiteurope2007</a></b><br>
		</p>

		<p> 
			The Eclipse Foundation is hosting its Eclipse Summit Europe conference for the European community again this year.  The
			second annual Eclipse Summit Europe (ESE) takes place on October 9-11, 2007 at Forum am Schlosspark in Ludwigsburg,
			which is in the Stuttgart region of Germany.  The goal of the conference is to give the European Eclipse community a
			platform to collaborate, to promote cooperation among Eclipse projects, and to provide information to attendees about
			the Eclipse Foundation and its members.  The Eclipse Foundation expects ESE to have a mixture of lectures covering Eclipse
			projects, consumer stories, and product demonstrations.  The symposia is also an exciting event for the Eclipse ecosystem.   
		</p>
		
		<p>
 			ESE 2007 will feature keynotes that include Dr. Erich Gamma of IBM and Dr. J&ouml;rg Sievert of SAP Ventures. Dr. Gamma is on
 			the Eclipse Project PMC and is one of the lead architects in IBM&#146;s new Jazz project. Dr. Sievert is responsible for the
 			Partner and Investment program for SAP Ventures in Europe and Israel.
		</p>
 
		<p>
			<a href="http://www.eclipsecon.org/summiteurope2007/index.php?page=registration/">Early bird registration</a> for the
			conference is now open.  The number of participants is limited to 400 people this year. 
		</p>
		<p>		
			During the three-day conference, participants will have the opportunity to attend lectures, network with numerous project
			leads and committers and to gather news and product information from sponsors.  The ESE 2007 program includes one day of
			symposia, which will take place on the Tuesday before the main conference, as well as two days of technical and business
			related sessions, keynotes, and project demonstrations.  The main reception for attendees occurs on the Wednesday evening.  
		</p>
		<p>
			Further information on the conference, registration and sponsorship can be found on the <a href="www.eclipsecon.org/summiteurope2007">ESE
			web site</a>.	
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
