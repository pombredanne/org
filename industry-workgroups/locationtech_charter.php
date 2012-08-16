<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# m2miwg_charter.php
	#
	# Author: 		Ian Skerrett
	# Date:			2011-12-13
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse LocationTech Industry Working Group";
	$pageKeywords	= "lcoation, geospatial, geo, eclipse  ";
	$pageAuthor		= "Ian Skerrett";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
	
		<h1>$pageTitle Charter</h1>
		
<H2 CLASS="western">Goals and Vision 
</H2>
<P>Location based analysis was once the exclusive domain of
specialists and a peripheral activity for many organizations. As
technology advanced, its use shifted by adding spatial capabilities
to mainstream consumer technology and enterprise IT. 
</P>
<P>Trends such as the decreased cost and increased computing power of
devices, often portable, have significantly increased the rate of
data generation and expectations that the data be easily consumable
anywhere at any time. Expectations have shifted from asynchronous
processing of data to real time. 
</P>
<P>These represent new demands for technology. The LocationTech
Industry Working Group aims at answering these needs by: 
</P>
<UL>
	<LI><P STYLE="margin-bottom: 0cm">Providing a set of
	industry-friendly open source tools, frameworks, and components 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Providing collaborative means to
	make open innovation easier 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Fostering exchanges between
	academics, industrial partners, and community 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Operating software repositories,
	build chains, test facilities, etc. 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Managing the quality and maturity
	of tools and components from early research prototypes through
	obsolescence 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Ensuring open innovation through
	the sharing of the research, development and maintenance efforts as
	far as possible 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Organizing sustainable commercial
	services and ecosystems around those components 
	</P>
	<LI><P>Recognizing projects maturity and company know-how and
	commitment through a branding process available only to member
	organizations. 
	</P>
</UL>
<H2 CLASS="western"><A NAME="Core_domains"></A>Core domains 
</H2>
<P>This group focuses on software, data formats, data exchange
protocols, frameworks, techniques, and tools to fulfil its goal and
vision, including: 
</P>
<UL>
	<LI><P STYLE="margin-bottom: 0cm">Desktop, Mobile, and Web Mapping 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Model driven design 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Data capture, exchange, and
	processing 
	</P>
	<LI><P>Aggregating and relating data from diverse sources 
	</P>
</UL>
<P>Other domain specific techniques and tools may be proposed for
acceptance by the Steering Committee. 
</P>
<H2 CLASS="western"><A NAME="Component_Management"></A>Component
Management 
</H2>
<P>A number of good technologies answering some of our needs already
exist in open source. The group does not intend to re-develop
existing components. Specific issues like durability,
interoperability, and intellectual property stewardship are not
always taken into account and the group will strive to influence
these areas and re-implement only as a last resort. There are two
kinds of projects are therefore supported in this group: 
</P>
<DL>
	<DT>Hosted Projects</DT><DD>
	The technical artefacts are hosted in our facilities. 
	</DD><DT>
	External Projects</DT><DD STYLE="margin-bottom: 0.51cm">
	The technical artefacts are hosted elsewhere. 
	</DD></DL>
<H2 CLASS="western">
<A NAME="Governance_and_Precedence"></A>Governance and Precedence 
</H2>
<P><B>Applicable Documents</B> 
</P>
<UL>
	<LI><P STYLE="margin-bottom: 0cm"><A HREF="http://www.eclipse.org/org/documents/Eclipse%20BYLAWS%202011_08_15%20Final.pdf">Eclipse
	Bylaws</A> 
	</P>
	<LI><P STYLE="margin-bottom: 0cm"><A HREF="http://www.eclipse.org/org/industry-workgroups/industry_wg_process.php">Industry
	Working Group Process</A> 
	</P>
	<LI><P STYLE="margin-bottom: 0cm"><A HREF="http://www.eclipse.org/org/documents/Eclipse%20MEMBERSHIP%20AGMT%202010_01_05%20Final.pdf">Eclipse
	Membership Agreement</A> 
	</P>
	<LI><P><A HREF="http://www.eclipse.org/projects/dev_process/development_process.php">Eclipse
	Development Process</A> 
	</P>
</UL>
<P>All Members must be parties to the Eclipse Membership agreement,
including the requirement set forth in Section 2.2 to follow the
Bylaws and then-current policies of the Eclipse Foundation. In the
event of any conflict between the terms set forth in this Working
Group's Charter and the Eclipse Foundation Bylaws, Membership
Agreement, Eclipse Development Process, Eclipse Industry Working
Group Process, or any policies of the Eclipse Foundation, the terms
of the Eclipse Foundation Bylaws, Membership Agreement, process, or
policy shall take precedence. 
</P>
<H2 CLASS="western"><A NAME="IP_Management"></A>IP Management 
</H2>
<P>The Intellectual Property Policy of the Eclipse Foundation will
apply to all activities in this group. The group will follow the
Eclipse Foundation's IP due diligence process in order to provide
clean open source software released under licenses approved by the
group and the Eclipse Foundation Board of Directors. Approved
licenses for this group include EPL, MIT, and BSD. This list may be
amended from time to time by the group and the Eclipse Foundation Board of Directors. 
The EPL license is the recommended license for projects in this group. 
</P>
<H2 CLASS="western"><A NAME="Development_Process"></A>Development
Process 
</H2>
<P>The Eclipse Foundation Development Process will apply to all open
source projects hosted by this group. In particular, the project
lifecycle model and review process will be followed by the open
source projects hosted by this group. 
</P>
<H2 CLASS="western"><A NAME="Membership"></A>Membership 
</H2>
<P>An entity must be at least a <A HREF="http://www.eclipse.org/membership/become_a_member/membershipTypes.php#solutions">Solutions
Member</A> of the Eclipse Foundation, have executed the IWG
Participation Agreement, and adhere to the requirements set forth in
this Charter to participate. The Eclipse Solution Member fees appear
in the tables below for convenience only: they are decided as
described in the <A HREF="http://www.eclipse.org/org/documents/Eclipse%20BYLAWS%202011_08_15%20Final.pdf">Eclipse
bylaws</A> and detailed in the <A HREF="http://www.eclipse.org/org/documents/Eclipse%20MEMBERSHIP%20AGMT%202010_01_05%20Final.pdf">Eclipse
membership agreement</A>. 
</P>
<H3 CLASS="western"><A NAME="Classes_of_membership"></A>Classes of
membership 
</H3>
<H4 CLASS="western"><A NAME="Strategic_members"></A>Strategic members
</H4>
<P>Strategic Members are organizations that view location technology
as strategic to their organization and are investing resources to
sustain and shape the activities of this group. 
</P>
<H5 CLASS="western"><A NAME="LocationTech_Strategic_Member_Fees"></A>LocationTech
Strategic Member Fees 
</H5>
<TABLE WIDTH=563 BORDER=0 CELLPADDING=5 CELLSPACING=0>
	<COL WIDTH=189>
	<COL WIDTH=107>
	<COL WIDTH=156>
	<COL WIDTH=70>
	<TR BGCOLOR="#d3d3d3">
		<TH WIDTH=189>
			<P STYLE="border: none; padding: 0cm">Revenue 
			</P>
		</TH>
		<TH WIDTH=107>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Eclipse
			Solution<BR>Membership 
			</P>
		</TH>
		<TH WIDTH=156>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">LocationTech
			Strategic<BR>Membership 
			</P>
		</TH>
		<TH WIDTH=70>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Total 
			</P>
		</TH>
	</TR>
	<TR>
		<TD WIDTH=189>
			<P STYLE="border: none; padding: 0cm">&gt;$250 million 
			</P>
		</TD>
		<TD WIDTH=107>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$20,000 
			</P>
		</TD>
		<TD WIDTH=156>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$30,000 
			</P>
		</TD>
		<TD WIDTH=70>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$50,000 
			</P>
		</TD>
	</TR>
	<TR BGCOLOR="#d3d3d3">
		<TD WIDTH=189>
			<P STYLE="border: none; padding: 0cm">&gt;$100 million &lt;= $250
			million 
			</P>
		</TD>
		<TD WIDTH=107>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$15,000 
			</P>
		</TD>
		<TD WIDTH=156>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$25,000 
			</P>
		</TD>
		<TD WIDTH=70>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$40,000 
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=189>
			<P STYLE="border: none; padding: 0cm">&gt;$50 million &lt;= $100
			million 
			</P>
		</TD>
		<TD WIDTH=107>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000 
			</P>
		</TD>
		<TD WIDTH=156>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$20,000 
			</P>
		</TD>
		<TD WIDTH=70>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$30,000 
			</P>
		</TD>
	</TR>
	<TR BGCOLOR="#d3d3d3">
		<TD WIDTH=189>
			<P STYLE="border: none; padding: 0cm">&gt;$10 million &lt;= $50
			million 
			</P>
		</TD>
		<TD WIDTH=107>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$7,500 
			</P>
		</TD>
		<TD WIDTH=156>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$15,000 
			</P>
		</TD>
		<TD WIDTH=70>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$22,500 
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=189>
			<P STYLE="border: none; padding: 0cm">&lt;$10 million 
			</P>
		</TD>
		<TD WIDTH=107>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$5,000 
			</P>
		</TD>
		<TD WIDTH=156>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000 
			</P>
		</TD>
		<TD WIDTH=70>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$15,000 
			</P>
		</TD>
	</TR>
</TABLE>
<H4 CLASS="western"><A NAME="Participant_members"></A>Participant
members 
</H4>
<P>Participant Members are organizations that view location
technology as an important part of their organization's activities.
These organizations want to participate in the development of the
location technology ecosystem. 
</P>
<H5 CLASS="western"><A NAME="LocationTech_Participant_Member_Fees"></A>
LocationTech Participant Member Fees 
</H5>
<TABLE WIDTH=576 BORDER=0 CELLPADDING=5 CELLSPACING=0>
	<COL WIDTH=190>
	<COL WIDTH=107>
	<COL WIDTH=168>
	<COL WIDTH=70>
	<TR BGCOLOR="#d3d3d3">
		<TH WIDTH=190>
			<P STYLE="border: none; padding: 0cm">Revenue 
			</P>
		</TH>
		<TH WIDTH=107>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Eclipse
			Solution<BR>Membership 
			</P>
		</TH>
		<TH WIDTH=168>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">LocationTech
			Participant<BR>Membership 
			</P>
		</TH>
		<TH WIDTH=70>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">Total 
			</P>
		</TH>
	</TR>
	<TR>
		<TD WIDTH=190>
			<P STYLE="border: none; padding: 0cm">&gt;$250 million 
			</P>
		</TD>
		<TD WIDTH=107>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$20,000 
			</P>
		</TD>
		<TD WIDTH=168>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000 
			</P>
		</TD>
		<TD WIDTH=70>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$30,000 
			</P>
		</TD>
	</TR>
	<TR BGCOLOR="#d3d3d3">
		<TD WIDTH=190>
			<P STYLE="border: none; padding: 0cm">&gt;$100 million &lt;= $250
			million 
			</P>
		</TD>
		<TD WIDTH=107>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$15,000 
			</P>
		</TD>
		<TD WIDTH=168>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$7,500 
			</P>
		</TD>
		<TD WIDTH=70>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$22,500 
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=190>
			<P STYLE="border: none; padding: 0cm">&gt;$50 million &lt;= $100
			million 
			</P>
		</TD>
		<TD WIDTH=107>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000 
			</P>
		</TD>
		<TD WIDTH=168>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$3,500 
			</P>
		</TD>
		<TD WIDTH=70>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$13,500 
			</P>
		</TD>
	</TR>
	<TR BGCOLOR="#d3d3d3">
		<TD WIDTH=190>
			<P STYLE="border: none; padding: 0cm">&gt;$10 million &lt;= $50
			million 
			</P>
		</TD>
		<TD WIDTH=107>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$7,500 
			</P>
		</TD>
		<TD WIDTH=168>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$2,250 
			</P>
		</TD>
		<TD WIDTH=70>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$9,750 
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=190>
			<P STYLE="border: none; padding: 0cm">&lt;$10 million 
			</P>
		</TD>
		<TD WIDTH=107>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$5,000 
			</P>
		</TD>
		<TD WIDTH=168>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$1,000 
			</P>
		</TD>
		<TD WIDTH=70>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$6,000 
			</P>
		</TD>
	</TR>
	<TR BGCOLOR="#d3d3d3">
		<TD WIDTH=190>
			<P STYLE="border: none; padding: 0cm">&lt;$1 million &amp; &lt; 10
			employees 
			</P>
		</TD>
		<TD WIDTH=107>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$1,500 
			</P>
		</TD>
		<TD WIDTH=168>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$500 
			</P>
		</TD>
		<TD WIDTH=70>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$2,000 
			</P>
		</TD>
	</TR>
</TABLE>
<H4 CLASS="western"><A NAME="Guests"></A>Guests 
</H4>
<P>Guests are organizations who have been invited for one year by the
Steering Committee to participate in some aspects of the activities
of the group. Typical guests includes R&amp;D partners, academic
entities and potential future full fledged members who want to have
an inner look before deciding of their strategy. Even if guests can
be invited to some meetings, they have no right to vote. Invitations
may be renewed by the Steering Committee. Guests will be required to
sign a participation agreement. 
</P>
<H4 CLASS="western"><A NAME="Committers"></A>Committers 
</H4>
<P>Committer Members are individuals who through a process of
meritocracy defined by the Eclipse Development Process are able to
contribute and commit code to software projects. Committers may be
members by virtue of working for a member organization, or may choose
to complete the membership process independently if they are not. For
further explanation and details, see the <A HREF="http://www.eclipse.org/membership/become_a_member/committer.php">Eclipse
Committer Membership</A> page. 
</P>
<H3 CLASS="western"><A NAME="Membership_Summary"></A>Membership
Summary 
</H3>
<TABLE WIDTH=742 BORDER=0 CELLPADDING=5 CELLSPACING=0>
	<COL WIDTH=290>
	<COL WIDTH=127>
	<COL WIDTH=139>
	<COL WIDTH=76>
	<COL WIDTH=59>
	<TR BGCOLOR="#d3d3d3">
		<TH WIDTH=290></TH>
		<TH WIDTH=127>
			<P STYLE="border: none; padding: 0cm">Strategic Member 
			</P>
		</TH>
		<TH WIDTH=139>
			<P STYLE="border: none; padding: 0cm">Participant Member 
			</P>
		</TH>
		<TH WIDTH=76>
			<P STYLE="border: none; padding: 0cm">Committer 
			</P>
		</TH>
		<TH WIDTH=59>
			<P STYLE="border: none; padding: 0cm">Guest 
			</P>
		</TH>
	</TR>
	<TR>
		<TD WIDTH=290>
			<P STYLE="border: none; padding: 0cm">Member of the Steering
			Committee 
			</P>
		</TD>
		<TD WIDTH=127>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
		<TD WIDTH=139>
			<P STYLE="border: none; padding: 0cm">Elected 
			</P>
		</TD>
		<TD WIDTH=76>
			<P STYLE="border: none; padding: 0cm">Elected 
			</P>
		</TD>
		<TD WIDTH=59>
			<P STYLE="border: none; padding: 0cm">Invited 
			</P>
		</TD>
	</TR>
	<TR BGCOLOR="#d3d3d3">
		<TD WIDTH=290>
			<P STYLE="border: none; padding: 0cm">Member of the Architecture
			Committee 
			</P>
		</TD>
		<TD WIDTH=127>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
		<TD WIDTH=139>
			<P STYLE="border: none; padding: 0cm">Elected 
			</P>
		</TD>
		<TD WIDTH=76>
			<P STYLE="border: none; padding: 0cm">Elected 
			</P>
		</TD>
		<TD WIDTH=59>
			<P STYLE="border: none; padding: 0cm">Invited 
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=290>
			<P STYLE="border: none; padding: 0cm">Member of the Marketing
			Committee 
			</P>
		</TD>
		<TD WIDTH=127>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
		<TD WIDTH=139>
			<P STYLE="border: none; padding: 0cm">Elected 
			</P>
		</TD>
		<TD WIDTH=76>
			<P STYLE="border: none; padding: 0cm">Elected 
			</P>
		</TD>
		<TD WIDTH=59>
			<P STYLE="border: none; padding: 0cm">Invited 
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=290>
			<P STYLE="border: none; padding: 0cm">Access to the open
			collaboration infrastructure 
			</P>
		</TD>
		<TD WIDTH=127>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
		<TD WIDTH=139>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
		<TD WIDTH=76>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
		<TD WIDTH=59>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
	</TR>
	<TR BGCOLOR="#d3d3d3">
		<TD WIDTH=290>
			<P STYLE="border: none; padding: 0cm">IP Due diligence 
			</P>
		</TD>
		<TD WIDTH=127>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
		<TD WIDTH=139>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
		<TD WIDTH=76>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
		<TD WIDTH=59>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=290>
			<P STYLE="border: none; padding: 0cm">Write Access to open source
			code repositories 
			</P>
		</TD>
		<TD WIDTH=127>
			<P STYLE="border: none; padding: 0cm">- 
			</P>
		</TD>
		<TD WIDTH=139>
			<P STYLE="border: none; padding: 0cm">- 
			</P>
		</TD>
		<TD WIDTH=76>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
		<TD WIDTH=59>
			<P STYLE="border: none; padding: 0cm">- 
			</P>
		</TD>
	</TR>
	<TR BGCOLOR="#d3d3d3">
		<TD WIDTH=290>
			<P STYLE="border: none; padding: 0cm">Access to the LTS Build
			Infrastructure 
			</P>
		</TD>
		<TD WIDTH=127>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
		<TD WIDTH=139>
			<P STYLE="border: none; padding: 0cm">- 
			</P>
		</TD>
		<TD WIDTH=76>
			<P STYLE="border: none; padding: 0cm">- 
			</P>
		</TD>
		<TD WIDTH=59>
			<P STYLE="border: none; padding: 0cm">- 
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=290>
			<P STYLE="border: none; padding: 0cm">Access to LTS binary
			releases 
			</P>
		</TD>
		<TD WIDTH=127>
			<P STYLE="border: none; padding: 0cm">X 
			</P>
		</TD>
		<TD WIDTH=139>
			<P STYLE="border: none; padding: 0cm">- 
			</P>
		</TD>
		<TD WIDTH=76>
			<P STYLE="border: none; padding: 0cm">- 
			</P>
		</TD>
		<TD WIDTH=59>
			<P STYLE="border: none; padding: 0cm">- 
			</P>
		</TD>
	</TR>
</TABLE>
<P><BR>Services are detailed in section <A HREF="http://wiki.eclipse.org/Location/Charter#Services">Services</A>
</P>
<P>All matters related to Membership in the Eclipse Foundation and
this group will be governed by the Eclipse Foundation Bylaws,
Membership Agreement and Eclipse Industry Working Group Process.
These matters include, without limitation delinquency, payment of
dues, termination, resignation, reinstatement, assignment, and the
distribution of assets upon dissolution. 
</P>
<P>Members who resign, or otherwise terminate their membership in the
group lose their rights to access and use any private assets and data
of the group after the date of the termination. 
</P>
<P>The private data of terminated Members, such test cases or custom
build chains shall be archived and the archive sent back to their
copyright holders under an open source license specified by the
Steering Committee. The private data of Members terminated can be
removed from storages forty five (45) days after the Termination.
Nevertheless, the Members terminated can request to the Steering
Committee to store for two (2) years their archived private data.
This request shall be sent within thirty (30) days after the
Termination and can be accepted or not, on the sole discretion of the
Steering Committee. 
</P>
<P>The survival of any licenses to group private assets acquired by a
Member during the period of Membership shall be as specified in the
license. 
</P>
<H2 CLASS="western"><A NAME="Services"></A>Services 
</H2>
<H3 CLASS="western"><A NAME="Open_source_collaboration_infrastructure"></A>
Open source collaboration infrastructure 
</H3>
<P>This group leverages open source collaboration infrastructure
managed by the Eclipse Foundation. As such, source code repositories,
Bugzilla, wikis, forums, project mailing lists, and other services
provided as the Open Source collaboration infrastructure are publicly
visible. Committers have write access to this infrastructure, and as
such have the rights and obligations as set forth in the Eclipse
Development Process, and the various Eclipse Committer Agreements.
The catalog of components hosted by this group is part of this
collaboration infrastructure. 
</P>
<H3 CLASS="western"><A NAME="Hosting_custom_builds_on_the_group.27s_infrastructure"></A>
Hosting custom builds on the group's infrastructure 
</H3>
<P>The capability of using the group's test and build infrastructure
in order to create member-specific bundles exists. These bundles can
be private to the member who defines and uses them. 
</P>
<H3 CLASS="western"><A NAME="IP_due_diligence"></A>IP due diligence 
</H3>
<P>IP due diligence is necessary to check that the committers have
the right to open-source the code they contribute. 
</P>
<P>It is also necessary to check that the different integrated
components have compatible licenses. We allow not only EPL licensed
components, but also MIT &amp; BSD licensed components. 
</P>
<H2 CLASS="western"><A NAME="Governance"></A>Governance 
</H2>
<P>This group is designed as: 
</P>
<UL>
	<LI><P STYLE="margin-bottom: 0cm">a member driven organization, 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">a means to foster a vibrant and
	sustainable ecosystem of components and service providers, 
	</P>
	<LI><P>a means to organize the community of each project or
	component so that users and developers define the roadmap
	collaboratively. 
	</P>
</UL>
<P>In order to implement these principles, the following governance
bodies have been defined (each a &quot;Body&quot;): 
</P>
<UL>
	<LI><P STYLE="margin-bottom: 0cm">The Steering Committee 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">The General Assembly 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">The Architecture Committee 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">The Marketing Committee 
	</P>
	<LI><P>Project Management Committees 
	</P>
</UL>
<H3 CLASS="western"><A NAME="Common_Dispositions"></A>Common
Dispositions 
</H3>
<P>The dispositions below apply to all governance bodies for this
group, unless otherwise specified. For all matters related to
membership action, including without limitation: meetings, quorum,
voting, electronic voting action without meeting, vacancy,
resignation or removal, the terms set forth in Section 6 of the
Eclipse Foundation Bylaws apply. 
</P>
<H4 CLASS="western"><A NAME="Good_Standing"></A>Good Standing 
</H4>
<P>A representative shall be deemed to be in Good Standing, and thus
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
Member organization. 
</P>
<H4 CLASS="western"><A NAME="Voting"></A>Voting 
</H4>
<H5 CLASS="western"><A NAME="Super_Majority"></A>Super Majority 
</H5>
<P>For actions (i) requesting that the Eclipse Foundation Board of
Directors approve an additional distribution license for projects;
(ii) amending the terms of the group's Participation agreement; (iii)
approving or changing the name of the group; (iv) approving changes
to annual Member contribution requirements; any such actions must be
approved by no less than two-thirds (2/3) of the representatives in
Good Standing represented at a Steering Committee meeting at which a
quorum is present. 
</P>
<H4 CLASS="western"><A NAME="Term_and_Dates_of_elections"></A>Term
and Dates of elections 
</H4>
<P>This section only applies to the Steering Committee, Architecture
Committee, and the Marketing Committee. 
</P>
<P>All representatives shall hold office until their respective
successors are appointed or elected, as applicable. There shall be no
prohibition on re-election or re-designation of any representative
following the completion of that representative&rsquo;s term of
office. 
</P>
<H5 CLASS="western"><A NAME="Strategic_Members"></A>Strategic Members
</H5>
<P>Strategic Members Representatives shall serve in such capacity on
committees until the earlier of their removal by their respective
appointing Member organization or as otherwise provided for in this
Charter. 
</P>
<H5 CLASS="western"><A NAME="Elected_representatives"></A>Elected
representatives 
</H5>
<P>Elected representatives shall each serve one-year terms and shall
be elected to serve from April 1 to March 31 of each calendar year,
or until their respective successors are elected and qualified, or as
otherwise provided for in this Charter. Procedures governing
elections of Representatives may be established pursuant to
resolutions of the Steering Committee provided that such resolutions
are not inconsistent with any provision of this Charter. 
</P>
<H4 CLASS="western"><A NAME="Meetings_Management"></A>Meetings
Management 
</H4>
<H5 CLASS="western"><A NAME="Place_of_meetings"></A>Place of meetings
</H5>
<P>All meetings may be held at any place that has been designated
from time-to-time by resolution of the corresponding Body. All
meetings may be held remotely using phone calls, video calls or any
other mean as designated from time-to-time by resolution of the
corresponding Body. 
</P>
<H5 CLASS="western"><A NAME="Regular_meetings"></A>Regular meetings 
</H5>
<P>No Body meeting will be deemed to have been validly held unless a
notice of same has been provided to each of the representative in
Good Standing at least thirty (30) calendar days prior to such
meeting, which notice will identify all potential actions to be
undertaken by the Body at the Body meeting. No representative will be
intentionally excluded from Body meetings and all representatives
shall receive notice of the meeting as specified above; however, Body
meetings need not be delayed or rescheduled merely because one or
more of the representatives cannot attend or participate so long as
at least a quorum of the Body is represented at the Body meeting.
Electronic voting shall be permitted in conjunction with any and all
meetings of the Body the subject matter of which requires a vote of
the Body to be delayed until each such representative in attendance
thereat has conferred with his or her respective Member organization
as set forth in Section <A HREF="http://wiki.eclipse.org/Location/Charter#Voting">Voting</A>
above. 
</P>
<H5 CLASS="western"><A NAME="Actions"></A>Actions 
</H5>
<P>The Body may undertake an action only if it was identified in a
Body Meeting notice or otherwise identified in a notice of special
meeting. 
</P>
<H4 CLASS="western"><A NAME="Invitations"></A>Invitations 
</H4>
<P>The Body may invite any member to any of its meetings. These
invited attendees have no right of vote. 
</P>
<H3 CLASS="western"><A NAME="Steering_Committee"></A>Steering
Committee 
</H3>
<H4 CLASS="western"><A NAME="Powers_and_Duties"></A>Powers and Duties
</H4>
<P>Steering committee members are required to: 
</P>
<UL>
	<LI><P STYLE="margin-bottom: 0cm">Define the strategy of the group 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Define the global roadmap 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Discuss and amend the charter and
	the participation agreement 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Define the budget and fees each
	year 
	</P>
	<LI><P>Invite guest members 
	</P>
</UL>
<H4 CLASS="western"><A NAME="Composition"></A>Composition 
</H4>
<UL>
	<LI><P STYLE="margin-bottom: 0cm">Each strategic member of the group
	has a seat on the Steering Committee. 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">At least one seat is allocated to
	Participant Members. An additional seat on the Committee shall be
	allocated to the Participant Members for every additional five (5)
	seats beyond one (1) allocated to Strategic Members. Participant
	Member seats are allocated following the Eclipse &quot;Single
	Transferable Vote&quot;, as defined in the Eclipse Bylaws. 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">At least one seat is allocated to
	Committer Members. An additional seat on the Committee shall be
	allocated to the Comitter Members for every additional five (5)
	seats beyond one (1) allocated to Strategic Members. Committer
	Member seats are allocated following the Eclipse &quot;Single
	Transferable Vote&quot;, as defined in the Eclipse Bylaws. 
	</P>
	<LI><P>The Steering Committee elects among its members a chair who
	will represent the IWG. They will serve from April 1 to March 31 of
	each calendar year, or until their respective successors are elected
	and qualified, or as otherwise provided for in this Charter. 
	</P>
</UL>
<H4 CLASS="western"><A NAME="Meeting_Management"></A>Meeting
Management 
</H4>
<P>The Steering Committee meets at least twice a year. 
</P>
<H3 CLASS="western"><A NAME="General_Assembly"></A>General Assembly 
</H3>
<H4 CLASS="western"><A NAME="Powers_and_Duties_2"></A>Powers and
Duties 
</H4>
<UL>
	<LI><P>Approve changing the name of the group. 
	</P>
</UL>
<H4 CLASS="western"><A NAME="Composition_2"></A>Composition 
</H4>
<P>Each Strategic and Participant Member of the IWG has a seat on the
General Assembly. 
</P>
<H4 CLASS="western"><A NAME="Meeting_Management_2"></A>Meeting
Management 
</H4>
<P>The General Assembly meets at least once a year. 
</P>
<H3 CLASS="western"><A NAME="Architecture_Committee"></A>Architecture
Committee 
</H3>
<H4 CLASS="western"><A NAME="Powers_and_Duties_3"></A>Powers and
Duties 
</H4>
<P>Architecture Committee members are required to: 
</P>
<UL>
	<LI><P STYLE="margin-bottom: 0cm">Ensure the technical consistency
	of projects 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Ensure that projects achieve
	objectives 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Recommend technologies 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Establish technical guidelines 
	</P>
	<LI><P>The Architecture Committee validates new project proposals 
	</P>
</UL>
<H4 CLASS="western"><A NAME="Composition_3"></A>Composition 
</H4>
<UL>
	<LI><P STYLE="margin-bottom: 0cm">Each strategic member of the group
	has a seat on the Committee. 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">At least one seat is allocated to
	Participant Members. An additional seat on the Committee shall be
	allocated to the Participant Members for every additional five (5)
	seats beyond one (1) allocated to Strategic Members. Participant
	Member seats are allocated following the Eclipse &quot;Single
	Transferable Vote&quot;, as defined in the Eclipse Bylaws. 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">At least one seat is allocated to
	Committer Members. An additional seat on the Committee shall be
	allocated to the Comitter Members for every additional five (5)
	seats beyond one (1) allocated to Strategic Members. Committer
	Member seats are allocated following the Eclipse &quot;Single
	Transferable Vote&quot;, as defined in the Eclipse Bylaws. 
	</P>
	<LI><P>The Committee elects a chair who reports to the Steering
	Committee. This chair is elected among the members of the Committee.
	They will serves from April 1 to March 31 of each calendar year, or
	until their successor is elected and qualified, or as otherwise
	provided for in this Charter. 
	</P>
</UL>
<H4 CLASS="western"><A NAME="Meeting_Management_3"></A>Meeting
Management 
</H4>
<P>The Architecture committee meets at least twice a year. 
</P>
<H3 CLASS="western"><A NAME="The_Marketing_Committee"></A>The
Marketing Committee 
</H3>
<H4 CLASS="western"><A NAME="Powers_and_Duties_4"></A>Powers and
Duties 
</H4>
<P>The Marketing Committee members are required to: 
</P>
<UL>
	<LI><P STYLE="margin-bottom: 0cm">Ensure the consistency of logo
	usage and other marketing materials 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Define &amp; Follow maketing and
	communication activities 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">Ensure consistency of annual
	conferences 
	</P>
	<LI><P>Ensure consistency of regional conferences 
	</P>
</UL>
<H4 CLASS="western"><A NAME="Composition_4"></A>Composition 
</H4>
<UL>
	<LI><P STYLE="margin-bottom: 0cm">Each strategic member of the group
	has a seat on the Committee. 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">At least one seat is allocated to
	Participant Members. An additional seat on the Committee shall be
	allocated to the Participant Members for every additional five (5)
	seats beyond one (1) allocated to Strategic Members. Participant
	Member seats are allocated following the Eclipse &quot;Single
	Transferable Vote&quot;, as defined in the Eclipse Bylaws. 
	</P>
	<LI><P STYLE="margin-bottom: 0cm">At least one seat is allocated to
	Committer Members. An additional seat on the Committee shall be
	allocated to the Comitter Members for every additional five (5)
	seats beyond one (1) allocated to Strategic Members. Committer
	Member seats are allocated following the Eclipse &quot;Single
	Transferable Vote&quot;, as defined in the Eclipse Bylaws. 
	</P>
	<LI><P>The Committee elects a chair who reports to the Steering
	Committee. This chair is elected among the members of the Committee.
	They will serves from April 1 to March 31 of each calendar year, or
	until their successor is elected and qualified, or as otherwise
	provided for in this Charter. 
	</P>
</UL>
<H4 CLASS="western"><A NAME="Meeting_Management_4"></A>Meeting
Management 
</H4>
<P>Marketing Committee meets at least twice a year. 
</P>
<P>
</P>
<H3 CLASS="western"><A NAME="Project_Management_Committees"></A>Project
Management Committees 
</H3>
<P>Any Project Management Committee (PMC) established by the group
and the Eclipse Foundation Board of Directors
shall be governed by the Eclipse Development Process. 
</P>
<P STYLE="margin-bottom: 0cm"><BR>
</P>

 <br/><br/>
</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

