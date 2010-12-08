
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Community Awards 2011 Open for Nominations";
	$pageKeywords	= "eclipse, eclipsecon, awards, community, nomination, nominate";
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

		<p>The Eclipse Community Awards 2011 have opened for nominations.  Help Eclipse honour the best individuals,
		projects and technologies from our community by telling us about your favourites.</p>
		
		<p>
		There are 9 titles to be awarded this year:
		<ul>
			<li><a href="http://marketplace.eclipse.org/node/add/individual-nominations">Individual Awards</a> - Top Committer, Top Contributor and Top Newcomer Evangelist</li>
			<li><a href="http://marketplace.eclipse.org/node/add/project-nominations">Project Awards</a> - Most Innovative New Feature or Project and Most Open Project</li>
			<li><a href="http://marketplace.eclipse.org/node/add/individual-nominations">Technology Awards</a> - Best Application, Best Developer Tool, Best Mobile Product and Best Modeling Product</li>
		</ul>
		</p>
		
		<p>The Individual and Project Award winners will be determined by a vote of the community. The Technology
		Award winners will be determined by a panel of judges selected from Eclipse-oriented editors and Eclipse
		project leaders.  All winners will be announced at <a href="http://www.eclipsecon.org/2011/">EclipseCon 2011</a>.</p>
		
		<p>The deadline for nominations is <b>January 28, 2011</b>.  You can check out the <a href="../foundation/eclipseawards/index.php">
		awards page</a> for further details on the categories and the awards guidelines.</p>
			
 <br><br>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="../foundation/eclipseawards/index.php">Eclipse Awards</a></li>							
			</ul>
		</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

