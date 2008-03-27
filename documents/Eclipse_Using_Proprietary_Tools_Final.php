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
                
<p>The following resolution was passed by the Board of Directors of the Eclipse Foundation on June 21, 2007.</p>
<p><b>RESOLVED</b>, that the Board hereby instructs each Eclipse project to conform to the following policy for using proprietary tools in their development process, where there is sufficient value to the project to motivate the use of such proprietary tools. The goal of this policy is to ensure that undue barriers to contributors are not introduced as the result of the use of proprietary tools by one or more projects.</p> 
<ul>
<li>Projects are authorized to use proprietary tools for non-core infrastructure made available free of charge by vendor to all projects within the Eclipse community.</li>
<li>Vendors must agree to provide free licenses for all Eclipse committers, plus those individuals identified by name by a project leader, for use on the project.</li>
<li>The vendor has no obligation to provide free support, but may choose to do so at their discretion. (There may be good business reasons to want to get feedback from the Eclipse team, and to ensure that they are happy users.)</li> 
<li>Vendors are not obligated to provide any software. This is at their discretion.</li>
<li>Licenses provided by the vendors would be for a specific version of the vendor&rsquo;s software and must be perpetual. Access to any upgrades would be at the discretion of the vendor.</li>
<li>Although it will be a matter of public record that projects at the Eclipse Foundation are using proprietary tools, the Eclipse Foundation will not endorse any vendor&rsquo;s products. The Eclipse Foundation will publicly acknowledge the use of freely provided proprietary software tools on its <a href="http://www.eclipse.org/org/foundation/thankyou.php">"Thank You"</a> page.</li> 
</ul>

<p>The Board further instructs the EMO to develop a procedure to implement this policy.</p>

	</div>
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
