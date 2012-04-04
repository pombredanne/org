<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse  Community Award Winners Announced";
	$pageKeywords	= "eclipse, community, awards, winners";
	$pageAuthor		= "Anne Jacko";
	
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
		#midcolumn ul ul{padding-bottom:0px;}
	</style>
	
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
<p> The Eclipse Foundation is pleased to announce the results of the 2012 Board of Directors elections.</p>
<p> The elected Committer Member representatives for 2012 are</p>
<ul>
<li>Chris Aniszczyk</li>
<li>John Arthorne</li>
<li>Ed Merks</li>
</ul>

<p>The elected Sustaining Member representative for 2012 are</p>
<ul>
<li>Eric Clayberg (Google)</li>
<li>Hans Kamutzki (MicroDoc)</li>
<li>Mik Kersten (Tasktop)</li>
</ul>


<p> Eclipse  is an open source community, whose projects are focused on building  an open development platform comprised of extensible frameworks,  tools and runtimes for building, deploying and managing software  across the lifecycle. A large, vibrant ecosystem of major technology  vendors, innovative start-ups, universities and research institutions  and individuals extend, complement and support the Eclipse Platform.</p>
<p> The  Eclipse Foundation is a not-for-profit, member supported corporation  that hosts the Eclipse projects. Full details of Eclipse and the  Eclipse Foundation are available at <a href="http://www.eclipse.org/"><strong>www.eclipse.org</strong></a>.</p>
<p> All company/product names and service marks may be trademarks or  registered trademarks of their respective companies</p>

	</div>		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php
/*
 * Created on 20-Jan-2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
