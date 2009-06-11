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
                <div class="homeitem3col">
<p>The following resolution was passed by the Board of Directors of the Eclipse Foundation on December 14, 2006.</p>
<p><b>RESOLVED</b>, that in order to improve the satisfaction of consumers and adopters of Eclipse open source projects, the Board hereby instructs all Eclipse projects to:<br>
<ol type="a">
<li>improve the usability of those extensible tools delivered to the community;</li>
<li>improve the initial user experience of the software releases delivered to the community, with respect to packaging, installation and out-of-the box experience; and</li>
<li>continue to comply with the Purposes of the Eclipse Foundation, with particular emphasis on "...supplying frameworks and exemplary, extensible tools..." in order to cultivate "...an ecosystem of complementary products, capabilities, and services."</li>
</ol>
</p>

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
