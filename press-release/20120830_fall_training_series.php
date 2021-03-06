<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Register for the Eclipse Fall 2012 Training Series";
	$pageKeywords	= "eclipse fall training, open source, eclipse member";
	$pageAuthor		= "Christopher Guindon";
	
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
		#midcolumn ul ul{padding-bottom:0px;}
	</style>
	
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
<br>
<p>The Eclipse member companies are pleased to announce the <a href="http://www.eclipse.org/community/training/classes.php">Fall 2012 Training Series</a>. 

We are pleased to introduce two new courses, Eclipse4 RCP and Building OSGI/RCP with Maven/Tycho.

These training classes are an excellent opportunity for software developers and architects to learn more about Eclipse Rich Client Platform (RCP), Eclipse4 RCP, Eclipse BIRT, Building OSGI/RCP applications with Maven/Tycho and Modeling Technologies. Eclipse experts will lead the sessions, providing practical experience through classroom instruction and hands-on labs. Virtual and on-site classes have been scheduled in several countries from October 15  to November 23, 2012.</p>



<p><a href="http://www.eclipse.org/community/training/classes.php">See the schedule</a> for a complete list of courses and course descriptions.</p>

<p>Eclipse members participating in the training series are <a href="http://www.actuate.com/home/" target="_blank">Actuate</a>, <a href="http://www.avantsoft.com/" target="_blank">AvantSoft</a>, <a href="http://eclipsesource.com/en/services/eclipse-training/" target="_blank">EclipseSource</a>, <a href="http://industrial-tsi.com/" target="_blank">Industrial TSI</a>, <a href="http://www.modumind.com/" target="_blank">Modular Mind</a>, <a href="http://www.obeo.fr/" target="_blank">Obeo</a>, <a href="http://www.opcoach.com/" target="_blank">OPCoach</a>, <a href="http://www.rcp-vision.com/?lang=en" target="_blank">RCP Vision</a>, <a href="http://www.suprematic.net/de" target="_blank">Suprematic Solutions</a>, <a href="http://charleskelly.com/eclipse_training.htm" target="_blank">Third Millenium</a>, and Committer Members Lars Vogel and Pascal  Rapicault.</p>

<p>Take advantage of this excellent learning opportunity and register for an Eclipse training class today!</p>


	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/community/training/classes.php">The Schedule</a></li>
			
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

