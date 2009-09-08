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
	    <h3>May 20, 2009</h3>

	   <P ALIGN=CENTER><SPAN LANG="en-US">_________________________________________________________________________</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">A
Meeting of the Board of Directors (the &ldquo;<I><B>Board</B></I>&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;<I><B>Corporation&rdquo;</B></I>), was held on held on May 20,
2009 via teleconference.&nbsp; &nbsp;This meeting was held as a
regular monthly conference call.</SPAN></P>
<P><SPAN LANG="en-US">Present at the meeting were the following
Directors:</SPAN></P>
<TABLE WIDTH=625 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Present?</B></P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Rich Bartlett</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Boris Bokowski</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans-Joachim
			Brede</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Member Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans-Christian
			Brockmann</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">brox
			IT-Solutions GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dino Brusco</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Motorola</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Actuate
			Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark de Visser</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sonatype</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Doug Gaff</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans Kamutzki</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Member Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Kellerman</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Stephane
			Lacrampe</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OBEO</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Lipton</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">CA Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wolfgang
			Neuhaus</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Shawn Pearce</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Member Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Member Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=171>
			<P LANG="en-US" STYLE="margin-left: 1.27cm; text-indent: -1.27cm; border: none; padding: 0cm">
			Yes</P>
		</TD>
		<TD WIDTH=241>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Todd Williams</P>
		</TD>
		<TD WIDTH=213>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Genuitec, LLC</P>
		</TD>
	</TR>
</TABLE>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director and Janet Campbell, Secretary of
Eclipse.org Foundation, Inc.</SPAN></P>
<P STYLE="margin-top: 0.42cm; page-break-after: avoid"><SPAN LANG="en-US"><U><B>Adoption
of Management Recommendations</B></U></SPAN> 
</P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
There was unanimous consent to approve the following Resolutions:</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that there was unanimous consent to approve the full and abridged
minutes of the April 15, 2008 Board meeting.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
<SPAN LANG="en-US"><B>RESOLVED, </B></SPAN><SPAN LANG="en-US">that
there was unanimous consent to approve the final audited financial
statements for 2008.</SPAN></P>
<P LANG="en-US" STYLE="margin-top: 0.42cm; page-break-after: avoid"><U><B>Other
Business</B></U></P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
<SPAN LANG="en-US"><U>JGit Licensing</U></SPAN><SPAN LANG="en-US">.&nbsp;
&nbsp;Mike Milinkovich asked Shawn Pearce to introduce the topic of
JGit licensing and in particular the possibility of the JGit project
adopting the EDL as JGit&rsquo;s Project License rather than the
EPL.&nbsp;&nbsp; Shawn provided an overview of the proposal.&nbsp;
Mike Milinkovich asked if it would be a hardship to the Project to
consider dual licensing the Project under the EPL and EDL as dual
licensing was more consistent with the approach taken in similar
circumstances in the past.&nbsp; Shawn responded that he would like
to better understand the implications of doing so and it was
suggested that Shawn and Janet Campbell discuss further following the
Board meeting.&nbsp; &nbsp;It was decided that this topic would be
voted on at the next Board meeting in June.</SPAN></P>
<P STYLE="margin-top: 0.42cm; page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><U>Strategy Committee</U></SPAN><SPAN LANG="en-US">.&nbsp;
Mike Milinkovich indicated IBM had proposed that Carl Zetie sit on
the Strategy Committee on behalf of IBM.&nbsp; Mike favoured the
appointment and said that we would be conducting an electronic vote
to propose that John Kellerman be appointed to the Strategy Committee
with Karl Zettie sitting as his representative.</SPAN></P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
<SPAN LANG="en-US"><U>Key Performance Indicators</U></SPAN><SPAN LANG="en-US">.&nbsp;
Mike Milinkovich introduced the key performance indicators.&nbsp;
Mike indicated that generally things were tracking as expected.</SPAN></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">There being no additional business to tend to,
Mike Milinkovich declared the meeting adjourned. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on May 20, 2009, is attested to and
signed by me below.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><U>/s/ Janet Campbell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</U></SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Secretary of Meeting</SPAN></P>
<P ALIGN=CENTER><BR><BR>
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