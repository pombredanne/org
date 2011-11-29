<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nominations Now Open For The Eclipse Community Awards 2012";
	$pageKeywords	= = "eclipse, foundation, community, award, winners, individual, nomination";
	$pageAuthor		= "Christopher Guindon";
	
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

	
		
<p> The Eclipse  Community Awards 2012 are open for nominations. Help recognize  individuals, projects and technologies that have made an impact  within the Eclipse community by telling us about your favorites&rsquo;.</p>
<p> Please submit your  nominations by clicking on the links below:</p>
<ul>
  <li>
    <a href="http://marketplace.eclipse.org/admin/node/add/individual-nominations" target="_blank">Individual  	Awards</a> - Top Committer, Top Contributor and Top Newcomer Evangelist</li>
  <li>
    <a href="http://marketplace.eclipse.org/admin/node/add/project-nominations" target="_blank">Project  	Awards</a> - Most Innovative New Feature or Project and Most Open Project</li>
  <li>
    <a href="http://marketplace.eclipse.org/admin/node/add/product-nominations" target="_blank">Technology  	Awards</a> - Best Application, Best Developer Tool and Best Modeling Product</li>
</ul>
<p> The Individual and  Project Award winners will be determined by a vote of the community.  The Technology Award winners will be determined by a panel of judges  selected from Eclipse-oriented editors and Eclipse project leaders.  All winners will be announced at <a href="http://www.eclipsecon.org/2012/" target="_blank">EclipseCon  2012</a>.</p>
<p> The deadline for  nominations is <strong>January  27, 2011</strong>.  You can check out the <a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php" target="_blank">awards  page</a> for further details on the categories and the awards  guidelines.</p>
<p>
  



<p>Press Contact:<br/>
Ian Skerrett<br/>
Eclipse Foundation<br/>
<a href="mailto:ian.skerrett@eclipse.org">ian.skerrett@eclipse.org</a></p>
<br>
<br>	<strong>About the Eclipse Foundation</strong>
	<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.
	</p>
	<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at 
	 <a href="http://www.eclipse.org">www.eclipse.org</a></p>
  

	</div>

	<!-- remove the entire <div> tag to omit the right column! -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.polarsys.org" target="_blank">polarsys.org</a></li>
			</ul>
		</div>
	</div>	
</div>
 

EOHTML;
	$html = mb_convert_encoding($html, "HTML-ENTITIES", "ISO-8859-1");
	$pageTitle = mb_convert_encoding($pageTitle, "HTML-ENTITIES", "ISO-8859-1");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>



