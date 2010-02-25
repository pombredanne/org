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
	    <h3>September 16, 2009</h3>

	    <P LANG="en-US" ALIGN=CENTER>_________________________________________________________________________</P>
<P ALIGN=CENTER>&nbsp;</P>
<P><SPAN LANG="en-US">A Meeting of the Board of Directors (the
&ldquo;<I><B>Board</B></I>&rdquo;) of Eclipse.org Foundation, Inc., a
Delaware corporation (the &ldquo;<I><B>Corporation&rdquo;</B></I>),
was held on held at 8:30am Eastern time at the Hotel Marlowe,
Cambridge, Massachusetts on September 16, 2009 as a regularly
scheduled quarterly face-to-face meeting. </SPAN>
</P>
<P><SPAN LANG="en-US">Present at the meeting were the following
Directors:</SPAN></P>
<TABLE WIDTH=625 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD WIDTH=91 VALIGN=BOTTOM>
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
		<TD WIDTH=91 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
		<TD WIDTH=91 VALIGN=BOTTOM>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=319 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Actuate
			Corporation</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=91 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
<P>&nbsp;</P>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, Janet Campbell, Secretary, and Chris
Larocque, Treasurer of Eclipse.org Foundation, Inc.</SPAN></P>
<P><B><U><SPAN LANG="en-US">General Business:</SPAN></U></B></P>
<P><SPAN LANG="en-US"><U>Management Reports and Key Performance
Indicators (KPIs)</U></SPAN><SPAN LANG="en-US">:&nbsp;&nbsp; Mike
Milinkovich presented an update on:&nbsp; (a) Eclipse Summit Europe
2009 (<a href="2009_09_exhibits/ExhibitA.pdf">Exhibit A</a>); (b) Marketing (<a href="2009_09_exhibits/ExhibitB.pdf">Exhibit B</a>); 
Membership (<a href="2009_09_exhibits/ExhibitC.pdf">Exhibit C</a>);
and the Projects (<a href="2009_09_exhibits/ExhibitD.pdf">Exhibit D</a>).&nbsp;&nbsp; With respect to the
Projects Mike Milinkovich advised that the Eclipse Foundation will
begin requiring Projects to submit a Project Plan as part of any
Project Review (other than a Creation or Termination Review There was
general consensus that this was an appropriate request of the
projects.&nbsp;&nbsp; &nbsp;&nbsp;</SPAN></P>
<P><SPAN LANG="en-US">Mike added that he felt that the roadmap
document would be more useful if it was focused on the following
year&rsquo;s release train; it would indicate to the ecosystem in
December what could be expected in the release train in June.&nbsp;&nbsp;
Mike asked for the feedback on the Board on this approach.&nbsp;
There was general agreement to have the Roadmap in January or
February following the regular release train cadence.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U>Minutes:</U></SPAN>&nbsp; <SPAN LANG="en-US">There
was unanimous consent to approve the following resolution:</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED, </B></SPAN><SPAN LANG="en-US">that
there was unanimous consent to approve the full and abridged minutes
of the August 19, 2009 Board Meeting, attached hereto as <a href="2009_09_exhibits/ExhibitH.pdf">Exhibit H</a>.&nbsp; &nbsp;Michael Bechauf and Doug Gaff
abstained from the vote as they had not attended the meeting.</SPAN></P>
<P><SPAN LANG="en-US"><U>Committee Appointments: </U></SPAN>&nbsp;<SPAN LANG="en-US">Mike
Milinkovich advised the Board that he wished to appoint Hans Kamutzki
to the Finance Committee and indicated that we would be conducting an
electronic vote of the Board to pursue ratification of the
appointment.</SPAN></P>
<P><SPAN LANG="en-US"><U>Ideas on Future Due Structure
Modifications:</U></SPAN>&nbsp;&nbsp; <SPAN LANG="en-US">Mike
Milinkovich presented some ideas for future dues structure
modifications.&nbsp; Following discussion, Mike Milinkovich concluded
that if the Eclipse Foundation was to adjust membership dues, it
would need to do it as part of a cohesive strategy that took into
consideration exit barriers.</SPAN></P>
<P><SPAN LANG="en-US"><U>JGit Discussion:&nbsp; </U></SPAN>&nbsp;&nbsp;<SPAN LANG="en-US">Mike
Milinkovich introduced the topic of JGit licensing and specifically
the desire of JGit to be hosted at Eclipse under the terms of the
<A HREF="http://www.eclipse.org/org/documents/edl-v10.php">Eclipse
Distribution License</A> (EDL), the supporting material for which is
attached as <a href="2009_09_exhibits/ExhibitJ.pdf">Exhibit J</a>.&nbsp; Mike proposed that JGit become a
subproject of EGit and further indicated that in order to be
successful, such a move must be supported by a unanimous vote of the
Board.&nbsp; Following the discussion, the following resolution was
unanimously passed:</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, there
was unanimous consent to have JGit hosted at Eclipse under the terms
of the <A HREF="http://www.eclipse.org/org/documents/edl-v10.php">Eclipse
Distribution License</A> alone.</SPAN></P>
<P><B><SPAN LANG="en-US"><U>2009 Year to Date Results and Forecast:&nbsp;
</U></SPAN>&nbsp;</B></P>
<P><SPAN LANG="en-US">Chris Larocque provided an update on the 2009
year to date results and forecast.Mike indicated that the expectation
is that the budget for next year be break even.&nbsp; This would be
discussed further at the December Board meeting.</SPAN></P>
<P><U><SPAN LANG="en-US"><B>Eclipse AppStore:</B></SPAN></U></P>
<P><FONT FACE="Times New Roman, serif"><SPAN LANG="en-US">Mike
Milinkovich introduced the topic of the Eclipse AppStore, the related
presentation material for which is attached as <a href="2009_09_exhibits/ExhibitL.pdf">Exhibit L</a>.&nbsp; The
Board generally agreed with the recommendations of the Eclipse
Foundation, which was to develop a client application for the new
Eclipse Marketplace and include it in package downloads.&nbsp; This
client application would not allow people to buy things directly but
would refer individuals to vendor (member) sites.&nbsp;&nbsp; Based
on the success of this approach, the Eclipse Foundation could later
consider whether to add a commerce component.&nbsp;&nbsp; </SPAN></FONT>
</P>
<P><U><SPAN LANG="en-US"><B>Strategy and Program Plan:</B></SPAN></U></P>
<P><SPAN LANG="en-US">Mike Milinkovich reviewed the Strategy and
Program Plan.</SPAN></P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">There being
no additional business to attend to, Mike Milinkovich thanked all
Board Members and declared the meeting adjourned at approximately
3:44 Eastern Time. 
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on September 16th, 2009, is attested
to and signed by me below.</SPAN></P>
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