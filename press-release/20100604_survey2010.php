
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Community Survey 2010";
	$pageKeywords	= "eclipse, survey, open source developer";
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
		
		<h2>Community Bulletin</h2>
		
  <p>The Eclipse Foundation has released the results of the Eclipse Community Survey 2010.  The purpose of the survey 
is to better understand how the Eclipse community uses Eclipse and open source software and how people participate
in and perceive open source software.  <p>

<p>The <a href="http://www.eclipse.org/org/community_survey/Eclipse_Survey_2010_Report.pdf">Open Source Developer Report</a> is 
a report and analysis of the survey results.  Detailed survey results are available 
<a href="http://www.eclipse.org/org/community_survey/Summary_Data_2010.xls">[xls]</a> and <a href="http://www.eclipse.org/org/community_survey/Summary_Data_2010.ods">[ods]</a> formats.</p>

 	<br><br>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/community_survey/Eclipse_Survey_2010_Report.pdf">Report</a></li>
				<li>Detailed Results <a href="http://www.eclipse.org/org/community_survey/Summary_Data_2010.xls">[xls] </a><a href="http://www.eclipse.org/org/community_survey/Summary_Data_2010.ods">[ods]</a></li>
			</ul>
		</div>
	</div>	
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

