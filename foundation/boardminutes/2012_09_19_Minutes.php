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
	    <h3>September 19, 2012</h3>

<P><SPAN LANG="en-US">A Meeting of the Board of Directors (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Board</B></I></SPAN><SPAN LANG="en-US">&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Corporation&rdquo;</B></I></SPAN><SPAN LANG="en-US">),
was held on held at 11:00 am Eastern time on September 19, 2012 as a
regularly scheduled teleconference. </SPAN>
</P>
<P><SPAN LANG="en-US">Present on the teleconference were the
following Directors:</SPAN></P>
<TABLE WIDTH=619 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Present</P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Director</P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Organization</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Arthorne</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jutta Bindewald
						</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Cedric Carbone</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Talend</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Eric Clayberg</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Sustaining Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Clenahan</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Actuate
			Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Etienne Juliot</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OBEO</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans Kamutzki</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Sustaining Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Pat Huff</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mik Kersten</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Sustaining Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Innoopract GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Lipton</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">CA Technologies</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Achim Loerke</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">BREDEX GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wolfgang
			Neuhaus</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
</TABLE>
<P><BR><BR>
</P>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, Chris Larocque, Treasurer, and Janet
Campbell, Secretary, of Eclipse.org Foundation, Inc.&nbsp; &nbsp;</SPAN></P>
<P><SPAN LANG="en-US"><U><B>General Business:</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced the full and abridged
minutes for the Board meetings of June 19, 2012, a copy of which is
attached hereto as <a href="2012_06_19-20_Minutes.php">Exhibit B</a>.&nbsp; The Board
passed the following resolution unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
minutes and abridged minutes for the Board meeting of June 19, 2012
are approved.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich indicated to the Board that the
Test and Performance Tools Platform Top Level Charter needed to be
revoked. In late 2010, the Test and Performance Tools Platform (TPTP)
PMC decided to terminate and archive the top-level project and all
subprojects following the Helios SR-2 release in February 2011. At
that time, another party (verit) stepped forward to take over the
project, the termination was withdrawn, and the project membership
(including PMC) was replaced. In the time since, the subprojects
under the TPTP top-level project have continued to operate as regular
Eclipse projects, but TPTP itself is no longer operating as a viable
top-level project. </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">The EMO will
collapse the existing TPTP subprojects into a single project, move it
to the Tools top-level project, and requests that the board revoke
the TPTP project's charter.</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
asked if there were any questions or comments associated with moving
forward with that action.&nbsp; There being no comments or questions,
the Board passed the following resolution unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Test and Performance Tools Platform (TPTP) Project's charter is
revoked.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a discussion of the
Polarsys and LocationTech Top Level Project (TLP) Charters attached
hereto as <a href="2012_09_Exhibits/ExhibitC.pdf">Exhibit C</a> and <a href="2012_09_Exhibits/ExhibitD.pdf">D</a> respectively.&nbsp;&nbsp; Mike indicated
that both were required to tie the project activities of those
Industry Working Groups to the Eclipse Development Process and
Eclipse IP Process.&nbsp; John Arthorne asked if the Polarsys Project
would use LGPL code, and whether that was something that Eclipse had
done before.&nbsp; Mike indicated that yes that was the case, but
that that portion of the initiative had been approved in a previous
Board meeting.&nbsp; Mike added that the Board had already approved
both of the IWGs in question and that in both cases the IWGs had
licensing flexibility approved by the Board.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike noted that in
both cases the new top-level projects would also be on separate
forges, and governed by both the Eclipse Development Process and the
Eclipse IP Process.&nbsp; &nbsp;As soon as the LocationTech TLP was
approved there will be a proposal to move uDig to Eclipse but that
cannot occur until the LocationTech PMC is ready to go.&nbsp; Jochen
Krause asked how people would find these projects on the eclipse.org
website.&nbsp; Mike responded that was not yet decided, but that at
the moment he was leaning towards not having them listed as an
Eclipse project, because they would be operating under a separate
forge.&nbsp;&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">The Board passed
the following resolutions unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Polarsys Top Level Project Charter is approved.</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
LocationTech Top Level Project Charter is approved.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Java TCK Agreement Vote Results:</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a discussion of the
results of the electronic vote on approving the Java TCK Agreement
with Oracle.&nbsp; Mike confirmed that the vote did not pass.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike added that if
a Strategic Member requested a TCK, a second vote would be called.&nbsp;
</SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Dennis Leung as for
a clarification on the voting process, indicating that he thought
only a majority of those that voted would be required.&nbsp; Mike
Milinkovich indicated that he had thought Dennis&rsquo;
interpretation applied as well, but that both Janet Campbell and
External Counsel have said that a majority of the total votes cast
were required.&nbsp; Dennis Leung suggested that in light of that
misunderstanding that the vote be re-run perhaps at the next face to
face.&nbsp;&nbsp; Mike responded that we would revisit this topic
shortly on either the October phone call or at the October face to
face meeting.&nbsp;&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Etienne Juliot
asked if Mike intended to make any public comment on the topic.&nbsp;
Mike replied that he did not.&nbsp;&nbsp; Etienne asked if Apache had
a TCK license with Oracle.&nbsp; Mike confirmed that they do and that
a number of Projects at Apache run TCKs within the context of
Apache.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike confirmed with
the Board that he wanted to go ahead with the Board call scheduled
for Wednesday, October 17</SPAN><SUP><SPAN LANG="en-US">th</SPAN></SUP><SPAN LANG="en-US">
in addition to the face to face meeting scheduled for October.&nbsp;&nbsp;
</SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Juno 4.2 Performance Issues</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mik Kersten introduced a discussion of community
concerns around Eclipse Juno and 4.2 performance.&nbsp; Mik indicated
that when he reviewed the bugs, blogs and Architecture Council
minutes, he thought the first thing that needed to be decided was
whether there was a problem that effects Eclipse as a whole.&nbsp;
Mik added that internally at Tasktop, they would not be switching to
4.2 and asked others on the Board what their plans were.&nbsp; Pat
Huff indicated that IBM was intending to switch and Paul Clenahan
added that Actuate intended to do the same.&nbsp; Mike Milinkovich
commented that in looking at the bug and the list of dependencies,
there are five or six known issues that the Project is working on.&nbsp;
Mike added that the Foundation does believe that 4.2 is useable, and
added that there are many people using it every day.&nbsp; Mike
commented that there are some scenarios where people are having
difficulty and the Project is working through those as best they
can.&nbsp; Pat Huff added that bugs needed to be raised for specific
problems that the project can work on.&nbsp;&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mik further asked
whether people should wait for the Kepler simultaneous release to
come.&nbsp; Mike Milinkovich commented that it was not the Board&rsquo;s
decision to move the simultaneous release to Eclipse 4, but rather
the Eclipse PMC and the Planning Council.&nbsp; Mik responded that
making Eclipse 4 a success was identified as a priority by the
Board.&nbsp;&nbsp; Pat Huff commented that IBM was committed to 4.x,
and that the 3.x stream has no future.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike asked Pat Huff
and John Arthorne whether they had any insight into whether there
would be any focus on performance enhancements in the SR2 timeframe.&nbsp;
John Arthorne responded that performance was certainly a focus, but
that the Eclipse project team was much smaller than they were for 3.0
when it shipped in 2004.&nbsp; John added that the team would fix
problems as best they could but that the rate would not be as fast as
it had been in the past.&nbsp; Mik Kersten commented that if the rate
was too slow, Eclipse stands to see some erosion in the value of
Eclipse because of how strongly it was being promoted.&nbsp; Mik
added that Eclipse was hiding 3.x and doing what could be done to
move the ecosystem to 4.x before it had hardened and that approach
presented a risk.&nbsp;&nbsp; John Arthorne added that keeping the
3.8 stream alive didn&rsquo;t help Eclipse either.&nbsp; Mike
Milinkovich commented that the Eclipse Platform team is relatively
small and that they are not going to do a 3.9, so there was no other
path forward.&nbsp; Pat Huff indicated that the Eclipse Platform team
is looking for as much help from the community as they could.&nbsp;
Pat added that letting the team know exactly where the problems are
was one way to help.&nbsp; Mike Milinkovich commented that anyone who
can provide a repeatable test case is extremely helpful.&nbsp; Mike
added that if you looked on the bug where these performance issues
were being discussed, there are a few cases that has happened, and it
has really helped focus efforts. </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
commented that one of the difficulties is that performance tests are
not currently being run.&nbsp; Mike added that the Eclipse Foundation
staff is doing what it can to get those tests re-established and run
on Eclipse.org hardware, highlighting that Google had donated $20K to
buy hardware.&nbsp; Mike indicated that the Foundation was still
waiting on information from the Platform Team on what to buy.&nbsp;&nbsp;
Mike further commented that the crisis would focus people&rsquo;s
attention on the resource constraints of the Platform Team.&nbsp;
Achim Loerke indicated that his company has decided to hire someone
but that they were having difficulty finding someone.&nbsp; Mike
Milinkovich offered to help.&nbsp;&nbsp; Mike thanked Mike for
leading the discussion surrounding 4.x.<BR><BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich declared the meeting adjourned. </SPAN>
</P>
<P ALIGN=CENTER><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P><SPAN LANG="en-US">This being a true and accurate record of the
proceedings of this Meeting of the Board of Directors held on
September 19, 2012, is attested to and signed by me below.</SPAN></P>
<P LANG="en-US" STYLE="margin-left: 6.89cm; text-indent: 1.27cm"><U>/s/Janet Campbell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </U>
</P>
<P LANG="en-US" STYLE="margin-left: 6.89cm; text-indent: 1.27cm"><U>Secretary of Meeting </U>
</P>
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