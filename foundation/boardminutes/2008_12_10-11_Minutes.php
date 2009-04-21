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
	    <h3>December 10-11, 2008</h3>
<P LANG="en-US" ALIGN=CENTER>_________________________________________________________________________</P>
<P LANG="en-US">A Meeting of the Board of Directors (the &ldquo;<I><B>Board</B></I>&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;<I><B>Corporation&rdquo;</B></I>), was held on held at 8:30am
Pacific time at the Hotel Monaco San Francisco, San Francisco, CA on
December 10 &amp; 11, 2008 as a regularly scheduled quarterly
face-to-face meeting. 
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">&nbsp;</P>
<P LANG="en-US">Present at the meeting were the following Directors:</P>
<TABLE WIDTH=613 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD WIDTH=83 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Attending<br/>
			Dec. 10</B></P>
		</TD>
		<TD WIDTH=83 VALIGN=TOP>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Attending<br/>
			Dec. 11</B></P>
		</TD>
		<TD WIDTH=255 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Director</B></P>
		</TD>
		<TD WIDTH=192 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border: none; padding: 0cm"><B>Company</B></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Tim Barnes</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OpenMethods LLC</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Rich Bartlett</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Nokia</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
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
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dino Brusco</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Motorola</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Actuate
			Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Robert Day</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mark de Visser</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sonatype</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ricco Deutscher</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">SOPERA GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Doug Gaff</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Richard
			Gronback</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Borland
			Software Corp.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Andi Gutmans</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Zend
			Technologies</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oisin Hurley</P>
		</TD>
		<TD WIDTH=192>
			<P STYLE="border: none; padding: 0cm"><SPAN LANG="en-US">IONA</SPAN>
			<SPAN LANG="en-US">Technologies</SPAN></P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">John Kellerman</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">IBM</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mik Kersten</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jonathan Khazam</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Intel
			Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Innoopract</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Stephane
			Lacrampe</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">OBEO</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Paul Lipton</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">CA Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Maher Masri</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Genuitec, LLC</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Emma McGrattan</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Ed Merks</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Committer
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wolfgang
			Neuhaus</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">itemis AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Tracy Ragan</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=83>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Steve Saunders</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Wind River</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Somasundaram
			Shanmugam</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Sybase</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=83>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">X</P>
		</TD>
		<TD WIDTH=255>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Todd E.
			Williams</P>
		</TD>
		<TD WIDTH=192>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Add-In Provider
			Representative</P>
		</TD>
	</TR>
</TABLE>
<P>&nbsp;</P>
<P LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, Janet Campbell, Secretary, and Chris
Larocque, Treasurer of Eclipse.org Foundation, Inc.</P>
<P STYLE="margin-top: 0.42cm; page-break-after: avoid"><SPAN LANG="en-US"><U><B>General
Business</B></U></SPAN> 
</P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="margin-top: 0.42cm">Mike
Milinkovich introduced the minutes from the November meeting and
asked for any corrections and/or comments.&nbsp; The following
resolution was unanimously passed:</P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that there was unanimous consent to approve the amended minutes of
November, attached hereto as <a href="2008_11_19_Minutes.php">Exhibit A</a>.&nbsp; &nbsp;&nbsp;</SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich advised the Board that the
possibility</SPAN> <SPAN LANG="en-US">of Jetty moving to Eclipse has
been publicly raised within the Jetty community and could now be
discussed publicly by members of the Board.&nbsp;&nbsp;&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Mike Milinkovich introduced a proposed
resolution to amend the Development Process to require an up-to-date
project plan for Project Reviews.&nbsp;&nbsp; Following discussion,
the following resolution was unanimously passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that the Board directs to EMO to immediately amend the Eclipse
Development Process such that for any Project to pass a Graduation
Review, Continuation Review, or Release Review it must have a current
project plan, in the format specified by the EMO, available to the
community.</SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich introduced a proposal to
modify the Industry Working Group naming conventions to be in line
with our project naming guidelines, a copy of the related
presentation for which is attached as <a href="2008_12_exhibits/ExhibitB.pdf">Exhibit B</a>.&nbsp; Following
discussion, the following resolution was unanimously passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that the EMO is directed to modify the Industry Working Group naming
conventions as follows:</SPAN></P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><FONT FACE="Courier New"><SPAN LANG="en-US">o</SPAN></FONT>&nbsp;&nbsp;
<SPAN LANG="en-US">Each IWG will have a &ldquo;formal name&rdquo;
similar to the original policy.</SPAN></P>
<P STYLE="margin-left: 3.81cm; text-indent: -0.64cm"><FONT FACE="Wingdings"><SPAN LANG="en-US">&sect;</SPAN></FONT>&nbsp;
<SPAN LANG="en-US">E.g. &ldquo;the Eclipse Mobile Industry working
Group&rdquo;</SPAN></P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><FONT FACE="Courier New"><SPAN LANG="en-US">o</SPAN></FONT>&nbsp;&nbsp;
<SPAN LANG="en-US">They will also have&nbsp; a &ldquo;nickname&rdquo;
that can provide a distinct identity</SPAN></P>
<P STYLE="margin-left: 3.81cm; text-indent: -0.64cm"><FONT FACE="Wingdings"><SPAN LANG="en-US">&sect;</SPAN></FONT>&nbsp;
<SPAN LANG="en-US">E.g. &ldquo;Blortz&rdquo;</SPAN></P>
<P STYLE="margin-left: 2.54cm; text-indent: -0.64cm"><FONT FACE="Courier New"><SPAN LANG="en-US">o</SPAN></FONT>&nbsp;&nbsp;
<SPAN LANG="en-US">The two can be used in conjunction with one
another.</SPAN></P>
<P STYLE="margin-left: 3.81cm; text-indent: -0.64cm"><FONT FACE="Wingdings"><SPAN LANG="en-US">&sect;</SPAN></FONT>&nbsp;
<SPAN LANG="en-US">E.g. &ldquo;Blortz, the Eclipse Mobile Industry
Working Group&rdquo;</SPAN></P>
<P LANG="en-US">Mike Milinkovich informed the Board that the Eclipse
Foundation was interested in organizing an &ldquo;Open Source
Strategy Session&rdquo; to occur at EclipseCon, possibly on the
Sunday prior to EclipseCon that would provide:&nbsp; (1) education
session for executives in setting open source strategy; and (2)
presentations and discussions on a variety of topics including:
development model, product strategy, licensing strategy, and revenue
generation strategy.&nbsp; The related presentation is attached as
<a href="2008_12_exhibits/ExhibitC.pdf">Exhibit C</a>.&nbsp; The feedback of the Board was that they were in
favour of the idea, but felt that Sunday was not the best day to
schedule the event.</P>
<P LANG="en-US">Mike Milinkovich introduced the enabling resolution
for the 2009 Members Meeting, EclipseCon 2010, and Eclipse Summit
Europe 2009.&nbsp; The following resolutions were passed unanimously:</P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that there was unanimous consent to have the 2009 annual membership
meeting on March 23, 2009 at EclipseCon 2009, in Santa Clara,
California.&nbsp;&nbsp; </SPAN>
</P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that the Executive Director of the Corporation is hereby authorized
and empowered, for and on behalf of the Corporation, to retain such
advisors, to execute and deliver such documents, papers or
instruments and to do or cause to be done any and all such other acts
and&nbsp; things&nbsp; as&nbsp; he&nbsp; may&nbsp; deem&nbsp;
necessary,&nbsp; appropriate&nbsp; or&nbsp; desirable&nbsp; in&nbsp;
connection&nbsp; with&nbsp; the organization and execution of the
EclipseCon 2010 conference, including without limitation the election
of vendors responsible for the operations and logistics of the event,
and the taking of any such action shall be conclusive evidence of the
approval thereof by this Board of Directors. </SPAN>
</P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that the Executive Director of the Corporation is hereby authorized
and empowered, for and on behalf of the Corporation, to retain such
advisors, to execute and deliver such documents, papers or
instruments and to do or cause to be done any and all such other acts
and&nbsp; things&nbsp; as&nbsp; he&nbsp; may&nbsp; deem&nbsp;
necessary,&nbsp; appropriate&nbsp; or&nbsp; desirable&nbsp; in&nbsp;
connection&nbsp; with&nbsp; the organization and execution of the
Eclipse Summit Europe 2009 conference, including without limitation
the selection of vendors responsible for the operations and logistics
of the event, and the taking of any such action shall be conclusive
evidence of the approval thereof by this Board of Directors.</SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an update on Eclipse
Summit Europe 2008 indicating that it had been a tremendous
success.&nbsp;&nbsp; A copy of the related presentation is attached
as <a href="2008_12_exhibits/ExhibitD.pdf">Exhibit D</a>.&nbsp; The Board unanimously approved the following
resolution:</SPAN></P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that the Board wishes to recognize the personal contributions of
Ralph Mueller and Bjorn Freeman-Benson in making Eclipse Summit
Europe a huge success.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an update on
EclipseCon 2009 indicating that while sponsorships appeared slower
than expected the program planning was going very well.&nbsp; A copy
of the related presentation is attached as <a href="2008_12_exhibits/ExhibitE.pdf">Exhibit E</a>.</SPAN></P>
<P LANG="en-US"><U><B>Committer Issues</B></U></P>
<P><SPAN LANG="en-US">Doug Gaff presented on behalf of the Committer
Representatives.&nbsp; The related presentation is attached as
<a href="2008_12_exhibits/ExhibitF.pdf">Exhibit F</a>.&nbsp; Doug indicated that while the coordinated build
worked, it was too frequently broken.&nbsp; Doug further indicated
that there was a lack of continuous testing.&nbsp; In addition to the
foregoing, Doug highlighted a mismatch between what the Projects
deliver in the simultaneous release and the expectations of the
adopter and user communities.&nbsp; Mike Milinkovich indicated that
there was often such a mismatch in expectations, such a mismatch
occurred irrespective of the public position that the Eclipse
Foundation took on the topic.&nbsp; Mike further indicated that to
the extent that there were bugs filed against the simultaneous
release that were not fixed, there was a commercial opportunity for a
vendor.</SPAN></P>
<P LANG="en-US"><U><B>Architecture Council</B></U></P>
<P><SPAN LANG="en-US">Doug Gaff presented on behalf of Martin
Oberhuber, the chair of the Architecture Council.&nbsp; The related
presentation is attached as <a href="2008_12_exhibits/ExhibitG.pdf">Exhibit G</a>.&nbsp; The revitalized
Architecture Council has successfully acting as ombudsman for the
projects and user community.&nbsp; In addition, the Council is
actively working on a number of projects to further improve the
experience for the Committer Community and now has 50 members, 20 of
whom are quite active.&nbsp; Doug indicated that the Architecture
Council would like to see greater involvement from the PMCs.&nbsp;
Mike Milinkovich asked all in attendance to consider re-engaging with
the Architecture Council.&nbsp;&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Doug Gaff indicated that the Architecture
Council was interested in seeing the Board provide some assistance in
the form of resources to help bridge the gap between what the
Projects are currently producing and what the adopter and user
communities were expecting.&nbsp; Referring to Article I of the
<A HREF="http://www.eclipse.org/org/documents/Eclipse%20BYLAWS%202008_07_24%20Final.pdf">Eclipse
Foundation Bylaws</A>, the Board indicated that while they recognize
that the problem exists, it was not the Eclipse Foundation&rsquo;s
role to solve.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Doug Gaff indicated that the Eclipse
Foundation&rsquo;s current position on the LGPL was causing some
Projects concern and frustration.&nbsp; Mike Milinkovich responded
that the IP Advisory Committee was currently revisiting Eclipse&rsquo;s
policy with respect to the re-distribution of code under the LGPL
license at Eclipse.&nbsp; &nbsp;&nbsp;</SPAN></P>
<P LANG="en-US">Doug further indicated that there was some interest
in the community in using eGit.&nbsp; Mike Milinkovich responded that
the Foundation did not have the resources to support eGit at this
point in time.</P>
<P LANG="en-US" STYLE="page-break-before: always"><U><B>Budget Review
and Approval</B></U></P>
<P><SPAN LANG="en-US">Chris Larocque provided an overview of the
budget.&nbsp; Following the discussion, the Board approved the
following resolution:</SPAN></P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
there was unanimous consent to approve the 2009 Budget for the
Eclipse Foundation.</SPAN></P>
<P LANG="en-US"><U><B>EPIC Working Group</B></U></P>
<P><SPAN LANG="en-US">Todd Williams presented the results of the EPIC
Working Group, the related slides for which are attached as <a href="2008_12_exhibits/ExhibitI.pdf">Exhibit I</a>. 
There was general consensus to accept the recommendations of the
working group.</SPAN></P>
<P LANG="en-US"><U><B>Roadmap Discussion</B></U></P>
<P><SPAN LANG="en-US">Mike Milinkovich introduced a discussion of the
Roadmap.&nbsp; Mike indicated that he wishes to have the discussion
from two perspectives.&nbsp; First, what if any changes did the Board
wish to recommend to the Roadmap.&nbsp; Second, while the creation of
the Roadmap is required by our Bylaws and resource consuming to
produce, use of the Roadmap was low.&nbsp; Following discussion, the
following resolutions were unanimously approved:</SPAN></P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
the Board unanimously approves the 2008 Roadmap in its current form.</SPAN></P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
the Board directs the EMO to establish a Working Group to discuss how
we can better direct the Requirements Council such that its output is
more beneficial to the community and the ecosystem.</SPAN></P>
<P LANG="en-US"><U><B>Strategic Member Reports</B></U></P>
<P LANG="en-US">Mark Coggins presented the Strategic Report for
Actuate, a copy of which is attached as <a href="2008_12_exhibits/ExhibitJ.pdf">Exhibit J</a>.&nbsp; Richard
Gronback presented the Strategic Report for Borland, a copy of which
is attached as <a href="2008_12_exhibits/ExhibitK.pdf">Exhibit K</a>.&nbsp; &nbsp;In doing so, Rich ended with a
&ldquo;Soap Box&rdquo; slide and initiated a discussion on E4 and the
long term viability of the Platform.&nbsp; The Board recognized the
importance of the topic and allocated some dedicated time to discuss
Rich&rsquo;s concerns and ideas the following day.</P>
<P LANG="en-US">Maher Masri presented the Strategic Report for
Genuitech.&nbsp;&nbsp; John
Kellerman presented the Strategic Report for IBM, a copy of which is
attached as <a href="2008_12_exhibits/ExhibitM.pdf">Exhibit M</a>.&nbsp; &nbsp;Jochen Krause presented the
Strategic Report for Innopract, a copy of which is attached as
<a href="2008_12_exhibits/ExhibitN.pdf">Exhibit N</a>.</P>
<P LANG="en-US"><U><B>December 11, 2008</B></U></P>
<P><SPAN LANG="en-US">The meeting resumed at 8:30 on December 11,
2008. &nbsp;</SPAN></P>
<P LANG="en-US"><U><B>Executive Director Review</B></U></P>
<P><SPAN LANG="en-US">Michael Bechauf provided an overview of the
approach taken for the Executive Director Review.The results of the
survey indicated broad support for Mike in his capacity as Executive
Director and the survey results indicated that his compensation was
competitive.&nbsp;&nbsp; The Board passed the following resolution
unanimously:</SPAN></P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
the Board thanks Mike Milinkovich for his 4 years of very successful
tenure as Executive Director of the Eclipse Foundation and
congratulates Mike for turning Eclipse from a very small group to one
of the most successful open source ecosystems in the world.</SPAN></P>
<P LANG="en-US">Mike Milinkovich thanked the Board and indicated that
he would review the survey material and take the feedback very
seriously.&nbsp;&nbsp; Mike thanked the Board for their support and
indicated that he enjoyed his job and planned to continue in the
position for some time to come.&nbsp; 
</P>
<P LANG="en-US"><U><B>Eclipse Mobile Industry Working Group</B></U></P>
<P><SPAN LANG="en-US">Dino Brusco provided an update on the Mobile
Industry Working Group, the related presentation for which is
attached as <a href="2008_12_exhibits/ExhibitQ.pdf">Exhibit Q</a>.&nbsp; Dino cited the benefits to the Eclipse
Foundation and the mobile industry generally, indicating that the
development of this working group was both a significant change and
opportunity.&nbsp; Mike Milinkovich further indicated that it was
hoped that the creation of these groups would drive Enterprise and
Strategic Membership as companies must be either Enterprise Members
or Strategic Members to participate in the Industry Working Group
Steering Committees.</SPAN></P>
<P LANG="en-US"><U><B>Strategic Member Reports</B></U></P>
<P><SPAN LANG="en-US">Wolfgang Neuhaus presented the Strategic Report
for itemis, a copy of which is attached as <a href="2008_12_exhibits/ExhibitR.pdf">Exhibit R</a>.&nbsp;&nbsp;
Oisin Hurley presented the Strategic Report for IONA/Progress, a copy
of which is attached as <a href="2008_12_exhibits/ExhibitS.pdf">Exhibit S</a>.&nbsp; Dino Brusco presented the
Strategic Report for Motorola, a copy of which is attached as <a href="2008_12_exhibits/ExhibitT.pdf">Exhibit T</a>.&nbsp;&nbsp; 
Rich Bartlett presented the Strategic Report for
Nokia, a copy of which is attached as <a href="2008_12_exhibits/ExhibitU.pdf">Exhibit U</a>.&nbsp;&nbsp; Stephane
Lacrampe presented the Strategic Report for OBEO, a copy of which is
attached as <a href="2008_12_exhibits/ExhibitV.pdf">Exhibit V</a>.&nbsp; &nbsp;Ricco Deutscher presented the
Strategic Report for Sopera, a copy of which is attached as <a href="2008_12_exhibits/ExhibitW.pdf">Exhibit W</a>.&nbsp;&nbsp; 
Tim Barnes presented the Strategic Report for Open
Methods, a copy of which is attached as <a href="2008_12_exhibits/ExhibitX.pdf">Exhibit X</a>.&nbsp; During his
presentation, Tim advised the Board that Open Methods would be
dropping their membership down to a Solutions Member as they had not
been able to meet their resource commitments to the Eclipse
Foundation since joining.&nbsp;&nbsp; Somasundaram Shanmugam
presented the Strategic Report for Sybase, a copy of which is
attached as <a href="2008_12_exhibits/ExhibitY.pdf">Exhibit Y</a>.&nbsp;&nbsp; Doug Gaff presented the Strategic
Report for WindRiver, a copy of which is attached as <a href="2008_12_exhibits/ExhibitZ.pdf">Exhibit Z</a>.&nbsp;
Mitch Sonies presented the Strategic Report for Cloudsmith, a copy of
which is attached as <a href="2008_12_exhibits/ExhibitAA.pdf">Exhibit AA</a>.</SPAN></P>
<P><SPAN LANG="en-US">Following the Strategic Member Reports, Mike
Milinkovich noted that there had been a number of Strategic Members
that had indicated that they were not meeting their resource
commitments to the Eclipse Foundation.&nbsp; Mike asked the Board if
there should be repercussions for those Members, such as for example,
declaring that member not in &ldquo;good standing&rdquo; and
therefore ineligible to vote. After much discussion, no consensus was
reached on the topic.</SPAN></P>
<P LANG="en-US"><U><B>E4</B></U></P>
<P><SPAN LANG="en-US">Rich Gronback initiated a further discussion of
E4, indicating that he is concerned about the project given there are
only three Strategic Members doing anything with E4.&nbsp;&nbsp;
There was recognition by the Board that there was a need to get more
individuals involved in E4.&nbsp; Mike Milinkovich suggested an
approach whereby Strategic Members would have the option of
allocating up to two of their committed resources to &ldquo;common
good&rdquo; projects and that these resources would each count for 2
committed resources.&nbsp; There was general consensus that this was
a proposal that was worthy of further consideration.&nbsp; When posed
with the question as to who would decide what these resources would
work on, Mike Milinkovich proposed that it be the Strategic Advisory
Committee which is a combination of the Planning Council,
Architecture Council and Requirements Council would come up with the
ideas of what the group could work on, but that it be the individuals
that are committing resources that ultimately be the decision makers.</SPAN></P>
<P><SPAN LANG="en-US">Tracey Ragan asked if we are now in the process
of changing the basic culture &ndash; where IBM provided the platform
and everyone else came and built an ecosystem to a broader based
platform participation model?&nbsp; Mike Milinkovich indicated that
yes, IBM has said quite clearly that they are no longer willing to
support the platform on their own and that there is not a consensus
in IBM regarding E4.&nbsp;&nbsp; In trying to understand why there
was a lack of participation, Board Members were polled to better
understand each Board Member&rsquo;s rationale.&nbsp; Based on the
discussion there was recognition that further education was needed so
that Board Members could better understand the benefits of
participation in E4.&nbsp; Mike Milinkovich indicated that the
Foundation would organize a webinar to facilitate awareness.</SPAN></P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">Mike
Milinkovich declared the meeting adjourned at approximately 3:00
Pacific Time. 
</P>
<P LANG="en-US" ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P LANG="en-US" ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">This being
a true and accurate record of the proceedings of this Meeting of the
Board of Directors held on December 10 and 11th, 2008, is attested to
and signed by me below.</P>
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