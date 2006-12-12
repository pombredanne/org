<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Mylar Introduces Major New Innovation for Developer Productivity";
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
		<h1>Eclipse Mylar Introduces Major New Innovation<br/> for Developer Productivity</h1>
		<h2>Press Release</h2>
		<p><strong>OTTAWA - December 12, 2006- </strong>The Eclipse Foundation, an open source community committed to the implementation of a universal software development platform, today announced the release of Eclipse Mylar 1.0. Mylar is a tasked-focused user interface that enhances developer productivity by reducing information overload and enabling easy multi-tasking. 
		</p>
		<p>Today’s IDEs overload developers with information by presenting too many details of a system’s complexity. As a result, developers often waste an inordinate amount of time searching and browsing through hundreds of files to find the information relevant to the task-at-hand. Mylar provides a new task-focused user interface that filters Eclipse IDE views to show only the elements relevant to a specific task.  Thereby focusing the attention of the developer and reducing the amount of scrolling and searching required to fix a bug or add a new feature.</p>
		
		<p>"The key intuition behind Mylar is that when a developer fixes a bug or adds a feature, they only care about a subset of the system," says Mik Kersten, Mylar project leader. "Mylar’s innovation is to make this subset explicit by automatically managing task context on the developers’ behalf. The end result is that the developers are able to focus on their programming instead of being forced to constantly find and re-find the information they need to get work done."</p>

		<p>Mylar simplifies the task management complexity of a developer’s daily work.  It enables multi-tasking by providing a task management view that allows developers to easily switch between tasks and share task context with other developers.  Mylar also unifies the different task lists a developer typically uses, such as bug tracking and e-mail systems, by integrating these systems into a common Mylar Task List.  This unified task list leverages Eclipse’s rich client capabilities to allow offline access and change notifications, enabling developers to spend more of their day in the Eclipse IDE where they are productive instead being forced to constantly switch back and forth between the browser and email inbox.</p>
	
		<p>"Mylar is the next killer feature for all IDEs," says Willian Mitsuda, developer at IBOPE, a large Brazilian multinational company.  "When I started using Mylar I just couldn't believe how I managed to work on large project without it.  This is definitely one of the most important innovations since refactoring."</p>

		<p>Mylar already integrates with issue tracking software such as Bugzilla, JIRA and Trac.  Organizations are also beginning to integrate or plan to integrate support for Mylar into their products, including  CodeGear, Collabnet and Maven. </p>
		
		<p>"In JBuilder 2007 we focused on making it easier to view, understand and manage daily tasks both from a team and an individual developer's perspective and Mylar is an important component in the solution," said Michael Swindell Vice President of Products and Strategy for CodeGear. "Mylar provides us with an innovative means for viewing project responsibilities and a foundation on which we can integrate different lifecycle components into the JBuilder experience and fine tune the user’s view of project artifacts."</p>
		
		<p>"Mylar's compelling new approach and CollabNet's collaborative development platform will organize all aspects of the Eclipse developer environment. Together with Subversion, it connects developers directly with the rest of the project team and the development processes used by their organization," said Jack Repenning, architect at CollabNet.</p>
		
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

	<div id="rightcolumn">
	<div class="sideitem">
		<h6>Related Links</h6>
		<ul>
			<li><a href="http://www.eclipse.org/mylar">Mylar Homepage</a></li>
		</ul>
	</div>
	</div>

		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

