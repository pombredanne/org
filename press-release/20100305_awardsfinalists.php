<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Finalists for the Eclipse Community Awards 2010";
	$pageKeywords	= "eclipse, community, awards, finalists";
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
			The Eclipse Foundation congratulates the finalists for the 2010 Eclipse Community Awards. Winners for each
			category will be announced at an <a href="http://www.eclipsecon.org/2010/sessions/?page=sessions&id=1589">
			awards ceremony</a> on March 22, 2010 at <a href="http://www.eclipse.org/go/EC10_web@cbmar5">EclipseCon</a>.   
		</p>

		<p>
			The Individual Awards recognize the people who have given their time to make Eclipse a vibrant and progressive
			community. Finalists were selected by their peers in an online vote. The selection of the Top Newcomer Evangelist is based
			on the individual that has answered the most questions raised on the eclipse.newcomer newsgroup.
		</p>
		<p>
			<ul>
				<li><b>Top Committer</b>: Boris Bokowski, Markus Schorn and Eike Stepper</li>
				<li><b>Top Contributor</b>: Matt Hall, Laurens Holst, James Sugrue and Lars Vogel</li>
				<li><b>Top Newcomer Evangelist</b>: Russell Bateman, Walter Harley and Lars Vogel</li> 
			</ul>
		</p>
		<p>
			The Project Awards feature Eclipse projects that display innovation and foster community.
			Finalists were selected by their peers in an online vote.
		</p>
		<p>
			<ul>
				<li><b>Most Open Project</b>: e4, Equniox p2, Mylyn and XML Tools in Web Tools Platform (WTP) Incubator</li>
				<li><b>Most Innovative New Feature or Eclipse Project</b>: EclipseLink, Standard Widget Toolkit (SWT) Cocoa Port and Textual Modeling Framework (TMF) Xtext</li>
			</ul>
		</p>
		<p>
			The Technology Awards recognize some of the best Eclipse-based tools and applications. The finalists
			were selected from a pool of <a href="http://www.eclipse.org/org/foundation/eclipseawards/technology.php">
			nominations</a> by judging panels from the Eclipse community.
		</p>
		<p>
			<ul>
			<li><b>Best Commercial Developer Tool</b>: <a href="http://www.birt-exchange.com/be/marketplace/app-showcase/" target="blank">BIRT Mashboard Application</a>,
			<a href="http://www.guidancer.com/" target="blank">GUIdancer</a> and
			<a href="http://www.zend.com/products/studio" target="blank">Zend Studio 7</a></li>

			<li><b>Best Open Source Developer Tool:</b> There is 1 winner in this category with no
			additional finalists. The winning tool will be announced at the Eclipse Awards ceremony. <a href="http://www.eclipse.org/org/foundation/eclipseawards/technology.php" target="blank">See all nominees</a>.</li> 

			<li><b>Best EclipseRT Application</b>: <a href="http://www.actuate.com/products/iserver/iserver-enterprise/" target="blank">BIRT iServer Enterprise</a>
			and <a href="http://www.springsource.org/dmserver" target="blank">SpringSource dm Server</a></li>

			<li><b>Best RCP Application</b>: <a href="http://www.bioclipse.net/" target="blank">Bioclipse</a>,
			<a href="http://www.postergenius.com/" target="blank">PosterGenius</a>
			and <a href="http://tasktop.com/" target="blank">Tasktop Pro</a></li>
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
