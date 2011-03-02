<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "COMMUNITY REVIEW DRAFT Eclipse RoadMap v6";
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
				<li><a href="#e4">Eclipse 4.x</a></li>
				<li><a href="#orion">Orion</a></li>
				<li><a href="#model">Modeling</a></li>
				<li><a href="#RT">EclipseRT</a></li>
				<li><a href="#cloud">Cloud</a></li>
			</ol></li>
			<li><a href="#process">The Road Map Process</a></li>	

		</ol>
		
	    <h2><a name="introduction"></a>Introduction</h2>
		<p>As required by the Eclipse Development Process, this document describes the 2011 Eclipse Roadmap.</p>

		<p>There are three main sections to this document:</p>
			<ol>
				<li> This Preamble provides some background on Eclipse and the Foundation, and identifies the 
				strategic goals of Eclipse. It also provides a brief overview of the scope of future projects</li>
				<li> The <a href="./themes60.php">Themes and Priorities</a> which has been developed by the Eclipse Councils.</li> 
				<li> The <a href="./plans/index.php">Platform Release Plan</a> which has been developed by the Eclipse 
				Planning Council.</li>
			</ol>
		
		<p>The Roadmap is intended to be an ongoing document which undergoes incremental iterations. This document is the 
		sixth version of the Eclipse Roadmap, and is labeled as version 6.0. In order to preserve this document 
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
		

		<a name="background"></a><h2>Background</h2>
		<p>As defined on our website, the role of the Eclipse Foundation is:
		</p>
		<p><i>Eclipse is an open source community, whose projects are focused on building an open development 
		platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software 
		across the lifecycle. The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the 
		Eclipse projects and helps cultivate both an open source community and an ecosystem of complementary products 
		and services.</p></i>

		<p>As defined in our Bylaws the Purposes of the Eclipse Foundation are:
		</p>
		<p><i>The Eclipse technology is a vendor-neutral, open development platform supplying 
		frameworks and exemplary, extensible tools (the "Eclipse Platform"). Eclipse Platform tools are exemplary in 
		that they verify the utility of the Eclipse frameworks, illustrate the appropriate use of those frameworks, 
		and support the development and maintenance of the Eclipse Platform itself; Eclipse Platform tools are 
		extensible in that their functionality is accessible via documented programmatic interfaces. The 
		purpose of Eclipse Foundation Inc., (the "Eclipse Foundation"), is to advance the creation, evolution,
		 promotion, and support of the Eclipse Platform and to cultivate both an open source community and an 
		ecosystem of complementary products, capabilities, and services.</i></p>
		
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
		
		<li>Establish Eclipse web technology as a leading open source web application platform. There is 
		no doubt that development in the web for the web (or in the cloud for the cloud)
		is becoming increasingly important. The recent lunch of the Eclipse Orion initiative is a 
		first step towards extending the Eclipse Platform towards making it more relevant for web 
		developers. The Eclipse Foundation will put its resources towards increasing adoption of and
		contributions to Orion.
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
		envision further growth in 2011-2012, and Eclipse-quality standards-based frameworks and tooling
		in these areas begin to become a reality. </p>
		
		<a name="#e4"></a><h2>Eclipse 4.x</h2>
		<p>2011 will see another release of the Eclipse 4 stream, Eclipse 4.1. The major goals 
		of <a href="/e4/">this new release</a> include:<ul>
		<li>Making it easier to write plug-ins</li>
    	<li>Allowing better control over the look of Eclipse based products</li>
    	<li>Increasing diversity of contributors to the platform</li>
    	<li>Maintaining backward compatibility for API-clean clients</li></ul></p>
    	<p>The progress of Eclipse 4 has been very positive and in June, 2012 it may be the major
    	version of Eclipse used in the distros hosted at the Eclipse downloads page.</p>

    	<a name="#orion"></a><h2>Orion</h2>
		
    	<p>Eclipse tools have historically had a very strong correlation with the Java language. However,
		with the rapid growth of Rich Internet Application languages and technologies such as JavaScript
		and Ajax, the Eclipse community must support the requirements of these developers as well. Eclipse 
		will begin to invest in re-tooling the Eclipse platform with the needs of Web developers in mind. </p>
		
    	<p>Orion launched in early 2011 and continue to receive emphasis and promotion throughout the
		year.  Orion is <em>not</em> targeted
		at the classic Eclipse Developer, but is instead targeted at Web and RIA developers.  This new
		development model and target audience will even futher diversify and grow our community in
		new and exciting directions. 
    	</p>
				
		<a name="#model"></a><h2>Modeling</h2>
		<p>The growing popularity of modeling and model-driven development has been an important driver
		for Eclipse projects for some time. We expect the momentum to grow even stronger in 2011. Eclipse-based modeling
		technologies such as Papyrus and Sphinx have become increasingly important for dealing with large, complex 
		systems engineering and safety-critical systems. The Xtext project for supporting Domain Specific Languages
		has also generated enormous interest.</p>
		
    	<a name="#RT"></a><h2>EclipseRT</h2>
		<p>The Indigo release train in 2011 will see for the first time an EclipseRT Package
		available, and we expect EclipseRT will continue to grow and evolve.  The Gemini and Virgo projects at Eclipse 
		continue to demonstrate the community is starting to associate Eclipse as a great place to do runtimes.  The
		key uniter of the various runtime technologies at Eclipse continues to be the Equinox implementation of the
		OSGi standard.</p>
		
		<a name="#cloud"></a><h2>Cloud</h2>
		<p>Projects such as Amazons AWS tooling and
		the Beanstalk product built on the Eclipse Platform give instant credibility
		to Eclipse as a important piece of the strategy for cloud tool providers.  Eclipse has a role to play
		in the entire development lifecycle from development, deployment to testing and QA. 
		
		In addition to tools, OSGi and Equinox will play an important role in the cloud.  The ability to 
		maintain configurations and deployments in large scale applications will be essential to
		scaling the cloud.		 
		</p>

		
		<a href="#process"></a><h2>The Roadmap Process</h2>

		<p>The process of creating the Eclipse Roadmap is described in the Eclipse Development Process. 
		The key pieces are:</p>
		<ul>
        <li>The Councils propose a set of Themes and Priorities 
        that realize the purposes and that respond to requirements elicited from the Strategic Developers, Strategic 
        Consumers, Sustaining Members, and other constituents of the ecosystem. The EMO ensures that the Planning 
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

