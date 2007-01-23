<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Launches Data Tools Platform 1.0";
	$pageKeywords	= "Eclipsecon, 2007, gold, sponsor";
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
		<p><i>Open Source Community Project Spearheaded by Sybase, Actuate and IBM</i></p>
		<p><strong>OTTAWA - January 23, 2007 - </strong>The Eclipse Foundation, an open source community committed to the implementation of a universal development platform, today announced the release of the Eclipse Data Tools Platform (DTP) 1.0, a collection of extensible frameworks and exemplary tools for developing data-centric applications in the Eclipse environment. With DTP 1.0, developers can now easily leverage existing data sources, such as enterprise databases, within the extensible Eclipse Platform.  Data-related applications are growing in significance, so this release meets an important development requirement in the software industry. 
		</p>
		<p>“DTP 1.0 provides a rich set of frameworks that solve real-world issues related to the development of data-centric applications, said Mike Milinkovich, executive director of the Eclipse Foundation.  “The growth and momentum of the Eclipse Data Tooling Platform project has resulted from the efforts of committers from the Eclipse community, including many from Sybase, IBM and Actuate.”</p>
		<p>DTP 1.0 greatly simplifies development of data-centric applications in heterogeneous environments by offering a range of agile development tools.  DTP 1.0 features three major components: model-driven development, connection management and data access framework, and SQL development tools. </p>

		<p>According to an Evans Data survey, 53 percent of developers said data access and management tools are extremely important.  “Developers see data access and management tools as an integral part of their arsenal in data centric application development,” said John Andrews, CEO of Evans Data.  “Eclipse will meet an important requirement of developers by providing data centric tools and frameworks.”</p>
	
		<p>“Sybase is leveraging DTP and the Eclipse Platform for Sybase's unified development environment, Sybase WorkSpace,” said John Graham, chair of the Eclipse Data Tools Platform Project, Sybase. “By incorporating DTP into Sybase WorkSpace, developers benefit by gaining developmental economies of scale, the flexibility that open source offers, and a high level of software quality that comes along with testing by an active community of users. Leadership in the Eclipse Foundation, especially with the DTP Project, addresses the needs of developers and this effort is a critical component of Sybase's overall vision for an end-to-end solution that supports information management, data integration and mobile application development.”</p>
		
		<p>“Actuate has been pleased to benefit from, and be involved in DTP 1.0.  We have long been champions of data-centric applications and believe that Eclipse provides the ideal framework for their development,” said Mark Coggins, senior vice president of engineering at Actuate Corporation.  “DTP is used for data access within BIRT, an Eclipse Project Actuate co-leads, and the Open Data Access (ODA) portion of DTP was contributed by us.  We look forward to further cross pollination in the future.”</p>
		
		<p>“DTP's technologies are important components of IBM's tooling for information application development, and IBM is pleased to see this milestone release of the DTP project, said David Fallside, IBM Information Management Open Source Manage. “IBM has supported the DTP project from the beginning, and plans to continue its support in the future.”</p>
		
		<p>For more information on the Eclipse DTP Project, please visit: <a href="http://www.eclipse.org/datatools">http://www.eclipse.org/datatools</a>. </p>
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		
		<p><center><i>All company/product names and service marks may be trademarks or registered trademarks of their respective companies.</i></center></p>
		
		<br /><br /><strong>Press Contact</strong><br>	
		John Moran<br/>
		Schwartz Communications for the Eclipse Foundation<br/>
		781-684-0770<br/>
		eclipse@schwartz-pr.com <br/>
		<br />
		<br/>
		Lorna Fernandes<br/>
		Sybase, Inc.<br/>
		925-236-4107<br/>
		lorna.fernades@sybase.com<br/>
		
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

