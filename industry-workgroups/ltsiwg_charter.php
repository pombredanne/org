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
		<p><strong>June 12, 2012</strong></p>

<P>This industry working group charter is governed by the 
<A HREF="http://www.eclipse.org/org/industry-workgroups/industry_wg_process.php">
<u>Eclipse Foundation Industry Working Group Process</u></A> document.</P>

<H2>Problem statement</H2>

<P> Adoption
of Eclipse tools and runtimes has reached an all time high, and today
Eclipse software is embedded into many commercial software products.
Enterprise software vendors are required to support their products,
including the Eclipse components, for many years. Thus they are
looking for support offerings that cover a variety of Eclipse
projects and a large number of releases. The issue becomes more
urgent the more Eclipse technology reaches into the runtime stack.</P>

<P> Due to the diversity of projects and committers at Eclipse, which come
from a variety of companies and individuals, it is currently
impossible to get a 'one-stop-support-contract' for all of Eclipse
technologies needed. Vendor neutrality and diversity bring innovation
and long term viability to Eclipse, but make it difficult to provide
the support enterprises are looking for. It is very difficult for any
one company in the Eclipse ecosystem to offer support and maintenance
that covers the entire spectrum of Eclipse technologies.</P>

<H2><A NAME="Goals_and_Vision"></A>Goals and Vision</H2>

<P>The goal of the Long Term Support (LTS) Industry Working Group (IWG) is
to enable the Eclipse ecosystem to consume and provide maintenance
and support for the full breadth of Eclipse technologies.</P>

<P> To implement this vision, the IWG will:</P>
<ul>
	<li>Enable an ecosystem-based solution for long term support and maintenance.</li>
	<li>Define and implement the policies, procedures and infrastructure required
		for long term support and maintenance, including software
		repositories, software builds, software distribution, and test
		facilities.</li>
	<li>Define a roadmap for LTS deliverables.</li>
	<li>If agreed to by the Steering Committee, create and define the content to
		be contained in LTS releases, including:</li>
	<ul>
		<li>defining an LTS release branch based on an Eclipse release train, and</li>
		<li>the content of LTS service releases.</li>
	</ul></li>
</ul>

<H3><A NAME="Roles"></A>Roles</H3>

<P>There are 4 roles in this ecosystem:</P>
<ol>
	<li>Consumers are organizations that acquire maintenance and support services.</li>
	<li>Maintenance Service Providers(MSPs) leverage the IWG systems to provide
		commercial support and maintenance services to Consumers.</li>
	<li>self Service Maintenance Providers(SSMPs) are Consumers that leverage the
		IWG systems to provide internal support and maintenance services.</li>
	<li>Project Support Providers(PSPs) are organizations or individuals that
		leverage the IWG systems to provide support and maintenance services
		for one or more Eclipse projects.</li>
</ol>

<P>It is expected that MSPs and SSMPs will aggregate the services of PSPs
to provide maintenance services to Consumers, or in the case of
SSMPs, to themselves.</P>

<H2><A NAME="Core_services_and_activities"></A>Core services and activities</H2>

<ul>
	<li>The LTS IWG will provide the management processes to enable an
		ecosystem-based long-term support program.</li>
	<li>LTS provides a forge that enables building Eclipse software in the future
		for maintenance and support. The forge will include:
	<ul>
		<li>Code repositories</li>
		<li>Bug tracking</li>
		<li>Knowledge management</li>
		<li>Software distribution and code signing</li>
	</ul></li>
	<li>Employees and contractors of organizations participating in this LTS IWG will
		have access LTS IWG facilities based on that organization's
		participation level as described in the Membership section below.</li>
</ul>

<H2><A NAME="Connections_with_other_Eclipse_Working_G"></A>
Connections with other Eclipse Working Groups</H2>

<P>The LTS IWG may have connections with other IWGs such as Polarsys,
Automotive, and others.</P>

<P>Additional industry working groups may request access to the LTS infrastructure
in the future. Such access, including funding and annual fees, will
require the approval of the LTS IWG Steering Committee.</P>

<H2><A NAME="Membership"></A>Membership</H2>

<P>An entity must be at least a <A HREF="/membership/become_a_member/membershipTypes.php#solutions">Solutions
Members</A> of the Eclipse Foundation, have executed the LTS IWG Participation
Agreement, and conform to this Charter to participate in the LTS IWG.</P>

<P>There are three membership levels: Participant, Premium, and Steering
committee. Participant members have access to the download site
providing LTS binaries. Premium members have Participant level access
as well as access to the LTS forge and build farm. Steering committee
members have Premium level access and also governance influence over
the direction of the IWG such as budget and resource allocation.</P>

<P>LTS Steering Committee membership is provided at no additional charge to
Strategic Members paying the maximum level of dues ($250K)</P>

<P>LTS Premium membership is provided at no additional charge to Strategic
Members paying dues in excess of $100K</P>

<P><strong>LTS Steering Committee Member Fees</strong></P>
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#ffffff">
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Turnover</B></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Eclipse
			Solution<BR>Membership</B></P>
		</TD>
		<TD WIDTH=85 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>LTS<BR>SC</B></P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
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
		<TD WIDTH=85>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$30,000</P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$50,000</P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm">&gt;$100
			million &lt;= $250 million</P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$15,000</P>
		</TD>
		<TD WIDTH=85 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$30,000</P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
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
		<TD WIDTH=85>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$20,000</P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$30,000</P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm">&gt;$10
			million &lt;= $50 million</P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$7,500</P>
		</TD>
		<TD WIDTH=85 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$20,000</P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
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
		<TD WIDTH=85>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$15,000</P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$20,000</P>
		</TD>
	</TR>
</TABLE>

<P><strong>LTS Premium Member Fees</strong></P>

<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#ffffff">
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Turnover</B></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Eclipse
			Solution<BR>Membership</B></P>
		</TD>
		<TD WIDTH=85 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>LTS<BR>Premium</B></P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
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
		<TD WIDTH=85>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$20,000</P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$40,000</P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm">&gt;$100
			million &lt;= $250 million</P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$15,000</P>
		</TD>
		<TD WIDTH=85 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$20,000</P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$35,000</P>
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
		<TD WIDTH=85>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$15,000</P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$25,000</P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm">&gt;$10
			million &lt;= $50 million</P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$7,500</P>
		</TD>
		<TD WIDTH=85 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000</P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$17,500</P>
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
		<TD WIDTH=85>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000</P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$15,000</P>
		</TD>
	</TR>
</TABLE>

<P><strong>LTS Partcipant Member Fees</strong></P>

<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 BGCOLOR="#ffffff">
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Turnover</B></P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>Eclipse
			Solution<BR>Membership</B></P>
		</TD>
		<TD WIDTH=84 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm"><B>LTS<BR>Participant</B></P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
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
		<TD WIDTH=84>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000</P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$30,000</P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm">&gt;$100
			million &lt;= $250 million</P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$15,000</P>
		</TD>
		<TD WIDTH=84 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000</P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
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
		<TD WIDTH=84>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$7,500</P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$17,500</P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm">&gt;$10
			million &lt;= $50 million</P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$7,500</P>
		</TD>
		<TD WIDTH=84 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$7,500</P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
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
		<TD WIDTH=84>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$5,000</P>
		</TD>
		<TD WIDTH=76>
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$10,000</P>
		</TD>
	</TR>
	<TR>
		<TD BGCOLOR="#d3d3d3">
			<P STYLE="border: none; padding: 0cm">&lt;$1
			million &amp; &lt; 10 employees</P>
		</TD>
		<TD BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$1,500</P>
		</TD>
		<TD WIDTH=84 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$1,500</P>
		</TD>
		<TD WIDTH=76 BGCOLOR="#d3d3d3">
			<P ALIGN=CENTER STYLE="border: none; padding: 0cm">$3,000</P>
		</TD>
	</TR>
</TABLE>

<P><strong>Member Privileges</strong></P>

<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=2 BGCOLOR="#ffffff">
	<TR>
		<TD>
			<P ALIGN=CENTER><B>Privilege</B></P>
		</TD>
		<TD>
			<P ALIGN=CENTER><B>SC
			Member</B></P>
		</TD>
		<TD>
			<P ALIGN=CENTER><B>Premium
			Member</B></P>
		</TD>
		<TD>
			<P ALIGN=CENTER><B>Participant
			Member</B></P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P>Member
			of the Steering Committee</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD>
			<P>-</P>
		</TD>
		<TD>
			<P>-</P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P>Member
			of the Change Control Board</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD>
			<P>-</P>
		</TD>
		<TD>
			<P>-</P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P>Host
			custom build on LTS infrastructure</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD>
			<P>-</P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P>Host
			custom branch on LTS infrastructure</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD>
			<P>-</P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P>Access
			to the LTS build and signing infrastructure</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD>
			<P>-</P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P>Attend
			IWG meetings</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD></TD>
	</TR>
	<TR>
		<TD>
			<P>Access
			to binary releases</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD>
			<P>X</P>
		</TD>
		<TD></TD>
	</TR>
</TABLE>

<H2><A NAME="Governance"></A>Governance</H2>

<P>This Long Term Support IWG is designed as:</P>
<ul>
	<li>a user driven organization,</li>
	<li>a means to foster a vibrant and sustainable ecosystem of components and
		service providers,</li>
	<li>a means to organize the community of each project or component so that
		users and developers can define and provide maintenance content
		collaboratively.</li>
</ul>
<P>In order to implement these principles, the following governance bodies
have been defined:</P>
<ul>
	<li>The Steering Committee</li>
	<li>Change Control Boards</li>
</ul>

<H3><A NAME="Steering_Committee"></A>Steering Committee</H3>

<P>Steering committee members are required to:</P>
<ul>
	<li>define the strategy of the IWG,</li>
	<li>define an annual program plan and budget, including the setting of annual
		LTS IWG dues,</li>
	<li>define support durations for LTS and VLTS (Very Long Term Support),</li>
	<li>define additional membership levels for the IWG,</li>
	<li>define the global roadmap,</li>
	<li>discuss and update the charter,</li>
	<li>manage the creation, operation, and termination of Change Control Boards,</li>
	<li>define and implement marketing and communication activities,</li>
	<li>elect a chairman each year, and</li>
	<li>meet a minimum of twice per year.</li>
</ul>

<H3><A NAME="Change_Control_Boards"></A>Change Control Boards</H3>

<P>Each service release defined by the roadmap is led by a Change Control
Board.</P>

<P>Change Control Boards members are required to:</P>
<ul>
	<li>create and maintain a plan, to be approved by the Steering Committee,</li>
	<li>prioritize and approve all software changes to be included in each service
		release, and</li>
	<li>report regularly to the Steering Committee on status.</li>
</ul>

<P>The Change Control Board elects a chairman who represents the projects.</P>

<P>Each Change Control Board will be disbanded once the service release under
its control has been released.</P>

<P>&nbsp;</P>

</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

