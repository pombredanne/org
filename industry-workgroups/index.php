<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageTitle 		= "Eclipse Industry Working Groups";
$pageAuthor		= "";
$pageKeywords	= "eclipse, industry, working, groups";

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
<div id="fullcolumn">
	<div id="midcolumn">
	<h1><?=$pageTitle;?></h1>
		<div class="homeitem3col">
			<p>Eclipse IWGs are established to facilitate the collaboration between Eclipse Foundation Members. 
				The collaboration is intended to focus, promote and augment Eclipse technologies to meet 
				the needs of specific industries. The collaboration can take the form of the development of 
				materials for use by a specific community and/or joint marketing programs to promote Eclipse 
				in a certain industry. Unlike Eclipse open source projects that are open to participation by 
				anyone, participation in an Eclipse IWG is open only to Eclipse Members.</p>
			<h3>Current Eclipse Industry Working Groups</h3>
			<div style="margin: 5px 15px 15px 15px; ">
				<table cellspacing=0 width="100%">
					<tr>
						<th width="50%"><strong>Group Name</strong></th>
						<th width="10%"><strong>Homepage</strong></th>
						<th width="10%"><strong>Charter</strong></th>
						<th width="10%"><strong>Mailing List</strong></th>
						<th width="10%"><strong>Wiki</strong></th>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;Automotive</td>
						<td><a href="http://wiki.eclipse.org/Auto_IWG"><img src="/home/categories/images/homepage.gif"></a></td>
						<td><a href="autowg.php"><img src="/home/categories/images/html.png"></a></td>
						<td><a href="https://dev.eclipse.org/mailman/listinfo/auto-iwg"><img src="/home/categories/images/mailinglist.gif"></a></td>
						<td><a href="http://wiki.eclipse.org/Auto_IWG"><img src="/home/categories/images/wiki.gif"></a></td>
					</tr>				
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;Long-Term Support</td>
						<td><a href="http://wiki.eclipse.org/LTS"><img src="/home/categories/images/homepage.gif"></a></td>
						<td><a href="ltsiwg_charter.php"><img src="/home/categories/images/html.png"></a></td>
						<td><a href="https://dev.eclipse.org/mailman/listinfo/lts-iwg"><img src="/home/categories/images/mailinglist.gif"></a></td>
						<td><a href="http://wiki.eclipse.org/LTS"><img src="/home/categories/images/wiki.gif"></a></td>
					</tr>						
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;Machine-to-Machine</td>
						<td><a href="http://wiki.eclipse.org/Machine-to-Machine"><img src="/home/categories/images/homepage.gif"></a></td>
						<td><a href="m2miwg_charter.php"><img src="/home/categories/images/html.png"></a></td>
						<td><a href="https://dev.eclipse.org/mailman/listinfo/m2m-iwg"><img src="/home/categories/images/mailinglist.gif"></a></td>
						<td><a href="http://wiki.eclipse.org/Machine-to-Machine"><img src="/home/categories/images/wiki.gif"></a></td>
					</tr>						
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;Polarsys</td>
						<td><a href="http://www.polarsys.org"><img src="/home/categories/images/homepage.gif"></a></td>
						<td><a href="polarsys_charter.php"><img src="/home/categories/images/html.png"></a></td>
						<td><a href="https://dev.eclipse.org/mailman/listinfo/polarsys-iwg"><img src="/home/categories/images/mailinglist.gif"></a></td>
						<td><a href="http://wiki.eclipse.org/Polarsys"><img src="/home/categories/images/wiki.gif"></a></td>
					</tr>
				</table>
			</div>

			<h3>Inactive Eclipse Industry Working Groups</h3>
				<div style="margin: 5px 15px 15px 15px; ">
				<table cellspacing=0 width="100%">
					<tr>
						<th width="50%"><strong>Group Name</strong></th>
						<th width="10%"><strong>Homepage</strong></th>
						<th width="10%"><strong>Charter</strong></th>
						<th width="10%"><strong>Mailing List</strong></th>
						<th width="10%"><strong>Wiki</strong></th>
					</tr>		
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;Mobile (Pulsar)</td>
						<td><a href="http://wiki.eclipse.org/EMIWG"><img src="/home/categories/images/homepage.gif"></a></td>
						<td><a href="mobilewg.php"><img src="/home/categories/images/html.png"></a></td>
						<td><a href="https://dev.eclipse.org/mailman/listinfo/mobile-iwg"><img src="/home/categories/images/mailinglist.gif"></a></td>
						<td><a href="http://wiki.eclipse.org/EMIWG"><img src="/home/categories/images/wiki.gif"></a></td>
					</tr>	
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;SOA</td>
						<td><a href="soawg.php"><img src="/home/categories/images/homepage.gif"></a></td>
						<td><a href="soawg.php"><img src="/home/categories/images/html.png"></a></td>
						<td><a href="https://dev.eclipse.org/mailman/listinfo/soa-iwg"><img src="/home/categories/images/mailinglist.gif"></a></td>
						<td></td>
					</tr>	
				</table>
			</div>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Working Group Process Document</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/industry-workgroups/industry_wg_process.php">Working Group Process Document</a></li>
			</ul>
		</div>
	</div>
</div>
<? $html = ob_get_clean();
	$App->generatePage($theme, $Menu, NULL, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>