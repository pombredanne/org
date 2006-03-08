<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "Eclipse 2006 Project Plans";
$pageKeywords	= "technology, planning, foundation";
$pageAuthor		= "The Eclipse Foundation";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">


<style>
body {  
background-image: url('../draft.gif');
background-repeat: repeat-y
}
h1 {
border-bottom: solid
}
h2 {
border-bottom: thin dotted
}
</style>
</head>



<h1>Eclipse 2006 Project Plans</h1>
<p>This document is year two of the Eclipse Planning Council Project Plan. We welcome 
  your feedback on the <a href="news://news.eclipse.org/eclipse.foundation">Eclipse 
  Foundation Newsgroup</a>. </p>
  
  <p>The information in the project plans portion of the Roadmap is a snapshot of
  the on-going, continuously developed, project planning and reporting activities of
  the Eclipse projects.  This year (the second version of the Roadmap), we tried to 
  create an unified and automatic mechanism for aggregating and delivering this Roadmap
  information... Unfortunately, it did not happen - both the tool and the information
  were late (specifically, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=109230">bugs 109230</a> and <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=130844">130844</a>)
  and the <a href="http://www.eclipse.org/projects/dev_process/project-status-infrastructure.php">project status instructure files</a> for most projects.
  Consequently, the information in this year's roadmap is fairly sparse - the reader
  is directed to the project's home pages for additional information.
  </p>
  <h1>Callisto</h1>
  <p>The big project planning effort this year is around the <a href="http://www.eclipse.org/projects/callisto.php">Callisto Simultaneous Release</a>.
  </p>
  <p>The goal of the Callisto Simultaneous Release is to release ten major Eclipse projects 
  (<a href="/birt/">BIRT</a>, 
  <a href="/cdt/">CDT</a>,
  <a href="/datatools/">DTP</a>,
  <a href="/emf/">EMF</a>,
  <a href="/gef/">GEF</a>,
  <a href="/gmf/">GMF</a>,
  <a href="/eclipse/">Platform</a>,
  <a href="/tptp/">TPTP</a>,
  <a href="/webtools/">WTP</a>,
  <a href="/ve/">VE</a>)
  at the same time. We are doing this simultaneous release to support the needs of the ecosystem members who integrate Eclipse frameworks into their own software and products. While those product producers naturally accept the ultimate responsibility for their customers' experiences, Callisto's goal is to eliminate uncertainity about project version numbers, and thus to allow ecosystem members to start their own integration, cross-project, and cross-product testing efforts earlier. Callisto is about improving the productivity of the developers working on top of Eclipse frameworks by providing a more transparent and predictable development cycle; Callisto is about developers helping developers serve the whole Eclipse community.
</p><p><em>
While Callisto is about the simultaneous release of ten projects, it is is not a unification of the projects - each project remains a separate open source project operating with its own project leadership, its own committers, and its own project plan.
</em>
</p>
  
  <h1>Individual Project Plans</h1>
  <p>The Eclipse Community is currently organized into nine top-level projects, the project plans
  of which are described below.</p>
<h2>The Eclipse Project DRAFT 3.2 Plan</h2>

<p>Last revised 17:03 EST Feb 14, 2006 
  (<img src="new.gif" alt="(new)" border="0" height="12" width="12">
  marks interesting changes since the previous 
  <a href="eclipse_project_plan_3_2_20051109.html">draft of Nov. 9, 2005</a>)

</p>
<p><i>&nbsp;&nbsp;&nbsp; Please send comments about this draft plan to the</i>
  <a href="mailto:eclipse-dev@eclipse.org">eclipse-dev@eclipse.org</a>
  <i>developer mailing list.</i>
</p>
<p>This document lays out the feature and API set for the next feature release 
  of the Eclipse SDK after 3.1, designated release 3.2. 
</p><ul>
  <li><a href="#Deliverables">Release deliverables</a></li>
  <li><a href="#Milestones">Release milestones</a></li>

  <li><a href="#TargetOperatingEnvironments">Target operating environments</a></li>
  <li><a href="#Compatibility">Compatibility with previous releases</a></li>
  <li><a href="#Platform">Eclipse Platform project</a></li>
  <li><a href="#JDT">Java development tools (JDT) project</a></li>
  <li><a href="#PDE">Plug-in development environment (PDE) project</a></li>
  <li><a href="#Equinox">Equinox project</a></li>

</ul>
<p>Plans do not materialize out of nowhere, nor are they entirely static. To ensure 
  the planning process is transparent and open to the entire Eclipse community, 
  we (the Eclipse Project PMC) post plans in an embryonic form and revise them 
  throughout the release cycle. 
</p>
<p>The first part of the plan deals with the important matters of release
  deliverables, release milestones, target operating environments, and
  release-to-release compatibility. These are all things that need to be clear for
  any release, even if no features were to change.
</p>
<p>The remainder of the plan consists of plan items for the four projects under 
  the top level Eclipse Project. Each plan item covers a feature or API 
  that is to be added to the Eclipse Project deliverables, or some aspect of the Eclipse Project 
  that is to be improved. Each plan item has its own entry in the Eclipse bugzilla 
  database, with a title and a concise summary (usually a single paragraph) that 
  explains the work item at a suitably high enough level so that everyone can 
  readily understand what the work item is without having to understand the nitty-gritty 
  detail. 
</p>
<p>Not all plan items represent the same amount of work; some may be quite
  large, others, quite small. Some plan items may involve work that is localized
  to a single component; others may involve coordinated changes to
  several components; other may pervade the entire SDK. Although some plan
  items are for work that is more pressing than others, the plan items appear in
  no particular order.
</p>
<p>With the previous release as the starting point, this is the plan for how we
  will enhance and improve it. Fixing bugs, improving test coverage,
  documentation, examples, performance tuning, usability, etc. are considered routine
  ongoing maintenance activities and are not included in this plan unless they
  would also involve a significant change to the API or feature set, or involve a
  significant amount of work. The intent of the plan is to account for all interesting feature work.
</p>
<p>The current status of each plan item is noted:
</p>
<ul>
  <li><b>Committed</b> plan item - A committed plan item is one that we have
    decided to address for the release.</li>

  <li><b>Proposed</b> plan item - A proposed plan item is one that we are
    considering addressing for the release. Although we are actively
    investigating it, we are not yet in a position to commit to it, or to say
    that we won't be able to address it. After due consideration, a proposal
    will either be committed or deferred.</li>
  <li><b>Deferred</b> plan item - A reasonable proposal that will not make it in
    to this release for some reason is marked as deferred with a brief note as
    to why it was deferred. Deferred plan items may resurface as committed plan
    items at a later point.</li>
</ul>

<h3><a name="Deliverables"></a>Release deliverables</h3>

<p>The release deliverables have the same form as previous releases, namely:
</p>

<ul>
  <li>Source code release for all Eclipse Project deliverables, available as versions 
    tagged "R3_2" in the Eclipse Project <a href="http://dev.eclipse.org/viewcvs/">CVS 
    repository</a>.</li>
  <li>Eclipse SDK (runtime binary and SDK for Platform, JDT, and PDE) (downloadable).</li>
  <li>Eclipse Platform (runtime binary and SDK for the Platform only) (downloadable).</li>
  <li>Eclipse RCP (runtime binary and SDK for the Rich Client Platform) (downloadable).</li>
  <li>Eclipse JDT (runtime binary and SDK for the Java Development Tools) (downloadable).</li>

  <li>Eclipse PDE (runtime binary and SDK for the Plug-in Development Environment) (downloadable).</li>
  <li>Eclipse SDK Examples (downloadable).</li>
  <li>SWT distribution (downloadable).</li>
  <li>Equinox OSGi R4 framework and assorted service implementations (downloadable).</li>
</ul>

<h3><a name="Milestones"></a>Release milestones</h3>

<p>Release milestones, occurring at roughly 6 week intervals, exist to facilitate 
  coarse-grained planning and staging. The milestones are:
</p>
<ul>
  <li> Friday Aug. 12, 2005 - Milestone 1 (3.2 M1) - stable build</li>
  <li> Friday Sep. 23, 2005 - Milestone 2 (3.2 M2) - stable build</li>
  <li> Friday Nov. 4, 2005 - Milestone 3 (3.2 M3) - stable build</li>
  <li> Friday Dec. 16, 2005 - Milestone 4 (3.2 M4) - stable build</li>

  <li> Friday Feb. 17, 2006 - Milestone 5 (3.2 M5) - stable build - API complete - API freeze</li>
  <li> Friday Mar. 31, 2006 - Milestone 6 (3.2 M6) - stable build - feature complete - development 
    freeze - lock down and testing begins</li>
</ul>
<p>Our target is to complete 3.2 in late June 2006. All release deliverables will be available
  for download as soon as the release has been tested and validated in the target operating
  configurations listed below.
</p>

<h3><a name="TargetOperatingEnvironments"></a>Target Operating Environments</h3>

<p>In order to remain current, each Eclipse release targets reasonably current
  operating environments.
</p>

<p>Most of the Eclipse SDK is "pure" Java code and has no direct
  dependence on the underlying operating system. The chief dependence is
  therefore on the Java Platform itself. Portions of the Eclipse SDK
  (including the RCP base, SWT, OSGi and JDT core plug-ins) are targeted
  to specific classes of operating environments, requiring their source
  code to only reference facilities available in particular class
  libraries (e.g. J2ME Foundation 1.0, J2SE 1.3 and 1.4, etc.).
  
  <img src="new.gif" alt="(new)" border="0" height="12" width="12">
  With the exception of a small set of planned features that
  actually require Java SE 5 APIs (most notably, the support for
  Annotation Processing and JUnit 4), the 3.2 release of the Eclipse
  Project is developed against version 1.4 of the Java 2 Platform.
  As such, the Eclipse Project SDK as a whole is targeted at both
  1.4 and Java5 VMs, with full functionality available for 1.4 level
  development everywhere, and new Java5 specific capabilities available
  when running on a Java5 VM.

  <a href="#Appendix1">Appendix 1</a> contains a table that indicates
  the class library level required for each plug-in.
</p>

<p>There are many different implementations of the Java Platform running atop 
  a variety of operating systems. We focus Eclipse SDK testing on a handful 
  of popular <span class="header">combinations of operating system and Java Platform; 
  these are our <em>reference platforms</em>. Eclipse undoubtedly runs fine in 
  many operating environments beyond the reference platforms we test. However, 
  since we do not systematically test them we cannot vouch for them. Problems 
  encountered when running Eclipse on a non-reference platform that cannot be recreated 
  on any reference platform will be given lower priority than problems with running 
  Eclipse on a reference platform.</span></p>
<p>The Eclipse SDK 3.2 is tested and validated on the following reference 
  platforms (this list is updated over the course of the release cycle):</p>

<table summary="Eclipse Reference Platforms" style="width: 821px;" border="1">
  <tbody>
  
    <tr bgcolor="#cccccc">
      <th colspan="5">
        <div align="center"><strong><font size="+1">Eclipse Reference Platforms</font></strong></div>
      </th>
    </tr>
    
    <tr>
      <td width="205"><b>Operating system</b></td>

      <td width="59"><b>OS version</b></td>
      <td width="76"><b>Processor architecture</b></td>
      <td width="59"><b>Window system</b></td>
      <td width="453"><b>Java 2 Platform</b></td>
    </tr>
    
    <tr>
      <td width="205">Microsoft Windows</td>

      <td width="59">XP</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>
      <td width="453">
        Sun Java 2 Standard Edition 5.0 <s><font color="#ff0000">Update 4</font></s> Update 6<br>for Microsoft Windows
      </td>

    </tr>
    
    <tr>
      <td width="205">Microsoft Windows</td>
      <td width="59">XP</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>
      <td width="453">

        IBM 32-bit SDK for Windows,<br>Java 2 Technology Edition 5.0
      </td>
    </tr>
    
    <tr>
      <td width="205">Microsoft Windows</td>
      <td width="59">XP</td>
      <td width="76">Intel x86</td>

      <td width="59">Win32</td>
      <td width="453"> 
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">
        Sun Java 2 Standard Edition 1.4.2_10<br>for Microsoft Windows
      </td>
    </tr>
    
    <tr>
      <td width="205">Microsoft Windows</td>

      <td width="59">XP</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>
      <td width="453">
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">
        IBM 32-bit SDK for Windows,<br>Java 2 Technology Edition 1.4.2 service release 3
      </td>

    </tr>
    
    <tr>
      <td width="205">Red Hat Enterprise Linux</td>
      <td width="59">WS 4</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK</td>
      <td width="453">

        IBM 32-bit SDK for Linux on Intel architecture,<br>Java 2 Technology Edition 5.0
      </td>
    </tr>
    
    <tr>
      <td width="205">Red Hat Enterprise Linux</td>
      <td width="59">WS 4</td>
      <td width="76">Intel x86</td>

      <td width="59">GTK</td>
      <td width="453">
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">
        Sun Java 2 Standard Edition 1.4.2_10<br>for Linux x86
      </td>
    </tr>
    
    <tr>
      <td width="205">Red Hat Enterprise Linux</td>

      <td width="59">WS 4</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK</td>
      <td width="453">
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">
        IBM 32-bit SDK for Linux on Intel architecture,<br>Java 2 Technology Edition 1.4.2 service release 3
      </td>

    </tr>
    
    <tr>
      <td width="205">Red Hat Enterprise Linux</td>
      <td width="59">WS 4</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK</td>
      <td width="453">

        Sun Java 2 Standard Edition 5.0 <s><font color="#ff0000">Update 4</font></s> Update 6<br> for Linux x86</td>
    </tr>
    
    <tr>
      <td width="205">SUSE Linux Enterprise Server</td>
      <td width="59">9</td>

      <td width="76">Intel x86</td>
      <td width="59">GTK</td>
      <td width="453">
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">
        Sun Java 2 Standard Edition 1.4.2_10<br>for Linux x86</td>
    </tr>
    
    <tr>

      <td width="205">SUSE Linux Enterprise Server</td>
      <td width="59">9</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK</td>
      <td width="453">
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">
        IBM 32-bit SDK for Linux on Intel architecture,<br>Java 2 Technology Edition 1.4.2 service release 3
      </td>

    </tr>
    
    <tr>
      <td width="205">Sun Solaris</td>
      <td width="59">10</td>
      <td width="76">SPARC</td>
      <td width="59"><img src="new.gif" alt="(new)" border="0" height="12" width="12"> GTK</td>

      <td width="453">
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">
        Sun Java 2 Standard Edition 1.4.2_10<br>for Solaris SPARC</td>
    </tr>
    
    <tr>
      <td width="205">HP HP-UX</td>
      <td width="59">11i</td>

      <td width="76">hp9000<br>PA-RISC</td>
      <td width="59">Motif</td>
      <td width="453">
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">
        HP-UX JDK for the Java 2 Platform Standard Edition for 1.4.2_09
      </td>
    </tr>
    
    <tr>

      <td width="205">IBM AIX 5L</td>
      <td width="59">5.2</td>
      <td width="76">Power</td>
      <td width="59">Motif</td>
      <td width="453">
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">
        IBM 32-bit SDK for AIX,<br>Java 2 Technology Edition 1.4.2 service release 3
      </td>

    </tr>
    
    <tr>
      <td width="205">Apple Mac OS X</td>
      <td width="59">10.4</td>
      <td width="76">Power</td>
      <td width="59">Carbon</td>
      <td width="453">

        <img src="new.gif" alt="(new)" border="0" height="12" width="12">
        Java 2 Platform Standard Edition (J2SE) 1.4.2<br>service release 2 for Tiger
      </td>
    </tr>
    
    <tr>
      <td width="205">Red Hat Enterprise Linux</td>
      <td width="59">WS 4</td>
      <td width="76">Power</td>

      <td width="59">GTK</td>
      <td width="453">
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">
        IBM 32-bit SDK for Linux on pSeries architecture, <br>Java 2 Technology Edition 1.4.2 service release 3
      </td>
    </tr>

    <tr>
      <td width="205">SUSE Linux Enterprise Server</td>

      <td width="59">9</td>
      <td width="76">Power</td>
      <td width="59">GTK</td>
      <td width="453">
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">
        IBM 32-bit SDK for Linux on pSeries architecture, <br>Java 2 Technology Edition 1.4.2 service release 3
      </td>

    </tr>
    
    <tr>
      <td width="205">SUSE Linux Enterprise Server</td>
      <td width="59">9</td>
      <td width="76">Power</td>
      <td width="59">GTK</td>
      <td width="453">

        <img src="new.gif" alt="(new)" border="0" height="12" width="12">
        IBM 32-bit SDK for Linux on pSeries architecture, <br>Java 2 Technology Edition 1.4.2 service release 3
      </td>
    </tr>
    
  </tbody>
</table>

<p>Because Java 1.4.2 platforms are used for most Eclipse development,
  in general, 1.4.2 platforms are listed here. Of course, the teams doing Java 5 based
  development are using Java 5 platforms, and the specific ones that they test on
  are also included. <i>We expect that Eclipse will work fine on other Java 5 VMs
  running on window systems supported by SWT, but can not flag these as reference
  platforms without significant community support for testing them.</i></p>
  

<p>Similarly, although untested, the Eclipse SDK should work fine on other OSes that 
  support the same window system. For Win32: Windows 98, ME, NT, 2000, and Server 
  2003; SWT HTML viewer requires Internet Explorer 5 (or higher). For GTK on other 
  Linux systems: version 2.2.1 of the GTK+ widget toolkit and associated libraries 
  (GLib, Pango); SWT HTML viewer requires Mozilla 1.4GTK2. For Motif on 
  Linux systems: Open Motif 2.1 (included); SWT HTML viewer requires Mozilla 1.4GTK2.</p>

<p>An early access version of the Eclipse SDK is also available for 64-bit 
  Linux GTK. Testing has been limited to early access 64-bit J2SEs running on 
  x86-64 processors.</p>
  
<p>SWT is also supported on the QNX Neutrino operating system, x86 processor, 
  Photon window system, and IBM J9 VM version 2.0. Eclipse 3.2 on Windows or Linux 
  can be used to cross-develop QNX applications. (Eclipse 3.2 is unavailable on QNX 
  because there is currently no 1.5 J2SE for QNX.)</p>
  
<h6>Internationalization</h6>

<p>The Eclipse SDK is designed as the basis for internationalized products. 
  The user interface elements provided by the Eclipse SDK components, including 
  dialogs and error messages, are externalized. The English strings are provided 
  as the default resource bundles.</p>
  
<p>Latin-1 locales are supported by the Eclipse SDK on all of the above 
  operating environments; DBCS locales are supported by the Eclipse SDK 
  on the Windows, GTK, and Motif window systems; BIDI locales are supported by 
  the Eclipse SDK only on Windows operating environments.</p>

<p>The Eclipse SDK supports GB 18030 (level 1), the Chinese code page 
  standard, on Windows XP and 2000, and Linux/GTK.</p>

<p>German and Japanese locales are tested.</p>

<h6>BIDI support</h6>

<p>SWT fully supports BIDI on Windows. On Linux GTK, SWT supports entering 
  and displaying BIDI text. Within these limitations, the Eclipse
  SDK tools are BIDI enabled.</p>
  
<h3><a name="Compatibility"></a>Compatibility with Previous Releases</h3>

<h4>Compatibility of Release 3.2 with 3.1</h4>

<p>Eclipse 3.2 will be compatible with Eclipse 3.1 (and, hence, with 3.0).</p>
<p><b>API Contract Compatibility:</b> Eclipse SDK 3.2 will be upwards contract-compatible 
  with Eclipse SDK 3.1 except in those areas noted in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.platform.doc.isv/porting/eclipse_3_2_porting_guide.html" target="_top"><em>Eclipse 
  3.2 Plug-in Migration Guide</em></a>. Programs that use affected APIs and extension 
  points will need to be ported to Eclipse SDK 3.2 APIs. Downward contract compatibility 
  is not supported. There is no guarantee that compliance with Eclipse SDK 3.2 
  APIs would ensure compliance with Eclipse SDK 3.1 APIs. Refer to <i><a href="http://eclipse.org/eclipse/development/java-api-evolution.html">Evolving 
  Java-based APIs</a></i> for a discussion of the kinds of API changes that maintain 
  contract compatibility.</p>
<p><b>Binary (plug-in) Compatibility:</b> Eclipse SDK 3.2 will be upwards binary-compatible 
  with Eclipse SDK 3.1 except in those areas noted in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.platform.doc.isv/porting/eclipse_3_2_porting_guide.html" target="_top"><em>Eclipse 
  3.2 Plug-in Migration Guide</em></a>. Downward plug-in compatibility is not 
  supported. Plug-ins for Eclipse SDK 3.2 will not be usable in Eclipse SDK 3.1. 
  Refer to <i><a href="http://eclipse.org/eclipse/development/java-api-evolution.html">Evolving 
  Java-based APIs</a></i> for a discussion of the kinds of API changes that maintain 
  binary compatibility. 

</p><p><b>Source Compatibility:</b> Eclipse SDK 3.2 will be upwards source-compatible 
  with Eclipse SDK 3.1 except in the areas noted in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.platform.doc.isv/porting/eclipse_3_2_porting_guide.html" target="_top"><em>Eclipse 
  3.2 Plug-in Migration Guide</em></a>. This means that source files written to 
  use Eclipse SDK 3.1 APIs might successfully compile and run against Eclipse 
  SDK 3.2 APIs, although this is not guaranteed. Downward source compatibility 
  is not supported. If source files use new Eclipse SDK APIs, they will not be 
  usable with an earlier version of the Eclipse SDK. 
</p><p><b>Workspace Compatibility:</b> Eclipse SDK 3.2 will be upwards workspace-compatible 
  with Eclipse SDK 3.1 unless noted. This means that workspaces and projects created 
  with Eclipse SDK 3.1 or 3.0 can be successfully opened by Eclipse SDK 3.2 and 
  upgraded to a 3.2 workspace. This includes both hidden metadata, which is localized 
  to a particular workspace, as well as metadata files found within a workspace 
  project (e.g., the .project file), which may propagate between workspaces via 
  file copying or team repositories. Individual plug-ins developed for Eclipse 
  SDK 3.2 should provide similar upwards compatibility for their hidden and visible 
  workspace metadata created by earlier versions; 3.2 plug-in developers are responsible 
  for ensuring that their plug-ins recognize 3.1, 3.0, 2.1, and 2.0 metadata and 
  process it appropriately. User interface session state may be discarded when 
  a workspace is upgraded. Downward workspace compatibility is not supported. 
  A workspace created (or opened) by a product based on Eclipse 3.2 will be unusable 
  with a product based an earlier version of Eclipse. Visible metadata files created 
  (or overwritten) by Eclipse 3.2 will generally be unusable with earlier versions 
  of Eclipse. 
</p><p><b>Non-compliant usage of API's</b>: All non-API methods and classes, and
certainly everything in a package with "internal" in its name, are
considered implementation details which may vary between operating environment
and are subject to change without notice. Client plug-ins that directly depend
on anything other than what is specified in the Eclipse SDK API are inherently
unsupportable and receive no guarantees about compatibility within a single
release much less with earlier releases. Refer to <i><a href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">How
to Use the Eclipse API</a></i> for information about how to write compliant
plug-ins.
</p><h3>Themes and Priorities</h3>
<p>The changes under consideration for the next release of Eclipse
Platform, JDT, PDE and Equinox will address major themes identified by
the Eclipse Requirements Council (Themes and Priorities dated Dec. 15,
2004 - <a href="http://www.eclipse.org/org/councils/20041215EclipseTPFinalDraft.pdf">pdf)</a>. 
  The following are especially germane to this top level project:</p>

<ul>
  <li><strong>Scaling Up</strong> - This refers to the need for Eclipse to deal 
    with development and deployment on a larger and more complex scale. Increasing 
    complexities arise from large development teams distributed in different locations, 
    large source code bases and fragile build environments that have been developed 
    incrementally over time, the dynamic nature of new source code bases and their 
    interaction with configuration management, and build environments involving 
    many different tools and build rules.</li>
  <li><strong>Enterprise Ready</strong> - Eclipse should be improved to allow 
    it to be better used by large development organizations.</li>
  <li><strong>Design for Extensibility: Be a Better Platform</strong> - Within 
    the Eclipse community, many development projects are defining new development 
    platforms on top of the Eclipse Project deliverables. These must evolve 
    to better support this type of usage, including providing new common infrastructure 
    and abstraction layers needed by upper platforms and adding APIs to expose 
    existing functionality only available internally so that upper platforms can 
    more readily integrate with and reuse what's already there.</li>

  <li><strong>Simple to Use</strong> - 
	The Eclipse components need to not only provide the features that advanced users demand,
	but also be something that most users find simple to use.</li>
  <li><strong>Rich Client Platform</strong> - 
	The Eclipse RCP is a Java-based application framework for the desktop. Building on the
	Eclipse runtime and the modular plug-in story, it is possible to build applications ranging from
	command line tools to feature-rich applications that take full advantage of SWT's native
	platform integration and the many other reusable components.</li>
  <li><strong>Appealing to the Broader Community</strong> - 
	This theme includes work that grows deeper roots into the various OS-specific communities,
	spreads Eclipse to additional operating environments, virtual machines, application
	development and deployment lifecycles, vertical market-specific frameworks and builds
	bridges to other open source communities.</li>
</ul>

<p>Each of the four projects under the top-level Eclipse Project is covered 
  in its own section:
</p>
<ul>
  <li><a href="#Platform">Eclipse Platform project</a></li>
  <li><a href="#JDT">Java development tools (JDT) project</a></li>
  <li><a href="#PDE">Plug-in development environment (PDE) project</a></li>
  <li><a href="#Equinox">Equinox project</a></li>
</ul>
<p>For each project, the items listed reflect new features of Eclipse or areas 
  where existing features will be significantly reworked. Each item indicates 
  the components likely affected by that work item (many items involve coordinated 
  changes to several components). Numbers in parentheses link to bugzilla problem 
  reports for that plan item. 

</p>

<h3><a name="Platform">Eclipse Platform project</a></h3>

<p>The Eclipse Platform provides the most fundamental building blocks. Plan
  items reflect new features of the Eclipse Platform, or areas where existing
  features will be significantly reworked.
</p>

<h6>Committed Items (Eclipse Platform project)</h6>
<blockquote> 

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed) 
    <strong>Provide more flexible workspaces.</strong> Currently in Eclipse there 
    is a direct connection between IResources and files and directories on the 
    local file system. Eclipse should loosen this connection, by abstracting out 
    its dependency on java.io.File, and allowing for alternative implementations. 
    This would enable, for example, uses where the workspace is located on a remote 
    server, or accessed via a non-file-based API, or has a non-trivial mapping 
    between the resources and the physical layout of the files.
    [Resources, Text, UI] 
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106176">106176</a>) 
    [Theme: Design for Extensibility, Enterprise Ready]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed) 
    <strong>Improve and extend the SWT widget set.</strong> Modern UI design 
    is a constantly moving target. SWT should provide the tools needed to implement 
    first class user interfaces. For example: sort indicators in SWT tables; improved 
    coolbar behavior/appearance; and new controls such as collapsible groups.
    [SWT] 
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106182">106182</a>) 
    [Theme: Design for Extensibility, Appealing to the Broader Community]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed, text changed)
    <strong>Address new window system capabilities.</strong> SWT's basis in native 
    widgets is one of Eclipse's major strengths. For this to remain true, SWT 
    must continue to grow to encompass new mainstream desktop platforms and new 
    capabilities added to existing platforms. For the 3.2 release, SWT should 
    provide support for Windows Vista. 
    [SWT]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106184">106184</a>) 
    [Theme: Appealing to the Broader Community]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed, text changed)
    <strong>Enhance the text editor.</strong> The Eclipse Text component provides 
    a powerful editing framework that is useful in many contexts, but some of 
    its capabilities are currently only available in the Java editor. The Java 
    editor should be opened up to allow more general access to the reconciling, 
    code assist, and template proposal mechanisms. Another enhancement to the
    look and feel of the editor is to show change history and comments in the
    editor. Other possible enhancements include improving the Find/Replace dialog
    and annotation roll-overs.
    [Text] 
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106194">106194</a>) 
    [Theme: Design for Extensibility]</p>
    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Improve task assistance in text fields.</strong> Eclipse has numerous 
    wizards and dialogs that contain text fields where there are constraints on 
    the values that can be entered, and often task assistance can be provided, 
    for example, in the form of potential values. Eclipse should provide an enhanced 
    text field that has indicators for required fields, and content assist.
    [UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106199">106199</a>) 
    [Theme: Simple to Use]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed, text changed)
    <strong>Enhance the debug platform.</strong> The debug support in Eclipse is 
	increasingly being used in areas that require more flexible mechanisms 
	than those required by simple Java programs. Features will be provided as  
	provisional API subject to change in a future release. Features include: a 
	flexible element hierarchy in debug views to account for different 
	architectures such as multi-core processors, thousands of threads, etc; 
	asynchronous, cancellable interactions when retrieving view content and 
	labels; model driven view updates; a debug context service allowing for 
	retargettable debug actions, flexible view wiring and pluggable source 
	lookup.
	[Debug]
	(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106205">106205</a>) 
    [Theme: Design for Extensibility, Enterprise Ready]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Provide a more customizable UI.</strong>

    Products often need direct control over the presence and arrangement of
    UI elements. Similarly, end users expect to be able to customize the UI
    to better match their workflow. Eclipse should enable both products and
    end users to have more control over the user interface. For example,
    the workbench layout should be made more flexible and configurable, and
    there should be a framework to allow better control over the presence
    and ordering of menu and toolbar items.
    [UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106189">106189</a>) 
    [Theme: Simple to Use]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Capabilities/Perspectives/Components.</strong> The UI component has 
    several frameworks for customizing the presentation, filtering the set of 
    available options and supporting task-based UIs tailored to the user's role. 
    This support should be rationalized and better documented.
    [UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=80130">80130</a>) 
    [Theme: Simple to Use]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Provide more support for large scale workspaces.</strong> In some 
    situations, users have workspaces containing hundreds of projects and hundreds 
    of thousands of files. Scoped builds and working sets have become important 
    tools for these users, and the performance optimizations done in Eclipse 3.1 
    have proven helpful. Eclipse should have even more support for dealing with 
    very large workspaces, including improved searching, filtering, working sets, 
    and bookmarks. This goes hand-in-hand with ongoing work to discover and address 
    performance issues.
    [UI, Resources]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106192">106192</a>) 
    [Theme: Scaling Up, Enterprise Ready]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed, text changed)
  <strong>Improve cheat sheet support.</strong> The Eclipse cheat sheet
    infrastructure was implemented 3.0, but is still not widely used. For cheat
    sheets to be become more widely adopted, the base support should be enhanced
    in several ways, including: adding support for invoking commands without the
    need for Java programming; make cheat sheets more scalable; providing for
    nonlinear dependancy between steps and enhancing the implementation to
    support working with modal dialogs.
    [UA, UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106196">106196</a>) 
    [Theme: Simple to Use, Design for Extensibility]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Support dynamic and reusable content in User Assistance components.</strong> 
    In previous releases, Eclipse Help manipulated content as a reference. Although 
    the representation is simple and reliable, it is difficult to tailor the content 
    for multiple presentations, or to provide incremental content contributions, 
    content reuse, content filtering etc. The representation for help content 
    should be improved. Also, branding information should be separated from the 
    rest of the content to simplify aggregating multiple contributions into larger 
    units. These features also apply to Welcome, CheatSheets and the dynamic help 
    view.
    [UA]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106201">106201</a>) 
    [Theme: Design for Extensibility]</p>
    

</blockquote>
<h6>Proposed Items (Eclipse Platform project)</h6>
<blockquote>

  <p><strong>Support logical model integration.</strong> The Eclipse Platform 
    supports a strong physical view of projects containing resources (files and 
    folders) in the workspace. However, there are many situations where plug-in 
    developers would prefer to work with a logical model that is appropriate to 
    their domain. Eclipse should ease the task for plug-in developers who want 
    to make logical model-aware plug-ins. To do this, Eclipse should provide more 
    flexible mechanisms for contributing actions on models that do not have a 
    one-to-one mapping to files on the users hard disk. This would, for example, 
    allow a team provider's repository operations to be made available on logical 
    artifacts. In addition, existing views like the navigator and problems view 
    should be generalized to handle logical artifacts and, in general, there should 
    be better control over what is displayed in views and editors based on the 
    logical models that the end user is working on.
    [Resources, UI, Team] 
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=37723">37723</a>) 
    [Theme: Design for Extensibility]</p>

  <p><strong>Update Enhancements.</strong> As the number and range of Eclipse 
    plug-ins continues to grow, it becomes increasingly important to have a powerful 
    update/install story. For instance, if more information about an Eclipse install 
    was available earlier, it would be possible to pre-validate that it would 
    be a compatible location to install particular new features and plug-ins. 
    This information could also be used to deal with conflicting contributions. 
    Update should also be improved to reduce the volume of data that is transferred 
    for a given update, and PDE should provide better tools for creating and deploying 
    updates.
    [Update, Runtime, PDE]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106185">106185</a>) 
    [Theme: Enterprise Ready]</p>

  <p><strong>Provide pervasive user-assistance search capabilities.</strong> An 
    important element of the user-assistance support in Eclipse is the federated 
    help search support that was added in R3.1. This support should be expanded 
    to pull in more useful results from various sources. It should also be made 
    more extensible to assist other information contributors, and made more pervasive 
    in the UI.
    [UA]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106198">106198</a>) 
    [Theme: Simple to Use]</p>

  <p><strong>Help System enhancements.</strong> Enhance the existing Help System functionality in 
    several ways, including support for navigation bread crumbs, support for remote 
    installation of Help documentation, documentation index, more extensible dynamic 
    help view, and various other enhancements.
    [UA]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=114243">114243)</a> 
    [Theme: Design for Extensibility]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Additional debug platform enhancements.</strong> The debug support in 
	Eclipse is increasingly being used in areas that require more flexible 
	mechanisms than those required by simple Java programs. Additional work 
	areas include: the introduction of table trees in standard debug views for 
	better/flexible presentation; drag and drop between all debug views; 
	support for incremental content retrieval and virtual trees; asynchronous 
	table view with pluggable cell editors; and multiple debug scopes/contexts 
	to support simultaneous debugging of different applications side-by-side 
	in different sets of debug views.
	[Debug]
	(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127874">127874</a>) 
    [Theme: Design for Extensibility, Enterprise Ready]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Deliver support for ICU4J with the Eclipse Platform.</strong> 
    Quality internationalization is very important in the modern software world.
    The ability to fully enable products and applications for double-byte and
    bi-directional languages is a requirement of any software platform. ICU4J 
    (<a href=" http://icu.sourceforge.net/">http://icu.sourceforge.net/</a>)
    resolves many of the known issues with internationalization for Java, and
    thus adopting ICU4J will provide the Eclipse Platform with the strong
    internationalization support it needs to make Eclipse-based applications
    competitive. The first goal of this work is to make any required porting
    effort as minimal and straight forward as possible.  In addition, we will
    ensure that applications that must run in constrained environments
    (such as embedded RCP applications) will not pay a footprint penalty if
    they do not need full internationalization flexibility.
  [All]
  (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127876">127876</a>) 
  [Theme: Design for Extensibility, Enterprise Ready]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Create Universal Welcome.</strong> 
    Since Eclipse 3.0, it is possible to create a powerful Welcome using the
    provided framework support. In the increasingly componentized environment,
    it is more and more impractical to create extensions for separate
    implementations in different products. Based on experience gained in
    creating Welcome implementations so far, a universal Welcome implementation
    will be provided that can be shared between many products. Universal
    Welcome will be customizable by both products and users, and will
    provide for intelligent merging of content in root pages. A selected
    number of root pages that can cover the needs of most products will
    be available.
  [UA]
  (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127842">127842</a>) 
  [Theme: Simple to Use, Design for Extensibility]</p>

</blockquote>
<h6>Deferred Items (Eclipse Platform project)</h6>
<blockquote>

  <p><strong>Embedding editors and views.</strong> Various problems are encountered 
    when trying to embed editors or views within other workbench parts. For example, 
    the current compare infrastructure requires creating a separate text editor 
    for viewing changes between files. This is due to a limitation in the workbench 
    that prevents editors from being embedded inside views or other controls. 
    As a consequence, the compare editor's nested editors don't support the full 
    set of features provided by the corresponding real content-type-specific editor. 
    This represents a major usability problem: the user must switch to the real 
    editor to make changes and then return to the compare view to review the changes. 
    Eclipse should be more flexible in the ways various editors can be used and 
    reused. The UI component model should be improved to support nesting of workbench 
    parts, and reduce the coupling of parts to particular locations in the workbench, 
    allowing for more flexible UI configurations.
    [UI, Compare, Text]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=71125">71125</a>) 
    [Theme: Design for Extensibility]</p>
    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> deferred)
    <strong>Improve UI Forms.</strong> UI Forms are increasingly being used in 
    the Eclipse user interface. The UI Form support should be improved to allow 
    for more pervasive use in 3.2. Critical widget functionality should be moved 
    to SWT to ensure quality and native look and feel. The remaining UI Forms 
    code (minus FormEditor) should be pushed down into JFace so that it is available 
    in the Eclipse workbench.
    [SWT, UI, UA]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106203">106203</a>) 
    [Theme: Simple to Use, Design for Extensibility]</p>

  
  <p><strong>Provide a single user-assistance content delivery mechanism.</strong> 
    In Eclipse 3.1, three different user-assistance vehicles are used to help 
    users in various contexts: the initial user experience shows the 'Welcome' 
    content; cheat sheets assist during long tasks; Help shows the traditional 
    help topics. These vehicles use similar concepts but have separate/duplicate 
    code bases. They should be reworked so that a single content delivery mechanism 
    is used in various contexts, allowing content producers to benefit from a 
    single way of contributing content, making all the content searchable, and 
    making it presentable in various contexts. This should also take into account 
    whether content is local or remote.
    [UA]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106200">106200</a>) 
    [Theme: Design for Extensibility]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> deferred) 
    <strong>Improve serviceability.</strong> When an end user encounters a problem 
    with Eclipse, it is important for support teams to be able to diagnose the 
    root cause of the failure, and identify the failing plug-in. Eclipse should 
    have enhanced error reporting tools that make it easy for end users to report 
    problems. Tools should be available at all times, so that knowledgeable users 
    could diagnose unexpected behavior such as slowdowns or exceptional memory 
    use.
    [Runtime, UI, SWT]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106193">106193</a>) 
    [Theme: Simple to Use, Enterprise Ready]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new, deferred) 
    <strong>Support GB18030-2.</strong> The GB18030-2 Chinese character set is becoming
    increasingly important in the Java community. Eclipse should support GB18030-2 
    on platforms where it is supported natively. Because of the fundamental and 
    far reaching impact of implementing this support, it is expected that it will
    require an SDK (and indeed entire Eclipse Foundation) wide strategy.
    [All]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127864">127864</a>) 
    [Theme: Simple to Use, Enterprise Ready]</p>
    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> deferred)
    <strong>Increase flexibility when building RCP applications.</strong> The Eclipse 
    text editor should better support RCP applications, by making features like 
    the following available to them: annotation presentation and navigation, user 
    assigned colors and fonts, spell checking, folding, quick diff, templates, 
    and file buffers. The Eclipse workbench layout should be further opened up 
    to allow RCP applications to have more control over its presentation.
    [Text, UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106187">106187</a>) 
    [Theme: Rich Client Platform]</p>

    
    
</blockquote>
<p>(End of items for Eclipse Platform project.)</p>

<h3><a name="JDT">Java development tools (JDT) project</a></h3>

<p><a href="http://www.eclipse.org/jdt/index.html">Java development tools</a> (JDT)
implements a Java IDE based on the Eclipse Platform. The following work items
reflect new features of JDT, or areas where existing features will be
significantly reworked.</p>

<h6>Committed Items (Eclipse JDT project,)</h6>
<blockquote> 

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Add support for Java SE 6 features.</strong> Java SE 6 (aka "Mustang") 
    will likely contain improvements to javadoc tags (like @category), classfile 
    specification updates, pluggable annotation processing APIs, and new compiler 
    APIs, all of which will require specific support.
    [JDT Core, JDT UI, JDT Text, JDT Debug]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106206">106206</a>) 
    [Theme: Appealing to the Broader Community]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed, text changed)
    <strong>Improve NLS tooling.</strong> The Eclipse NLS tooling should better 
    support the new Eclipse string externalization pattern added in 3.1. 
    [JDT Text] (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106210">106210</a>) 
    [Theme: Simple to use, Scaling up]</p>
    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed, title and text changed)
    <strong>Split refactoring.</strong> Refactoring currently relies on a closed 
	world assumption. This means that all of the code to be refactored must be 
	available in the workspace when the refactoring is triggered. However for 
	large distributed teams, the closed world approach isn't really feasible. 
	The same is true for clients which use binary versions of libraries where 
	API changes from one version to another. In 3.2 the closed world 
	assumptions will be relaxed in such a way that a refactoring executed in 
	workspace A can be "reapplied" on workspace B to refactor any remaining 
	references to the refactored element.
    [JDT Core/UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106207">106207</a>) 
    [Theme: Scaling Up].</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Enable compiler participation.</strong> JDT compilation technology will 
	be opened to enable pluggable participation.Compilation takes place in 
	various stages, such as building and editor reconciling. A participant 
	will be able to introspect the Java code using DOM/AST API, perform 
	semantic analysis, issue some markers and possibly generate new source 
	files.
    [JDT Core, JDT UI, JDT Text]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127885">127885</a>) 
    [Theme: Multi-Language Support, Enterprise Ready, Design for Extensibility]</p>
    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>More static analysis.</strong> Code quality can be further improved by 
	new advanced configurable compiler diagnostics, available either when 
	building or when editing Java files. The compiler will conduct some null 
	reference analysis in order to anticipate some NullPointerException at 
	runtime. For cleaning up code, the compiler will detect obsolete 
	$NON-NLS$ tags and unused break/continue label. Assigning 
	a parameter will be configurable as a poor coding style. For 
	assisting migrating existing code to Java 5.0, the compiler will 
	optionally signal any reference to a raw type, not only unchecked ones.
	Additionally, users will be able to configure optional errors as 
	being non fatal, and thus allow valid classfile generations.
    [JDT Core]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127887">127887</a>) 
    [Theme: Appealing to the Broader Community]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Code style clean ups.</strong> We will provide new functionality to 
	easily establish project wide code conventions. The 'Clean up' action will 
	take a set of files as input to analyze and offer to fix multiple code 
	style issues at once. Examples of 'clean up' actions are the removal of 
	unnecessary code or qualify all field accesses with 'this'; or assisting 
	migration to Java 5.0
    [JDT UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127888">127888</a>) 
    [Theme: Simple To Use]</p>
    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Improve JUnit support.</strong> The JUnit view will be improved to 
	manage more than one set of results. This will allow running multiple 
	tests simultaneously and keep a history of test results. We will also 
	investigate to support JUnit4 which will require the use of J2SE 5.0 in 
	Eclipse itself.
    [JDT UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127889">127889</a>) 
    [Theme: Simple To Use]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Support arbitrary Java content types.</strong> Add support for 
	compilation units with extension different than ".java". This will for 
	example allow components like AJDT to seamlessly integrate their AspectJ 
	".aj" files into the Java tooling. Existing assumptions on ".java" 
	extensions will be removed throughout the tools.
    [JDT UI, JDT Core, JDT Debug]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127891">127891</a>) 
    [Theme: Design for Extensibility: Be a Better Platform]</p>
    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>More refactorings.</strong> Various enhancements for existing 
	refactorings including hierarchical package rename and delete, updating 
	related fields, methods and locals on type rename and improved visibility 
	adjustments on move refactorings will be implemented. Furthermore, 
	existing refactorings will be improved to preserve API compatibility where 
	possible (for example when renaming a method, a deprecated stub with the 
	old signature will be generated that forwards to the new method). We will 
	investigate in a new refactoring 'Extract super class'.
    [JDT UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127892">127892</a>) 
    [Theme: Simple To Use]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Improve user experience in presence of syntax errors.</strong> While 
	editing code, all Java tools need to manipulate incomplete sources, 
	containing many syntax errors. Though the structure of the units is 
	usually well extracted (as demonstrated in outline view), power tooling is 
	requiring more than just structural information; many advanced 
	functionalities are requiring a detailed DOM AST to conduct syntax 
	colouring, action enabling, problem highlighting, formatting, etc... New 
	strategies will be explored to recover statements and expressions from 
	incomplete programs and still enable creating detailed DOM AST carrying 
	resolved binding information. All tooling will need to be calibrated to 
	properly handle detailed recovered DOM AST.
    [JDT Core, JDT UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127895">127895</a>) 
    [Theme: Simple to Use]</p>
    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Enhance Java infrastructure.</strong> As part of its increased support 
	for Javadoc, the model will support extracting Javadoc from attached 
	source or HTML. It will allow defining optional 
	classpath entries. The codeassist engine will be support 
	pluggable extensions which can participate and contribute new proposals 
	and/or filter others. Codeassist will support CamelCase pattern;
    and provide completions on new artifacts such as Javadoc, 
	break/continue label.
    [JDT Core, JDT Text]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127898">127898</a>) 
    [Theme: Appealing to the Broader Community]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Support for execution environments.</strong> An execution environment 
	describes the capabilities of a Java runtime environment. For example, an 
	execution environment may represent J2SE-1.4. The Java launching 
	infrastructure supports an extensible set of execution environments to be 
	contributed to the platform and for delegates to identify installed JREs 
	compatible with an environment. This allows teams to build, run, and debug 
	based on execution environments rather than being bound to specific 
	installed JREs. Additionally, new APIs will allow JREs to be queried for 
	system properties and specific JRE configurations will be able to be 
	contributed to the set of installed JREs via an extension point.
    [JDT Core, JDT Debug]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127899">127899</a>) 
    [Theme: Simple to Use]</p>
    
</blockquote>
<h6>Proposed Items (Eclipse JDT project)</h6>
<blockquote> 

  <p><i>None at this time.</i></p>

  
</blockquote>
<h6>Deferred Items (Eclipse JDT project)</h6>
<blockquote>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> deferred)
    <strong>Implement library projects.</strong> For plug-in development, PDE 
    distinguishes between the plug-in projects you are working on (source plug-in 
    projects) and plug-in projects you are working with but not actually changing 
    (binary plug-in projects). Making this distinction affords the user the benefits 
    of having full source for everything in their workspace where it's easily 
    browsed and searched, while permitting economies because the latter kind of 
    projects do not actually have to be (re)compiled. This work item is to support 
    a similar notion of library project for Java development in general. The user 
    should be able to flag a Java project as a library project; JDT would then 
    know how to present library projects appropriately at the UI, and how to deal 
    with them more efficiently using generated binaries.
    [JDT Core, JDT UI, PDE] 
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=80162">80162</a>) 
    [Theme: Design for Extensibility]</p>

</blockquote>
<p>(End of items for Eclipse JDT project.)</p>

<h3><a name="PDE">Plug-in development environment (PDE) project</a></h3>

The <a href="http://www.eclipse.org/pde/index.html">plug-in development
environment</a> (PDE) consists of tools for developing plug-ins for the
Eclipse Platform. The following work items reflect new features of PDE, or areas
where existing features will be significantly reworked.

<h6>Committed Items (Eclipse PDE project)</h6>
<blockquote>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>New source lookup for debugging Eclipse applications.</strong> The 
    default source lookup mechanism for debugging Java applications has scalability 
    issues since the debugger may needing to scan a list of hundreds of plug-in 
    projects each time it look up a source file. PDE should provide its own source 
    path computer to which the debugger can delegate the task of locating source 
    files. In addition to faster lookups, the PDE-based approach will be better 
    positioned to handle duplicate source files on the same source path. It would 
    also allow the user to easily debug plug-ins against different targets without 
    having to change the Target Platform in the preferences.
    [PDE, Debug, Runtime] 
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106212">106212</a>) 
    [Theme: Scaling Up]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Improve target support.</strong> PDE manages a model of the target 
    Eclipse for which you are developing. Targets may be complex and diverse, 
    and switching targets or launch configurations can be expensive. PDE should 
    be extended to support named targets and automatically track changes to the 
    workspace. [PDE, Runtime] (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106211">106211</a>) 
    [Theme: Simple to Use, Enterprise Ready]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Improve PDE build.</strong> PDE Build is fundamental to how the Eclipse 
    Platform releases are produced. It is also increasingly being used by other 
    Eclipse projects and in the wider community. Potential improvements to PDE 
    build include parallel cross-building, incremental building of plug-ins, increased 
    integration with the workspace model, and support for additional repository 
    providers. [PDE] (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106214">106214</a>) 
    106214[Theme: Enterprise Ready]</p>

</blockquote>
<h6>Proposed Items (Eclipse PDE project)</h6>
<blockquote> 

  <p><i>None at this time.</i></p>
  
</blockquote>
<h6>Deferred Items (Eclipse PDE project)</h6>
<blockquote>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> deferred)
    <strong>API-aware tools.</strong> Given the importance that the Eclipse community 
    places on stable, robust APIs, having good support for their implementation 
    is critical. The support within Eclipse for describing APIs should be improved, 
    along with better tools from assisting developers to stick to APIs provided 
    by other plug-ins. [PDE, JDT] (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106213">106213</a>) 
    [Theme: Enterprise Ready]</p>

</blockquote>
<p>(End of items for Eclipse PDE project.)<p>

<h3><a name="Equinox">Equinox project</a></h3>

The <a href="http://www.eclipse.org/equinox/index.html">Equinox</a>
project provides an implementation of the OSGi R4 core framework
specification, a set of bundles that implement various optional OSGi
services and other infrastructure for running OSGi-based systems. The
following work items reflect new features of Equinox, or areas where
existing features will be significantly reworked.

<h6>Committed Items (Equinox project)</h6>
<blockquote>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Give OSGi a first class presence on eclipse.org.</strong> 
    Eclipse is based on an efficient, highly scalable OSGi implementation, which 
    has always been usable as a standalone component. OSGi should have a first 
    class presence on eclipse.org, including making it easy for developers to 
    reuse the Eclipse OSGi implementation in their own applications. To support 
    this, a separate OSGi download should be provided, as is done for SWT.
    [Runtime] 
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106188">106188</a>) 
    [Theme: Appealing to the Broader Community, Rich Client Platform]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Refactor the runtime.</strong>
    The Eclipse runtime is currently one monolithic plugin that contains
    the extension registry, jobs, preferences, content types, application model
    and various helper/utility classes. Various use cases demand independent 
    use of these facilities. The runtime should be refactored into individual 
    bundles for the different functional areas to improve the support for specific 
    use cases such as using the extension registry on standard OSGi systems or 
    standalone, and better integration between the Eclipse application model and 
    OSGi (e.g., the OSGi MEG application model).
    [Framework, Bundles, Runtime] 
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=113663">113663</a>) 
    [Theme: Appealing to the Broader Community, Rich Client Platform]</p>

</blockquote>
<h6>Proposed Items (Equinox project)</h6>
<blockquote>

  <p><i>None at this time.</i></p>
  
</blockquote>
<h6>Deferred Items (Equinox project)</h6>
<blockquote>

  <p><i>None at this time.</i></p>
  
</blockquote>
<h6>(End of items for Equinox project.)</h6>

  
  <h2>Tools Project</h2>
<p>The Tools top-level Project does not have an overall project plan.</p>

  <h2>Web Tools (WTP)</h2>
    <div id="globalWrapper">
      <div id="column-content">
	<div id="content">
	  <a name="top" id="contentTop"></a>
	    <div id="contentSub"></div>
	    	    	    <!-- start content -->
	    <table id='toc' class='toc'><tr><td><div id='toctitle'><h3>Contents</h3></div>
<ul>
<li class='toclevel-1'><a href="#Eclipse_Web_Tools_Project_DRAFT_1.5_Plan"><span class="tocnumber">1</span> <span class="toctext">Eclipse Web Tools Project DRAFT 1.5 Plan</span></a>

<ul>
<li class='toclevel-2'><a href="#Release_deliverables"><span class="tocnumber">1.1</span> <span class="toctext">Release deliverables</span></a></li>
<li class='toclevel-2'><a href="#Release_milestones_and_release_candidates"><span class="tocnumber">1.2</span> <span class="toctext">Release milestones and release candidates</span></a></li>
<li class='toclevel-2'><a href="#Target_Operating_Environments"><span class="tocnumber">1.3</span> <span class="toctext">Target Operating Environments</span></a></li>
<li class='toclevel-2'><a href="#Compatibility_with_Other_WTP_Releases"><span class="tocnumber">1.4</span> <span class="toctext">Compatibility with Other WTP Releases</span></a></li>

<li class='toclevel-2'><a href="#Eclipse_WTP_Subprojects"><span class="tocnumber">1.5</span> <span class="toctext">Eclipse WTP Subprojects</span></a></li>
<li class='toclevel-2'><a href="#Common_goals"><span class="tocnumber">1.6</span> <span class="toctext">Common goals</span></a>
<ul>
<li class='toclevel-3'><a href="#Adopter_readiness"><span class="tocnumber">1.6.1</span> <span class="toctext">Adopter readiness</span></a></li>
</ul>
</li>
<li class='toclevel-2'><a href="#Web_Standard_Tools_subproject"><span class="tocnumber">1.7</span> <span class="toctext">Web Standard Tools subproject</span></a>

<ul>
<li class='toclevel-3'><a href="#Architectural_harmonization"><span class="tocnumber">1.7.1</span> <span class="toctext">Architectural harmonization</span></a></li>
<li class='toclevel-3'><a href="#Web_Services_Support"><span class="tocnumber">1.7.2</span> <span class="toctext">Web Services Support</span></a></li>
<li class='toclevel-3'><a href="#Validation_Framework"><span class="tocnumber">1.7.3</span> <span class="toctext">Validation Framework</span></a></li>
</ul>
</li>
<li class='toclevel-2'><a href="#J2EE_Standard_Tools"><span class="tocnumber">1.8</span> <span class="toctext">J2EE Standard Tools</span></a>

<ul>
<li class='toclevel-3'><a href="#Architectural_harmonization_2"><span class="tocnumber">1.8.1</span> <span class="toctext">Architectural harmonization</span></a></li>
<li class='toclevel-3'><a href="#J2EE_1.5_Support_.28technlogy_preview.29"><span class="tocnumber">1.8.2</span> <span class="toctext">J2EE 1.5 Support (technlogy preview)</span></a></li>
<li class='toclevel-3'><a href="#Web_Services_Support_2"><span class="tocnumber">1.8.3</span> <span class="toctext">Web Services Support</span></a></li>
<li class='toclevel-3'><a href="#Server_Runtime"><span class="tocnumber">1.8.4</span> <span class="toctext">Server Runtime</span></a></li>

</ul>
</li>
</ul>
</li>
</ul>
</td></tr></table>
<p><script type="text/javascript"> if (window.showTocToggle) { var tocShowText = "show"; var tocHideText = "hide"; showTocToggle(); } </script>
</p>
<p><b>Revised draft</b> January 24, 2006 (by Jochen Krause / WTP Requirements Group based on WTP Project 1.0 Plan 
and Eclipse Project DRAFT 3.2 Plan) 

</p><p><i>Please send comments about this <b>draft plan</b> to the</i> wtp-pmc@eclipse.org <i>mailing list.</i> 
</p><p>This document lays out the feature and API set for the next feature release of Eclipse Web Tools after 1.0, designated release 1.5. 
This document is a draft and is subject to change, we welcome all feedback. 
</p><p><b>Web Tools 1.5 will be compatible with Eclipse 3.2 Releases.</b> 
</p><p>Plans do not materialize out of nowhere, nor are they entirely static. To ensure the planning process is transparent and open to the entire Eclipse community, we (the Eclipse Web Tools Requirement Group &amp; the Web Tools PMC) post plans in an embryonic form and revise them throughout the release cycle. 
</p><p>The first part of the plan deals with the important matters of release deliverables, release milestones, target operating environments, and release-to-release compatibility. These are all things that need to be clear for any release, even if no features were to change.  
</p><p>The remainder of the plan consists of plan items for the two subprojects under the Eclipse Web Tools top-level project. The third subproject, JSF is not covered by this plan, as it is a technology project in the incubator state. Each plan item covers a feature or API that is to be added to Web Tools, or some aspect of Web Tools that is to be improved. Each plan item will have its own entry in the Eclipse bugzilla database, with a title and a concise summary (usually a single paragraph) that explains the work item at a suitably high enough level so that everyone can readily understand what the work item is without having to understand the nitty-gritty detail. 
</p><p>Not all plan items represent the same amount of work; some may be quite large, others, quite small. Some plan items may involve work that is localized to a single Platform component; others may involve coordinated changes to several components; other may pervade the entire Platform. Although some plan items are for work that is more pressing that others, the plan items appear in no particular order. 

</p><p>With the previous release as the starting point, this is the plan for how we will enhance and improve it. Fixing bugs, improving test coverage, documentation, examples, performance tuning, usability, etc. are considered routine ongoing maintenance activities and are not included in this plan unless they would also involve a significant change to the API or feature set, or involve a significant amount of work. The intent of the plan is to account for all interesting feature work. 
</p><p><br />
The current status of each plan item is noted: 
</p><p><b>High Priority</b> plan item - A high priority plan item is one that we have decided to address for the release (committed). 
</p><p><b>Medium Priority</b> plan item - A medium priority plan item is one that we are considering addressing for the release. 
Although we are actively investigating it, we are not yet in a position to commit to it, or to say that we won't be able to address it. 
</p><p><b>Low Priority</b> plan item – A low priority plan item is one that we addressed for a release we will only address that item if one 
component has addressed all high and medium priority items 
</p><p><b>Deferred</b> plan item - A reasonable proposal that will not make it in to this release for some reason is marked as deferred with 
a brief note as to why it was deferred. Deferred plan items may resurface as committed plan items at a later point. 
</p><p><br />
</p>

<p>The release deliverables have the same form as previous releases, namely: 
</p>
<ul><li> Source code release for Eclipse WTP Project, available as versions tagged "R1_5" in the Eclipse WTP Project
</li><li> CVS repository
</li><li> Eclipse WTP runtime binary and SDK download with all Eclipse pre-reqs (downloadable).
</li><li> Eclipse WTP runtime binary and SDK download (downloadable).
</li></ul>
<p>In addition, the Eclipse WTP runtime binary and SDK will be available as part of the "Callisto" update site.

</p>
<p>Release milestone occurring at roughly 6 week intervals in synchronisation with the Eclipse Platform milestone releases (starting 
early 2006 latest) and will be compatible with Eclipse 3.2 releases. 
</p><p>The milestones and release candidates are: 
</p>
<pre>* M4  -     January 13, 2006
* M5  -     March 3, 2006 (planned API freeeze)
* M6  -     April 14, 2006 (This is Feature Freeze except for JSF and Dali). 
                           (this 4/14 date is also called both RC0 and RC1 in Callisto plan).
* RC2 -     April 28, 2006 (tiny grace period where any safe fix can be made). 
* RC3 -     May 12, 2006 (component lead approval required for all fixes)
* RC4 -     May 26, 2006 (planned code freeze, PMC approval required for all fixes)
* RC5 -     June 16, 2006 (PMC approval and adopter sign-off required for all fixes)
* RC6 -     Jume 28, 2006 Golden Master
* Release - June 30, 2006 - WTP 1.5 Release (part of the "Callisto" joint release)
</pre>
<p>Eclipse WTP is built on the Eclipse platform itself.

</p><p>Most of the Eclipse WTP is "pure" Java™ code and has no direct dependence on the underlying operating system. The chief dependence is therefore on Eclipse. The 1.5 release of the Eclipse WTP Project is written and compiled against version 1.4 of the Java 2 Platform APIs, and targeted to run on version 1.4 and 5.0 (1.5) of the Java 2 Runtime Environment, Standard Edition. 
</p><p><br />
Eclipse WTP is mainly tested and validated on Windows platforms, it should run on all platforms validated by the platform project:
</p><p><a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_2.html#TargetOperatingEnvironments#TargetOperatingEnvironments" class='external text' title="http://www.eclipse.org/eclipse/development/eclipse project plan 3 2.html#TargetOperatingEnvironments#TargetOperatingEnvironments" rel="nofollow">Eclipse Target Operating Environments</a>
</p><p>Servers integrated into Eclipse WTP deliverables will be tested and validated on the same platforms listed above. Tests for other platforms will be relying on the community support. 
</p><p><br />
<b>Internationalization</b>
</p><p>The Eclipse WTP is designed as the basis for internationalized products. The user interface elements provided by the Eclipse SDK components, including dialogs and error messages, are externalized. The English strings are provided as the default resource bundles. Other language support, if any, will rely on the community support.
</p>
<p>Project Compatibility: 

</p>
<ul><li> Full compatibility with 1.0 projects
</li><li> <b>TBD</b>
</li></ul>
<p>Eclipse WTP deliverables will be compatible with Eclipse 3.2. No special attention will give for being compatible with previous Eclipse versions. 
</p><p><br />
</p>
<p>The Eclipse WTP consists of 3 subprojects. Each subproject is covered in its own section: 
</p><p><a href="http://eclipse.org/webtools/wst/index.html" class='external text' title="http://eclipse.org/webtools/wst/index.html" rel="nofollow">Web Standard Tools (WST)</a>

</p><p><a href="http://eclipse.org/webtools/jst/index.html" class='external text' title="http://eclipse.org/webtools/jst/index.html" rel="nofollow">J2EE Standard Tools (JST)</a>
</p><p><a href="http://www.eclipse.org/webtools/jsf/index.html" class='external text' title="http://www.eclipse.org/webtools/jsf/index.html" rel="nofollow">Java Server Faces Tools (JSF)</a>
</p><p>For the WST and JST subprojects items are listed, JSF is not covered as it currently is a technology project 
(in incubator state), the items listed reflect new features of the Web Tools Platform, or areas where existing 
features will be significantly reworked. Common goals are listed in the “Common goals” area. 
</p><p>TBD (Each item indicates the components likely affected by that work item (many items involve coordinated changes to several components). Numbers in parentheses link to bugzilla problem reports for that plan item)
</p><p>Note that JSF and EJB (currently incubating in the technology project) will be present in WTP 1.5 in "provisional" status - APIs in these areas will be provisional, and the release number for these two areas of functionality should be considered "0.5" rather than the overall WTP release numbering of "1.5.". Users should expect API and tool refinements in these areas, with a likelihood for more rapid (and extensive) revisions than in the base WTP code.
</p>

<ul><li> productization support <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=125751" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=125751" rel="nofollow">[125751</a>]
</li><li> improve feature split <a href="http://www.eclipse.org/webtools/development/arch_and_design/subsystems/SubsystemsAndFeatures.html" class='external text' title="http://www.eclipse.org/webtools/development/arch and design/subsystems/SubsystemsAndFeatures.html" rel="nofollow">Subsystem and Features document</a>
</li><li> improve API coverage (convert additional provisional areas to APIs)
</li></ul>

<ul><li> Moving generic components to platform (common navigator <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=125744" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=125744" rel="nofollow">[125744</a>], tabbed properties page <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=125745" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=125745" rel="nofollow">[125745</a>])
</li><li> moving to the common undo stack (from the emf undo stack) <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=88011" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=88011" rel="nofollow">[88011</a>]
</li></ul>
<ul><li> WS Security [[deferred]

</li><li> upgrade to Axis 1.3 [<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=116308" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=116308" rel="nofollow">116308</a>]
</li><li> Axis 2.0 Support [optional item, help wanted]
<ul><li> SOAP 1.2 Support
</li></ul>
</li></ul>
<ul><li> Enhance validation framework [<a href="http://www.eclipse.org/webtools/jst/components/j2ee/proposals/ValidatorFramework.html" class='external text' title="http://www.eclipse.org/webtools/jst/components/j2ee/proposals/ValidatorFramework.html" rel="nofollow">Proposal</a>]

</li></ul>
<ul><li> EJB3 (alignment with the DALI project - <a href="http://www.eclipse.org/dali/" class='external free' title="http://www.eclipse.org/dali/" rel="nofollow">http://www.eclipse.org/dali/</a>)
</li></ul>

<ul><li> EJB3 (by lightweight integration with the DALI project - <a href="http://www.eclipse.org/dali/" class='external free' title="http://www.eclipse.org/dali/" rel="nofollow">http://www.eclipse.org/dali/</a>)
</li><li> JSR 175 (Metadata) Support - only for new functionality: JSF, EJB3
</li><li> JSF Support (provided by the JSF subproject)
</li></ul>
<ul><li> JSR 181 (Web Services) [optional item - help wanted]
</li></ul>

<ul><li> JSR 88 Support, Advanced Server Support for one/multiple open source J2EE server [[deferred]
</li><li> Restructure Generic Server Support <a href="/index.php/RestructureGenericServerSupportProposal" title="RestructureGenericServerSupportProposal">RestructureGenericServerSupportProposal</a>
</li></ul>
</div>
</div>
</div>
</div>
  
  <h2>Test & Performance Tools Platform (TPTP)</h2>
  
  <h2>Business Intelligence and Reporting tools (BIRT))</h2>
  
  <h2>Data Tools Platform (DTP)</h2>
  
  <h2>Device Software Development Platform (DSDP)</h2>
  
  <h2>SOA Tools (STP)</h2>
  
  <h2>Technology (incubator)</h2>

      <p><i>March 7, 2006</i></p>
    
      </div>
  </div>
<?php
	# Paste your HTML content between the EOHTML markers!	
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
