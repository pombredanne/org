<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Celebrates Five Years as an Open Source Community and Ecosystem";
	$pageKeywords	= "Eclipse, birthday, November, 2006";
	$pageAuthor		= "Lynn Gayowski";
	
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
		<strong>ECLIPSE CELEBRATES FIVE YEARS AS AN OPEN SOURCE COMMUNITY AND ECOSYSTEM</strong><br/>
		<p><strong>OTTAWA, CANADA—November 7, 2006— </strong>Today, the Eclipse community celebrates five years as an open source project. Eclipse has grown from its roots as a Java IDE project to become a universal development platform for building and deploying software. There are now 66 open source projects at Eclipse, generating millions of downloads. It is estimated that more than 1,300 Eclipse based products are now available.</p>
		<p>On November 7, 2001, IBM published the source code to the Eclipse platform and Java Development Tools project (JDT). Shortly following the release of the code, IBM announced the eclipse.org Consortium, including Borland, IBM, Merant, QNX Software Systems, Rational Software, RedHat, SuSE and TogetherSoft. The consortium of vendors has grown from the initial eight companies to the 152 members that are currently part of the Eclipse Foundation.</p>
		<p>Eclipse’s economic and collaborative models have attracted an ever-growing list of companies from around the world. These organizations are contributing to a variety of technology innovations and using the developments to compete in the marketplace. In August, IDC issued a research report that estimated there are 2.27 million Eclipse users worldwide.*</p>
		<p>“When we contributed the $40 million worth of code in 2001, we had a vision for this community-style software development. The Eclipse Foundation has exceeded our expectations as a quick and cost-effective way of forging alliances, sharing technology and helping the open source developer ecosystem grow and succeed," said Daniel Sabbah, general manager, IBM Rational software, and one of the original Eclipse supporters in IBM. "Our dedication to Eclipse continues with our work leading and contributing to projects, our commercial support of Eclipse - which will be available shortly - and with the development of much of our software on the Eclipse platform. Our customers are exceedingly excited about Eclipse and the innovation the community provides for them."</p>
		<p>“On the occasion of Eclipse’s fifth birthday I would like to pay tribute to the many people whose hard work, technical talents and vision have created this great community.” said Mike Milinkovich, executive director of the Eclipse Foundation.  “It is through the work of these individuals that we have created a vibrant community and ecosystem that encourages collaboration, innovation and competition around the Eclipse platform.  Congratulations to everyone; the next 5 years will be even more exciting.”</p>
		<p>The Eclipse community will celebrate its milestone with birthday parties in 32 cities around the world. An electronic birthday card has been setup to allow individuals to show their support for Eclipse and a Product Wall of Fame to showcase the products and service that are available for the Eclipse community. More information can be found at <a href="http://birthday.eclipse.org">http://birthday.eclipse.org</a>.</p>
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		
		<p>*IDC, Worldwide Adoption of Eclipse: The Framework Resonates with Java Developers in All Regions, Doc #203080, Aug. 2006</p>
		
		<p><center><i>All company/product names and service marks may be trademarks or registered trademarks of their respective companies.</i></center></p>
		
		<br /><br /><strong>Press Contact</strong><br>	
		John Moran or Laura Ackerman<br>
		Schwartz Communications<br>
		781-684-0770<br>
		eclipse@schwartz-pr.com <br>
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

