<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Register for the Eclipse Spring 2011 Training Series";
	$pageKeywords	= "eclipse, training, rcp, osgi, modeling";
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

		<h2>Community Bulletin</h2>
	
		<p>
			The Eclipse Foundation and Eclipse member companies are pleased to announce the <a href="http://www.eclipse.org/community/training/classes.php">Spring 2011
			training class series</a>.  These training classes are an excellent opportunity for software
			developers and architects to learn more about Eclipse Rich Client Platform (RCP), Eclipse Equinox, OSGi and Modeling technologies.
			Eclipse experts	will lead the sessions, providing practical experience through classroom
			instruction and hands-on labs. Virtual and on-site classes have been scheduled in
			several countries from April 25 to May 26, 2011. 
		</p>
		<p>
			Students who register at least 2 weeks in advance will receive a 10% discount on the
			registration price.  <a href="http://www.eclipse.org/community/training/classes.php">See
			the schedule</a> for a complete list of courses and course descriptions.	
		</p>
		<p>
			Eclipse members participating in the training series are <a href="http://www.avantsoft.com/" target="blank">AvantSoft</a>,
			<a href="http://eclipsesource.com/en/services/eclipse-training/" target="blank">EclipseSource</a>, <a href="http://www.jasmineconseil.com/" target="blank">
			Jasmine Conseil</a>, <a href="http://www.industrial-tsi.com/" target="blank">Industrial TSI</a>, <a href="http://www.obeo.fr/" target="blank">Obeo</a>, <a href="http://www.opcoach.com/" target="blank">OPCoach</a>, <a href="http://rcp-company.com/" target="blank">The
			RCP Company</a> and <a href="http://www.rcp-vision.com" target="blank">RCP Vision</a>
		</p>
		<p>
			Take advantage of this excellent learning opportunity and register for an Eclipse training
			class today!
		</p>
		<br><br>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/community/training/classes.php">Eclipse Training, Spring 2011</a></li>
			</ul>
		</div>
		<a href="../../community/training/classes.php">
		<img src="../../community/training/traininggraphic_125x125.png" alt="Eclipse Training" border="0">
		</a>
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
