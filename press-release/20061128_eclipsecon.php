<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Hold the Dates for EclipseCon 2007";
	$pageKeywords	= "EclipseCon, 2007";
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
		<strong>Fourth Annual Community Conference Announces Keynotes and Tutorials; New OSGi Developer Conference Co-located</strong><br/>
		<p><strong>OTTAWA-November 28, 2006- </strong>The Eclipse Foundation announced today the keynote speakers for its fourth annual community conference, EclipseCon 2007. The conference brings together the Eclipse community to share and learn new techniques, ideas and technologies, as well as provide information about the latest developments and future plans of the Eclipse projects. The conference will be held March 5-8, 2007 at the Santa Clara Convention Center. 
		</p>
		<p>The keynote speakers for EclipseCon 2007 will feature well known industry speakers including Scott Adams, creator of the comic strip Dilbert; Robert ‘r0ml’ Lefkowitz, an enterprise architect and frequent speaker on open source software; and Dr Herbert Thompson, expert on application security and chief security strategist for Security Innovation.</p>
		
		<p>“EclipseCon is the premier gathering of the year for the Eclipse community,” said Mike Milinkovich, executive director of the Eclipse Foundation. “It is a great opportunity for the Eclipse projects, users and members to meet and network.”</p>

		<p>Registration for EclipseCon 2007 is now open. The conference will feature 50 in-depth tutorials, 65 long-talk sessions, 100 short-talk sessions and 16 panels. The conference tutorials have been announced and are open for registration.</p>
	
		<p>EclipseCon 2007 is also pleased to host the OSGi Developer Conference as a track within the EclipseCon conference. The OSGi specifications underlie the component model used within Eclipse but is also used in embedded devices and application servers.  The Eclipse Equinox project is an OSGi framework that forms the core technology for Eclipse and Eclipse RCP.  Attendees of the OSGi Developer Conference will have full access to all of the EclipseCon sessions and events.</p>

		<p>Members of the press and analyst community are also encouraged to attend EclipseCon 2007. More information about the conference, including how to register, can be found online at <a href="http://www.eclipsecon.org">http://www.eclipsecon.org</a>. </p>
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		
		<p><center><i>All company/product names and service marks may be trademarks or registered trademarks of their respective companies.</i></center></p>
		
		<br /><br /><strong>Press Contact</strong><br>	
		John Moran or Anne Lundregan<br/>
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

