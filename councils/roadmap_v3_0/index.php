<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "2007 Eclipse Roadmap";
	$pageKeywords	= "roadmap, projects, strategy, documents, about, foundation";
	$pageAuthor		= "Mike Milinkovich, Feb. 7, 2007";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

    <div id="maincontent">
    
    <style> 
		body {   
		background-image: url('./draft.gif'); 
		background-repeat: repeat-y
		}
	</style>
	
	<div id="midcolumn">
    <h1><a name="top"></a>$pageTitle</h1>
    <blockquote>
        <ul>
			<li><a href="#intro">Introduction</a></li>
			<li><a href="#background">Background</a></li>
			<li><a href="#strategic">Strategic Goals</a></li>
			<li><a href="#future">Future Directions</a></li>
			<li><a href="#process">The Roadmap Process</a></li>				
		</ul>
	</blockquote>
	<hr>
	<h3><a name="intro"></a>Introduction</h3>

	<p>As required by the <a href="../../documents/Eclipse Development Process 2003_11_09 FINAL.pdf">Eclipse
	Development Process</a>, this document describes the Eclipse Roadmap.</p>
	<p>The Roadmap is intended to be a living document which will see future
	iterations. This document is the third version of the Eclipse Roadmap,
	and is labeled as version 3.0. In order to preserve this document
	while the underlying information evolves, the pages have been frozen by
	copying them from their original project hosted locations. </p>
	<p>The goal of the Roadmap is to provide the Eclipse ecosystem with
	guidance and visibility on the future directions of the Eclipse open
	source community. An important element in this visibility is that the
	Roadmap determines what projects will be accepted by Eclipse during the
	life of this revision of the Roadmap. In other words, new projects must
	be consistent with the Roadmap. This does not mean that every new
	project must be explicitly envisaged by the Roadmap. It does mean that
	new projects cannot be inconsistent with the stated directions of
	Eclipse. In particular, Eclipse expects that incubator projects created
	in the Technology PMC will cover areas not explicitly described in the
	Roadmap.</p>
	<p>There are three main sections to this document:</p>
	<ol>
		<li>This Preamble provides some background on Eclipse and the
		Foundation, and identifies the strategic goals of Eclipse. It also
		provides a brief overview of the scope of future projects anticipated
		within the Eclipse open source community. <br/>
		</li>
		<li>The <a href="themes_v3_0.php">Themes and Priorities</a> which has been
		developed by the Eclipse Requirements Council. <br/>
		</li>
		<li>The <a href="PC_v3_0/index.php">Platform Release Plan</a> which has been
		developed by the Eclipse Planning Council.<br/>
		</li>
	</ol>
	<p align = right><small><a href="#top">back to top</a></small></p>
	<hr>
	<h3><a name="background"></a>Background</h3>
	<p>As defined on our website, the role of the Foundation is:</p>
	<blockquote>
	<p><em>Eclipse is an open source community whose projects are focused on 
	building an open development platform comprised of extensible frameworks, 
	tools and runtimes for building, deploying and managing software across 
	the lifecycle. A large and vibrant ecosystem of major technology vendors, 
	innovative start-ups, universities, research institutions and individuals 
	extend, complement and support the Eclipse platform.
	</em></p>
	</blockquote>
	<p>As defined in our <a
		href="../../documents/Eclipse BYLAWS 2003_11_10 Final.pdf">Bylaws</a> the
	Purposes of the Eclipse Foundation are:</p>
	<blockquote>
	<p><em>The Eclipse technology is a vendor-neutral, open development
	platform supplying frameworks and exemplary, extensible tools (the
	&ldquo;Eclipse Platform&rdquo;). Eclipse Platform tools are exemplary in
	that they verify the utility of the Eclipse frameworks, illustrate the
	appropriate use of those frameworks, and support the development and
	maintenance of the Eclipse Platform itself; Eclipse Platform tools are
	extensible in that their functionality is accessible via documented
	programmatic interfaces. The purpose of Eclipse Foundation Inc., (the
	&ldquo;Eclipse Foundation&rdquo;), is to advance the creation,
	evolution, promotion, and support of the Eclipse Platform and to
	cultivate both an open source community and an ecosystem of
	complementary products, capabilities, and services. <br/>
	</em></p>
	</blockquote>
	<p align = right><small><a href="#top">back to top</a></small></p>
	
	<hr>
	<h3><a name="strategic"></a>Strategic Goals</h3>
	<p>The following are the strategic goals of Eclipse.</p>
	<ol>
	<li>To define a vendor-neutral, open development platform which demonstrates 
	technology leadership and innovation. As an open development
	platform, Eclipse provides support for multiple operating environments
	and multiple programming languages. The goal of Eclipse is to define
	for the industry a development and runtime platform (e.g. Equinox, RCP) 
	which is freely licensed, open
	source and provides support for the full breadth of the application
	lifecycle, in many disparate problem domains, across the development
	and deployment platforms of choice. 
	</li><br/><br/>
	<li>Eclipse has had an enviable track record of building and maintaining a 
	strong and recognized name within the worldwide developer community. The 
	Eclipse Foundation will continue to invest to ensure that Eclipse is recognized 
	as a leading open source community with exciting, innovative technologies.
	</li><br/><br/>
	<li>To foster growth and adoption of Eclipse technology. Since its inception, 
	there has been rapid growth in people using Eclipse as their personal 
	toolset, as a platform for building their plug-ins, and as the basis for 
	their commercial products. 
	<br/><br/>
	The high rate of adoption of the Eclipse technology can be
	traced to two key factors: great technology, and the ease with which it
	can be adopted by others, both commercial and open source. This ease of
	adoption has, in turn, several dimensions. The EPL provides terms which are 
	conducive to both commercial and
	open source use. The focus on extensible frameworks has made it
	relatively simple to re-use Eclipse Technology in both products and applications.
	</li><br/><br/>
	<li>To cultivate the commercial success of the Eclipse ecosystem. 
	The creation of a large community of
	commercial and open source organizations which rely on and/or
	complement Eclipse technology has been a major factor in the success of
	Eclipse. Each time Eclipse technology is used in the development of
	a product, service or application the Eclipse community is strengthened.
	</li><br/><br/>
	</ol>
	<p align = right><small><a href="#top">back to top</a></small></p>
	
	<hr>
	<h3><a name="future"></a>Future Directions</h3>
	
	<p>The goal of the Roadmap is to provide the Eclipse ecosystem with
	guidance and visibility on the future directions of the Eclipse open
	source community, and to involve the Eclipse membership in a dialog
	about those future directions. In that vein, this section discusses our
	current vision of the future as a set of future projects that expand the
	value of the ecosystem for all of its members.</p>
	
	<p>The <a href="themes_v3_0.php">Themes and Priorities</a> document prepared
	by the Requirements Council describes a number of requirements and focus
	areas for the existing Eclipse projects.</p>
	
	<p>In addition to the <a href="themes_v3_0.php">Themes and Priorities</a>
	requirements on existing projects in 2007, we envision future growth in
	Eclipse projects in the following major areas. These are areas in which
	we envision starting new projects in 2007, not areas in which we
	envision having completed Eclipse-quality standards-based frameworks and
	tooling.</p>
	<ul>
	<li><strong>Enterprise Development</strong>
		<p>Eclipse has historically maintained a strong presence in the area of enterprise 
		development, with the success and adoption of the Java development tools 
		(<a href="/jdt/">JDT</a>) project as a prime example.</p>
		<p>As Eclipse continues to grow and evolve, we anticipate additional
		projects will be created in this space to meet the ever-evolving needs
		of enterprise developers. The sections below will cover many topics of
		interest to this audience (application lifecycle, RIA, RCP, SOA and the like), 
		but in addition we anticipate additional projects in Eclipse focused on 
		such disparate areas as 
		<a href="/dltk/">dynamic languages</a>,
		<a href="/epf/">software process engineering</a>,
		<a href="/higgins/">identity management</a>, and
		<a href="/modeling/">modeling</a>.
		</p>
	</li>
		
	<li><strong>Embedded and Device Software Development</strong>
		<p>Eclipse has seen a great deal of success in the embedded marketplace
		over the past several years. For example, <a href="/cdt/">CDT</a> has been used by a number
		of RTOS vendors as the basis for their tools platform. More recently the
		<a href="/dsdp/">Device Software Development Platform</a> project has added
		additional capabilities in the area of 
		<a href="/dsdp/tm/">target management</a>,
		<a href="/dsdp/dd/">device debug</a>,
		<a href="/dsdp/mtj">tools for mobile java developers</a>,
		<a href="/dsdp/nab/">C++ GUI builder</a>, and
		<a href="/ercp/">embedded rich client platform</a>.
		</p>
		<p>However, there are
		many different technologies currently not covered by Eclipse which
		would extend the utility of the Eclipse Platform for the embedded
		development market. Some examples include: <br/><br/>
		<ul>
			<li>Runtime analysis infrastructure to provide frameworks and tools to
			monitor applications running on a device</li>
			<li>Component configuration frameworks and tooling to configure
			operating systems, file systems and middleware</li>
			<li>Hardware bring-up mechanisms for on-chip debugging and early
			development</li>
			<li>Tools for <a href="/proposals/tml/">mobile Linux developers</a></li>
			<li>Board design tools </li>
		</ul><br/><br/></p>
	</li>

	<li><strong>Rich Client Platform (RCP)</strong>
		<p>
		The <a href="/rcp/">RCP</a>
		was first introduced by Eclipse with the 3.0 release of the Eclipse Platform
		in June, 2004. The RCP is a technology for building, provisioning and managing
		client applications with a rich user experience. Eclipse&rsquo;s goal is to make the
		RCP a mainstream development and runtime platform for both ISVs and enterprise
		developers. To do so, we plan to evolve the RCP technology in the
		following ways: <br/><br/>
		<ul>
		<li>Enhance RCP with new functionality such as better update, provisioning and
		management capabilities.</li>
		<li>Enhance the security capabilities of the RCP plug-in model.</li>
		<li>Provide application frameworks based on the RCP which extend the utility
		of the platform into such technology areas as enterprise content management,
		office and/or personal productivity tools --- particularly in the support of
		open standards related to documents and data interchange --- business application components 
		and the like. </li>
		</ul></p>
		<p>In addition to the above, we anticipate that the <a href="http://www.osgi.org/">OSGi</a> runtime technology 
		which underpins RCP will continue to see rapid expansion in the number of projects using this 
		technology on architectural tiers
		other than the client. Already, the Eclipse <a href="/equinox/">Equinox</a> project
		includes technology for the <a href="/equinox/server/">server-side</a>. The
		<a href="/corona/">Corona</a> project extends this for collaborative development. The
		<a href="/ercp/">eRCP</a> project is bringing OSGi-based implementations to mobile devices.
		This is a trend that we expect to see continue as interest in OSGi as a lightweight container
		for services-based components continues to expand.
		</p>
	</li>

	<li><strong>Rich Internet and Ajax Applications</strong>
		<p>RIA technologies such as Ajax and Flash continue to grow rapidly as the development
		technology of choice for many new software products and applications. The Eclipse 
		community&rsquo;s initial projects in this space include:</p>
		<ul>
			<li>The Ajax Toolkit Framework (<a href="/atf/">ATF</a>) project which provides a complete
			IDE for Ajax edit/compile/debug.</li>
			<li>The Rich Ajax Platform (<a href="/rap/">RAP</a>) project which implements an OSGi-based
			runtime for building and deploying rich, Ajax-enabled web applications written in Java and 
			deployed from a	server.</li>
		</ul>
		<p>We anticipate continued growth in Eclipse projects in the RIA area, as developers look to 
		leverage Eclipse runtimes, frameworks and tools in this domain.
		</p>
	</li>

	<li><strong>Application Lifecycle</strong>
		<p>Eclipse today provides a great deal of coverage of the software
		development lifecycle. Eclipse&rsquo;s goal is to provide complete coverage of the
		software development lifecycle with frameworks and extensible,
		exemplary tools. Included in this category are such capabilities as
		tool integration, developer productivity tools, development management,
		traceability tools, and collaborative development.</p>
		<p>In 2006, several new initiatives were started to help
		extend Eclipse&rsquo;s lifecycle coverage, including 
		<a href="/corona/">Corona</a>,
		<a href="/aperi/">Aperi</a>,
		<a href="/cosmos/">COSMOS</a>, and
		<a href="/buckminster/">Buckminster</a>.
		<p/>
		<p>Some examples of possible new project areas which would further extend this lifecycle 
		coverage include: <br/>
		<br/><ul>
			<li>requirements management
			<li>deployment and provisioning, and</li>
			<li>build management.</li>
		</ul>
		</p></br>
	</li>	

	<li><strong>Service Oriented Architecture</strong>
		<p>One of the major areas of growth in enterprise application development is in 
		Service Oriented Architecture (SOA). The major focal point for Eclipse development 
		in this space is the SOA Tools Project (<a href="/stp/">STP</a>), which is focused
		providing a generic, extensible, standards-based tool platform for producing 
		SOA applications based around the Service Component Architecture (SCA) specification.
		</p>
		<p>The initial projects within STP are focused on such areas as
		<a href="/stp/sc/">service creation</a>,
		<a href="/stp/b2j/">BPEL to Java</a>, and
		<a href="/stp/bpmn/">BPMN</a>. Future initiatives in the SOA space could include
		support of the Java Business Integration (JBI) spec.
		</p>
	</li>

	<li><strong>Vertical market technology frameworks</strong>
		<p>We are seeing interest from vertical market vendors in basing their
		next generation tools on Eclipse. Thus a future growth area for Eclipse
		is to extend our projects to provide open source application frameworks
		and exemplary tools targeted at standards in specific vertical markets
		such as aerospace, automotive, and healthcare. One area of particular interest
		is the development of RCP-based application frameworks which
		can be used to build and deploy products and applications targeted at 
		particular domains.</p>
	</li>
	</ul>
	<p align = right><small><a href="#top">back to top</a></small></p>
	
	<hr/>
	<h3><a name="process">The Roadmap Process</a></h3>
	<p>The process of creating the Eclipse Roadmap is described in the <a
		href="../../documents/Eclipse Development Process 2003_11_09 FINAL.pdf">Eclipse
		Development Process</a>. The key pieces are</p>
	<blockquote>
	<p><em>Creating or updating the Roadmap begins with the Requirements
	Council proposing a set of Themes and Priorities that realize the
	Purposes and that respond to requirements elicited from the Strategic
	Developers, Strategic Consumers, Add-in Providers, and other
	constituents of the Ecosystem. After review by the Board of Directors,
	these Themes and Priorities are provided as input to the 
Planning Council. The EMO ensures that the Planning
	Council and the Development teams have access to all requirements.
	Updates to the Purposes are likely to require updates to the Roadmap and
	its associated themes and priorities; proposed Roadmap updates may also
	be motivated by new technologies or opportunities.</em></p>
	<p><em>The process of producing or updating the Roadmap is expected to
	be iterative. An initial set of Themes and Priorities may be infeasible
	to implement in the desired timeframe; subsequent consideration may
	reveal new implementation alternatives or critical requirements that
	alter the team&rsquo;s perspective on priorities. The EMO orchestrates
	interaction among and within the three Councils to drive the Roadmap to
	convergence.</em></p>
	</blockquote>
	<p align="left">This third version of the Eclipse Roadmap has been developed 
	by the two councils:&nbsp; the Planning 
	Council and the Requirements Council. The Councils met face-to-face three
	times in 2006:&nbsp; once in May, once in October and again in January. (The minutes
	of these meetings are available on the <A
		href="../../foundation/council.php">Councils
	page</A>). Subsequent discussion of
	the Roadmap was done through numerous individual phone calls,
	and&nbsp;more numerous emails amongst the Council members.</p>
	<P align=left><SPAN class=203453704-21022005>The information flow we
	managed to achieve in this first draft was:</SPAN></P>
	<UL>
		<LI>
		<DIV align=left><SPAN class=203453704-21022005>from the membership
		(both the membership-at-large and the strategic members) to the
		Requirements Council</SPAN></DIV>
		<LI>
		<DIV align=left><SPAN class=203453704-21022005>from the PMC project
		plans to the Planning Council</SPAN></DIV>
	</UL>
	
	<P align=left><SPAN class=203453704-21022005>In summary,&nbsp;through </SPAN>lots
	of hard work<SPAN class=203453704-21022005> by everyone</SPAN>, the
	two groups converged on this&nbsp;<SPAN class=203453704-21022005>Roadmap
	</SPAN>document.</P>
	<p align="left">The Roadmap was presented and affirmed by the Eclipse Board of
	Directors on INSERT DATE HERE.</p>
	<p align="left">&nbsp;</p>
		
		
	<p align = right><small><a href="#top">back to top</a></small></p>	
	<br/><br/>
	</div>
	<div id="rightcolumn">
	    <div class="sideitem">
			<h6>Thank you!</h6>
			<p>Our thanks to <a href="../../foundation/thankyou.php">HP, IBM, Intel, Magma and Novell</a> for generous donations to our website infrastructure.</p>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="../../../projects/">Projects</a></li>
				<li><a href="../../../membership/">Membership</a></li>
				<li><a href="../../../membership/become_a_member/">Become a member</a></li>
			</ul>
		</div>
	</div>
	</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
