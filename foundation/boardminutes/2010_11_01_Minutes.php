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
	    <h3>November 1, 2010</h3>

<br/><P><SPAN LANG="en-US">A Meeting of the Board of Directors (the
&ldquo;<I><B>Board</B></I>&rdquo;) of Eclipse.org Foundation, Inc., a
Delaware corporation (the &ldquo;<I><B>Corporation&rdquo;</B></I>),
was held on held at 9:00 am CET on November 1, 2010 in Ludwigsburg,
Germany co-located with Eclipse Summit Europe 2010. </SPAN>
</P>
<P><SPAN LANG="en-US">Present at the meeting were the following
Directors:</SPAN></P>
<TABLE WIDTH=619 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><B>Present?</B></FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><B>Director</B></FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000"><B>Organization</B></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Chris
			Aniszczyk</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Committer Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Rich
			Bartlett</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Nokia</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Michael
			Bechauf</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">SAP
			AG</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Boris
			Bokowski</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Committer Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Hans-Christian
			Brockmann</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">brox
			IT-Solutions GmbH</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Mark
			Coggins</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Actuate
			Corporation</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Ricco
			Deutscher</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">SOPERA
			GmbH</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Etienne
			Juliot</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">OBEO</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Hans
			Kamutzki</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Sustaining
			Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Pat
			Huff for John Kellerman</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">IBM</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Mik
			Kersten</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Sustaining
			Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Jochen
			Krause</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Innoopract</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Dennis
			Leung</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Oracle</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Adam
			Lieber</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Sustaining
			Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Paul
			Lipton</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">CA
			Inc.</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Ed
			Merks</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Committer Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Dr.
			Martin Mandischer for Wolfgang Neuhaus</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">itemis
			AG</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Henrik Lindberg
			for Mitch Sonies</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Cloudsmith
			Inc.</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Jason
			Van Zyl</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Sonatype</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Todd
			Williams</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Genuitec,
			LLC</FONT></P>
		</TD>
	</TR>
</TABLE>

<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, Chris Larocque, Treasurer and Janet
Campbell, Secretary, of Eclipse.org Foundation, Inc.&nbsp;</SPAN></P>
<P STYLE="page-break-after: avoid"><B><SPAN LANG="en-US"><U>General
Business:</U></SPAN></B></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U>Minutes:</U></SPAN>&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a discussion of the
Minutes of the October 20, 2010 Board meeting, attached hereto as
<A HREF="2010_11_exhibits/ExhibitB.pdf">Exhibit B</A>.&nbsp; There was
unanimous consent to approve the following resolution:</SPAN></P>
<P STYLE="text-indent: 1.27cm; page-break-after: avoid"><SPAN LANG="en-US"><B>RESOLVED,
</B></SPAN><SPAN LANG="en-US">that there was unanimous consent to
approve the full and abridged minutes of the October 20, 2010 Board
Meeting.</SPAN></P>
<P><SPAN LANG="en-US"><U>November 17, 2010 Conference Call:</U></SPAN>&nbsp;
<SPAN LANG="en-US">Mike Milinkovich proposed that the Board
conference call scheduled for November 17</SPAN><SUP><SPAN LANG="en-US">th</SPAN></SUP><SPAN LANG="en-US">
be canceled in light of the fact that there were no items currently
on the Agenda.&nbsp; There was unanimous consent to approve the
following resolution:</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
there was unanimous consent to cancel the November 17, 2010 Board
conference call.</SPAN></P>
<P><SPAN LANG="en-US"><U>2011 Board Meet Schedule:</U></SPAN>&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a discussion of
whether the Board should meet face-to-face three or four times in
2011.&nbsp; Following discussion it was agreed that the Board would
plan to meet face-to-face three times in 2011, but re-visit that
decision at the March 2011 Board meeting and discuss whether a fourth
meeting would be advisable.</SPAN></P>
<P><U><SPAN LANG="en-US"><B>TCK and Project COIN License:</B></SPAN></U></P>
<P><SPAN LANG="en-US">Mike Milinkovich indicated that no progress had
been made on these topics.&nbsp; He further indicated that he would
be visiting Oracle headquarters in two weeks and expected to have
some face to face meetings there that may give him an opportunity to
move the topics forward.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><B><U>Conference Update:</U></B></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an update on Eclipse
Summit Europe, the related slides for which are attached as <A HREF="2010_11_exhibits/ExhibitC.pdf">Exhibit
C</A>.&nbsp; Mike indicated that the Eclipse Foundation expected to
meet or exceed every numerical target for the conference.&nbsp;
Following discussion, the Board unanimously approved the following
resolution:</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Eclipse Foundation Board would like to recognize the efforts of Anne
Jacko and Ralph Mueller in creating what promises to be an excellent
Eclipse Summit Europe.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Management Reports &amp; Key Performance
Indicators:</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided a management update
and also reviewed the Key Performance Indicators with the Board.&nbsp;
Chris Larocque provided an Operations update.&nbsp;&nbsp; Chris
indicated that while our membership renewal rates have been
excellent, we have not seen the new members that we had hoped for.&nbsp;
He further indicated that foreign exchange continues to be a
significant factor from an expense standpoint.&nbsp;&nbsp; Chris
advised the Board that he anticipated that the Eclipse Foundation
would end the year with cash levels that had been budgeted for.&nbsp;
&nbsp;&nbsp;Looking out to 2011 Chris advised that the current plan
is to continue with the status quo.&nbsp;&nbsp; Chris provided an
overview of alternative paths that have been considered in the event
that the Eclipse Foundation&rsquo;s financial status changes
adversely.&nbsp; &nbsp;&nbsp;Mike Milinkovich indicated that most of
the revenue issues relate to one of three areas:&nbsp; (1) foreign
exchange; (2) the number of Strategic Members; and (3) new Membership
pipeline.&nbsp;&nbsp;&nbsp; A Director questioned whether the Eclipse
Foundation should call out aggressively companies who are building
products based on Eclipse and are not Members of the Eclipse
Foundation.&nbsp;&nbsp; The Board also discussed the possibility of
requiring Membership in order to start a Project at Eclipse.&nbsp;
Following discussion, the Board unanimously approved the following
resolutions:</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Executive Director is instructed to take into consideration the
membership status of those companies proposing new Projects at
Eclipse and has the authority to decline those proposals for which
insufficient membership support is available.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the EMO
is directed to provide proposals to the Board to dramatically
increase the barriers to access of Eclipse technologies to
non-Members or other proposals designed to incent companies who are
building products based on Eclipse to become Members of the Eclipse
Foundation at an appropriate level.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Working Groups:</B></U></SPAN></P>
<P><SPAN LANG="en-US">Ralph Mueller provided an update on the
Automotive Working Group, the related slides for which are attached
as <A HREF="2010_11_exhibits/ExhibitG.pdf">Exhibit G</A>.&nbsp; Ian Skerrett
provided an update on the Modeling Platform Working Group, the
related slides for which are attached as <A HREF="2010_11_exhibits/ExhibitH.pdf">Exhibit
H</A>.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>New Business Opportunities:</B></U></SPAN></P>
<P><SPAN LANG="en-US">Ian Skerrett presented new business
opportunities to the Board, the related presentation material for
which is attached as Exhibit I.&nbsp; Following discussion, the Board
unanimously approved the following resolution:</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Board instructs the EMO to proceed with implementing the proposals
outlined in the new business opportunities presentation.</SPAN></P>
<P><B><U><SPAN LANG="en-US">Web Strategy:</SPAN></U></B></P>
<P><SPAN LANG="en-US">Pat Huff provided an update on the web strategy
discussion within IBM.&nbsp; Pat indicated that the web strategy
proposals are continuing to go through a fairly extensive approval
process.&nbsp; Pat indicated that IBM remains committed to the
initiative but there are still some pieces of the strategy that
needed to be determined.</SPAN></P>
<P><B><SPAN LANG="en-US"><U>Program Plan:</U></SPAN></B></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an update on the 2011
Program Plan.</SPAN></P>
<P><B><SPAN LANG="en-US"><U>Implementing the IP Policy:</U></SPAN></B></P>
<P><SPAN LANG="en-US">Mike Milinkovich introduced proposed changes to
the Implementing the IP Policy document to provide a mechanism to
approve the distribution of third party packages where the provenance
of the code cannot be clarified.&nbsp;&nbsp; It was discussed and
agreed that a keyword would be added to the database record of any
package approved under such a Policy.&nbsp; Following discussion it
was agreed to postpone voting on this document until the December
Board meeting to give Board Members additional time to consider the
document.&nbsp; </SPAN>
</P>
<P><B><SPAN LANG="en-US"><U>Long Term Support:</U></SPAN></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich provided an update on the Long
Term Support Program, the related slides for which are attached as
<A HREF="2010_11_exhibits/ExhibitK.pdf">Exhibit K</A>.&nbsp;&nbsp; Mike
encouraged the Board to let him know if they knew of any companies
that would be interested in the program, indicating that it would be
preferable to work closely with such companies to work through real
issues.&nbsp; </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on November 1th, 2010, is attested to
and signed by me below.</SPAN></P>
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