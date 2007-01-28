<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "January 2007 Architecture Council Minutes";
$pageKeywords	= "architecture council minutes";
$pageAuthor		= "Bjorn Freeman-Benson";

ob_start();
?>
    <div id="maincontent">
	<div id="midcolumn">
<h1> Eclipse Architecture Council Minutes</h1>
<p>January 24, 2007, Burlingame, California</p>
<table border="0">
  <tbody><tr>
    <td align="center" bgcolor="#cccccc" valign="top"><b>Present</b></td>
    <td align="center" valign="top"><b>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
    <td align="center" bgcolor="#cccccc" valign="top"><b>Regrets</b></td>
  </tr>
  <tr>
    <td valign="top" align="left">Sri Doddapaneni, Intel, TPTP</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Bjorn Freeman-Benson, Eclipse</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">John Graham, Sybase, DTP</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Rich Gronback, Borland</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Kevin Haaland, IBM, Platform</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Yossi Leon, Zend</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Wenfeng Li, Actuate, BIRT</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Ed Merks, IBM, Modeling</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Michael Scharf, DSDP, Wind River</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Jess ?, BEA</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">David Williams, IBM</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Oisin Hurley, IONA, STP</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Scott Lewis, ECF</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Brian Carroll, ALF, Serena</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Patt Huff, IBM</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Valentina Popescu, TPTP, Intel</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
  <tr>
    <td valign="top" align="left">Don Ebright, STP, Compuware</td>
    <td valign="top" align="center"></td>
    <td valign="top" align="left"></td>
  </tr>
</tbody></table>
<h2>Minutes / Discussion Items</h2>
<h3>Report on &quot;Ask The Architecture Council&quot;</h3>
<p>Major point of discussion was that the cross-project-issues-dev mailing list
is actually working so how is the Ask the Architecture Council different? How
will a developer know to Ask the Architecture Council instead of using the
cross-project list? ... After some discussion, it was concluded this is a
collection development issue: find the relevant architecture discussions and
answers across mailing lists, wiki, blogs, design docs, etc. and then collecting
them (aggregating them) onto a single wiki page. The council would also like to
see a &quot;Digg&quot; like system for Eclipse items (web pages, etc).</p>
<p><b><u>ACTION</u></b>: [Oisin H] Create the initial wiki page and nag/motivate
people to contribute to it.</p>
<h3>Report on &quot;Catalog of Consumable Components&quot;</h3>
<p>Major point of discussion is that unless this is automatically maintained, it
will go out of date so rapidly as to be useless. It has to be automatic and of
value to the producer in order to be self-sustaining. Another point of
discussion was that if consumer project A wants to reuse a component of producer
project B but in a different packaging than producer currently supports, then
the consumer is asking for the producer project to do work for consumer's (but
not the producer's) benefit.&nbsp;</p>
<p>The council held a vote and a overwhelming major felt that the catalog was
not a good idea.<br>
A second vote on whether it is valuable to have a standard way to publish
component information to the website resulted in Oisin volunteering to take the
discussion to the mailing list.</p>
<p><b><u>ACTION</u></b>: [Oisin H] Continue this discussion on the mailing list.</p>
<h3>JVM 5 Wiki Page</h3>
<p>Ed Merks wrote up a wiki page with a few notes, he is also putting together
an EclipseCon presentation. The Council agreed that this is one of the roles on
the Architecture Council: to take our aggregated knowledge of this kind of issue
and mentor the project teams about their options and decision making. We are not
telling them what to do - merely explaining the options.</p>
<h3>Top Ten Architectural Problems</h3>
<p>Discussion of the process for gathering these top ten architectural problems.
David and Yossi have each added an item, but nobody else has. Overall, we want
to avoid this being a &quot;complain to the Platform team&quot; forum. David
brought up the point (and it was agreed) that in any big project it is important
for the senior people to state what the big problems are so that developers can
keep them&nbsp; in mind as build systems. The idea is that this is about <i>focus</i>
rather than being bugzilla-like complaints because in the end only contributing
resources (actually, really only contributing people) gets things changed in an
open source project.</p>
<p><b><u>ACTION</u></b>: [Michael S] Add his two items to the wiki page</p>
<p><b><u>ACTION</u></b>: [Bjorn FB] Standing agenda item for calls to discuss
the top architectural problems</p>
<h3>Architecture Council Identity Crisis</h3>
<p>The basic question is &quot;is it worth meeting face to face once a
quarter&quot;? (There was a question about whether the <a href="http://www.eclipse.org/org/documents/Eclipse%20BYLAWS%202003_11_10%20Final.pdf">Bylaws</a>
require these meetings, but upon re-checking the Bylaws, we could not find a
requirement.) Brian explained that the OMG's architecture council is very
effective at guiding new proposed projects to create a coherent architecture -
this basically matches the architecture council's new role as mentors.</p>
<p>There was unanimous agreement that having the Council meet for trivial tasks
(block structure diagrams) was a complete waste of time and nobody does the work
anyway - there's just no benefit in it. There was also consensus that we should
continue to have monthly phone calls and a once-a-year face-to-face meeting at
EclipseCon.</p>
<p><b><u>ACTION</u></b>: [Bjorn FB] Cancel the F2F at EclipseCon</p>
<p><b><u>ACTION</u></b>: [Bjorn FB] Standing agenda item: review recent project
proposals</p>
<p>Be it resolved, then, that the Architecture Council has evolved into a
council of senior developers who help guide (mentor) the architectural
consistency of Eclipse, consult by phone with each other and meet face-to-face
only when specific technical issues arise. These face-to-face meetings will be
workshop style and may not involve any Architecture Council members because
other developers from the projects may be more useful (e.g., the build
workshop).</p>
<p><i>Notes taken and posted by Bjorn Freeman-Benson</i></p>
      </div>
  </div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>