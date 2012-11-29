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
	    <h3>May 16, 2012</h3>

<P><SPAN LANG="en-US">A Meeting of the Board of Directors (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Board</B></I></SPAN><SPAN LANG="en-US">&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Corporation&rdquo;</B></I></SPAN><SPAN LANG="en-US">),
was held on held at 11:00 am Eastern time on May 16, 2012 as a
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
<P><SPAN LANG="en-US"><U><B>General Business:</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced the full and 
<a href="2012_04_18_Minutes.php">abridged minutes</a> 
for the Board meetings of April 18, 2012.&nbsp; With one minor
change to the abridged minutes, the Board passed the following
resolution unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
minutes and abridged minutes for the Board meeting of April 18, 2012
are approved.</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
reported that the following two resolutions had been passed by the
Board electronically:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
the full minutes of the Board Meeting of March 26, 2012 are approved.</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
the abridged minutes of the Board Meeting of March 26, 2012 are
approved.</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">In addition, Mike
reported that Mik Kersten had resigned from the IP Advisory
Committee.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Topics and Issues Report:</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich asked if anyone had any questions
related to the Topics and Issues Report that was distributed on April
26,</SPAN><SUP><SPAN LANG="en-US"> </SPAN></SUP><SPAN LANG="en-US">2012
to the Board mailing list.&nbsp; Mike highlighted the fact that
switching the location of EclipseCon created a lot of additional work
for the Eclipse Foundation staff.&nbsp; He further reported that the
Foundation expected to switch locations again next year and hold
EclipseCon in Boston.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Industry Working Groups:</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich provided an overview of the
Location Industry Working Group, the related material for which is
attached as <a href="2012_05_exhibits/ExhibitC.pdf">Exhibit C</a>.&nbsp;&nbsp; Mike indicated there was a solid
group of technology looking for a home.&nbsp; Paul Clenahan indicated
that Actuate might be interested in the IWG.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Jochen Krause asked if the Eclipse Foundation
would be hosting data.&nbsp; Mike indicated that at the moment, the
expectation is that only code would be hosted at Eclipse.org, though
OpenStreetMap was a data source that the IWG might make use of.&nbsp;
Mike asked if there was a concern that he should be aware of.&nbsp;
Jochen replied that his concern was primarily that hosting data at
Eclipse.org would stretch the existing Eclipse infrastructure.&nbsp;
&nbsp;Mike indicated that if Eclipse.org was hosting a particular
data set, that it would have to be self funded by the IWG and
incremental over what Eclipse.org was currently doing.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Paul Clenahan asked about the confidentiality
level of the material.&nbsp; Mike responded that Eclipse&rsquo;s
interest in pursuing this area is open and that there was a mailing
list that people could subscribe to.&nbsp; </SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike noted to the Board that the Enterprise Bundle
Repository discussion would be deferred until June at this point to
give IBM additional time to evolve the proposal.&nbsp;&nbsp; Mike
confirmed that the next Board meeting would be June 19 and 20 in
Raleigh, North Carolina.&nbsp;&nbsp; There being no further business
to attend to, Mike Milinkovich declared the meeting adjourned at
11:25 am. </SPAN>
</P>
<P ALIGN=CENTER><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P><SPAN LANG="en-US">This being a true and accurate record of the
proceedings of this Meeting of the Board of Directors held on May 16,
2012, is attested to and signed by me below.</SPAN></P>
<P LANG="en-US" STYLE="margin-left: 8.89cm; text-indent: 1.27cm"><U>/s/
Janet Campbell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </U>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Secretary of Meeting</SPAN></P>

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