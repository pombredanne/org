<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_list.php
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
	$pageTitle 		= "Eclipse Community Awards";
	$pageKeywords	= "eclipse, awards, community, nomination, eclipsecon, 2010";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<p>
			The Eclipse Community Awards recognize the best of the Eclipse community.  There are three award categories: 1) Individuals, 2) Eclipse Projects, and
			3) Technologies and Products.  Award winners will be announced at
			<a href="http://www.eclipse.org/go/EC10_web@awards">EclipseCon 2010</a>.
		</p>

		<p><a href="http://eclipse.org/go/awardsvote10" target="blank">
		<img src="http://www.eclipse.org/membership/vote2008/vote.jpg"></a>
		</p>	
		
		<h3>Individual Awards</h3>
		<p>
			<ol>
				<li><strong>Top Committer</strong> - The Eclipse committer who best exemplifies support for the
				community through forums, Bugzilla, tutorials, conference presentations, blogs and other areas.</li>
				<li><strong>Top Contributor</strong> - The individual who best exemplifies support for
				the Eclipse community through forums, submission of patches, comments on bugs, tutorials, conference
				presentations, blogs, IRC and other areas. Contributors are the individuals that participate due to their
				passion for the community and technology.  Typically, they are not paid for their
				Eclipse contributions.</li>
 				<li><strong>Top Newcomer Evangelist</strong> - The individual who best exemplifies the welcoming
 				of new people into the Eclipse community. This award will be presented to the individual that has
 				answered the most questions in the <a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=89&S=84d05ba26b219892893183d865c7b633">
 				Newcomers forum</a>.</li>
			</ol> 	
			<a href="individual.php">Nominations are now closed for Individual Awards.</a>
			<br>
		</p>
		
		<h3>Eclipse Project Awards</h3>
		<p>
			<ol>						
				<li><strong>Most Innovative New Feature or Eclipse Project ("Shiny New Toy Award")</strong> - 
				A feature added to an existing Eclipse project in 2009 or a new Eclipse project
				introduced in 2009 that is used and loved by the community.</li>
				<li><strong>Most Open Project</strong> - An Eclipse project that best exemplifies the openness,
				transparency and diversity expected of great open source projects. </li>	
				</ol>
			<a href="project.php">Nominations are now closed for Eclipse Project Awards.</a>
			<br>

		</p>
		
		<h3>Technology Awards</h3>
		<p>
			<ol>						
				<li><strong>Best Commercial Developer Tool</strong> - A commercial product that provides an
				innovative, high quality tool for software developers.</li>
				<li><strong>Best Open Source Developer Tool</strong> - An open source project (not hosted at
				Eclipse) that provides an innovative, high quality tool for software developers.</li>
				<li><strong>Best EclipseRT Application</strong> - An application, commercial product or open
				source project (not hosted at Eclipse) that illustrates the most innovative use of EclipseRT technology.</li>
				<li><strong>Best RCP Application</strong> - An end-user desktop application (not hosted at
				 Eclipse) that illustrates the most innovative use of Eclipse RCP.</li>
			</ol>
			<a href="technology.php">Nominations are now closed for Technology Awards.</a>
			<br>
		</p>
		
		<h3>Important Dates</h3>
		<p>
			<ul>
				<li><font color="#A9A9A9">Nominations open - December 3, 2009</font></li>
				<li><font color="#A9A9A9">Nominations close - January 29, 2010</font></li>
				<li>Voting begins for Individual Awards - February 2, 2010</font></li>
				<li>Voting ends for Individual Awards - February 26, 2010 at 5:00 pm EST</font></li>
				<li>Awards Announced at EclipseCon 2010 - March 22-25, 2010</li>
			</ul>
		</p>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="individual.php">Individual Nominees</a></li>
				<li><a href="project.php">Project Nominees</a></li>
				<li><a href="technology.php">Technology Nominees</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_project.php">Make a Project Nomination</a></li>				
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>
			</ul>
		</div>
		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>