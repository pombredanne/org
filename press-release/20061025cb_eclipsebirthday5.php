<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Celebrate Eclipse's 5th Birthday";
	$pageKeywords	= "Eclipse, birthday, November, 2006";
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
		<img src="/community/eclipsebirthday5/logo5th.jpg" border=0 align="right">
		<p>Eclipse is turning 5! It was November 7, 2001 when IBM first released Eclipse as an open source 
		project. To celebrate, a number of activities are being organized for the Eclipse community. </p>
		<p><strong>Birthday Card</strong></p>
		<p>An electronic <a href="http://birthday.eclipse.org/images/map.php?individual">birthday card</a> has been setup to allow individuals in the the Eclipse community to show 
		their support for Eclipse.  Everyone in the Eclipse community is encouraged to <a href="http://birthday.eclipse.org/info.php?individual">sign the Eclipse birthday card</a>.  
		Individuals signing the card will qualify for a random draw to win an Eclipse sweater.
		</p> 
		<p><strong>Product Hall of Fame</strong></p>		
		<p>
		Over the last five years, the Eclipse community has built hundreds, if not thousands, of Eclipse based products. 
		Therefore, an <a href="http://birthday.eclipse.org/images/map.php?builder">Eclipse Product Wall of Fame</a> has been setup to showcase these Eclipse based products.  Organizations and individuals 
		that have created Eclipse based products and plug-ins are invited to <a href="http://birthday.eclipse.org/info.php?builder">add their solution to the Product Wall of Fame</a>.
		</p>
		<p><strong>Eclipse Birthday Parties</strong></p>
      	  There are over 25 local Eclipse birthday parties organized in cities around the world to celebrate this event.  Locations, dates, and 
      	  RSVP links can be found <a href="http://www.eclipse.org/community/eclipsebirthday5/birthdayparties.php">here.</a></p>
		 
		<p>Please <a href="http://www.eclipse.org/community/eclipsebirthday5/birthdayparties.php">RSVP</a> if you are planning to attend a party. The parties are informal gatherings of Eclipse members, committers, users and general enthusiasts, so 
		please invite your colleagues and customers to join you.</p>
		<br><br>
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

