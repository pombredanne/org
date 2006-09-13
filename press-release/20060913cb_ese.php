<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Summit Europe";
	$pageKeywords	= "Eclipse Foundation, summit, europe, 2006";
	$pageAuthor		= "Nathan Gervais";
	
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
      	<p>Participate at the Eclipse Summit in Esslingen, October 11-12th, 2006!   The Eclipse Summit 
      	Europe, presented by the Eclipse Foundation is a unique event in Central Europe.   
      	In addition to opportunities for networking with other members of the eclipse 
      	community, the program features tracks and events for all parts of the community.</p>
      	<p>
      	<ul>
      		<li>developers and practitioners can find out the latest in 
			 the Callisto Project Updates and New and Noteworthy track series.</li>   
			<li>Foundation members and potential members can learn more about the governance model of 
			the Eclipse Foundation in the Foundation track </li>
			<li>Experienced developers can team up with other specialists in the Symposia, to learn, 
			network and discuss in an open environment,  technical strategies in these specialized areas:  
			Test-Driven Embedded Development, Modelling, Rich Client Applications and Server Side Eclipse.
			</li>
		</ul>
      	</p>
      	<p>This two day program also features events to extend your network within the Eclipse Community:
      		<ul>
      			<li>Poster Reception -  Meet the project committers in person and introduce yourself to 
      			your fellow ESE participants!</li> 
				<li>BoFs - Sign up for Birds of a Feather sessions on site!</li>
				<li>Eclipse Bistro - In addition to a fine sampling of German coffee and cakes, you'll 
				have the opportunity to join various special interest groups in a bistro setting. You'll 
				be able to continue the conversations you started at the Symposia, poster receptions or 
				at the talks or create a new bistro table topic.</li> 
				<li>Sponsor Network -   The Sponsor Network is an opportunity for you to meet with 
				ecosystem members and to acquaint yourself with their Eclipse based 
				activities.  You can send member representatives a message now on 
				<a href="http://www.eclipsecon.org/summiteurope2006/index.php?page=sponsornetwork/">the Sponsor 
				Network</a>.  Enjoy the networking!</li> 
      		</ul>
      	</p>
      	<p>Register now for the Eclipse Summit Europe on <a href="http://www.eclipsecon.org/summiteurope2006/">www.eclipsecon.org/summiteurope2006/ !</p>
      	
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

