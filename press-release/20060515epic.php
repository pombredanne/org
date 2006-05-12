<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EPIC Community Portal";
	$pageKeywords	= "Eclipse Foundation, EPIC, community, rcp, press release, eclipsecon";
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
		<h2 ALIGN="CENTER"><strong>Eclipse Foundation Launches Community Portal to Promote the Eclipse Ecosystem</strong></h2>
		<ul>
		<li>Genuitec, Innoopract and Instantiations Contribution Becomes Core Repository for Eclipse-based Offerings</li>
		</ul>
		<p><strong>JAVAONE (BOOTH 1138), SAN FRANCISCO, Calif., May 15, 2006</strong> – The Eclipse Foundation today 
		launched a community portal to promote the adoption of Eclipse-based commercial products, complementary open 
		source projects and Eclipse-related training, support and services. The portal, Eclipse Plug-in Central (
		EPIC), makes it easier than ever for developers, software vendors and enterprises to find high quality open 
		source and commercial plug-ins, tools and add-on services to enhance their Eclipse development.   The EPIC 
		portal will be a key part of the Eclipse Foundation’s effort to promote and grow the overall Eclipse 
		ecosystem. </p>

		<p>EPIC was initially created in 2004 and operated by an alliance of three Eclipse Foundation member 
		companies Genuitec, Innoopract and Instantiations.  The three companies have contributed the existing EPIC 
		site to the Eclipse Foundation and will remain actively involved in the development and evolution of the site.
		</p>

		<p>Today, the Eclipse ecosystem is one of the largest communities of commercial vendors, open source projects, 
		and service and education that has developed around a common integration platform.   There are over 1000 
		different plug-ins, 950 Eclipse related projects listed on SourceForge and an estimated 200 independent 
		software vendors (ISVs) that are using Eclipse as the platform for their commercial products.   The new 
		portal offers a central repository for this community to promote their Eclipse-based products.   It will 
		also make it easier for potential users to find Eclipse-based products.</p>
 
		<p>“The Eclipse ecosystem has greatly matured over the last few years, evidenced by the growing number of 
		plug-ins and tools available,” said Mike Milinkovich, executive director of the Eclipse Foundation. “We 
		believe that to realize the full potential of the ecosystem, it is important that we make it more accessible 
		to the community.   Our goal with EPIC is to have it be the place for finding Eclipse related products and 
		services.”</p>

		<p>”One of Innoopract’s missions has been to facilitate the adoption of Eclipse and Eclipse plugins by the 
		development community,” said Jochen Krause, CEO of Innoopract.  “The EPiC alliance was formed with this goal 
		in mind and has been successful in providing a reliable source of information on the ecosystem of plugins. 
		A merger between EPiC and Eclipse.org will accelerate the development community’s accessibility of the 
		Eclipse ecosystem.</p>

		<p>“Genuitec is pleased to have been part of the original launch for EPIC and are committed to continued 
		contribution for the new portal,” said Maher Masri, President of Genuitec LLC.  “It was clear to us that the 
		best interest of the Eclipse ecosystem is to expand community contribution toward making the new portal the 
		quintessential source for Eclipse information.”</p>

		<p>“Instantiations is very pleased to participate in this important donation to the Eclipse Foundation. 
		The EPIC portal is a key tool for us and our customers and we look forward to the Foundation taking it to 
		the next level for the entire Eclipse Ecosystem", said Mike Taylor, President/CEO of Instantiations.</p>
	
		<p>The EPIC community portal can be found at <a href="http://www.eclipseplugincentral.com/">www.eclipseplugincentral.com</a></p>
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		Chantal Yang/Laura Ackerman<br>
		Schwartz Communications<br>
		781-684-0770<br>
		eclipse@schwartz-pr.com <br>
		<br>
		<br>

		</p>
							
	</div>

		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

