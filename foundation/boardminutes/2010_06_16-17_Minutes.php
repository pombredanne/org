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
	    <h3>June 16-17, 2010</h3>

<br/><P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">A Meeting of the
Board of Directors (the &ldquo;<I><B>Board</B></I>&rdquo;) of
Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;<I><B>Corporation&rdquo;</B></I>), was held on held at 8:30am
EST time at the IBM Software Executive Briefing Centre in Research
Triangle Park, North Carolina on June 16 and 17<SUP>th</SUP>, 2010 as
a regularly scheduled quarterly face-to-face meeting. </SPAN>
</P>
<TABLE WIDTH=607 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>16<SUP>th</SUP></B></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>17<SUP>th</SUP></B></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Name</B></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Company/Role</B></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ronnie King for
			Rich Bartlett</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Boris Bokowski</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans-Christian
			Brockmann</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">brox
			IT-Solutions GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Actuate
			Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans Kamutzki</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Kellerman</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mik Kersten</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Etienne Juliot
			for Stephane Lacrampe</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OBEO</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Adam Lieber</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Lipton</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">CA Technologies
			Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wolfgang
			Neuhaus</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jason Van Zyl</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sonatype</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Todd Williams</P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Genuitec, LLC</P>
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
Milinkovich introduced the minutes from the May 2010 Board meeting,
attached hereto as Exhibit A and asked for any corrections and/or
comments.&nbsp; The following resolution was unanimously passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
there was unanimous consent to approve full and abridged version of
the minutes of the May 2010 Board Meeting.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
drew the Board&rsquo;s attention to the 2010 Q2 Eclipse Foundation
Topics and Issues Report</SPAN></P>
<P LANG="en-US" STYLE="text-indent: 1.27cm">Chris Larocque reviewed
the Eclipse Foundation&rsquo;s financial forecasts for 2009,
including the variances from the original 2010 budget.&nbsp; Chris
indicated that the Eclipse Foundation was expecting to be ahead of
budget at the end of 2010.&nbsp; 
</P>
<P LANG="en-US"><U><B>Committer Issues</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Chris Aniszczyk provided an overview of the
Friends of Eclipse program, the related slides for which are attached
as <a href="2010_06_exhibits/ExhibitD.pdf">Exhibit D</a>.&nbsp; Chris indicated that the community felt that it
was a good program. &nbsp;Committers would however, like to see
increased transparency on where the money is being spent.&nbsp; The
Committer representatives proposed that the program be expanded to
allow members of the community to offer proposals on the use of the
money.&nbsp;&nbsp; Boris Bokowski commented that he felt that the
increased transparency would make it more appealing for people to
donate.&nbsp;&nbsp; Mike Milinkovich indicated that supporting such
an extension would result in a lot of overhead for the $30K that is
currently generated by the program.&nbsp; Paul Lipton suggested that
if the program grows to generate significantly more revenue, such as
$100K, that the suggestion be revisited.&nbsp;&nbsp; It was further
discussed that the Bylaws restrict the ability of the Eclipse
Foundation to fund travel and similar expenses for Members and their
employees and contractors. The following resolution was unanimously
passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, the EMO is instructed to expand the Friends of
Eclipse program to:&nbsp;&nbsp; provide greater community
transparency regarding the allocation of funds, consistent with the
Bylaws; and (b) consider greater inducements for larger donations.&nbsp;
All donations will be used for the benefit of the entire committer
and contributor community.&nbsp; The EMO will create a governance
process for transparently allocating the Friends of Eclipse funds.&nbsp;
</P>
<P LANG="en-US"><U><B>Long Term Support Program</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich presented a proposal for a long
term support program, the related slides for which are attached as
<a href="2010_06_exhibits/ExhibitG.pdf">Exhibit G</a>.&nbsp; Chris Aniszczyk</SPAN> <SPAN LANG="en-US">indicated
that he didn&rsquo;t like the SCM behind the firewall. Mike
Milinkovich commented that it was easier to have the SCM begin behind
the firewall then move outside; it would be difficult to have it move
the other way.&nbsp; Mike Milinkovich asked the Board if this
initiative was something that the Board felt the EMO should spend
additional time investigating.&nbsp; There was a general consensus
that it was.&nbsp; &nbsp;Mitch Sonies commented that he thought the
proposal had a lot of potential and congratulated those involved in
the initiative.&nbsp; Mike Milinkovich indicated that Karsten Schmidt
from SAP and Jochen Krause played a significant role in pulling the
proposed program together.&nbsp;&nbsp; Mike further pointed out that
as Eclipse gets more involved in runtimes, he would expect the need
for this kind of program to grow.&nbsp; The following resolution was
passed unanimously, one Board member abstaining from the vote:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, the Board directs the EMO to create a Long Term
Support Program for the Eclipse Foundation and its members based in
material respects on the information presented to the Board.&nbsp; 
</P>
<P LANG="en-US"><U><B>Review of Strategy Process</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Ricco Deutscher introduced the strategy session.&nbsp;
The Board discussed the strategic goals for the Eclipse Foundation
for 2011.&nbsp; </SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">The Board then divided into groups of four to
brainstorm on each of the four elements of the SWOT (Strengths,
Weaknesses, Opportunities, and Threats).&nbsp; </SPAN>
</P>
<P LANG="en-US">The meeting was adjourned to reconvene Thursday June
17, 2010 at 8:30am EST time.</P>
<P LANG="en-US" ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P LANG="en-US">Thursday June 17, 2010</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a Board review of the
output from the SWOT (Strengths, Weaknesses, Opportunities, and
Threats) group discussions from the previous day.&nbsp;&nbsp; </SPAN>
</P>
<P LANG="en-US"><U><B>Management Reports</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced the management
reports, attached hereto as <a href="2010_06_exhibits/ExhibitI1.pdf">Exhibit I.1</a> (Marketing), 
<a href="2010_06_exhibits/ExhibitI2.pdf">Exhibit I.2</a>
(Membership), and 
<a href="2010_06_exhibits/ExhibitI3.pdf">Exhibit I.3</a> (EclipseCon and Eclipse Summit Europe).
Mike encouraged all Board members to:&nbsp; (a) attend the virtual
conference being organized by the Foundation; and (b) support Eclipse
Summit Europe by sending people and sponsoring the event.&nbsp;&nbsp;&nbsp;
Mike also highlighted the fact that we now have the ability to track
download statistics for Projects and that Projects would need to
configure their metadata to enable tracking.&nbsp;&nbsp; The
presentation material related to this functionality is attached as
Exhibit J.</SPAN></P>
<P LANG="en-US"><U><B>Mylyn Project</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mik Kersten presented a proposal to have Mylyn
become a top level Project, the related presentation materials for
which are attached as <a href="2010_06_exhibits/ExhibitK.pdf">Exhibit K</a>.&nbsp; A Director expressed concern
that the name was not descriptive and was tightly associated with
Tasktop.&nbsp;&nbsp; There was general agreement to create the
Project, provided the naming issue is resolved.&nbsp; </SPAN>
</P>
<P LANG="en-US"><U><B>Helios Release Train and Project Update</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich reported on the status of the
Helios annual release train, attached hereto as <a href="2010_06_exhibits/ExhibitL.pdf">Exhibit L</a>. He
indicated that preparations for the release train were well in hand.&nbsp;
There was a suggestion that the Foundation track the number of
contributions to the release train from non-Committers.&nbsp; Mike
indicated that he would follow up on this suggestion.&nbsp; Mike
asked Boris Bokowski about the Eclipse Projects intentions to move to
Git.&nbsp; Boris indicated that it really depended on EGit and that
right now EGit had holes in needed areas.&nbsp; When those holes are
filled, it was likely the Eclipse Project would move.&nbsp; Mike
Milinkovich also indicated that post-Helios the Foundation would stop
all new Projects from choosing to use CVS.</SPAN></P>
<P LANG="en-US"><U><B>Program Plan Ideas</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">The Board divided into four groups to discuss
possible Program Plan ideas in relation to each of the SWOT
(Strengths, Weaknesses, Opportunities, and Threats) components.&nbsp;
</SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike
Milinkovich declared the meeting adjourned at approximately 2:00pm
ET. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on June 16 and 17<SUP>th</SUP>, 2010,
is attested to and signed by me below.</SPAN></P>
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