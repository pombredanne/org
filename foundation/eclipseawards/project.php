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
	$pageTitle 		= "Eclipse Project Awards Nominations";
	$pageKeywords	= "eclipse, awards, project, nomination, eclipsecon";
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

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		
		<p>
			The following is a list of nominations submitted for the Project Awards.  Nominations close on January 29, 2010.
		</p>
				
		<h3>Most Innovative New Feature or Eclipse Project</h3>

		<p><a href="javascript:switchMenu('b3');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			b3</a>
		</p>
		<div id="b3" class="switchcontent">
		<p>
		<ul>
			<li>
			b3 is the most innovative thing that we have, with the most potential everything that we do in the Eclipse consumer and committer communities.	
			</li>
		</ul>
		</p>
		</div>
		
		<p><a href="javascript:switchMenu('Jetty');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Jetty OSGi Integration</a>
		</p>
		<div id="Jetty" class="switchcontent">
		<p>
		<ul>
			<li>
			I'd like to nominate Hugues Malphettes on his Jetty osgi integration. Jetty on it's own is a pretty significant addition to eclipse from this year (but I would not be so bold to self nominate :).   Hugues work takes the improvied OSGi bundles of jetty-7 and makes them available either as a standard HttpService, an RFC-66 webapplication or as custom jetty contexts.  All web bundles deployed will use a common jetty service.
			<br><br>
			Through this work, not only is a first class HTTP server and servlet container available to OSGi developers, but the innovations of jetty such as async servlets and WebSocket server will now be simply usable.
			<br><br>
			Read about it here: <a href="http://wiki.eclipse.org/Jetty/Feature/Jetty_OSGi" target="blank">http://wiki.eclipse.org/Jetty/Feature/Jetty_OSGi</a> and here: <a href="http://wiki.eclipse.org/Jetty/Tutorial/Jetty-OSGi_SDK" target="blank">http://wiki.eclipse.org/Jetty/Tutorial/Jetty-OSGi_SDK</a>
			</li>
		</ul>
		</p>
		</div>	

		<h3>Most Open Project</h3>

		<p><a href="javascript:switchMenu('Mylyn');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Mylyn</a>
		</p>
		<div id="Mylyn" class="switchcontent">
		<p>
		<ul>
			<li>
			A wild and productive community like the one that serves Mylyn cannot be fostered and maintained without a preternatural dedication to open-ness.
			</li>
		</ul>
		</p>


		<p><a href="javascript:switchMenu('XML');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			XML (part of WTP Incubator)</a>
		</p>
		<div id="XML" class="switchcontent">
		<p>
		<ul>
			<li>
			David Carver, the lead, has exemplified open development precepts in his active recruitment of contributions and committers, as well as communications of status, open-ness of testing and coverage, commitment to outreach and update through his blog and twitter.
			</li>
		</ul>
		</p>
		</div>

		<p>
		To read comments submitted for each project or feature, click on its name.
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