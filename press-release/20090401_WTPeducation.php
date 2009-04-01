<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse WebTools Education Releases Developing Web Applications with Standards Courseware";
$pageKeywords	= "eclipse, webtools, education, courseware";
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
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<h2>Community Bulletin</h2>

		<p><i>Community Members Announce New Innovations and Products</i></p>	

		<p>The WTP project is excited to release the first of the open courseware that will be
		a part of the WTP Education curriculum: WTP-101 Developing Web Applications with Standards. This open
		courseware covers developing Web Applications with Standards using W3C standard technologies, such as
		HTML, CSS, XML, XSD and XSL.
		</p>
		
		<p>The goal of WTP Education is to enable and educate WTP end-users by providing them quality resources
		for self-learning and to increase WTP awareness and usage by obtaining, creating and coordinating
		materials for tutorials, articles, webinars and other digital mediums. WTP Education offers courses
		designed to teach anything from XML, HTML and standards based Web development, to advanced topics such
		as Java Server Faces and Java Persistence.
		</p>
		
		<p>In the spirit of open source, you can contribute to WTP Education in many ways. Please provide your
		feedback, comments and corrections using Bugzilla and select Education as the component.  Your contributions
		are important to us.  For more information visit the
		<a href="http://www.eclipse.org/webtools/community/education/web/index.php">WTP Education page</a>.
		</p>

	</div>

</div>


		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

