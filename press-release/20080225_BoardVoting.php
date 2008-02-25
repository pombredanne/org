<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Voting Opens for the Eclipse Board of Directors Election";
	$pageKeywords	= "eclipse, board, election, voting";
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
			Voting is now open for the 2008 Eclipse Foundation elections for board members.  There are 8 individuals running for 4
			Committer board seats and 5 individuals running for 4 Add-in Provider board seats.  Elected representatives will hold office
			for a term of 1 year.  View the <a href="http://www.eclipse.org/org/elections/nominees.php">
			Candidates page</a> for a description of the vision and biography of each nominee.
		</p>

		<p>
			Each eligible voter will be provided with a URL, userid and password to vote in the Eclipse board election.<br>
			(more details? email address for questions?)
		</p>
		<p>
			Voting closes March 7, 2008 at 3:00 pm Eastern time.  The new board representatives will be announced at the
			Annual General Meeting for Membership, March 17 at EclipseCon, in Santa Clara, California.  Get your votes in today!
		</p>
		<br><br>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/elections/">Election Home</a></li>			
				<li><a href="http://www.eclipse.org/org/elections/nominees.php">Candidates</a></li>
				<li><a href="http://www.eclipse.org/org/elections/keydates.php">Key Dates</a></li>
				<li><a href="http://www.eclipse.org/org/elections/election_process.php">Election Process</a></li>
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
