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
			<li><a href="#progress">Progress in 2006</a></li>
			<li><a href="#future">Future Directions</a></li>
			<li><a href="#process">The Roadmap Process</a></li>				
		</ul>
	</blockquote>
	<hr>
	<h3><a name="intro"></a>Introduction</h3>

	<p>As required by the <img border="0" src="PC_v3_0/external.gif" width="20"
	height="16"><a href="../../documents/Eclipse Development Process 2003_11_09 FINAL.pdf">Eclipse
	Development Process</a>, this document describes the Eclipse Roadmap.</p>
	<p>The Roadmap is intended to be a living document which will see future
	iterations. This document is the third version of the Eclipse Roadmap,
	and is labeled as version 3.0. In order to preserve this document
	while the underlying information evolves, the pages have been frozen by
	copying them from their original project hosted locations. Each frozen
	document is labeled with its version and date and includes a link back
	to its &quot;live&quot; version. Links that go outside this frozen copy
	are marked with the <img border="0" src="PC_v3_0/external.gif"
		width="20" height="16"> icon to inform the reader that that information
	may have changed since this document has written.</p>
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
	<p><em>The Eclipse Foundation is a not-for-profit corporation formed to
	advance the creation, evolution, promotion, and support of the Eclipse
	Platform and to cultivate both an open source community and an ecosystem
	of complementary products, capabilities, and services.</em></p>
	</blockquote>
	<p>As defined in our <img border="0" src="PC_v3_0/external.gif"
		width="20" height="16"><a
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
	<li>To define an open development platform which embodies 
	technology leadership and innovation. As an open development
	platform, Eclipse provides support for multiple operating environments
	and multiple programming languages. The goal of Eclipse is to define
	for the industry a development platform and rich client platform (RCP) which is freely licensed, open
	source and provides support for the full breadth of the application
	lifecycle, in many disparate problem domains, across the development
	and deployment platforms of choice. 
	</li><br/><br/>
	<li>To spur growth and adoption of Eclipse technology. Since its inception, 
	there has been rapid growth in people using Eclipse as their personal 
	toolset, as a platform for building their plug-ins, and as the basis for 
	their commercial products. 
	<br/><br/>
	The high rate of adoption of the Eclipse technology can be
	traced to two key factors: great technology, and the ease with which it
	can be adopted by others, both commercial and open source. This ease of
	adoption has, in turn, several dimensions. The EPL and its CPL
	predecessor provide terms which are conducive to both commercial and
	open source use. The focus on extensible frameworks has made it
	relatively simple to re-use Eclipse Technology.
	</li><br/><br/>
	<li>To enable a commercially successful ecosystem. The creation of a large community of
	commercial and open source organizations which rely on and/or
	complement Eclipse technology has been a major factor in the success of
	Eclipse.
	</li><br/><br/>
	</ol>
	<p align = right><small><a href="#top">back to top</a></small></p>
	
	<hr>
	<h3><a name="progress"></a>Progress in 2006</h3>
	<p>This is the third version of the Eclipse Roadmap document. It is important to recognize the many 
	objectives which have been accomplished since the original version. The following is a list of accomplishments 
	based on 2006&rsquo;s themes.</p>
	<p><strong>MIKE ADD TEXT HERE</strong></p>
	<ul>
	<li>MIKE ADD TEXT HERE</li>
	</ul>
	
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
		<li><strong>Extend coverage of the software development life-cycle</strong><br/>
		<br/>
		Eclipse today provides a great deal of coverage of the software
		development lifecycle. Eclipse&rsquo;s goal is to provide <em>complete</em> coverage of the
		software development lifecycle with frameworks and extensible,
		exemplary tools. In 2005, major new initiatives were started to help
		extend Eclipse&rsquo;s lifecycle coverage, including 
		<img border="0" src="PC_v3_0/external.gif" width="20" height="16"><a href="/alf/">ALF</a>,
		<img border="0" src="PC_v3_0/external.gif" width="20" height="16"><a href="/datatools/">Data tools</a>, and
		<img border="0" src="PC_v3_0/external.gif" width="20" height="16"><a href="/proposals/modeling/">Modeling</a>.<br/>
		<br/>
		Some examples of possible new project areas which would further extend this lifecycle coverage include: <br/>
		<ul>
			<li>requirements management,</li>
			<li>deployment, and</li>
			<li>system management.</li>
		</ul>
		
	
	<p>In addition, Eclipse will continue to focus on evolving its
	frameworks and exemplary tools to meet new development technologies and
	runtime environments such as web services and service-oriented
	architectures. Support for additional programming languages is also
	anticipated. <br/>
	</p>
	</li>
	</ul>
	<ul>
		<li><strong>Extend the Rich Client Platform (RCP)</strong><br/>
		<br/>
		The <img border="0" src="PC_v3_0/external.gif" width="20" height="16"><a
			href="/rcp/">RCP</a>
		was first introduced by Eclipse with the 3.0 release of the Eclipse Platform
		in June, 2004. The RCP is a technology for building and managing
		applications with a rich user experience. Eclipse&rsquo;s goal is to make the
		RCP a mainstream development and runtime platform for both ISVs and enterprise
		developers. To do so, we plan to evolve the RCP technology in the
		following ways: <br/>
		<ul>
			<li>Target RCP for additional operating environments. One example of
		this is the eRCP project which is evaluating the use of Eclipse for
		embedded constrained devices such as mobile phones and PDAs.</li>
		<li>Enhance RCP with new functionality such as better update and
		management capabilities.</li>
		<li>Enhance the security capabilities of the RCP plug-in model.</li>
		<li>Provide application frameworks based on the RCP. <br/>
		<br/>
		</li>
	</ul>
	</li>
	<li><strong>Embedded</strong><br/>
	<br/>
	Eclipse has seen a great deal of success in the embedded marketplace
	over the past several years. For example, CDT has been used by a number
	of RTOS vendors as the basis for their tools platform. But there are
	many different technologies currently not covered by Eclipse which
	would extend to utility of the Eclipse Platform for the embedded
	market. Some examples include: <br/>
	<ul>
		<li>Runtime analysis infrastructure to provide frameworks and tools to
		monitor applications running on a device</li>
		<li>Component configuration frameworks and tooling to configure
		operating systems, file systems and middleware</li>
		<li>Target connectivity frameworks to provide mechanisms to connect to
		embedded devices</li>
		<li>Hardware bring-up mechanisms for on-chip debugging and early
		development</li>
		<li>Board design tools <br/>
		<br/>
		</li>
	</ul>
	</li>
	<li><strong>Multiple language support</strong><br/>
	<br/>
	Although Eclipse has been very successful in providing language tools
	for Java and C/C++, doing so still requires a great deal of effort.
	Improving the Eclipse frameworks to provide more consistent APIs for
	plugging in editors, debuggers, build environments, etc. for multiple
	languages is an important goal. There are several different views on
	what multiple language support can mean. Support for compiled
	languages, scripting languages and &quot;Java like&quot; languages such
	as JSP, SQLJ and the like are all related areas where work needs to be
	done. There are numerous trade-offs to be made as well. For example,
	JDT has been highly customized to provide a very rich feature set. Will
	an abstract language toolkit approach meet its needs?<br/>
	<br/>
	From the perspective of the plug-in providers, there is a lot of
	interest in more easily enabling plug-ins for specialized components
	(debuggers, managed builds, editors) which work across multiple
	languages. Currently if an add-in provider wants to support both CDT
	and JDT separate plug-ins are required. <br/>
	<br/>
	</li>
	<li><strong>Vertical market technology frameworks</strong><br/>
	<br/>
	We are seeing interest from vertical market vendors in basing their
	next generation tools on Eclipse. Thus a future growth area for Eclipse
	is to extend our projects to provide open source application frameworks
	and exemplary tools targeted at standards in specific vertical markets
	such as aerospace, automotive, and healthcare.</li>
	</ul>
	<p align = right><small><a href="#top">back to top</a></small></p>
	
	<hr/>
	<h3><a name="process">The Roadmap Process</a></h3>
	<p>The process of creating the Eclipse Roadmap is described in the <img
		border="0" src="PC_v3_0/external.gif" width="20" height="16"><a
		href="../../documents/Eclipse Development Process 2003_11_09 FINAL.pdf">Eclipse
		Development Process</a>. The key pieces are</p>
	<blockquote>
	<p><em>Creating or updating the Roadmap begins with the Requirements
	Council proposing a set of Themes and Priorities that realize the
	Purposes and that respond to requirements elicited from the Strategic
	Developers, Strategic Consumers, Add-in Providers, and other
	constituents of the Ecosystem. After review by the Board of Directors,
	these Themes and Priorities are provided as input to the Architecture
	Council and the Planning Council. The EMO ensures that the Planning
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
	<p align="left">This second version of the Eclipse Roadmap has been developed 
	by the two councils:&nbsp; the Planning 
	Council and the Requirements Council. The Councils met face-to-face three
	times in 2006:&nbsp; once in May, once in October and again in January. (The minutes
	of these meetings are available on the <img border="0"
		src="PC_v3_0/external.gif" width="20" height="16"><A
		href="../../foundation/council.php">Councils
	page</A>. Subsequent discussion of
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
		<DIV align=left><SPAN class=203453704-21022005>from the Requirements
		Council to the Planning and Architecture Councils</SPAN></DIV>
		<LI>
		<DIV align=left><SPAN class=203453704-21022005>from the PMC project
		plans to the Planning Council</SPAN></DIV>
	</UL>
	
	<P align=left><SPAN class=203453704-21022005>In summary,&nbsp;through </SPAN>lots
	of hard work<SPAN class=203453704-21022005> by everyone</SPAN>, the
	two groups converged on this&nbsp;<SPAN class=203453704-21022005>Roadmap
	</SPAN>document.</P>
	<p align="left">The Roadmap was presented and affirmed by the Eclipse Board of
	Directors on Monday, March 20, 2006.</p>
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
