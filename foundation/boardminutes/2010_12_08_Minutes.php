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
	    <h3>December 8, 2010</h3>

<br/><P LANG="en-US">A Meeting of the Board of Directors (the &ldquo;<I><B>Board</B></I>&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;<I><B>Corporation&rdquo;</B></I>), was held on held at 11:00
am Eastern time on December 8, 2010 as a regularly scheduled
teleconference. 
</P>
<P LANG="en-US">Present on the teleconference were the following
Directors:</P>
<TABLE WIDTH=619 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Present</B></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Y</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Y</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Y</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Y</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Y</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">N</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Y</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Y</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Hans
			Kamutzki</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Sustaining Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Y</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Y</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Mik
			Kersten</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Sustaining Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">N</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Y</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Doug
			Clarke for Dennis Leung</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Oracle</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Y</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Adam
			Lieber</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Sustaining Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">N
			</FONT>
			</P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Paul
			Lipton</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">CA
			Technologies</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Y</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">N</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">N</FONT></P>
		</TD>
		<TD WIDTH=230 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Hendrick
			for Mitch Sonies</FONT></P>
		</TD>
		<TD WIDTH=300 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Cloudsmith
			Inc.</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">N</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Y</FONT></P>
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

<P LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, and Janet Campbell, Secretary, of
Eclipse.org Foundation, Inc.&nbsp; &nbsp;</P>
<P LANG="en-US" STYLE="page-break-after: avoid"><U><B>General
Business:</B></U></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U>Minutes:</U></SPAN>&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a discussion of the
the Minutes of the November 1, 2010 Board meeting, attached hereto as
<A HREF="2010_11_01_Minutes.php">Exhibit A</A>.&nbsp; There was
unanimous consent to approve the following resolution:</SPAN></P>
<P STYLE="text-indent: 1.27cm; page-break-after: avoid"><SPAN LANG="en-US"><B>RESOLVED,
</B></SPAN><SPAN LANG="en-US">that there was unanimous consent to
approve the minutes of the November 1, 2010 Board Meeting.</SPAN></P>
<P><SPAN LANG="en-US"><U>2011 Members Meeting:</U></SPAN>&nbsp; <SPAN LANG="en-US">Mike
Milinkovich introduced a motion to have the March 2011 members
meeting at EclipseCon as our Annual General Meeting of the Membership
pursuant to Section 6.7 of the <A HREF="../../documents/Eclipse%20BYLAWS%202008_07_24%20Final.pdf">Eclipse
Foundation Bylaws</A>.&nbsp; There was unanimous consent to approve
the following resolution:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that the Board approved the recommendation of the EMO to have the
annual membership meeting on March 21, 2011 at EclipseCon 2011, in
Santa Clara, California.&nbsp;&nbsp;&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U>Re-appointment of Eclipse Foundation
Officers</U></SPAN><SPAN LANG="en-US">:&nbsp; Mike Milinkovich
introduced a series of motions to re-appoint the Eclipse Foundation
Officers pursuant to Section 5.2 of the <A HREF="../../documents/Eclipse%20BYLAWS%202008_07_24%20Final.pdf">Eclipse
Foundation Bylaws</A>.&nbsp; There was unanimous consent to approve
the following resolutions:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
the Board approved the re-appointment of Mike Milinkovich as
Executive Director of the Eclipse Foundation.</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
the Board approved the re-appointment of Janet Campbell as Secretary
of the Eclipse Foundation.</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
the Board approved the re-appointment Chris Larocque as Treasurer of
the Eclipse Foundation.</SPAN></P>
<P><U><B>Program Plan and Budget:</B></U></P>
<P>Chris Larocque led a discussion of the Eclipse Foundation&rsquo;s
Program Plan and Budget.&nbsp; Chris indicated that everything was
included in the Program Plan with the exception of Long Term
Support.&nbsp; Following discussion, there was unanimous consent to
approve the following resolution:</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, that the Board approved the Budget as presented.&nbsp;
</P>
<P><U><B>Implementing the IP Policy Document:</B></U></P>
<P>Janet Campbell led a discussion on a revision to the Implementing
the IP Policy document. Following discussion, there was unanimous
consent, with Paul Lipton abstaining, to approve the following
resolution:</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, that the Board approves the revision to the
Implementing the IP Policy document as circulated to the Board. 
</P>
<P LANG="en-US"><U><B>EclipseCon and ESE Update: </B></U>
</P>
<P LANG="en-US">Mike Milinkovich provided an update on EclipseCon and
Eclipse Summit Europe, the related slides for which are attached as
<A HREF="2010_12_exhibits/ExhibitF.pdf">Exhibit F</A>.&nbsp; 
</P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">There being no additional business to attend to,
Mike Milinkovich thanked all Board Members and declared the meeting
adjourned at approximately 12:00 Eastern time. </SPAN>
</P>
<P LANG="en-US" ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">This being
a true and accurate record of the proceedings of this Meeting of the
Board of Directors held on December 8th, 2010, is attested to and
signed by me below.</P>
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