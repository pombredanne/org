<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "OS Summit Asia";
	$pageKeywords	= "OS Summit Asia, call for participation , Talks & Demos";
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
		
		<p>
			<b>OS Summit Asia<br/>
			November 26-30, 2007<br/>
			Hong Kong<br/>
			<a href="http://www.ossummit.com/index.html">www.ossummit.com</a></b><br>
		</p>

		<p> 
			We are pleased to announce a new conference for the Eclipse community, called <a href="http://www.ossummit.com/index.html">OS Summit Asia</a>.
			This new conference is being organized in collaboration with the Eclipse Foundation and the Apache Software Foundation.  The
			inaugural event will be held Nov. 26-30, 2007 in Hong Kong and is expected to attract open source developers from across Asia.  
		</p>
		
		<p>
 			OS Summit Asia is the first joint conference between the Apache and Eclipse Foundations and will feature a wide range of
 			activities designed to promote the exchange of ideas amongst foundation members, innovators, developers, vendors, and users
 			interested in the future of Open Source technology.  We would like to invite the entire Eclipse community to participate.
		</p>
 
		<p>
			The conference <a href="http://www.ossummit.com/cfp.html">call for papers</a> is now open.  Individuals from both the
			Eclipse and Apache communities are encouraged to submitted session proposals before July 13, 2007.  Session may include
			topics relevant to Apache and Eclipse technologies, case studies of how Apache and Eclipse technologies are used together
			and topics relevant to the business aspects of open source software development.   A more complete list of topics is
			included in the call for papers.
		</p>
 
		<p>
			For more information about the conference please visit the <a href="http://www.ossummit.com/index.html">conference web
			site</a>.  Registration for the conference will open closer to the conference date.
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
