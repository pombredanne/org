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
<a href="BrentWilliams-EclipseMembersMeetingMar20-06.pdf">found here</a>.
</p>

<p>
Kevin Haaland provided an update on the Platform Project.  
His presentation can be 
<a href="KevinHaaland-EclipseMembersMeetingMar20-06.pdf">found here</a>.</p>


<p>
Andi Gutmans, Guy Harpaz and Stew Nickolas provided and update and demonstration
on the Eclipse PHP project.  The demonstation was live and not captured 
for replay online.
</p>
 
<p>
Stew Nickolas presented a details of a project using Ajax and Eclipse.  The presentation
can be
<a href="StewNickolas-EclipseMembersMeetingMar20-06.pdf">found here</a>.
</p>

<p>
Mike Taylor kicked off a Market Reseach working group and is looking for
community involvement.  If you would like to be involved in the working group
please contact mike_taylor (at) instantiations.com.  Mike's presentation can be
<a href="MikeTaylor-EclipseMembersMeetingMar20-06.pdf">found here</a>.
</p>

<p> There were five lighting talks.  Many were demos or impromptu and therefore
slides will not be posted.  Andreas Keis presented the role of Eclipse at
EADS, and why it was selected.  Sebastian Meyen talked about S&S and Eclipse
and announce an Eclipse programming challenge for Eclipse Magazin with a 20,000
euro prize.  Shoji Ueda took time from a family vacation to show us a hardware
debugger he has built with Eclipse.  Dave Klavon talked about the Geronimo
WTP plugin for Eclipse.  Martin Lippert talked about the work going on in the
Spring community regarding OSGi, and also talked about server-side OSGi in 
general.
</p>

<h3>Foundation Speakers<h3>

<p>
Mike Milinkovich provided an update on the Foundation and the Ecosystem.  His presentation can be
<a href="MikeMilinkovich-EclipseMembersMeetingMar20-06.pdf">found here</a>.

</p>

<p>
Ian Skerrett provided a marketing update.  His presentation can be 
<a href="IanSkerrett-EclipseMembersMeetingMar20-06.pdf">found here</a>.

</p>

<p>
Ralph Mueller provided a lighthearted update to the membership on his first 100 days of activity in Europe.
His presentation can be 
<a href="RalphMueller-EclipseMembersMeetingMar20-06.pdf">found here</a>.

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
