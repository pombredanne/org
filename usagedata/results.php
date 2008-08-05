<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2008 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Wayne Beaton (Eclipse Foundation)- initial API and implementation
 *******************************************************************************/

#*****************************************************************************
#
# results.php
#
# Author: 		Wayne Beaton
# Date:			June 6, 2008
#
# Description:
#
#
#****************************************************************************

# Begin: page-specific settings.  Change these.
$pageTitle 		= "Usage Data Collector Results";
$pageKeywords	= "Eclipse, usage data, usagedata, cortez";
$pageAuthor		= "Wayne Beaton";

$kind = 'view';
if (array_key_exists('kind', $_GET)) $kind = $_GET['kind'];
if (!in_array($kind, array('command', 'perspective', 'view', 'editor'))) $kind = 'view';

$sort = 'element';
if (array_key_exists('sort', $_GET)) $sort = $_GET['sort'];
if (!in_array($sort, array('element', 'use', 'users'))) $sort = 'element';

$url = '/org/usagedata/reports/data/' . $kind . 's.csv';
$file = $_SERVER['DOCUMENT_ROOT'] . $url;

$csv = file_get_contents($file);
$csv = split("\n", $csv);

$headers = current($csv);
$headers = split(",", $headers);

class Item {
	var $element;
	var $useCount;
	var $userCount;
}

$items = array();

while ($row = next($csv)) {
	$row = split(",", $row);
	
	$item = new Item();
	$item->element = current($row);
	$item->useCount = next($row);
	$item->userCount = next($row);
	
	$items[] = $item;
}

function sort_by_element($a, $b) {
	return strcasecmp($a->element, $b->element);	
}

function sort_by_use($a, $b) {
	if ($a->useCount == $b->useCount) return 0;
	return $a->useCount < $b->useCount ? 1 : -1;	
}

function sort_by_users($a, $b) {
	if ($a->userCount == $b->userCount) return 0;
	return $a->userCount < $b->userCount ? 1 : -1;	
}

usort($items, "sort_by_$sort");

ob_start();
?>
<link
	rel="stylesheet" type="text/css" href="layout.css" media="screen" />
<div id="maincontent">
<div id="midcolumn">

<? 
	$file_date = $App->getFormattedDate(filemtime($file));

	$csv = file_get_contents($file);
	$csv = split("\n", $csv);
?>

<h1><?= ucfirst($kind) ?>s</h1>

<p>Data captured on <?= $file_date ?>.</p>

<p>See also:</p>
<ul>
<li><a href="?kind=command&sort=<?= $sort ?>">Commands</a></li>
<li><a href="?kind=perspective&sort=<?= $sort ?>">Perspectives</a></li>
<li><a href="?kind=editor&sort=<?= $sort ?>">Editors</a></li>
<li><a href="?kind=view&sort=<?= $sort ?>">Views</a></li>
</ul>

<p>This information is available in <a href="<?= $url ?>">CSV format</a>.</p>
<table border="1">
	<tr><th><a href="?kind=<?= $kind ?>&sort=element">Element</a></th><th><a href="?kind=<?= $kind ?>&sort=use">Use Count</a></th><th><a href="?kind=<?= $kind ?>&sort=users">User Count</a></th></tr>
	<?
		foreach($items as $item) {
			$useCount = number_format($item->useCount);
			$userCount = number_format($item->userCount);
			echo "<tr><td>$item->element</td><td align=\"right\">$useCount</td><td align=\"right\">$userCount</td></tr>";
		}
	?>
</table>	

</div>

<? include "rightcol.php"; ?>

</div>

<?php
$html = ob_get_contents();
ob_end_clean();
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>