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
	    <h3>March 23, 2009</h3>

	    <P ALIGN=CENTER><SPAN LANG="en-US">_________________________________________________________________________</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">A
Meeting of the Board of Directors (the &ldquo;<I><B>Board</B></I>&rdquo;)
of Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;<I><B>Corporation&rdquo;</B></I>), was held on March 23, 2008
as a regularly scheduled face to face meeting in the Great America
Meeting Room #3, in the Santa Clara Convention Centre, Santa Clara,
California.</SPAN></P>
<P><SPAN LANG="en-US">Present on the teleconference were the
following Directors:</SPAN></P>
<TABLE WIDTH=969 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<COL WIDTH=633>
	<COL WIDTH=336>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=633>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
			<TABLE WIDTH=611 BORDER=0 CELLPADDING=4 CELLSPACING=0>
				<COL WIDTH=64>
				<COL WIDTH=249>
				<COL WIDTH=274>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding: 0.05cm">
						<FONT COLOR="#000000"><B>Present</B></FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000"><B>Director</B></FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000"><B>Organization</B></FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Chris Aniszczyk</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Committer Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Ronnie King for Rich Bartlett</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Nokia</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Michael Bechauf</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">SAP AG</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Stephane Voigt &ndash; for Hans-Christian
						Brockmann</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">brox IT-Solutions GmbH</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Dino Brusco</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Motorola</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Mark Coggins</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Actuate Corporation</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Robert Day</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Sustaining Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Mark de Visser</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Sonatype</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Ricco Deutscher</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">SOPERA GmbH</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Doug Gaff</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Committer Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Pat Huff for John Kellerman</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">IBM</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Mik Kersten</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Committer Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Jochen Krause</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Innoopract</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Stephane Lacrampe</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">OBEO</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Doug Clarke for Dennis Leung</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Oracle</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">No</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Paul Lipton</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">CA Inc.</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">No</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Maher Masri</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Genuitec, LLC</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Jeff McAffer</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Committer Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Emma McGrattan</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Sustaining Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">No</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Ed Merks</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Committer Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Wolfgang Neuhaus</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">itemis AG</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">No</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Tracy Ragan</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Sustaining Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">No</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Mitch Sonies</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Cloudsmith Inc.</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Mike Taylor</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Sustaining Representative</FONT></P>
					</TD>
				</TR>
				<TR>
					<TD WIDTH=64 VALIGN=TOP>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0.05cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Yes</FONT></P>
					</TD>
					<TD WIDTH=249 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="padding-top: 0cm; padding-bottom: 0cm; padding-left: 0cm; padding-right: 0.05cm">
						<FONT COLOR="#000000">Todd E. Williams</FONT></P>
					</TD>
					<TD WIDTH=274 VALIGN=BOTTOM>
						<P LANG="en-US" STYLE="border: none; padding: 0cm"><FONT COLOR="#000000">Sustaining
						Representative</FONT></P>
					</TD>
				</TR>
			</TABLE>
		</TD>
		<TD WIDTH=336>
			<P STYLE="border: none; padding: 0cm">&nbsp;</P>
		</TD>
	</TR>
</TABLE>
<P><BR><BR>
</P>
<P><SPAN LANG="en-US">Also present at the invitation of the Board
were the following newly elected Committer and Solution Member
representatives whose term will begin at the next Board Meeting:&nbsp;
</SPAN>
</P>
<TABLE WIDTH=625 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=289>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Shawn Pearce&nbsp;
						</P>
		</TD>
		<TD WIDTH=336>
			<P LANG="en-US" STYLE="border: none; padding: 0cm">Elected
			Sustaining Representative</P>
		</TD>
	</TR>
</TABLE>
<P><BR><BR>
</P>
<P><SPAN LANG="en-US">Present at the invitation of the Board was Mike
Milinkovich, Executive Director, Janet Campbell, Secretary of
Eclipse.org Foundation, Inc., and Chris Larocque, Treasurer to the
Foundation.</SPAN></P>
<P><B><SPAN LANG="en-US"><U>General Business</U></SPAN></B></P>
<P><SPAN LANG="en-US">Mike Milinkovich indicated that he intended to
give the departing Board Members in attendance the opportunity to
address the Board in the afternoon.&nbsp; However, as Jeff McAffer
was unable to attend the full meeting, Jeff was given the opportunity
to address the Board at the beginning of the meeting.&nbsp; Jeff
McAffer took the opportunity to thank everyone, indicating that he
had been a Board Member for a number of years and had found it to be
a very good experience.&nbsp; He encouraged the Board to focus on the
mission of the Eclipse Foundation, suggesting that before each Board
Meeting, Board Members read the preamble of the Bylaws.&nbsp; He
further suggested that the Board focus on the Eclipse Foundation
strategy rather than technology and at the Meta level more
generally.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US">Mike Milinkovich introduced the topic of the
February 2009 Board minutes.&nbsp; Mike asked if any Board Members had any
questions regarding the minutes.&nbsp; No questions being raised, the
following resolution was passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, the
Board unanimously approves the abridged and full versions of the
February 16, 2009 Board Meeting.</SPAN></P>
<P><B><SPAN LANG="en-US"><U>Update on the CPL</U></SPAN></B></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an update on the
CPL.&nbsp; &nbsp;&nbsp;Mike advised that IBM has transferred the
Agreement Stewardship of the CPL to the Eclipse Foundation and that
IBM, the Eclipse Foundation and the OSI were now workings together to
have the EPL 1.0 supersede the CPL.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Key Performance Indicators</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich reviewed the Eclipse
Foundation&rsquo;s Key Performance Indicators (&ldquo;KPI&rdquo;s.&nbsp;&nbsp;
Mike highlighted a format change that added a summary to the
beginning of the KPIs where Mike would provide his personal
assessment (green, orange, red) on the Eclipse Foundation&rsquo;s
progress towards its key goals.&nbsp; &nbsp;Doug Gaff raised the
possibility of sharing some of this information publicly.&nbsp; Mike
and Doug agreed to work together to create a public version of this
document that could be shared with the community and report back at
the next Board meeting.</SPAN></P>
<P><U><B><SPAN LANG="en-US">EclipseCon 2009 Update</SPAN></B></U></P>
<P><SPAN LANG="en-US">Bjorn Freeman-Benson provided an update on
EclipseCon 2009.&nbsp;&nbsp; Bjorn reported that the total number of
people attending EclipseCon was expected to be approximately 40% less
than last year.&nbsp; While some of this was the result of the
current economic climate, Bjorn felt that the reduced attendance was
a natural evolution for a conference of this nature.&nbsp; Bjorn also
reported that Cisco had generously donated in excess of $100K in
hardware for our IT infrastructure.&nbsp; Mike Milinkovich
congratulated Bjorn on a job well done.&nbsp; &nbsp;The Board
observed that EclipseCon has just got better and better year after
year, largely due to Bjorn&rsquo;s efforts and unanimously passed the
following resolution:</SPAN></P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
that the Board would like to recognize Bjorn Freeman-Benson&rsquo;s
contribution both from a professional and personal perspective
towards the continued success of EclipseCon.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><U><B>Committer and Sustaining Member Issues</B></U></SPAN></P>
<P><SPAN LANG="en-US">Mike Milinkovich asked if the Committer or
Sustaining Representatives had any issues that they wish to raise
with the Board.&nbsp; Doug Gaff provided an update of the recent STAC
meeting.&nbsp; In particular, Doug highlighted a proposal to
discontinue the use of either CVS or SVN and deploy GIT.&nbsp; The
Committer Representatives indicated that they needed to ascertain
whether the community would support discontinuing either CVS or SVN
and whether some of the larger projects would be willing to move to
GIT.&nbsp;&nbsp; The Committer Representatives observed that they
believed some of the reluctance on the part of the Eclipse Foundation
to deploy GIT may be due to the fact that SVN was deployed with some
effort on the part of the Eclipse Foundation staff and was not widely
adopted.&nbsp; Mike Milinkovich indicated that there was also the
legal concern as to whether deleting material from GIT would be
possible if the Foundation identified material that needed to be
removed from Foundation servers.&nbsp; &nbsp;Mike further indicated
that creating additional barriers to entry was also a concern in that
the Foundation was already finding some people expressing concerns
about the number of technologies that Committers need to understand
in order to participate in an Eclipse project.&nbsp; Mik Kersten
further observed that if the tooling didn&rsquo;t exist to support
GIT then deploying GIT alone would not be enough in any event.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><B><U>Financial Update</U></B></SPAN></P>
<P><SPAN LANG="en-US">Chris Larocque provided a financial and
membership update for the Eclipse Foundation.&nbsp;&nbsp; Chris
detailed the steps the Foundation has taken to reduce its budgetary
spend in light of a reduction in Member revenue.&nbsp;&nbsp; The
Board was pleased with the efforts that the Foundation had taken.&nbsp;
Mike Milinkovich added that while the Foundation had taken immediate
steps to address this issue, a more formal recognition of these
changes would be forthcoming once the Q1 financial results were in
and the Finance Committee had reviewed the revised budget.&nbsp; &nbsp;A
discussion with respect to declining membership ensued.&nbsp; Mike
Milinkovich indicated that he believed that the Working Group model
that the Foundation was pursuing would help to drive an increase in
membership.&nbsp; </SPAN>
</P>
<P><U><B><SPAN LANG="en-US">2009 Election Results</SPAN></B></U></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided an overview of the
recent Membership election results, the related material for which is
attached as <a href="2009_03_exhibits/ExhibitG.pdf">Exhibit G</a>.&nbsp; &nbsp;In the 2009 election only 22 of
122 Member Companies and 122 out of 900 Committers voted in the
Election.&nbsp; Of the 22 Member Companies that voted 14 were from
Europe.&nbsp; The newly elected Board Representatives are as follows:</SPAN></P>
<P STYLE="margin-left: 1.27cm">Committer Member Representatives</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0cm">Chris Aniszczyk</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0cm">Boris Bokowski 
</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0cm">Doug Gaff</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0cm">Ed Merks<BR><BR>
</P>
<P STYLE="margin-left: 1.27cm">Sustaining Member Representatives</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0cm">Hans-Joachim Brede</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0cm">Hans Kamutzki</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0cm">Shawn Pearce</P>
<P STYLE="margin-left: 3.81cm; margin-bottom: 0cm">Mike Taylor<BR><BR>
</P>
<P><SPAN LANG="en-US">Mike thanked the departing Board Members for
their service and gave them an opportunity to address the Board.&nbsp;
Mike Kersten indicated that he had been involved in the Eclipse
ecosystem from the beginning and indicated that being on the Board of
Directors was a great experience.&nbsp; He indicated further that he
planned to continue to be heavily involved in the Eclipse ecosystem.&nbsp;
Emma McGratten thanked the Board and indicated that it had been an
honour to serve on the Board.&nbsp; Robert Day thanked the Board and
indicated that it had been a very enlightening year watching the
Eclipse Foundation change.&nbsp; He further indicated that in the
embedded world, it is a smaller world but that Eclipse was becoming
the defacto standard.&nbsp; Robert wished the Board the best in the
coming year.&nbsp; </SPAN>
</P>
<P><SPAN LANG="en-US"><B><U>Invited Speakers:</U></B></SPAN></P>
<P><SPAN LANG="en-US"><A HREF="http://www.johnhagel.com/" target="_blank">John Hagel</A>,
Deloitte Center for Edge Innovation provided a presentation focused
on what was needed to succeed in today&rsquo;s economic climate.&nbsp;
John indicated that companies needed to be more adaptive in this
economic climate.&nbsp; He further indicated that in times of rapid
change there are more degrees of freedom to shape an industry.&nbsp;
Shaping an industry involved mobilizing a large ecosystem of players
to invest behind a strategy by magnifying perception of reward and
discounting perception of risk.&nbsp; He further indicated that the
Deloitte Center for Edge Innovation had conducted a historic review
of companies that had successfully shaped markets or industries and
had found that there were three elements that came together in the
examples they had studied:&nbsp; </SPAN>
</P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US">(1) A shaping view
&ndash; the company articulated a view of their industry that went
out 10 or 20 years at a very high level and they were able to
identify an opportunity for many people to reap rewards, not just the
shaper.&nbsp; Further they strongly articulated that vision.&nbsp; </SPAN>
</P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US">(2)&nbsp; A shaping
platform &ndash; the company identified a platform that would
fundamentally change the economics of the industry, reducing the
investment to play and accelerating the rewards of investment.&nbsp; </SPAN>
</P>
<P STYLE="margin-left: 1.27cm"><SPAN LANG="en-US">(3)&nbsp; A set of
broadly defined shaping acts and assets that helped overcome the
natural concerns.</SPAN></P>
<P><SPAN LANG="en-US"><U><B>Automotive Working Group Update</B></U></SPAN></P>
<P><SPAN LANG="en-US">Ralph Mueller provided an update on the
Automotive Working Group, the related presentation for which is
attached as <a href="2009_03_exhibits/ExhibitH.pdf">Exhibit H</a>.&nbsp; </SPAN>
</P>
<P><B><SPAN LANG="en-US"><U>Marketing Update</U></SPAN></B></P>
<P><SPAN LANG="en-US">Mike Milinkovich provided a marketing update.</SPAN></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US"><U><B>Operations Update</B></U></SPAN></P>
<P ALIGN=JUSTIFY><SPAN LANG="en-US">Chris Larocque provided an
operations update.</SPAN></P>
<P ALIGN=JUSTIFY><BR><BR>
</P>
<P ALIGN=JUSTIFY>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich declared the meeting adjourned at
approximately 1:43 Pacific time. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><BR><BR>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on March 23, 2009, is attested to and
signed by me below.</SPAN></P>
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