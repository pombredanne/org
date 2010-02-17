<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation at CeBIT";
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
		
		<h2>Eclipse Foundation participates in new CeBIT theme island - showcases member company products and projects</h2>
		
     	<p>	
			The Eclipse Foundation announced today that they will participate in <a href="http://www.cebit.de" target="blank">CeBIT 2010</a> with a themed
			exhibit in the Open Source Forum.  The exhibit will include Foundation members Actuate,
			Bredex, EclipseSource and SOPERA.
		</p>
		
		<p>
			"It's a first for the Foundation to have a joint presence at CeBIT and we're very excited about
			the potential," says European Ecosystem Director, Ralph Mueller.  "It's a great opportunity to
			see both the products and the projects by these Eclipse member companies."
		</p>
 	
     	<p>
     		The Foundation exhibit will cover such diverse tool areas as BI, provisioning, testing and SOA.
     		The exhibiting companies represent not only Eclipse projects such as BIRT, RAP and p2, but
     		offer a broad range of Eclipse-based products and services.
		</p>

		<p>
			Actuate is showcasing its premier open source report development technology, BIRT (Business
			Intelligence and Reporting Tools). Visitors will be given an insight into BIRT's extensive
			capabilities, and the more advanced applications of BIRT in use within large enterprise
			systems. BIRT demonstrations will also focus on interactivity, customization, deployment and
			integration.
		</p>
		<p>
			Bredex will be demonstrating GUIdancer, their automated acceptance testing tool for Swing,
			SWT/RCP/GEF and HTML applications. Visitors will be able to see a sneak preview of version
			4.0 of the tool, scheduled for early April. Bredex test experts will also be available to
			talk to about quality assurance in Eclipse applications. 
		</p>
		<p>
			EclipseSource will be featuring their Yoxos Eclipse distribution technology as well as the
			range of Eclipse projects the company participates in.  At writing the team participates in
			10 projects, including the Rich Ajax Platform, the Eclipse Runtime project, g-eclipse, the
			cloud-computing project and p2, the Eclipse provisioning project.
		</p>
		<p>
			SOPERA will demonstrate Swordfish, a next-generation SOA Framework which is one of the Eclipse
			top-level projects. SOPERA will also give an insight into SOPERA ASF, a proven Open Source
			SOA Platform. With SOPERA ASF enterprise users and system integrators can build, run and
			manage service-oriented applications very fast and cost effective.
		</p>
		<p>
			<b>About the Eclipse Foundation</b><br>
			Eclipse is an open source community whose projects are focused on providing an extensible
			development platform and application frameworks for building software. Eclipse provides
			extensible tools and frameworks that span the software development lifecycle, including
			support for modeling, language development environments for Java, C/C++, PHP and others,
			testing and performance, business intelligence, rich client applications and embedded
			development. A large, vibrant ecosystem of major technology vendors, innovative start-ups,
			universities and research institutions and individuals extend, complement and support the
			Eclipse Platform.
			<br><br>
			The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the
			Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at
			<a href="http://www.eclipse.org">www.eclipse.org</a>.
		</p>
		<p>
			<b>About Actuate - the people behind BIRT</b><br>
			Actuate founded and continues to co-lead the Eclipse BIRT open source project. BIRT is the
			premier development environment for Rich Information Applications that present data in
			compelling and interactive ways via the web on any device. Actuate and its people are
			dedicated to making BIRT the best environment for our customers to develop Web 2.0
			applications that drive revenue through higher customer satisfaction/loyalty and improve
			operational performance. The people of Actuate continually participate in and provide
			resources for the vibrant open source community that has emerged around BIRT. Anybody can
			participate in the BIRT movement by visiting <a href="http://www.birt-exchange.com">www.birt-exchange.com</a>.
			<br><br>
			Actuate offers value-add BIRT products and services that speed the development process and
			bring additional functionality, interactivity and enterprise scalability to BIRT-based Rich
			Information Applications. Actuate has over 4,500 customers globally in a diverse range of
			business areas including financial services and the public sector. Founded in 1993, Actuate
			is headquartered in San Mateo, California, with offices worldwide. Actuate is listed on
			NASDAQ under the symbol ACTU. For more information, visit the company's web site at
			<a href="http://www.actuate.com">www.actuate.com</a>.
		</p>
		<p>
 			<b>About Bredex</b><br>
			Since 1987, BREDEX GmbH has been providing high quality information technology services in
			the areas of consultancy, analysis and design, software development, quality assurance and
			training. Based in Braunschweig, the company has a history of long term customer satisfaction
			and a focus on forward thinking, developing individual solutions that bring future standards
			to current project needs.
			<br><br>
			BREDEX sells GUIdancer, which is a powerful and cost effective automatic test tool for Java
			and HTML applications.
			<br><br>
			For more information: <a href="http://www.bredexsw.com">www.bredexsw.com</a>.
		</p>
		<p>
			<b>About EclipseSource</b><br>
			EclipseSource is a leading provider for Eclipse services, solutions and technology.
			EclipseSource offerings enable organizations to successfully adopt and implement
			Eclipse-based systems. With leadership roles in more than ten key Eclipse projects - including
			Equinox, RAP, RCP and RT - EclipseSource delivers deep domain expertise across essential
			Eclipse technologies. For more information visit <a href="http://eclipsesource.com">http://eclipsesource.com</a>.
		</p>
		<p>
			<b>About SOPERA</b><br>
			SOPERA supports companies in realizing service-oriented architectures (SOA). SOPERA is based
			on the SOA platform of SOA pioneer Deutsche Post. Into SOPERA has gone the experience from
			over seven years of developing and operating the platform in a demanding enterprise
			environment. SOPERA is an open source, modular, standard-based SOA framework, supports
			best-of-breed concepts and covers the entire SOA lifecycle. Independent of Deutsche Post,
			SOPERA GmbH offers implementation, consulting and the entire support and service for the
			software. For more details please visit <a href="http://www.sopera.com">www.sopera.com</a>.
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
