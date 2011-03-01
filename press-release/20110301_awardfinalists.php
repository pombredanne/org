<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Finalists for the Eclipse Community Awards 2011";
	$pageKeywords	= "eclipse, community, awards, finalists";
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
	</style>
	
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<h2>Community Bulletin</h2>
	
		<p>
			The Eclipse Foundation congratulates the finalists for the 2011 Eclipse Community Awards. Winners for each
			category will be announced on March 21, 2011 during an evening reception at <a href="http://www.eclipsecon.org/2011/">EclipseCon 2011</a>.   
		</p>

		<p>
			The Individual Awards recognize the people who have given their time to make Eclipse a vibrant and progressive
			community. Finalists were selected by their peers in an online vote. 
		</p>
		<p>
			<ul>
				<li><b>Top Committer</b>: Lauren Goubet, Tom Schindl, Sebastian Zarnekow</li>
				<li><b>Top Contributor</b>: Brian de Alwis, Dariusz Luksza, James Sugrue</li>
				<li><b>Top Newcomer Evangelist</b>: Boris Bokowski, Cedric Brun, James Sugrue</li> 
			</ul>
		</p>
		<p>
			The Project Awards feature Eclipse projects that display innovation and foster community.
			Finalists were selected by their peers in an online vote.
		</p>
		<p>
			<ul>
				<li><b>Most Open Project</b>: e4, Modeling Amalgamation</li>
				<li><b>Most Innovative New Feature or Eclipse Project</b>: EGit, Extended Editing Framework (EEF), Mylyn Builds</li>
			</ul>
		</p>
		<p>
			The Technology Awards recognize some of the best Eclipse-based tools and applications. The finalists
			were selected from a pool of nominations by a judging panel from the Eclipse community.
		</p>
		<p>
			<ul>
			<li><b>Best Developer Tool</b>: <a href="http://diver.sf.net/" target="blank">Diver</a> and
			<a href="http://pydev.org/" target="blank">PyDev</a> 

			<li><b>Best Modeling Tool</b>: <a href="http://www.actifsource.com/" target="blank">actifsource</a>, 
			<a href="http://www.bonitasoft.com/" target="blank">Bontia Open Solutions</a>, and  
			<a href="http://www.obeodesigner.com/" target="blank">Obeo Designer</a> 
			
			
			<li><b>Best Mobile Tool</b>: <a href="http://genuitec.com/mobile" target="blank">MobiOne Studio</a> and
			and <a href="http://developer.motorola.com/docstools/motodevstudio/" target="blank">MOTODEV Studio for Android</a></li>

			<li><b>Best Application</b>: <a href="http://www.openchrom.net/" target="blank">OpenChrom</a>,
			<a href="http://wireframesketcher.com/" target="blank">WireframeSketcher</a> 
			and <a href="http://www.justinmind.com/" target="blank">Justinmind Prototyper</a></li>
			</ul> 
		</p>
		<br><br>
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
