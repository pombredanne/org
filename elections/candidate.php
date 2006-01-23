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
	$id = $_GET['id'];
	$year = "2006";
	$candidate = get_candidate($id, $year);
	$candidates_summary = get_candidates_short_summary_as_html($year);
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "$year Board Candidate: $candidate->name";
	$pageKeywords	= "article, articles, tutorial, tutorials, how-to, howto, whitepaper, whitepapers, white, paper";
	$pageAuthor		= "Type your name here";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	$type_name = strcmp($type, 'committer') == 0 ? 'committer' : 'add-in provider';
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<!--<div id="maincontent">-->
	<div id="midcolumn">
		<img src="$candidate->image" width="150" align="right">
		<h1>$pageTitle</h1>
		<p>$candidate->title</p>
		<em>Nominee for $type_name representative.</em>
		<p>$candidate->eclipse_affiliation</p>
		<table border="0">
			<tr valign="top"><td>e-mail:</td><td><a href="mailto:$candidate->email">$candidate->email</a></td></tr>
			<tr valign="top"><td>Phone:</td><td>$candidate->phone</td></tr>
			<tr valign="top"><td>Contact:</td><td>$candidate->contact</td></tr>
		</table>
		
		<div class="homeitem3col">
			<h3>Affiliation</h3>
			<blockquote>$candidate->affiliation</blockquote>
		</div>
		
		<div class="homeitem3col">
			<h3>About the candidate</h3>
			<blockquote>$candidate->bio</blockquote>
		</div>
		
		<div class="homeitem3col">
			<h3>Vision</h3>
			<blockquote>$candidate->vision</blockquote>
		</div>
	</div>
	
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Candidates</h6>
			$candidates_summary
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
?>
