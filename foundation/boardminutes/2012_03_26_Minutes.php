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
	    <h3>March 26, 2012</h3>

<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">A
Meeting of the Board of Directors (the &ldquo;</SPAN><SPAN LANG="en-US"><I><B>Board</B></I></SPAN><SPAN LANG="en-US">&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Corporation&rdquo;</B></I></SPAN><SPAN LANG="en-US">),
was held on March 26, 2012 as a regularly scheduled face to face
meeting at the Hyatt Regency Reston, Reston, Virginia.</SPAN></P>
<P><SPAN LANG="en-US">Present at the face to face meeting were the
following Directors:</SPAN></P>
<TABLE WIDTH=633 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD WIDTH=633 VALIGN=BOTTOM>
			<TABLE WIDTH=581 BORDER=0 CELLPADDING=0 CELLSPACING=0>
				<TR>
					<TD WIDTH=78 VALIGN=TOP>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Present</B></P>
					</TD>
					<TD WIDTH=263 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Director</B></P>
					</TD>
					<TD WIDTH=240 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Organization</B></P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Chris
						Aniszczyk</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
						Committer Representative</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Jutta
						Bindewald</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">SAP AG</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Boris
						Bokowski</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
						Committer Representative</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P STYLE="border: none; padding: 0cm">&nbsp;<SPAN LANG="en-US">No</SPAN></P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Cedric
						Carbone</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Talend</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Eric
						Clayberg</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
						Sustaining Representative</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul
						Clenahan</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Actuate
						Corporation</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Etienne
						Juliot</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">OBEO</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P STYLE="border: none; padding: 0cm">&nbsp;<SPAN LANG="en-US">No</SPAN></P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans
						Kamutzki</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
						Sustaining Representative</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">John
						Kellerman</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Mik Kersten</P>
					</TD>
					<TD WIDTH=240>
						<P STYLE="border: none; padding: 0cm">&nbsp;<SPAN LANG="en-US">Elected
						Sustaining Representative</SPAN></P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Jochen
						Krause</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Innoopract
						GmbH</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Dennis Leung</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Oracle</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Lipton</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">CA
						Technologies</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Achim Loerke</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">BREDEX GmbH</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Ed Merks</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
						Committer Representative</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Bernd Kolb
						for Wolfgang Neuhaus</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">itemis AG</P>
					</TD>
				</TR>
				<TR VALIGN=BOTTOM>
					<TD WIDTH=78>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
					</TD>
					<TD WIDTH=263>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Igor
						Fedorenko for Jason Van Zyl</P>
					</TD>
					<TD WIDTH=240>
						<P LANG="en-US" STYLE="border: none; padding: 0cm">Sonatype</P>
					</TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
</TABLE>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Present at the
invitation of the Board was Mike Milinkovich, Executive Director,
Janet Campbell, Secretary of Eclipse.org Foundation, Inc., and Chris
Larocque, Treasurer to the Foundation. &nbsp;&nbsp;Also present at
the invitation of the Board was John Arthorne, a newly elected
Committer Representative whose term will begin at the next Board
Meeting.&nbsp; </SPAN>
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>EclipseCon
2012</B></U></SPAN></P>
<P STYLE="text-indent: 1.27cm; page-break-after: avoid"><SPAN LANG="en-US">Ian
Skerrett presented an update on EclipseCon 2012, the related slides
for which are attached as <a href="2012_03_exhibits/ExhibitA.pdf">Exhibit A</a>.&nbsp; Ian commented that
conferences had changed a great deal over the last few years and that
there now existed a lot of inexpensive developer conferences.&nbsp;
Ian further commented that he believed that the Foundation needed to
reduce the costs of putting on the conferences.&nbsp;&nbsp; Paul
Lipton commented that food must be a good portion of the EclipseCon
costs.&nbsp; Ian replied that it was, though it also helped with
networking which conference attendees valued a great deal.&nbsp; Ian
indicated that the current thought was to have a light breakfast and
nice lunches, but then cut back on the receptions significantly.&nbsp;&nbsp;
Paul Lipton commented that the Foundation could also consider looking
at other venues, indicating that Philadelphia had a large food market
right across the street from its major convention centre.&nbsp;&nbsp;&nbsp;
</SPAN>
</P>
<P STYLE="text-indent: 1.27cm; page-break-after: avoid"><SPAN LANG="en-US">Jochen
Krause asked what the Foundation wished to achieve, was it to
increase attendance?&nbsp; Mike Milinkovich indicated that it was.&nbsp;
Jochen asked further if the Foundation knew for certain that the cost
of the conference was the current limiter in that respect.&nbsp; Mike
Milinkovich responded that when the Foundation completed an analysis
of the competing conferences, EclipseCon came out looking quite
expensive.&nbsp;&nbsp; Ian Skerrett further commented that the
Foundation was looking at the possibility of starting the conference
on the weekend.&nbsp;&nbsp; Dennis Leung asked what the Foundation&rsquo;s
current view was on whether to stay at the Reston venue.&nbsp; Ian
Skerrett responded that he&rsquo;d like to start that discussion in
terms of whether to stay on the East or West coast of North America.&nbsp;
Ian further indicated that his personal preference was not to go back
to Santa Clara, California and that if a Bay location was of interest
in California, to look at San Francisco.&nbsp; Mike Milinkovich added
that the Foundation was also considering starting up another couple
of conferences to address specific needs, such as Orion.</SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>General
Business</B></U></SPAN></P>
<P><SPAN LANG="en-US"><U>2012 Election Results</U></SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
provided an overview of the recent Membership election results, the
related slides for which are attached as <a href="2012_03_exhibits/ExhibitB.pdf">Exhibit B</a>.&nbsp;&nbsp; The
existing Committer Representatives were re-elected, with the
exception of Boris Bokowski who elected not to run.&nbsp; John
Arthorne was elected in his place as the new Committer
Representative.&nbsp;&nbsp;&nbsp; There was no change in the
Sustaining Member Elected Representatives.&nbsp;&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
thanked Boris Bokowski for his contributions to the Board.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U>IP Advisory Committee</U></SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
proposed to add Dennis Leung of Oracle to the IP Advisory Committee.&nbsp;
The following resolution was passed unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, Dennis
Leung is appointed to the IP Advisory Committee of the Board.</SPAN></P>
<P><SPAN LANG="en-US"><U>JQuery</U></SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Janet Campbell
presented an overview of the existing and proposed redistribution of
JQuery at Eclipse, the related material for which is attached as
<a href="2012_03_exhibits/ExhibitC.pdf">Exhibit C</a>.&nbsp; &nbsp;In so doing, Janet provided historical context
on the original approval to re-distribute JQuery notwithstanding the
Eclipse Foundation&rsquo;s inability to clarify the provenance of the
code, subsequent use, and continued interest in re-distributing
JQuery more broadly at Eclipse.&nbsp; The discussion included an
update on the status of JQuery today, the risks associated with
distribution, and mitigating factors.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Paul Lipton
commented that any decision to distribute content that would not have
otherwise passed the Eclipse Foundation&rsquo;s due diligence review
required by the Intellectual Property Policy must be considered very
carefully.&nbsp; Paul further added that he believed that
intellectual property is the key differentiator for Eclipse and that
there is a great deal of value in the intellectual property due
diligence work that the Eclipse Foundation does.&nbsp;&nbsp; Paul
noted that the Board had agreed that any approval on an exception
basis be marked in IPZilla clearly.&nbsp; Janet Campbell responded
that this had been done and took an action item to circulate the
steps necessary for someone with IPZilla access to identify those
records in the IPZilla database.&nbsp; Following the discussion, the
following resolution was passed unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Board approves the redistribution of jQuery 1.4.x to 1.7.x inclusive
for all Projects at Eclipse, with keyword notation in IPzilla of all
exceptions. Future versions of jQuery are also approved for
redistribution, provided that no new issues have been discovered by
the EMO in its due diligence.</SPAN></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US"><U>Committer Issues</U></SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mik
Kersten indicated that he was concerned that tooling support for Git
wasn&rsquo;t where it needed to be for the Committer community. &nbsp;Mike
Milinkovich indicated that the EGit team had made significant
progress and that hopefully the situation will be resolved, as the
Foundation still intended to shut down CVS in December of 2012.&nbsp;
</SPAN>
</P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US"><U>Management Reports</U></SPAN></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich provided a marketing update, the
related slides for which are attached as <a href="2012_03_exhibits/ExhibitD.pdf">Exhibit D</a>.&nbsp; Mike
advised Board members that if they have not yet started testing their
Projects on Eclipse 4.2, that they were running late.&nbsp; Igor
Fedorenko commented that he had tried both M4 and M5 for the 4.2
release and neither had worked. &nbsp;He also commented that while he
had opened a bug in December, it had not yet been fixed.&nbsp; Mik
Kersten expressed concern on how adoption may be affected in the
event other companies elected not to do testing and something doesn&rsquo;t
work.&nbsp;&nbsp; Mike Milinkovich reflected back to the group that
he believed that there were three primary concerns:&nbsp; (1) the
amount of testing on the compatibility layer and whether it was good
enough; (2) concerns about the state of the UI; and (3) in some
scenarios, it just doesn&rsquo;t work in cases where there are
outstanding bugs.&nbsp; John Kellerman advised that the Eclipse
Platform Team had asked for help and asked Igor for a reference for
the bug he was referencing.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich provided an update on Eclipse
Foundation Membership, the related slides for which are attached as
<a href="2012_03_exhibits/ExhibitE.pdf">Exhibit E</a>.&nbsp; Mike reported that in terms of overall membership,
the Eclipse Foundation was as good as it has ever been, though a
lower number of Strategic Members had resulted in lower revenues for
the Foundation.&nbsp; Mike also reported that the Foundation had seen
more growth in Europe, thanks in large part to Ralph Mueller&rsquo;s
efforts there.&nbsp;&nbsp; Mik Kersten commented that the growth of
the modeling community in Europe likely contributed positively as
well.&nbsp; Mike noted there was also a cultural aspect, in that he
believed Europeans were more inclined to join clubs.&nbsp; Mike also
noted that the Foundation was now seeing an increase in the number of
North American companies in the pipeline which was good news.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike provided an update on the Projects, the
related slides for which are attached as <a href="2012_03_exhibits/ExhibitF.pdf">Exhibit F</a>.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Chris
Larocque presented an Operations update.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich provided an overview of the
Foundation&rsquo;s Key Performance Indicators.&nbsp; Mike indicated that there had
been a significant uptick in download trends and a shift in where
many of those downloads are originating from.&nbsp; Mike indicated
that China is now a very large source of downloads for the Eclipse
Foundation.&nbsp; Mike further indicated that putting Eclipse
Marketplace client in the packages had been a major success and that
more and more Eclipse developers are looking to Eclipse Marketplace
as a way to get the things that they need.&nbsp; Bernd Kolb asked if
the Foundation had considered doing an EclipseCon in Asia.&nbsp; Mike
indicated that the Foundation wasn&rsquo;t confident that it would
not lose money doing so.&nbsp; Mike added that if there was a group
of member companies that said they would sponsor an EclipseCon Asia
if the Foundation put one on or support marketing efforts in Asia,
the Foundation would consider it.&nbsp; Dennis Leung indicated that
he would need to have a better understanding on what a marketing
program would look like &ndash; both from the standpoint of framework
and cost.&nbsp; Mike Milinkovich added that if members of the Board
had ideas to generate memberships in Asia, he would welcome
suggestions.&nbsp; Paul Lipton responded that what other
organizations have found is that companies in Asia have close ties
with their governments and that building close relationships with the
right government agencies was key.</SPAN></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">In touching on other Key Performance Indictors
Mike Milinkovich commented that while there was a slight upward slope
on the Eclipse momentum, the new membership pipeline wasn&rsquo;t
where he would like to see it.&nbsp; With respect to Project and
Committer Metrics, Mike commented that for the first time the Eclipse
Foundation had over 100 companies funding Committers at Eclipse.&nbsp;&nbsp;
Mike added that at the request of the Board the Eclipse Foundation
had begun tracking active Projects at Eclipse. He mentioned further
that the EMO would be archiving some of the inactive Projects in
Modeling with Ed Merks&rsquo; assistance.&nbsp;&nbsp; Mike
highlighted that the IP Backlog was high and that Committers may
start complaining about delays in approvals.&nbsp; He further noted
that the intention was to hire for a start in Q3 which should address
the issue.&nbsp; Bernd Kolb asked if the requests for IP review were
from projects that the Foundation had already seen.&nbsp; Janet
Campbell indicated that the Foundation was increasingly seeing new
versions of previously reviewed packages, the exception being when we
see a new Project in a new technological area.&nbsp; In those cases,
the Foundation sees more new technology that we need to look at for
the first time. </SPAN>
</P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US"><U>Enterprise Bundle Repository</U></SPAN></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">John Kellerman provided an overview on a possible
new Project proposal &ndash; the Eclipse Open Bundle Repository.&nbsp;
&nbsp;&nbsp;John Kellerman indicated that IBM was working with VMware
to bring this Project to Eclipse.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Bernd
Kolb as what the impact would be on Janet Campbell&rsquo;s Group.&nbsp;
Mike responded that the effect on the IP Group was expected to be
minimal as changes to the IP Policy allowed the Eclipse Foundation to
host this kind of material without full due diligence review.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Jochen
Krause indicated that he did not understand from a technical
standpoint, why the LGPL code had to be hosted at Eclipse.&nbsp; Mike
Milinkovich responded that he believes that growing the OSGi
ecosystem is good for Eclipse and that he was very motivated to make
sure that Eclipse is seen as the place to source OSGi material.&nbsp;
Bernd Kolb indicated that it was important to have the central point
to ask for the bundle, but technically, why did it need to be sourced
at Eclipse?&nbsp; Paul Lipton added that it was more important than
where the bits flow, it is also how crisply we delineate the
separation of the material at Eclipse, adding that people have a
certain expectation when coming to Eclipse.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">John Kellerman asked Jochen Krause whether his
concern related to the LGPL was having it closer to Eclipse code.&nbsp;
Jochen responded that it was.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U>Invited
Speakers </U></SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Pierre Gaufillet from Airbus provided an overview
on why Airbus pursued the Polarsys Industry Working Group and the
Group&rsquo;s current status, the related slides for which are
attached as <a href="2012_03_exhibits/ExhibitJ.pdf">Exhibit J</a>.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; page-break-after: avoid">
<SPAN LANG="en-US">Dave West, VP, Research Director, Forrester
provided the Board with a perspective on the software industry as it
stands today and may evolve, the related slides for which are
attached as <a href="2012_03_exhibits/ExhibitK.pdf">Exhibit K</a>.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U>Industry
Working Group Process</U></SPAN></P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a discussion on the
Industry Working Group Process, indicating that currently the
Industry Working Group Process document and Charter are approved by
the Executive Director.&nbsp; Based on discussions at a prior Board
meeting, Mike wanted to discuss with the Board whether they remain
comfortable with that.&nbsp; Boris Bokowski indicated that his
concern had primarily been that large portions of the Eclipse
Foundation&rsquo;s Bylaws and Membership Agreement had appeared in
the Charter.&nbsp; Mike responded that that issue had now been
fixed.&nbsp; The general consensus was that people were comfortable
with the existing approach.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US"><U>Web Download Statistics</U></SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; page-break-after: avoid">
<SPAN LANG="en-US">Mike Milinkovich provided an overview of some
Eclipse Foundation web download statistics, the related slides for
which are attached as <a href="2012_03_exhibits/ExhibitL.pdf">Exhibit L</a>. Paul Clenahan suggested that perhaps
the Foundation could look at other opportunities for advertising and
other locations within eclipse.org.&nbsp; Mike Milinkovich asked if
anyone had any concerns in the Foundation sold ads for a Project
download page. &nbsp;John Kellerman indicated that the Project would
want to have some choice &ndash; it would be a concern for some for
example if a competitor elected to advertise on their Project page.&nbsp;
Paul Clenahan responded that he would prefer if the Foundation
gravitate towards competitors dealing with each other assuming there
was a fair mechanism associated with the purchase of advertising.&nbsp;
Bernd Kolb asked about commercial ads associated with Eclipse
Marketplace.&nbsp; Mike Milinkovich indicated that he had not thought
about that, though his initial thought was that what was being
discussed with respect to Project pages would be easier.&nbsp; Chris
Aniszczyk indicated that he did not favour selling advertising on
Project pages, adding that he believed the Foundation could make
money other ways.&nbsp; Mik Kersten added that giving the Project
more control over the pages incents the Projects to invest in them.&nbsp;
Mik added that he believed more &ldquo;Foundation trim&rdquo; on
those pages would result in less Project investment in the pages.&nbsp;&nbsp;
Ed Merks added that a certain segment would not react well to
advertising on Eclipse Project pages because they will see it as
inconsistent &ndash; &ldquo;you give away stuff, but then the Eclipse
Foundation gets to advertise on your page.&rdquo; The general
consensus was that the status quo should remain, and there will be no
advertising on project download pages.</SPAN></P>
<P ALIGN=JUSTIFY STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U>Closing</U></SPAN></P>
<P ALIGN=JUSTIFY STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich thanked the Board members for
attending the meeting and reminded everyone that the next face to
face meeting was in Raleigh, North Carolina in June.&nbsp; Paul
Clenahan asked I there was a meeting on the west coast this year.
Mike confirmed that there was not and asked whether Actuate would be
willing to host a meeting next year.&nbsp; Paul responded that he
thought that would be possible.&nbsp; </SPAN>
</P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich declared the meeting adjourned at
approximately 1:45pm Eastern Time. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on March 26, 2012, is attested to and
signed by me below.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><U>/s/ Janet Campbell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</U></SPAN>
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