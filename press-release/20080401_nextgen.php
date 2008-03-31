<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Announces Next Generation Platform, e4, Is Now Available";
$pageKeywords	= "eclipse, e4";
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
		.paddedlist li {padding-bottom:3px;	}
	</style>
<div id="maincontent">
	<div id="midcolumn">
		<h2>Press Release</h2>

		<center>
		<h1>$pageTitle</h1>
		</center>
		
		<p><strong>SANTA CLARA, Calif., April 1, 2008 - </strong>
		 The Eclipse Foundation is pleased to announce the immediate availability of the next major release of the Eclipse platform, code named e4.  e4, which is supported on all known hardware and operating systems, redefines web-based applications and application development. It provides the ultimate in flexibility, extensibility and customization for embedded, mobile, desktop, server and cloud development </p>
		
		<p>e4 represents a significant milestone in the history of the Eclipse community.  It accomplished a number of important aspects that will propel Eclipse into the next dimension of open source communities, specifically:</p>
		
		<p>
			<ul class="paddedlist" style="padding-left:10px;">
				<li>e4 was a truly diverse community effort that involved over 1400 individuals.</li>
				<li>Proving the power of the open source development model, e4 was developed in a record time.</li>
				<li>The efficiency of the e4 code has reduced the Eclipse download size to be under 245kb.</li>
				<li>No documentation is required for e4, due to the user friendly approach to api development at Eclipse.</li>
				<li>E4 will be released under all 57 OSI approved licenses, demonstrating how OSS license interoperability can work.</li>
				<li>Full backward compatibility; all plug-ins ever developed for any version of Eclipse, VisualAge for Java, Facebook, or Hesware's Super Zaxxon run without modification.</li>
				<li>Next-generation provisioning, code named "p2", anticipates your needs and downloads extended functionality mere minutes before you actually need it.</li>
			</ul>
		</p>
		
		<p>"e4 is an amazing project and is truly something for the history books. When they first told me that all the attendees at EclipseCon were going to hack on e4 I just didn't believe it.  However, it just goes to show the Eclipse community knows how to create great technology.   I just can't believe they were able to do it in 4 days.  Congrats to all who participated in making e4 a great platform."</p>
		
		<p>"When I found my Eclipse platform committer credentials in the EclipseCon registration bag, I thought it was a joke. But after committing three patches of mine that had been sitting in Bugzilla since 2002 to HEAD, I was, like, totally convinced! I can't wait to get my committer shirt at next year's EclipseCon,"</p>
		
		<p>The Eclipse Foundation has also announced a change in their naming policy.  Effective immediately, all release names will be a letter and number.  The use of Jupiter moons for release names will be banned.   This new naming convention will allow for greater innovation in the Eclipse community.  
		e4 is available for immediate download.  Users will automatically be updated through p2.  Products built on Eclipse Classic will instantly work on e4, no porting required. </p>

	</div>

</div>


		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

