<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "About the Eclipse Foundation";
	$pageKeywords	= "about, documents, history";
	$pageAuthor		= "M. Milinkovich Nov 20/05";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

    <div id="maincontent">
	<div id="midcolumn">
        <h1><a name="top"></a>$pageTitle</h1>
        <ul>
			<li><a href="#about">What is Eclipse and the Eclipse Foundation?</a></li>
			<li><a href="#IT">Services of the Foundation</a></li>
			<ol>
				<li><a href="#IT">IT Infrastructure</a></li>
				<li><a href="#IP Management">Intellectual Property (IP) Management</a></li>
				<li><a href="#Development">Development Community Support</a></li>
				<li><a href="#Ecosystem">Ecosystem Development</a></li>
			</ol>
			<li><a href="#Unique">A Unique Model for Open Source Development</a></li>	
			<li><a href="#history">What is the history of Eclipse?</a></li>
		</ul>
	    <h3><a name="about"></a>What is Eclipse and the Eclipse Foundation?</h3>
		<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of 
		extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. The Eclipse Foundation 
		is a not-for-profit, member supported corporation that hosts the <a href="http://www.eclipse.org/projects">Eclipse projects</a> and 
		helps cultivate both an open source community and an ecosystem of complementary products and services.</p>
		
		<p>The Eclipse Project was originally created by IBM in November 2001 and supported by a consortium of software 
		vendors.   The Eclipse Foundation was created in January 2004 as an independent not-for-profit corporation to act as the steward of the 
		Eclipse community.    The independent not-for-profit corporation was created to allow a vendor neutral and open, transparent community to be 
		established around Eclipse.  Today, the Eclipse community consists of individuals and organizations from a cross section of the software 
		industry.</p>

		<p>The Eclipse Foundation is funded by annual dues from our <a href="http://www.eclipse.org/membership">members</a> and governed by a 
		<a href="http://www.eclipse.org/org/foundation/directors.php">Board of Directors</a>.  Strategic Developers and Strategic Consumers hold 
		seats on this Board, as do representatives elected by Add-in Providers and Open Source committers.  The Foundation employs a 
		full-time <a href="http://www.eclipse.org/org/foundation/staff.php">professional staff</a> to provide services to the community but does 
		not employ the open source developers, called committers, which actually work on the Eclipse projects.  Eclipse 
		committers are typically employed by organizations or are independent developers that volunteer their time to 
		work on an open source project.</p>

		<p>In general, the Eclipse Foundation provides four services to the Eclipse community: 1) <a href="#IT">IT 
		Infrastructure</a>, 2) <a href="#IP Management">IP Management,</a>3) <a href="#Development">Development Process</a>, 
		and 4) <a href="#Ecosystem">Ecosystem Development</a>.  Full-time staff are associated with each of these areas and work with the 
		greater Eclipse community to assist in meeting  the needs  of the stakeholders.</p>

		<h3><a name="IT"></a>IT Infrastructure</h3>	
		<p>The Eclipse Foundation manages the IT infrastructure for the Eclipse open source community, including CVS/SVN code repositories, 
		Bugzilla databases, development oriented mailing lists and newsgroups, download site and web site.   The infrastructure is designed to 
		provide reliable and scalable service for the committers developing the Eclipse technology and the consumers who use the technology.</p>
		
		<h3><a name="IP Management"></a>Intellectual Property (IP) Management</h3>	
		<p>An important aspect of Eclipse is the focus on enabling the use of open source technology in commercial software products and 
		services.  We consciously promote and encourage software vendors to use Eclipse technology for building their commercial software 
		products and services. This is made possible by the fact that all Eclipse projects are licensed under the 
		<a href="http://www.eclipse.org/org/documents/epl-v10.php">Eclipse Public License (EPL)</a>, 
		a commercial friendly OSI approved licensed.  </p>

		<p>The Eclipse Foundation also undertakes a number of steps to attempt to ensure the pedigree of the intellectual property contained 
		within Eclipse projects.  The first step in the due diligence process 
		is trying to ensure that all contributions are made by the rightful copyright holder and under the Eclipse Public License (EPL).  
		All committers are required to sign a <a href="http://www.eclipse.org/legal/committer_process/EclipseIndividualCommitterAgreementFinal.pdf">committer agreement</a>
		 that stipulates all of their contributions are their 
		original work and are being contributed under the EPL.   If a committer is sponsored to work on 
		an Eclipse project by a Member organization, then that organization is asked to sign a 
		<a href="http://www.eclipse.org/legal/EclipseMemberCommitterAgreementFinal.pdf">Member Committer Agreement</a> 
		to ensure the intellectual property rights of the organization are contributed under the EPL. </p>

		<p>The second step is that the source code related to all contributions which are developed outside of the Eclipse development process 
		are processed through the Eclipse Foundation <a href="http://www.eclipse.org/legal/EclipseLegalProcessPoster.pdf">IP approval process</a>.   
		This process includes analyzing selected code contributions to try 
		to ascertain the provenance of the code, and license compatibility with the EPL.   Contributions that contain code licensed under 
		licenses not compatible with the EPL are intended to be screened out through this approval process and thus not added to an Eclipse 
		project.   The end result is a level of confidence that Eclipse open source projects release technology that can be safely distributed 
		in commercial products.  </p>
		  
		<h3><a name="Development"></a>Development Community Support</h3>	
		<p>The Eclipse community has a well earned reputation for providing quality software in a reliable and predictable fashion.  
		This is due to the commitment of the committers and organizations contributing to the open source projects.   
		The Eclipse Foundation also provides services and support for the projects to help them achieve these goals.   </p>

		<p>The Foundation staff help implement the <a href="http://www.eclipse.org/projects/dev_process/development_process.php">Eclipse Development Process.</a>
		This process assists new project startup and ensures that all Eclipse projects are run in an open, transparent and meritocratic manner.
		As part of this process, the Foundation organizes member community reviews for projects to ensure consistent interaction between the projects and the 
		broader membership. </p>

		<p>The Eclipse community organizes an annual release train that provides a coordinated release of those Eclipse projects which wish to participate.   
		The release train makes it easier for downstream consumers to adopt new releases of the projects because 1) all the 
		projects are available on the same 
		schedule, so you don't have to wait for independent project schedules, and 2) a level of integration testing occurs before the final 
		release to help identify cross project issues. </p>
			
		<h3><a name="Ecosystem"></a>Ecosystem Development</h3>	
		<p>A unique aspect of the Eclipse community and the role of the Eclipse Foundation is the active marketing and promotion of Eclipse 
		projects and wider Eclipse ecosystem.   A healthy vibrant ecosystem that extends beyond the Eclipse open source community to include 
		things like commercial products based on Eclipse, other open source projects using Eclipse, training and services providers, magazines 
		and online portals, books, etc, are all key to the success of the Eclipse community.</p>

		<p>To assist in the development of the Eclipse ecosystem, the Eclipse Foundation organizes a number of activities, including co-operative 
		marketing events with Member companies, community conferences (<a href="http://www.eclipsecon.org/2007/">EclipseCon</a> and <a href="http://www.eclipsecon.org/summiteurope2006/">Eclipse Summit Europe</a>), 
		online resource catalogs (<a href="http://www.eclipseplugincentral.com">EPIC</a> and <a href="http://live.eclipse.org/">Eclipse Live</a>), 
		bi-annual Members meetings and other programs to promote the entire Eclipse community.</p>

		<h3><a name="Unique"></a>A Unique Model for Open Source Development</h3>	
		<p>The Eclipse Foundation has been established to serve the Eclipse open source projects and the Eclipse community.   As an independent 
		not-for-profit corporation, the Foundation and the Eclipse governance model ensures no single entity is able to control the strategy, 
		policies or operations of the Eclipse community.  </p>

		<p>The Foundation is focused on creating an environment for successful open source projects and to promote the adoption of Eclipse 
		technology in commercial and open source solutions.   Through services like IP Due Diligence, annual release trains, development 
		community support and ecosystem development, the Eclipse model of open source development is a unique and proven model for open source 
		development.   </p>
			
						
		<h3><a name="history">History of Eclipse</a></h3>
	      	<p>Industry leaders Borland, IBM, MERANT, QNX Software Systems, Rational Software, Red Hat, 
	      	SuSE, TogetherSoft and Webgain formed the initial eclipse.org Board of Stewards in November 
	      	2001. By the end of 2003, this initial consortium had grown to over 80 members.</p>
	      	
	      	<p> On Feb 2, 2004 the Eclipse Board of Stewards <a href="press-release/feb2004foundationpr.php">announced</a> Eclipse&rsquo;s reorganization into 
	      	a not-for-profit corporation. Originally a consortium that formed when IBM released the Eclipse 
	      	Platform into Open Source, Eclipse became an independent body that will drive the platform&rsquo;s 
	      	evolution to benefit the providers of software development offerings and end-users. All technology 
	      	and source code provided to and developed by this fast-growing community is made  
	      	available royalty-free via the Eclipse Public License.</p>
	      	
	      	<p>The founding Strategic Developers and Strategic Consumers 
			were Ericsson, HP, IBM, Intel, MontaVista Software, QNX, SAP and Serena Software.</p>
			<p></p>
			
			<p>You can learn more about the structure and mission of the Eclipse Foundation by reading the 
			<a href="http://www.eclipse.org/org/documents/">formal documents</a> that establish how the foundation 
			operates, and by reading the <a href="http://www.eclipse.org/org/press-release/feb2004foundationpr.php">
			press release</a> announcing the creation of the independent organization.</p>

			<p>For software licensing, website terms of use, and legal FAQs, please see our <a href="http://www.eclipse.org/legal/">legal stuff</a> page. 
			Eclipse logos and graphics are found on our eclipse <a href="http://www.eclipse.org/artwork/main.html">logos page.</a></p>

      </div>
      <div id="rightcolumn">
      
 
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="./press-release/">Press Releases</a></li>
				<li><a href="../membership/">Membership</a></li>
				<li><a href="../membership/become_a_member/">Become a member</a></li>
			</ul>
		</div>
     	<div class="sideitem">
			<h6>Thank you!</h6>
			<p>Our thanks to our many <a href="/corporate_sponsors/">Corporate Sponsors</a> for their generous donations to our infrastructure.</p>
		</div>		
	  </div>
  </div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
