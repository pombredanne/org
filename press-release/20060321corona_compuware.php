<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Community Awards Announcement";
	$pageKeywords	= "Eclipse Foundation, community, awards, winners, 2006, press, release";
	$pageAuthor		= "Nathan Gervais";
	
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
		<h2 ALIGN="CENTER"><strong>Compuware and the Eclipse Foundation Announce the Tools Services Framework (Corona) Project</strong></h2>
		<ul>
			<li>Corona to Enable Integration and Interoperability for all Eclipse-based IT Development Teams </li>
		</ul>
		<p><strong>ECLIPSECON 2006, SANTA CLARA, Calif., March 21, 2006</strong> - Compuware Corporation (NASDAQ: CPWR) and the Eclipse Foundation today announced the creation of the Tools Services Framework (Corona) Project, to be led by Compuware. The creation of Project Corona comes less than six months after Compuware officially joined the Eclipse Foundation as a Strategic Member.</p>
		<p>Stated Carl Zetie, Vice President for Forrester Research, in the October 2005 Forrester report titled The Eclipse Tools Market Enters The Next Phase: “Eclipse challenges traditional models of megalithic enterprise development tools, allowing users to adopt more granular tools better aligned to their needs--and this agility is seen by adopters as one of the key advantages of Eclipse.” </p>
		<p>Corona is a server-side framework that enables Eclipse-based tools to collaborate, sharing information about projects, applications and events. Project Corona--or the Tools Services Framework Project, as it is officially called--has been reviewed by the Eclipse Technology Project Management Committee (PMC) and officially accepted for project creation. </p>
		<p>“Application Lifecycle Management is the next logical step in Eclipse’s evolution,” said Mike Milinkovich, Executive Director of the Eclipse Foundation. “Corona supports Eclipse on the delivery of that vision, and we are extremely pleased to have Compuware, a leader in the ALM space, propose and now lead this project.”</p>
		<p>Named after a solar eclipse’s outer ring that shines brightly and enables molecules to join together to form new substances, Project Corona provides Eclipse developers with a wider selection of plug-ins to more quickly diagnose and resolve application problems. Compuware will demonstrate Corona’s capabilities at EclipseCon 2006 at the Santa Clara Convention Center, March 20-23, 2006.</p>
		<p>“Compuware is an enterprise vendor providing deep value anywhere an application resides,” said Paul Czarnik, Vice President for Compuware. “We are fully committed to Eclipse and the open source community and are demonstrating that commitment in ways that provide real IT value to business.”</p>
 		<p><strong>Compuware Corporation</strong><br />
		Compuware Corporation (NASDAQ: CPWR) maximizes the value IT brings to the business by helping CIOs more effectively manage the business of IT. Compuware solutions accelerate the development, improve the quality and enhance the performance of critical business systems while enabling CIOs to align and govern the entire IT portfolio, increasing efficiency, cost control and employee productivity throughout the IT organization. Founded in 1973, Compuware serves the world's leading IT organizations, including more than 90 percent of the Fortune 100 companies. Learn more about Compuware at <a href="http://www.compuware.com/">http://www.compuware.com/</a>.</p>
					
		<p><strong>About the Eclipse Foundation</strong><br />
			Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.
			<br /><br />
			The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org.">www.eclipse.org</a>
		
		
		<center># # #</center> 
		<p><strong>For Sales or Marketing Information</strong><br />
		Compuware Corporation, One Campus Martius, Detroit, MI, 48226, 800-521-9353, <a href="http://www.compuware.com">http://www.compuware.com</a><br /><br />
		<strong>Press Contact</strong><br />
		Doug Anter, Compuware Corporation, 313-227-0127, <a href="mailto:doug.anter@compuware.com">doug.anter@compuware.com</a><br />
		Compuware is a registered trademark of Compuware Corporation. All other product and company names are trademarks or registered trademarks of their respective owners.<br />
 		<br />
		</p>
							
	</div>


		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

