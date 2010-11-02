
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Makes Available New Release of Eclipse Virgo";
	$pageKeywords	= "Eclipse, release, virgo, java, osgi";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Light-weight application server makes it easier to deploy modular Java applications</h2>
		
     	<p>
     		<br>	
     		<b>Eclipse Summit Europe, Ludwigsburg, Germany - November 2, 2010</b> - The Eclipse Foundation is
     		pleased to announce the release of Eclipse Virgo 2.1, a light-weight application server for deploying
     		applications based on OSGi.  Eclipse Virgo was created in March 2010 and is based on the code
     		contribution of VMware's SpringSource dm Server product.  This is the first official release of this
     		project since becoming an Eclipse project.
		</p>
		<p>
			Virgo is a completely module-based Java application server that is designed to run enterprise Java
			applications and Spring-powered applications with a high degree of flexibility and reliability. It
			makes it possible to migrate existing enterprise Java applications to a light-weight modular
			architecture.  Key features in Virgo include: 
			<ul>
				<li>An administration console to deploy and manage OSGi artifacts</li>
				<li>A web server, based on Eclipse Gemini Web Container, that makes it easy to deploy existing WAR files, including all their dependencies</li>
				<li>Support for existing third party frameworks, like Spring, Hibernate and Log4j, that may not be designed as OSGi bundles</li>
			</ul>
		</p>
		<p>	
			The new release of Virgo 2.1 provides significant performance improvements, including a 5 times
			improvement on Windows start-up time, improved diagnostic tooling, integration with the Equinox
			console and better resource handling in the web container.
		</p>
		<p>
			"We are very pleased with the response to Virgo from the Eclipse community," said Rod Johnson, SVP and
			General Manager of VMware's SpringSource product division.  "An important goal for starting this
			project was to create a larger community of users and contributors for the technology, therefore we
			are thrilled to have companies like SAP actively participate in the community."
		</p>
		<p>
			The Eclipse Foundation is an open-source community of more than 165 members, including SAP AG (NYSE: SAP)
			and SpringSource. Member organizations typically use Eclipse projects, such as Virgo 2.1, to build
			products and services that they offer to their customers.
		</p>
		<p>
			"Eclipse Virgo, with its modular OSGi foundation and its support for Enterprise Java Applications,
			will enable SAP to develop, deploy and maintain Java applications more easily, and thus serve our
			customers better," said Bjoern Goerke, Senior Vice President and head of SAP NetWeaver&reg;
			Development at SAP AG.  "We are excited to join forces with the Virgo community and contribute to the
			success of the project with the goal to establish a healthy and vibrant Virgo ecosystem."
		</p>
		<p>
			Virgo 2.1 is available now for download at <a href="http://www.eclipse.org/virgo">http://www.eclipse.org/virgo</a>. 
		</p>
		<p>
			<b>About the Eclipse Foundation</b><br>
			Eclipse is an open source community, whose projects are focused on building an open development
			platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing
			software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative
			start-ups, universities and research institutions and individuals extend, complement and support the
			Eclipse Platform.
		</p>
		<p>
			The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse
			projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">eclipse.org</a>. 
		</p>
		<p>
			<i>SAP, SAP NetWeaver and all SAP logos are trademarks or registered trademarks of SAP AG in Germany and
			in several other countries.</i>
		</p>
		<p>
			<i>All other product and service names mentioned are the trademarks of their respective companies.</i>
		</p>
		<p>
			<b>SAP Forward-looking Statement</b><br>
			Any statements contained in this document that are not historical facts are forward-looking
			statements as defined in the U.S. Private Securities Litigation Reform Act of 1995. Words such as
			"anticipate," "believe," "estimate," "expect," "forecast," "intend," "may," "plan," "project,"
			"predict," "should" and "will" and similar expressions as they relate to SAP are intended to
			identify such forward-looking statements. SAP undertakes no obligation to publicly update or revise
			any forward-looking statements. All forward-looking statements are subject to various risks and
			uncertainties that could cause actual results to differ materially from expectations. The factors
			that could affect SAP's future financial results are discussed more fully in SAP's filings with the
			U.S. Securities and Exchange Commission ("SEC"), including SAP's most recent Annual Report on Form
			20-F filed with the SEC. Readers are cautioned not to place undue reliance on these forward-looking
			statements, which speak only as of their dates.
		</p>
				  
	</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


