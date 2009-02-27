<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Global Eclipse Training Series";
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
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<h2>Community Bulletin</h2>

		<p>
			The Eclipse Foundation and Eclipse member companies are partnering to provide a series of
			training classes around the world.  The training is an excellent opportunity for software
			developers,	architects and tool vendors to learn more about RCP, Equinox OSGi and Modeling.
			Eclipse experts	will lead the sessions, teaching theoretical knowledge as well as
			providing practical experience through hands-on labs. Classes have been scheduled in
			19 different cities from April 6 to May 29, 2009. 
		</p>
		<p>
			Students who register before March 20, 2009 will receive a 5% discount on the
			registration price.  <a href="http://www.eclipse.org/community/training/2009spring.php">See
			the schedule</a> for a complete list of courses and course descriptions.	
		</p>
		<p>
			Eclipse members participating in the training series are ANCIT Consulting, Anyware Technologies, AvantSoft
			(Eclipse University), EclipseSource, eteration, Gerhardt Informatics, Industrial TSI,
			itemis, Obeo, The RCP Company, Soyatec, Third Millennium and
			Weigle Wilczek.
		</p>
		<p>
			Take advantage of this excellent learning opportunity and register for an Eclipse training
			class today!
	</div>
		
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="/community/training/2009spring.php">Eclipse Training, Spring 2009</a></li>
			</ul>
		</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php

