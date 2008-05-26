<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Summit Europe Call for Papers Now Open";
$pageKeywords	= "eclipse summit europe, call for papers, 2008";
$pageAuthor		= "Ian Skerrett";

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
		<h2>Press Release</h2>

		<center>
		<h1>$pageTitle</h1>

		<p><strong>Ludwigsburg, Germany – May 26, 2008</strong> - 
		The Eclipse Foundation is pleased to announce the 3rd annual Eclipse Summit Europe on November 19-20, 2008, in Ludwigsburg, Germany. The Eclipse Summit is the Foundation’s premier event designed to create opportunities for the European Eclipse community to explore, share, and collaborate on the latest ideas and information about Eclipse and its members. </p>
		
		<p>The conference will be preceeded by one day of symposia followed by two days of technical and business track sessions, selected keynotes, demos and networking gatherings.  The conference is a stimulating and dynamic event for Eclipse committers, contributors, adopters, add-in providers and service providers to learn, share expertise and discover new opportunities and solutions in the Eclipse ecosystem.</p> 

		<p>The conference call for papers is now open and will close September 1, 2008.  Individuals are encouraged to submit proposals that focus on 1 of 4 categories: 1) Consumer Stories; 2) Technical Demos; 3) Ganymede updates; or 4) New & Noteworthy.  Guidelines for submissions are available at <a href="http.//eclipsesummit.org/summiteurope2008/submissions">http.//eclipsesummit.org/summiteurope2008/submissions</a>.</p>
 
		<p>Eclipse Summit Europe sponsorship packages are also now available at <a href="http://eclipsesummit.org/summiteurope2008/sponsorship">http://eclipsesummit.org/summiteurope2008/sponsorship</a>. Attendee registration will be open later in the summer.</p>
				
		<p><b>About the Eclipse Foundation</b><br>
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application
		frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development
		lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and
		performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major
		technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support
		the Eclipse Platform.</p>
		
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
		Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org" target="blank">www.eclipse.org</a>.</p>

		<p><center>###</center><p>
		
		<p>All company/product names and service marks may be trademarks or registered trademarks of their respective companies.</p>
				
		<p><b>Press Contact</b><br/>
		Ian Skerrett<br/>
		Director of Marketing<br/>
		Eclipse Foundation<br/>
		<a href="mailto:ian.skerrett@eclipse.org">ian.skerrett@eclipse.org</a><br>
		+1 -613-224-9461 (ext. 227)<br>
		<br>

	</div>

</div>


		

EOHTML;

	$html = mb_convert_encoding($html, "HTML-ENTITIES", "auto");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

