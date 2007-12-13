<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon 2008";
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
		<h1>The EclipseCon 2008 Technical Program Rocks!</h1>
		
		<p>The <a href="http://www.eclipsecon.org/2008">EclipseCon 2008</a> technical program has been selected and is now available on the <a href="http://www.eclipsecon.org/2008/index.php?page=sub/">conference web site</a>.  Thank you to
		everyone who submitted a proposal to the program committee.  The number and quality of submissions received was tremendous so
		the program committee had a difficult time selecting the sessions, but it has made the final program exceptionally strong.</p>
		
		<p>The program consists of 80 tutorials, 90 long talk sessions, and 160 short talk sessions, and is organized into 18 tracks.
		 The different tracks reflect the diversity of the Eclipse community and include:
		 <table><tr>
		 			<td>
						 <ul>
						 	<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Business" target="blank">Business</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=C%2FC%2B%2B" target="blank">C/C++</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Committer%20and%20Contributor" target="blank">Committer and Contributor</a> - new track on how to contribute to Eclipse</li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Data%20Tooling" target="blank">Data Tooling</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Eclipse%20as%20a%20Platform" target="blank">Eclipse as a Platform</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Emerging%20Technologies" target="blank">Emerging Technologies</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Industry%20Vertical" target="blank">Industry Vertical</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Java" target="blank">Java</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Mobile%20and%20Embedded" target="blank">Mobile &amp; Embedded</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Modeling" target="blank">Modeling</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=OSGi%20DevCon" target="blank">OSGi DevCon</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Other" target="blank">Other</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Rich%20Client%20Platform" target="blank">Rich Client Platform</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Reporting" target="blank">Reporting</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=SOA" target="blank">SOA</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Test%20and%20Performance" target="blank">Test & Performance</a></li>
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Tools" target="blank">Tools</a></li> 
							<li><a href="http://www.eclipsecon.org/2008/index.php?page=sub/&category=Web%20Tools" target="blank">Web Tools</a></li>
						 </ul>
					</td>
					<td>
						&nbsp; &nbsp; &nbsp; <a href="http://www.eclipsecon.org/2008/"><img border="0" src="http://www.eclipsecon.org/2008/image125x125.gif"
 						height="125" width="125" alt="EclipseCon 2008"></a>
					</td>
		</tr></table>
		 </p>

		<p><a href="http://www.eclipsecon.org/2008">EclipseCon 2008</a> will be held March 17-20 at the Santa Clara Convention Center.  People that
		<a href="http://www.eclipsecon.org/2008/index.php?page=registration/" targer="blank">register</a> before Dec. 31, 2007 will qualify
		for the early registration price.  In addition, the first 100 individuals with paid registrations will receive a copy of
		<a href="http://www.eclipsewtp.org/"><i>Eclipse Web Tools Platform: Developing Java Web Applications</i></a>.
		Register today to be a part of the best EclipseCon yet!</p>

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
