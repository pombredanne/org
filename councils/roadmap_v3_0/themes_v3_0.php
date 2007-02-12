<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse 2007 Themes and Priorities";
	$pageKeywords	= "roadmap, projects, strategy, documents, about, foundation";
	$pageAuthor		= "Donald Smith";
	
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

	<div id="midcolumn">
    <h1><a name="top"></a>$pageTitle</h1>
    <blockquote>
        <ul>
			<li><a href="#intro">Introduction</a></li>
			<li><a href="#principles">Fundamental Principles</a></li>
			<li><a href="#tp">Themes and Priorities</a></li>
			<li><a href="#contributors">Contributors</a></li>
			<li><a href="#acknowledgements">Acknowledgements</a></li>
		</ul>
		</blockquote>
		
	<hr>
	<h3><a name="intro"></a>Introduction</h3>
	<p>
	The themes and priorities capture the inputs to the Eclipse Requirements <a
	href="../../foundation/council.php">Council</a>. 
	The <a href="http://wiki.eclipse.org/index.php/RequirementsCouncil06TP">Eclipse Themes and Priorities</a> is now a living, breathing document maintained by the Requirements Council
	and other participants.  The document is maintained on the <a href="http://wiki.eclipse.org/index.php/RequirementsCouncil06TP">Eclipse Foundation Wiki</a>. 
	The inputs are from four major sources:</p>
	<ol>
		<li>Strategic Members of the Eclipse Foundation,</li>
		<li>The Project Management Committees (PMCs), and</li>
		<li>The general membership through the input collected from various
			Eclipse members,</li>
		<li>The feedback of business analysts and market data within the Eclipse Ecosystem.</li>
	</ol>
	<p>
	This page represents a baseline of the <a href="http://wiki.eclipse.org/index.php/RequirementsCouncil06TP">T&P Wiki</a>
	page as of February 10th, 2007.  The themes were generated by collecting requirements from the above
	sources and then synthesizing themes from the various inputs.
	</p>
	<p align = right><small><a href="#top">back to top</a></small></p>
	
	<hr>
	<h3><a name="principles"></a>Fundamental Principles</h3>
	<p><br/>
	These are our fundamental principles, unchanged in 2007, which span all of the themes
	outlined below.</p>
	<ul>
		<li>Eclipse projects provide exemplary (meaning "show by example") implementations and extensible frameworks. Where projects require use of other technolgies (such as source control, application servers, build engines), they will target exemplary free open source implementations of those technologies."<br/>
		</li>
		<li>We will aim for release-to-release binary compatibility for API
		clean plug-ins for at least the last major release.<br/>
		</li>
		<li>The platforms supported by each project are determined by the
		specific project. Each project must keep its support for all supported
		platforms current and publicly announce otherwise.</li>
		<li>The Eclipse community will relentlessly re-factor code to improve
		components and make them available for public consumption.<br/>
		</li>
	</ul>
	<p align = right><small><a href="#top">back to top</a></small></p>
	<hr>
	
	

<h3><a name="tp"></a>2007 Themes and Priorities</h3>
*From <a href="http://wiki.eclipse.org/index.php/RequirementsCouncil06TP">February 10th snapshot of T&P Wiki.</a>
<h2>1  Previous Versions Of Eclipse Themes and Priorities</h2>
<ul>
<li> <a href="http://www.eclipse.org/org/councils/themes.html" class='external text' title="http://www.eclipse.org/org/councils/themes.html" rel="nofollow">v1 Themes and Priorities</a>
</li>
<li> <a href="http://www.eclipse.org/org/councils/roadmap_v2_0/themes_v2_0.php" class='external text' title="http://www.eclipse.org/org/councils/roadmap v2 0/themes v2 0.php" rel="nofollow">v2 Themes and Priorities</a>
</li>
<li> <a href="http://wiki.eclipse.org/index.php/RequirementsCouncil06TP">The Live Themes and Priorities WIKI Page</a>
</li>

</ul>


<h2>2  Theme Categorization </h2>

<p>Eclipse themes are described in one of four categories.
</p>
<ul><li> Active themes are those that are ongoing and changing.  From time to time, some Active themes will become Persistent and Pervasive.
</li><li> Persistent and Pervaisve themes are not time or release specific.  Persistent and Pervasive themes are not only a signal of importance, but permanence.
</li><li> Deferred Themes are not an indication of priority, but are an indication that there are technical or resource inhibitors preventing them from becoming an Ative Theme.  Deferred themes are a signal to the ecosystem that help is needed.
</li><li> Pending Themes are new and interesting themes that have not yet been properly explored and discussed to become an Active theme.
</li></ul>
<h2>3  Active Themes </h2>
<h3>3.1  Platform Support </h3>

<p>While Eclipse has been very successful with Java developers on Windows systems, we endeavour to provide platform support for additional existing and upcoming platforms.
</p>
<h4>3.1.1  Vista </h4>
<p>Approximately 85% of Eclipse download requests are for the Windows OS.  With the VISTA release there are a number of efforts to port Windows applications.  This presents an opportunity for organizations who will take the opportunity to migrate to the more ubiquitous and portable Eclipse platform.  In order to leverage the opportunity as much as possible, it is essential that relevant Eclipse projects support and leverage VISTA. For example, Avalon APIs need to be implemented in SWT. 
</p><p>Vista will be important as both a platform used by developers, as well as one to which the resultant applications and/or products will be deployed.
</p>
<h4>3.1.2  Linux </h4>
<p>Linux continues to grow in market share as a platform for projects at all levels. We need to offer strong support for Linux on two dimensions:
</p>

<ul><li> As a deployment platform for applications developed using Eclipse technology
</li><li> As a platform used by developers as their primary working environment
</li></ul>
<h4>3.1.3  Mac OS X </h4>
<p>Mac OS X is used in many development, open source and end user environments and is a very active community. Eclipse needs to provide some level of support for users of this platform.
</p>
<h4>3.1.4  Java SE Mustang, Dophin and Beyond </h4>

<p>Eclipse endevours to support next generations of the Java platform in a timely manner.  The first stage of support is that end users can build applications on the latest JDK versions.  The next stage of support is that projects themselves are able to take advantage of the latest JDK changes.
</p>
<h3>3.2  Rich Client Platform (RCP) </h3>
<p>RCP adoption has been strong by the ecosystem in 2006.  The goal is for projects to support and use the Eclipse RCP as much as possible.  
</p><p>Aside from general use of RCP, there are two additional dimensions to this theme.  
</p>
<ol><li> Enabling broader use of RCP on smart devices such as PDAs and enhancing the abilities of RCP to work in these environments.   
</li><li> Making RCP as easy as possible to use so that it's easier for application developers to adopt.
</li></ol>
<p>The Equinox project is an example of the focus on the OSGi component model within Eclipse.  The Ecosystem requires Additional PDE enhancements to facilitate developing and deploying RCP-based applications, and for OSGi bundle manifest tooling.
</p>

<h3>3.3  Embedded Device Software </h3>
<p>This theme describes additions to Eclipse to provide standardization and extensibility to enable embedded tools providers, real-time operating system providers, semiconductor vendors, and hardware developers to create embedded-specific capabilities on top of standard Eclipse projects such as the Platform, JDT, eRCP, CDT, and TPTP. These capabilities should include the following. 
</p>
<ul><li> Drive consistency in the workflow for embedded development tools and projects.
</li><li> Provide an extensible embedded debug model implementation of the new Eclipse 3.2 platform API�s.  This debug model will enable integration of debug engines from multiple vendors for debugging bare metal hardware, bringing up operating systems, and developing applications on single and multi-core hardware.  This implementation will also enable vendors to integrate target simulation and emulation environments with Eclipse.
</li><li> Build a remote target launching, exploring, and management framework with extensible real-time operating system visibility.  This framework will provide complex launching capabilities for deploying multiple target images to multiple devices.
</li><li> Enable C++ GUI application design, build, and deployment for mobile devices running any operating system.  Also enable vendors to customize run-time libraries for their operating systems.
</li><li> Provide mobile Java application development support for J2ME mobile profiles, including extensible frameworks for devices and emulators and capabilities for application build and deployment, code obfuscation, code optimization, image signing, and localization.

</li><li> Complete the 1.0 release of the embedded Rich Client Platform.
</li><li> Enable mobile Linux application development, including design, development, debug, and deployment of cross-compiled applications.
</li><li> Provide embedded testing capabilities - monitoring, profiling, and unit testing.
</li></ul>
<h3>3.4  Ease Of Use </h3>
<p>The Eclipse components need to not only provide features that advanced users demand, but also be something that users find simple to use. The goal of this theme is to ensure that Eclipse-based products are simple to use for users with widely-varying backgrounds and skill sets performing a variety of tasks. Examples include:
</p>
<ul><li> Provide Eclipse User Experience Guidelines to ensure consistency and usability (including Accessibility) across projects.
</li><li> Usability reviews and updates to new and existing user interfaces to streamline common processes and clarify concepts and terminology.

</li><li> Improving support for Cheat Sheets to assist users in performing tasks. 
</li><li> User personas/roles to streamline the user interface to adapt to specific user needs.
</li><li> Continue improvements on the Java editor towards tolerating broken code .
</li><li> Enhanced user documentation, tutorials, white papers, demonstrations.
</li></ul>
<p>For example, if a user interface wizard provides a short path to performing a task, make sure that usability studies have identified the most common task performed by the target users.
</p>
<h3>3.5  Improving the "Out of Box Experience </h3>
<p>All projects should consider improved packaging, installation and "out-of-the-box" experience to be important objectives for 2007.  The goal is to broaden the appeal of Eclipse projects to a larger set of end users .

</p>
<h3>3.6  Technology Trends </h3>
<p>Existing and new Eclipse projects need to consider key technology trends in the market to ensure that the Eclipse platform continues to retain it's leadership as the framework and tool of choice for developers. 
</p>
<h4>3.6.1  Extending to be Life-cycle Platform </h4>
<p>TBD
</p>
<h4>3.6.2  Web 2.0 and AJAX </h4>

<p>AJAX and other "Web 2.0" technology (see <a href="http://en.wikipedia.org/wiki/Web_2.0" class='external text' title="http://en.wikipedia.org/wiki/Web 2.0" rel="nofollow">Wikipedia discussion on Web 2.0</a>)
has enabled the development of a new generation of web sites that provide a rich and user-friendly experience in a wide variety of applications. While the initial adopters of this technology have been social web sites, it's adoption is increasingly seen in business applications such as CRM systems.
</p><p>As developers shift from the development of traditional web sites to Web 2.0-style sites, the role of Eclipse as a development framework for these applications must be considered. In order to retain these developers, the Eclipse platform should provide strong support for developing applications that leverage Web 2.0 technologies such as AJAX and Web Services APIs.
</p>
<h4>3.6.3  Multi-Core CPU </h4>
<p>Due to power constraints, there is a trend towards multiple cores on a CPU instead of merely increasing the CPU frequency.  Eclipse should enable developers to write multi-threaded programs to take advantage of the increasing miltiple cores.  Moreover, Eclipse itself should be optimized where possible for running on multiple cores.
</p>
<h4>3.6.4  64-bit CPU </h4>

<p>Diverse application software such as payroll, datawarehousing, and reporting now routinely manipulate large amounts of data that exceed 2GB. Using 64-bit CPUs enables these applications to manipulate large data in memory rather than having to write and read intermediate results to much slower disks.
</p>
<h3>3.7  Scaling Up </h3>
<p>This refers to the need for Eclipse to deal with development and deployment on a larger and more complex scale. Increasing complexities arise from: 
</p>
<ul><li> Large development teams distributed in different locations, 
</li><li> Large source code bases, large amounts of data, multiple scripting and programming languages, complex build environments that have been developed incrementally over time the dynamic nature of new source code bases and their interaction with configuration management, and build environments involving many different tool chains and build rules.
</li><li> Large volumes of data
</li></ul>
<p>Possibilities:

</p>
<ul><li> Performance improvements in memory footprint, user perceived response times, and start-up times as the complexity and number of projects, files, users, and plug-ins grow (10X-100X over the next two years). This is particularly important in client/server environments where a single Solaris, AIX, Linux or HP-UX server must support dozens of concurrent Eclipse users and where Eclipse competes mostly with command line tools.
</li><li> Improve support for and performance with Motif based window managers on Solaris (drag and drop, etc) 
</li><li> Improve remote X window performance 
</li><li> Improve performance when creating, loading, importing and closing projects with slow file systems (networks) 
</li><li> All Eclipse projects should identify common use cases and publish performance benchmarks on every milestone. 
</li><li> Ability to deal with extremely large projects and workspaces where there is a large number of developers working on different, and sometimes overlapping parts of the source tree simultaneously. This may include a more efficient way to manage multiple workspaces. Examples of large projects include Mozilla and Open Office.
</li></ul>
<h3>3.8  Enterprise Ready </h3>

<p>The Update Manager is a fantastic tool for a person updating his/her own installation.  Preference Import &amp; Export and Team Project Files further extend Eclipse in this regard.
However in large organisations, for various reasons, the organisation might want to make sure that large numbers of users have and maintain similar Eclipse set-ups. 
This could involve various aspects of the system, eg. what Eclipse components are installed, what preferences and other values are set etc. On one level this could be a convenience thing so that this would enable central management to help developer workstations be up-to-date, on a different level some organsiations might want a policy of strict control where the maintenance of the environment is also about enforcing a development policy and toolset, this would need more work in that it would require Eclipse internal policy management.
</p>
<h4>3.8.1  Further Enhance Update Manager </h4>
<p>The Eclipse Update Manager provides initial technical capabilities to enable delivering software as a service. This capability can be leveraged more to provide updated components across Eclipse projects to developer desktop in an asynchrous fashion without the developer having to do a manual dependency analysis.
</p>
<ul><li> Dependency (across Update Sites)
</li><li> Version-level Conflicts
</li><li> Easier to access rollback

</li></ul>
<h4>3.8.2  Ease of Deployment, Servicability &amp; Managability of Large Scale Installations </h4>
<ul><li> Zero-conf discovery of Update Site &amp; Pref/Config Repositories
</li><li> Shared Hierarchical Configuration (First-class Preferences, Perspective Configurations, Team Share Preferences, Update Site Preferences, etc.)
</li><li> Simplified Update of the Platform Bits
</li><li> Plug-in Cross-Dependency Awareness / Version Incompatibility

</li><li> Improve the Eclipse project and workspace concept to allow overlapping environments 
</li><li> Ability to fit into an existing environment of source files, build artifacts and version control repositories with minimal disruption to let developers complete a full edit-compile-debug cycle in the shortest possible time. This may include better support for multiple programming languages across language toolkits for improved usability. This would also include a more flexible project model.
</li></ul>
<h4>3.8.3  Facilitated On-Boarding </h4> 
<p>Features to enable a developer to get started as part of a (new or exisiting) team. This could include 
</p>
<ol><li> Making sure that the person has the correct software set-up, 
</li><li> That the software settings are appropriate for the team and then finally (which falls outside perhaps of the above management) that the projects and the project content can be easily "bootstrapped" to the new workstation. 
</li></ol>

<p>Example Story: <i>Here the ultimate goal could be that once a "team manager" has been told the IP address of a new member's PC, he would have 10 minutes later a fully configured Eclipse workstation with all the project's Eclipse project and all related settings on his/her machine.</i>
</p>
<h3>3.9  Design for Extensibility </h3>
<p>Within the Eclipse community, many development projects are defining new development platforms on top of other Eclipse projects. Concrete examples include the Business Intelligence Reporting Tools, the Data Tools, and the Device Software Development Platform projects. It is recognized, however, that some function is not strictly required by the underlying projects but are important to enable other platforms to succeed. This theme also includes effort to assure platform integrity.
</p><p>Some identified key requirements for this theme are:
</p>
<ul><li> Robust API documentation 
</li><li> API tools to detect use of internal interfaces 
</li><li> Expose meaningful building block APIs 

</li><li> Open the internal JDT (UI) interfaces to enable tools to seamlessly facilitate and interact with the JDT core and UI layers. For example the parsing and AST functionality. 
</li><li> Enhance the Debug API to enable seamless debugging across mixed (Java+native) languanges 
</li><li> Provide a more flexible mechanism that can be used to debug non-Java programs. This is both in the debug model and presentation 
</li><li> Provide for debugging a system comprised of multiple languages 
</li><li> Enable task automation 
<ul><li> Provide access to Eclipse APIs and resources from scripting languages 
</li><li> Provide the capability to record, edit, playback macros, representing a set of user interface actions. 
</li></ul>
</li><li>Provide a better experience for the co-existence of offerings from multiple vendors in a single Eclipse installation 
</li><li>Permit offering brand/identity to show through (e.g. On the splash screen) 

</li><li>Allow for license management of "products" (i.e. Aggregations of features) 
</li><li>Integrated diagnostic capabilities - e.g. When a user encounters a problem, providing assistance on the where the problem originated, which product 
</li><li>Loosen the strong file orientation by providing an abstraction layer of logical objects to allow one to extend Eclipse functionality tools working at a higher abstraction level. 
</li><li> Authoring, deploying and managing components/features/etc.
<ul><li> Bolster OSGi Adoption (via authoring assistance, etc.)
</li><li> Headless Execution
</li><li> Server-side Runtime Infrastructure
</li><li> Core &amp; UI Split
</li></ul>
</li></ul>

<h3>3.10  Consistent Multi Programming Language Support </h3>
<p>The original vision of Eclipse was to accelerate the creation of IDEs. There is a lot of work to do to make it simpler to create language-specific IDEs. Our vision is to: 
</p>
<ul><li> Make it easier to create language specific tools in a consistent way
</li><li> Enabling source files written in multiple languages within the same project.
</li></ul>
<h2>4  Persistent &amp; Pervasive Themes </h2>

<h3>4.1  Accessibility Compliance </h3>
<p>Every project should support and make a statement on their accessibility compliance. In the U.S., this means Section 508 compliance; in the European Union, this is the Web Accessibility Initiative of the World Wide Web Consortium (W3C). 
</p>
<h3>4.2  Internationalization &amp; Localization </h3>
<p>Every project should support both internationalization and localization:
</p>
<ul><li> Internationalization (I18N) <br />Each project should be able to work in an international environment, including support for operating in different locales and processing/displaying international data (dates, strings, etc.).

</li><li> Localization <br />Each project should provide an environment that supports the localization of the technology (i.e. translation). This includes, but is not limited to, ensuring that strings are externalized for easy translation.
</li></ul>
<p>Where possible, projects should use an open and transparent process to create, maintain and deliver language packs translated into multiple languages in a timely manner. The primary languages to consider are: English, Simplified Chinese, Traditional Chinese, Japanese, French, German, Spanish.
</p>
<h3>4.3  Upgrade Path </h3>
<p>Upward compatibility is a critical aspect of developer satisfaction and community growth. Developers need to be able to adopt the latest release of Eclipse technology without reworking their applications. Extensive rework incurred during a migration will lead to developer frustration and the possibility that they will evaluate and adopt other tools. Smooth upward migration is therefore a core Theme that all projects must consider. 
</p><p>This includes:
</p>
<ul><li> Assuring release-to-release migration is supported (e.g., resources, workspaces, API, as appropriate). 
</li><li> Assuring API compatibility release-to-release, including testing for upward compatibility

</li><li> Clear statements indicating which APIs are intended for internal use only (and are not gaurenteed to be upward compatible)
</li><li> Providing tools that automate the migration process where possible
</li></ul>
<h2>5  Deferred Themes </h2>
<p>None currently.
</p>
<h2>6  Pending Themes </h2>

<h3>6.1  Vertical market-specific initiatives </h3>
<p>With the establishment of Eclipse as a dominant platform for building tools and applications, it is logical that Eclipse technology begin to play a major role in vertical industry initiatives.  Vertical markets should not be confused with Technology Segments where Eclipse technology is generally consumed very rapidly.  Examples of quick Eclipse adoption in new technology segments include Ajax and other Web2.0 tools and applications.  Vertical markets are much more solutions oriented and have broad reach into a technology stack.  The Eclipse projects should be aware that Eclipse is becoming a major player in the Healthcare and Automotive verticals, and there are signs of it becoming a key platform in a number of other verticals.  In Automotive, for example, Eclipse based technology is used in CAD tools, workflow tools, embedded design tools, etc.
</p>

	<hr>
	<h3><a name="contributors"></a>Contributors</h3>
	
	<table align="center" width="400" border="1">
	<tr>
		<th scope="col">Name</th>
		<th scope="col">Member</th>
	</tr>
	<tr>
		<td>Paul Clenahan</td>
		<td>Actuate</td>
	</tr>
	<tr>
		<td>John Kellerman</td>
		<td>IBM Corporation</td>
	</tr>
	<tr>
		<td>Anurag Gupta</td>
		<td>Intel</td>
	</tr>
	<tr>
		<td>Dino Brusco</td>
		<td>Motorola</td>
	</tr>
		<tr>
		<td>Bob Fraser</td>
		<td>BEA</td>
	</tr>
		<tr>
		<td>Stephen Henderson</td>
		<td>Borland</td>
	</tr>
		<tr>
		<td>Yossi Leon</td>
		<td>Zend</td>
	</tr>
		<tr>
		<td>Haakan Mitts</td>
		<td>Nokia</td>
	</tr>
	
		<tr>
		<td>Donald Smith</td>
		<td>The Eclipse Foundation</td>
	</tr>
	
		<tr>
		<td>Paul Stules</td>
		<td>Compuware</td>
	</tr>

</table>

Thanks to some of the long time contributors to the Eclipse Themes and Priorities including 
<ul>
<li>Par Emanuelsson, Ericsson AB</li>
<li>Howard Lewis,Discovery Machine</li>
<li>Todd Williams, Genuitec</li>
<li>Rich Main, SAS</li>
<li>Jochen Krause, Innoopract</li>
<li>Mike Taylor, Instantiations</li>
<li>David Williams, IBM</li>
<li>Philip Ma, HP</li>
<li>Martin Klause, Wind River</li>
<li></li>
<li></li>
<li></li>
</ul>
<p align = right><small><a href="#top">back to top</a></small></p>

<hr>
	<h3><a name="acknowledgements"></a>Acknowledgements</h3>
	<p>Anurag Gupta (Intel) wrote the first draft of the themes and provided much feedback and leadership in v3.0.</p>
		
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
