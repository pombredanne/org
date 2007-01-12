<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Joins Three Industry Specification Groups";
	$pageKeywords	= "Eclipse, Industry, Specifications";
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
		<h2>Press Release</h2>
		<h1>$pageTitle</h1>
		<p><i>Membership in the Java Community Process, Object Management Group and OSGi Alliance Designed to Promote Industry Standards and Open Source Implementations </i></p>
		<p><strong>OTTAWA - January 12, 2007 - </strong>The Eclipse Foundation, an open source community committed to the implementation of a universal software development platform, today announced it has become a member of three industry specification groups: Java Community Process (JCP), Object Management Group (OMG) and the OSGi Alliance. The Eclipse Foundation has joined these organizations to further promote the relationship between open standards and open source implementations. 
		</p>
		<p>"Participating more fully in industry organizations is a sign of Eclipse's growing role and maturity in the software marketplace" said Mike Milinkovich, executive director of the Eclipse Foundation. "We're happy to support these community organizations as members. This complements our long standing policy of implementing based on standards wherever possible."</p>
		
		<p>Eclipse open source projects are providing open source implementations of the standards set by these different organizations. For example, the Eclipse Web Tools Project (WTP) provides implementations of the JCP JSR 244 (JEE 5), JSR 220 (EJB3), JSR 127 (JSF) and others; the Eclipse Equinox project is an implementation of the OSGi v4 specification; and the Eclipse Modeling Project provides implementations for OMG’s UML2, OCL and other specifications.</p>

		<p>"I’m pleased to welcome Eclipse to the JCP,” said Onno Kluyt, chair of the JCP and director of the JCP Program at Sun Microsystems. "Eclipse will find many other open source software organizations and projects represented in the JCP Membership, such as the Apache Software Foundation, MySQL, JBoss, and the OpenJDK, Glassfish and Mobile & Embedded communities. Eclipse brings its expertise to the fold to benefit standards, community and developers. Many of the Eclipse projects already implement standards developed through the JCP and the move to formally join the community is an indication that an even greater involvement with Java standards development and implementation is to be expected. This is great news for the Eclipse platform and for Java technology and developers.”</p>
	
		<p>"The Object Management Group (OMG) and the Eclipse Foundation have had a very close relationship since Eclipse was founded, when I was honored to serve on the original Board of Stewards that kicked off the project," said Dr. Richard Soley, chairman and CEO, OMG. "More importantly, the synergies between the organizations continue to grow, especially in the modeling areas.  OMG's open standards and Eclipse's open source development together provide an unbeatable combination to users and vendors -- solid, dependable standards, and solid, dependable implementations.  We're delighted to focus this relationship further with this announcement."</p>

		<p>"We take pleasure in welcoming the Eclipse Foundation as an Adopter Associate member of the Alliance," said Stan Moyer, president of the OSGi Alliance and executive director in the Applied Research area of Telcordia Technologies. “Over the years OSGi technology and Eclipse solutions have increasingly addressed similar market needs and now Eclipse utilizes OSGi technology in their base platform. We look forward to engaging even more with the developers and leaders in the Eclipse community to provide platforms, frameworks, and solutions relevant to the open source environment"</p>
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		
		<p><center><i>All company/product names and service marks may be trademarks or registered trademarks of their respective companies.</i></center></p>
		
		<br /><br /><strong>Press Contact</strong><br>	
		John Moran or Lori Kroll<br/>
		Schwartz Communications<br/>
		781-684-0770<br/>
		eclipse@schwartz-pr.com <br/>
		<br />
		
		<center># # #</center> 
		<br />
		<br>
			<br>
	</div>

</div>


		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

