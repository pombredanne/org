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
	$pageTitle 		= "Eclipse Community Individual Awards Hall of Fame";
	$pageKeywords	= "eclipse, foundation, community, award, winners, individual";
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
					<td><img src="images/individual/Chris_Aniszczyk.jpg" width="60"></td><td><b>Chris Aniszczyk</b><br>Top Committer 2009<br>Top Ambassador 2007</td>
                    <td><img src="images/individual/alex-blewitt.jpg" width="60"></td><td><b>Alex Blewitt</b><br>Top Contributor 2012</td>
					
				</tr>
				<tr>
                	<td><img src="images/individual/boris_bokowski.jpg" width="60"></td><td><b>Boris Bokowski</b><br>Top Newcomer Evangelist 2011</td>
					<td><img src="images/individual/Nick_Boldt.png" width="60"></td><td><b>Nick Boldt</b><br>Top Ambassador 2009</td>
					
						
				</tr>
				<tr>
                	<td><img src="images/individual/Ed_Burnette.jpg" width="60"></td><td><b>Ed Burnette</b><br>Top Ambassador 2006</td>			
					<td><img src="images/individual/Benjamin_Cabe.png" width="60"></td><td><b>Benjamin Cab&eacute;</b><br>Top Contributor 2009</td>		
							
						
				</tr>
				<tr>
                	<td><img src="images/individual/sven-efftinge.jpg" width="60"></td><td><b>Sven Efftinge</b><br>Top Committer 2012</td>

                	<td><img src="images/individual/Walter_Harley.jpg" width="60"></td><td><b>Walter Harley</b><br>Top Newcomer Evangelist 2010</td>	
					
				</tr>
                <tr>
                    <td><img src="images/individual/stephan-herrmann.jpg" width="60"></td><td><b>Stephan Herrmann</b><br>Top Contributor 2012</td>
                	<td><img src="images/individual/dariusz_luksza.jpg" width="60"></td><td><b>Dariusz Luksza</b><br>Top Contributor 2011</td>
						                   
                 </tr>   
				<tr>
					<td><img src="images/individual/Blank_Picture.png" width="60"></td><td><b>Alain Magloire</b><br>Top Committer 2006</td>		
					<td><img src="images/individual/Daniel_Megert.jpg" width="60"></td><td><b>Daniel Megert</b><br>Top Newcomer Evangelist 2007</td>			
						
				</tr>
				<tr>
                	<td><img src="images/individual/Ed_Merks.jpg" width="60"></td><td><b>Ed Merks</b><br>Top Newcomer Evangelist 2009<br>Top Ambassador 2008<br>Top Committer 2007</td>	
					<td><img src="images/individual/Kimberley_Peter.jpg" width="60"></td><td><b>Kimberley Peter</b><br>Top Contributor 2007</td>			
							
				</tr>
				<tr>
                <td><img src="images/individual/Eric_Rizzo.jpg" width="60"></td><td><b>Eric Rizzo</b><br>Top Newcomer Evangelist 2008</td>	
					<td><img src="images/individual/Tom_Schindl.png" width="60"></td><td><b>Tom Schindl</b><br>Top Contributor 2007</td>			
					
				</tr>
				<tr>
                <td><img src="images/individual/Eike_Stepper.png" width="60"></td><td><b>Eike Stepper</b><br>Top Committer 2010</td>			
					<td><img src="images/individual/Remy_Suen.jpeg" width="60"></td><td><b>Remy Chi Jian Suen</b><br>Top Contributor 2008</td>			
						
				</tr>
				<tr>
                	<td><img src="images/individual/Lars_Vogel.png" width="60"></td><td><b>Lars Vogel</b><br>Top Newcomer Evangelist 2012<br>Top Contributor 2010</td>	
					<td><img src="images/individual/Linda_Watson.jpeg" width="60"></td><td><b>Linda Watson</b><br>Top Contributor 2006</td>			
							
				</tr>
				
				<tr>
                <td><img src="images/individual/Paul_Webster.png" width="60"></td><td><b>Paul Webster</b><br>Top Committer 2009</td>	
				<td><img src="images/individual/sebastian_zamekow.jpg" width="60"></td><td><b>Sebastian Zarnekow</b><br>Top Committer 2011</td>	
				<td>&nbsp;</td>	
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