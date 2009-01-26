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

<strong>Monday, March 23, 2009<br>
New Member Jumpstart - 9:30am-11:30am<br>
Full Members Meeting - 1:30pm-5:30pm<br>
Santa Clara Convention Center, Santa Clara, CA<br>
(co-located with EclipseCon 2009)</strong>
<br><br>

<P>The annual general meeting is your opportunity to better understand what is happening in the 
Eclipse community and what to expect in 2009.  Shortly after the meeting there will be a 
members-only networking reception.  Here is the agenda:</P>


<ul>
<li>Executive Director Update, Mike Milinkovich</li>
<li>Guest Speaker Matt Aslett, 451 Group, "Open Source is not a business model"</li>
<li>Guest Speaker Jagan Nemani, Deloitte Consulting, "Co-innovation and Creation - Lessons from World of Warcraft"</li>
<li>Marketing, Membership and Europe Updates (Ian Skerrett, Donald Smith, Ralph Mueller)</li>
<li>Project Updates</li>
<li>New Member Introductions</li>
</ul>

<p>The New Member Jumpstart is ideally suited for people new to the Eclipse Ecosystem either 
technical or business/marketing.   It will introduce the role of the Eclipse Foundation, the 
governance structure and provide insight into the organization of the different projects.</p>

<P><Strong>Registration Information</strong></p>

<p>Please RSVP for the Jumpstart, Members Meeting and/or Marketing Symoposium via email to
<a href="mailto:members.meeting@eclipse.org">members.meeting@eclipse.org</a>.
Please indicate which of the following you will attend:<br>
* I will be attending the New Member Introduction on Monday March 23rd 9:30-11:30am<br>
* I will be attending the Annual General Meeting of the Eclipse Membership on March 23rd, 1:30-5:30pm<br>
* I will be attending the Annual General Meeting Reception on March 23rd, ~6/7pm-9pm<br>
</p>

<p>There is no cost to attend the Members Meeting or Jumpstart.</p>

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

