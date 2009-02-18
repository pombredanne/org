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
	$pageTitle 		= "Eclipse Awards Finalists 2009";
	$pageKeywords	= "eclipse, foundation, community, award, winners, 2009";
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
<link rel="stylesheet" type="text/css" href="layout.css" media="screen" />
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<h2>Individual Award Finalists</h2>
		<p>Presented below is the list of award finalists for each of the individual awards catagories.</p>
		<div class="homeitem3col">
			<h3>Top Ambassador</h3>
			<ul>
				<li class="finalist">name</li>
				<li class="finalist">name</li>
				<li class="finalist">name</li>
			</ul>
		</div>	
		
		<div class="homeitem3col">
			<h3>Top Committer</h3>
			<ul>
				<li class="finalist">name</li>	
				<li class="finalist">name</li>
				<li class="finalist">name</li>					
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Top Contributor</h3>
			<ul>
				<li class="finalist">name</li>
				<li class="finalist">name</li>
				<li class="finalist">name</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Top Newcomer Evangelist</h3>
			<ul>
				<li class="finalist">name</li>	
				<li class="finalist">name</li>
				<li class="finalist">name</li>
			</ul>
		</div>			
		<br />
		<a href="http://www.eclipse.org/org/press-release/20090202_awards.php">A complete list of the nominees for the 2009 Individual Awards can be found here.</a>
		<br /><br />

	<h2><br>Technology Award Winners</h2>
		<p>Presented below is the list of award finalists for each of the technology awards catagories as determined
			by this year's judging panels.</p>
			
		<div class="homeitem3col">
		<h3>Best Commerical Eclipse-Based Developer Tool</h3>
			<ul>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
			</ul>
		</div>	
			
		<div class="homeitem3col">
			<h3>Best Open Source Eclipse-Based Developer Tool</h3>
			<ul>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Commercial Equinox Application</h3>
			<ul>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Open Source Equinox Application</h3>
			<ul>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Commercial RCP Application</h3>
			<ul>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Open Source RCP Application</h3>
			<ul>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
				<li class="finalist"><a href="http://www.eclipse.org">product</a></li>
			</ul>
		</div>			
		<br />
		<a href="technology.php">A complete list of the nominees for the 2009 Technology Awards can be found here.</a>
		<br /><br />
	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="individual.php">Individual Nominations</a></li>
				<li><a href="technology.php">Technology Nominations</a></li>
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>		
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage("Nova", $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>