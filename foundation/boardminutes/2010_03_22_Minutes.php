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
	    <h3>March 22, 2010</h3>

<P>A meeting of the Board of Directors (the &ldquo;<I><B>Board</B></I>&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;<I><B>Corporation&rdquo;</B></I>), was held on March 22, 2010
as a regularly scheduled face to face meeting at the Hyatt Regency,
Santa Clara, California.</P>
<P>Present at the face to face meeting were the
following Directors:</P>
<TABLE WIDTH=969 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=633>
			<P STYLE="border: none; padding: 0cm"><BR><BR>
			</P>
			<TABLE WIDTH=611 BORDER=0 CELLPADDING=0 CELLSPACING=0>
				<COL WIDTH=61>
				<COL WIDTH=259>
				<COL WIDTH=277>
				<TR>
					<TD WIDTH=61 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000"><B>Present</B></FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000"><B>Director</B></FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000"><B>Organization</B></FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Chris Aniszczyk</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Committer Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Ronnie King for Rich Bartlett</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Nokia</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Michael Bechauf</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">SAP AG</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Boris Bokowski</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Committer Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Hans-Joachim Brede</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						Sustaining Representative</P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">No</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Hans-Christian Brockmann</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">brox IT-Solutions GmbH</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Mark Coggins</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Actuate Corporation</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Ricco Deutscher</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">SOPERA GmbH</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">No</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Doug Gaff</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Committer Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Hans Kamutzki</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						Sustaining Representative</P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">No</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Patt Huff for John Kellerman</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">IBM</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Jochen Krause</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Innoopract</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Etienne for Stephane Lacrampe</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">OBEO</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Dennis Leung</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Oracle</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">No</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Paul Lipton</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">CA Inc.</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Ed Merks</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Committer Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Peter Friese for Wolfgang Neuhaus</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">itemis AG</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Shawn Pearce</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						Sustaining Representative</P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000"><SPAN LANG="en-US">Mitch Sonies and
						Hendrik </SPAN></FONT><SPAN LANG="en-US">Lindberg</SPAN></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Cloudsmith Inc.</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Mike Taylor</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						Sustaining Representative</P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Jason Van Zyl</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Sonatype</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=61 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=259 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">
						<FONT COLOR="#000000">Todd Williams</FONT></P>
					</TD>
					<TD WIDTH=277 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Genuitec,
						LLC</FONT></P>
					</TD>
				</TR>
			</TABLE>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
	</TR>
</TABLE>
<P><BR><BR>
</P>
<P><SPAN LANG="en-US">Also present at the invitation of the Board
were the following newly elected Committer and Solution Member
representatives whose term will begin at the next Board Meeting:&nbsp;
</SPAN>
</P>
<TABLE WIDTH=625 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Adam Lieber&nbsp;&nbsp;
						</P>
		</TD>
		<TD WIDTH=336>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Sustaining Representative</P>
		</TD>
	</TR>
</TABLE>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, Janet Campbell, Secretary of
Eclipse.org Foundation, Inc., and Chris Larocque, Treasurer to the
Foundation.</SPAN></P>
<P><U><B><SPAN LANG="en-US">General Business</SPAN></B></U></P>
<P><SPAN LANG="en-US">Mike Milinkovich introduced the topic of the
February 2010 Board Minutes attached as Exhibit A .&nbsp; Mike asked
if any Board Members had any questions regarding the minutes.&nbsp;
No questions being raised, the following resolution was passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Board unanimously approves the minutes of the February 17, 2010 Board
Meeting.</SPAN></P>
<P><U><SPAN LANG="en-US"><B>2010 Election Results</B></SPAN></U></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an overview of the
recent Membership election results, the related material for which is
attached as <a href="2010_03_exhibits/ExhibitB.pdf">Exhibit B</a>.&nbsp;&nbsp; The newly elected Board
Representatives are as follows:</SPAN></P>
<P STYLE="margin-left: 1.27cm">Committer Member Representatives</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0.1cm">Chris Aniszczyk</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0.1cm">Boris Bokowski 
</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0.1cm">Ed Merks<BR><BR><BR>
</P>
<P STYLE="margin-left: 1.27cm">Sustaining Member Representatives</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0.1cm"><FONT COLOR="#000000"><SPAN LANG="en-US">Hans
Kamutzki</SPAN></FONT> 
</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0.1cm">Mik Kersten</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0.1cm">Adam Lieber</P><br/>
<P><SPAN LANG="en-US">Mike thanked the departing Board Members for
their service and gave them an opportunity to address the Board.&nbsp;
Mike Talyor commented that he thought the Eclipse Foundation is doing
the right things and that it should continue to focus on Member
value.&nbsp; </SPAN>Hans-Joachim Brede<FONT COLOR="#000000"> </FONT><SPAN LANG="en-US">echoed
Mike Taylor&rsquo;s comments and indicated that it had been a
pleasure serving on the Eclipse Board of Directors.&nbsp; Shawn
Pearce indicated that while he had no particular words of wisdom to
impart,&nbsp;&nbsp; he did see the value proposition and budgetary
issues, particularly given the current economic climate. </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Committer and Sustaining Member Issues</B></U></SPAN></P>
<P><SPAN LANG="en-US">Ed Merks indicated that the Committer
population is pretty happy.&nbsp; Ed indicated that the concerns
raised typically relate to delays in the IP sphere when large
Projects move to Eclipse and want to use a lot of third party
packages.&nbsp; Ed indicated that he felt that there wasn&rsquo;t a
great deal that the Foundation can do in those situations.&nbsp;
Boris Bokowski agreed, indicating that he thought that the Committers
are pretty happy.</SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich indicated that the low level
of voter turnout with the Sustaining Members indicates a level of
complacency and asked if there was something that could be done about
that.&nbsp; Adam Lieber indicated that he&rsquo;d like to get a list
of Sustaining Members and call them and try to engage everyone in the
next month or two.&nbsp; </SPAN>
</P>
<P><B><U><SPAN LANG="en-US">Topics and Issues Report</SPAN></U></B></P>
<P><SPAN LANG="en-US">Mike Milinkovich asked for feedback from the
Board on the Topics and Issues Report that was circulated to the
Board list.&nbsp; The general feedback from the Board was that they
found the information very useful.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Jochen Krause commented that the Insurance
Consortium that had been discussed in the context of Working Groups
had now been created after some three years of effort.&nbsp; Jochen
further indicated that he felt it would be a strong contender to
become an Industry Working Group at Eclipse.&nbsp; Jochen also noted
that funding is an impediment to further progress in that area at
this point in time.&nbsp; Ronnie King echoed Jochen&rsquo;s comments
indicating that the creation of a Mobile Industry Working Group was
also taking some time to bring together.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Mike Milinkovich asked the Board their
perspective on the economy, indicating that his sense was that it was
starting to come back, though slowly.&nbsp; Mike Taylor indicated
that that perspective was in line with his own.&nbsp; Dennis Leung
asked about the strength of Europe.&nbsp; Jochen Krause indicated
that Germany is almost back to where it was.&nbsp; There was general
agreement that the Topics and Issues Report was worthwhile and
something that the Board would like to see once a quarter.&nbsp; </SPAN>
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>Management
Reports</B></U></SPAN>&nbsp; 
</P>
<P LANG="en-US" STYLE="page-break-after: avoid">Mike Milinkovich
provided an update on Membership, the related slides for which are
attached as <a href="2010_03_exhibits/ExhibitD.pdf">Exhibit D</a>.&nbsp; Mike also provided a Marketing update,
the related slides for which are attached as <a href="2010_03_exhibits/ExhibitE.pdf">Exhibit E</a>.&nbsp;
&nbsp;&nbsp;Jochen Krause indicated that he really liked the
Marketplace client.&nbsp; He did note however, that it did not come
to be in the manner typical of an open source project.&nbsp;&nbsp; Ed
Merks indicated that it was discussed at the Board and that the
Membership had representation at the Board.&nbsp; Mike Milinkovich
indicated that we were following the rules, just accelerating how it
happens.&nbsp; Mike further indicated that it was possible for other
projects to get through the process fairly quickly by investing time
in the process, using their mentors and pulling on the EMO as
needed.&nbsp; Jason Van Zyl indicated that he thought it was a great
example of getting things done and not getting bogged down in red
tape.&nbsp; 
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Mike
Milinkovich indicated that the Foundation was making some progress
with Eclipse Labs but that there are some delays.&nbsp; Mike
indicated that the idea is that some projects may begin at Eclipse
Labs and migrate to Eclipse over time.&nbsp;&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Chris Larocque provided an Operations update.&nbsp;&nbsp;
Chris highlighted the fact that the Eclipse Foundation managed to
break even in 2009.&nbsp; Dennis Leung congratulated the staff,
indicating that this result was a significant improvement over what
the Board had been expecting. &nbsp;</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Key Performance Indicators</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich reviewed the Eclipse
Foundation&rsquo;s Key Performance Indicators (&ldquo;KPI&rdquo;s).</SPAN></P>
<P><B><SPAN LANG="en-US"><U>Policy to Consider the Limited Usage of
LGPL APIs in Eclipse Projects</U></SPAN></B></P>
<P><SPAN LANG="en-US">Following an electronic vote of the Eclipse
Board of Directors, the following two resolutions were passed:</SPAN></P>
<P><B>RESOLVED</B>, that&nbsp;the attached &ldquo;Policy to Consider
the Limited Usage of LGPL APIs in Eclipse Projects&ldquo; is
approved.</P>
<P><B>RESOLVED</B>, that&nbsp;request of the Eclipse Project PMC to
use WebKitGTK and its related dependency &ldquo;libsoup&rdquo;, both
licensed under the LGPL, is hereby approved.</P>
<P><SPAN LANG="en-US">The related Policy to Consider the Limited
usage of LGPL APIs in Eclipse Projects is attached hereto as <a href="2010_03_exhibits/ExhibitK.pdf">Exhibit K</a>.</SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>Roadmap</B></U></SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Mike
Milinkovich reviewed the Roadmap process and the Roadmap with the
Board, attached hereto as <a href="2010_03_exhibits/ExhibitL.pdf">Exhibit L</a> 
and <a href="2010_03_exhibits/ExhibitM.pdf">Exhibit M</a>.&nbsp; &nbsp;Following
discussion, the following resolution was passed in relation to the
Roadmap:</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
there was unanimous consent to approve the 2010 Eclipse Roadmap.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>EclipseCon 2010 Update</B></U></SPAN></P>
<P><SPAN LANG="en-US">Don Smith provided the Eclipse Board with an
update on EclipseCon 2010, the related slides for which are attached
as <a href="2010_03_exhibits/ExhibitN.pdf">Exhibit N</a>.&nbsp; Following discussion, the following resolution
was unanimously passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,</SPAN>
the Board would like to recognize the contributions of Donald Smith
and Anne Jacko on making EclipseCon 2010 what is expected to be a
tremendous success.</P>
<P><B><U><SPAN LANG="en-US">Invited Speakers:</SPAN></U></B></P>
<P><SPAN LANG="en-US">Jeffrey Hammond of Forrester Research presented
on &ldquo;Application Development Trends in 2010 and Beyond&rdquo;.</SPAN></P>
<P><SPAN LANG="en-US"><B><U>Development Process Changes</U></B></SPAN></P>
<P><SPAN LANG="en-US">Wayne Beaton provided an overview of possible
changes to the Eclipse Development Process, the related slides for
which are attached as <a href="2010_03_exhibits/ExhibitO.pdf">Exhibit O</a>.&nbsp; The Committer Representatives
had a number of questions and asked to have more time to consider the
proposed changes.&nbsp; Mike indicated that the subject would be
added to the next phone call with the expectation that we would be
seeking approval for changes to the Development Process.</SPAN>&nbsp;</P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich declared the meeting adjourned at
approximately 2:13 Pacific time. </SPAN>&nbsp;</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN>&nbsp;</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on March 22, 2010, is attested to and
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