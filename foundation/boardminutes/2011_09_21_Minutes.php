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
	    <h3>September 21, 2011</h3>

<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US"><br/>A Meeting of the
Board of Directors (the &ldquo;</SPAN><SPAN LANG="en-US"><I><B>Board</B></I></SPAN><SPAN LANG="en-US">&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Corporation&rdquo;</B></I></SPAN><SPAN LANG="en-US">),
was held at 11am EST on September 21, 2011 as a regularly scheduled
teleconference call. </SPAN>
</P>
<TABLE WIDTH=632 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=144>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Attending?</FONT></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Director</FONT></P>
		</TD>
		<TD WIDTH=247>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Company</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Chris
			Aniszczyk</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Committer Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Michael
			Bechauf</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">SAP
			AG</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Boris
			Bokowski</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Committer Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Cedric
			Carbone</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Talend</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Eric
			Clayberg</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Sustaining Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Paul
			Clenahan</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Actuate
			Corporation</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Etienne
			Juliot</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">OBEO</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Hans
			Kamutzki</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Sustaining Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Pat
			Huff for John Kellerman</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">IBM</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Mik
			Kersten</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Sustaining Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Jochen
			Krause</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Innoopract
			GmbH</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Dennis
			Leung</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Oracle</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Paul
			Lipton</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">CA
			Technologies</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Achim
			Loerke</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">BREDEX
			GmbH</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Ed
			Merks</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Elected
			Committer Representative</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Wolfgang
			Neuhaus</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">itemis
			AG</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Jason
			Van Zyl</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Sonatype</FONT></P>
		</TD>
	</TR>
</TABLE>
<P STYLE="text-indent: 1.27cm">&nbsp;</P>
<P LANG="en-US" STYLE="text-indent: 1.27cm">Present at the invitation
of the Board was Mike Milinkovich, Executive Director and Janet
Campbell, Secretary of Eclipse.org Foundation, Inc.</P>
<P STYLE="margin-top: 0.42cm; page-break-after: avoid"><SPAN LANG="en-US"><U><B>General
Business</B></U></SPAN> 
</P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm">
Mike Milinkovich introduced two resolutions to approve new PMC
Leaders.&nbsp; Following discussion, the following two resolutions
were unanimously passed:</P>
<P STYLE="margin-left: 1.27cm; margin-top: 0.42cm; margin-bottom: 0cm">
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, Chuck
Bridgham is approved as the new leader of the Web Tools Platform PMC.</SPAN></P>
<P STYLE="margin-left: 1.27cm; margin-top: 0.42cm; margin-bottom: 0cm">
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, Tom
Watson and Christian Campo are approved as the new co-leaders of the
EclipseRT PMC.</SPAN></P>
<P LANG="en-US" STYLE="text-indent: 1.27cm; margin-top: 0.42cm">Mike
Milinkovich proposed that Mik Kersten be appointed to the IP Advisory
Committee.&nbsp; The following resolution was unanimously passed:</P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm">
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, Mik
Kersten is appointed to the IP Advisory Committee.</SPAN></P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm">
Mike Milinkovich introduced the minutes from the July 2011 Board
meeting, attached hereto as <a href="2011_07_20_Minutes.php">Exhibit A</a> and asked for any corrections
and/or comments.&nbsp; With Boris Bokowski abstaining, the following
resolution was passed:</P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
there was unanimous consent to approve the minutes of the July 2011
Board Meeting.&nbsp; </SPAN>
</P>
<P LANG="en-US"><U><B>Program Plan</B></U></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
reviewed the Program Plan with the Board.&nbsp; Mike indicated that
the staff and management of the Foundation wanted a shorter list of
priorities to focus on this year.&nbsp; Dennis Leung asked the status
of OPEES and the number of Members that would be required for the
program to break even.&nbsp; Mike indicated that 20 Members was the
goal, though the Foundation did not expect as many as that at
launch.&nbsp;&nbsp; Pat Huff asked about the specific goals for build
infrastructure.&nbsp; Mike indicated that the goal for the first half
of 2012 is to get it up and running.&nbsp; Pat Huff also asked about
Long Term Support and if there was a target was for signing people
up.&nbsp; Mike indicated that there was, though his expectation on
this call was to agree on the list of priorities and move to greater
detail in follow on Board meetings.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">There was consensus
at the Board that the list of objectives presented was the right
list.&nbsp; Mike indicated that he would now look at success measures
for those items, getting into the next level of detail.&nbsp; </SPAN>
</P>
<P LANG="en-US" STYLE="text-indent: 1.27cm">Boris Bokowski indicated
that he would like to see additional feedback on the monetization of
IPZilla.&nbsp; Mike Milinkovich indicated that there were companies
that would like to be fed the data on what we&rsquo;ve reviewed and
approved and that we would sell that data and provide ongoing access
to it.&nbsp; Mike further indicated that the Foundation was also
thinking about creating a certification mark for projects to
advertise that their content has been reviewed and approved by
Eclipse.&nbsp; 
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm">&nbsp;</P>
<P LANG="en-US" STYLE="page-break-after: avoid"><U><B>Implementing
the IP Policy Document</B></U></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; page-break-after: avoid">
<SPAN LANG="en-US">Mike Milinkovich introduced proposed changes to
the Implementing the IP Policy document as reviewed and approved by
the IP Advisory Committee, and attached hereto as <a href="2011_09_exhibits/ExhibitC.pdf">Exhibit C</a>.&nbsp;
Mike indicated that the changes were designed to provide a mechanism
for the Board to consider approving licenses which would not
typically be approved in situations where the Eclipse Foundation&rsquo;s
normal view on licensing matters would seriously impede a Project.&nbsp;
</SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; page-break-after: avoid">
<SPAN LANG="en-US">The concrete example that was the impetus to
consider such a mechanism was WebKit.&nbsp; WebKit has LGPL licenses
associated with it and is a key piece of software in the mobile
space.&nbsp; Mike further indicated that the Policy did not in any
way change the provisions in the Bylaws that require a unanimous vote
of the Board of Directors to approve a distribution license at
Eclipse.&nbsp; The following resolution was unanimously passed:</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; page-break-after: avoid">
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Implementing the IP Policy Document as amended and circulated to the
Board is approved.</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike
Milinkovich declared the meeting adjourned at approximately 11:41 pm
EST. </SPAN>&nbsp;</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN>&nbsp;</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on September 21, 2011, is attested to
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