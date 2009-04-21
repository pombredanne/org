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
	    <h3>February 18, 2009</h3>

	    <P LANG="en-US" ALIGN=CENTER>_________________________________________________________________________</P>
<P ALIGN=CENTER>&nbsp;</P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US">A Meeting of the Board of
Directors (the &ldquo;<I><B>Board</B></I>&rdquo;) of Eclipse.org
Foundation, Inc., a Delaware corporation (the &ldquo;<I><B>Corporation&rdquo;</B></I>),
was held on held at 11:00am Eastern time on February 18, 2009 as a
regularly scheduled monthly teleconference.</SPAN></P>
<P><SPAN LANG="en-US">Present on the teleconference were the
following Directors:</SPAN></P>
<TABLE WIDTH=637 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Attending</B></P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Company</B></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Rich Bartlett</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans-Christian
			Brockmann</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">brox
			IT-Solutions GmbH</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dino Brusco</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Motorola</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Actuate
			Corporation</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Robert Day</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark de Visser</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sonatype</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Doug Gaff</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Andi Gutmans</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Zend
			Technologies</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Kellerman</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mik Kersten</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Stephane
			Lacrampe</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OBEO</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Lipton</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">CA Inc.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Maher Masri</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Genuitec, LLC</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Emma McGrattan</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wolfgang
			Neuhaus</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Tracy Ragan</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=78 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=233 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Todd E.
			Williams</P>
		</TD>
		<TD WIDTH=325 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
</TABLE>
<P>&nbsp;</P>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director and Janet Campbell, Secretary of
Eclipse.org Foundation, Inc.</SPAN></P>
<P ALIGN=JUSTIFY><B><U><SPAN LANG="en-US">Minutes</SPAN></U></B></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US">Mike Milinkovich introduced the
full and abridged <a href="2009_01_21_Minutes.php">minutes</a> for the Board meetings of January 21,
2009.&nbsp; The Board passed the following resolution unanimously:</SPAN></P>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
the minutes and abridged minutes for the Board meeting of January 21
2009 are approved.</SPAN></P>
<P><U><B><SPAN LANG="en-US">EclipseCon Update</SPAN></B></U></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich</SPAN>
<SPAN LANG="en-US">asked all Board Members to do what they can to
sponsor EclipseCon, send people to the conference and encourage
others to go.&nbsp; Mike further indicated that the content at this
year&rsquo;s EclipseCon is one of the best we&rsquo;ve ever had.&nbsp;&nbsp;
Mike took the action item to circulate to Board Members the banners
for EclipseCon for their use in advertising the conference.&nbsp;&nbsp;
The Board discussed the possibility that the number of attendees
might be lower than previous years and what message, if any would be
conveyed if this were to occur.&nbsp; It was determined that any such
message would be discussed at the March Board meeting once the final
numbers were in.&nbsp; It was suggested that at the June Board
Meeting, the Board should discuss EclipseCon and Eclipse Summit
Europe from a strategic and structural perspective to determine how
we mitigate risk in this economic climate.</SPAN></P>
<P LANG="en-US"><U><B>Membership Survey</B></U></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US">Donald Smith provided an overview
of the results of the Membership survey.&nbsp; We now have three
years of data using this survey.&nbsp; </SPAN>
</P>
<P><U><B><SPAN LANG="en-US">Review of Key Performance Indicators</SPAN></B></U></P>
<P><SPAN LANG="en-US">Mike Milinkovich</SPAN> provided an overview of<SPAN LANG="en-US">
the Key Performance Indicators</SPAN></P>
<P LANG="en-US"><U><B>Other</B></U></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US">Mike Milinkovich confirmed that
the following two resolutions had been passed electronically in the
past month:</SPAN></P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that Mark Coggins is appointed Chair of the Finance Committee.</SPAN></P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that Mike Wilson is appointed Eclipse PMC Lead.</SPAN></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US">Mike Milinkovich declared the
meeting adjourned at approximately 11:45 Eastern time. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on February 18, 2009, is attested to
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