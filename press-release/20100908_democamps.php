
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Join us for Eclipse DemoCamps and Campus DemoCamps";
	$pageKeywords	= "eclipse, demo, camp";
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

		<p>During the month of November, the Eclipse community will be hosting
		<a href="http://wiki.eclipse.org/Eclipse_DemoCamps_November_2010">DemoCamps</a> in cities around the world.
		Typically a DemoCamp consists of a series of short demos and presentations from developers building new
		and interesting solutions with Eclipse.  It is a great way to discover and learn about new Eclipse
		technology.  There are also many opportunities for informal conversation and networking, so DemoCamps are a
		great way to connect with colleagues and friends.</p>

		<p>For this series, the Foundation is introducing a new program to reach out to the academic and student
		communities.  Building on the success of our regular DemoCamp series, we invite
		university students and professors to <a href="http://www.eclipse.org/community/democamp/organizecampus.php">organize Campus DemoCamps</a>.
		Campus DemoCamps are special because demos will be presented by students and professors on topics like class
		projects using Eclipse, overviews of Eclipse projects, tips and tricks in Eclipse and anything
		else Eclipse-related of interest to students.</p>
		
		<p>Check-out the <a href="http://wiki.eclipse.org/Eclipse_DemoCamps_November_2010">list of cities hosting
		DemoCamps</a> and consider signing up to demo what you
		are doing with Eclipse, or <a href="http://www.eclipse.org/community/democamp/organizedemocamp.php">organize your own event</a>.
		We look forward to seeing you!</p>
		
 <br><br>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/Eclipse_DemoCamps_November_2010">DemoCamp List</a></li>
				<li><a href="http://www.eclipse.org/community/democamp/organizedemocamp.php">Organize a DemoCamp</a></li>
				<li><a href="http://www.eclipse.org/community/democamp/organizecampus.php">Organize a Campus DemoCamp</a></li>
				</ul>
		</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

