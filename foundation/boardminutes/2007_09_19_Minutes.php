<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
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
	    <h3>September 19, 2007</h3>
<P>_________________________________________________________________________</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">A Meeting of the Board
of Directors (the &ldquo;<B><I>Board</I></B>&rdquo;) of Eclipse.org
Foundation, Inc., a Delaware corporation (the &ldquo;<B><I>Corporation&rdquo;</I></B>),
was held on held at 8:30am Eastern time at the Hyatt Regency in
Schaumburg, Illinois on September 19, 2007 as a regularly scheduled
quarterly face-to-face meeting. 
</P>
<P>Present on the teleconference were the following Directors:</P>
<TABLE WIDTH=521 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<COL WIDTH=4>
	<COL WIDTH=229>
	<COL WIDTH=288>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=2 WIDTH=233>
			<P STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=288>
			<P STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Trip Gilmour for Tim Barnes</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">OpenMethods LLC</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Paul Czarnik</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Compuware</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Winston Damarillo</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">DevZuz</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Rich
			Gronback</FONT></P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Borland Software Corp.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Konstantin Komissarchik</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Jonathan Khazam</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Intel Corporation</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Howard Lewis</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Eric Newcomer</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">IONA Technologies</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Tracy Ragan</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Darin Swanson</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Dave Thomson</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">John Graham for David K Tong</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Sybase</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=4>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=229 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Todd E. Williams</P>
		</TD>
		<TD WIDTH=288 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
</TABLE>
<P>&nbsp;</P>
<P>Present at the invitation of the Board was Mike Milinkovich,
Executive Director, Janet Campbell, Secretary, and Chris Larocque,
Treasurer of Eclipse.org Foundation, Inc.</P>
<P STYLE="margin-top: 0.42cm; page-break-after: avoid"><B><U>General
Business</U></B> 
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm">Paul
Czarnik gave a brief overview concerning Compuware&rsquo;s decision
to renew as an add-in provider member, rather than a strategic
developer.&nbsp; The decision was not one of backing away from
Eclipse.&nbsp; Rather it was decided that maintaining Compuware&rsquo;s
strategic status did not make sense during their current business
consolidation.</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm">Mike
Milinkovich introduced the minutes from the July and August meetings
and asked for any corrections and/or comments.&nbsp; Some minor
changes were introduced and the following resolution passed:</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
that there was unanimous consent (Dave Thomson abstaining) to approve
the amended minutes of July and August.&nbsp; &nbsp;&nbsp;</P>
<P><B><U>Review of Year to Date Financial Actuals:</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Chris Larocque gave an overview of the year to date financial
actuals.&nbsp; &nbsp;&nbsp;Essentially, the P&amp;L is pretty much
tracking on budget and we are where we expected to be on the Balance
sheet.&nbsp;&nbsp; .&nbsp; 
</P>
<P><B><U>IP Tooling Improvements:</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich gave an overview of IP tooling improvements that are
underway and additional improvements that are planned, the related
presentation material for which is attached as <a href="2007_09_exhibits/ExhibitA.pdf">Exhibit A</a>.</P>
<P><B><U>Committer Community Issues:</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<U>Simultaneous Release Train:</U>&nbsp; The topic of the
simultaneous release train was raised and whether we would be able to
support the release train from an IP standpoint.&nbsp; Janet Campbell
indicated that we expected to be able to support the release train,
though we did not yet have a good view on the size of the train.&nbsp;
Mike Milinkovich indicated that he sees the release train, not just
growing wildly, but increasing in quality and integration.&nbsp; 
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<U>Build System:</U>&nbsp; The subject of the build system and
whether the Foundation could assist projects with this requirement
was discussed.&nbsp;&nbsp; Mike Milinkovich took an action to look at
what could the EMO could do to support this goal and come back to the
Board by March 2008.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<U>Infrastructure Limitations:&nbsp; </U>The subject of
infrastructure limitations was raised.&nbsp; Mike Milinkovich
indicated that he and Denis were already in discussions to determine
how to best address these potential limitations.&nbsp; The Board
unanimously approved following resolution to create a Common Build
Infrastructure Working Group open to all projects:</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
there was unanimous consent to the creation of a working group lead
by Konstantin Komissarchik to study the issues associated with
creating a common build infrastructure for Eclipse projects.&nbsp; 
</P>
<P STYLE="text-indent: 1.27cm"><U>Advertising: </U>&nbsp;&nbsp;The
topic of including advertising on Elcipse.org was raised as a revenue
generating opportunity.&nbsp; &nbsp;&nbsp;The Board unanimously
approved the following resolution to create an Advertising Working
Group of the Board::&nbsp;&nbsp; 
</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
there was unanimous consent to the creation of an advertising working
group to study the issue of member driven advertising on the
Eclipse.org web site (including Google ads) with a mandate to the
Board with a recommendation at the December Board meeting.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<U>Other:</U>&nbsp; Mike Milinkovich indicated that we would be
looking into EclipseStore &nbsp;as well as the possibility of using
PayPal for donations, pending receipt of guidance on what if any tax
implications there were.&nbsp; The Board unanimously approved the
following resolution:&nbsp; 
</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, provided no difficulties are identified from a
taxation standpoint in discussions with external counsel, the Board
approves the Foundation pursuing the use of PayPal for accepting
donations.</P>
<P><B><U>Program Plan:</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich recapped the planning process.&nbsp; In the June
Board meeting we talked about the strategy and finalized the strategy
document that we will be using for planning purposes.&nbsp; In the
September Board meeting we talk about the actual programs that we
would put in place to accomplish those goals.&nbsp; Finally, at the
December Board meeting we are going to have a budget proposal that
will cost out these program plan ideas and tell you which ones we are
actually doing based on what we can afford.&nbsp; 
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The subject of testing resources was raised in relation to the
program plan.&nbsp; There was recognition that we could be doing a
better job of facilitating community testing, and that there were
merits to considering &nbsp;a dedicated testing team.&nbsp; 
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
As part of the review, Mike Milinkovich reviewed the project
investment level by company.&nbsp;&nbsp; The Board also discussed
usability.&nbsp; Mike Milinkovich noted that we have a resolution on
the books with Strategic Developers agreeing to put together
usability guidelines. Right now we are on a course to not meet this
goal for Ganymede.&nbsp; No solution was identified at the meeting.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
In discussing fostering growth and adoption related programs, there
was a suggestion to establish a &ldquo;Help Wanted&rdquo; section for
projects to leverage.&nbsp;&nbsp; 
</P>
<P STYLE="margin-bottom: 0.42cm"><U><B>Open discussion: Strategic
Developer Commitments and Reporting</B></U></P>
<P STYLE="text-indent: 1.27cm">There was a discussion to create a
consensus on what we are expecting from Strategic Developers members
when they do their annual &ldquo;report card&rdquo; at the December
meeting. &nbsp;&nbsp;It was concluded that Mike Milinkovich would
provide a template to facilitate reporting.&nbsp; 
</P>
<P><B><U>Membership Status:</U></B></P>
<P STYLE="text-indent: 1.27cm">Mike Milinkovich introduced the topic
of Membership, highlighting that it has slowed somewhat.&nbsp; Mike
Milinkovich commented that having more diverse sources of revenue
would definitely lower the risk pointing out however, that it would
be hard to imagine a way where the Eclipse Foundation could make
money without taking away a commercial opportunity from the
ecosystem.&nbsp; It was concluded that Mike would take the task of
(1) identifying additional value for current memberships; and (2)
look at alternative sources of revenue for the Foundation, and that
this would be discussed at the next face to face meeting in greater
detail.&nbsp; The Board approved the following resolution
unanimously:</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, the Executive Director is directed to examine
additional revenue generating opportunities in the area of:&nbsp; (i)
new revenue sources; (ii) driving member value; and (iii) revisiting
the fee structure for membership.</P>
<P><B><U>Speakers:</U></B></P>
<P STYLE="text-indent: 1.27cm">Tony Bailetti, Carleton University
gave a talk on &ldquo;Open Source Maturity Models&rdquo;, based on
work on an upcoming article in Harvard Business Review, the related
presentation for which is attached as <a href="2007_09_exhibits/ExhibitB.pdf">Exhibit B</a>.</P>
<P STYLE="text-indent: 1.27cm">Eric Newcomer gave a presentation on
OSGi Enterprise Expert Group Status and Directions.&nbsp; Eric is the
chair of this expert group at OSGi, which will be defining several
new specifications of relevance to the Eclipse community.&nbsp;
Eric&rsquo;s presentation is attached hereto as <a href="2007_09_exhibits/ExhibitC.pdf">Exhibit C</a>.</P>
<P STYLE="text-indent: 1.27cm">Jeffrey Hammond of Forrester presented
&ldquo;2007 Forrester-1105 IDE Survey&rdquo;.&nbsp; 
</P>
<P><B><U>Conference Update</U></B></P>
<P STYLE="text-indent: 1.27cm">Mike Milinkovich provided an update on
Eclipse related conferences including ESE 2007, OS Summit Asia, and
EclipseCon 2008, the related material for which is attached as
Exhibit D.</P>
<P><U><B>Review of Key Performance Indicators</B></U></P>
<P STYLE="text-indent: 1.27cm">Mike Milinkovich reviewed the Eclipse
Key Performance Indicators distributed prior to the meeting.&nbsp; 
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">Mike Milinkovich
declared the meeting adjourned at approximately 4:35 Eastern Time. 
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *          
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">This being a true and
accurate record of the proceedings of this Meeting of the Board of
Directors held on September 19th, 2007, is attested to and signed by
me below.</P>
<P>&nbsp;</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<U>/s/ Janet Campbell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </U>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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