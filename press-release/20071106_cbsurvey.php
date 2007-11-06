<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Results of the Eclipse Community Survey";
	$pageKeywords	= "eclipse survey, community, results, 2007";
	$pageAuthor		= "Nathan Gervais";
	
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
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
		<p>The Eclipse Foundation and IDC have released the results of a comprehensive survey of the Eclipse Community conducted during the summer of 2007.  The survey was developed to better understand how individuals are using Eclipse and which business models organizations are adopting for software built with Eclipse.  Over a thousand people responded to the survey invitation posted on the eclipse.org web site.  The complete survey results can be found at <a href="http://cdn.idc.com/downloads/EclipseCommunitSurveyResults[NotesPages].pdf">http://cdn.idc.com/downloads/EclipseCommunitSurveyResults[NotesPages].pdf</a>
		</p>

		<p> 
			<b>Some highlights about individuals using Eclipse include:</b>
			<ul class="paddedlist">
				<li>Eclipse is primarily used by technical professionals for work related projects.   Over 91% of the respondents are employed by an organization or are self-employed and 84% use Eclipse for work-related reasons.</li>
				<li>The top 6 most used projects are  JDT (88%), Web Standard Tools (56%), JEE Standard Tools (44%), RCP (42%), EMF (37%) and Mylyn (36%).  It is interesting to note Mylyn just had its 1.0 release in December 2006, so the project has accomplished impressive penetration in a short time period.  </li>
				<li>72% of respondents indicated they are building server-centric software.  This is not a big surprise, since this is the primary usage of Java.   However, between 35-40% of respondents are building desktop or RCP applications, demonstrating a healthy usage of Eclipse for desktop applications.   </li>
				<li>New users to Eclipse seem to be using projects in the embedded and mobile area.   For those individuals with less than 1 year of experience, 29% are developing embedded software and 17% mobile client applications, as compared to 12% and 8% for those with more than 3 years of experience.  </li>
				<li>Not surprisingly, the longer an individual has been using Eclipse the more likely it is that he/she has actively participated in the community.   Over half (52%) of individuals who have used Eclipse more than 3 years actively participate and 81% feel their contribution is appreciated.   Conversely, 20% of those individuals with less than 1 year of experience actively participate and only 44% feel their contribution is appreciated.</li>
				<li>Eclipse appears to be well established now and into the future.  96% of respondents are either increasing or maintaining their usage of Eclipse.  </li>
			</ul>
		</p>
		
		<p><b>Some highlights about the organizations using Eclipse include:</b>
 			<ul class="paddedlist">
 				<li>A large proportion (71%) of the respondents work for an IT solution provider (ex. ISV, hardware company, systems integrator, VAR, etc) as opposed to 29% for end users (ex. banks, government agencies, etc).  It would appear that a disproportionate number of respondents are from IT solution providers, since the total developer population has more individuals from end users than from IT solution providers.   However, it is possible that individuals working for IT solution providers more actively participate in the Eclipse community or at least are more likely to visit the eclipse.org web site.</li>
 				<li>Organizations are using Eclipse for cross-platform development and deployment.   On average they have 2.1 development platforms and 2.7 deployment platforms for software build using Eclipse.   Windows is the most popular development platform, with 74% of organizations choosing Windows as their primary development platform, followed by Linux at 20%.  However, for primary deployment platforms, Linux is well represented at 37%, compared with 47% on Windows.  Given that 72% of respondents are creating server software, this may reflect the strength of Linux as a server operating system.</li>
 				<li>A vibrant, healthy Eclipse ecosystem is characterized in the survey results.   75% of the IT solution providers are using Eclipse for economic reasons, i.e. to make money or save money.  Of those organizations using Eclipse to make money, 47% are making at least 50% of their revenue from Eclipse based products.  </li>
 				<li>There is a wide diversity of business models being pursued in the Eclipse ecosystem.  40% of the organizations using Eclipse to make money identified they were pursuing multiple business models.  The most common model, at 54%, was organizations using Eclipse to build applications, and the second most common model, at 27%, was organizations embedding Eclipse in their application.</li>
 			</ul>
		</p>
 
		<p>
			Inquiries should be directed to:<br/>
			IDC: Matthew Lawton, Program Director, IDC (mlawton at idc dot com)<br/>
			Eclipse Foundation: Ian Skerrett, Director of Marketing, Eclipse Foundation (ian dot skerrett at eclipse dot org)<br/>
		</p>
 
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
