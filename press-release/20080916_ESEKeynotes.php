<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Summit Europe Keynotes Announced";
$pageKeywords	= "eclipse summit europe, keynotes, 2008";
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
		<h2>Community Bulletin</h2>

		<center>
		<h1>$pageTitle</h1>
		<h4>Registration is now open</h4>
		</center>
		
		<p><strong>Ottawa, Canada – September 16, 2008</strong> - 
		The Eclipse Foundation is pleased to announce the keynote speakers for the Eclipse Summit Europe conference, to be held November 19-20 in Ludwigsburg, Germany. The two keynote speakers will be:
			<ul class="paddedlist">
				<li>David Wood, Executive VP Research at Symbian. Mr. Wood’s talk ‘Why Should the Mobile World Go Open Source?’ will be his reflections on the possible upsides and downsides when open source software systems are applied in the fast-moving helter-skelter world of mobile phones.
				<li>Dave Thomas, Founder and Chairman of Bedarra Research Labs. Mr. Thomas’s talk ‘Next Generation Embedded Software – The Imperative Is Agility!’ will speak to new ideas in embedded product development.</li>
			</ul>
		</p>
		<p>Eclipse Summit Europe is the annual conference for the European Eclipse community.   The conference features two days of technical and business track sessions, demos, and social gatherings, preceded by one day of symposia on November 18.</p>
 
		<p>Registration is now open for the conference. Employees of Eclipse member companies, Eclipse committers, and conference alumni will receive a 15% discount on the full registration price.  More information about the conference and registration can be found at <a href="http://www.eclipsesummit.org">http://www.eclipsesummit.org</a>.</p>
				
		<p><b>About the Eclipse Foundation</b><br>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
		Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org" target="blank">www.eclipse.org</a>.</p>

	</div>

</div>


		

EOHTML;

	$html = @mb_convert_encoding($html, "HTML-ENTITIES", "auto");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

