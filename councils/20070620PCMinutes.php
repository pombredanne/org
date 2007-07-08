<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "June 2007 Planning Council Minutes";
$pageKeywords	= "planning council minutes";
$pageAuthor		= "Bjorn Freeman-Benson";

ob_start();
?>
    <div id="maincontent">
	<div id="midcolumn">



<h1> Eclipse Planning Council Minutes</h1>
<p>June 20, 2007, Boston, Massachutes</p>
<p><i>Note that the attendance list is not accurate at this time.<br>
Gary Xue, Doug Gaff, Rich Gronback, David Williams, Philippe Mulet, Oisin
Hurley, John Graham, Bjorn Freeman-Benson, Oliver Cole, Walter Harley.</i></p>
<h2>Minutes / Discussion Items</h2>
<h3>Europa Simultaneous Maintenance Releases</h3>
<p>We decided on September 28th and February 29th for the Fall and Winter
maintenance releases. Mondays (Sep 24, Feb 25) will be the +0 dates; Wednesdays
(Sep 26, Feb 27) will be the +1 dates; and Fridays (Sep 28, Feb 29) will be the
+2 dates.</p>
<h3>EclipseCon 2008 Tracks</h3>
<p>Discussion led by Doug Gaff, EclipseCon 2008 Program Chair. These notes are a
bit of a stream of consciousness mish-mash:</p>
<ul>
  <li>Long talks and demos are the same thing.&nbsp;</li>
  <li>Ideas for keynotes? Ask everyone, perhaps even blog about it.&nbsp;</li>
  <li>Decide on real beginning and end dates to the conference and not send
    email blasts until those are set because people use those to make travel
    plans and then if additional things get added to the beginning or end, those
    non-refundable plans become invalid.&nbsp;</li>
  <li>Recruiting on sponsorships for mobile to match Doug's emphasis.&nbsp;</li>
  <li>Tracks into five Europa categories (or something like that) on the
    presentation page.</li>
  <li>Audience: people think that it's less of a committer conference and more
    of a user conference. Perhaps it's a &quot;I'm a committer on X, but a user
    of Y and Z&quot; conference.</li>
  <li>Program Committee calls - once a month.</li>
  <li>Make the number of slots page be hidden/PC-only because it led to
    submitters thinking they were extra slots or no slots or whatever when the
    PC really reallocates things as necessary.</li>
  <li>&quot;X for Existing Committers&quot; track.</li>
  <li>&quot;Tips &amp; Tricks for Users&quot; track / &quot;The Missing
    Manual&quot;</li>
  <li>Separate pre-reqs box on the submission page and have some examples. Or
    the audience: &quot;this is for people who are interested in using X and
    already know Y&quot;.</li>
  <li>Explicitly ask the submitters to explain how their talk relates to open
    source.</li>
  <li>Suggest to sponsored talks that they should talk about &quot;how we built
    on top of Eclipse; here are the frameworks&quot;, not just &quot;we are on
    top of Eclipse and we're a product&quot;. We them them &quot;in our
    experience, this kind of talk works well at EclipseCon...&quot;</li>
  <li>Use bugzilla dependencies to define an ordering for the talks.</li>
  <li>Reduce the tutorial price at the cost of increasing the base price: $300
    (maybe $400) is the consensus. Especially if the tutorials are combined
    throughout the week.</li>
  <li>Encourage tutorial presenters to submit short tutorials only. Sequences of
    of short tutorials if necessary, but not long tutorials.</li>
  <li>BOFs that don't end, i.e., do not schedule two BOFs per room per evening.
    The PC should be part of the BOF selection process.</li>
  <li>The Planning Council wants a Monday-Thursday conference, not a
    Sunday-Wednesday one. And they want to combine the tutorials with the rest
    of the conference.</li>
</ul>
<h3>Europa Retrospective; Ganymede Thoughts</h3>
<p>We discussed our success (and issues) with the Europa Simultaneous Release
and what we'd like to have for Ganymede next year.</p>
<ul>
  <li><span style="background-color: #FFFF88">Europa-matic on workstations would
    be great.</span> Bjorn agreed and intends to have the Gan-omatic available
    on workstations.</li>
  <li><span style="background-color: #FFFF88">A suggestion that for Ganymede, we
    change from +1 and +2 to &quot;as early as you can&quot;. The milestone
    builds should be more incremental with projects releasing at multiple times
    and then having a cut-ff date that defines the milestone.</span></li>
  <li>Platform APIs were frozen by the time the Europa M4 was just starting.
    Conclusion: we need to start with a Ganymede M1 to get everyone working
    together sooner. Basically, Ganymede starts now/soon and will continue
    throughout the year.
    <ul>
      <li>Philippe will provide the Platform milestone dates by the end of July
        2007 so that we can define the Ganymede M-dates.</li>
      <li>Post-note from Bjorn: I imagine that the &quot;must dos&quot; and
        &quot;should dos&quot; will be discussed prior to our next face-to-face
        and then decided upon at that meeting.</li>
    </ul>
  </li>
  <li>It is essential for dependent projects to pay attention to their upstream
    projects so that API changes can be requested, used, tested, etc. before the
    last minute. The last minute is bad.
    <ul>
      <li>Post-note from David: perhaps we need
        a better designated time to do &quot;full install&quot; testing.
        Currently it's assumed to do &quot;as we go&quot;, but that's
        hard to do. Perhaps for one week after each Ganymede milestone, request
        projects do some &quot;report&quot;? </li>
    </ul>
  </li>
  <li><span style="background-color: #FFFF88">There was disappointment amongst
    some Council members and EMO staff that the Europa requirements were relaxed
    over the course of the project. For Ganymede, we are considering having a
    two tier simultaneous release:</span>
    <ul>
      <li>Tier 1 - meets all the requirements (packing, signing, user interface
        consistency, whatever)</li>
      <li>Tier 2 - will release at the same time, but does not meet all the
        requirements</li>
      <li>Obviously the Tier 1 projects would get the quid pro quo: priority on
        IP reviews, better service from the build-meister, etc.</li>
    </ul>
  </li>
  <li>That brought up a discussion of what is the value proposition of the
    requirements? If there is&nbsp; a clear value proposition, then projects
    will implement them; if not, then projects will not spend as much time on
    them (realistically). We should be clearer on what is really a requirement
    versus what is just a really, really good idea.</li>
  <li>We should stop threatening to kick projects off because we realistically
    won't do it. The only time we might do this is with incubation projects and
    then it's really the PMC's responsibility to convince them to withdraw.
    <ul>
      <li><span style="background-color: #FFFF88">Although, post-note, the
        Executive Director made it clear that he has the power to kick projects
        off the release train and he will take that action if necessary to
        preserve the overall quality of the Eclipse frameworks and eco-system.</span></li>
    </ul>
  </li>
  <li>There was a discussion about the purpose of Ganymede - is it a product? In
    the end, we concluded that the point of Ganymede was to produce &quot;the
    CD&quot; with all the project on it. The purpose was not &quot;providing a
    better integrated product&quot;.</li>
  <li><span style="background-color: #FFFF88">Ganymede is more of a process
    rather than a technical solution: it's a <i><b>reliable release stream for
    commercial product planning</b></i>.</span> Not sure if we need to change
    much from Europa except maybe a better understanding of all the project
    dependences - Europa has gone well in terms of reliable milestone builds.</li>
  <li>Other noble goals, like &quot;improved user experience&quot; were seen as
    requiring a lot of extra work and perhaps &quot;near impossible&quot; given
    that there is no one person in charge of the overall user experience.</li>
  <li>We like the EPP packages and the role-based downloads; role-based
    downloads are better than the &quot;everything is available in the update
    manager&quot; distro. We should work with the EPP project to consume the
    Ganymede builds automatically - start by pulling them into the Planning
    Council.</li>
  <li>We had a discussion about recognizing Europa bugs. We came to the
    following conclusions:
    <ul>
      <li>Use <b><samp>cross-project </samp></b>keyword instead of Europa or
        some other keyword.</li>
      <li>The meaning of this keyword is &quot;the Planning Council will look at
        bugs with this keyword&quot;</li>
      <li>The query for these bugs is for facilitating conversations around
        these cross-project bugs.</li>
      <li>These bugs are &quot;bug exists if N projects are loaded, but does not
        exist if just one project is loaded&quot;</li>
    </ul>
  </li>
  <li>The idea of requiring conformance to the UI Best Practices Working Group
    guidelines was brought up. We decided that if the group produced some
    guidelines in time for them to have an effect on Ganymede, we would consider
    requiring conformance.</li>
  <li>Should we do full source builds of all Ganymede projects? Maybe, maybe
    not. Source building would identify more API change issues, etc., but it
    would require projects to change their ways to have more common
    infrastructure. And the source build would be broken a lot of time. Maybe we
    should do something like more distributed testing instead.</li>
  <li>Should we have some kind of CPAN-like distributed testing system? There
    was some fear that this would be a lot of work, but given how well it works
    for other open source projects, it seems like a good idea to investigate.</li>
  <li>We also discussed how we could ensure API cleanliness. Each project can
    control the issue in their own code, but if they rely on other projects and
    those projects do not adhere to the same level of cleanliness, that can put
    your project at risk and make it fragile. Source level builds would help
    with this, but perhaps what is really needed is a tool that makes this
    problem visible to everyone. The Platform team is considering working on
    such a tool; the WTP team has some tools already; someone mentioned that
    there might be something on alpahworks...</li>
  <li>A good first step is that each project needs to publish or expose their
    cross-project access rule violations. Better would be to include all API
    violations including the semantic ones that we can't capture in access rules
    yet (e.g., &quot;don't instantiate this class&quot; and &quot;not all public
    methods are API methods&quot;). The next step would be for us to investigate
    additional tooling.</li>
  <li>The Eclipse Top-Level Project is planning to split development streams:
    3.x verus 4.0. Philippe asked for feedback from the other leads about the
    impacts on them - general consensus was that this was a good thing. The 3.x
    stream will be about consolidation and productization of the existing 3.x
    code base; the 4.0 stream will be a longer term effort: two or three years.</li>
  <li>And final topic in this section was about performance and scalability and
    how to generate a better understanding of these issues amongst the projects.
    How are projects measuring their performance and scaling metrics? Are they
    measuring them at all? The Platform, WTP, and BIRT had performance tests,
    but none of the leads were really happy with the tests that they have...
    Phillipe said the Platform needs to be able to handle 10,000 plug-ins and
    that all projects should handle huge workspaces, etc. The Platform team used
    M7 as a &quot;performance iteration&quot;, but none of the other projects
    did that. <span style="background-color: #FFFF88">Consensus was that
    Ganymede should recommend, or maybe require, that M7 be a performance
    iteration.</span></li>
  <li>Each project on the train needs to do performance and scalability/resource
    usage testing. Maybe use the TPTP tools?</li>
</ul>
<h3>Eclipse IP Process/Policy Improvements</h3>
<p>We discussed our difficulties with the Eclipse IP Process and discussed the
following issues that we will take to the Board meeting tomorrow:</p>
<ul>
  <li>Committers should be able to committer greater than N LOC and not be
    limited to 250 LOC. For example, the approval for the NEC contribution to
    DTP 1.5 occurred so late in the development cycle that they were not able to
    integrate and develop the contribution as much as possible.</li>
  <li>Keeping up with external run-times is a (future?) problem for STP. For
    example, Apache CXF 1.0 was not robust and the CXF project is moving towards
    2.0, but their timing is outside the Europa window, so STP needs to use a
    milestone level build of CXF but the Eclipse Legal process will not consider
    milestone level builds. Perhaps a &quot;holding pen&quot; for <i>not
    completely reviewed</i> libraries?</li>
  <li>DSDP wants a holding pen for GPL-based libraries: RXTX and gdb.</li>
  <li>IP review takes too long. When pressed on what &quot;too long&quot; means,
    the consensus is &quot;one or two weeks is acceptable; longer is not&quot;.
    The Ant 1.7 and Jcraft 1.3.1 examples were brought up. The team would like
    to see a fast track for service releases.</li>
  <li>Eclipse Legal needs to provide an ETA if the ETA is greater than 1-2
    weeks. Having Legal say &quot;I can't give you a date&quot; is not
    acceptable - if we (the project leads) have to stick to dates, then they
    have to as well. There are many standard project management techniques that
    could be applied, including estimates based on historical trends and
    characteristics of the request.</li>
  <li>We would like to use the Parallel IP process for all projects.</li>
  <li>The Foundation should provide Black Duck (or whatever software the
    Foundation is using to scan contributions) to the project leads so that the
    project leads can pre-scan all the contributions to help speed things along.</li>
  <li>Rewrite the Legal documentation from the POV of developers not the POV of
    lawyers.</li>
  <li>Other issues include the QVT University of Kent OCL library: it was
    rewritten faster (months of work) before Legal even started to review it;
    and accessing/depending on third-party libraries that are not distributed
    with the Eclipse project (the Buckminster-Maven-SVN example).</li>
  <li>Post-note from David: &quot;There were
    some constructive suggestions that came out of it, but I still think it's
    working fairly well, and, as human nature is, any discussion of
    &quot;how to improve&quot; ignores the enormous improvements that have been
    made. (I recall when 'approval' was not even traceable!)&quot;</li>
  <li>&nbsp;</li>
</ul>
<p><i>Notes taken and posted by Bjorn Freeman-Benson</i></p>





      </div>
  </div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>