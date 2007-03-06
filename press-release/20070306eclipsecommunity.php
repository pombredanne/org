<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Doors Open for EclipseCon 2007";
	$pageKeywords	= "Eclipse Foundation, community, awards, winners, 2007, press, release";
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
		<h2 ALIGN="CENTER"><strong>Eclipse Community Gathers for Fourth Annual Event; Organizations Introduce New, Innovative Eclipse-based solutions</strong></h2>
		<ul>
			<li>Eclipse Community Continues to Grow with New Members; Highlights Latest Eclipse-based Products </li>
		</ul>
		<p><strong>ECLIPSECON 2007, SANTA CLARA, Calif., March 06, 2007</strong> - EclipseCon 2007, the fourth annual Eclipse community conference, opens today at the Santa Clara Convention Center in Santa Clara, Calif. Attendees from around the world are expected to hear the latest Eclipse developments and discuss key business and technical issues facing the community. Scott Adams, creator of the comic strip Dilbert, will give the opening keynote presentation. Additional keynote addresses will be delivered by Robert “r0ml” Lefkowitz, a noted enterprise architect and systems designer, and Dr. Herbert Thompson, an expert on application security and chief security strategist for Security Innovation.</p>
		<p>EclipseCon 2007 features technical sessions and tutorials on a variety of Eclipse projects and technologies, including Eclipse Rich Client Platform (RCP), the AJAX Toolkit Framework (ATF), Rich Ajax Platform (RAP), Mylar, Device Developer Software Platform (DSDP), Eclipse Modeling project and many others. For the first time, the OSGi Developer Conference will be co-located with EclipseCon. OSGi is the specification for the component model used within Eclipse. The Eclipse Equinox project is an implementation of the OSGi specification and forms the core technology for Eclipse and Eclipse RCP. </p>
		<p>EclipseCon features 38 organizations that are conference sponsors. Gold sponsors include Actuate, BEA, Business Objects, IBM, Ingres, Klocwork, Red Hat and Wind River. A number of companies are also announcing a variety of exciting new initiatives at this year’s conference, including: </p>
		
		<p><strong>About the Eclipse Foundation</strong><br />
			Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.
			<br /><br />
			The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org.">www.eclipse.org</a>
		
		<p><strong>Actuate</strong> is the only publicly traded Business Intelligence company to fully embrace open source BI. With many employees dedicated to furthering BIRT, key products based upon BIRT and services dedicated to making open source BI viable for all – Actuate is ensuring that the benefits of open source BI are felt far and wide. 
		<br/><a href="http://www.actuate.com/company/news/press-releases-resources.asp?ArticleId=11930">http://www.actuate.com/company/news/press-releases-resources.asp?ArticleId=11930</a></p>
		<p><strong>AccuRev Inc.</strong> announced it has added significant new performance and usability features for its AccuBridge for Eclipse plug-in that allows developers to directly access AccuRev best-of-breed software configuration management (SCM) functionality directly within Eclipse. These include new Eclipse Team Synchronization support, a customizable AccuRev Perspective, and Eclipse Update Manager support.  
		<br/><a href="http://www.accurev.com/accubridge-eclipse.html">http://www.accurev.com/accubridge-eclipse.html</a></p>
		<p><strong>Alterpoint</strong> - Network software provider AlterPoint is announcing the Milestone 2 release of the ZipTie open source network inventory project. With this release, the ZipTie community gains an improved user interface and more powerful search functionality, while adding auto-discovery and broader device support. AlterPoint is also announcing an enhanced relationship with the Eclipse Foundation.
		<br/><a href="http://www.alterpoint.com/news/releases/">http://www.alterpoint.com/news/releases/</a></p>
		<p><strong>AvantSoft</strong>, a market leader since 1996, provides high quality training and development services (onsite, offsite, offshore consultants and project outsourcing) for Eclipse Plug-ins, RCP, GEF, GMF, EMF, CDT/JDT, SOA, AJAX, J2EE, WebServices, Struts, Hibernate, Spring, JSF, and Java. AvantSoft consultants have expertise with design, development, and testing of enterprise applications.
		<br/><a href="http://www.avantsoft.com">http://www.avantsoft.com.</a></p>
		<p><strong>BEA</strong> is strengthening its leadership role within Eclipse with the election of Konstantin Komissarchik to the Eclipse Board. Eclipse will also be a key component in BEA AquaLogic product releases due later this year and in the evolution of BEA WorkSpace 360º.</p>
		<p><strong>BZ Media LLC</strong> today announced that attendance at EclipseWorld 2007, the independent Eclipse conference for enterprise IT developers, is expected to exceed 800 – more than 20 percent larger than last year’s record conference. Helping enterprises make the most of Eclipse and the vast commercial Eclipse ecosystem is what EclipseWorld 2007 is all about. Classes will cover topics from more efficient programming using Eclipse-based tools, to improving software quality, enabling business intelligence, creating AJAX and Web 2.0 applications and coding for a service oriented architecture (SOA).
		<br/><a href="http://www.bzmedia.com/pr/2007/pr20070305.htm">http://www.bzmedia.com/pr/2007/pr20070305.htm</a></p>	
		<p><strong>CodeGear,</strong> a leader in developer tools, announced it is donating a connector for Eclipse Mylar to enable agile teams to use XPlanner to manage stories and tasks within Eclipse. JBuilder 2007 from CodeGear was the first IDE to take advantage of Mylar, shipping on a pre-1.0 release. The CodeGear team has updated the connector for Mylar 1.0 and will be continuing to support and enhance this tool as part of the Eclipse Mylar project. 
		<br/><a href="http://www.codegear.com">http://www.codegear.com.</a></p> 
		<p><strong>Codign Software</strong> is presenting CoViewDeveloper, CoViewManager and Lighthouse at EclipseCon. Available for free to Eclipse committers, open source developers and students, these products improve unit testing and test management for local, global and dual-shore development efforts.
<br/><a href="www.codign.com/covieweclipsecon.html">www.codign.com/covieweclipsecon.html</a></p>

<p><strong>CollabNet and TaskTop Partner to Bring Eclipse, Mylar, Subversion and CollabNet together.</strong> The integration of these leading development tools is the first of its kind and creates a highly productive working development environment that makes tasks an integrated part of the developer’s workflow throughout the lifecycle of a project.  
<br/><a href="http://www.collab.net/news/press/2007/mylar.html">http://www.collab.net/news/press/2007/mylar.html</a></p>

<p><strong>Discovery Machine</strong> announces its Machines’ patented product and services portfolio has been enhanced on Windows, Linux and Mac OSX with a new Modeler, Methodology, a Custom Console for user-specific strategies, an Advisor for  complex algorithms a GearRunner for distributed executables, an Eclipse Gear Plug-in that enables users to efficiently deploy knowledge structures, and an intuitive Sketching Console.</p>

<p><strong>Genuitec</strong> announces the release of MyEclipse Enterprise Workbench 5.5. An expansion of Genuitec’s Fusion™ Technology platform, this release introduces significant developer upgrades and allows users to access their favorite tools, anytime, anywhere without environment or lock-in restrictions. Release includes ready-to-run stack, customizable how-to applications, popular tool expansion pack and workspace-free SNAPs.
<br/><a href="http://www.genuitec.com/about/resources.html#pr">http://www.genuitec.com/about/resources.html#pr</a></p>

<p><strong>Genuitec and Hitachi</strong> will announce the launch of a joint portal for Eclipse developers in the Japanese market. With the release of Japanese MyEclipse, Genuitec and Hitachi continue to strengthen their partnership to increase Java development productivity in the evolving Japanese market. Genuitec offers Japanese MyEclipse as a free trial.
<br/><a href="http://www.emediawire.com/releases/2007/2/emw507268.htm">http://www.emediawire.com/releases/2007/2/emw507268.htm</a></p>

<p><strong>Innoopract becomes Strategic Member at Eclipse.</strong> The change from Add-in Provider Member to Strategic Member reflects the strong commitment by the company to expand Eclipse’s role as a leading application platform. Innoopract sees potential for enterprise software-as-a-service offerings combining Rich Ajax technology with distribution tools and services.
<br/><a href="http://www.innoopract.com/press/strategic_membership">www.innoopract.com/press/strategic_membership</a></p>

<p><strong>Innoopract and 1&1 cooperate in the Rich Ajax Platform project.</strong> The RAP project aims to enable developers to build rich, AJAX-enabled Web applications by using the Eclipse development model, plug-ins and a Java-only API.  Leveraging technology from both companies, RAP hides most tasks and techniques typical to developing web programming like AJAX, JavaScript, XML and others.
<br/><a href="http://www.innoopract.com/press/RAP_1and1">www.innoopract.com/press/RAP_1and1</a></p> 

<p><strong>Innoopract and Instantiations collaborate to bring developers better “out-of-the-box” Eclipse Solutions.</strong>  Eclipse Packaging Project will bundle Eclipse technologies reducing guess work facing new Eclipse users. Innoopract will leverage its distribution expertise to help organize, configure and distribute Eclipse-based packages that make sense for the community.
<br/><a href="http://www.innoopract.com/press/epp">www.innoopract.com/press/epp</a></p>

<p><strong>Instantiations</strong> WindowTester Pro is an Eclipse-based software development product that streamlines testing of Java client applications that result rich, consistent and reliable user interfaces. It frees developers to focus on creating business logic, rather than hand-crafting and maintaining test code by automating recording, test generation, code coverage, and playback of GUI application interactions.
<br/><a href="http://www.instantiations.com/press/release/070306.html">http://www.instantiations.com/press/release/070306.html</a></p> 

<p><strong>Nexaweb</strong> – Since October 2004, Nexaweb has been an active member of the Eclipse Foundation and has embraced projects including the Data Tools Platform (DTP), the Ajax Toolkit Framework (ATF), and Web Standard Tools (WST) projects as part of its Integrated Development Environment, Nexaweb Studio. Nexuses will be demonstrating its Eclipse-based IDE for building enterprise-class Ajax applications in its pavilion (#404-405).
<br/><a href="http://www.nexaweb.com/site/site07/index.html@cid=1452.html">http://www.nexaweb.com/site/site07/index.html@cid=1452.html</a></p>

<p><strong>OpenMake Software</strong> announced it will provide the process automation components of its award-winning OpenMake build-to-release management solution as a free Eclipse RCP-based application with an Eclipse plug-in. OpenMake Mojo, available at no cost starting today, provides the ideal automation solution for development teams seeking software alternatives to BuildForge or Anthill Pro.
<br/><a href="http://www.openmakesoftware.com/content/view/49/73/">http://www.openmakesoftware.com/content/view/49/73/</a></p>

<p><strong>Oregon State University's Open Source Lab</strong> will announce it has joined Eclipse Foundation as a new member, and will also announce a new and significant global open source health information project including public and private industry partners.</p>

<p><strong>ProSyst Software</strong> announced it has joined the Eclipse Foundation. ProSyst is an OSGi pioneer and besides expanding its services offerings ProSyst plans to drive a unifying architectural approach for RCP and eRCP deployment across both embedded and enterprise sectors. ProSyst is one of the main driving forces behind OSGi/JSR 232 and will be very happy to contribute its embedded and remote management know how.
<br/><a href="http://www.prosyst.com">www.prosyst.com</a></p>

<p><strong>Teamprise</strong> announced it is joining the Eclipse Foundation as an Add-In Provider. Teamprise enables Java developers to use the source code control, work item tracking, and reporting features of Microsoft Visual Studio 2005 Team Foundation Server from within Eclipse-based Integrated Development Environments (IDE), and from other operating systems, including Linux and Mac OS X.
<br/><a href="http://www.teamprise.com/news/2007/03/teamprise_joins_eclipse_foundation.html">http://www.teamprise.com/news/2007/03/teamprise_joins_eclipse_foundation.html</a></p>
		
<p><strong>About the Eclipse Foundation</strong></p>
<p>Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>

		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		John Moran or Lori Kroll<br>
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

