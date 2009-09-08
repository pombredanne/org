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
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<h2>Community Bulletin</h2>

		<p>
			The Eclipse Foundation and Eclipse member companies are pleased to announce the fall 2009
			training class series.  The training is an excellent opportunity for software
			developers and architects to learn more about Eclipse Rich Client Platform (RCP), Equinox
			&amp; OSGi and Modeling technologies.
			Eclipse experts	will lead the sessions, providing practical experience through classroom
			instruction and hands-on labs. Classes have been scheduled in
			23 different cities around the world from October 19 to December 4, 2009. 
		</p>
		<p>
			Students who register at least 3 weeks ahead will receive a 10% discount on the
			registration price.  <a href="http://www.eclipse.org/community/training/classes.php">See
			the schedule</a> for a complete list of courses and course descriptions.	
		</p>
		<p>
			Eclipse members participating in the training series are ANCIT Consulting, AvantSoft
			(Eclipse University), EclipseSource, Gerhardt Informatics, Industrial TSI,
			itemis, Obeo, The RCP Company, Soyatec and 	Weigle Wilczek.
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
				<li><a href="/community/training/classes.php">Eclipse Training, Fall 2009</a></li>
			</ul>
		</div>
	</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php

