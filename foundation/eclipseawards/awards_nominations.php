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
	$pageTitle 		= "Nominations";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Type your name here";
	
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
		<h2>Individual Awards</h2>
		<p>Anyone may nominate an individual in each category. 
		To nominate an individual visit the following Bugzilla entries. Nominations will close January 22, 2007. </p>
		<ul class="midlist">
		  <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=168235">Nominations for Top Ambassador Award</a></li>
		  <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=168237">Nominations for Top Contributor Award</a></li>
		  <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=168238">Nominations for Top Committer Award</a></li>
		</ul>
		<p>NOTE: The <strong>Newcomer Evangelist Award</strong> is not open to nominations.  It will be calculated based on the
		response to the eclipse.org.newcomer newsgroup.</p>
		<h2>Technology Awards</h2>
		<p>To submit a nomination for a technology awards send an e-mail by January 22, 2007 to <A 
        href="mailto:awards@eclipse.org">awards@eclipse.org</A> with the following information:
		<ul class="midlist">
			<li>Category of Award
			<li>Name of person submitting award
			<li>Contact information of person (telephone and e-mail)
		</ul>	

			<p class="midlist"> For <strong>Product Awards</strong>  (RCP and Eclipse developer tool) please answer the following: </p>
			<ul class="midlist"><li>Name of product
				<li>URL of product
				<li>100 word description of product 
				<li>Description of the usability features 
				<li>Description of why and how the product uniquely solves a particular problem.   You might also make sure the problem is explained.
				<li>Description of the completeness of the solution, including the technology but also documentation, white papers, tutorials, web site.  Everything you think is important for your customers to be successful with the product.
				<li>OPTIONAL: if you are so inclined please feel free to send a 3-5 minutes screen cam demo of your product.
			</ul>
			<p class="midlist">For the <strong>Best Deployment Award</strong> please answer the following:</p>
			<ul class="midlist"><li>Name of organization
				<li>Name of vendor submitting nomination
				<li>Description of how Eclipse has been deployed in the enterprise (non-ISV).  Please include a description of the applications being built with Eclipse and the number of developers and end users.
				<li>List of Eclipse projects being used with the deployment.
				<li>NOTE: This award is intended to recognized IT organizations that have deployed Eclipse internal to their enterprise.  Therefore, we have excluded ISVs from 
				this catategoy.  ISVs are an important part of the Eclipse ecosystem but we feel they will be recognized in the other award categories. </li>
			</ul>
		</ul>	
		</p>
		<h3>Previous Year Winners</h3>
		<p>Eclipse is a large vibrant community of many well deserving individuals and technologies.  Therefore, to ensure diversity of award winners, we have decided
		that previous year winners will not be eligible for a repeat award.   This does not mean that they are not deserving, it is just a recognition that others are also 
		deserving of recognition.</p><br><br>
	

	</div>

	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="./technology_nominations.php">Current Nominations</a></li>
				<li><a href="./individual_awards_guidelines.php">Guidelines for Individual Awards</a></li>
				<li><a href="./technology_awards_guidelines.php">Guidelines for Technology Awards</a></li>
			</ul>
		</div>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
