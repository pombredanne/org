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
	    <h3>July 20, 2011</h3>

<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US"><br/>A Meeting of the
Board of Directors (the &ldquo;</SPAN><SPAN LANG="en-US"><I><B>Board</B></I></SPAN><SPAN LANG="en-US">&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Corporation&rdquo;</B></I></SPAN><SPAN LANG="en-US">),
was held at 11am EST on July 20, 2011 as a regularly scheduled
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
		</TD>
		<TD WIDTH=241 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Andreas
			Andersen</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Nokia</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Steve
			Francisco for John Kellerman</FONT></P>
		</TD>
		<TD WIDTH=247 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">IBM</FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=144 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Doug
			Clarke for Dennis Leung</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Yes</FONT></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">No</FONT></P>
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
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Present at the
invitation of the Board was Mike Milinkovich, Executive Director and
Janet Campbell, Secretary of Eclipse.org Foundation, Inc.</SPAN></P>
<P STYLE="margin-top: 0.42cm; page-break-after: avoid"><SPAN LANG="en-US"><U><B>General
Business</B></U></SPAN> 
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm"><SPAN LANG="en-US">Mike
Milinkovich introduced the minutes from the June 2011 Board meeting,
attached hereto as <a href="2011_06_14-15_Minutes.php">Exhibit A</a> and asked for any corrections and/or
comments.&nbsp; With Michael Bechauf, Paul Clenahan, Achim Loerke,
and Steve Francisco abstaining, the following resolution was passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
there was unanimous consent to approve full and abridged version of
the minutes as amended of the June 2011 Board Meeting.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
reviewed the Q2 Topics and Issues Report with the Board.&nbsp; &nbsp;&nbsp;Paul
Lipton indicated that he found the reports both very valuable and
helpful and thanked Mike for continuing to prepare them for the
Board.</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
indicated that he would like to propose that the August Board meeting
be cancelled in light of the light Agenda and vacation season.&nbsp;&nbsp;&nbsp;
Following brief discussion, it was agreed that the August Board
Meeting call would be cancelled.</SPAN></P>
<P LANG="en-US"><U><B>Long Term Support</B></U></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
introduced the topic of Long Term Support.&nbsp;&nbsp; Mike indicated
that a meeting had been hosted by SAP regarding Long Term Support and
that the meeting had been attended by a number of companies including
SAP, IBM, itemis, Eclipse Source, OBEO, Bosch, Ericsson, Sonatype,
&nbsp;Atos, MSG, and others.&nbsp; Mike indicated that the
conversation went extremely well and that the Eclipse Foundation had
received verbal agreements from SAP and Bosch to support this
initiative.&nbsp; Mike further indicated that the Foundation hoped to
be launching this initiative in late Q4 of 2011 which was roughly on
the same timeline as OPEES.&nbsp; Paul Lipton indicated an interest
in seeing any written material created in relation to the Long Term
Support Program. </SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike
Milinkovich declared the meeting adjourned at approximately 11:25 pm
EST. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN>&nbsp;</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on July 20, 2011, is attested to and
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