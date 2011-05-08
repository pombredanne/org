<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
* Copyright (c) 2005, 2011 Eclipse Foundation and others.
* All rights reserved. This program and the accompanying materials
* are made available under the terms of the Eclipse Public License v1.0
* which accompanies this distribution, and is available at
* http://www.eclipse.org/legal/epl-v10.html
*
* Contributors:
*    Wayne Beaton (Eclipse Foundation) - initial API and implementation
*******************************************************************************/
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	
$App = new App();
$Nav = new Nav();
$Menu = new Menu();

include($App->getProjectCommon());

$pageTitle 		= "Eclipse Foundation Staff";
$pageKeywords	= "foundation, staff";
$pageAuthor		= "Wayne Beaton";

function dumpStaffInfo() {
	$staff = simplexml_load_file(dirname(__FILE__) . '/staff.xml');
	echo "<div class=\"homeitem\">";
	foreach ($staff as $member) {
		echo "<h3><a name=\"$member->id\"></a>$member->name</h3>";
		if ($member->image)
			echo "<img src=\"$member->image\" align=\"right\">";
		if ($member->title)
			echo "<p><em>$member->title</em></p>";

		echo "<blockquote>$member->description</blockquote>";
	}
	echo "</div>";
}

ob_start();
?>
	<div id="midcolumn">
		<h1><?php echo $pageTitle ?></h1>
		<p>The Eclipse Foundation is fortunate to have some very talented people working
		full-time on behalf of the Eclipse community. Below is the list of our staff.</p>
		<p>Eclipse email addresses all follow the firstname.lastname@eclipse.org convention.</p>
		
		<?php dumpStaffInfo(); ?>
	</div>

<?php
	# Paste your HTML content between the EOHTML markers!
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
