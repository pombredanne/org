<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Community Awards Winners Announced";
	$pageKeywords	= "eclipse foundation, awards, community, winners, 2009";
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
		
		<h2>Press Release</h2>
		
		<p>
			<center><i>Awards Recognize Top Individuals and Technologies in the Eclipse Community</i></center>
			<br>		
		</p>

		<p>
			<strong>ECLIPSECON 2009, SANTA CLARA, Calif., March 24, 2009</strong> &#150; The Eclipse Foundation announced the winners of
			its annual Eclipse Community Awards, which recognize the top individuals and products in the Eclipse community, yesterday on Monday, March 23, 2009. Recipients were
			honored at an awards ceremony yesterday on the opening day of EclipseCon 2009.
		<p>
		
		<p>
			The Individual Awards acknowledge people that have given time and resources to make Eclipse a better community. Winners were
			selected by their peers in an online vote. The selection of the Top Newcomer Evangelist award was based on the individual that
			answered the most questions raised on the eclipse.newcomer newsgroup.
		</p>
		
		<p>
		<ul>
			<li><strong>Top Ambassador</strong>: Nick Boldt
				<ul><li>The finalists are Mik Kersten and Tom Schindl.</li></ul></li>
			<li><strong>Top Committer</strong>: Paul Webster
				<ul><li>The finalists are Martin Oberhuber and Jason Weathersby.</li></ul></li>
			<li><strong>Top Contributor</strong>:  Benjamin Cab&eacute;
				<ul><li>The finalists are Dave Carver and Tom Schindl.</li></ul></li>
			<li><strong>Top Newcomer Evangelist</strong>: Ed Merks
				<ul><li>The finalists are Nick Boldt and Walter Harley.</li></ul></li>
		</ul>
		</p>
		
		<p>
			The Technology Awards recognize both Eclipse-based open source projects and commercial products. Winners were selected by a
			panel of judges from the Eclipse community.  Nominated developer tools, Equinox applications and RCP applications were evaluated
			on their user interfaces, innovation and comprehensiveness.
		</p>
		
		<p>
		<ul>
			<li><strong>Best Commercial Eclipse-Based Developer Tool</strong>: Instantiations WindowBuilder Pro (<a href="http://www.instantiations.com/windowbuilder" target="blank">www.instantiations.com/windowbuilder</a>)
			<ul><li>The finalists are Adobe Flex Builder 3 (<a href="http://www.adobe.com/products/flex/" target="blank">www.adobe.com/products/flex</a>) and 
			Bredex GUIdancer (<a href="http://www.guidancer.com/" target="blank">www.guidancer.com</a>).</li></ul></li>
			
			<li><strong>Best Open Source Eclipse-Based Developer Tool</strong>: Acceleo (<a href="http://www.acceleo.org/" target="blank">www.acceleo.org</a>)
			<ul><li>The finalists are AnyEdit Tools (<a href="http://andrei.gmxhome.de/anyedit/index.html" target="blank">andrei.gmxhome.de/anyedit</a>) and
			OpenRules (<a href="http://openrules.com/" target="blank">openrules.com</a>).</li></ul></li>
			 
			<li><strong>Best Commercial Equinox Application</strong>: ProSyst mBedded Server Smart Home Extension (<a href="http://www.prosyst.com/products/osgi_ext_smart.html" target="blank">www.prosyst.com/products/osgi_ext_smart.html</a>)
			<ul><li>The finalists are CAS PIA (<a href="http://www.cas-pia.de/" target="blank">www.cas-pia.de</a>) and 
			Yoxos Enterprise (<a href="http://eclipsesource.com/en/products/yoxos-enterprise/" target="blank">eclipsesource.com/en/products/yoxos-enterprise</a>).</li></ul></li>

			<li><strong>Best Open Source Equinox Application</strong>: ModuleFusion (<a href="http://www.modulefusion.org/" target="blank">www.modulefusion.org</a>)
			<ul><li>The finalist is VIF - Virtual Forum (<a href="http://vif.sourceforge.net/" target="blank">vif.sourceforge.net</a>).</li></ul></li>
			
			<li><strong>Best Commercial RCP Application</strong>: Chord Scale Generator (<a href="http://www.pluck-n-play.com/" target="blank">www.pluck-n-play.com</a>)
			<ul><li>The finalists are ECR - Enregistrement Centralis&eacute; en R&eacute;seau (<a href="http://www.anyware-tech.com/en/st/eclipse_platform/ecr_rcp_application.html" target="blank">www.anyware-tech.com/en/st/eclipse_platform/ecr_rcp_application.html</a>) and
			 NeTS - Network-wide Track Management System (<a href="http://demos.netcetera.ch/nets" target="blank">demos.netcetera.ch/nets</a>).</li></ul></li>
						
			<li><strong>Best Open Source RCP Application</strong>: Apache Directory Studio (<a href="http://directory.apache.org/studio" target="blank">directory.apache.org/studio</a>)
			<ul><li>The finalist is MAEviz (<a href="http://mae.cee.uiuc.edu/software_and_tools/maeviz.html" target="blank">mae.cee.uiuc.edu/software_and_tools/maeviz.html</a>).</li></ul></li>			
		</ul>
		</p>
		
		<p>
			<strong>About the Eclipse Foundation</strong><br />
			Eclipse is an open source community, whose projects are focused on building an open development
			platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing
			software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative
			start-ups, universities and research institutions and individuals extend, complement and support the
			Eclipse Platform.
		</p>
		
		<p>
			The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
			Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.
		</p>
		
		<p>
			<br>		
			<i>All company/product names and service marks may be trademarks or registered trademarks of
			their respective companies.</i>
			<br><br>
		</p>
		
		<p>
			<strong>Press Contact:</strong><br>	
			Chantal Yang<br>
			Page One PR for Eclipse Foundation<br>
			415-875-7494<br>
			<a href="mailto:eclipse@pageonepr.com">eclipse@pageonepr.com</a><br>
			<br>
		</p>
							
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community Awards</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/judges09.php">2009 Judges</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/pastwinners.php">Past Winners</a></li>
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
