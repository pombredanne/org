<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Web Tools Platform 1.0";
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
<h2 ALIGN="CENTER"><strong>Eclipse Foundation Announces Web Tools Platform 1.0</strong></h2>

<ul>
<li>Eclipse WTP Project ships platform API for independent extension
</ul>

<p><strong>OTTAWA, December 19, 2005 </strong>— The Eclipse Foundation, an open source community committed to 
implementation of a universal development platform, will make the Eclipse Web  Tools Platform (WTP) 1.0 release 
generally available the week of Dec 19th, 2005.  Eclipse WTP  1.0 is an extensible, standards-based tool platform 
for developing J2EE and Web applications. WTP has already been adopted by the leading J2EE suppliers, including BEA, 
Borland, IBM, JBoss and ObjectWeb. This full version release solidifies the platform API for 3rd party extension, 
and accompanying major documentation improvements make WTP ready for the next-level of vendor adoption.  </p>

<p>“This release really starts to deliver on the vision of the Web Tools Platform,” said Mike Milinkovich, 
 director of the Eclipse Foundation. “Providing a strong platform for companies to leverage when building Web and 
 J2EE tools is a critical component of Eclipse’s strategy for providing a universal development platform for tools 
 integration.”</p>

<p>“The new features of WTP 1.0 are designed to create a more vendor ready platform for Web and J2EE development,” 
said Tim Wagner, the PMC Lead of the Web Tools Project from BEA Systems.  “Working together with the diverse 
member companies in the project and the community has helped immensely to produce these platform APIs, which can 
help to better enable other commercial vendors to leverage WTP tools for their products.”</p>

<p>This release focuses on two of the three major goals outlined in the WTP roadmap: defining the WTP API, and 
keeping current with the underlying Eclipse platform.  Future releases will focus more on the third roadmap goal 
of currency with Web and J2EE standards like Java 5.0 and WSDL 2.0.  Building atop the Eclipse 3.1.1 maintenance 
release, WTP 1.0 upgrades the original 0.7 release to a state that is suitable for adoption by tool vendors and 
debuts several new features:  
<ul>
<li>	Promote selected provisional APIs to platform status based on vendor requirements; 
<li>	Componentize WTP into features to enable adopters to select subsets of functionality appropriate to their requirements;
<li>	Enhance and extend the wide array of out-of-the-box developer tools introduced in the 0.7 release;  
<li>	“Future-proof” WTP by aligning its project model with Eclipse platform changes planned for version 3.2 (the “Callisto” release);
<li>	Major document and help system contributions from IBM that include both end-user and adopter documentation; and
<li>	Fix important bugs, with an emphasis on stability, adoption issues, performance and scalability. 
</ul>
</p>

<p>Inclusion of feedback from the community will ultimately help address the challenge of producing the right 
platform APIs for a demanding vendor community; input from many sources is not only welcome but necessary.  
The project already has attracted the active participation of major vendors like BEA, who leads the project, 
ObjectWeb and IBM who helped initiate the project, JBoss and Oracle.  The adoption and use of WTP 1.0 in commercial 
products like BEA Workshop™ and IBM Rational® Application Developer for WebSphere® Software can help to accelerate 
the adoption curve by other vendors, as improvements derived from their usage can help to lower the risk for other 
vendors wishing to leverage WTP technology.  Downloads are available now at the project website, located at 
<a href="http://download.eclipse.org/webtools/downloads">http://download.eclipse.org/webtools/downloads</a> 
</p>

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
	

</div>
	
	
</div>

<div id="rightcolumn">
	<div class="sideitem">
		<h6>Related Links</h6>
		<ul>
			<li><a href="http://www.eclipse.org/webtools/">Web Tools Platform Project</a></li>
		</ul>	
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
