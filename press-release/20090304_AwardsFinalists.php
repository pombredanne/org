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
			The Individual Awards recognize the people who have given their time to make Eclipse a vibrant and innovative
			community. Finalists were selected by their peers in an online vote. The selection of the Top Newcomer Evangelist is based
			on the individual that has answered the most questions raised on the eclipse.newcomer newsgroup.
		</p>
		<p>
			<ul>
				<li><b>Top Ambassador</b>: Nick Boldt, Mik Kersten and Tom Schindl</li>
				<li><b>Top Committer</b>: Martin Oberhuber, Jason Weathersby and Paul Webster</li>
				<li><b>Top Contributor</b>: Benjamin Cabe, Dave Carver and Tom Schindl</li>
				<li><b>Top Newcomer Evangelist</b>: Nick Boldt, Walter Harley and Ed Merks</li> 
			</ul>
		</p>
		<p>
			The Technology Awards recognize some of the best Eclipse-based open source projects and commercial products. The finalists
			were selected from a pool of <a href="http://www.eclipse.org/org/foundation/eclipseawards/technology.php">
			64 nominations</a> by judging panels from the Eclipse community.
		</p>
		<p>
			<ul>
			<li><b>Best Commercial Eclipse-Based Developer Tool</b>: <a href="http://www.adobe.com/products/flex/" target="blank">Adobe Flex Builder 3</a>,
			<a href="http://www.guidancer.com" target="blank">Bredex GUIdancer</a> and
			<a href="http://www.instantiations.com/windowbuilder/index.html?id=1" target="blank">Instantiations WindowBuilder Pro</a></li>

			<li><b>Best Open Source Eclipse-Based Developer Tool:</b> <a href="http://www.acceleo.org" target="blank">Acceleo</a>,
			<a href="http://andrei.gmxhome.de/anyedit/index.html" target="blank">AnyEdit Tools</a> and
			<a href="http://openrules.com" target="blank">OpenRules</a></li>

			<li><b>Best Commercial Equinox Application</b>: <a href="http://www.cas-pia.de" target="blank">CAS PIA</a>,
			<a href="http://www.prosyst.com/products/osgi_ext_smart.html" target="blank">ProSyst mBedded Server Smart Home Extension</a> and
			<a href="http://eclipsesource.com/en/products/yoxos-enterprise/" target="blank">Yoxos Enterprise</a></li>

			<li><b>Best Open Source Equinox Application</b>: <a href="http://www.modulefusion.org" target="blank">ModuleFusion</a>
			and <a href="http://vif.sourceforge.net/" target="blank">VIF - Virtual Forum</a></li>

			<li><b>Best Commercial RCP Application</b>: <a href="http://www.pluck-n-play.com" target="blank">Chord Scale Generator</a>,
			ECR (Enregistrement Centralis&eacute; en R&eacute;seau - Centralized Network Recording) and
			<a href="http://demos.netcetera.ch/nets" target="blank">NeTS - Network-wide Track Management System</a></li>

			<li><b>Best Open Source RCP Application</b>: <a href="http://directory.apache.org/studio" target="blank">Apache Directory Studio</a>
			and <a href="http://mae.cee.uiuc.edu/software_and_tools/maeviz.html" target="blank">MAEviz</a></li>
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
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community Awards</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/winners08.php">2008 Winners</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/winners07.php">2007 Winners</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/winners06.php">2006 Winners</a></li>
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
