<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "October 2006 Planning Council Minutes";
$pageKeywords	= "planning council minutes";
$pageAuthor		= "Bjorn Freeman-Benson Oct 06";

ob_start();
?>
    <div id="maincontent">
	<div id="midcolumn">
<h1> Eclipse Planning Council Minutes</h1>
<p>October 11, Esslingen, Germany</p>
<table border="0">
  <tbody><tr>
    <td align="center" bgcolor="#cccccc" valign="top"><b>Present</b></td>
    <td align="center" valign="top"><b>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
    <td align="center" bgcolor="#cccccc" valign="top"><b>Regrets</b></td>
  </tr>
  <tr>
    <td valign="top" align="left">Sri Doddapaneni, Intel, TPTP</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"><i>no data</i></td>
  </tr>
  <tr>
    <td valign="top" align="left">Doug Schaefer, QNX, Tools</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Stefan Daume, Scapa</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Bjorn Freeman-Benson, Eclipse</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Doug Gaff, Wind River, DSDP</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">John Graham, Sybase, DTP</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Rich Gronback, Borland</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">John Kellerman, IBM, Platform</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Mika Hoikkala, Nokia</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Yossi Leon, Zend</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Wenfeng Li, Actuate, BIRT</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Ed Merks, IBM, Modeling</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Paul Styles, Compuware</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Tim Wagner, BEA, WTP</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">David Williams, IBM</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Oisin Hurley, IONA, STP</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"></td>
  </tr>
</tbody></table>
<h2>Minutes / Discussion Items</h2>
<p><i> (these notes are in logical rather than
chronological order)</i></p>
<h3>Public Mailing List Archives</h3>
<p>The Planning Council agrees that the eclipse.org-planning-council@eclipse.org
mailing list should be archived and the archives open to the public.</p>
<h3>New Development Process</h3>
<p>Everyone on the Council is reminded to read and comment on the <a href="http://wiki.eclipse.org/index.php/Development_Process_2006_Revision">new
development process wiki page</a>.</p>
<h3>Build Workshop Report</h3>
<p>The Planning Council was pleased with the outcome of the <a href="http://wiki.eclipse.org/index.php/Europa_Build_Workshop_Report">Europa
Build Workshop</a>. It was suggested that we might want to hold more of this
kind of workshop in the future. Bjorn pointed to the CPAN community testing
infrastructure as possible next workshop; others likened it to SETI@HOME for
Eclipse testing.</p>
<p>The Planning Council would also be pleased to see an Eclipse project to
provide a formal home for some of these build tools as long as that project is
not &quot;the Platform releng team supporting everyone else&quot;. A project for
cross-project build (and other) infrastructure would be useful.</p>
<p><u><b><font color="#800080">ACTION</font></b></u>: [Bjorn FB] Suggest a next
workshop to the Council.</p>
<h3>Next Simultaneous Release Name</h3>
<p>At Bjorn's suggestion, in order to avoid the chaos that he always seems to
invoke around choosing a name, Tim suggests that we consider Io as next year's
name. There was general nodding around the table.</p>
<h3>UI Best Practices Working Group Report</h3>
<p>This report was somewhat hampered by the fact that it was delivered in
written form rather than in person. Thus when the council had questions, there
was nobody who could really answer them. The biggest problem was that we were
unsure what the implications were; we didn't want to mandate an unknown set of
requirements. We were also worried that a release review check was too late in
the process to affect change in this release - at best it could generate bugs
for the next release.</p>
<p>Another issue we discussed is &quot;what is usability?&quot; The discussion
centered around the fact that real usability is not the usual red flag items
(duplicate menu items, ugly icons, etc), but more the lack of integration and
lack of features. We felt that perhaps the UI Best Practices were aiming at the
surface problems and not the deeper usability problems.</p>
<p>A third problem is that most projects do not have a &quot;UI Lead&quot; and
since the UI Best Practices talked about a UI Lead, we were not sure how that
was going to work.</p>
<p>We recommend the following to the working group:</p>
<ul>
  <li>Focus on the Europa milestones. Review each milestone and provide feedback
    as we go. For example, the top ten UI glitches per milestone. <i>Input
    instead of meta-input.</i></li>
  <li>Attend the next planning council conference call to provide a report in
    person.</li>
</ul>
<p><u><b><font color="#800080">ACTION</font></b></u>: [UI Best Practices Group]
Attend next conference call.</p>
<h3>Europa Planning</h3>
<p><a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release">Europa</a>
is the simultaneous release of a number of projects plus some update manager
improvements plus (perhaps) adopting some of the UI Best Practices.&nbsp;</p>
<p><u><b><font color="#800080">ACTION</font></b></u>: [All] Read, comment on,
and be prepared to discuss the rules for inclusion in Europa as posted on the
wiki.</p>
<p>A few other notes:</p>
<ul>
  <li>We need a package management working group. <i>Bjorn's notes are not clear
    on what this is.</i></li>
  <li>After Europa, perhaps do some usability studies in anticipation of Io
    planning.</li>
</ul>
<p>We need a central coordinator. David filled that role for Callisto but is
unable (and should not be asked) to do so again for Europa. The call for
volunteers from the Planning Council was met with a telling silence. The Council
believes that this a role that should be staffed by the Foundation.</p>
<p><u><b><font color="#800080">ACTION</font></b></u>: [Bjorn FB] Pass this
request for an EMO-staffed central coordinator on to Mike.</p>
<h3>Wiki</h3>
<p>As a side note, people asked for instructions on how to upload non-image
files to the wiki.</p>
<ol>
  <li>Click on the &quot;Upload file&quot; link on the left menu; follow the
    instructions to upload the file.</li>
  <li>During that process, you will specific that the file is named Foo.doc (or
    something).</li>
  <li>Go to your wiki page and enter text referring to that file and the URL to
    that file. For example: &quot;Here is the document I wrote about how to
    upload files [https://wiki.eclipse.org/index.php/Image:Foo.doc].&quot;</li>
</ol>
<p>More and more of the project web pages are being moved to the wiki. The one
thing that is stopping us from more pages on the wiki is dynamic content
support.</p>
<p><u><b><font color="#800080">ACTION</font></b></u>: [Bjorn FB] Enter a bug to
allow dynamic content in the wiki.</p>
<h3>Europa Milestone Dates</h3>
<p>Will we finalize the dates during our next conference call. We plan to
dynamically reduce the +1/+2 schedules as much as possible - as soon as the
builds are completed and tested, the milestone will be marked complete.</p>
<p><u><b><font color="#800080">ACTION</font></b></u>: [Kevin H] Confirm that the
<a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release#Milestones_and_Release_Candidates">wiki
milestone dates</a> work for the Platform.</p>
<h3>Planning Calls</h3>
<p>Calls will be Wednesdays, 7am PT, 10 ET, 4pm CET, 5pm IT. The schedule of the
calls is posted on <a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release">the
wiki page</a>.</p>
<p><i>Notes taken and posted by Bjorn Freeman-Benson</i></p>
      </div>
  </div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>