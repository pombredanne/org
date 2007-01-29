<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Promote EclipseCon and Win a Free Registration";
	$pageKeywords	= "EclipseCon 2007";
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
		<h2>Community Bulletin</h2>
		
<p>Help promote <a href="http://eclipsecon.org/">EclispeCon 2007</a>, being held on March 5th to 8th at the Santa
Clara Convention Center, and win a free registration.  There are three
simple steps to be eligible to win your registration:
<ul>
<li>Register yourself or a friend for EclipseCon on or before February 1st, 2007</li>
<li>Do something creative to help promote EclipseCon 2007 on or before February 4th, 2007</li>
<li>Send an email describing your promotion to <a href="mailto:promotion@eclipsecon.org">promotion@eclipsecon.org</a></li>
</ul>
</p>

<p>
At least one prize will be awarded to the entry or entries considered most
creative and original (catchy blog entry, youtube video, flash animation,
etc).  Plus, at least one prize will be awarded to the entry or entries considered
to be most effective at reaching the largest EclipseCon target audience
(email to your developer network, prominent placement on your website, 
highly voted <a href="http://www.dzone.com/">dzone</a> blog entry, etc).
The Eclipse Foundation additionally reserves to right to  award fleeces
and other cool Eclipse swag to great submissions.  Conference Registration winners 
will be notified by February 7th and their conference fees refunded.
</p>

<p>Please send questions to: <a href="mailto:promotion@eclipsecon.org">promotion@eclipsecon.org</a>.

</p>		


	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

