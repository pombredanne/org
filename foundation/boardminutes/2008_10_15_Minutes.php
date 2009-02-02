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
	    <h3>October 15, 2008</h3>
<P LANG="en-US" ALIGN=CENTER>_________________________________________________________________________</P>
<P ALIGN=CENTER>&nbsp;</P>
<P><SPAN LANG="en-US">A Meeting of the Board of Directors (the
&ldquo;<I><B>Board</B></I>&rdquo;) of Eclipse.org Foundation, Inc., a
Delaware corporation (the &ldquo;<I><B>Corporation&rdquo;</B></I>),
was held on held at 11:00 am Eastern time on October 15, 2008 as a
regularly scheduled teleconference. </SPAN>
</P>
<P><SPAN LANG="en-US">Present on the teleconference were the
following Directors:</SPAN></P>
<TABLE WIDTH=613 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Present</B></P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Tim Barnes</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OpenMethods LLC</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Rich Bartlett</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans-Christian
			Brockmann</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">brox
			IT-Solutions GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dino Brusco</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Motorola</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Actuate
			Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Robert Day</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected Add-In
			Provider Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Doug Gaff</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Richard
			Gronback</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Borland
			Software Corp.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Andi Gutman</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Zend
			Technologies</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oisin Hurley</P>
		</TD>
		<TD WIDTH=313>
			<P STYLE="border: none; padding: 0cm"><SPAN LANG="en-US">IONA</SPAN>
			<SPAN LANG="en-US">Technologies</SPAN></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Kellerman</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mik Kersten</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jonathan Khazam</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Intel
			Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Stephane
			Lacrampe</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OBEO</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Lipton</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">CA Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Maher Masri</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Genuitec, LLC</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Emma McGrattan</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected Add-In
			Provider Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Committer Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wolfgang
			Neuhaus</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Tracy Ragan</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected Add-In
			Provider Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Steve Saunders</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wind River</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Somasundaram
			Shanmugam</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sybase</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected Add-In
			Provider Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jason Van Zyl</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sonatype</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=66>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=234>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Todd E.
			Williams</P>
		</TD>
		<TD WIDTH=313>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected Add-In
			Provider Representative</P>
		</TD>
	</TR>
</TABLE>
<P>&nbsp;</P>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, Janet Campbell, Secretary, and Chris
Larocque, Treasurer of Eclipse.org Foundation, Inc.</SPAN></P>
<P><U><SPAN LANG="en-US"><B>General Business:</B></SPAN></U></P>
<P><SPAN LANG="en-US"><U>Minutes:</U></SPAN>&nbsp; <SPAN LANG="en-US">There
was unanimous consent to approve the following resolution:</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED, </B></SPAN><SPAN LANG="en-US">that
there was unanimous consent to approve the full and abridged minutes
of the September 19, 2008 Board Meeting.</SPAN></P>
<P><SPAN LANG="en-US"><U>Key Performance Indicators (KPIs)</U></SPAN><SPAN LANG="en-US">:&nbsp;
Mike Milinkovich introduced a discussion of the Eclipse Foundation&rsquo;s
Key Performance Indicators.&nbsp; &nbsp;Mike commented that
generally, the indicators were tracking as expected and asked if
anyone had any questions or comments.&nbsp; After some discussion, it
was felt that it was worthwhile for the EMO to:&nbsp; (1) review how
the Foundation is measuring our KPIs (for example, how we are
measuring our downloads and whether we may be understating them in
light of the number of download choices/packages); and (2) pull
together a page on the Board Wiki to describe our key performance
indicators.</SPAN></P>
<P ALIGN=JUSTIFY STYLE="margin-top: 0.42cm; page-break-after: avoid"><SPAN LANG="en-US"><U>Committee
Appointments:</U></SPAN> <SPAN LANG="en-US">There was unanimous
consent to approve the following Resolutions:</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
there was unanimous consent to appoint Wolfgang Neuhaus to the
Membership Committee.</SPAN></P>
<P><SPAN LANG="en-US"><U>Working Group &ndash; Creating Local User
Groups:</U></SPAN>&nbsp;&nbsp; <SPAN LANG="en-US">At the previous
Board meeting a decision had been made to create a Board Working
Group to discuss the Creation of Local User Groups.&nbsp; Mike
Milinkovich re-introduced the topic and asked whether the Board
thought that it would be more useful to direct this discussion to the
Membership Committee.&nbsp;&nbsp; While many felt either approach
would accomplish the Board&rsquo;s goals, the Board decided to direct
the subject to a Working Group in the hopes that the subject may
garner broader participation.&nbsp; Janet Campbell took the action
item to set up the Board Working Group.</SPAN></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US"><U>Enforcing the Obligations of
Strategic Developer Members:</U></SPAN>&nbsp; <SPAN LANG="en-US">Mike
Milinkovich introduced this topic, referring to his email of October
7, 2008.&nbsp; Mike indicated that there were two aspects of this
discussion to be considered:&nbsp; (1) how rigorous should the
Foundation be in enforcing the obligations of Strategic Developers to
put eight (8) full-time developers into Eclipse; and (2) what should
the final form be for the template for the Strategic Developers to
use in reporting their contributions to Eclipse back to the Board at
the December Board meeting.&nbsp; Mike indicated that we have
eighteen (18) with approximately six (6) likely non-compliant.&nbsp;
It was generally agreed that it was important to have the information
and then have an honest conversation with the companies that are
non-compliant.&nbsp; Following that, the Board could decide how best
to proceed.&nbsp; &nbsp;It was felt by some that it would be
preferable if we could get greater clarity around the requirements.&nbsp;
Mike Milinkovich indicated that the original spirit of the eight (8)
developer requirement was that the Strategic Developer members would
be companies that would share the load, a concept that Mike felt
still had value.&nbsp;&nbsp; Janet Campbell took the action item to
set up a Working Group to discuss the metrics used to measure the
contributions of Strategic Developers.</SPAN></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US"><U>Sun TCK License:</U></SPAN>
<SPAN LANG="en-US">Mike Milinkovich provided the Board with
background to the request for the Foundation to obtain Sun TCK
License(s) indicating that there are two projects at Eclipse
(Platform &amp; Java Complier, Link Project) that have asked for
access to the TCKs for 4 JSRs.&nbsp; The original request was sent to
Sun in April 2008.&nbsp; Since that time Mike indicated that he had
received no less that 3 emails from the person responsible from Sun
promising the TCK license within the week.&nbsp; While the Eclipse
Foundation has been approved for the scholarship access where we will
be provided with the TCKs at no charge, we have been having some
difficulty getting a copy of the necessary license.&nbsp; Mike
indicated that he would follow up once again during the coming couple
of weeks.</SPAN></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">There being no additional business to attend to,
Mike Milinkovich thanked all Board Members and declared the meeting
adjourned at approximately 11:52 Eastern time. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on October 15th, 2008, is attested to
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