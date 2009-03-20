<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Foundation Announces 2009 Board Member Election Results";
$pageKeywords	= "eclipse, foundation, board, election, results";
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

		<p>The Eclipse Foundation announced the results of the Committer and Sustaining Members elections for
		representatives to the board of directors.
		</p>
		
		<p>Congratulations to Chris Aniszczyk, Doug Gaff and Ed Merks for being re-elected as Committer
		representatives. Boris Bokowski will join them as a new Committer representative. Mike Taylor will be
		returning as a Sustaining Member representative, joined by the newly elected
		Hans-Joachim Brede, Hans Kamutzki and Shawn Pearce.
		</p>
		
		<p>The Eclipse Foundation would also like to recognize the contributions of Robert Day, Mik Kersten,
		Jeff McAffer, Emma McGrattan and Tracy Ragan	who are leaving the Eclipse Board after having served
		positions last year. The Eclipse community is very grateful for the many hours of effort these
		individuals contributed.
		</p>

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/elections/">2009 Eclipse Foundation Elections</a></li>
			</ul>
		</div>
	</div>	
	
</div>


		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

