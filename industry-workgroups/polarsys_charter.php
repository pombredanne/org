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
		
<H2>Goals and Vision</H2>
<P>In
demanding engineering domains &ndash; such as aerospace, defense and
security, transportation, energy, health care or telecommunications &ndash;
safety-critical and embedded systems development must meet several
important requirements.</P>

<blockquote><ul>
<li><strong>Innovation:</strong> Ensuring
the highest levels of safety, reliability, service, and performance
implies a continuous effort of research and development, not only
with the products themselves but also with the development methods
and tools.</li>

<li><strong>Computer Assistance and Automation:</strong> The
numerous and complex operations required to develop and maintain
industrial systems imply a high level of automation based on software
tools.</li>

<li><strong>Certification:</strong> From
DO178 to ISO26262 and ECSS 40, the development of safety-critical and
embedded systems has to comply with strict regulations impacting not
only the final product, but also the development process and the
tools used to build it.</li>

<li><strong>Very Long Term Support:</strong> Typical
products have life cycles from 30 to 70 years. During this time, the
tool chains must remain operational.</li>
</ul></blockquote>

<p>The
Polarsys Industry Working Group (IWG) aims at answering these needs
by: </P>
<blockquote><ul>
<li>Providing
a set of industry-friendly open source tools, frameworks, and
components</li>
<li>Providing
collaborative means to make open innovation easier</li>
<li>Fostering
exchanges between academics and industry partners</li>
<li>Operating
dedicated software repositories, build chains, test facilities, etc.</li>
<li>Managing
the quality and maturity of tools and components from early research
prototypes through obsolescence</li>
<li>Ensuring
open innovation through the sharing of the research, development, and
maintenance efforts as far as possible</li>
<li>Organizing
sustainable commercial services and ecosystems around the
components</li>
<li>Providing
the documents and qualification kits required for 
certification</li>
<li>Recognizing
project maturity and company know-how and commitment through a
branding process that is available only to Polarsys IWG Member organizations</li>
</ul></blockquote>

<H2><A NAME="Core_domains"></A>Core Domains</H2>
<P>Polarsys
focuses on techniques, frameworks and tools to fulfill its goal and
vision, including</p>
<blockquote><ul>
<li>Modeling &ndash; systems, hardware and software
Code
analysis (static analysis)</li>
<li>Debugging,
tracing and other integration tools
<li>Lifecycle
process support tools &ndash; configuration management, change tracking,
technical facts management, project reporting</li>
<li>Test
and verification frameworks and tools targeting embedded software
methods, simulation, and early validation</li>
<li>Embedded
components (RTOS, middleware, etc.)
<li>SoC (System on Chip) simulation and hardware logic (VHDL, SystemC,
etc.)</li>
</ul></blockquote>
<p>Other
domain specific techniques and tools may be proposed for acceptance
by the IWG Steering Committee.</p>

<H2><A NAME="Component_Management"></A>Component
Management</H2>
<P>Polarsys
does not intend to systematically re-develop components. A lot of very good
solutions answering some Polarsys needs already exist in open
source. But most of the time, specific issues like durability or
certification are not taken into account. In this case, Polarsys
plays its part by completing components assets, setting up specific
support, and coordinating development and support. Two kinds of
projects are therefore supported in Polarsys:</P>

<H4>Hosted Projects</H4>
<P>The
technical artifacts are hosted by Polarsys.</P>
<H4>Coordination Projects</H4>
<P>Most
of the technical artifacts are hosted elsewhere, and Polarsys focuses
on user coordination and specific artifacts (patches, qualification
kits, etc.).</P>

<H2><A NAME="Governance_and_Precedence"></A>Governance
and Precedence</H2>
<H4>Applicable Documents</H4>
<blockquote><ul>
<li><A HREF="../documents/Eclipse%20BYLAWS%202011_08_15%20Final.pdf">Eclipse
Bylaws</A></li>
<li><A HREF="../industry-workgroups/industry_wg_process.php">Industry
Working Group Process</A></li>
<li><A HREF="../documents/Eclipse%20MEMBERSHIP%20AGMT%202010_01_05%20Final.pdf">Eclipse
Membership Agreement</A></li>
<li><A HREF="http://www.eclipse.org/projects/dev_process/development_process.php">Eclipse
Development Process</A></li>
</ul></blockquote>

<P>All
Polarsys Members must be parties to the Eclipse Membership Agreement,
including the requirement set forth in Section 2.2 to follow the
Bylaws and then-current policies of the Eclipse Foundation. In the
event of any conflict between the terms set forth in this Polarsys
Industry Working Group Charter and the Eclipse Foundation Bylaws,
Membership Agreement, Eclipse Development Process, Eclipse Industry
Working Group Process, or any policies of the Eclipse Foundation, the
terms of the Eclipse Foundation Bylaws, Membership Agreement,
process, or policy shall take precedence.</P>

<H2><A NAME="IP_Management"></A>IP Management</H2>
<p>The
Intellectual Property Policy of the Eclipse Foundation will apply to
all Polarsys activities. Polarsys will follow the Eclipse
Foundation's IP due diligence process in order to provide clean open
source software released under EPL or any other licenses approved by
the IWG and the Eclipse Foundation Board of Directors, such as
BSD-like and LGPL.</P>

<H2><A NAME="Development_Process"></A>Development
Process</H2>
<P>The
Eclipse Foundation Development Process will apply to all Polarsys
open source projects. In particular, the project lifecycle model and
review process will be followed by all Polarsys open source projects.</P>

<H2 ><A NAME="Membership"></A>Membership</H2>
<P>In order to participate in Polarsys, an 
entity must be at least a <A HREF="../../membership/become_a_member/membershipTypes.php#solutions">Solutions
Member</A> of
the Eclipse Foundation, have executed the IWG Participation
Agreement, and adhere to the requirements set forth in this charter. The Eclipse Solutions Member fees appear
in the tables below for convenience only; they are determined as
described in the <A HREF="../documents/Eclipse%20BYLAWS%202011_08_15%20Final.pdf">Eclipse
Bylaws</A> and
detailed in the <A HREF="../documents/Eclipse%20MEMBERSHIP%20AGMT%202010_01_05%20Final.pdf">Eclipse
Membership Agreement.</P>

<H3 ><A NAME="Classes_of_membership"></A>Classes of
Membership</H3>
<H4 ><A NAME="Steering_Committee_Members"></A>Steering
Committee Members</H4>
<P >Steering
Committee members are organizations that view Polarsys as a strategic
industry working group and are investing resources to sustain its
activities. Typical Steering Committee members include industry
users of the technologies and projects supported by Polarsys.</P>
<P STYLE="margin-left: 1.5cm; margin-bottom: 0.13cm; background: #ffffff; line-height: 0.49cm"><A NAME="Polarsys_Steering_Committee_Member_Fees"></A>
<B>Polarsys
Steering Committee Member Fees</B></P>
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#ffffff">
	<TR>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Turnover</B></P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Eclipse
			Solutions<BR>Membership</B></P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Polarsys<BR>Membership</B></P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Total</B></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm">&gt;$250
			million</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$20,000</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$30,000</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$50,000</P>
		</TD>
	</TR>
	<TR>
		<TD >
			<P STYLE="border: none; padding: 0cm">&gt;$100
			million &lt;= $250 million</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$15,000</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$30,000</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$45,000</P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm">&gt;$50
			million &lt;= $100 million</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$30,000</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$40,000</P>
		</TD>
	</TR>
	<TR>
		<TD >
			<P STYLE="border: none; padding: 0cm">&gt;$10
			million &lt;= $50 million</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$7,500</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$20,000</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$27,500</P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm">&lt;$10
			million</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$5,000</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$20,000</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$25,000</P>
		</TD>
	</TR>
</TABLE>

<H4><A NAME="Participant_members"></A>Participant
Members</H4>
<P>Participant
members are organizations that view Polarsys as an important part of
their corporate and product strategy and offer products and services
based on, or with, Polarsys. These organizations want to participate
in the development of the Polarsys ecosystem. Typical Participant
members are services providers for the technologies and products
supported by Polarsys.</P>
<P STYLE="margin-left: 1.5cm; margin-bottom: 0.13cm; background: #ffffff; line-height: 0.49cm"><A NAME="Polarsys_Participant_Member_Fees"></A>
<B>Polarsys
Participant Member Fees</B></P>
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#ffffff">
	<TR>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Turnover</B></P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Eclipse
			Solutions<BR>Membership</B></P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Polarsys<BR>Membership</B></P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Total</B></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm">&gt;$250
			million</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$20,000</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$30,000</P>
		</TD>
	</TR>
	<TR>
		<TD >
			<P STYLE="border: none; padding: 0cm">&gt;$100
			million &lt;= $250 million</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$15,000</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$25,000</P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm">&gt;$50
			million &lt;= $100 million</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$20,000</P>
		</TD>
	</TR>
	<TR>
		<TD >
			<P STYLE="border: none; padding: 0cm">&gt;$10
			million &lt;= $50 million</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$7,500</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$7,500</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$15,000</P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm">&lt;$10
			million</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$5,000</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$5,000</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000</P>
		</TD>
	</TR>
	<TR>
		<TD >
			<P STYLE="border: none; padding: 0cm">&lt;$1
			million &amp; &lt; 10 employees</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$1,500</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$1,500</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$3,000</P>
		</TD>
	</TR>
</TABLE>

<H4><A NAME="Guests"></A>Guests</H4>
<P>Guests
are organizations who have been invited for one year by the Steering
Committee of Polarsys to participate in some aspects of the
activities of the Industry Working Group. Typical guests includes
R&amp;D partners, academic entities, and potential future full-fledged
members who want to have an closer look before deciding on their
strategy. When guests are invited to a Polarsys body for 
meetings, they have no right to vote. Invitations may be renewed by
the Steering Committee. Guests are required to sign a
participation agreement.</P>

<H4><A NAME="Committers"></A>Committers</H4>
<P>Committer
members are individuals who through a process of meritocracy defined
by the Eclipse Development Process are able to contribute and commit
code to Polarsys projects for which they are responsible. Committers may be members by virtue of working
for a member organization, or may choose to complete the membership
process independently. For further explanation and
details, see the&nbsp;<A HREF="../../membership/become_a_member/committer.php">Eclipse
Committer Membership</A> page.</P>

<H3><A NAME="Polarsys_Membership_Summary"></A>Polarsys
Membership Summary</H3>
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#ffffff">
	<TR>
		<TD WIDTH=170 ></TD>
		<TD WIDTH=123 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Polarsys
			Steering Committee Member</B></P>
		</TD>
		<TD WIDTH=113 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Polarsys
			Solutions Member</B></P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Committer</B></P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Guest</B></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Member
			of the Steering Committee</P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Elected</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Invited</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Member
			of the Architecture Committee</P>
		</TD>
		<TD WIDTH=123 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=113 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Elected</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Invited</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Quality
			and Branding Committee</P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Elected</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Invited</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Member
			of Project Planning Committees</P>
		</TD>
		<TD WIDTH=123 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=113 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Invited</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Access
			to the open collaboration infrastructure</P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Write
			Access to open source code repositories</P>
		</TD>
		<TD WIDTH=123 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD WIDTH=113 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Access
			to the LTS Build Infrastructure</P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Access
			to LTS binary releases</P>
		</TD>
		<TD WIDTH=123 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=113 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Host
			custom build on IWG infrastructure</P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Maturity
			assessment program</P>
		</TD>
		<TD WIDTH=123 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=113 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Access
			to qualification kits</P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">IP
			due diligence</P>
		</TD>
		<TD WIDTH=123 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=113 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Branding
			process</P>
		</TD>
		<TD WIDTH=123>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=113>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=170 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Host
			private R&amp;D projects</P>
		</TD>
		<TD WIDTH=123 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=113 >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">-</P>
		</TD>
		<TD >
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">X</P>
		</TD>
	</TR>
</TABLE>

<P>
Services are detailed in the <A href="#Services" class=jump>Services</A> section.</P>
<P>All
matters related to membership in the Eclipse Foundation and the
Polarsys IWG will be governed by the Eclipse Foundation Bylaws,
Membership Agreement, and Eclipse Industry Working Group Process.
These matters include, without limitation delinquency, payment of
dues, termination, resignation, reinstatement, assignment, and the
distribution of assets upon dissolution.</P>

<P>Members
who resign or otherwise terminate their membership in the Polarsys
IWG lose their rights to access and use the private assets and data
of Polarsys after the date of the termination.</P>

<P>The
private assets of terminated members, such as test cases or custom build
chains, shall be archived and the archive returned to the terminated
member. The private assets of members terminated can be removed from
Polarsys storages forty-five (45) days after the termination.
Nevertheless, the terminated member can request to the Steering
Committee that their archived private assets be stored for two (2) years.
This request shall be sent within thirty (30) days after the
termination and is accepted at the sole discretion of the
Steering Committee.</P>

<P>The
survival of any licenses to Polarsys private assets acquired by a
member during the period of membership shall be as specified in the
license.</P>

<H2><A NAME="Services"></A>Services</H2>
<H3><A NAME="Open_source_collaboration_infrastructure"></A>
Collaboration Infrastructure</H3>
<P>The
Polarsys IWG leverages the usual Eclipse open source collaboration
infrastructure. As such, source code repositories, Bugzilla, wikis,
forums, project mailing lists, and other services provided as the
open source collaboration infrastructure are publicly visible.
Committers have write access to this infrastructure, and as such have
the rights and obligations as set forth in the Eclipse Development
Process and the various Eclipse committer agreements. The catalog of
Polarsys components is part of this collaboration infrastructure.</P>
<p>In addition, a private, members-only collaboration infrastructure for 
the exclusive use of Members of the Polarsys Industry Working Group
will be provided. Access rights to, and the licensing terms for, this infrastructure
will be determinted by the Steering Committee, with the approval of the EMO.</p> 

<H3><A NAME="LTS_build_and_test_infrastructure"></A>LTS
Build and Test Infrastructure</H3>
<P>Additionally,
Polarsys aims to provide a specific build and test infrastructure for long term support. This infrastructure will enable build and test of
specific long term releases for a duration of up to 10 years in a
first version, and up to 40 years with an adequate usage of
virtualization technologies.</P>

<H3><A NAME="Access_to_LTS_binary_releases"></A>Access
to LTS Binary Releases</H3>
<P >Polarsys
will produce public binary releases modeled after the Eclipse release
train process, including Service Releases SR1 and SR2.</P>
<P >Polarsys
long term support releases (post SR2) are only accessible to Polarsys
member companies. Such binary code may not be redistributed unless it
is integrated into, or updates, a commercial software product or
custom-developed software, and is distributed pursuant to an Object
Code License.</P>
<H3><A NAME="Hosting_custom_builds_on_the_Polarsys_in"></A>
Hosting Custom Build on the Polarsys Infrastructure</H3>
<P >This
service gives the capability of using the Polarsys test and build
infrastructure in order to create member-specific bundles. These
bundles can create another combination of Polarsys components and are
private to the member who defines and uses them.</P>
<H3><A NAME="Maturity_assessment_program"></A>Maturity
Assessment Program</H3>
<P >Maturity
assessment is at the core of the Polarsys IWG's goal of providing
industrial quality tools. It
consists of the evaluation of component maturity according to a
classification similar to&nbsp;<A HREF="http://en.wikipedia.org/wiki/Technology_readiness_level">TRL
levels</A>. This
evaluation is done collaboratively by component developers, component
integrators, and component users.</P>
<H3><A NAME="Access_to_qualification_kits"></A>Access
to Qualification Kits</H3>
<P>Many
Polarsys components are used in the development of certified and
qualified embedded software. As
such, specific documentation is needed and is adapted in the context
of a given certification process. These
documents, like development plans and test plans, are part of the
Polarsys qualification kits available for the components.</P>
<H3><A NAME="IP_due_diligence"></A>IP Due Diligence</H3>
<P>IP
due diligence is necessary for verifying that the committers have the
right to open-source the code they put in Polarsys. It
is also necessary to check that the different integrated components
have compatible licenses. This is even more important in Polarsys, as
we allow not only EPL licensed components, but also BSD-style
licensed components and LGPL licensed components.</P>
<H3><A NAME="Branding_process"></A>Branding Process</H3>
<P>The
branding process aims at rewarding the skills and investment of
service providers. The
brand recognizes that service providers are able to extend or provide
long term support for a component.</P>
<H3><A NAME="Hosting_private_projects"></A>Hosting
Private Projects</H3>
<P>In
order to promote the maturation of research prototypes and to foster
open innovation, Polarsys provides the ability to host members'
time-limited private projects that may become new Polarsys
components. Private projects may only be initiated by Steering
Committee members. The Steering Committee, with the approval of the EMO, will 
establish the licensing requirements for private projects. Guests may participate 
in private projects at the request of the Steering Committee.</P>

<H2 ><A NAME="Governance"></A>Governance</H2>
<P>Polarsys
is designed as</P>
<blockquote><ul>
<li>A
user driven organization</li>
<li>A
means to foster a vibrant and sustainable ecosystem of components and
service providers</li>
<li>A
means to organize the community of each project or component so that
users and developers define the roadmap collaboratively</li>
</ul></blockquote>
<p>In
order to implement these principles, the following governance bodies
have been defined (each a &quot;body&quot;):</P>
<blockquote><ul>
<li>The
Steering Committee</li>

<li>The
General Assembly</li>

<li>The
Architecture Committee</li>

<li>The
Quality and Branding Committee</li>

<li>Project Planning Committees</li>

<li>Project
Management Committees</li>
</ul></blockquote>

<H3 ><A NAME="Common_Dispositions"></A>Common Dispositions</H3>
<P>The
dispositions below apply to all Polarsys bodies, unless otherwise
specified. For all matters related to membership action, including
without limitation meetings, quorum, voting, electronic voting
action without meeting, vacancy, resignation, or removal, the terms
set forth in Section 6 of the Eclipse Foundation Bylaws apply.</P>

<H4 ><A NAME="Good_Standing"></A>Good Standing</H4>
<P >A
representative shall be deemed to be in good standing, and thus
eligible to vote on issues coming before the body he in which he participates,
if the representative has attended (in person or telephonically) a
minimum of three (3) of the last four (4) body meetings (if there
have been at least four meetings). Appointed representatives on the
body may be replaced by the member organization they are representing
at any time by providing written notice to the Steering Committee. In
the event a body member is unavailable to attend or participate in a
meeting of the body, he or she may send a representative and may vote
by proxy, which shall be included in determining whether the
representative is in good standing. As per the Eclipse Foundation
Bylaws, a representative shall be immediately removed from the body
upon the termination of the membership of such representative&rsquo;s
member organization.</P>

<H4 ><A NAME="Voting"></A>Voting</H4>
<br/><strong><A NAME="Super_Majority"></A>Super Majority</strong>
<P >For
actions (i) requesting that the Eclipse Foundation Board of Directors
approve an additional distribution license for Polarsys projects;
(ii) amending the terms of the Polarsys Participation Agreement;
(iii) approving or changing the name of Polarsys; (iv) approving
changes to annual member contribution requirements; any such actions
must be approved by no less than two-thirds (2/3) of the
representatives in good standing represented at a Steering Committee
meeting at which a quorum is present.</P>

<H4 ><A NAME="Term_and_Dates_of_elections"></A>Term
and Dates of Elections</H4>
<P >This
section only applies to the Steering Committee, the Architecture
Committee and the Quality and Branding Committee.</P>
<P>All
representatives shall hold office until their respective successors
are appointed or elected, as applicable. There shall be no
prohibition on re-election or re-designation of any representative
following the completion of that representative &rsquo;s term of
office.</P>
<br/><strong><A NAME="Steering_Committee_Members_2"></A>Steering
Committee Members</strong>
<P>Steering
Committee member representatives shall serve in such capacity until
their removal by their respective appointing member
organization or as otherwise provided for in this charter.</P>
<br/><strong><A NAME="Elected_representatives"></A>Elected
Representatives</strong>
<P>Elected
representatives shall each serve one-year terms and shall be elected
to serve from April 1 to March 31 of each calendar year, or until
their respective successors are elected and qualified, or as
otherwise provided for in this charter. Procedures governing
elections of representatives may be established pursuant to
resolutions of the Steering Committee provided that such resolutions
are not inconsistent with any provision of this charter.</P>

<H4 ><A NAME="Meetings_Management"></A>Meeting
Management</H4>
<br/><strong><A NAME="Place_of_meetings"></A>Place of Meetings</strong>
<P>All
meetings may be held at any place that has been designated from
time-to-time by resolution of the corresponding body. All meetings
may be held remotely using phone calls, video calls, or any other means
as designated from time-to-time by resolution of the corresponding
body.</P>
<br/><strong><A NAME="Regular_meetings"></A>Regular Meetings</strong>
<P >No
body meeting will be deemed to have been validly held unless a notice
of same has been provided to each of the representative in good
standing at least thirty (30) calendar days prior to such meeting,
which notice will identify all potential actions to be undertaken by
the body at the body meeting. No representative will be intentionally
excluded from body meetings and all representatives shall receive
notice of the meeting as specified above; however, body meetings need
not be delayed or rescheduled merely because one or more of the
representatives cannot attend or participate so long as at least a
quorum of the body (as defined in the 
<A href="#Common_Dispositions" class=jump>Common Dispositions</A> section above)
is represented at the body meeting. Electronic voting shall be
permitted in conjunction with any and all meetings of the body, the
subject matter of which requires a vote of the body to be delayed
until each such representative in attendance has conferred
with his or her respective member organization as set forth in the 
<A href="#Voting" class=jump>Voting</A> section above.</P>
<br/><strong><A NAME="Actions"></A>Actions</strong>
<P >The
body may undertake an action only if it was identified in a body
meeting notice or otherwise identified in a notice of special
meeting.</P>
<H4 ><A NAME="Invitations"></A>Invitations</H4>
<P >The body may invite any Polarsys member to any of its meetings. These
invited attendees have no right of vote.</P>
<H3 ><A NAME="Steering_Committee"></A>Steering Committee</H3>
<H4 ><A NAME="Powers_and_Duties"></A>Powers and Duties</H4>
<P>Steering committee members are required to</P>
<blockquote><ul>
<li>Define the strategy of the IWG</li>
<li>Define the global roadmap</li>
<li>Discuss and amend the charter and the participation agreement</li>
<li>Define the budget and fees each year</li>
<li>Define and follow maketing and communication activities</li>
<li>Invite guest members</li>
</ul></blockquote>

<H4 ><A NAME="Composition"></A>Composition</H4>
<blockquote><ul>
<li>Each Steering Committee member of the IWG has a seat on the Steering
Committee.</li>
<li>At least one seat is allocated to participant members. An additional
seat on the committee shall be allocated to the participant members
for every additional five (5) seats beyond one (1) allocated to
Steering Committee members. Participant member seats are allocated
following the Eclipse &quot;single transferable vote&quot;, as
defined in the Eclipse Bylaws.</li>
<li>
The
Steering Committee elects among its members a chairman who will
represent the IWG. They will serve from April 1 to March 31 of each
calendar year, or until their respective successors are elected and
qualified, or as otherwise provided for in this charter.</li>
</ul></blockquote>

<H4 ><A NAME="Meeting_Management"></A>Meeting
Management</H4>
<P >The
Steering Committee meets at least twice a year.</P>
<H3 ><A NAME="General_Assembly"></A>General Assembly</H3>
<H4 ><A NAME="Powers_and_Duties_2"></A>Powers and
Duties</H4>
<P >
Approve
changing the name of Polarsys.</P>
<H4 ><A NAME="Composition_2"></A>Composition</H4>
<P >Each
Steering Committee and Participant Member of the IWG has a seat on
the General Assembly.</P>
<H4 ><A NAME="Meeting_Management_2"></A>Meeting
Management</H4>
<P >The
General Assembly meets at least once a year.</P>
<H3 ><A NAME="Architecture_Committee"></A>Architecture Committee</H3>
<H4 ><A NAME="Powers_and_Duties_3"></A>Powers and Duties</H4>
<P >Architecture Committee members are required to</P>
<blockquote><ul>
<li>Ensure the technical consistency of Polarsys projects</li>
<li>Ensure that Polarsys projects achieve VLTS objectives</li>
<li>Recommend technologies</li>
<li>Establish technical guidelines</li>
<li>Validate new project proposals</li>
</ul></blockquote>

<H4 ><A NAME="Composition_3"></A>Composition</H4>
<blockquote><ul>
<li>Each Steering Committee Member of the IWG has a seat on the Architecture Committee.</li>
<li>Each Project Planning Committee elects one of its members to the Architecture Committee.</li>
<li>The Architecture Committee elects a chairman who reports to the Steering
Committee. This chairman is elected among the members of the
Architecture Committee. He will serves from April 1 to March 31 of each
calendar year, or until his successor is elected and qualified, or as
otherwise provided for in this charter.</li>
</ul></blockquote>

<H4 ><A NAME="Meeting_Management_3"></A>Meeting
Management</H4>
<P >The
Architecture Committee meets at least twice a year.</P>
<H3 ><A NAME="The_Quality_and_Branding_Committee"></A>The
Quality and Branding Committee</H3>
<H4 ><A NAME="Powers_and_Duties_4"></A>Powers and Duties</H4>
<P >The Quality and Branding Committee members are required to</P>
<blockquote><ul>
<li>Ensure the consistency of the branding process and attribute maturity labels
(see the Branding Charter Wiki Page)</li>
<li>Define the IWG quality kit and maturity process</li>
<li>Validate that the projects conform to the IWG quality kit</li>
<li>Validate that the projects apply the IP process</li>
</ul></blockquote>

<H4 ><A NAME="Composition_4"></A>Composition</H4>
<blockquote><ul>
<li>Each Steering Committee member of the IWG has a seat on the Quality and
Branding Committee.</li>
<li>At least one seat is allocated to participant members. An additional
seat on the committee shall be allocated to the participant members
for every additional five (5) seats beyond one (1) allocated to
Steering Committee members. Participant member seats are allocated
following the Eclipse &quot;single transferable vote&quot;, as
defined in the Eclipse Bylaws.</li>
<li>The Quality and Branding Committee elects a chairman who reports to the
Steering Committee. This chairman is elected among the members of the
Quality and Branding Committee. He will serves from April 1 to
March 31 of each calendar year, or until his successor is elected and
qualified, or as otherwise provided for in this charter.</li>
</ul></blockquote>

<H4 ><A NAME="Meeting_Management_4"></A>Meeting Management</H4>
<P >The Quality and Branding Committee meets at least twice a year.</P>
<H3 ><A NAME="Project_Planning_Committees"></A>Project Planning Committees</H3>
<P >Each component or release train (bundle) in the IWG is driven by a Project Planning Committee.</P>
<H4 ><A NAME="Powers_and_Duties_5"></A>Powers and Duties</H4>
<P >Project Planning Committee members are required to</P>
<blockquote><ul>
<li>Instantiate IWG global roadmaps for the project</li>
<li>Apply the Architecture Committee recommendations</li>
<li>Plan and arbitrate defects fixes and improvements implementation</li>
<li>Ensure the relationships with the technical team of the project</li>
</ul></blockquote>

<H4 ><A NAME="Composition_5"></A>Composition</H4>
<blockquote><ul>
<li>Each Steering Committee or participant member of the IWG can have a seat
on the Project Planning Committee.</li>
<li>Each Project Planning Committee elects a chairman who will represent it to the
Architecture Committee. This chairman is elected among the members of
each Project Planning Committee. He will serves from April 1 to March 31 of
each calendar year, or until his successor is elected and qualified,
or as otherwise provided for in this charter.</li>
</ul></blockquote>

<H4 ><A NAME="Meeting_Management_5"></A>Meeting
Management</H4>
<P >The
Project Planning Committees meet at least twice a year.</P>
<H3 ><A NAME="Project_Management_Committees"></A>Project
Management Committees</H3>
<P >Any
Project Management Committee (PMC) established by Polarsys shall be
governed by the Eclipse Development Process.</P>
<P>&nbsp;</P>
<P><BR><BR>

</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

