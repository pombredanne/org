<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse In The Large Webinar";
	$pageKeywords	= "eclipse, enterprise";
	$pageAuthor		= "Donald Smith";
	
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
		<p><em>This page is DRAFT, not complete and not yet meant to be shared.</em></p>
		<h2>Community Bulletin</h2>
		
		<p>IT departments of large enterprises face unique challenges deploying Eclipse to thousands, 
		and even tens of thousands of their developers.  Join us on December 14th, 2009 for a webinar that 
		will include
		speakers from Cisco, Morgan Stanley and eBay about some of the key challenges they face,
		and steps they have taken to address.</p> 
		
		<p>Format and Agenda:<br>
		Each speaker will present for up to 20 minutes, followed by up to 10 minutes Q&A.  Each speaker
		has identified four key topics they find most challenging and will discuss:
		<ul>
			<li>Dennis Vaughn, Cisco</li>
				<ul>
					<li>Scalability (65k + source files)</li>
					<li>Diverse Deployments (Geographically, NFS, OS/Versions)</li>
					<li>Engineering Environment Diversity (Legacy Tools, Acquisitions)</li>
					<li>Working Culture - (Curmudgeons versus New Hires, ROI versus VI/Emacs)</li>
				</ul>
			<li>Miles Daffin, Morgan Stanley</li>
				<ul>
					<li>Enterprise constraints and their consequences for Eclipse Provisioning
					<ul>
						<li>Zen and the Art of creating and maintaining a private Eclipse environment behind the corporate firewall</li> 
						<li>Enterprise Eclipse Provisioning Requirements - functional and non-functional</li>
						<li>Meeting the requirements - how have we coped?</li>
						<li>What problems still exist? (Global configuration and increasing security.)</li>
					</ul></li>
					
					<li>Next steps: further reduce Total Cost of Ownership and provide more useful features as needed
						<ul>
							<li>Improve B3 Tooling to make Aggregation builds (mirrors) easier to debug</li>
							<li>Automation of Aggregation builds</li>
							<li>Workspace provisioning</li>
							<li>Usage Tracking</li>
						</ul>
					</li>
				</ul>
			<li>Joep Rottinghuis, eBay</li>
				<ul>
					<li>Scalability (100k + source files)</li>
					<li>Deployment (individualized workspaces)</li>
					<li>Usage Tracking (who is using what, and what issues are in what versions)</li>
					<li>Manifest Maintenance (OSGi Bundle/Package versions)</li>
				</ul>
		</ul>
		</p>
		
		<p>This webinar is open to the public via web conference - to ensure your system is compatible,
		please register in advance [LINK TBD].
		<ul>
			<li>Registration link [TBD]</li>
			<li>Date: December 14, 2009</li>
			<li>Time: 9am Pacific, Noon Eastern, 17:00 CET</li>
		</ul>

	
		
		</p>
 

 	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>



