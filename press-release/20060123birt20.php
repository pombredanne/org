<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "BIRT 2.0 Announcement";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Type your name here";
	
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
<h2 ALIGN="CENTER"><strong>Actuate, IBM, Pentaho, Scapa Technologies and Zend Commit to Eclipse BIRT 2.0</strong></h2>

<ul>
<li>Eclipse BIRT 2.0 Expected to Accelerate Business Intelligence and Reporting Adoption 
Among Java and PHP Developers</li>
</ul>

<p><strong>OTTAWA, CANADA – January 23, 2006 </strong>– The Eclipse Foundation, an open source community committed to the 
implementation of a universal development platform, today announced broad support from industry leaders for the 
new Eclipse Business Intelligence and Reporting Tools (BIRT) project version 2.0, released on January 20, 2006.  
Actuate, IBM, Pentaho, Scapa Technologies and Zend have announced support for BIRT 2.0 and/or plans to extend 
their Eclipse-based products with Eclipse BIRT 2.0 to meet their business intelligence and reporting needs.  
Eclipse BIRT 2.0 includes a new re-use library environment that is expected to expand the BIRT ecosystem through 
 creation of reporting component hubs developed by service providers, education providers, online portals, and 
 news forums, that will spring up around this vibrant platform.  </p>

<p>BIRT 2.0 adds large persistent reports with page-on-demand for end-users.  It also extends the web-style 
drag-and-drop report development paradigm with new analytical report types, expanded charting facilities, and 
debugging facilities for Java as well as JavaScript scripting.  Supporting companies anticipate that these 
improvements in functionality and usability will speed adoption among Java developers and expand BIRT’s usage into 
a broader community of report developers.</p>

<p>“The features in BIRT 2.0 will allow a new ecosystem to develop around Business Intelligence and Reporting,” 
said Mike Milinkovich, executive director of the Eclipse Foundation.  “The ability to add and extend reporting 
components will allow developers to easily create specialized and reusable components for report builders.  This 
should accelerate the number of commercial companies building Eclipse-based products, and the number of VARs 
developing Eclipse-based solutions.”</p>

<p>“Release 2.0 extends the reach of BIRT to many production web applications whose developers might not have 
previously considered open source reporting,” said Mark Coggins, senior VP of engineering at Actuate. “It provides 
a robust, thread-safe execution engine that can handle the data and user scale requirements of reporting in real 
world Java applications. In fact, our tests have shown that BIRT can handle reports of well over a million rows 
(about 20,000 pages) with linear response time and bounded memory usage.” </p>

<p>"The Eclipse Test & Performance Tools Platform (TPTP) Project will deliver extensions to use BIRT 2.0 in January
		to extend TPTP test and performance data reporting capabilities,” said Tyler Thessin, director of the 
		Intel Performance Libraries Lab and project lead of the Eclipse TPTP Project. “And future TPTP releases 
		will continue to grow a comprehensive set of BIRT-based reports.  Compelling features provided in BIRT 2.0 
		promise an excellent opportunity for rapid acceptance and align with TPTP expansion beyond Java, such as 
		delivering capabilities for testing and analyzing C/C++ applications." </p>

<p>"We’ve been following the BIRT project for months," said John Kellerman, manager of Eclipse strategy 
at IBM. "The release of BIRT 2.0 is a significant milestone for the project, both in terms of features and the 
		potential for increased adoption.  We are looking forward to participating in the BIRT project." </p>

<p>“We expect BIRT 2.0 to help drive adoption of our open source BI offering planned for 2006,” said Richard 
Daley, CEO of Pentaho.  “The usability improvements, including charting and scripting, should expand the user 
community to include report developers as well as Java developers.  The performance improvements, specifically 
for large reports in HTML and PDF formats, make the tool attractive to virtually any type of reporting 
application.”</p>

<p>“In the open source world, many would contend that the community behind a given project is at least as 
important as, if not more so, than the project's source code,” said Stephen O’Grady, vice president of RedMonk. 
		“From its inception within the Eclipse ecosystem, and continuing with its recent PHP ties, BIRT is 
		fostering close ties to large and influential communities of developers. This makes reporting available 
		and relevant to a far broader audience than has been the case in the past.” </p>

<p>"Scapa uses BIRT 1.0 APIs to programmatically generate reports on application testing and 
		performance,” said Mike Norman, CEO of Scapa Technologies. “With BIRT 2.0 and the community of BIRT 
		users, additional report components will become available that we can leverage. This will allow our 
		customers to create better reports on the performance of their mission-critical systems." </p>

<p>“We are excited to be a part of broadening PHP’s ecosystem with BIRT 2.0,” said Andi Gutmans, co-founder 
		and VP technology at Zend. “We believe that reporting in the PHP world has tremendous potential. The 
		enhancements in BIRT 2.0, particularly CSS support, make it an attractive tool for broad adoption by 
		the 2.5 million PHP developers.” </p>

<p><strong>New BIRT 2.0 Features</strong><br>
BIRT 2.0 includes a number of new capabilities designed to broaden the ecosystem and user community, improve 
		report designer usability, and enhance performance. Below are some of the key new features included 
		in the January 20, 2006 release of BIRT 2.0. 
<ul>	<br>		
<li>Re-Use Library – A report component environment allows developers with a range of expertise to share their 
		work within the organization and the open source community. Libraries contain report components or 
		functions for reuse in multiple report designs. </li>
<li>Page-on-Demand HTML- A page-on-demand navigation mechanism enables the efficient viewing of large report 
		documents over the internet.  Response time for end-users is optimized, ensuring that web applications 
		are built with acceptable performance.	</li>
<li>CSS Style Sheets – External style sheets can be used across multiple report designs, making it easy to 
		establish a common look across all reports in one application.  Users can quickly change the design of 
		many reports by editing a single style sheet. </li>
<li>Scripting Editor – BIRT supports the ability to code or script the behavior of reports using a perspective for 
		Java Code Editing for BIRT reports. </li>
<li>Large, Persistent Reports – Report developers can generate a report and then distribute a URL to end-users 
		who, with one click, can navigate through the pages in any order.  All this is done without return trips 
		to the database. </li>
<li>Improved Charting Facility, Scripting – BIRT 2.0 includes a wizard for building common usage charts and 
		advanced capabilities for including detailed charts within a report design.  </li>
</ul> </p>			
<p>A more detailed summary of what’s new in BIRT 2.0 is available at 
		<a href="http://www.eclipse.org/birt/index.php?page=project/notable2.0.html">www.eclipse.org/birt/</a></p>

<p><strong>About the Eclipse Foundation</strong><br>
Eclipse is an open source community whose projects are focused on providing an extensible development platform and 
application frameworks for building software. Eclipse provides extensible tools and frameworks that span the 
software development lifecycle, including support for modeling, language development environments for Java, C/C++ 
and others, testing and performance, business intelligence, rich client applications and embedded development. A 
large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions 
and individuals extend, complement and support the Eclipse Platform.</p>

<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full 
details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org.</a></p>
<br>

<strong>Press Contact</strong><br>	
Chantal Yang/Laura Ackerman<br>
Schwartz Communications<br>
781-684-0770<br>
eclipse@schwartz-pr.com <br>
<br>
</div>

	
	
</div>





		
<div id="rightcolumn">
	<div class="sideitem">
		<h6>Related Links</h6>
		<ul>
			<li><a href="http://www.eclipse.org/birt">BIRT Home page</a></li>
		</ul>	
	</div>
	
		
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php
/*
 * Created on 21-Jan-2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
