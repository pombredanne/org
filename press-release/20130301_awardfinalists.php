<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Finalists for the Eclipse Community Awards 2013";
	$pageKeywords	= "eclipse, community, awards, finalists";
	$pageAuthor		= "Roxanne Joncas";
	
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
<p>The Eclipse Foundation congratulates the finalists for the 2013 Eclipse Community Awards. Winners for each category will be announced on March 25, 2013 during the Awards Ceremony at <a href="http://www.eclipsecon.org/2013/">EclipseCon 2013</a>.</p>
<p>The Individual Awards recognize the people who have given their time to make Eclipse a vibrant and progressive community. Finalists were selected by their peers in an online vote.</p>
	<ul>
		<li><b>Top Committer</b></li>
			<ul>
				<li>Edward D. Willink, John Arthorne, and Markus Knauer</li>
			</ul>
		<li><b>Top Newcomer Evangelist</b></li>
			<ul>
				<li>Benjamin Cabé, Jonas Helming, and Russell Bateman</li>
			</ul>
	</ul>
	
<p>The Project Awards feature Eclipse projects that display innovation and foster community. Finalists were selected by their peers in an online vote. </p>
	<ul>
		<li><b>Most Innovative New Feature or Eclipse Project</b></li>
			<ul>
				<li><a href="http://eclipse.org/paho/" target="_blank">Eclipse Paho</a>, <a href="http://www.eclipse.org/diffmerge/" target="_blank">EMF Diff/Merge</a>, <a href="http://www.eclipse.org/intent/" target="_blank">Intent</a>, and <a href="http://eclipse.org/vjet" target="_blank">VJET Java Script IDE</a></li> 
			</ul>
		<li><b>Most Open Project</b></li>
			<ul>	
				<li><a href="http://www.eclipse.org/cdt" target="_blank">C/C++ Development tooling - CDT</a>, <a href="http://eclipse.org/egit" target="_blank">EGit</a>, and <a href="http://eclipse.org/orion" target="_blank">The Orion Project</a></li>
			</ul>
	</ul>
						
<p>The Technology Awards recognize some of the best Eclipse-based tools and applications. The finalists were selected from a pool of nominations by a judging panel from the Eclipse community. </p>
	<ul>
		<li><b>Best Application</b></li>
			<ul>
				<li><a href="http://www.bonitasoft.com" target="_blank">Bonita Open Solution</a>, <a href="http://chrononsystems.com/chronon4/" target="_blank">Chronon 4 'Ops'</a>, and <a href="http://www.talend.com/products/data-integration" target="_blank">Talend Open Studio</a></li>
			</ul>
		<li><b>Best Developer Tool</b></li>
			<ul>
				<li><a href="http://www.klocwork.com/products/insight/" target="_blank">Klocwork Insight</a>, <a href="http://docs.codehaus.org/display/SONAR/Working+with+Sonar+in+Eclipse" target="_blank">Sonar</a>, and <a href="http://wireframesketcher.com" target="_blank">WireframeSketcher Wireframing Tool</a></li>
			</ul>
		<li><b>Best Developer Plugin</b></li> 
			<ul>
				<li><a href="http://www.efxclipse.org" target="_blank">e(fx)clipse</a>, <a href="http://andrei.gmxhome.de/findbugs/index.html" target="_blank">FindBugs Eclipse Plugin</a>, and <a href="http://www.junitloop.org/" target="_blank">JUnitLoop</a></li>
			</ul>
		<li><b>Best Modeling Product</b></li>
			<ul>
				<li><a href="www.obeodesigner.com" target="_blank">Obeo Designer</a> and <a href="http://www.umlet.com" target="_blank">UMLet</a></li>
			</ul>
	</ul>				
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community Awards</a></li>
			</ul>
		</div>
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
