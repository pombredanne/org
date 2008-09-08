<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "New Global Eclipse Training Series Launch in 31 Cities";
$pageKeywords	= "global eclipse training";
$pageAuthor		= "Ian Skerrett";

# Add page-specific Nav bars here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
# $Nav->addCustomNav("My Link", "mypage.php", "_self");
# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

# End: page-specific settings
#

# Paste your HTML content between the EOHTML markers!
ob_start();
?>
		<style>
		.paddedlist {margin-left:10px;margin-top:-10px;}
		.paddedlist li {padding-bottom:3px; }
		p {padding-bottom:10px;}
		</style>
<div id="widecontent">
	<div id="midcolumnwide">
		<h2>Press Release</h2>
	
		<center>
		<h1><?=$pageTitle?></h1>
		</center>
		
		<h2>Eclipse Foundation members offer courses on Eclipse RCP, Equinox and Eclipse Modeling</h2>
		
		<p><strong>Ottawa, Canada - September 9, 2008 - </strong>The Eclipse Foundation, in partnership with 12 Eclipse Foundation members, is pleased to announce a new Eclipse Training Series to be held in 31 cities around the world.   The instructor-led training courses will be held from November 3 to December 8, 2008 and feature classes on Eclipse RCP (Basic and Advanced), Eclipse Equinox and Eclipse Modeling technologies. </p>
		<p>A complete schedule of courses and course descriptions are <a href="http://www.eclipse.org/community/training/2008fall.php">now available</a>.  Students who register before October 3, 2008 will receive a 5% discount on the registration price.</p>
		<p>The participating members are ANCIT Consulting, Anyware Technologies, AvantSoft (Eclipse University), Gerhardt Informatics, Industrial TSI, Innoopract, itemis, Jeff McAffer, Obeo, The RCP Company, Soyatec and Weigle Wilczek.</p>
		
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Information about Eclipse can be found at <a href="http://www.eclipse.org/">www.eclipse.org</a></p>
		<br />
		<center># # #</center> 
		<br />All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		
		<p><b>Press Contact</b><br>
		Chantal Yang<br>
		Page One Public Relations<br>
		650-565-9800 x752<br>
		<a href="mailto:chantal@pageonepr.com">chantal@pageonepr.com</a><br>
		<br>
	</div>
	<div id="rightcolumnwide">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="/community/training/2008fall.php">Eclipse Training Series November 2008</a></li>
			</ul>
		</div>
	</div>
</div>


<? 
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

