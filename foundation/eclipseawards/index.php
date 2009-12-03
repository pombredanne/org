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
			The Eclipse Community Awards were created to recognize and thank contributions to a vibrant Eclipse
			vcommunity.  There are three categories of awards: 1) awards for individuals, 2) awards for projects, and
			3) awards for technologies and products.  The awards will be presented on March 22, 2009 at
			<a href="http://www.eclipsecon.org/2010/">EclipseCon 2010</a>.
		</p>
	
		<h3>Individual Awards</h3>
		<p>
			<ol>
				<li><strong>Top Committer</strong> - The best all-around Eclipse committer who exemplifies support for the
				community through forums, Bugzilla, tutorials, conference presentations, blogs and other areas.</li>
				<li><strong>Top Contributor</strong> - The best all-around Eclipse contributor who exemplifies support for
				the community through forums, submission of patches and comments on bugs, tutorials, conference
				presentations, blogs and other areas. In general, contributors are not paid by anyone for their
				Eclipse contributions.</li>
 				<li><strong>Top Newcomer Evangelist</strong> - An individual who best exemplifies the welcoming
 				of new people into the Eclipse community by answering questions in the <a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=89&S=84d05ba26b219892893183d865c7b633">
 				Newcomers forum</a>.</li>
			</ol> 	
		</p>
		
		<h3>Project Awards</h3>
		<p>
			<ol>						
				<li><strong>Shiny New Toy Award</strong> - A feature from an Eclipse project or an Eclipse project
				introduced in the last 12 months that is used and loved by the community.</li>
				<li><strong>Open Sesame Award</strong> - A project that best exemplifies open source and
				transparency through their communications and open source practices. </li>	
				</ol>
		</p>
		
		<h3>Technology Awards</h3>
		<p>
			<ol>						
				<li><strong>Best Commercial Developer Tool</strong> - A commercial product that provides an
				innovative, high quality product for software developers.</li>
				<li><strong>Best Open Source Developer Tool</strong> - An open source project (not hosted at
				Eclipse) that provides an innovative, high quality product for software developers.</li>
				<li><strong>Best EclipseRT Application</strong> - An application, commercial product or open
				source project (not hosted at Eclipse) that illustrates the most innovative use of Eclipse
				Runtime.</li>
				<li><strong>Best RCP Application</strong> - An end-user desktop application (not hosted at
				 Eclipse) that illustrates the most innovative use of Eclipse RCP.</li>
			</ol>
		</p>
		
		<h3>Important Dates</h3>
		<p>
			<ul>
				<li><font color="#A9A9A9">Nominations open - December 3, 2008</font></li>
				<li>Nominations close - January 29, 2009</font></li>
				<li>Voting begins for Individual Awards - February 1, 2009</font></li>
				<li>Voting ends for Individual Awards - February 26, 2009 at 5:00 pm EST</font></li>
				<li>Awards Announced - March 22, 2009</li>
			</ul>
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
				<li><a href="pastwinners.php">Past Winners</a></li>
			</ul>
		</div>
		
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>