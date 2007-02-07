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
	$pageTitle 		= "$year Eclipse Foundation Elections";
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
		<p>Each year, the Eclipse Foundation holds elections for board members representing two very important
		groups within the Eclipse membership: the committers and the add-in providers. The terms of office for
		these elected board members is one year, commencing April 1.</p>
		<p>
		Candidates and the community are encouraged to discuss the issues on the eclipse.foundation newsgroup 
		(<a href="news://news.eclipse.org/eclipse.foundation">news</a>, <a href="/newsportal/thread.php?group=eclipse.foundation">html</a>).
		<div class="homeitem3col">
	    <h3>$year Elections</h3>
		<p>&nbsp;&nbsp;Information concerning the 2007 elections is contained within the links below:</p>
		<ul>
		<li>Voting is now open! If you are a Committer or an Add-In Provider, please visit our 
		<a href="../../vote2007/">elections page</a>.</li>
		<li>The <a href="nominees.php">candidates</a> for the 2007 election.</li>
		<li>The <a href="keydates.php">key dates</a> for the 2007 election.</li>
		<li>The Eclipse Foundation <a href="election_process.php">election process.</a></li>
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