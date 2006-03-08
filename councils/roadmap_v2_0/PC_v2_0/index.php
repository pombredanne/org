<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "Eclipse 2006 Project Plans";
$pageKeywords	= "technology, planning, foundation";
$pageAuthor		= "The Eclipse Foundation";

ob_start();
?>		
<img src="external.gif">
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
  were late (specifically, <img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=109230">bugs 109230</a> and <img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=130844">130844</a>)
  and the <img src="external.gif"><a href="http://www.eclipse.org/projects/dev_process/project-status-infrastructure.php">project status instructure files</a> for most projects.
  Consequently, the information in this year's roadmap is fairly sparse - the reader
  is directed to the project's home pages for additional information.
  </p>
  <h1>Callisto</h1>
  <p>The big project planning effort this year is around the <img src="external.gif"><a href="http://www.eclipse.org/projects/callisto.php">Callisto Simultaneous Release</a>.
  </p>
  <p>The goal of the Callisto Simultaneous Release is to release ten major Eclipse projects 
  (<img src="external.gif"><a href="/birt/">BIRT</a>, 
  <img src="external.gif"><a href="/cdt/">CDT</a>,
  <img src="external.gif"><a href="/datatools/">DTP</a>,
  <img src="external.gif"><a href="/emf/">EMF</a>,
  <img src="external.gif"><a href="/gef/">GEF</a>,
  <img src="external.gif"><a href="/gmf/">GMF</a>,
  <img src="external.gif"><a href="/eclipse/">Platform</a>,
  <img src="external.gif"><a href="/tptp/">TPTP</a>,
  <img src="external.gif"><a href="/webtools/">WTP</a>,
  <img src="external.gif"><a href="/ve/">VE</a>)
  at the same time. We are doing this simultaneous release to support the needs of the ecosystem members who integrate Eclipse frameworks into their own software and products. While those product producers naturally accept the ultimate responsibility for their customers' experiences, Callisto's goal is to eliminate uncertainity about project version numbers, and thus to allow ecosystem members to start their own integration, cross-project, and cross-product testing efforts earlier. Callisto is about improving the productivity of the developers working on top of Eclipse frameworks by providing a more transparent and predictable development cycle; Callisto is about developers helping developers serve the whole Eclipse community.
</p><p><em>
While Callisto is about the simultaneous release of ten projects, it is is not a unification of the projects - each project remains a separate open source project operating with its own project leadership, its own committers, and its own project plan.
</em>
</p>
  
  <h1>Individual Project Plans</h1>
  <p>The Eclipse Community is currently organized into nine top-level projects, the project plans
  of which are described below.</p>
  <ul>
  <li><a href="#ECLIPSE">The Eclipse Project</a>
  <li><a href="#TOOLS">The Tools Project</a>
  <li><a href="#WTP">Web Tools (WTP)</a>
  <li><a href="#BIRT">Business Intelligence and Reporting (BIRT)</a>
  <li><a href="#DTP">Data Tools Platform</a>
  <li><a href="#DSDP">Device Software Development Platform (DSDP)</a>
  <li><a href="#STP">SOA Tools Platform</a>
  <li><a href="#TECHNOLOGY">Technology (incubation)</a>
  </ul>
  
<h2><a name="ECLIPSE">The Eclipse Project DRAFT 3.2 Plan</a></h2>

<p>Last revised 17:03 EST Feb 14, 2006 
  (<img src="new.gif" alt="(new)" border="0" height="12" width="12">
  marks interesting changes since the previous 
  <img src="external.gif"><a href="eclipse_project_plan_3_2_20051109.html">draft of Nov. 9, 2005</a>)

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
  APIs would ensure compliance with Eclipse SDK 3.1 APIs. Refer to <i><img src="external.gif"><a href="http://eclipse.org/eclipse/development/java-api-evolution.html">Evolving 
  Java-based APIs</a></i> for a discussion of the kinds of API changes that maintain 
  contract compatibility.</p>
<p><b>Binary (plug-in) Compatibility:</b> Eclipse SDK 3.2 will be upwards binary-compatible 
  with Eclipse SDK 3.1 except in those areas noted in the <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.platform.doc.isv/porting/eclipse_3_2_porting_guide.html" target="_top"><em>Eclipse 
  3.2 Plug-in Migration Guide</em></a>. Downward plug-in compatibility is not 
  supported. Plug-ins for Eclipse SDK 3.2 will not be usable in Eclipse SDK 3.1. 
  Refer to <i><img src="external.gif"><a href="http://eclipse.org/eclipse/development/java-api-evolution.html">Evolving 
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
release much less with earlier releases. Refer to <i><img src="external.gif"><a href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">How
to Use the Eclipse API</a></i> for information about how to write compliant
plug-ins.
</p><h3>Themes and Priorities</h3>
<p>The changes under consideration for the next release of Eclipse
Platform, JDT, PDE and Equinox will address major themes identified by
the Eclipse Requirements Council (Themes and Priorities dated Dec. 15,
2004 - <img src="external.gif"><a href="http://www.eclipse.org/org/councils/20041215EclipseTPFinalDraft.pdf">pdf)</a>. 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106176">106176</a>) 
    [Theme: Design for Extensibility, Enterprise Ready]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed) 
    <strong>Improve and extend the SWT widget set.</strong> Modern UI design 
    is a constantly moving target. SWT should provide the tools needed to implement 
    first class user interfaces. For example: sort indicators in SWT tables; improved 
    coolbar behavior/appearance; and new controls such as collapsible groups.
    [SWT] 
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106182">106182</a>) 
    [Theme: Design for Extensibility, Appealing to the Broader Community]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed, text changed)
    <strong>Address new window system capabilities.</strong> SWT's basis in native 
    widgets is one of Eclipse's major strengths. For this to remain true, SWT 
    must continue to grow to encompass new mainstream desktop platforms and new 
    capabilities added to existing platforms. For the 3.2 release, SWT should 
    provide support for Windows Vista. 
    [SWT]
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106184">106184</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106194">106194</a>) 
    [Theme: Design for Extensibility]</p>
    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Improve task assistance in text fields.</strong> Eclipse has numerous 
    wizards and dialogs that contain text fields where there are constraints on 
    the values that can be entered, and often task assistance can be provided, 
    for example, in the form of potential values. Eclipse should provide an enhanced 
    text field that has indicators for required fields, and content assist.
    [UI]
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106199">106199</a>) 
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
	(<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106205">106205</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106189">106189</a>) 
    [Theme: Simple to Use]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Capabilities/Perspectives/Components.</strong> The UI component has 
    several frameworks for customizing the presentation, filtering the set of 
    available options and supporting task-based UIs tailored to the user's role. 
    This support should be rationalized and better documented.
    [UI]
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=80130">80130</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106192">106192</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106196">106196</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106201">106201</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=37723">37723</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106185">106185</a>) 
    [Theme: Enterprise Ready]</p>

  <p><strong>Provide pervasive user-assistance search capabilities.</strong> An 
    important element of the user-assistance support in Eclipse is the federated 
    help search support that was added in R3.1. This support should be expanded 
    to pull in more useful results from various sources. It should also be made 
    more extensible to assist other information contributors, and made more pervasive 
    in the UI.
    [UA]
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106198">106198</a>) 
    [Theme: Simple to Use]</p>

  <p><strong>Help System enhancements.</strong> Enhance the existing Help System functionality in 
    several ways, including support for navigation bread crumbs, support for remote 
    installation of Help documentation, documentation index, more extensible dynamic 
    help view, and various other enhancements.
    [UA]
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=114243">114243)</a> 
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
	(<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127874">127874</a>) 
    [Theme: Design for Extensibility, Enterprise Ready]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Deliver support for ICU4J with the Eclipse Platform.</strong> 
    Quality internationalization is very important in the modern software world.
    The ability to fully enable products and applications for double-byte and
    bi-directional languages is a requirement of any software platform. ICU4J 
    (<img src="external.gif"><a href=" http://icu.sourceforge.net/">http://icu.sourceforge.net/</a>)
    resolves many of the known issues with internationalization for Java, and
    thus adopting ICU4J will provide the Eclipse Platform with the strong
    internationalization support it needs to make Eclipse-based applications
    competitive. The first goal of this work is to make any required porting
    effort as minimal and straight forward as possible.  In addition, we will
    ensure that applications that must run in constrained environments
    (such as embedded RCP applications) will not pay a footprint penalty if
    they do not need full internationalization flexibility.
  [All]
  (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127876">127876</a>) 
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
  (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127842">127842</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=71125">71125</a>) 
    [Theme: Design for Extensibility]</p>
    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> deferred)
    <strong>Improve UI Forms.</strong> UI Forms are increasingly being used in 
    the Eclipse user interface. The UI Form support should be improved to allow 
    for more pervasive use in 3.2. Critical widget functionality should be moved 
    to SWT to ensure quality and native look and feel. The remaining UI Forms 
    code (minus FormEditor) should be pushed down into JFace so that it is available 
    in the Eclipse workbench.
    [SWT, UI, UA]
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106203">106203</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106200">106200</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106193">106193</a>) 
    [Theme: Simple to Use, Enterprise Ready]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new, deferred) 
    <strong>Support GB18030-2.</strong> The GB18030-2 Chinese character set is becoming
    increasingly important in the Java community. Eclipse should support GB18030-2 
    on platforms where it is supported natively. Because of the fundamental and 
    far reaching impact of implementing this support, it is expected that it will
    require an SDK (and indeed entire Eclipse Foundation) wide strategy.
    [All]
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127864">127864</a>) 
    [Theme: Simple to Use, Enterprise Ready]</p>
    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> deferred)
    <strong>Increase flexibility when building RCP applications.</strong> The Eclipse 
    text editor should better support RCP applications, by making features like 
    the following available to them: annotation presentation and navigation, user 
    assigned colors and fonts, spell checking, folding, quick diff, templates, 
    and file buffers. The Eclipse workbench layout should be further opened up 
    to allow RCP applications to have more control over its presentation.
    [Text, UI]
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106187">106187</a>) 
    [Theme: Rich Client Platform]</p>

    
    
</blockquote>
<p>(End of items for Eclipse Platform project.)</p>

<h3><a name="JDT">Java development tools (JDT) project</a></h3>

<p><img src="external.gif"><a href="http://www.eclipse.org/jdt/index.html">Java development tools</a> (JDT)
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106206">106206</a>) 
    [Theme: Appealing to the Broader Community]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed, text changed)
    <strong>Improve NLS tooling.</strong> The Eclipse NLS tooling should better 
    support the new Eclipse string externalization pattern added in 3.1. 
    [JDT Text] (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106210">106210</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106207">106207</a>) 
    [Theme: Scaling Up].</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Enable compiler participation.</strong> JDT compilation technology will 
	be opened to enable pluggable participation.Compilation takes place in 
	various stages, such as building and editor reconciling. A participant 
	will be able to introspect the Java code using DOM/AST API, perform 
	semantic analysis, issue some markers and possibly generate new source 
	files.
    [JDT Core, JDT UI, JDT Text]
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127885">127885</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127887">127887</a>) 
    [Theme: Appealing to the Broader Community]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Code style clean ups.</strong> We will provide new functionality to 
	easily establish project wide code conventions. The 'Clean up' action will 
	take a set of files as input to analyze and offer to fix multiple code 
	style issues at once. Examples of 'clean up' actions are the removal of 
	unnecessary code or qualify all field accesses with 'this'; or assisting 
	migration to Java 5.0
    [JDT UI]
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127888">127888</a>) 
    [Theme: Simple To Use]</p>
    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Improve JUnit support.</strong> The JUnit view will be improved to 
	manage more than one set of results. This will allow running multiple 
	tests simultaneously and keep a history of test results. We will also 
	investigate to support JUnit4 which will require the use of J2SE 5.0 in 
	Eclipse itself.
    [JDT UI]
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127889">127889</a>) 
    [Theme: Simple To Use]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Support arbitrary Java content types.</strong> Add support for 
	compilation units with extension different than ".java". This will for 
	example allow components like AJDT to seamlessly integrate their AspectJ 
	".aj" files into the Java tooling. Existing assumptions on ".java" 
	extensions will be removed throughout the tools.
    [JDT UI, JDT Core, JDT Debug]
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127891">127891</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127892">127892</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127895">127895</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127898">127898</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=127899">127899</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=80162">80162</a>) 
    [Theme: Design for Extensibility]</p>

</blockquote>
<p>(End of items for Eclipse JDT project.)</p>

<h3><a name="PDE">Plug-in development environment (PDE) project</a></h3>

The <img src="external.gif"><a href="http://www.eclipse.org/pde/index.html">plug-in development
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106212">106212</a>) 
    [Theme: Scaling Up]</p>

    
  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Improve target support.</strong> PDE manages a model of the target 
    Eclipse for which you are developing. Targets may be complex and diverse, 
    and switching targets or launch configurations can be expensive. PDE should 
    be extended to support named targets and automatically track changes to the 
    workspace. [PDE, Runtime] (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106211">106211</a>) 
    [Theme: Simple to Use, Enterprise Ready]</p>

  <p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> committed)
    <strong>Improve PDE build.</strong> PDE Build is fundamental to how the Eclipse 
    Platform releases are produced. It is also increasingly being used by other 
    Eclipse projects and in the wider community. Potential improvements to PDE 
    build include parallel cross-building, incremental building of plug-ins, increased 
    integration with the workspace model, and support for additional repository 
    providers. [PDE] (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106214">106214</a>) 
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
    by other plug-ins. [PDE, JDT] (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106213">106213</a>) 
    [Theme: Enterprise Ready]</p>

</blockquote>
<p>(End of items for Eclipse PDE project.)<p>

<h3><a name="Equinox">Equinox project</a></h3>

The <img src="external.gif"><a href="http://www.eclipse.org/equinox/index.html">Equinox</a>
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106188">106188</a>) 
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
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=113663">113663</a>) 
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

  
  <h2><a name="TOOLS">Tools Project</a></h2>
<p>The Tools top-level Project does not have an overall project plan.</p>

  <h2><a name="WTP">Web Tools (WTP)</a></h2>
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
</p><p><img src="external.gif"><a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_2.html#TargetOperatingEnvironments#TargetOperatingEnvironments" class='external text' title="http://www.eclipse.org/eclipse/development/eclipse project plan 3 2.html#TargetOperatingEnvironments#TargetOperatingEnvironments" rel="nofollow">Eclipse Target Operating Environments</a>
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
</p><p><img src="external.gif"><a href="http://eclipse.org/webtools/wst/index.html" class='external text' title="http://eclipse.org/webtools/wst/index.html" rel="nofollow">Web Standard Tools (WST)</a>

</p><p><img src="external.gif"><a href="http://eclipse.org/webtools/jst/index.html" class='external text' title="http://eclipse.org/webtools/jst/index.html" rel="nofollow">J2EE Standard Tools (JST)</a>
</p><p><img src="external.gif"><a href="http://www.eclipse.org/webtools/jsf/index.html" class='external text' title="http://www.eclipse.org/webtools/jsf/index.html" rel="nofollow">Java Server Faces Tools (JSF)</a>
</p><p>For the WST and JST subprojects items are listed, JSF is not covered as it currently is a technology project 
(in incubator state), the items listed reflect new features of the Web Tools Platform, or areas where existing 
features will be significantly reworked. Common goals are listed in the “Common goals” area. 
</p><p>TBD (Each item indicates the components likely affected by that work item (many items involve coordinated changes to several components). Numbers in parentheses link to bugzilla problem reports for that plan item)
</p><p>Note that JSF and EJB (currently incubating in the technology project) will be present in WTP 1.5 in "provisional" status - APIs in these areas will be provisional, and the release number for these two areas of functionality should be considered "0.5" rather than the overall WTP release numbering of "1.5.". Users should expect API and tool refinements in these areas, with a likelihood for more rapid (and extensive) revisions than in the base WTP code.
</p>

<ul><li> productization support <img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=125751" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=125751" rel="nofollow">[125751</a>]
</li><li> improve feature split <img src="external.gif"><a href="http://www.eclipse.org/webtools/development/arch_and_design/subsystems/SubsystemsAndFeatures.html" class='external text' title="http://www.eclipse.org/webtools/development/arch and design/subsystems/SubsystemsAndFeatures.html" rel="nofollow">Subsystem and Features document</a>
</li><li> improve API coverage (convert additional provisional areas to APIs)
</li></ul>

<ul><li> Moving generic components to platform (common navigator <img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=125744" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=125744" rel="nofollow">[125744</a>], tabbed properties page <img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=125745" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=125745" rel="nofollow">[125745</a>])
</li><li> moving to the common undo stack (from the emf undo stack) <img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=88011" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=88011" rel="nofollow">[88011</a>]
</li></ul>
<ul><li> WS Security [[deferred]

</li><li> upgrade to Axis 1.3 [<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=116308" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=116308" rel="nofollow">116308</a>]
</li><li> Axis 2.0 Support [optional item, help wanted]
<ul><li> SOAP 1.2 Support
</li></ul>
</li></ul>
<ul><li> Enhance validation framework [<img src="external.gif"><a href="http://www.eclipse.org/webtools/jst/components/j2ee/proposals/ValidatorFramework.html" class='external text' title="http://www.eclipse.org/webtools/jst/components/j2ee/proposals/ValidatorFramework.html" rel="nofollow">Proposal</a>]

</li></ul>
<ul><li> EJB3 (alignment with the DALI project - <img src="external.gif"><a href="http://www.eclipse.org/dali/" class='external free' title="http://www.eclipse.org/dali/" rel="nofollow">http://www.eclipse.org/dali/</a>)
</li></ul>

<ul><li> EJB3 (by lightweight integration with the DALI project - <img src="external.gif"><a href="http://www.eclipse.org/dali/" class='external free' title="http://www.eclipse.org/dali/" rel="nofollow">http://www.eclipse.org/dali/</a>)
</li><li> JSR 175 (Metadata) Support - only for new functionality: JSF, EJB3
</li><li> JSF Support (provided by the JSF subproject)
</li></ul>
<ul><li> JSR 181 (Web Services) [optional item - help wanted]
</li></ul>

<ul><li> JSR 88 Support, Advanced Server Support for one/multiple open source J2EE server [[deferred]
</li><li> Restructure Generic Server Support <img src="external.gif"><a href="/index.php/RestructureGenericServerSupportProposal" title="RestructureGenericServerSupportProposal">RestructureGenericServerSupportProposal</a>
</li></ul>
</div>
</div>
</div>
  
<H2><a name="TPTP">Eclipse Test &amp; Performance Tools Platform (TPTP) Project<BR>Approved 4.2 Plan</a></H2>
<P>Last revised 00:30 PST 25 January 2006 (<font face="Arial"><span style="background-color: #FFFFFF"><IMG height=12 
src="http://www.eclipse.org/images/new.gif" border=0> marks 
interesting changes since 4.1 Release)</span></font><BR><BR><I>&nbsp;&nbsp;&nbsp; Please send comments 
about this plan to the </I><a href="mailto:tptp-pmc@eclipse.org">tptp-pmc@eclipse.org</a>

<i>PMC 
mailing list.</i></P>
<P>This document lays out the feature and API set for the TPTP 4.2 release. 
<UL>
  <LI><A 
  href="#Deliverables">Release 
  Deliverables</A> 
  <LI><A 
  href="#Milestones">Release 
  Milestones</A> 
  <LI><A 
  href="#TargetOperatingEnvironments">Target 
  Operating Environments</A> 
  <LI><A 
  href="#Compatibility">Compatibility 
	with Previous Releases</A><LI><a href="#Themes">Themes</a></LI>
	<LI><a href="#Projects">Projects</a></LI>

	<LI><a href="#Features">Features</a></LI>
	<LI><a href="#Defects">Defects</a></LI></UL>
<P>The first part of this plan deals with the important matters of release 
deliverables, release milestones, target operating environments, and 
release-to-release compatibility.&nbsp; These are all things that need to be clear for 
any release, even if no features were to change.&nbsp; 
<P>The remainder of the plan consists of plan items for the four projects under 
the TPTP Top-Level Project.&nbsp; Each plan item covers a feature or API that is to 
be added to TPTP, or some aspect of TPTP that is to be improved.&nbsp; Each plan 
item has its own entry in the TPTP bugzilla database, with a title and a 
concise summary (usually a single paragraph) that explains the work item at a 
suitably high enough level so that everyone can readily understand what the work 
item is without having to understand the nitty-gritty detail. 
<P>Not all plan items represent the same amount of work; some may be quite 
large, others, quite small. Some plan items may involve work that is localized 
to a single component; others may involve coordinated changes to 
several components; other may pervade the entire project. 
<P>With the previous release as the starting point, this is the plan for how we 
will enhance and improve it.&nbsp; Fixing bugs, improving test coverage, 
documentation, examples, performance tuning, usability, etc. are considered 
routine ongoing maintenance activities and are not included in this plan unless 
they would also involve a significant change to the API or feature set, or 
involve a significant amount of work. The intent of the plan is to account for 
all interesting feature work. 

<h3><A name=Deliverables></A>Release Deliverables</h3>
<P>The following release deliverables are provided: 
<UL>
  <LI>Runtime </LI>
	<LI>Source </LI>
	<LI>Examples </LI>
	<LI>Component Test </LI>
	<LI>Data Collection Engine for Windows (NT, 2000, XP) 
	x86 Runtime</LI>

	<LI>Data Collection Engine for Windows 
	(XP, Server 2003) x86/64-bit Runtime <font face="Arial"><span style="background-color: #FFFFFF"><IMG height=12 
src="http://www.eclipse.org/images/new.gif" border=0></span></font></LI>
	<LI>Data Collection Engine for Windows 
	Server 2003 Itanium Runtime 
	<font face="Arial"><span style="background-color: #FFFFFF"><IMG height=12 
src="http://www.eclipse.org/images/new.gif" border=0></span></font></LI>
	<LI>Data Collection Engine for Linux x86 Runtime</LI>
	<LI>Data Collection Engine for Linux x86/64-bit Runtime <font face="Arial"><span style="background-color: #FFFFFF"><IMG height=12 
src="http://www.eclipse.org/images/new.gif" border=0></span></font></LI>
	<LI>Data Collection Engine for Linux 
	Itanium Runtime 
	<font face="Arial"><span style="background-color: #FFFFFF"><IMG height=12 
src="http://www.eclipse.org/images/new.gif" border=0></span></font></LI>
	<LI>Data Collection Engine for Linux <font face="sans-serif" size="2">

	zSeries</font> Runtime 
	</LI>
	<LI>Data Collection Engine for zSeries Runtime </LI>
	<LI>Data Collection Engine for iSeries Runtime </LI>
	<LI>Data Collection Engine for Solaris Sparc Runtime </LI>
	<LI>Data Collection Engine for AIX PPC Runtime</LI>

	<LI>Data Collection Engine for Linux PPC/64-bit </LI>
	<LI>Data Collection Engine for HP-UX Runtime 
	</LI>
	<LI>Native Logging Implementation (All platforms) 
	</LI>
	<LI>Plugin Translatability Log</LI></UL>
<h3><A name=Milestones></A>Release Milestones</h3>
<P>The TPTP 4.2 release is targeted for general availability on 30-Jun-2006.&nbsp; 
All release deliverables will be available for download as soon as the release 
has been tested and validated in the target operating configurations.&nbsp; 

Interim release milestone are planned at roughly 6 week intervals to facilitate 
coarse-grained planning and staging.&nbsp;TPTP 
is participating in
<img src="external.gif"><a href="http://www.eclipse.org/projects/callisto.php">
Callisto Simultaneous Release</a> 
of Eclipse projects. The list of milestones below includes all Callisto 
milestones of TPTP.&nbsp; </P>
<TABLE width=821 border=1 id="table1">
  <TR>
    <TD width=793 colspan="3" bgcolor="#C0C0C0">
	<p align="center"><b><font size="+1">Release Milestones</font></b></TD>
    </TR>

  <TR>
    <TD width=210 bgcolor="#C0C0C0"><B>Milestone</B></TD>
    <TD width=163 bgcolor="#C0C0C0"><b>Date</b></TD>
    <TD width=416 bgcolor="#C0C0C0"><b>Description</b></TD></TR>
  <TR>
    <TD width=210>Iteration -2 (4.2 i-2)</TD>
    <TD width=163>Friday, 9-Dec-05</TD>

    <TD width=416>Callisto M3 [Done]</TD></TR>
  <TR>
    <TD width=210>Iteration -1 (4.2 i-1)</TD>
    <TD width=163>Friday, 23-Dec-05</TD>
    <TD width=416>Callisto M4 [Done]</TD></TR>
  <TR>
    <TD width=210>Iteration 1 (4.2 i1)</TD>

    <TD width=163>Friday, 24-Feb-06</TD>
    <TD width=416>Stable build - API freeze; Callisto M5 [Done 3-Mar-06]</TD></TR>
  <TR>
    <TD width=210>Iteration 2 (4.2 i2)</TD>
    <TD width=163>Friday, 14-Apr-06</TD>
    <TD width=416>Stable build - UI freeze; Callisto RC0</TD></TR>

  <TR>
    <TD width=210>&nbsp;</TD>
    <TD width=163>Friday, 28-Apr-06</TD>
    <TD width=416>Callisto RC1</TD></TR>
  <TR>
    <TD width=210>&nbsp;</TD>
    <TD width=163>Friday, 12-May-06</TD>

    <TD width=416>Callisto RC2</TD></TR>
  <TR>
    <TD width=210>Iteration 3 (4.2 i3)</TD>
    <TD width=163>Friday, 26-May-06</TD>
    <TD width=416>Stable build - Callisto RC3</TD></TR>
  <tr>
    <TD width=210>&nbsp;</TD>

    <TD width=163>Friday, 2-Jun-06</TD>
    <TD width=416>Callisto RC4</TD>
	</tr>
  <TR>
    <TD width=210>&nbsp;</TD>
    <TD width=163>Tuesday, 20-Jun-06</TD>
    <TD width=416>Callisto RC5</TD></TR>

  <TR>
    <TD width=210>&nbsp;</TD>
    <TD width=163>Wednesday, 28-Jun-06</TD>
    <TD width=416>Callisto RC6</TD></TR>
  <TR>
    <TD width=210>Iteration 4 (4.2 i4)</TD>
    <TD width=163>Friday, 30-Jun-06</TD>

    <TD width=416>General Availability, English only</TD></TR>
	<TR>
		<TD width="210">Post-iteration</TD>
		<TD width="163">Aug-06 (tentative)</TD>
		<TD width="416">General Availability, Translation</TD>
	</TR>
</TABLE>

<p>For a detailed development schedule of TPTP 4.2 release,
<img src="external.gif"><a href="http://www.eclipse.org/tptp/home/project_info/releaseinfo/4.2/schedule.html">
click here</a>.</p>
<h3><A name=TargetOperatingEnvironments></A>Target Operating Environments</h3>
<P>In order to remain current, each TPTP release targets reasonably current 
versions of the underlying operating environments.</P>
<ul>
	<li>Java runtime (JRE) or Java development kit (JDK) 1.4 
	</li>
	<li>
	<img src="external.gif"><a href="http://download.eclipse.org/eclipse/downloads/">Eclipse SDK 3.2</a> for Linux (GTK)&nbsp;,
	Linux (Motif),&nbsp;or
	Windows (<IMG height=12 
src="http://www.eclipse.org/images/new.gif" border=0> prior TPTP releases dependent on Eclipse SDK 
	3.1.0)</li>

	<li>Eclipse Modeling Framework (EMF) SDK
	<img src="external.gif"><a href="http://download.eclipse.org/tools/emf/scripts/downloads.php">2.2</a>
	</li>
	<li>XML Schema Infoset Model (XSD) SDK
	<img src="external.gif"><a href="http://download.eclipse.org/tools/emf/scripts/downloads.php">2.2</a></li>
</ul>
<P>Most of the TPTP SDK is "pure" Java&#8482; code and has no direct dependence on 
the underlying operating system.&nbsp; The chief dependence is therefore on the Java 2 
Platform itself.&nbsp; The TPTP 4.0 release is written and compiled 
against version 1.4 of the Java 2 Platform APIs, and targeted to run on version 
1.4 of the Java 2 Runtime Environment, Standard Edition.</P>

<P>There are many different implementations of the Java 2 Platform running atop 
a variety of operating systems. We focus TPTP testing on a handful of popular 
<SPAN class=header>combinations of operating system and Java 2 Platform; these 
are our <EM>reference platforms</EM>.&nbsp; TPTP undoubtedly runs fine in many 
operating environments beyond the reference platforms we test.&nbsp; However, since we 
do not systematically test them we cannot vouch for them.&nbsp; Problems encountered 
when running TPTP on non-reference platforms that cannot be recreated on any 
reference platform will be given lower priority than problems with running 
TPTP on a reference platform.</SPAN></P>
<P>TPTP SDK 4.2 is tested and validated on the following target reference platforms 
(this list may be updated over the course of the release cycle):</P>
<TABLE width=821 border=1>
  <TBODY>

  <TR bgColor=#cccccc>
    <TH colSpan=2>
      <DIV align=center><font size="+1">TPTP</font><B><FONT size=+1> Agent 
		Controller Reference Platforms</FONT></B> 
      </DIV></TH></TR>
  <TR>
    <TD width=108><B>Processor architecture</B></TD>
    <TD width=697><B>Operating system</B></TD></TR>

  <tr>
    <TD width=108>Intel IA32</TD>
    <TD width=697>
      Red Hat Linux v7.1, v7.2, v7.3, v8.0</TD>
	</tr>
	<tr>
    <TD width=108>Intel IA32</TD>

    <TD width=697>Red Hat Linux Advanced Server v2.1</TD>
	</tr>
	<tr>
    <TD width=108>Intel IA32</TD>
    <TD width=697>SuSE Linux v7.2, v7.3</TD>
	</tr>
	<tr>

    <TD width=108>Intel IA32</TD>
    <TD width=697>SuSE Linux Enterprise Server (SLES) v7, v8</TD>
	</tr>
	<tr>
    <TD width=108>Intel IA32</TD>
    <TD width=697>Windows 2000 Advanced Server (service pack 2)</TD>
	</tr>

	<tr>
    <TD width=108>Intel IA32</TD>
    <TD width=697>Windows 2000 Professional (service pack 2)</TD>
	</tr>
	<tr>
    <TD width=108>Intel IA32</TD>
    <TD width=697>Windows 2000 Server (service pack 2)</TD>

	</tr>
	<tr>
    <TD width=108>Intel IA32</TD>
    <TD width=697>
      Windows NT 4.0 (service pack 6a)</TD>
	</tr>
	<tr>
    <TD width=108>Intel IA32</TD>

    <TD width=697>Windows Server 2003</TD>
	</tr>
	<tr>
    <TD width=108>Intel IA32</TD>
    <TD width=697>Windows XP Professional</TD>
	</tr>
	<tr>

    <TD width=108>iSeries</TD>
    <TD width=697>OS/400 V5R1, V5R2</TD>
	</tr>
	<tr>
    <TD width=108>PA-RISC</TD>
    <TD width=697>HP-UX v11.0, v11i</TD>
	</tr>

  <TR>
    <TD width=108>RS/6000</TD>
    <TD width=697>AIX v4.4.0, v5.1, v5.2</TD></TR>
	<tr>
    <TD width=108>SPARC</TD>
    <TD width=697>Sun Solaris v8, v9</TD>
	</tr>

  <tr>
    <TD width=108>zSeries</TD>
    <TD width=697>z/OS V1R7</TD>
	</tr>
  <TR>
    <TD width=108>zSeries</TD>
    <TD width=697>SuSE Linux Enterprise Server (SLES) v8 </TD></TR>

  <TR>
    <TD width=108>PowerPC/64-bit </TD>
    <TD width=697>Red Hat Enterprise Linux AS release 3 </TD></TR>
  </TBODY></TABLE>
<P>Although untested, TPTP should work fine on other OSes that support the same 
operating system kernel and version.</P>
<H4>Internationalization</H4>
<P>TPTP is designed as the basis for internationalized products. 
The user interface elements provided by the TPTP SDK components, including 
dialogs and error messages, are externalized. The English strings are provided 
as the default resource bundles.</P>
<P>Latin-1 locales are supported by the TPTP SDK on all of the above 
operating environments; DBCS locales are supported by the TPTP SDK on the 
Windows, GTK, and Motif window systems; BIDI locales are supported by the 
TPTP SDK only on Windows operating environments. 

<P>The TPTP SDK supports GB 18030, the new Chinese code page standard, on 
Windows XP and 2000, and Linux.<P>TPTP supports ICU4J starting in 4.2 release. 
This will significantly increase the number of supportable locales. Products 
needing to localize to newer locales are enabled. German, Traditional Chinese, 
and Arabic are tested.&nbsp; 
<h3><A name=Compatibility></A>Compatibility with Previous Releases</h3>
<P>TPTP 4.2 will be compatible with TPTP 4.1.&nbsp; The following specifies 
details of the various aspects of release compatibility.</P>
<ul>
	<li>
	<P style="margin-top: 0; margin-bottom: 5px"><B>
	API Contract Compatibility:</B> TPTP SDK 4.2 will be upwards 
contract-compatible with TPTP SDK 4.1. Downward contract compatibility is not supported. There is no guarantee 
that compliance with TPTP SDK 4.2 APIs would ensure compliance with TPTP SDK 4.0 APIs. Refer to <I>

	<A 
href="http://eclipse.org/eclipse/development/java-api-evolution.html">
	Evolving 
Java-based APIs</A></I> for a discussion of the kinds of API changes that 
maintain contract compatibility.</P></li>
	<li>
	<P style="margin-top: 0; margin-bottom: 5px"><B>
	Binary (plug-in) Compatibility:</B> TPTP SDK 4.2 will be upwards 
binary-compatible with TPTP SDK 4.1. Downward plug-in 
compatibility is not supported. Plug-ins for TPTP SDK 4.2 will not be usable 
in TPTP SDK 4.1. Refer to <I>

	<A 
href="http://eclipse.org/eclipse/development/java-api-evolution.html">
	Evolving 
Java-based APIs</A></I> for a discussion of the kinds of API changes that 
maintain binary compatibility. 
</li>
	<li>
	<P style="margin-top: 0; margin-bottom: 5px"><B>
	Source Compatibility:</B> TPTP SDK 4.2 will be upwards 
source-compatible with TPTP SDK 4.1. This means that 
source files written to use TPTP SDK 4.1 APIs might successfully compile and 
run against TPTP SDK 4.2 APIs, although this is not guaranteed. Downward 
source compatibility is not supported. If source files use new TPTP SDK APIs, 
they will not be usable with an earlier version of the TPTP SDK. </li>
	<li>

	<P style="margin-top: 0; margin-bottom: 5px"><B>
	Workspace Compatibility:</B> <font face="Arial" size="2">TPTP SDK 4.2 will 
	be upwards workspace-compatible with TPTP SDK 4.1 unless noted. This means 
	that workspaces and projects created with TPTP SDK 4.1 can be successfully 
	opened by TPTP SDK 4.2 and upgraded to a 4.2 workspace</font>. This includes both hidden 
	metadata, which is localized to a particular workspace, as well as metadata 
	files found within a workspace project (e.g., the .project file), which may 
	propagate between workspaces via file copying or team repositories. 
Downward workspace compatibility is not supported. A workspace created (or 
opened) by a product based on TPTP 4.2 will be unusable with a product based 
an earlier version of TPTP. Visible metadata files created (or overwritten) 
by TPTP 4.2 will generally be unusable with earlier versions of TPTP. </li>
	<li><B>Non-compliant usage of API's</B>: All non-API methods and classes, and 
certainly everything in a package with "internal" in its name, are considered 
implementation details which may vary between operating environment and are 
subject to change without notice. Client plug-ins that directly depend on 
anything other than what is specified in the TPTP SDK API are inherently 
unsupportable and receive no guarantees about compatibility within a single 
release much less with an earlier releases. Refer to <I>
	<A 
href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">
	How 
to Use the Eclipse API</A></I> for information about how to write compliant 
plug-ins. 

</li>
	</ul>
<h3><a name="Themes"></a>Themes</h3>
<P>The TPTP PMC adopted and specialized the following Eclipse themes which 
represent the key focus areas for TPTP enhancements in the year ahead.</P>
	<ul>
		<li>
		<p style="margin-top: 0; margin-bottom: 5px"><b>Scaling Up -</b><span lang="EN-GB">
		</span>TPTP will work to enhance the support of large data volumes and 
		processing rates in areas such as data collection, user interface and in 
		the persistence of trace, log and statistical models and execution 
		histories.</li>

		<li>
		<p style="margin-top: 0; margin-bottom: 5px"><b>Enterprise Ready </b>- 
		Hooks will be provided within the TPTP infrastructure to link testing 
		tools to requirements tracking tools and defect tracking tools, thus 
		embedding them effectively in enterprise development cycles. Changes to 
		the data collection layers will increase interoperability with 
		enterprise security infrastructure. In addition, there will be 
		progressive adoption of the TPTP tools and infrastructure as a test 
		platform for the project itself, which is in turn likely to drive 
		refinements into the tools. An increased focus on whole-project 
		integration testing will ensure effective interoperability amongst all 
		TPTP components and the rest of the Eclipse environment.</li>
		<li>
		<p style="margin-top: 0; margin-bottom: 5px"><b>Design for 
		Extensibility: Be a Better Platform</b> - There will be a wide range of 
		activities within TPTP to externalize APIs and define extension points, 
		making the infrastructure more flexible, and more generic in 
		application. A good example of this is integration of TPTP with WTP and 
		BIRT for web application testing, profiling and generation of customized 
		reports of results.</li>
		<li>
		<p style="margin-top: 0; margin-bottom: 5px"><b>

		Embedded Development - 
		</b>TPTP target execution 
		environment and remote data collection framework provide capabilities 
		that are adapted for high-end embedded systems. TPTP will seek 
		contributions to add support for embedded systems. We are promoting use 
		of TPTP native logging capabilities on a number of embedded target 
		systems.</li>
		<li>
		<p style="margin-top: 0; margin-bottom: 5px"><b>
		Rich Client Platform</b> 
		- TPTP will use RCP for building manual test client and other GUI-based 
		clients in target environments. </li>
		<li>
		<p style="margin-top: 0; margin-bottom: 5px"><b>Simple to Use</b> - The 
		existing TPTP tools were conceived as samples, rather than as exemplary, 
		they are deficient in many areas of usability and in some cases lacking 
		in function. The plan is that within the domains which they target they 
		will provide a high-quality user experience out of the box. We will 
		focus on ease of use through enhanced user documentation, tutorials, 
		white papers, demonstrations, and a wide range of enhancements to the 
		user interface to streamline basic processes and clarify concepts and 
		terminology. We are focused on improving as much as possible in Release 
		4.2, and expect need for continuing this focus beyond 4.2.</li>

		<li>
		<p style="margin-top: 0; margin-bottom: 5px"><b>Enable Consistent 
		Multi-language Support</b> - In TPTP a significant effort will be 
		applied in extending coverage of the trace models to represent C/C++ 
		programs and to handle protocol activity (specifically HTTP) 
		consistently with program activity. There will also be C/C++ APIs 
		provided to the data collection and control layers.</li>
		<li>
		<p style="margin-top: 0; margin-bottom: 5px"><b>Appealing to the Broader 
		Community</b> - A range of initiatives will be taken to broaden the 
		community of potential and actual users of TPTP. Technically this will 
		include additional integration of open source test tool technologies 
		based on JUnit, and the various hooks to JUnit in the JDT, more data 
		collection agents &#8211; particularly focusing on open source technologies, 
		and additional operating system and hardware platforms from which data 
		can be collected. There will be additional marketing and an extensive 
		outreach program to the Eclipse community for additional contribution 
		and adoption.</li>
	</ul>

	<h3><a name="Projects"></a>Projects</h3>
	<p style="margin-top: 0; margin-bottom: 0">The TPTP project is is comprised 
	of four, managed in a coordinated fashion, across which the plans items are 
	allocated.&nbsp; TPTP subprojects include:</p>
	<ul>
		<li>
		<p style="margin-top: 0; margin-bottom: 5px"><b>TPTP Platform Project </b>- 
		Provides common infrastructure in the areas of user interface, EMF based 
		data models, data collection and communications control, as well as 
		remote execution environments. Additionally, the Platform provides 
		extension points for leveraging or extending these capabilities in 
		solution specific tooling or runtimes. This includes Eclipse workbench 
		plug-ins as well as runtime plug-ins on a target and optionally remote 
		system.</li>

		<li>
		<p style="margin-top: 0; margin-bottom: 5px"><b>Testing Tools Project
		</b>- Provides specializations of the TPTP Platform for testing (e.g. 
		test editors, trace/test conversion support), and exemplary extensible 
		tools for specific testing environments. Initially this includes three 
		test environments: JUnit, manual, and URL testing. These specializations 
		provide optimized editing and reporting experiences for these use cases. 
		In the cases where a unique runtime or an implementation of a 
		testability interface is required, it is also developed in the project. 
		For example, the manual test execution environment provides a remotely 
		managed user interface specifically for collecting manual test progress. 
		This manual user interface is unique from the common execution 
		environment for JUnit and URL testing. . </li>
		<li>
		<p style="margin-top: 0; margin-bottom: 5px"><b>Tracing &amp; Profiling 
		Tools Project</b> - Extends the TPTP Platform with specific data 
		collection for Java and distributed applications that populate the 
		common trace model, additional language and protocol support is 
		anticipated. There are also viewers and analysis services that draw data 
		from the common trace model. Capabilities are provided to collect and 
		analyze heap and stack information as well as generic toolkits for 
		instrumenting running applications..</li>
		<li>

		<p style="margin-top: 0; margin-bottom: 0"><b>Monitoring Tools Project
		</b>- Extends the TPTP Platform for collecting, analyzing, aggregating, 
		and visualizing data that can be captured in the log and statistical 
		models. The typical examples are the collection of system or application 
		resources such as CPU or memory utilization and support for the viewing, 
		aggregation, and analysis of that data. Logs can also be transformed 
		into a common format and model allowing for symptom and pattern 
		analysis. The correlation of the data in these models is of particular 
		interest when it is associated with other model instances of statistical 
		or log data as well as traces and tests.. </li>
	</ul>
	<h3><a name="Features"></a>Features</h3>
	<p>Plan items targeted for this release represent the addition of new 
	features or areas where existing features will be significantly reworked or 
	enhanced.&nbsp; Plan items are allocated to themes and projects indicated 
	above.</p>
<TABLE width=821 border=1 id="table2">
  <TR bgColor=#cccccc>

    <TH colSpan=2>
      <DIV align=center><font size="+1">TPTP Platform Project Plan Items</font></DIV></TH></TR>
  <TR>
    <TD width=78><b>Status</b></TD>
    <TD width=727><b>Description</b></TD></TR>
  <tr>
    <TD width=78>Committed</TD>

    <TD width=727>
      <b>Dynamic Probekit and Byte Code Insertion (BCI). </b>Until now probes 
		are created and Java class files are instrumented statically within the 
		Eclipse Workbench. This feature allows for dynamic instrumentation of 
		byte code at the time of class load using a dynamic BCI technology. This 
		will eliminate the need for copying and modifying class files (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=109684','bugzillaWin');">109684</a>). 
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>

      <b>Java 2 SE Code Analysis Tool</b>. In an effort to increase end-user 
		tools in TPTP, a Java code review and analysis tool will be implemented 
		using static analysis framework. A set of 70 common code analysis rules 
		for Java 2 SE are provided as a part of the tool.<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=113790','bugzillaWin');">
		</a>
		<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=113791','bugzillaWin');">
		113791</a> [Theme: Appealing to Broader Community, Simple to Use]</TD>
	</tr>
  <tr>

    <TD width=78>Committed</TD>
    <TD width=727>
      <b>Improvements to Static Analysis Framework. </b>A number of improvements 
		are planned for static analysis framework - support for user defined 
		configuration parameters through new extension points and associated UI 
		for editing them (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=113795','bugzillaWin');">113795</a>), 
		display of rule count per category and total selected in analysis dialog 
		(<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=113792','bugzillaWin');">113792</a>), 
		collection and annotation of time spent per rule and per category (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=113790','bugzillaWin');">113790</a>). 
		[Theme: Design for Extensibility: Be a Better Platform]</TD>
	</tr>

  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
      <b>Support for New Target Platforms. </b>Adding several new platforms to the list 
		of TPTP supported platforms such as Windows and Linux operating systems 
		on IA32 EM64T (64-bit) and Intel Itanium Processor Family hardware. 
		Additionally adding support for latest version of current supported 
		platforms:
		<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=108577','bugzillaWin');">
		108577</a>,<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=108578','bugzillaWin');">108578</a>, 
		and
		<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=108579','bugzillaWin');">

		108579</a>. [Themes: Enterprise Ready, Appealing to Broader Community] </TD>
	</tr>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
      <b>Data Aggregation in Java Trace Collector.</b> Full execution trace is 
		not suited for profiling larger applications over a prolonged time 
		period. Aggregation of data is necessary to keep the size of collected 
		data manageable. This feature will implement data aggregation algorithms 
		in JVMPI monitor and exercise already existing model capabilities for 
		storing such data (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=108646','bugzillaWin');">108646</a>). 
		[Theme: Enterprise Ready, Simple to Use]</TD>

	</tr>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
      <b>Improvements to UI features.</b> Sort by time in symptom analysis 
		results view (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=102390','bugzillaWin');">102390</a>), 
		log table view (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=108363','bugzillaWin');">108363</a>), 
		filter log events on complex types (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=108371','bugzillaWin');">108371</a>). 
		[Theme: Simple to Use]</TD>

	</tr>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
      <b>Performance Improvements. </b>Several performance improvements are 
		planned - trace model (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=108938','bugzillaWin');">108938</a>), 
		logging (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=112371','bugzillaWin');">112371</a> 
		and
		<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=112878','bugzillaWin');">

		112878</a>). [Theme: Scaling Up]</TD>
	</tr>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
      <b>Profiler support for JVMTI.</b> JVMTI is the new standard and replaces 
		JMVPI which will not available starting in Java 1.6. A technology 
		preview of JVMTI-based Java 2 SE profiler will be released. It is a 
		brand new implementation and and represents future direction of TPTP 
		Java profiling and tracing tools (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=86225','bugzillaWin');">86225</a>). 
		[Theme: Design for Extensibility: Be a Better Platform]</TD>

	</tr>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
      <b>Launch UI Enhancements to support multiple agents</b>. This is a 
		required feature for taking advantage of the flexibility and power of 
		JVMTI standard. A launch dialog should support ability to specify 
		multiple agents and their configuration (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=93212','bugzillaWin');">93212</a>). 
		[Theme: Design for Extensibility: Be a Better Platform]</TD>
	</tr>

  <tr>
    <TD width=78>Investigating</TD>
    <TD width=727>
      <b>Security and Dynamic Discovery API </b>in new agent controller 
		technology is missing implementation (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=95546','bugzillaWin');">95546</a>,<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=74579','bugzillaWin');">74579</a>). 
		We are investigating opportunity to reuse implementation from backward 
		compatibility layer of the new agent controller. [Theme: Enterprise 
		Ready]</TD>
	</tr>

  <tr>
    <TD width=78>Helpwanted</TD>
    <TD width=727>
      <b>Port of TPTP Target Environment to Mac OS X. </b>This calls for porting 
		TPTP C/C++ implemented agent controller and data collection agents, 
		namely JVMPI monitor and native logging to Mac OS X (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=68111','bugzillaWin');">68111</a>). 
		[Theme: Appealing to Broader Community]</TD>
	</tr>
  <tr>

    <TD width=78>Helpwanted</TD>
    <TD width=727>
      <b>Port Native Logging Component to Palm</b>, Windows Mobile, Nokia and 
		Sony Ericsson embedded systems (<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=111019','bugzillaWin');">111019</a>). 
		[Theme: Embedded Development]</TD>
	</tr>
  <tr>
    <TD width=78>Helpwanted</TD>

    <TD width=727>
      <b>Link Checking Tool based on Static Analysis Framework.</b> Enable the 
		static analysis framework in TPTP to check for broken links in 
		documentation. TPTP project build should be able to run the check, 
		produce a parse-able report, and send an email automatically to all 
		plug-in owners whose documentation contains broken links. It is 
		desirable to support adding additional rules for checking other 
		documentation guidelines.(<img src="external.gif"><a href="javascript:popUP('https://bugs.eclipse.org/bugs/show_bug.cgi?id=107856','bugzillaWin');">107856</a>) 
		[Theme: Appealing to the Broader Community]</TD>
	</tr>
	</TABLE>
	<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
<TABLE width=821 border=1 id="table7">
  <TR bgColor=#cccccc>

    <TH colSpan=2>
    <a name="TestTools"></a>
      <DIV align=center><font size="+1">TPTP Testing Tools Project Plan Items</font></DIV></TH></TR>
  <TR>
    <TD width=78><b>Status</b></TD>
    <TD width=727><b>Description</b></TD></TR>
  <tr>

    <TD width=78>Committed</TD>
    <TD width=727>
    <strong>Graphical test results overview.</strong> A graphical top level summary of test results as well as certain level of details linked with the summary on overview page to be added to the current overview tab, from where user can easily navigate to details. (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=103539">103539</a>) 
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>
    <TD width=78>Committed</TD>

    <TD width=727>
    <strong>Navigate back to the test case from the test results.</strong> When verdicts or invocation event provides information about the test script file and line number of the invocation, Test Log Viewer should provide the function to navigate back to the code. This is especially useful when there are VP events.
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=103551">103551</a>) 
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>

    <strong>Test Log viewer improved extensibility.</strong> 
    Details view of execution event should display the properties contained by the events in the model and should also be extensible to allow customized properties. It should also be possible to add actions associated with certain execution event. An extension point can be defined to allow that. 
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=103555">103555</a>) 
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
    <strong>Include a macro editor with the auto gui test suite editor.</strong> 

It is currently difficult to navigate through the macro of a test case. Users have reportedly copied and pasted the macro of a test case into a separate editor just so it is easier for them to edit it. The purpose of this feature is to provide better means for users to easily navigate through the macro of a test case. 
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110337">110337</a>) 
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
    <strong>Integrate the Manual Test View with the Eclipse TPTP workbench.</strong> 
This enhancement involves integrating the Manual Test View with the Eclipse TPTP workbench which requires the following:
Port the Manual Test View to an embedded Workbench view in the TPTP Test perspective with no new functionality.  Port the Manual Test View to a plug-in application (e.g. Rich Client Platform (RCP) or Generic Workbench compared to the IDE Workbench facilities defined in the org.eclipse.ui.ide plug-in) based on the OSGi Framework to provide extensibility via extension points. Provide a command line wrapper that emulates the Agent Controller environment for launching the Manual Test View independent of the Agent Controller.  
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=121100">121100</a>) 
		[Theme: Simple to Use]</TD>

	</tr>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
    <strong>Documention of the generic recording framework.</strong> 
Recording is one of the common starting points for creating a test for test tools.  A generic recording facility can help provide a common UI interaction starting point of recording for users.  The recording facility should allow other test types, recording protocols to leverage a common UI interaction (i.e., "Record a Test").  There should also be an update concerning the use of terminology to reflect usability feedback from users. 
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=122949">122949</a>) 
		[Theme: Simple to Use]</TD>
	</tr>

  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
    <strong>Support annotations for all ExecutionEvents.</strong> 
Since annotations for all ExecutionEvents are currently supported in the TPTP Test model (see class diagram for more details), this enhancement requires exposing this support to internal components and external users. That is, a schema with documentation is required for components to generate well-formed ExecutionEvents containing annotations coupled with providing support in the Test model loaders to consume ExecutionEvents with annotations. Furthermore, modifications to the Test Log view are required for external users to access annotations contained in ExecutionEvents from the UI.
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=76160">76160</a>) 
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>

    <TD width=78>Committed</TD>
    <TD width=727>
    <strong>Dynamic test asset deployment when test closure is not staticly definable.</strong> 
Enable dynamic test asset deployment when test closure is not statically definable 
Implement test service to allow retrieval of dependent classes or other files from workspace during test execution 
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=87414">87414</a>) 
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>
    <TD width=78>Committed</TD>

    <TD width=727>
    <strong>Execution History Editor: Searching.</strong> 
Allow users to search an execution history by any of the visible attributes of a given execution event. Examples include time window, associated interaction fragment (test model element), etc. Search results should be displayed in the eclipse search view, and navigation should be provided from the search view back to the selected element in the execution history.  Also allow extension point to register custom event types for searching (i.e. HTTP Request)
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=89341">89341</a>) 
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>
    <TD width=78>Investigating</TD>
    <TD width=727>

    <strong>Improve usuability of the TPTP test reports.</strong> 
    The report should have a summary to show which execution histories the attempted status (wedge in pie chart)? % of attempted and not attempted and links to each.  The Test Suites should be refactored by platform, and a report should display them.Some sort of way to track which build or series of build that it was run on should be available. A consolidated lists of exceptions should be displayed (defects that are blocking test success and inconclusive results, both of those by test across the project). Add the bugzilla priority and resolution status so that you have one nice page, "this is a blocking issue & here's its bugzilla status". The hierarchy of test suites should be displayed (by project, also summaries of tests vs. the long detailed). A project health page that would combine bugzilla and test results: Summary of numbers by severity/priority.
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=109657">109657</a>) 
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>
    <TD width=78>Investigating</TD>
    <TD width=727>

    <strong>Test Execution and Agent Data Collection.</strong> 
Test Harness should be able to invoke user selectable agent data collectors 
when test is invoked on specified machines and associate the collected data 
results as with the test run.  These choices, including which data should be 
collected, needs to be persisted (with some naming scheme), so that subsequent 
test runs can re-use the same data collection choices (or easily edit them).
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=75029">75029</a>) 
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>
    <TD width=78>Helpwanted</TD>
    <TD width=727>
    <strong>Automated Documentation Generation.</strong> 

The purpose of this feature is to allow users to automatically generate human-readable user instructions for a use case scenario that has been recorded. This will assist technical writers in ensuring that the most up-to-date instructions along with screen captures is shipped with the product. It's purpose is to also reduce translation costs by having the macro run with different language packs as opposed to requiring a 3rd party company to translate the same set of instructions into 8 or 9 sets of different languages.
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110108">110108</a>) 
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>
    <TD width=78>Helpwanted</TD>
    <TD width=727>
    <strong>Support RCP applications for recording and playing back GUI test cases.</strong> 
The recording infrastructure needs to be separated from the playback infrastructure. The two need to be very loosely coupled Allow users to record and play back test cases for an RCP application The user experience must be very similar to how a test case is recorded and played back in the workbench 
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=114159">114159</a>) 
		[Theme: Simple to Use]</TD>

	</tr>
  <tr>
    <TD width=78>Helpwanted</TD>
    <TD width=727>
    <strong>Leverage Eclipse Contexts in the Test Perspective.</strong> 
Contexts provide support for the programmatic display (and possible removal) of views within the perspective.  This is valuable when considering a mixed-test scenario within TPTP.  Some test types may have additional views that are test-type-specific and not be relevant to other tests.  Supporting contexts would allow the Test Perspective to display views relevant to a selected test type (e.g., selected in the Test Navigator) and hide irrelevant views.
    (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=83782">83782</a>) 
		[Theme: Simple to Use]</TD>
	</tr>

	</TABLE>
<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
<TABLE width=821 border=1 id="table8">
  <TR bgColor=#cccccc>
    <TH colSpan=2>
    <a name="Tracing"></a>
    <DIV align=center><font size="+1">TPTP Tracing and Profiling Tools Project Plan Items</font></DIV></TH></TR>
  <TR>
    <TD width=78><b>Status</b></TD>

    <TD width=727><b>Description</b></TD></TR>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
    <strong>Divide the online help into documentation for users and documentation for consumers.</strong> 
The Foundation has asked TPTP to divide its on-line help into two categories: doc for users (developers who use TPTP to test & profile) and doc for consumers (extenders of TPTP). Both types of documentation remain in the plug-in format, but the consumer documentation should be shipped only in the SDK driver. The user documentation should remain in the binary production driver of TPTP. 
(<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=109897">109897</a>) 
		[Theme: Simple to Use]</TD>

	</tr>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
    <strong>ICU4J support in TPTP.</strong> 
Eclipse will incorporate and package ICU, however there are no packaging details as of yet. This will be in a plugin and intended for eclipse 3.2 platform.  This enhancement applies to all TPTP UI, non test components.
(<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=120002">120002</a>) 
		[Theme: Simple to Use]</TD>
	</tr>

	</TABLE>
<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
<TABLE width=821 border=1 id="table4">
  <TR bgColor=#cccccc>
    <TH colSpan=2>
      <DIV align=center><font size="+1">TPTP Monitoring Tools Project Plan Items</font></DIV></TH></TR>
  <TR>
    <TD width=78><b>Status</b></TD>
    <TD width=727><b>Description</b></TD></TR>

  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
      <strong>Provide mechanisms for adding and launching new statistical agents.</strong> Currently,
		the list of statistical agents that can be launched by TPTP is hardcoded.   This feature will provide
		an extension point and the necessary infrastructure to allow third parties to implement new statistical
		agents and extend the monitoring capability of TPTP.
		(<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=113166">113166</a>)
		[Theme: Design for
		Extensibility: Be a Better Platform]</TD>
	</tr>
  <tr>

    <TD width=78>Committed</TD>
    <TD width=727>
      <strong>Provide authentication when monitoring remote Windows systems.</strong> Currently the Windows Perfmon Agent
is able to gather statistics from a remote system other than the one it is running on. This requires that the agent has the
correct authentication to access the Perfmon data on the remote system. This can be accomplished by having the user map a
network drive to the target system before starting the agent.  This is an inconvenient extra step required to be performed by the user.
This feature will add authentication capability to the Perfmon Agent so that it can connect to the remote system on behalf of the user.
		(<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=118545">118545</a>)
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>
    <TD width=78>Committed</TD>

    <TD width=727>
      <strong>Provide a new Symptom Database editor.</strong> A new symptom specification is being introduced with the Platorm Project
		feature <img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=124699">124699</a>. Therefore a new symptom database editor
		is required to create symptoms in this new format.  A conversion utiltity will also be provided to convert current symptom
		databases to the new specification.
		(<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=64800">64800</a>)
		[Theme: Appealing to the Broader Community]</TD>
	</tr>
  <tr>
    <TD width=78>Committed</TD>

    <TD width=727>
      <strong>Simplify Log Import User Experience.</strong> Currently, specifying multiple log files on a log import
		operation is difficult.  The user must create a log set and add individual logs of various types to it.
		A support person may have received a zip file containing many logs of various types from a customer.
		They must unzip the file, determine which logs are of which types and create a log set for them to import
		them all at once.  Another example of a difficult log import scenario is if a user wants to import multiple
		logs of the same type from different locations on the file system.  Again a log set needs to be created
		and the individual log file need to be added to it as separate entries in the set.  These log import scenarios will
		be simplified from a user perspective.  If a zip file of log files is specified, the log set will be created
		automatically.  The ability to specify multiple files of the same type on the Details pane will be added.
		(<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=114818">114818</a> and
		<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=115087">115087</a>)
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>

    <TD width=78>Committed</TD>
    <TD width=727>
      <strong>Improve performance of local log import.</strong> Currently for a local log import
		GLA parses the log file into producer CommonBaseEvent objects which are then serialized into XML and
		converted to consumer CommonBaseEvent objects when they are loaded into the EMF model.  These conversions
               will be eliminated by creating a new GLA formatter that generates consumer CommonBaseEvent
		objects directly in the EMF model.  The Log Import Wizard will modify the existing adapter
		configuration by replacing the existing formatter and outputter components with this new
		formatter component.  (<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=117062">117062</a> and
		<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=117068">117068</a>)
		[Theme: Scaling Up]</TD>
	</tr>

  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
      <strong>Provide a log file parser so TPTP can import Java Logging XML log files.</strong> A GLA parser
		will be created for parsing Java Logging XML log files that can be integrated with the TPTP
		Log Import facility to enable import of this type of log file.
		(<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=77318">77318</a>)
		[Theme: Appealing to the Broader Community]</TD>
	</tr>
  <tr>

    <TD width=78>Committed</TD>
    <TD width=727>
      <strong>Provide ability of GLA to automatically set CommonBaseEvent sequence number value.</strong> Currently
		a parser writer must write a static parser class in order to set CommonBaseEvent sequence number
		value correctly.  This feature will enable the parser writer to specify a simple rule for sequence number
		that will cause GLA to set the sequence value correctly based on the creationTime value.
		(<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=79579">79579</a>)
		[Theme: Simple to Use]</TD>
	</tr>
  <tr>
    <TD width=78>Committed</TD>

    <TD width=727>
      <strong>Provide ability of GLA to filter log data in the Sensor and Extractor.</strong> Parsing log data
		using regular expressions can be expensive. If the log data can be filtered before reaching the
		Parser component of GLA less regular expression parsing is required which will improve the performance
		of parsing log files with GLA.  This feature will provide the infrastructure in GLA that will allow
		parser writers to provide filter specifications or a filter exit class to the Sensor or Extractor components
		of GLA to filter out log data.
		(<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=79565">79565</a>)
		[Theme: Scaling Up]</TD>
	</tr>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>

      <strong>Provide ability to programmatically modify GLA adapter configuration.</strong> Applications can 
        package and make use of GLA run-time and adapter configuration files to parse log files.  However, to use
        the packaged adapter files they must be modified. For example, the adapter configuration must specify
        the location and name of the log file to parse.  Currently, the only way to do this programmatically is
        by using XML parsing libraries to read and modify these XML files.  To simplify adapter configuration
        modification, this feature will extend the current org.eclipse.hyades.logging.adapter.Adapter API to provide
        methods to retrieve and modify the configuration before it is executed by GLA.
		(<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=96433">96433</a>)
		[Theme: Design for Extensibility: Be a Better Platform]</TD>
	</tr>
  <tr>
    <TD width=78>Committed</TD>
    <TD width=727>
      <strong>Simplify GLA Adapter Configuration Editor.</strong> Currently, creating a GLA adapter configuration file with the
		Adapter Configuration Editor to create a log parser is too complicated.  It requires extensive knowledge of
		the GLA architecture, regular expressions, and the CommonBaseEvent schema.  The Adapter Configuration Editor
		user interface will be simplified to make it easier to create a log parser based on a sample log file.
		(<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=78319">78319</a>,
		<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=104487">104487</a>, and
		<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106050">106050</a>)
		[Theme: Simple to Use]</TD>

	</tr>
</TABLE>
<h3><a name="Defects"></a>Defects</h3>
<p><span style="background-color: #FFFF00">I</span>n addition to the targeted 
features for this release, we plan to reduce the defect backlog. Defects are 
prioritized based on severity, age, and resource availability. We encourage 
users to report defects and we will do our best to fix them in priority order. 
We plan to reduce backlog of defects to under 350 defects (approximately 30% 
reduction relative to backlog at the end of&nbsp; previous release).</p>
	<blockquote>
		<p style="margin-top: 0; margin-bottom: 0">
		See
		<img src="external.gif"><a href="http://www.eclipse.org/tptp/reports/bugs/report_42.php?src=All&queryType=bugs&component=All">

		TPTP 4.2 Defects</a> 
		for a listing of already fixed defects, current defect targets and backlog.</p>
		<p style="margin-top: 0; margin-bottom: 0">
		Select &quot;4.2 [Completed | 
		nil| I1 | I2 | I3] 
		bugs&quot; tabs.</p>
	</blockquote>
  
		<h2><a name="BIRT"></a>BIRT 2.1 Project Plan</h2>


<p class="subhead">Last revised January 30, 2006 <br>
</p>

<h3><a name="Introduction"></a>Introduction</h3>

<p>This document lays out the feature and API set for the next feature
release of the Eclipse BIRT project after 2.0, designated release 2.1.</p>
<ul>
  <li><a href="#Deliverables">Release deliverables</a></li>
  <li><a href="#Milestones">Release milestones</a></li>

  <li><a href="#TargetOperatingEnvironments">Target operating
  environments</a></li>
  <li><a href="#Compatibility">Compatibility with previous releases</a></li>
  <li><a href="#Themes">Themes</a></li>
  <li><a href="#Projects">Projects</a></li>
  <li><a href="#Defects">Defects</a></li>
</ul>

<p>Plans do not materialize out of nowhere, nor are they entirely static. To
ensure the planning process is transparent and open to the entire Eclipse
community, plans are posted in an embryonic form and then revised from time
to time throughout the release cycle.</p>

<p>The first part of the plan deals with the important matters of release
deliverables, release milestones, target operating environments, and
release-to-release compatibility. These are all things that need to be clear
for any release, even if no features were to change.</p>

<p>The remainder of the plan consists of plan items for the projects under
the Eclipse BIRT project. Each plan item covers a feature or API that is to
be added, or some aspect that is to be improved. Each plan item has its own
entry in the Eclipse bugzilla database, with a title and a concise summary
(usually a single paragraph) that explains the work item at a suitably high
enough level so that everyone can readily understand what the work item is
without having to understand the nitty-gritty detail.</p>

<p>Please send comments about this draft plan to the <a
href="mailto:birt-dev@eclipse.org">BIRT Developer</a> mailing list.</p>

<h3><a name="Deliverables"></a>Release deliverables</h3>

<p>In order to improve the end user experience of downloading and installing
BIRT, the release deliverables will be revised. Details will become available
as progress is made on this project.</p>

<h3><a name="Milestones"></a>Release milestones</h3>

<p>The Eclipse BIRT 2.1 release milestones will be synchronized with the
Eclipse Callisto simultaneous release. The first BIRT 2.1 milestone will be
designated M5 in order to synchronize with the Callisto simultaneus release
numbering. All release deliverables will be available for download as soon as
the release has been tested and validated in the target operating
configurations listed below.</p>

<p>Release milestones:</p>
<ul>
  <li>Friday, March 3, 2006 BIRT 2.1 M5</li>
  <li>Friday, April 7, 2006 BIRT 2.1 Release Candidate 0</li>

  <li>Friday, April 14, 2006 BIRT 2.1 Release Candidate 1</li>
  <li>Friday, April 28, 2006 BIRT 2.1 Release Candidate 2</li>
  <li>Friday, May 12, 2006 BIRT 2.1 Release Candidate 3</li>
  <li>Friday, May 26, 2006 BIRT 2.1 Release Candidate 4</li>
  <li>Friday, June 16, 2006 BIRT 2.1 Release Candidate 5</li>
  <li>Wednesday, June 28, 2006 BIRT 2.1 Release Candidate 6</li>

</ul>
Our target is to complete and release BIRT 2.1 with the Callisto simultaneous
release, currently targeted for late June 2006.

<p>For information about new features assigned to each milestone please refer
to the <img src="external.gif"><a href="https://bugs.eclipse.org/bugs">bugzilla database</a>. The
bugzilla database will be updated on an ongoing basis as the plan
progresses.</p>

<h3><a name="TargetOperatingEnvironments"></a>Target Operating
Environments</h3>

<p>In order to remain current, each release of an Eclipse project targets
reasonably current versions of underlying operating environments and other
Eclipse projects on which it depends. </p>

<p>Most of Eclipse, and all of BIRT, is &#8220;pure&#8221; Java&#8482; code and has no direct
dependence on the underlying operating system. For BIRT, the chief dependence
is on the Eclipse Platform, Graphical Editor Framework (GEF), Modeling
Framework (EMF), and on the Java 2 Platform that runs it. </p>

<p>The Eclipse BIRT 2.1 release depends on the following compatibility
stack:</p>
<b>BIRT 2.1 Reference Stack for Eclipse 3.2</b>
<ul>
  <li>Java 2 platform Java Development Kit (JDK) 1.4.2</li>
  <li>Eclipse Platform Runtime Binary 3.2</li>
  <li>Graphical Editor Framework (GEF) Runtime 3.2</li>
  <li>Eclipse Modeling Framework (EMF) 2.2</li>

</ul>

<p>The Eclipse Platform and BIRT run in a variety of operating environments.
Testing is focused on a handful of popular <span class="header">combinations
of operating system and Java 2 Platform; these are our <em>reference
platforms</em>. Eclipse BIRT undoubtedly runs fine in many operating
environments beyond the reference platforms we test. However, since we do not
systematically test them we cannot vouch for them. Problems encountered when
running Eclipse BIRT on non-reference platforms that cannot be recreated on
any reference platform will be given lower priority than problems with
running Eclipse BIRT on a reference platform.</span></p>

<p>For BIRT 2.1, the project team plans to tests and validate the following
reference platforms:</p>

<table border="1">
  <tbody>
    <tr bgcolor="#CCCCCC">
      <th colspan="4">

        <div align="center">
        <b><font size="+1">Eclipse BIRT Report Framework 2.1 and Eclipse BIRT
        RCP Report Designer 2.1 Reference Platforms</font></b></div>
      </th>
    </tr>
    <tr>
      <td width="205"><b>Operating system</b></td>
      <td width="76"><b>Processor architecture</b></td>

      <td width="59"><b>Window system</b></td>
      <td width="453"><b>Java 2 Platform</b></td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows XP</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>

      <td>Sun Java 2 Standard Edition, version 1.4.2</td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows 2000</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2</td>

    </tr>
    <tr>
      <td width="205">Microsoft Windows Server 2003</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2</td>
    </tr>

    <tr>
      <td width="205">Red Hat Enterprise Linux WS 3.0</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2</td>
    </tr>
  </tbody>

</table>
<br>


<table border="1">
  <tbody>
    <tr bgcolor="#CCCCCC">
      <th colspan="4">
        <div align="center">
        <b><font size="+1">Eclipse BIRT Runtime 2.1 and Eclipse BIRT Charts
        2.1 Reference Platforms</font></b></div>
      </th>

    </tr>
    <tr>
      <td width="205"><b>Operating system</b></td>
      <td width="76"><b>Processor architecture</b></td>
      <td width="59"><b>Window system</b></td>
      <td width="453"><b>Java 2 Platform</b></td>
    </tr>

    <tr>
      <td width="205">Microsoft Windows XP</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32*</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2, version
      5.0</td>
    </tr>
    <tr>

      <td width="205">Microsoft Windows XP</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32*</td>
      <td width="453">IBM SDK 1.4.2, 5.0</td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows Server 2003</td>

      <td width="76">Intel x86</td>
      <td width="59">Win32*</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2, version
      5.0</td>
    </tr>
    <tr>
      <td width="205">Microsoft Windows Server 2003</td>
      <td width="76">Intel x86</td>

      <td width="59">Win32*</td>
      <td width="453">IBM SDK 1.4.2, 5.0</td>
    </tr>
    <tr>
      <td width="205">Red Hat Enterprise Linux WS 3.0</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK*</td>

      <td width="453">Sun Java 2 Standard Edition, version 1.4.2, version
      5.0</td>
    </tr>
    <tr>
      <td width="205">Red Hat Enterprise Linux WS 3.0</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK*</td>
      <td width="453">BlackDown SDK 1.4.2</td>

    </tr>
    <tr>
      <td width="205">SUSE Linux Enterprise Server 9</td>
      <td width="76">Intel x86</td>
      <td width="59">YaST*</td>
      <td width="453">Sun Java 2 Standard Edition, version 1.4.2, version
      5.0</td>
    </tr>

    <tr>
      <td width="205">SUSE Linux Enterprise Server 9</td>
      <td width="76">Intel x86</td>
      <td width="59">YaST*</td>
      <td width="453">BlackDown SDK 1.4.2</td>
    </tr>
  </tbody>

</table>
*Window system only required when displaying charts within SWT or SWING
windows.<br>
<br>


<table border="1">
  <tbody>
    <tr bgcolor="#CCCCCC">
      <th colspan="1">
        <div align="center">
        <b><font size="+1">BIRT Application Server Reference
        Platform</font></b></div>

      </th>
    </tr>
    <tr>
      <td width="405">Apache Tomcat 4.1.x, 5.5.x</td>
    </tr>
    <tr>
      <td width="405">JBoss AS 4.0.2</td>
    </tr>

  </tbody>
</table>
<br>


<table border="1">
  <tbody>
    <tr bgcolor="#CCCCCC">
      <th colspan="1">
        <div align="center">
        <b><font size="+1">BIRT JDBC Reference Platforms</font></b></div>

      </th>
    </tr>
    <tr>
      <td width="405">MySQL Connector/J 3.x JDBC driver</td>
    </tr>
    <tr>
      <td width="405">Derby V5.1 JDBC driver</td>
    </tr>

  </tbody>
</table>
<br>


<table border="1">
  <tbody>
    <tr bgcolor="#CCCCCC">
      <th colspan="1">
        <div align="center">
        <b><font size="+1">BIRT Browsers and Viewers Reference
        Platforms</font></b></div>

      </th>
    </tr>
    <tr>
      <td width="405">Mozilla Firefox 1.5</td>
    </tr>
    <tr>
      <td width="405">Microsoft Internet Explorer 6.0</td>
    </tr>

    <tr>
      <td width="405">Adobe Acrobat Reader 7.0</td>
    </tr>
  </tbody>
</table>
<br>


<h5>Internationalization</h5>

<p>Eclipse is designed as the basis for internationalized products. The user
interface elements provided by the various Eclipse projects, including
dialogs and error messages, are externalized. The English strings for BIRT
are provided as the default resource bundles. Translations are provided with
this release for French (fr_FR), German (de_DE), Spanish (es_ES), Japanese
(ja_JP), Simplified Chinese (zh_CN), and Korean (ko_KR).</p>

<h3><a name="Compatibility"></a>Compatibility with Previous Releases</h3>

<p>BIRT 2.1 will be compatible with earlier versions of BIRT to the greatest
extent possible. The nature and scope of some of the key plan items for BIRT
2.1 are such that the only feasible solutions might break compatibility. In
other regards, BIRT 2.1 will be compatible with 2.0 and 1.x. We also aim to
minimize the effort required to port an existing plug-in to the 2.1 APIs.</p>

<h4>Compatibility of Release 2.1 with 2.0 and 1.x</h4>

<p>BIRT 2.1 will be compatible with BIRT 2.0 and 1.x unless noted. The
detailed compatibility statement is listed below. In this statement, &quot;BIRT&quot;
refers to all BIRT components: BIRT Report Framework, BIRT Runtime, and BIRT
Chart SDK.</p>

<p><b>API Contract Compatibility:</b> BIRT 2.1 will be upwards
contract-compatible with BIRT 2.0 and 1.x to the greatest extent possible.
All incompatibility exceptions will be documented. Downward contract
compatibility is not supported. There is no guarantee that compliance with
BIRT 2.1 APIs will ensure compliance with BIRT 2.0 or 1.x APIs. Refer to
general Eclipse document on <a
href="http://eclipse.org/eclipse/development/java-api-evolution.html">Evolving
APIs</a> for a discussion of the kinds of API changes that maintain contract
compatibility.</p>

<p>The BIRT Chart UI API v2.1 is compatible with the v2.0 API but not
compatible with the v1.x APIs due to a full redesign of the Chart UI in the
BIRT 2.0 release.</p>

<p><b>Binary (plug-in) Compatibility:</b> The BIRT 2.1 plug-in framework will
be upwards binary-compatible with BIRT 2.0 and 1.x plug-ins to the greatest
extent possible. Downward plug-in compatibility is not supported. Plug-ins
for BIRT 2.1 will not be usable in BIRT 2.0 or 1.x. Extension plug-ins for
BIRT 2.0 and 1.x will be upwards binary-compatible with BIRT 2.1.</p>

<p><b>Source Compatibility:</b> BIRT 2.1 will be upwards source-compatible
with BIRT 2.0 and 1.x to the greatest extent possible. This means that source
files written to use BIRT 2.0 or 1.x APIs will successfully compile and run
against BIRT 2.1 APIs. Downward source compatibility is not supported. If
source files use new BIRT APIs, they will not be usable with an earlier
version of BIRT.</p>

<p><b>Report Design Compatibility:</b>BIRT 2.1 will be upwards report design
compatible with BIRT 2.0 and 1.x unless noted. This means that reports
created with BIRT 2.0 or 1.x can be successfully opened by BIRT 2.1 and
upgraded to a 2.1 format.</p>

<p><b>Non-compliant usage of API's: </b> All non-API methods and classes, and
certainly everything in a package with &quot;internal&quot; in its name, are considered
implementation details which may vary between operating environment and are
subject to change without notice. Client plug-ins that directly depend on
anything other than what is specified in the BIRT API are inherently
unsupportable and receive no guarantees about compatibility within a single
release much less with an earlier releases.</p>

<h3><a name="Themes">Themes</a></h3>

<p>Continuing on the themes for previous releases of BIRT, the BIRT project's
overriding release 2.1 theme remains extending the Eclipse platform to
provide infrastructure and tools that allow application developers to design,
deploy, generate and view reports within their applications. In this context,
the BIRT project also adopts and supports key themes within the overall
Eclipse planning process.</p>
<ul>
  <li><b>Scaling up and Enterprise Ready</b> The Eclipse platform 3.2
    continues to improve on scalability and readiness for the enterprise.
    BIRT 2.1 leverages the support that 3.2 provides by ensuring that it is
    tested and it supports Eclipse 3.2.</li>

  <li><b>Simple to Use - </b>BIRT 2.1 includes ease of use enhancements such
    as improvements to the distribution and installation of BIRT.
    Additionally, BIRT 2.1 continues to provide the RCP based report designer
    which is targeted at the report developer.</li>
  <li><b>Appeal to a Broader Community - </b>BIRT 2.1 will broaden the appeal
    of BIRT by its integration with the Eclipse Callisto simultaneous
    release. In addition, providing support forFirefox 1.5 and JDK 5.0 for
    the BIRT runtime widens BIRT's appeal.</li>
</ul>

<h3><a name="Projects">Projects</a></h3>

<p>Project planning is still under way for BIRT 2.1 and this plan will be
updated in the coming weeks to add new projects as they are identified.
Projects already identified are:</p>

<blockquote>

  <p><b>Integration with Eclipse Callisto Simultaneous Release</b> The goal
  of the Callisto Simultaneous Release is to release ten major Eclipse
  projects at the same time to support the needs of the ecosystem members who
  integrate Eclipse frameworks into their own software and products. Callisto
  is about developers helping developers serve the whole Eclipse community.
  [Theme: Appeal to a Broader Community]</p>

  <p><b>Provide support for the Eclipse 3.2 Platform</b> The BIRT 2.1 release
  will be tested on the Eclipse 3.2 Platform Release. [Theme: Scaling up and
  Enterprise Ready]</p>

  <p><b>Improve distribution and installation of BIRT</b> Users of BIRT,
  especially new users, can sometimes be overwhelmed by the complexity of the
  installation of BIRT and all the components that it depends on. This
  project aims to improve the end user experience of downloading and
  installing BIRT and all of its related components. [Theme: Simple to
  Use]</p>

  <p><b>ICU4J Integration</b> Integrating the International Components for
  Unicode for Java will enable BIRT 2.1 to work with text in any language for
  any place in the world. ICU4J continues to extend Java's Unicode and
  internationalization support, improving performance, staying current with
  the Unicode standard, and providing richer APIs, while remaining as
  compatible as possible with the original Java text and internationalization
  API design. [Theme: Appeal to a Broader Community]</p>
</blockquote>

<h3><a name="Defects">Defects</a></h3>
BIRT 2.1 will address defects reported by project members and the community.
The <a
href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.1.0+Final&amp;">list
of defects</a> targeted for resolution in BIRT 2.1 can be found in the
bugzilla database on <a
href="https://bugs.eclipse.org/bugs">https://bugs.eclipse.org/bugs</a>.</body>
  
  <h2><a name="DTP">Data Tools Platform (DTP)</a></h2>
  
  <P STYLE="margin-bottom: 0in"><BR>
</P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in; font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=4>Data
Tools Platform (DTP) Project 1.0</FONT></FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><FONT SIZE=4 STYLE="font-size: 16pt"><B>SQL
Development Tools Plan</B></FONT></FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">Last
Updated:  <SDFIELD TYPE=DATETIME SDNUM="1033;1033;MM/DD/YY">11/22/05</SDFIELD></FONT></P>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">This
document contains plans for the components of the SQL Development
Tools for DTP 1.0.  Currently, it only reflects plans through M4 (DTP
0.N).</FONT></P>
<P STYLE="margin-bottom: 0in"><BR>

</P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>The
table below lists the deliverables planned for each milestone by
component.  Each component feature specifies a priority.  Direct
dependencies are also indicated either next to the component or
feature.  Click on the component to see a description of its scope
and design goals.  </FONT></FONT>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><B>Feature
Priority:</B></FONT></P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><B>	</B>(C
)	Critical: feature is required in order to declare subcomponent
completion for milestone</FONT></P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">	(H)	High:
very important feature, but could move out to next milestone if
necessary</FONT></P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">	(M)	Medium:
good feature, but not necessary</FONT></P>

<P STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">	(L)	Low:
nice to have feature, but could defer if necessary</FONT></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><B>Feature
Dependencies:</B> shown next to each feature in square brackets [ ]</FONT></P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">	[Conn]		Connectivity</FONT></P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">	[DDM]		Database
Definition Model</FONT></P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">	[LPG]		LALR
Parser Generator (non-Eclipse component)</FONT></P>

<P STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">	[SM]		SQL
Model</FONT></P>
<P STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">	[SQM]		SQL
Query Model</FONT></P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<TABLE WIDTH=905 BORDER=1 BORDERCOLOR="#000000" CELLPADDING=4 CELLSPACING=0>
	<COL WIDTH=122>
	<COL WIDTH=154>
	<COL WIDTH=172>

	<COL WIDTH=245>
	<COL WIDTH=170>
	<THEAD>
		<TR VALIGN=TOP>
			<TH WIDTH=122 BGCOLOR="#c0c0c0">
				<P><BR>
				</P>
			</TH>
			<TH COLSPAN=4 WIDTH=765 BGCOLOR="#c0c0c0">

				<P><FONT FACE="Arial, sans-serif">MILESTONE 2:  12/22/05</FONT></P>
			</TH>
		</TR>
	</THEAD>
	<TBODY>
		<TR VALIGN=TOP>
			<TH WIDTH=122 BGCOLOR="#c0c0c0">
				<P><a href="#Subcomponents|region"><FONT FACE="Arial, sans-serif">Component</FONT></A></P>

			</TH>
			<TH WIDTH=154 BGCOLOR="#c0c0c0">
				<P><FONT FACE="Arial, sans-serif">Iteration 1</FONT></P>
				<P><FONT FACE="Arial, sans-serif">11/21 &ndash; 12/02 (8)</FONT></P>
			</TH>
			<TH WIDTH=172 BGCOLOR="#c0c0c0">
				<P><FONT FACE="Arial, sans-serif">Iteration 2</FONT></P>

				<P><FONT FACE="Arial, sans-serif">12/05 &ndash; 12/09 (5)</FONT></P>
			</TH>
			<TH WIDTH=245 BGCOLOR="#c0c0c0">
				<P><FONT FACE="Arial, sans-serif">Iteration 3</FONT></P>
				<P><FONT FACE="Arial, sans-serif">12/12 &ndash; 12/15 (4)</FONT></P>

			</TH>
			<TH WIDTH=170 BGCOLOR="#c0c0c0">
				<P><FONT FACE="Arial, sans-serif">Iteration 4</FONT></P>
				<P><FONT FACE="Arial, sans-serif">12/16 &ndash; 12/21 (6)</FONT></P>
			</TH>
		</TR>
		<TR VALIGN=TOP>

			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL Query Parser|region">SQL
				Query Parser</A></FONT></FONT></P>
				<P><BR>
				</P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>[SQM, SM, LPG]</FONT></FONT></P>
			</TD>
			<TD WIDTH=154>
				<P><BR>

				</P>
			</TD>
			<TD WIDTH=172>
				<P><BR>
				</P>
			</TD>
			<TD WIDTH=245>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Initial code
				drop:</B></FONT></FONT></P>

				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>- Parses multiple
				statements (C)<BR>- Table reference resolving (C)</FONT></FONT></P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>- Optional quick
				parse mode (H)</FONT></FONT></P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>- Configurable
				source format options: e.g. statement terminator, host variable
				prefix, parameter marker, delimited identifier quote, omit schema
				(H)</FONT></FONT></P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>- Soft keyword
				support (&ldquo;SELECT select FROM from;&rdquo;) (H)</FONT></FONT></P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>- Simple data type
				resolving (H)</FONT></FONT></P>

				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>- Test-driven
				development (junit testcases) (H)</FONT></FONT></P>
			</TD>
			<TD WIDTH=170>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Testing with
				Eclipse 3.2 M4</FONT></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=122>

				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL Results View|region">SQL
				Results View</A></FONT></FONT></P>
			</TD>
			<TD WIDTH=154>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Low Level
				Design<BR></B>- Internal Review </FONT></FONT>
				</P>
				<P><BR>
				</P>

				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Initial source
				code drop (for review only)<BR></B>-Model and API code<BR>-Core
				classes</FONT></FONT></P>
				<P><BR>
				</P>
			</TD>
			<TD WIDTH=172>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Feature code
				drop <BR></B>- Display execution status, summary and details,
				messages and result sets in different layout and modes ( C)</FONT></FONT></P>

				<P><BR>
				</P>
			</TD>
			<TD WIDTH=245>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Low Level
				Design<BR></B>- External Review</FONT></FONT></P>
				<P><BR>
				</P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Feature code
				drop <BR></B>- Save/export/print results in various file formats
				with user defined column delimiters and encoding (H)</FONT></FONT></P>

				<P><BR>
				</P>
			</TD>
			<TD WIDTH=170>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Testing with
				Eclipse 3.2 M4</FONT></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>

			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL/Routines Editor|region">SQL/Routines
				Editor</A></FONT></FONT></P>
			</TD>
			<TD WIDTH=154>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Low Level
				Design<BR></B>- Internal Review</FONT></FONT></P>
				<P><BR>
				</P>

				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>API tutorial</B></FONT></FONT></P>
				<P><BR>
				</P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Initial code
				drop:</B><BR>-extension point<BR>-SQL Editor Framework API</FONT></FONT></P>
				<P><BR>
				</P>
			</TD>

			<TD WIDTH=172>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Feature code
				drop</B></FONT></FONT></P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Merge with RDB SQL
				Editor</FONT></FONT></P>
				<P><BR>
				</P>
			</TD>
			<TD WIDTH=245>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Feature code
				drop</B></FONT></FONT></P>

				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Initial SQL Editor
				Framework and Generic SQL Editor implementation build available
				for download</FONT></FONT></P>
				<P><BR>
				</P>
			</TD>
			<TD WIDTH=170>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Low Level
				Design</B></FONT></FONT></P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>- External Review</FONT></FONT></P>

				<P><BR>
				</P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Testing with
				Eclipse 3.2 M4</FONT></FONT></P>
				<P><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>

			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#Routines Debugger|region">Routines
				Debugger</A></FONT></FONT></P>
			</TD>
			<TD WIDTH=154>
				<P><BR>
				</P>
			</TD>
			<TD WIDTH=172>

				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><B>Low
				Level Design<BR></B>- Internal Review</SPAN></FONT></FONT></P>
			</TD>
			<TD WIDTH=245>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><B>Initial
				code drop:<BR></B>-extension point<BR>-Routine Debugger Framework
				API<BR>- Debug Model classes</SPAN></FONT></FONT></P>
			</TD>
			<TD WIDTH=170>

				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B><SPAN LANG="en-US">Low
				Level Design<BR></SPAN></B>-External Review</FONT></FONT></P>
				<P><BR>
				</P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><FONT COLOR="#000000">Testing
				with Eclipse 3.2 M4</FONT></SPAN></FONT></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>

			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL Execution Plan|region">SQL
				Execution Plan</A></FONT></FONT></P>
			</TD>
			<TD WIDTH=154>
				<P><BR>
				</P>
			</TD>
			<TD WIDTH=172>

				<P><BR>
				</P>
			</TD>
			<TD WIDTH=245>
				<P><FONT FACE="Arial"><FONT SIZE=2><SPAN LANG="en-US"><B>Low
				Level Design<BR></B>- Internal Review</SPAN></FONT></FONT></P>
			</TD>
			<TD WIDTH=170>
				<P><BR>

				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL Query Builder|region">SQL
				Query Builder</A></FONT></FONT></P>
				<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Note:
				Not targeted for delivery in DTP 1.0</FONT></FONT></FONT></P>
			</TD>

			<TD WIDTH=154>
				<P><BR>
				</P>
			</TD>
			<TD WIDTH=172>
				<P><BR>
				</P>
			</TD>
			<TD WIDTH=245>

				<P><BR>
				</P>
			</TD>
			<TD WIDTH=170>
				<P><BR>
				</P>
			</TD>
		</TR>
	</TBODY>

</TABLE>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<TABLE WIDTH=905 BORDER=1 BORDERCOLOR="#000000" CELLPADDING=4 CELLSPACING=0>
	<COL WIDTH=122>
	<COL WIDTH=244>
	<COL WIDTH=266>
	<COL WIDTH=239>
	<THEAD>

		<TR VALIGN=TOP>
			<TH WIDTH=122 BGCOLOR="#c0c0c0">
				<P ALIGN=CENTER><BR>
				</P>
			</TH>
			<TH COLSPAN=3 WIDTH=765 BGCOLOR="#c0c0c0">
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>MILESTONE
				3:  01/20/06</B></FONT></FONT></P>
			</TH>

		</TR>
	</THEAD>
	<TBODY>
		<TR VALIGN=TOP>
			<TH WIDTH=122 BGCOLOR="#c0c0c0">
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B><a href="#Subcomponents|region">Component</A></B></FONT></FONT></P>
			</TH>
			<TH WIDTH=244 BGCOLOR="#c0c0c0">

				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>Iteration
				1</B></FONT></FONT></P>
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>01/03
				&ndash; 01/06 (4)</B></FONT></FONT></P>
			</TH>
			<TH WIDTH=266 BGCOLOR="#c0c0c0">
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>Iteration
				2</B></FONT></FONT></P>
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>01/09
				&ndash; 01/13 (5)</B></FONT></FONT></P>

			</TH>
			<TH WIDTH=239 BGCOLOR="#c0c0c0">
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>Iteration
				3</B></FONT></FONT></P>
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>01/16
				&ndash; 01/19 (4)</B></FONT></FONT></P>
			</TH>
		</TR>
		<TR VALIGN=TOP>

			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL Query Parser|region">SQL
				Query Parser</A></FONT></FONT></P>
				<P><BR>
				</P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>[SQM, SM, LPG]</FONT></FONT></P>
			</TD>
			<TD WIDTH=244>
				<P><BR>

				</P>
			</TD>
			<TD WIDTH=266>
				<P><BR>
				</P>
			</TD>
			<TD WIDTH=239>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Doc Drop</B></FONT></FONT></P>

				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>- Internal API
				Documentation (H)</FONT></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL Results View|region">SQL
				Results View</A></FONT></FONT></P>
			</TD>
			<TD WIDTH=244>

				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Feature code
				drop<BR></B>- Execution history filters, e.g., to display
				execution history by connection profile, status, etc. (H)</FONT></FONT></P>
				<P><BR>
				</P>
			</TD>
			<TD WIDTH=266>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><B>Feature
				code drop<BR></B>- Execution history sorting based on
				weight/execution frequency (H)</SPAN> </FONT></FONT>

				</P>
			</TD>
			<TD WIDTH=239>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Feature code
				drop<BR></B>- Re-execution of selected history script (H)</FONT></FONT></P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>- Persistence of
				execution history (M)</FONT></FONT></P>
				<P><BR>
				</P>

			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL/Routines Editor|region">SQL/Routines
				Editor</A></FONT></FONT></P>
			</TD>
			<TD WIDTH=244>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><B>Feature
				code drop<BR></B>- content assist (C ) [SM, Conn]<BR>- syntax
				highlighting(C )<BR>- code template (H)<BR>- syntax validation
				(H)<BR>- Outline view (H)<BR>- statement execution ( C) [Conn,
				Results View]</SPAN></FONT></FONT></P>

			</TD>
			<TD WIDTH=266>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><B>Feature
				code drop<BR></B><SPAN STYLE="font-weight: medium">- Integration
				w/ Model Base and Connectivity:<BR></SPAN>- Life cycle management
				(C ) [SM, Conn]<BR>- Routine launch configuration - run mode ( C)
				[SM, Conn, DDM]<BR>- generic and extensible SQL editor preference
				pages (H)</SPAN></FONT></FONT></P>
			</TD>
			<TD WIDTH=239>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><B>Feature
				code drop<BR></B>- Generic SQL editor implementation (Derby) ( C)
				[SM, Conn, DDM]<BR>- Portability check (L)</SPAN></FONT></FONT></P>

			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#Routines Debugger|region">Routines
				Debugger</A></FONT></FONT></P>
			</TD>
			<TD WIDTH=244>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Feature code
				drop<BR></B>- Routine launch configuration - debug mode (C) [SM,
				Conn, DDM]<BR>- Line breakpoint management (C ) [DDM, Conn]</FONT></FONT></P>

				<P><BR>
				</P>
			</TD>
			<TD WIDTH=266>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><B>Feature
				code drop<BR>- </B>Integration w/ Model Base and Connectivity</SPAN>
				</FONT></FONT>
				</P>

			</TD>
			<TD WIDTH=239>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><B>Feature
				code drop<BR></B>- Table view (M) [SM, Conn]</SPAN></FONT></FONT></P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>- External
				client's view (M) [DDM, Conn]</FONT></FONT></P>
			</TD>
		</TR>
		<TR VALIGN=TOP>

			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL Execution Plan|region">SQL
				Execution Plan</A></FONT></FONT></P>
			</TD>
			<TD WIDTH=244>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><B>Initial
				build<BR></B>- Tree-structure GUI execution plan<SPAN LANG="en-US">
				 (C)</SPAN><BR>- Generic and extensible Preference pages (C)</SPAN></FONT></FONT></P>

			</TD>
			<TD WIDTH=266>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><B>Feature
				code drop<BR></B>- Integration w/ Model Base and Connectivity:<BR>-
				Execution plan history<SPAN LANG="en-US"> (C)</SPAN><BR>-
				Save/load/print plans (C)</SPAN></FONT></FONT></P>
			</TD>
			<TD WIDTH=239>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><B>Feature
				code drop<BR></B>- Import and export (M)</SPAN> </FONT></FONT>

				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL Query Builder|region">SQL
				Query Builder</A></FONT></FONT></P>
				<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Note:
				Not targeted for delivery in DTP 1.0</FONT></FONT></FONT></P>
			</TD>

			<TD WIDTH=244>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>tbd</FONT></FONT></P>
			</TD>
			<TD WIDTH=266>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>tbd</FONT></FONT></P>
			</TD>
			<TD WIDTH=239>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>tbd</FONT></FONT></P>

			</TD>
		</TR>
	</TBODY>
</TABLE>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<TABLE WIDTH=905 BORDER=1 BORDERCOLOR="#000000" CELLPADDING=4 CELLSPACING=0>
	<COL WIDTH=122>
	<COL WIDTH=175>

	<COL WIDTH=205>
	<COL WIDTH=188>
	<COL WIDTH=173>
	<THEAD>
		<TR VALIGN=TOP>
			<TH WIDTH=122 BGCOLOR="#c0c0c0">
				<P ALIGN=CENTER><BR>
				</P>
			</TH>

			<TH COLSPAN=4 WIDTH=765 BGCOLOR="#c0c0c0">
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>MILESTONE
				4/DTP 0.N:  03/17/06</B></FONT></FONT></P>
			</TH>
		</TR>
	</THEAD>
	<TBODY>
		<TR VALIGN=TOP>
			<TH WIDTH=122 BGCOLOR="#c0c0c0">

				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B><a href="#Subcomponents|region">Component</A></B></FONT></FONT></P>
			</TH>
			<TH WIDTH=175 BGCOLOR="#c0c0c0">
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>RC1</B></FONT></FONT></P>
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>01/23
				&ndash; 02/24 (25)</B></FONT></FONT></P>
			</TH>

			<TH WIDTH=205 BGCOLOR="#c0c0c0">
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>RC2</B></FONT></FONT></P>
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>02/27
				&ndash; 03/03 (5)</B></FONT></FONT></P>
			</TH>
			<TH WIDTH=188 BGCOLOR="#c0c0c0">
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>RC3</B></FONT></FONT></P>

				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>03/06
				&ndash; 03/10 (5)</B></FONT></FONT></P>
			</TH>
			<TH WIDTH=173 BGCOLOR="#c0c0c0">
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>0.N/M4</B></FONT></FONT></P>
				<P ALIGN=CENTER><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>03/13
				&ndash; 03/16 (4)</B></FONT></FONT></P>

			</TH>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL Query Parser|region">SQL
				Query Parser</A></FONT></FONT></P>
				<P><BR>
				</P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>[SQM, SM, LPG]</FONT></FONT></P>

			</TD>
			<TD WIDTH=175>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Plugin
				restructuring</B></FONT></FONT></P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN STYLE="font-weight: medium">-
				S</SPAN>eparate out lexer</FONT></FONT></P>
				<P><BR>
				</P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><FONT COLOR="#000000">Testing
				with Eclipse 3.2 M5</FONT></SPAN></FONT></FONT></P>

			</TD>
			<TD WIDTH=205>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><B>Doc Drop</B></FONT></FONT></P>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>- Complete
				Internal API Documentation (H)</FONT></FONT></P>
			</TD>
			<TD WIDTH=188>
				<P><BR>
				</P>

			</TD>
			<TD WIDTH=173>
				<P><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL Results View|region">SQL
				Results View</A></FONT></FONT></P>

			</TD>
			<TD WIDTH=175>
				<P STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><FONT COLOR="#000000">Testing
				with Eclipse 3.2 M5</FONT></SPAN></FONT></FONT></P>
			</TD>
			<TD WIDTH=205>
				<P><BR>
				</P>
			</TD>

			<TD WIDTH=188>
				<P><BR>
				</P>
			</TD>
			<TD WIDTH=173>
				<P><BR>
				</P>
			</TD>
		</TR>

		<TR VALIGN=TOP>
			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL/Routines Editor|region">SQL/Routines
				Editor</A></FONT></FONT></P>
			</TD>
			<TD WIDTH=175>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><FONT COLOR="#000000">Testing
				with Eclipse 3.2 M5</FONT></SPAN></FONT></FONT></P>
			</TD>
			<TD WIDTH=205>

				<P STYLE="font-weight: medium"><BR>
				</P>
			</TD>
			<TD WIDTH=188>
				<P><BR>
				</P>
			</TD>
			<TD WIDTH=173>
				<P><BR>

				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#Routines Debugger|region">Routines
				Debugger</A></FONT></FONT></P>
			</TD>
			<TD WIDTH=175>

				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><FONT COLOR="#000000">Testing
				with Eclipse 3.2 M5</FONT></SPAN></FONT></FONT></P>
			</TD>
			<TD WIDTH=205>
				<P><BR>
				</P>
			</TD>
			<TD WIDTH=188>
				<P><BR>

				</P>
			</TD>
			<TD WIDTH=173>
				<P><BR>
				</P>
			</TD>
		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=122>

				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL Execution Plan|region">SQL
				Execution Plan</A></FONT></FONT></P>
			</TD>
			<TD WIDTH=175>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><SPAN LANG="en-US"><FONT COLOR="#000000">Testing
				with Eclipse 3.2 M5</FONT></SPAN></FONT></FONT></P>
			</TD>
			<TD WIDTH=205>
				<P><BR>
				</P>

			</TD>
			<TD WIDTH=188>
				<P STYLE="font-weight: medium"><BR>
				</P>
			</TD>
			<TD WIDTH=173>
				<P><BR>
				</P>
			</TD>

		</TR>
		<TR VALIGN=TOP>
			<TD WIDTH=122>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2><a href="#SQL Query Builder|region">SQL
				Query Builder</A></FONT></FONT></P>
				<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2>Note:
				Not targeted for delivery in DTP 1.0</FONT></FONT></FONT></P>
			</TD>
			<TD WIDTH=175>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>tbd</FONT></FONT></P>

			</TD>
			<TD WIDTH=205>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>tbd</FONT></FONT></P>
			</TD>
			<TD WIDTH=188>
				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>tbd</FONT></FONT></P>
			</TD>
			<TD WIDTH=173>

				<P><FONT FACE="Arial, sans-serif"><FONT SIZE=2>tbd</FONT></FONT></P>
			</TD>
		</TR>
	</TBODY>
</TABLE>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<DIV ID="Components" DIR="LTR">
	<P ALIGN=CENTER STYLE="page-break-before: always"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>Components</B></FONT></FONT></FONT></P>
</DIV>

<P ALIGN=CENTER><BR><BR>
</P>
<P ALIGN=LEFT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2><FONT SIZE=3>Each
component will have a focal point representative who will be
responsible for driving the communications, design and development
for that component. The focal point will interact with the other
members of that team involved in the design and/or implementation and
with other components as needed. Information coming from each
component will be reviewed and shared with the overall project to
ensure good communication, coherency and consistency.</FONT><BR></FONT></FONT></FONT><BR><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<P STYLE="margin-bottom: 0in"><BR>
</P>
<DIV ID="SQL Query Parser" DIR="LTR" STYLE="background: transparent"><A NAME="SQL Query Parser|region"></A>
	<P ALIGN=CENTER STYLE="margin-bottom: 0in; page-break-before: always">
	<FONT FACE="Arial, sans-serif"><B>SQL Query Parser</B></FONT></P>
	<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>

	</P>
	<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
	</P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><BR>
	</P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><B>Scope:</B></FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">The
	scope of the SQL Query Parser is syntactic and semantic validation
	of SQL statements.  Initially, it will handle SQL Data Manipulation
	Language (DML)  constructs:  SELECT, INSERT, UPDATE and DELETE
	statements.  Data Definition Language (DDL) constructs are outside
	the initial scope of the parser.  The output of the parser is an
	instance of the SQL Query Model.</FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><BR>

	</P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><B>Design
	Goals:</B></FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">-
	Based on LPG parser generator</FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">-
	Quick parse feature without constructing model object to determine
	statement type</FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">-
	Focus on test-driven development </FONT>
	</P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">-
	Target SQL Query Model directly as parse result</FONT></P>

	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">-
	Pluggable semantic action productions</FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">-
	Generic, ISO SQL-based source generation, based on SQL-99/2003</FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">-
	Architected support for multiple SQL dialects (inheritance)</FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in">   <FONT FACE="Arial, sans-serif">-
	Use Eclipse extension-point mechanism</FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in">   <FONT FACE="Arial, sans-serif">-
	Multiple parser plug-ins extend common base parser plug-in with
	separate LPG generated parser</FONT></P>

	<P ALIGN=LEFT STYLE="margin-bottom: 0in">   <FONT FACE="Arial, sans-serif">-
	Reuse of grammar: overwrite, drop and add rules</FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">-
	Along with the SQL Query Model, provide strong base for query
	tooling</FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in">   <FONT FACE="Arial, sans-serif">-
	Enable &ldquo;round-trip&rdquo; editing for query builder tools</FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in">   <FONT FACE="Arial, sans-serif">-
	Enable smart editing features for SQL text editors</FONT></P>

	<P ALIGN=LEFT STYLE="margin-bottom: 0in">   <FONT FACE="Arial, sans-serif">-
	Provide rich information for query analysis</FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">-
	Parser not dependent on a live database connection </FONT>
	</P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">-
	Two phase parsing:  </FONT>
	</P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in">   <FONT FACE="Arial, sans-serif">-
	A purely syntactic parsing phase.  Generate the Query model instance
	that represents the query. Completely independent of the database.  </FONT>

	</P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in">   <FONT FACE="Arial, sans-serif">-
	A &quot;semantic resolution&quot; phase.  Use information contained
	in an instance of the base SQL model (mainly table and column
	information) to associate the tables, columns, etc. contained in the
	query with the corresponding objects in a database.  It doesn't
	matter to the parser how the catalog information in the base SQL
	model instance was populated (through a live database connection, 
	cached catalog information, or in some other way).</FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><BR>
	</P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><B>Dependencies</B></FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">LPG
	- used to generate SQL parser from SQL grammar; runtime jar also
	required</FONT></P>

	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">SQL
	Query Model - parser produces SQM objects, also used for semantic
	validation </FONT>
	</P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif">SQL
	Model - used for semantic validation; create data type objects and
	hook into SQM objects</FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><BR>
	</P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><B>Consumers</B></FONT></P>
	<UL>

		<LI><P ALIGN=LEFT STYLE="margin-bottom: 0in; font-weight: medium"><FONT FACE="Arial, sans-serif">The
		Eclipse BIRT project plans to be an early adopter of the parser. 
		Refer to Bugzilla requirement 112689.</FONT></P>
	</UL>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in; page-break-before: always"><BR>
	</P>
</DIV>
<P ALIGN=CENTER STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><B>SQL
Results View</B></FONT></P>
<DIV ID="SQL Results View" DIR="LTR"><A NAME="SQL Results View|region"></A>
	<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
	</P>

	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><B>Scope</B></FONT></P>
	<UL>
		<LI><P ALIGN=LEFT STYLE="margin-bottom: 0in; font-weight: medium"><FONT FACE="Arial, sans-serif">Display
		SQL execution results which may have two types of input: tabular
		result item and message item</FONT></P>
		<LI><P ALIGN=LEFT STYLE="margin-bottom: 0in; font-weight: medium"><FONT FACE="Arial, sans-serif">Execution
		of SQL statements is the responsibility of the SQL Results View API
		consumer, thus is outside this component's scope</FONT></P>
	</UL>
	<UL>
		<LI><P ALIGN=LEFT STYLE="margin-bottom: 0in; font-weight: medium"><FONT FACE="Arial, sans-serif">Will
		consider SDO(Service Data Object) in the next DTP release</FONT></P>

	</UL>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><BR>
	</P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><B>Design
	Goals</B></FONT></P>
	<UL>
		<LI><P ALIGN=LEFT STYLE="margin-bottom: 0in; font-weight: medium"><FONT FACE="Arial, sans-serif">Combined
		script history and SQL result view</FONT></P>
		<LI><P ALIGN=LEFT STYLE="margin-bottom: 0in; font-weight: medium"><FONT FACE="Arial, sans-serif">Support
		flexible output format (xml,cvs,html,etc.), support user-defined
		column delimiters</FONT></P>

	</UL>
	<UL>
		<LI><P ALIGN=LEFT STYLE="margin-bottom: 0in; font-weight: medium"><FONT FACE="Arial, sans-serif">No
		coupling between SQL Results View and SQL Editor Framework/SQL
		Editor implementation</FONT></P>
	</UL>
	<UL>
		<LI><P ALIGN=LEFT STYLE="margin-bottom: 0in; font-weight: medium"><FONT FACE="Arial, sans-serif">Provide
		a smooth transition path for the existing DB Output view consumer,
		to lessen the refactoring effort as much as possible</FONT></P>
	</UL>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in; font-weight: medium"><BR>

	</P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in"><FONT FACE="Arial, sans-serif"><B>Dependencies</B></FONT></P>
	<P ALIGN=LEFT STYLE="margin-bottom: 0in; font-weight: medium"><FONT FACE="Arial, sans-serif">-
	Connection Profile: There is no strong dependency between
	connectivity layer and SQL Results View, other than the connection
	profile name, which is used for history filter and re-execution
	purposes only.</FONT></P>
	<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
	</P>
	<P ALIGN=CENTER STYLE="margin-bottom: 0in"><BR>
	</P>
	<P ALIGN=CENTER STYLE="margin-bottom: 0in; page-break-before: always">

	<FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>SQL/Routines Editor</B></FONT></FONT></P>
	<DIV ID="SQL/Routines Editor" DIR="LTR"><A NAME="SQL/Routines Editor|region"></A>
		<P ALIGN=CENTER><BR>
		</P>
		<P ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>Scope</B></FONT></FONT></P>
		<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>The
		scope of the SQL Editor Framework is to:</FONT></FONT></P>
		<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
		Provide the Data Development Perspective to support SQL application
		development lifecycle</FONT></FONT></P>

		<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
		Help the user to develop SQL scripts by making most of eclipse IDE
		features and to allow vendor-specific features to be easily
		integrated in</FONT></FONT></P>
		<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
		Allow the user to manipulate and run routine objects.</FONT></FONT></P>
		<P ALIGN=LEFT><BR>
		</P>
		<P ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>Design
		Goals</B></FONT></FONT></P>
		<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
		Built using DTP infrastructure components: models--SM, DDM,
		connectivity layer.</FONT></FONT></P>
		<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
		Provide generic SQL Editor support, but extendable for
		vendor-specific features, e.g., context menu/action, wizard
		invocation, etc.</FONT></FONT></P>

		<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
		Reduce coupling between components, for example, avoid tightly
		coupled with SQL Results View and SQL Execution Plan View.</FONT></FONT></P>
		<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
		Can be coupled with SQL Routine Debugger Framework and Debugger
		implementation.</FONT></FONT></P>
		<P ALIGN=CENTER><BR>
		</P>
		<P ALIGN=CENTER STYLE="page-break-before: always"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>Routines
		Debugger</B></FONT></FONT></P>
		<DIV ID="Routines Debugger" DIR="LTR"><A NAME="Routines Debugger|region"></A>
			<P ALIGN=CENTER STYLE="font-weight: medium"><BR>

			</P>
			<P ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>Scope</B></FONT></FONT></P>
			<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
			Allow the user to debug routine objects. </FONT></FONT>
			</P>
			<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
			The debug mechanism of each data server may vary, therefore the
			implementation is vendor specific and beyond the scope.</FONT></FONT></P>
			<P ALIGN=LEFT STYLE="font-weight: medium"><BR>
			</P>

			<P ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>Design
			Goals</B></FONT></FONT></P>
			<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
			Built using DTP infrastructure components: models--SM, DDM,
			connectivity layer, SQL Editor Framework, and SQL Editor
			implementation</FONT></FONT></P>
			<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
			Flexible  Debugger framework allows extendable vendor-specific
			implementations</FONT></FONT></P>
			<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
			Reduce the coupling between SQL Editor framework and Routine
			Debugger framework'</FONT></FONT></P>
			<P ALIGN=LEFT STYLE="font-weight: medium"><BR>
			</P>
			<P ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>Pending</B></FONT></FONT></P>

			<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
			Exemplary debugger (M)</FONT></FONT></P>
			<DIV ID="SQL Execution Plan" DIR="LTR"><A NAME="SQL Execution Plan|region"></A>
				<P ALIGN=CENTER STYLE="page-break-before: always"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>SQL
				Execution Plan</B></FONT></FONT></P>
				<P ALIGN=CENTER><BR>
				</P>
				<P ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>Scope</B></FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>The
				scope of the Execution Plan View is to display SQL query
				execution plans. The execution plan retrieval mechanism is </FONT></FONT>

				</P>
				<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>outside
				the framework's scope and should be implemented by
				vendor-specific plug-ins.</FONT></FONT></P>
				<P ALIGN=LEFT><BR>
				</P>
				<P ALIGN=LEFT><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>Design
				Goals</B></FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
				Flexible model to accommodate various execution plan formats </FONT></FONT>
				</P>

				<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
				Reusable UI components</FONT></FONT></P>
				<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>-
				Reduce coupling between SQL Execution Plan View and SQL Editor
				framework and implementation.</FONT></FONT></P>
				<DIV ID="SQL Query Builder" DIR="LTR"><A NAME="SQL Query Builder|region"></A>
					<P ALIGN=CENTER STYLE="page-break-before: always"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>SQL
					Query Builder</B></FONT></FONT></P>
					<P ALIGN=CENTER><BR>
					</P>
					<P ALIGN=LEFT STYLE="font-weight: medium"><FONT FACE="Arial, sans-serif"><FONT SIZE=3>The
					SQL Query Builder will not be included in DTP 1.0.  However,
					design and development work will go on in the 1.0 time frame,
					with an initial delivery targeted for the release after DTP 1.0.
					 More details are forthcoming.</FONT></FONT></P>

				</DIV>
			</DIV>
		</DIV>
	</DIV>
</DIV>
  
  <h2><a name="DSDP">Device Software Development Platform (DSDP)</a></h2>

	<h3>DSDP-DD Project Plan</h3>

	<p>For the first official release of the Device Debugging project, we are exclusively focused
	on changes in the Eclipse Debug Model (EDM) in the Platform.  The changes are described in the 
	Technical Plans	section below.  The EDM enhacements will be considered "experimental" given
	the newness of the changes.  We do not anticipate needing to creation an Device Debugging
	specific pacakges, e.g. org.eclipse.dd.*, in the first release.  In future releases, 
	DD-specific packages will be created to augment the capabilities in the Eclipse platform 
	with a device software specific debugger implementation and device software debugging and
	utility views.</p> 
	
	<h4>Release Schedule</h4>

	
	<p>Detailed plans on the EDM changes are listed 
	<a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/platform-debug-home/r3_2/plan.html#Overall_Planning"> here</a>.
	Below is a high-level list of changes on a per-milestone basis, as well as a detailed list
	of Memory View improvements.</p>

	<ul>
		<li><b>Eclipse 3.2 M3</b> - 4 November 2005<br>
		<ul>
		    <li> Eclipse Debug Model (EDM)
		    </li>

		    <ul>
		    	<li> Preliminary commit of functionality.  Not ready for usage.
		    	</li>
		    </ul> 
			<li> Memory View
			</li>
			<ul>
				<li> Improve usability - add shortcut keys, improve workflow of add memory monitors,
				global reset Memory Block actions, easier to toggle visibility of tree view pane,
				action/shorcuts to switch between memory monitors, allow to run the view without 
				the tree view pane, 
				</li>

				<li> Address scalability issues of table renderings, allow to 
				adjust number of bytes per line.
				</li>
			</ul>
		</ul>
		<br>
		
		<li><b>Eclipse 3.2 M4</b> - 16 December 2005<br>
		<ul>

		    <li> Eclipse Debug Model (EDM)
		    </li>
		    <ul>
		    	<li> Initial commit of new Eclipse Debug Model. Not stable and intended 
		    	only for initial use by the DD community.
		    	</li>
				<li>See <img src="external.gif"><a href="http://www.eclipse.org/downloads/download.php?file=/dsdp/dd/2005-12-21_Phone_DD_FlexibleDebugPlatform_M4Progress.ppt">development status update</a> 
				from 21-December-2005 meeting
				</li>
		    </ul> 
			<li> Memory View
			</li>

			<ul>
				<li> Enhancements to the framework to support EDM enhancements: Allow models 
				to persist preferences (row / column size), Retargettable actions,
				(Add Memory Block action and Add Memory Rendering action), Support for Address 
				Space, Allow models to better decorate a memory monitor.  (Support for
				ILabelDecorator)
				</li>
				<li> Support for flexible hierarchy in the tree view pane.
				</li>
				<li> Provide hover support.
				</li>
			</ul>
		</ul>

		</li>
		<br>
		
		<li><b>Eclipse 3.2 M5</b> - 17 February 2006<br>
		<ul>
		    <li> Eclipse Debug Model (EDM)
		    </li>
		    <ul>

				<li>Update of EDM based on DD feedback.
				</li>
				<li>To be discussed at <img src="external.gif"><a href="http://wiki.eclipse.org/index.php/DSDP-DD_Face-to-face_Toronto_22-Feb-2006">Toronto</a> 
				meeting 22/23-Febrary-2006. 
				</li>
		    </ul> 
			<li> Memory View
			</li>
			<ul>
				<li> Migrate view to be asynchronous: Migrated renderings to use asynchronous 
				table viewer. Ensure that interactions with models are done on background thread
      			asynchronously.
      			</li>

			</ul>
		</ul>
		</li>
		<br>
		
		<li><b>Eclipse 3.2 M6</b> - 31 March 2006<br>
		<ul>
		    <li> Eclipse Debug Model (EDM)
		    </li>

		    <ul>
				<li>Feature complete for Eclipse 3.2 release.
				</li>
		    </ul>
		    <li> Memory View
		    </li>
		    <ul>
				<li> More work with migrating the table renderings to use asynchronous table
				viewer: Define provisional APIs.  Make the view even more flexible by allow 
				elements other than IMemoryBlockRetrieval to be the view&#39;s input.
				</li>

		    </ul>
		</ul>
		<br>
		
		<li><b>Eclipse 3.2 Release</b> - June 2006<br>
		<ul>
			<li>First release of experimental EDM changes for community usage and feedback.
			</li>
			<li>Release of Memory View improvements that take advantage of the new EDM change.
			</li>

		</ul>
		</li>
	</ul>
	
	<h4>Technical Plans</h4>
	
	<p>In the current architecture of the Eclipse Debug Platform (Eclipse 3.1 and earlier), 
	the debug interfaces enforce a rigid debug element hierarchy (Target – Process – Thread – 
	Stack Frame):</p>
	<img src="image001.jpg" align=center>
	
    <p>A debug model provides implementations of specific interfaces representing this 
    hierarchy, e.g. IDebugTarget, and fires debug events that cause view updates, action 
    updates, and source lookup in the IDE.  Selection changes in the debug view change the 
    active debug context, and the various debugger views, e.g. variables, are hardwired to 
    respond to these selection changes.  The Debug view also provides run-control actions 
    such as run, step and stop, and must be open to drive the debugger.</p>	

    <p>Participants in the Device Debugging project have found the rigidity of this 
    functionality to be inadequate for their commercial development product needs.  
    Specifically, the following features are needed:</p>

    
    <ul>
    	<li> A flexible debug element hierarchy </li>
    	<li> Model driven view updates </li>
    	<li> Asynchronous interactions between UI and debug model </li>
    	<li> Flexible view wiring (e.g. input to variables view) </li>

    	<li> The ability to debug multiple sessions simultaneously </li>
	</ul>
	
    <p>In response to these needs, the Eclipse Debug Platform intends to support arbitrary 
    debugger implementations, thereby allowing it to interact with a wide variety of 
    embedded targets and operating systems.</p>

	<p>Representatives from the Debug Platform team have proposed a solution involving a 
	layer of adaptable interfaces that enable:</p>

    <ul>
    	<li>Customization of view and label content </li>

    	<li>Model driven updates </li>
    	<li>Retargettable debugger actions </li>
	</ul>

	<p>Under this proposal, the Debug Platform will provide default implementations for 
	backward compatibility with the old debug hierarchy and behavior, but users of the 
	platform can also override the structure and behavior of the debugger and its views 
	for custom debugger implementations.  Below we describe the three areas of customization 
	in more detail.</p>
	
	<p><b>Customized view and label content.</b> In Eclipse 3.1, view context is fixed according 
	to the standard debug model.  With the proposed architecture, debugger views can be populated 
	with customized content based on the needs of the debug model.  This is handled by a 
	Content Adapter, as show in the block diagram below.</p>

	<img src="image002.jpg" align=center>

	<p>For each debugger view, the Content Adapter is responsible for populating the nodes in 
	the tree based on the representation that debug model would like to present. Similarly, each 
	node has a corresponding label adapter used to generate its text.  In the case of the Debug 
	View, for example, the view could be customized to contain a new hierarchy that represents a 
	multi-core embedded target:</p>
	
	<img src="image003.jpg" align=center>
	
	<p>Other views can be customized in a similar manner by the Content Adapter.  This 
	proposed design also introduces a Request Monitor to asynchronously process the 
	retrieval of data from the model.  The Request Monitor is a simplification of the 
	Deferred Content Manager in Eclipse 3.1.</p>

	<p><b>Model driven view updates.</b>  In Eclipse 3.1, view updates were fixed and locked 
	to events from the standard debug model.  For example, a context stopped event updates 
	all debug views.  The proposed implementation supports customized view updates, allowing 
	the model to dictate how and what it wants to be updated using a model proxy.  This also 
	allows the user to select different update modes for different views, e.g. manual update, 
	update only on stopped events and not when stepping, etc.  This flexibility is important 
	because in an embedded system, there is often a performance cost associated with updating 
	data in debugger views.  Model proxies interface a model with a view by firing deltas 
	describing what elements have changed in the model and how they should be updated.  
	Model proxies can be implemented on a per-element basis as shown below.</p>

	<img src="image004.gif" align=center>

	<p><b>Debugger Actions.</b>  In Eclipse 3.1, the Debug View is solely responsible for driving 
	the debugger: running, stopping, stepping, initiating source lookup, forcing updates of 
	other Debug Views, etc.  This is limiting for several reasons.  Debugger implementers want 
	the ability to debug without the debug view open, to debug multiple sessions simultaneously, 
	and to retarget debugger actions based on the custom implementation of the debug model.  
	The proposed solution moves control of debugging from the Debug View itself to a Debug 
	Context Manager.  This manager can be driven by selection changes from the Debug View or 
	can be driven programmatically, and the various debugger actions target the active context.</p>

	<img src="image005.jpg" align=center>

	<p>In summary this new architecture provides:</p>

	<ul>
		<li>Flexible element hierarchies/content per element, per view</li>
		<li>Customized labels per element, per view</li>
		<li>Pluggable model proxies per element, per view</li>
		<li>Extensible update policies per view</li>
		<li>Pluggable source lookup</li>

		<li>Retargettable debug actions</li>
		<li>Flexible view wiring</li>
		<li>Debugging without the debug view</li>
		<li>Debugging simultaneous sessions in different views</li>
	</ul>
	
	<h4>See Also</h4>

	<p>Please see the
	<img src="external.gif"><a href="../tutorial/index.php">tutorial</a> section of the Device Debugging project pages 
	for more presentations and documentation.<br><br>
	</p>  

		<h3>DSDP - Target Management Draft 1.0 Plan</h3>
		<!--
		<table border="0" cellpadding="2" cellspacing="0" width="100%">
			<tbody>
				<tr>
					<td align="left"><h3>DSDP - Target Management Draft 1.0 Plan</h3></td>
					<td align="right"><img align="right" src="/dsdp/tm/images/logo_banner.png" /></td>
				</tr>
			</tbody>
		</table><hr/>
		-->
		<p>Last revised 12:00 CET Feb. 27, 2006 (<img src="/dsdp/tm/development/new.gif" alt="(new)" border="0" height="12" width="12">
		<!-- img src="/eclipse/development/new.gif" alt="(new)" border="0" height="12" width="12" -->
		marks interesting recent changes)</p>

		
<p><i>Please send comments about this draft plan to
the </i><a href="mailto:dsdp-tm-dev@eclipse.org">dsdp-tm-dev@eclipse.org</a> <i>developer
mailing list.</i></p>

<p>This document lays out the feature and API set for the initial
release of the Eclipse DSDP - Target Management Project, 
<b>Remote Systems Explorer (RSE) version 1.0.0</b>.</p>
<p>The Remote Systems Explorer is a Tool and Framework for working with 
remote computer systems. It forms the first release out of the DSDP - 
Target Management Project, to be augmented by additional plug-ins for device
specific connection schemes and tasks in the future.</p> 
<ul>
	<li><a href="#Deliverables">Release deliverables</a></li>
	<li><a href="#Milestones">Release milestones</a></li>
	<li><a href="#OperatingEnvironments">Operating
	environments</a></li>
	<li><a href="#Compatibility">Compatibility and dependencies</a></li>

	<li><a href="#Features">Features and capabilities</a></li>
</ul>
<p>This project plan and associated requirements are the result of an
open and transparent process and includes input from those who have
expressed an interest in the project. That said, the success of the
project and its deliverables is solely dependent upon the contributions
from its community membership. If you are interested in contributing to
the project in the delivery of its stated goals, you are more than
welcome!</p>

<p>The first part of the plan deals with the important matters of
release deliverables, release milestones, operating environments,
compatibilities and dependencies. These are all things that need to be
clear for any release, even if no features were to change.</p>
<p>The remainder of the plan consists of themes for the project's
milestones, with more detail on these and future capabilities found on
the project <img src="external.gif"><a href="/dsdp/tm/development/requirements.php">requirements</a>
document. Each plan item covers a feature or API that is to be added to
the Remote Systems Explorer, or some aspect of the project that is
to be improved.</p>
<p>As this plan represents the goals for the initial release of the
Remote Systems Explorer, it is expected and hoped that the project
will acquire additional requirements, a vibrant user community, and most
importantly, a plug-in developer community to utilize the RSE framework
for creating additional connection protocols, subsystem visualizers and more.
With this, it is expected that the plan will be adjusted during the
development cycle in order to accomodate the community to as great an
extent as possible.</p>

<h4><a name="Deliverables"></a>Release deliverables</h4>
<p>The release deliverables have the same form as is found in most Eclipse projects,
namely:</p>
<ul>
	<li>Remote Systems Explorer source code release, available as versions tagged "R1_0" in the project's
		<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.rse/?cvsroot=DSDP_Project">RSE CVS Repository</a>
		and
		<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.core/?cvsroot=DSDP_Project">TM Core CVS Repository</a>
		.
	</li>
	<li>Remote Systems Explorer SDK (includes runtime, user and programmer documentation, with sources) (downloadable).</li>

	<li>Remote Systems Explorer runtime binary distribution (includes user documentation) (downloadable).</li>
	<li>Remote Systems Explorer examples (downloadable).</li>
	<li>Remote Systems Explorer unit tests (downloadable).</li>
</ul>
<h4><a name="Milestones"></a>Release milestones</h4>
<p>Release milestone will be occurring at roughly 6 week intervals. The
milestones are:</p>
<ul>
	<li>TBD - Milestone 0 (1.0 M0) - build machine in place</li>

	<li>Friday April 7, 2006 - Milestone 1 (1.0 M1) - stable build</li>
	<li>Friday May 19, 2006 - Milestone 2 (1.0 M2) - stable build</li>
	<li>Friday June 30, 2006 - Milestone 3 (1.0 M3) - stable build (API freeze)</li>
	<li>Friday August 11, 2006 - Milestone 4 (1.0 M4/RC0) - stable build</li>
</ul>
<p>Lock down and testing then begins with M4, and progress through a
series of test-fix passes against candidates releases. 
Release candidate builds are planned as follows (M4 is
release candidate 0):</p>
<ul>
	<li>Friday August 25, 2006 - Release Candidate 1 - (1.0 RC1)</li>

	<li>Friday September 8, 2006 - Release Candidate 2 - (1.0 RC2)</li>
	<li>Friday September 22, 2006 - Release Candidate 3 - (1.0 RC3)</li>
</ul>
<p>As soon as no critical problems are found in the two-week testing
period between two release candidates, a release candidate can be 
declared the release.</p>
<p>All release deliverables
will be available for download as soon as the release has been tested
and validated in the operating environments listed below.</p>

<!-- -------------------------------------------------------- -->
<h4><a name="OperatingEnvironments"></a>Operating
Environments</h4>
<p>In order to remain current, each Eclipse release is designed to run on
reasonably current versions of the underlying operating environments.</p>

<p>The Remote Systems Explorer depends upon on the Eclipse Platform.
For this release, the RSE sources will be written and compiled
against version 1.4.2 of the Java Platform APIs (i.e., Java 2 Platform,
Release 1.4.2 SE), and designed to run on version 1.4.2 of the Java
Runtime Environment, Standard Edition. Since Java 5 is also used as
Eclipse Reference Platform, some testing of RSE will also
be done on Java 5.</p> 
<p>Eclipse Platform SDK 3.2 will be tested and validated on a number of
<img src="external.gif"><a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_2.html#TargetOperatingEnvironments">
reference platforms</a>
(this list is updated over the course of the release cycle). The 
Remote Systems Explorer wil be tested and validated against a 
subset of those listed for the platform, plus some more (marked
<img src="/dsdp/tm/development/topic.gif" alt="(tm-only)" border="0" height="16" width="16">
) for which contributors have have expressed special interest 
and volunteered to perform the systematic testing:</p>

<table summary="Remote Systems Explorer Reference Platforms" style="width: 821px;"
border="1">
<tbody>
<tr bgcolor="#cccccc">
<th colspan="5">
<div align="center"><strong><font size="+1">Remote Systems Explorer Reference
Platforms</font></strong></div>

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
<td width="453"> Sun Java 2 Standard Edition 5.0 Update 6<br>
for Microsoft Windows </td>
</tr>
<tr>
<td width="205">Microsoft Windows</td>
<td width="59">XP</td>

<td width="76">Intel x86</td>
<td width="59">Win32</td>
<td width="453"> IBM 32-bit SDK for Windows,<br>
Java 2 Technology Edition 5.0 </td>
</tr>
<tr>
<td width="205">Microsoft Windows</td>
<td width="59">
  <img src="/dsdp/tm/development/topic.gif" alt="(tm-only)" border="0" height="16" width="16">
  2000</td>

<td width="76">Intel x86</td>
<td width="59">Win32</td>
<td width="453"> Sun Java 2 Standard Edition 1.4.2_10<br>
for Microsoft Windows </td>
</tr>
<tr>
<td width="205">Red Hat Enterprise Linux</td>
<td width="59">WS 4</td>
<td width="76">Intel x86</td>

<td width="59">GTK</td>
<td width="453"> Sun Java 2 Standard Edition 5.0 Update 6<br>
for Linux x86</td>
</tr>
<tr>
<td width="205">SUSE Linux Enterprise Server</td>
<td width="59">9</td>
<td width="76">Intel x86</td>
<td width="59">GTK</td>

<td width="453"> IBM 32-bit SDK for Linux on Intel architecture,<br>
Java 2 Technology Edition 1.4.2 service release 3 </td>
</tr>
<tr>
<td width="205">Sun Solaris</td>
<td width="59">
  <img src="/dsdp/tm/development/topic.gif" alt="(tm-only)" border="0" height="16" width="16">
  8</td>
<td width="76">SPARC</td>

<td width="59">
  <img src="/dsdp/tm/development/topic.gif" alt="(tm-only)" border="0" height="16" width="16">
  Motif</td>
<td width="453">Sun Java 2 Standard Edition 1.4.2_10<br>
for Solaris SPARC</td>
</tr>
<tr>
<td width="205">
  <img src="/dsdp/tm/development/topic.gif" alt="(tm-only)" border="0" height="16" width="16">
  Ubuntu / Debian Linux</td>

<td width="59"><span style="color: rgb(255, 0, 0);">(TBD)</span></td>
<td width="76">Intel x86</td>
<td width="59">GTK</td>
<td width="453">Sun Java 2 Standard Edition 1.4.2_10<br>
for Linux x86</td>
</tr>
</tbody>
</table>

<p>Eclipse and the RSE undoubtedly run fine
in many operating environments beyond the reference platforms we test.
However, since we do not systematically test them we cannot vouch for them.
Problems encountered when running Eclipse on a non-reference platform
that cannot be recreated on any reference platform will be given lower
priority than problems with running Eclipse on a reference platform.</p>

<h6>Internationalization</h6>
<p>The Remote Systems Explorer is designed as the basis for internationalized
products. The user interface elements provided by the RSE
components, including dialogs and error messages, are externalized. The
English strings are provided as the default resource bundles.
The default bundles will be localized to a subset of those
locales offered by the Platform. This plan will be updated to indicate
which locales will be provided and the timeframe for availability.</p>

<!-- ------------------------------------------------------------ -->
<h4><a name="Compatibility"></a>Compatibility and Dependencies</h4>
<h5>Compatibility of Release 1.0</h5>
<p>The Remote Systems Explorer will be developed in parallel with the
Eclipse Platform SDK version 3.2. Each RSE Milestone Release will be
based on the most recent Platform Milestone available at the time of
release. Therefore, the RSE initial release will be
compatible with Eclipse Platform 3.2 release and will publish binary 
and source compatibilities with migration guides on subsequent releases.</p>

<h5>API Contract</h5>
<p>It is a goal of the Target Management Project to avoid
provisional APIs. APIs published for the 1.0 release will be carefully
reviewed prior to release, making use of "internal" packages for
unsupported and variable implementation classes. Client plug-ins that
directly depend on anything other than what is specified in the
published API are inherently unsupportable and receive no guarantees
about future compatibility. Refer to <i><a
	href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">How
to Use the Eclipse API</a></i> for information about how to write
compliant plug-ins.</p>


<h4><a name="Features">Features and Capabilities</a></h4>
<p>
<!--
A list of project requirements and agreed upon implementation
timeframes is found in
  <img src="external.gif"><a href="/dsdp/tm/requirements.php">this</a>
document.
-->
For the milestones listed in this document, a set of overall themes 
("purpose") is used to indicate what major set of functionalities is to 
be concentrated on for each. These themes are presented below, while the 
requirements document and associated Bugzilla entries are left to those 
wanting more detailed information on each.</p>

<h6>M0 Theme: Infrastructure in place (as soon as EMO completes IP review, + 1 week)</h6>
<ul>
<li><span style="color: rgb(51, 204, 0);">Purpose:</span>
give
easy access to RSE to a wider community; acquire API comments, begin
prototyping; documentation feedback regarding missing or semantically
incorrect instructions (but not about incorrect wording, package names
etc.), get obvious bugs into Bugzilla, find client OS problems</li>
<li>Deliverables: Runtime, SDK; some examples part of SDK, but no separate download yet.</li>

<li>ISV Doc and User doc in its current form (marked "outdated")</li>
<li>Start automated (weekly) builds</li>
<li>Create Download site to give access to automated builds</li>
<li>Plugin and feature versions set to 1</li>
<li>Add basic framework for automated tests</li>
</ul>

<h6>M1 Theme: Functional (April 7)</h6>
<ul>
<li><span style="color: rgb(51, 204, 0);">Purpose:</span>

Add required functionality to provide an environment that is 
complete for those applications that we currently know of.</li>
<li>More Refactoring</li>
<li>Wizard completely replacable</li>
<li>Hide "New..." entries from the RSE tree - Register "New
Connection" as a New Wizard</li>
<li>Add Persistence Provider for sharing in a team (make
different versions merge-able by using a scheme that is simpler than
XMI)</li>
<li>Write some Manual Test Plans (Scripts, what the manual
testers have to do)</li>
</ul>

<h6>M2 Theme: Functional Complete (May 19)</h6>
<ul>

<li><span style="color: rgb(51, 204, 0);">Purpose:</span>
More
prototyping, lots of prototype and API feedback by the community, lots
of bug reports</li>
<li>Deliverables: Add JUnit tests to Downloads, Make separate download for examples</li>
<li>More Refactoring</li>
<li>Add User Actions</li>
<li>Add Import / Export facility</li>
<li>Telnet (contributed by WR)</li>
<li>Write more Manual Test Plans (Scripts, what the manual
testers have to do)</li>
<li>Some automated Test Scripts</li>

<li>Community Feedback on APIs, Docs</li>
</ul>

<h6>M3 Theme: API Freeze (June 30)</h6>
<ul>
<li><span style="color: rgb(51, 204, 0);">Purpose:</span>
Finding &amp; fixing bugs, prototyping, documentation feedback, use to
drive future function requests (for next release), verification of
extensions, usage in various different environments</li>
<li>Final form for ISV Doc</li>
<li>Community Feedback on APIs, Docs</li>

<li>Bugfixing</li>
</ul>

<h6>M4 / RC0 Theme: Ready to Release (August 11)</h6>
<ul>
<li><span style="color: rgb(51, 204, 0);">Purpose:</span>
Planned and coordinated testing on all supported reference platforms,
fixing final bugs</li>
<li>Final form of User Doc</li>
<li>Localization and product polish</li>
</ul>

<h6>RSE Release 1.0.0: Target date September 22, 2006</h6>
<p/>
  
  <h2><a name="STP">SOA Tools (STP)</a></h2>
<p>The SOA Tools top-level Project does not have an overall project plan.</p>
  
  <h2><a name="TECHNOLOGY">Technology (incubator)</a></h2>
  <p>As it is comprised primarily of incubators, research, and education projects, the Technology project is not formally part of the Platform Release Plan.</p>

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
