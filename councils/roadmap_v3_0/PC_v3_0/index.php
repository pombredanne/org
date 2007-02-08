<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "Eclipse 2007 Project Plans";
$pageKeywords	= "technology, planning, foundation";
$pageAuthor		= "The Eclipse Foundation";

ob_start();
?>		

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
  were late (specifically, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=109230">bugs 109230</a> and <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=130844">130844</a>)
  and the <a href="http://www.eclipse.org/projects/dev_process/project-status-infrastructure.php">project status instructure files</a> for most projects.
  Consequently, the information in this year's roadmap is fairly sparse - the reader
  is directed to the project's home pages for additional information.
  </p>
  <h1>Europa</h1>
  <p>The big project planning effort this year is around the <a href="http://wiki.eclipse.org/index.php/Europa_Simultaneous_Release">Europa Simultaneous Release</a>, the follow-up to the Callisto Simultaneous Release of 2006.
  </p>
  <p>The goal of the Europa Simultaneous Release is to release all the major Eclipse projects at the same time:<ul>
  <li><a href="/ajdt/">AJDT</a>
  <li><a href="/birt/">Business Intelligence and Reporting Tools (BIRT)</a>
  <li><a href="/buckminster/">Buckminster</a>
  <li><a href="/cdt/">C/C++ Development Tooling (CDT)</a>
  <li><a href="/corona/">Corona</a>
  <li><a href="/dash/">Eclipse Monkey</a>
  <li><a href="/dltk/">Dynamic Language Toolkit (DLTK)</a>
  <li><a href="/dspd/dd/">Device Software Development Platform, Device Debugging</a> 
  <li><a href="/dspd/tm/">Device Software Development Platform, Target Management</a>
  <li><a href="/datatools/">Data Tools Platform (DTP)</a>
  <li><a href="/ecf/">Eclipse Communications Framework (ECF)</a>
  <li><a href="/emf/">Eclipse Modeling Framework (EMF)</a>
  <li><a href="/emft/">EMF Technology (EMFT)(OCL, Query, Transaction, Validation, JET)</a>
  <li><a href="/gef/">Graphical Editor Framework (GEF)</a>
  <li><a href="/gmf/">Graphical Modeling Framework (GMF)</a>
  <li><a href="/mdt/">Modeling Development Tools (MDT)</a>
  <li><a href="/mylar/">Mylar</a>
  <li><a href="/eclipse/">Platform</a>
  <li><a href="/tptp/">Test and Performance Tools Platform (TPTP)</a>
  <li><a href="/webtools/">Web Tools Platform (WTP)</a>
  <li><a href="/stp/">SOA Tools Platform</a>
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
  <li><a href="#DSDPDD">Device Software Development Platform, Device Debugging</a> 
  <li><a href="#DSDPTM">Device Software Development Platform, Target Management</a>
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
to the <a href="https://bugs.eclipse.org/bugs">bugzilla database</a>. The
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

<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=132031">132031</a>]</p>

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
<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=151903">151903</a>]</p>

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

<h3>The Eclipse Project DRAFT 3.3 Plan</h3>

Last revised 14:35 EST September 4, 2006 
  (<img src="new.gif" alt="(new)" border="0" height="12" width="12">
  marks interesting changes)


<p><i>&nbsp;&nbsp;&nbsp; Please send comments about this draft plan to the</i>
  <a href="mailto:eclipse-dev@eclipse.org">eclipse-dev@eclipse.org</a>
  <i>developer mailing list.</i>
</p>
<p>This document lays out the feature and API set for the next feature release 
  of the Eclipse SDK after 3.2, designated release 3.3. 
</p>
<ul>
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
<p>The remainder of the plan consists of plan items for all of the sub-projects under 
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
    tagged "R3_3" in the Eclipse Project <a href="http://dev.eclipse.org/viewcvs/">CVS 
    repository</a>.</li>
  <li>Eclipse SDK (runtime binary and SDK for Equinox, Platform, JDT, and PDE) (downloadable).</li>
  <li>Eclipse Platform (runtime binary and SDK for the Equinox and Platform only) (downloadable).</li>
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
  <li> Thursday Aug. 10, 2006 - Milestone 1 (3.3 M1) - stable build</li>
  <li> Friday Sep. 22, 2006 - Milestone 2 (3.3 M2) - stable build</li>
  <li> Friday Nov. 3, 2006 - Milestone 3 (3.3 M3) - stable build</li>
  <li> Friday Dec. 15, 2006 - Milestone 4 (3.3 M4) - stable build</li>

</ul>
<p>Our target is to complete 3.3 in late June 2007. All release deliverables will be available
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
  
  With the exception of a small set of planned features that
  actually require Java SE 5 APIs (most notably, the support for
  Annotation Processing and JUnit 4), the 3.3 release of the Eclipse
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
  of popular combinations of operating system and Java Platform; 
  these are our <em>reference platforms</em>. Eclipse undoubtedly runs fine in 
  many operating environments beyond the reference platforms we test. However, 
  since we do not systematically test them we cannot vouch for them. Problems 
  encountered when running Eclipse on a non-reference platform that cannot be recreated 
  on any reference platform will be given lower priority than problems with running 
  Eclipse on a reference platform.</p>

<p>The Eclipse SDK 3.3 is tested and validated on the following reference 
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

        Sun Java 2 Standard Edition 5.0 Update 6<br>for Microsoft Windows
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
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">BEA JRockit 5.0,<br>for Microsoft Windows
      </td>
    </tr>
    
    <tr>
      <td width="205">Microsoft Windows</td>

      <td width="59">XP</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>
      <td width="453"> 
        Sun Java 2 Standard Edition 1.4.2_10<br>for Microsoft Windows
      </td>
    </tr>
    
    <tr>

      <td width="205">Microsoft Windows</td>
      <td width="59">XP</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>
      <td width="453">
        IBM 32-bit SDK for Windows,<br>Java 2 Technology Edition 1.4.2 service release 3
      </td>

    </tr>
	
	    <tr>
      <td width="205">Microsoft Windows</td>
      <td width="59">XP</td>
      <td width="76">Intel x86</td>
      <td width="59">Win32</td>
      <td width="453">

        <img src="new.gif" alt="(new)" border="0" height="12" width="12">BEA JRockit 1.4.2,<br>for Microsoft Windows
      </td>
    </tr>

    		<tr>
      <td width="205">Red Hat Enterprise Linux</td>
      <td width="59">WS 4</td>
      <td width="76">Intel x86</td>

      <td width="59">GTK</td>
      <td width="453">
        Sun Java 2 Standard Edition 5.0 Update 6<br> for Linux x86</td>
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
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">BEA JRockit 5.0,<br> for Linux x86</td>

    </tr>
    
    <tr>
      <td width="205">Red Hat Enterprise Linux</td>
      <td width="59">WS 4</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK</td>
      <td width="453">

        Sun Java 2 Standard Edition 1.4.2_10<br>for Linux x86
      </td>
    </tr>
    
    <tr>
      <td width="205">Red Hat Enterprise Linux</td>
      <td width="59">WS 4</td>
      <td width="76">Intel x86</td>

      <td width="59">GTK</td>
      <td width="453">
        IBM 32-bit SDK for Linux on Intel architecture,<br>Java 2 Technology Edition 1.4.2 service release 3
      </td>
    </tr>
	
	    <tr>
      <td width="205">Red Hat Enterprise Linux</td>
      <td width="59">WS 4</td>

      <td width="76">Intel x86</td>
      <td width="59">GTK</td>
      <td width="453">
        <img src="new.gif" alt="(new)" border="0" height="12" width="12">BEA JRockit 1.4.2,<br>for Linux x86
      </td>
    </tr>   
    

    
    <tr>
      <td width="205">SUSE Linux Enterprise Server</td>

      <td width="59">9</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK</td>
      <td width="453">
        Sun Java 2 Standard Edition 1.4.2_10<br>for Linux x86</td>
    </tr>

    
    <tr>
      <td width="205">SUSE Linux Enterprise Server</td>
      <td width="59">9</td>
      <td width="76">Intel x86</td>
      <td width="59">GTK</td>
      <td width="453">
        IBM 32-bit SDK for Linux on Intel architecture,<br>Java 2 Technology Edition 1.4.2 service release 3
      </td>

    </tr>
    
    <tr>
      <td width="205">Sun Solaris</td>
      <td width="59">10</td>
      <td width="76">SPARC</td>
      <td width="59">GTK</td>
      <td width="453">

        Sun Java 2 Standard Edition 1.4.2_10<br>for Solaris SPARC</td>
    </tr>
    
    <tr>
      <td width="205">HP HP-UX</td>
      <td width="59">11i</td>
      <td width="76">hp9000<br>PA-RISC</td>

      <td width="59">Motif</td>
      <td width="453">
        HP-UX JDK for the Java 2 Platform Standard Edition for 1.4.2_09
      </td>
    </tr>
    
    <tr>
      <td width="205">IBM AIX 5L</td>
      <td width="59">5.2</td>

      <td width="76">Power</td>
      <td width="59">Motif</td>
      <td width="453">
        IBM 32-bit SDK for AIX,<br>Java 2 Technology Edition 1.4.2 service release 3
      </td>
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

    
    <tr>
      <td width="205">Red Hat Enterprise Linux</td>
      <td width="59">WS 4</td>
      <td width="76">Power</td>
      <td width="59">GTK</td>
      <td width="453">
        IBM 32-bit SDK for Linux on pSeries architecture, <br>Java 2 Technology Edition 1.4.2 service release 3
      </td>

    </tr>

    <tr>
      <td width="205">SUSE Linux Enterprise Server</td>
      <td width="59">9</td>
      <td width="76">Power</td>
      <td width="59">GTK</td>

      <td width="453">
        IBM 32-bit SDK for Linux on pSeries architecture, <br>Java 2 Technology Edition 1.4.2 service release 3
      </td>
    </tr>
    
    <tr>
      <td width="205">SUSE Linux Enterprise Server</td>
      <td width="59">9</td>
      <td width="76">Power</td>

      <td width="59">GTK</td>
      <td width="453">
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
  Photon window system, and IBM J9 VM version 2.0. Eclipse 3.3 on Windows or Linux 
  can be used to cross-develop QNX applications. (Eclipse 3.3 is unavailable on QNX 
  because there is currently no 1.5 J2SE for QNX.)</p>
  
<h4>Internationalization</h4>

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

<h4>BIDI support</h4>

<p>SWT fully supports BIDI on Windows. On Linux GTK, SWT supports entering 
  and displaying BIDI text. Within these limitations, the Eclipse
  SDK tools are BIDI enabled.</p>
  
<h3><a name="Compatibility"></a>Compatibility with Previous Releases</h3>

<h3>Compatibility of Release 3.3 with 3.2</h3>

<p>Eclipse 3.3 will be compatible with Eclipse 3.2 (and, hence, with 3.1 and 3.0).</p>
<p>
  <strong>API Contract Compatibility:</strong> Eclipse SDK 3.3 will be upwards contract-compatible 
  with Eclipse SDK 3.2 except in those areas noted in the 
  <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.platform.doc.isv/porting/eclipse_3_3_porting_guide.html" target="_top">
    <em>Eclipse 3.3 Plug-in Migration Guide</em>
  </a>. 
  Programs that use affected APIs and extension points will need to be ported to
  Eclipse SDK 3.3 APIs. Downward contract compatibility is not supported.
  There is no guarantee that compliance with Eclipse SDK 3.3 
  APIs would ensure compliance with Eclipse SDK 3.2 APIs. Refer to 
  <a href="http://wiki.eclipse.org/index.php/Evolving_Java-based_APIs">
    <em>Evolving Java-based APIs</em>

  </a> for a discussion of the kinds of API changes that maintain 
  contract compatibility.
</p>
<p><strong>Binary (plug-in) Compatibility:</strong> Eclipse SDK 3.3 will be upwards binary-compatible 
  with Eclipse SDK 3.2 except in those areas noted in the
  <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.platform.doc.isv/porting/eclipse_3_3_porting_guide.html" target="_top">
    <em>Eclipse 3.3 Plug-in Migration Guide</em>
  </a>. 
  Downward plug-in compatibility is not supported. Plug-ins for Eclipse SDK 3.3
  will not be usable in Eclipse SDK 3.2. Refer to
  <a href="http://wiki.eclipse.org/index.php/Evolving_Java-based_APIs">
    <em>Evolving Java-based APIs</em>

  </a> for a discussion of the kinds of API changes that maintain 
  binary compatibility. 
</p>
<p><strong>Source Compatibility:</strong> Eclipse SDK 3.3 will be upwards source-compatible 
  with Eclipse SDK 3.2 except in the areas noted in the 
  <a href="http://dev.eclipse.org/viewcvs/index.cgi/%7Echeckout%7E/org.eclipse.platform.doc.isv/porting/eclipse_3_3_porting_guide.html" target="_top">
    <em>Eclipse 3.3 Plug-in Migration Guide</em>
  </a>. 
  This means that source files written to 
  use Eclipse SDK 3.2 APIs might successfully compile and run against Eclipse 
  SDK 3.3 APIs, although this is not guaranteed. Downward source compatibility 
  is not supported. If source files use new Eclipse SDK APIs, they will not be 
  usable with an earlier version of the Eclipse SDK. 
</p>
<p><strong>Workspace Compatibility:</strong> Eclipse SDK 3.3 will be upwards workspace-compatible 
  with Eclipse SDK 3.2 unless noted. This means that workspaces and projects created 
  with Eclipse SDK 3.2, 3.1 or 3.0 can be successfully opened by Eclipse SDK 3.3 and 
  upgraded to a 3.3 workspace. This includes both hidden metadata, which is localized 
  to a particular workspace, as well as metadata files found within a workspace 
  project (e.g., the .project file), which may propagate between workspaces via 
  file copying or team repositories. Individual plug-ins developed for Eclipse 
  SDK 3.3 should provide similar upwards compatibility for their hidden and visible 
  workspace metadata created by earlier versions; 3.3 plug-in developers are responsible 
  for ensuring that their plug-ins recognize 3.2, 3.1, 3.0, 2.1, and 2.0 metadata and 
  process it appropriately. User interface session state may be discarded when 
  a workspace is upgraded. Downward workspace compatibility is not supported. 
  A workspace created (or opened) by a product based on Eclipse 3.3 will be unusable 
  with a product based an earlier version of Eclipse. Visible metadata files created 
  (or overwritten) by Eclipse 3.3 will generally be unusable with earlier versions 
  of Eclipse. 

</p>
<p><strong>Non-compliant usage of API's</strong>: All non-API methods and classes, and
  certainly everything in a package with "internal" in its name, are
  considered implementation details which may vary between operating environment
  and are subject to change without notice. Client plug-ins that directly depend
  on anything other than what is specified in the Eclipse SDK API are inherently
  unsupportable and receive no guarantees about compatibility within a single
  release much less with earlier releases. Refer to
  <a href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">
    <em>How to Use the Eclipse API</em>
  </a> for information about how to write compliant plug-ins.
</p>

<h3>Themes and Priorities</h3>
<p>
  The PMC of the Eclipse Project has identified six major areas of work, 
  that will be the priorities for this development cycle. These areas will
  address the major themes identified by the Eclipse Requirements Council 
  (<a href="http://www.eclipse.org/org/councils/roadmap_v2_0/themes_v2_0.php">Themes and Priorities v2.0</a>).

</p>
<p>
  Although there are four projects under the top-level Eclipse Project, there
  is a significant amount of commonality and shared effort between them. 
  In general, many plan items involve coordinated changes to multiple
  components, and thus attempting to separate the items into
  sections based on sub-project leads to artificial distinctions between
  them (e.g. Platform Text vs. JDT Text, Platform Debug vs.
  JDT Debug, etc.).
</p>
<p>
  In order to provide the clearest focus for our development effort, we
  have organized the items below into sections based on the work area they
  are intended to address. Items that apply to multiple
  work areas are categorized based on where the most effort is expected
  to occur. In all cases, the items listed reflect new features of Eclipse
  or areas where existing features will be significantly reworked. Numbers in
  parentheses link to bugzilla problem reports where progress on that 
  item can be tracked and discussed.
</p>
<p>
  The major work areas are:
</p>
<ul>
  <li><a href="#Components">Components</a></li>

  <li><a href="#Consumability">Consumability</a></li>
  <li><a href="#Java">Java</a></li>
  <li><a href="#Vista">Vista</a>
  <li><a href="#UIEvolution">UI Evolution</a>
  <li><a href="#API">API</a>
</ul>

<!-- Start of Sections by Work Area -->

<h3><a name="Components">Components</a></h3>
<p>
  This work will enhance Eclipse's use of, and support for, software components,
  covering everything from component programming models such as Declarative
  Services, API tools, incremental building and fine-grained function delivery.
</p>

<h4>Committed Items (Components)</h4>
<blockquote> 

  <p><i>None at this time.</i></p>
  
</blockquote>

<h4>Proposed Items (Components)</h4>
<blockquote> 

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Improved support for provisioning.</strong>
    Eclipse has advanced quite quickly with new use-cases (RCP, Equinox, 
    server side, etc.) and new technologies (e.g., OSGi and OSGi's MEG) coming
    into the picture.  To date Update Manager has not been enhanced to support
    or exploit these changes. In 3.3 we will investigate provisioning support
    for enhanced workflows, the ability to update the so-called "root files"
    (e.g., startup.jar, eclipse.exe), improved efficiency (download and disk
    footprint), support for right-grained discovery and acquisition of function
    as well as integration with differing repository types. This effort also
    includes enhancements to the tooling around provisioning.
    [Update]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154077">154077</a>) 
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>API tools.</strong>

    More components means more API and an elevated need for solid APIs,
    evolved but compatible APIs and the correct and understood use of APIs.
    This cannot be achieved without supporting tooling.  Today PDE includes
    sophisticated support for classpath management and access rule management
    based on information in the manifest of bundles to facilitate the capture
    of package and class references.  In 3.3. we will expand this to cover
    finer-grained API contracts (e.g., clients should not call foo() or
    extend Bar).  Similarly, developers will be given effective mechanisms
    for discovering, visualizing and minimizing dependencies in their code, 
    bundles produced by third parties and non-bundled code libraries.  Tooling in support
    of checking and managing the evolution of component and package version numbers
    will also be supplied.
    [PDE]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154078">154078</a>) 
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Bundle/Module Development Tools.</strong>
    In 3.1 and 3.2 PDE made gigantic strides in support for
    traditional OSGi bundle development. Even still, in 3.3. we will improve
    various workflows and classpath management strategies to promote the
    development of robust and independent right-grained components. This
    covers everything from increased quick-fix and manifest editing support
    to deeper integration with JDT (e.g., support for searching JARs that
    are not in the workspace without implicitly importing the JARs). In
    addition, as JSR 291 evolves in the Java SE 6 time frame, PDE will be
    there to provide developer support. 3.3 will include tooling around OSGi
    Declarative Services and the new application model as well as improved
    support for launching other frameworks, Java applications with bundle
    based classpaths and "hot launching" frameworks.
    [PDE]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154079">154079</a>) 
</p>
    

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Target Provisioning.</strong>
    Currently, users wanting additional function supplied by others must
    manually acquire and install these additional bundles in their target
    platform.  This process is tiresome and error-prone.  As an extension
    to the proposed provisioning work, we will add the ability to provision
    targets directly from bundle repositories as well as from other locations
    on the local machine.  As part of this the mechanism by which source is
    packaged, acquired and looked up will be reviewed and streamlined.
    [Update]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154081">154081</a>) 
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Bundle Management.</strong>
    Managing even modest systems of bundles can be complex and error prone.  There are 
    several places in PDE where developers need to list or select sets of bundles (e.g., launch configurations, 
    target setup, etc).  In many cases the environment already includes relevant grouping constructs (e.g., features,
    working sets, bundle groups).  PDE should surface these to developers in a clear, consistent and pervasive 
    fashion.
    [PDE]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154082">154082</a>) 

</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Incremental Plug-in Build.</strong>
    With the increase in plug-ins coming from and going to third parties the
    development cycle needs to be more incremental.  In the Eclipse project
    itself we have started to consume pre-built plugins such as ICU4J and SSH2.
    This trend is likely to continue as, for example, Apache seeks to deliver
    their libraries as bundles and more people look to consume individual
    bundles/components from Equinox and similar projects.  As such, the build
    process should support the incremental building of plug-ins (that is
    building plugins individually) based on a set of pre-built plugins kept
    in some sort of provisioning repository.  Plug-ins coming out of the build
    should feed into said repository to be used as a base for future builds.
    This ability will in turn enable the more frequent building of whole
    systems (since you build only what has changed) and simplify incremental,
    milestone and release build cycles.
    [PDE Build]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154083">154083</a>) 
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Application Model.</strong>

    The OSGi R4 MEG specification includes an application model that significantly
    decouples the application from the rest of the system.  The net result is OSGi
    (and thus Eclipse) as a more flexible application container, for example allowing
    multiple applications to run concurrently and improved lifecycle around the
    application.  These characteristics are important both to the manageability of
    the system (e.g., simplifying and clarifying the shutdown process) but also to
    various RCP scenarios such as Kiosk-mode and Application Container models.
    In 3.3 we will implement and adopt the MEG application model.
    [Equinox]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154084">154084</a>) 
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>OSGi R5 Specification Work.</strong>
    Much of the success Eclipse has enjoyed with OSGi comes from the fact that the
    Eclipse community has played a very active role in the evolution of various
    OSGi specifications.  With increased interest in OSGi and Java modularity
    (see JSR 277, JSR 291 and JSR 232) this participation has never been more important.
    In addition to promoting Eclipse use-cases and the evolution of these standards
    to benefit Eclipse, there are a number of gaps in the OSGi specifications that
    Eclipse is currently filling in specific ways and should be addressed in R5.
    For example the management of API in metadata (x-friends and x-internal),
    integration techniques for third party and legacy code, in-place execution of
    bundles, basic notions of data location, etc.  The Equinox team will continue
    their active participation in these specification processes and keep Eclipse
    on the leading edge of Java componentization.
    [Equinox]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154085">154085</a>) 
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Server side support.</strong>
    First it was tools, then it was applications, now server-side programmers are
    waking up to the power of componentization delivered by Eclipse and OSGi.
    In the 3.2 cycle an Equinox incubator was started to investigate the use of
    Eclipse on the server.  It started as a very modest servlet bridge allowing
    Eclipse to run inside a servlet engine and handle servlet requests and has been
    evolving into a full-blown appreciation of what it means to componentize server
    software.  There are many possible directions here and there is no way the
    Equinox team proper will be able to track, support and participate in all.
    However we will spend time understanding the basic requirements as they apply
    to the base framework and add-on services and look to support the use-cases
    presented by various other Eclipse projects that are adopting Eclipse on the
    server (e.g., ECF, ECP, Corona).
    [Equinox]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154087">154087</a>) 
</p>

</blockquote>

<h4>Defered Items (Components)</h4>
<blockquote> 

  <p><i>None at this time.</i></p>

  
</blockquote>

<p>(End of items for Components.)</p>

<h3><a name="Consumability">Consumability</a></h3>
<p>
  This work will make it easier for users to get Eclipse, install it on
  their systems, and configure it for their use. It will also enhance
  the error handling and reporting mechanisms to make it easier to service
  Eclipse in the field. Finally, it will improve the scalability and
  performance of Eclipse, to provide a better experience for users working
  with many plug-ins and large data sets.
</p>

<h4>Committed Items (Consumability)</h4>
<blockquote> 

  <p><i>None at this time.</i></p>

  
</blockquote>

<h4>Proposed Items (Consumability)</h4>
<blockquote> 

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Improve the launching experience.</strong>
    We will look for ways to improve the current launching experience. This
    may include efforts such as using SWT to build the splash screen,
    improving the look and utility of the workspace launcher, supporting
    "fast switching" between workspaces, and simplifying the experience for
    first-time users.
    [SWT, Runtime, Workspace, UI, UA]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154088">154088</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
   <strong>Improve serviceability.</strong>
   When an end user encounters a problem with Eclipse, it is important for
   support teams to be able to diagnose the root cause of the failure, and
   identify the failing plug-in. Eclipse should have enhanced error reporting
   tools that make it easy for end users to report problems. Tools should be
   available at all times, so that knowledgeable users can diagnose
   unexpected behavior such as slow-downs or exceptional memory use. Error
   handling is done in a variety of ways within the platform which are not
   extensible to RCP applications. An improved story would allow for the
   inclusion of application defined error support (such as a link to a support centre 
   for the product) and remote monitoring/inspection of system health and would 
   tie the current error reporting story together into a solution with a more 
   consistent look and fewer error reporting paths for developers.
   [Runtime, UI]
   (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154090">154090</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Managing and sharing settings.</strong>
    Currently settings are either scoped at the workbench/workspace level or the
    project level. However, there are cases where associating settings with
    other scopes, such as a working set or perspective, would be beneficial.
    Similarly, a product should be able to specify the default settings for a 
    particular perspective. We will also look for ways to simplify how we share 
    settings and other interesting state, such as breakpoints, bookmarks, 
    perspectives, key bindings, etc.
    [Runtime, Workspace, UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154097">154097</a>)

</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Customization.</strong>
    Eclipse lacks customization capabilities aimed at end users and product
    packagers. More generally, component development and use is fraught with
    producer/consumer problems. Component producers implement solutions that
    address a number of use-cases and scenarios but inevitably consumers come
    up with additional, sometimes quite divergent requirements. We will
    investigate mechanisms and facilities that allow component consumers to
    "override" or replace metadata specifications in the components they are
    consuming.  Such mechanisms would, for example, allow consumers to configure
    menus, tool bars, and perspectives of their Eclipse installation as well
    as refine plug-in dependency declarations.
    [Runtime, UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154099">154099</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Platform level proxy settings.</strong>

    There are at least three proxy settings pages in Callisto. We will work with
    the Eclipse community to make sure that the core capabilities from these
    pages are made available at the Platform level, as a single settings
    page that can be consumed by all.
    [Runtime, Team, Update, UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154100">154100</a>)
 </p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>GTK Printing.</strong>
    We will provide printing support on GTK. 
    [SWT]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154101">154101</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Ship Finer-grained Components.</strong>
    The Eclipse project produces three major outputs, the Platform, JDT and PDE.
    These are exposed as zips on download sites and features on update sites.
    Those wanting to get just part of one of these components (e.g., Help,
    Update, JDT Core) must first discover which zip or feature contains the
    desired function, acquire that container and finally identify and extract
    the desired plug-ins.  To make this easier we will revise the grouping structure 
    to capture more independent and re-usable components. 
    [All components]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154102">154102</a>) 
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Search based navigation.</strong>
    Because traditional navigation-by-browsing does not scale to large data
    sets, we should generalize and extend the existing search-based
    rapid navigation mechanisms (e.g. "Quick Find Class").
    [UI, UA]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154104">154104</a>)

</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Performance focus.</strong>
    We must continue to improve overall performance and memory consumption,
    with a particular focus on working with large numbers of plug-ins and 
    large amounts of data.
    [All components]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154106">154106</a>)
</p>

</blockquote>

<h4>Defered Items (Consumability)</h4>

<blockquote> 

  <p><i>None at this time.</i></p>
  
</blockquote>

<p>(End of items for Consumability.)</p>

<h3><a name="Java">Java</a></h3>
<p>
  The Eclipse Java Development Tools are the premier Java development
  environment in the industry today. We must address the new capabilities
  of Java SE 6 and continue to refine and extend the features JDT provides to
  maintain its leadership position.
</p>

<h4>Committed Items (Java)</h4>

<blockquote> 

  <p><i>None at this time.</i></p>
  
</blockquote>

<h4>Proposed Items (Java)</h4>
<blockquote> 

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Enhance launching support.</strong>
    We should simplify the launch experience for novice users with single
    click context sensitive launching, simple launch configurations
    managed via resource properties, and user configurable toolbar buttons
    to invoke favorite launch configurations. For advanced users, we should
    allow plug-ins to contribute additional pages to launch configurations
    so that plug-in specific information (such as profiling and code
    coverage settings) can be associated with each configuration.
    [Debug]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154107">154107</a>)

</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>More refactorings.</strong>
    We will finish the 'Fix Deprecation' refactoring that didn't make it
    into 3.2, and add the new refactoring 'Replace Invocation'. More
    refactoring API will be offered in the plug-in org.eclipse.jdt.core.manipulation
    so the refactoring infrastructure can be used with a UI. 
    [JDT UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154108">154108</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Extend Clean Up.</strong>

    Add formatting, organize import and sort members to 'Clean up',
    offer clean up profiles, and invoke clean up on user defined events. 
    [JDT UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154109">154109</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Enhance Annotation Processing Tooling.</strong>
    An APT command-line tool should be provided as a complement to the batch
    compiler and/or Ant javac adapter, in addition to the Java IDE support
    within release 3.2. APT should also support the new
    standard Annotation Processing API (JSR 269) introduced in Java SE 6, as
    opposed to the provisional API from Sun introduced in Java SE 5 that is 
    currently implemented. Also, the APT integration in IDE should be improved
    in various areas, including editor reconciling and code assist. The editor
    reconciling experience should work correctly even if the Java builder is
    not active. Currently, if a processor generates types, those types are
    ignored during reconcile. Instead, they should be modeled using working
    copies, and provide the same level of functionality as JDT when autobuild
    is turned off. Also, on the code-assist front, we should provide a simple API
    for processors to supply domain specific knowledge to completions inside
    annotation values.
    [JDT APT]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154110">154110</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Compiler API (JSR 199).</strong>
    In order to conform to the forthcoming tool API for compilers (JSR 199),
    the Eclipse compiler should provide a front-end implementing the tool API
    included in Java SE 6. 
    [JDT Core]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154111">154111</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Add more class file targets for compiler.</strong>
    The compiler should support more configurable class file targets, including
    CLDC 1.0, CLDC 1.1 and possibly JSR 14 (generics experimentation for 1.4
    VMs). 
    [JDT Core]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154113">154113</a>)

</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Support for Java SE 6 debug features.</strong>
    Implement new Java SE 6 features in the Eclipse Java Debug Interface (JDI)
    client including support for heap walking (retrieve instance counts, all
    intances of specific types, and all references to an object), forcing an
    early return from a method with a specific return value, breakpoints for
    monitor acquisition and release, access to the constant pool, and improved
    class prepare event filtering.
    [JDT Debug]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154115">154115</a>)
</p>

</blockquote>

<h4>Defered Items (Java)</h4>

<blockquote> 

  <p><i>None at this time.</i></p>
  
</blockquote>

<p>(End of items for Java.)</p>

<h3><a name="Vista">Vista</a></h3>
<p>
  Microsoft Vista is a significant new desktop platform that we expect
  will become available during this development cycle. We should fully
  support running the current, win32-based version of Eclipse on
  Vista. We should also port SWT to WinFX and the Windows Presentation
  Framework.
</p>

<h4>Committed Items (Vista)</h4>

<blockquote> 

  <p><i>None at this time.</i></p>
  
</blockquote>

<h4>Proposed Items (Vista)</h4>
<blockquote> 

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Fully support the win32 version of SWT on Vista.</strong>
    We should ensure that applications built on the win32 version of
    SWT work as well as any other win32 API based application on 
    Vista. This will increase our testing and support effort and potentially
    require new development to work around platform specific differences. [SWT]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154116">154116</a>)

</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Port SWT to WinFX and WPF.</strong>
    We should port SWT to WinFX and the Windows Presentation Framework. Since
    64-bit systems are becoming increasingly prevalent on the desktop, we should
    ensure that this port is both 64-bit and 32-bit capable.
    [SWT]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154117">154117</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Generalize the win32 version of SWT to win64.</strong>

    We should merge the work being done by the Eclipse community to implement
    a win64 implementation of SWT into the main win32 code base. This will
    require extensive review of the new code and a significant effort to merge
    and test the pervasive changes.
    [SWT]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154118">154118</a>)
</p>

</blockquote>

<h4>Defered Items (Vista)</h4>
<blockquote> 

  <p><i>None at this time.</i></p>
  
</blockquote>

<p>(End of items for Vista.)</p>

<h3><a name="UIEvolution">UI Evolution</a></h3>
<p>
  The goal of this work is to provide a better basis for building modern,
  rich user-interfaces, by addressing areas where more flexibility and
  more consistency are needed. We will use these capabilities to refine 
  the user-interface of the Eclipse IDE. In addition, we will implement
  of the most requested missing IDE productivity features.
</p>

<h4>Committed Items (UI Evolution)</h4>
<blockquote> 

  <p><i>None at this time.</i></p>
  
</blockquote>

<h4>Proposed Items (UI Evolution)</h4>

<blockquote> 

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Implement missing text editor productivity features.</strong>
    We should provide some of the long awaited productivity features that
    the community has voted for. Examples include double-click-drag to
    select multiple words, triple-click, extensible hyperlink support
    and spell checking. We should also improve the current
    search/replace dialog. [Platform Text, Platform UI, SWT]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154119">154119</a>)
</p>
  
<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Improve workbench usability.</strong>

    We should review how users interact with the workbench, such as
    how editors, views, and other screen real-estate are managed
    (e.g. fix the broken minimize), and find ways to make this a better
    experience for them. This includes improving the new trim
    support by allowing the end user to hide/show, close and otherwise
    configure trim items, improving navigation from hovers (e.g. quick diff),
    making fast views more flexible (fast views on all sides, fast view
    orientation affinity, fast view bars show text option).
    [Platform UI, Platform Text, JDT UI, JDT Text]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154120">154120</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Improve multi-instance view management.</strong>
    Views such as Search and Synchronize use a drop-down menu to manage 
    multiple pages. Another possibility would be to use multiple view instances. 
    However, the presentation and management of these two approaches are different.
    Multiple view instances should support different view presentations. That is, 
    the user (or product) should be able to decide whether multiple views use tabs 
    or a drop-down menu. There are also shortcomings in multi-view management 
    (e.g., views are managed at the perspective level but some tooling may require 
    the ability to close a particular view in all perspectives).
    [UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154121">154121</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Investigate background saving of editors.</strong>
    Modern applications allow editing sessions to be saved in the background,
    allowing the user to continue editing or close the editor without waiting.
    We should investigate whether this style of interaction can be built
    on top of the Eclipse editor framework. [Platform Text, JDT Text, Platform UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154122">154122</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>JFace Enhancements.</strong>

    Ensure that the reusable components in JFace fully support the SWT
    widget set, such as support for the new custom draw capabilities
    of the Table and Tree widgets. Also, implement some of the components
    that we do not use in the SDK currently that the community is 
    requesting. Some examples include: spinners, secure editors (such as
    password entry fields) fields that enforce a format (such as fields for
    currency and percentages), etc.
    [Platform UI, SWT]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154123">154123</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Mozilla Everywhere.</strong>
    For situations where the existing, platform-browser-based Browser
    control is not sufficient, we should support embedding of Mozilla on all
    platforms. This would allow developers to implement code that worked
    against a common back end, so that they could access a common DOM, or
    surface the browser's HTML editing support. 
    [SWT]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154124">154124</a>)
</p>

</blockquote>

<h4>Defered Items (UI Evolution)</h4>
<blockquote> 

  <p><i>None at this time.</i></p>
  
</blockquote>

<p>(End of items for UI Evolution.)</p>

<h3><a name="API">API</a></h3>
<p>
  This work area deals specifically with issues concerning the application
  programming interfaces provided by the Eclipse Project. We will identify
  API whose function has been superceded, and ensure that the SDK does
  not depend on this API. We will encourage adoption within the SDK of
  some of the more recent additions to Eclipse, such as
  the command framework, Equinox preferences, tabbed
  properties and the common navigator. We will work with the community to
  ensure that needed functionality is made available as API, when it reaches
  appropriate levels of maturity.

</p>

<h4>Committed Items (API)</h4>
<blockquote> 

  <p><i>None at this time.</i></p>
  
</blockquote>

<h4>Proposed Items (API)</h4>
<blockquote> 

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Generalize editor annotation and ruler support.</strong>

    We should allow plug-ins to contribute additional vertical rulers
    to show additional information (e.g. code coverage). We should
    support live annotate "color by age" in addition to "color by
    contributor".
    [Platform Text]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154125">154125</a>)
</p>
  
<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Adopt the Eclipse File System.</strong>
    We should ensure that use of the Eclipse File System is pervasive
    in the platform, and remove any barriers that prevent it from being
    more widely adopted by the community. For example, we should provide
    IFileStoreEditorInput and a matching default implementation.
    [Workspace, UI, Platform Text]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154126">154126</a>)
</p>
<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Adopt the new UI features.</strong>

    We should adopt the following items across the entire SDK UI: the new
    command framework, preference initializers, field assist, SWT column
    sort indicators, working sets, tabbed properties view and the common navigator.
    [UI, JDT UI, PDE, Team, Text]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154127">154127</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Provide access to more native controls.</strong>
    We should provide access to more of the native controls that are available
    on each platform, such as date and time pickers, and table header widgets. 
    In addition, we should enable more features of existing native controls,
    such as table wrapping on Windows.
    [SWT, UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154128">154128</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Custom widget API support.</strong>
    Investigate ways to simplify the process of writing custom widgets,
    including making available, as API, some of the currently internal
    capabilities of the custom widgets implemented in the SDK, such as
    drag under feedback for drag & drop.
    [SWT]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154129">154129</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Finish re-work of commands and key bindings.</strong>

    In 3.2, we built some important infrastructure that will allows us to
    rationalize our commands and key bindings story. We need to complete this
    effort, making sure the new story supports all of the existing
    functionality (e.g action sets), and migrate over to the new support.
    We also need to make it easier to add and edit key bindings.
    [UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154130">154130</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>JFace data binding.</strong>
    In 3.2, we developed a data binding framework for JFace but did not
    make it generally available. We should continue to work towards providing a 
    public API for this framework and investigate how it will be delivered and
    used within the SDK. 
    [UI]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154132">154132</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Improve compare.</strong>
    The Compare plugin has not undergone much work in the last few releases
    and is showing it. From an architectural standpoint, there are several
    Compare internals that need to be made API in order to properly support
    clients and there are also several polish items that have been identified
    by Eclipse development teams. In addition, new ISaveable support was added
    in 3.2 and we should investigate integrating this into Compare. From a
    usability standpoint, the compare editor uses a custom viewer for content
    which appears similar to the related editor but has a reduced capability
    which is often confusing for users. Smaller usability issues involve
    breaking out the outline from the editor into the Outline view. There is
    supported by compare but is not used by Team or other Platform clients.
    [Team]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154133">154133</a>)
</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>Graphics Improvements.</strong>
    The SWT graphics layer should provide support for fractional line widths,
    dashes and fonts, the ability to flatten paths, image loading/saving
    improvements, and other similar enhancements. 
    [SWT]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154134">154134</a>)

</p>

<p>(<img src="new.gif" alt="(new)" border="0" height="12" width="12"> new)
    <strong>APIs for custom debugger integration.</strong>
    Publish public APIs based on the provisional APIs introduced in 3.2 to
    support custom debugger integration. Features include flexible hierarchy
    in debug views; asynchronous, cancellable interactions when retrieving
    content and labels; model-driven view updates; a debug context service
    for retargettable actions, flexible view wiring and pluggable source
    lookup.
    [Platform Debug]
    (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=154135">154135</a>)
</p>


</blockquote>

<h4>Defered Items (API)</h4>

<blockquote> 

  <p><i>None at this time.</i></p>
  
</blockquote>

<p>(End of items for API.)</p>

<!-- End of Sections by Work Area -->

<h3><a name="Appendix1">Appendix 1: Execution Environment by Plug-in</a></h3>

<p>In the table below, the "3.3 EE" ("3.3 Execution Environment") column
indicates the minimum Java class library requirements of each plug-in
for the 3.3 release, where the value is one of:</p>
<table border="0" width="90%">

  <tbody>
    <tr>
      <td align="center"><b>Entry</b></td>
      <td align="left"><b>Meaning</b></td>
    </tr>
    <tr>
      <td>
      <div align="center"><strong>M1.0</strong></div>

      </td>
      <td>OSGi Minimum Execution Environment 1.0 - This is a subset of
      the J2ME Foundation class libraries defined by OSGi to be the base
      for framework implementations. See the OSGi specification for more
      details.</td>
    </tr>
    <tr>
      <td width="9%">
      <div align="center"><strong>M1.1</strong></div>
      </td>
      <td width="91%">OSGi Minimum Execution Environment 1.1 - This is a
      subset of the J2ME Foundation class libraries defined by OSGi to
      be the base for framework implementations. See the OSGi
      specification for more details.</td>

    </tr>
    <tr>
      <td>
      <div align="center"><strong>F1.0</strong></div>
      </td>
      <td>J2ME Foundation 1.0 - indicates that the plug-in can only be
      run on Foundation 1.0 or greater. Note that with the exception of
      some MicroEdition IO classes, Foundation 1.0 is a subset of J2SE
      1.3.</td>
    </tr>
    <tr>

      <td>
      <div align="center"><strong>F1.1</strong></div>
      </td>
      <td>J2ME Foundation 1.1 - indicates that the plug-in can only be
      run on Foundation 1.1 or greater. Note that with the exception of
      some MicroEdition IO classes, Foundation 1.1 is a subset of J2SE
      1.4.</td>
    </tr>
    <tr>
      <td>
      <div align="center"><strong>1.2</strong></div>

      </td>
      <td>J2SE 1.2 - indicates that the plug-in can only be run on JSE
      1.2 or greater.</td>
    </tr>
    <tr>
      <td>
      <div align="center"><strong>1.3</strong></div>
      </td>
      <td>J2SE 1.3 - indicates that the plug-in can only be run on JSE
      1.3 or greater.</td>

    </tr>
    <tr>
      <td>
      <div align="center"><strong>1.4</strong></div>
      </td>
      <td>J2SE 1.4 - indicates that the plug-in can only be run on JSE
      1.4 or greater.</td>
    </tr>
    <tr>

      <td>
      <div align="center"><strong>1.4/1.5</strong></div>
      </td>
      <td>Indicates that the plug-in can run on JSE
      1.4 or greater, but provides enhanced functionality when run on J2SE 5.0.</td>
    </tr>
    <tr>
      <td>
      <div align="center"><strong>1.5</strong></div>

      </td>
      <td>J2SE 5.0 - indicates that the plug-in can only be run on JSE
      5.0 or greater.</td>
    </tr>
    <tr>
      <td>
      <div align="center"><strong>1.6</strong></div>
      </td>
      <td>J2SE 6.0 - indicates that the plug-in can only be run on JSE
      6.0 or greater.</td>

    </tr>
    <tr>
      <td align="center"><b>n/a</b></td>
      <td>Unknown at the time of this revision.</td>
    </tr>
  </tbody>
</table>
<br>
<b>Table of minimum execution environments by plug-in.</b>

<br>
<br>
<table border="1">
  <tbody>
    <tr>
      <td width="290"><strong>Plug-in</strong></td>
      <td width="60">
      <div align="center"><strong>3.3 EE</strong></div>
      </td>

    </tr>
    <tr>
      <td>org.apache.ant</td>
      <td>
      <div align="center">1.2</div>
      </td>
    </tr>
    <tr>

      <td>org.apache.lucene</td>
      <td>
      <div align="center">n/a</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.ant.core</td>

      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.ant.ui</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.compare</td>
      <td>
      <div align="center">n/a</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.core.boot</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.core.commands</td>

      <td>
      <div align="center">F1.0</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.core.expressions</td>
      <td>
      <div align="center">F1.0</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.core.filebuffers</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.core.filesystem</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.core.resources</td>

      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.core.resources.compatibility</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.core.runtime</td>
      <td>
      <div align="center">F1.0</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.core.runtime.compatibility</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.core.variables</td>

      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.debug.core</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.debug.ui</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.help</td>
      <td>
      <div align="center">F1.0</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.help.appserver</td>

      <td>
      <div align="center">F1.0</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.help.base</td>
      <td>
      <div align="center">F1.0</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.help.ui</td>
      <td>
      <div align="center">F1.0</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.help.webapp</td>
      <td>
      <div align="center">F1.0</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.jdt</td>

      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.jdt.core</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.jdt.apt.core</td>
      <td>
      <div align="center">1.5</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.jdt.apt.ui</td>
      <td>
      <div align="center">1.5</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.jdt.debug</td>

      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.jdt.debug.ui</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.jdt.doc.isv</td>
      <td>
      <div align="center">n/a</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.jdt.doc.user</td>
      <td>
      <div align="center">n/a</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.jdt.junit</td>

      <td>
      <div align="center">1.4/1.5</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.jdt.junit.runtime</td>
      <td>
      <div align="center">1.4/1.5</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.jdt.launching</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.jdt.source</td>
      <td>
      <div align="center">n/a</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.jdt.ui</td>

      <td>
      <div align="center">1.4/1.5</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.jface</td>
      <td>
      <div align="center">F1.0</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.jface.text</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.ltk.core.refactoring</td>
      <td>
      <div align="center">1.4/1.5</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.ltk.ui.refactoring</td>

      <td>
      <div align="center">1.4/1.5</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.osgi (system.bundle)</td>
      <td>
      <div align="center">M1.0</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.osgi.services</td>
      <td>
      <div align="center">M1.0</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.osgi.util</td>
      <td>
      <div align="center">M1.0</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.pde</td>

      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.pde.build</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.pde.core</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.pde.doc.user</td>
      <td>
      <div align="center">n/a</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.pde.junit.runtime</td>

      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.pde.runtime</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.pde.source</td>
      <td>
      <div align="center">n/a</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.pde.ui</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.platform</td>

      <td>
      <div align="center">F1.0</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.platform.doc.isv</td>
      <td>
      <div align="center">n/a</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.platform.doc.user</td>
      <td>
      <div align="center">n/a</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.platform.source</td>
      <td>
      <div align="center">n/a</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.platform.source.*</td>

      <td>
      <div align="center">n/a</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.rcp</td>
      <td>
      <div align="center">F1.0</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.rcp.source</td>
      <td>
      <div align="center">n/a</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.rcp.source.*</td>
      <td>
      <div align="center">n/a</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.sdk</td>

      <td>
      <div align="center">n/a</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.search</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.swt</td>
      <td bgcolor="#ffffff">
      <div align="center">M1.0</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.swt.*</td>
      <td bgcolor="#ffffff">
      <div align="center">M1.0</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.team.core</td>

      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.team.cvs.core</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.team.cvs.ssh</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.team.cvs.ssh2</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.team.cvs.ui</td>

      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.team.ui</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.text</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.tomcat</td>
      <td>
      <div align="center">n/a</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.ui</td>

      <td>
      <div align="center">F1.0</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.ui.browser</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.ui.cheatsheets</td>
      <td>
      <div align="center">F1.0</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.ui.console</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.ui.editors</td>

      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.ui.externaltools</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.ui.forms</td>
      <td>
      <div align="center">F1.0</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.ui.ide</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.ui.intro</td>

      <td>
      <div align="center">F1.0</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.ui.navigator</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.ui.navigator.resources</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.ui.presentations.r21</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.ui.views</td>

      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.ui.win32</td>
      <td>
      <div align="center">1.4</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.ui.workbench</td>
      <td>
      <div align="center">F1.0</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.ui.workbench.compatibility</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.ui.workbench.texteditor</td>

      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.update.configurator</td>
      <td bgcolor="#ffffff">
      <div align="center">F1.0</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.update.core</td>
      <td bgcolor="#ffffff">
      <div align="center">F1.0</div>
      </td>
    </tr>

    <tr>
      <td>org.eclipse.update.core.linux</td>
      <td bgcolor="#ffffff">
      <div align="center">F1.0</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.update.core.win32</td>

      <td bgcolor="#ffffff">
      <div align="center">F1.0</div>
      </td>
    </tr>
    <tr>
      <td>org.eclipse.update.scheduler</td>
      <td bgcolor="#ffffff">
      <div align="center">F1.0</div>

      </td>
    </tr>
    <tr>
      <td>org.eclipse.update.ui</td>
      <td>
      <div align="center">F1.0</div>
      </td>
    </tr>

    <tr>
      <td>org.junit (old)</td>
      <td>
      <div align="center">1.4</div>
      </td>
    </tr>
    <tr>
      <td>org.junit (JUnit4)</td>

      <td>
      <div align="center">1.5</div>
      </td>
    </tr>
    <tr>
      <td>startup.jar</td>
      <td>
      <div align="center">F1.0</div>

      </td>
    </tr>
  </tbody>
</table>

<h2><a name="TPTP"></a>Test and Performance Tools Platform (TPTP)</h2>

<h3>Eclipse Test &amp; Performance Tools Platform (TPTP) Project<br>
4.3 Plan (Approved)</h3>
<p>Last revised 
<!--webbot bot="Timestamp" S-Type="REGENERATED" S-Format="%m/%d/%Y %I:%M %p" startspan -->10/23/2006 09:23 PM<!--webbot bot="Timestamp" endspan i-checksum="26061" --> 
Pacific Time (<font face="Arial"><span
 style="background-color: rgb(255, 255, 255);"><img src="http://www.eclipse.org/images/new.gif"
 border="0" height="12">
marks interesting changes since September 2006)</span></font><br>
<br>
<i>&nbsp;&nbsp;&nbsp; Please send comments about this plan to the </i><a
 href="mailto:tptp-pmc@eclipse.org">tptp-pmc@eclipse.org</a>

<i>PMC mailing list.</i></p>
<p>This document lays out the feature and API set for the TPTP 4.3
release. </p>
<ul>
  <li><a href="#Deliverables">Release Deliverables</a> </li>
  <li><a href="#Milestones">Release Milestones</a> </li>
  <li><a href="#TargetOperatingEnvironments">Target Operating
Environments</a> </li>

  <li><a href="#Compatibility">Compatibility with Previous Releases</a></li>
  <li><a href="#Themes">Themes</a></li>
  <li><a href="#Projects">Projects</a></li>
  <li><a href="#Features">Features</a></li>
  <li><a href="#Defects">Defects</a></li>
</ul>
<p>The first part of this plan deals with the important matters of
release deliverables, release milestones, target operating
environments, and release-to-release compatibility.&nbsp; These are all
things that need to be clear for any release, even if no features were
to change.&nbsp; </p>

<p>The remainder of the plan consists of plan items for the four
projects under the TPTP Top-Level Project.&nbsp; Each plan item covers
a feature or API that is to be added to TPTP, or some aspect of TPTP
that is to be improved.&nbsp; Each plan item has its own entry in the
TPTP bugzilla database, with a title and a concise summary (usually a
single paragraph) that explains the work item at a suitably high enough
level so that everyone can readily understand what the work item is
without having to understand the nitty-gritty detail. </p>
<p>Not all plan items represent the same amount of work; some may be
quite large, others, quite small. Some plan items may involve work that
is localized to a single component; others may involve coordinated
changes to several components; other may pervade the entire project. </p>
<p>With the previous release as the starting point, this is the plan
for how we will enhance and improve it.&nbsp; Fixing bugs, improving
test coverage, documentation, examples, performance tuning, usability,
etc. are considered routine ongoing maintenance activities and are not
included in this plan unless they would also involve a significant
change to the API or feature set, or involve a significant amount of
work. The intent of the plan is to account for all interesting feature
work. </p>
<h3><a name="Deliverables"></a>Release Deliverables</h3>
<p>The following release deliverables are provided: </p>
<ul>

  <li>Runtime </li>
  <li>Source </li>
  <li>Examples </li>
  <li>Component Test </li>
  <li>Data Collection Engine for Windows (NT, 2000, XP) x86 Runtime</li>
  <li>Data Collection Engine for Windows (XP, Server 2003) x86/64-bit
Runtime</li>

  <li>Data Collection Engine for Windows Server 2003 Itanium Runtime</li>
  <li>Data Collection Engine for Linux x86 Runtime</li>
  <li>Data Collection Engine for Linux x86/64-bit Runtime </li>
  <li>Data Collection Engine for Linux Itanium Runtime </li>
  <li>Data Collection Engine for Linux zSeries Runtime </li>
  <li>Data Collection Engine for zSeries Runtime </li>

  <li>Data Collection Engine for iSeries Runtime </li>
  <li>Data Collection Engine for Solaris Sparc Runtime </li>
  <li>Data Collection Engine for AIX PPC Runtime</li>
  <li>Data Collection Engine for Linux PPC/64-bit </li>
  <li>Data Collection Engine for HP-UX Runtime </li>
  <li>Native Logging Implementation (All platforms) </li>

  <li>Plugin Translatability Log</li>
</ul>
<h3><a name="Milestones"></a>Release Milestones</h3>
<p>The TPTP 4.3 release is targeted for general availability on
27-Oct-2006.&nbsp; All release deliverables will be available for
download as soon as the release has been tested and validated in the
target operating configurations.&nbsp; The first iteration is dedicated
to defect fixing, automation of regression testing, and measuring and
increasing test coverage for public API. There will be no enhancements
committed to CVS HEAD stream until end of iteration #1, except new
features that were made available as technology preview in TPTP 4.2
release. In iteration #2, 4.2.1 release branch will be created in CVS
and enhancements in plan for 4.3 release will be allowed to be
committed to CVS HEAD stream. Iteration #3 is for shutting down
development and get ready to release 4.3 GA.</p>
<table id="table1" border="1" width="821">
  <tbody>
    <tr>

      <td colspan="3" bgcolor="#c0c0c0" width="793">
      <p align="center"><b><font size="+1">Release Milestones</font></b></p>
      </td>
    </tr>
    <tr>
      <td bgcolor="#c0c0c0" width="210"><b>Milestone</b></td>
      <td bgcolor="#c0c0c0" width="163"><b>Date</b></td>

      <td bgcolor="#c0c0c0" width="416"><b>Description</b></td>
    </tr>
    <tr>
      <td width="210">Iteration 1</td>
      <td width="163">Friday, 04-Aug-06</td>
      <td width="416">Stable build - bug fixes only (CVS stream common
with 4.2.1) </td>
    </tr>

    <tr>
      <td width="210">Iteration 2</td>
      <td width="163">Friday, 22-Sep-06</td>
      <td width="416">Stable build - enhancements and bug fixes</td>
    </tr>
    <tr>
      <td width="210">Iteration 3</td>

      <td width="163">Friday, 17-Nov-06 <font face="Arial"><span
 style="background-color: rgb(255, 255, 255);"><img src="http://www.eclipse.org/images/new.gif"
 border="0" height="12"></span></font></td>
      <td width="416">Stable build - shut down </td>
    </tr>
    <tr>
      <td width="210">&nbsp;</td>
      <td width="163">Monday, 04-Dec-06 <font face="Arial"><span
 style="background-color: rgb(255, 255, 255);"><img src="http://www.eclipse.org/images/new.gif"
 border="0" height="12"></span></font></td>
      <td width="416">General Availability</td>

    </tr>
  </tbody>
</table>
<p>For a detailed development schedule of TPTP 4.3 release,
<a
 href="http://www.eclipse.org/tptp/home/project_info/releaseinfo/4.3/schedule.html">click
here</a>.</p>
<h3><a name="TargetOperatingEnvironments"></a>Target Operating
Environments</h3>
<p>In order to remain current, each TPTP release targets reasonably
current versions of the underlying operating environments.</p>
<ul>
  <li>Java runtime (JRE) or Java development kit (JDK) 1.4 </li>

  <li> <a href="http://download.eclipse.org/eclipse/downloads/">Eclipse
SDK 3.2</a> for Linux (GTK)&nbsp;, Linux (Motif),&nbsp;or Windows</li>
  <li>Eclipse Modeling Framework (EMF) SDK <a
 href="http://download.eclipse.org/tools/emf/scripts/downloads.php">2.2</a>
  </li>
  <li>XML Schema Infoset Model (XSD) SDK <a
 href="http://download.eclipse.org/tools/emf/scripts/downloads.php">2.2</a></li>

</ul>
<p>Most of the TPTP SDK is "pure" Java&#8482; code and has no direct
dependence on the underlying operating system.&nbsp; The chief
dependence is therefore on the Java 2 Platform itself.&nbsp; The TPTP
4.3 release is written and compiled against version 1.4 of the Java 2
Platform APIs, and targeted to run on version 1.4 of the Java 2 Runtime
Environment, Standard Edition.</p>
<p>There are many different implementations of the Java 2 Platform
running atop a variety of operating systems. We focus TPTP testing on a
handful of popular <span class="header">combinations of operating
system and Java 2 Platform; these are our <em>reference platforms</em>.&nbsp;
TPTP undoubtedly runs fine in many operating environments beyond the
reference platforms we test.&nbsp; However, since we do not
systematically test them we cannot vouch for them.&nbsp; Problems
encountered when running TPTP on non-reference platforms that cannot be
recreated on any reference platform will be given lower priority than
problems with running TPTP on a reference platform.</span></p>

<p>TPTP SDK 4.3 is tested and validated on the following target
reference platforms (this list may be updated over the course of the
release cycle):</p>
<table border="1" width="821">
  <tbody>
    <tr bgcolor="#cccccc">
      <th colspan="2">
      <div align="center"><font size="+1">TPTP</font><b><font size="+1">
Agent Controller Reference Platforms</font></b> </div>
      </th>

    </tr>
    <tr>
      <td width="108"><b>Processor architecture</b></td>
      <td width="697"><b>Operating system</b></td>
    </tr>
    <tr>
      <td width="108">Intel IA32</td>

      <td width="697"> Red Hat Linux v7.1, v7.2, v7.3, v8.0</td>
    </tr>
    <tr>
      <td width="108">Intel IA32</td>
      <td width="697">Red Hat Linux Advanced Server v2.1</td>
    </tr>
    <tr>

      <td width="108">Intel IA32</td>
      <td width="697">SuSE Linux v7.2, v7.3</td>
    </tr>
    <tr>
      <td width="108">Intel IA32</td>
      <td width="697">SuSE Linux Enterprise Server (SLES) v7, v8</td>
    </tr>

    <tr>
      <td width="108">Intel IA32</td>
      <td width="697">Windows 2000 Advanced Server (service pack 2)</td>
    </tr>
    <tr>
      <td width="108">Intel IA32</td>
      <td width="697">Windows 2000 Professional (service pack 2)</td>

    </tr>
    <tr>
      <td width="108">Intel IA32</td>
      <td width="697">Windows 2000 Server (service pack 2)</td>
    </tr>
    <tr>
      <td width="108">Intel IA32</td>

      <td width="697"> Windows NT 4.0 (service pack 6a)</td>
    </tr>
    <tr>
      <td width="108">Intel IA32</td>
      <td width="697">Windows Server 2003</td>
    </tr>
    <tr>

      <td width="108">Intel IA32</td>
      <td width="697">Windows XP Professional</td>
    </tr>
    <tr>
      <td width="108">Intel EM64T</td>
      <td width="697">Red Hat Linux Advanced Server v3</td>
    </tr>

    <tr>
      <td width="108">Intel EM64T</td>
      <td width="697">Windows 20003 Server (service pack 1)</td>
    </tr>
    <tr>
      <td width="108">Intel IPF</td>
      <td width="697">Red Hat Advanced Server v3</td>

    </tr>
    <tr>
      <td width="108">Intel IPF</td>
      <td width="697">Windows 20003 Server (service pack 1)</td>
    </tr>
    <tr>
      <td width="108">iSeries</td>

      <td width="697">OS/400 V5R1, V5R2</td>
    </tr>
    <tr>
      <td width="108">PA-RISC</td>
      <td width="697">HP-UX v11.0, v11i</td>
    </tr>
    <tr>

      <td width="108">RS/6000</td>
      <td width="697">AIX v4.4.0, v5.1, v5.2</td>
    </tr>
    <tr>
      <td width="108">SPARC</td>
      <td width="697">Sun Solaris v8, v9</td>
    </tr>

    <tr>
      <td width="108">zSeries</td>
      <td width="697">z/OS V1R7</td>
    </tr>
    <tr>
      <td width="108">zSeries</td>
      <td width="697">SuSE Linux Enterprise Server (SLES) v8 </td>

    </tr>
    <tr>
      <td width="108">PowerPC/64-bit </td>
      <td width="697">Red Hat Enterprise Linux AS release 3 </td>
    </tr>
  </tbody>
</table>
<p>Although untested, TPTP should work fine on other OSes that support
the same operating system kernel and version.</p>

<h4>Internationalization</h4>
<p>TPTP is designed as the basis for internationalized products. The
user interface elements provided by the TPTP SDK components, including
dialogs and error messages, are externalized. The English strings are
provided as the default resource bundles.</p>
<p>Latin-1 locales are supported by the TPTP SDK on all of the above
operating environments; DBCS locales are supported by the TPTP SDK on
the Windows, GTK, and Motif window systems; BIDI locales are supported
by the TPTP SDK only on Windows operating environments. </p>
<p>The TPTP SDK supports GB 18030, the new Chinese code page standard,
on Windows XP and 2000, and Linux.</p>
<p>TPTP supports ICU4J starting in 4.2 release. This will significantly
increase the number of supportable locales. Products needing to
localize to newer locales are enabled. German, Traditional Chinese, and
Arabic are tested.&nbsp; </p>
<h3><a name="Compatibility"></a>Compatibility with Previous Releases</h3>
<p>TPTP 4.3 will be compatible with TPTP 4.2.&nbsp; The following
specifies details of the various aspects of release compatibility.</p>

<ul>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b> API Contract
Compatibility:</b>&nbsp; Refer to <i> <a
 href="http://eclipse.org/eclipse/development/java-api-evolution.html">Evolving
Java-based APIs</a></i> for a discussion of the kinds of API changes
that maintain contract compatibility.TPTP SDK 4.3 will be upwards
contract-compatible with TPTP SDK 4.2 or lower. Downward contract
compatibility is not supported. There is no guarantee that compliance
with TPTP SDK 4.3 APIs would ensure compliance with TPTP SDK 4.0 APIs.</p>
  </li>
  <li>

    <p style="margin-top: 0pt; margin-bottom: 5px;"><b> Binary
(plug-in) Compatibility:</b> TPTP SDK 4.3 will be upwards
binary-compatible with TPTP SDK 4.2. Downward plug-in compatibility is
not supported. Plug-ins for TPTP SDK 4.3 will not be usable in TPTP SDK
4.2. Refer to <i> <a
 href="http://eclipse.org/eclipse/development/java-api-evolution.html">
Evolving Java-based APIs</a></i> for a discussion of the kinds of API
changes that maintain binary compatibility. </p>
  </li>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b> Source
Compatibility:</b> TPTP SDK 4.3 will be upwards source-compatible with
TPTP SDK 4.2. This means that source files written to use TPTP SDK 4.2
APIs might successfully compile and run against TPTP SDK 4.3 APIs,
although this is not guaranteed. Downward source compatibility is not
supported. If source files use new TPTP SDK APIs, they will not be
usable with an earlier version of the TPTP SDK. </p>

  </li>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b> Workspace
Compatibility:</b> <font face="Arial" size="2">TPTP SDK 4.3 will be
upwards workspace-compatible with TPTP SDK 4.2 unless noted. This means
that workspaces and projects created with TPTP SDK 4.2 can be
successfully opened by TPTP SDK 4.3 and upgraded to a 4.3 workspace</font>.
This includes both hidden metadata, which is localized to a particular
workspace, as well as metadata files found within a workspace project
(e.g., the .project file), which may propagate between workspaces via
file copying or team repositories. Downward workspace compatibility is
not supported. A workspace created (or opened) by a product based on
TPTP 4.2 will be unusable with a product based an earlier version of
TPTP. Visible metadata files created (or overwritten) by TPTP 4.3 will
generally be unusable with earlier versions of TPTP. </p>
  </li>
  <li><b>Non-compliant usage of API's</b>: All non-API methods and
classes, and certainly everything in a package with "internal" in its
name, are considered implementation details which may vary between
operating environment and are subject to change without notice. Client
plug-ins that directly depend on anything other than what is specified
in the TPTP SDK API are inherently unsupportable and receive no
guarantees about compatibility within a single release much less with
an earlier releases. Refer to <i> <a
 href="http://www.eclipse.org/articles/Article-API%20use/eclipse-api-usage-rules.html">

How to Use the Eclipse API</a></i> for information about how to write
compliant plug-ins. </li>
</ul>
<h3><a name="Themes"></a>Themes</h3>
<p>The TPTP PMC adopted and specialized the following Eclipse themes
which represent the key focus areas for TPTP enhancements in the year
ahead.</p>
<ul>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b> Scaling Up -</b><span
 lang="EN-GB"> </span>TPTP will work to enhance the support of large
data volumes and processing rates in areas such as data collection,
user interface and in the persistence of trace, log and statistical
models and execution histories. </p>

  </li>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b> Enterprise
Ready </b> - Hooks will be provided within the TPTP infrastructure to
link testing tools to requirements tracking tools and defect tracking
tools, thus embedding them effectively in enterprise development
cycles. Changes to the data collection layers will increase
interoperability with enterprise security infrastructure. In addition,
there will be progressive adoption of the TPTP tools and infrastructure
as a test platform for the project itself, which is in turn likely to
drive refinements into the tools. An increased focus on whole-project
integration testing will ensure effective interoperability amongst all
TPTP components and the rest of the Eclipse environment. </p>
  </li>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b> Design for
Extensibility: Be a Better Platform</b> - There will be a wide range of
activities within TPTP to externalize APIs and define extension points,
making the infrastructure more flexible, and more generic in
application. A good example of this is integration of TPTP with WTP and
BIRT for web application testing, profiling and generation of
customized reports of results. </p>

  </li>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b> Embedded
Development - </b>TPTP target execution environment and remote data
collection framework provide capabilities that are adapted for high-end
embedded systems. TPTP will seek contributions to add support for
embedded systems. We are promoting use of TPTP native logging
capabilities on a number of embedded target systems. </p>
  </li>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b> Rich Client
Platform</b> - TPTP will use RCP for building manual test client, log
analyzer and other GUI-based clients in target environments. </p>

  </li>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b> Simple to Use</b>
- The existing TPTP tools were conceived as samples, rather than as
exemplary, they are deficient in many areas of usability and in some
cases lacking in function. The plan is that within the domains which
they target they will provide a high-quality user experience out of the
box. We will focus on ease of use through enhanced user documentation,
tutorials, white papers, demonstrations, and a wide range of
enhancements to the user interface to streamline basic processes and
clarify concepts and terminology. We are focused on improving as much
as possible in Release 4.3, and expect need for continuing this focus
beyond 4.3. </p>
  </li>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b> Enable
Consistent Multi-language Support</b> - In TPTP a significant effort
will be applied in extending coverage of the trace models to represent
C/C++ programs and to handle protocol activity (specifically HTTP)
consistently with program activity. There will also be C/C++ APIs
provided to the data collection and control layers. </p>

  </li>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b> Appealing to
the Broader Community</b> - A range of initiatives will be taken to
broaden the community of potential and actual users of TPTP.
Technically this will include additional integration of open source
test tool technologies based on JUnit, and the various hooks to JUnit
in the JDT, more data collection agents &#8211; particularly focusing on open
source technologies, and additional operating system and hardware
platforms from which data can be collected. There will be additional
marketing and an extensive outreach program to the Eclipse community
for additional contribution and adoption. </p>
  </li>
</ul>
<h3><a name="Projects"></a>Projects</h3>

<p style="margin-top: 0pt; margin-bottom: 0pt;">The TPTP top-level project is is
comprised of four projects, managed in a coordinated fashion, across which the
plans items are allocated.&nbsp; TPTP projects include:</p>
<ul>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b>TPTP Platform
Project </b>- Provides common infrastructure in the areas of user
interface, EMF based data models, data collection and communications
control, as well as remote execution environments. Additionally, the
Platform provides extension points for leveraging or extending these
capabilities in solution specific tooling or runtimes. This includes
Eclipse workbench plug-ins as well as runtime plug-ins on a target and
optionally remote system. </p>
  </li>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b>Testing Tools
Project </b>- Provides specializations of the TPTP Platform for
testing (e.g. test editors, trace/test conversion support), and
exemplary extensible tools for specific testing environments. Initially
this includes three test environments: JUnit, manual, and URL testing.
These specializations provide optimized editing and reporting
experiences for these use cases. In the cases where a unique runtime or
an implementation of a testability interface is required, it is also
developed in the project. For example, the manual test execution
environment provides a remotely managed user interface specifically for
collecting manual test progress. This manual user interface is unique
from the common execution environment for JUnit and URL testing. . </p>

  </li>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 5px;"><b>Tracing &amp;
Profiling Tools Project</b> - Extends the TPTP Platform with specific
data collection for Java and distributed applications that populate the
common trace model, additional language and protocol support is
anticipated. There are also viewers and analysis services that draw
data from the common trace model. Capabilities are provided to collect
and analyze heap and stack information as well as generic toolkits for
instrumenting running applications.. </p>
  </li>
  <li>
    <p style="margin-top: 0pt; margin-bottom: 0pt;"><b>Monitoring Tools
Project </b>- Extends the TPTP Platform for collecting, analyzing,
aggregating, and visualizing data that can be captured in the log and
statistical models. The typical examples are the collection of system
or application resources such as CPU or memory utilization and support
for the viewing, aggregation, and analysis of that data. Logs can also
be transformed into a common format and model allowing for symptom and
pattern analysis. The correlation of the data in these models is of
particular interest when it is associated with other model instances of
statistical or log data as well as traces and tests.. </p>

  </li>
</ul>
<h3><a name="Features"></a>Features</h3>
<p>Plan items targeted for this release represent the addition of new
features or areas where existing features will be significantly
reworked or enhanced.&nbsp; Plan items are allocated to themes and
projects indicated above.</p>
<table id="table2" border="1" width="821">
  <tbody>
    <tr bgcolor="#cccccc">
      <th colspan="2">
      <div align="center"><font size="+1">TPTP Platform Project Plan
Items</font></div>

      </th>
    </tr>
    <tr>
      <td width="78"><b>Status</b></td>
      <td width="727"><b>Description</b></td>
    </tr>
    <tr>
      <td height="23" width="78">In Plan</td>

      <td height="23" width="727">Support existing RAC clients and
agents on the Linux IA32 platform using the new Agent Controller
technology through compatibility layers(<a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=125103">125103</a>).
      </td>
    </tr>
    <tr>
      <td width="78">In Plan</td>
      <td width="727"> TPTP profiler (based on JVMTI) will be further
improved in this release cycle with a heap profiler (<a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=147653">147653</a>)
thread profiler (<a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=147654">147654</a>),
and improved performance summary information (<a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=147658">147658</a>)</td>

    </tr>
    <tr>
      <td height="23" width="78">In Plan</td>
      <td height="23" width="727"> <font face="Arial" size="2">This
requirement is to make the Log Analyzer UI format-agnostic when
displaying Common Base Events as the event format will change and
evolve over time. Any view, dialog, or editor that currently displays
Common Base Events should display the events in a consistent manner
with consistent naming.</font> <a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=71682">71682</a></td>
    </tr>
    <tr>

      <td width="78">In Plan</td>
      <td width="727"> Provide the Log Analyzer functionality available
in TPTP as an RCP application. The TPTP Log Analyzer will be
restructured so that it can be packaged as a Rich Client Platform
application. The RCP application will provide log visualization,
analysis and correlation. <a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=134531">134531</a></td>
    </tr>
    <tr>
      <td width="78">In Plan</td>
      <td width="727"> <font face="Arial" size="2">The TPTP log
analyzer provides a set of useful services to analyze log files. Most
of these services are tightly tied to the log and trace analyzer user
interface. It is required to decouple these services from the UI so
that consuming products can reuse the above functionality. This
enhancement is used to</font><font face="sans-serif" size="2"> define a
set of interfaces to expose the log analysis and correlation services
available in the TPTP Log Analyzer function.</font> <a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=143766">143766</a></td>

    </tr>
    <tr>
      <td style="vertical-align: top;">Helpwanted<br>
      </td>
      <td style="vertical-align: top;"><font face="sans-serif" size="2">We
are investing in automating post-build steps in deploying and executing
regression tests. This has been dire need for the project and should
positively impact quality and productivity. Automate the deployment and
set up of Agent Controller on all platforms (</font><a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=144958">144958</a>)</td>
    </tr>
    <tr>

      <td width="78">Helpwanted</td>
      <td width="727"> This enhancement will improve the usability of
dynamic probekit feature by automatically deploying the support class
files that contain byte code for the user defined probes (<a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=143251">143251</a>)
      </td>
    </tr>
    <tr>
      <td width="78">Helpwanted</td>
      <td width="727"> Web document for creating custom profilers with
Probekit <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=147450">147450</a>

      </td>
    </tr>
    <tr>
      <td width="78">Helpwanted</td>
      <td width="727"> Explore design approaches to improve scalability
and responsiveness of EMF-based data models for trace and test
tools.[Trace Model <a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=147656">147656</a>]
[Test Model <a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=144950">144950</a>]</td>

    </tr>
    <tr>
      <td width="78">Helpwanted</td>
      <td width="727"> <font face="Arial" size="2"> <span
 style="font-size: 10pt; font-family: Arial;">Provide capability in the
agent framework to dynamically determine if the data collection
services are available to an agent. The data collection services
include agent controller and file transfer service.</span></font> <a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=142742">142742</a></td>
    </tr>
  </tbody>

</table>
<p style="margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
<table id="table13" width="821" border="1">
	<tr bgColor="#cccccc">
		<th colSpan="2">
		<div align="center">
			<font size="+1">TPTP Testing Tools Project Plan Items</font></div>
		</th>
	</tr>
	<tr>

		<td width="78"><b>Status</b></td>
		<td width="727"><b>Description</b></td>
	</tr>
	<tr>
		<td width="78">In Plan</td>
		<td width="727"><strong>Improve JUnit integration between TPTP and JDT.</strong> 
		Allow the JUnit user to have the same experience, once TPTP is 
		installed, as he/she used to have in Eclipse SDK, with the possibility 
		of executing his/her JUnit tests in the TPTP framework. Any JUnit test 
		would be edited and created as usual, and still it would be integrated 
		with other types of TPTP tests, and could be executed in the TPTP 
		framework. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=90628">90628</a>) 
		[Theme: Appealing to the Broader Community, Simple to Use]</td>

	</tr>
	<tr>
		<td width="78">In Plan</td>
		<td width="727"><strong>Provide a generic Java API recorder</strong> 
		Based on the generic recording facility provided in TPTP v4.1+ (see 
		enhancement #74926), provide a generic recorder to record Java API 
		invocations to create a test. The generic recorder could leverage the 
		TPTP Probe Kit to instrument target APIs to capture invocations based on 
		predefined criteria. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=119688">119688</a>) 
		[Theme: Design for Extensibility: Be a Better Platform]</td>
	</tr>
	<tr>

		<td width="78">In Plan</td>
		<td width="727"><strong>Provide the concept of an object mine inside 
		each test suite</strong> The object mine will keep track of a single id 
		of an object irregardless of the number of times it occurs in the test 
		cases owned by the test suite. The user will also be able to include 
		external object mines (i.e. object mines owned by other test suites) and 
		contribute any newly detected objects to an external object mine. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=144763">144763</a>) 
		[Theme: Appealing to the Broader Community, Simple to Use]</td>
	</tr>
	<tr>
		<td width="78">Helpwanted</td>

		<td width="727"><strong>Providing better means for the user to specify a 
		workspace location</strong> An extra page specific to the auto GUI test 
		suite should be included in the launch configuration dialog to allow the 
		user to specify a workspace and the plug-ins that they wish to include 
		in the launched workbench. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=109880">109880</a>) 
		[Theme: Appealing to the Broader Community, Simple to Use]</td>
	</tr>
	<tr>
		<td width="78">Helpwanted</td>
		<td width="727"><strong>Automated Documentation Generation</strong> The 
		feature being proposed it to utilize the GUItester to create SIMPLE 
		documentation (in HTML format, or another generic output of the users 
		choosing) that outlines the (1) name of the UI test; (2) the series of 
		steps taken in the UI test; (3) screenshots at every possible step 
		during the test. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=110108">110108</a>) 
		[Theme: Appealing to the Broader Community, Simple to Use]</td>

	</tr>
	<tr>
		<td width="78">Helpwanted</td>
		<td width="727"><strong>Support RCP applications for recording and 
		playing back GUI test cases</strong> A common feature that users ask for 
		is to have support in recording and playing back test cases in an RCP 
		application. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=114159">114159</a>) 
		[Theme: Rich Client Platform]</td>
	</tr>
	<tr>

		<td width="78">Helpwanted</td>
		<td width="727"><strong>Generic Recorder Framework improvements.</strong> 
		Support for launching and controlling two or more recorders or recording 
		agents in parallel. Support for launching Java applications for 
		recording without creating/using an Eclipse launch configuration. 
		Support remote recording via the Agent Controller. Provide an extension 
		point for user-defined annotations to a recording session. Support (e.g. 
		model loading) for recorders to emit standard trace model events. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=145146">145146</a>) 
		[Theme: Appealing to the Broader Community, Simple to Use]</td>
	</tr>
	<tr>
		<td width="78">Helpwanted</td>

		<td width="727"><strong>The test launch configuration needs to have the 
		means for users to specify JVM argument.</strong> Support for a standard 
		way for users to specify JVM arguments for test execution. Provide an UI 
		for the user to specify zero or more JVM arguments and an API for JUnit-based 
		test runners to access these JVM arguments for launching the Java test 
		process. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=143121">143121</a>) 
		[Theme: Design for Extensibility: Be a Better Platform]</td>
	</tr>
</table>
<p style="margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
<table id="table14" width="821" border="1">
	<tr bgColor="#cccccc">
		<th colSpan="2">
		<div align="center">

			<font size="+1">TPTP Tracing And Profiling Tools Project Plan Items</font></div>
		</th>
	</tr>
	<tr>
		<td width="78"><b>Status</b></td>
		<td width="727"><b>Description</b></td>
	</tr>

	<tr>
		<td width="78">In Plan</td>
		<td width="727"><strong>Providing better analysis views for analyzing 
		execution statistics</strong> The following enhancements should make 
		analysis of execution statistics easier: Easily identify the method that 
		has had the maximum base/cumulative time. Quick hover explanation in the 
		view or better naming for the base or cumulative time. The method 
		statistics view should simply should show the stack for a particular 
		method invocation. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=147930">147930</a>) 
		[Theme: Appealing to the Broader Community, Simple to Use]</td>
	</tr>
	<tr>
		<td width="78">In Plan&nbsp;</td>

		<td width="727"><strong>Provide better abstraction and navigation means 
		in the Trace views</strong> The following feature tries to outline some 
		improvements that may help to abstract and navigate the profiling data: 
		Provide a find operation under the execution time statistics, memory 
		statistics, and code coverage view. Ability to bring deltas to the top 
		or only showing deltas between refreshes Showing what&#8217;s changed when 
		deltas are displayed Doing post filtration in the views Doing pagination 
		in the tabular views Filtering methods that have a base/cumulative time 
		that is less than a given threshold (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=147931">147931</a>) 
		[Theme: Appealing to the Broader Community, Simple to Use]</td>
	</tr>
	<tr>
		<td width="78">In Plan&nbsp;</td>
		<td width="727"><strong>Using virtualization in stat views</strong> 
		Virtualization can be used to reduce the amount of time required to show 
		a large number of tree items. This can significantly help improve the 
		performance of the execution stat view when it is viewed at the method 
		level. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=147933">147933</a>) 
		[Theme: Scaling Up]</td>

	</tr>
	<tr>
		<td width="78">In Plan&nbsp;</td>
		<td width="727"><strong>Create Extension Point for ARM Factories</strong> 
		Create a new extension point to allow user to define there own 
		Application Resource Measurement Factories. The extension point would 
		include transaction, metric, and reporting. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=148048">148048</a>) 
		[Theme: Design for Extensibility: Be a Better Platform]</td>
	</tr>
	<tr>

		<td width="78">Helpwanted</td>
		<td width="727"><strong>Trace-related views should make use of view 
		linking service</strong> Currently some views listen for selection 
		events on other views and make use of this information to update their 
		own selections to something related to the original selection. For 
		example, if you have the log view and log interactions view open at the 
		same time, and select a log record in one of them, the other view will 
		automatically update and select that same log record, if it's there. All 
		the views should use a standard view linking service to do this. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=87605">87605</a>) 
		[Theme: Design for Extensibility:Be a Better Platform]</td>
	</tr>
	<tr>
		<td width="78">Helpwanted</td>

		<td width="727"><strong>Providing better analysis views for detecting 
		memory leaks</strong> The following enhancements need to be made to make 
		memory leak detection easier; Objects that are garbage collected need to 
		be removed from the object reference view. Integrate the object 
		reference view with the memory statistics view. Provide a dynamic chart 
		that is updated when the heap size changes Enhanced look &amp; feel of the 
		object reference view. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=147929">147929</a>) 
		[Theme: Appealing to the Broader Community, Simple to Use]</td>
	</tr>
	<tr>
		<td width="78">Helpwanted</td>
		<td width="727"><strong>Add a thread analysis and a call graph view</strong> 
		A thread analysis view will allow users to resolve deadlock problems, 
		thread starvation or other thread related issues. A call graph view will 
		help to easily visualize application flow and critical paths that maybe 
		the cause of a bottleneck. (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=147932">147932</a>) 
		[Theme: Appealing to the Broader Community, Simple to Use]</td>

	</tr>
</table>
<p style="margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
<table id="table12" border="1" width="821">
  <tbody>
    <tr bgcolor="#cccccc">
      <th colspan="2">
      <div align="center"> <font size="+1">TPTP Monitoring Tools
Project Plan Items</font></div>
      </th>

    </tr>
    <tr>
      <td width="78"><b>Status</b></td>
      <td width="727"><b>Description</b></td>
    </tr>
    <tr>
      <td width="78">In Plan</td>

      <td width="727"><strong>Improve usability of Stand-alone Generic
Log Adapter package.</strong> Applications can package and make use of
GLA run-time and adapter configuration files to parse log files.
However, to use the packaged adapter files they must be modified. For
example, the adapter configuration must specify the location and name
of the log file to parse. Currently, the only way to do this
programmatically is by using XML parsing libraries to read and modify
these XML files. To simplify adapter configuration modification, this
feature will extend the current
org.eclipse.hyades.logging.adapter.Adapter API to provide methods to
retrieve and modify the configuration before it is executed by GLA.
Also, to allow the packaged adapter configuration files to be used more
easily in various applications, multiple outputters will be added to
them, which can them be enabled or disabled depending on the
application. (<a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=96433">96433</a>
and <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=126653">
126653</a>) [Theme: Design for Extensibility: Be a Better Platform]</td>
    </tr>
    <tr>
      <td width="78">In Plan</td>

      <td width="727"><strong>Provide sensor/extractor filtering
capability in TPTP Generic Log Adapter log parsers.</strong> In TPTP
4.2 support was added to the Generic Log Adapter run-time for <a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=79565">filtering
at the sensor and extractor component level</a>. This filtering
capability will be exploited in the current TPTP provided log parsers
to allow users to improve the performance of log parsing when only a
subset of the log records is of interest. (<a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=141840">141840</a>)
[Theme: Scaling Up]</td>
    </tr>
    <tr>
      <td width="78">In Plan</td>
      <td width="727"><strong>Provide Rich Client Platform versions of
Log Analysis tooling.</strong> Some users want stand-alone tools for
log analysis. The TPTP Symptom Editor will be restructured so that it
can be packaged as a Rich Client Platorm application. Also, some
portions of the Log Analyzer will be restructured so it can be packaged
as a Rich Client Platform application. (<a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=134532">134532</a>

and <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=134798">
134798</a>) [Theme: Rich Client Platform]</td>
    </tr>
    <tr>
      <td width="78">In Plan</td>
      <td width="727"><strong>Improve the Managed Resource Explorer.</strong>
In TPTP 4.2 a technical preview was introduced for a generic Managed
Resource Explorer. This tool will be improved in 4.3 so that it can
become a full TPTP component. (<a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=145056">145056</a>,
      <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=145057">145057</a>,
      <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=145058">145058</a>,
      <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=150259">150259</a>,
      <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=150385">150385</a>)
[Theme: Design for Extensibility: Be a Better Platform]</td>

    </tr>
    <tr>
      <td width="78">In Plan</td>
      <td width="727"><strong>Add tooling to simplify creation of WSDM
managed agents.</strong> In TPTP 4.2, a Managed Resource Explorer was
added that allowed the developer to manipulate resources that sit
behind a manageability endpoint. The Managed Agent explorer has plugins
for JMX and WSDM. This feature for 4.3 would allow a developer to
easily create WSDM based managed agents (referred to in WSDM as
manageability endpoints) that are compliant with the WSDM 1.1
specification from OASIS. (<a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=142543">142543</a>)
[Theme: Design for Extensibility: Be a Better Platform]</td>
    </tr>
    <tr>

      <td width="78">In Plan</td>
      <td width="727"><strong>Improve the Monitoring Instrumentation
tooling.</strong> In TPTP 4.2 a technical preview was introduced for
tooling to instrument existing Java applications for monitoring. This
support will be improved in 4.3 so that it can become a full TPTP
component. ( <a
 href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=146272">146272</a>,
      <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=148042">148042</a>,
      <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=148044">148044</a>)
[Theme: Design for Extensibility: Be a Better Platform]</td>
    </tr>
  </tbody>

</table>
<h3><a name="Defects"></a>Defects</h3>
<p>In addition to the targeted features for this release, we plan to
reduce the defect backlog. Defects are prioritized based on severity,
age, and resource availability. We encourage users to report defects
and we will do our best to fix them in priority order. The goal is
clear backlog of major/critical/blocker defects and make reasonable
progress on fixing as many as possible.</p>
<blockquote>
  <p style="margin-top: 0pt; margin-bottom: 0pt;"> See 
	<a href="http://www.eclipse.org/tptp/reports/bugs/report_43.php?src=All&queryType=bugs&component=All">
	TPTP 4.3 Defects</a> for a listing of already fixed defects, current
defect targets and backlog.</p>
  <p style="margin-top: 0pt; margin-bottom: 0pt;"> Select "4.3
[Completed | nil| I1 | I2 | I3] bugs" tabs.</p>

</blockquote>

<h2><a name="WTP"></a>Web Tools Platform (WTP)</h2>
</p>
<h3>Eclipse Web Tools Platform 2.0 Plan - DRAFT</h3>
<p><br />
<i>Please send comments about this <b>draft plan</b> to the</i> wtp-pmc@eclipse.org <i>or</i> wtp-dev@eclipse.org <i>mailing list.</i>

</p><p>This document lays out the feature and API set for the next release of Eclipse Web Tools, to be released as part of the Eclipse Europa Release, in June 2007, and
usually called "WTP 2.0", for short.
</p><p>This document is a draft and is subject to change, we welcome all feedback.
</p><p>Web Tools 2.0 will be compatible with / based on the Eclipse 3.3 Release.
</p><p>To ensure the planning process is transparent and open to the entire Eclipse community, we (the Eclipse Web Tools Requirement Group &amp; the Web Tools PMC) post plans
in an embryonic form and revise them throughout the release cycle.
</p><p>The first part of the plan deals with the important matters of release deliverables, release milestones, target operating environments, and release-to-release
compatibility. These are all things that need to be clear for any release, even if no features were to change.
</p><p>The remainder of the plan consists of plan items for the subprojects under the Eclipse Web Tools top-level project, including projects such as JSF and Dali that
are currently in the incubator state. Each plan item covers a feature or API that is to be added to Web Tools, or some aspect of Web Tools that is to be improved.
Each plan item will have its own entry in the Eclipse bugzilla database, with a title and a concise summary (usually a single paragraph) that explains the work
item at a suitably high enough level so that everyone can readily understand what the work item is without having to understand the nitty-gritty detail.
</p><p><del>With the previous release as the starting point, this is the plan for how we will enhance and improve it. Fixing bugs, improving test coverage, documentation,
examples, performance tuning, usability, etc. are considered routine ongoing maintenance activities and are not included in this plan unless they would also
involve a significant change to the API or feature set, or involve a significant amount of work. The intent of the plan is to account for all interesting feature
work.</del>
</p><p><br />
The current priority or status of each plan item is noted:
</p><p><b>High Priority</b> plan item - A high priority plan item is one that we have decided to address for the release (committed).
</p><p><b>Medium Priority</b> plan item - A medium priority plan item is one that we are considering addressing for the release.
Although we are actively investigating it, we are not yet in a position to commit to it, or to say that we won't be able to address it.

</p><p><b>Low Priority</b> plan item - A low priority plan item is one that we addressed for a release we will only address that item if one
component has addressed all high and medium priority items.
</p><p><b>Deferred</b> plan item - A reasonable proposal that will not make it in to this release for some reason is marked as deferred with
a brief note as to why it was deferred. Deferred plan items may resurface as committed plan items at a later point.
</p><p><b>Help Wanted</b> plan item - Typically something that started off as a Medium or Low priority, but marked "help wanted" as an acknowledgement that
there are no core resources to implement the item, but if a company or person from the community wants to contribute it, then the core teams would
be more willing than usual to consider any high quality patches or contributions made via bugzillas.
</p><p>If not otherwise specified, an item should be assumed "medium priority". To be explicit, the appearance of an item in this draft plan should
not be assumed as a commitment, but instead is simply "open development" in its form as "open planning".
</p><p><br />
</p>
<h3>Release deliverables</h3>

<p>The release deliverables have the same form as previous releases, namely:
</p>
<ul><li> Source code release for Eclipse WTP Project, available as versions (e.g. tagged "R2_0_0" in the Eclipse WTP Project)
</li><li> CVS repository
</li><li> Eclipse WTP runtime binary and SDK download with all Eclipse pre-reqs (downloadable).
</li><li> Eclipse WTP runtime binary and SDK download (downloadable).
</li></ul>
<p>In addition, the Eclipse WTP runtime binary and SDK will be available as part of the "Europa" update site.
</p>
<h3>Release milestones and release candidates </h3>

<p>Release milestones will occur at roughly 6 week intervals in synchronization with the Eclipse Platform milestone releases (starting with M1) and will be compatible
with Eclipse 3.3 builds. See [Europa Simultaneous Release] for the complete Europa schedule. The following are the <i>approximate</i> dates for WTP milestones.
The <i>approximate</i> 1.5.x maintenance release dates are given too. The exact dates will be updated as the times grow nearer.
</p><p><br />
</p>
<dl><dt>M1</dt><dd>Friday, Sep 1, 2006
</dd><dd>Theme: run on Eclipse 3.3 stream
</dd><dt>1.5.1</dt><dd>September 29, 2006
</dd><dt>M2</dt><dd>Friday Oct 6, 2006
</dd><dd>Theme: run on Eclipse 3.3 stream

</dd><dt>1.5.2</dt><dd>October 31, 2006
</dd><dt>M3</dt><dd>Friday Nov 17, 2006
</dd><dd>Theme: Cleanup warnings, JUnits, Analyze Adopter Usage Reports
</dd><dt>M4</dt><dd>Friday Jan 4, 2006
</dd><dd>Theme Propose/implement APIs/Features
</dd><dt>1.5.3</dt><dd>Friday February 16, 2007
</dd><dt>M5</dt><dd>Friday Feb 23, 2007  (EclipseCon is 3/5)
</dd><dd>Theme: provide good base for EclipseCon demos!&nbsp;:)
</dd><dd>Most Function and API complete (e.g. 80%)
</dd><dt>M6</dt><dd>Friday Apr 6, 2007

</dd><dd>Theme: Function complete. API Freeze
</dd><dt>RC1</dt><dd>Friday May 18, 2007
</dd><dd>Theme: from M6 to RC1 will be polish, bug fixes, documentation
</dd><dt>other RCs</dt><dd>if needed (June 22, latest final build)
</dd><dt>Release</dt><dd>June 29, 2007
</dd></dl>
<h3>Target Operating Environments</h3>
<p>Eclipse WTP is built on the Eclipse platform itself.
</p><p>Eclipse WTP is "pure" Java code and has no direct dependence on the underlying operating system. The chief dependence is therefore on Eclipse. The 2.0
release of the Eclipse WTP Project is written and compiled against an appropriate version of Java as specified by the Execution Environment of each plugin.
In general, Java 5 of the Java Platform (Java SE 5.0) will be needed to use WTP as a whole, but, the Execution Environment will be specified for each plugin, starting
at J2SE 1.4, which is the current requirement, and then only moved up to Java SE 5 when some change made that requires it. WTP adopters should expect that full functionality will require running on a Java SE 5.
</p><p>Eclipse WTP is mainly tested and validated on Windows platforms, it should run on all platforms validated by the platform project:

</p><p><a href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_3.html#TargetOperatingEnvironments" class='external text' title="http://www.eclipse.org/eclipse/development/eclipse project plan 3 3.html#TargetOperatingEnvironments" rel="nofollow">Eclipse Target Operating Environments</a>
</p><p>Servers integrated into Eclipse WTP deliverables will be tested and validated on the same platforms listed above.
Tests for other platforms will be relying on the community support.
</p><p><br />
<b>Internationalization'</b>
</p><p>The Eclipse WTP is designed as the basis for internationalized products. The user interface elements provided by the Eclipse SDK components, including dialogs and
error messages, are externalized. The English strings are provided as the default resource bundles. Other language support, if any, will rely on the community
support.
</p>
<h3>Compatibility with Other WTP Releases</h3>
<p>Project Compatibility:
</p>
<ul><li> Binary compatibility with 1.5 and 1.0 projects - users should need to take no special actions to use projects

</li></ul>
<p>from either of these WTP releases with the 2.0 version
</p>
<ul><li> WTP 2.0 should be able to open workspaces created with WTP 1.5
</li><li> WTP 2.0 should be usable in a team environment where some team members use WTP 1.5 and team members share projects through a source code control system such a
</li></ul>
<p>CVS or Subversions. Specifically, A WTP 1.5 should be able to create a project, check it in to the repository. A WTP 2.0 user should be able to check it out, work
on it, and check it back in. A WTP 1.5 should then be able to check it back out and continue to work it on.
</p>
<ul><li> By default, WTP 1.5 should work on projects created by WTP 2.0 users and shared via a repository. Artifacts created by WTP 2.0 that are consistent with 1.5
</li></ul>
<p>features should not break WTP 1.5, and where possible WTP 1.5 should either ignore or tolerate any new artifacts in WTP 2.0 and subsequent releases. Attempts to
use (or convert to) new 2.0 functionality that cannot be made backwards compatible with 1.5 must be clearly identified in documentation.
</p><p>API Compatibility:
</p>
<ul><li> WTP 2.0 will preserve (public, declared) API compatibility with the 1.5 release, both in terms of syntax and behavior

</li><li> A plug-in that is developed on WTP 1.5 and that uses no internal methods should run correctly without recompilation on WTP 2.0
</li><li> A plug-in that is developed on WTP 1.5 and that uses no internal methods should recompile without error on WTP 2.0
</li><li> WTP 2.0 should provide migration notes and adequate notification and lead time to adopters for any internal code that is removed in WTP 2.0
</li><li> WTP 2.0 should continue to provide adopters with the ability to register their code usage reports and to be consulted in any proposed changes to internal code.
</li></ul>
<p>WTP 2.0 will take into account adopter feedback on proposed changes to internal code, but reserves the right to change internal notwithstanding that feedback.
</p><p>Eclipse WTP 2.0 deliverables will be compatible with Eclipse 3.3. No special attention will give for being compatible with previous Eclipse versions.
</p>
<h3>Eclipse WTP Subprojects</h3>

<p>The Eclipse WTP consists of four subprojects. Each subproject is covered in its own section:
</p><p><a href="http://eclipse.org/webtools/wst/main.html" class='external text' title="http://eclipse.org/webtools/wst/main.html" rel="nofollow">Web Standard Tools (WST)</a>
</p><p><a href="http://eclipse.org/webtools/jst/main.html" class='external text' title="http://eclipse.org/webtools/jst/main.html" rel="nofollow">J2EE Standard Tools (JST)</a>
</p><p><a href="http://www.eclipse.org/webtools/jsf/index.html" class='external text' title="http://www.eclipse.org/webtools/jsf/index.html" rel="nofollow">Java Server Faces Tools (JSF, incubating)</a>
</p><p><a href="http://www.eclipse.org/dali" class='external text' title="http://www.eclipse.org/dali" rel="nofollow">JPA (Dali/JPA, incubating)</a>
</p><p><a href="http://www.eclipse.org/atf/" class='external text' title="http://www.eclipse.org/atf/" rel="nofollow">AJAX Tools Framework (incubating)</a>
</p><p>The JSF, Dali, and ATF incubators SHOULD exit incubation and become normal components in WTP 2.0. A partial list of the new WTP components is:
</p>
<ul><li> JSF - org.eclipse.jst.jsf
</li><li> Dali - org.eclipse.jst.jpa

</li><li> ATF - org.eclipse.wst.js, org.eclipse.wst.ajax
</li></ul>
<p>Items listed reflect new features of the Web Tools Platform, or areas where existing
features will be significantly reworked. Common goals are listed in the “Common goals” area.
</p><p>TBD (Each item indicates the components likely affected by that work item (many items involve coordinated changes to several components). Numbers in parentheses
link to bugzilla problem reports for that plan item)
</p><p>Note that JSF and JPA/Dali are incubating projects at the moment. Users should expect API and tool refinements in these areas, with a likelihood for more rapid
(and extensive) revisions than in the base WTP code, along with initial API declarations in the 2.0 release.
</p>
<h3>Major themes</h3>
<h3>Improve Quality</h3>

<p>Focused effort will be made to reduce bug backlog, improving test coverage, performance and performance testing,
ISV documentation and examples, usability and UI consistency.
</p>
<h3>Adopter readiness</h3>
<ul><li> Extensibility
</li></ul>
<dl><dd>Provide extension points for adopters to add-in implementation functionality, such as for JEE5 features, publishing support, add to project creation pages, etc.
</dd></dl>
<ul><li> productization support <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=125751" class='external text' title="https://bugs.eclipse.org/bugs/show bug.cgi?id=125751" rel="nofollow">[125751</a>]
</li><li> Componentization

</li></ul>
<dl><dd>improve feature split <a href="http://www.eclipse.org/webtools/development/arch_and_design/subsystems/SubsystemsAndFeatures.html" class='external text' title="http://www.eclipse.org/webtools/development/arch and design/subsystems/SubsystemsAndFeatures.html" rel="nofollow">Subsystem and Features document</a>
</dd></dl>
<ul><li> improve API coverage 
</li></ul>
<dl><dd>convert provisional APIs in a careful, well reviewed way, to minimize adopter breakage
</dd></dl>
<h3> Improved Provisioning of Third Party Content </h3>
<ul><li> Participate in Orbit project to move our commonly needed third-party content to a common Eclipse repository.

</li><li> help create remote Update Manager sites hosted by providers of third party content required by WTP to streamline the process of adopting new versions
</li></ul>
<dl><dd>users should be able to acquire revisions of third party content in a more timely fashion
</dd><dd>begin by creating a common site at Apache for components such as Axis2, Woden, Tomcat, Geronimo
</dd></dl>
<ul><li> <del>maintain and expand current site at SourceForge as required </del>
</li><li> create new site at ObjectWeb for Jonas
</li></ul>
<h3> Help </h3>

<ul><li> adopt DITA for Help content
</li><li> work with DITA-OT project at SourceForge to improve integration of build process with PDE
</li></ul>
<h3>Web Standard Tools subproject</h3>
<h3> XML Editing </h3>
<ul><li> Improve Code folding

</li><li> Migrate to Platform Undo (IOperationHistory)
</li><li> Improved formatting, e.g. whitespace handling, WYSIWYG (for DITA, DocBook, etc.)
</li><li> <del>Run in Eclipse RCP</del>
</li><li> Large document performance enhancements
</li></ul>
<h3>Architectural harmonization</h3>
<h4> DTP </h4>

<p>Remove all Data access tools from WTP and instead use the corresponding components from DTP. <del>We should take a two-phase approach</del>.
</p>
<ul><li> <del>Phase 1 - Achieve functional parity with WTP 1.5, i.e. get back to where we currently are, but using DTP.</del>
</li></ul>
<ul><li> <del>Phase 2 - Exploit new DTP capabilities. DTP has much broader scope than the WTP 1.5 Data tools, e.g. in connection management, server exploration. We need
</li></ul>
<p>to do an architectural assessment of current WTP capabilities and adopt superior alternatives available in DTP.
</del>
</p><p>WTP currently has only a small dependency on RDB, which might be migrated to DTP or, perhaps, will be replaced by a more a generic, loose, optional dependency.
</p><p>JPA (Dali), however, will have a stronger dependency on DTP, so, DTP will, in the end, be listed as one of the pre-reqs for WTP as a whole. (But, the goal is, if
JPA is not installed then DTP will not be required).
</p>
<h4> STP </h4>

<p>Investigate areas of overlap with STP, especially in the areas of Web services, and ensure that existing WTP components can be extended as required by STP.
</p>
<h4> TPTP </h4>
<p>Improve integration with TPTP, especially in the area of profiling servers.
</p>
<h4> PHP Tools Project </h4>
<p>Investigate if the Apache Web server adapter should be moved into wst.server. Investigate if other generic components currently in the PHP project should be moved
in WTP.

</p><p>Need to investigate and support their use of our SSE Incremental DOM parser and A.) not break them&nbsp;:) or B.) provide API.
</p>
<h3>Web Services Support</h3>
<ul><li> Provide extensibility for providers of web service implementations
</li></ul>
<ul><li> <del>New WS-I Profiles, e.g. RAMP</del>
</li><li> <del>WS Security</del>

</li><li> <del>WS Policy</del>
</li><li> <del>Axis 2.0</del>
</li><li> <del>SOAP 1.2</del>
</li><li> <del>WSDL 2.0 - adopt Apache Woden 1.0</del>
</li></ul>
<h3>J2EE Standard Tools</h3>

<h3>Java EE 5</h3>
<ul><li> JPA/Dali (<a href="/index.php/Dali_1.0_planning" title="Dali 1.0 planning">Draft Milestone Plan</a>)
</li><li> JSF
<ul><li> JSF 1.2
</li></ul>
</li><li> JSP
<ul><li> Complete and Improve JSP 2.0 support

</li><li> Support JSP 2.1
</li></ul>
</li><li> Provide extensibility for providers of JEE5 implementations
</li><li> <del>Java EE 5 models - the models must be upgraded to handle Java EE 5 without ANY API breakage. Existing clients MUST continue to work without recompilation.
</li></ul>
<p>If existing clients are recompiled with the new model, then compilation errors MUST NOT occur (note: we assume that existing clients will not break in any way if
they only use the published API - code that relies on internal interfaces MAY break)
</del>
</p>
<ul><li> investigate: import a JEE5 project (help wanted)
</li><li> investigate: export/publish a JEE5 project (help wanted)
</li><li> validate a JEE5 project (help wanted)

</li><li> JSR 175 - support Java EE 5 specifications for annotation based programming, e.g. for EJB 3.0, JPA, Web services
<ul><li> JSR 181 - Web Services
</li><li> JSR 220 - EJB 3.0, JPA
</li></ul>
</li></ul>
<h3> Web Services </h3>
<ul><li> JSR 109 - for Web container
</li><li> support for generic, compliant runtime, e.g. hosted at GlassFish

</li></ul>
<h3>Server Runtime</h3>
<ul><li> JSR 88 Support, Advanced Server Support for one/multiple open source J2EE server
</li><li> Server runtime facet enhancements (link TBD)
</li><li> Migrate existing bundled server adapters to the remote server adapter support - our direction should be to have server providers host their own adapters as they
</li></ul>
<p>currently do for their runtimes. Server providers should also be encourage to use the remote server runtime installation framework (currently used by Geronimo)
</p>


<h2><a name="STP"></a>SOA Tools Platform</h2>
<em>The project did not provide any plan information.</em>

<p>&nbsp;</p>
      </div>
  </div>
<?php
	# Paste your HTML content between the EOHTML markers!	
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
