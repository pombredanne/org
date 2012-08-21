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
	    <h3>February 15, 2012</h3>

<P><SPAN LANG="en-US">A Meeting of the Board of Directors (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Board</B></I></SPAN><SPAN LANG="en-US">&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Corporation&rdquo;</B></I></SPAN><SPAN LANG="en-US">),
was held on held at 11:00 am Eastern time on February 15, 2012 as a
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">N</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Boris Bokowski</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">N</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Kellerman</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Doug Clarke for
			Dennis Leung</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">N</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wolfgang
			Neuhaus</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jason Van Zyl</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sonatype</P>
		</TD>
	</TR>
</TABLE>
<P>&nbsp;</P>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, and Janet Campbell, Secretary, of
Eclipse.org Foundation, Inc.&nbsp; &nbsp;</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Minutes</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced the minutes for the
Board meetings of January 18, 2012, a copy of which is attached
hereto as <a href="2012_01_18_Minutes.php">Exhibit A</a>.&nbsp; The Board passed the following resolution
unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
minutes and abridged minutes for the Board meeting of January 18,
2012 are approved.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>IP Advisory Committee Charter</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a revised version of
the IP Advisory Committee Charter, updated to reflect changes to the
Bylaws, a copy of which is attached as <a href="2012_02_exhibits/ExhibitC.pdf">Exhibit C</a>.&nbsp;&nbsp; The
Board passed the following resolution unanimously:</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
revised IP Advisory Committee Charter is approved.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Approved License for Non-Code, Example,
and Other Content</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a discussion of
proposed changes to the license that are approved for use with
Non-Code and Example Content, a copy of which is attached as 
<a href="2012_02_exhibits/ExhibitD.pdf">Exhibit D</a>.
&nbsp; &nbsp;The Board passed the following resolution unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
proposed revisions to the licenses approved for Non-Code, Example,
and Other Content are approved.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Participation Agreements</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a discussion of the
Polarsys Participation Agreement attached as <a href="2012_02_exhibits/ExhibitE.pdf">Exhibit E</a>.&nbsp; In so
doing, Mike indicated that there had been an interest at the Board to
have a look at such Agreements.&nbsp; Mike in particular drew the
Board&rsquo;s attention the dues section highlighting a sliding scale
of Member dues for both Steering Committee and Participating
Members.&nbsp; Jochen Krause asked who controlled the money.&nbsp;
Mike responded that the funds would go to the Eclipse Foundation,
noting that the Eclipse Foundation would be providing additional
services beyond what was typical and that these funds were intended
to compensate the Foundation for that work.&nbsp; John Kellerman
asked if the participating companies were fine with the funds
presented in the Agreements.&nbsp; Mike indicated that they were and
that the amounts had been circulated at the time that OPEES voted
overwhelmingly to move to the Polarsys Industry Working Group
structure.&nbsp; Mike indicated that the next step was to start the
Industry Working Group and get going.&nbsp; &nbsp;</SPAN></P>
<P><SPAN LANG="en-US">Boris Bokowski highlighted that it appeared in
the document as though parallel bodies were being created,
particularly with respect to the Charter.&nbsp; Mike Milinkovich
responded that strictly speaking the Charter is approved by the
Executive Director.&nbsp; Boris asked how much control the Eclipse
Board would have.&nbsp; Mike commented that he would be happy to get
some feedback with respect to the Charter, though beyond that, he
expected the Board to have little say in Polarsys itself.</SPAN></P>
<P><SPAN LANG="en-US">Paul Lipton commented that he found the
relationship between the Industry Working Group (IWG) and the
organization as a whole interesting.&nbsp;&nbsp;&nbsp; Paul indicated
that while the IWG might represent a desire to advance more industry
specific deliverables, in no way does that reduce the responsibility
of the Board to understand what the IWG is doing.&nbsp; The IWG is in
a sense leveraging the name and reputation of the Eclipse
Foundation.&nbsp; Paul indicated that it sounded as though some of
the responsibilities of the Board had been delegated to the Executive
Director.&nbsp; Mike Milinkovich responded that Charter documents and
the process by which they are established are transparent to
everyone, not only the Board via the public wiki.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Paul commented that he was thinking of the
future where there may be many consortiums and where these could grow
to a point where the consortiums are generating more revenue than the
organization itself.&nbsp; Paul questioned whether the Board had as
much control in the IWG context and if not, why. &nbsp;Mike
Milinkovich responded that the discussion that had been raised was
broader than Polarsys specifically and suggested that the Board as a
group revisit the IWG creation document to see whether the Board
wished to include additional controls.&nbsp; Paul Lipton suggested
adding the topic to the March Board meeting.&nbsp; Mike indicated
that he would set up a couple of meetings prior to the March meeting
to allow for additional discussion prior to the meeting, with the
expectation of a follow on discussion at the March meeting.&nbsp;
Paul commented that the nature of the discussion may very well to
educate the Board on the existing control points.&nbsp;&nbsp; Paul
further indicated that if at the end of the day the IWGs are
essentially the same as Eclipse Projects, just potentially bigger,
with added money attached, then perhaps there&rsquo;s no need for
concern at all.&nbsp; Boris Bokowski commented that the mere fact
that there is money attached to the creation of an IWG is sufficient
to have the conversation.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Juno Release Contents and Platform</B></U></SPAN></P>
<P><SPAN LANG="en-US">John Kellerman presented to the Board on Juno
release planning, indicating that with somewhat increased risk, the
Platform believes that they can deliver a Juno release of 4.2.&nbsp;
John further indicated that the team could use some help with testing
to accomplish that goal.&nbsp;&nbsp; John indicated that while end
user test is always appreciated, the Platform team is more interested
in understanding whether people&rsquo;s plug-ins work on 4.2 and if
they don&rsquo;t would appreciate receiving bug reports as soon as
possible.&nbsp; Mik indicated that it would be useful to get the
message out to the Architecture Council that the Platform was
planning on delivering a Juno release of 4.2.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">John also indicated that the Platform team
would like to have additional Committers join the team.&nbsp; Boris
Bokowski indicated that it would be important that any new Committer
to the Platform team have the backing of their management.&nbsp;&nbsp;&nbsp;
Mike further commented that time to call a crisis had come, noting
that everyone on the Board was on the Board because they have a
strong business and technical reliance on the Platform.&nbsp;&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">John Kellerman reminded the Board that in the
short term, help with plug-in testing was the most important
contribution that the Platform team could have.&nbsp; Following June,
the Board would need to look towards a sustainable staffing profile
for the Platform.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Mike Milinkovich declared the meeting adjourned
at approximately 11:58 Eastern time. </SPAN>
</P>
<P ALIGN=CENTER><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P><SPAN LANG="en-US">This being a true and accurate record of the
proceedings of this Meeting of the Board of Directors held on
February 15, 2012, is attested to and signed by me below.</SPAN></P>
<P LANG="en-US" STYLE="margin-left: 8.89cm; text-indent: 1.27cm"><U>/s/
Janet Campbell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </U>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Secretary of Meeting</SPAN></P>
<P ALIGN=RIGHT>&nbsp;</P>
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