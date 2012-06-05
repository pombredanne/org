<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# m2miwg_charter.php
	#
	# Author: 		Mike Milinkovich
	# Date:			2012-06-04
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "* * * DRAFT - Not for Publication * * *<br/>Eclipse Polarsys Industry Working Group Charter";
	$pageKeywords	= "aerospace, systems, engineering, polarsys, safety, iwg, charter, eclipse";
	$pageAuthor		= "Mike Milinkovich";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>
		<br/><strong>June 8, 2012</strong>
<H2 CLASS="western">Goals and Vision</H2>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">In
demanding engineering domains - such as aerospace, defense and
security, transportation, energy, healthcare or telecommunications -
safety-critical and embedded systems development must meet several
important requirements:</FONT></FONT></FONT></P>
<H4 CLASS="western">Innovation</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Ensuring
the highest levels of safety, reliability, service and performance
implies a continuous effort of research and development, not only
with the products themselves but also with the development methods
and tools.</FONT></FONT></FONT></P>
<H4 CLASS="western">Computer Assistance and Automation</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
numerous and complex operations required to develop and maintain
industrial systems imply a high level of automation based on software
tools.</FONT></FONT></FONT></P>
<H4 CLASS="western">Certification</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">From
DO178 to ISO26262 and ECSS 40, the development of safety-critical and
embedded system has to comply with strict regulations impacting not
only the final product, but also the development process and the
tools used to build it.</FONT></FONT></FONT></P>
<H4 CLASS="western">Very Long Term Support</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Typical
products have life cycles from 30 to 70 years. During this time, the
tool chains must remain operational.</FONT></FONT></FONT></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Polarsys Industry Working Group (IWG) aims at answering these needs
by:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Providing
a set of industry-friendly open source tools, frameworks and
components</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Providing
collaborative means to make open innovation easier</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Fostering
exchanges between academics and industrial partners</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Operating
dedicated software repositories, build chains, test facilities, etc.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Managing
the quality and maturity of tools and components from early research
prototypes through obsolescence</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Ensuring
open innovation through the sharing of the research, development and
maintenance efforts as far as possible</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Organizing
sustainable commercial services and ecosystems around those
components</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Providing
the documents and qualification kits required to cope with
certification issues</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Recognizing
projects maturity and company know-how and commitment through a
branding process available only to Polarsys IWG Member organizations.</FONT></FONT></FONT></P>
<H2 CLASS="western"><A NAME="Core_domains"></A>Core domains</H2>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Polarsys
focuses on techniques, frameworks and tools to fulfill its goal and
vision, including:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Modeling
- systems, hardware and software</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Code
analysis (static analysis)</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Debugging,
tracing and other integration tools</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Lifecycle
process support tools - configuration management, change tracking,
technical facts management, project reporting</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Test
and verification frameworks and tools targeting embedded software
methods, simulation and early validation</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Embedded
components (RTOS, middleware, etc.)</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">SoC
- System on Chip - simulation and hardware logic (VHDL, SystemC,
etc.)</FONT></FONT></FONT></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Other
domain specific techniques and tools may be proposed for acceptance
by the IWG Steering Committee.</FONT></FONT></FONT></P>
<H2 CLASS="western"><A NAME="Component_Management"></A>Component
Management</H2>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Polarsys
does not intend to re-develop components. A lot of very good
solutions answering to some Polarsys needs already exist in open
source. But most of the time, some specific issues like durability or
certification are not taken into account. In this case, Polarsys
plays its part by completing components assets, setting up specific
support, and coordinating development and support. Two kinds of
projects are therefore supported in Polarsys:</FONT></FONT></FONT></P>
<H4 CLASS="western">Hosted Projects</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
technical artifacts are hosted by Polarsys.</FONT></FONT></FONT></P>
<H4 CLASS="western">Coordination Projects</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Most
of the technical artifacts are hosted elsewhere, and Polarsys focuses
on users coordination and specific artifacts (patches, qualification
kits, etc.).</FONT></FONT></FONT></P>
<H2 CLASS="western"><A NAME="Governance_and_Precedence"></A>Governance
and Precedence</H2>
<H4 CLASS="western">Applicable Documents</H4>
<P STYLE="margin-left: 0.75cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><A HREF="../documents/Eclipse%20BYLAWS%202011_08_15%20Final.pdf"><FONT COLOR="#3366bb"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Eclipse
Bylaws</FONT></FONT></FONT></A></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><A HREF="../industry-workgroups/industry_wg_process.php"><FONT COLOR="#3366bb"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Industry
Working Group Process</FONT></FONT></FONT></A></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><A HREF="../documents/Eclipse%20MEMBERSHIP%20AGMT%202010_01_05%20Final.pdf"><FONT COLOR="#3366bb"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Eclipse
Membership Agreement</FONT></FONT></FONT></A></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><A HREF="http://www.eclipse.org/projects/dev_process/development_process.php"><FONT COLOR="#3366bb"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Eclipse
Development Process</FONT></FONT></FONT></A></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">All
Polarsys Members must be parties to the Eclipse Membership agreement,
including the requirement set forth in Section 2.2 to follow the
Bylaws and then-current policies of the Eclipse Foundation. In the
event of any conflict between the terms set forth in this Polarsys
Industry Working Group Charter and the Eclipse Foundation Bylaws,
Membership Agreement, Eclipse Development Process, Eclipse Industry
Working Group Process, or any policies of the Eclipse Foundation, the
terms of the Eclipse Foundation Bylaws, Membership Agreement,
process, or policy shall take precedence.</FONT></FONT></FONT></P>
<H2 CLASS="western"><A NAME="IP_Management"></A>IP Management</H2>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Intellectual Property Policy of the Eclipse Foundation will apply to
all Polarsys activities. Polarsys will follow the Eclipse
Foundation's IP due diligence process in order to provide clean open
source software released under EPL or any other licenses approved by
the IWG and the Eclipse Foundation Board of Directors, such as
BSD-like and LGPL.</FONT></FONT></FONT></P>
<H2 CLASS="western"><A NAME="Development_Process"></A>Development
Process</H2>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Eclipse Foundation Development Process will apply to all Polarsys
open source projects. In particular, the project lifecycle model and
review process will be followed by all Polarsys open source projects.</FONT></FONT></FONT></P>
<H2 CLASS="western"><A NAME="Membership"></A>Membership</H2>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">An
entity must be at least a</FONT></FONT></FONT><FONT COLOR="#000000">&nbsp;</FONT><A HREF="../../membership/become_a_member/membershipTypes.php#solutions"><FONT COLOR="#3366bb"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Solutions
Member</FONT></FONT></FONT></A><FONT COLOR="#000000"> </FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">of
the Eclipse Foundation, have executed the IWG Participation
Agreement, and adhere to the requirements set forth in this Charter
to participate to Polarsys. The Eclipse Solution Member fees appear
in the tables below for convenience only: they are decided as
described in the</FONT></FONT></FONT><FONT COLOR="#000000">&nbsp;</FONT><A HREF="../documents/Eclipse%20BYLAWS%202011_08_15%20Final.pdf"><FONT COLOR="#3366bb"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Eclipse
bylaws</FONT></FONT></FONT></A><FONT COLOR="#000000"> </FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">and
detailed in the</FONT></FONT></FONT><FONT COLOR="#000000">&nbsp;</FONT><A HREF="../documents/Eclipse%20MEMBERSHIP%20AGMT%202010_01_05%20Final.pdf"><FONT COLOR="#3366bb"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Eclipse
membership agreement</FONT></FONT></FONT></A><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Classes_of_membership"></A>Classes of
membership</H3>
<H4 CLASS="western"><A NAME="Steering_Committee_Members"></A>Steering
Committee Members</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Steering
Committee Members are organizations that view Polarsys as a strategic
industrial working group and are investing resources to sustain its
activities. Typical Steering Committee Members include industrial
users of the technologies and projects supported by Polarsys.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 1.5cm; margin-bottom: 0.13cm; background: #ffffff; line-height: 0.49cm"><A NAME="Polarsys_Steering_Committee_Member_Fees"></A>
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Polarsys
Steering Committee Member Fees</B></FONT></FONT></FONT></P>
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#ffffff">
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Turnover</B></FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Eclipse
			Solution<BR>Membership</B></FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Polarsys<BR>Membership</B></FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Total</B></FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$250
			million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$20.000</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$30.000</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$50.000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$100
			million &lt;= $250 million</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$15.000</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$30.000</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$45.000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$50
			million &lt;= $100 million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10.000</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$30.000</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$40.000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$10
			million &lt;= $50 million</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$7.500</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$20.000</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$27.500</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&lt;$10
			million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$5.000</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$20.000</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$25.000</FONT></FONT></FONT></P>
		</TD>
	</TR>
</TABLE>
<H4 CLASS="western"><A NAME="Participant_members"></A>Participant
members</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Participant
Members are organizations that view Polarsys as an important part of
their corporate and product strategy and offer products and services
based on, or with, Polarsys. These organizations want to participate
in the development of the Polarsys ecosystem. Typical Participant
members includes services providers for the technologies and products
supported by Polarsys.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 1.5cm; margin-bottom: 0.13cm; background: #ffffff; line-height: 0.49cm"><A NAME="Polarsys_Participant_Member_Fees"></A>
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Polarsys
Participant Member Fees</B></FONT></FONT></FONT></P>
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#ffffff">
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Turnover</B></FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Eclipse
			Solution<BR>Membership</B></FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Polarsys<BR>Membership</B></FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Total</B></FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$250
			million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$20.000</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10.000</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$30.000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$100
			million &lt;= $250 million</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$15.000</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10.000</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$25.000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$50
			million &lt;= $100 million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10.000</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10.000</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$20.000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$10
			million &lt;= $50 million</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$7.500</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$7.500</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$15.000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&lt;$10
			million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$5.000</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$5.000</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10.000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&lt;$1
			million &amp; &lt; 10 employees</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$1.500</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$1.500</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$3.000</FONT></FONT></FONT></P>
		</TD>
	</TR>
</TABLE>
<H4 CLASS="western"><A NAME="Guests"></A>Guests</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Guests
are organizations who have been invited for one year by the Steering
Committee of Polarsys to participate to some aspects of the
activities of the Industrial Working Group. Typical guests includes
R&amp;D partners, academic entities and potential future full fledged
members who want to have an inner look before deciding of their
strategy. Even if guests can be invited to a Polarsys body for some
meetings, they have no right to vote. Invitations may be renewed by
the Steering Committee. Guests will be required to sign a
participation agreement.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Committers"></A>Committers</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Committer
Members are individuals who through a process of meritocracy defined
by the Eclipse Development Process are able to contribute and commit
code to Polarsys projects</FONT></FONT></FONT> <FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">they
are responsible for. Committers may be members by virtue of working
for a member organization, or may choose to complete the membership
process independently if they are not. For further explanation and
details, see the&nbsp;</FONT></FONT></FONT><A HREF="../../membership/become_a_member/committer.php"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Eclipse
Committer Membership</FONT></FONT></A><FONT COLOR="#000000"> </FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">page.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Polarsys_Membership_Summary"></A>Polarsys
Membership Summary</H3>
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#ffffff">
	<TR>
		<TD WIDTH=170 BGCOLOR="#d3d3d3"></TD>
		<TD WIDTH=123 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Polarsys
			Steering Committee Member</B></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Polarsys
			Solution Member</B></FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Committer</B></FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Guest</B></FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Member
			of the Steering Committee</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Elected</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Invited</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Member
			of the Architecture Board</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Elected</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Invited</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Quality
			&amp; Branding Committee</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Elected</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Invited</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Member
			of Change Control Boards</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Invited</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Access
			to the open collaboration infrastructure</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Write
			Access to open source code repositories</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Access
			to the LTS Build Infrastructure</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Access
			to LTS binary releases</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Host
			custom build on IWG infrastructure</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Maturity
			assessment program</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Access
			to qualification kits</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">IP
			Due diligence</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Branding
			process</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Host
			private R&amp;D projects</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=123 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=113 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
	</TR>
</TABLE>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><BR>Services
are detailed in section</FONT></FONT></FONT><FONT COLOR="#000000">&nbsp;</FONT><A NAME="Services"><FONT COLOR="#552200"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Services</FONT></FONT></FONT></A></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">All
matters related to Membership in the Eclipse Foundation and the
Polarsys IWG will be governed by the Eclipse Foundation Bylaws,
Membership Agreement and Eclipse Industry Working Group Process.
These matters include, without limitation delinquency, payment of
dues, termination, resignation, reinstatement, assignment, and the
distribution of assets upon dissolution.</FONT></FONT></FONT></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Members
who resign, or otherwise terminate their membership in the Polarsys
IWG lose their rights to access and use the private assets and data
of Polarsys after the date of the termination.</FONT></FONT></FONT></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
private data of terminated Members, such test cases or custom build
chains shall be archived and the archive sent back to their copyright
holders under an open source license specified by the Steering
Committee. The private data of Members terminated can be removed from
Polarsys storages fourty five (45) days after the Termination.
Nevertheless, the Members terminated can request to the Steering
Committee to store for two (2) years their archived private data.
This request shall be sent within thirty (30) days after the
Termination and can be accepted or not, on the sole discretion of the
Steering Committee.</FONT></FONT></FONT></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
survival of any licenses to Polarsys private assets acquired by a
Member during the period of Membership shall be as specified in the
license.</FONT></FONT></FONT></P>
<H2 CLASS="western"><A NAME="Services"></A>Services</H2>
<H3 CLASS="western"><A NAME="Open_source_collaboration_infrastructure"></A>
Open source collaboration infrastructure</H3>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Polarsys IWG leverages the usual Eclipse open source collaboration
infrastructure. As such, source code repositories, Bugzilla, wikis,
forums, project mailing lists, and other services provided as the
Open Source collaboration infrastructure are publicly visible.
Committers have write access to this infrastructure, and as such have
the rights and obligations as set forth in the Eclipse Development
Process, and the various Eclipse Committer Agreements. The catalog of
Polarsys components is part of this collaboration infrastructure.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="LTS_build_and_test_infrastructure"></A>LTS
build and test infrastructure</H3>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Additionally,
Polarsys aims to provide a specific build and test infrastructure for
Long Term Support. This infrastructure will enable build and test of
specific long term releases for a duration of up to 10 years in a
first version, and up to 40 years with an adequate usage of
virtualization technologies.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Access_to_LTS_binary_releases"></A>Access
to LTS binary releases</H3>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Polarsys
will produce public binary releases modeled after the Eclipse release
train process, including Service Releases SR1 and SR2.</FONT></FONT></FONT></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Polarsys
Long Term Support releases (post SR2) are only accessible to Polarsys
member companies. Such binary code may not be redistributed unless it
is integrated into, or updates, a commercial software product, or
custom developed software, and is distributed pursuant to an Object
Code License.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Hosting_custom_builds_on_the_Polarsys_in"></A>
Hosting custom builds on the Polarsys infrastructure</H3>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">This
service gives the capability of using the Polarsys test and build
infrastructure in order to create member-specific bundles. These
bundles can create another combination of Polarsys components and are
private to the member who defines and uses them.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Maturity_assessment_program"></A>Maturity
assessment program</H3>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Maturity
assessment is at the core of Polarsys IWG's goal of providing
industrial quality tools.</FONT></FONT></FONT></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">It
consists of the evaluation of component maturity according to a
classification similar to</FONT></FONT></FONT><FONT COLOR="#000000">&nbsp;</FONT><A HREF="http://en.wikipedia.org/wiki/Technology_readiness_level"><FONT COLOR="#3366bb"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">TRL
levels</FONT></FONT></FONT></A><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">.</FONT></FONT></FONT></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">This
evaluation is done collaboratively by component developers, component
integrators, and component users.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Access_to_qualification_kits"></A>Access
to qualification kits</H3>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Many
Polarsys components are used in the development of certified and
qualified embedded software.</FONT></FONT></FONT></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">As
such, specific documentation is needed and is adapted in the context
of a given certification process.</FONT></FONT></FONT></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">These
documents, like development plans and test plans, are part of the
Polarsys qualification kits available for the components.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="IP_due_diligence"></A>IP due diligence</H3>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">IP
due diligence is necessary to check that the committers have the
right to open-source the code they put in Polarsys.</FONT></FONT></FONT></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">It
is also necessary to check that the different integrated components
have compatible licenses. This is even more important in Polarsys, as
we allow not only EPL licensed components, but also BSD-style
licensed components and LGPL licensed components.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Branding_process"></A>Branding process</H3>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Branding process aims at rewarding the skills and investment of
service providers.</FONT></FONT></FONT></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Brand recognizes that service providers are able to extend or provide
Long Term Support for a component.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Hosting_private_projects"></A>Hosting
private projects</H3>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">In
order to promote the maturation of research prototypes and to foster
open innovation, Polarsys provides the ability to host members'
time-limited private projects that may become new Polarsys
components. Private projects may only be initiated by Steering
Committee members. Guests may participate in private projects at the
request of the Steering Committee.</FONT></FONT></FONT></P>
<H2 CLASS="western"><A NAME="Governance"></A>Governance</H2>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Polarsys
is designed as:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">a
user driven organization,</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">a
means to foster a vibrant and sustainable ecosystem of components and
service providers,</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">a
means to organize the community of each project or component so that
users and developers define the roadmap collaboratively.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">In
order to implement these principles, the following governance bodies
have been defined (each a &quot;Body&quot;):</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Steering Committee</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
General Assembly</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Architecture Board</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Quality &amp; Branding Committee</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Change
Control Boards</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Project
Management Committees</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Common_Dispositions"></A>Common
Dispositions</H3>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
dispositions below apply to all Polarsys bodies, unless otherwise
specified. For all matters related to membership action, including
without limitation: meetings, quorum, voting, electronic voting
action without meeting, vacancy, resignation or removal, the terms
set forth in Section 6 of the Eclipse Foundation Bylaws apply.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Good_Standing"></A>Good Standing</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">A
representative shall be deemed to be in Good Standing, and thus
eligible to vote on issues coming before the Body he participates to,
if the representative has attended (in person or telephonically) a
minimum of three (3) of the last four (4) Body meetings (if there
have been at least four meetings). Appointed representatives on the
Body may be replaced by the Member organization they are representing
at any time by providing written notice to the Steering Committee. In
the event a Body member is unavailable to attend or participate in a
meeting of the Body, he or she may send a representative and may vote
by proxy, which shall be included in determining whether the
representative is in Good Standing. As per the Eclipse Foundation
Bylaws, a representative shall be immediately removed from the Body
upon the termination of the membership of such representative&rsquo;s
Member organization.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Voting"></A>Voting</H4>
<br/><strong><A NAME="Super_Majority"></A>Super Majority</strong>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">For
actions (i) requesting that the Eclipse Foundation Board of Directors
approve an additional distribution license for Polarsys projects;
(ii) amending the terms of the Polarsys Participation agreement;
(iii) approving or changing the name of Polarsys; (iv) approving
changes to annual Member contribution requirements; any such actions
must be approved by no less than two-thirds (2/3) of the
representatives in Good Standing represented at a Steering Committee
meeting at which a quorum is present.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Term_and_Dates_of_elections"></A>Term
and Dates of elections</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">This
section only applies to the Steering Committee, the Architecture
Board and the Quality and Branding Committee.</FONT></FONT></FONT></P>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">All
representatives shall hold office until their respective successors
are appointed or elected, as applicable. There shall be no
prohibition on re-election or re-designation of any representative
following the completion of that representative &rsquo;s term of
office.</FONT></FONT></FONT></P>
<br/><strong><A NAME="Steering_Committee_Members_2"></A>Steering
Committee Members</strong>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Steering
Committee Members Representatives shall serve in such capacity until
the earlier of their removal by their respective appointing Member
organization or as otherwise provided for in this Charter.</FONT></FONT></FONT></P>
<br/><strong><A NAME="Elected_representatives"></A>Elected
representatives</strong>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Elected
representatives shall each serve one-year terms and shall be elected
to serve from April 1 to March 31 of each calendar year, or until
their respective successors are elected and qualified, or as
otherwise provided for in this Charter. Procedures governing
elections of Representatives may be established pursuant to
resolutions of the Steering Committee provided that such resolutions
are not inconsistent with any provision of this Charter.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Meetings_Management"></A>Meetings
Management</H4>
<br/><strong><A NAME="Place_of_meetings"></A>Place of meetings</strong>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">All
meetings may be held at any place that has been designated from
time-to-time by resolution of the corresponding Body. All meetings
may be held remotely using phone calls, video calls or any other mean
as designated from time-to-time by resolution of the corresponding
Body.</FONT></FONT></FONT></P>
<br/><strong><A NAME="Regular_meetings"></A>Regular meetings</strong>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">No
Body meeting will be deemed to have been validly held unless a notice
of same has been provided to each of the representative in Good
Standing at least thirty (30) calendar days prior to such meeting,
which notice will identify all potential actions to be undertaken by
the Body at the Body meeting. No representative will be intentionally
excluded from Body meetings and all representatives shall receive
notice of the meeting as specified above; however, Body meetings need
not be delayed or rescheduled merely because one or more of the
representatives cannot attend or participate so long as at least a
quorum of the Body (as defined in Section</FONT></FONT></FONT><FONT COLOR="#000000">&nbsp;</FONT><A NAME="Quorum"><FONT COLOR="#552200"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Quorum</FONT></FONT></FONT></A><FONT COLOR="#000000">&nbsp;</FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">above)
is represented at the Body meeting. Electronic voting shall be
permitted in conjunction with any and all meetings of the Body the
subject matter of which requires a vote of the Body to be delayed
until each such representative in attendance thereat has conferred
with his or her respective Member organization as set forth in
Section</FONT></FONT></FONT><FONT COLOR="#000000">&nbsp;</FONT><A NAME="Voting"><FONT COLOR="#552200"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Voting</FONT></FONT></FONT></A><FONT COLOR="#000000">&nbsp;</FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">above.</FONT></FONT></FONT></P>
<br/><strong><A NAME="Actions"></A>Actions</strong>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Body may undertake an action only if it was identified in a Body
Meeting notice or otherwise identified in a notice of special
meeting.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Invitations"></A>Invitations</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Body may invite any Polarsys member to any of its meetings. These
invited attendees have no right of vote.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Steering_Committee"></A>Steering
Committee</H3>
<H4 CLASS="western"><A NAME="Powers_and_Duties"></A>Powers and Duties</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Steering
committee members are required to:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Define
the strategy of the IWG</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Define
the global roadmap</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Discuss
and amend the charter and the participation agreement</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Define
the budget and fees each year</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Define
&amp; Follow maketing and communication activities</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Invite
guest members</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Composition"></A>Composition</H4>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Each
Steering Committee Member of the IWG has a seat on the Steering
Committee.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">At
least one seat is allocated to Participant Members. An additional
seat on the Committee shall be allocated to the Participant Members
for every additional five (5) seats beyond one (1) allocated to
Steering Committee Members. Participant Member seats are allocated
following the Eclipse &quot;Single Transferable Vote&quot;, as
defined in the Eclipse Bylaws.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Steering Committee elects among its members a chairman who will
represent the IWG. They will serve from April 1 to March 31 of each
calendar year, or until their respective successors are elected and
qualified, or as otherwise provided for in this Charter.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Meeting_Management"></A>Meeting
Management</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Steering Committee meets at least twice a year.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="General_Assembly"></A>General Assembly</H3>
<H4 CLASS="western"><A NAME="Powers_and_Duties_2"></A>Powers and
Duties</H4>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Approve
changing the name of Polarsys.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Composition_2"></A>Composition</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Each
Steering Committee and Participant Member of the IWG has a seat on
the General Assembly.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Meeting_Management_2"></A>Meeting
Management</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
General Assembly meets at least once a year.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Architecture_Board"></A>Architecture
Board</H3>
<H4 CLASS="western"><A NAME="Powers_and_Duties_3"></A>Powers and
Duties</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Architecture
Board members are required to:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Ensure
the technical consistency of Polarsys projects</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Ensure
that Polarsys projects achieve VLTS objectives</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Recommend
technologies</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Establish
technical guidelines</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Architecture Board validates new project proposals</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Composition_3"></A>Composition</H4>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Each
Steering Committee Member of the IWG has a seat on the Architecture
Board.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Each
Change Control Board elects one of its members to the Architecture
Board.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Architecture Board elects a chairman who reports to the Steering
Committee. This chairman is elected among the members of the
Architecture Board. He will serves from April 1 to March 31 of each
calendar year, or until his successor is elected and qualified, or as
otherwise provided for in this Charter.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Meeting_Management_3"></A>Meeting
Management</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Architecture Board meets at least twice a year.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="The_Quality_and_Branding_Committee"></A>The
Quality and Branding Committee</H3>
<H4 CLASS="western"><A NAME="Powers_and_Duties_4"></A>Powers and
Duties</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Quality and Branding Committee members are required to:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Ensure
the consistency of Branding process and attribute maturity labels
(see Branding Charter Wiki Page)</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Define
the IWG quality kit and maturity process</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Validate
that the projects conform to the IWG quality kit</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Validate
that the projects apply the IP Process</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Composition_4"></A>Composition</H4>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Each
Steering Committee Member of the IWG has a seat on the Quality and
Branding Committee.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">At
least one seat is allocated to Participant Members. An additional
seat on the Committee shall be allocated to the Participant Members
for every additional five (5) seats beyond one (1) allocated to
Steering Committee Members. Participant Member seats are allocated
following the Eclipse &quot;Single Transferable Vote&quot;, as
defined in the Eclipse Bylaws.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Quality &amp; Branding Committee elects a chairman who reports to the
Steering Committee. This chairman is elected among the members of the
Quality &amp; Branding Committee. He will serves from April 1 to
March 31 of each calendar year, or until his successor is elected and
qualified, or as otherwise provided for in this Charter.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Meeting_Management_4"></A>Meeting
Management</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Quality and Branding Committee meets at least twice a year.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Change_Control_Boards"></A>Change
Control Boards</H3>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Each
component or release train (bundle) in the IWG are driven by a Change
Control Board.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Powers_and_Duties_5"></A>Powers and
Duties</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Change
Control Boards members are required to:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Instantiate
IWG global roadmaps for the project</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Apply
the Architecture Board recommendations</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Plan
and arbitrate defects fixes and improvements implementation.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Ensure
the relationships with the technical team of the project.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Composition_5"></A>Composition</H4>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Each
Steering Committee or Participant Member of the IWG can have a seat
on the Change Control Board.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.75cm; text-indent: -0.61cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Each
Change Control Board elects a chairman who will represent it to the
Architecture Board. This chairman is elected among the members of
each Change Control Board. He will serves from April 1 to March 31 of
each calendar year, or until his successor is elected and qualified,
or as otherwise provided for in this Charter.</FONT></FONT></FONT></P>
<H4 CLASS="western"><A NAME="Meeting_Management_5"></A>Meeting
Management</H4>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Change Control Boards meet at least twice a year.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Project_Management_Committees"></A>Project
Management Committees</H3>
<P STYLE="margin-top: 0.42cm; margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Any
Project Management Committee (PMC) established by Polarsys shall be
governed by the Eclipse Development Process.</FONT></FONT></FONT></P>
<P>&nbsp;</P>
<P><BR><BR>

</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

