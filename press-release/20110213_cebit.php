<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Showcases Member Companies at CeBIT";
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
		
     	<p>	
			The Eclipse Foundation announced today that they will participate in CeBIT 2011 with an exhibit
			area featuring Foundation members Actuate, Bredex, EclipseSource, *instinctools, itemis, Talend and
			Tasktop Technologies. The Eclipse exhibit will highlight many diverse technologies such as BI,
			testing, provisioning, runtimes, documentation, data integration and task integration.
		</p>
		
		<p>
			"Working jointly with our members is a great way to show off some of the different products
			out there in the Eclipse community," says Mike Milinkovich, Executive Director of the Eclipse
			Foundation.  "We're looking forward to the event and the opportunity to spotlight the latest
			and greatest in Eclipse." - QUOTE NOT YET APPROVED
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
			itemis paragraph
		</p>
		<p>
			Talend paragraph
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
