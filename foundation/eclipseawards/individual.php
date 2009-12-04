<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_3col.php
	#
	# Author: 		Denis Roy
	# Date:			2005-11-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Individual Awards Nominations";
	$pageKeywords	= "eclipse, awards, individual, nomination, eclipsecon";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

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

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		
		<p>
			The following is a list of nominations submitted for the Individual Awards.  Nominations close on January 29, 2010.
		</p>
		
		<h3>Top Committer</h3>

		<p><a href="javascript:switchMenu('Name1');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Name1</a>
		</p>
		<div id="Name1" class="switchcontent">
		<p>
		<ul>
			<li>
			Comment 1	
			</li>
			<li>
			Comment 2
			</li>
		</ul>
		</p>
		</div>	

		<h3>Top Contributor</h3>

		<p><a href="javascript:switchMenu('LarsVogel');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Lars Vogel</a>
		</p>
		<div id="LarsVogel" class="switchcontent">
		<p>
		<ul>
			<li>
			Lars Vogel (<a href="http://vogella.de" target="blank">http://vogella.de</a>) for his useful articles, blog posts, bug reports/enhancement proposals and tweets.	
			</li>
			<li>
			+1 for Lars (vogella.de)
			</li>
			<li>
			+1 for Lars - his commitment to communicating the subtleties of Eclipse technical capabilities is fantastic, and the fact that *he constantly updates* is the clincher, in my mind.
			</li>
			<li>
			+1 for Lars (<a href="http://vogella.de" target="blank">http://vogella.de</a>)
			</li>
			<li>
			+1
			</li>
		</ul>
		</p>
		</div>	

		<h3>Top Newcomer Evangelist</h3>

		<p><a href="javascript:switchMenu('Name1');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Name1</a>
		</p>
		<div id="Name1" class="switchcontent">
		<p>
		<ul>
			<li>
			Comment 1	
			</li>
			<li>
			Comment 2
			</li>
		</ul>
		</p>
		</div>	

		<p>
		To read comments submitted for each candidate, click on their name.
		</p>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_project.php">Make a Project Nomination</a></li>				
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>
				<li><a href="individual.php">Individual Nominees</a></li>
				<li><a href="project.php">Project Nominees</a></li>
				<li><a href="technology.php">Technology Nominees</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>