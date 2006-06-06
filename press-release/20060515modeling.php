<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "New Top-Level Modeling Project";
	$pageKeywords	= "Eclipse Foundation, community, rcp, press release, eclipsecon";
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
		<h2 ALIGN="CENTER"><strong>New Top-Level Eclipse Project Encourages Adoption of Open Standards for Model-Based Development</strong></h2>
		<ul> 
		<li>Borland and IBM Team to Drive Industry Support for Eclipse Modeling Project</li>
		</ul>
		<p><strong>JAVAONE (BOOTH 1138), SAN FRANCISCO, Calif., May 15, 2006</strong> � The Eclipse Foundation today 
		announced the creation of a new top-level project, called the Eclipse Modeling Project. The new project will 
		focus on the evolution and promotion of model-based development technologies within the Eclipse community. 
		Richard Gronback of Borland Software and Ed Merks of IBM were selected as project co-leaders, and are 
		teaming to continue to advance Eclipse modeling technologies and to drive adoption of open standards related 
		to software modeling.</p>
		<p>A number of industry-leading organizations have committed to the project and are already using 
		Eclipse-based modeling frameworks in their products, including Borland, Compuware, IBM, ILOG, Omondo and 
		Oracle.</p>
		<p>The goal of the top-level Eclipse Modeling Project is to unite several existing projects relating to 
		modeling under one umbrella for the purposes of fostering collaboration, unifying direction and improving 
		interoperability. Current projects include, but are not limited to:
		<ul>
			<li>Eclipse Modeling Framework (EMF) � Already widely adopted, EMF is a modeling framework and code generation facility for building tools and other applications based on a structured data model.
			<li>Graphical Modeling Framework (GMF) � GMF provides the fundamental infrastructure and components for developing visual design and modeling surfaces in Eclipse. 
			<li>Unified Modeling Language 2.0 (UML2) � Based on the Object Management Group (OMG) specification, Eclipse UML2 is an EMF-based implementation of the UML 2.x metamodel for the Eclipse platform.
			<li>Generative Modeling Tools (GMT) � GMT aims to produce a set of research tools in the area of model-driven software development.
		</ul>
		</p>
		<p>�The Eclipse Modeling Project will promote wider adoption of the Eclipse-based modeling frameworks by 
		organizations focused on model-based development,� said Mike Milinkovich, executive director, Eclipse 
		Foundation. �It will also encourage closer relationships with standards organizations, such as OMG, by 
		providing open source implementations of important modeling standards.� </p>
		<p>�Borland is very excited to be co-leading the Eclipse Modeling Project and broadening our involvement in 
		the community for the ultimate benefit of our customers,� said Richard Gronback, Eclipse Modeling project 
		co-leader and chief scientist, Borland Software Corporation. �Our participation in the project, and further 
		use of Eclipse modeling technologies as the basis for our commercial products, will give customers a greater 
		degree of interoperability and standards compliance, as well as help Borland focus on providing the 
		next-generation of modeling products.�  </p>
		<p>�IBM has a long heritage of support for modeling and model-driven development (MDD). We see model-driven 
		development technology used in many areas across IBM products and services, including Rational Software 
		Architect, Systems Developer and Software Modeler,� said John Kellerman, manager, Eclipse Strategy, IBM. 
		�The Eclipse top-level modeling project will provide a unified vision and focus to modeling and MDD efforts 
		at Eclipse, spur innovation and help drive adoption of open standards and technologies in this domain. 
		Through IBM�s use of these technologies, we�re able to provide tighter integration across our commercial 
		offerings, more robust sharing of development time information and a better overall user experience for 
		our customers.�  </p>

		<strong>Open Support for Driving Industry Standards</strong><br>
		<p>The success of Eclipse and its popularity throughout the IT industry has helped drive the adoption of 
		open standards. Furthermore, as standards bodies such as OMG continue to focus on modeling specifications, 
		the Eclipse Modeling Project will strive to facilitate communication and stronger working relationships 
		with standards organizations. Currently, the Eclipse Modeling Project supports or anticipates supporting in 
		the future standards that include the Unified Modeling Language (UML) Model-Driven Architecture (MDA) 
		related specifications, such as Query, View, Transformation (QVT); Object Constraint Language (OCL); MOF to 
		Text (MOF2Text); and XML Metadata Interchange (XMI).</p>
		<p>�The Object Management Group has been involved with and seen the benefits of the Eclipse Project from 
		the beginning. There is a strong positive relationship between the standards we produce and the open-source 
		community�s development efforts. In fact, acceptance and use of Model-Driven Architecture, our flagship 
		standard, has been spurred on by contributions of the open source community,� said Dr. Richard Soley, 
		chairman and CEO at OMG. �We are delighted to see these important specifications moving from written 
		standards to open source implementations, providing real solutions to real, complex problems that exist 
		today.�</p>

		<strong>Industry Supports New Modeling Framework Top-Level Project</strong>
		<p>�Compuware, a strategic member of the Eclipse Foundation and leader within the OMG, is excited that 
		modeling is being given the prominence of a top-level Eclipse project,� said Paul Czarnik, vice president 
		of Architecture, Compuware. �Modeling helps Compuware customers reduce the time and cost to deliver 
		enterprise applications, and we plan to be a contributor to and adopter of modeling within Eclipse.�</p>
		<p>�ILOG is committed to the new Eclipse Modeling Project, since we believe it will mean a more seamless 
		connection between our ILOG JRules 6 Business Rule Management System (BRMS) and other complementary 
		products, resulting in higher productivity for our customers,� said Joel Cheuoua, BRMS Architect. �In our 
		latest release, we�re using EMF in both our Eclipse-based and our Web-based tools and repositories to 
		define how rule model artifacts are managed. We find it to be an ideal way to handle the extensibility and 
		the persistence required for our data.�</p>
 
		<p>�The Eclipse Modeling Project means that developers will now have more options when choosing a modeling 
		methodology to simplify and streamline their development efforts,� said Dennis Leung, vice president, 
		Oracle Fusion Middleware Development at Oracle. �Oracle is already working with its partners and customers 
		to deliver TopLink support for persisting EMF models into a relational database. This project will help 
		ensure TopLink interoperability with other modeling technologies.�</p>


		<p>More information about the Eclipse Modeling Project can be found at <a href="http://www.eclipse.org/modeling">www.eclipse.org/modeling</a>.</p> 

		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		Chantal Yang/Laura Ackerman<br>
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

