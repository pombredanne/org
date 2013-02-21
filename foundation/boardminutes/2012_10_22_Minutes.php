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
	    <h3>October 22, 2012</h3>

<P><SPAN LANG="en-US">A Meeting of the Board of Directors (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Board</B></I></SPAN><SPAN LANG="en-US">&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Corporation&rdquo;</B></I></SPAN><SPAN LANG="en-US">),
was held the <A HREF="http://www.eclipsecon.org/europe2012/venue">Forum
am Schlosspark</A> in Ludwigsburg, Germany, at 8:30 local time on
October 22, 2012 as a regularly scheduled face to face meeting. </SPAN>
</P>
<P><SPAN LANG="en-US">Present at the meeting were the following
Directors:</SPAN></P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Pat Huff</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dennis Leung</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
</TABLE>

<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, Chris Larocque, Treasurer, and Janet
Campbell, Secretary, of Eclipse.org Foundation, Inc.&nbsp; &nbsp;</SPAN></P>
<P><SPAN LANG="en-US"><U><B>General Business:</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced the full and abridged
minutes for the Board meetings of September 19, 2012, a copy of which
is attached hereto as <a href="2012_09_19_Minutes.php">Exhibit B</a>.&nbsp; The Board passed
the following resolution unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
minutes and abridged minutes for the Board meeting of September 19,
2012 are approved.</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
introduced changes to the IP Advisory Committee Charter that
addressed typographical errors in the document.&nbsp; The Board
passed the following resolution unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
The Board approves the Intellectual Property Advisory Committee
Charter, as attached hereto as <a href="2012_10_exhibits/ExhibitC.pdf">Exhibit C</a>.</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
introduced a proposal to have Jody Garnett declared the leader of the
LocationTech PMC.&nbsp; The Board passed the following resolution
unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
The Board approves the appointment of Jody Garnett as the leader of
the LocationTech PMC.</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
provided an update on EclipseCon Europe, the related slides for which
are attached as <a href="2012_10_exhibits/ExhibitD.pdf">Exhibit D</a>.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Year to Date Financial Results and
Forecast</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Chris Larocque provided an update on the August
year to date financial results and forecast.&nbsp; In so doing, Chris
commented that the first eight months of the year had been quite
successful.&nbsp; Membership dues were stronger than expected, there
had been a little more deferred revenue than expected, and
conferences were performing well.&nbsp; Chris added that there was
some risk however given the economy.&nbsp; Chris added that another
risk was the strength of the Canadian dollar but that that was
expected to ease up by the end of 2013.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Management Reports</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich provided a Marketing, Membership,
and Projects update, the related slides for which are attached as
Exhibit <a href="2012_10_exhibits/ExhibitF.pdf">F</a>, 
<a href="2012_10_exhibits/ExhibitG.pdf">G</a>, and <a href="2012_10_exhibits/ExhibitH.pdf">H</a> respectively.&nbsp; </SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a discussion of the
Topic and Issues Report.&nbsp; Mike noted that the JCP was starting a
major overhaul of the JSPA and that he would be devoting a
significant amount of time to the effort.&nbsp; &nbsp;Pat Huff asked
how many people would be involved in the effort.&nbsp; Mike responded
that everyone on the Executive had the opportunity to be involved.&nbsp;
</SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Jochen Krause raised a concern that while the
Development Process requires that a Project have an API in order to
release, the Eclipse Project released 4.2 without an API.&nbsp;
Jochen further indicated that this was not just a concern for the
EMO, but the community as a whole.&nbsp; Mike Milinkovich suggested
that Jochen raise the issue on the Eclipse PMC list.&nbsp; Mike
highlighted that this was a problem for the Eclipse PMC to solve.&nbsp;
</SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Open Discussion: How to Attract More
Resources to the Eclipse Platform</B></U></SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">The Board engaged
in an open ended discussion on what could be done to attract more
resources to the Platform.&nbsp; Dennis Leung suggested that perhaps
the Board could reverse engineer the problem by looking at who is
currently working on the Platform relative to who should be.&nbsp;&nbsp;
Mike suggested that Oracle would be one such candidate.&nbsp; Google,
Red Hat, and Salesforce were identified as others.&nbsp;&nbsp;
Wolfgang Neuhaus suggested that the Foundation could consider hiring
resources to work on the Platform.&nbsp; Mike Milinkovich responded
questioning who would pay for the resources and determine their
priorities.&nbsp; Dennis Leung indicated that choosing the priorities
for any such resource would be very important.&nbsp; Jochen Krause
noted that there is a notion that the Foundation will not bind itself
to Java and OSGi much longer.&nbsp; He questioned then how important
the Platform would be to the Eclipse Foundation in the future.&nbsp;
With respect to funding developers, Jochen indicated that there were
companies like Bosch and UBS that don&rsquo;t want to be Members of
the Eclipse Foundation but may be willing to provide financial
support.&nbsp; Jochen added that the Long Term Support program was
one such way to do that.&nbsp; </SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Dennis Leung suggested that the Foundation may
want to consider sponsorship funds to fund developer resources.&nbsp;
Hans Kamutzki added that the Foundation could consider focusing on
the &ldquo;corporate responsibility&rdquo; budget in some
corporations.&nbsp; Jochen Krause commented that if you look at the
fundraising efforts of Wikipedia, the majority of the donations come
from large institutions.&nbsp; &nbsp;Wolfgang Neuhaus suggested that
the Foundation could consider charging for the binaries.&nbsp; Mike
Milinkovich responded that that had been considered four years ago
but had been rejected because it was believed to be too disruptive to
the ecosystem.&nbsp;&nbsp; Jochen Krause added that if the Foundation
were to do that, he believed that someone else would step up to
provide the binaries for free. &nbsp;</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Dennis Leung asked John Arthorne how many
resources he needed on the Platform.&nbsp; John indicated ten, and
Pat Huff added that ten would go a long way.&nbsp;&nbsp; Mike
Milinkovich commented that he had thought getting Eclipse into the
Mac Store would be helpful, but that Apple had changed their rules on
the download in a way that made this initiative far less useful.&nbsp;
John Arthorne suggested that perhaps the Foundation should consider
expanding Long Term Support (LTS) to deal with feature requests,
adding that it would help increase the amount of feature work that is
done in the Platform.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
commented that there were a large number of European Projects that
are based on the Eclipse Platform and questioned whether European
funding may be a possibility.&nbsp; Jochen Krause indicated that a
substantial amount of funding was available, some 8.1 billion Euros,
but that a portion of the funding still had to be paid.&nbsp;&nbsp;
Mike questioned whether some of the investments that are already
being made by IBM and others in Europe might count as part of that
investment. &nbsp;Mike Milinkovich suggested that if the Foundation
were to proceed to set up a consortium based in Europe, it may be
possible for participants to have a portion of that European
investment recovered.&nbsp; &nbsp;Pat Huff asked if this was
something that the Foundation would go forward with.&nbsp; &nbsp;Mike
Milinkovich responded that there were a number of factors that would
need to be considered.&nbsp; The Foundation would want IBM&rsquo;s
support to go forward.&nbsp; Mike indicated that companies like
Itemis do this all the time.&nbsp;&nbsp; Mike added that the downside
risk is that there are a number of companies that are very practiced
at getting involved in these kinds of programs that don&rsquo;t
deliver successful technology.&nbsp;&nbsp; Mike further added that
with the right consortium, it could work.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
summarized to say that the notion of extending LTS, and exploring the
possibility of leveraging European funding were two of the best ideas
arising out of the discussion.&nbsp; Pat Huff added that getting
other companies to participate in the development of the Platform was
also an important point raised.&nbsp; Mike Milinkovich commented that
the Foundation had always taken the high road in that respect.&nbsp;
Paul Clenahan asked how many other companies were using the Eclipse
Platform strategically but not contributing.&nbsp; Mike Milinkovich
responded that that would likely be a long list, but that it would
depend on how you characterize &ldquo;strategically using&rdquo;.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Proposal to Add a Third EclipseCon in
2013 in Toulouse, France</B></U></SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
provided an overview on planning for EclipseCon France, the related
slides for which are attached as <a href="2012_10_exhibits/ExhibitK.pdf">Exhibit K</a>.&nbsp; Dennis Leung
suggested that one way to support the conference would be to locate
the next Eclipse Foundation face to face Board meeting there.&nbsp;
The Board unanimously passed the following resolution:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that the Executive Director of the Corporation is hereby authorized
and empowered, for and on behalf of the Corporation, to retain such
advisors, to execute and deliver such documents, papers or
instruments and to do or cause to be done any and all such other acts
and things as he may deem necessary, appropriate or desirable in
connection with the organization and execution of the EclipseCon
France 2013 conference, including without limitation the selection of
vendors responsible for the operations and logistics of the event,
and the taking of any such action shall be conclusive evidence of the
approval thereof by this Board of Directors.</SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>Location
Industry Working Group Licensing Proposal</B></U></SPAN></P>
<P ALIGN=LEFT STYLE="page-break-after: avoid">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich turned the Board&rsquo;s
attention to the licensing proposal that had been previously
circulated to the Board in the Agenda to this meeting.&nbsp; The
Board unanimously approved the following resolution:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
The Board unanimously approves the use of the following licenses for
projects hosted by the Location Industry Working Group. Such projects
must be clearly identified as separate and distinct from Eclipse
Foundation projects, hosted on a web property other than eclipse.org,
and not using the org.eclipse namespace.</SPAN></P>
<P STYLE="margin-left: 3.81cm; text-indent: -1.27cm">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
MIT</P>
<P STYLE="margin-left: 3.81cm; text-indent: -1.27cm">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
BSD (including the Eclipse Distribution License)</P>
<P STYLE="margin-left: 3.81cm; text-indent: -1.27cm">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Apache License v2</P>
<P><SPAN LANG="en-US"><U><B>Foundation 2.0</B></U></SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
introduced a discussion of Eclipse&rsquo;s future, the related
presentation material for which is attached as <a href="2012_10_exhibits/ExhibitL.pdf">Exhibit L</a>.&nbsp;
&nbsp;Jochen Krause commented that the slides make reference to the
belief that infrastructure is no longer sufficient to define an open
source organization, noting that many of the things that we see in
relation to the Foundation relate to hardware.&nbsp; Jochen
questioned whether competing on infrastructure was the right choice
for the Foundation.&nbsp; Mike Milinkovich reflected back asking
whether Jochen&rsquo;s question really was a question of why the
Foundation doesn&rsquo;t move its infrastructure to GitHub.&nbsp;
Mike addressed that question by highlighting that GitHub does not
require its projects to display their license and it&rsquo;s terms of
use do not address licensing.&nbsp; While Mike had attempted to
persuade GitHub to make changes in this area, they had declined to do
so.&nbsp; Mike further added that GitHub is a commercial entity and
going to GitHub would mean endorsing one vendor where there are many
other competitors, including some at the Board table.&nbsp; </SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Jochen Krause commented that the Foundation
setting up its own infrastructure was costly and questioned whether,
in considering Foundation 2.0, the Foundation should be looking at
alternatives to running its own infrastructure.&nbsp; Hans Kamutzki
pointed to the need to define the term &ldquo;infrastructure&rdquo;
in this context.&nbsp; Mike Milinkovich commented that the Foundation
had looked at how much it would cost to run the Foundation&rsquo;s
infrastructure in the cloud and once you take into account that most
of the Foundation&rsquo;s hardware is donated, it is much less
expensive for the Foundation to run the infrastructure itself.&nbsp; </SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Jochen Krause noted that the Eclipse Foundation&rsquo;s
&ldquo;secret sauce&rdquo; is that it is the place where people
collaborate within the context of the Foundation&rsquo;s Intellectual
Property (IP) Management and Development Process; it has very little
do with where the source code is hosted.&nbsp; Jochen questioned how
far we push vendor neutrality and whether being vendor neutral by
necessity means that the Foundation must make everything itself.&nbsp;&nbsp;
Chris Aniszczyk added that he didn&rsquo;t really care where the code
is hosted provided the Eclipse Projects subscribe to the Eclipse
Foundation&rsquo;s rules.&nbsp; Chris added that he could envision
tools to enforce both the Development and IP Processes.&nbsp; &nbsp;&nbsp;John
Arthorne added that Git does not present much work for the
Foundation, but that CBI requires more effort.&nbsp; John suggested
that there may be examples other than where we host the code that we
should re-visit.&nbsp; </SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich asked what GitHub would offer.&nbsp;
Jochen Krause responded that it had the notion of enterprise and
organizations within organizations.&nbsp; Jochen added that there are
a lot of things that the Foundation is building for LTS that are
already available on GitHub.&nbsp; Jochen highlighted that being
vendor neutral has cost implications and questioned whether it was
something the Foundation wished to stick with.&nbsp; Mike Milinkovich
responded that Sonatype would likely give the Foundation a free
license to Sonatype Pro but that the Foundation had always had the
policy that if it goes on our servers we wanted to be vendor
neutral.&nbsp; Dennis Leung suggested that the Foundation may want to
consider going another way &ndash; having a vendor pay the Foundation
to use their software and having the Foundation recognize the
vendor.&nbsp; Ed Merks asked what benefit the Foundation would get
from using GitHub.&nbsp; Jochen Krause responded that the Foundation
would not have to manage the infrastructure itself.&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Jochen suggested
that the Foundation use commercial products on our servers provided
it doesn&rsquo;t lock the Foundation in.&nbsp; Jutta Bindewald asked
whether there was a risk associated with losing the vendor
neutrality.&nbsp; Mike Milinkovich responded that there was because
there would always be a competitor that the Foundation did not choose
who may be disgruntled that they were not chosen.&nbsp; Jochen Krause
commented that if the Foundation is considering such a decision from
a strategic standpoint, then he thought the Foundation should be open
to acquiring services.&nbsp; &nbsp;Mike Milinkovich commented that if
the Eclipse repositories were at GitHub, the Foundation would not
control the user management.&nbsp; Jochen questioned the value of
requiring use of a portal to send a message to push five people to
vote +1, and whether that was what truly defined the Eclipse
Community.&nbsp; </SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich asked the Board for an expression
of interest to continue the conversation.&nbsp; Jochen Krause, Hans
Kamutzki, Jutta Bindewald, and Chris Aniszczyk all indicated an
interest in continuing the conversation.&nbsp; Mike Milinkovich noted
that by the time any follow on analysis was complete, the Foundation
would have the LocationTech and PolarSys Industry Working Groups up
and running.&nbsp; Mike added that the Foundation would not stop
working on what was underway while the analysis is completed.&nbsp;
Mike indicated that he would establish a Board Working Group,
initially setting up three one hour calls for those that are
interested to attend. </SPAN>
</P>
<P ALIGN=LEFT>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich reviewed with the Board the
Eclipse Foundation&rsquo;s Program Plan for 2013 which had been
approved by the Finance Committee, the related presentation for which
is attached as <a href="2012_10_exhibits/ExhibitM.pdf">Exhibit M</a>.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Industry Working Group Updates</B></U></SPAN></P>
<P ALIGN=LEFT>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich provided an update on Industry
Working Groups (IWG), the related slides for which are attached as
<a href="2012_10_exhibits/ExhibitN.pdf">Exhibit N</a>.&nbsp; In so doing, Mike highlighted the lack of a full
time Project Manager for PolarSys as a risk to PolarSys&rsquo;
success.&nbsp; Mike added while IWGs were coming along, there was
still work to be done and the Foundation was not yet generating as
much revenue from IWGs as it would like.&nbsp;&nbsp; Mike further
noted that he had not yet seen the progress in the M2M IWG that he
would like.&nbsp;&nbsp;&nbsp; </SPAN>
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>TCK
Agreement</B></U></SPAN></P>
<P STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Dennis Leung commented that he had the sense in
the last Board meeting that there were a number of concerns regarding
the TCK Agreement that was before the Board for approval.&nbsp;
Dennis noted that the focus to date has largely been on the
consequence of the worst case, which is something that the Board
needs to look at.&nbsp; Dennis commented that the Board also needed
to consider the likelihood that the Agreement does not renew.&nbsp;
In Dennis&rsquo; opinion that is very unlikely given that not
renewing this TCK Agreement, if approved, would severely harm the
Java ecosystem.&nbsp; Dennis added that his personal opinion is that
something drastic would have to happen for that to occur.&nbsp;
Dennis noted that if things move forward as they are today, Oracle
wants to build a healthy ecosystem, and would want to have open
source implementations of the specifications and have that happen in
open source communities.&nbsp; </SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Dennis added that the benefit is that Projects and
Committers get access to the TCKs for free.&nbsp; Dennis noted that
Oracle and Sun before have commercial licenses and have a significant
in these TCKs.&nbsp; Dennis also added that the risks associated with
the Agreement are isolated on a Project by Project basis.&nbsp; </SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Dennis summarized by saying that in principle,
this has been done in the past and the risk presented is on a per
Project basis and that the likelihood of the worst case just doesn&rsquo;t
seem to be there.&nbsp; Dennis added that the licensor is a Strategic
Member, a member of the Board, and has a significant commitment to
Eclipse, and said that he felt that should be factored into the
ultimate decision.&nbsp; </SPAN>
</P>
<P ALIGN=LEFT>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Jutta Bindewald supported Dennis&rsquo; comments
and indicated that SAP was also very interested in seeing the TCK
Agreement signed by the Eclipse Foundation.&nbsp; Jutta noted that
SAP considered both the benefits and the risks of licensing the TCKs
at the Eclipse Foundation and decided that the benefits exceeded the
risks.&nbsp; Jutta added that the failure to extend the license would
be damaging to the reputation of both Oracle and the Eclipse.&nbsp; </SPAN>
</P>
<P ALIGN=LEFT>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Jochen Krause indicated that while he would not
agree to have this Agreement impact his Projects, we would not want
to take that decision away from other Projects and would consider
that in the course of voting.&nbsp; Mike Milinkovich added that in
the Eclipse Community, Oracle has always been an excellent citizen.&nbsp;
Mike further added that there was nothing that would require a
Project to use a TCK.&nbsp; Eric Clayberg indicated that his
inclination was to support the vote in light of the fact that two
Strategic Members want the TCK Agreement signed, that the risks are
very low and remote at ten years out.&nbsp; </SPAN>
</P>
<P ALIGN=LEFT STYLE="page-break-before: always"><SPAN LANG="en-US"><U><B>Executive
Director Performance Review</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">The Board met privately to discuss the Executive
Director&rsquo;s Performance review.</SPAN></P>
<P><SPAN LANG="en-US">The meeting adjourned. </SPAN>
</P>
<P ALIGN=CENTER>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P><SPAN LANG="en-US">This being a true and accurate record of the
proceedings of this Meeting of the Board of Directors held on October
22, 2012, is attested to and signed by me below.</SPAN></P>
<P LANG="en-US" STYLE="margin-left: 6.89cm; text-indent: 1.27cm"><U>/s/Janet Campbell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </U>
</P>
<P LANG="en-US" STYLE="margin-left: 6.89cm; text-indent: 1.27cm">Secretary of Meeting</P>
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