
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Announcing the EclipseCon Audition Sessions";
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

		<p>The Eclipse Foundation is pleased to announce the EclipseCon Audition Sessions, a chance for people
		interested in presenting at EclipseCon to try out their ideas with the program committee and community.
		Each year, hundreds of great session proposals are submitted to the EclipseCon Program Committee. 
		Unfortunately, the conference never has enough space to accept all the proposals. This year we want to
		give you the opportunity to present a short version of your proposal to the program committee and
		community. This is your chance to audition for an EclipseCon speaking slot.</p>

		<p>The auditions will be held using the <a href="http://en.wikipedia.org/wiki/Ignite_%28event%29">
		Ignite format</a>. Each speaker will have 5 minutes to present 20 slides, and the slides change
		automatically every 15 seconds. The audition sessions will occur on November 18 and be broadcast via
		a <a href="https://www2.gotomeeting.com/register/646158018">webinar</a>.  Your presentation should be a
		condensed version of your proposed content rather than background on the target audience or session goals.
		To apply for an audition you
		need to:<br>
		1. <a href="http://www.eclipsecon.org/2011/submissions/?page=submissions">Submit an EclipseCon proposal</a><br>
		2. Send an e-mail to <a href="mailto:audition@eclipse.org">audition@eclipse.org</a> with your name and
		the link to your proposal<br><br>
		The deadline to apply for an audition is November 15, 2010 and your slides must be submitted by November
		17, 2010. The winner of the EclipseCon Audition Sessions will receive a speaker slot at EclipseCon.</p>
		
		<p>As a reminder, November 17, 2010 is the deadline to be considered for one of EclipseCon's top five
		early picks. The program committee will select 5 speakers from the proposals submitted before November 17.
		The final deadline for all submissions is November 30, 2010.</p>
		
		<p><a href="http://www.eclipsecon.org/2011/">EclipseCon 2011</a> is March 21-24 in Santa Clara,
		California.  Very early registration is now open and sponsorship packages are available.</p>
		
 <br><br>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="https://www2.gotomeeting.com/register/646158018">Watch the EclipseCon Auditions</a></li>
				<li><a href="http://www.eclipsecon.org/2011/submissions/?page=submissions">Propose an EclipseCon Talk</a></li>
				</ul>
		</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

