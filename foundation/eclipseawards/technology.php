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
			The following is a list of nominations submitted for the Technology Awards.  Nominations close on January 30, 2009.
		</p>
		
		<div class="homeitem3col">
			<h3>Best Commerical Eclipse-Based Developer Tool</h3>
			<ul>
				<li><a href="http://www.embarcadero.com/products/db_optimizer/" target="blank">Embarcadero DB Optimizer</a></li>
				<li><a href="http://www.enea.com/EPiBrowser/Literature%20(pdf)/Pdf/Not%20leadgenerating/Datasheets%20and%20Brochures/Optima_DS%20Final.pdf" target="blank">Enea Optima</a></li>
				<li><a href="http://wiki.apexdevnet.com/index.php/Force.com_IDE" target="blank">Force.com IDE</a></li>
				<li><a href="http://www.quest.com/jprobe" target="blank">JProbe</a></li>
				<li><a href="http://www.openmakesoftware.com/meister-info/" target="blank">OpenMake Meister</a></li>
				<li><a href="http://www.polarion.com/products/requirements/index.php  " target="blank">Polarion Requirements 2.0</a></li>		
				<li><a href="http://www.polarion.com/products/trackwiki/index.php" target="blank">Polarion Track &amp; Wiki</a></li>
				<li><a href="http://www.testingtech.com/products/ttworkbench.php" target="blank">TTworkbench</a></li>
				<li><a href="http://www.zend.com/en/products/studio" target="blank">Zend Studio for Eclipse 6.1.1</a></li>
			</ul>
		</div>
				
		<div class="homeitem3col">
			<h3>Best Open Source Eclipse-Based Developer Tool</h3>
			<ul>
				<li><a href="http://andrei.gmxhome.de/anyedit/index.html" target="blank">AnyEdit Tools</a></li>		
				<li><a href="http://www.eclipse4sl.org" target="blank">Eclipse4SL - Eclipse Tools for Silverlight</a></li>
				<li><a href="http://openrules.com" target="blank">OpenRules</a></li>
				<li><a href="http://www.umlet.com" target="blank">UMLet</a></li>	
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Best Commercial Equinox Application</h3>
			<ul>
				<li><a href="http://www.prosyst.com/products/osgi_ext_smart.html" target="blank">mBedded Server Smart Home Extension</a></li>	
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Best Open Source Equinox Application</h3>
			<ul>
				<li><a href="http://www.modulefusion.org" target="blank">ModuleFusion</a></li>	
				<li><a href="http://vif.sourceforge.net/" target="blank">VIF - Virtual Forum</a></li>			
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Best Commercial RCP Application</h3>
			<ul>
				<li><a href="http://www.artifactmanager.com" target="blank">Artifact Manager</a></li>
				<li><a href="http://www.pluck-n-play.com" target="blank">Chord Scale Generator</a></li>	
				<li><a href="http://www.guidancer.com" target="blank">GUIdancer</a></li>	
				<li><a href="http://www.neckdiagrams.com" target="blank">Neck Diagrams</a></li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Best Open Source RCP Application</h3>
			<ul>
				<li><a href="http://jcryptool.sourceforge.net" target="blank">JCrypTool</a></li>			
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
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>
				<li><a href="technology.php">Technology Nominations</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>