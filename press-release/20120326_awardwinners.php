<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse  Community Award Winners Announced";
	$pageKeywords	= "eclipse, community, awards, winners";
	$pageAuthor		= "Christopher Guindon";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<style>
		.paddedlist li {	padding-bottom:7px;	}
		#midcolumn ul ul{padding-bottom:0px;}
	</style>
	
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
<p> <strong>Reston,  Virginia - March 26, 2012</strong>&nbsp;-  The Eclipse Foundation congratulates the winners of the annual  Eclipse Community Awards, which recognize the top individuals,  projects and technologies in the ecosystem. Recipients were honored  at an awards ceremony March 26 on the opening day of EclipseCon 2012.</p>
<p> The  Individual Awards acknowledge people that give their time and  resources to make Eclipse a better community. Winners were selected  by their peers in an online vote.</p>
<ul>
  <li><strong>Top Committer</strong>: Sven Efftinge</li>
    <ul><li> The finalists are Daniel Megert and Kim Moir</li></ul>
  <li><strong>Top Contributors</strong>: Stephan Herrmann and Alex Blewitt</li>
  <li><strong>Top Newcomer Evangelist</strong>: Lars Vogel</li>
    <ul><li>The finalists are Russell Bateman and Lu Yang</li></ul>
  <li><strong>Lifetime Contribution Award</strong>: Ed Merks</li>
</ul>
<p> The  Project Awards recognize Eclipse projects for introducing innovative  new features and fostering an open community. Finalists were selected  by their peers in an online vote.</p>
<ul>
  <li><strong>Most Open Project</strong>: <a href="http://www.eclipse.org/ecf/">Eclipse Communication Framework</a></li>
    <ul><li>The finalists are <a href="http://www.eclipse.org/cdt/">C/C++ Development Tooling</a> and <a href="http://www.eclipse.org/projects/project.php?id=modeling.gmp.gmf-tooling">GMF Tooling</a></li></ul>
  <li><strong>Most  	Innovative New Feature or Eclipse Project</strong>: <a href="http://www.eclipse.org/recommenders/">Eclipse Code Recommenders</a></li>
    <ul><li>The finalists are <a href="http://www.eclipse.org/orion/">Orion</a> and <a href="http://www.eclipse.org/Xtext/">Xtend</a></ul>
</ul>
<p> Technology  Awards recognize Eclipse-based open source projects and commercial  products. Winners were selected by a panel of judges from the Eclipse  community. Products were evaluated on their user interfaces,  innovation and completeness of their solutions.</p>
<ul><li><strong>Best Developer Tool</strong>:&nbsp;<a href="http://www.chrononsystems.com/">Chronon Time travelling Debugger</a></li>
    <ul><li>The finalists are <a href="http://bndtools.org/">Bndtools</a> and <a href="http://www.arm.com/products/tools/software-tools/ds-5/community-edition/index.php">DS-5 Community Edition</a>.</li></ul>
  <li><strong>Best  	Modeling Product</strong>:&nbsp;<a href="http://maintainj.com/">MaintainJ</a></li>
    <ul>
      <li> The  		finalist is&nbsp;<a href="http://www.umlet.com/">UMLet</a></li>
    </ul>
  <li> <strong>Best  	Application</strong>:&nbsp;<a href="http://justinmind.com/">Justinmind  	Prototyper</a></li>
    <ul>
      <li> The  		finalists are&nbsp;<a href="http://www.bonitasoft.com/">Bonita  		Open Solutions</a> and <a href="http://www.diligent-it.com/files/ea2012/CCTVnet.html">CCTVnet</a></li>
    </ul>
</ul>
<p> Eclipse  is an open source community, whose projects are focused on building  an open development platform comprised of extensible frameworks,  tools and runtimes for building, deploying and managing software  across the lifecycle. A large, vibrant ecosystem of major technology  vendors, innovative start-ups, universities and research institutions  and individuals extend, complement and support the Eclipse Platform.</p>
<p> The  Eclipse Foundation is a not-for-profit, member supported corporation  that hosts the Eclipse projects. Full details of Eclipse and the  Eclipse Foundation are available at <a href="http://www.eclipse.org/"><strong>www.eclipse.org</strong></a>.</p>
<p> All  company/product names and service marks may be trademarks or  registered trademarks of their respective companies</p>
	
	
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community Awards</a></li>
			</ul>
		</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php
/*
 * Created on 20-Jan-2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
