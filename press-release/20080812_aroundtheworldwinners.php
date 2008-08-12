
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Winners of the Ganymede Around the World Contest";
	$pageKeywords	= "eclipse, ganymede, winner, finalist, around the world, contest";
	$pageAuthor		= "Ian Skerrett";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>
		
		<h2>Community Bulletin</h2>
		
     	<p>In June and July, Eclipse held a <a href="http://www.eclipse.org/ganymede/aroundtheworld.php">Ganymede Around
     	the World Contest</a> for individuals to submit their reviews of the <a href="http://www.eclipse.org/ganymede/">
     	Ganymede release</a>.  Over 600 reviews and messages were received from more than 70 different countries.  All submissions can
     	be seen on the <a href="http://www.eclipse.org/ganymede/map.php">Ganymede Around the World map</a>.
     	</p>
     	
     	<p>The reviews have been judged and the results are in.  The writer of the best review receives an Eclipse jacket and a choice
     	of a pass to EclipseCon 2009 or Eclipse Summit Europe 2008.  Congratulations to the winner:
     	<ul>
     		<li><a href="http://kapo-cpp.blogspot.com/2008/06/finally-ganymede.html" target="blank">Vincenzo Cappello - Corbetta, Italy</a></li>
     	</ul>
     	</p>
     	
     	<p>Congratulations also go out to the other top reviewers, who win Eclipse jackets:
     	<ul>
     		<li><a href="http://beerholder.blogspot.com/2008/06/eclipse-ganymede-w00t-dtp-review-first.html" target="blank">Emiel van Rooijen - Amsterdam, Netherlands</a></li>
     		<li><a href="http://blog.xemantic.com/2008/06/eclipse-ganymede-rejoicing-in-virility.html" target="blank">Kazimierz Pogoda - Szczecin, Poland</a></li>
     	</ul>
     	</p>
     			
     	<p>The 5 winners of the random draw for Eclipse jackets are:
     	<ul>
     		<li>Laszlo Borsos - Siofok, Hungary</li>
     		<li>Nicholas Chen - Urbana, USA</li>
     		<li>Joana Matos Fonseca da Trindade - Porto Alegre, Brazil</li>
     		<li>Gabriel - Curitiba, Brazil</li>
     		<li>Dave Loomis - Denver, USA</li>
		</ul>
		</p>
		
		<p>Thank you to everybody who participated in the contest by giving us feedback on Ganymede.  Your support is appreciated!
		</p>
 
 <br><br>
</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/ganymede">Ganymede</a></li>
				<li><a href="http://www.eclipse.org/ganymede/aroundtheworld.php">Ganymede Contest</a></li>
				<li><a href="http://www.eclipse.org/ganymede/map.php">Ganymede Map</a></li>
			</ul>
		</div>
	</div>	

</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

