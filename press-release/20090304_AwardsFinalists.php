<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Finalists for the Eclipse Community Awards 2009";
	$pageKeywords	= "eclipse, awards, finalists";
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
	
		<p>
			The Eclipse Foundation congratulates the finalists for the 2009 Eclipse Community Awards.  
		</p>

		<p>
			The Individual Awards recognize the people who have volunteered their time to make Eclipse a vibrant and innovative
			community. Finalists were selected by their peers in an online vote. The selection of the Top Newcomer Evangelist is based
			on the individual that has answered the most questions raised on the eclipse.newcomer newsgroup.
		</p>
		<p>
			<ul>
				<li><b>Top Ambassador</b>: name, name and name</li>
				<li><b>Top Committer</b>: name, name and name</li>
				<li><b>Top Contributor</b>: name, name and name</li>
				<li><b>Top Newcomer Evangelist</b>: name, name and name</li>
			</ul>
		</p>
		<p>
			The Technology Awards recognize some of the best Eclipse-based open source projects and commercial products. The finalists
			were selected from a pool of <a href="http://www.eclipse.org/org/foundation/eclipseawards/technology.php">
			64 nominations</a> by a panel of judges from the Eclipse community.
		</p>
		<p>
			<ul>
			<li><b>Best Commercial Eclipse-Based Developer Tool</b>: <a href="http://www.eclipse.org" target="blank">product</a>,
			<a href="http://www.eclipse.org" target="blank">product</a> and
			<a href="http://www.eclipse.org" target="blank">product</a></li>
			<li><b>Best Open Source Eclipse-Based Developer Tool:</b> <a href="http://www.eclipse.org" target="blank">product</a>,
			<a href="http://www.eclipse.org" target="blank">product</a> and
			<a href="http://www.eclipse.org" target="blank">product</a></li>
			<li><b>Best Commercial Equinox Application</b>: <a href="http://www.eclipse.org" target="blank">product</a>,
			<a href="http://www.eclipse.org" target="blank">product</a> and
			<a href="http://www.eclipse.org" target="blank">product</a></li>
			<li><b>Best Open Source Equinox Application</b>: <a href="http://www.eclipse.org" target="blank">product</a>
			and <a href="http://www.eclipse.org" target="blank">product</a></li>
			<li><b>Best Commercial RCP Application</b>: <a href="http://www.eclipse.org" target="blank">product</a>,
			<a href="http://www.eclipse.org" target="blank">product</a> and
			<a href="http://www.eclipse.org" target="blank">product</a></li>
			<li><b>Best Open Source RCP Application</b>: <a href="http://www.eclipse.org" target="blank">product</a>
			and <a href="http://www.eclipse.org" target="blank">product</a></li>
			</ul>
		</p>
		<p>
			Winners for each category will be announced at an <a href="http://www.eclipsecon.org/2009/sessions?id=742">
			awards ceremony</a> on March 23, 2009 at <a href="http://www.eclipsecon.org">EclipseCon</a>. 
		</p>
		<br><br>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community Awards</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/finalists09.php">Finalists</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/individual.php">Individual Nominations</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/technology.php">Technology Nominations</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/nominate_technology.php">Make a Technology Nomination</a></li>		
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
