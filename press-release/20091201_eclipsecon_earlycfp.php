
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Early EclipseCon Submissions Qualify for Early Bird Selection";
	$pageKeywords	= "eclipse, eclipsecon, call for papers, 2010, submissions, early bird, program";
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
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
		<p>There are 2 weeks left to <a href="http://www.eclipse.org/go/EC10_cfp@cbdec2">submit your
		talk</a> for EclipseCon 2010! The call for participation deadline is <b>December 18</b>.</p>

		<p>However, we want you to submit your session proposal early, rather than waiting until December 18.
		Therefore, if you submit a session by December 10, you will be eligible for the early bird program
		selection. The program committee will pick 5 great talks for the EclipseCon
		schedule from those submitted by December 10.  The submitters of the 5 chosen talks will also be
		awarded an Eclipse shirt! The early bird selections will be announced December&nbsp;14.</p> 

		<p>EclipseCon will feature talks on a wide variety of subjects, including e4, mobile & embedded,
		modeling, runtime, tools and more! This year, the conference is being organized
		around three themes: 
		<ul>
			<li><strong>Making with Eclipse</strong> - how people use Eclipse to create great software. 
			<li><strong>Making at Eclipse</strong> - state-of-the-nation talks about Eclipse projects and how people can use the technology. 
			<li><strong>Making Community</strong> - how Eclipse projects and the wider Eclipse community can continue to grow and prosper. 
		</ul>
		</p>

		<p>Contribute to the community by <a href="http://www.eclipse.org/go/EC10_cfp@cbdec2">making a proposal</a>
		or <a href="https://www.eclipsecon.org/submissions/2010/search.php?search=*">reviewing submissions</a>.
		Don't miss out on the early bird program selection!
		</p>

		<p>EclipseCon 2010 is March 22-25, 2010 in Santa Clara, CA. <a href="http://www.eclipse.org/go/EC10_register@cbdec2">Registration</a>
		is already open and <a href="http://www.eclipse.org/go/EC10_sponsor@cbdec2">sponsorship
		packages</a> are available.</p>


 	</div>
 	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


