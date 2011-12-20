<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Mike Milinkovich
	# Date:			2008-07-23
	#
	# Description: Minutes of the March, 2008 Board meeting
	#
	#
	#****************************************************************************
		
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Board Meeting Minutes";
	$pageKeywords	= "eclipse, foundation, governance, board, minutes";
	$pageAuthor		= "Mike Milinkovich";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<!--<div id="maincontent">-->
	<div id="midcolumn">
		<h1>$pageTitle</h1>
	    <h3>June 14 &amp 15, 2011</h3>

<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US"><br/>A Meeting of the
Board of Directors (the &ldquo;</SPAN><SPAN LANG="en-US"><I><B>Board</B></I></SPAN><SPAN LANG="en-US">&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Corporation&rdquo;</B></I></SPAN><SPAN LANG="en-US">),
was held on held at 8:30am Eastern time at the IBM Software Executive
Briefing Centre in Research Triangle Park, North Carolina on June
14</SPAN><SUP><SPAN LANG="en-US">th</SPAN></SUP><SPAN LANG="en-US">
and 15</SPAN><SUP><SPAN LANG="en-US">th</SPAN></SUP><SPAN LANG="en-US">,
2011 as a regularly scheduled quarterly face-to-face meeting. </SPAN>
</P>
<TABLE WIDTH=607 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD COLSPAN=2 WIDTH=119>
			<P LANG="en-US" ALIGN=CENTER STYLE="border: none; padding: 0cm">Attending?</P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Director</P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Company</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">14<SUP>th</SUP></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">15<SUP>th</SUP></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Andreas
			Andersen</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Nokia</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Chris
			Aniszczyk</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Committer Representative</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Michael
			Bechauf</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">SAP
			AG</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Boris
			Bokowski</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Committer Representative</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Cedric
			Carbone</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Talend</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Eric
			Clayberg</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Sustaining Representative</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Nobby
			Akiha for Paul Clenahan</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Actuate
			Corporation</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Etienne
			Juliot</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">OBEO</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Hans
			Kamutzki</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Sustaining Representative</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">John
			Kellerman</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">IBM</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Mik
			Kersten</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Sustaining Representative</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Jochen
			Krause</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Innoopract
			GmbH</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Dennis
			Leung</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Oracle</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Paul
			Lipton</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">CA
			Technologies</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Achim
			Loerke</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">BREDEX
			GmbH</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Ed
			Merks</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Committer Representative</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Wolfgang
			Neuhaus</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">itemis
			AG</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Jason
			Van Zyl</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Sonatype</FONT></P>
		</TD>
	</TR>
</TABLE>
<P STYLE="text-indent: 1.27cm">&nbsp;</P>
<P LANG="en-US" STYLE="text-indent: 1.27cm">Present at the invitation
of the Board was Mike Milinkovich, Executive Director, Janet
Campbell, Secretary, and Chris Larocque, Treasurer of Eclipse.org
Foundation, Inc.</P>
<P STYLE="margin-top: 0.42cm; page-break-after: avoid"><SPAN LANG="en-US"><U><B>General
Business</B></U></SPAN> 
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm"><SPAN LANG="en-US">Mike
Milinkovich introduced the minutes from the April 2011 Board meeting,
attached hereto as Exhibit A and asked for any corrections and/or
comments.&nbsp; Etienne Juliot indicated that he had joined the call
following roll call and asked that the minutes be amended to reflect
his attendance.&nbsp; With John Kellerman abstaining as he had not
attended the meeting, the following resolution was passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
there was unanimous consent to approve full and abridged version of
the minutes of the April 2010 Board Meeting, as amended.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
introduced the minutes from the May 2011 Board Meeting, attached
hereto as <A HREF="2011_05_18_Minutes.php">Exhibit B</A>.&nbsp; The following resolution was passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
there was unanimous consent to approve full and abridged version of
the minutes of the May 2010 Board Meeting.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
confirmed that the Electronic Vote of the Board of Directors
regarding the dual licensing of Lyo had been unanimously approved.
&nbsp;&nbsp;The following approved Resolution was read into the
minutes:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><STRONG><SPAN LANG="en-US">RESOLVED</SPAN></STRONG><SPAN LANG="en-US">,
that&nbsp;The Board unanimously approves the dual licensing of the
(tentatively named) Eclipse Lyo Project initially described in the
draft proposal attached hereto under the terms of the <A HREF="http://www.eclipse.org/legal/epl-v10.html">Eclipse
Public License</A> and <A HREF="http://www.eclipse.org/org/documents/edl-v10.php">Eclipse
Distribution License</A>.</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
introduced a discussion of the proposed changes to the Eclipse
Foundation Bylaws and related changes to the Eclipse Development
Process, the related material for which is attached as <A HREF="2011_06_exhibits/ExhibitC.pdf">Exhibit C</A>, <A HREF="2011_06_exhibits/ExhibitD.pdf">Exhibit D</A>
and <A HREF="2011_06_exhibits/ExhibitE.pdf">Exhibit E</A> respectively.&nbsp; Following discussion, the following
resolutions were unanimously approved:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that the revisions to the Bylaws as presented to the Board and
attached to the minutes of the meeting as Exhibit D are approved by
the Board of Directors. The Executive Director is instructed to
proceed to a vote of the Membership-at-Large for final ratification.</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
pending ratification of the Bylaws by the Membership-at-Large the
revisions to the Eclipse Development Process as presented to the
Board and attached to the minutes of the meeting as Exhibit E are
approved by the Board of Directors.</SPAN></P>
<P LANG="en-US"><U><B>Committer Issues</B></U></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Boris Bokowski
raised the issue of the recent outage of Eclipse Servers.&nbsp; There
were two outages within a couple of days of each other.&nbsp; Boris
indicated that the outage was handled well by Denis and his team.&nbsp;
Boris encouraged Board Members to consider asking their companies to
donate servers to the Eclipse Foundation as there is an ongoing need
for new equipment at the Eclipse Foundation.&nbsp; Boris also asked
whether the Eclipse Foundation was considering the possibility of
moving some of the services that are provided to third party service
providers.&nbsp; Mike Milinkovich responded that Chris Larocque,
Denis Roy and himself would be considering this possibility during
the 2012 budget process.&nbsp; A board member highlighted that the
service level agreements of most third party service providers
usually provide little recourse if problems occur.&nbsp; </SPAN>
</P>
<P LANG="en-US"><U><B>Management Reports</B></U></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
presented the Management Reports, including Membership, Marketing,
and Projects, the related material for which is attached as <A HREF="2011_06_exhibits/ExhibitF.pdf">Exhibit F</A>,
<A HREF="2011_06_exhibits/ExhibitG.pdf">Exhibit G</A>, and <A HREF="2011_06_exhibits/ExhibitH.pdf">Exhibit H</A> respectively.&nbsp; Eric Clayberg commented that he had a
much better appreciation as to why the Eclipse releases are of such
high quality, indicating that much of it is a result of the processes
that are used at Eclipse.&nbsp; </SPAN>
</P>
<P LANG="en-US" STYLE="text-indent: 1.27cm">Mike Milinkovich provided
an update on EclipseCon Europe, the related slides for which are
attached as <A HREF="2011_06_exhibits/ExhibitI.pdf">Exhibit I</A>.&nbsp; Mike indicated that the prices for
EclipseCon Europe have been increased but that returning attendees
will benefit from steep discounts.&nbsp; Mike encouraged the
companies represented on the Board to consider sponsorship.&nbsp; He
further indicated that this was a special opportunity given its
Eclipse&rsquo;s tenth birthday.&nbsp; Mike also asked the Board to
consider advertising the conference on their developer portals and to
support their developers in becoming speakers at EclipseCon Europe.&nbsp;&nbsp;
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike reported that
the Eclipse Foundation had decided to host EclipseCon North America
2012 on the east coast and that currently a number of locations were
under consideration, including Boston, Washington DC and Atlanta.&nbsp;
Chris Larocque commented that the Foundation had also looked at
Philadelphia and Miami but that Philadelphia didn&rsquo;t have the
dates and Miami proved to be quite expensive.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
reviewed a proposal with the Board to re-allocate Strategic Members
advertising space to revenue generating pursuits.&nbsp; The related
slides are attached as <A HREF="2011_06_exhibits/ExhibitJ.pdf">Exhibit J</A>.&nbsp; Following discussion, this
resolution was passed unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
the Board directs the Executive Director to pursue the &ldquo;use it
or lose it&rdquo; approach to Strategic Member advertising space
presented to the Board and attached to the minutes of the meeting as
Exhibit J.</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Chris Larocque
reviewed the Eclipse Foundation&rsquo;s year-to-date financial status
for 2011 and Key Performance Indictors with the Board.</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
introduced a discussion into the possibility of pursuing business
opportunities around IPZilla access, the related slides for which are
attached as <A HREF="2011_06_exhibits/ExhibitM.pdf">Exhibit M</A>.&nbsp; Mike indicated that the Foundation wants
to do everything it can to raise the brand awareness around the due
diligence work that we do.&nbsp;&nbsp; A board member asked whether
the Foundation had considered the legal implications.&nbsp; Mike
Milinkovich responded that the Foundation would limit its liability,
though it won&rsquo;t be possible to reduce it to zero.&nbsp; A board
member indicated that access is currently available to Committers and
Strategic and Enterprise Members.&nbsp; He questioned whether
de-coupling that value proposition posed a risk to the Foundation.&nbsp;
Following discussion, this resolution was passed unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
the Board directs the EMO to evaluate the three options to pursue
revenue opportunities related to IPZilla presented to the Board and
include in the analysis an evaluation of the impact of the loss of
this perceived benefit on Strategic and Enterprise Members.&nbsp; </SPAN>
</P>
<P LANG="en-US"><U><B>Long Term Support and OPEES</B></U></P>
<P LANG="en-US">Mike Milinkovich introduced the topic of Long Term
Support, the related slides for which are attached as <A HREF="2011_06_exhibits/ExhibitN.pdf">Exhibit N</A>.&nbsp;
In doing so, Mike indicated that he believes that we are at a point
of inflection for Eclipse.&nbsp; Opportunities such as Long Term
Support and if we are successful, will change the face of Eclipse.&nbsp;&nbsp;
In discussing the Long Term Support initiative, Mike outlined the
OPEES opportunity, the related slides for which are attached as
<A HREF="2011_06_exhibits/ExhibitO.pdf">Exhibit O</A>.&nbsp; Mike also provided the Board with a draft OPEES
Participation Agreement which had been prepared by counsel, attached
as <A HREF="2011_06_exhibits/ExhibitP.pdf">Exhibit P</A>.&nbsp; Following discussion, the Board unanimously
approved the following:</P>
<P LANG="en-US"><U>General:</U></P>
<P STYLE="margin-left: 1.27cm; margin-top: 0.42cm; margin-bottom: 0cm">
<SPAN LANG="en-US"><B>RESOLVED, </B></SPAN><SPAN LANG="en-US">the
Board approves the creation of Industry Working Group Participation
Agreements, which specify participation fees and which shall
incorporate the terms of the Eclipse Foundation Membership Agreement.
All such agreements, including said fees shall be provided to the
Board at the next regularly scheduled meeting.</SPAN></P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="margin-top: 0.42cm"><U>Long Term
Support:</U></P>
<P STYLE="margin-left: 1.27cm; margin-top: 0.42cm; margin-bottom: 0cm">
<SPAN LANG="en-US"><B>RESOLVED, </B></SPAN><SPAN LANG="en-US">the
Board approves the creation of a private, members-only information
technology (IT) infrastructure for the exclusive use of Participating
Members of the LTS Industry Working Group. Such IT infrastructure
will be hosted and supported by the Eclipse Foundation. Software
binary releases made available only to Participating Members of the
LTS Industry Working Group, under a non-open source license, will be
made available via that private IT infrastructure.</SPAN></P>
<P STYLE="margin-left: 1.27cm; margin-top: 0.42cm; margin-bottom: 0cm">
<SPAN LANG="en-US"><B>RESOLVED, </B></SPAN><SPAN LANG="en-US">that
the Executive Director of the Corporation is hereby authorized and
empowered, for and on behalf of the Corporation, to retain such
advisors, to execute and deliver such documents, papers or
instruments and to do or cause to be done any and all such other acts
and things as he may deem necessary, appropriate or desirable in
connection with establishing the LTS Industry Working Group as
described in the presentation made to the Board the previous day and
attached to the minutes of the meeting as <A HREF="2011_06_exhibits/ExhibitN.pdf">Exhibit N</A>, and the taking
of any such action shall be conclusive evidence of the approval
thereof by this Board of Directors.</SPAN></P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="margin-top: 0.42cm; page-break-after: avoid">
<U>OPEES:</U></P>
<P STYLE="margin-left: 1.27cm; margin-top: 0.42cm; margin-bottom: 0cm">
<SPAN LANG="en-US"><B>RESOLVED, </B></SPAN><SPAN LANG="en-US">the
Board approves the creation of a private, members-only information
technology (IT) infrastructure for the exclusive use of Participating
Members of the OPEES Industry Working Group. Such IT infrastructure
will be hosted and supported by the Eclipse Foundation. Software
binary releases made available only to Participating Members of the
OPEES Industry Working Group, under a non-open source license, will
be made available via that private IT infrastructure.</SPAN></P>
<P STYLE="margin-left: 1.27cm; margin-top: 0.42cm; margin-bottom: 0cm">
<SPAN LANG="en-US"><B>RESOLVED,</B></SPAN> <SPAN LANG="en-US">the
Board authorizes the Executive Director to investigate the creation
of a legal entity to serve the Eclipse community in Europe (i.e. the
&ldquo;Eclipse Foundation Europe&rdquo;) and recommend a course of
action to the Board.</SPAN></P>
<P STYLE="margin-left: 1.27cm; margin-top: 0.42cm; margin-bottom: 0cm">
<SPAN LANG="en-US"><B>RESOLVED, </B></SPAN><SPAN LANG="en-US">The
Board unanimously approves the use of the &ldquo;GNU Lesser General
Public License (LGPL)&rdquo; license for projects hosted by the OPEES
Industry Working Group. Such projects must be clearly identified as
separate and distinct from Eclipse Foundation projects, hosted on a
web property other than eclipse.org, and not using the org.eclipse
namespace. </SPAN>
</P>
<P STYLE="margin-left: 1.27cm; margin-top: 0.42cm; margin-bottom: 0cm">
<SPAN LANG="en-US"><B>RESOLVED, </B></SPAN><SPAN LANG="en-US">that
the Executive Director of the Corporation is hereby authorized and
empowered, for and on behalf of the Corporation, to retain such
advisors, to execute and deliver such documents, papers or
instruments and to do or cause to be done any and all such other acts
and things as he may deem necessary, appropriate or desirable in
connection with establishing the OPEES Industry Working Group as
described in the presentation made to the Board on this day and
attached to the minutes of the meeting as <A HREF="2011_06_exhibits/ExhibitO.pdf">Exhibit O</A>, and the taking
of any such action shall be conclusive evidence of the approval
thereof by this Board of Directors.</SPAN></P>
<P LANG="en-US"><U><B>Review of Strategy Process</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced the strategy session,
the related slides for which are attached as <A HREF="2011_06_exhibits/ExhibitQ.pdf">Exhibit Q</A>.&nbsp; &nbsp;A
board member proposed that the Board consider changing the reference
to &ldquo;platform&rdquo; within the mission.&nbsp; Mike Milinkovich
indicated that the mission is modeled on the purposes section of the
Bylaws and that consistency in this regard would be beneficial.&nbsp;
Further, while the Foundation had considered a change such as this in
the past, we were advised by external counsel that changing the
purposes section in the Foundation&rsquo;s Bylaws might be
problematic and it was part of the Foundation&rsquo;s filing for
not-for-profit status and may lead to a review of the Foundation&rsquo;s
status.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">The Board then discussed the Eclipse Foundation&rsquo;s
vision.&nbsp; After much discussion, the following revised vision was
unanimously agreed upon by the Board:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&ldquo;<SPAN LANG="en-US">Eclipse
enables ecosystems and business models by predictably delivering IP
clean, commercial quality, and modular open source tools, runtimes
and platforms.&rdquo;&nbsp; </SPAN>
</P>
<P LANG="en-US" STYLE="text-indent: 1.27cm">The Board discussed the
strategic goals for the Eclipse Foundation for 2012.&nbsp; &nbsp;After
much discussion, the following were agreed upon as the strategic
goals for the Eclipse Foundation in 2012:</P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Establish and maintain Eclipse
technology as a leading tools and runtime platform</SPAN></P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Maintain dominance as the leading
open source tools platform</SPAN></P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Create value for all its membership
classes</SPAN></P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Foster growth of the ecosystem,
particularly in verticals</SPAN></P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Run a good ship</SPAN></P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Continue to grow a diversified
revenue model</SPAN></P>
<P LANG="en-US">The meeting was adjourned to reconvene Tuesday June
14, 2010 at 8:30am EST time.</P>
<P LANG="en-US" ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P LANG="en-US">Tuesday June 15, 2010</P>
<P STYLE="margin-top: 0.42cm; page-break-after: avoid"><SPAN LANG="en-US"><U><B>General
Business</B></U></SPAN> 
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich proposed a resolution to update
our Office of Official Record to reflect the new firm and address of
our external counsel.&nbsp; The following resolution was unanimously
passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
the official office of record for the Corporation will be the New
York offices of Proskauer located at Eleven Times Square, New York,
NY 10036-8299.</SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an update on the
Automotive Industry Working Group initiative, the related slides for
which are attached as <A HREF="2011_06_exhibits/ExhibitR.pdf">Exhibit R</A>.</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike
Milinkovich declared the meeting adjourned at approximately 2:57pm
ET. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">This being
a true and accurate record of the proceedings of this Meeting of the
Board of Directors held on June 14<SUP>th</SUP> and 15<SUP>th</SUP>,
2011, is attested to and signed by me below.</P>
<P>&nbsp;</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><U>/s/ Janet Campbell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</U></SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Secretary of Meeting</SPAN></P>
<P><BR><BR>
</P>
	    
	</div>
	
<!--</div>-->


</script>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
	
	function get_candidates_list_as_html(&$candidates, $year, $type) {
		$type_name = strcmp($type, 'committer') == 0 ? 'Committer' : 'Add-in provider';
		$html = "<h3>$type_name Candidates</h3><table border=\"0\" cellpadding=\"5\">";
		foreach ($candidates as $candidate) {
			if (strcmp($candidate->type, $type) != 0) continue;
			$html .= <<<EOHTML
				<tr>
					<td valign="top"><a href="candidate.php?year=$year&id=$candidate->id"><img src="$candidate->image" width="75"></a></td>
					<td valign="top" style="border-bottom: dashed 1px #494949;">
						<strong><a href="candidate.php?year=$year&id=$candidate->id">$candidate->name</a></strong>
						<br>$candidate->title
						<p>$candidate->contact</p>
					</td>
				</tr>
EOHTML;
		}
		$html .= "</table>";
		
		return $html;
	}
?>