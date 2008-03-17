<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Announces EclipseLink Project to Deliver JPA 2.0 Reference Implementation";
$pageKeywords	= "eclipse, eclipselink, press, release";
$pageAuthor		= "Ian Skerrett";

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
		
		<center>
		<h1>$pageTitle</h1>
		</center>
		<p><i>Open Source Persistence Framework Builds on Contribution from Oracle </i></p>
		<p><strong>EclipseCon 2008, SANTA CLARA, CA &#150; March 17, 2008 &#150; </strong>
		The Eclipse Foundation today announced that Sun, the lead for the Java(TM) Persistence API (JPA) 2.0, JSR 317 standard has selected the EclipseLink project as the reference implementation. The Eclipse Persistence Services Project (EclipseLink), led by Oracle, delivers an open source runtime framework supporting key persistence standards. The EclipseLink project provides a rich set of services that address complex mapping, performance and scalability and advanced functionality required for enterprise Java applications. </p>
		
		<p>JSR 317, the Java Persistence API, is the Java API for the management of persistence and object/relational mapping for Java Platform, Enterprise Edition (Java EE) and Java Platform, Standard Edition environments. As the reference implementation, EclipseLink will provide a proven, commercial quality persistence solution that can be used in both Java SE and Java EE applications.</p>
		
		<p>"Using EclipseLink as the reference implementation of JSR 317 is another great example of the JCP and Eclipse communities working together to streamline the development of Java software applications," said Mike Milinkovich, executive director of the Eclipse Foundation. "Open collaboration such as this helps drive the wide adoption of technology." 
		</p>
		
		<p>To provide an extensible framework that enables Java software developers to interact with relational databases, XML, and Enterprise Information Systems (EIS) in an efficient and productive manner, the EclipseLink project will deliver persistence services that focus on performance, productivity, and flexibility. The EclipseLink project was initiated with Oracle's contribution of the full source code and test suite for Oracle® TopLink. The project builds on the success of TopLink Essentials which is featured in Sun Microsystems' GlassFish(TM) Open Source Application Server, the JPA 1.0 reference implementation, which was also based on Oracle TopLink.
		</p>
		
		<p>"The decision to use EclipseLink within GlassFish V3, Sun's open source reference implementation of the Java EE 6 standard, is in direct response to the requests for advanced features we have received from our user community and exemplifies the innovation and success of the open source initiatives at Sun. Seeing yet another community help advance a JCP standard demonstrates the strong adoption of Java technology and the JCP. We are enthusiastic with this opportunity to work with Oracle and the Eclipse Foundation," Said Karen Tegan Padir, vice president of Infrastructure Software, Sun. "The GlassFish community continues to grow and demand enterprise-class solutions. Our association with EclipseLink is an example of multiple communities and partners working together to deliver on the Java software community's requests."</p>
		
		<p>"As the EclipseLink project lead, providing the reference implementation for JPA 2.0 complements Oracle's ongoing commitment to provide flexibility and choice to the Java software and open source developer communities," said Dennis Leung, vice president of Engineering, Oracle. "Leveraging over a decade of commercial usage, the EclipseLink project provides a comprehensive open source solution focused on standards and the advanced features required by the next generation of enterprise Java software applications."</p>
		
		<p>More details about the EclipseLink project and JSR 317 can be found at: <a href="http://www.eclipse.org/eclipselink/">http://www.eclipse.org/eclipselink/</a>  <a href="http://jcp.org/en/jsr/detail?id=317">http://jcp.org/en/jsr/detail?id=317</a></p>
		
		<p><b>About the Eclipse Foundation</b><br>
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application
		frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development
		lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and
		performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major
		technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support
		the Eclipse Platform.</p>
		
		<p>All company/product names and service marks may be trademarks or registered trademarks of their respective companies. <br/><br/>
		Sun, the Sun logo, Sun Microsystems, Java, JCP, GlassFish and The Network Is The Computer are trademarks or registered trademarks of Sun Microsystems, Inc. in the United States and other countries.<br/><br/>
		Oracle is a registered trademark of Oracle Corporation and/or its affiliates.</p>
		
		
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
		Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org" target="blank">www.eclipse.org</a>.</p>
		

	</div>

</div>



		

EOHTML;

	$html = mb_convert_encoding($html, "HTML-ENTITIES", "auto");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

