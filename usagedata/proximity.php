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
# proximity.php
#
# Author: 		Wayne Beaton
# Date:			June 6, 2008
#
# Description:
#
#
#****************************************************************************

# Begin: page-specific settings.  Change these.
$pageTitle 		= "Usage Data Collector Project Pairings Report";
$pageKeywords	= "Eclipse, usage data, usagedata, cortez";
$pageAuthor		= "Wayne Beaton";
ob_start();
?>
<link
	rel="stylesheet" type="text/css" href="layout.css" media="screen" />
<div id="maincontent">
<div id="midcolumn">

<? 
	$pairs = simplexml_load_file("reports/proximity.xml");
?>

<h1><?= $pageTitle ?></h1>

<p>Generated on <?= $pairs['generated'] ?></p>
	
<p>This page shows how closely related projects are &quot;in the wild&quot;. 
The table shows the number of users who are using the projects together.
Click on the column headers to change how the data is sorted.
Note that these results are preliminary.</p>

<p>This data is also available in <a href="reports/proximity.xml">XML form</a>.</p>

<?
	if (array_key_exists('sort', $_GET)) {
		$rows = array();
		foreach ($pairs as $row) {
			$rows[] = array('a'=>$row['a'],'b'=>$row['b'],'users'=>$row['users']);
		}
		$pairs = $rows;
		$sort = $_GET['sort'];
		
		function sort_a($a, $b) {
			$result = strcasecmp($a['a'], $b['a']);
			if ($result == 0) return sort_users($a, $b);
			return $result;
		}
		function sort_b($a, $b) {
			return strcasecmp($a['b'], $b['b']);
		}
		function sort_users($a, $b) {
			$aa = (int)$a['users'];
			$bb = (int)$b['users'];
			return $aa > $bb ? -1 : 1;
		}
		usort($pairs, "sort_$sort");
	}
		
	createTable($pairs, array("Bundle"=>"a", "Is seen with..."=>"b", "Users"=>"users"));
	
	function createTable(&$rows, $columns) {
		echo "<table border=\"1\">";
		echo "<tbody>";
		echo "<tr>";
		foreach($columns as $title=>$attribute) {
			echo "<th><a href=\"?sort=$attribute\">$title</a></th>";
		}
		echo "</tr>";
			
		foreach($rows as $row)  {
			echo "<tr>";
			foreach($columns as $title=>$attribute) {
				echo "<td>$row[$attribute]</td>";
			}
			echo "</tr>";
		} 
		echo "</tbody>";
		echo "</table>";
	}
?>

</div>
</div>
<?php
$html = ob_get_contents();
ob_end_clean();
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>