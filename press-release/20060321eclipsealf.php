<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Community Awards Announcement";
	$pageKeywords	= "Eclipse Foundation, community, rcp, press release, eclipsecon";
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
		<h2 ALIGN="CENTER"><strong>Eclipse Foundation announces expanded support for Eclipse Integration Platform</strong></h2>
		<ul>
			<li>Industry Collaboration Solves Critical Consumer Issue; Eclipse Application Lifecycle Framework Project Support Grows to Over 30 Companies</li>
			<li>Proof of Concept Code to Demo at EclipseCon</li>
			</li>
		</ul>
		<p><strong>ECLIPSECON 2006, SANTA CLARA, Calif., March 21, 2006</strong> — Eclipse Foundation announced today new partnerships that strengthen the Eclipse Application Lifecycle Framework (ALF) Project and has made available for download of the new proof of concept code which will demo at EclipseCon 2006.  The ALF Project, initiated by Serena Software in the spring of 2005, addresses the universal problem of integrating Application Lifecycle Management (ALM) technologies so that they provide full interoperability.  Currently more than thirty vendors have pledged support for the ALF project and momentum continues.  Recent additions to the list of those committing resources include AccuRev, PlanView and Viewtier.</p> 
		<p>ALF is an extension of the popular Eclipse development platform and uses an open source framework that allows vendors to tightly integrate entire ALM suites or individual ALM products, making it easier for developers to manage application changes across the lifecycle.</p> 
		<p>“Serena is the lead vendor behind the Eclipse ALF project, which aims to provide an open life-cycle tool integration framework based on Web services,” states Carey Schwaber of Forrester Research. (Carey Schwaber, with Laurie M. Orlov, Carl Zetie and Kimberly Q. Dowling, “Process-Centric Software Configuration Management Scorecard Summary: Serena Software,” Forrester Research, November 14, 2005)</p>
		<p>The four primary objectives of the ALF project are to provide an SOA-based cross-tool communication infrastructure for ALM solutions, leverage Eclipse, open source components, and industry standards; develop common and extensible domain-specific vocabularies for improved interoperability; and provide conformance rules for varying levels of participation through a layered Web services extensibility API.  ALF marks the beginning of a liberating shift in how organizations can effectively manage change at the most basic level within the IT environment and by freeing developers from one of their most common pain points; broken development tool integration.</p>
		<p>The project has since attracted a growing ecosystem of technology vendors and ALM users that have collaborated on its definition, planning and implementation.  “Agreeing on a standard integration framework for vendor-based and open source tools, like ALF, will benefit both software developers and vendors immensely,” said Ian McLeod, senior vice president, products, Segue Software. “We are committed to supporting its success and will standardize our solutions on the ALF framework.”</p>
		<p>“ALF changes everything,” said Kevin Parker, vice president of market development at Serena and Eclipse ALF Project Management Committee member. “As tools evolve, ALF will remain the constant integrator, enabling developers to select best-in-class technologies in support of enterprise initiatives.”</p>
		<p>“ALF is an important project for the future growth of the Eclipse ecosystem,” said Mike Milinkovich, executive director of Eclipse Foundation. “ALF builds on the promise of the Eclipse platform for tools integration and provides an open source infrastructure for collaboration and interoperability between development tools across the entire lifecycle.”</p>
		<p>Developers, vendors and users of application lifecycle management technology are invited to learn more about the Eclipse ALF Project at this month’s EclipseCon 2006, the premier technical and user conference focusing on the power of the Eclipse platform.  At the conference, representatives from the ALF Project’s ecosystem of contributors are scheduled to debut its proof of concept demo.  For more information on the Eclipse ALF Project or to become an influencer or contributor, please visit <a href="http://www.eclipse.org/alf">www.eclipse.org/alf.</a></p>  
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		Myriam Sughayer<br>
		Horn Group, Inc<br>
		415-905-4028<br>
		msughayer@horngroup.com<br>
		<br>

		</p>
							
	</div>

		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

