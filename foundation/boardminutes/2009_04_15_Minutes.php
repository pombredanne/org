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
	    <h3>April 15, 2009</h3>

	    <P LANG="en-US" ALIGN=CENTER>_________________________________________________________________________</P>
<P ALIGN=CENTER>&nbsp;</P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">A Meeting
of the Board of Directors (the &ldquo;<I><B>Board</B></I>&rdquo;) of
Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;<I><B>Corporation&rdquo;</B></I>), was held on held on April
15, 2009 via teleconference.&nbsp; &nbsp;This meeting was held as a
regular monthly conference call.</P>
<P ALIGN=JUSTIFY><BR><BR>
</P>
<P><SPAN LANG="en-US">Present at the meeting were the following
Directors:</SPAN></P>
<TABLE WIDTH=625 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Present</B></P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Rich Bartlett</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Boris Bokowski</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans-Joachim
			Brede</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans-Christian
			Brockmann</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">brox
			IT-Solutions GmbH</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dino Brusco</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Motorola</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Actuate
			Corporation</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark de Visser</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sonatype</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Doug Gaff</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans Kamutzki</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Kellerman</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Stephane
			Lacrampe</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OBEO</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Lipton</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">CA Inc.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wolfgang
			Neuhaus</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Shawn Pearce</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=215 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Todd Williams</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Genuitec, LLC</P>
		</TD>
	</TR>
</TABLE>
<P ALIGN=CENTER>&nbsp;</P>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director and Janet Campbell, Secretary of
Eclipse.org Foundation, Inc.</SPAN></P>
<P STYLE="margin-top: 0.42cm; page-break-after: avoid"><SPAN LANG="en-US"><U><B>Adoption
of Management Recommendations</B></U></SPAN> 
</P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
There was unanimous consent to approve the following Resolutions:</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that there was unanimous consent to approve the minutes of the March
23rd, 2009 Board meeting, attached hereto as <a href="2009_03_23_Minutes.php">Exhibit A</a>.&nbsp; &nbsp;Ed
Merks and Boris Bokowski abstained from the vote.</SPAN></P>
<P LANG="en-US" STYLE="margin-top: 0.42cm; page-break-after: avoid"><U><B>Other
Business</B></U></P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
<SPAN LANG="en-US"><U>Key Performance Indicators (KPIs)</U></SPAN><SPAN LANG="en-US">.&nbsp;
&nbsp;Mike Milinkovich reviewed the KPIs for the Eclipse Foundation
with the Board.&nbsp; Mike noted that the value of Working Groups was
beginning to be seen in that RIM had recently joined the Foundation
as an Enterprise Member so that they could be on the Steering
Committee for Pulsar.&nbsp; Mike noted that we are using mirrors
almost entirely to ship Galileo which is resulting in a savings of
approximately $30K for the Foundation.&nbsp;&nbsp; Mike further
commented that the Foundation&rsquo;s membership is currently at 173
Members, thirteen of which are Strategic Developers and one Strategic
Consumer.&nbsp;&nbsp; Mike highlighted a growing IP contribution
backlog.&nbsp;&nbsp; Mike indicated that while the Foundation is
confident that we will get through the Galileo Release, if the
Foundation is unable to find a way to reduce the overall backlog, we
will need to examine other routes to solve the problem.&nbsp; &nbsp;Mike
further commented that the Foundation was maintaining a good cash
position.</SPAN></P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
<SPAN LANG="en-US"><U>Resignation.</U></SPAN>&nbsp; <SPAN LANG="en-US">Mike
Milinkovich advised the Board that Bjorn Freeman-Benson had tendered
his resignation, effective May 1, 2009.&nbsp; </SPAN></P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
<SPAN LANG="en-US"><U>CPL/EPL
Transition.</U></SPAN><SPAN LANG="en-US">&nbsp; Mike Milinkovich gave
the Board an update on the CPL/EPL transition.&nbsp; Mike indicated
that the process to have the EPL supersede the CPL is well underway.&nbsp;
He further indicated that announcement would be forthcoming over the
next few days.</SPAN></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">There being no additional business to tend to,
Mike Milinkovich declared the meeting adjourned. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm">&nbsp;</P>
<P LANG="en-US" ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm">&nbsp;</P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">This being
a true and accurate record of the proceedings of this Meeting of the
Board of Directors held on April 15, 2009, is attested to and signed
by me below.</P>
<P>&nbsp;</P>
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