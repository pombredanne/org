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

<p><strong>Ottawa, Canada - March 26, 2013</strong> - The Eclipse Foundation congratulates the winners of the annual Eclipse Community Awards, which recognize the top individuals, projects and technologies in 
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
<ul><li>Most Open Project:  <a href="/egit/">EGit</a>
<li>The finalists are  <a href="/cdt/">CDT</a> and <a href="/orion/">Orion</a>
</ul>
<ul><li>Most Innovative New Feature or Eclipse Project: <a href="/diffmerge/">EMF Diff/Merge</a>
<li>The finalists are <a href="/paho/">Paho</a>, <a href="/intent/">Mylyn Intent</a> and <a href="/vjet/">VJet</a>
</ul>

<p>Technology Awards recognize Eclipse-based open source projects and commercial products. Winners were selected by a panel of judges from the Eclipse 
community. Products were evaluated on their user interfaces, innovation and completeness of their solutions.</p>
<ul><li>Best Developer Tool: <a href="http://wireframesketcher.com/" target="_blank">Wireframe Sketcher</a>
<li>The finalists are <a href="http://www.klocwork.com/products/insight/index.php" target="_blank">Klocwork Insight</a> and <a href="http://www.sonarsource.org/" target="_blank">Sonar</a>
</ul>
<ul><li>Best Developer Plugin: <a href="http://findbugs.sourceforge.net/index.html" target="_blank">FindBugs</a>
<li>The finalist are <a href="http://www.efxclipse.org/" target="_blank">e(fx)clipse</a>, <a href="http://www.junitloop.org/" target="_blank">JunitLoop</a>
</ul>
<ul><li>Best Modeling Product: <a href="http://www.obeodesigner.com/" target="_blank">Obeo Designer</a>
<li>The finalist is UMLet
</ul>
<ul><li>Best Application: <a href="http://chrononsystems.com/chronon4" target="_blank">Chronon 4 ‘Ops’</a>
</li>The finalists are <a href="http://www.bonitasoft.com/" target="_blank">Bonita Open Solutions</a> and <a href="http://www.talend.com/products/talend-open-studio" target="_blank">Talend Open Studio</a>
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

