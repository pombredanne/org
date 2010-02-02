<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_3col.php
	#
	# Author: 		Denis Roy
	# Date:			2005-11-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Technology Awards Nominations";
	$pageKeywords	= "eclipse, awards, technology, nomination, eclipsecon";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		
		<p>
			The following is a list of nominations submitted for the Technology Awards.  Nominations close on January 29, 2010.
		</p>
		
		<div class="homeitem3col">
			<h3>Best Commerical Developer Tool</h3>
			<ul>
				<li><a href="http://www.atlassian.com/eclipse" target="blank">Atlassian Connector for Eclipse</a></li>
				<li><a href="http://www.birt-exchange.com/be/marketplace/app-showcase/" target="blank">BIRT Mashboard Application</a></li>
				<li><a href="http://na.blackberry.com/eng/developers/javaappdev/javaeclipseplug.jsp" target="blank">BlackBerry Java Plug-in for Eclipse</a></li>
				<li><a href="http://www.blackberry.com/developers/webeclipse" target="blank">BlackBerry Web Plug-in for Eclipse</a></li>
				<li><a href="http://www.instantiations.com/codepro/analytix/about.html" target="blank">CodePro AnalytiX</a></li>
				<li><a href="http://www.deltopia.com" target="blank">DeltaWalker</a></li>
				<li><a href="http://www.ExcelsiorJET.com" target="blank">Excelsior JET</a></li>
				<li><a href="http://www.guidancer.com" target="blank">GUIDancer</a></li>
				<li><a href="http://developers.intervoice.com" target="blank">Interaction Composer</a></li>
				<li><a href="http://www.quest.com/jprobe" target="blank">JProbe&reg;</a></li>
				<li><a href="http://www.justinmind.com/wireframe/justinmind_prototyper" target="blank">Justinmind Prototyper</a></li>
				<li><a href="http://www.model2code.com" target="blank">M2Flex</a></li>
				<li><a href="http://www.nwiresoftware.com/" target="blank">nWire</a></li>
				<li><a href="http://www.oxygenxml.com" target="blank">&lt;oXygen/&gt; XML Editor</a></li>
				<li><a href="http://www.springsource.com/products/suite/sts" target="blank">SpringSource Tool Suite</a></li>
				<li><a href="http://www.instantiations.com/windowbuilder/pro/ " target="blank">WindowBuilder Pro</a></li>
				<li><a href="http://www.instantiations.com/windowtester/index.html" target="blank">WindowTester Pro</a></li>
				<li><a href="http://wireframesketcher.com" target="blank">WireframeSketcher</a></li>
				<li><a href="http://www.zend.com/products/studio" target="blank">Zend Studio 7</a></li>
			</ul>
		</div>
				
		<div class="homeitem3col">
			<h3>Best Open Source Developer Tool</h3>
			<ul>
				<li><a href="http://andrei.gmxhome.de/anyedit/index.html " target="blank">AnyEdit Tools</a></li>
				<li><a href="http://andrei.gmxhome.de/skins/index.html" target="blank">Extended VS Presentation</a></li>
				<li><a href="http://groovy.codehaus.org/Eclipse+Plugin" target="blank">Groovy-Eclipse</a></li>
				<li><a href="http://www.safisystems.com" target="blank">SafiWorkshop</a></li>
				<li><a href="http://www.umlet.com" target="blank">UMLet</a></li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Best EclipseRT Application</h3>
			<ul>
				<li><a href="http://www.springsource.org/dmserver" target="blank">SpringSource dm Server</a></li>
				<li><a href="http://eclipsesource.com/en/products/" target="blank">Yoxos Eclipse Distribution</a></li>
			</ul>
		</div>
	
		<div class="homeitem3col">
			<h3>Best RCP Application</h3>
			<ul>
				<li><a href="http://www.bioclipse.net" target="blank">Bioclipse</a></li>
				<li><a href="http://www.ditaworks.com" target="blank">DITAworks Eclipse Help Package</a></li>
				<li><a href="http://jcryptool.sourceforge.net" target="blank">JCryp Tool</a></li>
				<li><a href="http://www.postergenius.com" target="blank">PosterGenius</a></li>
				<li><a href="http://www.pavone.com/structurebuilder_eclipse" target="blank">PAVONE Structure Builder</a></li>
				<li><a href="http://tasktop.com" target="blank">Tasktop Pro</a></li>
			</ul>
		</div>
		
	<br><br>	
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="individual.php">Individual Nominees</a></li>
				<li><a href="project.php">Project Nominees</a></li>
				<li><a href="technology.php">Technology Nominees</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_project.php">Make a Project Nomination</a></li>				
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>