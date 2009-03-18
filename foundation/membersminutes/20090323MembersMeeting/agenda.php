<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "2009 Annual General Meeting";
$pageKeywords	= "strategy, open source, eclipse";
$pageAuthor		= "Donald Smith";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">
</head>

<br>
<h1>2009 Annual General Meeting of the Eclipse Foundation</h1>

<p><strong>
Monday, March 23, 2009<br>
Santa Clara Convention Center, Santa Clara, CA<br>
(co-located with EclipseCon 2009)<br>
</strong><p>

<p><ul>
	<li>New Member Jumpstart - 9:30am-11:30am - Ballroom JK</li>
	<li>Full Members Meeting - 1:30pm-5:30pm - Ballroom JK</li>
	<li>Reception - ~6:30pm-9:00pm - Follow the sounds of partying</li>
</ul></p>

<h3>New Member Jumpstart</h3>
<p>The New Member Jumpstart is ideally suited for people new to the Eclipse Ecosystem either 
technical or business/marketing.   It will introduce the role of the Eclipse Foundation, the 
governance structure and provide insight into the organization of the different projects.</p>

<h3>Full Members Meeting</h3>
<p>The annual general meeting is your opportunity to better understand what is happening in the 
Eclipse community and what to expect in 2009. Here is the agenda:</p>

<p><ul>
<li>Guest Speaker Matt Aslett, 451 Group, "Open Source is not a business model"</li>
<li>Guest Speaker Jagan Nemani, Deloitte Consulting, "Co-innovation and Creation - Lessons from World of Warcraft"</li>
<li>BREAK</li>
<li>Executive Director Update, Mike Milinkovich</li>
<li>Mylyn Project Update, Mik Kersten</li>
<li>Silverlight Development Toolkit update, Yves Yang</li>
<li>e4 Update, Mike Milinkovich</li>
<li>Marketing and Europe Updates (Ian Skerrett, Donald Smith, Ralph Mueller) (Time Permitting)</li>

</ul></p>

<h3>Reception</h3>
<p>At approximately 6:30pm there will be a members-only networking reception - it will be in the 
Hyatt pool area (weather permitting) or otherwise follow the sounds of partying coming 
from the Santa Clara Convention Center!</p>

<h3>Registration Information</h3>

<p>Please RSVP for the Jumpstart, Members Meeting and/or Reception via email to
<a href="mailto:members.meeting@eclipse.org">members.meeting@eclipse.org</a>.
Please indicate which of the following you will attend:<br>
* I will be attending the New Member Introduction on Monday March 23rd, 9:30am-11:30am<br>
* I will be attending the Annual General Meeting of the Eclipse Membership on March 23rd, 1:30pm-5:30pm<br>
* I will be attending the Annual General Meeting Reception on March 23rd, ~6:30pm-9:00pm<br>
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

