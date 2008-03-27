<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Board Resolution";
	$pageKeywords	= "about, documents, board, resolution, foundation";
	$pageAuthor		= "M. Milinkovich Nov 20/05";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

    <div id="maincontent">
	<div id="midcolumn">
        <h1>$pageTitle</h1>
                
<p>The following resolution was passed by the Board of Directors of the Eclipse Foundation on December 14, 2006.</p>
<p><b>RESOLVED</b>, that the Board hereby instructs each Eclipse project to conform to the following requirements, and further instructs the EMO to ensure that all projects comply with these requirements in a timely manner.<br>
<ol type="a">
<li>that each project&rsquo;s website must conform to the <a href="http://www.eclipse.org/projects/dev_process/project-status-infrastructure-page3.php">user interface guidelines</a> established by the EMO, as updated by the EMO from time to time;</li>
<li>that each project in the Incubator Phase (as defined in the <a href="http://www.eclipse.org/projects/dev_process/">Development Process</a>) clearly labels itself, using guidelines as established by the EMO, as such in its website home page and on its project download page; and </li>
<li>that each project must conform to the <a href="http://www.eclipse.org/projects/dev_process/project-status-infrastructure-page2.php">project data guidelines</a> established by the EMO, as updated by the EMO from time to time.</li>
</ol>		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="../foundation/directors.php">Board of Directors</a></li>
				<li><a href="../../membership/">Membership</a></li>
				<li><a href="../../membership/become_a_member/">Become a member</a></li>
			</ul>
		</div>
	</div>

	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
