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
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
		<p>IT departments of large enterprises face unique challenges deploying Eclipse to thousands, 
		and even tens of thousands, of their developers.  Join us on December 14, 2009 for a webinar that 
		will include
		speakers from Cisco, Morgan Stanley and eBay about some of the key challenges they face,
		and steps they have taken to address these issues.</p> 
		
		<p><b>Format and Agenda:</b><br>
		Each speaker will present for up to 20 minutes, followed by up to 10 minutes of Q&A.  Each speaker
		has identified key topics they find most challenging.  They will discuss:
		<ul>
			<li><b>Dennis Vaughn, Cisco</b></li>
				<ul>
					<li>Scalability (65k + source files)</li>
					<li>Diverse Deployments (geographically, NFS, OS/Versions)</li>
					<li>Engineering Environment Diversity (legacy tools, acquisitions)</li>
					<li>Working Culture (curmudgeons versus new hires, ROI versus VI/Emacs)</li>
				</ul>
			<li><b>Miles Daffin, Morgan Stanley</b></li>
				<ul>
					<li>Enterprise Constraints and their Consequences for Eclipse Provisioning
					<ul>
						<li>Zen and the Art of creating and maintaining a private Eclipse environment behind the corporate firewall</li> 
						<li>Enterprise Eclipse provisioning requirements - functional and non-functional</li>
						<li>Meeting the requirements - how have we coped?</li>
						<li>What problems still exist? (global configuration and increasing security.)</li>
					</ul></li>
					
					<li>Next Steps: Further Reduce Total Cost of Ownership and Provide more Useful Features as Needed
						<ul>
							<li>Improve B3 tooling to make aggregation builds (mirrors) easier to debug</li>
							<li>Automation of aggregation builds</li>
							<li>Workspace provisioning</li>
							<li>Usage Tracking</li>
						</ul>
					</li>
				</ul>
			<li><b>Joep Rottinghuis, eBay</b></li>
				<ul>
					<li>Scalability (100k + source files)</li>
					<li>Deployment (individualized workspaces)</li>
					<li>Usage Tracking (who is using what, and what issues are in what versions)</li>
					<li>Manifest Maintenance (OSGi bundle/package versions)</li>
				</ul>
		</ul>
		</p>
		
		<p><b>Webinar Details:</b><br>
		This webinar is open to the public via web conference - to ensure your spot, please register now by
		email to <a href="mailto:live@eclipse.org">live@eclipse.org</a>.
		<ul>
			<li>Registration: email <a href="mailto:live@eclipse.org">live@eclipse.org</a></li>
			<li>Date: December 14, 2009</li>
			<li>Time: 9:00 am PST, 12:00 pm EST, 5:00 pm GMT, 6:00 pm CEST -
			<a href="http://www.timeanddate.com/worldclock/fixedtime.html?month=12&day=14&year=2009&hour=17&min=0&sec=0&p1=0" target=”blank”>Convert to other time zones</a></li>
		</ul>
		
		</p>
 

 	</div>
 	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>



