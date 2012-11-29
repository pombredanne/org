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
	    <h3>June 19-20, 2012</h3>

<P><SPAN LANG="en-US">A Meeting of the Board of Directors (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Board</B></I></SPAN><SPAN LANG="en-US">&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;</SPAN><SPAN LANG="en-US"><I><B>Corporation&rdquo;</B></I></SPAN><SPAN LANG="en-US">),
was held on held at 8:00 am Eastern time on June 19 and 20, 2012 as a
regularly scheduled meeting. </SPAN>
</P>
<P><SPAN LANG="en-US">Present at the meeting were the following
Directors:</SPAN></P>
<P><BR><BR>
</P>
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
			<P LANG="en-US" ALIGN=LEFT STYLE="border: none; padding: 0cm">Steve
			Winkler for Jutta Bindewald 
			</P>
		</TD>
		<TD WIDTH=300>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=89>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Kellerman</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
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
<P>Present
at the invitation of the Board was Mike Milinkovich, Executive
Director, Chris Larocque,
Treasurer, and Janet Campbell, Secretary, of Eclipse.org Foundation,
Inc.&nbsp; &nbsp;Also present was Pat Huff from IBM.</SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>General
Business:</B></U></SPAN></P>
<P STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced the minutes for the
Board meeting of May 16, 2012, a copy of which is attached hereto as
<a href="2012_05_16_Minutes.php">Exhibit A</a>.&nbsp; The Board passed the following resolution
unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
minutes for the Board meeting of May 16, 2012 are approved.</SPAN></P>
<P><SPAN LANG="en-US"><U>Dual Licensing of Paho Project</U></SPAN></P>
<P><SPAN LANG="en-US">John Kellerman introduced a discussion
regarding IBM&rsquo;s request that the Board approve the dual
licensing of the Paho Project in its entirety under the <A HREF="/org/documents/epl-v10.php">Eclipse
Public License</A> (EPL) and <A HREF="/org/documents/edl-v10.php">Eclipse
Development License</A> (a BSD style license).&nbsp; John further
indicated that the MQTT client code would need to be re-licensed as
it was currently licensed under the EPL only.&nbsp; The Board
unanimously passed the following resolution:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED,</B></SPAN><SPAN LANG="en-US"> the
Board unanimously approves the dual licensing of the Paho Project
under the <A HREF="/org/documents/epl-v10.php">Eclipse
Public License</A> (EPL) and <A HREF="/org/documents/edl-v10.php">Eclipse
Development License</A>.</SPAN></P>
<P><SPAN LANG="en-US"><U>Sustaining Member Issues</U></SPAN></P>
<P><SPAN LANG="en-US">None identified.</SPAN></P>
<P><SPAN LANG="en-US"><U>Committer Member Issues</U></SPAN></P>
<P><SPAN LANG="en-US">John Arthorne introduced a discussion on
Committer issues, focusing initially on the transition to Git.&nbsp;
&nbsp;John highlighted the fact that many Project are moving to Git
and identified a concern that Git makes it very easy to delete or
re-rewrite the history of your source code, even by accident.&nbsp;
This in turn makes it very difficult for people that want to do
updates on a historic version of the code.&nbsp; John asked whether
the Board thought that the Eclipse Foundation should leave this up to
the individual committers to take action to ensure that the source
code history is safe, or whether it was something that the EMO should
take control of the issue?&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Chris Aniszczyk indicated that he believed that
the default should be that you cannot change history, and that change
should not be permitted unless an intellectual property issue arose,
for example.&nbsp; &nbsp;&nbsp;Paul Lipton added that the value of
Eclipse&rsquo;s intellectual property is diminished if we leave holes
open that enable history to be changed.&nbsp;&nbsp; Dennis Leung
indicated his support to make it difficult to make changes to the Git
repository and suggested that any individual wanting to make a change
should have to apply for the ability.&nbsp; Paul Lipton added that
that the clarity of the intellectual property is a primary value
proposition at Eclipse, and because of this if there was an exception
granted, then there would need to be a record of that exception.&nbsp;
Mike Milinkovich indicated that his recollection was that the only
time that the Eclipse Foundation has changed history is if an
intellectual property issue had been found.&nbsp; It was the
consensus of the Board that the EMO should prevent re-writing of
history in the Eclipse Foundation&rsquo;s git repositories unless
express permission was sought, such permissions to be considered on a
case by case basis.&nbsp; &nbsp;</SPAN></P>
<P><SPAN LANG="en-US">John Arthorne also highlighted that there are
private branches on Git where it would be useful to allow people to
re-write history in their own branches.&nbsp; Mike Milinkovich
suggested that defaults are set such that history can&rsquo;t be
changed in the main branches, with some flexibility to be allowed in
private branches.&nbsp; He suggested that the Committer
Representatives work with the EMO to create the defaults to
accomplish this goal.&nbsp; Chris Aniszczyk also suggested that an
audit be conducted on the Projects to ensure that the defaults are
property set.&nbsp; Mike agreed, indicating that he would ask the
webmaster to run some scripts to check that Projects are implementing
the necessary defaults.&nbsp; Paul Lipton asked whether we have a
situation today where some existing Projects on Git may have altered,
either intentionally or unintentionally, their history?&nbsp; Mike
Milinkovich responded that it was possible.&nbsp; John Arthorne added
that within CVS it could have happened as well with some effort, but
there would be no record.&nbsp; With Git, it could have happened, but
we would know.&nbsp; The Board passed the following resolution
unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
that the Board directs the EMO to ensure that the history of the
Foundation&rsquo;s source repositories cannot be changed in &ldquo;main
branches&rdquo;, with flexibility in private branches.&nbsp; Any
exceptions would have to be requested by a PMC to the EMO.&nbsp; A
&ldquo;main branch&rdquo; is defined as any branch from which
releases are built.&nbsp; Any exceptions would have to be requested
by a PMC to the EMO.</P>
<P>Ed Merks highlighted that IT outages on weekends were an issue.&nbsp;
Ed asked if it was possible to empower someone in Europe to help.&nbsp;
Mike Milinkovich responded that the Foundation has wanted for many
years to have more staff in Europe, but that limited funds have
prevented the Foundation from doing so.&nbsp; He added that the EMO
is actively looking at alternatives.&nbsp; &nbsp;John Arthorne
suggested looking at what the Apache Software Foundation is doing.&nbsp;
Mike Milinkovich suggested opening a bug on the subject and copying
him on it.&nbsp; &nbsp;John Arthorne indicated that a committer that
had suggested that not only Strategic Members should be able to
access Webmaster 24 hours a day.&nbsp; There was a general consensus
that this was not reasonable.&nbsp; Mike Milinkovich noted that few
Strategic Developers have been taking advantage of the existing
program, and indicated that some work needed to be done to get the
existing process working better.&nbsp; He also added that the
Foundation would consider starting to talk about whether it opens the
&ldquo;circle of trust&rdquo; to some non-Foundation employees in
different time zones.&nbsp; 
</P>
<P STYLE="page-break-after: avoid"><U>Oracle/Sun TCK Agreement</U></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Mike
Milinkovich indicated that the time had come to decide whether the
Eclipse Foundation signs the Agreement.&nbsp; John Kellerman provided
an overview of IBM&rsquo;s concerns related to the Agreement.&nbsp;&nbsp;
Janet Campbell noted that the Eclipse Foundation&rsquo;s counsel and
external counsel do not believe that the Agreement conflicts with the
<A HREF="/org/documents/epl-v10.php">Eclipse Public
License</A> (EPL).&nbsp; Dennis Leung pointed out that the terms of
the Agreement before the Board are the same terms that others in the
ecosystem have been given, including commercial entities.&nbsp; John
Kellerman asked what level of vote was required.&nbsp; Janet Campbell
responded that a majority vote was needed.&nbsp; </SPAN>
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Mike
Milinkovich commented that finalizing the Agreement before the Board
was done as a service to some Projects to allow them to certify to
the TCK and that the Eclipse Foundation did not have a strong
perspective on executing the Agreement.&nbsp; Mike added that the
Board should consider what level of review and approval should be
required to allow additional projects to use the TCKs and proposed
that a super majority vote be required.&nbsp; Such a vote would be
triggered at the request of the PMC of the Project.&nbsp; Ed Merks
questioned whether the Board wanted to review this type of decision
on a case by case basis.&nbsp; Paul Lipton questioned what the
implications would be on the user.&nbsp; Mike responded that for some
users, this would be considered a good thing in that they would get a
compliant application.&nbsp; Mike added that for an application
server such as Virgo, having a compliant solution would help them.&nbsp;
&nbsp;</SPAN></P>
<P><SPAN LANG="en-US"><U>Enterprise Bundle Repository</U></SPAN></P>
<P><SPAN LANG="en-US">John Kellerman provided an overview of an IBM
proposal to host OSGi bundles at Eclipse in support of the OSGi
ecosystem, the related slides for which are attached as <a href="2012_06_exhibits/ExhibitE.pdf">Exhibit E</a>.&nbsp;
John indicated that IBM is now proposing to have Eclipse Marketplace
point to templates, and that the existing bundles would continue to
exist where they exist.&nbsp; Paul Lipton asked why the change.&nbsp;
John responded that IBM was concerned about distributing non-IP
cleared material from Eclipse.&nbsp; He also said that it would
relieve space and bandwidth concerns.&nbsp; The builds would happen
on individual&rsquo;s machine.&nbsp; Paul Lipton asked if it would be
clear to individuals downloading that they are not getting the
material from Eclipse.&nbsp; John Kellerman and Pat Huff indicated
that it is not currently as clear as it could be that the material
originating from Eclipse Marketplace has not been IP cleared.&nbsp;&nbsp;
Paul Lipton indicated that he agreed.&nbsp;&nbsp; John concluded by
indicating that he did not believe that there was anything related to
the proposal that the Board was required to vote on.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U>Management Reports</U></SPAN></P>
<P><SPAN LANG="en-US">Chris Larocque provided an update on the
Eclipse Foundation&rsquo;s operations and finances.&nbsp; &nbsp;&nbsp;Mike
Milinkovich provided an update on EclipseCon 2013, the related slides
for which are attached as <a href="2012_06_exhibits/ExhibitG.pdf">Exhibit G</a>.&nbsp; Mike indicated that it
would be held at the Seaport Hotel and Trade Centre in Boston, MA
March 25-28, 2012.&nbsp; Dennis Leung asked what the feedback was on
having the event on the east coast.&nbsp; &nbsp;Mike Milinkovich
responded that the feedback was generally positive.&nbsp; Dennis
asked what the other candidates were.&nbsp; Mike responded that they
included Miami, Philadelphia, and Atlanta, adding that the Seaport
offered great rates.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Mike added that the semi-annual training series
is gearing up, and that the Eclipse Foundation is getting ready for
the Juno launch.&nbsp; </SPAN>
</P>
<P LANG="en-US">Mike Milinkovich provided an overview of the Eclipse
Open Source Developer Report, the related slides for which are
attached as <a href="2012_06_exhibits/ExhibitH.pdf">Exhibit H</a>.&nbsp; Mike commented that the Eclipse
Foundation runs the survey itself using survey monkey every year and
gets great press related to the survey.&nbsp; 
</P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an overview of the
Eclipse Foundation Membership and Key Performance Indicators.&nbsp;
Mike highlighted the fact that the number of Projects using Git at
Eclipse has now surpassed 50%.&nbsp; Ed Merks expressed a concern
that Git tooling was still very poor.</SPAN></P>

<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U>Industry
Working Group Updates</U></SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Mike
Milinkovich provided an update on the Long Term Support Industry
Working Group, the related slides for which are attached as <a href="2012_06_exhibits/ExhibitK.pdf">Exhibit
K</a>.&nbsp;&nbsp; Mike added that the goal is that for SR1 in September
the Eclipse Platform and Webtools will have moved over to the CBI.&nbsp;&nbsp;
</SPAN>
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">John Arthorne
indicated that the Eclipse Platform was having difficulty getting
their release out this year because they are having difficulty
testing, primarily on Windows and Mac where the hardware isn&rsquo;t
to the level that the Linux boxes are.&nbsp; Mike Milinkovich
responded that he had no idea that the issue existed and commented
that if the Eclipse Foundation could solve this issue by buying a
faster Windows box, then the Foundation should pursue that solution.&nbsp;
Mike further asked that if there was a bug on the issue to please
copy him on it.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an update on the
Polarsys Industry Working Group, the related slides for which are
attached as <a href="2012_06_exhibits/ExhibitL.pdf">Exhibit L</a>.&nbsp;&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Mike also provided an update on the Automotive
Industry Working Group, the related slides for which are attached as
<a href="2012_06_exhibits/ExhibitM.pdf">Exhibit M</a>.&nbsp;&nbsp; &nbsp;</SPAN></P>
<P><SPAN LANG="en-US">Finally, Mike provided an update on the
Location Industry Working Group Proposal, the related slides for
which are attached as <a href="2012_06_exhibits/ExhibitN.pdf">Exhibit N</a>.&nbsp; Mike indicated that in this
final case, there were quite a few existing assets looking for a new
home with a lot of companies and organizations already involved.&nbsp;
Mike added that the existing organization was dissolving and that
provided a resulting opportunity for the Eclipse Foundation.&nbsp;
&nbsp;The following resolutions were passed unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<B>RESOLVED</B>, the Board approves the creation of information
technology (IT) infrastructure for the Location IWG forge. Such IT
infrastructure will be hosted and supported by the Eclipse Foundation</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
The Board unanimously approves the use of the following licenses for
projects hosted by the Location Industry Working Group. Such projects
must be clearly identified as separate and distinct from Eclipse
Foundation projects, hosted on a web property other than eclipse.org,
and not using the org.eclipse namespace.</P>
<P STYLE="margin-left: 3.2cm; text-indent: -1.3cm; line-height: 115%">
1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
MIT</P>
<P STYLE="margin-left: 3.2cm; text-indent: -1.3cm; line-height: 115%">
2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
BSD (including the Eclipse Distribution License)</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
The Board unanimously approves the use of the GNU Lesser General
Public License (LGPL) for the following third-party components
distributed by projects hosted by the Location Industry Working
Group:&nbsp; 
</P>
<P STYLE="margin-left: 2.54cm">Geotools, JTS, and GEOS, including
their dependencies licensed under either the LGPL, or other licenses
previously approved by the Board.</P>
<P STYLE="margin-left: 1.27cm">Such projects must be clearly be
identified as separate and distinct from Eclipse Foundation projects,
hosted on a web property other than eclipse.org, and not using the
org.eclipse namespace.</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
that the Executive Director of the Corporation is hereby authorized
and empowered, for and on behalf of the Corporation, to retain such
advisers, to execute and deliver such documents, papers or
instruments and to do or cause to be done any and all such other acts
and things as he may deem necessary, appropriate or desirable in
connection with establishing the Location Industry Working Group as
described in the presentation made to the Board on this day and
attached to the minutes of the meeting as <a href="2012_06_exhibits/ExhibitN.pdf">Exhibit N</a>, and the taking
of any such action shall be conclusive evidence of the approval
thereof by this Board of Directors.</P>
<P><SPAN LANG="en-US"><U>Strategy Discussion</U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich introduced a discussion of the
Eclipse Strategy, the related slides for which are attached as
<a href="2012_06_exhibits/ExhibitO.pdf">Exhibit O</a>.&nbsp; </SPAN>
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U>Oracle/Sun
TCK Agreement &ndash; Continued</U></SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Mike
Milinkovich commented that IBM ships many products based on Apache
code that is encumbered by all the obligations of the TCK before the
Board and more.&nbsp; Pat Huff responded that that was true.&nbsp;&nbsp;
Mike further commented that Oracle wants EclipseLink to certify
Eclipse and that not renewing the TCK Agreement would impact Oracle
as well.&nbsp; They would need to take EclipseLink elsewhere.&nbsp;&nbsp;
Dennis Leung commented that it would have to be a catastrophic
event.&nbsp; Mike added that the TCK terms before the Board are the
terms that govern the entire Java ecosystem.&nbsp; Dennis Leung added
that he believed it has always worked this way and that while Oracle
was flexible on the term of the Agreement, the remaining terms are
the same for everyone.&nbsp; Paul Lipton commented that there was
risk, as there always was, but that it appeared to him to be quite
small.&nbsp; Paul added that it appeared to be significant value and
small but non-zero risk.&nbsp; Steve Winkler added that approval
would be on a case by case basis and so risk was limited from that
standpoint as well.&nbsp; </SPAN>
</P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US">Following
discussion, the Board formulated the following draft resolutions to
be used as the basis for an electronic vote to follow the Board
meeting:&nbsp; </SPAN>
</P>
<P STYLE="margin-left: 0.64cm; text-indent: 0.64cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
the Board authorizes the Executive Director to execute the Java TCK
agreement as negotiated with Oracle, as well as any Addendums to that
Agreement that are approved by the Board as per the following
process:</SPAN></P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm"><SPAN LANG="en-US">-</SPAN><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN><SPAN LANG="en-US">The Project PMC has publicly discussed and
approved a Project&rsquo;s request for TCK access, and requests
access from the EMO;</SPAN></P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm"><SPAN LANG="en-US">-</SPAN><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN><SPAN LANG="en-US">A Strategic Member supports the Project&rsquo;s
desire to use the TCK; and</SPAN></P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm"><SPAN LANG="en-US">-</SPAN><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN><SPAN LANG="en-US">The Board has approved the use of the TCK
by the Project by a super-majority vote of the&nbsp;Board.</SPAN></P>
<P STYLE="margin-left: 0.64cm; text-indent: 0.64cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
the Board approves licensing the use of the TCKs by the EclipseLink
Project for the following JSRs: 317, 314, and 222.</SPAN></P>
<P STYLE="margin-left: 0.64cm; text-indent: 0.64cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
the Board approves licensing the use of the TCKs by the Virgo Project
for the following JSRs: 196, 250, 907, 245, 52, 315, and 316.</SPAN></P>
<P><SPAN LANG="en-US"><U>Annual Community Report</U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich referred the Board to the draft
Annual Community Report, attached hereto as <a href="2012_06_exhibits/ExhibitQ.pdf">Exhibit Q</a>.&nbsp; &nbsp;Mike
invited comments on the document and indicated that a vote on the
document would follow the meeting and be held as a vote in connection
with the meeting pursuant to Section 3.12(b)(i) of the <A HREF="/org/documents/Eclipse%20BYLAWS%202008_07_24%20Final.pdf">Eclipse
Bylaws</A>.&nbsp;&nbsp;&nbsp; &nbsp;</SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich indicated that he would get
back to the Board on the schedule for the next face-to-face Board
meeting in Europe.&nbsp; Mike Milinkovich declared the meeting
adjourned at 12:53 pm Eastern time. </SPAN>
</P>
<P ALIGN=CENTER><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P><SPAN LANG="en-US">This being a true and accurate record of the
proceedings of this Meeting of the Board of Directors held on June 19
and 20, 2012, is attested to and signed by me below.</SPAN></P>
<P LANG="en-US" STYLE="margin-left: 8.89cm; text-indent: 1.27cm">
<U>/s/Janet Campbell </U>
</P>
<P LANG="en-US" STYLE="margin-left: 8.89cm; text-indent: 1.27cm">
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