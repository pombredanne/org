<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Finalists for the Eclipse Community Awards 2012";
	$pageKeywords	= "eclipse, community, awards, finalists";
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
<p> The Eclipse Foundation congratulates the finalists for the 2011 Eclipse Community Awards. Winners for each category will be announced on March 26, 2012during an evening reception at <a href="http://www.eclipsecon.org/2012/">EclipseCon 2012</a>. </p>
<p> The Individual Awards recognize the people who have given their time to make Eclipse a vibrant and progressive community. Finalists were selected by their peers in an online vote.</p>
<ul>
  <li><b>Top Committer</b>: Sven Efftinge, Daniel Megert,  and Kim Moir</li>
  <li><b>Top Newcomer Evangelist</b>: Russell Bateman, Lars Vogel,  and Lu Yang</li>
</ul>
<p> The Project Awards feature Eclipse projects that display innovation and foster community. Finalists were selected by their peers in an online vote. </p>
<ul>
  <li><b>Most Open Project</b>: C/C++ Development Tooling, Eclipse Communication Framework, GMF Tooling</li>
  <li><b>Most Innovative New Feature or Eclipse Project</b>: Code recommenders, Orion, Xtend</li>
</ul>
<p> The Technology Awards recognize some of the best Eclipse-based tools and applications. The finalists were selected from a pool of nominations by a judging panel from the Eclipse community. </p>
<ul>

  <li><b>Best Modeling Product</b>: <a href="http://maintainj.com/" target="_blank">MaintainJ</a> and <a href="http://www.umlet.com/" target="_blank">UMLet</a></li>
  <li><b>Best Developer Tool</b>: <a href="http://bndtools.org/" target="_blank">Bndtools</a>, <a href="http://www.chrononsystems.com/products/chronon-time-travelling-debugger" target="_blank">Chronon  Time Traveling Debugger</a>,  and <a href="http://www.arm.com/products/tools/software-tools/ds-5/community-edition/index.php" target="_blank">DS-5  Community Edition</a>
  </li>
  <li><b>Best Application</b>: <a href="http://www.bonitasoft.com/" target="_blank">Bonita  Open Solution</a>, <a href="http://www.diligent-it.com/files/ea2012/CCTVnet.html" target="_blank">CCTVnet</a> ,and <a href="http://www.justinmind.com/prototyper/features-build" target="_blank">Justinmind  Prototyper</a> </li>
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
