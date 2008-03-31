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
		
		<p><strong>Ottawa, Ontario, April 1, 2008 - </strong>
		 The Eclipse Foundation is pleased to announce the immediate availability of the next major release of the Eclipse platform, code named e4.  e4, which is supported on all known hardware and operating systems, redefines web-based applications and application development. It provides the ultimate in flexibility, extensibility and customization for embedded, mobile, desktop, server and cloud development.</p>
		
		<p>e4 represents a significant milestone in the history of the Eclipse community.  It is not only a major rewrite of the Eclipse platform, it also accomplished a number of important aspects that will propel Eclipse into the next dimension of open source communities, specifically:</p>
		
		<p>
			<ul class="paddedlist" style="padding-left:10px;">
				<li>e4 was a truly diverse community effort that involved over 1400 individuals.</li>
				<li>e4 was developed in a record time, proving the power of the open source development model.</li>
				<li>e4 is a significantly reduced download size, highlighting the efficiency of the e4 code.</li>
				<li>e4 does not require documentation, due to the user friendly approach to api development at Eclipse.</li>
				<li>e4 will be released under all 57 OSI approved licenses, demonstrating how OSS license interoperability can work.</li>
				<li>e4 is backward compatibility; all plug-ins ever developed for any version of Eclipse, VisualAge for Java, Facebook, or Hesware's Super Zaxxon run without modification.</li>
				<li>e4 includes next-generation provisioning, code named "p2", which anticipates your needs and downloads extended functionality mere minutes before you actually need it.</li>
			</ul>
		</p>
		
		<p>'e4 is an amazing project and is truly something for the history books. When they first told me that all the attendees at EclipseCon were going to hack on e4 I just didn't believe it.  However, it just goes to show the Eclipse community knows how to create great technology.   I just can't believe they were able to do it in 4 days.  Congrats to all who participated in making e4 a great platform.'</p>
		
		<p>"When I found my Eclipse platform committer credentials in the EclipseCon registration bag, I thought it was a joke. But after committing three patches of mine that had been sitting in Bugzilla since 2002 to HEAD, I was, like, totally convinced! I can't wait to get my committer shirt at next year's EclipseCon," </p>
		
		<p>The Eclipse Foundation has also announced a change in their naming policy.  Effective immediately, all release names will be a letter and number.  The use of Jupiter moons for release names will be banned.   This new naming convention will allow for greater innovation in the Eclipse community.</p>
		
		<p>e4 is available for <a href="e4.html" target="_blank">immediate download</a>.  Users will automatically be updated through p2.  Products built on Eclipse Classic will instantly work on e4, no porting required.</p>

		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application
		frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle,
		including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business
		intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors,
		innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse
		Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
		Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />		
		
	</div>

</div>


		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

