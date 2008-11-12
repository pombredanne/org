
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon 2009 Open for Registration";
	$pageKeywords	= "Eclipse Foundation, EclipseCon, open source, registration";
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
		<a href="http://www.eclipsecon.org/2009/registration">Registration</a> for EclipseCon 2009 is now open.
		<a href="http://www.eclipsecon.org">EclipseCon</a> will be held March 23-26 in Santa Clara, CA.  The "Very Early" registration
		price is availabe until December 31 and gives a 40% discount off the onsite price.  
		A single fee provides access to the entire conference. 
		</p>
		
		<p>
		Three great keynotes have been selected for EclipseCon this year.  They are:
		<ul>
			<li><i>The Social Mind as a Runtime Environment: Designing Like Groups Matter</i> - Clay Shirky and Jeff Atwood</li>
    		<li><i>Building Applications for the Cloud with Amazon Web Services</i> - Peter Vosshall and Don MacAskill</li>
    		<li><i>Darwin Among the IDEs</i> - Dr. Tim Wagner and Kevin McGuire</li>
		</ul>
		</p>
		
		<p>
		Don't miss out on this excellent opportunity - register for EclipseCon today!
		</p>
	  
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

