<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nominations Open for the Eclipse Community Awards 2010";
	$pageKeywords	= "eclipse, community, awards, nominations, EclipseCon, 2010";
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
		
		<p>The <a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community
		Awards</a> are an annual event designed to show appreciation for contributions that make Eclipse
		a stronger community.  There are three categories of awards - individuals, Eclipse projects and 
		technologies. The Eclipse Foundation is now accepting nominations for the awards, so show your
		gratitude and nominate a person, Eclipse project or product that has made a difference to you.</p>
		
		<p><strong>Individual Award categories:</strong>
		<ul>
		<li>Top Committer</li>
		<li>Top Contributor</li>
		<li>Top Newcomer Evangelist</li>
		</ul>
		<a href="http://www.eclipse.org/org/foundation/eclipseawards/nominate_individual.php">Make an
		Individual Award Nomination</a></p>

		<p><strong>Project Award categories:</strong>
		<ul>
		<li>Most Innovative New Feature or Eclipse Project</li>
		<li>Most Open Project</li>
		</ul>
		<a href="http://www.eclipse.org/org/foundation/eclipseawards/nominate_project.php">Make an
		Project Award Nomination</a></p>
		
		<p><strong>Technology Award categroies:</strong>
		<ul>
		<li>Best Commercial Developer Tool</li>
		<li>Best Open Source Developer Tool</li>
		<li>Best EclipseRT Applicatiom</li>
		<li>Best RCP Application</li>
		</ul>
		<a href="http://www.eclipse.org/org/foundation/eclipseawards/nominate_technology.php">Make a
		Technology Award Nomination</a></p>
		
		<p>Anyone can submit a nomination and you are welcome to nominate your own projects, products and
		applications. More details about the awards and the nomination process can be found on the
		<a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community Awards
		page</a>. Nominations will be accepted until January 29, 2010 and the winners will be announced
		at <a href="http://www.eclipsecon.org">EclipseCon</a>, March 22-25, 2010.</p>
		
	</div>
</div>
<div id="rightcolumn">
	<div class="sideitem">
	<h6>Related Links</h6>
	<ul>
		<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community Awards</a></li>
	</ul>
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
