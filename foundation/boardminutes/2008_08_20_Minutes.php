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
	    <h3>August 20, 2008</h3>
<P ALIGN=CENTER>_________________________________________________________________________</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">A Meeting of the Board
of Directors (the &ldquo;<B><I>Board</I></B>&rdquo;) of Eclipse.org
Foundation, Inc., a Delaware corporation (the &ldquo;<B><I>Corporation&rdquo;</I></B>),
was held on held on August 20, 2008 via teleconference.&nbsp; &nbsp;This
meeting was held as a regular monthly conference call.</P>
<P>Present at the meeting were the following Directors:</P>
<TABLE WIDTH=584 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm"><B>Present</B></P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Tim Barnes</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">OpenMethods LLC</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Rich Bartlett</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Hans-Christian Brockmann</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">brox IT-Solutions GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Actuate Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Winston Damarillo for Brett
			Porter</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">DevZuz</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Robert Day</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Doug Gaff</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Richard Gronback</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Borland Software Corp.</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Andi Gutmans</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Zend Technologies</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Mik Kersten</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Jonathan Khazam 
			</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Intel Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">St&eacute;phane Lacrampe</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">OBEO</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Shaun Smith for Dennis Leung</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Emma McGrattan</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Sven Efftinge for Wolfgang
			Neuhaus</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Eric Newcomer</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">IONA Technologies</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Tracy Ragan</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">James Saliba</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">CA Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Steve Saunders</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Wind River</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Somasundaram Shanmugam</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Sybase</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Dave Thomson</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Todd E. Williams</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=37>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320>
			<P STYLE="border: none; padding: 0cm">Dino Brusco for Christy
			Wyatt</P>
		</TD>
		<TD WIDTH=227>
			<P STYLE="border: none; padding: 0cm">Motorola</P>
		</TD>
	</TR>
</TABLE>
<P><BR><BR>
</P>
<P>Present at the invitation of the Board was Mike Milinkovich,
Executive Director and Janet Campbell, Secretary of Eclipse.org
Foundation, Inc.&nbsp;</P>
<P><B><U>Adoption of Management Recommendations</U></B> 
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm">There
was unanimous consent to approve the following Resolutions:</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm"><B>RESOLVED,
</B>that there was unanimous consent to approve the minutes of the
June 18 &amp; 19, 2008 Board Meeting.</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm"><B>RESOLVED</B>,
that there was unanimous consent to replace Bjorn Freeman-Benson as
the leader of the Technology PMC with Wayne Beaton.&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm"><B>RESOLVED,
</B>that there was unanimous consent to approve the <A HREF="http://www.eclipse.org/projects/dev_process/development_process.php?version=proposed">revised
Eclipse Development Process</A>, attached hereto as <a href="2008_08_exhibits/ExhibitB.pdf">Exhibit B</a>.</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm"><U><B>Other
Business</B></U></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm"><U>Market
Research Study</U>.&nbsp; &nbsp;Mike Taylor reminded everyone of the
market research study that the Eclipse Foundation was attempting to
coordinate.&nbsp; Mike indicated that the study had been done for the
last couple of years and has historically provided tremendous value
relative to the investment required by the participating companies.&nbsp;
Mike further indicated that this year the Foundation was having
difficulty soliciting sufficient participation to pursue the study.&nbsp;
All Board members were encouraged to consider participating in the
study.&nbsp; Mike Milinkovich added that the study was quite
economical and beneficial to both the Foundation and the ecosystem as
a whole.</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm"><U>Key
Performance Indicators</U>.&nbsp; Mike Milinkovich introduced the key
performance indicators.&nbsp; Mike indicated that generally things
were tracking as expected.</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm">There
being no additional business to tend to, Mike Milinkovich declared
the meeting adjourned. 
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm; margin-top: 0.42cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on August 20, 2008, is attested to and
signed by me below.</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<U>/s/ Janet Campbell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </U>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Secretary of Meeting</P>
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