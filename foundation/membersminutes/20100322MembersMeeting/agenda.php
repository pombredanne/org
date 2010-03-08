<?php
  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "2010 Annual General Meeting of the Eclipse Foundation";
	$pageKeywords	= "eclipse, open source, strategy, meeting, memebers";
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
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>

		<p>
		<strong>Monday, March 22, 2009<br>
		Hyatt Regency, Santa Clara, CA<br>
		(co-located with EclipseCon 2010)<br></strong>
		<p>

		<ul>
			<li>Full Members Meeting - 1:30pm-5:00pm - Camino Real Room</li>
			<li>Reception - 5:45pm-7:15pm - Hyatt pool area outside</li>
		</ul>

		<h3>Full Members Meeting</h3>
		<p>
		The annual general meeting is your opportunity to better understand what is happening in the 
		Eclipse community and what to expect in 2010. Here is the agenda:</p>
		<p>
		<ol>
			<li>Introductions</li>
			<li>Application Development Trends in 2010 and Beyond - Guest Speaker Jeffrey Hammond, Forrester Research</li>
			<li>Project Updates: e4, Gemini, Virgo</li>
			<li>Executive Director Report - Mike Milinkovich, Eclipse Foundation</li>
			<li>Eclipse Foundation in 2015 Panel Discussion</li>
		</ol>
		</p>

		<h3>Reception</h3>
		<p>
		At approximately 5:45pm there will be a members-only networking reception - it will be in the 
		Hyatt pool area (weather permitting) or otherwise follow the sounds of partying in the Hyatt!
		Thanks to Oracle for sponsoring the Member Reception.
		</p>

		<h3>Registration Information</h3>
		<p>
		Please RSVP for the Members Meeting via email to
		<a href="mailto:members.meeting@eclipse.org">members.meeting@eclipse.org</a>.
		</p>

		<p>There is no cost for members to attend any of these meetings.</p>

<br>
<br>

	  </div>
      </div>
  </div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php
/*
 * Created on 20-Jan-2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>

