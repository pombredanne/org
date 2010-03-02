<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse RoadMap v5";
	$pageKeywords	= "about, documents, history";
	$pageAuthor		= "Donald Smith";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

    <div id="maincontent">
	<div id="midcolumn">
        <h1><a name="top"></a>$pageTitle</h1>
        <ol>
			<li><a href="#introduction">Introduction</a></li>
			<li><a href="#background">Background</a></li>
			<li><a href="#strategic">Strategic Goals</a></li>
			<li><a href="#futures">Future Directions</a>
			<ol>
				<li><a href="#e4">Eclipse 4.0</a></li>
				<li><a href="#cloud">cloud</a></li>
				<li><a href="#RT">eclipseRT</a></li>
				<li><a href="#web">web development</a></li>
				<li><a href="#Etc">TBD PLACE HOLDER</a></li>
			</ol></li>
			<li><a href="#process">The Road Map Process</a></li>	

		</ol>
		
	    <h2><a name="introduction"></a>Introduction</h2>
		<p>As required by the Eclipse Development Process, this document describes the 2010 Eclipse Roadmap.</p>

		<p>There are three main sections to this document:</p>
			<ol>
				<li> This Preamble provides some background on Eclipse and the Foundation, and identifies the 
				strategic goals of Eclipse. It also provides a brief overview of the scope of future projects</li>
				<li> The <a href="http://wiki.eclipse.org/RequirementsCouncilThemesAndPriorities">Themes and Priorities</a> which has been developed by the Eclipse Councils. [TO BE FROZEN ON MARCH 5th]</li> 
				<li> The <a href="./plans/index.php">Platform Release Plan</a> which has been developed by the Eclipse 
				Planning Council.</li>
			</ol>
		
		<p>The Roadmap is intended to be a living document which will see future iterations. This document is the 
		fifth version of the Eclipse Roadmap, and is labeled as version 5.0. In order to preserve this document 
		while the underlying information evolves, the pages have been frozen by copying them from their original 
		project hosted locations.</p>

		<p>The goal of the Roadmap is to provide the Eclipse ecosystem with guidance and visibility on the future 
		directions of the Eclipse open source community. An important element in this visibility is that the 
		Roadmap help the EMO and the Board of Directors in determining which projects will be accepted by Eclipse 
		during the life of this revision of the Roadmap. In other words, new projects must be consistent with the 
		Roadmap. This does not mean that every new project must be explicitly envisaged by the Roadmap. It does 
		mean that new projects cannot be inconsistent with the stated directions of Eclipse. In particular, Eclipse 
		expects that incubator projects created in the Technology PMC will cover areas not explicitly described 
		in the Roadmap.</p>
		
		<p>New in the version 5.0 iteration of the Road Map is a focus on projects that are part of the next planned
		release train code named "Helios" with a release date of June 2010.  For example, project plan listings
		are plans for Helios from the projects that are part of that release train.</p>

		<a name="background"></a><h2>Background</h2>
		<p>As defined on our website, the role of the Foundation is:
		</p>
		<p><i>Eclipse is an open source community, whose projects are focused on building an open development 
		platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software 
		across the lifecycle. The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the 
		Eclipse projects and helps cultivate both an open source community and an ecosystem of complementary products 
		and services.</i></p>

		<p>As defined in our Bylaws the Purposes of the Eclipse Foundation are:
		</p>
		<i>The Eclipse technology is a vendor-neutral, open development platform supplying 
		frameworks and exemplary, extensible tools (the "Eclipse Platform"). Eclipse Platform tools are exemplary in 
		that they verify the utility of the Eclipse frameworks, illustrate the appropriate use of those frameworks, 
		and support the development and maintenance of the Eclipse Platform itself; Eclipse Platform tools are 
		extensible in that their functionality is accessible via documented programmatic interfaces. The 
		purpose of Eclipse Foundation Inc., (the "Eclipse Foundation"), is to advance the creation, evolution,
		 promotion, and support of the Eclipse Platform and to cultivate both an open source community and an 
		ecosystem of complementary products, capabilities, and services.</i><br>
		
		<a name="strategic"></a><h2>Strategic Goals</h2>
		<p>The following are the strategic goals of the Eclipse Foundation.
		</p>
		<ol><li> Establish Eclipse as a leading provider of open source runtime technologies. At least since 
		2004, Eclipse projects have been shipping innovative runtime technologies such as Equinox and the 
		Rich Client Platform. The last several years have seen steady growth in runtime technologies at Eclipse. 
		At the same time, there has been rapid growth in interest in OSGi, which is the standard upon 
		which the Eclipse plug-in model is based. Moving forward, we expect to see rapid growth in both the
		projects building and the adoption of Eclipse runtime technologies.
		<br /><br /></li>
		
		<li> Maintain global leadership in open source tools platforms. As an open development platform, 
		Eclipse provides support for multiple operating environments and multiple programming languages. 
		The goal of Eclipse is to define for the industry a development platform which is freely licensed, 
		open source and provides support for the full breadth of the application lifecycle, in many disparate 
		problem domains, across the development and deployment platforms of choice. In particular, as Rich 
		Internet Application development becomes more mainstream, we anticipate new projects at Eclipse to 
		address the needs of that community.</li>
		
		<li> Create value for all its membership classes. The Eclipse Foundation serves many members 
		whose primary interest in leveraging Eclipse technologies in commercial offerings such as products
		and services. The Eclipse Foundation will focus its energies to ensure that commercial opportunity 
		exists within the Eclipse ecosystem. Look for continuous improvements to 
		<a href="http://marketplace.eclipse.org/">Eclipse Marketplace</a>, and other initiatives for the 
		benefits of members.
		
		<br /><br />Committers are also members of the Eclipse Foundation 
		and are in many ways its backbone. The Eclipse Foundation and its staff will continue to look for 
		opportunities to continually improve services to its project community throughout 2010.
		Look for enhancements to our web, download, code management, build and other key components of
		project infrastructure in 2010.</li>
		
		<li> Foster growth of the ecosystem, particularly in verticals. The creation of a large community of 
		commercial and open source organizations which rely on and/or complement Eclipse technology has been 
		a major factor in the success of Eclipse. Each time Eclipse technology is used in the development of 
		a product, service or application the Eclipse community is strengthened. Our goal in 2010 is to focus 
		our attention on the creation of industry working groups and new Eclipse projects which focus on 
		particular industry segments such as mobile, automotive, insurance and finance.</li>
	
		<li>Run a good ship.  This Eclipse Foundation employs several staff and represents hundreds of 
		stakeholders.  It is important that the Foundation be a well run organization internally and
		externally.</li>
		
		<li>Continue to grow a diversified revenue model.  Reliance on a single source of revenue to 
		fund the Foundation puts at greater risk of being negatively impacted by
		industry specific business cycles.  It is a goal of the Eclipse Foundation to 
		ensure revenue sources from multiple types of organizations, and seek other sources such 
		as events and sponsorships.</li>
		
		<li>Ensure adequate resources are invested in the core technology platform.  Although Eclipse
		hosts well over 100 different projects, many depend on a core set of projects to continue
		to evolve and innovate.  It is important the new entants be encouraged to participate in
		these core projects and be informed of the importance of and need for their support.
		</li>
		
	</ol>
				
		<a name="#futures"></a><h2>Future Directions</h2>

		<p>The goal of the Roadmap is to provide the Eclipse ecosystem with guidance and visibility 
		on the future directions of the Eclipse open source community, and to involve the Eclipse 
		membership in a dialog about those future directions. In that vein, this section discusses 
		our current vision of the future as a set of future projects that expand the value of the 
		ecosystem for all of its members.</p>

		<p>The Themes and Priorities document prepared by the Requirements Council describes a number 
		of requirements and focus areas for the existing Eclipse projects.</p>

		<p>In addition to the Themes and Priorities requirements on existing projects in Helios, we envision 
		future growth in Eclipse projects in the following major areas. These are areas in which we 
		envision starting new projects in 2010-2011, not areas in which we envision having completed 
		Eclipse-quality standards-based frameworks and tooling. </p>
		
		<a name="#e4"></a><h2>Eclipse 4.0</h2>
		<p>2010 will see the first major release of the Eclipse Platform since 2004. The major goals 
		of <a href="/e4/">this new release</a> include:<ul>
		<li>Making it easier to write plug-ins</li>
    	<li>Allowing better control over the look of Eclipse based products</li>
    	<li>Providing a uniform, pervasive platform across computing environments (Web / RIA, Desktop, Server, Cloud, Embedded)</li>
    	<li>Increasing diversity of contributors to the platform</li>
    	<li>Maintaining backward compatibility for API-clean clients</li></ul></p>
			
		
		<a name="#cloud"></a><h2>Cloud</h2>
		<p>Projects such as Amazons AWS tooling build on the Eclipse Platform give instant credibility
		to Eclipse as a important piece of the strategy for cloud tool providers.  Eclipse has a role to play
		in the entire development lifecycle from development, deployment to testing and QA. 
		
		In addition to tools, OSGi and Equinox will play an important role in the cloud.  The ability to 
		maintain configurations and deployments in large scale applications will be essential to
		scaling the cloud.		 
		</p>

		<a name="#RT"></a><h2>eclipseRT</h2>
		<p>EclipseRT will continue to grow and evolve.  The recent Gemini and Virgo projects at Eclipse 
		demonstrate the community is starting to associate Eclipse as a great place to do runtimes.  The
		key uniter of the various runtime technologies at Eclipse continues to be OSGi as the kernel, but
		it is plausible for some other complementary technology to become an Eclipse project.</p>
		
		<a name="#web"></a><h2>Web Development</h2>
		<p>Eclipse tools have historically had a very strong correlation with the Java language. However,
		with the rapid growth of Rich Internet Application languages and technologies such as JavaScript
		and Ajax, the Eclipse community must support the requirements of these developers as well. Eclipse 
		will begin to invest in re-tooling the Eclipse platform with the needs of Web developers in mind. </p>
		
		<a href="#process"></a><h2>The Roadmap Process</h2>

		<p>The process of creating the Eclipse Roadmap is described in the Eclipse Development Process. 
		The key pieces are:</p>
		<ul>
        <li>The Councils proposing a set of Themes and Priorities 
        that realize the Purposes and that respond to requirements elicited from the Strategic Developers, Strategic 
        Consumers, Sustaining Members, and other constituents of the Ecosystem. The EMO ensures that the Planning 
        Council and the Development teams have access to all requirements. Updates to the purposes are likely to 
        require updates to the Roadmap and its associated themes and priorities; proposed Roadmap updates may also be 
        motivated by new technologies or opportunities. </li>

        <li>The process of producing or updating the Roadmap is expected to be iterative. An initial set of Themes and 
        Priorities may be infeasible to implement in the desired time frame; subsequent consideration may reveal new 
        implementation alternatives or critical requirements that alter the team's perspective on priorities. The 
        EMO orchestrates interaction among and within the three Councils to drive the Roadmap to convergence. </li>
		</ul>
		
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
			<p>Our thanks to <a href="/corporate_sponsors/">our many corporate sponsors</a> for generous donations to our infrastructure.</p>
		</div>		
	  </div>
  </div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

