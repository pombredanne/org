<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Themes and Priorities";
	$pageKeywords	= "roadmap, projects, strategy, documents, about, foundation";
	$pageAuthor		= "Mike Milinkovich, Nov. 23, 2005";
	
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
			<li><a href="#principles">Fundamental Principles</a></li>
			<li><a href="#tp">Themes and Priorities</a></li>
			<li><a href="#contributors">Contributors</a></li>
			<li><a href="#acknowledgements">Acknowledgements</a></li>
		</ul>
		</blockquote>
		
	<hr>
	<h3><a name="intro"></a>Introduction</h3>
	<p>
	This document captures the inputs to the Eclipse Requirements <img
	border="0" src="PC_v2_0/external.gif" width="20" height="16"><a
	href="../../foundation/council.php">Council</a> as
	of this date. The inputs are from three major sources:</p>
	<ol>
		<li>Strategic Members of the Eclipse Foundation,</li>
		<li>the Project Management Committees (PMCs), and</li>
		<li>the general membership through the input collected from various
			Eclipse members.</li>
	</ol>
	<p>
	The themes were generated by collecting requirements from the above
	sources and then synthesizing themes from the various inputs.
	</p>
	<p align = right><small><a href="#top">back to top</a></small></p>
	
	<hr>
	<h3><a name="principles"></a>Fundamental Principles</h3>
	<p><br/>
	These are our fundamental principles, which span all of the themes
	outlined below.</p>
	<ul>
		<li>Eclipse projects provide exemplary (show by example)
		implementations and extensible frameworks. Examples target open source
		implementations such as CVS, Ant, JBoss, JOnAS, Mono, and Tomcat.<br/>
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
	<h3><a name="tp"></a>Themes and Priorities</h3>
	<p>These themes are not in priority order.</p>

	<h4>Scaling Up</h4>
	<p>This refers to the need for Eclipse to deal with development and
	deployment on a larger and more complex scale. Increasing complexities
	arise from:
	<ul>
		<li>large development teams distributed in different locations,</li>
		<li>large source code bases, large amounts of data,</li>
		<li>multiple scripting and programming languages,</li>
		<li>complex build environments that have been developed incrementally
		over time</li>
		<li>the dynamic nature of new source code bases and their interaction
		with configuration management, and</li>
		<li>build environments involving many different tool chains and build
		rules.</li>
	</ul>
	</p>
	<p>This requires:</p>
	<ul>
		<li>Performance improvements in memory footprint, user perceived
		response times, and start-up times as the complexity and number of
		projects, files, users, and plug-ins grow (10X-100X over the next two
		years). This is particularly important in client/server environments
		where a single Solaris, AIX, Linux or HP-UX server must support dozens
		of concurrent Eclipse users and where Eclipse competes mostly with
		command line tools.<br/>
		</li>
		<ul>
			<li>Further reduce memory footprint</li>
			<li>Improve support for and performance with Motif based window
			managers on Solaris (drag and drop, etc)</li>
			<li>Improve remote X window performance</li>
			<li>Improve performance when creating, loading, importing and closing
			projects with slow file systems (networks)</li>
		</ul>
	
	
		<li>All Eclipse projects should identify common use cases and publish
		performance benchmarks on every milestone.</li>
		<li>The projects are encouraged to develop APIs that exploit multi-core
		/ multi-threaded and 64-bit addressing capabilities of underlying
		processors. This will enable the Eclipse eco-system to deliver superior
		performance.<br/>
		</li>
		<li>Ability to deal with extremely large projects and workspaces where
		there is a large number of developers working on different, and
		sometimes overlapping parts of the source tree simultaneously. This may
		include a more efficient way to manage multiple workspaces. Examples of
		large projects include Mozilla and Open Office.</li>
		<ul>
			<li>Improve the Eclipse project and workspace concept to allow
			overlapping environments</li>
		</ul>
		<li>Ability to fit into an existing environment of source files, build
		artifacts and version control repositories with minimal disruption to
		let developers complete a full edit-compile-debug cycle in the shortest
		possible time. This may include better support for multiple programming
		languages across *DTs for improved usability. This would also include a
		more flexible project model.</li>
	</ul>
	
	<h4>Enterprise Ready</h4>
	
	<p>This theme discusses changes to Eclipse to ease adoption by large
	development organizations. As the size of a development organization
	grows, the manner in which an organization as a whole uses Eclipse
	changes. For example, emphasis shifts to manageability, maintainability,
	and support for various Eclipse versions. Here are the requirements to
	ensure that Eclipse can be used well in a large enterprise.</p>
	
	<ul>
		<li>Enable Eclipse and Eclipse based applications to be managed
		centrally</li>
	
		<ul>
			<li>Support pushing a core set of features to be installed and be
			visible on Eclipse deployments throughout the enterprise. This is
			complementary to the pull model inherent in the update manager
			paradigm.</li>
			<li>Provide ability for installed features / capabilities to be
			centrally managed / reported at the team / department level, and
			managed by an enterprise for its users.</li>
			<li>Deployment<i>: </i>We need to support changes to Eclipse to enable
			deployment of Eclipse based applications across the enterprise. This
			includes monitoring capabilities, enhancing of logging, tracing, and
			statistical models to enable prompt troubleshooting in a distributed
			environment, increasing interoperability with enterprise security
			infrastructure, and report generation. Develop robust mechanisms to
			ensure that products from different companies that work well
			separately on an Eclipse package work well together (e.g., <a
				href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=113806">113806</a>,
			<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=111687">111687</a>).</li>
	
		</ul>
		<li>Increase enterprise developer productivity</li>
		<ul>
			<li>Team Workspace: When joining a team, allow users to share their
			current preferences, workspaces, and plug-ins and make sure that all
			user configuration settings are stored in a preference file. Allow
			user preferences and pre-populated workspaces to be shared amongst a
			team.</li>
			<li>Seamless support for a broad variety of roles</li>
			<ul>
				<li>Improve development time integration across development roles</li>
	
				<li>Provide support for development time work flow. (e.g., an
				extensible process flow that could enforce a series of activities for
				a code branch commit, code review, statistics, unit test).</li>
				<li>This would include support for more roles and tools (e.g. extend
				our current Java only development model to cover defects, test cases,
				requirements)</li>
			</ul>
		</ul>
		<li>Security: Improve configurability (e.g. of capabilities) to allow
		for the definition of unique roles such as admin, developer. This
		configuration, then, can be used to control read, write, and other
		permissions based on roles.</li>
		<ul>
			<li>Support for digital signing of plug-ins will enable that these
			plug-ins can be executed only by specified roles.</li>
	
		</ul>
		<li>Integration</li>
		<ul>
			<li>Improve integration between Eclipse&rsquo;s build system and external
			build systems and deployment tools</li>
			<li>Provide a batch mode mechanism that makes it easier for 'headless'
			Eclipse tools to execute. For example, a batch mode for building and
			creating Eclipse itself.</li>
			<li>Integration with license management. This ensures that a framework
			exists such that license needs of various commercial applications
			integrating with Eclipse can ensure compliance with their specific
			license needs. The license needs could include a maximum number of
			concurrent users, duration of usage, etc.</li>
	
		</ul>
		<li><em>Manageability:</em>JMX is rapidly becoming a standard for Java
		developers who want to incorporate manageability into their
		applications during development time. The new J2SE 1.5 JDK includes JMX
		support. Support for JMX design patterns which enable developers to
		model manageability and drive transformation to JMX MBeans and other
		management technologies. Additionally, Eclipse support for JMX
		creation, via wizards, code assist or other tooling, and monitoring
		would help in automating the management instrumentation process.</li>
	</ul>
	
	<h4>Design for Extensibility: Be a Better Platform</h4>
	<p>Within the Eclipse community, many development projects are defining
	new development platforms on top of other Eclipse projects. Concrete
	examples include the Business Intelligence Reporting Tools, the Data
	Tools, and the Device Software Development Platform projects. It is
	recognized, however, that some function is not strictly required by the
	underlying projects but are important to enable other platforms to
	succeed. This theme also includes effort to assure platform integrity.</p>
	<ul>
		<li>Solid Integration across multiple products supported from
		release-to-release
		<ul>
			<li>Assuring API compatibility release-to-release, including
			<ul>
				<li>Robust API documentation</li>
				<li>API tools to detect use of internal interfaces</li>
			</ul>
			</li>
			<li>Assuring release-to-release migration (e.g., resources,
			workspaces)</li>
			<li>Provide a better experience for the co-existence of offerings from
			multiple vendors in a single Eclipse installation</li>
			<ul>
				<li>Permit offering identity to show through (e.g. On the splash
				screen)</li>
				<li>Allow for license management of "products" (i.e. Aggregations of
				features)</li>
				<li>Allow for updating and uninstalling of products</li>
				<li>Integrated diagnostic capabilities - e.g. When a user encounters
				a problem, providing assistance on the where the problem originated,
				which product</li>
				<li>Provide an RCP-based installation utility that can install
				Eclipse plus other non-Eclipse artifacts. This needs to be integrated
				with Update Manager</li>
			</ul>
		</ul>
		</li>
		<li>Expose meaningful building block APIs</li>
		<ul>
			<li>Open the internal JDT (UI) interfaces to enable tools to
			seamlessly facilitate and interact with the JDT core and UI layers.
			For example the parsing and AST functionality.</li>
			<li>Enhance the Debug API</li>
			<li>Provide a more flexible mechanism that can be used to debug
			non-Java programs. This is both in the debug model and presentation</li>
			<li>Provide for debugging a system comprised of multiple languages</li>
			<li>Loosen the strong file orientation by providing an abstraction
			layer of logical objects to allow one to extend Eclipse functionality
			tools working at a higher abstraction level. For example,</li>
			<ul>
				<li>Marker and Quick fix capabilities. In this connection a less
				restrictive structuring of projects would be desirable (some tools
				would like to structure and group projects in a more hierarchical
				way).</li>
				<li>Contributing actions on models that do not have a one-to-one
				mapping to files on the user&rsquo;s hard disk. This would, for example,
				allow a team provider&rsquo;s repository operations to be made available on
				logical artifacts.</li>
				<li>Existing views like the navigator and problems view should be
				generalized to handle logical artifacts and, in general, there should
				be better control over what is displayed in views and editors based
				on the logical models that the end user is working on.</li>
			</ul>
		</ul>
		<li>Enable task automation</li>
		<ul>	
			<li>Provide access to Eclipse APIs and resources from scripting
			languages</li>
			<li>Provide the capability to record, edit, playback macros,
			representing a set of user interface actions.</li>
		</ul>
	</ul>

	<h4>Embedded Development</h4>
	<p>
	This theme describes additions to Eclipse to provide standardization and extensibility to enable embedded tools providers, real-time operating system providers, semiconductor vendors, and hardware developers to create embedded-specific capabilities on top of standard Eclipse projects such as the Platform, JDT, eRCP, CDT, and TPTP.  These capabilities should include:</p>
	<ul>
	<li>Hardware and Target OS bring-up capabilities</li>
	<li>Target OS independent debugging and profiling with extensible OS visibility</li>
	<li>Remote target launching, exploring, and management</li>
	<li>Configuring, building, deploying, and managing target images using multiple tool chains</li>
	<li>Embedded GUI design</li>
	<li>Target simulation and emulation capabilities</li>
	<li>Embedded testing capabilities - monitoring, profiling, and unit testing</li>
	</ul>
	
	<h4>Rich Client Platform</h4>
	<p>The Eclipse RCP is a Java-based application framework for the desktop. Building on the Eclipse runtime 
	and the modular plug-in story, it is possible to build applications ranging from command line tools to 
	feature-rich applications that take full advantage of SWT&rsquo;s native platform integration and the many 
	other reusable components. 
	In 2006, the key priorities for this theme are:</p>
	<ul>
	<li>Each project is requested to ensure they provide support for building RCP applications through frameworks, 
	documentation and tutorials.  It is important that that the projects assume they are not running in the context 
	of an IDE.  Ex. deploy within an OSGI bundle.</li>
	<li>More complete control over the branding of RCP applications, including the changing of all filenames from 
	&rsquo;eclipse&rsquo;.</li>
	<li>To improve authentication and security (user authentication and credentials, role based security, and 
	role-based plug-in loading)</li>
	<li>Framework for disconnected use; ex. how to disconnect and how to synchronize when reconnected.</li>
	<li>Make it easy to build standalone products on RCP from Eclipse plug-ins that also run in an IDE.</li>
	<li>Core framework installer for RCP and install metadata store (like JRE or .NET framework)</li>
	<li>Rapid application development (RAD) tooling for Eclipse RCP.</li>
	</ul>
	
	<h4>Simple to Use</h4>
	<p>The Eclipse components need to not only provide features that advanced users demand, but also be something 
	that users find simple to use. The goal of this theme is to ensure that Eclipse-based products are simple to 
	use for users with widely-varying backgrounds and skill sets performing a variety of tasks. Examples include:</p>
	<ul>
	<li>Provide Eclipse User Experience Guidelines to ensure consistency and usability (including Accessibility) 
	across projects. [see 121303].</li>
	<li>Usability reviews and updates to new and existing user interfaces to streamline common processes and 
	clarify concepts and terminology.</li>
	<li>Improving support for Cheat Sheets to assist users in performing tasks. [e.g. 56234, 69735]</li>
	<li>User personas/roles to streamline the user interface to adapt to specific user needs. [e.g. 73941]</li>
	<li>Enhanced user documentation, tutorials, white papers, demonstrations.</li>
	</ul>
	<p>For example, if a user interface wizard provides a short path to performing a task, make sure that 
	usability studies have identified the most common task performed by the target users.</p>
	
	<h4>Enable Consistent Multi-language Support</h4>
	<p> The original vision of Eclipse was to accelerate the creation of IDEs. There is a lot of work to do to 
	make it simpler to create language-specific IDEs. Our vision is to: </p>
	<ul><li>Create an environment where a limited number of well-defined extension points for compilers, parsers, 
	debuggers, building, launching, etc. will simplify the process of creating Eclipse-based offerings. This 
	enables add-in providers to easily plug in tools that support multiple languages while enabling the IDE 
	developers to abstract away the language independent components (Abstract Development Toolkit)</li>
	<li>Enable IDE users to simultaneously and seamlessly use multiple languages in the development of a project. 
	(IDE User Support for Multiple Languages)</li>
	</ul>
	<p>Plug-in providers have a strong need for an abstract development toolkit where a variety of plug-ins (e.g., 
	editor, managed build system, debugger) can be plugged in for all development environments including Java. This 
	is more efficient than integrating each plug-in with each separate development environment. Focus on abstract 
	development toolkit improves componentization and consistency across development environments, makes each 
	component within the development environment more robust, and adds flexibility to increase the reach of Eclipse 
	to a variety of development environments (e.g., Fortran, COBOL) quicker. This opens up 1:1 relationship between 
	add-in component and development environment into a richer m:n relationship. </p>
	<p> The support for Abstract Development Toolkit includes the following features:</p>
	<ul>
		<li>Make it easier to create language specific tools in a consistent way: consistent generic components / APIs 
		to add languages.</li>
		<li>Generic APIs - not Java-specific</li>
		<li>Ability to create tools for other languages</li>
		<li>Language toolkit model which provides public APIs sufficient for tools builders.</li>
	</ul>
	<p>IDE User Support for Multiple Languages includes</p>
	<ul>
		<li>Enabling source files written in multiple languages within the same project. For example, a substantial fraction of projects have source files in (1) C/C++ and Fortran and (2) C/C++ and Java for code reuse or interoperability purposes.</li>
		<li>Enable language-sensitive context based on the specific language source file in focus. This includes both showing the relevant concepts for a specific language and hiding ones that are not relevant for the language.</li>
	</ul>
	</ul>

	<h4>Appealing to the Broader Community</h4>
	<p>While Eclipse has been very successful with Java developers on Windows systems, we would like to see Eclipse used and embraced in more diverse developer communities:</p>
	<ul>
	<li>Additional operating environments:
	<ul>
		<li>Continue the kinds of improvements seen by adding J2SE5 support to the JDT, where a new and growing developer community was welcomed.</li>
		<li>Continue the work to provide basic tools and frameworks for supporting the construction, deployment and management of web service applications. Example tools include: UDDI browser, XSL/T editor, and WSDL tools.</li>
		<li>Improve SWT consistency across operating systems [#106188]: plug-in providers noted differences in the behavior of Eclipse on Windows and Linux. Window systems sometimes differ in things like the exact sequence of events reported for a given action. This kind of inconsistency can result in platform specific code and increased testing requirements. More consistent behavior would ease the burden on plug-in providers. Over 80% of Eclipse downloads are for Windows, followed by ~20% for Linux, and a very small fraction are for operating systems such as the Macintosh, AIX, Solaris, and HP-UX.</li>
		<li>A broader range of supported platforms [#51628, #78839]: the Eclipse platform supports x86-64, ia64 on Linux already, as well as Mac OS X, but do all projects?</li>
	</ul>
	<li>Building bridges into other open source communities: examples would be LSB-compliant packaging [#108610], and cooperating closely with the Apache Harmony project in qualifying a fully open source JVM [#108614].</li>
	<li>Progress in supporting Vista (e.g., file system, SWT, ...)</li>
	<li>Vertical market-specific frameworks (e.g., the health care initiative)</li>
	<li>Using an open and transparent process, create, maintain and deliver language packs translated into multiple languages in a timely manner.  The languages to consider are: English, Simplified Chinese, Traditional Chinese, Japanese, French, German, Spanish.</li>
	<li>Every project should make a statement on their accessibility compliance.  In the U.S., this means Section 508 compliance; in the European Union, this is the Web Accessibility Initiative of the World Wide Web Consortium (W3C).</li>
	</ul>
	<p align = right><small><a href="#top">back to top</a></small></p>

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
		<td>Par Emanuelsson</td>
		<td>Ericsson AB</td>
	</tr>
	<tr>
		<td>Martin Klaus</td>
		<td>Wind River</td>
	</tr>
	<tr>
		<td>Philip Ma</td>
		<td>Hewlett-Packard Company</td>
	</tr>
	<tr>
		<td>Howard Lewis,<br/>
		Rich Main and<br/>
		Todd Williams</td>
		<td>Add-In Provider Board Representatives</td>
	</tr>
	<tr>
		<td>David Williams</td>
		<td>Web Tools PMC</td>
	</tr>
</table>
<p align = right><small><a href="#top">back to top</a></small></p>

<hr>
	<h3><a name="acknowledgements"></a>Acknowledgements</h3>
	<p>Anurag Gupta (Intel) wrote the first draft of the themes and provided much feedback and leadership in v2.0.</p>
		
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
