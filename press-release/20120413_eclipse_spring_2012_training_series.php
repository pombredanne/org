<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Register for the Eclipse Spring 2012 Training Series";
	$pageKeywords	= "eclipse, training, rcp, equinox, osgi, modeling, emf, gef, gmf";
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
		<br/><br/>
		<p>The Eclipse member companies are pleased to announce the <a href="http://www.eclipse.org/community/training/classes.php" target="_blank">Spring 2012 Training Series</a>. These training classes are an excellent opportunity for software developers and architects to learn more about Eclipse Rich Client Platform (RCP), Eclipse BIRT, Eclipse Equinox/OSGi and Modeling technologies. Eclipse experts will lead the sessions, providing practical experience through classroom instruction and hands-on labs. Virtual and on-site classes have been scheduled in several countries from May 21 to June 29, 2012. <a href="http://www.eclipse.org/community/training/classes.php" target="_blank">See the schedule</a> for a complete list of courses and course descriptions.</p>

		<p>Eclipse members participating in the training series are <a href="www.actuate.com/home/" target="_blank">Actuate</a>, <a href="http://www.avantsoft.com/" target="_blank">AvantSoft</a>, <a href="http://eclipsesource.com/en/services/eclipse-training/" target="_blank">EclipseSource</a>, <a href="http://industrial-tsi.com/" target="_blank">Industrial TSI</a>, <a href="http://www.modumind.com/" target="_blank">Modular Mind</a>, <a href="http://www.obeo.fr/" target="_blank">Obeo</a>, <a href="http://www.opcoach.com/">OPCoach</a>, <a href="http://www.rcp-vision.com/?lang=en" target="_blank">RCP Vision</a>, <a href="www.suprematic.net/de" target="_blank">Suprematic Solutions</a>, Third Millenium.</p>

		<p>Take advantage of this excellent learning opportunity and register for an Eclipse training class today!</p>
		
	</div>
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
            	<li><a href="http://www.eclipse.org/community/training/classes.php" target="_blank">Spring 2012 Training Series</a></li>
				<li><a href="www.actuate.com/home/" target="_blank">Actuate</a></li>
                <li><a href="http://www.avantsoft.com/" target="_blank">AvantSoft</a></li>
                <li><a href="http://eclipsesource.com/en/services/eclipse-training/" target="_blank">EclipseSource</a></li>
                <li><a href="http://industrial-tsi.com/" target="_blank">Industrial TSI</a></li>
                <li><a href="http://www.modumind.com/" target="_blank">Modular Mind</a></li>
                <li><a href="http://www.obeo.fr/" target="_blank">Obeo</a></li>
                <li><a href="http://www.opcoach.com/">OPCoach</a></li>
                <li><a href="http://www.rcp-vision.com/?lang=en" target="_blank">RCP Vision</a></li>
                <li><a href="www.suprematic.net/de" target="_blank">Suprematic Solutions</a></li>
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
