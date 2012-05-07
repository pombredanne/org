<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
	    <h3>October 31 &amp; November 1, 2011</h3>

<P><SPAN LANG="en-US">A Meeting of the Board of Directors (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Board</B></I></SPAN><SPAN LANG="en-US">&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Corporation&rdquo;</B></I></SPAN><SPAN LANG="en-US">),
was held on held at 9:00 am CET on October 31 and November 1, 2011 in
Ludwigsburg, Germany co-located with Eclipse Summit Europe 2011. </SPAN>
</P>
<P><SPAN LANG="en-US">Present at the meeting were the following
Directors:</SPAN></P>
<TABLE WIDTH=637 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><B>31-Oct</B></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><B>1-Nov</B></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><B>Director</B></FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><B>Company</B></FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Chris
			Aniszczyk</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Committer Representative</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Michael
			Bechauf</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">SAP
			AG</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Boris
			Bokowski</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Committer Representative</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Cedric
			Carbone</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Talend</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">N</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">N</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Eric
			Clayberg</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Sustaining Representative</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Paul
			Clenahan</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Actuate
			Corporation</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Gael
			Blondelle for Etienne Juliot</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">OBEO</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Hans
			Kamutzki</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Sustaining Representative</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">John
			Kellerman</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">IBM</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">N</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">N</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Mik
			Kersten</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Sustaining Representative</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">N</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Jochen
			Krause</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Innoopract
			GmbH</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Dennis
			Leung</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Oracle</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Paul
			Lipton</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">CA
			Technologies</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Achim
			Loerke</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">BREDEX
			GmbH</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Ed
			Merks</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Committer Representative</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Wolfgang
			Neuhaus</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">itemis
			AG</FONT></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=91>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=90>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">&nbsp;<SPAN LANG="en-US">Y</SPAN></FONT></P>
		</TD>
		<TD WIDTH=209>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><SPAN LANG="en-US">Igor
			</SPAN></FONT><SPAN LANG="en-US">Fedorenko</SPAN><FONT COLOR="#000000">
			</FONT><FONT COLOR="#000000"><SPAN LANG="en-US">for Jason Van Zyl</SPAN></FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Sonatype</FONT></P>
		</TD>
	</TR>
</TABLE>
<P><BR><BR>
</P>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director; Janet Campbell, Secretary; and Chris
Larocque, Treasurer of Eclipse.org Foundation, Inc.&nbsp; </SPAN>
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>General
Business:</B></U></SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Mike
Milinkovich advised the Board that Michael Bechauf would be
transitioning February 1, 2012 to a new position within SAP and would
no longer be the Eclipse Board Representative.&nbsp;&nbsp; Mike
further indicated that Michael was the last person on the Board that
was actively involved in the creation of the Eclipse Foundation.&nbsp;
Mike thanked Michael for all his years of service to the Eclipse
Board and proposed the following resolution which was passed
unanimously:</SPAN></P>
<P STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Board wishes to thank Michael Bechauf for his 7.5 years of service to
the Eclipse Board.&nbsp; </SPAN>
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U>Minutes:</U></SPAN>&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a discussion of the
full and abridged the Minutes of the September 21, 2011 Board
meeting, attached hereto as <a href="2011_09_21_Minutes.php">Exhibit A</a>.&nbsp; There
was unanimous consent to approve the following resolution:</SPAN></P>
<P STYLE="text-indent: 1.27cm; page-break-after: avoid"><SPAN LANG="en-US"><B>RESOLVED,
</B></SPAN><SPAN LANG="en-US">that there was unanimous consent to
approve the full and abridged minutes of the September 21, 2011 Board
Meeting.</SPAN></P>
<P><SPAN LANG="en-US"><U>Committee Appointments:</U></SPAN>&nbsp;
&nbsp;<SPAN LANG="en-US">Mike Milinkovich indicated that Dennis Leung
had volunteered to participate in the Compensation Committee, Hans
Kamutzki had volunteered to participate in the IP Advisory Committee,
and that both Chris Aniszczyk and Jochen Krause had volunteered to
participate in the Finance Committee.&nbsp; Mike further indicated
that as sufficient notice had not been given to finalize these
appointments at the meeting, an electronic vote on the matter would
follow the meeting.&nbsp; Mike asked if any other Director had
interest in participating in a Committee.&nbsp;&nbsp; In response,
Paul Lipton volunteered to join the Compensation Committee</SPAN></P>
<P><SPAN LANG="en-US"><U>Upcoming Election:</U></SPAN>&nbsp; <SPAN LANG="en-US">Mike
Milinkovich advised the Board that the elections for the Board of
Directors run in the first quarter of the year.&nbsp; Mike indicated
that there would be a bit of a difference this year as there is no
longer a need to collapse the votes of the committer community due to
the recent changes in the Bylaws.&nbsp; Mike further advised that he
would follow with tradition have both the incoming and outgoing Board
Members attend the March 2012 Board meeting.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U>EclipseCon 2011:</U></SPAN>&nbsp;&nbsp; <SPAN LANG="en-US">Mike
Milinkovich provided an update on EclipseCon Europe 2011, the related
slides for which are attached as <a href="2011_10_exhibits/ExhibitC.pdf">Exhibit C</a>.&nbsp; Mike indicated that
of today the conference was up to 525 registrations, and was number
was expected to reach 550.&nbsp;&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Committer Issues:</B></U></SPAN></P>
<P><SPAN LANG="en-US">Ed Merks raised a concern that while the
Committer population has been advised that in just over a year CVS
would no longer be available, tooling for Git was not where it needed
to be.&nbsp;&nbsp; Ed indicated that there was frustration within the
community that existing CVS infrastructure, which works well and has
been used for a long time and has good tooling, is disappearing at a
time when Git tooling support really isn&rsquo;t ready.&nbsp; Ed
indicated that his personal experience was that he wasted days trying
to figure out Git.&nbsp; Chris </SPAN><FONT COLOR="#000000"><SPAN LANG="en-US">Aniszczyk
indicated that a transition at any time would be difficult and that
lessons had to be learned to migrate.&nbsp;&nbsp; Ed indicated that
it wasn&rsquo;t clear to him that the transition was worth the pain.&nbsp;
Boris Bokowski indicated that he would rather work on getting the
tooling ready for the deadline rather than move the deadline.&nbsp;
Mike Milinkovich asked John Kellerman whether there was any
possibility of getting people from IBM to help out with the usability
of the tooling.&nbsp; John Kellerman indicated that he thought it
possible and would check on that.&nbsp; </SPAN></FONT>
</P>
<P><FONT COLOR="#000000"><SPAN LANG="en-US">Ed also indicated that
forums and newsgroup synchronization was another source of
frustration.&nbsp;&nbsp; Ed further noted that now that he was in
Europe he was noticing just how much slower things are in Europe.&nbsp;
As an example, P2 repositories can be a real pain.&nbsp; Ed commented
that this was a concern as so much of our community is based in
Europe.&nbsp; Mike Milinkovich suggested that if there was a specific
problem encountered, that webmaster be contacted as they may be able
to resolve the issue; they have been able to resolve improving
performance in the past.</SPAN></FONT></P>
<P><SPAN LANG="en-US"><U><B>Technology Update</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich presented an update on the
Eclipse 4.2 migration, the slides for which are attached as <a href="2011_10_exhibits/ExhibitD.pdf">Exhibit D</a>.&nbsp; 
Mike highlighted that the Eclipse release train and packages
for Juno 2012 are to be build on Platform 4.2.&nbsp; Mike commented
that there was a general feeling that the Platform needed to move
forward.&nbsp; Igor Fedorenko commented that he had tried the most
recent version but that it wasn&rsquo;t stable.&nbsp; Mike
Milinkovich asked Igor if he had filed any bugs and Igor responded
that there were open bugs in relation to the issues.&nbsp; &nbsp;Paul
Clenahan asked if there was a summary of what the different projects
were dealing with.&nbsp; Mike Milinkovich advised that those
discussions were happening at the Planning Council.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Following the Eclipse 4.2 discussion Mike
Milinkovich</SPAN> <SPAN LANG="en-US">presented an update on Orion, the
related slides for which are attached as <a href="2011_10_exhibits/ExhibitE.pdf">Exhibit E</a>.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Executive Director Annual Review</B></U></SPAN></P>
<P><SPAN LANG="en-US">Michael Bechauf led a discussion regarding the
Executive Director&rsquo;s annual review.&nbsp; Following a
preliminary discussion, the Board drafted a review for submission to
Mike Milinkovich.&nbsp; &nbsp;The following resolution was passed
unanimously:</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
there was unanimous support to submit the draft performance review to
Mike Milinkovich as his performance review for 2011. </SPAN>
</P>
<P LANG="en-US">The meeting was adjourned to reconvene Tuesday
November 1, 2011.</P>
<P LANG="en-US" ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Tuesday,
November 1, 2011</SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>Executive
Director Evaluation:</B></U></SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Mike
Milinkovich initiated a discussion of the performance review prepared
by the Board and thanked the Board for their feedback.&nbsp;
Following discussion and some minor edits, the following resolution
was passed:</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Board unanimously approves the Executive Director&rsquo;s Annual
Review.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>jQuery:</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich introduced a discussion the
approval of jQuery for redistribution at Eclipse notwithstanding the
Eclipse Foundation&rsquo;s inability to clarify the provenance of the
code.&nbsp;&nbsp; Mike advised the Board that an electronic vote on
the matter would follow the Board meeting.&nbsp; Paul Lipton
cautioned the Board from relying on the fact that others have
distributed a package when assessing the risk for the Eclipse
Foundation in doing so.&nbsp; Paul also asked that in the future for
additional details on the attempts made to resolve the provenance and
the results of those attempts be provided to the Board.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Topics and Issues Report:</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich reviewed the Topics and Issues
Report with the Board.&nbsp; &nbsp;&nbsp;Paul Lipton suggested that
the Eclipse Foundation use Hudson as a test case to do some marketing
around IP cleanliness.&nbsp; Mike Milinkovich indicated that the
Foundation had hoped to find a &ldquo;smoking gun&rdquo; in relation
to Hudson but that had not happened to date.&nbsp; He further
indicated that there was LGPL code and duplicative contained within
the code base that has now been removed and that the Hudson team had
found the IP review very helpful as they now had a much better
understanding of the Hudson code base.&nbsp;&nbsp; Ed Merks asked if
the addition of Git would make things easier for the IP Team.&nbsp;
Mike Milinkovich responded that he was not expecting that and if
anything there would be more contributions which could result in
increased workload.&nbsp; Mike added that one reason he was in favour
if Git was that it would encourage more contributions at Eclipse and
that would make for a healthier open source community.&nbsp; &nbsp;&nbsp;</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Management Reports &amp; Key Performance
Indicators:</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an update on
EclipseCon 2012, the related slides for which are attached as <a href="2011_10_exhibits/ExhibitH.pdf">Exhibit H</a>.&nbsp; 
Mike followed this with an update on membership and
marketing, the related slides for which are attached as <a href="2011_10_exhibits/ExhibitI.pdf">Exhibit I</a> and
<a href="2011_10_exhibits/ExhibitJ.pdf">Exhibit J</a>.&nbsp; Mike also reviewed the Key Performance Indicators with the
Board.&nbsp; &nbsp;Boris Bokowski commented that it would be useful
to start reporting active and inactive Projects, much the way we
report active and inactive Committers.&nbsp; Mike Milinkovich
responded that the Foundation would do that and an inactive project
would be defined as a project that has had no commits in the last
nine months.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>What it Means to be an Eclipse Project:</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich led a discussion on what it
means to be an Eclipse Project.&nbsp;&nbsp; Mike indicated that the
Eclipse Foundation believes that the manner in which it manages its
development process and intellectual property (IP) is a industry best
practice and would like expand the areas it works in.&nbsp; &nbsp;Mike
further indicated that historically there were four invariants when
selecting new projects:&nbsp; (i) IP Process;&nbsp;&nbsp; (ii)
Development Process; (iii) architecture (java and OSGi); and (iv)
licensing.&nbsp; Currently, the IP process and Development Process
are invariant.&nbsp; Licensing is no longer completely an invariant,
though the bar to deviate from our standard approach is high.&nbsp;
Following discussion, the following resolution was unanimously
passed:</SPAN></P>
<P STYLE="text-indent: 0.64cm; margin-bottom: 0.42cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN>,
further to the Bylaws, the Executive Director is authorized to
approve open source software projects at Eclipse which meet the
following the criteria:</P>
<P STYLE="margin-left: 1.27cm; text-indent: -0.64cm; margin-bottom: 0.42cm; line-height: 115%">
<FONT FACE="Calibri, sans-serif">-</FONT><FONT FACE="Calibri, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT>The project will conform to the Eclipse Development Process</P>
<P STYLE="margin-left: 1.27cm; text-indent: -0.64cm; margin-bottom: 0.42cm; line-height: 115%">
<FONT FACE="Calibri, sans-serif">-</FONT><FONT FACE="Calibri, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT>The project will conform to the Eclipse Intellectual Property
Policies and its related procedures</P>
<P STYLE="margin-left: 1.27cm; text-indent: -0.64cm; margin-bottom: 0.42cm; line-height: 115%">
<FONT FACE="Calibri, sans-serif">-</FONT><FONT FACE="Calibri, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT>The project will be licensed under the Eclipse Public License
unless otherwise and unanimously approved by the Board.</P>
<P STYLE="margin-bottom: 0.42cm">There is no requirement that Eclipse
projects must utilize the Java language or OSGi modularity (plug-in)
model.</P>
<P><SPAN LANG="en-US"><U><B>OPEES/Polarsys:</B></U></SPAN></P>
<P><FONT COLOR="#000000"><SPAN LANG="en-US">Gael Blondelle provided
an update on Polarsys, the related slides for which are attached as
<a href="2011_10_exhibits/ExhibitL.pdf">Exhibit L</a>.&nbsp;&nbsp; Gael indicated that thought was being given to
conducting a workshop after EclipseCon for interested North American
parties.&nbsp; </SPAN></FONT>
</P>
<P><FONT COLOR="#000000"><SPAN LANG="en-US"><U><B>M2M:</B></U></SPAN></FONT></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an update on the
possibility of an M2M Industry Working Group, the related slides for
which are attached as <a href="2011_10_exhibits/ExhibitM.pdf">Exhibit M</a>.</SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>Management
Reports, Part II:</B></U></SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Mike
Milinkovich provided an update on Eclipse Projects, the related
slides for which are attached as <a href="2011_10_exhibits/ExhibitN.pdf">Exhibit N</a>.&nbsp; Ed Merks noted that
it appeared that there were more projects on CVS than SVN and asked
why we were choosing to shut down CVS.&nbsp; Mike responded that CVS
was older technology.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Long Term Support:</B></U></SPAN>&nbsp; 
</P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an update on the
possibility of a Long Term Support Industry Working Group, the
related slides for which are attached as <a href="2011_10_exhibits/ExhibitO.pdf">Exhibit O</a>.&nbsp; Mike
advised that for the Juno release train timeframe, the Foundation
expects to have a common build infrastructure available, but will not
force Projects to switch.&nbsp; Mike further indicated that the hope
was that most Projects would elect to use the common build
infrastructure once the Eclipse Foundation staff has demonstrated
that it can be used to build the Platform.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Geospatial:</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich presented an update on the
Geospatial Industry Working Group opportunity, the related slides for
which are attached as <a href="2011_10_exhibits/ExhibitP.pdf">Exhibit P</a>.&nbsp; Mike further added that M2M
and Geospatial have strong alignment.&nbsp;&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Program Plan:</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich reviewed the annual planning
cycle and process timeframe.&nbsp;&nbsp; Following that review, Mike
provided an overview of the Program Plan.&nbsp; Chris </SPAN><FONT COLOR="#000000"><SPAN LANG="en-US">Aniszczyk
suggested that the Eclipse Foundation consider having another
European Conference.&nbsp; Mike Milinkovich indicated that the
Foundation was looking at opportunities to do something on a smaller
scale in France.&nbsp; To that end, the Foundation was considering
partnering with OBEO and the TOPCASED Conference.&nbsp; </SPAN></FONT>
</P>
<P STYLE="page-break-after: avoid"><FONT COLOR="#000000"><SPAN LANG="en-US">Dennis
Leung indicated that it would be useful if the Board had an
understanding of what didn&rsquo;t make the cut for the Program
Plan.&nbsp; Mike indicated that if he had more money he would spend
it in the following areas:&nbsp;&nbsp; </SPAN></FONT>
</P>
<P STYLE="margin-left: 1.27cm; page-break-after: avoid"><FONT COLOR="#000000"><SPAN LANG="en-US">Marketing
and PR.&nbsp; &nbsp;Mike indicated that the flip side of that is that
the market for news has really changed.&nbsp; Where there used to be
twelve people covering application development, there are now four.&nbsp;
Mike also indicated that we are now getting involved in areas like
M2M and others that have different press and analysts.</SPAN></FONT></P>
<P STYLE="margin-left: 1.27cm"><FONT COLOR="#000000"><SPAN LANG="en-US">Eclipse
Days and Demo Camps.</SPAN></FONT></P>
<P STYLE="margin-left: 1.27cm"><FONT COLOR="#000000"><SPAN LANG="en-US">Additional
staff to help manage Industry Working Groups.</SPAN></FONT></P>
<P STYLE="margin-left: 1.27cm"><FONT COLOR="#000000"><SPAN LANG="en-US">Bonuses
for staff.</SPAN></FONT></P>
<P><FONT COLOR="#000000"><SPAN LANG="en-US">Chris Aniszczyk asked
Mike Milinkovich about the possibility of making Eclipse Marketplace
an Appstore.&nbsp; Mike indicated that the Foundation had explicitly
given up on the idea given the cost of implementation, including the
necessary legal due diligence that would be required.&nbsp; </SPAN></FONT>
</P>
<P><FONT COLOR="#000000"><SPAN LANG="en-US"><U><B>Closing:</B></U></SPAN></FONT></P>
<P><SPAN LANG="en-US">Mike Milinkovich thanked the Board and
indicated that the new Board Member for SAP would be Jutta Bindewald</SPAN>
<SPAN LANG="en-US">who will replace Michael Bechauf in 2012.&nbsp;
Mike further indicated that the timing of the transition has yet to
be determined.&nbsp; Michael indicated to the Board that it had been
a pleasure working with the Board.</SPAN></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">There being no additional business to attend to,
the meeting was declared adjourned at approximately 3:35 CET time. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on October 31</SPAN><SUP><SPAN LANG="en-US">st</SPAN></SUP><SPAN LANG="en-US">
and November 1th, 2011, is attested to and signed by me below.</SPAN></P>
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