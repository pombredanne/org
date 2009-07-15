<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# mobilewg.php
	#
	# Author: 		Donald Smith
	# Date:			2009-07-15
	#
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse SOA Industry Working Group";
	$pageKeywords	= "soa, developers, eclipse";
	$pageAuthor		= "Donald Smith";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>
		<p> Draft: version July 15, 2009 (Proposal Phase)</p>
		
		<h2>Charter</h2>
		
		<h3>Purpose and Scope</h3>
		
     	<p>The SOA platforms used across industries are characterized by vendor-specific offerings lacking interoperability, e.g. between different ESBs. Although Web Service and REST technologies are widely accepted, they are neither sufficient to build a SOA nor to ensure interoperability between SOA products. A common SOA platform, based on Eclipse or any other technology, has not been adopted across the software industry. </p>
     	
     	<p>With Eclipse SOA Tooling Platform (STP) and Eclipse SOA Runtime (Swordfish) key technologies are available for design time and runtime that have the potential to establish a common SOA platform. Moreover, the Eclipse Ecosystem assembles all major vendors of Java-based SOA platforms necessary to establish such a common SOA platform.  
     	</p>
     	
     	<p>The goal of the Eclipse SOA Industry Working Group will be to define, implement and promote a common Equinox-based SOA platform including both design time and runtime components. By adopting this platform the different vendor platforms achieve interoperability. The Eclipse SOA Industry Working Group will be the forum for collaboration between the industry players on the vendor and user side to define and deliver a common SOA platform, it will facilitate collaboration between existing SOA-related Eclipse projects, and initiate new projects based on identified un-met requirements.
     	</p>
     		
     		
     	<h3>Description of Deliverables</h3>
     	<p>
     	The Eclipse SOA Industry Working Group will focus on the following areas:
     	<ol>
     		<li>It will define and maintain requirements and a roadmap that defines a SOA platform and encourage broader participation from different solution providers. All requirements are evaluated with respect to the overarching goal of providing an interoperable SOA Platform. Requirements to integrate with technologies that are not part of the SOA Platform are considered out of scope by the SOA IWG.</li>
			<li>It will define the technical requirements for an Eclipse package "Eclipse SOA" and specify the set of relevant Eclipse projects (so called "Eclipse SOA projects") to implement these requirements. The initial set of relevant projects is listed in the appendix. This set of Eclipse SOA projects will be revised on a regular basis.</li>
			<li>It will collaborate with the Eclipse Packaging Project (EPP) to deliver an extensible Eclipse SOA package branded with a brand to be established (see 5.1.)</li>
			<li>It will create a set of best practices and extension mechanisms that simplify the use of the Eclipse SOA platform by a wide range of application developers and SOA vendors through a common set of test suites, training materials and documentation. (That may belong into the new top-level project)</li>
			<li>It will develop a consistent communication and promotion program to help raise the awareness of the Eclipse SOA platform in the software industry. The promotion program includes:
				<ol>
					<li>The establishment of a brand including logo (see a draft in the attachment), which can be used for marketing purposes under certain rules. The rules will be governed in the Eclipse SOA Industry Working Group as well.</li>
					<li>The promotion of products and services of its members around the Eclipse SOA platform on the website of the Eclipse SOA Industry Working Group.</li>					
				</ol>
			 </li>
			 <li>It will define measurable criteria that allow interested parties outside the Eclipse SOA Industry Working Group to benefit from their commitment to the Eclipse SOA platform. The fulfilment of these criteria needs to be approved by the Steering Committee. Currently, four distinct groups of parties have been identified that should be addressed by such a program. The program does include a listing on the website of the Eclipse SOA Industry Working Group:
				<ol>
					<li>Product vendors: Product vendors that build products based on Eclipse SOA platform will be eligible to use the "Eclipse SOA Product" logo for the specific product and training materials.</li>
					<li>Add-in vendors: Product vendors that create add-ins to Swordfish or any other Eclipse SOA component will be eligible to use the "Eclipse SOA Add-in" logo. </li>
					<li>System integrators: System integrators that demonstrate their expertise in using Eclipse SOA technology in customer projects are eligible to use the "Eclipse SOA Integrator" logo. The logo can also be used for training materials by these system integrators.</li>
					<li>Industry Working Group Members: Members of the Eclipse SOA Industry Working Group contributing to the Eclipse SOA platform will be eligible to use the "Eclipse SOA Member" logo.</li>
				</ol>
			 </li>
		</ol>
		</p>
		
		<p>Note, that membership in the Eclipse SOA IWG is not a prerequisite for the product vendors, add-in vendors and system integrators.  
		In order to provide incentives to A) form a coherent and integrated SOA platform, and B) to promote adoption, 
		there will be a set of criteria for product vendors and system integrator. This set of criteria will cover as well 
		for the tooling and as well for the runtime. The fulfilment of either tooling only or runtime only will be not sufficient 
		to use the logo for product vendor or system integrators.
		</p>
		
		<p>The Eclipse SOA Industry Working Group will not create or publish a specification as part of its deliverables.</p>
		
		<h3>Eclipse SOA Industry Working Group Participation Guidelines</h3>
		<p>The Eclipse SOA Industry Working Group participation guidelines define the obligations for participants. The participants are expected to fulfil these obligations to be considered in good standing.
		</p>
		<p>Steering Committee Members are required to:
		<ul>
			<li>Be Strategic or Enterprise member of the Eclipse Foundation</li>
			<li>Appoint at least 3 developers to implement requirements agreed in the Industry Working Group to creating the Eclipse SOA platform. These developers will work in one of the relevant Eclipse projects ("Eclipse SOA projects") selected by the Eclipse SOA Industry Working Group. The members are free in their choice into which of the relevant projects these developers are assigned to (e.g. tooling only). </li>
			<li>The IWG will require resources on an irregular basis working in requirements management, marketing/branding and strategy. It is expected that all steering committee members participate equally in those efforts. </li>
			<li>Regularly participate in all Industry Working Group meetings and provide timely feedback on the Industry Working Group documents</li>
			<li>Provide announcement support for the Eclipse SOA platform and ongoing promotion to application developers.</li>			
		</ul> 
		</p>
		<p>Member Participants are required to:
		<ul>
			<li>Be an Eclipse Foundation Member (Solution, Committer)</li>
			<li>Appoint at least 1 developer to implement requirements agreed in the Industry Working Group to creating the Eclipse SOA platform. These developers will work in one of the relevant Eclipse projects ("Eclipse SOA projects") selected by the Eclipse SOA Industry Working Group. The members are free in their choice into which of the relevant projects these developers are assigned to (e.g. tooling only).</li>
			<li>Regularly participate in all Industry Working Group meetings and provide timely feedback on the Industry Working Group documents.</li>
			<li>For corporate members, provide announcement support for the Eclipse SOA platform and ongoing promotion to application developers. </li>
		</ul>
		</p>
		
		<h3>Proposed Schedule</h3>
		<p><ul>
		<li><p>Q3/09 Publish Charter; Gather bigger community and recruit two or more (Expectation of 4) industry players.</p></li>

		

		<li><p>Q3/09 Define technical roadmap. The goal is to create the following documents by end of Q3/09:
			<ul>
				<li>Detailed use-cases outlining the user experience of an Eclipse SOA platform</li>
				<li>High level requirements with straw man architecture</li>
				<li>List of dependencies on existing Eclipse Projects</li>
				<li>List of missing components and a brief description of each</li>
			</ul>
		</p>	
		</li>		

		<li>Q3/09 Start work with the existing projects (e.g. STP, Swordfish and BPEL) to create a pre-packaged Eclipse SOA platform. Major next milestones for releases of the Eclipse SOA platform are Eclipse Summit Europe 2009, EclipseCON 2010 and the Eclipse Helios Release.</li>

		<li>Q3/09 Unify mobile specific features (e.g. Sign, Package, Deploy)</li>
 
		<li>Propose and initiate an Eclipse Service Registry/Repository project in Q4/09 as this is considered a central piece of a SOA platform.</li>
		</ul>
	</p>
		
		<h3>Feedback</h3>
	<p>Please send comments and feedback to <a href="mailto:soa-iwg@eclipse.org">soa-iwg@eclipse.org</a>.  Please also use the mailing list to express
	your desire to participate in the working group.  Go <a href="https://dev.eclipse.org/mailman/listinfo/soa-iwg">here</a> to subscribe to the mailing list and view the archives.</p>


	<h3>Industry Working Group Process</h3>
	<p>The SOA Industry Working Group will follow the <a href="http://www.eclipse.org/org/industry-workgroups/industry_wg_process.php">Eclipse Industry Working Group Process</a>.</p>
		
 <br><br>
</div>



</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

