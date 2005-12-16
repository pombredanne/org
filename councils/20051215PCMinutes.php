<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "December 2005 Planning Council Minutes";
$pageKeywords	= "planning council minutes";
$pageAuthor		= "Bjorn Freeman-Benson Dec 05";

ob_start();
?>
    <div id="maincontent">
	<div id="midcolumn">
        <h1><?= $pageTitle ?></h1>

<p>December 15, 2005, San Francisco, California</p>
<table border="0">
  <tbody><tr>
    <td align="center" bgcolor="#cccccc" valign="top"><b>Present</b></td>
    <td align="center" valign="top" rowspan="5">&nbsp;</td>
    <td align="center" bgcolor="#cccccc" valign="top"><b>Regrets</b></td>
  </tr>
  <tr>
    <td valign="top" rowspan="4"><p>Ward Cunningham, Eclipse<br>
      Sri Doddapaneni, Intel, TPTP<br>
      John Duimovich, IBM<br>
      Bjorn Freeman-Benson, 	Eclipse<br>
      John Graham, Sybase, DTP<br>
      Richard Gronback, Borland<br>
      Kevin Haaland, IBM, Platform<br>
      Mika Hoikka, Nokia<br>
      Wenfeng Li, Actuate, BIRT<br>
      Jim Saliba, CA<br>
      Doug Schaefer, QNX, CDT<br>
      Paul Styles, Compuware<br>
      Tim Wagner, 	BEA, WTP</td>
    <td valign="top"><p>
      Mike Milinkovich, Eclipse<br>
      Doug Gaff, 	Wind River, DSDP<br>
      <br>
      <br>
      </td>
  </tr>
  <tr>
    <td valign="top" align="center" bgcolor="#CCCCCC"><b>Absent</b>
      </td>
  </tr>
  <tr>
    <td valign="top">
      Georg Lenz, SAP<br>
      Mike Norman, Scapa
      </td>
  </tr>
  <tr>
    <td valign="top"><br>
      <br>
      <br>
      <br>
      </td>
  </tr>
</tbody></table>

<h2>New Project-Info Metadata Format</h2>
<p>The Callisto Simultaneous Release projects have agreed to use the <a 
href="/projects/dev_process/project-status-infrastructure.php">new 
project-info
metadata information</a> by January 15, 2005. The new files will
drive the dashboard, the Roadmap, the standard project left nav items,
common project web pages,
and other status information.</p>

<h2>Conference Calls</h2>
<p>The Callisto Simultaneous Release projects, along with the rest of the Planning Council,
will meet by conference call as follows:
<ul>
<li>3-Feb 8am PT/11am ET - CallistoM5 status</li>
<li>10-Feb 8am PT/11am ET - CallistoM5 status</li>
<li>19-Mar - face-to-face meeting before EclipseCon</li>
<li>17-Mar 8am PT/11am ET - CallistoRC0 status</li>
<li>24-Mar 8am PT/11am ET - CallistoRC0 status</li>
<li>12-Apr 9am PT/noon ET - CallistoRC1 status</li>
<li>19-Apr 9am PT/noon ET - CallistoRC2 status</li>
<li>26-Apr 9am PT/noon ET - CallistoRC2 status</li>
<li>3-May 9am PT/noon ET - CallistoRC3 status</li>
<li>10-May 9am PT/noon ET - CallistoRC3 status</li>
<li>17-May 9am PT/noon ET - CallistoRC4 status</li>
<li>24-May 9am PT/noon ET - CallistoRC4 status</li>
<li>31-May 9am PT/noon ET - CallistoRC5 status</li>
<li>7-Jun 9am PT/noon ET - CallistoRC5 status</li>
<li>14-Jun 9am PT/noon ET - CallistoRC6 status</li>
<li>21-Jun 9am PT/noon ET - CallistoRC6 status</li>
</ul>
<p>The call-in number is 613.287.8000
or   866.362.7064, 
passcode 874551#</p>

<h2>Plan for the Callisto Simultaneous Release</h2>
<p>The Callisto Simultaneous Release plan will be available at <a 
href="http://www.eclipse.org/callisto">http://www.eclipse.org/callisto</a>.
The goal of the Callisto Simultaneous Release is the simultaneous release
of the following ten Eclipse projects:
<ul>
<li><a href="/birt/">BIRT</a></li>
<li><a href="/cdt/">CDT</a></li>
<li><a href="/datatools/">DTP</a></li>
<li><a href="/emf/">EMF</a></li>
<li><a href="/gef/">GEF</a></li>
<li><a href="/gmf/">GMF</a></li>
<li><a href="/eclipse/">Platform</a></li>
<li><a href="/tptp/">TPTP</a></li>
<li><a href="/webtools/">WTP</a></li>
<li><a href="/ve/">VE</a></li>
</ul>
<p>
The plan page will include:
        <ul>
          <li>Description of the Callisto Simultaneous Release and its goals</li>
          <li>List of the included projects</li>
          <li>Link to at least one tutorial/how to get started for each project.
            A five-to-ten minute &quot;how to get started&quot; is needed to
            help the community, especially those who may not have used a number
            of the Callisto projects before.</li>
          <li>Instructions on how to download the Callisto Simultaneous Release
            (e.g., download the SDK and then use the Callisto update site)</li>
          <li>Collective status, both from the project-info files and a summary
            status maintained by the Planning Council</li>
          <li>Link to contest and great bugs page</li>
        </ul>
        <p>ACTION [Bjorn FB] create the initial Callisto Simultaneous Release plan
        web page.</p>

        <h2>Callisto Update Site</h2>

        <p>David Williams will write the instructions and create any scripts
        necessary to have a single Callisto update site that all the Callisto
        Simultaneous Release projects can contribute to. This update site will
        have a single &quot;Callisto Simultaneous Release&quot; feature that
        will include all the simultaneously released projects' features. The
        project leads agree to have tested this mechanism by January 30th - this
        is testing the update mechanism only, there is no implication that the
        features on the update site will even work at this time.</p>

        <p>ACTION [David W] create the Callisto update site and instructions</p>

        <p>ACTION [All] test the mechanism by January 30th</p>

        <h2>Callisto Mailing List</h2>

        <p>Callisto build announcements, API changes, bug fix announcements,
        etc. will be announced via callisto-rel-eng@eclipse.org.</p>

        <p>ACTION [Bjorn FB] request the sysadmins to create the mailing list
        and then subscribe everyone</p>

        <h2>Callisto Milestone Numbers</h2>

        <p>All Callisto projects will use the same milestone numbers (in builds,
        in Bugzilla milestone targets, etc). We will do this even if we have to
        skip a milestone or two. For example TPTP will start the Callisto
        milestones with 4.2M4 and WTP will start with 1.5M5 rather than 1.5M1.</p>

        <h2>Callisto Schedule</h2>

        <p>The Callisto Simultaneous Release milestone and release candidate
        builds schedule is:</p>

        <ul>
          <li>17-Feb Platform M5</li>
          <li>24-Feb CDT, DTP, EMF, GEF, VE&nbsp; M5</li>
          <li>3-Mar BIRT, GMF, TPTP, WTP M5
            <ul>
              <li>M5 is the API Freeze a.k.a. API Complete milestones. All
                projects except EMF, GEF, and VE have agreed to freeze their API
                at M5.</li>
              <li>Starting with M5 (if not before) all projects will be testing
                with the entire Callisto distro. We will be looking for
                interference bugs; we will not be looking for bugs in other
                projects - in other words, each project is still responsible for
                the quality of their own work <i>plus</i> they are now
                responsible for the interference issues between projects.</li>
              <li>Problems we know we need to look for include:
                <ul>
                  <li>Conflicting editors for the same file extensions</li>
                  <li>Builders that run everywhere rather than just in their own
                    nature</li>
                  <li>Duplicate and conflicting menu items</li>
                  <li>etc.</li>
                </ul>
              </li>
            </ul>
          </li>
          <li>20-23 Mar Announce Callisto Simultaneous Release to the community
            and ask for their help with testing</li>
          <li>1-Apr Platform RC0</li>
          <li>7-Apr CDT, DTP, EMF, GEF, VE RC0</li>
          <li>14-Apr BIRT, GMF, TPTP, WTP RC0</li>
          <li>14-Apr (all) RC1
            <ul>
              <li>For M5, the projects have a +0, +1, +2 week build schedule.
                Starting with RC1, the projects will aim for an (effectively)
                zero build delay.</li>
              <li>Starting with RC1, each project will apply its own ramp-down
                rules. The Platform team used <a href="http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/eclipse-project-home/plans/3_1/freeze_plan.html#FixPassAfterRC1">their&nbsp;
                ramp-down policy</a> for the 3.1 release. The Platform team will
                publish their new 3.2 ramp-down policy in January. Projects that
                do not have a ramp-down policy are encouraged to consider
                adopting one similar to the Platform's policy.</li>
              <li>The Callisto projects have agreed to these firm rules about
                their ramp-down policies:
                <ul>
                  <li>Any email that is sent to the project's specific rel-eng
                    mailing list will also be sent to the callisto-rel-eng
                    mailing list.</li>
                  <li>All ramp-down processes will use an API change rule that
                    is the same as the Platform's. The one exception is that the
                    CDT, EMF, GEF, GMF, and VE projects will use their project
                    lead's approval in place of the PMC's approval.</li>
                </ul>
              </li>
            </ul>
          </li>
          <li>28-Apr (all) RC2</li>
          <li>12-May (all) RC3</li>
          <li>26-May (all) RC4</li>
          <li>16-Jun (all) RC5</li>
          <li>28-Jun (all) RC6</li>
        </ul>
        <p>ACTION [Bjorn FB] work with the sysadmins on bandwidth issues for the
        Callisto milestones and release candidates</p>
        <h2>Callisto Contest</h2>
        <p>We discussed a number of contest ideas to generate excitement in the
        larger community around testing the Callisto Simultaneous Release. In
        the end we decided to create an Eclipse Callisto T-shirt and to give out
        a T-shirt to each person who submits a great bug report. We will have a
        page explaining great bug reports, i.e., clear, concise, sufficient
        detail, etc. Each week the Callisto PMCs will recommend great bugs to
        the EMO and the EMO will have the T-shirts sent. Each PMC can recommend
        any number of bugs each week, but they need to be <i>great</i> (not just
        good). This contest will start on March 4th (the first date the Callisto
        Simultaneous Release is available).</p>
        <p>Each winner of a T-shirt is entered in a random drawing for a grand
        prize. There will be one random drawing for a grand prize per Callisto
        milestone and release candidate until we run out of grand prizes.
        Employees of the Foundation are not eligible. Employees of member
        companies ARE eligible. The pool of grand prize candidates is reset
        after each drawing. Multiple winners are allowed (if you're so lucky).</p>
        <p>ACTION [Bjorn FB] Have T-shifts designed and manufactured</p>
        <p>ACTION [Bjorn FB] Arrange for the purchase or donation of the (still
        secret) grand prize.</p>
        <p>ACTION [Ward C] Write up the &quot;what is a great bug&quot; page</p>
        <h2>Language Packs</h2>
        <p>Each project continues to be responsible for its own language packs.
        The Callisto Simultaneous Release does not imply or require any
        particular support for other languages.</p>
        <h2>Service Packs</h2>
        <p>If the Callisto Simultaneous Release is successful and relatively
        pain-free, the Planning Council will discuss expanding the simultaneous
        release concept to service packs. We will also consider expanding
        Simultaneous Release to other projects, to more integration, to unified
        downloads, etc. However, these are all for the future - for today we are
        working on simply the simultaneous release of ten Eclipse projects.</p>
    
<em>Minutes taken and posted by Bjorn Freeman-Benson</em>   
      </div>
  </div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>