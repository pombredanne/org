<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	include("scripts/candidate.php");	
	//$id = $_GET['id'];
	$year="2010";
	$candidates = get_all_candidates($year);
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Election Process";
	$pageKeywords	= "foundation, governance, board, elections";
	$pageAuthor		= "Mike & Wayner";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	
	$committer_candidates = get_candidates_list_as_html($candidates, $year, 'committer');
	$addin_candidates = get_candidates_list_as_html($candidates, $year, 'addin');

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<!--<div id="maincontent">-->
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<div class="homeitem3col">
	    <h3>Election Process</h3>
		<The process for the Eclipse Foundation&rsquo;s annual elections is described below.
		<ul>
		<li>Each year, the Eclipse Foundation holds elections for board members representing two very important
		groups within the Eclipse membership: the Committers and the Solutions Members. The number of these
		elected representatives is a ratio of the total number of Strategic Members. 
		<br/><br/>For $year, there are 
		three elected Committer Member representatives and three elected Solutions Member representatives. </li>
		<li>These elections are held pursuant to Sections 3.3 and 3.5 of the Eclipse Foundation <a href="../documents/Eclipse%20BYLAWS%202003_11_10%20Final.pdf">Bylaws</a>.</li>
		<li>The term of office for	these elected board members is one year, commencing April 1. </li>
		<li>Voting for the elected board members is done using <a href="http://en.wikipedia.org/wiki/Single_Transferable_Vote">single transferrable voting</a>.</li>
		<li>Each Solutions Member gets one vote. </li>
		<li>Each Committer Member gets one vote. Note that committers who are employees of Member companies have
		all the rights and privileges (including voting) of a Committer Member. 
		<br/><br/>Individual committers must join the Eclipse Foundation as Committer Members by signing the 
		<a href="../documents/Eclipse%20MEMBERSHIP%20AGMT%202005_06_16%20Final.pdf">Membership Agreement</a> in order to be allowed to vote.
		<br/><br/>All committers who are employees of a single company have their votes collapsed into a single vote 
		in the committer elections.</li>
		<li>Voting is done electronically via a web interface on <a href="/">www.eclipse.org</a>. Each eligible voter is provided
		with the URL and a userid and password with which to vote several days in advance of the voting.</li>
		</ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href=".">Election Home</a></li>
				<li><a href="nominees_unde_construction.php">Candidates</a></li>
				<li><a href="keydates.php">Key Dates</a></li>
				<li><a href="election_process.php">Election Process</a></li>
			</ul>
		</div>
	</div>
	
<!--</div>-->
<script language="javascript">
<!--
	if (top.location != location) {
		top.location.href = document.location.href ;
	}

-->
</script>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
	
	function get_candidates_list_as_html(&$candidates, $year, $type) {
		$type_name = strcmp($type, 'committer') == 0 ? 'Committer' : 'Sustaining Member';
		$html = "<h3>$type_name Candidates</h3><table border=\"0\" cellpadding=\"5\">";
		foreach ($candidates as $candidate) {
			if (strcmp($candidate->type, $type) != 0) continue;
			$html .= <<<EOHTML
				<tr>
					<td valign="top"><a href="candidate.php?year=$year&id=$candidate->id"><img src="$candidate->image" width="75"></a></td>
					<td valign="top" style="border-bottom: dashed 1px #494949;">
						<strong><a href="candidate.php?year=$year&id=$candidate->id">$candidate->name</a></strong>
						<br>$candidate->title
						<p>$candidate->contact</p>
					</td>
				</tr>
EOHTML;
		}
		$html .= "</table>";
		
		return $html;
	}
?>