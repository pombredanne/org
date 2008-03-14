<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Kicks Off Annual EclipseCon Conference";
$pageKeywords	= "eclipsecon, community, press, release, runtime, OSGi";
$pageAuthor		= "Ian Skerrett";

# Add page-specific Nav bars here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
# $Nav->addCustomNav("My Link", "mypage.php", "_self");
# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

# End: page-specific settings
#

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
		<style>
		.paddedlist li {	padding-bottom:7px;	}
	</style>
<div id="maincontent">
	<div id="midcolumn">
		<h2>Press Release</h2>

		<center>
		<h1>$pageTitle</h1>

		<p><i>25 Community Members Announce New Innovations and Products</i></p></center>		

		<p><strong>SANTA CLARA, Calif., March 18, 2008 &#150; </strong>
		The Eclipse Foundation today welcomed participants to EclipseCon 2008, the fifth annual Eclipse community conference, being
		held at the Santa Clara Convention Center in Santa Clara, Calif.  EclipseCon 2008 will feature the latest Eclipse developments
		and will provide a forum for attendees to discuss key business and technical issues facing the community. </p>
		
		<p>Dan Lyons, senior editor at Forbes and author of the popular blog, Fake Steve Jobs, will deliver the opening keynote
		presentation.  Other keynotes will be given by Sam Ramji from Microsoft Open Source Labs and Cory Doctorow, science fiction
		author and noted open source advocate.</p>
		
		<p>EclipseCon 2008 features over 350 technical talks and tutorials on a variety of Eclipse projects, including Equinox,
		Eclipse Rich Client Platform (RCP), Rich Ajax Platform (RAP), Mylyn, Device Developer Software Platform (DSDP), Eclipse
		Modeling project and many others.  EclipseCon 2008 also features the OSGi DevCon and the Eclipse/OMG Modeling Symposium.</p>
		
		<p>47 organizations are participating in EclipseCon as conference sponsors, including Gold sponsors AMD, BEA, BIRT Exchange,
		BlackBerry, Cloudsmith, IBM, JBoss, Oracle, Replay Solutions, Skyway Software, Sopera, and Wind River. A number of Eclipse
		member companies are also announcing a variety of exciting new initiatives at this year’s conference, including:
			<ul>
			
			<li><b>Actuate</b> Actuate&#146;s BIRT Exchange community (<a href="http://www.birt-exchange.com" target="blank">http://www.birt-exchange.com</a>),
			launched in September 2007, is a gold sponsor of this year&#146;s EclipseCon conference. With 13 sessions dedicated to BIRT,
			attendees will gain a first-class educational experience and will walk away with the tools and understanding they need to
			use BIRT in the real world.<br>
			<a href="http://www.businesswire.com/news/home/20080310005421/en" target="blank">http://www.businesswire.com/news/home/20080310005421/en</a>
			</li>
			
			<li><b>Anyware Technologies</b>, as an Eclipse expert, works with the leading French energy producer in France to provide
			a solution, based on Eclipse RCP, allowing data acquisition and tests monitoring during energy production.<br>
			<a href="http://www.anyware-tech.com" target="blank">www.anyware-tech.com</a>
			</li>
			
			<li><b>BREDEX</b> Representatives of BREDEX GmbH will give three talks at EclipseCon 2008 &#150; a tutorial for the automated
			testing tool, GUIdancer (Mon 10.30), and short talks on agile testing (Wed 15.00) and RCP-authorization (Thur 10.30). Hans-J.
			Brede and Achim Lörke will also be available on stand 104 in the exhibition hall.<br>
			<a href="http://www.bredex.de/en/news/pictures/EclipseCon_CommunityRelease_en.pdf" target="blank">http://www.bredex.de/en/news/pictures/EclipseCon_CommunityRelease_en.pdf</a>
			</li>
			
			<li><b>CodeGear</b> announced it has teamed with Instantiations, Inc., to integrate Instantiations Swing Designer visual layout
			tools into CodeGear JBuilder. Java developers using JBuilder will now be able to quickly construct more sophisticated and
			reliable Swing-based GUIs that enhance the user experience for enterprise applications. <br>
			<a href="http://www.codegear.com/article/37695" target="blank">http://www.codegear.com/article/37695</a>
			</li>
			
			<li><b>CodeGear</b> announced it has funded the contribution of a new fast Ruby debugger to Eclipse Dynamic Language
			Toolkit. The debugger includes stepping, run to breakpoint, smart step, variable introspection, hot swap, remote debugging
			and a free form expression analyzer. CodeGear 3rdRail 1.1 includes the fast debugger in addition to full support for Rails
			2.0, refactorings, and conversion tools to migrate applications to Rails 2.x.<br>
			<a href="http://www.codegear.com/products/3rdrail" target="blank">http://www.codegear.com/products/3rdrail</a>
			</li>			
			
			<li><b>compeople AG</b> The Riena project which is being led by compeople AG, a German IT-Service provider, has been
			successfully established within the Eclipse Community. It will provide a homogeneous platform for business enterprise
			applications from the user interface to the back-end integration, based entirely on the Eclipse Equinox platform.<br>
			<a href="http://www.compeople.de/eclipse" target="blank">http://www.compeople.de/eclipse</a>
			</li>

			<li><b>Embarcadero</b> PowerSQL simplifies SQL development for application developers with many features for improving
			productivity and reducing errors.  A rich SQL IDE with code completion, real-time error checking, code formatting and
			sophisticated object validation tools help streamline coding tasks. Power SQL offers native support for IBM&reg; DB2&reg;
			for LUW, Oracle&reg;, Microsoft&reg; SQL Server and Sybase&reg; as well as JDBC support. PowerSQL is available as a
			stand-alone application or as an Eclipse plugin. <br>
			<a href="http://www.embarcadero.com/products/powersql" target="blank">www.embarcadero.com/products/powersql</a>
			</li>

			<li><b>Etish</b> has recently become an Add-In Provider member of the Eclipse Foundation. Our Open Requirements Management
			Framework (ORMF) and the exemplary tool based on it, Useme, have been accepted as a public proposal for an Eclipse project.
			The proposal is currently gathering community. Both Useme and ORMF will be the subjects or presentations at EclipseCon
			2008. <br>
			<a href="http://www.etish.org/presscentre/news_releases/mar_17_08.html" target="blank">http://www.etish.org/presscentre/news_releases/mar_17_08.html</a>
			</li>			

			<li><b>froglogic</b>, the vendor of the popular automated Java GUI and Web testing tool Squish, announced its roadmap for
			the upcoming Squish 4.0 release. One strategic move is to replace Squish&#146;s graphical test development environment
			with a completely re-written Eclipse-based IDE boosting the productivity of QA engineers using Squish.<br>
			<a href="http://www.froglogic.com/pg?id=NewsEvents&category=94" target="blank">http://www.froglogic.com/pg?id=NewsEvents&category=94</a>
			</li>	
			
			<li><b>Genuitec</b> will proudly release two major products at EclipseCon: Pulse 2.0, an Eclipse-based provisioning tool and
			MyEclipse 6.1 Blue Edition, a custom toolsuite for WebSphere and RAD users. Both products originated from customer demand and
			provide massive productivity increases for processes and expanded feature sets.<br>
			<a href="http://www.myeclipseide.com" target="blank">www.myeclipseide.com</a><br>
			<a href="http://www.poweredbypulse.com" target="blank">www.poweredbypulse.com</a>
			</li>	
			
			<li><b>IBM</b> (NYSE: IBM) announced that its Jazz  technology platform is helping students learn how to collaborate on
			global software development projects.  Every year IBM awards universities with grants allowing the next generation of
			developers to research software development team collaboration on a global scale. <br>
			<a href="http://www.ibm.com/software/rational/jazz/" target="blank">http://www.ibm.com/software/rational/jazz/</a>
			</li>	
			
			<li><b>ILOG</b> introduces Agile Business Rules Development (ABRD) methodology, the industry#&146;s first free, vendor-neutral
			step-by-step methodology for developing business rule applications. The company also donated an open source Java to C#
			source code converter, and is spearheading the Albireo project for developing Rich Client Platform applications.<br>
			<a href="http://www.ilog.com/corporate/releases/index.cfm" target="blank">http://www.ilog.com/corporate/releases/index.cfm</a>
			</li>	

			<li><b>Innoopract</b>, provider of the popular Yoxos Eclipse distribution announced the availability of a new Software-as-a-Service
			offering for managing Eclipse and team collaboration. Yoxos Hosted Edition is a simple to use software service that
			enables professional development teams to collaborate and share project environments including Eclipse toolsets, configurations
			and source code.<br>
			<a href="http://www.innoopract.com/en/news-events/news-press-releases/article/yoxos-hosted.html" target="blank">http://www.innoopract.com/en/news-events/news-press-releases/article/yoxos-hosted.html</a>
			</li>				

			<li><b>Instantiations</b> newly enhanced CodePro AnalytiX Server now offers modern, agile and innovative software analysis
			tools for use in mainstream development organizations. It automates Java code auditing, metrics, code coverage, JUnit test
			results and reports through a new management dashboard. It integrates into automated build system using Ant or Maven and
			returns actionable results to both developers and managers automatically.<br>
			<a href="http://www.instantiations.com/press/release/080317.html" target="blank">http://www.instantiations.com/press/release/080317.html</a>
			</li>

			<li><b>Klocwork, Inc.</b>, a global leader in automated source code analysis solutions for improving software security and
			quality, announced support for Carbide.c++, a family of Eclipse-based development tools supporting Symbian OS development
			on the S60 platform, the Series 80 platform, UIQ, and MOAP. <br>
			<a href="http://www.klocwork.com/company/releases/KlocworkAnnounceSupportForCarbide.asp" target="blank">http://www.klocwork.com/company/releases/KlocworkAnnounceSupportForCarbide.asp</a>
			</li>

			<li><b>MicroDoc</b> is specializing in code quality assurance and integrated development process support for enterprise and
			embedded Java software systems. The latest Eclipse based development is an implementation of the Fitnesse automated testing
			framework, which directly supports test execution on development workstations as well as on embedded systems.<br>
			<a href="http://www.eclipsecon.org/2008/?page=sub/&id=195" target="blank">http://www.eclipsecon.org/2008/?page=sub/&id=195</a>
			</li>

			<li><b>OpenMake</b> Meister 7.2 will enhance the continuous integration process for Eclipse developers.  Meister 7.2,
			release scheduled for May, includes the ability to automatically mashup the developer&#146;s Eclipse IDE build with the
			Continuous Integration build running outside of Eclipse preventing broken builds caused by source code changes that impact
			the build scripts.  <br>
			<a href="http://www.openmakesoftware.com/press-releases/" target="blank">http://www.openmakesoftware.com/press-releases/</a>
			</li>

			<li><b>Polarion Software</b> announces its ongoing support for the Subversive Team Provider project, and will sponsor a long
			talk by the Subversive project leader on integrating Subversion in Eclipse projects. Polarion will also host a BOF session
			with the Subversive project leader to discuss any and all topics related to Subversion.<br>
			<a href="http://www.polarion.com/company/press/archive2008/Polarion_Subversive_EclipseCon08.pdf" target="blank">http://www.polarion.com/company/press/archive2008/Polarion_Subversive_EclipseCon08.pdf</a>
			</li>

			<li><b>ProSyst</b> has contributed the following specification components to Equinox: Initial Provisioning, IO Connector
			Service, Wire Admin Service, Declarative Services. ProSyst is an OSGi pioneer. The Open Source mBedded Server Equinox
			Edition from ProSyst is based on Eclipse Equinox and contains additional features and bundles. Our 120+ inhouse OSGi
			experts stand ready to provide Professional Services including Support Services for Equinox.<br>
			<a href="http://www.prosyst.com" target="blank">www.prosyst.com</a>
			</li>			
			
			<li><b>Protecode</b> developed the first automated preventative Intellectual Property management solution.  The software
			plug-in unobtrusively manages IP by detecting 100% of external content, then logging, identifying and reporting pedigree
			during any stage of a software development project.  “Protecoding” automatically creates a software Bill of Materials,
			offering a clean pedigree that insures accurate use of licenses.<br>
			<a href="http://www.protecode.com" target="blank">www.protecode.com</a>
			</li>
			
			<li><b>Replay Solutions</b> today announced sign-ups for trial downloads of new product ReplayDIRECTOR for Java EE, a
			unique record and replay technology with an Eclipse plug-in. ReplayDIRECTOR captures and re-executes java applications
			allowing developers, QA and production teams to easily and without the original issue infrastructure, reproduce
			non-reproducible bugs.<br>
			<a href="http://www.replaysolutions.com/news/news.php?id=29" target="blank">http://www.replaysolutions.com/news/news.php?id=29</a>
			</li>
			
			<li><b>Research In Motion (RIM)</b> will be previewing a new plug-in that seamlessly integrates within the Eclipse
			environment enabling developers to create rich Java applications for the BlackBerry&#reg; platform. RIM will also be
			presenting a session on "Taking Applications Wireless with BlackBerry and Eclipse" on March 18 and hosting a
			"BlackBerry Developer Day" on March 19. <br>
			<a href="http://www.blackberry.com/go/eclipse" target="blank">www.blackberry.com/go/eclipse</a>
			</li>
			
			<li><b>Skyway Software</b> announces that Skyway Visual Perspectives offers unique Eclipse plug-in capabilities for
			Spring.  With Skyway Visual Perspectives, developers now can model their entire solution (including data structures,
			business logic, and rich user-interfaces) or simply switch views and code whatever they need, whenever necessary.
			<a hef="http://www.skywayperspectives.org." target="blank">Read More</a><br>
			<a href="http://www.prosyst.com" target="blank">www.prosyst.com</a>
			</li>
			
			<li><b>SpringSource</b> today announced the availability of the SpringSource Tool Suite, which builds on the success of
			Eclipse, Mylyn and Spring IDE. It simplifies development of Spring-powered enterprise Java applications, dramatically
			reduces information overload and aggregates the best practices established by SpringSource consultants and the Spring
			community. To download starting March 18 please visit <a href="http://www.springsource.com/products/sts"
			target="blank">http://www.springsource.com/products/sts</a>.<br>
			<a href="http://www.springsource.com" target="blank">www.springsource.com</a>
			</li>
			
			<li><b>Teamprise</b> announced the availability of Teamprise 3.0, its latest release of client applications providing
			Java and cross-platform development teams with full access to the application lifecycle management features of Visual
			Studio 2008 Team Foundation Server.  Demonstrations were being given by Teamprise and Microsoft while co-exhibiting at
			EclipseCon 2008.<br>
			<a href="http://www.teamprise.com" target="blank">www.teamprise.com</a>
			</li>
			
			<li><b>Virtutech, Inc.</b>, the leader in Virtualized Software Development (VSD), announced an initiative to accelerate the
			creation of standards for the VSD industry and to drive mainstream acceptance of VSD throughout the electronic systems
			business. Virtutech intends to leverage its expertise to propose, promote and support best practices, conventions and
			standards for VSD.<br>
			<a href="http://www.businesswire.com/portal/site/google/?ndmViewId=news_view&newsId=20080310005300&newsLang=en" target="blank">http://www.businesswire.com/portal/site/google/?ndmViewId=news_view&newsId=20080310005300&newsLang=en</a>
			</li>
			</ul>
		</p>
		
		<p><b>About the Eclipse Foundation</b><br>
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application
		frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development
		lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and
		performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major
		technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support
		the Eclipse Platform.</p>
		
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
		Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org" target="blank">www.eclipse.org</a>.</p>

		<p><center>###</center><p>
		
		<p>All company/product names and service marks may be trademarks or registered trademarks of their respective companies.</p>
				
		<p><b>Press Contact</b><br>
		Steve Eisenstadt<br>
		Page One Public Relations<br>
		<a href="mailto:steve@pageonepr.com">steve@pageonepr.com</a><br>
		919-781-8096<br>
		<br>

	</div>

</div>


		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

