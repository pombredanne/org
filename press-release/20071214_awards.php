<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Community Awards";
	$pageKeywords	= "eclipse, community, awards, EclipseCon";
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
		<h1>Nominations for the Eclipse Community Awards 2008 are Open</h1>
		
		<p>The Eclipse Community Awards are an annual event designed to show appreciation to individuals and technologies that make
		Eclipse a stronger community.  There are two categories of awards - individual and technology.  Eclipse is now accepting
		nominations for the awards, so show your love and nominate a person or product that has made a difference.</p>
		
		<p>In the individual category, anyone may make a nomination for the Top Ambassador, Top Committer and Top Mentor awards.  There is
		also a Top Newcomer	Evangelist award, which is presented to the individual that answers the most questions posted on the
		eclipse.newcomer newsgroup.</p>
		
		<p>In the technology category, anyone may make a nomination for the Best Commercial Eclipse-Based Developer Tool, Best Open Source
		Eclipse-Based Developer Tool, Best Commercial Equinox or RCP Application and Best Open Source Equinox or RCP Application awards.
		Companies are welcome to nominate their own products.</p>

		<p>More details about the awards and the nomination process can be found
		<a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">online</a>.	 Nominations for the Eclipse Community
		Awards will be accepted until January 25, 2008 and the awards will be announced March 17, 2008 at
		<a href="http://www.eclipsecon.org" target="blank">EclipseCon.</a></p>

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
