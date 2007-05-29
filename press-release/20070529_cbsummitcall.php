<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Summit Europe call for Participation - Talks & Demos";
	$pageKeywords	= "Eclipse Summit Europe, call for Participation , Talks & Demos";
	$pageAuthor		= "Nathan Gervais";
	
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
		<h2>Community Bulletin</h2>

		<p><b>ECLIPSE SUMMIT EUROPE 2007<br/>
October 9-11, 2007<br/>
Stuttgart Region, Germany<br/>
<a href="http://www.eclipsecon.org/summiteurope2007">www.eclipsecon.org/summiteurope2007</a></b><br>
</p>
<p> 
The Eclipse Foundation is hosting the 2nd annual Eclipse Summit Europe on October 9-11, 2007. To be held in the Stuttgart region of Germany, the Eclipse Summit is the Foundation’s premier event designed to create opportunities for the European Eclipse community to explore, share, and collaborate on the latest ideas and information about Eclipse and its members.
</p>
 
<p>
The conference will consist of one day of symposia followed by two days of technical and business track sessions, selected keynotes, demos, and networking gatherings. Sponsors supporting the Eclipse Summit will showcase their latest products and services, as well as the exciting contributions their organizations are making to the Eclipse ecosystem. The conference is a stimulating and dynamic event for Eclipse committers, contributors, adopters, add-in providers, and service providers to learn, share expertise, and discover new opportunities and solutions in the Eclipse ecosystem. 
</p>
 
<p>
Eclipse is now calling for participation by the membership in several events at the Eclipse Summit.
</p>
 

<p><b>Submit a Talk</b><br/>
The Eclipse Foundation is looking for members to speak at Eclipse Summit Europe. Prepared presentations should last approximately 60 minutes, including 5 minutes of questions from the audience at the end. Submitted talks should focus on 1 of 2 categories: 1) Consumer Stories; or 2) New & Noteworthy.
</p>
 
<p>
A Consumer Story talk should explore an individual or company’s experience using Eclipse-based technologies. This could include how a company uses multiple Eclipse projects on a large scale, how Eclipse changed the organization of a company, or how Eclipse changed the way a company does its business. Areas to cover may include why you chose Eclipse, obstacles you encountered, solutions you found, what you have contributed back to the Eclipse community, and what you see for the future.
</p>
 
<p>
For New & Noteworthy talks, we are looking generally for speakers from Eclipse projects that have been newly created or had a release with new and noteworthy functionality since the Eclipse Callisto release. We would like to hear about what innovations have already come out of your work and what you plan to achieve for your next release.
</p>
 
<p>
<b>Submit a Demo</b><br/>
This year, Eclipse is welcoming Eclipse projects and Eclipse-based solutions to submit their demo proposals for consideration by the program committee. The top 5 demos will each be awarded a 90 minute session during the Eclipse Summit.
</p>
 
<p>
<b>Submission Process</b><br/>
<ul><li>Call for talk & demo proposals opens May 17, 2007</li> 
	<li>Talks & demos will be reviewed by the Program Committee as they are submitted</li> 
	<li>Call for talk & demo proposals closes June 29, 2007</li> 
	<li>Submissions will receive a response from the Program Committee by July 31, 2007</li>
</ul>
 </p>

<p>
<b>How to Submit a Talk or Demo Proposal</b><br/>
<ul>
	<li>Prepare a 1 to 2 page outline and description of your proposed content in .pdf format, indicating a title</li> 
	<li>E-mail your proposal along with your name, company (if applicable), e-mail address, and phone number to <a href="mailto:summit@eclipse.org">summit@eclipse.org</a></li> 
</ul>


<p>
<b>Contact</b><br/>
If you have any questions or comments on the submission process, please contact:<br/>
Lynn Gayowski<br/>
Marketing Events Manager<br/>
Email lynn@eclipse.org<br/>
<br/>
Phone 613-224-9461 ext.234<br/>
Fax 613-224-5172<br/>

 


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
