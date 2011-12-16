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
	    <h3>March 21, 2011</h3>

<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">A
Meeting of the Board of Directors (the &ldquo;</SPAN><SPAN LANG="en-US"><I><B>Board</B></I></SPAN><SPAN LANG="en-US">&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Corporation&rdquo;</B></I></SPAN><SPAN LANG="en-US">),
was held on March 21, 2011 as a regularly scheduled face to face
meeting at the Hyatt Regency, Santa Clara, California.</SPAN></P>
<P>Present at the face to face meeting were the following Directors:</P>
			<TABLE WIDTH=617 BORDER=0 CELLPADDING=0 CELLSPACING=0>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><B>Present</B></FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><B>Director</B></FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><B>Organization</B></FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Ronnie
						King for Andreas Andersen</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Nokia</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Chris
						Aniszczyk</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
						Committer Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Michael
						Bechauf</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">SAP
						AG</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Boris
						Bokowski</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
						Committer Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Mark
						Coggins</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Actuate
						Corporation</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Ricco
						Deutscher</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">SOPERA
						GmbH</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Etienne
						Juliot</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">OBEO</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No
						</FONT>
						</P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Hans
						Kamutzki</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
						Sustaining Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Patt
						Huff for John Kellerman</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">IBM</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Mik
						Kersten</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
						Sustaining Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><SPAN LANG="en-US">Markus
						</SPAN></FONT><SPAN LANG="en-US">Knauer</SPAN></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Innoopract</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Dennis
						Leung</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Oracle</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Adam
						Lieber</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
						Sustaining Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Paul
						Lipton</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">CA
						Technologies</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Achim
						Loerke</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">BREDEX
						GmbH</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Ed
						Merks</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
						Committer Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Wolfgang
						Neuhaus</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">itemis
						AG</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Jason
						Van Zyl</FONT></P>
					</TD>
					<TD WIDTH=276 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Sonatype</FONT></P>
					</TD>
				</TR>
			</TABLE>

<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, Janet Campbell, Secretary of
Eclipse.org Foundation, Inc., and Chris Larocque, Treasurer to the
Foundation. &nbsp;&nbsp;Also present at the invitation of the Board
was Eric Clayberg, a newly elected Sustaining Member Representative
whose term will begin at the next Board Meeting.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>EclipseCon 2010 Update</B></U></SPAN></P>
<P><SPAN LANG="en-US">Donald Smith provided the Eclipse Board with an
update on EclipseCon 2011 and EclipseCon Europe 2011, the related
slides for which are attached as <A HREF="2011_03_exhibits/ExhibitA.pdf">Exhibit A</A>.&nbsp;&nbsp; Donald
thanked Pat Huff of IBM for his help in securing David Gondek from
IBM Research to provide a keynote about Watson.&nbsp;&nbsp; Donald
also thanked Chris </SPAN><FONT COLOR="#000000"><SPAN LANG="en-US">Aniszczyk
for chairing EclipseCon 2011, noting that he did a fantastic job.</SPAN></FONT></P>
<P><SPAN LANG="en-US">Donald further announced that the Program Chair
for EclipseCon 2011 would be Doug Schaefer.&nbsp; Donald noted that
the Foundation had not yet finalized the timing and location of
EclipseCon 2012 and that the Foundation was awaiting feedback on what
other Java-related conferences were doing.&nbsp; The Board discussed
the possibility of moving EclipseCon 2012 to another region and there
was interest expressed in moving it to the East Coast.</SPAN></P>
<P><SPAN LANG="en-US">A Board Member asked if the prices for
EclipseCon Europe 2011 would be increasing over 2010, noting that he
felt that they seemed too low. &nbsp;Mike Milinkovich responded that
they would be.&nbsp; Mike further asked Board members to forward on
any information they may have related to the pricing of other
conferences - both sponsorship and registration.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>JCP TCK License</B></U></SPAN></P>
<P><SPAN LANG="en-US">John Duimovich, CTO of Java for IBM attended
this portion of the discussion as an invited guest.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Mike Milinkovich reported that the Eclipse
Foundation has been working since 2008 to acquire TCK licenses for
various JSRs at the Java Community Process (JCP).&nbsp;&nbsp; The
process was delayed by Oracle&rsquo;s acquisition of Sun.&nbsp; In
April 2010 Oracle put forward terms that were virtually identical to
those that the Eclipse Foundation had agreed to with Sun.&nbsp; Mike
indicated that the Agreement as it currently stands includes
modifications that make the Agreement better suited to open source
development.&nbsp; He further indicated that he had no strong
feelings as to whether the Eclipse Foundation proceeds with the
Agreement as it currently stands or not.&nbsp; Mike indicated that
IBM had seen the current draft of the Agreement and had some concerns
that they would like to share.&nbsp; Pat Huff presented IBMs concerns
</SPAN>
</P>
<P><SPAN LANG="en-US">Mike Milinkovich noted to the Board that it was
important to recognize Oracle&rsquo;s willingness to negotiate terms
with Eclipse that are better than what a Member Company may get on
its own.&nbsp; </SPAN>
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>General
Business</B></U></SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U>Minutes</U></SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Mike
Milinkovich introduced the topic of the February 2011 Board Minutes
attached as Exhibit C hereto.&nbsp; Mike asked if any Board Members
had any questions regarding the minutes.&nbsp; No questions being
raised, the following resolution was passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Board unanimously approves the abridged and full versions of the
February 16, 2011 Board Meeting.</SPAN></P>
<P><SPAN LANG="en-US"><U>2010 Election Results</U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an overview of the
recent Membership election results.&nbsp;&nbsp; The existing
Committer Representatives were re-elected.&nbsp;&nbsp;&nbsp; </SPAN><FONT COLOR="#000000"><SPAN LANG="en-US">Hans
Kamutzki</SPAN></FONT><SPAN LANG="en-US"> and Mik Kersten were
re-elected as Sustaining Members and Eric Clayberg from Google was
newly elected as a Sustaining Representative.&nbsp;&nbsp; Mike
indicated that Adam Lieber had not been re-elected and thanked Adam
for his contributions as a Board Member.&nbsp; Mike provided Adam
with an opportunity to address the Board.&nbsp; Adam indicated that
it had been a very interesting year.&nbsp; He noted that he hoped to
see the JCP TCK license issues resolved soon and wished everyone well
for the upcoming year.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U>Board Meeting Schedule</U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich commented that in the past
year the Board had transitioned from meeting four times a year to
three and indicated a preference to continue with that approach.&nbsp;
Mike asked the Board for their thoughts.&nbsp; Boris Bokowski
commented that it felt like the Board had lost face time as a result
of the change and that the last meeting had felt rushed.&nbsp; He
asked if it would be possible to extend the EclipseCon Europe meeting
to a two day meeting.&nbsp; Following discussion it was concluded
that the Board meeting would be held all day Tuesday, November 1</SPAN><SUP><SPAN LANG="en-US">st</SPAN></SUP><SPAN LANG="en-US">,
and a half day on Wednesday, November 2</SPAN><SUP><SPAN LANG="en-US">nd</SPAN></SUP><SPAN LANG="en-US">.&nbsp;
Mike further commented that the Foundation intended to hold a
birthday party for Eclipse on the Wednesday or Thursday night that
week to celebrate Eclipse&rsquo;s tenth birthday.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>JQuery</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich introduced a discussion on
JQuery.&nbsp; As had been proposed in an email and discussed at a
previous Board meeting, the EMO sought the Board&rsquo;s approval to
distribute JQuery pursuant to Section C of the Implementing the IP
Policy document.&nbsp; &nbsp;Following discussion, the following
resolution was passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Board unanimously approves the redistribution of JQuery 1.4.x and
1.5.x at Eclipse.</SPAN></P>
<P STYLE="page-break-after: avoid"><U><SPAN LANG="en-US"><B>Committer
and Sustaining Member Issues</B></SPAN></U></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Ed Merks
highlighted the fact that the Eclipse Foundation had gone through its
first Friends of Eclipse funds allocation discussion.&nbsp; Ed
indicated that some concerns were expressed that the small group of
Committer Representatives may not make the right decisions for the
broader community.&nbsp;&nbsp;&nbsp; One Project leader in particular
had expressed interest in having the Friends of Eclipse funds be used
to fund release engineering efforts for his Project and was quite
disappointed when that request was declined.&nbsp; Boris Bokowski
indicated that there was a concern about setting precedent in how the
funds were spent.&nbsp; </SPAN>
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Pat Huff asked
what the funds had been allocated to.&nbsp; Boris responded that some
money was spent for a community event.&nbsp; In addition some funds
were spent for additional RAM for the computers used by the IP Team
to increase the speed of code scans.&nbsp; </SPAN>
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>Marketing
Update</B></U></SPAN>&nbsp; 
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Ian Skerrett
provided a Marketing update, the related slides for which are
attached as  <A HREF="2011_03_exhibits/ExhibitG.pdf">Exhibit G</A>.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Invited Speaker</B></U></SPAN></P>
<P><SPAN LANG="en-US">Dr. Hans Jurgen Kugler (University of Limerick,
KuglerMaag) provided a presentation to the Board of Directors on
Eclipse Opportunities in Safety-Critical Systems Engineering, the
related slides for which are attached as  <A HREF="2011_03_exhibits/ExhibitH.pdf">Exhibit H</A>. </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Automotive IWG Update</B></U></SPAN></P>
<P><SPAN LANG="en-US">Ralph Mueller provided an update on the
Automotive Industry Working Group, the related slides for which are
attached as <A HREF="2011_03_exhibits/ExhibitI.pdf">Exhibit I</A>.&nbsp; </SPAN>
</P>
<P STYLE="page-break-after: avoid"><FONT COLOR="#000000"><SPAN LANG="en-US"><U><B>OPEES</B></U></SPAN></FONT></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Etienne Juliot
and Mike Milinkovich presented an update on OPEES and the opportunity
for Eclipse, the related slides for which are attached as <A HREF="2011_03_exhibits/ExhibitJ.pdf">Exhibit J</A>.&nbsp;
Mike commented that the Eclipse opportunity, one identified in last
year&rsquo;s Program Plan is to &ldquo;offer hosting and IP services
to other consortia&rdquo;.&nbsp; &nbsp;He further indicated that
pursuing this opportunity would require the Board&rsquo;s involvement
and approval in a number of which could include:&nbsp; (a) firewalled
web properties accessible only to OPEES members; (b) support for new
licenses in the OPEES IP process, including LGPL; (d) new build
infrastructure for OPEES and Long Term support issues; (e) trademark
and certification support; (f) creation of a more formal European
chapter.&nbsp;&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">A Board Member asked what the benefits to the
Eclipse Foundation would be.&nbsp; Mike Milinkovich responded that as
part of this initiative, the Eclipse Foundation would gain resources
in the IP, build, web and IT infrastructure support.&nbsp; In
addition, the Eclipse Foundation would be part of the long term
support strategy for OPEES and that ongoing funding was a benefit of
pursuing this opportunity.&nbsp; Mike indicated that he wanted the
Board&rsquo;s support to continue working on this initiative.&nbsp;&nbsp;
The following resolution was passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Executive Director of the Eclipse Foundation is authorized to
continue to work with the OPEES consortium to create an Industry
Working Group as outlined in the presentation attached hereto as
<A HREF="2011_03_exhibits/ExhibitJ.pdf">Exhibit J</A>.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Bylaw Changes</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an overview of some
proposed changes to the Eclipse Foundation Bylaws, the related slides
for which are attached as <A HREF="2011_03_exhibits/ExhibitK.pdf">Exhibit K</A>.&nbsp;&nbsp; Boris Bokowski asked
whether there was merit in revisiting the provisions in the Bylaws
that dictate that votes for Committer Members working for a Member
company are collapsed for the purposes of Committer elections.&nbsp;
Mike Milinkovich indicated that when this was last raised it was
controversial.&nbsp; He further indicated that the reason these
provisions were initially included was a desire by IBM to make sure
that there was clear independence.&nbsp; Mike asked if there was
interest in having a model that provided for one person one vote but
enforced diversification.&nbsp; There was some interest in this
approach.&nbsp; Mark Coggins expressed concern that including a
controversial change in the Bylaws may make it difficult to get all
the changes to the Bylaws through in one attempt.&nbsp; Mike
Milinkovich encouraged all Board Members to review the proposed
changes and indicated that the Board would be reviewing the final
document at the May Board meeting.&nbsp;&nbsp;&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Dual Licensing Orion</B></U></SPAN></P>
<P><SPAN LANG="en-US">Boris Bokowski provided an update on Orion and
indicated that the Project was seeking the Board&rsquo;s permission
to dual license the client side of the Project under the Eclipse
Public License and Eclipse Distribution License.&nbsp;&nbsp;&nbsp;
The related presentation material is attached hereto as <A HREF="2011_03_exhibits/ExhibitL.pdf">Exhibit L</A>.&nbsp;&nbsp;
The following resolution was unanimously passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Board approves the dual licensing of the Orion client under the
Eclipse Public License and Eclipse Distribution License.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Operations Update</B></U></SPAN></P>
<P><SPAN LANG="en-US">Chris Larocque presented an Operations Update.&nbsp;
</SPAN>
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>Roadmap</B></U></SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Mike
Milinkovich reviewed the Roadmap process and the Roadmap with the
Board, the related material for which is attached as <A HREF="2011_03_exhibits/ExhibitN.pdf">Exhibit N</A>.&nbsp;
&nbsp;Following discussion, the following resolution was passed
unanimously:</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
the Board approves the 2011 Eclipse Roadmap.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Membership &amp; Project Update</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an update for
Membership and Projects, the related slides for which are attached as
<A HREF="2011_03_exhibits/ExhibitP.pdf">Exhibit P</A> and <A HREF="2011_03_exhibits/ExhibitQ.pdf">Exhibit Q</A> respectively.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>IP Advisory Committee Update</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an update on the
issues currently under discussion at the IP Advisory Committee, the
related slides for which are attached as <A HREF="2011_03_exhibits/ExhibitR.pdf">Exhibit R</A>.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="page-break-before: always"><SPAN LANG="en-US"><U><B>PMC
Lead</B></U></SPAN></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US">Mike Milinkovich read the
following motion which had been passed by electronic vote into the
minutes of the Board meeting:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that&nbsp;Gunnar Wagenknecht is appointed as the leader of the
Technology PMC.</SPAN></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich declared the meeting adjourned at
approximately 3:10 Pacific time. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on March 21, 2011, is attested to and
signed by me below.</SPAN></P>
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