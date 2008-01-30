<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Community Awards";
	$pageKeywords	= "eclipse, community, awards, EclipseCon vote";
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
		<h1>Voting for the Individual Eclipse Community Awards is Open</h1>
	
		<p>Nominations for the Eclipse Community Awards in the individual category are complete and <a href="http://eclipse.org/go/awardsvote08"
		target="blank">voting</a> has opened for the nominees.  Congratulations to all the worthy candidates!  Show your
		appreciation to the people that have made Eclipse a stronger community by casting your vote.  The nominees are:
		<ul>
			<li><b>Top Ambassador</b>: Tim Barnes, Jeff McAffer, Ed Merks and Philippe Ombredanne</li>
			<li><b>Top Committer</b>: Chris Aniszczyk, Nick Boldt, Trip Gilman, Mik Kersten, Paul Webster and David Williams</li>
			<li><b>Top Contributor</b>:  Jacek Pospychala and Remy Chi Jian Suen</li>
		</ul>
		</p>
		
		<p>For background on the nominees, please view the bugs that were used for nomination submissions:<br>
		<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=213056" target="blank">Top Ambassador Nominations</a><br>
		<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=213059" target="blank">Top Committer Nominations</a><br>
		<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=214525" target="blank">Top Contributor Nominations</a><br>
		</p>
		
		<p>There is also a Most Prolific Newcomer	Evangelist award, which will be presented to the individual that answered the most
		questions posted on the eclipse.newcomer newsgroup.</p>

		<p>More details about the awards and the nomination process can be found
		<a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">online</a>.	 Voting for the Eclipse Community
		Awards will be open until <b>February 21, 2008 at 5:00pm EST</b> and the winner will be announced March 17, 2008 at
		<a href="http://www.eclipsecon.org" target="blank">EclipseCon.</a></p>
		
		<p><b><a href="http://eclipse.org/go/awardsvote08" target="blank">VOTE TODAY</a>!</b></p>
		<br><br>

	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Awards Categories</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/technology_nominations.php">Current Technology Nominations</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/individual_awards_guidelines.php">Guidelines for Individual Awards</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/technology_awards_guidelines.php">Guidelines for Technology Awards</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/awards_nominations.php">How to Make a Nomination</a></li>
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
