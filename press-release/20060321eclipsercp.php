<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Community Awards Announcement";
	$pageKeywords	= "Eclipse Foundation, community, rcp, press release, eclipsecon";
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
		<h2 ALIGN="CENTER"><strong>Eclipse Rich Client Platform Continues Momentum with New Releases and Projects</strong></h2>
		<ul>
			<li>New Initiatives Expand the Eclipse RCP Ecosystem and Fuel Widespread Adoption</li>
		</ul>
		<p><strong>ECLIPSECON 2006, SANTA CLARA, Calif., March 21, 2006</strong> — The Eclipse Foundation today announced several new open source initiatives around the Eclipse Rich Client Platform (RCP) to accelerate the adoption and utility of the Eclipse platform. Eclipse RCP is an integration platform for building and deploying robust rich client applications. Today’s new project releases and new project proposals will further simplify RCP development and extend the usage of Eclipse RCP.</p>
		<p>Software vendors, open source projects and enterprises are adopting Eclipse RCP because it gives them the freedom to deploy their applications on a variety of operating systems. No longer do these organizations need to tie their applications to a single operating system but can use Eclipse RCP as the runtime platform for deploying applications on operating systems such as Windows, Linux and MacOS. Because Eclipse RCP is an open source deployment platform, organizations also benefit from participating in a vendor-neutral, open source community.</p>
		<p>“We are seeing growing momentum and adoption of Eclipse RCP,“ said Mike Milinkovich, executive director of the Eclipse Foundation. “An important part of this momentum is the expanding number of open source projects that are building new technology based on RCP. Given our success as a tools integration platform, we see Eclipse RCP becoming the pervasive integration platform for rich client applications.”</p>
		<p>Four open source initiatives will extend and enrich the RCP platform. Each initiative provides additional application frameworks that developers can use to add specific functionality into their Eclipse RCP-based applications. These include:</p> 
		<ul>
			<li><strong>Eclipse Data Tools Project (DTP)</strong> – The new release of the Eclipse Data Tools Platform provides developers with a collection of core frameworks and tools for writing data-centric applications on the RCP platform. The new release makes it easier to define and manage connections to multiple data sources.<br /><br /></li>
			<li><strong>Eclipse Communication Framework (ECF) Project</strong> – The new release introduces protocol-neutral VOIP ‘call API.’ Implementations are being developed based on Google Talk (Jingle), SIP and Asterisk. ECF enables the creation of RCP applications that require client-server and/or peer-to-peer messaging and communications and currently supports the creation of integrated multi-protocol IM/chat, file sharing and data sharing applications.<br /><br /></li>
			<li><strong>Enterprise Content Management Project (Apogée)</strong> – Apogée is a new Eclipse Technology project proposed by Nuxeo to create a global client platform for building enterprise content management (ECM)-oriented desktop applications. The project will help developers to build RCP based applications that easily integrate features such as collaboration, document management, business processes and business forms applications. It will connect with existing ECM infrastructures, allowing a high-degree of sharing between ECM servers and desktop applications.<br /><br /></li>
			<li><strong>Enterprise Component Framework Project</strong> – Exadel has recently proposed a project to extend the Equinox framework to enable Eclipse components to be developed and used in enterprise server applications.<br /><br /></li>
		</ul>
		<p>Eclipse RCP is an integration platform for building and deploying rich, full featured applications. The main features of RCP include:</p>
		<ul>
			<li>The Equinox dynamic runtime component model, which is based on the OSGi specification, allows for easy integration and extension of components from different vendors.
			<li>The ability to easily deploy and update client applications.<br /><br /></li>
			<li>A number of frameworks for common application tasks such as help systems, generic workbench, wizards, etc.<br /><br /></li>
			<li>A GUI widget library that allows for applications to natively run on multiple platforms, including Windows, Linux and MacOS.<br /><br /></li>
			<li>Expanded capabilities to work offline.<br /><br /></li>
		</ul>
		<p>“DTP 0.7 can be packaged in a variety of ways for RCP applications, including those that require generic connectivity and access to databases,” said John Graham, DTP PMC chair and staff engineer, Sybase, Inc. “We believe that DTP will simplify and extend development on the RCP platform, and we are looking forward to seeing how the community leverages it.”</p>
		<p>“Agence France Presse, one of the world’s oldest, largest and most respected news agencies, turned to Nuxeo to develop a specialized content management system,” said Eric Barroca, vice president of Nuxeo. “After evaluation, we felt Eclipse RCP was the obvious, only choice for building the desktop application for journalists, connected with the CPS ECM platform. RCP enabled Nuxeo to tightly integrate with the desktop enabling a high level of responsiveness and ease of use that AFP users require. We have used this experience to initiate the Eclipse Apogée project.”</p>
		<p>Eclipse RCP can be seen in action this week at EclipseCon 2006. More information about the conference can be found online at <a href="http://www.eclipsecon.org">http://www.eclipsecon.org</a>.</p> 
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
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

