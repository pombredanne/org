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
	$pageTitle 		= "Eclipse Community Technology Awards Hall of Fame";
	$pageKeywords	= "eclipse, foundation, community, award, winners, technology";
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
<link rel="stylesheet" type="text/css" href="layout.css" media="screen" />
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>

		<div class="homeitem3col">
			<table>
				<tr>
					<td><img src="images/technology/Acceleo.jpg" width="60"></td><td><b>Acceleo</b><br>Best Open Source Developer Tool 2009</td>
					<td><img src="images/technology/ApacheDirStudio.jpeg" width="60"></td><td><b>Apache Directory Studio</b><br>Best Open Source RCP Application 2009</td>
				</tr>
				<tr>
					<td><img src="images/technology/BEA.gif" width="60"></td><td><b>BEA Workshop Studio 3.0</b><br>Best Commercial Developer Tool 2006</td>
					<td><img src="images/technology/BredexGUIdancer.png" width="60"></td><td><b>Bredex GUIdancer</b><br>Best Commercial Developer Tool 2010</td>
				</tr>
				<tr>
					<td><img src="images/technology/ChordScaleGen.png" width="60"></td><td><b>Chord Scale Generator</b><br>Best Commercial RCP Application 2009</td>
					<td><img src="images/technology/CompassGroup.jpg" width="60"></td><td><b>Compass Group Southern Africa via Jigsaw Interactive</b><br>Best Deployment of Eclipse Technology in an Enterprise 2006</td>
				</tr>
				<tr>	
					<td><img src="images/technology/Cyrano.jpeg" width="60"></td><td><b>CYRANO</b><br>Best Commercial Equinox Application 2008</td>
					<td><img src="images/technology/EclEmma.gif" width="60"></td><td><b>EclEmma</b><br>Best Open Source Developer Tool 2008</td>
				</tr>
				<tr>	
					<td><img src="images/technology/eclipse-cs.png" width="60"></td><td><b>eclipse-cs Checkstyle Plugin</b><br>Best Open Source Developer Tool 2007</td>
					<td><img src="images/technology/Groovy.png" width="60"></td><td><b>Groovy-Eclipse</b><br>Best Open Source Developer Tool 2010</td>
				</tr>
				<tr>
					<td><img src="images/technology/GumTree.png" width="60"></td><td><b>Gumtree</b><br>Best Open Source RCP Application 2006</td>	
					<td><img src="images/technology/Instantiations.jpg" width="60"></td><td><b>Instantiations WindowBuilder Pro</b><br>Best Commercial Developer Tool 2009</td>			
				</tr>
				<tr>
					<td><img src="images/technology/JPMorgan.gif" width="60"></td><td><b>JPMorgan Chase</b><br>Best Deployment of Eclipse Technology in an Enterprise 2007</td>			
					<td><img src="images/technology/Lombardi/jpeg" width="60"></td><td><b>Lombardi Software TeamWorks</b><br>Best Commercial RCP Application 2006</td>			
				</tr>
				<tr>
					<td><img src="images/technology/2009Blank.jpg" width="60"></td><td><b>ModuleFusion</b><br>Best Open Source Equinox Application 2009</td>
					<td><img src="images/technology/MyTourbook.jpeg" width="60"></td><td><b>MyTourbook</b><br>Best Open Source RCP Application 2008</td>			
				</tr>
				<tr>
					<td><img src="images/individual/Blank_Picture.png" width="60"></td><td><b>ProSyst mBedded Server Smart Home Extension</b><br>Best Commercial Equinox Application 2009</td>			
					<td><img src="images/individual/Blank_Picture.png" width="60"></td><td><b>PSICAT</b><br>Best Open Source RCP Application 2007</td>						
				</tr>
				<tr>
					<td><img src="images/individual/Blank_Picture.png" width="60"></td><td><b>QNX Momentics IDE</b><br>Best Commercial Developer Tool 2007</td>			
					<td><img src="images/individual/Blank_Picture.png" width="60"></td><td><b>RadRails</b><br>Best Open Source Developer Tool 2006</td>	
								
				</tr>
				<tr>	
					<td><img src="images/individual/Blank_Picture.png" width="60"></td><td><b>SpringSource dm Server</b><br>Best EclipseRT Application 2010</td>
					<td><img src="images/individual/Blank_Picture.png" width="60"></td><td><b>Tasktop Pro</b><br>Best RCP Application 2010</td>			
												
				</tr>		
				<tr>
					<td><img src="images/individual/Blank_Picture.png" width="60"></td><td><b>TIBCO Business Studio</b><br>Best Commercial RCP Application 2007</td>		
					<td><img src="images/individual/Blank_Picture.png" width="60"></td><td><b>Wind River Workbench</b><br>Best Commercial Developer Tool 2008</td>																
				</tr>
				<tr>			
					<td><img src="images/individual/Blank_Picture.png" width="60"></td><td><b>XMIND 2008</b><br>Best Commercial RCP Application 2008</td>
					<td></td><td></td>			
				</tr>
			</table>
				
		</div>	
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
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage("Nova", $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>