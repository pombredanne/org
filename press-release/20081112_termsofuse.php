<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Updated Web Site Terms of Use";
	$pageKeywords	= "Eclipse Foundation, Terms of Use";
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
     	November 12, 2008
		<p>
			Effective today, the Eclipse Foundation has made a number of changes to the Eclipse.org website terms 
			of use.  This document describes the conditions under which people use the eclipse.org web site, 
			including contributions to the Eclipse community via bugzilla, mailing lists and newsgroups.   		
		</p>
		
		<p>
			There are two main reasons for the changes:
		<ol>
		<li>The updated terms of use establishes a framework for licensing non-code contributions, like articles, 
		wikis, blogs, etc, under a license other than the EPL.  The previous terms of use was not clear on 
		non-code contributions.  Right now, we have not defined the additional licenses, but in the future the 
		updated terms of use will provide the flexibility to license non-code contributions under different 
		licenses, e.g. a Creative Commons license.  We hope to get the required Eclipse Board of Directors 
		approvals in place soon.</li><br><br>
		<li>In September 2008, the Eclipse IP Policy was changed to introduce the concept of a Project License(s).
		   This was primarily done to allow for the scenario where an Eclipse project may be dual licensed.  For 
		   example, the Eclipse Link project needed to be available under a BSD license so it could be used as 
		   the reference implementation for JPA 2.0.  The web site terms of use document has been updated to 
		   reflect that contributions to a project would be done under the Project License(s), not just the EPL. <br>
		   		
		We do not anticipate that many projects will become dual licensed.  The decision to allow a project to be 
		dual license is done on a case-by-case basis and requires the unanimous approval of the Eclipse Board of 
		Directors.
		</li>
		</ol>
		</p>
		<p>
		The updated terms of use have been approved by the IP Advisory Committee of the Eclipse Board of 
		Directors and will become effective November 12, 2008.  Any questions or comments should be directed to 
		<a href="mailto:license@eclipse.org">license@eclipse.org</a>.
		</p>
		

	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


