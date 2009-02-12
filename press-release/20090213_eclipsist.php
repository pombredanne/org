
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipsIST - Supporting the Turkish Eclipse Community";
	$pageKeywords	= "Eclipse, EclipsIST, Turkey, eteration";
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
			The Eclipse Foundation and Eclipse member eteration are pleased to announce
			<a href="http://www.eclipsist.org/web/eclipsist2009/home">EclipsIST</a>, the third annual
			Eclipse Technical and User Summit in Istanbul, Turkey.  EclipsIST takes place April 28-29, 2009. 
			This event is for Eclipse users, adopters, developers and businesses.
			It is an opportunity to participate in high quality technical tutorials and sessions delivered
			by Eclipse experts.
		</p>
		<p>
			The <a href="http://www.eclipsist.org/web/eclipsist2009/program">conference program</a> is now available.
			Attendance fees are waived but you must register in advance to attend.  Registration provides access to all presentations,
			public receptions, lunches and the exhibit hall.
		</p>
 		<p>
	 		EclipsIST would like to thank our sponsors ebay, Eclipse Foundation, eclipse Magazin, eteration,
	 		gitti gidiyo and Oracle who have made it possible to offer a no-cost event.
 		</p>
		  
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


