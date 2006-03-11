<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "Eclipse 2006 Architecture Plan";
$pageKeywords	= "technology, architecture, foundation";
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
</style>
</head>



<h1>Eclipse 2006 Architecture Plan</h1>
      <p>
      &nbsp;The
<img border="0" src="../PC_v2_0/external.gif" width="20" height="16"><a href="../../documents/Eclipse Development Process 2003_11_09 FINAL.pdf">Eclipse Development Process</a> calls for the creation of three Councils: Requirements, Planning and Architecture. Together, these Councils are responsible for the creation and maintenance of the Eclipse Roadmap. When approved by the Board, the intent of the Eclipse Roadmap is to communicate the directions in which the Eclipse community will be taking its projects over the next year. New projects started during the life of a Roadmap are expected to be consistent and complementary to the Roadmap.</p>
      
<p>This document is year two of the Eclipse Architecture Plan. We welcome 
  your feedback on the <a href="news://news.eclipse.org/eclipse.foundation">Eclipse 
  Foundation Newsgroup</a>. </p>
      <p>The Eclipse community is currently organized into nine top-level projects, the
      architecture of each is described below. Most top-level projects have
      additional architecture information on their project websites.</p>
    
<table border=0 cellspacing=5 cellpadding=2 width="100%" >
	<tr bgcolor="#999999">
    	<td align="left" valign="top" bgcolor="#0080C0"><strong><font color="#FFFFFF" face="Arial,Helvetica">Overall
          Architecture</font></strong></td>
	</tr>
</table>
    <p>The overall architecture of the Eclipse projects is driven by the elegant
    plug-in mechanism of the underlying Eclipse Platform. Each project
    contributes a variety of plug-ins that extend the basic functions of the
    platform and tailor it into a useful environment for that project's users:
    both API users and GUI users. A key feature of the Eclipse architecture is
    that each plug-in not only extends its pre-requisites but also contributes
    additional extension points for other plug-ins. In this way, each Eclipse
    project provides an extensible framework for the Eclipse ecosystem to build
    upon, to use, and to commercialize.</p>
    <p>
      <img src="arch1.jpg" alt="" width="673" height="446" border="0">
    </p>
    <p>The Eclipse community plans to have a <a href="/projects/callisto.php"> Callisto Simultaneous Release</a> in June 2006, whose goal is to release ten major Eclipse projects at the same
    time (BIRT, CDT, DTP, EMF, GEF, GMF, Platform, TPTP, WTP, VE). We are doing this simultaneous release to support the needs of the ecosystem members who integrate Eclipse frameworks into their own software and
    products. The architectural support for this includes (1) adopting ICU4J as
    the standard international support, (2) using the &quot;capability&quot;
    feature of the Eclipse platform to coordinate contributions to/avoid
    conflicts in the menus and tool bars, and (3) to use an Eclipse update
    manager site for unified distribution.</p>
<table border=0 cellspacing=5 cellpadding=2 width="100%" >
	<tr bgcolor="#999999">
    	<td align="left" valign="top" bgcolor="#0080C0"><strong><font color="#FFFFFF" face="Arial,Helvetica">Eclipse
          Platform Top-Level Project</font></strong></td>
	</tr>
</table>
    <p><a href="/eclipse/">
<img border="0" src="../PC_v2_0/external.gif" width="20" height="16"> Platform
    project home page</a></p>
    <p><img border="0" src="platform.gif"></p>
<table border=0 cellspacing=5 cellpadding=2 width="100%" >
	<tr bgcolor="#999999">
    	<td align="left" valign="top" bgcolor="#0080C0"><strong><font color="#FFFFFF" face="Arial,Helvetica">Tools
          Top-Level Project</font></strong></td>
	</tr>
</table>
    <p><a href="/tools/"><img border="0" src="../PC_v2_0/external.gif" width="20" height="16">
    Tools project home page</a>. The Tools top-level project is somewhat unique
    in that it is composed of six independent sub-projects.</p>
    <p><img border="0" src="toolvictorinox.jpg"><br/>
    <em>The Tools Project did not provide an architecture diagram, so we figured
    that it had to look something like this.</em></p>
<table border=0 cellspacing=5 cellpadding=2 width="100%" >
	<tr bgcolor="#999999">
    	<td align="left" valign="top" bgcolor="#0080C0"><strong><font color="#FFFFFF" face="Arial,Helvetica">Web
          Tools Top-Level Project</font></strong></td>
	</tr>
</table>
    <p><a href="/webtools/"><img border="0" src="../PC_v2_0/external.gif" width="20" height="16">
    Web Tools project home page</a>.&nbsp;</p>
    <p><img border="0" src="wtp.gif" ></p>
<table border=0 cellspacing=5 cellpadding=2 width="100%" >
	<tr bgcolor="#999999">
    	<td align="left" valign="top" bgcolor="#0080C0"><strong><font color="#FFFFFF" face="Arial,Helvetica">Test
          &amp; Performance Tools Platform Top-Level Project</font></strong></td>
	</tr>
</table>
    <p><a href="/tptp/"><img border="0" src="../PC_v2_0/external.gif" width="20" height="16">
    Test &amp; Performance Tools Platform project home page.</a></p>
    <p><img border="0" src="tptp.gif"></p>
<table border=0 cellspacing=5 cellpadding=2 width="100%" >
	<tr bgcolor="#999999">
    	<td align="left" valign="top" bgcolor="#0080C0"><strong><font color="#FFFFFF" face="Arial,Helvetica">Business
          Intelligence and Reporting Tools Top-Level Project</font></strong></td>
	</tr>
</table>
    <p><a href="/birt/"><img border="0" src="../PC_v2_0/external.gif" width="20" height="16">
    Business Intelligence and Reporting Tools project home page.</a></p>
    <p><img border="0" src="birt.jpg"></p>
<table border=0 cellspacing=5 cellpadding=2 width="100%" >
	<tr bgcolor="#999999">
    	<td align="left" valign="top" bgcolor="#0080C0"><strong><font color="#FFFFFF" face="Arial,Helvetica">Data
          Tools Top-Level Project</font></strong></td>
	</tr>
</table>
    <p><a href="/dtp/"><img border="0" src="../PC_v2_0/external.gif" width="20" height="16">
    Data Tools project home page.</a></p>
    <p><img border="0" src="dtp.gif"></p>
<table border=0 cellspacing=5 cellpadding=2 width="100%" >
	<tr bgcolor="#999999">
    	<td align="left" valign="top" bgcolor="#0080C0"><strong><font color="#FFFFFF" face="Arial,Helvetica">Device
          Software Development Platform Top-Level Project</font></strong></td>
	</tr>
</table>
    <p><a href="/dsdp/"><img border="0" src="../PC_v2_0/external.gif" width="20" height="16">
    Device Software Development Platform project home page.</a></p>
    <p><img border="0" src="dsdp.gif"></p>
<table border=0 cellspacing=5 cellpadding=2 width="100%" >
	<tr bgcolor="#999999">
    	<td align="left" valign="top" bgcolor="#0080C0"><strong><font color="#FFFFFF" face="Arial,Helvetica">SOA
          Tools Top-Level Project</font></strong></td>
	</tr>
</table>
    <p><a href="/stp/"><img border="0" src="../PC_v2_0/external.gif" width="20" height="16">
    SOA Tools project home page.</a> The SOA Tools Project is a brand-new
    project as of the writing of this Roadmap and has not yet formulated an
    architecture.</p>
<table border=0 cellspacing=5 cellpadding=2 width="100%" >
	<tr bgcolor="#999999">
    	<td align="left" valign="top" bgcolor="#0080C0"><strong><font color="#FFFFFF" face="Arial,Helvetica">Modeling
          Top-Level Project</font></strong></td>
	</tr>
</table>
    <p>The Modeling top-level project is currently in the proposal phase, but is
    expected to be approved in the near future. The model top-level project will
    have the following architecture:</p>
    <p><img border="0" src="gmf.gif"></p>
    <p><i>February 22, 2006</i></p>
    
      </div>
  </div>
<?php
	# Paste your HTML content between the EOHTML markers!	
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
