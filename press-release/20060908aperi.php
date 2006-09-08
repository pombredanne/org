<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Approves APERI Storage Management Project";
	$pageKeywords	= "Eclipse Foundation, community, rcp, press release";
	$pageAuthor		= "Ian Skerrett";
	
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
		<h2 ALIGN="CENTER"><strong>ECLIPSE FOUNDATION APPROVES APERI STORAGE MANAGEMENT PROJECT</strong></h2>
		
		<p><strong>OTTAWA, CANADA - September 7, 2006</strong> -The Eclipse Foundation, an open source community committed to the implementation of a universal development platform, today announced that it has approved the creation of the Aperi Storage Management Framework Project. The Aperi Project, which was proposed in June 2006, will give customers more choices for deploying open-storage infrastructure software - based on an industry-stand ard framework developed by the open source community. </p>
		
		<p>Aperi is a community of 10 leading storage industry vendors - Brocade Communication Systems, Cisco Systems, CA, Emulex, Fujitsu Limited, IBM, LSI Logic, McDATA, Network Appliance and Novell - that are working together to build and evolve a common, open platform for managing all brands of storage systems. This will give organizations greater flexibility in the way they manage their storage environments and improve their access to stored information regardless of what storage hardware or software they are using.  </p>
		
		<p>"The Aperi Project will simplify the management of storage environments and increase interoperability through a standards-based, open source software framework," said Mike Milinkovich, executive director of the Eclipse Foundation. "The Eclipse community will benefit from access to the vision, innovation and collaboration provided by the Aperi storage management platform."</p>

		<p>Aperi members are collaborating with the Storage Networking Industry Association (SNIA) to drive existing standards and develop new ones while carrying out open source software development under Eclipse. The Aperi framework will comply with the Storage Management Initiative Specification (SMI-S) so that vendors that have invested resources in creating SMI-S compliant storage offerings will see their investments increase further with the Aperi framework.  By providing a tested implementation of SMI-S, which standardizes storage management technologies for storage hardware interfaces, Aperi will drive greater industry support and wider adoption of SMI-S. </p>

		<p>"One of the SNIA's goals is to define and promote the adoption of storage industry standards, such as the widely implemented Storage Management Initiative Specification," states Wayne M. Adams, chair, SNIA Board of Directors. "Eclipse's Aperi Project will further advance the adoption of SNIA's SMI-S, benefiting the entire storage industry and IT community. Furthermore, the SNIA and Aperi will define plans to collaborate on new storage standards, standards testing programs and storage interoperability programs." </p>
		
		<p>Eclipse provides a universal development platform, component model and extensibility framework for tools integration. The Aperi project will create an open source framework that provides standards-based storage management software, making it easier for customers to choose from a greater range of storage products and eliminate the need to "rip and replace" existing solutions. It also lowers the total cost of managing storage technology and reduces training requirements for storage operations teams. Developers will be able to access code and immediately begin collaborating with thousands of other developers worldwide who are using, refining and adopting the Aperi framework.</p>
		
		<p>Aperi members have collaborated on the definition and creation of this project and are now beginning its implementation. As the Aperi project matures, other parties are encouraged to participate as committers, users and developers to assist in the architecture, planning, requirements and testing of the open source storage management framework.   </p>
		
		<p>For more information on the Eclipse Aperi project, please visit: <a href="http://www.eclipse.org/aperi">http://www.eclipse.org/aperi</a>.</p>
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		John Moran or Laura Ackerman<br>
		Schwartz Communications<br>
		781-684-0770<br>
		eclipse@schwartz-pr.com <br>
		<br>
		<br>

		</p>
							
	</div>

		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

