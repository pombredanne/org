<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Doors Open for EclipseCon 2009";
$pageKeywords	= "eclipsecon, community, press, release";
$pageAuthor		= "Lynn Gayowski";

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

		<h1>$pageTitle</h1>

		<p><i>Community Members Announce New Innovations and Products</i></p>	

		<p><strong>ECLIPSECON 2009, SANTA CLARA, Calif., March 24, 2009 &#150; </strong>
		EclipseCon 2009, the sixth annual Eclipse community conference, opens today at the Santa Clara Convention
		Center in Santa Clara, Calif. The conference features the latest Eclipse developments and provides a
		forum for attendees to discuss key business and technical issues facing the community.
		</p>
		
		<p>Clay Shirky, Adjunct Professor for the Interactive Telecom Program at NYU, and Jeff Atwood, blogger
		and CEO of stackoverflow.com, will deliver the opening keynote presentation. Wednesday's keynote will be
		given by Peter Vosshall, Vice President and Distinguished Engineer at Amazon.com, and Don MacAskill,
		Co-founder and CEO of SmugMug, and Thursday's keynote will be given by Tim Wagner, Principal Development
		Manager for Microsoft Visual Studio Platform and Kevin McGuire, Eclipse UI Architect and Design &amp;
		Usability Lead at IBM. 
		</p>
		
		<p>EclipseCon 2009 features technical talks and tutorials on a variety of Eclipse projects and
		technologies, including Equinox, Eclipse Rich Client Platform (RCP), Rich Ajax Platform (RAP), Mylyn,
		Device Developer Software Platform (DSDP), Eclipse Modeling project and many others. EclipseCon 2009
		also features the OSGi DevCon. 
		</p>
		
		<p>There are 36 organizations participating as conference sponsors this year, including Gold sponsors
		BIRT Exchange, Blu Age, IBM, JBoss, Sopera, Sun Microsystems and Wind River. A number of Eclipse member
		companies are also announcing a variety of exciting new initiatives at this year’s conference, including: 

			<ul>

			<li><b>Actuate Corporation</b> (NASDAQ: ACTU), the leader in delivering Rich Internet Applications
			Without Limit&trade; and founder and co-leader of the BIRT project with the Eclipse Foundation,
			announced the creation of the Actuate BIRT Global Partner Connection.  The new program will unite
			organizations globally using BIRT, the leading open source information application development
			environment, and will bring together a community of technology providers offering high-valued
			products, solutions and services around BIRT.<br>
			<a href="http://www.actuate.com/company/news/press-releases-resources.asp?ArticleId=14338" target="blank">http://www.actuate.com/company/news/press-releases-resources.asp?ArticleId=14338</a>
			</li>
			
			<li><b>Anyware Technologies</b> announces Eclipse Time, a conference which presents many Eclipse
			topics (technical, strategic) during sessions delivered by the Eclipse Foundation, Eclipse experts
			and industry speakers. Attendees are technical developers and managers from many fields of activity:
			embedded, aeronautics, space, research and communications. Gathering more than one hundred people,
			the event focuses on how Eclipse can be an answer to industry topics.<br>
			<a href="http://www.anyware-tech.com/en/news/events.html" target="blank">http://www.anyware-tech.com/en/news/events.html</a>
			</li>

			<li><b>ARS Computer und Consulting GmbH</b>, an IBM Premier Business Partner since 1994, announced
			it has joined the Eclipse Foundation as a Solutions Member at EclipseCon. The medium-sized software
			development, integration and training specialist underpins its commitment to Open Source, especially
			Eclipse-based development environments, Rich Clients and Runtime platforms. By joining the Eclipse
			Foundation, ARS intends to shift from a consumer role to actively supporting and contributing to the
			Eclipse community.<br>
			<a href="http://www.ars.de/web/firma/ars_ist_neues_mitglied_der_eclipse_foundation.do" target="blank">http://www.ars.de/web/firma/ars_ist_neues_mitglied_der_eclipse_foundation.do</a>
			</li>
			
			<li><b>AvantSoft</b> provides excellent training and development services for Eclipse Plugins, RCP,
			GEF, EMF, Flex, and J2EE. AvantSoft's Eclipse University offers customized corporate training and
			public virtual classes. All EclipseCon2009 presentations are published using innovative Flex-based
			platform gpublication.com. AvantSoft&#146;s MyEventPortal solution enables custom portals with content,
			networking, and community support.<br>
			</li>

			<li><b>Band XI International, LLC</b> is successfully commercializing the results of their US Army
			Small Business Innovation Research (SBIR) grants to build the Mobile Embedded Component Suite
			(MECS), an embedded Java&trade; foundation using Eclipse Equinox as a runtime.  Band XI is applying
			the core component frameworks to address prognostics and diagnostics in condition-based maintenance
			of vehicle fleets. The same software provides the basis for various military and industrial
			applications.<br>
			<a href="http://www.bandxi.com/sbir/ec2009pr.html" target="blank">http://www.bandxi.com/sbir/ec2009pr.html</a>
			</li>
			
			<li><b>BLU AGE Corp.</b>, leader in agile model transformation, announces the launch of their Legacy
			Model-Driven modernization solution: &#147;BLU AGE Reverse Modeling&#148; and &#147;BLU AGE Modernization&#148;.  This
			groundbreaking solution enables complete reverse modeling and re-engineering of the most critical
			Enterprise applications.<br>
			<a href="http://www.bluage.com/index.php?cID=news" target="blank">http://www.bluage.com/index.php?cID=news</a>
			</li>
			
			<li><b>Bredex</b> At EclipseCon, Bredex will be represented by Achim L&ouml;rke, presenting an
			approach to using models to ease the start-up of GUI testing, and Alexandra Imrie, talking about
			usability in Eclipse applications. In the exhibition hall (stand 204), Achim and Alex will
			demonstrate the upcoming version 3.0 of GUIdancer, which is a finalist in the Eclipse Awards in the
			&#147;Best Commercial Developer Tool&#148; category.<br>
			<a href="http://www.bredex.de/en/news/pdf/BredexAtEclipseCon_en.pdf" target="blank">http://www.bredex.de/en/news/pdf/BredexAtEclipseCon_en.pdf</a>
			</li>

			<li><b>EclipseSource</b>, the leading provider of Eclipse runtime products and services, announced
			Yoxos SecureSource, a subscription-based service that provides secure access to a repository of
			certified open source plug-ins. The new service provides development teams with secured, reliable
			access to an uncompromised and consistent code base and is designed to alleviate concerns about
			source code authenticity and origin.<br>
			</li>
			
			<li><b>Eteration, a.s.</b>, an Eclipse expert and long time committer to the Eclipse Foundation
			announces open education and courseware for web application development. This initiative is a part
			of the Web Tools platform project.  Eteration is a provider of services and education for
			Enterprise Customers in Europe and Asia.<br>
			</li>
			
			<li><b>froglogic GmbH</b> is showing a preview of Squish 4.0 at EclipseCon 2009. Squish is a
			professional, cross-platform GUI and regression testing tool that enables testers to create and
			execute automated GUI tests for applications based on a variety of different GUI technologies.
			Squish stands out from other GUI test tools thanks to its close integration with each supported
			GUI technology.<br>
			<a href="http://www.froglogic.com/pg?id=NewsEvents&category=108" target="blank">http://www.froglogic.com/pg?id=NewsEvents&category=108</a>
			</li>

			<li><b>Genuitec</b> released MyEclipse 7.1 Blue Edition, software that allows companies to unleash
			their WebSphere investment with WSAD/RAD project support and WebSphere 7 compatibility. Also, nWire
			Software gives Genuitec&#146;s Pulse users a boost with innovative code exploration. And, Quest Software
			has joined Genuitec's Pulse Network with popular Java profiler JProbe&reg;.<br>
			</li>
			
			<li><b>Instantiations</b>, a leading provider of Eclipse-based software quality, security, GUI building
			and testing solutions released version 7.0 of WindowBuilder Pro Java GUI builder for Swing, SWT and GWT.
			WindowBuilder Pro, which was nominated for a 2009 Eclipse Award, adds many features to v7.0 including UI
			Factories, Eclipse Nebula widgets integration, improved parsing, new customization API for third party
			extensibility, Swing Data Binding and full support for GWT-Ext widget set.<br>
			<a href="http://www.instantiations.com/press/release/090324.html" target="blank">http://www.instantiations.com/press/release/090324.html</a>
			</li>
			
			<li><b>itemis</b>, strategic member of the Eclipse Foundation, presents the new development of
			TMF-Xtext, which will be released in the next version of Eclipse in June 2009, and the new project
			EMF-Index.  Both of the projects will be presented in sessions at EclipseCon on Tuesday, March 24:
			&#147;Next generation textual DSLs with Xtext&#148; and &#147;Managing Big Ecore Models with EMF Index&#148;.<br>
			<a href="http://www.itemis.com/itemis-ag/news/2009/language=en/taps=590/20365/eclipsecon-2009" target="blank">http://www.itemis.com/itemis-ag/news/2009/language=en/taps=590/20365/eclipsecon-2009</a>
			</li>

			<li><b>MicroDoc</b> is planning to release &#147;Java Bindings for openVG&#148; under EPL in Q2 of 2009.
			OpenVG&trade; is a cross-platform API that provides a low-level hardware acceleration interface
			for vector graphics libraries. The Java&trade; bindings will make hardware accelerated 2D vector
			graphics available for users of eRCP applications on mobile and embedded devices.  MicroDoc is also
			organizing <a href="http://www.microdoc.com/node/312" target="blank">Eclipse Embedded Day</a> in
			Stuttgart, Germany on June 25, 2009.<br>
			<a href="http://www.microdoc.com/openvg" target="blank">http://www.microdoc.com/openvg</a>
			</li>

			<li><b>Oracle</b> announced Oracle&reg; Enterprise Pack for Eclipse Release 11g, a free component of
			Oracle Fusion Middleware designed to help developers leverage their expertise in Eclipse with the
			comprehensive capabilities of Oracle Fusion Middleware. Key enhancements in this release include
			Object-Relational Mapping (ORM), Spring and Web Service tools to help reduce development complexity
			for Java and database developers targeting Oracle platforms.<br>
			</li>

			<li><b>Perforce Software</b>, an Eclipse member company, announced the latest release of its
			Perforce Plug-in for Eclipse which integrates Eclipse with Perforce, The Fast Sofware Configuration
			Management System. This version introduces the Synchronize view, enhanced Resolve dialog and a new
			Integrate dialog, along with numerous performance enhancements.<br>
			</li>
			
			<li><b>ProSyst</b>, <a href="http://www.prosyst.com" target="blank">www.prosyst.com</a>, an OSGi
			pioneer and Active Contributor to Equinox with 2 Equinox committers has joined the Eclipse Training
			Alliance, as a premium member.  ProSyst offers various Embedded and Enterprise OSGi training courses
			as well as Eclipse eRCP.  ProSyst would also be pleased to offer an onsite training - customized for
			your company.<br>
			<a href="http://www.prosyst.com/news/news/2009/eta.html" target="blank">http://www.prosyst.com/news/news/2009/eta.html</a>
			</li>

			<li><b>Protecode</b> announced Release 2.0 of its software governance products which make the
			managing of licensing obligations of Open Source and other 3rd-party software much easier: the
			Enterprise IP Analyzer TM for bulk analysis of existing code, and the Eclipse plug-in Developer
			IP Assistant TM, industry&#146;s first real-time preventive IP management solution.<br>
			<a href="http://www.protecode.com/press-releases/2009/032309-protecode-release2-IP-management-products.php" target="blank">http://www.protecode.com/press-releases/2009/032309-protecode-release2-IP-management-products.php</a>
			</li>

			<li><b>SOPERA</b> is offering a mature open source platform for SOA (Service Oriented Architecture).
			With the new and immediately available Release 3.2, the functional scope of the suite has again been
			expanded significantly: It now also includes integration components for Talend Open Studio, the
			leading Open Source software for data integration, and Hyperic HQ, the multiple prize-winning Open
			Source solution for system management and monitoring.<br>
			<a href="http://www.sopera.de/en/press/press-release/19032009/" target="blank">http://www.sopera.de/en/press/press-release/19032009/</a>
			</li>

			<li><b>Soyatec</b> proudly announces a massive source contribution to the e4 project on Declarative
			UI: XWT and the availability of a Technical Preview Release of eclipse4sl (proposed as eclipse SLDT)
			on Mac OS X.  Soyatec continues to show a strong commitment to lead and develop several Eclipse
			projects such as XWT, PMF, EGF and SLDT and to promote Eclipse in the China market.<br>
			<a href="http://www.soyatec.com/company/e4-xwt.php" target="blank">http://www.soyatec.com/company/e4-xwt.php</a>
			</li>
						
			<li><b>SpringSource</b> has released SpringSource Tool Suite (STS) 2.0, the most comprehensive
			environment for building Spring-powered Java applications. STS 2.0 is an Eclipse-based platform that
			adds such features as wizards for creating projects, forms-based configuration editing, and more.
			Also included in STS 2.0 are tools which help developers deploy modular OSGi applications.<br>
			<a href="http://www.springsource.com/node/1384" target="blank">http://www.springsource.com/node/1384</a>
			</li>

			<li><b>Weigle Wilczek</b> announces that it is expanding to the United Kingdom with Neil Bartlett, an
			internationally recognised OSGi expert and author of the upcoming book &#147;OSGi in Practice&#148;, as a founding
			partner of the upcoming London office.  As well, itemis, ProSyst and SOPERA have joined the Eclipse
			Training Alliance.  As an international expert network, the Eclipse Training Alliance pools the extensive
			Eclipse knowledge of its associate companies.<br>
			</li>
			
			</ul>
		</p>
		
		<p>
			<strong>About the Eclipse Foundation</strong><br />
			Eclipse is an open source community, whose projects are focused on building an open development
			platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing
			software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative
			start-ups, universities and research institutions and individuals extend, complement and support the
			Eclipse Platform.
		</p>
		
		<p>
			The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
			Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.
		</p>
		
		<p>
			<br>		
			<i>All company/product names and service marks may be trademarks or registered trademarks of
			their respective companies.</i>
			<br><br>
		</p>
		
		<p>
			<strong>Press Contact:</strong><br>	
			Chantal Yang<br>
			Page One PR for Eclipse Foundation<br>
			415-875-7494<br>
			<a href="mailto:eclipse@pageonepr.com">eclipse@pageonepr.com</a><br>
			<br>
		</p>

	</div>

</div>


		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

