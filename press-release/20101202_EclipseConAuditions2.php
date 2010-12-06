
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon Audition Sessions, Take 2";
	$pageKeywords	= "eclipse, eclipsecon, audition, program, ignite";
	$pageAuthor		= "Lynn Gayowski";
	
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

		<p>The EclipseCon program committee is holding another series of auditions on December&nbsp;15, 2010.
		 If you're interested in speaking at EclipseCon, the audition sessions are your chance to present a short
		 version of your talk proposal to the program committee and the Eclipse community.  These auditions are
		 your last chance to demonstrate ideas that the words in your submission couldn't fully capture.
		 The winning audition will be given a speaking slot at EclipseCon.</p>
		
		<p>The auditions will once again be held using the <a href="http://en.wikipedia.org/wiki/Ignite_%28event%29">
		Ignite format</a>. Each speaker will have 5 minutes to present 20 slides, and the slides will change
		automatically every 15 seconds. The audition sessions will occur on December 15 and be broadcast via
		a <a href="https://www2.gotomeeting.com/register/522096419">webinar</a>.  Your presentation should be a
		condensed version of your proposed content rather than background on the target audience or session goals.</p>
		
		<p>To apply for an audition you
		need to:<br>
		1. Have <a href="http://www.eclipsecon.org/2011/submissions/?page=submissions">submitted an EclipseCon proposal</a><br>
		2. Send an e-mail to <a href="mailto:audition@eclipse.org">audition@eclipse.org</a> with your name and
		the link to your proposal</p>
		
		<p>The deadline to apply for an audition is December 13, 2010 and your slides must be submitted by December
		14, 2010. You can check out the <a href="http://live.eclipse.org/node/989">auditions from the first
		round</a> to see the high standards set by these presenters.</p>
		
		<p><a href="http://www.eclipsecon.org/2011/">EclipseCon 2011</a> is March 21-24 in Santa Clara,
		California.  Very early registration is now open and sponsorship packages are available.</p>
			
 <br><br>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="20101202_EclipseConAuditions2.php">What are EclipseCon Auditions?</a></li>							
				<li><a href="https://www2.gotomeeting.com/register/522096419">Watch the EclipseCon Auditions, Take 2</a></li>
				<li><a href="../../community/EclipseConAuditions2_2010.php">EclipseCon Audition Agenda</a></li>
				<li><a href="http://www.eclipsecon.org/2011/submissions/?page=submissions">EclipseCon Talk Proposals</a></li>
			</ul>
		</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

