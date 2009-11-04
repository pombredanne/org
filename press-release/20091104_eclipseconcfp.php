
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon 2010 Call for Papers is Now Open";
	$pageKeywords	= "eclipse, eclipsecon, call for papers";
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
		
		<p>It is time to start thinking about submitting a talk for <a href="http://www.eclipsecon.org/2010/">EclipseCon 2010</a>.  The submission systems is 
		running, the program committee is ready, so now it is up to you to <a href="http://www.eclipsecon.org/2010/submissions/">submit a great talk.</a> </p> 

 		<p>This year the conference is being organized around three themes: 
		<ul>
			<li><strong>Making with Eclipse</strong> – how people use Eclipse to create great software. 
			<li><strong>Making at Eclipse</strong> – state-of-the-nation talks about Eclipse projects and how people can use the technology. 
			<li><strong>Making Community</strong> – how can Eclipse projects and the wider Eclipse community continue to grow and prosper. 
		</ul>
		</p>

		<p>More importantly, we want people to talk about the really great stuff at Eclipse.  For example, tell us why e4 
		is the future you want now, how modeling really is the future of software development, how Eclipse runtime 
		technology and OSGi is making your life easier or how an Eclipse project is changing your world.  EclipseCon is a 
		technical conference, so make sure it appeals to technologists - if you have a commercial product tell us how you 
		created it using Eclipse technology, but please no sales pitches. </p>

		<p>The deadline for <a href="http://www.eclipsecon.org/2010/submissions/">submissions</a> is December 18.  
		The program will be selected by January 8, 2010, so don’t be late.</p>

		<p>EclipseCon 2010 is March 22-25, 2010 in Santa Clara, CA.  Individuals can now <a href="http://www.eclipsecon.org/2010/registration/">register</a> for the conference 
		and organizations can now sign-up as a sponsor.  </p>


 	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


