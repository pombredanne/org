<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Voting for the Individual Eclipse Community Awards is Open";
	$pageKeywords	= "eclipse, community, awards, EclipseCon, vote";
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
	
		<p>Nominations for the Eclipse Community Awards in the individual category are complete and <a href="http://eclipse.org/go/awardsvote09"
		target="blank">voting</a> has opened for the nominees.  Congratulations to all the worthy candidates!  Show your
		appreciation to the people that have made Eclipse a stronger community by casting your vote.  The nominees are:
		<ul>
			<li><b>Top Ambassador</b>: Nick Boldt, Paul Fremantle, Mik Kersten, Tom Schindl and James Sugrue</li>
			<li><b>Top Committer</b>: Martin Oberhuber, Steffen Pingel, Thomas Watson, Jason Weathersby, Paul Webster and David Williams</li>
			<li><b>Top Contributor</b>: Frank Becker, Benjamin Cabe, Dave Carver, Eugene Kuleshov, Miles Parker and Tom Schindl</li>
		</ul>
		</p>
		
		<p>There is also a Most Prolific Newcomer Evangelist award, which will be presented to the individual that answered the most
		questions posted on the eclipse.newcomer newsgroup.</p>

		<p>More details about the awards and the nomination process can be found
		<a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">online</a>.	 Voting for the Eclipse Community
		Awards will be open until <b>February 27, 2009 at 5:00pm EST</b> and the winner will be announced March 23, 2009 at
		<a href="http://www.eclipsecon.org" target="blank">EclipseCon.</a></p>
		
		<p><a href="http://eclipse.org/go/awardsvote09" target="blank">
		<img src="http://www.eclipse.org/membership/vote2008/vote.jpg"></a>
		</p>
		<br><br>

	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>
				<li><a href="technology.php">Technology Nominations</a></li>
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
