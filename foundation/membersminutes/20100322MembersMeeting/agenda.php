<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "2010 Annual General Meeting";
$pageKeywords	= "strategy, open source, eclipse, meeting";
$pageAuthor		= "Lynn Gayowski";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">
</head>

<br>
<h1>2010 Annual General Meeting of the Eclipse Foundation</h1>

<p><strong>
Monday, March 22, 2009<br>
Hyatt Regency, Santa Clara, CA<br>
(co-located with EclipseCon 2010)<br>
</strong><p>

<p><ul>
	<li>Full Members Meeting - 1:30pm-5:00pm - Camino Real Room</li>
	<li>Reception - 5:45pm-7:15pm - Hyatt pool area outside</li>
</ul></p>

<h3>Full Members Meeting</h3>
<p>The annual general meeting is your opportunity to better understand what is happening in the 
Eclipse community and what to expect in 2010. Here is the agenda:</p>

<p><ol>
<li>Introductions</li>
<li>Guest Speaker Jeffrey Hammond, Forrester Research, "Application Development Trends in 2010 and Beyond"</li>
<li>Project Updates</li>
<li>Executive Director Report, Mike Milinkovich, Eclipse Foundation</li>
<li>Panel Discussion, "Eclipse Foundation in 2015"</li>
</0l></p>

<h3>Reception</h3>
<p>At approximately 5:45pm there will be a members-only networking reception - it will be in the 
Hyatt pool area (weather permitting) or otherwise follow the sounds of partying in the Hyatt!</p>

<h3>Registration Information</h3>

<p>Please RSVP for the Members Meeting via email to
<a href="mailto:members.meeting@eclipse.org">members.meeting@eclipse.org</a>.
</p>

<p>There is no cost for members to attend any of these meetings.</p>

<br>
<br>

      </div>
  </div>
<?php
	# Paste your HTML content between the EOHTML markers!	
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

