<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "June 2006 Planning Council Minutes";
$pageKeywords	= "planning council minutes";
$pageAuthor		= "Bjorn Freeman-Benson Aug 06";

ob_start();
?>
    <div id="maincontent">
	<div id="midcolumn">
<h1> Eclipse Architecture Council Minutes</h1>
<p>October 12, Esslingen, Germany</p>
<table border="0">
  <tbody><tr>
    <td align="center" bgcolor="#cccccc" valign="top"><b>Present</b></td>
    <td align="center" valign="top"><b>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
    <td align="center" bgcolor="#cccccc" valign="top"><b>Regrets</b></td>
  </tr>
  <tr>
    <td valign="top" align="left">Doug Schaefer, QNX, Tools PMC</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"><i>no data</i></td>
  </tr>
  <tr>
    <td valign="top" align="left">Don Ebright, Compuware</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Bjorn Freeman-Benson, Eclipse</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">John Graham, Sybase, DTP</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Richard Gronback, Borland</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Sri Doddapaneni, Intel</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Oisin Hurley, IONA</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Yossi Leon, Zend</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Wenfeng Li, Actuate, BIRT</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Ed Merks, IBM, Modeling</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Kai Nyman, Nokia</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Valentina Popescu, IBM, TPTP</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Michael Scharf, WindRiver, DSDP</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Mark Weitzel, IBM</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Tim Wagner, BEA</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">David Williams, IBM, WTP</td>
    <td valign="top" align="left"></td>
    <td valign="top" align="left"></td>
  </tr>
</tbody></table>
<h2>Minutes / Discussion Items</h2>
<p><i> (these notes are in logical rather than
chronological order)</i></p>
<h3>Public Mailing List Archives</h3>
<p>The Architecture Council agrees that the eclipse.org-architecture-council@eclipse.org
mailing list should be archived and the archives open to the public.&nbsp;</p>
<p><font color="#800080"><u><b>ACTION</b></u></font>: [Bjorn FB] make it so</p>
<h3>New Mentor Role for Architecture Council</h3>
<p>After extensive discussion, the group concluded that they did not see
mentoring new projects as a role for the Architecture Council. The primary
objection related to the fact that most mentoring seemed to be around
development process and this is the Architecture Council. The group agreed that
mentoring was a good idea, if only as a way to extend the Technology and Tools
PMCs on a temporary assignment basis. Additionally, the members of this council
would be (for the most part) happy to serve on a new Mentoring Council.</p>
<h3>Role of the Architecture Council</h3>
<p>There was a rather lengthy discussion of what the role of the Architecture
Council should be. Bjorn pointed out that the Council was been rather
ineffective. Someone brought up that the council needs to have an action focused
goal. Tim Wagner and others pointed out that meeting a few times a year for a
few hours does not provide sufficient time to discuss and solve real
architectural problems.</p>
<p><font color="#800080"><u><b>ACTION</b></u></font>: [All] Bring ideas for such
goals to the November conference call.</p>
<h3>Ask The Architecture Council</h3>
<p>Michael Scharf and Wenfeng Li will put together an &quot;Ask The Architecture
Council&quot; forum. Perhaps the forum is just the cross-projects-issues-dev@
mailing list and the forum simply needs to be advertised. Irregardless, the idea
that there is a forum for Committers to engage in a Q&amp;A with the
Architecture Council.</p>
<p><font color="#800080"><u><b>ACTION</b></u></font>: [Michael S &amp; Wenfeng
L] Establish the forum.</p>
<h3>Catalog of Consumable Components</h3>
<p>Oisin Hurley and John Graham will start a catalog of consumable components as
delivered from the individual projects.</p>
<p><font color="#800080"><u><b>ACTION</b></u></font>: [Oisin H &amp; John G]
Define the structure of, and begin provisioning, the catalog.</p>
<h3>JVM Issue</h3>
<p>Each plug-in should specify its execution environment. The Architecture
Council is not going to mandate or prohibit individual projects from moving to
1.5 as they see necessary to support their customers. For further discussion,
the reader is referred to the <a href="/org/councils/20060628ACMinutes.php">previous
council minutes</a>.</p>
<p><font color="#800080"><u><b>HELD OVER ACTION</b></u></font>: [Ed Merks, Michael Scharf]
draft the initial wiki page describing the implications of changing to
1.5.&nbsp;</p>
<h3>Monthly Conference Calls</h3>
<p>It was hard to tell what the consensus was. The group agreed to have a call
in November for a report on the status of the two initiatives.</p>
<p>ACTION: [All] Conference call November 9th, 9am PT, noon ET, 6pm CET. <i>    613.287.8000
or   866.362.7064<br>
passcode 874551#</i></p>
<p><i>Notes taken and posted by Bjorn Freeman-Benson</i></p>
      </div>
  </div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>