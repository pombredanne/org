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
	    <h3>December 12-13, 2007</h3>
<P>________________________________________________________________________</P>
<P>A Meeting of the Board of Directors (the &ldquo;<B><I>Board</I></B>&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;<B><I>Corporation&rdquo;</I></B>), was held on held at 8:30am
Eastern time at the Hotel Monaco San Francisco, San Francisco, CA on
December 12 &amp; 13, 2007 as a regularly scheduled quarterly
face-to-face meeting. 
</P>
<P>Present at the meeting were the following Directors:</P>
<TABLE WIDTH=632 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<COL WIDTH=83>
	<COL WIDTH=83>
	<COL WIDTH=231>
	<COL WIDTH=235>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm"><B>Attending Dec 12th</B></P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm"><B>Attending Dec 13th</B></P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Tim Barnes</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">OpenMethods LLC</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Rich Bartlett</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Ed Cobb</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">BEA</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Actuate Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Eliane Fourgeau</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Richard Gronback</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Borland Software Corp.</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Andi Gutmans</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Zend Technologies</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Jonathan Khazam</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Intel Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Konstantin Komissarchik</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Howard Lewis</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Eric Newcomer</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">IONA Technologies</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">James Saliba</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Computer Associates</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Steve Saunders</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">WindRiver</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Darin Swanson</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">John Kellerman for Dave
			Thomson</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">John Graham for David K Tong</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Sybase</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Todd E. Williams</P>
		</TD>
		<TD WIDTH=235>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=231>
			<P STYLE="border: none; padding: 0cm">Dino Brusco for Christy
			Wyatt</P>
		</TD>
		<TD WIDTH=235>
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
Milinkovich advised the Board that Serena would not be renewing their
Strategic Membership.&nbsp; 
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm">Mike
Milinkovich introduced the minutes from the November meeting and
asked for any corrections and/or comments.&nbsp; The following
resolution was unanimously passed:</P>
<P STYLE="margin-left: 1.27cm"><B>RESOLVED</B>, that there was
unanimous consent to approve the amended minutes of November.&nbsp; &nbsp;&nbsp;</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich introduced the Charter for IP Advisory Committee
which had been previously approved by the IP Advisory Committee and
was modeled after the other Committee Charters.&nbsp; The Charter had
been approved some time ago and the subject was now being brought to
the Board to correct an administrative oversight.&nbsp; No questions
or concerns were raised and the following resolution was passed:</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, that there was unanimous consent to approve the
Charter of the IP Advisory Committee, attached hereto as <a href="2007_12_exhibits/ExhibitA.pdf">Exhibit A</a>.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich indicated that Winston Damarillo has volunteered to
take over the chair of the Membership committee.&nbsp; Mike further
indicated that he would like to revive the Membership Committee and
involve directors on the Committee that had an interest in helping
the Foundation grow the membership, with a particular focus on
Strategic Membership.&nbsp;&nbsp; The following resolution was
unanimously passed:</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, that there is unanimous consent to approve Winston
Damarillo as the chair of the Membership Committee.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich proposed that the governments be added to the
Associate Member class.&nbsp; A copy of the related presentation is
attached as <a href="2007_12_exhibits/ExhibitB.pdf">Exhibit B</a>.&nbsp;&nbsp; The current definition of
Associate Member in the Membership Agreement does not expressly
include governments, but it does contemplate the addition of other
types of Associate Members by the Eclipse Foundation Board.&nbsp;&nbsp;
It is felt that this is the most appropriate classification for
governments in light of the fact that they rarely create a commercial
offering.&nbsp; The following resolution was passed unanimously.</P>
<P STYLE="margin-left: 1.27cm"><B>RESOLVED,</B> that Governments and
government/public departments, agencies and government/public
departments, agencies and ministries will be accepted as Associate
Members.</P>
<P STYLE="text-indent: 1.27cm">Mike Milinkovich reported to the Board
that the EMO had completed its action item to review all of our
related IP documentation to ensure that there were no known issues
with proceeding with the dual licensing of the Eclipse Persistence
Services Project.&nbsp; A copy of the related presentation material
is attached as <a href="2007_12_exhibits/ExhibitC.pdf">Exhibit C</a>.&nbsp; In many cases we found that the
changes that were needed were really errors or omissions that needed
to be fixed in any event.&nbsp; Those changes primarily relate to
replacing references in our existing documentation to the Eclipse
Public License with the Eclipse.org Terms of Use.&nbsp; The issue
moving forward will be for the Eclipse Persistence Services project
to ensure that they do not copy and paste existing EPL-licensed code
into the Project&rsquo;s code base.&nbsp;&nbsp; 
</P>
<P STYLE="text-indent: 1.27cm">Richard Gronback highlighted that
there is a clause in the Modeling top Level project that states: &ldquo;To
ensure the scope of the project remains consistent within the
modeling mission, the PMC will seek Eclipse board approval for the
creation of new projects.&rdquo;&nbsp; The modeling project would
like to strike this reference from their Charter.&nbsp; &nbsp;There
being no concerns raised, Richard indicated that he would propose a
revised version of the Charter at the next Board meeting.</P>
<P><B><U>Community Issues</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The subject of the upcoming elections was raised and there was
discussion on how to best generate interest in the elections.&nbsp;
There was general consensus on the following topics:</P>
<P STYLE="margin-left: 1.36cm; text-indent: -0.64cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT>Committer Representatives blogging about their experience
would be useful, 
</P>
<P STYLE="margin-left: 1.36cm; text-indent: -0.64cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT>Making Board Members more visible to the community at
EclipseCon through identifying them as Board Members on their
EclipseCon badges 
</P>
<P STYLE="margin-left: 1.36cm; text-indent: -0.64cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT>Adding a Q&amp;A session with the Board at the annual Members
meeting.&nbsp; 
</P>
<P STYLE="margin-left: 1.36cm; text-indent: -0.64cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT>Improving the Board web page on the Eclipse.org website by
adding pictures together with a short biography for each Director.&nbsp;&nbsp;
</P>
<P STYLE="margin-left: 1.36cm; text-indent: -0.64cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT>The Committer Representatives raised an issue with the current
voting structure. Currently, the votes of all committers working for
the same company collapse into a single vote. This is an impediment
to committers getting involved in the electoral process. The EMO will
review the Eclipse Foundation Bylaws to determine what improvements
could be made both from the standpoint of the voting structure and
representation.</P>
<P STYLE="margin-left: 0.09cm; text-indent: 0.64cm">The Committer
Representatives highlighted significant improvements in the IP
Process and Mike encouraged the Committer Representatives to blog
about their ability to influence for change at the Board level, as
these changes were largely driven at the Board level by these
community representatives.</P>
<P><B><U>Board Survey and The Imperfect Board Member</U></B></P>
<P STYLE="text-indent: 1.25cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich asked Board Members for feedback on the book
provided to each Director (the <I>Imperfect Board Member</I>) and the
Board Survey that the Board had recently been asked to participate
in.&nbsp; Several Board Members indicated that they found both the
book and the survey very useful and that they had forwarded the book
to other Boards that they participate in.&nbsp;&nbsp;&nbsp; Mike then
organized Board Members into 5 groups and asked each group to come up
with 4 strengths and weaknesses of the Board.&nbsp; &nbsp;&nbsp;The
large size of the Board was recognized as a challenge, though the
Board felt that the use of Committees was helping with that.&nbsp;
The Board requested that in the future all Standing Committees and Ad
Hoc Committees should report to the Board each Board Meeting. &nbsp;&nbsp;</P>
<P STYLE="text-indent: 1.25cm">Further discussion was had on the
importance of work on the &ldquo;common good&rdquo; areas, but the
lack of influence that the EMO and Board have on the resources that
might do this work.&nbsp; Mike Milinkovich commented that there was
need to change the way strategy is handled so that we clearly
separate the pieces that the EMO can actually act on and highlight
things that are to the benefit of the community but the EMO can only
influence.&nbsp; We should then highlight what needs to get done, who
signs up to what, and then measure against commitment.&nbsp; The
benefit of a strategic working group or committee was discussed and
the following resolution approved:</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, by majority vote of the Board, the Board approved
the establishment of a Strategy Committee to work with the Executive
Director on setting strategy for the Eclipse Foundation.</P>
<P>At 5:10 Pacific Time, the meeting was adjourned for the day.</P>
<P><B><U><FONT SIZE=4>December 13, 2007</FONT></U></B></P>
<P><B><U>Advertising Working Group</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The meeting resumed at 8:30 on December 13, 2007.&nbsp; Mike Taylor
presented the Advertising Working Group recommendations.&nbsp; A copy
of the related presentation is attached as <a href="2007_12_exhibits/ExhibitD.pdf">Exhibit D</a>.&nbsp; After
some discussion, including the observation that it needs to be more
painful for a Strategic Member such as Serena to quit, the Board
approved the following resolutions:</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, that there was unanimous consent to approve the
following recommendations of the Advertising Working Group:</P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm">1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
advertising should be added to ecilpse.org</P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm">2)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
primary purposes</P>
<P STYLE="margin-left: 3.81cm; text-indent: -0.64cm">a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Increase the value of membership in the Eclipse Foundation</P>
<P STYLE="margin-left: 3.81cm; text-indent: -0.64cm">b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Provide valuable additional information to users of eclipse.org</P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm">3)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Include advertising as a standard part of every strategic membership</P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm">4)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Secondary goal:</P>
<P STYLE="margin-left: 3.75cm; text-indent: -0.64cm">a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Generating additional revenue for the Foundation</P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm">5)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Take care that the cost of administering the advertising not become
greater than the benefit.</P>
<P STYLE="margin-left: 1.27cm"><B>RESOLVED</B>, that the Board
approves of projects who so desire to recognize on their websites the
contributions of individuals and corporations of those who (a) make
significant contributions to the project and/or (b) make use of the
project in a commercial product, open source project or application.
&nbsp;&nbsp;The Board instructs the EMO to draft and implement
guidelines for the projects based on the following principles:</P>
<P STYLE="margin-left: 3.18cm; text-indent: -0.64cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT>Consistency in look, feel and navigation across project
websites.</P>
<P STYLE="margin-left: 3.18cm; text-indent: -0.64cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT>Vendor neutrality.</P>
<P STYLE="margin-left: 3.18cm; text-indent: -0.64cm"><FONT FACE="Symbol">&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</FONT>Membership value.</P>
<P><B><U>Eclipse 4.0</U></B></P>
<P STYLE="text-indent: 1.27cm">Jeff McAffer presented the Board with
the Platform Project&rsquo;s vision for Eclipse 4.0.&nbsp; Jeff
encouraged others to participate in the development of Eclipse 4.0.&nbsp;
The intention is to announce 4.0 at EclipseCon and ship in 2009.</P>
<P><B><U>Runtime Summit</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Ricco Deutscher, Jeff McAffer, and Jochen Krause led a discussion on
the Runtime Summit and proposed that a new Top Level Project be
created to host Eclipse runtime projects.&nbsp; A copy of their
presentation is attached as <a href="2007_12_exhibits/ExhibitE.pdf">Exhibit E</a>.&nbsp; 
</P>
<P>The group indicated their intent to put forward a Charter for such
a project at the next Board meeting.</P>
<P STYLE="page-break-after: avoid"><B><U>Roadmap Discussion</U></B></P>
<P STYLE="text-indent: 1.27cm">Mike Milinkovich introduced a
discussion of the Roadmap.&nbsp; A copy of the related presentation
is attached as <a href="2007_12_exhibits/ExhibitF.pdf">Exhibit F</a>.&nbsp; The Bylaws require that each year the
Requirement, Planning and Architecture Councils collaborate on the
<FONT SIZE=2 STYLE="font-size: 11pt"><FONT FACE="Calibri, sans-serif"><A HREF="http://www.eclipse.org/org/councils/roadmap_v3_0/"><FONT COLOR="#0000ff">Eclipse
Roadmap</FONT></A>. </FONT></FONT>This document has historically
required a significant amount of effort from the Councils for an
unclear return on that investment in time and energy. Several Board
members found the document quite valuable in order to explain Eclipse
to their management and how Eclipse fits into the company&rsquo;s
strategic direction.&nbsp; After some discussion it was decided that
there would be a roadmap, that the EMO will write the preamble and
create an XML template that each project complete that specifies
their plans by theme that can then be used to auto-generate the
planned deliverable portion of the Roadmap.&nbsp; &nbsp;&nbsp;The
Planning Council would be responsible for validating and selecting
set of themes and priorities consistent with those prepared by the
Requirements Council which each project in the annual release train
would be expected to use in their plans. Each project but would also
be able to add additional themes and priorities as well. 
</P>
<P><U><B>Strategic Advisory Council</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich introduced the proposal to reform the Requirements
Council.&nbsp; The associated presentation is attached as <a href="2007_12_exhibits/ExhibitG.pdf">Exhibit G</a>.&nbsp;
&nbsp;This proposal is intended to refocus the energies of the
Requirements Council by establishing an active advisory group that
engages the PMCs and other advisors to provide relevant, strategic
input to both Project and member Product planning activities.&nbsp;
Members of the Requirements, Architecture and Planning Council are
eligible and encouraged to participate.&nbsp;&nbsp; 
</P>
<P STYLE="text-indent: 1.27cm"><B>RESOLVED</B>, the Board unanimously
approved the proposal. 
</P>
<P><B><U>Budget Review and Approval</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Chris Larocque provided an overview of the budget.&nbsp; &nbsp;&nbsp;Following
the discussion, the Board approved the following resolution:</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, there was unanimous consent to approve the 2008
Budget for the Eclipse Foundation.</P>
<P><B><U>Future Board Meetings</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
It was decided that the upcoming face-to-face Board meetings would be
held in Denver in June, Dallas in September, and San Francisco in
December.</P>
<P><B><U>2008 Executive Director Annual Objectives</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich reviewed the 2008 Executive Director Annual
Objectives.&nbsp; Following the discussion, the Board approved the
following resolution:</P>
<P STYLE="margin-left: 1.25cm; text-indent: -1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, there was unanimous consent to approve the 2008
Executive Director Annual Objectives.</P>
<P ALIGN=JUSTIFY><B><U>Wrap Up</U></B></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">The Committer
Representatives wanted to recognize the significant improvement in
the IP Process, indicating that people are much happier with the
process as a result.&nbsp; 
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">The Board then turned to
revisit the discussion of the Board&rsquo;s Performance and what the
Board members expected of their peers on the Board.&nbsp; &nbsp;The
importance of having strategic discussions at the Board level was
discussed.&nbsp; While it was recognized that some strategic
discussions about the technology created at Eclipse are difficult to
have because the Board does not own the resources that would do the
work, it was felt that other strategic-level discussions and if
necessary changing the Bylaws are clearly within the Board&rsquo;s
purview. Examples included membership structure, and the relationship
of membership in the Eclipse Foundation and the ability to create
projects at Eclipse,.</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><BR><BR>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">Mike Milinkovich
declared the meeting adjourned at approximately 3:00pm Pacific Time. 
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">This being a true and
accurate record of the proceedings of this Meeting of the Board of
Directors held on December 12 and 13th, 2007, is attested to and
signed by me below.</P>
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