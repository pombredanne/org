<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Member Companies Showcase Business Solutions in the Open Source Park at CeBIT 2012";
	$pageKeywords	= "eclipse, Member Companies, Open Source Park, CeBIT 2012, BIRT, BREDEX, CeBIT EclipseSource, itemis, Microsoft, KINECT to Eclipse, Tasktop Sync, Eclipse Mylyn project  ";
	$pageAuthor		= "Christopher Guindon";
	
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
		.center{text-align:center;}
	</style>
	
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		

<p>Eclipse  ecosystem members co-operate to present open source for business at  CeBIT.</p>

<p>29  February 2012 - The Eclipse Foundation announced today that it will  be at CeBIT 2012 in Hannover, Germany, with six co-operating Eclipse  ecosystem members and a redesigned Eclipse Theme Island. In its 3rd  year at CeBIT, the Eclipse Foundation Island provides a unique  opportunity to learn about Eclipse open source software and the  businesses, institutions and individual developers that make up the  community.</p>

<p>&ldquo;Having  been a platform for innovation in software for ten years, Eclipse  technology has also become instrumental for businesses in managing  their software and development processes,&quot; said Ralph Mueller,  Director of European Ecosystem, Eclipse Foundation . &ldquo;In addition  to introducing companies participating in projects as diverse as  Jubula testing, BIRT business reporting, Eclipse modeling, Mylyn and  Eclipse and OSGi, we&rsquo;ll show how the Eclipse Foundation is bringing  the advantages of open source collaboration to software consuming  businesses in areas such as Automotive and Aerospace.&rdquo;</p>

<p>The  Eclipse Island at CeBIT will demonstrate a cross-section of the tools  and frameworks that together with this governance and ecosystem  model, makes Eclipse a solution for the full application lifecycle. </p>

<ul>
  <li>Actuate  	is showcasing the popular open source Business Intelligence and  	information application development technology, BIRT (Business  	Intelligence Reporting Tools). Visitors will be given an insight  	into BIRT's extensive capabilities and ActuateOne&rsquo;s value added  	functionality for BIRT including enhanced end user functionality and  	 a choice of deployment options incorporating on-premise, cloud and  	mobile BIRT applications. Live BIRT based demonstrations include end  	user interactivity, data analytics and dashboarding.</li>

  <li>BREDEX  	GmbH is a strategic member of the Eclipse Foundation and has over 20  	years experience in software development, consulting and testing.  	BREDEX is the organization behind the Eclipse Jubula Project for  	automated functional testing and will be talking about their journey  	to open source in the Open Source forum.</li>

  <li>At  	CeBIT EclipseSource will demonstrate its products and services  	designed to jumpstart organizations adopting the Eclipse Runtime and  	Eclipse modeling tools. The company will show the Yoxos 5 product  	for managing enterprise deployment of Eclipse based tools and the  	recently previewed multi-platform mobile extensions to the Eclipse  	Rich Ajax Platform. </li>

  <li>itemis  	offers services and products for model-driven Software- &amp;  	Systems Engineering. At CeBIT, itemis will be presenting their  	YAKINDU-tools for high quality software development. Amongst others  	YAKINDU contains solutions for the Management, Engineering and  	Traceability of Requirements as well as customizable and integrated  	development environments.</li>

  <li>Microsoft  	and EclipseSource show true interoperability with the demo, 'KINECT  	to Eclipse'. EclipseSource has connected the Kinect controller from  	Microsoft with the Eclipse IDE. This means you can control your IDE  	using gestures and voice. Microsoft and EclipseSource will give live  	demo&rsquo;s and introduce an extensible Eclipse framework  for the  	KINECT.</li>

  <li>Built  	on the Eclipse Mylyn project, Tasktop Sync provides organizations  	with heterogeneous software development and delivery stacks with the  	visibility and traceability needed in this world where software is  	increasingly becoming a differentiator and Tasktop Dev provides  	developers with order of magnitude productivity gains. Visit Tasktop  	Technologies to view a live demo and to learn more about the  	transformational effect Tasktop can have on software delivery  	organizations. </li>
</ul>
<p>Visit  the Eclipse Foundation at CeBIT 2012 in Hall 2, Block  D58, Stand 170. </p>

<p class="center">- 30 -</p>

<p><strong>About  the Eclipse Foundation<br>
</strong>Eclipse  is an open source community, whose projects are focused on building  an open development platform comprised of extensible frameworks,  tools and runtimes for building, deploying and managing software  across the lifecycle. A large, vibrant ecosystem of major technology  vendors, innovative start-ups, universities and research institutions  and individuals extend, complement and support the Eclipse Platform.</p>
<p>The  Eclipse Foundation is a not-for-profit, member supported corporation  that hosts the Eclipse projects. Full details of Eclipse and the  Eclipse Foundation are available at <a href="http://www.eclipse.org/">www.eclipse.org</a>.</p>

<p><strong>About  Actuate<br>
</strong>Actuate  founded and co-leads the Eclipse BIRT open source project.  ActuateOne&#8482; is a unified suite of products for rapidly developing  and deploying BIRT-based custom Business Intelligence applications  and information applications. Applications built with ActuateOne  provide one user experience regardless of task or skill level; are  supported by one server for any deployment including cloud and are  built with one BIRT design that can access and integrate any data  source - including high volume print streams. ActuateOne adds rich  data visualisations, including interactivity, dashboards, analytics,  scorecards and deployment options to web and mobile BIRT  applications, helping organizations drive revenue through higher  customer satisfaction and improved operational performance.</p>
<p>Actuate  has over 5,000 customers globally in a diverse range of business  areas including financial services and the public sector. Founded in  1993, Actuate is headquartered in San Mateo, California, with offices  worldwide. Actuate is listed on NASDAQ under the symbol BIRT. For  more information, visit the company's web site at <a href="http://www.actuate.com/" target="_blank">www.actuate.com</a> or visit the BIRT community at <a href="http://www.birt-exchange.com/" target="_blank">www.birt-exchange.com</a>.</p>

<p><strong>About  Bredex GmbH<br>
</strong>Since  1987, BREDEX GmbH has been providing high quality information  technology services in the areas of consultancy, analysis and design,  software development, quality assurance and training. Based in  Braunschweig, the company has a history of long term customer  satisfaction and a focus on forward thinking, developing individual  solutions that bring future standards to current project needs.</p>
<p>BREDEX  is a strategic member of the Eclipse Foundation and is the company  behind the Eclipse Jubula Project, a powerful and cost effective  automatic test tool for Java and HTML applications. BREDEX also  develops GUIdancer, a tool based on Jubula with added value and  comfort for testers and test managers.  For more information: <a href="http://www.bredexsw.com/" target="_blank">www.bredexsw.com</a>.</p>

<p><strong>About  EclipseSource Incorporated<br>
</strong>EclipseSource  brings together recognized experts from key Eclipse projects and  delivers the ability to meet the demanding technical requirements of  commercial adopters. EclipseSource provides a complete range of  products and services from fundamental technology development,  production and developer support, training and mentoring to  commercial management and provisioning solutions.</p>
<p>With  leadership roles in several Eclipse projects, EclipseSource provides  coverage for key Eclipse technologies including RCP, Equinox OSGi,  Modeling and Provisioning. EclipseSource has developed Yoxos 5, an  Eclipse distribution and management solution and has recently  released a multi-platform OSGi-based framework for bringing  server-based applications to the desktop, web, mobile web and native  mobile devices.  The organization has staff in North America and  Europe and a truly global customer base ranging from Fortune 100  corporations to individual developers. More information is available  on <a href="http://eclipsesource.com" target="_blank">www.eclipsesource.com</a>.</p>

<p><strong>About  itemis<br>
</strong>itemis  AG, having its headquarters in L&#252;nen, is an independent  IT-consulting company. The company  was founded in 2003 and by now employs 160 associates at several  sites in Germany  as well as in France, Canada and Switzerland.</p>
<p>itemis  AG is a branch neutral technology leader in the field of automatized  software  development. It offers software development tools and  services for the markets of business applications, applications for  mobile devices and embedded systems. Research and training are  additional specialties.</p>


<p>itemis  is one of the strategic Eclipse members located in Germany. Wolfgang  Neuhaus, founder of itemis AG and Ed Merks, Eclipse Modeling Project  Lead, are members of the board of the &#187;Eclipse-Foundation&#171;. Further  information about the company and the YAKINDU products can be found  at <a href="http://www.itemis.de/" target="_blank">www.itemis.de</a> as well as <a href="http://www.yakindu.de/" target="_blank">www.yakindu.de</a>.</p>



<p><strong>About  Tasktop Technologies<br>
</strong>Tasktop  Technologies aims to transform the productivity of software delivery  by unifying Application Lifecycle Management (ALM) and empowering  developers with task-focused tools.</p>
<p>Tasktop  invented the task-focused interface and created the popular Eclipse  Mylyn project, which transformed the developer&rsquo;s IDE experience to  center around ALM tool-based collaboration. Building on top of Mylyn,  Tasktop has been unifying the ALM landscape with its broad ecosystem  of ALM partnerships that connect disparate tools from leading Agile,  enterprise ALM and open source offerings. Tasktop&rsquo;s Task  Federation&#8482; technology builds on this ecosystem to unify  heterogeneous ALM stacks by allowing developers, testers and managers  to work within their best-of-breed tools of choice, while  automatically maintaining traceability and visibility across ALM  artifacts. The company&rsquo;s Tasktop Sync provides the only real-time  bidirectional and fully automated synchronization between ALM  servers. Tasktop Dev is the developer-centric ALM interface for the  Eclipse and Visual Studio IDEs, making it dramatically easier for  developers to work and collaborate, while keeping ALM tools  up-to-date with development activity. For more information visit  <a href="http://www.tasktop.com" target="_blank">www.tasktop.com</a>.</p>

	
		
		
	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.actuate.com/" target="_blank">Actuate</a></li>
				<li><a href="http://www.birt-exchange.com/" target="_blank">BIRT</a></li>
				<li> <a href="http://www.bredexsw.com/" target="_blank">BREDEX GmbH</a></li>
				<li><a href="http://eclipsesource.com" target="_blank">EclipseSource</a></li>
				<li><a href="http://www.itemis.de/" target="_blank">itemis</a></li>
				<!-- <li><a href="http://www.yakindu.de/" target="_blank">www.yakindu.de</a></li> -->
				<li><a href="http://www.tasktop.com" target="_blank">Tasktop Technologies</a></li>
			</ul>
		</div>
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
