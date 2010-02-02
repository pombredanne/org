<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Voting is Open for the Eclipse Community Awards";
	$pageKeywords	= "eclipse, community, awards, EclipseCon, vote";
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
		<a href="http://eclipse.org/go/awardsvote10" target="blank">voting</a> has opened for the individual
		and project category nominees.  Congratulations to all the worthy candidates!  Show your
		appreciation to the people that have made Eclipse a stronger community by casting your vote.</p>

		<p>More details about the awards and the nomination process can be found
		<a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">online</a>.	 Voting for the Eclipse Community
		Awards will be open until <b>February 26, 2010 at 5:00pm EST</b> and the winner will be announced March 22, 2010 at
		<a href="http://www.eclipse.org/go/EC10_web@cbfeb2">EclipseCon.</a></p>
		
		<p><a href="http://eclipse.org/go/awardsvote10" target="blank">
		<img src="http://www.eclipse.org/membership/vote2008/vote.jpg"></a>
		</p>		
		
		<p>The nominees are:</p>	
		
		<h3>Top Committer</h3>
		<ul>
			<li>Kevin Barnes</li>
			<li>Boris Bokowski</li>
			<li>Nick Boldt</li>
			<li>Dave Carver</li>
			<li>Andy Clement</li>
			<li>Andrew Eisenberg</li>
			<li>Kim Moir</li>
			<li>Andrew Overholt</li>
			<li>Prakash GR Rangaraj</li>
			<li>Pascal Rapicault</li>
			<li>Markus Schorn</li>
			<li>Eike Stepper</li>
			<li>Remy Suen</li>
			<li>Francis Upton</li>
			<li>David Williams</li>
		</ul>

		<h3>Top Contributor</h3>
		<ul>
			<li>Matt Hall</li>
			<li>Laurens Holst</li>
			<li>James Sugrue</li>
			<li>Lars Vogel</li>
		</ul>

		<h3>Most Innovative New Feature or Eclipse Project</h3>
		<ul>
			<li>Agent Modeling Platform (AMP)</li>
			<li>b3</li>
			<li>EclipseLink</li>
			<li>Eclipse Modeling Framework (EMF) Connected Data Objects (CDO)</li>
			<li>GEF3D</li>
			<li>Jetty OSGi Integration</li>
			<li>Model to Text (M2T) Acceleo</li>
			<li>Model to Text (M2T) Xpand</li>
			<li>Standard Widget Toolkit (SWT) Cocoa Port</li>
			<li>Textual Modeling Framework (TMF) Xtext</li>				
		</ul>

		<h3>Most Open Project</h3>
		<ul>
			<li>e4</li>
			<li>Equinox p2</li>
			<li>Mylyn</li>
			<li>XML Tools in Web Tools Platform (WTP) Incubator</li>			
		</ul>
		
	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community Awards</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/individual.php">Individual Nominees</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/project.php">Project Nominees</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/technology.php">Technology Nominees</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/pastwinners.php">Past Winners</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/nominate_project.php">Make a Project Nomination</a></li>				
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/nominate_technology.php">Make a Technology Nomination</a></li>
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
