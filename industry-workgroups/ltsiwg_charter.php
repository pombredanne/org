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
	$pageTitle 		= "* * * DRAFT - Not for Publication * * *<br/>Eclipse Long Term Support Industry Working Group Charter";
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
		<p><strong>June 8, 2012</strong></p>

<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><SPAN STYLE="background: #ffffff">This
industry working group charter is governed by the&nbsp;</SPAN></FONT></FONT></FONT><A HREF="http://www.eclipse.org/org/industry-workgroups/industry_wg_process.php"><FONT COLOR="#3366bb"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><U><SPAN STYLE="background: #ffffff">Eclipse
Foundation Industry Working Group Process</SPAN></U></FONT></FONT></FONT></A><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><SPAN STYLE="background: #ffffff"> document.</SPAN></FONT></FONT></FONT></P>
<H2 CLASS="western">Problem statement</H2>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Adoption
of Eclipse tools and runtimes has reached an all time high, and today
Eclipse software is embedded into many commercial software products.
Enterprise software vendors are required to support their products,
including the Eclipse components, for many years. Thus they are
looking for support offerings that cover a variety of Eclipse
projects and a large number of releases. The issue becomes more
urgent the more Eclipse technology reaches into the runtime stack.</FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Due
to the diversity of projects and committers at Eclipse, which come
from a variety of companies and individuals, it is currently
impossible to get a 'one-stop-support-contract' for all of Eclipse
technologies needed. Vendor neutrality and diversity bring innovation
and long term viability to Eclipse, but make it difficult to provide
the support enterprises are looking for. It is very difficult for any
one company in the Eclipse ecosystem to offer support and maintenance
that covers the entire spectrum of Eclipse technologies.</FONT></FONT></FONT></P>
<H2 CLASS="western"><A NAME="Goals_and_Vision"></A>Goals and Vision</H2>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
goal of the Long Term Support (LTS) Industry Working Group (IWG) is
to enable the Eclipse ecosystem to consume and provide maintenance
and support for the full breadth of Eclipse technologies.</FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">To
implement this vision, the IWG will:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Enable
an ecosystem-based solution for long term support and maintenance.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Define
and implement the policies, procedures and infrastructure required
for long term support and maintenance, including software
repositories, software builds, software distribution, and test
facilities.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Define
a roadmap for LTS deliverables.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">If
agreed to by the Steering Committee, create and define the content to
be contained in LTS releases, including:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 1.27cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.64cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">defining
an LTS release branch based on an Eclipse release train, and</FONT></FONT></FONT></P>
<P STYLE="margin-left: 1.27cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.64cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">the
content of LTS service releases.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Roles"></A>Roles</H3>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">There
are 4 roles in this ecosystem:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 1.35cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">1.</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&nbsp;&nbsp;
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Consumers
are organizations that acquire maintenance and support services.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 1.35cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">2.</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&nbsp;&nbsp;
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Maintenance
Service Providers(MSPs) leverage the IWG systems to provide
commercial support and maintenance services to Consumers.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 1.35cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">3.</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&nbsp;&nbsp;
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Self
Service Maintenance Providers(SSMPs) are Consumers that leverage the
IWG systems to provide internal support and maintenance services.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 1.35cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">4.</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&nbsp;&nbsp;
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Project
Support Providers(PSPs) are organizations or individuals that
leverage the IWG systems to provide support and maintenance services
for one or more Eclipse projects.</FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">It
is expected that MSPs and SSMPs will aggregate the services of PSPs
to provide maintenance services to Consumers, or in the case of
SSMPs, to themselves.</FONT></FONT></FONT></P>
<H2 CLASS="western"><A NAME="Core_services_and_activities"></A>Core
services and activities</H2>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
LTS IWG will provide the management processes to enable an
ecosystem-based long-term support program.</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">LTS
provides a forge that enables building Eclipse software in the future
for maintenance and support. The forge will include:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 1.27cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.64cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Code
repositories</FONT></FONT></FONT></P>
<P STYLE="margin-left: 1.27cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.64cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Bug
tracking</FONT></FONT></FONT></P>
<P STYLE="margin-left: 1.27cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.64cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Knowledge
management</FONT></FONT></FONT></P>
<P STYLE="margin-left: 1.27cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.64cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Software
distribution and code signing</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Employees
and contractors of organizations participating in this LTS IWG will
have access LTS IWG facilities based on that organization's
participation level as described in the Membership section below.</FONT></FONT></FONT></P>
<H2 CLASS="western"><A NAME="Connections_with_other_Eclipse_Working_G"></A>
Connections with other Eclipse Working Groups</H2>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
LTS IWG may have connections with other IWGs such as Polarsys,
Automotive, and others.</FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Additional
industry working groups may request access to the LTS infrastructure
in the future. Such access, including funding and annual fees, will
require the approval of the LTS IWG Steering Committee.</FONT></FONT></FONT></P>
<H2 CLASS="western"><A NAME="Membership"></A>Membership</H2>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">An
entity must be at least</FONT></FONT></FONT><FONT COLOR="#000000">&nbsp;</FONT><A HREF="http://www.eclipse.org/membership/become_a_member/membershipTypes.php#solutions"><FONT COLOR="#3366bb"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Solutions
Members</FONT></FONT></FONT></A><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"> of
the Eclipse Foundation, have executed the LTS IWG Participation
Agreement, and conform to this Charter to participate in the LTS IWG.</FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">There
are three membership levels: Participant, Premium, and Steering
committee. Participant members have access to the download site
providing LTS binaries. Premium members have Participant level access
as well as access to the LTS forge and build farm. Steering committee
members have Premium level access and also governance influence over
the direction of the IWG such as budget and resource allocation.</FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">LTS
Steering Committee membership is provided at no additional charge to
Strategic Members paying the maximum level of dues ($250K)</FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">LTS
Premium membership is provided at no additional charge to Strategic
Members paying dues in excess of $100K</FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000">&nbsp;</FONT></P>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>LTS
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
		<TD WIDTH=85 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>LTS<BR>SC</B></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Total</B></FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$250
			million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$20,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=85>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$30,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$50,000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$100
			million &lt;= $250 million</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$15,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=85 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$30,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$45,000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$50
			million &lt;= $100 million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=85>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$20,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$30,000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$10
			million &lt;= $50 million</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$7,500</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=85 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$20,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$27,500</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&lt;$10
			million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$5,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=85>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$15,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$20,000</FONT></FONT></FONT></P>
		</TD>
	</TR>
</TABLE>
<P STYLE="margin-bottom: 0.13cm; background: #ffffff; line-height: 0.49cm"><A NAME="LTS_Premium_Member_Fees"></A>
<FONT COLOR="#000000">&nbsp;</FONT></P>
<P STYLE="margin-bottom: 0.13cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>LTS
Premium Member Fees</B></FONT></FONT></FONT></P>
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#ffffff">
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Turnover</B></FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Eclipse
			Solution<BR>Membership</B></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=85 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>LTS<BR>Premium</B></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Total</B></FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$250
			million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$20,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=85>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$20,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$40,000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$100
			million &lt;= $250 million</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$15,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=85 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$20,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$35,000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$50
			million &lt;= $100 million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=85>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$15,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$25,000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$10
			million &lt;= $50 million</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$7,500</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=85 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$17,500</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&lt;$10
			million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$5,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=85>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$15,000</FONT></FONT></FONT></P>
		</TD>
	</TR>
</TABLE>
<P STYLE="margin-bottom: 0.13cm; background: #ffffff; line-height: 0.49cm"><A NAME="LTS_Partcipant_Member_Fees"></A>
<FONT COLOR="#000000">&nbsp;</FONT></P>
<P STYLE="margin-bottom: 0.13cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>LTS
Partcipant Member Fees</B></FONT></FONT></FONT></P>
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#ffffff">
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Turnover</B></FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Eclipse
			Solution<BR>Membership</B></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=84 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>LTS<BR>Participant</B></FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Total</B></FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$250
			million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$20,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=84>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$30,000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$100
			million &lt;= $250 million</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$15,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=84 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$25,000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$50
			million &lt;= $100 million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=84>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$7,500</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$17,500</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&gt;$10
			million &lt;= $50 million</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$7,500</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=84 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$7,500</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$15,000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&lt;$10
			million</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$5,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=84>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$5,000</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$10,000</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">&lt;$1
			million &amp; &lt; 10 employees</FONT></FONT></FONT></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$1,500</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=84 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$1,500</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">$3,000</FONT></FONT></FONT></P>
		</TD>
	</TR>
</TABLE>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000">&nbsp;</FONT></P>
<P STYLE="margin-bottom: 0.13cm; background: #ffffff; line-height: 0.49cm"><A NAME="Member_Privileges"></A>
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=3><B>Member
Privileges</B></FONT></FONT></FONT></P>
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=2 BGCOLOR="#ffffff">
	<TR>
		<TD>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Privilege</B></FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>SC
			Member</B></FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Premium
			Member</B></FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt"><B>Participant
			Member</B></FONT></FONT></FONT></P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Member
			of the Steering Committee</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Member
			of the Change Control Board</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Host
			custom build on LTS infrastructure</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Host
			custom branch on LTS infrastructure</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Access
			to the LTS build and signing infrastructure</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">-</FONT></FONT></FONT></P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Attend
			IWG meetings</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Access
			to binary releases</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">X</FONT></FONT></FONT></P>
		</TD>
		<TD></TD>
	</TR>
</TABLE>
<H2 CLASS="western"><A NAME="Governance"></A>Governance</H2>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">This
Long Term Support IWG is designed as:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">a
user driven organization,</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">a
means to foster a vibrant and sustainable ecosystem of components and
service providers,</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">a
means to organize the community of each project or component so that
users and developers can define and provide maintenance content
collaboratively.</FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">In
order to implement these principles, the following governance bodies
have been defined:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Steering Committee</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Change
Control Boards</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Steering_Committee"></A>Steering
Committee</H3>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Steering
committee members are required to:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">define
the strategy of the IWG,</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">define
an annual program plan and budget, including the setting of annual
LTS IWG dues,</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">define
support durations for LTS and VLTS (Very Long Term Support),</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">define
additional membership levels for the IWG,</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">define
the global roadmap,</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">discuss
and update the charter,</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">manage
the creation, operation, and termination of Change Control Boards,</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">define
and implement marketing and communication activities,</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">elect
a chairman each year, and</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">meet
a minimum of twice per year.</FONT></FONT></FONT></P>
<H3 CLASS="western"><A NAME="Change_Control_Boards"></A>Change
Control Boards</H3>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Each
service release defined by the roadmap is led by a Change Control
Board.</FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Change
Control Boards members are required to:</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">create
and maintain a plan, to be approved by the Steering Committee,</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">prioritize
and approve all software changes to be included in each service
release, and</FONT></FONT></FONT></P>
<P STYLE="margin-left: 0.64cm; text-indent: -0.64cm; margin-bottom: 0.04cm; background: #ffffff; line-height: 0.49cm">
<FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>&sect;</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Wingdings"><FONT SIZE=2>
</FONT></FONT></FONT><FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">report
regularly to the Steering Committee on status.</FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">The
Change Control Board elects a chairman who represents the projects.</FONT></FONT></FONT></P>
<P STYLE="margin-bottom: 0.23cm; background: #ffffff; line-height: 0.51cm">
<FONT COLOR="#000000"><FONT FACE="Arial, sans-serif"><FONT SIZE=2 STYLE="font-size: 9pt">Each
Change Control Board will be disbanded once the service release under
its control has been released.</FONT></FONT></FONT></P>
<P>&nbsp;</P>
<P><BR><BR>

</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

