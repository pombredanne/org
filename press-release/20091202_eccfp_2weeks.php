
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "2 Weeks Left for the EclipseCon Call for Papers";
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
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
		<p>There are 2 weeks left to <a href="http://www.eclipsecon.org/2010/submissions/">submit your
		talk</a> for EclipseCon 2010!</p> 

		<p>EclipseCon will feature talks on a wide variety of subjects, including e4, mobile & embedded,
		modeling, runtime, tools and more! Remember that this year, the conference is being organized
		around three themes: 
		<ul>
			<li><strong>Making with Eclipse</strong> - how people use Eclipse to create great software. 
			<li><strong>Making at Eclipse</strong> - state-of-the-nation talks about Eclipse projects and how people can use the technology. 
			<li><strong>Making Community</strong> - how can Eclipse projects and the wider Eclipse community continue to grow and prosper. 
		</ul>
		</p>

		<p>Contribute to the community by <a href="http://www.eclipsecon.org/2010/submissions/">making a proposal</a>
		or <a href="https://www.eclipsecon.org/submissions/2010/search.php?search=*">reviewing submissions</a>.
		The call for participation deadline is December 18.</p>

		<p>EclipseCon 2010 is March 22-25, 2010 in Santa Clara, CA. <a href="http://www.eclipsecon.org/2010/registration/">Registration</a>
		is already open.</p>


 	</div>
 	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


