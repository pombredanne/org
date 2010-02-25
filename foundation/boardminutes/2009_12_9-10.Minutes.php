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
	$pageTitle 		= "Eclipse Foundation Board Meeting Minutes";
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
	    <h3>December 9-10, 2009</h3>

	   <P ALIGN=CENTER><SPAN LANG="en-US">_________________________________________________________________________</SPAN></P>
<P><SPAN LANG="en-US">A Meeting of the Board of Directors (the
&ldquo;<I><B>Board</B></I>&rdquo;) of Eclipse.org Foundation, Inc., a
Delaware corporation (the &ldquo;<I><B>Corporation&rdquo;</B></I>),
was held on held at 8:30am Eastern time at the Grove Isle Hotel in
Miami, Florida on December 9 &amp; 10, 2009 as a regularly scheduled
quarterly face-to-face meeting. </SPAN>
</P>
<P><SPAN LANG="en-US">Present were the following Directors:</SPAN></P>
<TABLE WIDTH=613 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Attending
			Dec. 9</B></P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Attending
			Dec. 10</B></P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Company</B></P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ronnie King for
			Rich Bartlett</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Boris Bokowski</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans-Joachim
			Brede</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Member Representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans-Christian
			Brockmann</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">brox
			IT-Solutions GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Actuate
			Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Doug Gaff</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans Kamutzki</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Member Representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Kellerman</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Etienne Juliot
			for Stephane Lacrampe</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OBEO</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Lipton</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">CA Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wolfgang
			Neuhaus</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Shawn Pearce</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Member Representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sustaining
			Member Representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jason Van Zyl</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sonatype</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Todd Williams</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Genuitec, LLC</P>
		</TD>
	</TR>
</TABLE>
<P>&nbsp;</P>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, Janet Campbell, Secretary, and Chris
Larocque, Treasurer of Eclipse.org Foundation, Inc.</SPAN></P>
<P STYLE="margin-top: 0.42cm; page-break-after: avoid"><SPAN LANG="en-US"><U><B>General
Business</B></U></SPAN> 
</P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm">
Mike Milinkovich introduced the minutes from the November meeting and
asked for any corrections and/or comments.&nbsp; The following
resolution was unanimously passed:</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that there was unanimous consent to approve the amended minutes of
the November Board call, attached hereto as <a href="2009_12_exhibits/ExhibitA.pdf">Exhibit A</a>.&nbsp; &nbsp;&nbsp;</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced the enabling
resolution for the 2010 Members Meeting.&nbsp; The following
resolution was unanimously passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that there was unanimous consent to have the annual membership
meeting on March 22, 2010 at EclipseCon 2010, in Santa Clara,
California.&nbsp;&nbsp;&nbsp; </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
proposed that the Board meeting schedule for 2010 comprise three face
to face meetings together with monthly calls.&nbsp; More
specifically, the face to face meetings would comprise a March
meeting at EclipseCon, a two day meeting in June at a US East Coast
location to be finalized, and a final face to face meeting be held at
Eclipse Summit Europe in Germany.&nbsp; The following resolution was
unanimously passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that there was unanimous consent to approve the Board meeting
schedule as proposed.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich proposed a resolution to
re-appoint the Eclipse Foundation Officers pursuant to Section 5.2 of
the <A HREF="http://www.eclipse.org/org/documents/Eclipse%20BYLAWS%202008_07_24%20Final.pdf">Eclipse
Foundation Bylaws</A>.&nbsp; The following resolutions were passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
there was unanimous consent to re-appoint Mike Milinkovich Executive
Director of the Eclipse Foundation.</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
there was unanimous consent to re-appoint Janet Campbell Secretary of
the Eclipse Foundation.</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
there was unanimous consent to re-appoint Chris Larocque Treasurer of
the Eclipse Foundation.</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
noted that while annual enabling resolutions had traditionally been
passed for both EclipseCon and Eclipse Summit Europe, it was the
guidance of external counsel that these enabling resolutions were no
longer required as running the events was now a standard practice of
the Eclipse Foundation.&nbsp; </SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich provided a Marketing update, the
related presentation material for which is attached as <a href="2009_12_exhibits/ExhibitB.pdf">Exhibit B</a>.&nbsp;
&nbsp;In discussing Eclipse Labs, a Board member indicated that he
hoped that Eclipse Labs would give a good path for projects to
migrate from Eclipse Labs to the Foundation.&nbsp; He noted that
there are already sites that will host and store your project for
free.&nbsp; For Eclipse Labs to be useful, it needs to make the
transition from Eclipse Labs to the Foundation as easy as possible.&nbsp;
Another Board member echoed Shawn&rsquo;s sentiments indicating that
there should be a process that requires such things as a contributor
agreement.&nbsp; A Board member indicated that the Foundation should
consider requiring the use of the EPL.&nbsp;&nbsp; A Board member
indicated that there needed to be a clear distinction between &ldquo;safe&rdquo;
code from eclipse.org and code that has not been reviewed.&nbsp;&nbsp;
A Board member asked if we would be permitting GPL licensed code on
Eclipse Labs.&nbsp; Mike Milinkovich indicated that we would not be.&nbsp;
Mike asked Board Members to let him know of any Projects that might
be interested in being the first tenants for Eclipse Labs.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich provided a Membership update, the
related presentation material for which is attached as <a href="2009_12_exhibits/ExhibitC.pdf">Exhibit C</a>.&nbsp;&nbsp;&nbsp;
Mike indicated that the Foundation had a complete kit to approach
companies for Membership that is geared towards the altruistic
reasons a Members should join Eclipse.&nbsp;&nbsp;&nbsp; He further
indicated that once a company had joined, it was typically far easier
to up sell the company on a higher level of Membership.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Chris Larocque provided an Operations update. </SPAN>
</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
provided an update on Eclipse Summit Europe 2009 indicating that it
had been a success.&nbsp;&nbsp; A copy of the related presentation is
attached as <a href="2009_12_exhibits/ExhibitE.pdf">Exhibit E</a>.&nbsp; </SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich reviewed the Key Performance
Indicators (KPIs).&nbsp; Mike noted that the Foundation was seeing a
lot of interest in e4 which is a very good thing; noting also that it
also increased the pressure on the project team.</SPAN></P>
<P><SPAN LANG="en-US"><B><U>Committer Issues</U></B></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Boris Bokowski spoke on behalf of the Committer
Representatives indicating that the recent problem with CVS had
slowed everyone down.&nbsp; Boris said he believed that the problem
was largely fixed now, but hoped that there would be continued
improvement in that area.&nbsp; Boris further indicated that he
thought there was a need at the Eclipse Foundation for better and
more hardware for things like the file servers.&nbsp; Boris asked
fellow Board Members to see if there was the possibility of donating
hardware to Eclipse.&nbsp; Shawn Pearce indicated that Google had
recently donated $20K to the Eclipse Foundation to buy hardware to
support Git and that hopefully that would free up some existing
hardware.&nbsp; Mike Milinkovich thanked Google for their
contribution and further indicated that if companies are not in a
position to donate hardware, the Foundation could accept cash
donations.&nbsp;&nbsp; Chris Aniszczyk expressed concern that the
Eclipse Foundation does not currently have a full time evangelist.&nbsp;
Mike Milinkovich indicated that it is correct that the Eclipse
Foundation does not have a full time evangelist and that there was no
plan to change that in the coming budgetary year.&nbsp; Mike further
indicated that members of the Project leadership are the best
evangelists.&nbsp; Ed Merks concurred that he felt that this was the
Project&rsquo;s responsibility.&nbsp; Ed Merks further indicated that
he thought that Committers are generally pretty happy and that the IP
process improvements have made a big difference &ndash; IP just isn&rsquo;t
on the radar as an issue.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Solutions Members Issues</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Hans Kamutzki spoke on behalf of the Solutions
Members, asking that the Board discuss the recent blog postings by
Bjorn Freeman-Benson and Mike&rsquo;s response on <A HREF="http://dev.eclipse.org/blogs/mike/2009/11/30/dear-bjorn-go-away/">November
30</A></SPAN><A HREF="http://dev.eclipse.org/blogs/mike/2009/11/30/dear-bjorn-go-away/"><SUP><SPAN LANG="en-US">th</SPAN></SUP><SPAN LANG="en-US">,
2009</SPAN></A><SPAN LANG="en-US">.&nbsp; Several Board Members
expressed concern at the possibility of having someone as disruptive
as Bjorn Freeman-Benson on the Board should he run and be elected to
the Board.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>e4</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Boris Bokowski provided an update on e4, the
related presentation slides for which are attached as <a href="2009_12_exhibits/ExhibitG.pdf">Exhibit G</a>.&nbsp;
</SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Strategic Member Reports</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">The following Strategic Member Reports were
presented:</SPAN></P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">John Kellerman presented for IBM,
the related presentation material or which can be found as <a href="2009_12_exhibits/ExhibitH.pdf">Exhibit H</a>.</SPAN></P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Dennis Leung presented for Oracle,
the related presentation material for which can be found as <a href="2009_12_exhibits/ExhibitI.pdf">Exhibit I</a>.</SPAN></P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Wolfgang Neuhaus presented for
Itemis, the related presentation material for which is attached as
<a href="2009_12_exhibits/ExhibitJ.pdf">Exhibit J</a>.</SPAN></P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Ronnie King presented for Nokia, the
related presentation material for which is attached as <a href="2009_12_exhibits/ExhibitK.pdf">Exhibit K</a>.</SPAN></P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Michael Bechauf presented for SAP,
the related presentation material for which is attached as <a href="2009_12_exhibits/ExhibitL.pdf">Exhibit L</a>.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Long Term Support</B></U></SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
introduced a discussion of the possible long term support of Eclipse
Project releases.&nbsp; Following the discussion, it was agreed that
a Board Working Group should be created to discuss a strategy for the
long term support of Eclipse releases and the possibility of a
related service offering by the Eclipse Foundation.</SPAN></P>
<P><U><B><SPAN LANG="en-US">December 10, 2009</SPAN></B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">The meeting resumed at 8:30 on December 10, 2009.&nbsp;
&nbsp;&nbsp;</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Executive Director Review</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">The Board met with Mike Milinkovich absent to
discuss the Executive Director&rsquo;s review.&nbsp; In so doing, the
Board together drafted an email to Mike which the Board proposed be
considered Mike&rsquo;s performance review.&nbsp; The following
resolution was passed.</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
there was unanimous consent that the email drafted by the Board and
sent to Mike Milinkovich dated December 10, 2009 be considered his
performance review.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">In discussing the review, there was general
agreement that the KPIs be presented quarterly rather than monthly.&nbsp;
A Board member indicated that the Board would like Mike to interpret
the KPIs for the Board and give the Board his thoughts on what they
mean both for the long term and the short term.&nbsp;&nbsp; Another
Board member added that there was a sense on the Board that &ldquo;business
as usual&rdquo; was no longer going to be effective and that the
Board would like to see Mike consider disruptive solutions to ensure
the ongoing success of the Eclipse Foundation.</SPAN></P>
<P><B><SPAN LANG="en-US"><U>EclipseCon 2010 Update</U></SPAN></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich presented an update on EclipseCon
2010, the related presentation material for which is attached as
<a href="2009_12_exhibits/ExhibitM.pdf">Exhibit M</a>.&nbsp; In general, planning for the conference was well in
hand.&nbsp; Mike further added a request to all Board Members to send
people where possible.</SPAN></P>
<P><U><SPAN LANG="en-US"><B>Roadmap Update</B></SPAN></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich <a href="2009_12_exhibits/Exhibit.pdf">indicated</a> that the last Roadmap
had been approved in December 2008.&nbsp; Mike indicated that the
Foundation was planning on having the next roadmap approved at the
March 2010 Board meeting.&nbsp; The intention is to have the Roadmap
be more relevant by having it focus on the release train.&nbsp; Mike
further indicated that December 18, 2009 is the deadline for Projects
to declare their Release Train intentions.&nbsp; Mike indicated that
the Foundation would like to propose a change in how the Roadmap is
used.&nbsp; The thought is to have the Requirements Council decide
what goes into the Release Train.&nbsp; The good news is that is a
meaningful role for the Requirements Council.&nbsp; The bad news is
that the Requirements Council in its current form doesn&rsquo;t have
the right people on the Council for this proposed new role.&nbsp; If
we are to proceed down this path, it will force a re-boot of the
Requirements Council.&nbsp; A Board member asked who was on the
Requirements Council.&nbsp; Mike indicated that every strategic
member has a representative plus anyone appointed by the Executive
Director.&nbsp; Another Board member commented that the proposal does
drive Membership value which is important to the Board.&nbsp; A Board
member indicated that he thought that it would be beneficial to have
Committers represented on the Requirements Council.&nbsp;&nbsp;
Another Board member indicated that he thought it would make sense to
have the Requirements Council mirror the composition of the Board.&nbsp;
There was some additional discussion of the Requirements Council
working with the intellectual property (IP) team to factor a
Project&rsquo;s IP review requirements into the selection process.&nbsp;&nbsp;&nbsp;
Mike indicated that the Foundation would write up a document to
socialize with the community and bring it back to the Board for
consideration in March 2010 to define the process.&nbsp; Mike
indicated that the process would ensure that representatives of the
committer community would be included in the Requirements Council to
ensure that the project&rsquo;s perspective was represented.&nbsp;
Mike further indicated that it would be a transparent process.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Membership Agreement &ndash; Proposed
Changes to Exhibit C</B></U></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a proposed change to
Exhibit C of the Membership to allow for another tier of dues for
very small companies in the Solutions Member category.&nbsp; There
was general agreement that the cap for company size for this new tier
should be 10 employees or contractors and that there need be no limit
on the duration for which a company could participate at that tier of
Membership dues.&nbsp; </SPAN>
</P>
<P STYLE="margin-left: 1.25cm; text-indent: 1.25cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that there was unanimous consent that Exhibit C of the Membership
Agreement be revised such that Solutions Members with less than $1
million in revenue and fewer than 10 employees will pay annual dues
of $1500.</SPAN></P>
<P><U><B><SPAN LANG="en-US">Strategic Member Reports</SPAN></B></U></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">The following
Strategic Member Reports were presented:</SPAN></P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Etienne Juliot presented for OBEO,
the related presentation material or which can be found as <a href="2009_12_exhibits/ExhibitN.pdf">Exhibit N</a>.</SPAN></P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Hans-Christian Brockmann presented
for Brox, the related presentation material for which can be found as
<a href="2009_12_exhibits/ExhibitO.pdf">Exhibit O</a>.</SPAN></P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Ricco Deutcher presented for Sopera,
the related presentation material for which can be found as <a href="2009_12_exhibits/ExhibitP.pdf">Exhibit P</a>.</SPAN></P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm"><FONT FACE="Symbol"><SPAN LANG="en-US">&middot;</SPAN></FONT><FONT FACE="Symbol"><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN></FONT><SPAN LANG="en-US">Chris Aniszczyk presented for
EclipseSource, the related presentation material for which can be
found as <a href="2009_12_exhibits/ExhibitQ.pdf">Exhibit Q</a>.</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike Milinkovich
commented that one thing that really struck him this year was how the
smaller Strategic Members have really stepped up their involvement,
meeting their membership obligations.</SPAN></P>
<P STYLE="page-break-after: avoid"><B><SPAN LANG="en-US"><U>Budget
Review and Approval</U></SPAN></B></P>
<P STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Chris Larocque provided an overview of the
budget.&nbsp; Mike Milinkovich introduced a discussion of the costs
associated with the IP process at Eclipse.&nbsp; Mike Milinkovich in
summarizing the conversation indicated that he believed the Board
felt the Eclipse Foundation should do more to market the value of the
IP process at Eclipse as a clear differentiator for Eclipse in open
source communities.&nbsp; </SPAN>
</P>
<P><U><SPAN LANG="en-US"><B>General Discussion</B></SPAN></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich indicated that he had a couple of
topics that we wanted the Board&rsquo;s feedback on.&nbsp; Firstly,
Mike asked the Board what it thought of the Executive Director of the
Eclipse Foundation being on the CodePlex Foundation&rsquo;s Board of
Advisors.&nbsp; The general consensus of the Board is that this
possibility should not be pursued. However, the Board requested that
a representative of the CodePlex Foundation be invited to present to
the Eclipse Board at the March 2010 meeting.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich advised the Board that the Device
Software Development Platform (DSDP) is no longer functioning
effectively as an Eclipse Top Level Project. &nbsp;Mike indicated
that his intent was to wind up the top level project, move the active
parts elsewhere and archive the projects which are no longer active.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich indicated that he was starting to
see interest in bringing projects to Eclipse that don&rsquo;t fit the
traditional Eclipse scope.&nbsp; For example, there is a desire to
bring an OSGi project for SCALA to Eclipse.&nbsp; Mike said that
while it was his decision to make, he wanted the Board&rsquo;s
feedback.&nbsp; Mike further indicated that he was inclined to accept
the project proposal because while the range of languages commonly
used for development has expanded significantly in recent years.&nbsp;
Accepting a project like SCALA would be important as:&nbsp; (1)
Eclipse must stay current/relevant to its core developers; (2)
Eclipse needs to be seen as innovative and open to new ideas.&nbsp;&nbsp;
Mike noted that there is also a company that would like to bring a
project to Eclipse that is essentially an industry model expressed in
UML.&nbsp; &nbsp;A Board member indicated that this was a subject
worthy of additional discussion.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich asked if there were any other
topics that Board members would like to raise. A Board member asked
whether Mike wished to discuss the Java Development Tools Project
(JDT) and their dwindling resources.&nbsp; Mike commented that for
many people the JDT Project is Eclipse.&nbsp; It is a very mature
Project and the level of investment in the Project has been
declining.&nbsp; While there are features that the community would
like to see added to JDT, very little is happening.&nbsp; Mike
indicated that he had a proposal for a project that would involve a
community lead taking JDT and doing interesting things like it much
the same as the approach taken with e4 but that those discussions
were still in the early stages.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><B><U>Executive Director Succession Planning</U></B></SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Chris Larocque presented a succession plan
template.&nbsp; A Board member indicated that he would like to see
more details on the proposal and suggested that perhaps it be
discussed in greater detail at the next Board meeting.</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike
Milinkovich declared the meeting adjourned at approximately 2:47
&nbsp;Eastern Time. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on December 9th and 10th, 2009, is
attested to and signed by me below.</SPAN></P>
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