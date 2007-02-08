<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "Eclipse 2007 Project Plans";
$pageKeywords	= "technology, planning, foundation";
$pageAuthor		= "The Eclipse Foundation";

ob_start();
?>		
<img src="external.gif">
    <div id="maincontent">
	<div id="midcolumn">


<style>
h1 {
border-bottom: solid
}
h2 {
border-bottom: thin dotted
}
</style>

    <style> 
		body {   
		background-image: url('./draft.gif'); 
		background-repeat: repeat-y
		}
	</style>
	
</head>



<h1>Eclipse 2007 Project Plans</h1>
<p>This document is year three of the Eclipse Planning Council Project Plan. We welcome 
  your feedback on the <a href="news://news.eclipse.org/eclipse.foundation">Eclipse 
  Foundation Newsgroup</a>. </p>
  
  <p>The information in the project plans portion of the Roadmap is a snapshot of
  the on-going, continuously developed, project planning and reporting activities of
  the Eclipse projects.  This year again (the third version of the Roadmap), we tried to 
  create an unified and automatic mechanism for aggregating and delivering this Roadmap
  information... Once again, this automation did not happen: the tool and the information
  were late (specifically, <img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=109230">bugs 109230</a> and <img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=130844">130844</a>)
  and the <img src="external.gif"><a href="http://www.eclipse.org/projects/dev_process/project-status-infrastructure.php">project status instructure files</a> for most projects.
  Consequently, the information in this year's roadmap is fairly sparse - the reader
  is directed to the project's home pages for additional information.
  </p>
  <h1>Europa</h1>
  <p>The big project planning effort this year is around the <img src="external.gif"><a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release">Europa Simultaneous Release</a>, the follow-up to the Callisto Simultaneous Release of 2006.
  </p>
  <p>The goal of the Europa Simultaneous Release is to release all the major Eclipse projects at the same time:<ul>
  <li><a href="/ajdt/">AJDT</a><img src="external.gif">
  <li><a href="/birt/">Business Intelligence and Reporting Tools (BIRT)</a><img src="external.gif">
  <li><a href="/buckminster/">Buckminster</a><img src="external.gif">
  <li><a href="/cdt/">C/C++ Development Tooling (CDT)</a><img src="external.gif">
  <li><a href="/corona/">Corona</a><img src="external.gif">
  <li><a href="/dash/">Eclipse Monkey</a><img src="external.gif">
  <li><a href="/dltk/">Dynamic Language Toolkit (DLTK)</a><img src="external.gif">
  <li><a href="/dspd/dd/">Device Software Development Platform, Device Debugging</a><img src="external.gif"> 
  <li><a href="/dspd/tm/">Device Software Development Platform, Target Management</a><img src="external.gif">
  <li><a href="/datatools/">Data Tools Platform (DTP)</a><img src="external.gif">
  <li><a href="/ecf/">Eclipse Communications Framework (ECF)</a><img src="external.gif">
  <li><a href="/emf/">Eclipse Modeling Framework (EMF)</a><img src="external.gif">
  <li><a href="/emft/">EMF Technology (EMFT)(OCL, Query, Transaction, Validation, JET)</a><img src="external.gif">
  <li><a href="/gef/">Graphical Editor Framework (GEF)</a><img src="external.gif">
  <li><a href="/gmf/">Graphical Modeling Framework (GMF)</a><img src="external.gif">
  <li><a href="/mdt/">Modeling Development Tools (MDT)</a><img src="external.gif">
  <li><a href="/mylar/">Mylar</a><img src="external.gif">
  <li><a href="/eclipse/">Platform</a><img src="external.gif">
  <li><a href="/tptp/">Test and Performance Tools Platform (TPTP)</a><img src="external.gif">
  <li><a href="/webtools/">Web Tools Platform (WTP)</a><img src="external.gif">
  <li><a href="/stp/">SOA Tools Platform</a><img src="external.gif">
  </ul>
  We are doing this simultaneous release to support the needs of the ecosystem members who 
  integrate Eclipse frameworks into their own software and products. While those product producers naturally 
  accept the ultimate responsibility for their customers' experiences, Europa's goal is to eliminate 
  uncertainity about project version numbers, and thus to allow ecosystem members to start their own 
  integration, cross-project, and cross-product testing efforts earlier. Europa is about improving the 
  productivity of the developers working on top of Eclipse frameworks by providing a more transparent 
  and predictable development cycle; Callisto is about developers helping developers serve the whole Eclipse community.
</p><p><em>
While Europa is about the simultaneous release of multiple projects, 
it is is not a unification of the projects - each project remains a separate open source 
project operating with its own project leadership, its own committers, and its own project plan.
</em>
</p>
  
  <h1>Individual Project Plans</h1>
  <ul>
  <li><a href="#AJDT">AJDT</a></li>
  <li><a href="#BIRT">Business Intelligence and Reporting Tools (BIRT)</a></li>
  <li><a href="#BUCKMINSTER">Buckminster</a></li>
  <li><a href="#CDT">C/C++ Development Tooling (CDT)</a></li>
  <li><a href="#CORONA">Corona</a></li>
  <li><a href="#DASH">Eclipse Monkey</a></li>
  <li><a href="#DLTK">Dynamic Language Toolkit (DLTK)</a></li>
  <li><a href="#DSDPDD">Device Software Development Platform, Device Debugging</a><img src="external.gif"> 
  <li><a href="#DSDPTM">Device Software Development Platform, Target Management</a><img src="external.gif">
  <li><a href="#DTP">Data Tools Platform (DTP)</a></li>
  <li><a href="#ECF">Eclipse Communications Framework (ECF)</a></li>
  <li><a href="#EMF">Eclipse Modeling Framework (EMF)</a></li>
  <li><a href="#EMFT">EMF Technology (EMFT)(OCL, Query, Transaction, Validation, JET)</a></li>
  <li><a href="#GEF">Graphical Editor Framework (GEF)</a></li>
  <li><a href="#GMF">Graphical Modeling Framework (GMF)</a></li>
  <li><a href="#MDT">Modeling Development Tools (MDT)</a></li>
  <li><a href="#MYLAR">Mylar</a></li>
  <li><a href="#PLATFORM">Platform</a></li>
  <li><a href="#TPTP">Test and Performance Tools Platform (TPTP)</a></li>
  <li><a href="#WTP">Web Tools Platform (WTP)</a></li>
  <li><a href="#STP">SOA Tools Platform</a></li>
  </ul>

<h2><a name="AJDT"></a>AJDT</h2>
<p>
Status: 1.5 planned for June 2007 (as part of the Europa Simultaneous Release)<br>
Eclipse version: 3.3<br>
Platforms: Windows XP, Linux, Mac OS X</p>

Release themes:
<ul>
<li> Improve support for working with crosscutting changes
<li> Improve support for working with pointcuts
<li> Incorporate latest AspectJ release
<li> Be part of the Europa Simultaneous Release
<li> Support and benefit from Eclipse 3.3
</ul>
  
<h2><a name="BIRT"></a>BIRT Project 2.2 Plan</h2>

<p>Last revised January 23, 2007</p>

<h3><a name="Introduction" id="Introduction"></a>Introduction</h3>

<p>This document lays out the feature and API set for the next feature
release of the Eclipse BIRT project after 2.1.1, designated release 2.2.</p>
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

<h3><a name="Deliverables" id="Deliverables"></a>Release deliverables</h3>

<p>In order to improve the end user experience of downloading and installing
BIRT, the release deliverables will be revised. Details will become available
as progress is made on this project.</p>

<h3><a name="Milestones" id="Milestones"></a>Release milestones</h3>

<p>The Eclipse BIRT 2.2 release milestones will be synchronized with the
Eclipse Europa simultaneous release. All release deliverables will be
available for download as soon as the release has been tested and validated
in the target operating configurations listed below. Our target is to
complete BIRT 2.2 in late June 2007. Additional milestones and their dates
will be announced at a later date. Please revisit this page for more details
on the release milestones.</p>

<ul>
  <li>Friday, October 17, 2006 - BIRT 2.2 M1</li>
  <li>Friday, November 17, 2006 - BIRT 2.2 M2</li>
  <li>Friday, December 25, 2006 - BIRT 2.2 M4</li>
  <li>Friday, February 9, 2007 - BIRT 2.2 M5</li>
  <li>Friday, March 23, 2007 - BIRT 2.2 M6</li>
  <li>Friday, May 4, 2007 - BIRT 2.2 RC0</li>

  <li>Friday, June 15, 2007 - BIRT 2.2 RC1</li>
  <li>Friday, June 29, 2007 - BIRT 2.2</li>
</ul>

<p>For information about new features assigned to each milestone please refer
to the <img src="external.gif"><a href="https://bugs.eclipse.org/bugs">bugzilla database</a>. The
bugzilla database will be updated on an ongoing basis as the plan
progresses.</p>

<h3><a name="TargetOperatingEnvironments"
id="TargetOperatingEnvironments"></a>Target Operating Environments</h3>

<p>In order to remain current, each release of an Eclipse project targets
reasonably current versions of underlying operating environments and other
Eclipse projects on which it depends. </p>

<p>Most of Eclipse, and all of BIRT, is &#8220;pure&#8221; Java&#8482; code and has no direct
dependence on the underlying operating system. For BIRT, the chief dependence
is on the Eclipse Platform, Graphical Editor Framework (GEF), Modeling
Framework (EMF), and on the Java 2 Platform that runs it. </p>

<p>The Eclipse BIRT 2.2 release depends on the following compatibility
stack:</p>

<p><b>BIRT 2.2 Reference Stack for JDK 1.4.2</b></p>
<ul>
  <li>Java 2 platform Java Development Kit (JDK) 1.4.2</li>

  <li>Eclipse Platform Runtime Binary 3.3</li>
  <li>Graphical Editor Framework (GEF) Runtime 3.2</li>
  <li>Eclipse Modeling Framework (EMF) 2.2</li>
  <li>Data Tools Platform Project 1.5 (DTP)</li>
  <li>Web Tools Project (WTP) 2.0</li>
  
</ul>

<p><b>BIRT 2.2 Reference Stack for JDK 1.5</b></p>
<ul>
  <li>Java 2 platform Java Development Kit (JDK) 1.5</li>
  <li>Eclipse Platform Runtime Binary 3.3</li>
  <li>Graphical Editor Framework (GEF) Runtime 3.2</li>
  <li>Eclipse Modeling Framework (EMF) 2.3</li>
  <li>Data Tools Platform Project 1.5 (DTP)</li>

  <li>Web Tools Project (WTP) 2.0</li>  
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

<p>For BIRT 2.2, the project team plans to tests and validate the following
reference platforms:</p>

<table border="1">
  <tbody>
    <tr bgcolor="#CCCCCC">

      <th colspan="4">
        <div align="center">
        <b><font size="+1">Eclipse BIRT Report Framework 2.2 and Eclipse BIRT
        RCP Report Designer 2.2 Reference Platforms</font></b></div>
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
      <td width="205">Red Hat Enterprise Linux WS 3.0

        <p>Red Hat Enterprise Linux WS 4.0</p>
      </td>
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

        <b><font size="+1">Eclipse BIRT Runtime 2.2 and Eclipse BIRT Charts
        2.2 Reference Platforms</font></b></div>
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
      <td width="405">Apache Tomcat 5.0.x, 5.5.x</td>
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

      <td width="405">Derby V10.1.2.1 JDBC driver</td>
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

<h4>Internationalization</h4>

<p>Eclipse is designed as the basis for internationalized products. The user
interface elements provided by the various Eclipse projects, including
dialogs and error messages, are externalized. The English strings for BIRT
are provided as the default resource bundles. Translations are provided with
this release for French (fr_FR), German (de_DE), Spanish (es_ES), Japanese
(ja_JP), Simplified Chinese (zh_CN), and Korean (ko_KR).</p>

<h3><a name="Compatibility" id="Compatibility"></a>Compatibility with
Previous Releases</h3>

<p>BIRT 2.2 will be compatible with earlier versions of BIRT to the greatest
extent possible. The nature and scope of some of the key plan items for BIRT
2.2 are such that the only feasible solutions might break compatibility. In
other regards, BIRT 2.2 will be compatible with 2.x and 1.x. We also aim to
minimize the effort required to port an existing plug-in to the 2.2 APIs.</p>

<h3>Compatibility of Release 2.2 with 2.1, 2.1.1, 2.0.x and 1.x</h3>

<p>BIRT 2.2 will be compatible with BIRT 2.1, 2.1.1, 2.0.x and 1.x unless
noted. The detailed compatibility statement is listed below. In this
statement, &quot;BIRT&quot; refers to all BIRT components: BIRT Report Framework, BIRT
Runtime, and BIRT Chart SDK.</p>

<p><b>API Contract Compatibility:</b> BIRT 2.2 will be upwards
contract-compatible with BIRT 2.1, 2.1.1, 2.0.x and 1.x to the greatest
extent possible. All incompatibility exceptions will be documented. Downward
contract compatibility is not supported. There is no guarantee that
compliance with BIRT 2.2 APIs will ensure compliance with BIRT 2.1, 2.1.1,
2.0.x or 1.x APIs. Refer to general Eclipse document on <a
href="http://eclipse.org/eclipse/development/java-api-evolution.html">Evolving
APIs</a> for a discussion of the kinds of API changes that maintain contract
compatibility.</p>

<p>The BIRT Chart UI API v2.2 is compatible with the v2.1, 2.1.1, 2.0.x API
but not compatible with the v1.x APIs due to a full redesign of the Chart UI
in the BIRT 2.0 release.</p>

<p><b>Binary (plug-in) Compatibility:</b> The BIRT 2.2 plug-in framework will
be upwards binary-compatible with BIRT 2.1, 2.1.1, 2.0.x and 1.x plug-ins to
the greatest extent possible. Downward plug-in compatibility is not
supported. Plug-ins for BIRT 2.2 will not be usable in BIRT 2.1, 2.1.1, 2.0.x
or 1.x. Extension plug-ins for BIRT 2.1, 2.1.1, 2.0.x and 1.x will be upwards
binary-compatible with BIRT 2.2.</p>

<p><b>Source Compatibility:</b> BIRT 2.2 will be upwards source-compatible
with BIRT 2.1, 2.1.1, 2.0.x and 1.x to the greatest extent possible. This
means that source files written to use BIRT 2.1, 2.1.1, 2.0.x or 1.x APIs
will successfully compile and run against BIRT 2.2 APIs. Downward source
compatibility is not supported. If source files use new BIRT APIs, they will
not be usable with an earlier version of BIRT.</p>

<p><b>Report Design Compatibility:</b>BIRT 2.2 will be upwards report design
compatible with BIRT 2.1, 2.1.1, 2.0.x and 1.x unless noted. This means that
reports created with BIRT 2.1, 2.1.1, 2.0.x or 1.x can be successfully opened
by BIRT 2.2 and upgraded to a 2.2 format.</p>

<p><b>Non-compliant usage of API's: </b> All non-API methods and classes, and
certainly everything in a package with &quot;internal&quot; in its name, are considered
implementation details which may vary between operating environment and are
subject to change without notice. Client plug-ins that directly depend on
anything other than what is specified in the BIRT API are inherently
unsupportable and receive no guarantees about compatibility within a single
release much less with an earlier releases.</p>

<h3><a name="Themes" id="Themes">Themes</a></h3>

<p>Continuing on the themes for previous releases of BIRT, the BIRT project's
overriding release 2.2 theme remains extending the Eclipse platform to
provide infrastructure and tools that allow application developers to design,
deploy, generate and view reports within their applications. In this context,
the BIRT project also adopts and supports key themes within the overall
Eclipse planning process.</p>
<ul>
  <li><b>Scaling up and Enterprise Ready</b> The Eclipse platform 3.3
    continues to improve on scalability and readiness for the enterprise.
    BIRT 2.2 leverages the support that 3.3 provides by ensuring that it is
    tested and it supports Eclipse 3.3.</li>
  <li><b>Simple to Use - </b>BIRT 2.2 includes ease of use enhancements such
    as improvements to the BIRT report designer.</li>
  <li><b>Appeal to a Broader Community - </b>BIRT 2.2 will broaden the appeal
    of BIRT by its integration with the Eclipse Europa simultaneous release.
    In addition, BIRT 2.2 provides new report types via additional report
    items such as the Crosstab report item.</li>

</ul>

<h3><a name="Projects" id="Projects">Projects</a></h3>

<p>The candidate projects being considered for this release include the
following list. Please note that the final list will depend on sign off from
the project committers.</p>

<p><span style="font-weight: bold">Data Sources</span></p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Web Service Data
Source</span> One of the key goals of BIRT is to support data access for a
number of different data sources for reporting. Given the widespread
popularity of web services, this project enhances the XML ODA driver to
include the capability to treat web services as a data source. It also allows
the report developer to specify data source parameters in order to filter the
data that is fetched. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159490">159490</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Extend Flat File
Data Source</span> Instead of specifying the column data types in the first
row of a CSV file, this project looks at specifying the column names and
their data types when defining the flat file data source. In addition, this
project makes the flat file data source more flexible by allowing delimiters
other than just the comma character. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=152210">152210</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Parameters for
XML Data Sources</span> In certain situations it is important to be able to
specify parameters to an XML data source. An example of this is an XML data
source that needs to fetch information from a finance web site given a
certain stock ticker symbol . Without being able to specify a symbol, the
data source would be at a loss to determine what is to be fetched. This
project examines the capability to provide parameters to an XML data source.
[Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=116636">116636</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Predicates in
XML Data Sets</span> It is not currently possible to apply predicates such as
/city/[@iscapital=&quot;&quot;Y&quot;&quot;]/@name in order to fetch the name of a capital city
using an XPath expression when defining an XML data source. This project
extends the predicates that are supported in the XML data source.[Bugzilla
ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=152823">152823</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Dynamic
Reference to Connection Profile</span> A connection profile contains all of
the necessary information to allow a BIRT report to connect to a data source.
BIRT supports importing a connection profile when creating a data source in a
report design. However, when changes are made to a connection profile these
changes are not reflected in the BIRT report. This project aims to provide
the capability to store a reference to an external connection profile so that
any changes made to the profile are automatically picked up by the BIRT
report. This makes migration from a test to a production environment easy.
[Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=149945">149945</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Boolean Data
Type in Data Set</span> In a data set, when creating a computed column it
currently is not possible to specify the data type as a Boolean data type.
This project will now allow the creation of Boolean type computed columns.
[Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=152443">152443</a>]</p>

<p><span style="font-weight: bold">Emitters</span></p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Microsoft Word
and Excel Output</span>s Users who receive reports often want to distribute
these reports to a wider audience via email in order to share information. In
the process of doing this, they may want to export the report to a common
format such as MS Word or Excel, make the edits and then distribute the Word
file or Excel spreadsheet. For usability, the receiver of the email would
rather access the document as an MS Office file. PDF is often not an option
since the user wants to make edits to the file. The MS Word and Excel report
format converters approximate the look and spacing of elements in the
original report to Word and Excel formats respectively. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159491">159491</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">XML
Output</span> With the rapid adoption of XML as the lingua franca for
business information exchange, and for the exchange of information within an
application, a large number of developers would like the output of a report
delivered in XML. This would make it easy to integrate report content into
other applications. Thus support for XML output is essential to the adoption
of BIRT across a range of applications. This project provides an easy way to
output a BIRT report as XML of-the-box. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159492">159492</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Postscript
Output</span> The widespread availability and acceptance of PostScript has
made it a language of choice for graphical output for printing applications.
Providing a PostScript emitter from a BIRT report supports offloading the CPU
workload involved in printing documents, transferring it to the printer.
[Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=158748">158748</a>]</p>

<p><span style="font-weight: bold">Use of Eclipse 3.2 Features</span></p>

<p style="text-indent: 25pt">This project aims to make use of the new Eclipse
3.2 SWT widgets and upgrades to the latest version of EMF. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159493">159493</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Extensible Data
Explorer View</span> This project aims to make the data explorer view
extensible so that custom data sources can now be made available and selected
from in the Data Explorer view. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159495">159495</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Improved Project
Explorer View</span> This project looks at improving the usability of the
project navigator view especially since this view is not available in the RCP
based designer. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159496">159496</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Improved and
Extensible Property Editor View</span> This project aims to make the property
editor view extensible and improves its look and feel. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159497">159497</a>]</p>

<p><span style="font-weight: bold">Contributions to Eclipse's DTP
Project</span> This project will make several contributions to the DTP
project. These include: 1) Enhance oda runtime API to provide generalized
support of JDBC specialized features 2) Enhance oda.design utility to
facilitate oda host processing of oda.design response/request 3) Extract
common behavior from BIRT odaconsumer to DTP oda.consumer 4) Migrate BIRT
oda.xml plugins to DTP Enablement namespace. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159498">159498</a>]</p>

<p><span style="font-weight: bold">Formatting</span></p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Highlight Rule
References Style Element</span> Highlighting is a powerful way to draw
attention to report items that meet certain conditions. For instance, in a
product inventory report, if the inventory level of a product drops below the
minimum stocking level, then that row in the report needs to be highlighted
so that the consumer of the report can act on the information in a timely
fashion. Instead of defining style elements in a highlighting rule, this
project aims to allow the use of existing style elements in a BIRT report.
This makes it easy for report developers to maintain changes to styles and
highlighting rules. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=146642">146642</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Table of
Contents Formatting</span> The table of contents in a BIRT report currently
do not support the use of styles. They also do not provide any flexibility in
their layout. This project aims to allow the use of styles as well as more
flexibility in the layout of the table of contents in a BIRT report.
[Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159499">159499</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Reference to
External CSS file</span> Style sheets provide an easy to use and productive
mechanism to establish a uniform style across documents. This is a concept
with which many users are familiar. This project extends the concept of
styles to allow the definition of a style to be contained in a separate style
sheet file that can be referred to from a BIRT report without importing it.
This makes it easy to modify CSS files and have the changes reflected in a
report design. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=140619">140619</a>]</p>

<p><span style="font-weight: bold">Report Item</span></p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Dynamic Crosstab
Report Item</span> A cross tabulation report (often abbreviated as a Crosstab
report) displays the relation between two variables in a tabular or matrix
format. An example of a crosstab report might be a &#8220;US Sales By State and
Product&#8221; report that displays the US states along the X-axis and products
along the Y-axis. Each cell in this table could be the sum of the amount
spent by all customers who live in a particular state AND have purchased a
particular product. This project aims to provide a dynamic crosstab report
item where the values displayed along the rows and columns are gleaned from
the data set columns. This project enhances the ODA Design API to support
OLAP data source metadata to populate the crosstab report item's initial
configuration. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=102521">102521</a>]</p>

<p><span style="font-weight: bold">Parameters</span></p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Designating
Default for a List of Values</span> Report parameters allow users to tailor
the content of a report. Selecting a value for a parameter from a list of
values that is fetched from a data set prevents the user from incorrectly
supplying parameter values. When designing a report parameter that presents a
list of values based on a data set, it is useful for the report developer to
be able to examine the list and designate a default value from the list. This
project aims to allow the report developer to define this default value.
[Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=153495">153495</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Dataset Ad-hoc
Parameters </span>A report such as an Employee report may allow an end user
to supply numerous report parameters such as first name, last name, telephone
extension, office location amongst many others. Based on the values supplied
by the end user the Employee report would filter the records fetched from the
database using only those parameters that the end user supplied and ignoring
other &quot;unsupplied&quot; parameters. In order to meet this requirement in BIRT
currently, the report developer needs to utilize scripting. This project
explores providing ad-hoc dataset parameters which in most respects behave
like regular dataset parameters. They differ in that they do not have default
values and if a value is not specified when a report is run then they are not
used in filtering the rows fetched from a data source. Additionally, the user
can specify multiple items for a single parameter. For example, the user can
request all Employees located in the US or Canada. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=142609">142609</a>]</p>

<p><span style="font-weight: bold">Usability</span></p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Graphical Query
Builder</span> Not all report developers are familiar with SQL syntax for
accessing a relational data source to retrieve data for a report. The Visual
SQL Builder allows for graphical editing of SQL, increasing developer
productivity, and making query construction possible for a wider user base.
With a visual SQL query builder, users have the freedom to create queries
without writing a single line of SQL code. The query builder is a
point-and-click visual user interface that walks novice users step-by-step
through the process of specifying a query that extracts data from database
tables. It is expected that developers will use the visual SQL query builder
for creating many of the SQL queries they need. However, for more complex
queries, the developer will likely use an editor to work with the SQL
directly. BIRT must support both models for working with a SQL query.
[Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159501">159501</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Debugging</span>
When designing a report the developer encounters errors occasionally. The
productivity of the developer is greatly enhanced if the designer helps in
pinpointing the location of that error quickly. This project looks at ways to
improve this debugging capability. When the report developer clicks on a
error in the Problem View, the focus would shift to the report item that has
the error. If there is an error in the XML underlying the report design, then
focus would shift to the line in the XML with the error. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159502">159502</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Chart Designer
Usability</span> This project aims at improving the layout and general
usability of the chart designer to include areas such as better grouping of
data, reorganize the UI for quick access to commonly used settings, the
interactivity UI, easy creation of drill-through URL's using chart values as
parameters, navigation improvements, and Eclipse wizard-like error
notification. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=132040">132040</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Ease of Plugin
Development</span> The Open Data Access (ODA) framework is key component of
the Data Tools Project (DTP). ODA presents the Java developer with a robust
architecture to extend the capabilities of BIRT by being able to report on
custom data sources. This project will make it easier to extend the data
sources that BIRT can report on by providing a wizard to create an ODA
runtime and designer plugin with default implementation and stub source code.
[Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159503">159503</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Building
BIRT</span> This project focuses on making it easy for the Eclipse community
to compile and build BIRT and therefore to make contributions to BIRT.
[Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159504">159504</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Quick Start to
Report Development</span> First time users and novice users of BIRT will
benefit from being able to examine sample reports as they go about learning
to design reports. This project looks at making a set of sample reports
easily accessible by these users. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159505">159505</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Improved XML
Editor</span> This project will look at improving the capabilities of the XML
editor by leveraging the capabilities of the XML editor from Eclipse's Web
Tools Project. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159507">159507</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Improved
Extensibility of Emitters</span> BIRT provides a framework that is highly
extensible. This project aims to make it easier for developers to add new
types of emitters.[Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=158714">158714</a>]</p>

<p><span style="font-weight: bold">Scripting</span></p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Improved
JavaScript Editor</span> JavaScript is very approachable by a broad class of
developers. This project improves the support for JavaScript in BIRT reports,
including more powerful debugging capabilities. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159508">159508</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Scripting
Implementation</span> This project proposes to enhance the scripting
capabilities so that both Java and JavaScript based scripting utilize the
same implementation and therefore have very similar levels of functionality.
[Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159509">159509</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Documentation of
Scripting API's</span> This project looks at documenting the current
scripting API's for both Java and JavaScript based scripting. [Bugzilla ID:

<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=132031">132031</a>]</p>

<p><span style="font-weight: bold">Depoyment and Integration</span></p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Easy Deployment
and Integration</span> To encourage the use of BIRT by the development
community, it must be easy for developers to integrate BIRT reports into
their Java applications. To support this goal, BIRT should provide
capabilities that make it easy for the developer to deploy the BIRT Runtime
and reports in their application using easy-to-use tools. This project
explores the use of tools from the WTP project in order to accomplish this
goal. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159510">159510</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">JSP Tag Library
for Charts</span> Java Server Pages is a widely used technology in web
application development. In order to simplify the integration of Charts
within a JSP based application, this project will provide a JSP tag library.
This library can be used with standalone charts as well. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159511">159511</a>]</p>

<p><span style="font-weight: bold">Charting</span></p>

<p style="text-indent: 25pt"><span style="font-weight: bold">New Chart
Types</span> This project extends the different types of charts available to
include Gantt, Bubble, Difference/Range, Radar/Polar, Donut, Tubes for
2d/2d+/3d and richer Meter charts. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=147770">147770</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Smart
Labels</span> The layout of various chart elements becomes complicated when
there are a lot of data points. This project will focus on automatically
setting font sizes based on the chart size, auto wrapping, and auto
positioning of X-Axis labels. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=119068">119068</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Scaling and
Grouping</span> This project improves the scaling and grouping of charts.
Items include 2 levels X grouping (e.g. by Year and months, shown on Axis as
2 layers of labels); improved datetime and range grouping; multiple Y
aggregates for X series grouping (each Y series can use its own aggregate
function); multiple Y series grouping (each Y series can have its own
grouping key); support linear axis for Line/Bar/Area (non-stacked) charts;
datetime scaling support; overflow data handling; steps number customization;
integer scale support. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159513">159513</a>]</p>

<p style="text-indent: 25pt"><span style="font-weight: bold">Chart API</span>
This project aims to simplify the chart model API and make it accessible from
scripting. It will only expose a set of clear interfaces that determine what
can be changed using scripting. [Bugzilla ID: <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=159514">159514</a>]</p>

<p><span style="font-weight: bold">Multiple Choices in Single Drill Through
Action</span> In a sales analysis report that looks at the revenue generated
by various products, it is useful to present multiple options for drill down
to the end user. For example, when the mouse is positioned over the revenue
for Classic Cars, which contains a hyperlink, a pop-up could let the end user
select either &quot;Revenue By Region&quot; or &quot;Revenue By Sales Person&quot;. Selecting

&quot;Revenue By Region&quot; would drill through to a report that presents regional
distribution of revenue for Classic Cars. Selecting &quot;Revenue By Sales Person&quot;
would drill through to a report that lists the sales persons who have sold
Classic Cars. This concept would be useful for charts as well. [Bugzilla ID:
<img src="external.gif"><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=151903">151903</a>]</p>

<h3><a name="Defects" id="Defects">Defects</a></h3>

<p>BIRT 2.2 will address defects reported by project members and the
community. The <a
href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;product=BIRT&amp;target_milestone=2.2.0&amp;">list
of defects</a> targeted for resolution in BIRT 2.2 can be found in the
bugzilla database on <a
href="https://bugs.eclipse.org/bugs">https://bugs.eclipse.org/bugs</a>.</p>

<h2><a name="BUCKMINSTER"></a>Buckminister</h2>
  
<a name="Release_1.1"></a><h3> Release 1.1 </h3>
<a name="Theme:_Usability"></a><h3> Theme: Usability </h3>

<ul><li>Graphical editors for the RMAP and CSPEC
<ul><li>Use EMF for all models (awaits EMF support for generics)
</li><li>”Form” style editors with Eclipse look and feel
</li><li>Intuitive and with extensive help
</li></ul>
</li></ul>
<ul><li>Graphical representation of a Component Model
<ul><li>Can view a complete model spanning many components
</li><li>Should be zoomable
</li></ul>
</li></ul>
<ul><li>Graphical representation of the resolve process
<ul><li>Provides feedback to the user during the resolve process
</li><li>The graph of chosen paths can be persisted
</li></ul>
</li></ul>
<ul><li>Standards

<ul><li>Support for Java Content Repository (JSR170)
</li></ul>
</li></ul>
<a name="Release_1.2"></a><h3> Release 1.2 </h3>
<a name="Theme:__Support_for_wider_range_of_component_models"></a><h3> Theme:  Support for wider range of component models </h3>
<ul><li>WAR and EAR recognition
<ul><li>project models produced by CSPEC actions

</li><li>Reuse models supported by Eclipse Web Tools Project
</li><li>Target common servers. Tomcat, Jboss, JOnAS
</li><li>Commercial servers, such as Websphere, Weblogic, Oracle
</li></ul>
</li><li>Support for Ivy projects
</li><li>Support for Java Modules (JSR277), subject to JSR finalization
</li></ul>
<h3> Release 1.3 </h3>
<h3> Theme:  Support for additional languages </h3>

<ul><li>PHP/Python/Perl, C
<ul><li>Repository provider for CPAN
</li><li>Support LAMP (Linux Apache MySQL PHP) component stack
</li></ul>
</li></ul>
<ul><li>Additional component models
<ul><li>Recognize CDT generated projects
</li><li>Perhaps recognize automake/auotconf/configure projects
</li></ul>
</li></ul>

<h2><a name="CDT"></a>C/C++ Development Tooling (CDT)</h2>
</p><p>Last revised: 13:18, 24 October 2006 (EDT)
</p><p>CDT 4.0 is scheduled to be delivered in June 2007 as part of the Europa Simultaneous Release. Guidelines for this release are <a href="/index.php/Europa_Simultaneous_Release" title="Europa Simultaneous Release"> available here</a>.

</p>
<h3> Release Deliverables </h3>
<p>The release deliverables are the same as with previous releases.
</p>
<ul><li> Source code in CVS tagged "CDT_4_0".

</li><li> CDT run-time, i.e. org.eclipse.cdt feature, downloadable as a tar/zip per supported platform.
</li><li> CDT SDK, i.e. org.eclipse.cdt.sdk and org.eclipse.cdt features, downloadable as a tar/zip per supported platform.
</li><li> Contents of SDK available from the CDT update site.
</li><li> Contents of CDT run-time available from the Europa update site.
</li><li> Release review slides, including project log.
</li></ul>
<h3> Release Milestones </h3>

<p>The CDT will follow the Europa schedule for milestones and final delivery. These generally follow the milestones of the Eclipse Platform by one week. The following are the dates for when the milestones will be generally available along with links to the plans listing the state of the CDT features for that milestone.
</p>
<ul><li> Thursday, Dec. 21, 2006 - Milestone 4 (4.0 M4) - <a href="/index.php/CDT/planning/4.0M4Plan" title="CDT/planning/4.0M4Plan"> plan</a>.
</li><li> Friday, Feb. 16, 2007 - Milestone 5 (4.0 M5) - <a href="/index.php?title=CDT/planning/4.0M5Plan&amp;action=edit" class="new" title="CDT/planning/4.0M5Plan"> plan</a>.
</li><li> Friday, Mar. 30, 2007 - Milestone 6 (4.0 M6) - <a href="/index.php?title=CDT/planning/4.0M6Plan&amp;action=edit" class="new" title="CDT/planning/4.0M6Plan"> plan</a> - API freeze.

</li><li> Friday, May 11, 2007 - Milestone 7 (4.0 M7) - <a href="/index.php?title=CDT/planning/4.0M7Plan&amp;action=edit" class="new" title="CDT/planning/4.0M7Plan"> plan</a> - Code freeze.
</li></ul>
<p>The code freeze date is the RC0 date which marks the beginning of the ramp down. All features should be implemented and only bug fixes of increasing criticality should be fixed marching towards the Europa release date of Friday, June 29, 2007.
</p>
<h3> Target Operating Environments </h3>
<p>Builds of the CDT are available for the following host operation system and architecture combinations (there are no windowing system specific plugins in the CDT):
</p>

<ul><li> Windows - x86
</li><li> Linux - x86, x86_64, ppc, ia64
</li><li> Mac OS X - ppc, x86 (universal)
</li><li> Solaris - sparc
</li><li> AIX - ppc
</li><li> QNX Neutino - x86
</li></ul>
<p>The download status show that Windows x86 and Linux x86 are by far the most widely used, and, thus, tested and have the best support.
</p><p>The current plan is to support Java 1.4.2 run-time environments with CDT 4.0. Some optional components will require Java 1.5.0. We are still looking for concrete examples of CDT users that can not move to Java 1.5.0. If you have such an example, please report it to <a href="mailto:cdt-dev@eclipse.org" class='external text' title="mailto:cdt-dev@eclipse.org" rel="nofollow">cdt-dev@eclipse.org</a>.

</p>
<h3> Plug-in Dependencies </h3>
<p>The CDT currently only depends on the Eclipse Platform Runtime Binary. CDT 4.0 will require Eclipse 3.3.x. Since new APIs will be used, CDT 4.0 will not be compatible with Eclipse 3.2.x.
</p>
<h3> Internationalization </h3>
<p>All effort is made to ensure that the CDT can be nationalized to all languages supported by the Eclipse Platform. Only English is provided with the CDT and is the only language known to be tested.
</p>

<h3> Compatibility with Previous Releases </h3>
<p>The CDT has had a troubled history maintaining backwards compatibility. One of the main objectives of CDT 4.0 will be to finalize all APIs so that we can maintain backwards compatability in future releases. As such, it is anticipated that there will be more churn in the APIs for this release. All plugins that use any APIs and/or extension points provided by the CDT will need to at least recompile against CDT 4.0 and will likely need to make code changes.
</p>
<h3> Component Plans </h3>
<p>The following are the plan items proposed for specific components of the CDT.
</p>
<h3> Core </h3>

<h4> Indexing </h4>
<ul><li> Support headless creation of indexes (PDOM), and import of these prebuilt indexes into user workspaces. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=074433" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=074433" rel="nofollow">bug 74433</a>.
<ul><li> Enable pdom index files to be relocatable (contain relative or symbolic paths) <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=162172" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=162172" rel="nofollow">bug 162172</a>
</li></ul>
</li><li> Refactor the parser to allow it to be deployed as a standalone JAR file if so desired. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=151846" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=151846" rel="nofollow">bug 151846</a>

</li><li> Refactor the indexer to allow it to be deployed as a standalone JAR file if so desired. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=158975" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=158975" rel="nofollow">bug 158975</a>
</li><li> Refactor the indexer to remove hard dependencies on having an Eclipse project. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=151847" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=151847" rel="nofollow">bug 151847</a>
</li><li> Allow customizability of which parser to run on particular projects/files/resources. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=151850" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=151850" rel="nofollow">bug 151850</a>
</li></ul>
<h4> New Project Model </h4>

<p>The main goal of the New Project Model is to increase the CDT usability, tool-integrator support and multi language support.
</p><p>References:
</p>
<ul><li> <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=115935" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=115935" rel="nofollow">bug 115935</a>
</li><li> <a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=46637" class='external text' title="https://bugs.eclipse.org/bugs/attachment.cgi?id=46637" rel="nofollow">New Project Model Core Design</a>
</li><li> <a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=50311" class='external text' title="https://bugs.eclipse.org/bugs/attachment.cgi?id=50311" rel="nofollow">New Project Model UI Design</a>
</li><li> <a href="http://download.eclipse.org/tools/cdt/docs/summit2006/New_Project_Model_06.09.25.ppt" class='external text' title="http://download.eclipse.org/tools/cdt/docs/summit2006/New Project Model 06.09.25.ppt" rel="nofollow">"New Project Model Core" presentation</a> 
</li><li> <a href="http://download.eclipse.org/tools/cdt/docs/summit2006/New_Project_Model_UI_06.09.25.ppt" class='external text' title="http://download.eclipse.org/tools/cdt/docs/summit2006/New Project Model UI 06.09.25.ppt" rel="nofollow">"New Project Model UI" presentation</a>

</li></ul>
<h3> UI </h3>
<h4> C/C++ Editor </h4> 
<ul><li> <b>Support indent width independent of tab width</b>.  Allow to specify indent width independent of tab width to support mixed-mode indentation as already requested by <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=53994" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=53994" rel="nofollow">bug 53994</a> and <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=92036" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=92036" rel="nofollow">bug 92036</a>.

</li><li> <b>Default formatter</b>.  Implement a (simple) default formatter/indenter. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=95274" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=95274" rel="nofollow">bug 95274</a> 
</li><li> <b>Text Drag and Drop</b>.  Implement Text Drag and Drop for the editor. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=78677" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=78677" rel="nofollow">bug 78677</a> <br />Note: This may become obsolete if Eclipse platform implements it in 3.3. See also <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=11624" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=11624" rel="nofollow">bug 11624</a>.
</li><li> <b>View non-printable characters</b>. Provide a command and toolbar button to enable visualization of non-printable characters in the editor (CR, LF, TAB, SPACE). <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=140333" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=140333" rel="nofollow">bug 140333</a> <br />Note: This may become obsolete if Eclipse platform implements it in 3.3. See also <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=22712" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=22712" rel="nofollow">bug 22712</a>.

</li><li> <b>Auto-save</b>.  Implement an option to regularly save dirty editor buffers to the Eclipse local history as a backup mechanism. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=140334" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=140334" rel="nofollow">bug 140334</a> <br />See also Eclipse platform <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=34076" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=34076" rel="nofollow">bug 34076</a>.
</li><li> <b>Semantic highlighting</b>. Colorize definitions and declarations of various C/C++ elements: function, variable, type, enum, etc. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=140335" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=140335" rel="nofollow">bug 140335</a>
</li><li> <b>Inactive code highlighting</b>. Highlight lines of code which are inactive (ie. which are excluded by conditional preprocessor directives) in the current scanner configuration. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=81511" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=81511" rel="nofollow">bug 81511</a>

</li></ul>
<h4> Content Assist </h4>
<ul><li> Convert to use the index whenver possible, and convert the DOM contributor to skip all headers. This should speed up content assist immensely. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=169860" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=169860" rel="nofollow">bug 169860</a>
</li></ul>
<ul><li> <b>Code assist</b> similar to java eclipse, in particular: 
<ul><li> Show available method/fields completion list with Ctrl-Space, 

</li><li> Automatically add #include "file.h" when a function is added in code with Ctrl-Space 
</li><li> When a class method (or function) is deleted (with right mouse click), the declaration in header file should be automatically deleted. 
</li><li> When a method/function is added in c/cpp file, its declaration should be automatically added in its header file.
</li><li> When a method/function's signature changes, it should also be updated in header file.
</li><li> Show references of highlighted function/method
</li></ul>
</li></ul>
<h4> CView </h4>

<ul><li> <b>Common Navigator extensions</b>.  Adopt the new Common Navigator (CN) framework and create CDT specific extensions to plug the content and functionality of the C/C++ Projects view (aka CView) into any Common Navigator view. The extensions will be initially contributed to the new general purpose "Project Explorer", which serves as a playground for early adopters of the technology (like JDT). This should also help to stabilize and improve the CN framework by providing feedback and bug reports. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=140337" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=140337" rel="nofollow">bug 140337</a>
</li></ul>
<h4> New Views </h4>
<ul><li> <b>Include Browser</b>: Visualize the include relations among files in a tree as proposed in <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=142149" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=142149" rel="nofollow">bug 142149</a>

</li><li> <b>Call Hierarchy</b>: Explore call-graphs by means of a tree as proposed in <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=48212" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=48212" rel="nofollow">bug 48212</a>.
</li><li> Reintroduce <b>Type Hierarchy</b>: Present inheritance relations and members of types. This is proposed in <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=142189" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=142189" rel="nofollow">bug 142189</a>. <br />The implementation will also consider <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=48213" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=48213" rel="nofollow">bug 48213</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=70246" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=70246" rel="nofollow">bug 70246</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=71943" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=71943" rel="nofollow">bug 71943</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=87815" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=87815" rel="nofollow">bug 87815</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=94197" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=94197" rel="nofollow">bug 94197</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=99833" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=99833" rel="nofollow">bug 99833</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=99835" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=99835" rel="nofollow">bug 99835</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=100655" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=100655" rel="nofollow">bug 100655</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=108879" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=108879" rel="nofollow">bug 108879</a> and optionally also <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=73904" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=73904" rel="nofollow">bug 73904</a>.

</li></ul>
<h3> Build </h3>
<h4> CDT Build System </h4>
<ul><li> "New Project Model" Build System enhancements <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=115935" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=115935" rel="nofollow">bug 115935</a>

<ul><li> <b>Standard and Managed Build System incorporation</b> - current "Standard" and "Managed" build systems will be incorporated into one CDT Build System. This will allow to leverage the Standard Build system with the build configuration and tool-chain concepts,  provide one common mechanism of tool-chain integration, build system configuration, maintainence, etc. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=162728" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=162728" rel="nofollow">bug 162728</a>
</li><li> <b>Multi-language support</b> - associating language ID with tools, per-InputType (language) include/macros settings calculation.
</li><li> <b>Tool-Chain Modifications</b> - the functionality will allow changing tool-chain settings for the project. This includes: Tool-chain substitution, adding/removing/substituting tools in the tool-chain, builder substitution. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=162729" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=162729" rel="nofollow">bug 162729</a>
</li><li> <b>Per-folder settings</b> - allows specifying tool-chain settings (i.e. option values, tool-chain/tools to be used, includes/macros settings) on the folder level <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=109080" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=109080" rel="nofollow">bug 109080</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=83809" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=83809" rel="nofollow">bug 83809</a>

</li></ul>
</li></ul>
<h4> Managed Build </h4>
<ul><li> Complete the internal builder and make it the default, hopefully eliminating the need to write makefile generators - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=135241" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=135241" rel="nofollow">plan item</a>. 
</li><li> Implement parallel builds with the internal builder - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=156872" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=156872" rel="nofollow">plan item</a>.
</li></ul>

<h3> Debugger </h3>
<h4> CDI </h4>
<p>How to make the CDI model flexible and extensible <a href="/index.php/Proposals" title="Proposals">Proposals</a>. See also <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=162080" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=162080" rel="nofollow">bug 162080</a>.

</p>
<h4> Launching and Usability </h4>
<p>Improve the launch experience with contextual launch commands and a launch configuration wizard. See also <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154280" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=154280" rel="nofollow">bug 154280</a>.
</p>
<h4> Breakpoint Actions </h4>

<p>Add support for extensible breakpoint actions that fire when breakpoints are hit. See also <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=118308" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=118308" rel="nofollow">bug 118308</a>.
</p>
<h4> Memory Space Support in Memory View </h4>
<p>Expose the notion of memory spaces in the Memory view for CDI backends that want it.
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=114528" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=114528" rel="nofollow">bug 114528</a>.
</p>
<h3> Add-ons </h3>

<h4> Windows SDK C/C++ Support </h4>
<p>Support the tool chain that comes with the Windows SDK for C/C++ development. This includes the Visual C++ compiler (cl), linker (link), library builder (lib) <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=162105" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=162105" rel="nofollow">plan item</a>
as well as the debugger engine (dbgeng.dll) available with the Debugging Tools for Windows. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=162108" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=162108" rel="nofollow">plan item</a>. This functionality will be provided in an optional feature.
</p>
<h4> MinGW SDK Support </h4>

<p>Take advantage of the new project templates, internal builder, and prebuild indexes to build a MinGW bundle to simplify installs on Windows. This will be distributed via EasyEclipse.org and will include MinGW itself which is GPL. As well, support for the SDL (Simple DirectMedia Library, libsdl.org) as a plug-in SDK will also be provided (LGPL). These will serve as exemplary implementations for many 4.0 features. <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=171095" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=171095" rel="nofollow">bug 171095</a>
</p><p><i>The original version of the 4.0 plan is <a href="/index.php/CDT/planning/4.0" title="CDT/planning/4.0">here</a>.</i>
</p>
<h3> Documentation </h3>
<h4> User's Guide </h4>

<p>The CDT user's guide hasn't been touched since CDT 3.0. It is out of date given then content in CDT 3.1. As well, it is probably in much need of a rewrite.
</p>
<h4> Programmer's Guide </h4>
<p>As part of solidifying the APIs and extension points for the CDT, they will need to be documented. The Programmer's Guide needs to be updated to contain the javadoc and schema docs. As well, actual guide content should be provided to show how to use the APIs.
</p>


<h2><a name="CORONA"></a>Corona</h2>
<h3> Release 1.0.0 </h3>
<p>The initial release of Corona is aligned with the <a href="/index.php/Europa_Simultaneous_Release" title="Europa Simultaneous Release">Eclipse Europa release</a>.  Release dates are subject to change due to Europa project dependencies.
</p>
<table border="1" cellpadding="5">
<tr>

<th> Milestone </th><th> Date </th><th> Comments
</th></tr>
<tr>
<td><a href="/index.php/Corona_Milestone_1.0.0M5" title="Corona Milestone 1.0.0M5">1.0.0.M5</a>
</td><td>Nov 20, 2006
</td><td>ContextContainer / Distributed event model
</td></tr>
<tr>
<td><a href="/index.php/Corona_Milestone_1.0.0M7" title="Corona Milestone 1.0.0M7">1.0.0.M7</a>
</td><td>Jan 22, 2007

</td><td>Server-side Eclipse / Web Services
</td></tr>
<tr>
<td><a href="/index.php/Corona_Milestone_1.0.0M8" title="Corona Milestone 1.0.0M8">1.0.0.M8</a>
</td><td>Feb 23, 2007
</td><td>Europa M5 / EclipseCon demo
</td></tr>
<tr>
<td><a href="/index.php/Corona_Milestone_1.0.0M9" title="Corona Milestone 1.0.0M9">1.0.0.M9</a>
</td><td>Apr 6, 2007
</td><td>Europa M6
</td></tr>
<tr>
<td>1.0.0.RC0
</td><td>May 18, 2007

</td><td>Europa M7
</td></tr>
<tr>
<td>1.0.0.GA
</td><td>Jun 29, 2007
</td><td>Europa Release
</td></tr></table>

<h2><a name="DASH"></a>Eclipse Monkey</h2>
<em>The project did not provide any plan information.</em>

<h2><a name="DLTK"></a>Dynamic Language Toolkit (DLTK)</h2>
</p><p>Last revised January 22, 2007
</p><p>Please send comments about this draft plan to the <a href="mailto:dltk-dev@eclipse.org" class='external text' title="mailto:dltk-dev@eclipse.org" rel="nofollow">dltk-dev@eclipse.org</a> developer mailing list or <a href="news://news.eclipse.org/eclipse.technology.dltk" class='external text' title="news://news.eclipse.org/eclipse.technology.dltk" rel="nofollow">eclipse.technology.dltk</a> newsgroup.

</p>

<p><script type="text/javascript"> if (window.showTocToggle) { var tocShowText = "show"; var tocHideText = "hide"; showTocToggle(); } </script>
</p>
<h3> Introduction </h3>
<p>This document lays out the feature and API set for the second release of the Eclipse Dynamic Languages Toolkit Project, version 1.0.0.
</p>
<h3> Project components </h3>

<p>DLTK project contains following components:
</p>
<ul><li> DLTK Core (set of extensible frameworks designed to build full featured dynamic language IDEs on top of which).
</li><li> DLTK TCL (exemplary TCL IDE)
</li><li> DLTK Python (exemplary Python IDE)
</li><li> DLTK Ruby (exemplary Ruby IDE)
</li></ul>
<h3> Release deliverables </h3>

<p>Each DLTK component deliverables have the same form as is found in most Eclipse projects, namely:
</p>
<ul><li> Source code release, available as versions tagged "R1_0" in the project's CVS repository.
</li><li> Software Development Kit (SDK) (includes runtime and tooling components, with sources, examples, and documentation) (downloadable and update site).
</li><li> Component runtime binary distribution (downloadable and update site).
</li><li> Component tests (downloadable and update site).
</li></ul>
<h3> Release Milestones </h3>

<p>Release milestone occurring at roughly 6 week intervals and follow the Platform milestone releases by approximately 1 week; that is, until the final 3.3 release of the Platform, upon which DLTK and other projects will release simultaneously. As DLTK is dependent upon the Platform only, DLTK will deliver its milestones within the following week. It is anticipated that DLTK will synchronize its release milestones with the <a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release" class='external text' title="http://wiki.eclipse.org/index.php/Europa Simultaneous Release" rel="nofollow">Europa</a> release schedule. 
</p>
<h3> Target Operating Environments </h3>
<p>DLTK 1.0 will support all operating environments supported by the Eclipse Platform itself. For a list of supported environments, refer to <a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html#TargetOperatingEnvironments" class='external text' title="http://www.eclipse.org/eclipse/development/eclipse project plan 3 3.html#TargetOperatingEnvironments" rel="nofollow">Eclipse Project 3.3 plan</a> for a list of reference platforms.
</p>
<h3> Internationalization </h3>

<p>The Eclipse Platform is designed as the basis for internationalized products. The user interface elements provided by the Eclipse SDK components, including dialogs and error messages, are externalized. The English strings are provided as the default resource bundles. As a result, the Dynamic Languages Toolkit project will provide English strings in its default bundles and be localized to a subset of those locales offered by the Platform. This plan will be updated to indicate which locales will be provided and the timeframe for availability.
</p>
<h3> Features and Capabilities </h3>
<p>A list of project requirements and agreed upon implementation timeframes is found in this document. For the milestones listed in this document, a set of overall themes is used to indicate what major set of functionalities is to be concentrated on for each. These themes are presented below, while the requirements document and associated Bugzilla entries are left to those wanting more detailed information on each.
</p>
<h4> Plan Items </h4>
<p>Plan items reflect new features of the DLTK project, or areas where existing features will be significantly reworked.  Plan items are indicated using keyword <i>plan</i> and have a state determined by 'Assigned To' and 'Target Milestone' fields in Bugzilla.  Below is a list of possible states and what they mean:

</p>
<ul><li> Committed items - A committed bug is one that we have decided to address for the release.
</li><li> Proposed items - A bug item is one that we are considering addressing for the release. Although we are actively investigating it, we are not yet in a position to commit to it, or to say that we won't be able to address it. After due consideration, a proposal will either be committed or deferred.
</li><li> Deferred items - A reasonable proposal that will not make it in to this release for some reason is marked as deferred with a brief note as to why it was deferred. Deferred plan items may resurface as committed plan items at a later point.
</li></ul>


<h2><a name="DSDPDD"></a>Device Software Development Platform, Device Debugging</a></h2>
		<h3>DSDP Device Debugging 0.9 Project Plan</h3>
		<p>Last revised 05 Feb 2007
		</p>

		
<p><i>Please send comments about this draft plan to
the </i><a href="mailto:dsdp-dd-dev@eclipse.org">dsdp-dd-dev@eclipse.org</a> <i>developer
mailing list.</i></p>

<p>This document lays out the technical features and project plan for the 0.9 (Europa)
release of the Eclipse DSDP - Device Debugging Project.</p>
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
<p>The remainder of the plan consists of themes and tasks for each of the project
milestones.</p>

<h3><a name="Deliverables"></a>Release deliverables</h3>
<p>The release deliverables have the same form as is found in most Eclipse projects,
namely:</p>
<ul>
	<li>Source code release, available as versions tagged "R0_9" in the project&#39;s
		<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.dd/?cvsroot=DSDP_Project">DD CVS Repository</a>

		and 
		<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.dd.dsf/?cvsroot=DSDP_Project">DSF CVS Repository</a>.
	</li>
	<li>SDK (includes runtime, user and programmer documentation, with sources) (downloadable).</li>
	<li>Runtime binary distribution (includes user documentation) (downloadable).</li>
	<li>Examples (downloadable).</li>
	<li>Unit tests (downloadable).</li>

</ul>
<h3><a name="Milestones"></a>Release milestones</h3>
<p>Release milestone will align and release with the Europa milestones starting with M4. The DD project is at the top of the technology stack (level 2):</p>
<ul>
	<li>Thursday January 4, 2007 - Milestone 4 (0.9 M4) - stable build</li>
	<li>Friday February 23, 2007 - Milestone 5 (0.9 M5) - stable build</li>
	<li>Friday April 6, 2007 - Milestone 6 (0.9 M6) - stable build (API freeze)</li>
	<li>Friday May 18, 2007 - Milestone 7 (0.9 M7/RC0 - stable build</li>

	<li>Friday June 29, 2007 - 0.9 Release on Europa train</li>
</ul>
<p>Lock down and testing then begins with M7, and progress through a
series of test-fix passes against candidates releases. When no critical bugs are found during testing, the 
release candidate is declared a release. DD 0.9 will be delivered as part of the Europa Release.</p>
<p>All release deliverables
will be available for download as soon as the release has been tested
and validated in the operating environments listed below.</p>

<!-- -------------------------------------------------------- -->
<h3><a name="OperatingEnvironments"></a>Operating Environments</h3>
<p>In order to remain current, each Eclipse release is designed to run on
reasonably current versions of the underlying operating environments.</p>
<p>The Device Debugging project depends upon on the Eclipse Platform 3.3 and CDT 4.0.  Additionally, DD 0.9 depends on 
language features in Java 5.  For this release, the DD sources will be written and compiled
against version 1.5.x of the Java Platform APIs (i.e., Java 2 Platform,
Release 1.5.x SE).</p> 
<p>Eclipse Platform SDK 3.3 will be tested and validated on a number of

<a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html#TargetOperatingEnvironments">
reference platforms</a>
(this list is updated over the course of the release cycle). The 
DD project wil be tested and validated against a 
subset of those listed for the platform.
<!--
, plus some more (marked
<img src="/dsdp/dd/development/topic.gif" alt="(dd-only)" border="0" height="16" width="16">
) for which contributors have have expressed special interest 
and volunteered to perform the systematic testing:
-->
</p>

<table summary="Device Debugging Reference Platforms" style="width: 821px;"
border="1">
<tbody>
<tr bgcolor="#cccccc">
<th colspan="5">
<div align="center"><strong><font size="+1">Device Debugging Reference
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

<td width="453"> Sun Java 2 Standard Edition 5.0 Update 8<br>
for Microsoft Windows </td>
</tr>
<tr>
<td width="205">Red Hat Enterprise Linux</td>
<td width="59">WS 4</td>
<td width="76">Intel x86</td>
<td width="59">GTK</td>
<td width="453"> Sun Java 2 Standard Edition 5.0 Update 8<br>

for Linux x86</td>
</tr>
</tbody>
</table>

<p>Eclipse and the DD code will undoubtedly run fine
in many operating environments beyond the reference platforms we test.
However, since we do not systematically test them we cannot vouch for them.
Problems encountered when running Eclipse on a non-reference platform
that cannot be recreated on any reference platform will be given lower
priority than problems with running Eclipse on a reference platform.</p>

<h3>Internationalization</h3>
<p>Device Debugging is designed as the basis for internationalized products. The user interface elements provided by 
DD components, including dialogs and error messages, are externalized. The English strings are provided as the default 
resource bundles. Additional languages can be implemented by adopters of DD.</p>

<!-- ------------------------------------------------------------ -->
<h3><a name="Compatibility"></a>Compatibility and Dependencies</h3>

<h3>Compatibility of Release 0.9</h3>
<p>DD 0.9 is the first public release of DD. DD will be developed in parallel with the
Eclipse Platform SDK version 3.3. Each DD Milestone Release will be
based on the most recent Platform Milestone available at the time of
release. Therefore, DD 0.9 will be compatible with Eclipse Platform 3.3 release 
and will publish binary and source compatibilities with migration guides on subsequent releases.</p>

<h3>API Contract</h3>
<p>DD 0.9 is the first public release of DD. APIs published for the 0.9 release will be carefully
reviewed prior to release, making use of "internal" packages for
unsupported and variable implementation classes. Client plug-ins that
directly depend on anything other than what is specified in the
published API are inherently unsupportable and receive no guarantees
about future compatibility. Refer to <i><a
	href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">How
to Use the Eclipse API</a></i> for information about how to write
compliant plug-ins.</p>
<p>Though it is our goal to create stable APIs, being able to do so
depends on the amount of API feedback we will get from the community.
Given that DD 0.9 is the first release of DD, users should assume that all public
APIs are povisional as described in <a href="http://www.eclipse.org/projects/dev_process/eclipse-quality.php">eclipse quality</a>. 
We do not guarantee 0.9 APIs will remain unchanged in the 1.0 release.</p>

<h3><a name="Features">Features and Capabilities</a></h3>
<p>Plan items listed bleow were defined according to contributor requirements and the DSDP and Eclipse
<a href="http://wiki.eclipse.org/index.php/RequirementsCouncil06TP#Embedded_Device_Software">
Themes and Priorities</a> (Preliminary Roadmap v3)
set forth by the Eclipse Requirments Council.
</p>
<p>Please use the 
<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=specific&order=relevance+desc&bug_status=__open__&product=DD&content=">
DD Project plan items</a> bugzilla query for an up-to-date list.
See the corresponding bugzilla items for up-to-date status information on
ongoing work and planned delivery milestones.
</p>

<p>The current status of each plan item is noted:
</p>

<ul>
  <li><b>Committed</b> plan item - A committed plan item is one that we have
    decided to address for the release.</li>
  <li><b>Proposed</b> plan item - A proposed plan item is one that we are
    considering addressing for the release. Although we are actively
    investigating it, we are not yet in a position to commit to it, or to say
    that we won&#39;t be able to address it. After due consideration, a proposal
    will either be committed or deferred.</li>
  <li><b>Deferred</b> plan item - A reasonable proposal that will not make it in
    to this release for some reason is marked as deferred with a brief note as
    to why it was deferred. Deferred plan items may resurface as committed plan
    items at a later point.</li>

</ul>
<h3><a name="Committed">Committed Items</a></h3>
<blockquote>
<p><b>Debugger Services Framework (DSF).</b> The debugger services framework in an implementation of the new Eclipse debug adaptable
interfaces.
</p> 
<p><b>Traditional Memory Render.</b> A traditional memory rendering commonly found in embedded debugger applications will be released.
</p> 
</blockquote> 
<h3><a name="Committed">Proposed Items</a></h3>
<blockquote> 
<p><b>GDB/mi Debugger Implementation.</b> A standard GDB/mi protocol implementation will be provided for use with a Linux-based GDB
debug engine.

</p>
</blockquote> 
<h3><a name="Committed">Deferred Items</a></h3>
<blockquote> 
<p><i>None at this time.</i>
</p>
</blockquote> 

<h2><a name="DSDPTM"></a>Device Software Development Platform, Target Management</a></h2>

<h3>DSDP - Target Management DRAFT 2.0 Plan</h3>

<p>Last revised 11:00 CEST Jan 19, 2007
<!--
(<img src="new.gif" alt="(new)" border="0" height="12" width="12"/>
marks interesting recent 
<a href="http://dev.eclipse.org/viewcvs/index.cgi/www/dsdp/tm/development/tm_project_plan_2_0.html.diff?r1=1.1&r2=1.2&cvsroot=Eclipse_Website">changes</a>
since the 
<a href="http://dev.eclipse.org/viewcvs/index.cgi/www/dsdp/tm/development/tm_project_plan_2_0.html?rev=1.10&cvsroot=Eclipse_Website&content-type=text/html">
previous draft of Jan 19, 2007</a>)
</p>
-->		

<p><i>Please send comments about this draft plan to
the </i><a href="mailto:dsdp-tm-dev@eclipse.org">dsdp-tm-dev@eclipse.org</a> <i>developer
mailing list.</i></p>
<p>This document lays out the feature and API set for the
next feature release of the DSDP Target Management Project
after RSE 1.0, designated TM release 2.0.
</p>
<ul>
	<li><a href="#Deliverables">Release deliverables</a></li>
	<li><a href="#Milestones">Release milestones</a></li>
	<li><a href="#OperatingEnvironments">Operating
	environments</a></li>

	<li><a href="#Compatibility">Compatibility and dependencies</a></li>
	<li><a href="#Features">Features and capabilities</a><ul>
	<!--
	   <li><a href="#Committed">Committed Items</a></li>
	   <li><a href="#Proposed">Proposed Items</a></li>
	   <li><a href="#Deferred">Deferred Items</a></li>
	-->
	</ul></li>
</ul>
<p>This project plan and associated requirements are the result of an
open and transparent process and includes input from those who have
expressed an interest in the project. The plan is not entirely static:
to ensure the planning process is transparent and open to the entire Eclipse community, 
we (the Target Management Project Lead) post plans in an embryonic form and revise them 
throughout the release cycle. That said, the success of the
project and its deliverables is solely dependent upon the contributions
from its community membership. If you are interested in contributing to
the project planning, or the delivery of its stated goals, you are more than
welcome! 
</p>

<p>The first part of the plan deals with the important matters of
release deliverables, release milestones, operating environments,
compatibilities and dependencies. These are all things that need to be
clear for any release, even if no features were to change.</p>

<p>The remainder of the plan consists of plan items which are listed
here for complete reference, but tracked individually through bugzilla.
With the previous release as the starting point, this is the plan for how we
will enhance and improve it. Fixing bugs, improving test coverage,
documentation, examples, performance tuning, usability, etc. are considered routine
ongoing maintenance activities and are not included in this plan unless they
would also involve a significant change to the API or feature set, or involve a
significant amount of work. The intent of the plan is to account for all
interesting feature work.
</p>

<h3><a name="Deliverables"></a>Release deliverables</h3>
<p>The Target Management Project provides data models, frameworks and tools 
for working with remote computer systems.
The main deliverable is the Remote System Explorer (RSE), a feature-rich 
integrated perspective and toolkit for seamlessly working on
remote systems. Besides that, we deliver flexible, re-usable 
components for Networking and Target Management that run stand-alone
or integrated with RSE:
</p> 
<ul>
	<li>Target Management source code release, available as versions tagged "R2_0" in the project's
		<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.rse/?cvsroot=DSDP_Project">RSE CVS Repository</a>
		and
		<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.tm.core/?cvsroot=DSDP_Project">TM Core CVS Repository</a>
		.
	</li>

	<li>Remote System Explorer (RSE):<ul>
	   <li>RSE SDK (includes runtime, user and programmer documentation, with sources) (downloadable).</li>
	   <li>RSE client runtime binaries (split up by protocol, includes user documentation) (downloadable).</li>
	   <li>RSE dstore server runtime (downloadable).</li>
	   <li>RSE CDT Launch Integration (downloadable).</li>
	   <li>RSE tutorial code and examples (downloadable).</li>

       <li>RSE unit test framework and tests (downloadable).</li>
    </ul></li>
    <li>Stand-alone components:<ul>
	   <li>TM Terminal SDK (includes runtime, user and programmer documentation, with sources) (downloadable).</li>
	   <li>TM Discovery SDK (includes runtime, user and programmer documentation, with sources) (downloadable).</li>
	   <li>Redistribution of Apache Jakarta Commons 1.4.1 and Apache ORO 2.0.8 (downloadable through the Orbit project).</li>

    </ul></li>
</ul>
Notes:
The former experimental RSE EFS integration is scheduled to be moved
into the standard RSE SDK and client runtime binaries, respectively.
All stand-alone components will have an integration part that makes
them work inside the RSE framework. For that reason, there are no
downloadable stand-alone component tests, but the RSE unit test
component will also have tests for the stand-alone components.

<h3><a name="Milestones"></a>Release milestones</h3>
<p>Release milestone will be occurring at roughly 6 week intervals,
and will be aligned with the
<a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release">
Europa Simultaneous Release</a> train.
Milestone names start with M4 in order to clarify this
relationship. The milestones are:</p>
<ul>
	<li>Thursday January 4, 2007 - Milestone 4 (2.0 M4) - stable build</li>
	<li>Friday February 23, 2007 - Milestone 5 (2.0 M5) - stable build</li>

	<li>Friday April 6, 2007 - Milestone 6 (2.0 M6) - stable build (API Freeze)</li>
	<li>Friday May 18, 2007 - Milestone 7 (2.0 M7/RC0) - stable build</li>
</ul>
<p>Lock down and testing then begins with M7, and progress through a
series of test-fix passes against candidates releases.
<!--
Release candidate builds are planned as follows (M7 is
release candidate 0):
<ul>
	<li>Friday June 1, 2007 - Release Candidate 1 - (2.0 RC1)</li>
	<li>Friday June 8, 2007 - Release Candidate 2 - (2.0 RC2)</li>
	<li><img src="new.gif" alt="(new)" border="0" height="12" width="12"/>
	    Friday June 15, 2007 - Release Candidate 3 - (2.0 RC3)</li>
-->
As soon as no critical problems are found in the testing
period between two release candidates (one or two weeks),
a release candidate can be declared the release.
The target date for availability of Target Management 2.0 is:</p>
<ul>
	<li>Friday June 29, 2007 - 2.0 Release target date</li>
</ul>
<p></p>

<p>All release deliverables
will be available for download as soon as the release has been tested
and validated in the operating environments listed below.</p>

<!-- -------------------------------------------------------- -->
<h3><a name="OperatingEnvironments"></a>Operating
Environments</h3>
<p>In order to remain current, each Eclipse release is designed to run on
reasonably current versions of the underlying operating environments.
</p>
<p>The Target Management Project 2.0 depends upon on the Eclipse Platform 3.3.
Various sub components also depend on other Eclipse Projects, namely
the C/C++ Development Tools (CDT) 4.0 and the Eclipse Modeling Framework 
(EMF) 2.3. 
For this release, the RSE sources will be written and compiled
against version 1.4.2 of the Java Platform APIs (i.e., Java 2 Platform,
Release 1.4.2 SE), and designed to run on version 1.4.2 of the Java
Runtime Environment, Standard Edition. Since Java 5 is also used as
Eclipse Reference Platform, some testing of Target Management will also
be done on Java 5.</p> 

<p>Eclipse Platform SDK 3.3 will be tested and validated on a number of
<a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html#TargetOperatingEnvironments">
reference platforms</a>. The 
Target Management deliverables will be tested and validated against a 
subset of those listed for the platform, plus some more (marked
<img src="topic.gif" alt="(tm-only)" border="0" height="16" width="16">
) for which contributors have have expressed special interest 
and volunteered to perform the systematic testing
(this list is updated over the course of the release cycle):</p>

<table summary="Target Management Reference Platforms" style="width: 821px;"
border="1">
<tbody>
<tr bgcolor="#cccccc">
<th colspan="5">
<div align="center"><strong><font size="+1">Target Management Reference
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
<td width="453"> Sun Java 2 Standard Edition 5.0 Update 8<br>
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
  <img src="topic.gif" alt="(tm-only)" border="0" height="16" width="16">
  2000</td>
<td width="76">Intel x86</td>
<td width="59">Win32</td>
<td width="453"> Sun Java 2 Standard Edition 1.4.2_13<br>
for Microsoft Windows </td>

</tr>
<tr>
<td width="205">Red Hat Enterprise Linux</td>
<td width="59">WS 4</td>
<td width="76">Intel x86</td>
<td width="59">GTK</td>
<td width="453"> Sun Java 2 Standard Edition 5.0 Update 8<br>
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
<td width="205">
  <img src="topic.gif" alt="(tm-only)" border="0" height="16" width="16">

  Ubuntu / Debian Linux</td>
<td width="59">5.10</td>
<td width="76">Intel x86</td>
<td width="59">GTK</td>
<td width="453">
Sun Java 2 Standard Edition 1.4.2_13<br/>
for Linux x86</td>
</tr>
<tr>
<td width="205">Sun Solaris</td>

<td width="59">10</td>
<td width="76">SPARC</td>
<td width="59">GTK</td>
<td width="453">Sun Java 2 Standard Edition 5.0 Update 8<br>
for Solaris SPARC</td>
</tr>
<tr>
<td width="205">Sun Solaris</td>
<td width="59">9</td>
<td width="76">SPARC</td>

<td width="59">
  <img src="topic.gif" alt="(tm-only)" border="0" height="16" width="16">
  Motif</td>
<td width="453">Sun Java 2 Standard Edition 5.0 Update 8<br>
for Solaris SPARC</td>
</tr>
<tr>
<td width="205">Apple Mac OS X</td>
<td width="59">10.4</td>
<td width="76">Power</td>

<td width="59">Carbon</td>
<td width="453">
Java 2 Platform Standard Edition (J2SE) 1.4.2<br>service release 2 for Tiger
</td>
</tr>
</tbody>
</table>

<p>Eclipse and Target Management undoubtedly run fine
in many operating environments beyond the reference platforms we test.
However, since we do not systematically test them we cannot vouch for them.
Problems encountered when running Target Management on a non-reference platform
that cannot be recreated on any reference platform will be given lower
priority than problems with running Target Management on a reference platform.</p>

<p>Although untested, Target Management should work fine on other OSes that 
support the same window system. For Win32: Windows 98, ME, NT, 2000, and Server 
2003; SWT HTML viewer requires Internet Explorer 5 (or higher). For GTK on other 
Linux systems: version 2.2.1 of the GTK+ widget toolkit and associated libraries 
(GLib, Pango); SWT HTML viewer requires Mozilla 1.4GTK2. For more details, see
the
<a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html#TargetOperatingEnvironments">
Eclipse Project Plan Reference Platforms</a>.</p>

<h4>
Datastore Agent Reference Platforms
</h4>
<p>The Datastore protocol is the default protocol shipped with RSE for accessing
remote file systems, process info and shells. It requires a Datastore server 
(agent) running on the remote system.
This Datastore agent is shipped as plain Java Source Code together with the 
RSE distribution. It should run fine on any Java Platform, with additional
Data Miner Plug-ins that may be OS specific.</p>
<p>We will test and verify the Datastore agent on the following Reference Platforms,
which are a subset of the Platforms we test the RSE UI on:</p>
<ul>
<li>Red Hat Enterprise Linx 4, Intel x86, Sun 1.5.0_08 VM</li>
<li>SUSE Linux Enterprise Server 9, Intel x86, IBM 1.4.2 sr 3 VM</li>
<li>Apple Mac OS X 10.4, Power, Apple 1.4.2 sr 2 VM</li>
</ul>

<h4>Internationalization</h4>
<p>The Remote System Explorer is designed as the basis for internationalized
products. The user interface elements provided by the RSE
components, including dialogs and error messages, are externalized. The
English strings are provided as the default resource bundles.
The default bundles will be localized to a subset of those
locales offered by the Platform. This plan will be updated to indicate
which locales will be provided and the timeframe for availability.</p>

<!-- ------------------------------------------------------------ -->
<h3><a name="Compatibility"></a>Compatibility and Dependencies</h3>
<h3>Dependencies of Release 2.0</h3>
<p>Target Management takes part in the
<a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release">
Europa Simultaneous Release Train</a>. Therefore, deliverables will be 
developed in parallel with
<ul>
<li><a href="http://www.eclipse.org/eclipse">Eclipse Platform SDK</a> version 3.3,</li>

<li><a href="http://www.eclipse.org/cdt">C/C++ Development Tools (CDT)</a> version 4.0 (CDT Launch Integration only),</li>
<li><a href="http://www.eclipse.org/modeling/emf">Eclipse Modeling Framework (EMF)</a> version 2.3 (Discovery component only),</li>
<li><a href="http://www.rxtx.org">RXTX</a> version 2.1-7 (Terminal Serial Connection component only).</li>
</ul>
Each Target Management Milestone Release will be
based on the most recent Milestone releases of underlying components
available at the time of release as well as the final releases.
</p>

<h3>Compatibility of Release 2.0 with 1.0</h3>

<p>In order to evolve APIs and especially foster more UI/Non-UI separation,
Target Management 2.0 will not be compatible with RSE 1.0.</p>
<p>
  <strong>API Contract Compatibility:</strong> Target Management 2.0 will not be 
  compatible with RSE 1.0.
</p>
<p><strong>Binary (plug-in) Compatibility:</strong> Target Management 2.0 will not be 
  compatible with RSE 1.0. 
</p>
<p><strong>Source Compatibility:</strong> Target Management 2.0 will not be 
  compatible with RSE 1.0, but a <em>Target Management 2.0 Migration Guide</em>

  will be published that explains how to port RSE 1.0 applications to the 
  TM 2.0 APIs.
  In most cases, "organize imports" should be sufficient in order to
  update API usage to classes refactored for better UI/Non-UI separation.
  Downward source compatibility is not supported. 
</p>
<p><strong>Workspace Compatibility:</strong> We intend to keep Target Management
  2.0 upwards workspace-compatible with RSE 1.0 unless noted. 
  This means that workspaces and projects created with RSE 1.0 can be successfully 
  opened by Target Mangement 2.0 and upgraded to a 2.0 workspace.
  This includes especially RSE 1.0 connection definitions, which may propagate 
  between workspaces via file copying or team repositories.
  User interface session state may be discarded when a workspace is upgraded.
  Downward workspace compatibility is not supported. 
  A workspace created (or opened) by a product based on TM 2.0 will be unusable 
  with a product based on RSE 1.0.
</p>
<h3>API Contract</h3>
<p>APIs published for the Target Management 2.0 release will be carefully
reviewed prior to release, making use of "internal" packages for
unsupported and variable implementation classes. Client plug-ins that
directly depend on anything other than what is specified in the
published API are inherently unsupportable and receive no guarantees
about future compatibility. Refer to <i><a
	href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">How
to Use the Eclipse API</a></i> for information about how to write
compliant plug-ins.</p>
<!--
<p>
Though it is our goal to create stable APIs, being able to do so
depends on the amount of API feedback we will get from the community.
As described in <a href="http://www.eclipse.org/projects/dev_process/eclipse-quality.php">
<i>Eclipse Quality APIs</i></a>, we will therefore mark all of our
APIs provisional. This removes the guarantee of 1.0 to 2.0 compatibility,
though we&#39;d strive to achieve that. We expect to get sufficient feedback
during the 1.0 to 2.0 development period to declare the APIs final.</p>
-->

<h3><a name="Features">Features and Capabilities</a></h3>

<p>Plan items listed bleow were defined according to contributor requirements,
but in accordance with the Target Management
<a href="http://www.eclipse.org/dsdp/tm/doc/DSDPTM_Use_Cases_v1.1c.pdf">
Use Cases Document</a> and the DSDP and Eclipse
<a href="http://wiki.eclipse.org/index.php/RequirementsCouncil06TP#Embedded_Device_Software">
Themes and Priorities</a> (Preliminary Roadmap v3)
set forth by the Eclipse Requirments Council.
Each plan item covers a feature or API that is to be added to the 
Target Management deliverables, or some aspect of the Target 
Management Project that is to be improved. Each plan item has its 
own entry in the Eclipse bugzilla database, with a title and a 
concise summary (usually a single paragraph) that explains the 
work item at a suitably high enough level so that everyone can 
readily understand what the work item is without having to understand
the nitty-gritty detail. 
</p>
<p>Not all plan items represent the same amount of work; some may be quite
large, others, quite small. Although some plan items are for work that is 
more pressing than others, the plan items appear in no particular order.
Use the
<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&keywords_type=allwords&keywords=plan&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit">
<!--
<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bplan&classification=DSDP&product=Target+Management&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&cmdtype=doit>
-->
TM Project plan items</a> bugzilla query for an up-to-date list.
See the corresponding bugzilla items for up-to-date status information on
ongoing work and planned delivery milestones.
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

<h3><a name="Committed">Committed Items</a></h3>
<blockquote> 
<p><strong>Contribute User Actions and Import/Export from RSE7.</strong>
The predecessor of Eclipse RSE was an IBM product, 
<a href="http://www.developer.ibm.com/isv/rational/remote_system_explorer.html">
IBM RSE 7.0</a>. Not all features of RSE 7.0 have been ported yet.
For Eclipse RSE 2.0, we will port the missing features, namely
<em>User Actions</em>, <em>Compile Commands</em> and <em>Import/Export</em>.
While porting the features, they will be refactored and optimized, which
may result in collapsing User Actions and Compile Commands into a single
feature. See the link above for a presentation with more details about
these features.
(Themes: Ease of Use, Enterprise Ready / Facilitated On-Boarding)
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=170909">170909</a>) 

</p>

<p><strong>Allow encoding of remote files to be specified.</strong>
Provide UI components for specifying the encoding of remote resources for
cases where it differs from the standard Platform encoding. This will allow
to transparently edit such remote resources properly. Also, support transparent 
re-encoding of resources when doing copy&amp;paste or drag&amp;drop between folders 
that require different encodings. 
(Theme: Enterprise Ready)
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=163820">163820</a>) 
</p>

<p><strong>Integrate the TM Terminal View with RSE.</strong>
RSE provides a framework for registering data transfer protocols and
managing connections. It provides a subsystem for executing commands
on remote hosts through those protocols, but this is a line-oriented
command view without terminal emulation.
The current stand-alone TM Terminal View will be integrated with RSE
as a new kind of subsystem that provides a terminal over any registered
RSE IHostShell connection channel.
(Theme: Ease Of Use)
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=170910">170910</a>) 
</p>

<p><strong>Improve Discovery and Autodetect in RSE.</strong>
Support the use cases defined by the 
<a href="http://wiki.eclipse.org/index.php/DSDP/TM/Autodetect">
Autodetect Group</a>, namely finding remote systems such that
they can be added as RSE connections; and finding services on those
systems and registering them with RSE connections. A single RSE
connection should be used for a single remote system detected,
adding support for the services detected.
(Theme: Ease Of Use)
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=170911">170911</a>) 
</p>
  
</blockquote>

<h3><a name="Proposed">Proposed Items</a></h3>
<blockquote> 
<p><strong>Adopt Eclipse Platform 3.3 concepts in RSE.</strong>

TM should adopt Eclipse Platform concepts wherever possible. For instance,
Move Commons Net packages into Orbit (needed for Europa); Improve 
drag&amp;drop, copy&amp;paste for Project Explorer, Package Explorer;
Use Common Preferences for ssh and Proxy - Collaborate with Platform/Team
on (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=170883">170883</a>);
Adopt the Commands framework with retargetable actions (e.g. for Properties);
Adopt ICU4J and Capabilities. 
(Theme: Persistent &amp; Pervasive Themes; Ease of Use)
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=170915">170915</a>) 
</p>
  
<p><strong>Fix and improve the RSE EFS integration.</strong>
Given any files subsystem registered with RSE, RSE should be able
to act as an EFS provider through that registered files subsystem.
Current bugs with workspace resource locking should be fixed.
In addition to that, it would be desirable to support an RSE
subsystem under the Local system type that acts as an EFS browser,
i.e. be able to access remote resources through any registered
EFS provider.
(Theme: Design for Extensibility)
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=170916">170916</a>) 
</p>

  
<p><strong>Improve RSE SystemType and New Connection Wizard flexibility.</strong>
ISVs need to be able to add new system types which are compatible with existing
ones, and be able to automatically pick up subsystem implementations from 3rd
parties that they don't know about initially. Additional states (and thus decorators)
need to be considered by IHost objects and registered with systemTypes.
More considerations need to be made for systemTypes that do not describe TCP/IP
connections. Finally, contributors should be able to disable SystemTypes 
via capabilities and/or a dynamic enabler class.
(Themes: Design for Extensibility, Embedded Device Software)
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=170918">170918</a>) 
</p>
  
<p><strong>Optimize APIs - Remove obsolete API.</strong>
RSE APIs should be made smaller (less API, more internal) in order to make them
easier to understand and maintain. Eliminate dead code. Clarify threading
model. Add asynchronous callbacks for long-runnint operations.
(Theme: Design for Extensibility)
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=170922">170922</a>) 
</p>
  
<p><strong>Improve UI/Non-UI splitting in RSE. Support headless launches.</strong>

RSE code should be further refactored to split UI from non-UI parts. A Headless
Eclipse should be able to perform Launches through RSE-provided services /
subsystems. This means providing non-UI (headless) APIs for
accessing the SystemRegistry, getting IHost objects; 
getting ISubSystem, ISubSystemConfiguration objects as well as services;
and using IFileServiceSubsystem as well as other ISubSystem and IService APIs
for actions like upload, download, run-shell-command during a headless Launch.
(Theme: Design for Extensibility)
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=170923">170923</a>) 
</p>
  
<p><strong>Improve the Remote File Service APIs.</strong>
RSE File Service APIs should be sufficient to make a proper EFS provider.
This means especially support for setting a file read-only / writable;
changing a file's timestamp; preserving permissions when copying across 
systems; UI tools for reviewing / changing timestamp and read-only status;
and returning potentially large remote files as streams for 
partial access, such that not the entire file is necessarily downloaded.
In order to differenciate ourselves from EFS, we may add more tools that do not
operate on an "abstract" file system but support more direct access to remote
system's contributed permission and other status bits like Access Control
Lists (ACLs).
(Themes: Scaling Up, Design for Extensibility)
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=170926">170926</a>) 
</p>
  
<p><strong>RSE should be more service-oriented.</strong>
Currently, behavior of subsystems depends on the system type
name they are registered against. Instead of this, Properties
of system types should be used to modify subsystem behavior,
such that existing subsystems can be added as services to 
more different system types. In addition to that, it should
be possible to group services into a system; and support
more dynamic enabling / disabling of subsystems / services 
based on availability. 
(Theme: Design for Extensibility)
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=150498">150498</a>) 

</p>
  
<p><strong>Improve the RSE default Persistence Provider.</strong>
For facilitated on-boarding, it should be easier to get access
to pre-defined RSE connections out of a Team-Shared Repository
or by importing/exporting connection definitions as XML.
Fewer files should be used to store RSE state.
It should be possible to associate connections, profiles, filter 
pools etc. with projects. Data storage should be flexible in the
metadata or the project workspace, similar to the persistence
mechanism used by Eclipse Launch Configurations today.
(Theme: Enterprise Ready / Facilitated On-Boarding)
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=170932">170932</a>) 
</p>
  
<p><strong>Add full support for Macintosh.</strong>
MacOS X is a widespread Eclipse Platform and should be made
official reference platform, thus giving bug reports a higher
priority and doing automated unit testing regularly.
(Theme: Platform Support)
(<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=170936">170936</a>) 
</p>

</blockquote>

<h3><a name="Deferred">Deferred Items</a></h3>
<blockquote> 
  <p><i>None at this time.</i></p>
</blockquote>


<h2><a name="DTP"></a>Data Tools Platform (DTP)</h2>
</p>
<h3>Document Status</h3>

<ul><li> [2/01/07]: Initial version reviewed and approved by the PMC.
</li></ul>
<h3>Themes and Priorities</h3>
<p>With the release of 1.0 in December, 2006, DTP graduated to <i>mature</i> status at Eclipse. As part of meeting the requirements to graduate, DTP built extender and user momentum. In DTP 1.5 we will seek to continue this trend by working on the following themes and priorities:
</p>
<ul><li>Work with extenders to validate further the DTP 1.0 provisional API set and make adjustments as necessary in an open, transparent, and community-driven manner.
</li><li>If appropriate, promote select DTP 1.0 provisional API to <i>platform</i> status.

</li><li>Enhance user tools to make DTP a compelling choice for developing data centric applications in Eclipse.
</li><li>Accurately prioritize and address bugs, especially those having a severity of <i>major</i> or higher.
</li><li>Grow the DTP community through direct contributions and external projects using DTP components.
</li><li>Work with the WTP community to assist in the transition from WTP/rdb to DTP.
</li><li>Make DTP easier to understand and leverage, from both the extender and user perspectives.
</li><li>Meet milestone dates in tight synchronization with Europa plans.
</li></ul>
<h3>Release Deliverables</h3>
<p>The DTP 1.5 release will be distributed as follows:
</p>

<ul><li>A "end user" download, containing binaries for all DTP 1.5 components and end-user documentation 
</li><li>A "extender" (or "SDK") download, which adds extender documentation and source code to the "end user" distribution 
</li><li>An update site, containing feature definitions for component sets within DTP 
</li></ul>
<p>The following feature definitions are planned for DTP 1.5:
</p>
<ul><li>Model base feature (org.eclipse.datatools.modelbase.feature) 
</li><li>Connectivity feature (org.eclipse.datatools.connectivity.feature) 
</li><li>Open Data Access (ODA) feature (org.eclipse.datatools.connectivity.oda.feature) 
</li><li>Open Data Access (ODA) designer feature (org.eclipse.datatools.connectivity.oda.designer.feature) 
</li><li>SQL Development Tools feature (org.eclipse.datatools.sqldevtools.feature) 
</li><li>Enablement feature (org.eclipse.datatools.enablement.feature)
</li><li>Enablement Open Data Access (ODA)feature (org.eclipse.datatools.enablement.oda.feature)
</li><li>Enablement Open Data Access (ODA)designer feature (org.eclipse.datatools.enablement.oda.designer.feature)
</li><li>User documentation for Connectivity feature (org.eclipse.datatools.connectivity.doc.user)
</li><li>User documentation for SQL Development Tools feature (org.eclipse.datatools.sqldevtools.doc.user)
</li><li>Welcome Page content feature (org.eclipse.datatools.intro)

</li><li>Extender ("SDK") feature (org.eclipse.datatools.sdk)
</li></ul>
<p>Additional features, or changes to the features above might occur based on evolving requirements. This document will be updated to reflect the current planned feature definitions for DTP 1.5 going forward.
</p>
<h3>Release Milestones</h3>
<p>DTP 1.5 is part of the <a href="/index.php/Europa_Simultaneous_Release" title="Europa Simultaneous Release"> Europa release</a>. As such, our milestones, release candidates, and final release date are determined by Europa. DTP is a "+1 dependency" on the Eclipse platform, and the dates of specific milestones can be found <a href="/index.php/Europa_Simultaneous_Release" title="Europa Simultaneous Release"> here, <i>Milestones and Release Candidates</i> section</a>.

</p><p>Europa, like Callisto, is designed to shrink the lag time between platform milestones and downstream projects as the release approaches. Thus, while DTP is a "+1" dependency at the current time, DTP builds for later platform releases (typically in the <i>release candidate</i> periods) will appear in less than one week from the platform milestone. The DTP PMC interprets the downstream lag as an idealized upper limit, and will seek to make matching DTP builds available as soon as possible after platform milestones, typically with a 24 hour (business day) delay for testing. Hence, if a platform milestone appears on a Friday, DTP will seek to have its corresponding build by the end of the following Monday. Such builds will be designated as <i>Integration</i> builds and subject to further testing past that date. The general disclaimer is that DTP can not guarantee hitting these dates due to bugs that might appear in integration tests and availability of additional dependencies other than the platform (for example, EMF and GEF).
</p>
<h3>Target Operating Environments</h3>
<p>The build, test, and deployment environments for DTP 1.5 are described <a href="/index.php/DTP_1.5_Build_Environment" title="DTP 1.5 Build Environment"> here</a>.

</p>
<h3>Individual Project Plans</h3>
<ul><li> Model Base: (Add link here)
</li><li> Connectivity: <a href="/index.php/Connectivity_Europa_Features" title="Connectivity Europa Features">Connectivity Plan for Europa</a>
</li><li> SQL Development Tools: (Add link here)
</li><li> Enablement: In DTP 1.5, we are planning a number of additions to Enablement. These include:
<ul><li>Support for Sybase ASE and ASA

</li><li>Enhanced catalog loading for IBM DB2 and Informix
</li><li>ODA driver for <a href="/index.php/BPS50" title="BPS50"> Web Services Data Source</a>
</li></ul>
</li></ul>
<h3>Work Items</h3>
<p><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;classification=DataTools&amp;target_milestone=1.5&amp;target_milestone=1.5M4&amp;target_milestone=1.5M5&amp;target_milestone=1.5M6&amp;target_milestone=1.5RC0&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?query format=advanced&amp;short desc type=allwordssubstr&amp;short desc=&amp;classification=DataTools&amp;target milestone=1.5&amp;target milestone=1.5M4&amp;target milestone=1.5M5&amp;target milestone=1.5M6&amp;target milestone=1.5RC0&amp;long desc type=allwordssubstr&amp;long desc=&amp;bug file loc type=allwordssubstr&amp;bug file loc=&amp;status whiteboard type=allwordssubstr&amp;status whiteboard=&amp;keywords type=allwords&amp;keywords=&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse same sort as last time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=" rel="nofollow">This Bugzilla query</a> shows all items currently planned for DTP 1.5.
</p>


<h2><a name="ECF"></a>Eclipse Communications Framework (ECF)</h2>
		<h3>ECF Project Milestone Plan</h3>
		<p></p>

		<div class="right">
            Last modified on Feb 5, 2007 by slewis
        </div>

<p></p>
<p></p>
<a href="org.eclipse.ecf.docs/api">See here for Javadocs of ECF APIs</a>
<p></p>
<p></p>
<a href="http://wiki.eclipse.org/index.php/Eclipse_Communication_Framework_Project">See Wiki for Sub-Project Info, Conference Call Schedule, and Longer-Range Planning</a>
<p></p>
<!-- Milestone 0.9.4 -->
<h3><a name="0.9.4">0.9.4</a></h3>

<b>Target Release Date: 12/02/2006
<br/>
Actual Release Date: 12/03/2006

<br/>
<a href="downloads.php">Download</a>
<br/>
<a href="NewAndNoteworthy_0.9.4.html">New and Noteworthy</a></b>

<p></p>
<table class="milestones">
 
 <tr>

   <th>Features</th>
   <th>Committer/Contributor</th>

   <th>Enhancement Request/Bug</th>
 </tr>
 
 <tr class="done">   
   <td>
      Document new <b>org.eclipse.ecf.ui.configurationWizards</b> and <b>org.eclipse.ecf.ui.connectWizards</b> extension points
   </td>

   <td>
      Scott Lewis
   </td>
   <td>
     See <a href="http://www.eclipse.org/ecf/NewAndNoteworthy_0.9.4.html">New and Noteworthy for 0.9.4</a>   
   </td>   
 </tr>
 
</table>

<p></p>

<!-- Milestone 0.9.5 -->
<h3><a name="0.9.5">0.9.5</a></h3>
<p></p>

<b>Target Release Date: 12/15/2006
<br/>
Actual Release Date: 12/22/2006
<br/>
<a href="downloads.php">Download</a>
<br/>
<a href="NewAndNoteworthy_0.9.5.html">New and Noteworthy</a>

</b>

<p></p>

<table class="milestones">
 
 <tr>

   <th>Features</th>
   <th>Committer/Contributor</th>
   <th>Enhancement Request/Bug</th>

 </tr>
  
 <tr class="done">   
   <td>
      Refactor test code and move into org.eclipse.ecf.tests plugin
   </td>
   <td>
      Scott Lewis
   </td>

   <td>   
       <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=161497">#161497</a>   </td>   
   </tr>

 
  <tr class="done">   
   <td>
     Refactor RosterView to allow easier extension
   </td>

   <td>
      Scott Lewis
   </td>
   <td>   
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=166675">#166675</a>
   </td>   
 </tr>

 
 
   <tr class="done">   
   <td>
     Update IRCLib to v1.10
   </td>

   <td>
      Scott Lewis
   </td>
   <td>   
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=166418">#166418</a>
   </td>   
 </tr>

 
<tr class="done">
   <td>
     Refactor presence API in <b>org.eclipse.ecf.presence</b> bundle
   </td>

   <td>
      Scott Lewis
   </td>
   <td>

   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=167363">#167363</a>
   </td>
 </tr>

     <tr class="done">   
   <td>
     [provider] filetransfer provider based upon httpclient 3.0.1
   </td>

   <td>

      Scott Lewis
   </td>
   <td>   
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=166079">#166079</a>
   </td>   
 </tr>
 
</table>

<p></p>

<!-- Milestone 0.9.6 -->
<h3><a name="0.9.6">0.9.6</a></h3>

<p></p>

<b>Target Release Date: 1/12/2007
<br/>
Actual Release Date: 1/13/2007
<br/>
<a href="downloads.php">Download</a>
<br/>
<a href="NewAndNoteworthy_0.9.6.html">New and Noteworthy</a></b>


<table class="milestones">
 
 <tr>

   <th>Features</th>
   <th>Committer/Contributor</th>
   <th>Enhancement Request/Bug</th>
 </tr>
  
   <tr class="progress">
   <td>
     Add persistence to RosterView
   </td>

   <td>
      Scott Lewis
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=166670">#166670</a>
   </td>
 </tr>

       <tr class="progress">

   <td>
     [provider] BitTorrent provider for file transfer (receive) API
   </td>

   <td>
      Remy Suen and Scott Lewis
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=144133">#144133</a>
   </td>

 </tr>

       <tr class="done">
   <td>
     [IRC] Able to open links in internal browser
   </td>

   <td>
      Remy Suen
   </td>
   <td>

   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=148874">#148874</a>
   </td>
 </tr>

 
      <tr class="done">
   <td>
     Create New Connect Wizard for XMPP Client
   </td>

   <td>

      Scott Lewis
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=165508">#165508</a>
   </td>
 </tr>

         <tr class="done">
   <td>

     Create New Connect Wizard for IRC Client
   </td>

   <td>
      Remy Suen
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=165511">#165511</a>
   </td>
 </tr>

</table>

<!-- Milestone 1.0.0.M5 -->
<h3><a name="1.0.0.M5">1.0.0.M5</a></h3>
<p></p>

Target Release Date: 2/16/2007

<table class="milestones">

 <tr>

   <th>Features</th>
   <th>Committer/Contributor</th>

   <th>Enhancement Request/Bug</th>
 </tr>

      <tr class="notdone">
   <td>
     Documentation about running the test suite
   </td>

   <td>
      Unassigned
   </td>

   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=126505">#126505</a>
   </td>
 </tr>

  <tr class="notdone">
   <td>
   Integration of ECF Roster with Mylar 1.0
   </td>

   <td>
      Unassigned
   </td>
   <td>
     <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=111218">#111218</a>
     <br/><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=106562">#106562</a>
   </td>
 </tr>

   <tr class="notdone">
   <td>
     Additional UI features for IM and multi-user chat
   </td>

   <td>
      Unassigned
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110896">#110896</a>

   </td>
 </tr>

   <tr class="progress">
   <td>
      Refactor test code for presence and datashare APIs and move into org.eclipse.ecf.tests plugin
   </td>
   <td>
      Scott Lewis
   </td>

   <td>
       <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=161497">#161497</a>   </td>
   </tr>

  <tr class="done">
   <td>
     Move org.eclipse.ecf.provider.rss from Higgins' repository to ECF's
   </td>

   <td>
      Scott Lewis
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=166016">#166016</a>
  </td>
 </tr>

  <tr class="not done">

   <td>
   Complete bulletin board API, get IP approval for contribution, and integrate in with ECF on dev.eclipse.org
   </td>

   <td>
     Erkki Lindpere and Scott Lewis
   </td>
   <td>
   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=150756">#150756</a>
   </td>

 </tr>

  <tr class="notdone">
   <td>
     Create New Connect Wizard for JXTA Client
   </td>

   <td>
      Pierre Henry-Perret
   </td>
   <td>

   <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=165514">#165514</a>
   </td>
 </tr>

</table>


<h2><a name="EMF"></a>Eclipse Modeling Framework (EMF)</h2>
<em>The project did not provide any plan information.</em>

<h2><a name="EMFT"></a>EMF Technology (EMFT)(OCL, Query, Transaction, Validation, JET)</h2>
<em>The project did not provide any plan information.</em>

<h2><a name="GEF"></a>Graphical Editor Framework (GEF)</h2>

<p>Last revised <tt>: 2006/11/01 20:26:18 $</tt> ( <img width="12"
height="12" src="../images/green-box.gif" border="0" /> marks interesting
changes over a previous revision of this document)</p>

<p><em>&nbsp;&nbsp;&nbsp; Please send comments about this draft plan to
the</em> <a href="news://news.eclipse.org/eclipse.tools.gef">eclipse.tools.gef</a> <em>newsgroup.</em></p>

<p>This document lays out the feature and API set for the next feature
release of the Graphical Editing Framework (GEF) project, designated release
3.3.0.</p>

<ul type="disc">
<li><a href="#Deliverables">Release deliverables</a></li>

<li><a href="#Milestones">Release milestones</a></li>

<li><a href="#TargetOperatingEnvironments">Target operating
environments</a></li>

<li><a href="#Compatibility">Compatibility with previous releases</a></li>

<li><a href="#Themes">Themes / Plan Items</a></li>

</ul>

<p>Plans do not materialize out of nowhere, nor are they entirely static. To
ensure the planning process is transparent and open to the entire Eclipse
community, plans are posted in an embryonic form and then revised from time to
time throughout the release cycle.</p>

<p>The first part of the plan deals with the important matters of release
deliverables, release milestones, target operating environments, and
release-to-release compatibility. These are all things that need to be clear for
any release, even if no features were to change.&nbsp;</p>

<p>The remainder of the plan consists of plan items for the GEF project.
Each plan item covers a feature that is to be added, or some aspect that is to
be improved. Each plan item will have its own entry in the <a
href="http://bugs.eclipse.org/bugs">Eclipse bugzilla</a> database, with a title
and a concise summary (usually a single paragraph) that explains the work item
at a suitably high enough level so that everyone can readily understand what the
work item is without having to understand the nitty-gritty detail.</p>

<p>Not all plan items represent the same amount of work; some may be quite
large, others, quite small. Some plan items may involve work that is localized
to a single subsystem; others may involve coordinated changes across several
projects within the same top-level project; and others may involve coordination
with other top-level projects. Although some plan items are for work that is
more pressing that others, the plan items appear in no particular order.</p>

<p>With the previous release as the starting point, this is the plan for how
we will enhance and improve it. Fixing bugs, improving test coverage,
documentation, examples, performance tuning, usability, etc. are considered
routine ongoing maintenance activities and are not included in this plan unless
they would also involve a significant change to the API or feature set, or
involve a significant amount of work. The intent of the plan is to account for
all interesting feature work.</p>

<h3><a name="Deliverables"></a>Release Deliverables</h3>
<p>The release deliverables are:</p>

<ul type="disc">
<li>Source code release for GEF is available in the eclipse.org <a
href="http://dev.eclipse.org/viewcvs/index.cgi/?cvsroot=Tools_Project">CVS
repositories for GEF</a>.</li>

<li>GEF runtime binaries and SDK distributions (downloadable).</li>

<li>GEF runtime binaries and SDK features on eclipse.org update site
(install via Eclipse update manager).</li>
</ul>

<h3><a name="Milestones"> </a> Release Milestones</h3>

<p>GEF builds are available weekly as <em>Integration builds</em>. GEF
Milestone Releases are approximately one week after the <a
href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html#Milestones">
Eclipse Milestone Releases </a>.</p>

<p>Following the final milestone, release candidates will begin. GEF Release
Candidates are planned to be released approximately one week after each Eclipse
Release Candidate. This convergence is required to meet the goals of the <a
href="http://www.eclipse.org/projects/europa.php">Europa Simultaneous
Release</a>.</p>

<p>Scheduled release candidates should end in 2007Q2, and beyond that point,
will be produced only as needed, leading up to a release in late 2007Q2.</p>

<h3><a name="TargetOperatingEnvironments"> </a> Target Operating
Environments</h3>

<p>GEF 3.3 will support all operating environments supported by the Eclipse
Platform itself. For a list of supported environments, refer to <a
href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html#TargetOperatingEnvironments">
Eclipse Project 3.3 plan</a> for a list of reference platforms.</p>

<h3><a name="Compatibility"> </a> Compatibility with Previous Releases</h3>

<h3>Compatibility of Release 3.3.0 with 3.2.0</h3>

<p>GEF 3.3 will be upwards compatible with GEF 3.2 to the greatest extent
possible. Any exceptions will be noted in the 3.3 release notes so that clients
can assess the impact of these changes on their plug-ins and products.</p>
<p><b>API Contract Compatibility:</b> GEF 3.3 will be upwards
contract-compatible with GEF 3.2 unless noted. This means that programs in full
compliance with contracts specified in 3.2 APIs will automatically be in full
compliance with 3.3 APIs. Refer to <i> <a
href="http://wiki.eclipse.org/index.php/Evolving_Java-based_APIs"> Evolving
Java-based APIs</a></i> for a discussion of the kinds of API changes that maintain
contract compatibility.</p>
<p><b>Binary (plug-in) Compatibility:</b> GEF 3.3 will be upwards
binary-compatible with GEF 3.2 unless noted. This means that plug-ins built for
GEF 3.3 will continue to work correctly in 3.3 without change. Plug-ins with
hard-coded references in their plug-in manifest file to the 3.2 version of GEF
plug-ins will work in 3.3 provided the version match rule is "greaterOrEqual" or
"compatible" (the default); references using "perfect" or "equivalent" match
rules will be broken. Refer to <i> <a
href="http://wiki.eclipse.org/index.php/Evolving_Java-based_APIs"> Evolving
Java-based APIs</a></i> for a discussion of the kinds of API changes that maintain
binary compatibility.</p>

<p><b>Source Compatibility:</b> GEF 3.3 will be upwards source-compatible
with GEF 3.2 to the greatest extent possible. This means that source files
written to use 3.2 APIs can often be successfully compiled and run against GEF
3.3 APIs. Since source incompatibilities are easy to deal with, maintaining
source compatibility is considered much less important than maintaining contract
and binary compatibility.&nbsp; The addition of a single method anywhere could
be an incompatible source change.&nbsp; For this reason,
source-incompatibilities will not be noted.</p>
<p><b>Non-compliant usage of API's</b>: All non-API methods and classes, and
certainly everything in a package with "internal" in its name, are considered
implementation details which may vary between operating environment and are
subject to change without notice. Client plug-ins that directly depend on
anything other than what is specified as API are inherently unsupportable and
receive no guarantees about compatibility within a single release much less with
an earlier releases. Refer to <i> <a
href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">
How to Use the Eclipse API</a></i> for information about how to write compliant
plug-ins.</p>

<h3><a name="Themes"> </a> Themes</h3>
<p><img width="12" height="12" src="../images/green-box.gif" border="0" />
The changes under consideration for the next release of Eclipse GEF address a
few major themes:</p>

<ul>
<li><b>Revisit Performance</b> - GEF has always been a framework for
delivering integrated tools. With a growing base of both free and commercial
offerings based on GEF, it's critical for continued success to ensure that the
framework scales well. This theme is to measure and improve the performance and
scalability of GEF.</li>

<li><b>Usability Enhancements</b> - There are various issues raised on the
usability of GEF based diagrams. This theme is to improve usability of
applications based on GEF.</li>

<li><b>Defect Cleanup</b> - There are around 200 open Bugzillas, this theme
works torward reducing this backlog.</li>

<li><b>GEF diagram layer test automation</b> - TPTP includes a SWT test
automation framework which currently does not include diagram (GEF) support.
This theme is to look at providing integration with GEF for diagram layer
testing. There is an <a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=133099">enhancement
request (Bug 133099)</a> for this and it has been frequently requested by the
community.</li>

</ul>

<p>The current status of each plan item is noted:</p>

<ul type="disc">
<li><b>Plan Item</b> items - a <i>Plan Item</i> that we have decided to
address for the release. To see all committed items - see <i>"committed"</i>
items</li>
<li><b>Committed</b> items - A committed bug is one that we have decided to
address for the release.</li>

<li><b>Proposed</b> items - A bug item is one that we are considering
addressing for the release. Although we are actively investigating it, we are
not yet in a position to commit to it, or to say that we won't be able to
address it. After due consideration, a proposal will either be committed or
deferred.</li>

<li><b>Deferred</b> items - A reasonable proposal that will not make it in
to this release for some reason is marked as deferred with a brief note as to
why it was deferred. Deferred plan items may resurface as committed plan items
at a later point.</li>
</ul>


<h2><a name="GMF"></a>Graphical Modeling Framework (GMF)</h2>
</p>

<h3> Introduction </h3>
<p>This document lays out the feature and API set for the second release of the Eclipse Graphical Modeling Framework Project, version 2.0.0.
</p><p>This project plan inherits from the <a href="/index.php/Modeling_Project_Plan" title="Modeling Project Plan">Modeling Project Plan</a>, which should be referenced when consulting this individual project plan.
</p>
<h3> Release deliverables </h3>

<p>The release deliverables have the same form as is found in most Eclipse projects, namely:
</p>
<ul><li> Graphical Modeling Framework source code release, available as versions tagged "R2_0" in the project's CVS repository.
</li><li> Graphical Modeling Framework SDK (includes runtime and tooling components, with sources, examples, and documentation) (downloadable and update site).
</li><li> Graphical Modeling Framework runtime binary distribution (downloadable and update site).
</li><li> Graphical Modeling Framework tests (downloadable and update site).
</li></ul>
<h3> Release milestones </h3>

<p>Release milestone occurring at roughly 6 week intervals and follow the Platform milestone releases by approximately 2 weeks; that is, until the final 3.3 release of the Platform, upon which GMF and other projects will release simultaneously. As GMF is dependent upon the EMF, GEF, and other projects, which are scheduled to release milestones within 1 week of Platform milestones, GMF will deliver its milestones within the following week. It is anticipated that GMF will synchronize its release milestones with the <a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release" class='external text' title="http://wiki.eclipse.org/index.php/Europa Simultaneous Release" rel="nofollow">Europa</a> release schedule. The milestones are:
</p>
<ul><li> Monday September 04, 2006 - Milestone 1 (2.0 M1) - stable build, tagged M1_20 in CVS
</li><li> Friday October 13, 2006 - Milestone 2 (2.0 M2) - stable build, tagged M2_20 in CVS
</li><li> Friday November 17, 2006 - Milestone 3 (2.0 M3) - stable build, tagged M3_20 in CVS
</li><li> Friday January 04, 2007 - Milestone 4 (2.0 M4) - stable build, tagged M4_20 in CVS
</li><li> Friday February 23, 2007 - Milestone 5 (2.0 M5) - stable build, tagged M5_20 in CVS 
</li><li> Friday April 06, 2007 - Milestone 6 (2.0 M6) - stable build, tagged M6_20 in CVS (API freeze)

</li><li> Friday May 18, 2007 - Milestone 7 (2.0 M6/RC0) - stable build, tagged M7_20 in CVS
</li></ul>
<p>Lock down and testing then begins with M7, and progress through a series of test-fix passes against candidates releases. Release candidate builds are planned as follows (M7 is release candidate 0, final RC is 2.0):
</p>
<ul><li> Friday June 01, 2007 - Release Candidate 1 - (2.0 RC1)
</li><li> Friday June 15, 2007 - Release Candidate 2 - (2.0 RC2)
</li><li> Friday June 29, 2007 - Release - (2.0)
</li></ul>
<p>As these milestones are dependent upon the Platform, they may be altered in order to conform to the published plan. All release deliverables will be available for download as soon as the release has been tested and validated in the target operating configurations listed below.
</p>
<h3> Maintenance Stream </h3>

<p>GMF 1.0.1 and 1.0.3 maintenance releases will align with the Callisto release that includes the Eclipse Platform 3.2.1 and 3.2.2 releases, respectively.
</p>
<ul><li> Friday, September 29, 2006 - GMF 1.0.1 maintenance release
</li><li> Friday, October 27, 2006 - GMF 1.0.2 maintenance release
</li><li> Friday, February 9, 2007 - GMF 1.0.3 maintenance release
</li></ul>
<p>A list of issues indicated for the 1.0.x maintenance stream can be found here: <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=bug_status&amp;type0-0-0=equals&amp;value0-0-0=REOPENED&amp;field0-0-1=bug_status&amp;type0-0-1=equals&amp;value0-0-1=ASSIGNED&amp;field0-0-2=bug_status&amp;type0-0-2=equals&amp;value0-0-2=NEW&amp;field0-1-0=product&amp;type0-1-0=equals&amp;value0-1-0=GMF&amp;field0-2-0=target_milestone&amp;type0-2-0=equals&amp;value0-2-0=1.0.1" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=bug status&amp;type0-0-0=equals&amp;value0-0-0=REOPENED&amp;field0-0-1=bug status&amp;type0-0-1=equals&amp;value0-0-1=ASSIGNED&amp;field0-0-2=bug status&amp;type0-0-2=equals&amp;value0-0-2=NEW&amp;field0-1-0=product&amp;type0-1-0=equals&amp;value0-1-0=GMF&amp;field0-2-0=target milestone&amp;type0-2-0=equals&amp;value0-2-0=1.0.1" rel="nofollow">1.0.1</a>,<a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=bug_status&amp;type0-0-0=equals&amp;value0-0-0=REOPENED&amp;field0-0-1=bug_status&amp;type0-0-1=equals&amp;value0-0-1=ASSIGNED&amp;field0-0-2=bug_status&amp;type0-0-2=equals&amp;value0-0-2=NEW&amp;field0-1-0=product&amp;type0-1-0=equals&amp;value0-1-0=GMF&amp;field0-2-0=target_milestone&amp;type0-2-0=equals&amp;value0-2-0=1.0.2" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=bug status&amp;type0-0-0=equals&amp;value0-0-0=REOPENED&amp;field0-0-1=bug status&amp;type0-0-1=equals&amp;value0-0-1=ASSIGNED&amp;field0-0-2=bug status&amp;type0-0-2=equals&amp;value0-0-2=NEW&amp;field0-1-0=product&amp;type0-1-0=equals&amp;value0-1-0=GMF&amp;field0-2-0=target milestone&amp;type0-2-0=equals&amp;value0-2-0=1.0.2" rel="nofollow">1.0.2</a> and <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=bug_status&amp;type0-0-0=equals&amp;value0-0-0=REOPENED&amp;field0-0-1=bug_status&amp;type0-0-1=equals&amp;value0-0-1=ASSIGNED&amp;field0-0-2=bug_status&amp;type0-0-2=equals&amp;value0-0-2=NEW&amp;field0-1-0=product&amp;type0-1-0=equals&amp;value0-1-0=GMF&amp;field0-2-0=target_milestone&amp;type0-2-0=equals&amp;value0-2-0=1.0.3" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=bug status&amp;type0-0-0=equals&amp;value0-0-0=REOPENED&amp;field0-0-1=bug status&amp;type0-0-1=equals&amp;value0-0-1=ASSIGNED&amp;field0-0-2=bug status&amp;type0-0-2=equals&amp;value0-0-2=NEW&amp;field0-1-0=product&amp;type0-1-0=equals&amp;value0-1-0=GMF&amp;field0-2-0=target milestone&amp;type0-2-0=equals&amp;value0-2-0=1.0.3" rel="nofollow">1.0.3</a>.

</p>
<h3> Target Operating Environments </h3>
<p>In order to remain current, each Eclipse release targets reasonably current versions of the underlying operating environments.
</p><p>The Eclipse Graphical Modeling Framework (GMF) project depends upon on the Platform and other projects, which are mostly "pure" Java. The 3.3 release of the Eclipse Platform Project is written and compiled against version 1.4 of the Java Platform APIs, and targeted to run on version 1.4 of the Java Runtime Environment, Standard Edition.  The Eclipse Modeling Framework (EMF) project has declared to support Java 5 language features in its next release (3.3.0), and will therefore require a Java 5 runtime environment.  GMF will target the same Java version as EMF.
</p><p>Eclipse Platform SDK 3.3 will be tested and validated on a number of reference platforms. GMF will be tested and validated against a subset of those listed for the platform. Those available will be presented on the project download site.
</p>
<h3> Internationalization </h3>

<p>The Eclipse Platform is designed as the basis for internationalized products. The user interface elements provided by the Eclipse SDK components, including dialogs and error messages, are externalized. The English strings are provided as the default resource bundles. As a result, the Graphical Modeling Framework project will provide English strings in its default bundles and be localized to a subset of those locales offered by the Platform. This plan will be updated to indicate which locales will be provided and the timeframe for availability.
</p>
<h3> Compatibility and Dependencies </h3>
<p>Compatibility of Release 2.0
</p><p>The Graphical Modeling Framework Project will be developed in parallel, and released simultaneously, with the following projects. As stated above, each milestone release of the Graphical Modeling Framework Project will be compatible with the corresponding milestones for each of these projects, and delivered the appropriate offset.
</p>
<ul><li> Eclipse Platform SDK version 3.3
</li><li> Eclipse Modeling Framework (EMF) version 3.0
</li><li> Graphical Editing Framework (GEF) version 3.3

</li></ul>
<p>Therefore, the Graphical Modeling Framework initial release will be compatible with these versions and will publish binary and source compatibilities with migration guides on subsequent releases.
</p>
<h3> API Contract </h3>
<p>It is a goal of the Graphical Modeling Framework Project to avoid provisional APIs. APIs published for the 2.0 release will be carefully reviewed prior to release, making use of "internal" packages for unsupported and variable implementation classes. Client plug-ins that directly depend on anything other than what is specified in the published API are inherently unsupportable and receive no guarantees about future compatibility. Refer to How to Use the Eclipse API for information about how to write compliant plug-ins.  Note that GMF follows the posted <a href="/index.php/Version_Numbering" title="Version Numbering">Version Numbering</a> guidelines.
</p>
<h4>Compatibility of Release 2.0.0 with 1.0.0</h4>

<p>GMF 2.0.0 will be compatible with GMF 1.0.0, except in those areas noted in the GMF 2.0.0 Migration Guide.  API contract, binary compatibility, etc. follow those described in the <a href="/index.php/Modeling_Project_Plan" title="Modeling Project Plan">Modeling Project Plan</a>.
</p>
<h4>GMF 2.0.0 Migration Guide</h4>
<p>At this time, there are no known issues migrating from 1.0.0 to 2.0.0. Should this change, this document will be revised, or a secondary document will be added documenting any known issues.
</p>
<h3> Features and Capabilities </h3>

<p>A list of project requirements and agreed upon implementation timeframes is found in this document. For the milestones listed in this document, a set of overall themes is used to indicate what major set of functionalities is to be concentrated on for each. These themes are presented below, while the requirements document and associated Bugzilla entries are left to those wanting more detailed information on each.
</p>
<h4> 2.0 Themes </h4>
<p>Taking into consideration the <a href="http://www.eclipse.org/org/councils/roadmap_v2_0/themes_v2_0.php" class='external text' title="http://www.eclipse.org/org/councils/roadmap v2 0/themes v2 0.php" rel="nofollow">themes</a> provided by the Requirements Council, overall Modeling project <a href="/index.php/Modeling_Project_Plan" title="Modeling Project Plan">themes</a> and the GMF 1.0 release state and community feedback, the following themes are planned to be addressed in the 2.0 release:
</p>
<h5> API </h5>

<p>A number of items related to the GMF API are planned to be addressed, including the addition of new APIs, refactoring of old APIs, and improved API documentation.  A list of those plan items related to API (keyword=api) can be found <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=keywords&amp;type0-3-0=anywordssubstr&amp;value0-3-0=api" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=keywords&amp;type0-3-0=anywordssubstr&amp;value0-3-0=api" rel="nofollow">here</a>.
</p>
<h5>  Usability </h5>
<p>A number of usability items related to runtime and tooling components of GMF are found in this section.  A list of those plan items related to Usability (keyword=usability) can be found <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=keywords&amp;type0-3-0=anywordssubstr&amp;value0-3-0=usability" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=keywords&amp;type0-3-0=anywordssubstr&amp;value0-3-0=usability" rel="nofollow">here</a>.
</p>
<h5> Model[ing] Citizen </h5>

<p>As a project within the Eclipse Modeling Project, a number of build dependency and interoperability items exist with other Modeling projects.  A number of releng tasks and support of GMF's use in providing UML2 diagramming are anticipated to be addressed in the 2.0 release timeframe.  Furthermore, as GMF 2.0 is scheduled to release with the <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=147754" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=147754" rel="nofollow">Europa</a> simultaneous release, along with other Modeling projects, some coordination and requirements for being on the release train is also anticipated.
</p>
<h5> Performance </h5>
<p>A number of performance issues have been identified and will be worked during the 2.0 timeframe.  A list of those plan items related to Performance (keyword=performance) can be found <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=keywords&amp;type0-3-0=anywordssubstr&amp;value0-3-0=performance" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=keywords&amp;type0-3-0=anywordssubstr&amp;value0-3-0=performance" rel="nofollow">here</a>.
</p>
<h4> Plan Items </h4>

<p>Plan items reflect new features of the GMF project, or areas where existing features will be significantly reworked.  Plan items are indicated using keywords and have a state determined by 'Assigned To' and 'Target Milestone' fields in Bugzilla.  Below is a list of possible states and what they mean:
</p>
<ul><li> Committed items - A committed bug is one that we have decided to address for the release.
</li><li> Proposed items - A bug item is one that we are considering addressing for the release. Although we are actively investigating it, we are not yet in a position to commit to it, or to say that we won't be able to address it. After due consideration, a proposal will either be committed or deferred.
</li><li> Deferred items - A reasonable proposal that will not make it in to this release for some reason is marked as deferred with a brief note as to why it was deferred. Deferred plan items may resurface as committed plan items at a later point.
</li></ul>
<h4>Plan Item Queries</h4>
<p><i><b>Plan Items</b></i>
</p><p><a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]" rel="nofollow">All Open</a> | <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=bug_status&amp;type0-3-0=equals&amp;value0-3-0=RESOLVED&amp;field0-3-1=bug_status&amp;type0-3-1=equals&amp;value0-3-1=VERIFIED&amp;field0-3-2=bug_status&amp;type0-3-2=equals&amp;value0-3-2=CLOSED" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=bug status&amp;type0-3-0=equals&amp;value0-3-0=RESOLVED&amp;field0-3-1=bug status&amp;type0-3-1=equals&amp;value0-3-1=VERIFIED&amp;field0-3-2=bug status&amp;type0-3-2=equals&amp;value0-3-2=CLOSED" rel="nofollow">All Resolved</a> | <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]" rel="nofollow">All Items</a>

</p><p><a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=target_milestone&amp;type0-3-0=equals&amp;value0-3-0=2.0+M1" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=target milestone&amp;type0-3-0=equals&amp;value0-3-0=2.0 M1" rel="nofollow">2.0 M1</a> | <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=target_milestone&amp;type0-3-0=equals&amp;value0-3-0=2.0+M2" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=target milestone&amp;type0-3-0=equals&amp;value0-3-0=2.0 M2" rel="nofollow">2.0 M2</a> | <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=target_milestone&amp;type0-3-0=equals&amp;value0-3-0=2.0+M3" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=target milestone&amp;type0-3-0=equals&amp;value0-3-0=2.0 M3" rel="nofollow">2.0 M3</a> | <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=target_milestone&amp;type0-3-0=equals&amp;value0-3-0=2.0+M4" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=target milestone&amp;type0-3-0=equals&amp;value0-3-0=2.0 M4" rel="nofollow">2.0 M4</a> | <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=target_milestone&amp;type0-3-0=equals&amp;value0-3-0=2.0+M5" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=target milestone&amp;type0-3-0=equals&amp;value0-3-0=2.0 M5" rel="nofollow">2.0 M5</a> | <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=target_milestone&amp;type0-3-0=equals&amp;value0-3-0=2.0+M6" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=target milestone&amp;type0-3-0=equals&amp;value0-3-0=2.0 M6" rel="nofollow">2.0 M6</a>

</p><p><i><b>Committed Items</b></i>
</p><p>Bugzillas with a target milestone and developer assigned are considered committed in that release. For the most current list of these items for the 2.0.0 release, see the following links:
</p><p><a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=assigned_to&amp;type0-3-0=equals&amp;value0-3-0=alexander.shatalin%40borland.com&amp;field0-3-1=assigned_to&amp;type0-3-1=equals&amp;value0-3-1=anthonyh%40ca.ibm.com&amp;field0-3-2=assigned_to&amp;type0-3-2=equals&amp;value0-3-2=artem.tikhomirov%40borland.com&amp;field0-3-3=assigned_to&amp;type0-3-3=equals&amp;value0-3-3=cmahoney%40ca.ibm.com&amp;field0-3-4=assigned_to&amp;type0-3-4=equals&amp;value0-3-4=dstadnik%40borland.com&amp;field0-3-5=assigned_to&amp;type0-3-5=equals&amp;value0-3-5=fplante%40ca.ibm.com&amp;field0-3-6=assigned_to&amp;type0-3-6=equals&amp;value0-3-6=ldamus%40ca.ibm.com&amp;field0-3-7=assigned_to&amp;type0-3-7=equals&amp;value0-3-7=mfeldman%40borland.com&amp;field0-3-8=assigned_to&amp;type0-3-8=equals&amp;value0-3-8=mmostafa%40ca.ibm.com&amp;field0-3-9=assigned_to&amp;type0-3-9=equals&amp;value0-3-9=radek.dvorak%40borland.com&amp;field0-3-10=assigned_to&amp;type0-3-10=equals&amp;value0-3-10=richard.gronback%40borland.com&amp;field0-3-11=assigned_to&amp;type0-3-11=equals&amp;value0-3-11=steveshaw%40ca.ibm.com&amp;field0-3-12=assigned_to&amp;type0-3-12=equals&amp;value0-3-12=vramaswa%40ca.ibm.com&amp;field0-4-0=bug_status&amp;type0-4-0=equals&amp;value0-4-0=NEW&amp;field0-4-1=bug_status&amp;type0-4-1=equals&amp;value0-4-1=ASSIGNED&amp;field0-4-2=bug_status&amp;type0-4-2=equals&amp;value0-4-2=REOPENED" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=assigned to&amp;type0-3-0=equals&amp;value0-3-0=alexander.shatalin@borland.com&amp;field0-3-1=assigned to&amp;type0-3-1=equals&amp;value0-3-1=anthonyh@ca.ibm.com&amp;field0-3-2=assigned to&amp;type0-3-2=equals&amp;value0-3-2=artem.tikhomirov@borland.com&amp;field0-3-3=assigned to&amp;type0-3-3=equals&amp;value0-3-3=cmahoney@ca.ibm.com&amp;field0-3-4=assigned to&amp;type0-3-4=equals&amp;value0-3-4=dstadnik@borland.com&amp;field0-3-5=assigned to&amp;type0-3-5=equals&amp;value0-3-5=fplante@ca.ibm.com&amp;field0-3-6=assigned to&amp;type0-3-6=equals&amp;value0-3-6=ldamus@ca.ibm.com&amp;field0-3-7=assigned to&amp;type0-3-7=equals&amp;value0-3-7=mfeldman@borland.com&amp;field0-3-8=assigned to&amp;type0-3-8=equals&amp;value0-3-8=mmostafa@ca.ibm.com&amp;field0-3-9=assigned to&amp;type0-3-9=equals&amp;value0-3-9=radek.dvorak@borland.com&amp;field0-3-10=assigned to&amp;type0-3-10=equals&amp;value0-3-10=richard.gronback@borland.com&amp;field0-3-11=assigned to&amp;type0-3-11=equals&amp;value0-3-11=steveshaw@ca.ibm.com&amp;field0-3-12=assigned to&amp;type0-3-12=equals&amp;value0-3-12=vramaswa@ca.ibm.com&amp;field0-4-0=bug status&amp;type0-4-0=equals&amp;value0-4-0=NEW&amp;field0-4-1=bug status&amp;type0-4-1=equals&amp;value0-4-1=ASSIGNED&amp;field0-4-2=bug status&amp;type0-4-2=equals&amp;value0-4-2=REOPENED" rel="nofollow">All Open</a> | <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=assigned_to&amp;type0-3-0=equals&amp;value0-3-0=alexander.shatalin%40borland.com&amp;field0-3-1=assigned_to&amp;type0-3-1=equals&amp;value0-3-1=anthonyh%40ca.ibm.com&amp;field0-3-2=assigned_to&amp;type0-3-2=equals&amp;value0-3-2=artem.tikhomirov%40borland.com&amp;field0-3-3=assigned_to&amp;type0-3-3=equals&amp;value0-3-3=cmahoney%40ca.ibm.com&amp;field0-3-4=assigned_to&amp;type0-3-4=equals&amp;value0-3-4=dstadnik%40borland.com&amp;field0-3-5=assigned_to&amp;type0-3-5=equals&amp;value0-3-5=fplante%40ca.ibm.com&amp;field0-3-6=assigned_to&amp;type0-3-6=equals&amp;value0-3-6=ldamus%40ca.ibm.com&amp;field0-3-7=assigned_to&amp;type0-3-7=equals&amp;value0-3-7=mfeldman%40borland.com&amp;field0-3-8=assigned_to&amp;type0-3-8=equals&amp;value0-3-8=mmostafa%40ca.ibm.com&amp;field0-3-9=assigned_to&amp;type0-3-9=equals&amp;value0-3-9=radek.dvorak%40borland.com&amp;field0-3-10=assigned_to&amp;type0-3-10=equals&amp;value0-3-10=richard.gronback%40borland.com&amp;field0-3-11=assigned_to&amp;type0-3-11=equals&amp;value0-3-11=steveshaw%40ca.ibm.com&amp;field0-3-12=assigned_to&amp;type0-3-12=equals&amp;value0-3-12=vramaswa%40ca.ibm.com&amp;field0-4-0=bug_status&amp;type0-4-0=equals&amp;value0-4-0=RESOLVED&amp;field0-4-1=bug_status&amp;type0-4-1=equals&amp;value0-4-1=VERIFIED&amp;field0-4-2=bug_status&amp;type0-4-2=equals&amp;value0-4-2=CLOSED" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=assigned to&amp;type0-3-0=equals&amp;value0-3-0=alexander.shatalin@borland.com&amp;field0-3-1=assigned to&amp;type0-3-1=equals&amp;value0-3-1=anthonyh@ca.ibm.com&amp;field0-3-2=assigned to&amp;type0-3-2=equals&amp;value0-3-2=artem.tikhomirov@borland.com&amp;field0-3-3=assigned to&amp;type0-3-3=equals&amp;value0-3-3=cmahoney@ca.ibm.com&amp;field0-3-4=assigned to&amp;type0-3-4=equals&amp;value0-3-4=dstadnik@borland.com&amp;field0-3-5=assigned to&amp;type0-3-5=equals&amp;value0-3-5=fplante@ca.ibm.com&amp;field0-3-6=assigned to&amp;type0-3-6=equals&amp;value0-3-6=ldamus@ca.ibm.com&amp;field0-3-7=assigned to&amp;type0-3-7=equals&amp;value0-3-7=mfeldman@borland.com&amp;field0-3-8=assigned to&amp;type0-3-8=equals&amp;value0-3-8=mmostafa@ca.ibm.com&amp;field0-3-9=assigned to&amp;type0-3-9=equals&amp;value0-3-9=radek.dvorak@borland.com&amp;field0-3-10=assigned to&amp;type0-3-10=equals&amp;value0-3-10=richard.gronback@borland.com&amp;field0-3-11=assigned to&amp;type0-3-11=equals&amp;value0-3-11=steveshaw@ca.ibm.com&amp;field0-3-12=assigned to&amp;type0-3-12=equals&amp;value0-3-12=vramaswa@ca.ibm.com&amp;field0-4-0=bug status&amp;type0-4-0=equals&amp;value0-4-0=RESOLVED&amp;field0-4-1=bug status&amp;type0-4-1=equals&amp;value0-4-1=VERIFIED&amp;field0-4-2=bug status&amp;type0-4-2=equals&amp;value0-4-2=CLOSED" rel="nofollow">All Resolved</a> | <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=assigned_to&amp;type0-3-0=equals&amp;value0-3-0=alexander.shatalin%40borland.com&amp;field0-3-1=assigned_to&amp;type0-3-1=equals&amp;value0-3-1=anthonyh%40ca.ibm.com&amp;field0-3-2=assigned_to&amp;type0-3-2=equals&amp;value0-3-2=artem.tikhomirov%40borland.com&amp;field0-3-3=assigned_to&amp;type0-3-3=equals&amp;value0-3-3=cmahoney%40ca.ibm.com&amp;field0-3-4=assigned_to&amp;type0-3-4=equals&amp;value0-3-4=dstadnik%40borland.com&amp;field0-3-5=assigned_to&amp;type0-3-5=equals&amp;value0-3-5=fplante%40ca.ibm.com&amp;field0-3-6=assigned_to&amp;type0-3-6=equals&amp;value0-3-6=ldamus%40ca.ibm.com&amp;field0-3-7=assigned_to&amp;type0-3-7=equals&amp;value0-3-7=mfeldman%40borland.com&amp;field0-3-8=assigned_to&amp;type0-3-8=equals&amp;value0-3-8=mmostafa%40ca.ibm.com&amp;field0-3-9=assigned_to&amp;type0-3-9=equals&amp;value0-3-9=radek.dvorak%40borland.com&amp;field0-3-10=assigned_to&amp;type0-3-10=equals&amp;value0-3-10=richard.gronback%40borland.com&amp;field0-3-11=assigned_to&amp;type0-3-11=equals&amp;value0-3-11=steveshaw%40ca.ibm.com&amp;field0-3-12=assigned_to&amp;type0-3-12=equals&amp;value0-3-12=vramaswa%40ca.ibm.com" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=assigned to&amp;type0-3-0=equals&amp;value0-3-0=alexander.shatalin@borland.com&amp;field0-3-1=assigned to&amp;type0-3-1=equals&amp;value0-3-1=anthonyh@ca.ibm.com&amp;field0-3-2=assigned to&amp;type0-3-2=equals&amp;value0-3-2=artem.tikhomirov@borland.com&amp;field0-3-3=assigned to&amp;type0-3-3=equals&amp;value0-3-3=cmahoney@ca.ibm.com&amp;field0-3-4=assigned to&amp;type0-3-4=equals&amp;value0-3-4=dstadnik@borland.com&amp;field0-3-5=assigned to&amp;type0-3-5=equals&amp;value0-3-5=fplante@ca.ibm.com&amp;field0-3-6=assigned to&amp;type0-3-6=equals&amp;value0-3-6=ldamus@ca.ibm.com&amp;field0-3-7=assigned to&amp;type0-3-7=equals&amp;value0-3-7=mfeldman@borland.com&amp;field0-3-8=assigned to&amp;type0-3-8=equals&amp;value0-3-8=mmostafa@ca.ibm.com&amp;field0-3-9=assigned to&amp;type0-3-9=equals&amp;value0-3-9=radek.dvorak@borland.com&amp;field0-3-10=assigned to&amp;type0-3-10=equals&amp;value0-3-10=richard.gronback@borland.com&amp;field0-3-11=assigned to&amp;type0-3-11=equals&amp;value0-3-11=steveshaw@ca.ibm.com&amp;field0-3-12=assigned to&amp;type0-3-12=equals&amp;value0-3-12=vramaswa@ca.ibm.com" rel="nofollow">All Items</a>
</p><p><i><b>Proposed Items</b></i>
</p><p>Bugzillas without an assigned developer are proposed, but not committed for a particular release.  For the most current list of these items, see the following links:
</p><p><a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=assigned_to&amp;type0-3-0=equals&amp;value0-3-0=gmf.devtools-inbox%40eclipse.org&amp;field0-3-1=assigned_to&amp;type0-3-1=equals&amp;value0-3-1=gmf.docs-inbox%40eclipse.org&amp;field0-3-2=assigned_to&amp;type0-3-2=equals&amp;value0-3-2=gmf.generation-inbox%40eclipse.org&amp;field0-3-3=assigned_to&amp;type0-3-3=equals&amp;value0-3-3=gmf.models-inbox%40eclipse.org&amp;field0-3-4=assigned_to&amp;type0-3-4=equals&amp;value0-3-4=gmf.releng-inbox%40eclipse.org&amp;field0-3-5=assigned_to&amp;type0-3-5=equals&amp;value0-3-5=gmf.runtime-inbox%40eclipse.org&amp;field0-3-6=assigned_to&amp;type0-3-6=equals&amp;value0-3-6=gmf.runtime.common-inbox%40eclipse.org&amp;field0-3-7=assigned_to&amp;type0-3-7=equals&amp;value0-3-7=gmf.runtime.diagram-inbox%40eclipse.org&amp;field0-3-8=assigned_to&amp;type0-3-8=equals&amp;value0-3-8=gmf.runtime.emf-inbox%40eclipse.org&amp;field0-3-9=assigned_to&amp;type0-3-9=equals&amp;value0-3-9=gmf.samples-inbox%40eclipse.org&amp;field0-3-10=assigned_to&amp;type0-3-10=equals&amp;value0-3-10=gmf.templates-inbox%40eclipse.org&amp;field0-3-11=assigned_to&amp;type0-3-11=equals&amp;value0-3-11=gmf.ui-inbox%40eclipse.org&amp;field0-3-12=assigned_to&amp;type0-3-12=equals&amp;value0-3-12=gmf.web-inbox%40eclipse.org&amp;field0-4-0=bug_status&amp;type0-4-0=equals&amp;value0-4-0=NEW&amp;field0-4-1=bug_status&amp;type0-4-1=equals&amp;value0-4-1=ASSIGNED&amp;field0-4-2=bug_status&amp;type0-4-2=equals&amp;value0-4-2=REOPENED" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=assigned to&amp;type0-3-0=equals&amp;value0-3-0=gmf.devtools-inbox@eclipse.org&amp;field0-3-1=assigned to&amp;type0-3-1=equals&amp;value0-3-1=gmf.docs-inbox@eclipse.org&amp;field0-3-2=assigned to&amp;type0-3-2=equals&amp;value0-3-2=gmf.generation-inbox@eclipse.org&amp;field0-3-3=assigned to&amp;type0-3-3=equals&amp;value0-3-3=gmf.models-inbox@eclipse.org&amp;field0-3-4=assigned to&amp;type0-3-4=equals&amp;value0-3-4=gmf.releng-inbox@eclipse.org&amp;field0-3-5=assigned to&amp;type0-3-5=equals&amp;value0-3-5=gmf.runtime-inbox@eclipse.org&amp;field0-3-6=assigned to&amp;type0-3-6=equals&amp;value0-3-6=gmf.runtime.common-inbox@eclipse.org&amp;field0-3-7=assigned to&amp;type0-3-7=equals&amp;value0-3-7=gmf.runtime.diagram-inbox@eclipse.org&amp;field0-3-8=assigned to&amp;type0-3-8=equals&amp;value0-3-8=gmf.runtime.emf-inbox@eclipse.org&amp;field0-3-9=assigned to&amp;type0-3-9=equals&amp;value0-3-9=gmf.samples-inbox@eclipse.org&amp;field0-3-10=assigned to&amp;type0-3-10=equals&amp;value0-3-10=gmf.templates-inbox@eclipse.org&amp;field0-3-11=assigned to&amp;type0-3-11=equals&amp;value0-3-11=gmf.ui-inbox@eclipse.org&amp;field0-3-12=assigned to&amp;type0-3-12=equals&amp;value0-3-12=gmf.web-inbox@eclipse.org&amp;field0-4-0=bug status&amp;type0-4-0=equals&amp;value0-4-0=NEW&amp;field0-4-1=bug status&amp;type0-4-1=equals&amp;value0-4-1=ASSIGNED&amp;field0-4-2=bug status&amp;type0-4-2=equals&amp;value0-4-2=REOPENED" rel="nofollow">Open</a> | <a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0+M1&amp;field0-1-1=target_milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target_milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0+M2&amp;field0-1-3=target_milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0+M3&amp;field0-1-4=target_milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0+M4&amp;field0-1-5=target_milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0+M5&amp;field0-1-6=target_milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0+M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short_desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=%5B+Plan+Item+%5D&amp;field0-3-0=assigned_to&amp;type0-3-0=equals&amp;value0-3-0=gmf.devtools-inbox%40eclipse.org&amp;field0-3-1=assigned_to&amp;type0-3-1=equals&amp;value0-3-1=gmf.docs-inbox%40eclipse.org&amp;field0-3-2=assigned_to&amp;type0-3-2=equals&amp;value0-3-2=gmf.generation-inbox%40eclipse.org&amp;field0-3-3=assigned_to&amp;type0-3-3=equals&amp;value0-3-3=gmf.models-inbox%40eclipse.org&amp;field0-3-4=assigned_to&amp;type0-3-4=equals&amp;value0-3-4=gmf.releng-inbox%40eclipse.org&amp;field0-3-5=assigned_to&amp;type0-3-5=equals&amp;value0-3-5=gmf.runtime-inbox%40eclipse.org&amp;field0-3-6=assigned_to&amp;type0-3-6=equals&amp;value0-3-6=gmf.runtime.common-inbox%40eclipse.org&amp;field0-3-7=assigned_to&amp;type0-3-7=equals&amp;value0-3-7=gmf.runtime.diagram-inbox%40eclipse.org&amp;field0-3-8=assigned_to&amp;type0-3-8=equals&amp;value0-3-8=gmf.runtime.emf-inbox%40eclipse.org&amp;field0-3-9=assigned_to&amp;type0-3-9=equals&amp;value0-3-9=gmf.samples-inbox%40eclipse.org&amp;field0-3-10=assigned_to&amp;type0-3-10=equals&amp;value0-3-10=gmf.templates-inbox%40eclipse.org&amp;field0-3-11=assigned_to&amp;type0-3-11=equals&amp;value0-3-11=gmf.ui-inbox%40eclipse.org&amp;field0-3-12=assigned_to&amp;type0-3-12=equals&amp;value0-3-12=gmf.web-inbox%40eclipse.org&amp;field0-4-0=bug_status&amp;type0-4-0=equals&amp;value0-4-0=RESOLVED&amp;field0-4-1=bug_status&amp;type0-4-1=equals&amp;value0-4-1=VERIFIED&amp;field0-4-2=bug_status&amp;type0-4-2=equals&amp;value0-4-2=CLOSED" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=equals&amp;value0-1-0=2.0 M1&amp;field0-1-1=target milestone&amp;type0-1-1=equals&amp;value0-1-1=2.0&amp;field0-1-2=target milestone&amp;type0-1-2=equals&amp;value0-1-2=2.0 M2&amp;field0-1-3=target milestone&amp;type0-1-3=equals&amp;value0-1-3=2.0 M3&amp;field0-1-4=target milestone&amp;type0-1-4=equals&amp;value0-1-4=2.0 M4&amp;field0-1-5=target milestone&amp;type0-1-5=equals&amp;value0-1-5=2.0 M5&amp;field0-1-6=target milestone&amp;type0-1-6=equals&amp;value0-1-6=2.0 M6&amp;field0-2-0=keywords&amp;type0-2-0=anywordssubstr&amp;value0-2-0=plan&amp;field0-2-1=short desc&amp;type0-2-1=allwordssubstr&amp;value0-2-1=[ Plan Item ]&amp;field0-3-0=assigned to&amp;type0-3-0=equals&amp;value0-3-0=gmf.devtools-inbox@eclipse.org&amp;field0-3-1=assigned to&amp;type0-3-1=equals&amp;value0-3-1=gmf.docs-inbox@eclipse.org&amp;field0-3-2=assigned to&amp;type0-3-2=equals&amp;value0-3-2=gmf.generation-inbox@eclipse.org&amp;field0-3-3=assigned to&amp;type0-3-3=equals&amp;value0-3-3=gmf.models-inbox@eclipse.org&amp;field0-3-4=assigned to&amp;type0-3-4=equals&amp;value0-3-4=gmf.releng-inbox@eclipse.org&amp;field0-3-5=assigned to&amp;type0-3-5=equals&amp;value0-3-5=gmf.runtime-inbox@eclipse.org&amp;field0-3-6=assigned to&amp;type0-3-6=equals&amp;value0-3-6=gmf.runtime.common-inbox@eclipse.org&amp;field0-3-7=assigned to&amp;type0-3-7=equals&amp;value0-3-7=gmf.runtime.diagram-inbox@eclipse.org&amp;field0-3-8=assigned to&amp;type0-3-8=equals&amp;value0-3-8=gmf.runtime.emf-inbox@eclipse.org&amp;field0-3-9=assigned to&amp;type0-3-9=equals&amp;value0-3-9=gmf.samples-inbox@eclipse.org&amp;field0-3-10=assigned to&amp;type0-3-10=equals&amp;value0-3-10=gmf.templates-inbox@eclipse.org&amp;field0-3-11=assigned to&amp;type0-3-11=equals&amp;value0-3-11=gmf.ui-inbox@eclipse.org&amp;field0-3-12=assigned to&amp;type0-3-12=equals&amp;value0-3-12=gmf.web-inbox@eclipse.org&amp;field0-4-0=bug status&amp;type0-4-0=equals&amp;value0-4-0=RESOLVED&amp;field0-4-1=bug status&amp;type0-4-1=equals&amp;value0-4-1=VERIFIED&amp;field0-4-2=bug status&amp;type0-4-2=equals&amp;value0-4-2=CLOSED" rel="nofollow">Resolved</a>

</p><p><i><b>Deferred Items</b></i>
</p><p>Bugzillas with an unspecified target milestone are deferred, and not scheduled for the current release. For the most current list of these items, see the following link:
</p><p><a href="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta_ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target_milestone&amp;type0-1-0=notequals&amp;value0-1-0=2.0+M1&amp;field0-2-0=target_milestone&amp;type0-2-0=notequals&amp;value0-2-0=2.0&amp;field0-3-0=target_milestone&amp;type0-3-0=notequals&amp;value0-3-0=2.0+M2&amp;field0-4-0=target_milestone&amp;type0-4-0=notequals&amp;value0-4-0=2.0+M3&amp;field0-5-0=target_milestone&amp;type0-5-0=notequals&amp;value0-5-0=2.0+M4&amp;field0-6-0=target_milestone&amp;type0-6-0=notequals&amp;value0-6-0=2.0+M5&amp;field0-7-0=target_milestone&amp;type0-7-0=notequals&amp;value0-7-0=2.0+M6&amp;field0-8-0=keywords&amp;type0-8-0=anywordssubstr&amp;value0-8-0=plan&amp;field0-8-1=short_desc&amp;type0-8-1=allwordssubstr&amp;value0-8-1=%5B+Plan+Item+%5D" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?order=bugs.delta ts&amp;product=GMF&amp;field0-0-0=product&amp;type0-0-0=equals&amp;value0-0-0=GMF&amp;field0-1-0=target milestone&amp;type0-1-0=notequals&amp;value0-1-0=2.0 M1&amp;field0-2-0=target milestone&amp;type0-2-0=notequals&amp;value0-2-0=2.0&amp;field0-3-0=target milestone&amp;type0-3-0=notequals&amp;value0-3-0=2.0 M2&amp;field0-4-0=target milestone&amp;type0-4-0=notequals&amp;value0-4-0=2.0 M3&amp;field0-5-0=target milestone&amp;type0-5-0=notequals&amp;value0-5-0=2.0 M4&amp;field0-6-0=target milestone&amp;type0-6-0=notequals&amp;value0-6-0=2.0 M5&amp;field0-7-0=target milestone&amp;type0-7-0=notequals&amp;value0-7-0=2.0 M6&amp;field0-8-0=keywords&amp;type0-8-0=anywordssubstr&amp;value0-8-0=plan&amp;field0-8-1=short desc&amp;type0-8-1=allwordssubstr&amp;value0-8-1=[ Plan Item ]" rel="nofollow">All Open</a>
</p><p><i><b>Help Wanted Items</b></i>
</p><p>Bugzillas with a 'helpwanted' keyword are in need of contribution from the community.  For the most current list of these items, see the following link:
</p><p><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;classification=Modeling&amp;product=GMF&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=helpwanted&amp;bug_status=NEW&amp;bug_status=REOPENED&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?query format=advanced&amp;short desc type=allwordssubstr&amp;short desc=&amp;classification=Modeling&amp;product=GMF&amp;long desc type=allwordssubstr&amp;long desc=&amp;bug file loc type=allwordssubstr&amp;bug file loc=&amp;status whiteboard type=allwordssubstr&amp;status whiteboard=&amp;keywords type=allwords&amp;keywords=helpwanted&amp;bug status=NEW&amp;bug status=REOPENED&amp;emailtype1=substring&amp;email1=&amp;emailtype2=substring&amp;email2=&amp;bugidtype=include&amp;bug id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse same sort as last time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=" rel="nofollow">All Open</a>
</p>

<h2><a name="MDT"></a>Modeling Development Tools</h2>

<div class=Section1>

<h3>Eclipse MDT<br>
DRAFT 1.0 Plan</h3>

<p>Last revised <st1:time Minute="28" Hour="20">20:28 EST</st1:time> <st1:date
Year="2006" Day="19" Month="12">December 19, 2006</st1:date> (<img width=12
height=12 id="_x0000_i1025" src="../../images/new.gif" border=0> marks
interesting changes over the <a href="mdt_project_plan_1_0_20061201.html">previous
plan revision</a>)</p>

<p><i>Please send comments about this plan to the </i><a
href="mailto:mdt-dev@eclipse.org">mdt-dev@eclipse.org</a> <i>developer mailing
list.</i></p>

<p>This document lays out the feature and API set for the next feature release
of the Eclipse MDT project, designated release 1.0. </p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l1 level1 lfo3;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'><a href="#Deliverables">Release deliverables</a><o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l1 level1 lfo3;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'><a href="#Milestones">Release milestones</a><o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l1 level1 lfo3;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'><a href="#TargetOperatingEnvironments">Target operating
     environments</a><o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l1 level1 lfo3;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'><a href="#Compatibility">Compatibility with previous
     releases</a><o:p></o:p></span></li>

 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l1 level1 lfo3;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'><a href="#_EODM_component">EODM component</a><o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l1 level1 lfo3;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'><a href="#_OCL__component">OCL component</a></span><img
     border=0 width=12 height=12 id="_x0000_i1026" src="../../images/new.gif"><span
     style='font-size:10.0pt;font-family:Arial'><o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l1 level1 lfo3;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'><a href="#_UML2__component">UML2 component</a></span><img
     border=0 width=12 height=12 id="_x0000_i1027" src="../../images/new.gif"><span
     style='font-size:10.0pt;font-family:Arial'><o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l1 level1 lfo3;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'><a href="#_UML2_Tools_">UML2 Tools component</a></span><img
     border=0 width=12 height=12 id="_x0000_i1028" src="../../images/new.gif"><span
     style='font-size:10.0pt;font-family:Arial'><o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l1 level1 lfo3;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'><a href="#_XSD_component">XSD component</a><o:p></o:p></span></li>
</ul>

<p>Plans do not materialize out of nowhere, nor are they entirely static. To
ensure the planning process is transparent and open to the entire Eclipse
community, plans are posted in an embryonic form and then revised from time to
time throughout the release cycle. </p>

<p>The first part of the plan deals with the important matters of release
deliverables, release milestones, target operating environments, and
release-to-release compatibility. These are all things that need to be clear
for any release, even if no features were to change.&nbsp; </p>

<p>The remainder of the plan consists of plan items for the components under
the Eclipse MDT project. Each plan item covers a feature or API that is to be
added, or some aspect that is to be improved. Each plan item has its own entry
in the Eclipse <span class=SpellE>bugzilla</span> database, with a title and a
concise summary (usually a single paragraph) that explains the work item at a
suitably high enough level so that everyone can readily understand what the
work item is without having to understand the nitty-gritty detail. </p>

<p>Not all plan items represent the same amount of work; some may be quite
large, others, quite small. Some plan items may involve work that is localized
to a single subsystem; others may involve coordinated changes across several
projects within the same top-level project; and others may involve coordination
with other top-level projects. Although some plan items are for work that is
more pressing that others, the plan items appear in no particular order. </p>

<p>Fixing bugs, improving test coverage, documentation, examples, performance
tuning, usability, etc. are considered routine ongoing maintenance activities
and are not included in this plan unless they would also involve a significant
change to the API or feature set, or involve a significant amount of work. The
intent of the plan is to account for all interesting feature work.</p>

<p>The current status of each plan item is noted: </p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l1 level1 lfo3;tab-stops:list .5in'><b style='mso-bidi-font-weight:
     normal'><span style='font-size:10.0pt;font-family:Arial'>Committed</span></b><span
     style='font-size:10.0pt;font-family:Arial'> plan item – A committed plan
     item is one that we have decided to address for the release.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l1 level1 lfo3;tab-stops:list .5in'><b style='mso-bidi-font-weight:
     normal'><span style='font-size:10.0pt;font-family:Arial'>Proposed</span></b><span
     style='font-size:10.0pt;font-family:Arial'> plan item – A proposed plan
     item is one that we are considering addressing for the release. Although
     we are actively investigating it, we are not yet in a position to commit
     to it, or to say that we won’t be able to address it. After due
     consideration, a proposal will either be committed or deferred.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l1 level1 lfo3;tab-stops:list .5in'><b style='mso-bidi-font-weight:
     normal'><span style='font-size:10.0pt;font-family:Arial'>Deferred</span></b><span
     style='font-size:10.0pt;font-family:Arial'> plan item – A reasonable
     proposal that will not make it into this release for some reason is marked
     as deferred with a brief note as to why it was deferred. Deferred plan
     items may resurface as committed plan items at a later point.<o:p></o:p></span></li>

</ul>

<h3><a name=Deliverables></a>Release deliverables</h3>

<p>The release deliverables are: </p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>Source code release for the EODM component, available
     as versions tagged &quot;R2_0&quot; in the eclipse.org <a
     href="http://dev.eclipse.org/viewcvs/">CVS repository</a>.<o:p></o:p></span></li>

 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>EODM runtime binary and SDK distributions (downloadable).<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>EODM runtime binary and SDK features on eclipse.org
     update site (install via Eclipse update manager).<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><img border=0 width=12
     height=12 id="_x0000_i1029" src="../../images/new.gif"><span
     style='mso-spacerun:yes'> </span><span style='font-size:10.0pt;font-family:
     Arial'>Source code release for the OCL component, available as versions
     tagged &quot;R1_1&quot; in the eclipse.org <a
     href="http://dev.eclipse.org/viewcvs/">CVS repository</a>.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><img border=0 width=12
     height=12 id="_x0000_i1030" src="../../images/new.gif"><span
     style='mso-spacerun:yes'> </span><span style='font-size:10.0pt;font-family:
     Arial'>OCL runtime binary and SDK distributions (downloadable).<o:p></o:p></span></li>

 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><img border=0 width=12
     height=12 id="_x0000_i1031" src="../../images/new.gif"><span
     style='mso-spacerun:yes'> </span><span style='font-size:10.0pt;font-family:
     Arial'>OCL runtime binary and SDK features on eclipse.org update site
     (install via Eclipse update manager).<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><img border=0 width=12
     height=12 id="_x0000_i1032" src="../../images/new.gif"><span
     style='mso-spacerun:yes'> </span><span style='font-size:10.0pt;font-family:
     Arial'>Source code release for the UML2 component, available as versions
     tagged &quot;R2_1&quot; in the eclipse.org <a
     href="http://dev.eclipse.org/viewcvs/">CVS repository</a>.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><img border=0 width=12
     height=12 id="_x0000_i1033" src="../../images/new.gif"><span
     style='mso-spacerun:yes'> </span><span style='font-size:10.0pt;font-family:
     Arial'>UML2 runtime binary and SDK distributions (downloadable).<o:p></o:p></span></li>

 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><img border=0 width=12
     height=12 id="_x0000_i1034" src="../../images/new.gif"><span
     style='mso-spacerun:yes'> </span><span style='font-size:10.0pt;font-family:
     Arial'>UML2 runtime binary and SDK features on eclipse.org update site
     (install via Eclipse update manager).<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><img border=0 width=12
     height=12 id="_x0000_i1035" src="../../images/new.gif"><span
     style='mso-spacerun:yes'> </span><span style='font-size:10.0pt;font-family:
     Arial'>Source code release for the UML2 Tools component, available as
     versions tagged &quot;R1_0&quot; in the eclipse.org <a
     href="http://dev.eclipse.org/viewcvs/">CVS repository</a>.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><img border=0 width=12
     height=12 id="_x0000_i1036" src="../../images/new.gif"><span
     style='mso-spacerun:yes'> </span><span style='font-size:10.0pt;font-family:
     Arial'>UML2 Tools runtime binary and SDK distributions (downloadable).<o:p></o:p></span></li>

 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><img border=0 width=12
     height=12 id="_x0000_i1037" src="../../images/new.gif"><span
     style='mso-spacerun:yes'> </span><span style='font-size:10.0pt;font-family:
     Arial'>UML2 Tools runtime binary and SDK features on eclipse.org update
     site (install via Eclipse update manager).<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>Source code release for XSD component, available as
     versions tagged &quot;R2_3&quot; in the eclipse.org <a
     href="http://dev.eclipse.org/viewcvs/">CVS repository</a>.<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>XSD runtime binary and SDK distributions
     (downloadable).<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l4 level1 lfo7;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>XSD runtime binary and SDK features on eclipse.org
     update site (install via Eclipse update manager).<o:p></o:p></span></li>

</ul>

<h3><a name=Milestones></a>Release milestones</h3>

<p>Release milestone occurring at roughly 6 week intervals exist to facilitate
coarse-grained planning and staging. The milestones are:</p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l0 level1 lfo10;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>Thursday, November 16 – Milestone 3 (1.0 M3) – Stable
     Build based on Eclipse 3.3 M3 </span><span style='mso-bidi-font-style:
     italic'><img border=0 width=12 height=12 id="_x0000_i1038"
     src="../../images/ok.gif"></span><span style='font-size:10.0pt;font-family:
     Arial'><o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l0 level1 lfo10;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>Thursday, January 4 – Milestone 4 (1.0 M4) – Stable
     Build based on Eclipse 3.3 M4<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l0 level1 lfo10;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>Friday, February 23 – Milestone 5 (1.0 M5) – Stable
     Build based on Eclipse 3.3 M5<o:p></o:p></span></li>

 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l0 level1 lfo10;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>Friday, April 6 – Milestone 6 (1.0 M6) – API Freeze –
     Stable Build based on Eclipse 3.3 M6<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l0 level1 lfo10;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>Friday, May 18 – Milestone 7 (1.0 RC0) – Stable Build
     based on Eclipse 3.3 RC0<o:p></o:p></span></li>
</ul>

<p>The 1.0 release is targeted for late June 2007. All release deliverables
will be available for download as soon as the release has been tested and
validated in the target operating configurations listed below.</p>

<h3><a name=TargetOperatingEnvironments></a>Target Operating Environments</h3>

<p>In order to remain current, each release of an Eclipse project targets
reasonably current versions of underlying operating environments and other
Eclipse projects on which it depends.&nbsp;</p>

<p>Most of Eclipse is &quot;pure&quot; <span class=SpellE>Java<sup><span
style='font-size:9.5pt'>TM</span></sup></span> code and has no direct
dependence on the underlying operating system. The chief dependence is on the
Eclipse Platform, and on the Java 2 Platform that runs it.</p>

<p>The MDT 1.0 release depends on the following:</p>

<ul type=disc>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l5 level1 lfo13;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>Java 2 Platform 1.5<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l5 level1 lfo13;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>Eclipse Platform 3.3<o:p></o:p></span></li>

 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l5 level1 lfo13;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>EMF 2.3<o:p></o:p></span></li>
 <li class=MsoNormal style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
     mso-list:l5 level1 lfo13;tab-stops:list .5in'><span style='font-size:10.0pt;
     font-family:Arial'>GMF 2.0<o:p></o:p></span></li>
</ul>

<p>The 1.0 release of MDT is designed to run on any configuration supporting
the above components.</p>

<p>The Eclipse Platform runs in a variety of operating environments. Testing is
focused on a handful of popular <span class=header>combinations of operating
system and Java 2 Platform; these are our </span><em><span style='font-family:
Arial'>reference platforms</span></em><span class=header>. Eclipse undoubtedly
runs fine in many operating environments beyond the reference platforms we
test. However, since we do not systematically test them we cannot vouch for
them. Problems encountered when running Eclipse on non-reference platform that
cannot be recreated on any reference platform will be given lower priority than
problems with running Eclipse on a reference platform.</span></p>

<p><span style='mso-bidi-font-weight:bold'>See the <a
href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html">Eclipse
Project 3.3 plan</a> for a list of reference platforms.</span></p>

<h4><span style='font-family:Arial'>Internationalization<o:p></o:p></span></h4>

<p>Eclipse is designed as the basis for internationalized products. The user
interface elements provided by the various Eclipse projects, including dialogs
and error messages, are externalized. The English strings for MDT are provided
as the default resource bundles. Translations are not provided with this
release. However, the plug-in fragment mechanism provides the means by which translations
into any number of other languages can be incorporated.</p>

<h3><a name=Compatibility></a>Compatibility with Previous Releases</h3>

<h3>Compatibility of EODM 2.0 with 1.0</h3>

<p>The EODM 2.0 component of Eclipse MDT will <b style='mso-bidi-font-weight:
normal'>not</b> be compatible with EODM 1.0.</p>

<p><b>API Contract Compatibility:</b> EODM 2.0 will <b style='mso-bidi-font-weight:
normal'>not</b> be upwards contract-compatible with EODM 1.0 as noted in the <i>EODM
2.0 Migration</i> Guide. Programs that use affected APIs and extension points
will need to be ported to EODM 2.0 APIs. Downward contract compatibility is not
supported. Compliance with EODM 2.0 APIs would <b style='mso-bidi-font-weight:
normal'>not</b> ensure compliance with EODM 1.0 APIs. Refer to <i><a
href="http://www.eclipse.org/eclipse/development/java-api-evolution.html">Evolving
Java-based APIs</a></i> for a discussion of the kinds of API changes that
maintain contract compatibility.</p>

<p><b>Binary (plug-in) Compatibility:</b> EODM 2.0 will <b style='mso-bidi-font-weight:
normal'>not</b> be upwards binary-compatible with EODM 1.0 as noted in the <i>EODM
2.0 Migration</i> Guide. Downward plug-in compatibility is not supported:
plug-ins compiled against EODM 2.0 will be unusable with EODM 1.0. Refer to <i><a
href="http://www.eclipse.org/eclipse/development/java-api-evolution.html">Evolving
Java-based APIs</a></i> for a discussion of the kinds of API changes that
maintain binary compatibility.</p>

<p><b>Source Compatibility:</b> Source files written to use EODM 1.0 APIs will <b
style='mso-bidi-font-weight:normal'>not</b> compile and run successfully
against EODM 2.0 APIs. In some cases, it may be necessary to make minor changes
to the source code to disambiguate things like imports or overloaded method
invocations. Downward source compatibility is not supported. If source files
use new APIs, they will not be usable with earlier versions. </p>

<p><b>Workspace Compatibility:</b> EODM 2.0 will <b style='mso-bidi-font-weight:
normal'>not</b> be upwards workspace-compatible with EODM 1.0 as noted. This
means that workspaces and projects created by an Eclipse with EODM 1.0
installed <b style='mso-bidi-font-weight:normal'>cannot</b> be successfully
opened by an Eclipse with EODM 2.0 installed. This includes both hidden
metadata, which is localized to a particular workspace, as well as metadata
files found within a workspace project, which may propagate between workspaces
via file copying or team repositories. User interface session state may be
discarded when a workspace is upgraded. Downward workspace compatibility is not
supported. Metadata files created (or overwritten) by the newer version will
generally be unusable with older versions.</p>

<p><b>Non-compliant usage of API's</b>: All non-API methods and classes, and
certainly everything in a package with &quot;internal&quot; in its name, are
considered implementation details which may vary between operating environment
and are subject to change without notice. Client plug-ins that directly <span
class=GramE>depend</span> on anything other than what is specified in the API
are inherently unsupportable and receive no guarantees about compatibility
within a single release much less with an earlier releases. Refer to <i><a
href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">How
to Use the Eclipse API</a></i> for information about how to write compliant
plug-ins.</p>

<h3>Compatibility of <img border=0 width=12 height=12 id="_x0000_i1039"
src="../../images/new.gif"><span style='mso-spacerun:yes'> </span>OCL 1.1 with
1.0</h3>

<p>The <img border=0 width=12 height=12 id="_x0000_i1040"
src="../../images/new.gif"><span style='mso-spacerun:yes'> </span>OCL 1.1 <img
border=0 width=12 height=12 id="_x0000_i1041" src="../../images/new.gif"><span
style='mso-spacerun:yes'> </span>component of Eclipse MDT will be compatible
with<img border=0 width=12 height=12 id="_x0000_i1042"
src="../../images/new.gif"> OCL 1.0, except in those areas noted in the<img
border=0 width=12 height=12 id="_x0000_i1043" src="../../images/new.gif"> OCL
1.1 Migration Guide.</p>

<p><b>API Contract Compatibility:</b> <img border=0 width=12 height=12
id="_x0000_i1044" src="../../images/new.gif"><span
style='mso-spacerun:yes'> </span>OCL 1.1 will be upwards contract-compatible
with<img border=0 width=12 height=12 id="_x0000_i1045"
src="../../images/new.gif"> OCL 1.0 except in those areas noted in the <img
border=0 width=12 height=12 id="_x0000_i1046" src="../../images/new.gif"><span
style='mso-spacerun:yes'> </span><i>OCL 1.1 Migration</i><i style='mso-bidi-font-style:
normal'> Guide</i>. Programs that use affected APIs and extension points will
need to be ported to<img border=0 width=12 height=12 id="_x0000_i1047"
src="../../images/new.gif"> OCL 1.1 APIs. Downward contract compatibility is
not supported. There is no guarantee that compliance with<img border=0
width=12 height=12 id="_x0000_i1048" src="../../images/new.gif"> OCL 1.1 APIs
would ensure compliance with<img border=0 width=12 height=12 id="_x0000_i1049"
src="../../images/new.gif"> OCL 1.0 APIs. Refer to <i><a
href="http://www.eclipse.org/eclipse/development/java-api-evolution.html">Evolving
Java-based APIs</a></i> for a discussion of the kinds of API changes that
maintain contract compatibility.</p>

<p><b>Binary (plug-in) Compatibility:</b> <img border=0 width=12 height=12
id="_x0000_i1050" src="../../images/new.gif"><span
style='mso-spacerun:yes'> </span>OCL 1.1 will be upwards binary-compatible with<img
border=0 width=12 height=12 id="_x0000_i1051" src="../../images/new.gif"> OCL
1.0 except in those areas noted in the<img border=0 width=12 height=12
id="_x0000_i1052" src="../../images/new.gif"> <i>OCL 1.1 Migration</i><i
style='mso-bidi-font-style:normal'> Guide</i>. Downward plug-in compatibility
is not supported: plug-ins compiled against<img border=0 width=12 height=12
id="_x0000_i1053" src="../../images/new.gif"> OCL 1.1 will likely be unusable
with<img border=0 width=12 height=12 id="_x0000_i1054"
src="../../images/new.gif"> OCL 1.0. Refer to <i><a
href="http://www.eclipse.org/eclipse/development/java-api-evolution.html">Evolving
Java-based APIs</a></i> for a discussion of the kinds of API changes that
maintain binary compatibility.</p>

<p><b>Source Compatibility:</b> Source files written to use<img border=0
width=12 height=12 id="_x0000_i1055" src="../../images/new.gif"> OCL 1.0 APIs
will usually compile and run successfully against<img border=0 width=12
height=12 id="_x0000_i1056" src="../../images/new.gif"> OCL 1.1 APIs, although
this cannot be guaranteed. Because<img border=0 width=12 height=12
id="_x0000_i1057" src="../../images/new.gif"> OCL 1.1 may exploit new Java
language constructs and/or aspects of the OCL specification, there is an
increased chance of source incompatibilities compared to previous<img border=0
width=12 height=12 id="_x0000_i1058" src="../../images/new.gif"> OCL releases.
In some cases, it may be necessary to make minor changes to the source code to
disambiguate things like imports or overloaded method invocations. Downward
source compatibility is not supported. If source files use new APIs, they will
not be usable with earlier versions.</p>

<p><b>Workspace Compatibility:</b> <img border=0 width=12 height=12
id="_x0000_i1059" src="../../images/new.gif"><span
style='mso-spacerun:yes'> </span>OCL 1.1 will be upwards workspace-compatible
with<img border=0 width=12 height=12 id="_x0000_i1060"
src="../../images/new.gif"> OCL 1.0 unless noted. This means that workspaces
and projects created by an Eclipse with<img border=0 width=12 height=12
id="_x0000_i1061" src="../../images/new.gif"> OCL 1.0 installed can be
successfully opened by an Eclipse with<img border=0 width=12 height=12
id="_x0000_i1062" src="../../images/new.gif"> OCL 1.1 installed. This includes
both hidden metadata, which is localized to a particular workspace, as well as
metadata files found within a workspace project, which may propagate between
workspaces via file copying or team repositories. User interface session state
may be discarded when a workspace is upgraded. Downward workspace compatibility
is not supported. Metadata files created (or overwritten) by the newer version
will generally be unusable with older versions.</p>

<p><b>Non-compliant usage of API's</b>: All non-API methods and classes, and
certainly everything in a package with &quot;internal&quot; in its name, are
considered implementation details which may vary between operating environment
and are subject to change without notice. Client plug-ins that directly <span
class=GramE>depend</span> on anything other than what is specified in the API
are inherently unsupportable and receive no guarantees about compatibility
within a single release much less with an earlier releases. Refer to <i><a
href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">How
to Use the Eclipse API</a></i> for information about how to write compliant
plug-ins.</p>

<h3>Compatibility of UML2 2.1 with 2.0</h3>

<p>The UML2<img border=0 width=12 height=12 id="_x0000_i1063"
src="../../images/new.gif"> 2.1<img border=0 width=12 height=12
id="_x0000_i1064" src="../../images/new.gif"> component of Eclipse MDT will be
compatible with UML2<img border=0 width=12 height=12 id="_x0000_i1065"
src="../../images/new.gif"> 2.0, except in those areas noted in the UML2<img
border=0 width=12 height=12 id="_x0000_i1066" src="../../images/new.gif"> 2.1
Migration Guide.</p>

<p><b>API Contract Compatibility:</b> UML2<img border=0 width=12 height=12
id="_x0000_i1067" src="../../images/new.gif"> 2.1 will be upwards
contract-compatible with UML2<img border=0 width=12 height=12 id="_x0000_i1068"
src="../../images/new.gif"> 2.0 except in those areas noted in the <i>UML2</i><img
border=0 width=12 height=12 id="_x0000_i1069" src="../../images/new.gif"><i>

2.1 Migration</i><i style='mso-bidi-font-style:normal'> Guide</i>. Programs
that use affected APIs and extension points will need to be ported to UML2<img
border=0 width=12 height=12 id="_x0000_i1070" src="../../images/new.gif"> 2.1
APIs. Downward contract compatibility is not supported. There is no guarantee
that compliance with UML2<img border=0 width=12 height=12 id="_x0000_i1071"
src="../../images/new.gif"> 2.1 APIs would ensure compliance with UML2<img
border=0 width=12 height=12 id="_x0000_i1072" src="../../images/new.gif"> 2.0
APIs. Refer to <i><a
href="http://www.eclipse.org/eclipse/development/java-api-evolution.html">Evolving
Java-based APIs</a></i> for a discussion of the kinds of API changes that
maintain contract compatibility.</p>

<p><b>Binary (plug-in) Compatibility:</b> UML2<img border=0 width=12 height=12
id="_x0000_i1073" src="../../images/new.gif"> 2.1 will be upwards
binary-compatible with UML2<img border=0 width=12 height=12 id="_x0000_i1074"
src="../../images/new.gif"> 2.0 except in those areas noted in the <i>UML2</i><img
border=0 width=12 height=12 id="_x0000_i1075" src="../../images/new.gif"><i>

2.1 Migration</i><i style='mso-bidi-font-style:normal'> Guide</i>. Downward
plug-in compatibility is not supported: plug-ins compiled against UML2<img
border=0 width=12 height=12 id="_x0000_i1076" src="../../images/new.gif"> 2.1
will likely be unusable with UML2<img border=0 width=12 height=12
id="_x0000_i1077" src="../../images/new.gif"> 2.0. Refer to <i><a
href="http://www.eclipse.org/eclipse/development/java-api-evolution.html">Evolving
Java-based APIs</a></i> for a discussion of the kinds of API changes that
maintain binary compatibility.</p>

<p><b>Source Compatibility:</b> Source files written to use UML2<img border=0
width=12 height=12 id="_x0000_i1078" src="../../images/new.gif"> 2.0 APIs will
usually compile and run successfully against UML2<img border=0 width=12
height=12 id="_x0000_i1079" src="../../images/new.gif"> 2.1 APIs, although this
cannot be guaranteed. Because UML2<img border=0 width=12 height=12
id="_x0000_i1080" src="../../images/new.gif"> 2.1 may exploit new Java language
constructs, there is an increased chance of source incompatibilities compared
to previous UML2<img border=0 width=12 height=12 id="_x0000_i1081"
src="../../images/new.gif"> releases. In some cases, it may be necessary to
make minor changes to the source code to disambiguate things like imports or
overloaded method invocations. Downward source compatibility is not supported.
If source files use new APIs, they will not be usable with earlier versions.</p>

<p><b>Workspace Compatibility:</b> UML2<img border=0 width=12 height=12
id="_x0000_i1082" src="../../images/new.gif"> 2.1 will be upwards
workspace-compatible with UML2<img border=0 width=12 height=12 id="_x0000_i1083"
src="../../images/new.gif"> 2.0 unless noted. This means that workspaces and
projects created by an Eclipse with UML2<img border=0 width=12 height=12
id="_x0000_i1084" src="../../images/new.gif"> 2.0 installed can be successfully
opened by an Eclipse with UML2<img border=0 width=12 height=12 id="_x0000_i1085"
src="../../images/new.gif"> 2.1 installed. This includes both hidden metadata,
which is localized to a particular workspace, as well as metadata files found
within a workspace project, which may propagate between workspaces via file
copying or team repositories. User interface session state may be discarded
when a workspace is upgraded. Downward workspace compatibility is not
supported. Metadata files created (or overwritten) by the newer version will
generally be unusable with older versions.</p>

<p><b>Non-compliant usage of API's</b>: All non-API methods and classes, and
certainly everything in a package with &quot;internal&quot; in its name, are
considered implementation details which may vary between operating environment
and are subject to change without notice. Client plug-ins that directly <span
class=GramE>depend</span> on anything other than what is specified in the API
are inherently unsupportable and receive no guarantees about compatibility
within a single release much less with an earlier releases. Refer to <i><a
href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">How
to Use the Eclipse API</a></i> for information about how to write compliant
plug-ins.</p>

<h3>Compatibility of XSD 2.3 with 2.2</h3>

<p>The XSD 2.3 component of Eclipse MDT will be compatible with XSD 2.2, except
in those areas noted in the XSD 2.3 Migration Guide.</p>

<p><b>API Contract Compatibility:</b> XSD 2.3 will be upwards
contract-compatible with XSD 2.2 except in those areas noted in the <i>XSD 2.3
Migration</i><i style='mso-bidi-font-style:normal'> Guide</i>. Programs that
use affected APIs and extension points will need to be ported to XSD 2.3 APIs.
Downward contract compatibility is not supported. There is no guarantee that
compliance with XSD 2.3 APIs would ensure compliance with XSD 2.2 APIs. Refer
to <i><a
href="http://www.eclipse.org/eclipse/development/java-api-evolution.html">Evolving
Java-based APIs</a></i> for a discussion of the kinds of API changes that
maintain contract compatibility.</p>

<p><b>Binary (plug-in) Compatibility:</b> XSD 2.3 will be upwards
binary-compatible with XSD 2.3 except in those areas noted in the <i>XSD 2.3
Migration</i><i style='mso-bidi-font-style:normal'> Guide</i>. Downward plug-in
compatibility is not supported: plug-ins compiled against XSD 2.3 will likely
be unusable with XSD 2.2. Refer to <i><a
href="http://www.eclipse.org/eclipse/development/java-api-evolution.html">Evolving
Java-based APIs</a></i> for a discussion of the kinds of API changes that
maintain binary compatibility.</p>

<p><b>Source Compatibility:</b> Source files written to use XSD 2.2 APIs will
usually compile and run successfully against XSD 2.3 APIs, although this cannot
be guaranteed. Because XSD 2.3 may exploit new Java language constructs, there
is an increased chance of source incompatibilities compared to previous XSD
releases. In some cases, it may be necessary to make minor changes to the
source code to disambiguate things like imports or overloaded method
invocations. Downward source compatibility is not supported. If source files
use new APIs, they will not be usable with earlier versions.</p>

<p><b>Workspace Compatibility:</b> XSD 2.3 will be upwards workspace-compatible
with XSD 2.2 unless noted. This means that workspaces and projects created by
an Eclipse with XSD 2.2 installed can be successfully opened by an Eclipse with
XSD 2.3 installed. This includes both hidden metadata, which is localized to a
particular workspace, as well as metadata files found within a workspace
project, which may propagate between workspaces via file copying or team
repositories. User interface session state may be discarded when a workspace is
upgraded. Downward workspace compatibility is not supported. Metadata files
created (or overwritten) by the newer version will generally be unusable with
older versions.</p>

<p><b>Non-compliant usage of API's</b>: All non-API methods and classes, and
certainly everything in a package with &quot;internal&quot; in its name, are
considered implementation details which may vary between operating environment
and are subject to change without notice. Client plug-ins that directly <span
class=GramE>depend</span> on anything other than what is specified in the API
are inherently unsupportable and receive no guarantees about compatibility
within a single release much less with an earlier releases. Refer to <i><a
href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">How
to Use the Eclipse API</a></i> for information about how to write compliant
plug-ins.</p>

<h3>Themes</h3>

<p>The changes under consideration for the next release of Eclipse MDT align
with themes identified by the <a
href="http://www.eclipse.org/org/councils/roadmap_v2_0/themes_v2_0.php">Eclipse
Requirements Council</a> and <a
href="http://wiki.eclipse.org/index.php/Modeling_Project_Plan">Modeling project</a>.</p>

<h3><a name=UML2></a><a name="_EODM_component"></a><span style='mso-bookmark:
UML2'>EODM component</span></h3>

<p><span style='mso-bookmark:UML2'>EODM is an implementation of RDF(S)/OWL <span
class=SpellE>metamodels</span> of the </span><a
href="http://www.omg.org/ontology"><span style='mso-bookmark:UML2'>Ontology
Definition <span class=SpellE>Metamodel</span> (ODM)</span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'> using EMF
with additional parsing, inference, model transformation and editing functions.
Plan items reflect new features of the EODM component, or areas where existing
features will be significantly reworked (<span style='mso-bidi-font-style:italic'><img
border=0 width=12 height=12 id="_x0000_i1086" src="../../images/ok.gif"> marks
completed work)</span>.</span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Committed
Items (EODM component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>Standard Compliance<span
style='mso-bidi-font-weight:bold'>.</span></b></span> Provide a new API that is
compliant with the (to be adopted) 5th submission of the ODM specification to
the OMG. (</span><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=162682"><span
style='mso-bookmark:UML2'>162682</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'>) [Theme: Appealing to a Broader Community]</span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>Dynamic Typing.</b></span><span
style='mso-bidi-font-weight:bold'> Provide support for dynamic typing. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=162683"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>162683</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: </span>Appealing to a Broader
Community<span style='mso-bidi-font-weight:bold'>]<o:p></o:p></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>RDF/OWL Parsing and
Serialization.</b></span><span style='mso-bidi-font-weight:bold'> Provide
support for RDF/OWL parsing and serialization. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=162684"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>162684</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: </span>Appealing to a Broader
Community<span style='mso-bidi-font-weight:bold'>]<o:p></o:p></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>RDF/OWL Reasoning.</b></span><span
style='mso-bidi-font-weight:bold'> Provide support for RDF/OWL reasoning. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=162685"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>162685</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: </span>Appealing to a Broader
Community<span style='mso-bidi-font-weight:bold'>]<o:p></o:p></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>RDF/OWL Transformation
to/from <span class=SpellE>Ecore</span>.</b></span><span style='mso-bidi-font-weight:
bold'> Provide a mechanism to transform RDF/OWL models to/from <span
class=SpellE>Ecore</span>. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=162686"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>162686</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: Cohesion]<o:p></o:p></span></span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Proposed
Items (EODM component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><i style='mso-bidi-font-style:normal'><span style='mso-bidi-font-weight:
bold'>None at this time.</span></i></span><i style='mso-bidi-font-style:normal'><span
style='mso-bidi-font-weight:bold'><o:p></o:p></span></i></span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Deferred
Items (EODM component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><i style='mso-bidi-font-style:normal'><span style='mso-bidi-font-weight:
bold'>None at this time.</span></i></span><i style='mso-bidi-font-style:normal'><span
style='mso-bidi-font-weight:bold'><o:p></o:p></span></i></span></p>

<h3><span style='mso-bookmark:UML2'><a name="_UML2_component"></a><a
name="_OCL__component"></a><img border=0 width=12 height=12 id="_x0000_i1087"
src="../../images/new.gif"><span style='mso-spacerun:yes'> </span>OCL<img
border=0 width=12 height=12 id="_x0000_i1088" src="../../images/new.gif">
component</span></h3>

<p><span style='mso-bookmark:UML2'><img border=0 width=12 height=12
id="_x0000_i1089" src="../../images/new.gif"><span
style='mso-spacerun:yes'> </span>OCL is an implementation of the OCL OMG
standard for EMF-based models.<img border=0 width=12 height=12 id="_x0000_i1090"
src="../../images/new.gif"> Plan items reflect new features of the OCL
component, or areas where existing features will be significantly reworked (<span
style='mso-bidi-font-style:italic'><img border=0 width=12 height=12
id="_x0000_i1091" src="../../images/ok.gif"> marks completed work)</span>.</span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Committed
Items (</span><img border=0 width=12 height=12 id="_x0000_i1092"
src="../../images/new.gif"> </span><span style='mso-bookmark:UML2'><span
style='font-family:Arial'>OCL</span><img border=0 width=12 height=12
id="_x0000_i1093" src="../../images/new.gif"></span><span style='mso-bookmark:
UML2'><span style='font-family:Arial'> component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>Parsing API.</b></span><span
style='mso-bidi-font-weight:bold'> Provide a public API for parsing OCL
documents, with the complete context declaration syntax. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=144210"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>144210</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: </span>Design for Extensibility –
Be a Better Platform<span style='mso-bidi-font-weight:bold'>]<o:p></o:p></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>Integration with UML.</b></span><span
style='mso-bidi-font-weight:bold'> Provide support for parsing and evaluating
OCL constraints and expressions on the UML <span class=SpellE>metamodel</span>.
(</span></span><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=105199"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>105199</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: Cohesion]<o:p></o:p></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>EMF 2.3 / J2SE 5 Support.</b></span><span
style='mso-bidi-font-weight:bold'> Adopt EMF 2.3, including regeneration of the
OCL <span class=SpellE>metamodel</span>. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=156361"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>156361</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: </span>Design for Extensibility –
Be a Better Platform<span style='mso-bidi-font-weight:bold'>]<o:p></o:p></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>Improved Documentation.</b></span><span
style='mso-bidi-font-weight:bold'> Develop a complete Programmer’s Guide for
the OCL subcomponent. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=156360"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>156360</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: Simple to Use]<o:p></o:p></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><img border=0
width=12 height=12 id="_x0000_i1120" src="../../images/new.gif"><span
style='mso-spacerun:yes'> </span><span class=GramE><b style='mso-bidi-font-weight:
normal'>LPG.</b></span><span style='mso-bidi-font-weight:bold'> Consume LPG
runtime library from the Orbit project. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=156366"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>156366</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: Project Restructuring] </span><span
style='mso-bidi-font-style:italic'><img border=0 width=12 height=12
id="_x0000_i1119" src="../../images/ok.gif"></span><span style='mso-bidi-font-weight:
bold'><o:p></o:p></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><img border=0
width=12 height=12 id="_x0000_i1094" src="../../images/new.gif"><span
style='mso-spacerun:yes'> </span><span class=GramE><b style='mso-bidi-font-weight:
normal'>Stand-alone support.</b></span><span style='mso-bidi-font-weight:bold'>

Provide a stand-alone (Eclipse-free) OCL build. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=136817"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>136817</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: Appealing to a Broader Community]</span><span
style='mso-bidi-font-style:italic'> <img border=0 width=12 height=12
id="_x0000_i1095" src="../../images/ok.gif"></span><span style='mso-bidi-font-weight:
bold'><o:p></o:p></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><img border=0
width=12 height=12 id="_x0000_i1096" src="../../images/new.gif"><span
style='mso-spacerun:yes'> </span><b style='mso-bidi-font-weight:normal'>ICU4J.</b><span
style='mso-bidi-font-weight:bold'> Isolate and minimize dependency on ICU4J;
ensure support for the “thin” variant of ICU4J. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=156364"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>156364</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: Enable Consistent Multi-language
Support]</span><span style='mso-bidi-font-style:italic'> <img border=0
width=12 height=12 id="_x0000_i1097" src="../../images/ok.gif"></span><span
style='mso-bidi-font-weight:bold'><o:p></o:p></span></span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Proposed
Items (</span><img border=0 width=12 height=12 id="_x0000_i1098"
src="../../images/new.gif"> </span><span style='mso-bookmark:UML2'><span
style='font-family:Arial'>OCL</span><img border=0 width=12 height=12
id="_x0000_i1099" src="../../images/new.gif"></span><span style='mso-bookmark:
UML2'><span style='font-family:Arial'> component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><img border=0
width=12 height=12 id="_x0000_i1121" src="../../images/new.gif"><span
style='mso-spacerun:yes'> </span><span class=GramE><b style='mso-bidi-font-weight:
normal'>Standard Compliance.</b></span><span style='mso-bidi-font-weight:bold'>
Maintain currency of the API with the <span class=SpellE>OMG’s</span> OCL,
ensuring backward API compatibility as much as possible. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=156363"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>156363</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: Appealing to a Broader Community]<o:p></o:p></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><img border=0
width=12 height=12 id="_x0000_i1122" src="../../images/new.gif"><span
style='mso-spacerun:yes'> </span><span class=GramE><b style='mso-bidi-font-weight:
normal'>OCL Conformance.</b></span><span style='mso-bidi-font-weight:bold'>
Validate and document the API’s conformance to the OCL Specification’s
compliance points. This includes which language capabilities are supported and
which <span class=SpellE>metamodels</span> (EMOF/<span class=SpellE>Ecore</span>,
UML) are supported. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=152003"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>152003</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: </span>Design for Extensibility –
Be a Better Platform<span style='mso-bidi-font-weight:bold'>]<o:p></o:p></span></span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Deferred
Items (</span><img border=0 width=12 height=12 id="_x0000_i1100"
src="../../images/new.gif"> </span><span style='mso-bookmark:UML2'><span
style='font-family:Arial'>OCL</span><img border=0 width=12 height=12
id="_x0000_i1101" src="../../images/new.gif"></span><span style='mso-bookmark:
UML2'><span style='font-family:Arial'> component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><i style='mso-bidi-font-style:normal'><span style='mso-bidi-font-weight:
bold'>None at this time.</span></i></span><i style='mso-bidi-font-style:normal'><span
style='mso-bidi-font-weight:bold'><o:p></o:p></span></i></span></p>

<h3><span style='mso-bookmark:UML2'><a name="_UML2__component"></a>UML2<img
border=0 width=12 height=12 id="_x0000_i1102" src="../../images/new.gif">
component</span></h3>

<p><span style='mso-bookmark:UML2'>UML2<img border=0 width=12 height=12
id="_x0000_i1103" src="../../images/new.gif"> is an EMF-based implementation of
the UML</span><span style='mso-bookmark:UML2'><sup><span style='font-size:9.5pt'>TM</span></sup>

2.x <span class=SpellE>metamodel</span> for the Eclipse platform.<img border=0
width=12 height=12 id="_x0000_i1104" src="../../images/new.gif"> Plan items
reflect new features of the UML2 component, or areas where existing features
will be significantly reworked (<span style='mso-bidi-font-style:italic'><img
border=0 width=12 height=12 id="_x0000_i1105" src="../../images/ok.gif"> marks
completed work)</span>.</span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Committed
Items (UML2</span><img border=0 width=12 height=12 id="_x0000_i1106"
src="../../images/new.gif"></span><span style='mso-bookmark:UML2'><span
style='font-family:Arial'> component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>Eclipse 3.3 / EMF 2.3
Compatibility<span style='mso-bidi-font-weight:bold'>.</span></b></span>

Maintain release currency concurrent with EMF 2.3 (and Eclipse 3.3). Make
changes as required to align with EMF features and bug fixes, in particular
support for Java SE 5.0. (</span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=160679"><span
style='mso-bookmark:UML2'>160679</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'>) [Theme: Cohesion]</span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b>Improved Documentation.</b></span> Improve documentation by
updating the FAQ, enhancing the <span class=SpellE>Javadoc</span>, and publishing
new articles. (</span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=77413"><span
style='mso-bookmark:UML2'>77413</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'>) [Theme: Simple to Use]</span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>Ant Task for <span
class=SpellE>Ecore</span> Importer<span style='mso-bidi-font-weight:bold'>.</span></b></span>

Provide an Ant task for the UML <span class=SpellE>Ecore</span> importer,
similar to those provided for the Rose and <span class=SpellE>Ecore</span>
importers in EMF. (</span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=160680"><span
style='mso-bookmark:UML2'>160680</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'>) [Theme: Design for Extensibility – Be a Better
Platform]</span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>Static Profile Definition<span
style='mso-bidi-font-weight:bold'>.</span></b></span> Provide a way to specify
that a profile definition be generated using EMF. This would allow, among other
things, support for custom data types and derived stereotype properties. (</span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=155535"><span
style='mso-bookmark:UML2'>155535</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'>) [Theme: <span style='mso-bidi-font-weight:bold'>Appealing
to a Broader Community</span>]</span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><img border=0
width=12 height=12 id="_x0000_i1107" src="../../images/new.gif"><span
style='mso-spacerun:yes'> </span><span class=GramE><b style='mso-bidi-font-weight:
normal'>XML Primitive Types<span style='mso-bidi-font-weight:bold'>.</span></b></span>
Provide a model library to represent the types defined in the <span
class=SpellE>XMLType</span> <span class=SpellE>metamodel</span> in EMF; be sure
to update <span class=SpellE>Ecore</span>/UML converters to make use of this
new library. (</span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=150154"><span
style='mso-bookmark:UML2'>150154</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'>) [Theme: Cohesion]<span style='mso-bidi-font-style:
italic'> <img border=0 width=12 height=12 id="_x0000_i1108"
src="../../images/ok.gif"></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=SpellE><b style='mso-bidi-font-weight:normal'>BiDi</b></span><b
style='mso-bidi-font-weight:normal'> Support<span style='mso-bidi-font-weight:
bold'>.</span></b> Provide better support for <span class=SpellE>BiDi</span>
languages. (</span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=160682"><span
style='mso-bookmark:UML2'>160682</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'>) [Theme: <span style='mso-bidi-font-weight:bold'>Enable
Consistent Multi-language Support</span>]</span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><b
style='mso-bidi-font-weight:normal'>Create Child/Sibling Menu Reorganization<span
style='mso-bidi-font-weight:bold'>.</span></b> Reorganize the ‘Create Child’
and ‘Create Sibling’ menus of the UML editor so that the items are grouped by
feature. (</span><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=160684"><span
style='mso-bookmark:UML2'>160684</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'>) [Theme: Simple to Use]</span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>Integration with OCL.</b></span><span
style='mso-bidi-font-weight:bold'> Integrate support for parsing and evaluating
OCL constraints and expressions. Consider providing a convenience method on
Constraint for returning the parsed representation of OCL expressions. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=105199"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>105199</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: Cohesion]<o:p></o:p></span></span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Proposed
Items (UML2</span><img border=0 width=12 height=12 id="_x0000_i1109"
src="../../images/new.gif"></span><span style='mso-bookmark:UML2'><span
style='font-family:Arial'> component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b>Unit Tests.</b></span> Complete the implementation of generated
unit tests. (</span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=80308"><span
style='mso-bookmark:UML2'>80308</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'>) [Theme: Design for Extensibility – Be a Better
Platform]<b style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b>Validation Rules.</b></span> Complete the generation and
implementation of validation rules from the UML</span><span style='mso-bookmark:
UML2'><sup><span style='font-size:9.5pt'>TM</span></sup> 2.1 source model. (</span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=80307"><span
style='mso-bookmark:UML2'>80307</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'>) [Theme: <span style='mso-bidi-font-weight:bold'>Appealing
to a Broader Community</span>]<b style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Deferred
Items (UML2</span><img border=0 width=12 height=12 id="_x0000_i1110"
src="../../images/new.gif"></span><span style='mso-bookmark:UML2'><span
style='font-family:Arial'> component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><i style='mso-bidi-font-style:normal'><span style='mso-bidi-font-weight:
bold'>None at this time.</span></i></span><i style='mso-bidi-font-style:normal'><span
style='mso-bidi-font-weight:bold'><o:p></o:p></span></i></span></p>

<h3><span style='mso-bookmark:UML2'><a name="_UML2_Tools_"></a>UML2 Tools<img
border=0 width=12 height=12 id="_x0000_i1111" src="../../images/new.gif">
component</span></h3>

<p><span style='mso-bookmark:UML2'>UML2 Tools is set of <img border=0 width=12
height=12 id="_x0000_i1112" src="../../images/new.gif"><span
style='mso-spacerun:yes'> </span>GMF-based editors for viewing and editing UML
models.<img border=0 width=12 height=12 id="_x0000_i1113"
src="../../images/new.gif"> Plan items reflect new features of the UML2 Tools
component (<span style='mso-bidi-font-style:italic'><img border=0 width=12
height=12 id="_x0000_i1114" src="../../images/ok.gif"> marks completed work)</span>.</span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Committed
Items (UML2 Tools</span><img border=0 width=12 height=12 id="_x0000_i1115"
src="../../images/new.gif"></span><span style='mso-bookmark:UML2'><span
style='font-family:Arial'> component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>Class Diagrams.</b></span><span
style='mso-bidi-font-weight:bold'> Provide a GMF-based editor for UML class
diagrams. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=80318"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>80318</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: Appealing to a Broader Community]<o:p></o:p></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>State Machine Diagrams.</b></span><span
style='mso-bidi-font-weight:bold'> Provide a GMF-based editor for UML state
machine diagrams. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=161572"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>161572</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: Appealing to a Broader Community]<o:p></o:p></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>Component Diagrams.</b></span><span
style='mso-bidi-font-weight:bold'> Provide a GMF-based editor for UML component
diagrams. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=161573"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>161573</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: Appealing to a Broader Community]<o:p></o:p></span></span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>Activity Diagrams.</b></span><span
style='mso-bidi-font-weight:bold'> Provide a GMF-based editor for UML activity
diagrams. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=161574"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>161574</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: Appealing to a Broader Community]<o:p></o:p></span></span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Proposed
Items (UML2 Tools</span><img border=0 width=12 height=12 id="_x0000_i1116"
src="../../images/new.gif"></span><span style='mso-bookmark:UML2'><span
style='font-family:Arial'> component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><b
style='mso-bidi-font-weight:normal'>Import/Export from/to DI.</b><span
style='mso-bidi-font-weight:bold'> Provide a mechanism whereby UML diagrams can
be imported/exported from/to a format based on the Diagram Interchange
specification. (</span></span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=161575"><span
style='mso-bookmark:UML2'><span style='mso-bidi-font-weight:bold'>161575</span></span><span
style='mso-bookmark:UML2'></span></a><span style='mso-bookmark:UML2'><span
style='mso-bidi-font-weight:bold'>) [Theme: Appealing to a Broader Community]<o:p></o:p></span></span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Deferred
Items (UML2 Tools</span><img border=0 width=12 height=12 id="_x0000_i1117"
src="../../images/new.gif"></span><span style='mso-bookmark:UML2'><span
style='font-family:Arial'> component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><i style='mso-bidi-font-style:normal'><span style='mso-bidi-font-weight:
bold'>None at this time.</span></i></span><i style='mso-bidi-font-style:normal'><span
style='mso-bidi-font-weight:bold'><o:p></o:p></span></i></span></p>

<h3><span style='mso-bookmark:UML2'><a name="_XSD_component"></a>XSD component</span></h3>

<p><span style='mso-bookmark:UML2'>XSD is a library that provides an </span><a
href="http://download.eclipse.org/tools/emf/xsd/javadoc?org/eclipse/xsd/package-summary.html#details"><span
style='mso-bookmark:UML2'>API</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'> for manipulating the components of an XML Schema as
described by the </span><a href="http://www.w3.org/TR/XMLSchema-0"><span
style='mso-bookmark:UML2'>W3C XML Schema</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'> specifications, as well as an API for manipulating
the DOM-accessible representation of XML. Plan items reflect new features of
the XSD component, or areas where existing features will be significantly
reworked (<span style='mso-bidi-font-style:italic'><img border=0 width=12
height=12 id="_x0000_i1118" src="../../images/ok.gif"> marks completed work)</span>.</span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Committed
Items (XSD component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><b
style='mso-bidi-font-weight:normal'>Java SE 5.0 <span class=GramE>Support</span><span
style='mso-bidi-font-weight:bold'>.</span></b> Exploit new Java language
constructs; use generics (e.g. <span class=SpellE>EList</span>, <span
class=SpellE>EMap</span> and implementations); generate and merge Java 5
constructs; investigate enumerations and annotations. (</span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=79768"><span
style='mso-bookmark:UML2'>79768</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'>) [Theme: <span style='mso-bidi-font-weight:bold'>Appealing
to a Broader Community</span>]</span></p>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><b style='mso-bidi-font-weight:normal'>XSD2Ecore Enhancements<span
style='mso-bidi-font-weight:bold'>.</span></b></span> Improve ability to record
complex content models as <span class=SpellE>Ecore</span> annotations. (</span><a
href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=152373"><span
style='mso-bookmark:UML2'>152373</span><span style='mso-bookmark:UML2'></span></a><span
style='mso-bookmark:UML2'>) [Theme: <span style='mso-bidi-font-weight:bold'>Cohesion</span>]</span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Proposed Items
(XSD component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><i style='mso-bidi-font-style:normal'><span style='mso-bidi-font-weight:
bold'>None at this time.</span></i></span><i style='mso-bidi-font-style:normal'><span
style='mso-bidi-font-weight:bold'><o:p></o:p></span></i></span></p>

<h4><span style='mso-bookmark:UML2'><span style='font-family:Arial'>Deferred
Items (XSD component)<o:p></o:p></span></span></h4>

<p style='margin-left:27.5pt'><span style='mso-bookmark:UML2'><span
class=GramE><i style='mso-bidi-font-style:normal'><span style='mso-bidi-font-weight:
bold'>None at this time.</span></i></span><i style='mso-bidi-font-style:normal'><span
style='mso-bidi-font-weight:bold'><o:p></o:p></span></i></span></p>

<span style='mso-bookmark:UML2'></span>

<p><o:p>&nbsp;</o:p></p>

<h2><a name="MYLAR"></a>Mylar</h2>
</p>
<h3> Milestones </h3>
<p>Mylar milestones are released 1 week after <a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html" class='external text' title="http://www.eclipse.org/eclipse/development/eclipse project plan 3 3.html" rel="nofollow">Eclipse milestones</a>.  Click to view open bugs.
</p>

<ul><li> <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;classification=Technology&amp;product=Mylar&amp;target_milestone=2.0+M1&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?query format=advanced&amp;short desc type=allwordssubstr&amp;short desc=&amp;classification=Technology&amp;product=Mylar&amp;target milestone=2.0 M1&amp;long desc type=allwordssubstr&amp;long desc=&amp;bug file loc type=allwordssubstr&amp;bug file loc=&amp;status whiteboard type=allwordssubstr&amp;status whiteboard=&amp;keywords type=allwords&amp;keywords=&amp;bugidtype=include&amp;bug id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse same sort as last time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=" rel="nofollow">2.0M1: February 16, 2007</a>
</li><li> <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;classification=Technology&amp;product=Mylar&amp;target_milestone=2.0+M2&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?query format=advanced&amp;short desc type=allwordssubstr&amp;short desc=&amp;classification=Technology&amp;product=Mylar&amp;target milestone=2.0 M2&amp;long desc type=allwordssubstr&amp;long desc=&amp;bug file loc type=allwordssubstr&amp;bug file loc=&amp;status whiteboard type=allwordssubstr&amp;status whiteboard=&amp;keywords type=allwords&amp;keywords=&amp;bugidtype=include&amp;bug id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse same sort as last time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=" rel="nofollow">2.0M2: March 30, 2007</a>
</li><li> <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;classification=Technology&amp;product=Mylar&amp;target_milestone=2.0+M3&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?query format=advanced&amp;short desc type=allwordssubstr&amp;short desc=&amp;classification=Technology&amp;product=Mylar&amp;target milestone=2.0 M3&amp;long desc type=allwordssubstr&amp;long desc=&amp;bug file loc type=allwordssubstr&amp;bug file loc=&amp;status whiteboard type=allwordssubstr&amp;status whiteboard=&amp;keywords type=allwords&amp;keywords=&amp;bugidtype=include&amp;bug id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse same sort as last time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=" rel="nofollow">2.0M3: May 11, 2007</a>
</li><li> 2.0RC1: June 15, 2007
</li><li> <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&amp;short_desc_type=allwordssubstr&amp;short_desc=&amp;classification=Technology&amp;product=Mylar&amp;target_milestone=2.0&amp;long_desc_type=allwordssubstr&amp;long_desc=&amp;bug_file_loc_type=allwordssubstr&amp;bug_file_loc=&amp;status_whiteboard_type=allwordssubstr&amp;status_whiteboard=&amp;keywords_type=allwords&amp;keywords=&amp;bugidtype=include&amp;bug_id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse+same+sort+as+last+time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=" class='external text' title="https://bugs.eclipse.org/bugs/buglist.cgi?query format=advanced&amp;short desc type=allwordssubstr&amp;short desc=&amp;classification=Technology&amp;product=Mylar&amp;target milestone=2.0&amp;long desc type=allwordssubstr&amp;long desc=&amp;bug file loc type=allwordssubstr&amp;bug file loc=&amp;status whiteboard type=allwordssubstr&amp;status whiteboard=&amp;keywords type=allwords&amp;keywords=&amp;bugidtype=include&amp;bug id=&amp;votes=&amp;chfieldfrom=&amp;chfieldto=Now&amp;chfieldvalue=&amp;cmdtype=doit&amp;order=Reuse same sort as last time&amp;field0-0-0=noop&amp;type0-0-0=noop&amp;value0-0-0=" rel="nofollow">2.0: June 29, 2007</a>
</li></ul>
<h3> Scope </h3>

<p>The first goal of Mylar is to make task and context management seamlessly integrated with the Eclipse Platform by providing rich and extensible frameworks for task repository connectors, structure bridges and team support.  The second goal is to provide a reference implementation of the Task-Focused UI for the Eclipse SDK.  This includes structure bridges for the artifacts supported by the SDK which include Java, PDE, Ant and generic files.  It also includes the Bugzilla Connector as the reference task repository implementation, and CVS integration as the reference team support.  Additional features can be considered based on the availability community contributions and resources.
</p>
<h3> Priorities </h3>
<p>In addition to using the planned themes listed below, we need to continue prioritizing the ongoing input of our growing user community.  Committers should prioritize bugs in the following order.  This order need not be used if a bug contains a community contribution of a patch, in which case the <a href="http://wiki.eclipse.org/index.php/Mylar_Contributor_Reference#Contributing_patches" class='external text' title="http://wiki.eclipse.org/index.php/Mylar Contributor Reference#Contributing patches" rel="nofollow">quality of the patch</a> determines the priority.
</p>
<ol><li> Frameworks &amp; APIs: Tasks Framework, Context Framework, Monitor Framework, headless use

</li><li> UI: Tasks List, Task Editor, Task-focused UI
</li><li> Connectors: Bugzilla (reference implementation), Trac (committer supported), JIRA (community supported)
</li></ol>
<h3> Platforms </h3>
<ul><li> Eclipse 3.3: supported
</li><li> Eclipse 3.2: supported, post 2.0 maintenance builds only
</li><li> Requires Java 5 and later

</li></ul>
<h3> Themes </h3>
<p>Legend: in progress, <font color="green">completed</font>, <font color="dimgrey">optional</font> 
</p>
<h3> Task List </h3>

<ul><li> <b>Support date view in Task List.</b>  A common way of organizing tasks to work on in the current week is by day.  We should support this by integrating the Task Activity view's date range container presentation with the Task List.  (147084)
</li></ul>
<ul><li> <b>Support integration with planning and calendaring tools.</b>  Many task repositories have facilities for task planning in the form of milestones, due dates, and other organizations of tasks.  The Task List and Task Editor should support such extensions, for example, allowing the Task List to be organized by milestone.  (Calendaring, privacy controls)  (e.g. 152490).
</li></ul>
<ul><li> <b>Support task dependencies.</b>  Many tasks are related to other tasks, whether it's because they should be worked on in sequence or are subtasks.  We should make these dependencies explicit in the Task List and Task Editor.  (137543)
</li></ul>
<ul><li> <font color="dimgrey"><b>Support working set groupings.</b>  A Task List that includes projects from multiple "working spheres" (e.g. Project A, Project B, Personal) can become unwieldy and distracting.  Integration of top-level working sets could address this.</font>

</li></ul>
<h3> Task Editing </h3>
<ul><li> <b>Increase Task Editor information density</b>.  The task editor is a very frequent target of interaction, and we need to continue streamlining it.  When opened it should show the user the most relevant information with minimal clicking and scrolling required. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=158921" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=158921" rel="nofollow">158921</a>).
</li></ul>
<ul><li> <b>Improve task activity timing.</b> We currently have a task activity mechanism, but it is not explicit enough, and does not capture time spent outside of the workbench.  It should also be extensible to OS-specific monitoring. (135668).

</li></ul>
<ul><li> <font color="dimgrey"><b>Provide task workflow mechanism.</b>  There are many common workflows, such as commit/complete/deactivate.  We should provide a mechanism for specifying and executing task-related workflows.  This requires direct editing of task data (i.e., without editor submission).  (160780, 124224)</font>
</li></ul>
<ul><li> <font color="dimgrey"><b>Streamline task creation.</b>  Make it easier to create tasks, fork them, or promote local tasks to repository tasks.  (154896, 152211)</font>
</li></ul>
<h3> Task Repositories </h3>

<ul><li> <b>Make offline cache faster and more robust.</b>  The offline cache is currently one large serialized file.  We should make it more robust so that changes to connectors and the framework do not cause the offline data to be cleared.  This should make it possible to put a repository into offline mode permanently, and never lose the task data. (165809)
</li></ul>
<ul><li> <b>Streamline task searching</b>.  It is currently impossible to search through local and cached task data.  We could improve the search experience by providing Google-style syntax in the <i>Task List</i> find box, e.g. severity=critical.  (bug 163341)
</li></ul>
<ul><li> <b>Improve connectivity problem and performance handling.</b>  Lack of or degraded connectivity should be transparent, and jobs should be cancellable. (165833)
</li></ul>

<ul><li> <b>Improve synchronization control</b>. (offline mode for repositories bug 165809, finer-grained control bug 165473)
</li></ul>
<ul><li> <font color="dimgrey"><b>Provide standard XML for for tasks.</b>  We should create a canonical and extensible XML for for tasks that we use for retrieving task data.  Connector providers returning this form would not need custom attribute mappings.</font>
</li></ul>
<ul><li> <font color="dimgrey"><b>Improve consistency between local and repository tasks.</b>  Need to consider how to promote task between local and repository, and whether local tasks should be a kind of repository.  (12431)</font>
</li></ul>
<h3> Task-Focused UI </h3>

<ul><li> <b>Provide preview and editing of task context.</b> For submitting and retrieving contexts, or wanting to inspect a context for a non-active task, we should provide a preview pane.  This should also support operations such as merge and element deletion.  (bug 107259)
</li></ul>
<ul><li> <b>Support debugging views</b>.  This includes improved filtering of the thread tree, and automatic toggling/loading of breakpoints with task context.
</li></ul>
<ul><li> <font color="dimgrey"><b>Preserve element identity through refactoring.</b>  Currently only the active context participates in refactoring.  We either need to maintain a dependency map to update the element handles of inactive contexts, or migrate them when they are activated, via the refactoring history.  (164243)</font>
</li></ul>
<h3> General </h3>

<ul><li> <b>Improve error handling and resolution.</b>  When an error happens, we should do automatic duplicate detection, and if no duplicate is found prompt to submit a bug to the failing plug-in.
</li></ul>
<ul><li> <b>Generalize task and context storage mechanisms.</b>  Our API currently specifies files and paths as the storage mechanism, but it should be general, to allow for alternate mechanisms such as server-based storage.
</li></ul>
<ul><li> <font color="dimgrey"><b>Improve representation of people</b>.  Support real names, selecting CCs, content assist for fields with people.  The user's identity should be represented in the UI (e.g. different icon when user appears in the CC list).</font>
</li></ul>
<ul><li> <font color="dimgrey"><b>Hyperlinking everywhere</b>.  Wherever structured elements show up, we should be hyperlinking them (e.g. bug 165827)</font>

</li></ul>
<ul><li> <font color="dimgrey"><b>Personal monitoring and usage sharing</b>.  We require data from the Mylar monitor to inform our UI design.  We should also make this data available to others, since it will include general Eclipse usage statistics.  In order to provide users with an incentive to share their (anonymous) usage data we should include personal interaction monitoring facilities.</font>
</li></ul>



<h2><a name="PLATFORM"></a>Platform</h2>
<em>The project did not provide any plan information.</em>

<h2><a name="TPTP"></a>Test and Performance Tools Platform (TPTP)</h2>
<em>The project did not provide any plan information.</em>

<h2><a name="WTP"></a>Web Tools Platform (WTP)</h2>
<em>The project did not provide any plan information.</em>

<h2><a name="STP"></a>SOA Tools Platform</h2>
<em>The project did not provide any plan information.</em>


      </div>
  </div>
<?php
	# Paste your HTML content between the EOHTML markers!	
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
