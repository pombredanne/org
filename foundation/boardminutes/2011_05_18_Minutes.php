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
	    <h3>May 18, 2011</h3>

<br/><P ALIGN=JUSTIFY><SPAN LANG="en-US">A
Meeting of the Board of Directors (the &ldquo;</SPAN><SPAN LANG="en-US"><I><B>Board</B></I></SPAN><SPAN LANG="en-US">&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Corporation&rdquo;</B></I></SPAN><SPAN LANG="en-US">),
was held on held at 11:00am Eastern time on May 18, 2011 as a
regularly scheduled monthly teleconference.</SPAN></P>
<P><SPAN LANG="en-US">Present on the teleconference were the
following Directors:</SPAN></P>
<TABLE WIDTH=613 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=80>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Present?</B></P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=278>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">N</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Andreas
			Andersen</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Boris Bokowski</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">N</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Cedric Carbone</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Talend</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Eric Clayberg</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Sustaining Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Clenahan</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Actuate
			Corporation</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">N</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Etienne Juliot</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OBEO</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans Kamutzki</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Sustaining Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Kellerman</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mik Kersten</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Sustaining Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">N</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Innoopract GmbH</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Lipton</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">CA Technologies</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">N</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Achim Loerke</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">BREDEX GmbH</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wolfgang
			Neuhaus</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=80 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">N</P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jason Van Zyl</P>
		</TD>
		<TD WIDTH=278 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sonatype</P>
		</TD>
	</TR>
</TABLE>
<P><BR><BR>
</P>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, Chris Larocque, Treasurer, and Janet
Campbell, Secretary of Eclipse.org Foundation, Inc.</SPAN></P>
<P ALIGN=JUSTIFY STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>2010
Financial Statements</B></U></SPAN></P>
<P ALIGN=JUSTIFY STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Chris Larocque introduced a discussion on the
audited financial statements for December 31, 2010 year end as
reviewed and approved by the Finance Committee.&nbsp;&nbsp; The Board
unanimously passed the following resolution:</SPAN></P>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
audited financial statements for December 31, 2010 year end are
approved.</SPAN></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US"><U><B>TPTP PMC</B></U></SPAN></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Janet Campbell introduced the proposal to appoint
Wayne Beaton as the PMC lead for TPTP, indicating that this was an
interim appointment.&nbsp; The expectation is that in Q3 after we
ship Indigo, the Eclipse Foundation will either find another
community member to step forward to take this role, or the TPTP
top-level Project charter would be revoked and the still-active
sub-Projects moved to another Top Level Project.&nbsp; The Board
unanimously passed the following resolution:</SPAN></P>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, Wayne
Beaton is appointed PMC Lead for TPTP.</SPAN></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US"><U><B>Strategy Committee</B></U></SPAN></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Janet Campbell introduced the proposal to disband
the Strategy Committee.&nbsp; The Board unanimously passed the
following resolution:</SPAN></P>
<P STYLE="margin-left: 1.27cm; margin-bottom: 0.42cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, the Board approves the dissolution of the Strategy
Committee, previously created as an Ad Hoc Committee of the Board.</P>
<P ALIGN=JUSTIFY STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>Proposed
Changes to the Eclipse Foundation Bylaws</B></U></SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; page-break-after: avoid">
<SPAN LANG="en-US">Janet Campbell introduced a discussion of the
proposed changes to the Eclipse Foundation Bylaws, including any
changes resulting to the Eclipse Development Process or other
governance documents.&nbsp; The related materials are attached as
<A HREF="2011_05_exhibits/ExhibitB.pdf">Exhibit B</A>, <A HREF="2011_05_exhibits/ExhibitC.pdf">Exhibit C</A> 
and <A HREF="2011_05_exhibits/ExhibitD.pdf">Exhibit D</A>.&nbsp; Janet indicated that this agenda item was
included to permit discussion on the topic, but that a vote on the
changes would not be voted on until the June Board meeting.&nbsp;
Boris Bokowski commented that he had expected to see a redline copy
of changes to the Development Process as well.&nbsp; Mike Milinkovich
indicated that a redline copy of the document would be distributed to
the Board shortly after the meeting.&nbsp; Mike encouraged the Board
to review the material in some depth so that the Board would be in a
position to vote on the proposed changes at the upcoming June Board
meeting.</SPAN></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US"><U><B>New Proposal and Possible
Dual Licensing</B></U></SPAN></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Janet Campbell asked John Kellerman from IBM to
review with the Board IBM&rsquo;s proposal to bring a new Project to
Eclipse and dual license it under the Eclipse Public License and
Eclipse Distribution License.&nbsp;&nbsp; The related materials for
this discussion are attached as <A HREF="2011_05_exhibits/ExhibitE.pdf">Exhibit E</A> 
and <A HREF="2011_05_exhibits/ExhibitF.pdf">Exhibit F</A>.&nbsp; John indicated
that the tentatively named Lyo Project would be focused on providing
an SDK to enable adoption of Open Services for Lifecycle
Collaboration specifications.&nbsp;&nbsp; John indicated further that
due to the nature of the Project and its materials, dual licensing
would be required.&nbsp;&nbsp; Mike Milinkovich asked John to explain
the tie in to Eclipse, indicating that it sounded like an addition to
the Orion ecosystem.&nbsp; John indicated that the tie in is to Mylyn
and Orion but also a desire to have the benefit of Eclipse&rsquo;s
governance structure.&nbsp; Michael Bechauf asked if there were two
decisions for the Board.&nbsp; Mike Milinkovich indicated that there
would be an electronic vote of the Board held to approve the dual
licensing of the Project following the Board meeting, but that the
approval of the creation of the Project itself as a sub-Project was
within the Executive Director&rsquo;s scope of approval.</SPAN></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich declared the meeting adjourned at
approximately 11:53 Eastern time. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on May 18, 2011, is attested to and
signed by me below.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><U>/s/ Janet Campbell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</U></SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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