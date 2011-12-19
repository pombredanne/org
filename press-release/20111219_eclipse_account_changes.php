<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse.org Site Authentication Changes";
	$pageKeywords	=  "eclipse, foundation, bugzilla, login";
	$pageAuthor		= "Christopher Guindon";
	
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
On Thursday, December 22, 2011, the Eclipse Foundation will be changing the mechanisms it uses to authenticate
user access to its various websites, such as <a href="https://bugs.eclipse.org/bugs">Bugzilla</a>, the <a href="/forums">Forums</a>, and the <a href="http://wiki.eclipse.org">Wiki</a>.  The purpose of this change is to simplify our account management,
reduce duplicate accounts and move towards open standards for user authentication.</p>

<p><strong>What this means</strong><br />
On Thursday, December 22, an email will be sent out to all our users who own an Eclipse Bugzilla account, requesting them to change their password.  This new password will be used for the entire Eclipse.org site, including Bugzilla. </p>
<p>Eclipse Committers will no longer have a separate Committer account and Bugzilla account -- both accounts will be merged into one.
Committers can continue using Bugzilla by supplying their current "Committer Account" credentials.  <b>Eclipse Committers will not need to change their password.</b></p>

With this change, we hope to better serve our community and maintain our ability to deploy new community-enabling tools such as Git and Gerrit Code review.  Any questions regarding this change can be sent to the <a href="mailto:webmaster@eclipse.org">webmaster</a>.
</div>

	<!-- remove the entire <div> tag to omit the right column! 
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.polarsys.org" target="_blank">polarsys.org</a></li>
			</ul>
		</div>
	</div>	
	-->
</div>
 

EOHTML;
	$html = mb_convert_encoding($html, "HTML-ENTITIES", "ISO-8859-1");
	$pageTitle = mb_convert_encoding($pageTitle, "HTML-ENTITIES", "ISO-8859-1");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>



