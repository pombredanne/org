<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Community Award Winners Announced";
	$pageKeywords	= "eclipse awards, open source, eclipse member";
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
		#midcolumn ul ul{padding-bottom:0px;}
	</style>
	
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
<br>

<p>The Eclipse Foundation congratulates the winners of the annual Eclipse Community Awards, which recognize the top individuals, projects and technologies in 
the ecosystem. Recipients were honored at an awards ceremony March 25 on the opening day of EclipseCon 2012.</p>

<p>The Individual Awards acknowledge people that give their time and resources to make Eclipse a better community. Winners were selected by their peers in an 
online vote.
<ul><li>Top Committer: Markus Knauer
<li>The finalists are Ed D. Wilink and John Arthorne
</ul>

<ul><li>Top Newcomer Evangelist: Jonas Helming
<li>The finalists are Beniamin Cabe and Russell Bateman
</ul>
<ul><li>Lifetime Contribution Award: Chris Aniszczyk
</ul>

<p>The Project Awards recognize Eclipse projects for introducing innovative new features and fostering an open community. Winners were selected by their 
peers in an online vote.</p>
<ul><li>Most Open Project:  EGit
<li>The finalists are  CDT and Orion
</ul>
<ul><li>Most Innovative New Feature or Eclipse Project: EMF Diff/Merge
<li>The finalists are Paho, Mylyn Intent and VJet
</ul>

<p>Technology Awards recognize Eclipse-based open source projects and commercial products. Winners were selected by a panel of judges from the Eclipse 
community. Products were evaluated on their user interfaces, innovation and completeness of their solutions.</p>
<ul><li>Best Developer Tool: Wireframe Sketcher
<li>The finalists are Klocwork Insight and Sonar
</ul>
<ul><li>Best Developer Plugin: FindBugs
<li>The finalist are e(fx)clipse, JunitLoop
</ul>
<ul><li>Best Modeling Product: Obeo Designer
<li>The finalist is UMLet
</ul>
<ul><li>Best Application: Chronon 4 ‘Ops’
</li>The finalists are Bonita Open Solutions and Talend Open Studio
</ul>

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->

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

