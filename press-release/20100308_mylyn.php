<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Mylyn Enables Agile Aim for Eclipse";
	$pageKeywords	= "eclipse, mylyn, agile";
	$pageAuthor		= "Lynn Gayowski";
	
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
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<h2>New sub-projects will strengthen growing Mylyn ecosystem</h2>
		
		<p>
			<b>Ottawa, Canada - March 8, 2010 -</b> The Eclipse Foundation today announced new initiatives to support the ongoing growth of the Eclipse Mylyn ecosystem.  The open source Mylyn project is a widely extended framework for integrating task and application lifecycle management (ALM) tools with the Eclipse IDE. The project will create new sub-projects representing key IDE/ALM integration categories. New projects include: the "Tasks" project for integrating task and change management; "SCM" for integrating source code management; "Build" for integrating build management and continuous integration, and "Review" for collaborative code review. The new sub-project leadership will support a broader range of leading Agile vendors contributing to the ongoing evolution of Mylyn.  
		</p>

		<p>
			"Mylyn's rapid adoption by Agile and ALM vendors means that we now have to scale up both the integration frameworks and the governance," said Mik Kersten, creator and leader of the Mylyn project and CEO of Tasktop Technologies. "With more than a million monthly downloads, inclusion in nearly all Eclipse distributions and 45 ALM integrations, Mylyn and its ecosystem are ensuring that developers have first-rate task management tools integrated with the Eclipse IDE and the productivity benefits of the task-focused interface, no matter how diverse their ALM stack."
		</p>
		<p>
			The new sub-projects have provided a channel for vendors in the ALM community to become more deeply involved with the Mylyn project. Organizations leading and contributing to the new sub-projects include Rally Software for "Tasks", Cloudsmith for "Builds", Perforce for "SCM" and INSO for "Review". In addition, Mylyn will now embrace the new Open Services for Lifecycle Collaboration (OSLC) web service standards for ALM.  
		</p>
		<p>
			"Tasktop and IBM share a common commitment to enabling interoperability across the ALM lifecycle," said Scott Bosworth, IBM Strategist and OSLC Program Manager. "Both companies contributed to the initial OSLC change management API, which set the stage for the even broader ALM scope and industry participation that the OSLC community is experiencing today. We expect the new Mylyn sub-projects to accelerate adoption of OSLC's open interfaces for ALM interoperability."
		</p>
		<p>
			At its core, Mylyn provides integrated and personalized task management through its ground-breaking task-focused interface. As the Eclipse IDE's adoption has grown beyond Java, Mylyn has extended its support to programming domains such as mobile C/C++, PHP and Spring Framework powered enterprise Java applications.  
		</p>
		<p>
			"Thanks to its broad ecosystem of open source and commercial integrations, Mylyn now supports nearly all of the popular ALM tools used by Eclipse users," said Mike Milinkovich, executive director of the Eclipse Foundation. "Mylyn will extend this reach by growing the community of committers and contributors working to make Mylyn an industry standard framework for Agile ALM."
		</p>
		<p>
			 "Mylyn's success comes from broad bottom-up adoption by developers," said Kersten. "While the new Mylyn sub-projects will provide reference integrations to popular open source ALM tools such as Bugzilla for Tasks, Git for SCM and Hudson for Build, the growing demand for Mylyn in the enterprise is being met by Tasktop Pro, which integrates a diverse range of commercial tools for Agile ALM."
		</p>
		<p>
			<b>Mylyn downloads and product information:</b><br>
			The project restructuring proposal, including a list of participating vendors, is at <a href="http://www.eclipse.org/project-slides/mylyn-restructuring-review.html">http://www.eclipse.org/project-slides/mylyn-restructuring-review.html</a>.
		</p>
		<p>
			Mylyn information and downloads on Eclipse.com: <a href="http://www.eclipse.org/mylyn/">http://www.eclipse.org/mylyn/</a>
		</p>
		<p>
			Mylyn information and downloads on Tasktop.com: <a href="http://tasktop.com/mylyn/">http://tasktop.com/mylyn/</a>
		</p>
		<p>
			<b>About the Eclipse Foundation</b><br>
			Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.
		</p>
		<p>
			The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at www.eclipse.org.
		</p>
		<p>
			<b>About Tasktop Technologies</b><br>
			Tasktop Technologies created the task-focused interface and widely popular Eclipse Mylyn tool that is used by hundreds of thousands of programmers around the globe. In addition, Tasktop offers its commercially supported Tasktop Pro product that improves developer productivity and increases project management visibility through IDE integration with today's leading software development management tools. Tasktop Pro extends Mylyn by providing commercial ALM integrations as well as enterprise features such as automatic time tracking and integration with Microsoft Outlook and Exchange as well as Google Apps. Tasktop Pro integrates with Atlassian JIRA, CollabNet TeamForge/ScrumWorks and Subclipse, IBM Rational ClearQuest and ClearCase, Rally Software, ThoughtWorks Studios Adaptive ALM and VersionOne.   For more information please visit http://tasktop.com, or call 778-588-6896.
		</p>
		<p>
			<b>Media Contact:</b><br>
			Christie Denniston (for Tasktop)<br>
			Catapult PR-IR<br>
			<a href="mailto:cdenniston@catapultpr-ir.com">cdenniston@catapultpr-ir.com</a><br>
			O: (303) 581-7760<br>
			C: (303) 827-5164<br>
			<br>
			Ian Skerrett<br>
			Eclipse Foundation<br>
			O:	(613) 224-9461 ext. 227
		<br><br>
	</div>
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php
/*
 * Created on 20-Jan-2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
