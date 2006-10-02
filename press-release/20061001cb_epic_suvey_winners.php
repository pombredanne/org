<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EPIC Feedback Survey Winners Announced";
	$pageKeywords	= "Eclipse Foundation, EPIC, Eclipse Plugin Central, contest, winner, 2006";
	$pageAuthor		= "Donald Smith";
	
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
      	<p>The Eclipse Foundation is pleased to announce the winners drawn from those who
      	completed a feedback Survey for <a href="http://eclipseplugincentralc.om">
      	Eclipse Plugin Central.</a>
      	</p>
      	<p>
      	The grand prize winner of a 30-Gig iPod is Noud deBrouwer from the Netherlands. 
      	Noud is a big fan of 
      	<a href="http://netbsd.org">BSD</a>
      	and Eclipse and says instead of getting the iPod he
      	is instead considering using his gift certificate to buy some new hardware for
      	a dedicated BSD Eclipse machine.
      	</p>
      	<p>
      	Winners of the $100 USD gift certificate to Amazon.com were:
      	<ul>
      	
      		<li>Carl Gustaf Hjelt Liebe is a consultant for Ementor in Denmark and has
      		has been using Eclipse for over three years.</li>   
			<li>Jonathan Moore is based in the UK and works for a mid sized software company focusing 
			on local government applications.</li>
			<li>Jaroslav Muller works for Eclipse member 
			<a href="http://www.tietoenator.com/" TietoEnator as a J2EE Developer.  He says his
			favorite plugins are SpringIDE, Subclipse and MyEclipse.
			</li>
		</ul>
      	</p>
      	<p>
      	Congratulations to all the winners!
      	</p>
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

