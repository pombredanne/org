<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# mobilewg.php
	#
	# Author: 		Ian Skerrett
	# Date:			2008-10-15
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Mobile Industry Working Group";
	$pageKeywords	= "mobile, developers, eclipse";
	$pageAuthor		= "Ian Skerrett";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>
		
		<h2>Proposed Charter</h2>
		
		<h3>Purpose and Scope</h3>
		
     	<p>The application development tools used in the mobile phone industry are characterized by 
     	vendor-specific offerings.  A common development tools integration platform, Eclipse-based or any other 
     	technology, has not been adopted across the mobile industry. </p>
     	
     	<p>A typical Eclipse based mobile application development environment contains components sourced and 
     	adapted from many different Eclipse Projects (e.g. CDT, JDT, WTP). There are few mobile specific projects
     	 within Eclipse (Mobile Tools for Java, Tools for Mobile Linux) which have not yet gained the momentum 
     	 or industry leadership for mobile application development because these projects are narrowly focused 
     	 on specific parts of an overall solution. This constrains the value of the Eclipse platform for mobile 
     	 application developers, mobile tooling developers, and companies in the mobile industry.
     	</p>
     	
     	<p>The intent of the Mobile Industry Working Group (MIWG) will be to define, implement and promote a 
     	common Mobile Application Development Kit (MADK) which can be easily augmented with handset -specific 
     	profiles.   The MIWG will be the forum for collaboration between the industry players to define and 
     	deliver a common platform, it will facilitate collaboration between existing Eclipse projects applicable 
     	to Mobile developers, and initiate new projects based on identified un-met requirements.
     	</p>
     		
     		
     	<h3>Description of Deliverables</h3>
     	<p>
     	The Mobile Industry Working Group will focus on four areas:
     	<ol>
     		<li>The MIWG will define and maintain requirements and a roadmap that defines a complete mobile offering and encourage broader participation for different solution providers.
			<li>The MIWG will define the technical requirements for a packaged distribution (e.g. the Eclipse MADK).  The MADK will collaborate with other Eclipse projects (e.g. the Eclipse packaging project), or create new projects as needed to implement new technology required for the MADK, to deliver an extensible MADK package.
			<li>The MIWG will create a set of best practices and extension mechanisms that simplify the use of Eclipse by a wide range of mobile application developers and tools vendors through a common set of test suites, training materials and documentation. 
			<li>The MIWG will develop a consistent messaging and promotion program to help raise the awareness of MADK and Eclipse in the mobile industry.
		</ol>
		</p>
		
		<p>The MIWG will not create or publish a specification as part of its deliverables.</p>
		
		<h3>MIWG Participation Guidelines</h3>
		<p>The MIWG participation guidelines define the obligations for participants.  MIWG participants are 
		expected to full-fill these obligations to be considered in good standing.
		</p>
		<p>Steering Committee Members are required to:
		<ul>
			<li>Be Strategic or Enterprise member
			<li>Appoint at least 1 developer/technical resource to contribute to the creation of MIWG  
			technologies, product roadmaps and/or technical documents.
			<li>Regularly participate in all MIWG meetings and provide timely feedback on the MIWG documents.
			<li>Provide announcement support for the MADK and ongoing promotion to mobile application developers.
		</ul> 
		</p>
		<p>Member Participants are required to:
		<ul>
			<li>Be an Eclipse Foundation Member (Solution, Associate, or Committer)
			<li>Regularly participate in all MIWG meeting and provide timely feedback on the MIWG documents.
			<li>For corporate members, provide announcement support for the MADK and ongoing promotion to mobile 
			application developers.
		</ul>
		</p>
		
		<h3>Proposed Schedule</h3>
		<p>TBD</p>
		
 <br><br>
</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/ganymede">Ganymede</a></li>
				<li><a href="http://www.eclipse.org/ganymede/aroundtheworld.php">Ganymede Contest</a></li>
				<li><a href="http://www.eclipse.org/ganymede/map.php">Ganymede Map</a></li>
			</ul>
		</div>
	</div>	

</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

