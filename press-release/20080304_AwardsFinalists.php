<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Finalists Announced for Eclipse Community Awards 2008";
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
			The Eclipse Foundation congratulates the finalists for the 2008 Eclipse Community Awards.  
		</p>

		<p>
			The Individual Awards recognize the people who have volunteered their time to make Eclipse a vibrant and innovative
			community. Finalists were selected by their peers in an online vote. The selection of the Top Newcomer Evangelist is based
			on the individual that has answered the most questions raised on the eclipse.newcomer newsgroup.
		</p>
		<p>
			<ul>
				<li><b>Top Ambassador</b>: Jeff McAffer and Ed Merks</li>
				<li><b>Top Committer</b>: Chris Aniszczyk, Mik Kersten and Paul Webster</li>
				<li><b>Top Contributor</b>: Jacek Pospychala and Remy Chi Jian Suen</li>
				<li><b>Top Newcomer Evangelist</b>: Mark Dexter, Walter Harley and Eric Rizzo</li>
			</ul>
		</p>
		<p>
			The Technology Awards recognize some of the best Eclipse-based open source projects and commercial products. The finalists
			were selected from a pool of <a href="http://www.eclipse.org/org/foundation/eclipseawards/technology_nominations.php" target="blank">
			55 nominations</a> by a panel of judges from the Eclipse community.
		</p>
		<p>
			<ul>
			<li><b>Best Commercial Eclipse-Based Developer Tool</b>: <a href="http://www.nexaweb.com/home/us/index.html@cid=2301.html" target="blank">Nexaweb Studio</a>,
			<a href="http://www.polarion.com/products/alm/team.php" target="blank">Polarion ALM Team for Subversion</a>,
			<a href="http://www.windriver.com/products/development_suite/" target="blank">Wind River Workbench</a></li>
			<li><b>Best Open Source Eclipse-Based Developer Tool:</b> <a href="http://www.eclemma.org/" target="blank">EclEmma</a>,
			<a href="http://springide.org/blog/" target="blank">Spring IDE</a></li>
			<li><b>Best Commercial Equinox Application</b>: <a href="http://www.birt-exchange.com/modules/products/index.php?productid=3" target="blank">BusinessReport Studio</a>,
			<a href="http://www.bandxi.com/cyrano/index.html" target="blank">CYRANO</a></li>
			<li><b>Best Commercial RCP Application</b>: <a href="http://www.openmethods.com/products.php" target="blank">openVXML</a>,
			<a href="http://www.xmind.org/us/" target="blank">XMIND 2008</a></li>
			<li><b>Best Open Source RCP Application</b>: <a href="http://directory.apache.org/studio/" target="blank">Apache Directory Studio</a>,
			<a href="http://mytourbook.sourceforge.net/mytourbook/" target="blank">MyTourbook</a></li>
		</p>
		<p>
			Winners for each category will be announced at an <a href="http://www.eclipsecon.org/2008/?page=sub/&id=539" target="blank">
			awards ceremony</a> on March 17, 2008 at <a href="http://www.eclipsecon.org" target="blank">EclipseCon</a>. 
		</p>
		<br><br>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Awards Categories</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/finalists08.php">Finalists</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/technology_nominations.php">Technology Nominations</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/individual_awards_guidelines.php">Guidelines for Individual Awards</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/technology_awards_guidelines.php">Guidelines for Technology Awards</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/awards_nominations.php">How to Make a Nomination</a></li>
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
