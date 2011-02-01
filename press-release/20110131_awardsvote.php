<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Voting is Open for the Eclipse Community Awards";
	$pageKeywords	= "eclipse, community, awards, EclipseCon, vote, 2011";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	

	$html = <<<EOHTML

<style type="text/css">
.switchcontent{display:none;}
</style>

<script type="text/javascript">
function switchMenu(obj) {
	var el = document.getElementById(obj);
	el.style.display = ( el.style.display != "block" )? 'block':'none' 
}
</script>	
	
	<style>
		.paddedlist li {	padding-bottom:7px;	}
	</style>
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
	
		<p>Nominations for the Eclipse Community Awards are complete and
		<a href="http://www.surveymonkey.com/s/eclipseawards2011" target="blank">voting</a> has opened for the individual
		and project category nominees.  Congratulations to all the worthy candidates!  Show your
		appreciation to the people that have made Eclipse a stronger community by casting your vote.</p>

		<p>More details about the awards and the nomination process can be found on the 
		<a href="http://www.eclipse.org/org/foundation/eclipseawards/">awards page</a>.	 Voting for the Eclipse Community
		Awards will be open until <b>February 25, 2011 at 5:00pm EST</b> and the winner will be announced March 21, 2011 at
		EclipseCon.</p>
		
		<p><a href="http://www.surveymonkey.com/s/eclipseawards2011" target="blank">
		<img src="http://www.eclipse.org/org/foundation/eclipseawards/images/votenow.jpg"></a>
		</p>		
		
		<p>The nominees are:</p>	
		
		<h3><a href="http://marketplace.eclipse.org/nominations/top-committer" target="blank">Top Committer</a></h3>
		<ul>	
			<li>John Arthorne</li>
			<li>Laurent Goubet</li>
			<li>Kenn Hussey</li>
			<li>Andrew Niefer</li>
			<li>Shawn Pearce</li>
			<li>Tom Schindl</li>
			<li>Ankur Sharma</li>
			<li>Remy Suen</li>
			<li>David Williams</li>
			<li>Sebastian Zarnekow</li>
		</ul>

		<h3><a href="http://marketplace.eclipse.org/nominations/top-contributor" target="blank">Top Contributor</a></h3>
		<ul>
			<li>Brian de Alwis</li>
			<li>Dariusz Luksza</li>
			<li>James Sugrue</li>
		</ul>
		
		<h3><a href="http://marketplace.eclipse.org/nominations/top-newcomer-evangelist" target="blank">Top Newcomer Evangelist</a></h3>
		<ul>
			<li>Russell Bateman</li>
			<li>Boris Bokowski</li>
			<li>C&eacute;dric Brun</li>
			<li>Ayushman Jain</li>
			<li>Werner Keil</li>
			<li>James Sugrue</li>
			<li>Frans Thamura</li>
		</ul>

		<h3><a href="http://marketplace.eclipse.org/nominations/most-innovative-project" target="blank">Most Innovative New Feature or Eclipse Project</a></h3>
		<ul>
			<li>Agent Modeling Platform (AMP)</li>
			<li>EGit</li>
			<li>Extended Editing Framework (EEF)</li>
			<li>Gyrex</li>
			<li>Mylyn Builds</li>
			<li>SpatioTemporal Epidemiological Modeler (STEM)</li>
			<li>UOMo</li>				
		</ul>

		<h3><a href="http://marketplace.eclipse.org/nominations/most-open-project" target="blank">Most Open Project</a></h3>
		<ul>
			<li>e4</li>
			<li>Modeling Amalgamation</li>			
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
