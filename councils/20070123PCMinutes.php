<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "October 2006 Planning Council Minutes";
$pageKeywords	= "planning council minutes";
$pageAuthor		= "Bjorn Freeman-Benson Oct 06";

ob_start();
?>
    <div id="maincontent">
	<div id="midcolumn">
<h1> Eclipse Planning Council Minutes</h1>
<p>January 23, 2007, Burlingame, California</p>
<p><i>Note that the attendance list is not accurate at this time.</i></p>
<table border="0" height="423">
  <tbody><tr>
    <td align="center" bgcolor="#cccccc" valign="top" height="21"><b>Present</b></td>
    <td align="center" valign="top" height="21"><b>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
    <td align="center" bgcolor="#cccccc" valign="top" height="21"><b>Regrets</b></td>
  </tr>
  <tr>
    <td valign="top" align="left" height="21">Sri Doddapaneni, Intel, TPTP</td>
    <td valign="top" align="center" height="21"></td>
    <td valign="top" align="left" height="21">Doug Schaefer, QNX, Tools</td>
  </tr>
  <tr>
    <td valign="top" align="left" height="21">Bjorn Freeman-Benson, Eclipse</td>
    <td valign="top" align="center" height="21"></td>
    <td valign="top" align="left" height="21">Doug Gaff, Wind River, DSDP</td>
  </tr>
  <tr>
    <td valign="top" align="left" height="21">John Graham, Sybase, DTP</td>
    <td valign="top" align="center" height="21"></td>
    <td valign="top" align="left" height="21">Tim Wagner, BEA, WTP</td>
  </tr>
  <tr>
    <td valign="top" align="left" height="21">Rich Gronback, Borland</td>
    <td valign="top" align="center" height="21"></td>
    <td valign="top" align="left" height="21"></td>
  </tr>
  <tr>
    <td valign="top" align="left" height="21">Kevin Haaland, IBM, Platform</td>
    <td valign="top" align="center" height="21"></td>
    <td valign="top" align="left" height="21"></td>
  </tr>
  <tr>
    <td valign="top" align="left" height="21">Yossi Leon, Zend</td>
    <td valign="top" align="center" height="21"></td>
    <td valign="top" align="left" height="21"></td>
  </tr>
  <tr>
    <td valign="top" align="left" height="21">Wenfeng Li, Actuate, BIRT</td>
    <td valign="top" align="center" height="21"></td>
    <td valign="top" align="left" height="21"></td>
  </tr>
  <tr>
    <td valign="top" align="left" height="21">Ed Merks, IBM, Modeling</td>
    <td valign="top" align="center" height="21"></td>
    <td valign="top" align="left" height="21"></td>
  </tr>
  <tr>
    <td valign="top" align="left" height="21">Paul Styles, Compuware</td>
    <td valign="top" align="center" height="21"></td>
    <td valign="top" align="left" height="21"></td>
  </tr>
  <tr>
    <td valign="top" align="left" height="21">Jess ?, BEA</td>
    <td valign="top" align="center" height="21"></td>
    <td valign="top" align="left" height="21"></td>
  </tr>
  <tr>
    <td valign="top" align="left" height="21">David Williams, IBM</td>
    <td valign="top" align="center" height="21"></td>
    <td valign="top" align="left" height="21"></td>
  </tr>
  <tr>
    <td valign="top" align="left" height="21">Oisin Hurley, IONA, STP</td>
    <td valign="top" align="center" height="21"></td>
    <td valign="top" align="left" height="21"></td>
  </tr>
</tbody></table>
<h2>Minutes / Discussion Items</h2>
<h3>Europa CQ Prioritization Process</h3>
<p>Discussion of the <a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release"> Europa</a> CQ prioritization process as defined by Janet [<a href="http://dev.eclipse.org/mhonarc/lists/eclipse.org-planning-council/msg00310.html">1</a>].
The Council members felt that the Legal queue was long and getting longer and
were nervous that this trend is going the wrong way. In general the Council felt
that the deadline of January 31st for submitting new material was reasonable,
but they would like the deadline for submitting incremental requests (updated
versions of previous approved third-party libraries) to be later. The reason is
to be able to include the latest and greatest versions of, say, Apache libraries
even if they are released (by, e.g., Apache) even if they are released late in
the Europa release cycle. While it would be convenient if the entire software
world revolved around the Eclipse yearly releases, it doesn't, so our processes
need to accommodate that. Bjorn explained how&nbsp; much work is required even
for incremental releases (a lot) and the Council members decided that they could
live with an M6 date for the deadline for CQs for incrementals.&nbsp;Project
teams will assist with incrementals by providing diff reports on what has
changed at all levels of nesting.</p>
<p>The projects also agreed to (pending a checklist/example) submit a complete
list of all nested jars and source code so that Janet's team can start the
examination with less leg work.</p>
<p><b>ACTION ITEM:</b> [Bjorn] Take these requests to Eclipse Legal:</p>
<ul>
  <li>New third-party libraries deadline&nbsp; is January 31st</li>
  <li>Incremental third-party libraries deadline is RC0 (May 4)</li>
</ul>
<p><b>ACTION ITEM:</b> [Bjorn] Take these suggestions to Eclipse Legal:</p>
<ul>
  <li>Transparency: publish a probability distribution of how long (calendar
    time) it takes to process CQs</li>
  <li>Process: publish a checklist of things that projects should be looking for
    and trying to solve before submitting CQs: license issues, code scanning,
    etc.</li>
  <li>Ease of Use: a better Contribution Questionnaire - many of the projects
    find the existing one confusing, the sections and questions hard to
    understand, and there are no examples of how to fill it out</li>
  <li>SLA: Service Level Agreements for short contributions having quick
    response times</li>
</ul>
<p>Ed Merks also requested that IPZilla be opened to contributors as well as a
committers so that the committers do not have to act as intermediaries when
trying to resolve issues between committers and Eclipse Legal.</p>
<h3>Europa Schedule and Rules Review</h3>
<p>We reviewed the schedule and rules on the <a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release">Europa
wiki page</a>. We revised the rules a bit (on the wiki page). Also: BIRT will
help WTP and TPTP move their common shared jars to Orbit. And we promoted
&quot;written ramp down policy&quot; from <i>should do</i> to <i>must do</i>.</p>
<p>The ramp down policy should include: named milestones (API freeze, feature
complete, RC0), rules for what it takes to get a change in (team says want to
fix, …, consensus has to review and approve all changes; the process we use to
say no); definition of what &quot;RC&quot; means to each project; etc.</p>
<p><b>ACTION ITEM:</b> [All] All Europa projects will have a written ramp down
policy on their website and in the wiki by February 23rd.</p>
<p>We also discussed changing the name of RCs to Europa Candidates (ECs) to
accommodate the varying quality of the projects.&nbsp;</p>
<h3>JVM 1.4 versus JVM 5</h3>
<p>TPTP has worked around the issue raised earlier by having the TPTP
stand-alone run-time use EMF 2.2.</p>
<p><b>ACTION ITEM: </b>[Ed] Add a link to the Europa page to his wiki page
discussing the EMF 2.2/2.3 features and JVM 1.4/1.5 issues and what the
consequences of whether one should use EMF 2.2 or 2.3</p>
<p>Additionally, the group consensus was to label your own plug-ins with the
minimum run-time for that plug-in and not to consider the minimum run-times of
dependencies. Be sure to test your code against both the 1.4 and 5 JVMs.</p>
<h3>Using Non-APIs</h3>
<p>After must discussion, we concluded that:</p>
<ul>
  <li>Projects SHOULD NOT use non-APIs from other projects, but if you must
    then...</li>
  <li>When using non-APIs, projects MUST have opened bugzillas against the other
    projects and include references to those bugzillas in the release notes and
    the release review slides. Projects MUST also have a plan for addressing the
    non-API issue in their next major release.</li>
  <li>When using non-APIs, projects MUST NOT expose those consumed non-APIs
    through the project's own APIs. We cannot even begin to explain what a bad
    idea that would be.</li>
  <li>When using non-APIs, projects MUST participate in the same maintenance
    releases as the projects they are using from.</li>
</ul>
<p>Finding the right balance of progress versus risk is very difficult thus our
goal is to expose the risk of the use of non-APIs. We even considered having a
clown-nose icon that is attached to a project's website should they use
non-APIs.</p>
<h3>Europa SDKs and Run-times</h3>
<p>The main issue here is that &quot;SDK&quot; means different things for
different projects. In the end we concluded that there are at least three
different things: (1) run-time, (2) tooling, (3) extender kit. Not all projects
have all three. The run-time is like the VM for the project - consider the EMF
run-time: there's no tooling and it is just what is needed to execute an EMF
model. However, the Platform run-time distro does include tooling: the basic
Eclipse IDE tools. (Hence confusion over the wording)</p>
<p>The tooling distro of a project includes the run-time (to run the tools), end
user tools, and end user documentation. The extender kit for each project is the
tooling disto plus that which is required to extend the underlying frameworks.
Also known as an SDK, the extender contains source code, adopter documentation,
examples, etc. We decided that the extended kit SHOULD include an explanation
(in the help system) of how to get the examples for the project although the
examples do not necessarily have to be included with the kit. This is often
useful because the examples should be installed the developer's workspace
instead of in the Eclipse instance itself and the Eclipse distro mechanism can
only install to the instance.</p>
<p>The Council decided that each Europa project will have two entries in the
feature list: an &quot;end-user&quot; feature and an &quot;extender&quot;
feature. The Council further decided that each project will distribute it's pure
run-time separately from the main Europa update site. Here we are taking the
position that the Europa update site is for end-users and not as a substitute
for the project-specific download pages for project-specific things (such as
project-specific run-times/VMs).</p>
<p><b>ACTION ITEM: </b>[all] Update the wiki page to explain whether your
project will include examples as part of the extender version.</p>
<p><b>ACTION ITEM:</b> [all] Update your project's features to include the words
&quot;end-user&quot; and &quot;extender&quot;.</p>
<h3>Support for Previous Releases</h3>
<p>After much discussion around support, what it means, and the potential for an
unreasonable burden on the volunteers who work on the open source projects, we
concluded that:</p>
<ol>
  <li>Projects are expected to follow the open source development model for
    their current major release, and</li>
  <li>Projects are expected to help educate their communities on what the open
    source development model is, and what it means for support. The fundamental
    thing it means for support is that projects are not supported in the same
    way that commercial projects are supported - the community is expected to
    participate in the support if the community wants to benefit from the
    support.</li>
</ol>
<p>We concluded that projects participating in the annual release are
effectively signing up for the two related maintenance releases as well
(although there is no requirement for new bits for the maintenance releases as
long as the old bits continue to work).</p>
<h3>User Interface Working Group</h3>
<p>Bob Fraser gave a report on the User Interface Working Group. Bob asks that
the Planning Council promote the existence of the working group to their project
teams. The working group is making a push now to affect the M5 and M6 releases
of the projects for the Europa time-frame, and then a bigger push for next
year's Ganymede release.</p>
<p><b>ACTION ITEM: </b>[all] Explain the User Interface Working Group to your
project teams (project dev lists?)</p>
<p><b>ACTION ITEM: </b>[Bjorn] get the slides from Bob to attach to this web
page.</p>
<h3>Europa Build Software</h3>
<p>Bjorn gives a short report: not done yet. &quot;Soon,&quot; he promises.
&quot;Before M5?,&quot; someone asks. &quot;Yes&quot;</p>
<h3>Internationalization of Eclipse Projects</h3>
<p>For years IBM has provided translations of the Eclipse Platform. IBM has
decided not to do this alone anymore. IBM will contribute resources to the
internationalization effort, but will not lead nor provide a majority of the
resources for Europa. Thus, unless the Planning Council steps up to do plan and
execute the translations, the Europa projects will not be translated. Period.</p>
<p>Paul Colton showed us <a href="http://www.aptana.com/blog/?p=76">Aptana's
wiki-like solution for translations</a>. This was very cool and we all jumped on
the idea at once as being a great way for the community to participate. There
was some concern from the corporate members that the quality would not be
sufficient for them, so the one twist we thought of was to have any bugzilla
account able to contribute (just like a patch) but have committers (language
committers) give the final approval for inclusion in the builds (just like a
patch). Or at least to enable this on a language-by-language basis. Paul offered
the software to the Eclipse Foundation.</p>
<p>The Council feels that there are four options for translations:</p>
<ol>
  <li>(today's default) no translations; English only; companies will do their
    own proprietary translations</li>
  <li>Aptana tool for any bugzilla login; Europa download for users will have
    random quality translations; companies will do their own proprietary
    translations</li>
  <li>Aptana tool for any bugzilla login with committer review-apply; Europa
    translations will be fairly good</li>
  <li>An Eclipse Translations project with project leadership and full-time
    resources</li>
</ol>
<p>Our goal should be to follow the open source principles as much as possible
with respect to translations - to be open and transparent and to involve the
larger community.</p>
<p><b>ACTION ITEM: </b>[Bjorn] Work with Paul to see how we can incorporate
Aptana's software or something similar for projects to use.</p>
<p>The Council decided to follow up on translations in two parts: (1) ask their
(mostly corporate) framework users which translations are necessary; and (2)
reporting the incremental number of strings that will need translation for
Europa for their specific project. (Not all the strings in the project, just
those that are new or have changed.)</p>
<p><b>ACTION ITEM: </b>[all] Report to Bjorn by Monday the 29th the incremental
number of strings in your project.</p>
<h3>Report From the Orbit Project</h3>
<p>David Williams reports that there are fifteen (15) bundles and there is a
build process that produces zips. Currently projects that consume Orbit bundles
must download the zips and incorporate them in their own update sites. Rich
Gronback counter argues that Orbit should produce an update site, if only for
the automated builds, and then the builds can just get everthing they need via
the update site.</p>
<p><b>ACTION ITEM: </b>[Rich] Enter a bugzilla to request that the Orbit project
include an update site for automated builds to consume.</p>
<h3>Roadmap Contribution</h3>
<p>The Planning Council <a href="http://www.eclipse.org/org/councils/roadmap.php">Roadmap</a>
contribution is the frozen-in-time aggregation of all the Europa projects'
plans.</p>
<p><b>ACTION ITEM: </b>[all] Make sure your project plan is available on your
website. Enter the url to your plan in wiki. These are due by Feb 2nd in order
to be incorporated into the Roadmap.</p>
<h3>Conforming Project Websites</h3>
<p>Bjorn explained the <a href="http://www.eclipse.org/org/documents/Eclipse_Project_Requirements.html">Board's
resolution about websites</a> and explained his experience to date with
convincing Technology projects to conform. He further explained his <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=164720">nag-o-matic
software</a> as the next level of convincing projects to conform and promised to
extend this effort to all projects over the course of the next six months.</p>
<p>Some projects' responses to this were &quot;hmm, I think I'll talk to my
Board rep to get this policy changed&quot; :-)</p>
<h3>Testing and Testing Frameworks</h3>
<p>Tim Wagner was not able to attend so Jess attempted to explain Tim's ideas.
After discussion, we concluded three things:</p>
<ol>
  <li>We need to carefully distinguish between supported configurations (for
    testing) and unsupported configurations. If it is a supported configuration
    and someone tests it and finds a bug, there is an implied agreement that the
    project will fix that bug. Kevin Haaland says that to do otherwise would be
    violating a trust.</li>
  <li>We should use the Open Source Way as much as possible for tests. We like
    the CPAN scheme of having a community driven testing grid. Projects can
    specify which platforms are of interest, and of course the definition of
    platform varies by project: for example, the PDE platforms include operating
    systems and JVMs while the WTP platforms include web servers.</li>
  <li>We should avoid having a centralized rack of servers/configurations and
    emphasize having a community-participation testing effort.</li>
</ol>
<h3>Committer-Centric Workshop Ideas</h3>
<p>The Planning Council declares that a workshop around the update manager would
be a good thing. The build workshop was successful because the problem required
a cross-project solution. The update manager isn't quite the same because it
doesn't require a cross-project solution, but it is needed by all the projects
thus many are eager to help.&nbsp;</p>
<p>This workshop will be for people who are intending to become committers on
the update component. This will not be a requirements gathering event - this is
an event for doers: people committed to being committers.</p>
<p>The Planning Council recommends that July-August would be the best time frame
for this effort: after Europa, but early enough in Ganymede to make a
difference.</p>
<p><b>ACTION ITEM: </b>[Bjorn] pass these ideas along to Ward</p>
<h3>Europa Release Review</h3>
<p>The Europa Release Review will be Wednesday, June 6th, 7am Pacific time. The
release review slide decks (the whole deck with all the checklist items) are due
by May 30th.</p>
<p><b>ACTION ITEM: </b>[all] Mark your calendars</p>
<h3>Future Simultaneous Releases</h3>
<p>We chose &quot;Ganymede&quot; for the 2008 release and &quot;Io&quot; for the
2009 release.</p>
<p><i>Notes taken and posted by Bjorn Freeman-Benson</i></p>
      </div>
  </div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>