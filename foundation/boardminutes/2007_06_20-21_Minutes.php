<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
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
	    <h3>June 20-21, 2007</h3>
<P>_________________________________________________________________________</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">A Meeting of the Board
of Directors (the &ldquo;<B><I>Board</I></B>&rdquo;) of Eclipse.org
Foundation, Inc., a Delaware corporation (the &ldquo;<B><I>Corporation&rdquo;</I></B>),
was held on held on June 20 and 21, 2007 at the Omni Parker House in
Boston, Massachusetts. This meeting was held as a regularly scheduled
quarterly face-to-face meeting.</P>
<P>Present at the meeting on June 20, 2007 were the following
Directors:</P>
<TABLE WIDTH=555 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=TOP>
		<TD WIDTH=236 HEIGHT=1>
			<P STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Chris Aniszczyk 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Rich Bartlett 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Michael Bechauf 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Jess Garms for Ed Cobb 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">BEA</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Mark Coggins 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Actuate Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Brian Roberts for Paul
			Czarnik 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Compuware</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Winston Damarillo 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">DevZuz</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Eliane Fourgeau 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Richard Gronback 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Borland</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Yossi Leon for Andi Gutmans</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Zend</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Konstantin Komissarchik</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Jochen Krause 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Howard H. Lewis 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Ed Merks 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Eric Newcomer 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Iona</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Tracy Ragan 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Brian Caroll 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Serena</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Steve Saunders 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Wind River</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Mitch Sonies 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Cloudsmith</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Darin Swanson 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">David Tong 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Sybase</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Todd Williams 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Dino Brusco for Christy
			Wyatt</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Motorola</P>
		</TD>
	</TR>
</TABLE>
<P><BR><BR>
</P>
<P>Present at the invitation of the Board was Mike Milinkovich,
Executive Director, Janet Campbell, Secretary, and Chris Larocque,
Treasurer of Eclipse.org Foundation, Inc.</P>
<P><U><B>General Business</B></U></P>
<P ALIGN=JUSTIFY STYLE="margin-top: 0.42cm; page-break-after: avoid"><U>Minutes</U></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
Mike Milinkovich introduced discussion on the draft minutes that had
been circulated prior to the meeting.&nbsp; He asked those in
attendance to note specifically the greater detail that had been
included in the abridged minutes and asked everyone to ensure that
they were comfortable with that level of detail.</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
There was unanimous consent to approve the following Resolutions:</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
the minutes and abridged minutes of the March 5, 2007 meeting as
circulated prior to the Board Meeting and attached hereto as 
<a href="2007_03_05_Minutes.php">Exhibit A</a> are approved.</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
the minutes of the April 18, 2007 conference call as circulated prior
to the Board Meeting are approved.</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
the minutes of May 16, 2007 conference call circulated prior to the
Board Meeting, with one minor modification to add Steve Saunders as
an attendee, is approved.</P>
<P><U>YTD Financial Actuals</U></P>
<P STYLE="text-indent: 1.32cm">Chris Larocque provided an overview of
the YTD financial actuals as provided prior to the Board Meeting.&nbsp;&nbsp;
Chris indicated that we are pretty much on budget.&nbsp; In looking
at the Q1 budget vs. actuals, there are some variances, but this is
primarily related to timing.&nbsp; 
</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, there was unanimous consent to approve the Q1
financial results.&nbsp; 
</P>
<P><U>Forecast and Program Plan</U></P>
<P STYLE="text-indent: 1.27cm">Chris Larocque reviewed the
forecast.&nbsp;&nbsp; Revenue and Expenses are both down somewhat but
we expect to end up close to the original budget.&nbsp; 
</P>
<P STYLE="text-indent: 1.27cm">Mike Milinkovich provided an overview
of the program plan as provided prior to the Board Meeting and
attached hereto as <a href="2007_06_exhibits/ExhibitF.html">Exhibit F</a>.&nbsp; 
Mike reminded everyone that this
program summary was approved last December as part of the budget, the
idea being that there is a financial budget that says where the
dollars are going and the program summary says what the foundation is
doing and where it is spending the money.&nbsp;&nbsp; The program
summary is coupled with the forecast and has been updated to show
current status, items that have been identified as at risk, and items
that we are no longer pursuing.</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
there was unanimous consent to approve the updated forecast and
program plan.&nbsp;&nbsp;&nbsp; 
</P>
<P><U>Trademark Guidelines</U></P>
<P STYLE="text-indent: 1.32cm">Mike Milinkovich introduced the
revised Trademark Guidelines as provided prior to the Board Meeting
and attached hereto as <a href="2007_06_exhibits/ExhibitG.pdf">Exhibit G</a> indicating that the Foundation
intended to start asserting that Eclipse project names are Eclipse
trademarks.&nbsp; The guidelines are intended to provide guidance on
use and try to ensure that there isn&rsquo;t confusion between
Eclipse projects and Eclipse based products.&nbsp;</P>
<P STYLE="text-indent: 1.25cm">During the discussion, Mike
Milinkovich clarified that these guidelines would apply to Projects
and Sub-Projects, that the contemplated cost is expected to be
covered by the existing legal budget, and the Foundation would not be
pursing registration, but would be conducting a limited trademark
search on proposed project names.&nbsp; There is no expected impact
to the IPTeam or the Projects of implementing this policy.&nbsp; In
addition, while this policy does not address asserting trademark
rights over non-project acronyms such as RCP, it was decided that
this would be worth investigating further.&nbsp;&nbsp; 
</P>
<P STYLE="text-indent: 1.25cm">Some Board members expressed concern
regarding the impact on their organizations of the proposed changes
to the Guidelines and indicated they would be more comfortable if
they had the opportunity to review the document in greater detail
with their legal counsel. With these concerns noted, a vote was
held.&nbsp;&nbsp; By a majority vote of the Board the following
resolution was passed:</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, the revised trademark guidelines circulated prior to
the Board Meeting and attached hereto as <a href="2007_06_exhibits/ExhibitG.pdf">Exhibit G</a> are approved.</P>
<P>Mike Milinkovich invited those that did not approve the guidelines
to review it with their organization&rsquo;s lawyers indicating that
the Foundation is always open to considering further revisions to the
guidelines.&nbsp; 
</P>
<P STYLE="page-break-after: avoid"><U>Eclipse Project PMC Lead</U></P>
<P STYLE="text-indent: 1.27cm; page-break-after: avoid">Mike
Milinkovich put forward the following resolution which was approved
unanimously:</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
that there was unanimous consent to appoint Philippe Mulet head of
Eclipse Project PMC.</P>
<P><U><B>Add-In Provider Issues</B></U></P>
<P STYLE="text-indent: 1.24cm">The Add-In Provider representatives
were provided an opportunity to raise issues of import to their
community.&nbsp; The subject of translations was raised in relation
to Eclipse 3.3.&nbsp; Mike responded that we do not currently have a
plan for translations for Eclipse 3.3. However, the Babel project has
been proposed for translations.&nbsp; &nbsp;&nbsp;In the short term
this project would be able to give the community a means to
contribute to localization.&nbsp; It would not address documentation
in the short term, this would be more long term if pursued.&nbsp;
Mike highlighted that we have an immediate problem in that China is
now our #1 downloading country and Japan is #4.&nbsp; If we combine
downloads for China, Japan and South Korea together, those downloads
represent 30% of our total downloads.&nbsp; Europe as a region
represents the second highest downloading region followed by North
America in third place.&nbsp; 
</P>
<P STYLE="text-indent: 1.25cm">The add-in provider representatives
indicated that it was a challenge to get feedback from the add-in
provider community.&nbsp; 
</P>
<P><U><B>Committer Issues</B></U></P>
<P STYLE="text-indent: 1.25cm">The Committer representatives were
provided an opportunity to raise issues of import to their community
as attached hereto as <a href="2007_06_exhibits/ExhibitH.pdf">Exhibit H</a>.&nbsp; &nbsp;The Committer
representatives raised concerns in three areas:&nbsp; (1) the IP
Policy;&nbsp; (2) Committer Meetings;&nbsp; and (3) Committer
Diversity.</P>
<P STYLE="text-indent: 1.25cm">Regarding the IP Policy, the Committer
representatives raised concerns regarding the length of time that was
required for IP reviews, the challenges of planning releases in the
absence of predictable completion time for IP reviews; and technical
advisement.&nbsp; From the standpoint of improving the IP process,
committer representatives expressed an interest in looking at the
possibility of increased staffing, improved tooling, and education
for committers.&nbsp;&nbsp; In some cases, such as with the Apache
Ant community, there may be close ties between the two communities
where it is to the benefit of both communities if Eclipse projects
can test another project&rsquo;s release.&nbsp; The inability to
check code into CVS prior to full due diligence review for
non-incubating projects is a limiter in this case.&nbsp; The
possibility of allowing all projects to participate in parallel IP
was raised.&nbsp; Mike Milinkovich indicated that concerns had been
expressed by some members of the IP Advisory Committee in pursing
such an approach.&nbsp; Mike further indicated that the IP Advisory
Committee would benefit from hearing the perspective of the Committer
community.&nbsp; As a result of this discussion, Mike Milinkovich
proposed the following two resolutions which were passed unanimously:</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, Ed Merks and Konstantin Komissarchik are hereby
appointed to the IP Advisory Committee.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVE</B>D, the Board requests that the IP Advisory Committee
reconsider the decision not to allow parallel IP for all projects.</P>
<P STYLE="text-indent: 1.24cm">The Committer representatives
indicated an interest in expanding education opportunities for
Committers.&nbsp; Mike Milinkovich indicated that the leverage point
are mentors from the Architecture Council, but there may be
opportunities for us to reach out at events such as Member Meetings,
Eclipse Summit Europe, OS Summit Asia, JUGs, plug-in fests and code
camps.&nbsp; The Committer representatives also indicated an interest
in having a track at EclipseCon 2008.&nbsp;&nbsp; Committer
representatives raised the possibility of having the Foundation fund
some travel for Committer representatives to attend events such as
Eclipse Summit Europe.&nbsp;&nbsp; This is currently not permitted
under Section 11.4 of the Eclipse Foundation Bylaws.&nbsp; &nbsp;The
subject of increasing Committer Diversity was also discussed and the
need for working groups, committer meetings, and mentoring.&nbsp; The
Committer representatives also raised a concern that there is a
perception amongst some in the community that the Strategic Members
are not living up to their resource commitments.&nbsp;&nbsp; Mike
Milinkovich responded that there is a ramp up period and Strategic
Members who have been with the Foundation for 18 months are generally
compliant.&nbsp; Mike took the action to have the EMO investigate
ways through our web site to give greater visibility to the
contributions of strategic members.&nbsp; The point was made that &nbsp;it
is important for new organizations that visibility is given in such a
way that doesn&rsquo;t embarrass the new member.&nbsp; &nbsp;The
possibility of the Foundation assisting with IP Logs was also raised
and Jeff McAffer took an action item to raise a bug on this subject.&nbsp;
&nbsp;</P>
<P STYLE="margin-top: 0.42cm"><U><B>General Business</B></U></P>
<P STYLE="margin-top: 0.42cm"><U>Confidentiality of Board Discussions</U></P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm; margin-bottom: 0.2cm">
Mike Milinkovich noted that discussions at the last face to face
Board meeting were leaked to the press and though it useful for the
Board to discuss the confidentiality of Board discussions.&nbsp; 
</P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm">Mike proposed that
the Foundation get the Board and public minutes completed for
approval at the next Board meeting.&nbsp; If during a discussion at
the Board, committer representatives or Add-In Provider
representatives would like to raise a topic to their constituency,
they ask the Board.&nbsp; The Board would then vote on the proposal
with all votes being a simple majority.&nbsp;&nbsp; The understanding
would be that no Board member would ever attribute a statement to
someone else.&nbsp; Mike further indicated that he would add this
topic to the new Board Member Bootcamp presentation.</P>
<P STYLE="margin-top: 0.42cm"><U>Policy of Pre-Requiring Code in
Eclipse Projects</U></P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm">Mike Milinkovich
introduced the &ldquo;Guidelines for the Review of Third Party
Dependencies&rdquo; document circulated prior to the Board meeting
and attached hereto as <a href="2007_06_exhibits/ExhibitI.pdf">Exhibit I</a>.&nbsp;&nbsp;&nbsp; The document is
intended to provide guidance to the projects on what they can and
cannot do.&nbsp; Currently, these decisions are not transparent to
the community. &nbsp;&nbsp;&nbsp;The document was discussed, modified
during the discussion and re-circulated to the Board for discussion
the following day.&nbsp;&nbsp; 
</P>
<P STYLE="margin-top: 0.42cm"><U>Use of Commercial Tools in Eclipse
Development</U></P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm">Mike Milinkovich
introduced a draft Policy and Resolution concerning the use of
Commercial Tools in Eclipse Development in non-core areas that was
circulated prior to the meeting and attached hereto as <a href="2007_06_exhibits/ExhibitJ1.pdf">Exhibit J.1</a>.&nbsp;&nbsp;
The issue of whether this would create a barrier to contributors was
raised.&nbsp; Mike Milinkovich indicated that it would, but making
sure that every project must have access to the same tool would
reduce the risk that a contributor might have to know a lot of
different tools.&nbsp; The document was modified during the
discussion and attached hereto as <a href="2007_06_exhibits/ExhibitJ2.pdf">Exhibit J.2</a>. Mike Milinkovich then
proposed the following resolution which was passed unanimously:&nbsp;
</P>
<P>&nbsp;</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
that the Board hereby instructs each Eclipse project to conform to
the following policy for using proprietary tools in their development
process. 
</P>
<P STYLE="margin-left: 3.18cm; margin-bottom: 0cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT><FONT FACE="Times New Roman, serif">Projects are authorized to
use proprietary tools for non-core infrastructure made available free
of charge by vendor to all projects within the Eclipse community.</FONT></P>
<P STYLE="margin-left: 3.18cm; margin-bottom: 0cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT><FONT FACE="Times New Roman, serif">Vendors must agree to
provide free licenses for all Eclipse committers, plus those
individuals identified by name by a project leader, for use on the
project.</FONT></P>
<P STYLE="margin-left: 3.18cm; margin-bottom: 0cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT><FONT FACE="Times New Roman, serif">The vendor has no
obligation to provide free support, but may choose to do so at their
discretion. (There may be good business reasons to want to get
feedback from the Eclipse team, and to ensure that they are happy
users.) </FONT>
</P>
<P STYLE="margin-left: 3.18cm; margin-bottom: 0cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT><FONT FACE="Times New Roman, serif">Vendors are not obligated
to provide any software. This is at their discretion.</FONT></P>
<P STYLE="margin-left: 3.18cm; margin-bottom: 0cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT><FONT FACE="Times New Roman, serif">Licenses provided by the
vendors would be for a specific version of the vendor&rsquo;s
software and must be perpetual. Access to any upgrades would be at
the discretion of the vendor.</FONT></P>
<P STYLE="margin-left: 3.18cm; margin-bottom: 0cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT><FONT FACE="Times New Roman, serif">Although it will be a
matter of public record that projects at the Eclipse Foundation are
using proprietary tools, the Eclipse Foundation will not endorse any
vendor&rsquo;s products. The Eclipse Foundation will publicly
acknowledge the use of freely provided proprietary software tools on
its &ldquo;</FONT>Thank You&rdquo; <FONT FACE="Times New Roman, serif">page.
</FONT>
</P>
<P STYLE="margin-left: 3.18cm; margin-bottom: 0cm"><BR>
</P>
<P STYLE="line-height: 115%"><FONT FACE="Times New Roman, serif">The
Board further instructs the EMO to develop a procedure to implement
</FONT>this policy<FONT FACE="Times New Roman, serif">.</FONT></P>
<P STYLE="margin-top: 0.42cm"><U>Management Reports</U></P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm">Mike Milinkovich
reviewed the Key Performance Indicators..&nbsp;&nbsp; Chris Larocque
then updated the Board on operations (<a href="2007_06_exhibits/ExhibitL.pdf">Exhibit L</a>), 
marketing (<a href="2007_06_exhibits/ExhibitM.pdf">Exhibit M</a>), 
membership (<a href="2007_06_exhibits/ExhibitN.pdf">Exhibit N</a>), &nbsp;and project related activity
(<a href="2007_06_exhibits/ExhibitO.pdf">Exhibit O</a>),</P>
<P STYLE="margin-top: 0.42cm"><U>Eclipse Summit Europe</U></P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm">Winston Damarillo
provided an update on Open Source Summit Asia.&nbsp;&nbsp; Winston
indicated that Mozilla was also interested in participating but there
wasn&rsquo;t sufficient time to include them next year.&nbsp; They
may participate next year.&nbsp; The venue for the event is the Hong
Kong Cyberport and it is scheduled to take place November 26 to 30<SUP>th</SUP>,
2007.&nbsp;&nbsp; There is no financial risk born by the Foundation
for this event.&nbsp; The target market is the same as EclipseCon.</P>
<P><U>Cross-Platform Allocation Working Group</U></P>
<P STYLE="text-indent: 1.27cm">Mike Milinkovich reported on the
activity of the Cross-Platform Allocation Working Group and attached
hereto as <a href="2007_06_exhibits/ExhibitQ.pdf">Exhibit Q</a>.&nbsp; There were 6 conference calls held.&nbsp;&nbsp;
The outcome was favourable.&nbsp; The Board decided that the slides
related to this working group should form part of the public minutes.</P>
<P><U>Compensation Committee</U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The Compensation Committee sought clarity on its mandate from the
Board.&nbsp; Following discussion, the following resolution was
passed unanimously (with the Compensation Committee itself
abstaining):</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, the Board re-affirms the Compensation Committee&rsquo;s
ability to negotiate the Executive Director&rsquo;s contract; and set
the Executive Director&rsquo;s quarterly objectives; and by means of
this motion further empower the compensation committee to assess the
salary increase for the Executive Director on an annual basis. 
</P>
<P STYLE="text-indent: 1.27cm">The Compensation Committee further
sought and received the guidance of the Board in relation to the
current negotiations with the Executive Director.</P>
<P ALIGN=JUSTIFY>There being additional business to tend to, Michael
Bechauf moved that the meeting be adjourned for continuation the
following day, June 21, 2007. 
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P><U><B>Continuation of Board Meeting:</B></U></P>
<P>Following a plenary session with the Planning Council during which
Doug Gaff presented Planning Council input on the IP Process as
attached hereto as <a href="2007_06_exhibits/ExhibitR.pdf">Exhibit R</a>, the Board re-convened 12:45, Thursday,
June 21, 2007.&nbsp; Present were the following Directors:</P>
<P><BR><BR>
</P>
<TABLE WIDTH=555 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<COL WIDTH=236>
	<COL WIDTH=319>
	<TR VALIGN=TOP>
		<TD WIDTH=236 HEIGHT=1>
			<P STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Chris Aniszczyk 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Rich Bartlett 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Michael Bechauf 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Jess Garms for Ed Cobb 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">BEA</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Mark Coggins 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Actuate Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Brian Roberts for Paul
			Czarnik 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Compuware</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Winston Damarillo 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">DevZuz</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Eliane Fourgeau 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Richard Gronback 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Borland</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Yossi Leon for Andi Gutmans</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Zend</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Konstantin Komissarchik</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Jochen Krause 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Howard H. Lewis 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Ed Merks 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Eric Newcomer 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Iona</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Tracy Ragan 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Brian Caroll 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Serena</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Steve Saunders 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Wind River</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">David Tong 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Sybase</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=236>
			<P STYLE="border: none; padding: 0cm">Todd Williams 
			</P>
		</TD>
		<TD WIDTH=319>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
</TABLE>
<P><BR><BR>
</P>
<P>Present at the invitation of the Board was Mike Milinkovich,
Executive Director, Janet Campbell, Secretary, and Chris Larocque,
Treasurer of Eclipse.org Foundation, Inc.</P>
<P STYLE="page-break-after: avoid"><U><B>General Business</B></U></P>
<P STYLE="margin-top: 0.42cm; page-break-after: avoid"><U>Policy of
Pre-Requiring Code in Eclipse Projects</U></P>
<P STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich re-opened discussion on this document, which
following modification by the Board the previous day, had been
re-circulated for further review.&nbsp;&nbsp;&nbsp; Following further
discussion and minor modification, Mike Milinkovich proposed the
following resolution which was passed unanimously.</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, the Board approves the Guidelines for the Review of
Third Party Dependencies, as amended and attached hereto as 
<a href="2007_06_exhibits/ExhibitS.pdf">Exhibit S</a>.</P>
<P STYLE="margin-top: 0.42cm"><U>Vendor Neutrality</U></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich introduced the topic of vendor neutrality.
Essentially in some circumstances we are sourcing open source code
originating from a single vendor and that is something we should
specifically consider the implications of.&nbsp; The lack of a
definition of &ldquo;open source&rdquo;, what constitutes a &ldquo;neutral&rdquo;
project, and the fact that this state could change over time was
discussed and the associated problems of managing any such
distinction.&nbsp; In addition, Mike Milinkovich expressed concerns
in having the Board direct the EMO to second guess a project&rsquo;s
decision.&nbsp; Some concerns were expressed regarding the inclusion
of third party packages and the difficulty this presents to her
company when selling to customers.&nbsp; The possibility of an RRS
feed on requested and approved submissions was discussed and will be
investigated further by the Foundation. &nbsp;&nbsp; 
</P>
<P ALIGN=JUSTIFY><U>Strategy Discussion</U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich initiated a brainstorming session on strategies that
the Foundation could pursue.&nbsp; This was followed by re-examining
the Foundation&rsquo;s strategy document to see what changes the
Board wished to consider.&nbsp; There was insufficient time to
complete this effort and so a working group was created to work on
proposed revisions to the strategy slide for review at the August
Board meeting.&nbsp; During the course of the discussion, the
possibility of inviting donations to Eclipse and charging additional
funds for EclipseCon in order to fund program plans was discussed.&nbsp;
The following resolution was proposed and approved unanimously:</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, the Board directs the EMO to use its discretion to
make a profit on its annual EclipseCon conference, and to use those
profits to fund programs.</P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
There being no additional business to tend to, Mike Milinkovich
declared the meeting adjourned. 
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">This being a true and
accurate record of the proceedings of this Meeting of the Board of
Directors held on June 20<SUP>th</SUP> and 21<SUP>st</SUP>, 2007, is
attested to and signed by me below.</P>
<P>&nbsp;</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<U>/s/ Janet Campbell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </U>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Secretary of Meeting</P>
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