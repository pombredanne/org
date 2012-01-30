<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Voting is Open for the Eclipse Community Awards";
	$pageKeywords	= "eclipse, community, awards, EclipseCon, vote, 2012";
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
	</style>
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
	
		<p>Nominations for the Eclipse Community Awards are complete and <a href="http://www.surveymonkey.com/s/eclipseawards2012" target="_blank">voting</a> has opened for the individual and project category nominees. Congratulations to all the worthy candidates! Show your appreciation to the people that have made Eclipse a stronger community by casting your vote.</p>

		<p>More details about the awards and the nomination process can be found on the <a href="/org/foundation/eclipseawards/" target="_blank">awards page</a>. Voting for the Eclipse Community Awards will be open until <strong>February 24, 2012 at 5:00pm EST</strong> and the winner will be announced March 26, 2012 at EclipseCon.</p>
		
		<p><a href="http://www.surveymonkey.com/s/eclipseawards2012" target="blank">
		<img src="/org/foundation/eclipseawards/images/votenow.jpg"></a>
		</p>		
		
		<p>The qualified nominees are:</p>	
		
		<h3><a href="http://marketplace.eclipse.org/nominations/top-committer" target="blank">Top Committer</a></h3>
		<ul>	
			<li>Sven Efftinge</li>
			<li>Silenio Quarti</li>
			<li>Markus Schorn</li>
			<li>Kim Moir</li>
			<li>Zhao Zhongwei</li>
			<li>Daniel Megert</li>	
		</ul>

		<!--
		<h3><a href="http://marketplace.eclipse.org/nominations/top-contributor" target="blank">Top Contributor</a></h3>
		<ul>
			<li>Alex Blewitt</li>
			<li>Stephan Herrmann</li>
		</ul>
		-->
		<h3><a href="http://marketplace.eclipse.org/nominations/top-newcomer-evangelist" target="blank">Top Newcomer Evangelist</a></h3>
		<ul>
			<li>Russell Bateman</li>
			<li>Lars Vogel</li>
			<li>Lu Yang</li>
		</ul>

		<h3><a href="http://marketplace.eclipse.org/nominations/most-innovative-project" target="blank">Most Innovative New Feature or Eclipse Project</a></h3>
		<ul>
			<li><a href="/projects/project.php?id=technology.jubula">Jubula</a></li>
			<li><a href="/projects/project.php?id=technology.recommenders">Code Recommenders</a></li>
			<li><a href="/projects/project.php?id=eclipse.orion">Orion</a></li>
			<li><a href="/projects/project.php?id=tools.xtend">Xtend</a></li>
			<li><a href="/projects/project.php?id=modeling.tmf.xtext">Xtext</a></li>
			<li><a href="/projects/project.php?id=mylyn.docs.intent">Intent</a></li>
			<li><a href="/projects/project.php?id=technology.sapphire">Saphire</a></li>
			<li><a href="/projects/project.php?id=mylyn.context.mft">Model Focusing Tools</a></li>			
		</ul>

		<h3><a href="http://marketplace.eclipse.org/nominations/most-open-project" target="blank">Most Open Project</a></h3>
		<ul>
			<li><a href="/projects/project.php?id=rt.ecf">Eclipse Communication Framework</a></li>
			<li><a href="/projects/project.php?id=modeling.gmp.gmf-tooling">GMF Tooling</a></li>
			<li><a href="/projects/project.php?id=tools.cdt">C/C++ Development Tooling (CDT)</a></li>	
		</ul>
		
	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="../foundation/eclipseawards/index.php">Eclipse Community Awards</a></li>
				<li><a href="../foundation/eclipseawards/pastwinners.php">Past Winners</a></li>
			</ul>
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
