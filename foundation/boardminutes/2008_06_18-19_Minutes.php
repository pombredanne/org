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
	$pageTitle 		= "Eclipse Foundation Meeting Minutes";
	$pageKeywords	= "foundation, governance, board, minutes";
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
	    <h3>June 18-19, 2008</h3>
<P ALIGN=CENTER>_________________________________________________________________________</P>
<P STYLE="text-indent: 1.27cm">A Meeting of the Board of Directors
(the &ldquo;<B><I>Board</I></B>&rdquo;) of Eclipse.org Foundation,
Inc., a Delaware corporation (the &ldquo;<B><I>Corporation&rdquo;</I></B>),
was held on held at 8:30am Mountain time at the Marriott Denver at
Cherry Creek in Denver Colorado on June 18 and 19<SUP>th</SUP>, 2008
as a regularly scheduled quarterly face-to-face meeting. 
</P>
<P>Present at the meeting were the following Directors:</P>
<TABLE WIDTH=587 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Rich Bartlett</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Hans-Christian Brockmann</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">brox IT-Solutions GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Actuate Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Robert Day</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Doug Gaff</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Richard Gronback</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Borland Software Corp.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Douglas Clarke for Dennis
			Leung</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Emma McGrattan</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Wolfgang Neuhaus</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Tracy Ragan</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">James Saliba</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">CA Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Steve Saunders</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Wind River</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Somasundaram Shanmugam</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Sybase</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Pat Huff for Dave Thomson</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Todd E. Williams</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Dino Brusco for Christy
			Wyatt</P>
		</TD>
		<TD WIDTH=267>
			<P STYLE="border: none; padding: 0cm">Motorola</P>
		</TD>
	</TR>
</TABLE>
<P>&nbsp;</P>
<P>Present at the invitation of the Board was Mike Milinkovich,
Executive Director, Janet Campbell, Secretary, and Chris Larocque,
Treasurer of Eclipse.org Foundation, Inc.</P>
<P STYLE="margin-top: 0.42cm; page-break-after: avoid"><B><U>General
Business</U></B> 
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm">Mike
Milinkovich introduced the minutes from the March and May Board
meetings and asked for any corrections and/or comments.&nbsp; The
following resolution was unanimously passed:</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
there was unanimous consent to approve the Abridged Minutes for the
March 2008 Board meeting and the full and abridged version of the May
Board Meeting, attached hereto as Exhibit A.&nbsp; 
</P>
<P STYLE="text-indent: 1.27cm">Mike Milinkovich introduced the
Charter for the Strategy Committee and asked if there were any
questions or comments.&nbsp; The following resolution was unanimously
passed:</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
there was unanimous consent to approve the Strategy Committee
Charter, attached hereto as <a href="2008_06_exhibits/ExhibitB.pdf">Exhibit B</a>.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich moved that Ricco Deutscher be appointed Chair of the
Strategy Committee.&nbsp; The following resolution was unanimously
approved.</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
Ricco Deutscher is appointed Chair of the Strategy Committee.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich reported (the related materials for which are
attached to these minutes as <a href="2008_06_exhibits/ExhibitC.pdf">Exhibit C</a>) that Strategic Member
sponsorship for Eclipse Summit Europe was down and encouraged all
Strategic Members to sponsor the event and attend.&nbsp; Mike further
indicated that for those in the embedded world that they would find a
strong contingent from the embedded community there.</P>
<P><B><U>Amendments to Bylaws and Membership Agreement</U></B></P>
<P STYLE="text-indent: 1.27cm">Mike Milinkovich provided an overview
of proposed changes to the Bylaws and Membership Agreement, the
related material for which is attached hereto as <a href="2008_06_exhibits/ExhibitE.pdf">Exhibit E</a>.&nbsp;
Mike Milinkovich further advised that the Foundation is also actively
looking at setting up working groups in a variety of industry
verticals with the expectation that these working groups would be led
by either Strategic or Enterprise Members and funded by the Member
companies involved.&nbsp; &nbsp;</P>
<P STYLE="text-indent: 1.27cm">Mike indicated that there were two
resolutions to be discussed in relation to the changes to the Bylaws
and Membership Agreement.&nbsp; The first is to approve the changes
to the Add-In Provider dues, the related material for which is
attached hereto as <a href="2008_06_exhibits/ExhibitF.pdf">Exhibit F</a>.&nbsp; The second is to approve the
amendments to the Bylaws and Membership Agreement and turn the matter
over to the Membership-at-large to vote, the related material for
which is attached hereto as <a href="2008_06_exhibits/ExhibitG1.pdf">Exhibit G.1</a> 
and <a href="2008_06_exhibits/ExhibitG2.pdf">Exhibit G.2</a>.&nbsp; Following a discussion,
the following resolution was approved:</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
there was unanimous consent to approve the proposed changes to the
Add-In Provider dues provided for in Exhibit C to the Membership
Agreement, the related materials for which are attached to these
minutes as <a href="2008_06_exhibits/ExhibitF.pdf">Exhibit F</a>.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich introduced the proposed amendments to the Bylaws and
Membership Agreement, thanking the Board Members for their comments,
many of which had been incorporated into the revised draft.&nbsp; A
concern was raised that Enterprise Members may not gain
representation on the Board given the structure of elected Board
Member representation.&nbsp; Mike Milinkovich replied that the EMO
had considered this possibility but felt that given that historically
the Add-In Provider Representatives election has been by acclamation
or excluded only one of the potential candidate&rsquo;s running, it
was unlikely to be a problem.&nbsp; Further, it was felt that
Enterprise Members were more likely to have brand recognition and
therefore would face less of a challenge on this front.&nbsp;
Following the discussion, the following resolution was approved:</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, there was unanimous consent to approve the proposed
amendments to the Bylaws and the Membership Agreement, attached
hereto as <a href="2008_06_exhibits/ExhibitG1.pdf">Exhibit G.1</a> and 
<a href="2008_06_exhibits/ExhibitG2.pdf">G.2</a> respectively.</P>
<P STYLE="page-break-after: avoid"><B><U>Committee Reports:</U></B></P>
<P STYLE="page-break-after: avoid"><B><I>IP Advisory Committee</I></B></P>
<P STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich presented an update on behalf of Adrian Cho, Chair
of the IP Advisory Committee.&nbsp; The related presentation is
attached hereto as <a href="2008_06_exhibits/ExhibitH.pdf">Exhibit H</a>.&nbsp;&nbsp; The IP Policy changes that
have been under discussion for the past year have resulted in
significant beneficial changes to the Policy; though more work
remains to be done.&nbsp;&nbsp; There are a number of other items
that remain on the IP Advisory Committee&rsquo;s queue including the
matter of what position the Foundation takes on GPL/EPL compatibility
and proposed changes to the Terms of Use.&nbsp; 
</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, there was unanimous consent to appoint Steve
Saunders to the IP Advisory Committee.</P>
<P><B><U>Roadmap Process</U></B></P>
<P STYLE="text-indent: 1.27cm">Mike Milinkovich introduced a
discussion on the roadmap process and related concerns.&nbsp; A copy
of the related slides is attached as <a href="2008_06_exhibits/ExhibitJ.pdf">Exhibit J</a> hereto.&nbsp; Mike
began by reminding Board Members that the Bylaws require that the
Eclipse Foundation annually produce an overview document.&nbsp; The
Board had previously concluded that it would be useful that the
projects create a standardized plan to give the ecosystem an
indication of where Eclipse was heading.&nbsp; The EMO created a
standardized format to support this effort.&nbsp; The Projects have
not reacted favorably to the Board&rsquo;s request and only 4 out of
115 Projects have complied.&nbsp;&nbsp; The Eclipse Foundation is not
inclined to take drastic measures in the event that the Projects do
not comply and are seeking guidance from the Board on how best to
proceed.&nbsp; 
</P>
<P STYLE="text-indent: 1.27cm">Some Board Members indicated that they
felt that what was being requested of the Projects and why was being
poorly communicated and further that the tools to support the effort
were difficult to find.&nbsp; Others felt that if the relevant PMC
was not driving this initiative, then the PMC itself was broken.&nbsp;
The prevailing view was that the EMO should strongly push this issue
and that the Planning Council and PMCs should be involved in the
effort.&nbsp; It was decided that the new timetable should be that
the Projects would have to get their Project Plan to their PMC by the
end of September, that the Planning Council would hold a session to
solidify the roadmap in November, and that there would be plenary
session with the Board and Councils at the December Board meeting.&nbsp;
In addition, it was felt that there should be a way to highlight when
it is believed that a PMC is not doing their job and corrective
action taken if need be (i.e. removing the relevant PMC Lead).</P>
<P><B><U>TPTP PMC Report</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Oliver Cole provided a report to the Board of Directors on behalf of
the TPTP PMC, a copy of the related presentation is attached hereto
as <a href="2008_06_exhibits/ExhibitK1.pdf">Exhibit K.1</a> and
<a href="2008_06_exhibits/ExhibitK2.pdf">Exhibit K.2</a>.&nbsp; 
</P>
<P><B><U>BIRT PMC Report</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Paul Clenahan provided a report to the Board of Directors on behalf
of the BIRT PMC, a copy of the related presentation is attached
hereto as <a href="2008_06_exhibits/ExhibitL.pdf">Exhibit L</a>.&nbsp;&nbsp; Following the presentation Paul was
asked what makes Actuate invest 45 resources in Eclipse.&nbsp; Paul
replied that the higher the number of people involved in the Project,
the greater the profile, and the greater the install base to sell
products and services into.&nbsp; 
</P>
<P><B><U>Standardizing eRCP at the OSGi Alliance (at the request of
the DSDP PMC)</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Jeff McAffer outlined a proposal to have eRCP standardized at the
OSGi Alliance, the related presentation for which is attached hereto
as <a href="2008_06_exhibits/ExhibitM.pdf">Exhibit M</a>.&nbsp;&nbsp; Jeff indicated that it was important to
note that Eclipse is retrospecting in pursuing this path.&nbsp; eRCP
was developed at Eclipse.&nbsp; The intention is for eRCP to work
with OSGi to spec what has already been implemented.&nbsp; &nbsp;Concerns
were raised that there may be pressure on the related Eclipse
Project(s) to change their code to reflect OSGi&rsquo;s interests and
it was felt that this concern should formally be addressed with OSGi.
Following the discussion, the following resolution was passed:</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, the Board unanimously approved that the eRCP Project
may standardize it&rsquo;s APIs using OSGI mobile expert group,
subject to the resolution of the governance of the interaction such
that the future evolution of Eclipse Technology is not impeded and
the Eclipse Foundation is ensured continuous access to all relevant
TCKs at no cost.&nbsp; 
</P>
<P><B><U>Strategy Discussion</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Ricco Deutscher introduced a Strategy Discussion, the related
presentation materials for which are attached as <a href="2008_06_exhibits/ExhibitN.pdf">Exhibit N</a> hereto,
updated to reflect the discussion at the Board Meeting.&nbsp; Ricco
provided an outline of the intended approach to develop the Eclipse
Foundation&rsquo;s strategy together with a draft of Eclipse&rsquo;s
strengths, weaknesses, opportunities and threats (SWOT) for
discussion by the Board.&nbsp;&nbsp; Ricco indicted that the
intention was to revisit the strategy for the Eclipse Foundation
annually. 
</P>
<P STYLE="page-break-after: avoid"><B><U>Add-In Provider Issues</U></B></P>
<P STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Todd Williams expressed concerns regarding the Packaging Project&rsquo;s
recent announcement which appears to propose the creation of a server
based provisioning system which is being built separate from
Eclipse.&nbsp; It further appeared to Todd that the Eclipse
Foundation intended to take delivery of the Project once developed.&nbsp;
Todd expressed concern that this appeared to be out of scope of the
Project&rsquo;s Charter.&nbsp; Upon further discussion, it was
determined that raising this matter at the Board level was premature
and that this was best discussed by the parties involved at this
point in time.</P>
<P><B><U>Committer Issues</U></B></P>
<P><B><I>Localization of Bugzilla</I></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Doug Gaff expressed an interest in having a Japanese localized
version of the Bugzilla UI available.&nbsp; Concerns were expressed
about the Eclipse Foundation&rsquo;s resource constraints to deal
with Bugzilla localization and the likelihood that Bugzilla UI&rsquo;s
in other languages were likely to be requested in the event we were
to do so for Japanese.&nbsp;&nbsp; In addition, the concern was
raised that with a localized UI discussion would more likely ensue in
that native language which could reduce the &ldquo;openness&rdquo; to
the community as a whole.&nbsp; Further, the localized UI may
increase the likelihood that IP submissions would be received in a
different language which would be a concern from an IP review
standpoint.&nbsp; Mike Milinkovich indicated that the EMO would take
the proposal under consideration.&nbsp; 
</P>
<P><B><I>IP Policy</I></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Jeff McAffer indicted that there was a growing need for Projects to
work very closely with non-Eclipse projects and consume their code on
a frequent and sometimes on-going basis and that currently; the IP
Policy restricted the Project&rsquo;s ability to do so, the related
presentation materials for which are attached as <a href="2008_06_exhibits/ExhibitO.pdf">Exhibit O</a> hereto.&nbsp;
Following discussion, the following resolution was passed.</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, the board requests that when the IP Advisory
Committee returns to the Board with a revised version of the IP
Policy, that the Committee specifically report whether the Committee
believes that they have addressed the situation where one Eclipse
Project is working closely with a non-Eclipse project and needs to
bring in frequent code updates of that non-Eclipse project&rsquo;s
code into the Eclipse code base.</P>
<P><B><I>Enforcement of Board Mandated Requirements</I></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Ed Merks indicated that the Board often passes resolutions in support
of rules for the Projects that the EMO must later implement in the
face of both non-compliance and opposition and questioned whether
this type of enforcement is something that the Board wants the EMO to
focus their efforts on.&nbsp; One such resolution is the December 14,
2006 resolution concerning Project&rsquo;s website content.&nbsp;
Following discussion, the following were agreed upon:&nbsp;</P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm">1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Having the EMO proactively search out non-compliant Projects and
enforcing compliance is not a useful exercise.</P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm">2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Having Projects comply with these guidelines should be the
responsibility of the PMCs.&nbsp; The EMO needs to make it abundantly
clear to the PMCs that it is their responsibility to ensure that all
the Projects under their control comply.</P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm">3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The EMO took the action to:&nbsp; &nbsp;(a) highlight non-compliant
Projects; (b) add compliance with Board approved Policies to all of
the review checklists (other than creation review).&nbsp; You will
not pass the review unless you comply (i.e. Graduation, Continuation,
and Release reviews),</P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm">4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The Board reminded the EMO of its responsibility to terminate
non-compliant PMC Leads and members.</P>
<P>In addition, the need for greater Project education was
recognized.&nbsp; The Planning Council was highlighted as one such
place where this could take place.&nbsp; 
</P>
<P><B><U>Dual-licensing Embedded Runtime Components</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Doug Gaff introduced the proposal to dual license the RTSC and TCF
agents under the <A HREF="http://www.eclipse.org/org/documents/epl-v10.php">Eclipse
Public License</A> (&ldquo;EPL&rdquo;) and <A HREF="http://www.eclipse.org/org/documents/edl-v10.php">Eclipse
Distribution License</A> (&ldquo;EDL&rdquo;) which is based on the
<A HREF="http://www.opensource.org/licenses/bsd-license.php">BSD
template</A>.&nbsp; The related presentation material is attached
hereto as <a href="2008_06_exhibits/ExhibitP.pdf">Exhibit P</a>.&nbsp; &nbsp;The Board recognized the importance
of enabling these technologies and maintaining the technology at
Eclipse and felt that the dual licensing of these components was
appropriate in this case.&nbsp; Accordingly, the following resolution
was passed:</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVE</B>D, there was unanimous consent to approve the dual
licensing of the RTSC and TCF agents under the <A HREF="http://www.eclipse.org/org/documents/epl-v10.php">Eclipse
Public License</A> (&ldquo;EPL&rdquo;) and <A HREF="http://www.eclipse.org/org/documents/edl-v10.php">Eclipse
Distribution License</A> (&ldquo;EDL&rdquo;) which is based on the
<A HREF="http://www.opensource.org/licenses/bsd-license.php">BSD
template</A>.</P>
<P><B><U>Strategy Discussion</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Ricco Deutscher re-introduced the strategy discussion, the related
material for which is attached as <a href="2008_06_exhibits/ExhibitQ.pdf">Exhibit Q</a> hereto.&nbsp; In
discussing the Eclipse Foundation&rsquo;s Mission, it was felt that
the Mission was adequately outlined in the &ldquo;Purposes&rdquo;
Section of the Eclipse Bylaws (Section 1.1).&nbsp; Ricco asserted
that the Eclipse vision does not appear to exist today and that this
was a necessary component in order to develop a strategy.&nbsp;&nbsp;
In discussing Eclipse&rsquo;s vision, Mike Milinkovich indicated that
he thought that the &ldquo;secret sauce&rdquo; at Eclipse had nothing
to do with technology.&nbsp; Rather, Mike felt that the &ldquo;secret
sauce&rdquo; is that Eclipse has created the best platform in the
world for doing industry collaborative development in that Eclipse is
the place where many people and companies come together to
collaborate on industry platforms, whatever that might be.&nbsp; 
</P>
<P STYLE="text-indent: 1.27cm">The Board of Directors then divided
into groups to discuss Eclipse&rsquo;s strengths, weaknesses,
opportunities, and threats (&ldquo;SWOT&rdquo;) that had been
discussed the previous day.&nbsp; Each group was to come back with
proposals to address the points identified.&nbsp; 
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">Mike Milinkovich 
declared the meeting adjourned at approximately 2:40 Mountain Time. 
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">This being a true and
accurate record of the proceedings of this Meeting of the Board of
Directors held on June 18 and 19<SUP>th</SUP>, 2008, is attested to
and signed by me below.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<U>/s/ Janet Campbell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </U>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Secretary of Meeting</P>


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