<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "Eclipse Industry Working Groups";
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
<h3><a name="WorkingGroups"></a>Eclipse Industry Working Groups</h3>
<div style="margin: 5px 15px 15px 15px; ">

<table cellspacing=0 width="100%">
	<tr>
		<th width="50%">Group Name</th>
		<th width="10%">Homepage</th>
		<th width="10%">Mailing List</th>
		<th width="10%">Newsgroup</th>
	</tr>
	<tr>
		<td>Mobile Industry Working Group</td>
		<td><a href="http://wiki.eclipse.org/MobileIndustryWG"><img src="http://www.eclipse.org/home/categories/images/wiki.gif"></a></td>
		<td><a href="https://dev.eclipse.org/mailman/listinfo/mobile-iwg"><img src="http://www.eclipse.org/home/categories/images/mailinglist.gif"></a></td>
		<td></td>
	</tr>	

</table>

</div>
</div>



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