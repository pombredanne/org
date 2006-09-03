<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "June 2006 Planning Council Minutes";
$pageKeywords	= "planning council minutes";
$pageAuthor		= "Bjorn Freeman-Benson Aug 06";

ob_start();
?>
    <div id="maincontent">
	<div id="midcolumn">
<h1> Eclipse Architecture Council Minutes</h1>
<p>June 28, Chicago, Illinois</p>
<table border="0">
  <tbody><tr>
    <td align="center" bgcolor="#cccccc" valign="top"><b>Present</b></td>
    <td align="center" valign="top"><b>&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
    <td align="center" bgcolor="#cccccc" valign="top"><b>Regrets</b></td>
  </tr>
  <tr>
    <td valign="top" align="center"><i>no data</i></td>
    <td valign="top" align="center"></td>
    <td valign="top" align="center"><i>no data</i></td>
  </tr>
</tbody></table>
<h2>Minutes / Discussion Items</h2>
<p><i> (these notes are in logical rather than
chronological order)</i></p>
<h3>JVM Issue</h3>
<p>Discussion about what JVM version will be required/supported by Europa. Some
of the points included: is Eclipse going to be a 1.4 application and not move to
1.5? Perhaps the statement is that &quot;Eclipse is a framework built around
1.4&quot;? How do we respond to &quot;you are no longer cool because you are
stuck on 1.4&quot;? (if we choose that) The problem is, of course, that 1.5 is
really a new language (but 1.6 is not).</p>
<p>Projects should tell their dependencies what the project's JVM requirements
are so that the dependent projects can either concur or push back. The Platform
will continue to run on JVM 1.4 but if you run on 1.5 you will get additional
features. Moving to 1.5 is not mandatory; execution can move; new plug-ins can
move to 1.5 features. Our goal is to have both a smaller 1.4 version and to
support all the new features of 1.5 - i.e., the best of both worlds. Our goal is
no gratuitous 1.5 - go ahead and use 1.5 where necessary. Document it. Specify
it in the manifest file.</p>
<p><font color="#800080"><u><b>ACTION</b></u></font>: [Ed Merks, Michael Scharf]
draft the initial wiki page describing the implications of changing to
1.5.&nbsp;</p>
<p><font color="#800080"><u><b>ACTION</b></u></font>: [All] All projects should
have a statement in their project plan about their position on 1.5.&nbsp;</p>
<h3>Multi-Core</h3>
<p>We briefly discussed the fact that the Architecture Council should provide
guidelines for developers about&nbsp; multi-core-safe and then
multi-core-utilizing programs.&nbsp;</p>
<h3>Common Build Infrastructure</h3>
<p>We discussed build infrastructure and the question of why are all the
projects doing our own specialized build systems and scripts? This makes
coordination hard. For example, version number ranges - Ed explained why he
doesn't want to do it manually. He has a script that computes it as part of his
builder. People should use a common build infrastructure, but we should probably
not require it. We should require certain interface/API characteristics, such as
an RSS feed. Some projects (such as BIRT) find the RSS to be a low priority
because they build on a schedule rather than no notification.</p>
<p>Reasons for a common build infrastructure:</p>
<ul>
  <li>Automation</li>
  <li>To get it right</li>
  <li>Go to someone else's project and build it&nbsp;</li>
</ul>
<p>Kevin says &quot;any automation for this stuff is good&quot;.&nbsp;<br>
We don't want to force too much conformity because that stops innovation;
alternately, conformity in the base allows innovation higher up. Another
argument is that innovation at the build system should not be being done.&nbsp;</p>
<p>We should have a build teams get-together for social, technical, and
requirements gathering. Ward offered that the Portland Eclipse team would be
happy to arrange/host that. This gathering should be assembled with some sort of
direction - what would that be? AC members should gather the problems their
build teams are having, and the features their build systems have: &quot;Pain
and Pride&quot;. Optionally a wishlist.&nbsp;</p>
<p>We had a goal of doing this by July 20 but because the minutes were not
published until September, that didn't happen.&nbsp;</p>
<p>We also discussed common shaped (directories and files) build results?
Perhaps our common build system can also have some evaluation tools (such as
checking for overlapping third-party library versions) that could help with
Europa. This proposal is about Europa build support, not about the Eclipse
Foundation common build system for small/all projects. If the Eclipse Foundation
wanted to offer that feature, it would have to supply its own
people/machines/resources and release engineers to help.</p>
<h3>Eclipse Commons</h3>
<p>Jeff describes <a href="http://www.eclipse.org/proposals/orbit/">his proposal</a>.
Also a best practices recommendations. We got side-tracked a bit on the legal
issues of whether each project would need to get legal approval to depend on the
commons plug-ins and if so, whether it could get approval for version * instead
of version 1.6 (e.g.). We went off in another direction for a while on the
granularity of features versus plug-ins versus update manager. This is
definitely topic for the next council meeting.&nbsp;</p>
<p>Questions (and some answers):</p>
<ul>
  <li>Why do this Commons project? To expose and control dependencies.&nbsp;</li>
  <li>How would we deal with the source of these things?&nbsp;</li>
  <li>For third-party only or for sharing common bits of Eclipse as well? Let's
    start with third-party only. We can evolve it over time and to start with
    this. &quot;Commons&quot; is not quite the right name; something about
    &quot;Third-Party&quot; might be better.&nbsp;</li>
</ul>
<p>When polled, the room was all positive. Jeff volunteered as the project lead.
All the teams that contribute third-party bundles would have committers on the
project.</p>
<p><i>Notes taken and posted by Bjorn Freeman-Benson</i></p>
      </div>
  </div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>