<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse 2010 Themes and Priorities";
	$pageKeywords	= "about, documents, history";
	$pageAuthor		= "Donald Smith";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

    <div id="maincontent">
	<div id="midcolumn">
        <h1><a name="top"></a>$pageTitle</h1>

        

     </div>
      <div id="rightcolumn">
      
 
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="./press-release/">Press Releases</a></li>
				<li><a href="../membership/">Membership</a></li>
				<li><a href="../membership/become_a_member/">Become a member</a></li>
			</ul>
		</div>
     	<div class="sideitem">
			<h6>Thank you!</h6>
			<p>Our thanks to <a href="/corporate_sponsors/">our many corporate sponsors</a> for generous donations to our infrastructure.</p>
		</div>		
	  </div>
  </div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


