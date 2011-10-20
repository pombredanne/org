<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "New Agile ALM Connect Conference Connects Tools, Methodologies and People";
	$pageKeywords	= "elipse, automotive, autosar";
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
<br><br><br>	
		<h1>$pageTitle</h1>

	
		<br>
  <p><strong>Ottawa, Canada – October 20, 2011</strong> – The Eclipse Foundation is pleased to announce a new technical 
  conference focused on connecting the latest software development tools, Agile methods and people across the entire application lifecycle.  
  This new conference, called <a href="http://www.eclipsecon.org/2012/agilealm">Agile ALM Connect</a>, will be held March 26-29 in Reston, VA and will be co-located with EclipseCon 2012.</p>
  
<p>Agile ALM Connect will include technical sessions to educate practitioners on tools and strategies for modernizing and evolving the 
application development lifecycle.   It will explore:
<ul>
<li>The interaction between development and DevOps
<li>Foundations and methodologies for continuous delivery and continuous integration
<li>Integration between Test Management, Quality Management, Release Management, Build Management
<li>Agile task management
<li>Task-focused collaboration
<li>ALM and Platform as a Service (PaaS) / Cloud Computing
<li>Mobile Development Lifecycle
<li>Deploying and scaling Agile methods, such as Scrum and Kanban, with tools
<li>Leveraging open source technologies such as Maven, Git, Hudson/Jenkins, Puppet, Mylyn plus many more
</ul>
</p>

<p>“Agile methods, open-source lifecycle tools and new deployment destinations such as mobile and cloud are transforming the way that we 
build software,” explains Mik Kersten, Agile ALM Connect Program Chair and CEO of Tasktop Technologies.  “In the last few years we have 
witnessed an explosion of new tools and processes that make building and deploying software easier.  But as teams and organizations attempt 
to modernize their ALM stack, they are hitting against major challenges introduced by the rate of change and the heterogeneity of these new 
tools and practices. Agile ALM Connect will educate attendees on the new landscape for integrating tools and connecting people to enable a 
new level of software lifecycle and collaboration.”</p>

<p>The Eclipse Foundation is a well-respected open source community that provides open source development tools used by millions of 
developers.  Best known for the Eclipse Java IDE, the Eclipse community also produces key Application Lifecycle Management (ALM) solutions: 
including Hudson for continuous integration, Mylyn for task management, EGit and JGit for distributed source code repositories and integration
 with Maven.   Agile ALM Connect will be co-located with the annual EclipseCon conference.</p>
 
<p>The <a href="http://www.eclipsecon.org/2012/agilealm/cfp">Call for Papers</a> is now open for Agile ALM Connect.  Industry leaders and technical 
experts are invited to submit speaking proposal for the conference.  Especially desired are case studies and real world experience with 
Agile and ALM.  The deadline for submissions is November 11, 2011.   The program will be selected by a program committee that includes the 
following experts:
<ul>
<li>Mik Kersten, Program Chair and CEO of Tasktop Technologies
<li>Luke Kanies, CEO of PuppetLabs
<li>Michael Huettermann, Author of Agile ALM
<li>Jason Van Zyl, CTO of Sonatype
<li>Dave West, Research Director at Forrester Research 
</ul>
</p>

<p>Sponsorship opportunities are also available for Agile ALM Connect and EclipseCon.  For more information please visit: 
<a href="http://www.eclipsecon.org/2012/prospectus">www.eclipsecon.org/2012/prospectus</a>
 
 

<br>
<br>	<strong>About the Eclipse Foundation</strong>
	<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible 
	frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major 
	technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the 
	Eclipse Platform.</p>
	<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse 
	and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>	</p>
  

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipsecon.org/2012/agilealm">Agile ALM Connect</a></li>
			</ul>
		</div>
	</div>	
</div>


EOHTML;
	$html = mb_convert_encoding($html, "HTML-ENTITIES", "ISO-8859-1");
	$pageTitle = mb_convert_encoding($pageTitle, "HTML-ENTITIES", "ISO-8859-1");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>



