<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Community Awards Winners Announced";
	$pageKeywords	= "eclipse foundation, awards, community, winners, 2011";
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
		
		<p>
			<b>Santa Clara, CA - March 21, 2011</b> - The Eclipse Foundation congratulates the winners of
			the annual Eclipse Community Awards, which recognize the top individuals, projects and technologies in
			the ecosystem. Recipients were
			honored at an awards ceremony March 21 on the opening day of EclipseCon 2011.
		<p>
		
		<p>
			The Individual Awards acknowledge people that give their time and resources to make Eclipse a better community. Winners were
			selected by their peers in an online vote. 
		</p>
		
		<p>
		<ul>
			<li><strong>Top Committer</strong>: Sebastian Zarnekow
				<ul><li>The finalists are Lauren Goubet and Tom Schindl, </li></ul></li>
			<li><strong>Top Contributor</strong>:  Dariusz Luksza
				<ul><li>The finalists are Brian de Alwis and James Sugrue</li></ul></li>
			<li><strong>Top Newcomer Evangelist</strong>: Boris Bokowski
				<ul><li>The finalists are Cedric Brun and James Sugrue.</li></ul></li>
			<li><strong>Lifetime Contribution Award</strong>: David Williams
		</ul>
		</p>

		<p>
			The Project Awards recognize Eclipse projects for introducing innovative new features and fostering
			an open community. Finalists were selected by their peers in an online vote. 
		</p>
		
		<p>
		<ul>
			<li><strong>Most Open Project</strong>: e4
				<ul><li>The finalist is Modeling Amalgamation.</li></ul></li>
			<li><strong>Most Innovative New Feature or Eclipse Project</strong>:  EGit
				<ul><li>The finalists are Extended Editing Framework (EEF), and Mylyn Builds</li></ul></li>
		</ul>
		</p>		
		
		<p>
			The Technology Awards recognize Eclipse-based open source projects and commercial products. Winners were selected by a
			panel of judges from the Eclipse community.  Products were evaluated
			on their user interfaces, innovation and completeness of their solutions.
		</p>
		
		<p>
		<ul>
			<li><strong>Best Developer Tool</strong>: <a href="http://pydev.org/">PyDev</a>
			<ul><li>The finalist is <a href="http://diver.sf.net/">Diver</a>.</li></ul></li>

			<li><strong>Best Modeling Tool</strong>: <a href="http://www.bonitasoft.com/">Bonita Open Solutions</a>
			<ul><li>The finalists are <a href="http://www.actifsource.com/">actifsource</a> and <a href="http://www.obeodesigner.com/">Obeo Designer</a></li></ul></li>

			<li><strong>Best Mobile Tool</strong>: <a href="http://developer.motorola.com/docstools/motodevstudio/">MOTODEV Studio for Android</a>
			<ul><li>The finalist is <a href="http://genuitec.com/mobile">MobiOne Studio</a></li></ul></li>
						
			<li><strong>Best RCP Application</strong>: <a href="http://www.openchrom.net/">OpenChrom</a>
			<ul><li>The finalists are <a href="http://wireframesketcher.com/">WireframeSketcher</a> and <a href="http://www.justinmind.com/">Justinmind Prototyper</a></li></ul></li>
		</ul>
		</p>
		
		<p><strong>About the Eclipse Foundation</strong><br />
			Eclipse is an open source community, whose projects are focused on building an open development
			platform comprised of extensible frameworks, tools and runtimes for building, deploying and
			managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors,
			innovative start-ups, universities and research institutions and individuals extend, complement
			and support the Eclipse Platform. 
		</p>
		
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse
		projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.
		</p>
		
		<p>All company/product names and service marks may be trademarks or registered trademarks of
		their respective companies.
		</p>
							
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community Awards</a></li>
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

