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
	    <h3>November 19, 2008</h3>
<P LANG="en-US" ALIGN=CENTER>_________________________________________________________________________</P>
<P ALIGN=CENTER>&nbsp;</P>
<P><SPAN LANG="en-US">A Meeting of the Board of Directors (the
&ldquo;<I><B>Board</B></I>&rdquo;) of Eclipse.org Foundation, Inc., a
Delaware corporation (the &ldquo;<I><B>Corporation&rdquo;</B></I>),
was held on held at 11:00 am Eastern time on November 19, 2008 as a
regularly scheduled teleconference. </SPAN>
</P>
<P><SPAN LANG="en-US">Present on the teleconference were the
following Directors:</SPAN></P>
<TABLE WIDTH=619 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Present</B></P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Organization</B></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Tim Barnes</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OpenMethods LLC</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Rich Bartlett</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Hans-Christian
			Brockmann</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">brox
			IT-Solutions GmbH</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dino Brusco</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Motorola</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Actuate
			Corporation</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Robert Day</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark de Visser</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sonatype</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Doug Gaff</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Richard
			Gronback</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Borland
			Software Corp.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Andi Gutmans</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Zend
			Technologies</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oisin Hurley</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P STYLE="border: none; padding: 0cm"><SPAN LANG="en-US">IONA</SPAN>
			<SPAN LANG="en-US">Technologies</SPAN></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Kellerman</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mik Kersten</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wayne Kerr for
			Jonathan Khazam</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Intel
			Corporation</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Stephane
			Lacrampe</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OBEO</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Lipton</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">CA Inc.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Maher Masri</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Genuitec, LLC</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Emma McGrattan</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wolfgang
			Neuhaus</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Tracy Ragan</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Steve Saunders</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wind River</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Somasundaram
			Shanmugam</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sybase</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Yes</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=89 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">No</P>
		</TD>
		<TD WIDTH=296 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Todd E.
			Williams</P>
		</TD>
		<TD WIDTH=234 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
</TABLE>
<P><BR><BR>
</P>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, and Janet Campbell, Secretary, of
Eclipse.org Foundation, Inc.</SPAN></P>
<P><U><SPAN LANG="en-US"><B>Dual &ndash;Licensing Jetty at Eclipse:</B></SPAN></U></P>
<P><SPAN LANG="en-US">Adam Lieber and Greg Wilkins from Webtide
joined the Board call to discuss a proposal to dual license Jetty at
Eclipse under the EPL and Apache 2.0 licenses.&nbsp; Adam provided
background on the Jetty community and the potential benefits of a
move to Eclipse for both Jetty and the Eclipse community.&nbsp; Adam
also outlined the importance in maintaining the project&rsquo;s
association with the Apache 2.0 license for existing Jetty
consumers.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Following discussion, there was unanimous
consent to approve the following resolution:</SPAN></P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED, </B></SPAN><SPAN LANG="en-US">that
there was unanimous consent to approve dual licensing of Jetty at
Eclipse under the EPL and Apache 2.0 licenses.</SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U><B>General
Business:</B></U></SPAN></P>
<P STYLE="page-break-after: avoid"><SPAN LANG="en-US"><U>Minutes:</U></SPAN>&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a discussion of the
full and abridged the Minutes of the October 15, 2008 Board meeting.&nbsp;
There was unanimous consent to approve the following resolution:</SPAN></P>
<P STYLE="text-indent: 1.27cm; page-break-after: avoid"><SPAN LANG="en-US"><B>RESOLVED,
</B></SPAN><SPAN LANG="en-US">that there was unanimous consent to
approve the full and abridged minutes of the October 15, 2008 Board
Meeting.</SPAN></P>
<P><SPAN LANG="en-US"><U>Change of Director:</U></SPAN>&nbsp; <SPAN LANG="en-US">Mike
Milinkovich advised the Board that Sonatype, one of the Eclipse
Foundation&rsquo;s Strategic Members, would be changing their
representative on the Board of Directors from Jason Van Zyl</SPAN> <SPAN LANG="en-US">to
Mark de Visser.</SPAN></P>
<P ALIGN=JUSTIFY STYLE="margin-top: 0.42cm; page-break-after: avoid"><SPAN LANG="en-US"><U>Committee
Appointment:</U></SPAN> <SPAN LANG="en-US">There was unanimous
consent to approve the following Resolutions:</SPAN></P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
there was unanimous consent to appoint Jason van Zyl to the
Membership Committee.</SPAN></P>
<P><U><B><SPAN LANG="en-US">IP Advisory Committee:</SPAN></B></U></P>
<P><SPAN LANG="en-US">Mike Milinkovich indicated that there are a
number of items that the IP Advisory Committee has recommended for
Board approval.&nbsp;&nbsp; First, the IP Advisory Committee
recommended that the Board approve the following license(s) for use
with Non-Code Content, where &ldquo;Non-Code Content&rdquo; is
defined in the new website terms of use as &ldquo;&hellip;white
papers, dissertations, articles or other literary works, power point
presentations, encyclopedias, anthologies, wikis, blogs, diagrams,
drawings, sketches, photos or other images, audio content, video
content and audiovisual materials.&rdquo;:</SPAN></P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><SPAN LANG="en-US">a)</SPAN><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN><SPAN LANG="en-US">EPL, or</SPAN></P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><SPAN LANG="en-US">b)</SPAN><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN><SPAN LANG="en-US">the Creative Commons Attribution-Share
Alike 3.0 (Unported) license -
</SPAN><A HREF="http://creativecommons.org/licenses/by-sa/3.0/"><SPAN STYLE="text-decoration: none"><SPAN LANG="en-US">http://creativecommons.org/licenses/by-sa/3.0/</SPAN></SPAN></A><SPAN LANG="en-US">,
or&nbsp; </SPAN>
</P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><SPAN LANG="en-US">c)</SPAN><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN><SPAN LANG="en-US">the Creative Commons Attribution 3.0
(Unported) license - </SPAN><A HREF="http://creativecommons.org/licenses/by/3.0/"><SPAN STYLE="text-decoration: none"><SPAN LANG="en-US">http://creativecommons.org/licenses/by/3.0/</SPAN></SPAN></A><SPAN LANG="en-US">.
</SPAN>
</P>
<P LANG="en-US" STYLE="margin-bottom: 0.42cm">Following generally
positive discussion, there was unanimous consent to approve the
following resolution:</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED, </B></SPAN><SPAN LANG="en-US">that
there was unanimous consent to approve the use of the following
license(s) for use with Non-Code Content, where &ldquo;Non-Code
Content&rdquo; is defined in the new website terms of use as &ldquo;&hellip;white
papers, dissertations, articles or other literary works, power point
presentations, encyclopedias, anthologies, wikis, blogs, diagrams,
drawings, sketches, photos or other images, audio content, video
content and audiovisual materials.&rdquo;:</SPAN></P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><SPAN LANG="en-US">a)</SPAN><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN><SPAN LANG="en-US">EPL, or</SPAN></P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><SPAN LANG="en-US">b)</SPAN><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN><SPAN LANG="en-US">the Creative Commons Attribution-Share
Alike 3.0 (Unported) license -
</SPAN><A HREF="http://creativecommons.org/licenses/by-sa/3.0/"><SPAN STYLE="text-decoration: none"><SPAN LANG="en-US">http://creativecommons.org/licenses/by-sa/3.0/</SPAN></SPAN></A><SPAN LANG="en-US">,
or&nbsp; </SPAN>
</P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><SPAN LANG="en-US">c)</SPAN><SPAN LANG="en-US">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</SPAN><SPAN LANG="en-US">the Creative Commons Attribution 3.0
(Unported) license - </SPAN><A HREF="http://creativecommons.org/licenses/by/3.0/"><SPAN STYLE="text-decoration: none"><SPAN LANG="en-US">http://creativecommons.org/licenses/by/3.0/</SPAN></SPAN></A><SPAN LANG="en-US">.
</SPAN>
</P>
<P STYLE="margin-bottom: 0.42cm"><SPAN LANG="en-US">Second, the IP
Advisory Committee recommended that the Board approve the use of the
<A HREF="http://www.eclipse.org/org/documents/edl-v10.php">Eclipse
Distribution License</A> (&ldquo;EDL&rdquo;) for example code.&nbsp;
Mike Milinkovich indicated that the use of the EDL would be at the
discretion of the Project.&nbsp; There was strong support for this
proposal and there was unanimous consent to approve the following
resolution:</SPAN></P>
<P STYLE="margin-bottom: 0.42cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
there was unanimous consent to approve the use of the <A HREF="http://www.eclipse.org/org/documents/edl-v10.php">Eclipse
Distribution License</A> (&ldquo;EDL&rdquo;) for example code.</SPAN></P>
<P LANG="en-US" STYLE="margin-bottom: 0.42cm">Third, the IP Advisory
Committee recommended that the Board approve an updated version of
the &ldquo;Implementing the IP Policy Document&rdquo; in order to be
consistent with the newly approved IP Policy.&nbsp; There was
unanimous consent to approve the following resolution:</P>
<P STYLE="text-indent: 1.27cm; margin-bottom: 0.42cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that there was unanimous consent to approve the proposed updated
version of the &ldquo;Implementing the IP Policy Document&rdquo;.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Policy on Recognizing Project
Contributions:</B></U></SPAN>&nbsp; 
</P>
<P><SPAN LANG="en-US">Mike Milinkovich introduced a discussion of a
proposed policy on recognizing project contributions.&nbsp; While
generally supportive of the Policy, Board members felt that the
document was overly cumbersome as currently written and did not
explicitly address the implementation process to make sure that we
have sufficient rights to any corporate logos or pictures of those
that we are recognizing.&nbsp; Following the discussion, there was
unanimous consent to approve the following resolution:</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
there was unanimous consent to approve the Policy on Recognizing
Project Contributions as drafted and the EMO is further directed to
revisit the document with a view to making</SPAN> <SPAN LANG="en-US">it
easier to follow by the reader and to include the implementation
process to make sure that we have sufficient rights to any corporate
logos or pictures of those that we are recognizing.</SPAN></P>
<P><B><SPAN LANG="en-US"><U>Program Plan Review:</U></SPAN></B></P>
<P><SPAN LANG="en-US">Mike Milinkovich introduced the discussion of
the Program Plan, initially directing Board Members to slide 5 of the
Program Plan.&nbsp; Slide 5 described the Strategic Goals of the
Eclipse Foundation as follows:</SPAN></P>
<OL>
	<LI><P><SPAN LANG="en-US">Establish Eclipse as the leading provider
	of open source runtime technologies</SPAN> 
	</P>
	<LI><P><SPAN LANG="en-US">Maintain global leadership in open source
	tools platforms</SPAN> 
	</P>
	<LI><P><SPAN LANG="en-US">Create value for all its membership
	classes</SPAN> 
	</P>
	<LI><P><SPAN LANG="en-US">Foster growth of the ecosystem,
	particularly in verticals</SPAN> 
	</P>
	<LI><P><SPAN LANG="en-US">Run a well governed, cost effective
	organization</SPAN> 
	</P>
</OL>
<P><SPAN LANG="en-US">Mike asked if anyone had any questions or
concerns regarding the goals as presented.&nbsp; One Board member
suggested changing the &ldquo;the&rdquo; in goal 1 to &ldquo;a&rdquo;
which was generally supported by the Board.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><B><U>ESE Update: </U></B></SPAN>
</P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an update on Eclipse
Summit Europe.&nbsp; Mike indicated that as of today&rsquo;s meeting,
there were 417 registered attendees, higher than the 410 registrants
that we had last year.&nbsp; The conference had been a resounding
success, exceeding our expectations, and resulting a in a modest profit.&nbsp; </SPAN>
</P>
<P><U><SPAN LANG="en-US"><B>Key Performance Indicators (KPIs):&nbsp; </B></SPAN></U>
</P>
<P><SPAN LANG="en-US">Mike Milinkovich introduced the Eclipse
Foundation&rsquo;s Key Performance Indicators for the month and
indicated that the indicators are tracking as expected. </SPAN>
</P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">There being no additional business to attend to,
Mike Milinkovich thanked all Board Members and declared the meeting
adjourned at approximately 12:00 Eastern time.</SPAN></P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on November 19th, 2008, is attested to
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