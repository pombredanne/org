
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Register for Eclipse Banking Day 2010";
	$pageKeywords	= "Eclipse, banking, denmark";
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
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
     	<p>
     		<a href="http://wiki.eclipse.org/Eclipse_Banking_Day_2010" target="blank">Eclipse Banking
     		Day</a> is being held in Lyngby, Denmark on June 1, 2010.  This full-day event will
     		provide an opportunity for senior technical developers, architects and managers in the finance
     		industry to learn how to better leverage Eclipse technology and the Eclipse community as part
     		of their development strategy.  Eclipse experts and leading financial institutions such as
     		Danske Bank, JP Morgan and Nordea will present what work they are doing with Eclipse.
		</p>	
		<p>
			Core topics of Banking Day include Eclipse RCP as a platform for application development in the
			banking industry, leveraging Eclipse modeling technology and Eclipse runtime projects like RAP
			and Swordfish. Mike Milinkovich, Executive Director of the Eclipse Foundation, will open Banking
			Day with a keynote presentation.
		</p>
		<p>
			Eclipse Banking Day is sponsored by BSI AG, the Eclipse Foundation, EclipseSource, IBM, Instantiations, Purple Scout,
			ReportSoft, Sopera and the RCP Company. The support provided by 
			these organizations has made it possible to offer this event free of charge to participants.
		</p>
		
	</div>
	</div>
</div>
	

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


