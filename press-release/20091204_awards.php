<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nominations Open for the Eclipse Community Awards 2010";
	$pageKeywords	= "eclipse, community, awards, nominations, EclipseCon, 2010";
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
		
		<p>The <a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community
		Awards</a> are an annual event designed to show appreciation to individuals, projects and technologies that make
		Eclipse a stronger community.  There are three categories of awards - individual, project and technology.  The Eclipse Foundation is now accepting
		nominations for the awards, so show your appreciation and nominate a person, project or product that has made a difference.</p>
		
		<p>In the individual category, anyone may make a nomination for the Top Committer, Top Contributor and Top Newcomer Evangelist awards.  There is
		</p>

		<p>In the project category, anyone may make a nomination for the... awards.
		Projects are welcome to nominate their own products.</p>
		
		<p>In the technology category, anyone may make a nomination for the Best Commercial Eclipse-Based Developer Tool, 
		Best Open Source Eclipse-Based Developer Tool, Best Equinox Applicatio and Best RCP Application awards.
		Companies are welcome to nominate their own products.</p>

		<p>More details about the awards and the nomination process can be found
		<a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">online</a>.	 Nominations for the Eclipse Community
		Awards will be accepted until January 29, 2010 and the winners will be announced March 22, 2010 at
		<a href="http://www.eclipsecon.org">EclipseCon.</a></p>

	</div>
</div>
<div id="rightcolumn">
	<div class="sideitem">
	<h6>Related Links</h6>
	<ul>
		<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community Awards</a></li>
	</ul>
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
