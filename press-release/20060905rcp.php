<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "New Top-Level Modeling Project";
	$pageKeywords	= "Eclipse Foundation, community, rcp, press release, eclipsecon";
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
		<h2 ALIGN="CENTER"><strong>SECOND ANNUAL ECLIPSE GLOBAL ENTERPRISE SURVEY POINTS TO RAPID ADOPTION OF ECLIPSE RICH CLIENT PLATFORM</strong></h2>
		
		<p><strong>OTTAWA, CANADA - Sept. 5, 2006 </strong> - Eclipse Foundation today announced a recent Evans Data Survey confirms a significant increase in the adoption of the Eclipse Rich Client Platform (RCP) by Eclipse users. Approximately 22% of the survey respondents indicated they were building rich client applications based on Eclipse RCP; an increase of over 130% based on a previous 2005 study. The survey also indicates strong future growth and interest in Eclipse RCP, with 68% of respondents indicating they will be using it in the next six months.</p>
		
		<p>"We have been very impressed with the awareness and growth of Eclipse as a platform for building end user applications," said John Andrews, president of Evans Data. "It is clear that Eclipse RCP is being considered as one of the main platforms for building desktop applications.  Its unique value of providing portability between Windows, Linux and Mac OSX differentiates it from other solutions."</p>
		
		<p>Eclipse RCP is a platform for building and deploying rich client applications. It includes Equinox, a component framework based on the OSGi standard, the ability to deploy native GUI applications to a variety of desktop operating systems, such as Windows, Linux and Mac OSX and an integrated update mechanism for deploying desktop applications from a central server.</p>

		<p>"Software vendors, open source communities and enterprises are adopting Eclipse RCP because it accelerates their desktop development and gives them the freedom to deploy their applications on a variety of operating systems," explains Mike Milinkovich, executive director of the Eclipse Foundation. "The Evans Data survey confirms our belief that there is significant and growing interest in using Eclipse RCP as the platform for building next generation desktop applications."</p>

		<p>"SAS is using Eclipse RCP as the foundation for many of our new Java desktop solutions," explains Rich Main, director of Java development environments at SAS.  "With Eclipse RCP, we can develop more consistent, native looking Java applications while taking advantage of the underlying Eclipse plug-in model to share key application features across a wide array of products. This allows us to devote more of our energy to providing unique business value for our customers."</p>
		
		<p>"Instantiations is very excited to see the momentum and adoption of Eclipse RCP in the Eclipse community," said Mike Taylor, CEO of Instantiations and chair of the Eclipse working group that worked with Evans Data on the study. "This provides a great opportunity for companies, like Instantiations, to target their solutions and services to a growing community of RCP developers."</p>
		
		<p>"Eclipse plays a critical role in our ability to deliver industry leading collaboration capabilities in Lotus Sametime 7.5, the next major release of IBM Lotus Notes, code named 'Hannover' and our upcoming rich client application development tools" said Ken Bisconti, vice president Lotus Software products, IBM. "Using Eclipse as an underlying framework enables us to offer our customers the best of both worlds, the openness and flexibility of standards based technology and the security and reliability of the industry's leading collaboration solutions."</p>
		
		<p>For more information about Eclipse RCP visit <a href="http://www.eclipse.org/rcp">www.eclipse.org/rcp</a>.</p>
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		John Moran or Laura Ackerman<br>
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

