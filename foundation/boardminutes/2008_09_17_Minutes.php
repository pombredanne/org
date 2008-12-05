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
	    <h3>September 17, 2008</h3>
<P ALIGN=CENTER>_________________________________________________________________________</P>
<P>A Meeting of the Board of Directors (the &ldquo;<B><I>Board</I></B>&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;<B><I>Corporation&rdquo;</I></B>), was held on held at 8:30am
Central time at the Hotel Palomar, Dallas, Texas on September 17,
2008 as a regularly scheduled quarterly face-to-face meeting. 
</P>
<P>Present at the meeting were the following Directors:</P>
<TABLE WIDTH=587 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm"><B>Present</B></P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Tim Barnes</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">OpenMethods LLC</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Rich Bartlett</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Hans-Christian Brockmann</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">brox IT-Solutions GmbH</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Actuate Corporation</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Robert Day</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Doug Gaff</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Richard Gronback</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Borland Software Corp.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Andi Gutmans</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Zend Technologies</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Wes Isberg</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Sonatype</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Mik Kersten</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Jonathan Khazam</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Intel Corporation</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">St&eacute;phane Lacrampe</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">OBEO</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Doug Clarke for Dennis Leung</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Emma McGrattan</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected committer
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Wolfgang Neuhaus</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Eric Newcomer</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">IONA Technologies</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Tracy Ragan</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Al Nugent</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">CA Inc.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Maher Masri</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Genuitec</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Steve Saunders</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Wind River</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Somasundaram Shanmugam</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Sybase</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">John Kellerman</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Todd E. Williams</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Elected add-in provider
			representative</P> 
		</TD>
	</TR>
	<TR>
		<TD WIDTH=39 VALIGN=TOP>
			<P STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=320 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Dino Brusco for Christy
			Wyatt</P>
		</TD>
		<TD WIDTH=227 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm">Motorola</P>
		</TD>
	</TR>
</TABLE>
<P>&nbsp;</P>
<P>Present at the invitation of the Board was Mike Milinkovich,
Executive Director, Janet Campbell, Secretary, and Chris Larocque,
Treasurer of Eclipse.org Foundation, Inc.</P>
<P><B><U>General Business:</U></B></P>
<P><U>New Strategic Members:</U>&nbsp; Mike Milinkovich asked the
representatives of the new Strategic Members to provide an overview
of their respective companies.&nbsp;&nbsp; The following three
presentations were provided to the Board:</P>
<P STYLE="margin-left: 1.27cm">St&eacute;phane Lacrampe provided an
overview of OBEO, a copy of the related presentation is attached
hereto as <a href="2008_09_exhibits/ExhibitA.pdf">Exhibit A</a>.</P>
<P STYLE="margin-left: 1.27cm">Maher Masri provided an overview of
Genuitec, a copy of the related presentation is attached hereto as
<a href="2008_09_exhibits/ExhibitB.pdf">Exhibit B</a></P>
<P STYLE="margin-left: 1.27cm">Wes Isberg provided an overview of
Sonatype, a copy of the related presentation is attached hereto as
<a href="2008_09_exhibits/ExhibitC.pdf">Exhibit C</a>.</P>
<P><U>Minutes:</U>&nbsp; There was unanimous consent to approve the
following resolution:</P>
<P STYLE="text-indent: 1.27cm"><B>RESOLVED, </B>that there was
unanimous consent to approve the full and abridged minutes of the
August 20, 2008 Board Meeting.</P>
<P STYLE="text-indent: 1.27cm"><B>RESOLVED, </B>that there was
unanimous consent to approve the minutes of the February 16, 2008
Board Meeting.</P>
<P><U>Board Member Representation:</U>&nbsp; &nbsp;&nbsp;Mike
Milinkovich indicted that two companies had recently changed their
Board members.&nbsp; Al Nugent (CTO) is replacing Jim Saliba as the
Board Representative for CA. &nbsp;&nbsp;In addition, John Kellerman
is replacing Dave Thomson as the Board Member for IBM.&nbsp; Jeff
McAffer indicated that he thought that this would be an appropriate
time for the Board to recognize the contribution of Dave Thomson to
Eclipse Foundation and the broader Eclipse ecosystem.&nbsp; Mike
Milinkovich further indicated that without the support of Dave
Thomson that the Eclipse Foundation would not exist today.&nbsp;
Though not alone, Dave was a primary supporter within IBM for the
creation of the Eclipse Foundation.&nbsp; There was unanimous consent
to approve the following Resolution: 
</P>
<P STYLE="text-indent: 1.27cm"><B>RESOLVED, </B>that there was
unanimous consent to recognize the significant contributions of Dave
Thomson to the Eclipse Foundation and broader Eclipse ecosystem.</P>
<P ALIGN=JUSTIFY STYLE="margin-top: 0.42cm; page-break-after: avoid"><U>Committee
Appointments:</U> There was unanimous consent to approve the
following Resolutions:</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
<B>RESOLVED</B>, that there was unanimous consent to appoint Doug
Gaff and Rich Bartlett to the Compensation Committee.</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
<B>RESOLVED</B>, that there was unanimous consent to appoint Jon
Khazam to the IP Advisory Committee. </P>
<P STYLE="text-indent: 1.27cm"><B>RESOLVED, </B>that there was
unanimous consent to appoint Dino Brusco to the Strategy Committee.
&nbsp;&nbsp;</P>
<P><U>IP Policy:</U>&nbsp; Mike Milinkovich introduced the proposed
changes to the IP Policy which have been under discussion for
approximately a year.&nbsp;&nbsp; Mike further indicated that one of
the goals of the revisions was to have the document more readable and
that he felt that the revisions accomplished that goal.&nbsp; Mike
further indicated that he wished to recognize the efforts of Adrian
Cho, the chair of the IP Advisory Committee and a representative for
IBM, who put a lot of personal effort into getting this completed for
the benefit of the community.&nbsp; No further questions being
raised, there was unanimous consent to approve the following
Resolution:</P>
<P STYLE="text-indent: 1.27cm"><B>RESOLVED, </B>that there was
unanimous consent to approved the revised IP Policy effective
September 17, 2008, a copy of which is attached hereto as <a href="2008_09_exhibits/ExhibitG.pdf">Exhibit G</a>.
&nbsp;&nbsp;</P>
<P><U>Trademark Guidelines:</U>&nbsp; Mike Milinkovich introduced
proposed revisions to the Trademark Guidelines.&nbsp; The primary
purpose of the change was to protect the eclipse.org namespace.&nbsp;
An additional change proposed though not yet considered by the IP
Advisory Committee was to add &ldquo;Eclipse Summit&rdquo; to the
list of Eclipse trademarks.&nbsp; After some discussion, there was
unanimous consent to approve the following Resolution:</P>
<P STYLE="text-indent: 1.27cm"><B>RESOLVED</B>, that there was
unanimous consent to approve the Trademark Guidelines, as amended and
attached hereto as <a href="2008_09_exhibits/ExhibitH.pdf">Exhibit H</a>, with the added authorization to the EMO
to complete any additional edits that may be required to add &ldquo;Eclipse
Summit&rdquo; as an additional trademark of the Eclipse Foundation.</P>
<P><B><U>Strategy and Program Plan</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich introduced the Strategy and Program Plan
discussion.&nbsp; Specifically, Mike indicated that he and Ricco
Deutscher prepared a presentation which combined the continuing work
on the 2009 strategy and the current state of the 2009 Program Plan
based on the previous meeting&rsquo;s SWOT analysis.&nbsp;&nbsp; Mike
then turned the floor over to Ricco to drive the discussion with the
Board.&nbsp; &nbsp;After much discussion, the Vision Statement and
Goals of the Eclipse Foundation were adjusted.&nbsp; .&nbsp;&nbsp;
The Strategy Committee took an action item to compare the 2008 Goals
against those updated in the meeting and reconcile the two.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
In reviewing the initiatives in the presentation, the Board concluded
that the following three Board Working Groups should be created to
consider:&nbsp; (a)&nbsp; the creation of more &ldquo;barriers to
exit&rdquo; for members, especially strategic members;&nbsp; (b) the
creation of a program to support the creation of local user and
community groups;&nbsp; and (c) the future evolution of Eclipse
Plug-In Central (EPIC).</P>
<P><B><U>Industry Working Groups</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Dino Brusco presented a proposal to create a Mobile Working Group, a
copy of the related presentation for which is attached hereto as
<a href="2008_09_exhibits/ExhibitJ.pdf">Exhibit J</a>.&nbsp;&nbsp; Dino indicated that the hardware capability of
devices is growing phenomenally which allows for more robust software
environments to be hosted in the device and unique opportunities.&nbsp;
The Mobile Working Group would look at how to leverage these
opportunities by driving the definition and implementation of an
application development kit for mobile developers.&nbsp; 
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Mike Milinkovich presented an overview of the Industry Working Group
concept, attached hereto as <a href="2008_09_exhibits/ExhibitK.pdf">Exhibit K</a>. Mike pointed out that while
Eclipse open source projects are necessary for collaborative
development they are not sufficient to meeting all of the needs of a
complete industry collaboration. IWG&rsquo;s are an attempt to create
a governance model and process for fostering such collaborations.</P>
<P><B><U>Licensing Discussion</U></B></P>
<P STYLE="text-indent: 1.27cm">Jeff McAffer led a discussion on
&ldquo;broader dual licensing for runtime projects at Eclipse&rdquo;,
the related presentation for which is attached hereto as <a href="2008_09_exhibits/ExhibitL.pdf">Exhibit L</a>.&nbsp;
&nbsp;</P>
<P STYLE="text-indent: 1.27cm">The copyleft aspects of the EPL were
discussed with several directors indicating that those provisions of
the EPL were important to them.&nbsp;&nbsp; Following the discussion
it was decided to direct the IP Advisory Committee to the Board to
provide new projects with guidelines that would help them make their
licensing decisions, including the possibility of dual-licensing the
project. &nbsp;&nbsp;With respect to dual-licensing considerations
could include:&nbsp; (a) when does it make sense; (b) what are the
risks; and (c) what are the benefits.</P>
<P STYLE="page-break-after: avoid"><B><U>PMC Reports</U></B></P>
<P STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
David Williams provided a report for the WTP PMC, a copy of the
related presentation material is attached hereto as <a href="2008_09_exhibits/ExhibitM.pdf">Exhibit M</a>.&nbsp;&nbsp;&nbsp;
There was some discussion regarding the possibility of asking our
Tooling Projects to support our Runtime Projects.&nbsp; David
Williams indicted that there were some restrictions in the WTP PMC
Charter that would need to be reviewed.&nbsp; Mike Milinkovich
indicated that the PMC should consider whether those restrictions
still made sense and if necessary, pose modifications to the EMO.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Doug Gaff presented the DSDP PMC report, a copy of the related
presentation material is attached hereto as <a href="2008_09_exhibits/ExhibitN.pdf">Exhibit N</a>.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The Board&rsquo;s general consensus was that these reports were both
appreciated and useful.&nbsp; In an effort to reduce the workload
some Board Members suggested that a presentation format might be
preferable from the Project&rsquo;s viewpoint and sufficient for the
Board.</P>
<P><B><U>Solutions Members Representatives</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
The Solution Member Representatives provided an update, the related
presentation material for which is attached hereto as <a href="2008_09_exhibits/ExhibitO.pdf">Exhibit O</a>.&nbsp;&nbsp;
The Solution Member Representatives indicated a preference to be
given advance warning of any initiative that was designed to exclude
their Member Class so that they would be in a better position to
respond to questions from their community.&nbsp; Mike Milinkovich
indicated that the proposal for the &ldquo;Eclipse Strategic Member
Custom Delivery Installer Program&rdquo; was a proposal at this stage
and that it had been his understanding that the Board had directed
him to pursue programs that would provide differentiated value to
Strategic Members.&nbsp; Doug Gaff emphasized the importance of
providing such differentiated value, indicating that the lack of
differentiated value it is a pain point for Strategic Members in
justifying their annual investment.&nbsp;&nbsp; 
</P>
<P STYLE="text-indent: 1.27cm">After some discussion, it was
determined that the EMO would continue based on the existing
understanding with the recognition that such initiatives may result
in sensitivities and concerns raised by other Membership Classes.</P>
<P><B><U>Committer Issues</U></B></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Ed Merks expressed concerns with respect to the Eclipse Home Page and
indicated that he would like to see the EMO come up with a strategy
for how we are going to modernize this page.&nbsp; Mike Milinkovich
indicated that the EMO is actively working on revising the Eclipse
Home Page.</P>
<P STYLE="page-break-after: avoid"><B><U>Reports from Management</U></B></P>
<P>Mike Milinkovich presented an update on:&nbsp; (a) conference
activity &ndash; we continue to be successful (ESE &ndash; <a href="2008_09_exhibits/ExhibitP.pdf">Exhibit P</a>,
EclipseCon &ndash; <a href="2008_09_exhibits/ExhibitQ.pdf">Exhibit Q</a>);&nbsp;&nbsp; (b) Project reports,
including 2008 roadmap process update (<a href="2008_09_exhibits/ExhibitR.pdf">Exhibit R</a>);&nbsp;&nbsp; (c)
Key Performance Indicators &nbsp;(d) marketing (<a href="2008_09_exhibits/ExhibitT.pdf">Exhibit T</a>);&nbsp; and
(e) membership (<a href="2008_09_exhibits/ExhibitU.pdf">Exhibit U</a>).&nbsp;&nbsp; 
</P>
<P><U><B>Executive Director Feedback Discussion</B></U></P>
<P STYLE="text-indent: 1.27cm">Mike Milinkovich departed the room and
the Board of Directors discussed how best to handle the Executive
Directors performance review and any applicable compensation
change.&nbsp;&nbsp; After some discussion, the following Resolution
was passed unanimously.&nbsp; 
</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><B>RESOLVED</B>,
the compensation committee shall be responsible to complete the
annual review for the Executive Director by the end of each Calendar
year and following such review have the review and any associated
compensation change approved by the Board.</P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</P>
<P ALIGN=CENTER>There being no additional business to attend to, Mike
Milinkovich thanked all Board Members and declared the meeting
adjourned at approximately 4:24 Central Time. &nbsp;</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">This being a true and
accurate record of the proceedings of this Meeting of the Board of
Directors held on September 17th, 2008, is attested to and signed by
me below.</P>
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