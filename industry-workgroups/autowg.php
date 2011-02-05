<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# autowg.php
	#
	# Author: 		Mike Milinkovich
	# Date:			2011-02-04
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Automotive Industry Working Group";
	$pageKeywords	= "auto, automotive, developers, eclipse";
	$pageAuthor		= "Mike Milinkovich";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>
		
		<h2>Charter</h2>
		
		<h3>Purpose</h3>
		
     	<p>The Automotive Industry is constantly introducing new and improved features based on advanced electronics and software.  The use of 
     	these consumer electronics and software has required the automotive industry to define processes and tools that manage the interactions 
     	within an organization and within their extended supply chain.   To address the growing complexity and time-to-market pressures, the 
     	automotive industry needs a common development tool-chain to support the development and testing of these new types of features.</p>
     	
		<p>Today, many automotive companies use Eclipse to assist in the development of new features.   However, a lack of integration between 
		technology stacks, consistent use of tools through-out the supply chain and missing functionality has limited the effectiveness of 
		create a complete development tool-chain.</p>
     		
		<h3>Scope</h3>
		
		<p>The Eclipse Automotive Industry Working Group (EAIWG) will initially work to define, implement and package an Eclipse-based development 
		tool-chain that will become an industry platform for tools for designing advanced automotive electronic systems.   The industry platform 
		will include key open source components from Eclipse but also define extension points that can be used to integrate value add tools from 
		a commercial ecosystem or in-house development.</p>
		<p>The definition of future areas and work items will be discussed by the steering committee as needed.</p>
		
     		
     	<h3>Working Group Deliverables</h3>
     	<p>The EAIWG will define and maintain the <bold>requirements</bold>, a <bold>technical architecture</bold> and a <bold>roadmap</bold> that 
     	defines a common platform for the development and management tools required for the automotive electronic  development processes. The working 
     	group will also provision the resources to create, ship and maintain the platform.</p>
     	
     	<p>The EAIWG will conduct a gap analysis, identifying the gap between needed and available functionality in the current Eclipse technology platform. 
     	ased on this analysis, a prioritized roadmap will be created to implement the missing functions.</p>
     	
     	<p>In addition, the EAIWG may provision other initiatives. These initiatives shall support definition, management and execution of the 
     	engineering electronic development in the automotive supply chain.</p>
     	
     	<p>The EAIWG will create a roadmap for publicizing the creation of the EAIWG as well as the acquisition of new members. Once the EAIWG is created, 
     	a list of supported events shall be maintained and a quarterly newsletter shall be published.</p>
     	
     	<h3>Participation Guidelines</h3>
     	
		<p>The Participation Guidelines define the obligations and rights of the participants of the EAIWG.</p>
		
		<p>The founding participants agree that the guiding principle of of governance shall be based on meritocracy. This means that those 
		companies that provide the resources will be empowered to make the important decision of the EAIWG.</p>
		
		<h4>Steering Committee</h4>
		
		<p>The members of the steering committee will fund the majority of the work conducted in the EAIWG. </p>
		
		<p>The responsibilities of the steering committee are outlined in Section 2 of the 
		<a href="industry_wg_process.php">Eclipse Industry Working Group Process</a> document.</p>
		
		<p>In particular, each steering committee member is required to:
		<ul>
			<li>appoint at least one technical resource to define and manage the EAIWG roadmap,</li>
			<li>depending on the roadmap, share in the implementation costs of producing the industry platform,</li>
			<li>share in the funding of a project office to manage the ongoing operation of the working group and project implementation,</li>
			<li>specify requirements for the Member Participants of the EAIWG, and</li>
			<li>be a member of the Eclipse Foundation, at the Solution, Enterprise or Strategic level.</li>
		</ul>
		The members of the steering committee will  appoint the IWG Chair. She/he will be be the employee of a Steering Committee Member company.</p>
		 
		<h4>Member Participant</h4>
		
		<p>Any member of the Eclipse Foundation that satisfies the requirements outlined in Section 2 of the 
		<a href="industry_wg_process.php">Eclipse Industry Working Group Process</a> document can become a member of the 
		EAIWG. Member Participants are required to:
		<ul>
			<li>regularly participate in the EAIWG meetings, workshops and events</li>
			<li>provide feedback to the artifacts prepared in the EAWIG (charter, roadmap, schedule, development plans and artifacts),</li>
			<li>provide marketing and announcement support where applicable, and</li>
			<li>other requirements as specified by the Steering Committee from time-to-time.</li>
		</ul>
		</p>
		
	<h3>Feedback</h3>
	<p>Please send comments and feedback to <a href="mailto:auto-iwg@eclipse.org">auto-iwg@eclipse.org</a>.  Please also use the mailing list to express
	your desire to participate in the working group.  Go <a href="https://dev.eclipse.org/mailman/listinfo/auto-iwg">here</a> to subscribe to the mailing 
	list and view the archives.</p>
	
	<h3>Industry Working Group Process</h3>
	<p>The Automotive Industry Working Group will follow the <a href="industry_wg_process.php">Eclipse Industry Working Group Process</a>.</p>
		
 <br><br>
</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

