<?php  			

set_error_handler("ignoreDumbStuffHandler");
function ignoreDumbStuffHandler($errno, $errmsg, $filename, $linenum, $vars) {
  $errortype = array (
    E_ERROR => 'Error',
    E_WARNING => 'Warning',
    E_PARSE => 'Parsing Error',
    E_NOTICE => 'Notice',
    E_CORE_ERROR => 'Core Error',
    E_CORE_WARNING => 'Core Warning',
    E_COMPILE_ERROR => 'Compile Error',
    E_COMPILE_WARNING => 'Compile Warning',
    E_USER_ERROR => 'User Error',
    E_USER_WARNING => 'User Warning',
    E_USER_NOTICE => 'User Notice',
    E_STRICT => 'Runtime Notice',
    E_RECOVERABLE_ERROR => 'Catchable Fatal Error');
    switch($errno) {
    	case E_NOTICE: // discard NOTICEs
    	case E_STRICT: // discard RUNTIME notices for deprecated usages
    		return;
    	default:
			echo "<p><table cellpadding=10 width=400 bgcolor=#ffcccc><tr><td><font size=+2>Trouble: </font>";
			echo "PHP $errortype[$errno]:<br>$errmsg<br>$filename ($linenum)";
			$mysql_error_func = 'mysql_error_check';
			if(function_exists($mysql_error_func)) {
				$mysql_error_func();
			}
			echo "</table></p>\n";
    }
}
																											require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
	$year="2008";
	$candidates = get_all_candidates($year);
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "$year Board Candidates";
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
		<b>Note:</b> To ensure maximum fairness to all, each list of candidates is presented in a random order.
		<div class="homeitem">
			<a name="Candidates"></a>$committer_candidates
		</div>
		<div class="homeitem">
			$addin_candidates
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
		$type_name = strcmp($type, 'committer') == 0 ? 'Committer' : 'Add-in Provider';
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