<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Register for the Eclipse Spring Training Series";
	$pageKeywords	= "eclipse, training, rcp, equinox, osgi, modeling";
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
			The Eclipse Foundation and Eclipse member companies are pleased to announce the spring 2010
			training class series.  The training is an excellent opportunity for software
			developers and architects to learn more about Eclipse Rich Client Platform (RCP), Equinox
			&amp; OSGi and Modeling technologies.
			Eclipse experts	will lead the sessions, providing practical experience through classroom
			instruction and hands-on labs. Virtual and on-site classes have been scheduled in
			several countries from April 12 to May 28, 2010. 
		</p>
		<p>
			Students who register at least 3 weeks in advance will receive a 10% discount on the
			registration price.  <a href="http://www.eclipse.org/community/training/classes.php">See
			the schedule</a> for a complete list of courses and course descriptions.	
		</p>
		<p>
			Eclipse members participating in the training series are AvantSoft, EclipseSource,
			Industrial TSI, Obeo, The RCP Company, Soyatec and	Weigle Wilczek.
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
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="http://www.eclipse.org/community/training/classes.php">Eclipse Training Series, Spring 2010</a></li>
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
