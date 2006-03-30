<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "March 20, 2006 Members Meeting";
$pageKeywords	= "members meeting, foundation";
$pageAuthor		= "Donald Smith";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">

</head>



<h1>Members Meeting, March 20, 2006</h1>
<h2>Minutes, Santa Clara Convention Center 1pm-5pm</h2>

<h3>Attendees</h3>
<p>There were approximately 130 members present representing over 
70 member companies.</p>

<h3>Invited Speakers</h3>
<p>Brent Willams spoke about the value of the Eclipse Ecosystem at large, but also
the economic values of belonging to Eclipse.  His presentation can be
<a href="BrentWilliams-EclipseMembersMeetingMar20-06">found here</a>.
</p>

<p>
</p>

<p>
</p>

<p>
</p>
 
      </div>
  </div>
<?php
	# Paste your HTML content between the EOHTML markers!	
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
