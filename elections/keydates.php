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
	$year="2007";
	$candidates = get_all_candidates($year);
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "$year Election Key Dates";
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
		<p>Each year, the Eclipse Founation holds elections for board members representing two very important
		groups within the Eclipse membership: the committers and the add-in providers. The terms of office for
		these elected board members is one year, commencing April 1.</p>
		<div class="homeitem3col">
	    <h3><a name="Dates"></a>Key Dates</h3>
		<p>&nbsp;&nbsp;The key dates for the 2007 elections are:</p>
		<ul>
		<li>December 13, 2006: Nominations open. Nominations are to be sent as an email to emo@eclipse.org, with 
		the subject "Add-In Provider Nomination" or "Committer Nomination". As soon as possible after an individual 
		is nominated, the Foundation will contact the nominee to confirm their willingness to participate in the 
		election and to serve as a add-in provider representative if elected.</li>
		<li>January 17, 2007: Nominations close. The list of nominees and their html pages will be available on the 
		website as soon as possible thereafter, and in no case later than January 24.
		<br>
		<br>Each nominee will be provided with an 
		HTML template which outlines their background and vision for Eclipse as they are nominated. If the nominee
		does not have an HTML editor handy, plain text submissions for formatting by the EMO staff will be accepted 
		via email. Content must be submitted to the Eclipse Foundation via email no later than Friday, January 19th. 
		</li>
		<li>January 24, 2007: List of nominees and their personal pages made available on www.eclipse.org. 
		Discussion of the issues on the eclipse.foundation newsgroup will be encouraged. 
		</li>
		<li>February 7, 2007: Voting begins.</li>
		<li>February 21, 2007: Voting ends. </li>
		<li>February 28, 2007: New representatives announced.</li>
		</ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href=".">Election Home</a></li>
				<li><a href="nominees.php">Candidates</a></li>
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
		$type_name = strcmp($type, 'committer') == 0 ? 'Committer' : 'Add-in provider';
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