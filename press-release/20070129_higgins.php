<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Bandit and Higgins Projects Bridge Multiple Identity Systems to Provide a Consistent Experience of Identity";
	$pageKeywords	= "Higgins, Bandit, milestone";
	$pageAuthor		= "Ian Skerrett";
	
	# d page-specific Nav bars here
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
		<p><i>Collaboration enables multi-platform, multi-protocol open source identity services that integrate with Microsoft CardSpace and Liberty Alliance-enabled products</i></p>
		<p><strong>WALTHAM, Mass., and OTTAWA, Canada - January 29, 2007 - </strong>- The Bandit™ and Eclipse Higgins Projects today announced the achievement of a key milestone in the development of open source identity services.  Based on working code from the two projects and the larger community of open source developers, the teams have created a reference application that showcases open source identity services that are interoperable with Microsoft’s Windows* CardSpace* identity management system and enable Liberty Alliance-based identity federation via Novell® Access Manager.  This reference application is a first-of-its-kind open source identity system that features interoperability with leading platforms and protocols.  This ground-breaking work will be demonstrated at the upcoming RSA Conference in San Francisco. 
		</p>
		<p>"There are two basic requirements for translating the potential of recent identity infrastructure developments into real-world benefits for users: interoperability and a consistent means of developing identity-aware applications," said Jamie Lewis, CEO and research chair of Burton Group. "First, vendors must deliver on their promise to enable interoperability between different identity systems serving different needs. Second, developers need a consistent means of creating applications that leverage identity while masking many of the underlying differences in those systems from the programmer. The Bandit and Eclipse Higgins interoperability demonstration shows progress on the path toward these goals. And the fact that they are open source software projects increases the potential that the identity infrastructure will emerge as a common, open system for the Internet."</p>
		<p>The Bandit and Higgins projects are developing open source identity services to help individuals and organizations by providing a consistent approach to managing digital identity information regardless of the underlying technology.  This reference application leverages the information card metaphor that allows an individual to use different digital identity ‘I-Cards’ to gain access to online sites and services. This is the metaphor used in the Window’s CardSpace identity management system that ships with the Vista* operating system.</p>

		<p>“Windows CardSpace is an implementation of Microsoft’s vision of an identity metasystem, which we have promoted as a model for identity interoperability,” said Kim Cameron, architect for identity and access at Microsoft.  “It’s rewarding to see the Bandit and Higgins projects, as well as the larger open source community, embracing this concept and delivering on the promise of identity interoperability.” </p>
	
		<p>The open source technology developed by Bandit and Higgins enables initial integration between a non-Liberty Alliance identity system and a Liberty Alliance based federated identity system provided by Novell Access Manager.  Specifically, these technologies enable Novell Access Manager to authenticate a user via a Microsoft infocard (CardSpace) and consume identity information from an external identity system. It will further show that identity information from Novell Access Manager can be used within an infocard system. This is a significant step forward in the integration of separate identity systems to deliver a seamless experience for the user as demonstrated by the reference application.</p>
		
		<p>“The Liberty Alliance project fully supports the development of open source identity services that advance the deployment of Liberty-enabled federation and Web Services as part of the broader Internet identity layer,” said Brett McDowell, executive director of the Liberty Alliance.  “The open source community’s embrace of Liberty Alliance protocols is validation of the benefits this technology provides, and we salute the Bandit and Higgins teams for their role in making the technology more broadly accessible.”</p>
		
		<p>Higgins is an open source software project that is developing an extensible, platform-independent, identity protocol-independent software framework to support existing and new applications that give users more convenience, privacy and control over their identity information.  The reference application leverages several parts of Higgins including an identity abstraction layer called the Identity Attribute Service (IdAS).  To support a dynamic environment where sources of identity information may change, it is necessary to provide a common means to access identity and attribute information from across multiple identity repositories. The IdAS virtualizes identity sources and provides a unified view of identity information.  Different identity stores or identity management systems can connect to the IdAS via “context providers” and thus provide interoperability among multiple systems.</p>
		
		<p>“Many groups have been working towards the goals of Internet identity interoperability,” said Paul Trevithick, technology lead for the Higgins project.  “This milestone represents a major step in having multiple open source projects work together to support multi-protocol interoperability.” </p>
		
		<p>The Bandit project, sponsored by Novell, is focused on delivering a consistent approach to enterprise identity management challenges, including secure access and compliance reporting.  The Bandit team’s contributions to the reference application include the development of multiple “context providers” that plug into the Higgins Identity Attribute Service (IdAS) abstraction layer to provide access to identity information across disparate identity stores.  It also showcases the role engine and audit reporting capabilities in development by the Bandit community.</p>
		
		<p>“The development of this reference application would not have been possible without the collaboration and contribution of the wider Internet identity community,” said Dale Olds, Bandit project lead and distinguished engineer for Novell.  “This is the first of many milestones we are working towards as both the Bandit and Higgins communities strive  to enable interoperable, open source identity services.”</p>
		
		<p><b>More Information</b><br/>
		The reference application is available at: <a href="http://www.bandit-project.org/index.php/Reference_Application">http://www.bandit-project.org/index.php/Reference_Application</a>.  It will be demonstrated at the Liberty Alliance Workshop on February 5th from 1:00 to 3:00 pm Pacific for registered attendees of the RSA Security conference at the Moscone Center in San Francisco.  Interested parties can register free of charge at: <a href="https://cm.rsaconference.com/US07/portal/newreg.ww">https://cm.rsaconference.com/US07/portal/newreg.ww</a>. using registration code 147LIBAEX. This includes a free expo pass that can be used to attend the tradeshow portion of the conference Tuesday through Thursday.  The reference application and project experts will also be available throughout the RSA Conference in Novell’s booth #1937.
		</p>
		
		<p><b>About Bandit</b><br/>
		Bandit is an open source project, sponsored by Novell, that is developing open source identity services that will provide organizations with a consistent approach to enterprise identity management challenges such as secure, role-based access and regulatory compliance reporting.  As an open source project, it is also a community of developers – part of a larger identity and security community – that organizes and standardizes identity-related technologies in an open way, promoting interoperability, collaboration and further innovation.  For more information, please visit: <a href="http://www.bandit-project.org/">http://www.bandit-project.org/</a>
		
		
		<p><strong>About Higgins/Eclipse</strong><br />
		The Higgins project is an Eclipse Foundation project.  Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		
		<p><center><i>Novell is a registered trademark and Bandit is a trademark of Novell, Inc. in the United States and other countries.  *All third-party trademarks are the property of their respective owners</i></center></p>
		
		<br /><br /><strong>Press Contact</strong><br>	
		John Moran or Lori Kroll<br/>
		Schwartz Communications for the Eclipse Foundation<br/>
		781-684-0770<br/>
		eclipse@schwartz-pr.com <br/>
		<br />
		<br/>
		Charlotte Betterly<br/>
		Novell<br/>
		781-464-8253<br/>
		cbetterly@novell.com<br/>
		
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

