<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon 2009 Program Announced";
	$pageKeywords	= "EclipseCon, program, tracks";
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
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
		<p>The technical program for EclipseCon 2009 has been selected and is now available on the
		<a href="http://www.eclipse.org/go/EC_SITE@cbdec16">conference web site</a>.  The number and quality of submissions received
		continues to increase each year, so the job of the program committee is always very difficult.  Thanks to all who
		sent in proposals.</p>
		
		<p>Talks at EclipseCon 2009 include 80 long talk sessions and over 90 short talk sessions, organized within 18 tracks.
		 The different tracks reflect the diversity of the Eclipse community and include:
		 <table><tr>
		 			<td>
						 <ul>
						 	<li><a href="http://www.eclipsecon.org/2009/sessions?category=Eclipse%20Ecosystem%20-%20Business%20And%20Industry" target="blank">Business and Industry</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Eclipse%20IDE%20And%20Languages%20-%20CDT" target="blank">CDT</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Eclipse%20Ecosystem%20-%20Committer%20And%20Contributor" target="blank">Committer and Contributor</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Frameworks%20-%20Data%20Tooling" target="blank">Data Tooling</a></li>			
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Eclipse%20Ecosystem%20-%20Emerging%20Technology" target="blank">Emerging Technology</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Eclipse%20Platform%20-%20e4" target="blank">e4</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Eclipse%20IDE%20And%20Languages%20-%20Java" target="blank">Java</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Frameworks%20-%20Mobile%20And%20Embedded" target="blank">Mobile and Embedded</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Frameworks%20-%20Modeling" target="blank">Modeling</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Supporting%20Technology%20-%20OSGi%20DevCon" target="blank">OSGi DevCon</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Eclipse%20Ecosystem%20-%20Other" target="blank">Other</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Frameworks%20-%20Reporting" target="blank">Reporting</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Eclipse%20Platform%20-%20Runtime" target="blank">Runtime</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Frameworks%20-%20SOA" target="blank">SOA</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Frameworks%20-%20Test%20And%20Performance" target="blank">Test and Performance</a></li>
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Eclipse%20IDE%20And%20Languages%20-%20Tools" target="blank">Tools</a></li> 
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Eclipse%20Platform%20-%20UI%20/%20RCP" target="blank">UI / RCP</a></li> 
							<li><a href="http://www.eclipsecon.org/2009/sessions?category=Eclipse%20IDE%20And%20Languages%20-%20Web%20Tools" target="blank">Web Tools</a></li>
						 </ul>
					</td>
					<td>
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						<a href="http://www.eclipse.org/go/EC_SITE@cbdec16"><img border="0" src="http://www.eclipsecon.org/2009/static/image/image125x125.gif"
 						height="125" width="125" alt="EclipseCon 2009"></a>
					</td>
		</tr></table>
		 </p>

		<p><a href="http://www.eclipse.org/go/EC_SITE@cbdec16">EclipseCon 2009</a> will be held March 23-26 at the Santa Clara Convention Center.  People that
		<a href="http://www.eclipse.org/go/ECR_SITE@cbdec16" target="blank">register</a> before December 31, 2008 will qualify
		for the early registration price. Sign up today to be a part of the best EclipseCon yet!</p>

		<br><br>

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
