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
	    <h3>April 18, 2012</h3>

<P><SPAN LANG="en-US">A Meeting of the Board of Directors (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Board</B></I></SPAN><SPAN LANG="en-US">&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Corporation&rdquo;</B></I></SPAN><SPAN LANG="en-US">),
was held on held at 11:00 am Eastern time on April 18, 2012 as a
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Y</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Arthorne</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Cedric Carbone</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Talend</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">N</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Donald Smith
			for Dennis Leung</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">N</P>
		</TD>
		<TD WIDTH=230>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jason Van Zyl</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sonatype</P>
		</TD>
	</TR>
</TABLE>
<P><BR><BR>
</P>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, Chris Larocque, Treasurer, and Janet
Campbell, Secretary, of Eclipse.org Foundation, Inc.&nbsp; &nbsp;</SPAN></P>
<P><SPAN LANG="en-US"><U><B>2011 Financial Results</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Chris Larocque provided an overview of the 2011
year end results for the Eclipse Foundation.&nbsp; Chris indicated
that the results were as anticipated and near break even, with solid
conferences and some savings on the expense side.&nbsp;&nbsp; Chris
asked the Board Members who were on the Finance Committee if they had
anything to add.&nbsp; There were no further comments and the Board
passed the following resolution unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
audited financial statements for 2011 are approved.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>General Business:</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich commented that this Board
conference call would be the last on this conference system,
indicating that the Foundation had deployed an Asterisk-based
telephony system at Eclipse.&nbsp;&nbsp; Mike indicated that the
quality was as good as the system in use and significantly cheaper.
&nbsp;&nbsp;Mike added that Asterisk also has the benefit that it
supports SIP client to access it as well.</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
introduced a discussion of the minutes of Board of Director meetings,
commenting that the Foundation was now including more information on
the conversations that are happening in the Board meeting.&nbsp; He
asked if Board Members had any concerns with this approach.&nbsp;
John Arthorne asked if the abridged minutes were the version of the
minutes that was posted on eclipse.org.&nbsp;&nbsp; Mike confirmed
that they were.&nbsp; John asked what criteria was used to decide
what to include in the abridged minutes and what not to.&nbsp; Mike
responded that it depended on the subject before the Board, but could
include such things as personnel actions, the Foundation&rsquo;s
financial position, licensing and intellectual property issues.&nbsp;
</SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
introduced the full and <a href="2012_02_15_Minutes.php">abridged minutes</a> for the Board meetings of
February 15, 2012.&nbsp; With one minor change to the abridged
minutes, the Board passed the following resolution unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
minutes and abridged minutes for the Board meeting of February 15,
2012 are approved.</SPAN></P>
<P><SPAN LANG="en-US">In order to allow Board Members additional time
to review the minutes of the March Board Meeting, it was decided that
an electronic vote would be held following the Board Meeting.&nbsp;
In the event that any concerns were identified with the minutes, the
vote would be suspended and the minutes discussed at the next Board
meeting.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Paul Lipton highlighted that he was not
receiving emails directed to the Board mailing list.&nbsp; Mike
Milinkovich indicated that he would look into it.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>TCK Agreement</B></U></SPAN></P>
<P><SPAN LANG="en-US">Jutta Bindewald requested an update on the TCK
Agreement with Oracle.&nbsp; Mike Milinkovich indicated that the
Foundation believed that only signatures remained and asked if Donald
Smith could provide an update from Oracle&rsquo;s standpoint.&nbsp;
Donald apologized for the delay indicating that he hoped to have an
update soon.&nbsp; Mike Milinkovich added that if the Eclipse
Foundation was able to get the TCK Agreement finalized in time,
Eclipse may be able to use it for SR1.&nbsp;&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Mike Milinkovich declared the meeting
adjourned. </SPAN>
</P>
<P ALIGN=CENTER><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P><SPAN LANG="en-US">This being a true and accurate record of the
proceedings of this Meeting of the Board of Directors held on April
18, 2012, is attested to and signed by me below.</SPAN></P>
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