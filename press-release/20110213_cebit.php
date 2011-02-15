<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Community Showcase at CeBIT";
	$pageKeywords	= "eclipse, cebit, conference, exhibit";
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
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<h2>Community Bulletin</h2>
		
     	<p>	
			The Eclipse Foundation is pleased to announce at the upcoming CeBit trade show, the Eclipse Foundation 
			and member companies have organized a special in an Eclipse Pavillion to showcase the technology and solutions available from the Eclipse community.
			Eclipse Foundation members Actuate, Bredex, EclipseSource, *instinctools, itemis, Talend and
			Tasktop Technologies will highlight many diverse technologies such as BI,
			testing, provisioning, runtimes, documentation, data integration and task integration.  CeBIT is one of the largest 
			IT industry trade shows, being held March 1-5, 2011 in Hannover, Germany.
		</p>
		
		<p>
			"CeBIT attendees will have a great opportunity to experience first-hand the range and diversity of the 
			Eclipse ecosystems," says Mike Milinkovich, Executive Director of the Eclipse
			Foundation.  "The companies participating in the Eclipse Pavillion will be showcasing some of the latest Eclipse-based open source 
			and commercial innovations.  I'd encourage all attendees to visit the Pavillion to see the range of solutions available" - QUOTE NOT YET APPROVED
		</p>

		<p>
			Actuate paragraph
		</p>
		<p>
			BREDEX test experts will be available at the Eclipse Island to talk about quality assurance
			and automated acceptance testing for Eclipse RCP/GEF, Swing and HTML applications. Visitors
			can find out more about the Jubula Functional Testing Tool Project, the new open source basis
			at Eclipse for the award-winning GUIdancer tool. Through Jubula and GUIdancer, BREDEX offers a
			wide range of consulting and training services for automated testing and test processes. 			
		</p>
		<p>
			EclipseSource, a leading provider for Eclipse services, solutions and technology, will be
			featuring their Yoxos Eclipse distribution technology as well as the range of Eclipse projects
			the company participates in. With leadership roles in key Eclipse projects, including Equinox,
			RAP, RCP, EPP, RT, g-eclipse and p2, EclipseSource delivers domain expertise across essential
			Eclipse technologies.			
		</p>
		<p>
			*instinctools offers software and service for custom Eclipse and Java applications. Their
			software engineers have been successfully developing innovative software solutions in
			different industries for over 10 years. Market leaders in Information Technology are counting
			on *instinctools when it comes to the development of their Eclipse-based prototypes and
			software products. With DITAworks, *instinctools offers an integrated authoring platform for
			structured documentation using the single-source principle. With DITAworksEclipse, Eclipse
			applications can be professionally documented "out-of-the-box". 		
		</p>
		<p>
			
			itemis is a Strategic Member of the Eclipse Foundation and a market leader in the area of
			model-driven software development based on Eclipse. itemis develops frameworks and tools like
			'Xtext' for domain-specific modeling of Enterprise Applications, Embedded Systems and
			Business Applications for mobile devices, and focuses on generator development and Eclipse
			technologies. itemis harmonizes development methods with tool development to support customers.
			software development process and to develop solutions especially tailored to customers' needs.
		</p>
		<p>
			SOPERA and Talend will present their joint open source middleware product portfolio. This includes
			enterprise-ready solutions in the area of application and data integration. In addition, the
			companies will present their roadmap and first components of a lightweight integration platform,
			targeting developers as well as small and medium-sized companies.
		</p>
		<p>
			Tasktop Technologies is the market leader in task integration for Eclipse. Tasktop Technologies
			is the company behind the industry-leading open source Eclipse Mylyn Application Lifecycle
			Management (ALM) integration framework and its revolutionary task-focused interface
			technology.  Tasktop is collaborating with Microsoft to extend the benefits of Mylyn and
			Tasktop to .NET developers through Visual Studio and Team Foundation Server integration.
			Visit the Tasktop pedestal for a live demonstration. 
		</p> 
		<p>
			CeBIT 2011 takes place March 1-5, 2011 in Hanover Germany.  We hope to see you there!
		</p>			
		
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php
/*
 * Created on 20-Jan-2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
