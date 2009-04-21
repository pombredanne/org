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
	    <h3>January 21, 2009</h3>
<P LANG="en-US" ALIGN=CENTER>_________________________________________________________________________</P>
<P ALIGN=CENTER>&nbsp;</P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US">A Meeting of the Board of
Directors (the &ldquo;<I><B>Board</B></I>&rdquo;) of Eclipse.org
Foundation, Inc., a Delaware corporation (the &ldquo;<I><B>Corporation&rdquo;</B></I>),
was held on held at 11:00am Eastern time on January 21, 2009 as a
regularly scheduled monthly teleconference.</SPAN></P>
<P><SPAN LANG="en-US">Present on the teleconference were the
following Directors:</SPAN></P>
<TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Attending </B>
			</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Company</B></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=31% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Tim Barnes</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OpenMethods LLC</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Rich Bartlett</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans-Christian
			Brockmann</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">brox
			IT-Solutions GmbH</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dino Brusco</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Motorola</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Actuate
			Corporation</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Robert Day</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark de Visser</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sonatype</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Doug Gaff</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Richard
			Gronback</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Borland
			Software Corp.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Andi Gutmans</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Zend
			Technologies</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oisin Hurley</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm"><SPAN LANG="en-US">IONA</SPAN>
			<SPAN LANG="en-US">Technologies</SPAN></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Kellerman</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Not attending -
			Mik Kersten</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jonathan Khazam</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Intel
			Corporation</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Stephane
			Lacrampe</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OBEO</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Lipton</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">CA Inc.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Maher Masri</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Genuitec, LLC</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Emma McGrattan</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wolfgang
			Neuhaus</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Tracy Ragan</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Steve Saunders</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wind River</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Somasundaram
			Shanmugam</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sybase</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=18% VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=50% VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Todd E.
			Williams</P>
		</TD>
		<TD WIDTH=31% VALIGN=BOTTOM>
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
full and <a href="2008_12_10-11_Minutes.php">abridged minutes</a> for the Board meetings of December 10 &amp;
11, 2008.&nbsp; The Board passed the following resolution
unanimously:</SPAN></P>
<P ALIGN=JUSTIFY STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
the minutes and abridged minutes for the Board meeting of December 10
&amp; 11 2008 are approved with the added direction to the EMO to
update the Strategic Developer presentation section of the abridged
minutes following further discussion with each of the Strategic
Developers on the content to be disclosed.</SPAN></P>
<P><B><U><SPAN LANG="en-US">Executive Director 2009 Objectives</SPAN></U></B></P>
<P LANG="en-US" STYLE="text-indent: 1.27cm; margin-bottom: 0.42cm">Mike
Milinkovich introduced the topic of the 2009 Executive Director
objectives.&nbsp; &nbsp;Following discussion, the following
resolution passed unanimously:</P>
<P STYLE="margin-left: 1.27cm; margin-bottom: 0.42cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
the Executive Director 2009 Objectives are approved.&nbsp; </SPAN>
</P>
<P><B><SPAN LANG="en-US"><U>Other</U></SPAN></B></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US">Mike Milinkovich indicated that
at the next Board meeting he would like to propose two resolutions.&nbsp;
First, with Jonathan Khazam leaving the Board, Mike would like to
appoint Mark Coggins as Chair of the Finance Committee.&nbsp; Second,
the Eclipse PMC would like to change their lead to Mike Wilson.&nbsp;&nbsp;
It was suggested that we proceed with an electronic vote to move
these forward and Mike indicated that he would investigate using that
approach.</SPAN></P>
<P LANG="en-US"><U><B>Review of Key Performance Indicators</B></U></P>
<P><SPAN LANG="en-US">Mike Milinkovich</SPAN> <SPAN LANG="en-US">indicated
that the Key Performance Indicatorswere tracking as expected.&nbsp; There was some discussion
about whether it would be possible to create a public and private
version of the KPIs and Mike Milinkovich indicated he would give that
idea additional thought.</SPAN></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US">Mike Milinkovich declared the
meeting adjourned at approximately 12:00 Eastern time. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on January 21, 2009, is attested to
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