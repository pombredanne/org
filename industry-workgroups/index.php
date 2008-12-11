<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "Eclipse Working Groups";
$pageAuthor		= "";
$pageKeywords	= "eclipse, working, groups";

ob_start();
?>
<style>
	
	th {
		text-align:left;
	}
	tr td, tr th {
		border-bottom:1px solid grey;
	}
	
	
</style>
<div id="midcolumn">
<h1><?=$pageTitle;?></h1>
<div class="homeitem3col">
<h3><a name="WorkingGroups"></a>Eclipse Working Groups</h3>
<div style="margin: 5px 15px 15px 15px; ">

<table cellspacing=0 width="100%">
	<tr>
		<th width="50%"><a href="explain/projects-table-columns.php">Group Name</a></th>
		<th width="10%"><a href="explain/projects-table-columns.php">Homepage</a></th>
		<th width="10%"><a href="explain/projects-table-columns.php">Mailing List</a></th>
		<th width="10%"<a href="explain/projects-table-columns.php">Newsgroup</a></th>
	</tr>
	
	<tr>
		<td>UI Best Practices</td>
		<td align="center"><a href="http://wiki.eclipse.org/User_Interface_Best_Practices_Working_Group"><img src="http://www.eclipse.org/home/categories/images/wiki.gif"></a></td>
		<td align="center"><a href="https://dev.eclipse.org/mailman/listinfo/ui-best-practices-working-group"><img src="http://www.eclipse.org/home/categories/images/mailinglist.gif"/></a></td>
		<td></td>
	</tr>
</table>

</div>
</div>

<div class="homeitem3col">
<h3><a name="WorkingGroups"></a>Proposed Working Groups</h3>
<div style="margin: 5px 15px 15px 15px; ">

<table cellspacing=0>
	<tr>
		<th width="70%"><a href="explain/projects-table-columns.php" class="info">Group Name</a></th>
		<th width="30%"><a href="explain/projects-table-columns.php" class="info">Homepage</a></th>
	</tr>
	
	<tr>
		<td>Eclipse Mobile Industry Working Group</td>
		<td><a href="http://www.eclipse.org/org/industry-workgroups/mobilewg.php"><img src="http://www.eclipse.org/home/categories/images/wiki.gif"></a></td>
		<td></td>
	</tr>
</table>

</div>
</div>

<div class="homeitem3col">
	<h3>Working Group Process Document</h3>
	<ul>
		<li><a href="http://www.eclipse.org/org/industry-workgroups/industry_wg_process.php">Working Group Process Document</a></li>
	</ul>
</div>
</div>

<? $html = ob_get_clean();
	$App->generatePage($theme, $Menu, NULL, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>