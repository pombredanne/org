
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Register for Eclipse Day in Rome";
	$pageKeywords	= "eclipse, rome, italy";
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

		<a href="http://www.spagoworld.org/xwiki/bin/view/openevents/" target="blank">
		<img src="http://www.spagoworld.org/xwiki/bin/download/openevents/WebHome/eclipse%2Dday%2Dbanner.png" border=0></a>
		<p>
     		<a href="http://www.spagoworld.org/xwiki/bin/view/openevents/" target="blank">Eclipse
     		Day in Rome</a> is being held in on October 5, 2010. It is the first event taking place in Italy
     		focusing on the enterprise adoption of Eclipse-based solutions.  
		</p>	
		<p>
			Core topics of Eclipse Day in Rome are service-oriented architectures, integration and
			interoperability domains, offering specific use cases surrounding the Eclipse ecosystem. Companies
			will share use cases of open source software and will address emerging issues on its adoption
			supporting the complexity of the new IT architectures.  
		</p>
		
	</div>
	</div>
</div>
	

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


