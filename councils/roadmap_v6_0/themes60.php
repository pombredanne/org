<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse 2011 Themes and Priorities";
	$pageKeywords	= "about, documents, history";
	$pageAuthor		= "Donald Smith";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

    <div id="maincontent">
	<div id="midcolumn">
        <h1><a name="top"></a>$pageTitle</h1>

        
<h1>Theme Categorization</h1>

<p>Eclipse themes are described in one of two categories.</p>
<ul>
    <li>Active themes are those that are ongoing and changing. From time to time, some Active themes will become Persistent and Pervasive.</li>
    <li>Persistent and Pervasive themes are not time or release specific. Persistent and Pervasive themes are not only a signal of importance, but permanence.</li>
</ul>
    
<h1>Active Themes</h1>
<h2>Platform Support</h2>

<p>While Eclipse has been very successful with Java developers on Windows systems, we endeavour to provide platform support for additional existing and upcoming platforms.</p>

<h3>Windows XP, 7 and Beyond</h3>

<p>Approximately 80% of Eclipse download requests are for the Windows OS. Windows 7 will be important as both a platform used by developers, as well as one to which the resultant applications and/or products will be deployed.</p>

<p>Given Eclipse's ongoing use in the development of enterprise software, support for use of the Eclipse platform is desirable across the popular Windows OS variants.</p>

<h3>Linux</h3>
<p>Linux continues to grow in market share as a platform for projects at all levels. We need to offer strong support for Linux on two dimensions:</p>
<ul>
    <li>As a deployment platform for applications developed using Eclipse technology</li>
    <li>As a platform used by developers as their primary working environment</li>
</ul>

<h3>Mac OS X</h3>

<p>Mac OS X is used in many development, open source and end user environments and is a very active community. Throughout recent years there has been a stable percentage of Mac platform downloads of Eclipse packages of about 5% of downloads. Eclipse needs to continue to provide some level of support for users of this platform.</p>

<h3>Support for the latest Java(tm) versions</h3>

<p>Eclipse endeavors to support next generations of the Java platform in a timely manner. The first stage of support is that end users can build applications that target the latest JDK versions. The next stage of support is that projects themselves are able to take advantage of the latest JDK changes.</p>


<h2>Rich Client Platform (RCP)</h2>

<p>RCP adoption has been strong by the ecosystem. The goal is for projects to support and use the Eclipse RCP as much as possible.</p>

<p>Aside from general use of RCP, there are two additional dimensions to this theme.</p>
<ol>
   <li>Enabling broader use of RCP on smart devices such as PDAs and enhancing the abilities of RCP to work in these environments.</li>
   <li> Making RCP as easy as possible to use so that it's easier for application developers to adopt.</li> 
</ol>

<p>The Equinox project is an example of the focus on the OSGi component model within Eclipse. The Ecosystem requires Additional PDE enhancements to facilitate developing and deploying RCP-based applications, and for OSGi bundle manifest tooling.</p>

<h2>Rich Internet Applications (RIA)</h2>
<p>Flex, Ajax and other "Web 2.0" technology (see Wikipedia discussion on Web 2.0) has enabled the development of a new generation of web sites that provide a rich and user-friendly experience in a wide variety of applications. While the initial adopters of this technology have been social web sites, it's adoption is increasingly seen in business applications such as CRM systems.</p>
<p>As developers shift from the development of traditional web sites to Web 2.0-style sites, the role of Eclipse as a development framework for these applications must be considered. In order to retain these developers, the Eclipse platform could provide strong support for developing applications that leverage Web 2.0 technologies such as Flex, Ajax and Web Services APIs.</p>

<h2>Embedded Device Software</h2>
<p>This theme describes additions to Eclipse to provide standardization and extensibility to enable embedded tools providers, real-time operating system providers, semiconductor vendors, and hardware developers to create embedded-specific capabilities on top of standard Eclipse projects such as the Platform, JDT, eRCP, CDT, and TPTP. These capabilities could include the following.</p>
<ul>
    <li> Drive consistency in the workflow for embedded development tools and projects.</li>
    <li> Continue evolving the debug platform API’s to support embedded debugging. This debug model will enable integration of debug engines from multiple vendors for debugging bare metal hardware, bringing up operating systems, and developing applications on single and multi-core hardware. This implementation will also enable vendors to integrate target simulation and emulation environments with Eclipse.</li>
    <li> Build a remote target launching, exploring, and management framework with extensible real-time operating system visibility. This framework will provide complex launching capabilities for deploying multiple target images to multiple devices.</li>
    <li> Enable C++ GUI application design, build, and deployment for mobile devices running any operating system. Also enable vendors to customize run-time libraries for their operating systems.</li>
    <li> Provide mobile Java application development support for J2ME mobile profiles, including extensible frameworks for devices and emulators and capabilities for application build and deployment, code obfuscation, code optimization, image signing, and localization.</li>
    <li> Complete the 1.0 release of the embedded Rich Client Platform.</li>
    <li> Enable mobile Linux application development, including design, development, debug, and deployment of cross-compiled applications.</li>
    <li> Provide embedded testing capabilities - monitoring, profiling, and unit testing. </li>
</ul>

<h2>Ease Of Use</h2>

<p>The Eclipse components need to not only provide features that advanced users demand, but also be something that users find simple to use. The goal of this theme is to ensure that Eclipse-based products are simple to use for users with widely-varying backgrounds and skill sets performing a variety of tasks. Examples include:</p>
<ul>
    <li> Provide Eclipse User Experience Guidelines to ensure consistency and usability (including Accessibility) across projects. </li>
    <li> Usability reviews and updates to new and existing user interfaces to streamline common processes and clarify concepts and terminology. </li>
    <li> Improving support for Cheat Sheets to assist users in performing tasks. </li>
    <li> User personas/roles to streamline the user interface to adapt to specific user needs. </li>
    <li> Continue improvements on the Java editor towards tolerating broken code. </li>
    <li> Enhanced user documentation, tutorials, white papers, demonstrations.  </li>
</ul>
    
<p>For example, if a user interface wizard provides a short path to performing a task, make sure that usability studies have identified the most common task performed by the target users.</p>


<h2>Improving the "Out of the Box" Experience</h2>
<p>All projects should consider improved packaging, installation and "out-of-the-box" experience to be a critical objective.</p>
<p>Through efforts such as the Eclipse Packaging Project, Eclipse should continue to expand out-of-the-box role-based offerings.</p>


<h2>Maturity and Project Readiness</h2>
<p>Every project has the capability to damage the reputation and brand of Eclipse if it is claimed to be "release" quality, but clearly is not. Quality refers not only to the reliable execution of typical use cases, but also to documentation, feature completeness, etc. Moreover, when new functionality or architecture replaces old between versions, it is important that features be maintained (or a plan for doing so made available) to not give the appearance of eliminating features.</p>

<h2>Technology Trends</h2>
<p>Existing and new Eclipse projects need to consider key technology trends in the market to ensure that the Eclipse platform continues to retain it's leadership as the framework and tool of choice for developers.</p>

<h2>Cloud Computing</h2>
<p>More and more applications are being built to handle bursts of high volume traffic and data by making use of "cloud computing" architectures. By deploying to the "cloud", application developers are more frequently building applications to run on servers where they have little control or knowledge of the underlying technology infrastructure. In many cases this also means relying on non traditional data formats, planning for redundency and fail-over and keeping interactions low-state.</p>

<p>Having tools and projects that support a tools ecosystem for Cloud Computing application developers would be an enormous benefit to Eclipse.</p>

<h2>Multi-Core CPU</h2>
<p>Due to power constraints, there is a trend towards multiple cores on a CPU instead of merely increasing the CPU frequency. Eclipse could enable developers to write multi-threaded programs to take advantage of the increasing miltiple cores. Moreover, Eclipse itself could be optimized where possible for running on multiple cores.</p>

<h2>64-bit CPU</h2>
<p>Diverse application software such as payroll, datawarehousing, and reporting now routinely manipulate large amounts of data that exceed 2GB. Using 64-bit CPUs enables these applications to manipulate large data in memory rather than having to write and read intermediate results to much slower disks.</p>

<p>The availability of 64-bit CPUs and matching 64-bit versions of supported OSs is growing, not only on the server but on the desktop. As these 64-bit environments become more popular and Eclipse technology-based server applications become more prevalent, Eclipse could be optimized to run within these environments and aide developers who building on, and/or targeting to, 64-bit solutions.</p>

<h2>Scaling Up</h2>
<p>This refers to the need for Eclipse to deal with development and deployment on a larger and more complex scale. Increasing complexities arise from:</p>
<ul>
    <li> Large development teams distributed in different locations,</li>
    <li> Large source code bases, large amounts of data, multiple scripting and programming languages, complex build environments that have been developed incrementally over time the dynamic nature of new source code bases and their interaction with configuration management, and build environments involving many different tool chains and build rules. </li>
    <li> Large volumes of data </li>
</ul>

<p>Possibilities:</p>
<ul>
    <li> Performance improvements in memory footprint, user perceived response times, and start-up times as the complexity and number of projects, files, users, and plug-ins grow (10X-100X over the next two years). This is particularly important in client/server environments where a single Solaris, AIX, Linux or HP-UX server must support dozens of concurrent Eclipse users and where Eclipse competes mostly with command line tools.</li>
    <li> Improve support for and performance with Motif based window managers on Solaris (drag and drop, etc)</li>
    <li> Improve remote X window performance</li>
    <li> Improve performance when creating, loading, importing and closing projects with slow file systems (networks)</li>
    <li> All Eclipse projects could identify common use cases and publish performance benchmarks on every milestone.</li>
    <li> Ability to deal with extremely large projects and workspaces where there is a large number of developers working on different, and sometimes overlapping parts of the source tree simultaneously. This may include a more efficient way to manage multiple workspaces. Examples of large projects include Mozilla and Open Office.</li> 
</ul>

<h2>Enterprise Ready</h2>
<p>Large organisations have a need to support large numbers of users have and maintain similar Eclipse set-ups. This could involve various aspects of the system, eg. what Eclipse components are installed, what preferences and other values are set etc. On one level this could be a convenience thing so that this would enable central management to help developer workstations be up-to-date, on a different level some organizations might want a policy of strict control where the maintenance of the environment is also about enforcing a development policy and toolset, this would need more work in that it would require Eclipse internal policy management.</p>

<h3>Provisioning</h3>
<p>Ease of installation, deployment, of pre-canned packages (or products) while allowing easy discovery and mixing-in of additional functionality. This includes not only traditional Eclipse features and plugins but could also include the ability to pick from and install various runtimes, servers, libraries, or databases. I also could include not only the initial installation by one end-user, but could also include maintenance, remote installation or management of several installations, etc.</p>

<h3>Ease of Deployment, Servicability & Managability of Large Scale Installations</h3>
<ul>
    <li> Zero-conf discovery of Update Site & Pref/Config Repositories </li>
    <li> Shared Hierarchical Configuration (First-class Preferences, Perspective Configurations, Team Share Preferences, Update Site Preferences, etc.) </li>
    <li> Simplified Update of the Platform Bits </li>
    <li> Plug-in Cross-Dependency Awareness / Version Incompatibility </li>
    <li> Improve the Eclipse project and workspace concept to allow overlapping environments </li>
    <li> Ability to fit into an existing environment of source files, build artifacts and version control repositories with minimal disruption to let developers complete a full edit-compile-debug cycle in the shortest possible time. This may include better support for multiple programming languages across language toolkits for improved usability. This would also include a more flexible project model. </li> 
</ul>

<h3>Facilitated On-Boarding</h3>

<p>Features to enable a developer to get started as part of a (new or existing) team. This could include:</p>
<ol>
   <li>Making sure that the person has the correct software set-up,</li>
   <li>That the software settings are appropriate for the team and then finally (which falls outside perhaps of the above management) that the projects and the project content can be easily "bootstrapped" to the new workstation.</li> 
</ol>
<p>Example Story: Here the ultimate goal could be that once a "team manager" has been told the IP address of a new member's PC, he would have 10 minutes later a fully configured Eclipse workstation with all the project's Eclipse project and all related settings on his/her machine.</p>

<h2>Design for Extensibility</h2>
<p>Within the Eclipse community, many development projects are defining new development platforms on top of other Eclipse projects. Concrete examples include the Business Intelligence Reporting Tools, the Data Tools, and the Device Software Development Platform projects. It is recognized, however, that some function is not strictly required by the underlying projects but are important to enable other platforms to succeed. This theme also includes effort to assure platform integrity.</p>

<p>Some identified key requirements for this theme are:</p>
<ul>
    <li> Robust API documentation </li>
    <li> API tools to detect use of internal interfaces </li>
    <li> Expose meaningful building block APIs </li>
    <li> Open the internal JDT (UI) interfaces to enable tools to seamlessly facilitate and interact with the JDT core and UI layers. For example the parsing and AST functionality. </li>
    <li> Enhance the Debug API to enable seamless debugging across mixed (Java+native) languages </li>
    <li> Provide a more flexible mechanism that can be used to debug non-Java programs. This is both in the debug model and presentation </li>
    <li> Provide for debugging a system comprised of multiple languages </li>
    <li> Enable task automation </li>
    <ul>
         <li>Provide access to Eclipse APIs and resources from scripting languages</li>
         <li>Provide the capability to record, edit, playback macros, representing a set of user interface actions.</li>
    </ul> 
    <li> Provide a better experience for the co-existence of offerings from multiple vendors in a single Eclipse installation </li>
    <li> Permit offering brand/identity to show through (e.g. On the splash screen) </li>
    <li> Allow for license management of "products" (i.e. Aggregations of features) </li>
    <li> Integrated diagnostic capabilities - e.g. When a user encounters a problem, providing assistance on the where the problem originated, which product </li>
    <li> Loosen the strong file orientation by providing an abstraction layer of logical objects to allow one to extend Eclipse functionality tools working at a higher abstraction level. </li>
    <li> Authoring, deploying and managing components/features/etc. </li>
	<ul>
    	<li>Bolster OSGi Adoption (via authoring assistance, etc.) </li>
        <li>Headless Execution </li>
        <li>Server-side Runtime Infrastructure </li>
        <li>Core & UI Split </li>
     </ul> 
</ul>

<h2>Consistent Multi Programming Language Support</h2>

<p>The original vision of Eclipse was to accelerate the creation of IDEs. There is a lot of work to do to make it simpler to create language-specific IDEs. Our vision is to:</p>
<ul>
	<li>Make it easier to create language specific tools in a consistent way</li>
    <li>Enabling source files written in multiple languages within the same project.</li> 
</ul>

<br>
<h1>Persistent & Pervasive Themes</h1>

<h2>Accessibility Compliance</h2>
<p>Every project could support and make a statement on their accessibility compliance. In the U.S., this means Section 508 compliance; in the European Union, this is the Web Accessibility Initiative of the World Wide Web Consortium (W3C).</p>

<h2>Internationalization & Localization</h2>
<p>Every project could support both internationalization and localization:</p>
<ul>
    <li>Internationalization (I18N)</li>
    <li>Each project could be able to work in an international environment, including support for operating in different locales and processing/displaying international data (dates, strings, etc.).</li>
    <li>Localization</li>
    <li>Each project could provide an environment that supports the localization of the technology (i.e. translation). This includes, but is not limited to, ensuring that strings are externalized for easy translation.</li> 
</ul>
<p>Where possible, projects should use an open and transparent process to create, maintain and deliver language packs translated into multiple languages in a timely manner. The primary languages to consider are: English, Simplified Chinese, Traditional Chinese, Japanese, French, German, Spanish.</p>

<h2>Upgrade Path</h2>
<p>Upward compatibility is a critical aspect of developer satisfaction and community growth. Developers need to be able to adopt the latest release of Eclipse technology without reworking their applications. Extensive rework incurred during a migration will lead to developer frustration and the possibility that they will evaluate and adopt other tools. Smooth upward migration is therefore a core Theme that all projects must consider.</p>

<p>This includes:</p>
<ul>
   <li>Assuring release-to-release migration is supported (e.g., resources, workspaces, API, as appropriate).</li>
   <li>Assuring API compatibility release-to-release, including testing for upward compatibility</li>
   <li>Clear statements indicating which APIs are intended for internal use only (and are not guaranteed to be upward compatible)</li>
   <li>Providing tools that automate the migration process where possible</li>
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


