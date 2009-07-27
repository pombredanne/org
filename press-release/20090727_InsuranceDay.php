
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Insurance Day";
	$pageKeywords	= "Eclipse, insurance, Cologne, Germany";
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
	<div id="fullcolumn"
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
     	<p>
     		<a href="http://www.eclipse-insurance.org/en/index.html" target="blank"><img src="http://www.eclipse-insurance.org/en/img/insuranceday.png" width="600" height="77" border="0"><br>
     		<a href="http://www.eclipse-insurance.org/en/index.html" target="blank">Eclipse Insurance
     		Day</a> is being held in Cologne, Germany on September 30, 2009.  This full-day event will
     		provide an opportunity for insurance experts, IT managers and software architects to
     		exchange experiences, get an overview of the options Eclipse is offering for insurance
     		applications, and learn how to leverage Eclipse technology and the Eclipse community.
		</p>
		<p>
			Core topics of Insurance Day include Eclipse as a platform for application development in the
			insurance industry, leveraging Eclipse modeling technology for data exchange, and cost reduction
			by collaboration with the open source community.  Talks will be held in English or German,
			with the majority in German.	
		</p>
		<p>
			Eclipse Insurance Day is sponsored by BIRT Exchange, compeople, Eclipse Foundation, EclipseSource,
			in2solutions, Sopera and Weigle Wilczek. The support provided by 
			these organizations has made it possible to offer this event free of charge to participants.
		</p>
		  
	</div>
	</div>
</div>
	

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


