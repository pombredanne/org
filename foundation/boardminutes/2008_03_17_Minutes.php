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
	    <h3>March 17, 2008</h3>
<P ALIGN=LEFT>_________________________________________________________________________</P>
<P ALIGN=LEFT>A Meeting of the Board of Directors (the
&ldquo;<B><I>Board</I></B>&rdquo;) of Eclipse.org Foundation, Inc., a
Delaware corporation (the &ldquo;<B><I>Corporation&rdquo;</I></B>),
was held on March 17, 2008 as a regularly scheduled face to face
meeting in the Great America Meeting Room #3, in the Santa Clara
Convention Center, Santa Clara, California.</P>
<P>Present at the meeting were the following Directors:</P>
<TABLE WIDTH=625 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<COL WIDTH=289>
	<COL WIDTH=336>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Tim Barnes</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">OpenMethods LLC</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Rich Bartlett</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Hans Christian Brockmann</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">brox IT-Solutions GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Ed Cobb</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">BEA</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Actuate Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Winston Damarillo</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">DevZuz</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Eliane Fourgeau</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Richard Gronback</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Borland Software Corp.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Kent Mitchell&nbsp; for Andi
			Gutmans</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Zend Technologies</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Chris Elford for Jonathan
			Khazam</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Intel Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Konstantin Komissarchik</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Eric Newcomer</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">IONA Technologies</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Tracy Ragan</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">James Saliba</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Computer Associates</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Doug Gaff for Steve Saunders</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">WindRiver</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Darin Swanson</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Dave Thomson</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">John Graham 
			</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Sybase</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Todd E. Williams</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Dino Brusco for Christy
			Wyatt</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Motorola</P>
		</TD>
	</TR>
</TABLE>
<P>Also present at the invitation of the Board were the following
newly elected Committer and Add-In Provider representatives whose
term will begin at the next Board Meeting:&nbsp; 
</P>
<TABLE WIDTH=625 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Robert Day&nbsp;&nbsp;&nbsp;&nbsp;
						</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Doug Gaff</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Mik Kersten</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P STYLE="border: none; padding: 0cm">Emma McGrattan</P>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
</TABLE>
<P>Present at the invitation of the Board was Mike Milinkovich,
Executive Director, Janet Campbell, Secretary of Eclipse.org
Foundation, Inc., and Chris Larocque, Treasurer to the Foundation.</P>
<P><B><U>General Business</U></B></P>
<P>Bjorn Freeman-Benson provided an update on EclipseCon 2008, the
associated slides for which are attached as <a href="2008_03_exhibits/ExhibitA.pdf">Exhibit A</a> hereto.&nbsp;&nbsp;
Bjorn reported that the total number of people attending EclipseCon
is going to be much greater than previous years and that the
Technical Program was better than ever.&nbsp; Bjorn also recognized
Donald Smith&rsquo;s efforts regarding sponsorship, including greater
sponsorship integration across the conference.&nbsp; Bjorn further
indicated that those efforts generated much higher sponsorship
revenue than was initially expected.&nbsp; Mike Taylor noted a
savings of $110K in Conference Operations and asked how such a
savings was possible.&nbsp; Bjorn indicated that continued use of the
same suppliers and relationship management had enabled the Foundation
to negotiate price reductions in many cases.&nbsp; The Board observed
that EclipseCon has just got better and better year after year,
largely due to Bjorn&rsquo;s efforts and unanimously passed the
following resolution:</P>
<P STYLE="margin-left: 1.27cm"><B>RESOLVED</B>, that the Board would
like to recognize Bjorn Freeman-Benson&rsquo;s personal contribution
both from a work and personal perspective towards the continued
success of EclipseCon.&nbsp;</P>
<P>Bjorn Freeman-Benson reviewed the proposed process for the 2008
Roadmap.</P>
<P>Bjorn Freeman-Benson reviewed the proposed changes to the
Development Process, the slides for which are attached as <a href="2008_03_exhibits/ExhibitC.pdf">Exhibit C</a>.</P>
<P>Mike Milinkovich reviewed the Management Reports and Key
Performance Indicators.&nbsp; In so doing, Mike noted that our
membership numbers at EclipseCon 2007 were 157 and that this year
that number is 178 even after having purged our membership numbers of
bad debts, indicating that we have made significant progress.&nbsp;
Tracy Ragan asked if we have projections on how the Foundation will
make their revenue targets.&nbsp; Mike indicated that there was not a
projection per se, but that he would later be introducing possible
changes to the Membership structure that would help with that.</P>
<P>Mike announced and congratulated the newly elected
representatives.&nbsp; Specifically, the Add-In Representatives are:&nbsp;
Robert Day (LyunuxWorks), Emma McGrattan (Ingres), Tracy Ragan
(OpenMake), Mike Taylor (Instantiations), and Todd Williams
(Genuitec).&nbsp; Mike further indicated that the voter turnout for
Add-In Providers was 20%, which was low, but still double that of the
Committers.&nbsp; Dave Thomson observed that the lower turnout was
likely due to vote aggregation.&nbsp; The elected Committer
Representatives were:&nbsp; Chris Aniszczyk, Doug Gaff, Mik Kersten,
Jeff McAffer, and Ed Merks.&nbsp; Both the Board and the Executive
Director offered thanks and appreciation to departing Board Members.&nbsp;
</P>
<P><B><U>Committee Reports:</U></B></P>
<P><U>Finance Committee</U>:&nbsp; Mike Milinkovich indicated that
Jonathan Khazam is on sabbatical for 2 months and during that time
Jim Saliba has offered to act as chair of the Finance Committee.&nbsp;&nbsp;
Jim indicated that we are on budget and wanted to thank Chris
Larocque for pulling the numbers together and keeping the Committee
informed.&nbsp; Mike Milinkovich indicated that due to our increasing
size, the audited financial results would now be available later and
that our current expectation is that these would be available in
April.</P>
<P><U>Compensation Committee</U>:&nbsp; Michael Bechauf reported for
the Compensation Committee.&nbsp; Michael indicated that the new
compensation framework for Mike Milinkovich that gave more emphasis
to a strategic component tied to an annual cycle has been rolled
out.&nbsp; This strategic element represents 35% of Mike&rsquo;s
overall objectives.&nbsp;&nbsp; The remaining 65% of Mike&rsquo;s
compensation would remain quarterly focused.&nbsp; Michael indicated
that the Committee now only has two Board Members and indicated that
additional representation would be welcome.&nbsp;&nbsp; 
</P>
<P><U>Membership Committee</U>:&nbsp; Winston Damarillo reported for
the Membership Committee.&nbsp; Winston indicated that the Committee
had been looking at refinements to the Membership Structure.&nbsp;
Together, Mike Milinkovich and Winston Damarillo gave an overview of
the proposed changes to the Membership structure.&nbsp; &nbsp;&nbsp;The
proposal was generally well received.&nbsp; Mike Milinkovich
indicated that there was no expectation of a vote at this Board
meeting, but that this was to set the stage for further changes that
will by necessity happen over time due to the changes needed to the
Membership Agreement and Bylaws.&nbsp; Some Board Members found the
title &ldquo;Corporate Member&rdquo; misleading and it was suggested
that the Foundation may want to consider an alternate name such as
&ldquo;Enterprise Member&rdquo; instead.&nbsp; 
</P>
<P><U>IP Advisory Committee</U>:&nbsp;&nbsp;&nbsp; Mike Milinkovich
introduced Adrian Cho on the phone to report on behalf of the IP
Advisory Committee.&nbsp; Adrian provided an overview on the
discussions related to extending parallel IP to all projects and the
recommendation of the IP Advisory Committee to approve a limited
extension of parallel IP to mature projects for &ldquo;diffs&rdquo; &ndash;
material that is an update to previously reviewed and approved
material.&nbsp; .</P>
<P STYLE="margin-left: 1.27cm"><B>RESOLVED</B>, the Board unanimously
approves the limited extension of parallel IP to mature projects.</P>
<P>Adrian further indicated that the Committee has been working on a
re-write of the IP Policy and that we have recently concluded that
work with the intention that the IP Advisory Committee will approve a
version for the Board&rsquo;s consideration.&nbsp; Mike Milinkovich
indicated that it was the intention of the Committee to bring that
subject to the Board for consideration at the April Board Meeting.&nbsp;
Mike also indicated that he recently brought the EPL/GPL
compatibility issue to the Committee for review and that that
discussion has begun.&nbsp; 
</P>
<P><B><U>Invited Speakers:</U></B></P>
<P>Raven Zachary from the 451 Group was invited to speak, a copy of
his related presentation is attached as <a href="2008_03_exhibits/ExhibitG.pdf">Exhibit G</a>.</P>
<P>Brent Williams from Benchmark was invited to speak.&nbsp; A copy
of his related presentation is attached as <a href="2008_03_exhibits/ExhibitH.pdf">Exhibit H</a>.&nbsp; 
</P>
<P><B><U>Collaboration with Apache and OSGi on Reference
Implementations</U></B></P>
<P>Eric Newcomer highlighted the importance of collaboration between
Eclipse projects and projects from organizations such as Apache.&nbsp;
Eric indicated that currently, the implementation of the IP Policy
does not permit this type of collaboration without undue burden on
the projects and stressed the need to rectify this.&nbsp; Mike
Milinkovich indicated that it sounded like an open request that
allowed for ongoing code contribution to CVS, followed by a final
review on the code that the project wished to re-distribute seemed
like an effective way to address this.&nbsp; Dave Thomson indicated
that he felt further discussion of this should take place at the IP
Advisory Committee. The Board agreed to refer this topic to the IP
Advisory Committee.</P>
<P><B><U>OSGi Interest in Eclipse Collaboration</U></B></P>
<P>Ed Cobb introduced this topic and asked the question as to whether
we as a community should be getting closer to standards.&nbsp;&nbsp;
Mike Milinkovich then pointed the Board to Section 3.9(c) of the
Eclipse Bylaws and indicated that the Section said in part that a
super-majority consent was required for selecting standards
organizations through which to standardize Eclipse API&rsquo;s.&nbsp;&nbsp;
Mike indicated that the Eclipse Equinox project is the reference
implementation of OSGi and asked whether the project should have come
to the Board first to ask permission.&nbsp; After much discussion, it
was agreed that they should not have in that instance because they
were sought out by OSGi.&nbsp; If instead, the project itself had
sought to be a reference implementation, then the Project should seek
the Board&rsquo;s approval.&nbsp;&nbsp; Mike encouraged Board members
to continue the OSGi discussion on the Board mailing list.&nbsp; 
</P>
<P><B><U>Jazz Update:</U></B></P>
<P>Dave Thomson provided an update on Jazz and encouraged any
individuals interested to attend Jazz talks at EclipseCon 2008 if
they wish to learn more.&nbsp; 
</P>
<P><B><U>Strategy Committee:&nbsp; </U></B>
</P>
<P>Mike Milinkovich introduced the topic of whether the Board
continued to wish to have a Strategy Committee, as previously agreed
to in the December meeting, to advise the Executive Director and
further indicated that he would be comfortable with whatever path the
Board chose.&nbsp; 
</P>
<P>The following resolution was approved by a majority of the Board:</P>
<P><B>RESOLVED</B>, that Ed Cobb (chair), Ricco Deutscher, and Dennis
Leung are hereby appointed to the Strategy Committee.</P>
<P><B><U>Tools Update:</U></B></P>
<P>John Duimovich provided a Tools update for the Board, a copy of
the related presentation for which is attached as Exhibit J 
(<a href="2008_03_exhibits/ExhibitJ1.pdf">slides</a>, <a href="2008_03_exhibits/ExhibitJ2.pdf">text</a>).&nbsp;
John indicated that there was a need to review the implementation
requirements of the IP Policy to enable projects to leverage Parallel
IP without the overhead that is currently required by the Board.&nbsp;
</P>
<P><B><U>Eclipse Project Update:</U></B></P>
<P>Philippe Mulet provided the Eclipse Project Update for the Board,
a copy of which is attached hereto as Exhibit K
(<a href="2008_03_exhibits/ExhibitK1.pdf">slides</a>, <a href="2008_03_exhibits/ExhibitK2.pdf">text</a>).&nbsp; In so doing,
Philippe asked for Board assistance in:&nbsp; improving diversity,
establishing Eclipse 4.0, and the Foundation obtaining the JCK
license.</P>
<P ALIGN=JUSTIFY>Mike concluded the meeting by highlighting two press
releases that were issued at EclipseCon, the first announcing the
Eclipse Runtime project and the second announcing that EclipseLink is
going to be the reference implementation for JSR 317, nothing that
this is the first EE or even SE RI that has been done outside of Sun
or Sun&rsquo;s direct control, a significant development.&nbsp;
Dennis Leung once again thanked the Board for approving the dual
licensing of EclipseLink to permit this to happen.</P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich declared the meeting adjourned at approximately 2:44
Pacific time. 
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">This being a true and
accurate record of the proceedings of this Meeting of the Board of
Directors held on March 17, 2008, is attested to and signed by me
below.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<U>/s/ Janet Campbell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </U>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Secretary of Meeting</P>


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