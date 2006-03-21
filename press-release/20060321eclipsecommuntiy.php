<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Community Awards Announcement";
	$pageKeywords	= "Eclipse Foundation, community, awards, winners, 2006, press, release";
	$pageAuthor		= "Nathan Gervais";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Press Release</h2>
		<h2 ALIGN="CENTER"><strong>EclipseCon 2006 Opens with Strong Participation from the Eclipse Community</strong></h2>
		<ul>
			<li>Eclipse Community Continues to Grow with New Members; Highlights Latest Eclipse-based Products </li>
		</ul>
		<p><strong>ECLIPSECON 2006, SANTA CLARA, Calif., March 21, 2006</strong> - The Eclipse Foundation today kicked off its third annual EclipseCon 2006 user conference at the Santa Clara Convention Center in Santa Clara, Calif. This year’s show is the largest gathering yet of the vibrant and active Eclipse community. The conference has attracted 46 exhibitors and 10 open source projects and features over 140 technical sessions. Industry keynotes will be delivered by luminaries such as Borland CEO Tod Nielsen, Greg Stein of Apache Software Foundation, Joel Spolsky of the popular “Joel on Software” site and Eclipse’s own Director of Committer Community Development and wiki founder Ward Cunningham.</p>
		<p>“The Eclipse platform owes its widespread adoption and pervasiveness in such a short period to the active and vibrant Eclipse community,” stated Mike Milinkovich, executive director, Eclipse Foundation. “EclipseCon 2006 brings this community together and provides member companies the opportunity to show off their new and enhanced Eclipse-based solutions. These solutions demonstrate the commitment among community members to expand the Eclipse ecosystem into commercial adoption.”</p>
		<p>EclipseCon 2006 is the pre-eminent gathering of Eclipse developers, members and organizations using and deploying Eclipse-based technologies. The show also provides a forum to discuss key issues facing the community and to hear about developments to come in 2006. Attendees will be looking behind the scenes at the latest developments in Eclipse projects such as the Rich Client Platform (RCP), Application Lifecycle Framework (ALF), Web Tools Platform (WTP), Business Intelligence and Reporting Tools (BIRT) and the Eclipse Platform.</p>
		<p>Eclipse member companies are using the conference to unveil a number of announcements, including: </p>
		<ul>
			<li><strong>Accelerated Technology</strong> announced its EDGE Tool Suite, based on Eclipse 3.1. EDGE version 1.2 suite provides an integrated tool solution that includes an IDE, debugger, profiler, compiler, UML tools, JTAG connection device and prototyping tools. The tool suite supports the ARM, MicroBlaze, MIPS, Nios II and PowerPC family of processors. See <a href="http://www.mentor.com/products/embedded_software/development_tools/nuc_edge/index.cfm">www.mentor.com/products/embedded_software/development_tools/nuc_edge/index.cfm</a>.</li> 
			<li><strong>Actuate</strong> (NASDAQ: ACTU) announced Actuate BIRT 2.0, a Business Intelligence and reporting tool based on Eclipse BIRT. Built from the ground up for web applications, Actuate BIRT delivers ease-of-use and flexibility to report developers as well as the functional power to meet the complex reporting needs of the most sophisticated real-world applications. See <a href="http://www.actuate.com/corporate/news/pressrelease.asp?ArticleId=9687">www.actuate.com/corporate/news/pressrelease.asp?ArticleId=9687.</a></li> 
			<li>The premiere issue of <strong>BZ Media</strong>'s Eclipse Review, the first English-language print magazine for Eclipse users, is now available for subscribers, and will be given away to all EclipseCon attendees. Eclipse Review will be published quarterly in 2006, and is written for IT professions, software development managers and others who use Eclipse-based tools and technologies. Free subscriptions are available at <a href="http://www.EclipseReview.com">www.EclipseReview.com</a>.</li>
			<li><strong>Catalyst Systems Corporation</strong> announced general availability of the latest version of Openmake, the advanced development tool for automated build management combined with Lifecycle Activities Management. Release 6.41 incorporates new features for centralizing control of lifecycle processes from scheduling SCM updates to executing test and deployment tools. Refer to <a href="http://www.openmake.com/dp/newsandevents/openmake641release.pdf">www.openmake.com/dp/newsandevents/openmake641release.pdf</a>.</li>
			<li><strong>Codign Software</strong> joined the Eclipse Foundation as an Add-In Provider and will be demonstrating its advanced JUnit automation suite, CoView, at the show. Stop by booth 415 to see a new, innovative and affordable approach to unit testing. Visit  <a href="http://www.codign.com">www.codign.com</a> for more details.</li>
			<li><strong>Compuware</strong>, a Strategic Developer, formally announced its leadership in the Tool Services Framework (Corona) Project. Corona enables greater collaboration and integration for Eclipse developers. Additionally, Compuware announced a new, Eclipse-based version of OptimalJ, Professional Edition, which brings the power of model-driven development to Eclipse. Visit <a href="http://www.compuware.com/pressroom/news/2006/5327_ENG_HTML.htm">www.compuware.com/pressroom/news/2006/5327_ENG_HTML.htm for more information.</a></li>
			<li><strong>Discovery Machine Inc.</strong> launched the feature-rich Version 4.1 of its Expertise Encoding and Execution Workshop (E3W) and open source initiatives under the Eclipse Public License. Discovery Machine provides revolutionary products and services that allow experts to capture and leverage knowledge. These capabilities represent a paradigm shift in knowledge engineering. See <a href="http://www.discoverymachine.com/News/releases.htm">www.discoverymachine.com/News/releases.htm</a> for more information.</li>
			<li><strong>Exadel</strong> launched Exadel Visual Component Platform 1.0, a rich, Ajax-enabled component framework for business application development on JSF.  Exadel also proposed the Enterprise Component Framework project, which would extend the Equinox framework to enable Eclipse components to be used in enterprise server applications. The project allows developers to create components without targeting specific environments such as J2EE or J2SE. Visit <a href="http://www.exadel.com/web/portal/products">www.exadel.com/web/portal/products</a>.</li>
			<li><strong>Genuitec, LLC,</strong> a founding member of the Eclipse Foundation, announced that it is previewing upcoming technologies targeted for MyEclipse 5.0. Among the MyEclipse 5.0 features that will be previewed is project Matisse4MyEclipse, an Eclipse integration of the popular Matisse Swing user-interface designer from the Sun NetBeans project. Refer to: <a href="http://www.myeclipseide.com/displayarticle54.htmlwww.myeclipseide.com/displayarticle54.html.</a></li> 
			<li>Recognizing the massive growth of software developers now utilizing Eclipse, <strong>IBM</strong> announced new software, tools and support services designed to improve the Eclipse platform, frameworks and community. Included among these is an IBM pilot support program designed for development shops with a mix of open source Eclipse and commercial Eclipse-based tool use.</li>
			<li><strong>ILOG</strong> debuts the ILOG JRules 6 Business Rule Management System at booth 511 at EclipseCon. The product supports all Eclipse-supported IDEs so developers can manage source code and rules together. Other new innovations in JRules 6 include a separate rule authoring environment for business users, rule synchronization between business and IT teams and performance breakthroughs</li> 
			<li><strong>Innoopract</strong> proposed the Rich Ajax Platform (RAP) project. RAP aims to provide an Eclipse-based development environment with the capabilities to create so-called “rich Internet applications.” RAP offers an architecture and usage similar to the Eclipse Rich Client Platform (RCP) and includes a library of components built in Java and Ajax. Visit <a href="http://www.innoopract.com/index.php?akt=0"?>www.innoopract.com/index.php?akt=0</a>. </li>
			<li><strong>Instantiations</strong> released RCP Developer, an Eclipse-based software tool for constructing Eclipse Rich Client Platform (RCP) applications with SWT Designer (GUI builder), WindowTester (GUI tester) and RCP Packager (installer). It harnesses Eclipse RCP to put Java back on the desktop by reducing development time, increasing performance, and assuring consistent application look-and-feel. Visit <a href="http://www.instantiations.com/press/release/060321.html">www.instantiations.com/press/release/060321.html</a>.</li>  
			<li><strong>Lattix Inc.</strong> today announced Lattix LDM for C/C++ as part of the new 2.6 version of Lattix LDM. With this new solution, Lattix extends the power of Lightweight Dependency Models (LDM) to formalize, communicate and control the architecture of any C/C++ application, especially in large systems and complex applications. Refer to: <a href="http://www.patterson.com/news/LDM%20for%20C-C++.doc">www.patterson.com/news/LDM%20for%20C-C++.doc.</a></li> 
			<li><strong>MySQL AB</strong>, developer of the world’s most popular open source database, joined the Eclipse Foundation as an Add-In Provider. The company plans to contribute work to the Eclipse Data Tools Platform project and collaborate with Zend Technologies and others on the Eclipse PHP IDE project. For more information, visit <a href="http://www.mysql.com/news-and-events/">www.mysql.com/news-and-events/.</a></li>
			<li><strong>Salesforce.com</strong>, the technology and market leader in on-demand CRM, joined the Eclipse Foundation and delivered the AppExchange Toolkit for Eclipse, which makes it easy for Eclipse developers to build custom and commercial on-demand applications. The free toolkit and other community resources are available at the AppExchange Developer Network (<a href="http://developer.appexchange.com">http://developer.appexchange.com</a>). </li>
			<li><strong>SlickEdit Inc</strong>., provider of multi-language development tools and the most versatile code editor available, announced that SlickEdit Board Member Howard H. Lewis has been re-elected to serve as an Add-in Provider representative on the Eclipse Board of Directors. SlickEdit will be located in booth 715 at EclipseCon. Refer to <a href="http://www.slickedit.com/content/view/330/158/">www.slickedit.com/content/view/330/158/</a> for more information.</li>
			<li><strong>SugarCRM Inc</strong>. announced that is has joined the Eclipse Foundation to support the continued development of the Eclipse Platform. SugarCRM joins as an Add-In Provider. For more details, go to www.sugarcrm.com/crm/about/press-releases.html.</li>
		</ul>			
		<p><strong>About the Eclipse Foundation</strong><br />
			Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.
			<br /><br />
			The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org.">www.eclipse.org</a>
		
		
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		Rachel Imbriglio<br>
		Schwartz Communications<br>
		781-684-0770<br>
		eclipse@schwartz-pr.com <br>
		<br>

		</p>
							
	</div>

		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

