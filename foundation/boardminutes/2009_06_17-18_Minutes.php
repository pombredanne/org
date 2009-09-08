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
	    <h3>June 16-17, 2009</h3>

	    <P LANG="en-US" ALIGN=CENTER>_________________________________________________________________________</P>
<P STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">A Meeting of the
Board of Directors (the &ldquo;<I><B>Board</B></I>&rdquo;) of
Eclipse.org Foundation, Inc., a Delaware corporation (the
&ldquo;<I><B>Corporation&rdquo;</B></I>), was held on held at 9:00am
CEST time at the InterContinental Berlin Hotel in Berlin, Germany on
June 17 and 18<SUP>th</SUP>, 2009 as a regularly scheduled quarterly
face-to-face meeting. </SPAN>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><BR><BR>
</P>
<TABLE WIDTH=624 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<COL WIDTH=69>
	<COL WIDTH=55>
	<COL WIDTH=246>
	<COL WIDTH=253>
	<TR>
		<TD COLSPAN=2 WIDTH=124>
			<P LANG="en-US" ALIGN=CENTER STYLE="border: none; padding: 0.0cm">
			In attendance:</P>
		</TD>
		<TD ROWSPAN=2 WIDTH=246 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0.0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Director</P>
		</TD>
		<TD ROWSPAN=2 WIDTH=253 VALIGN=BOTTOM>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0.0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Company</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			&nbsp;</P>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			17<SUP>th</SUP></P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			18th</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Chris Aniszczyk</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Committer Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Rich Bartlett</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Nokia</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Michael Bechauf</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Boris Bokowski</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Committer Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Hans-Joachim Brede</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Sustaining Member Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Hans-Christian Brockmann</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			brox IT-Solutions GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			No</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			No</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Dino Brusco</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Motorola</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Mark Coggins</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Actuate Corporation</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Mark de Visser</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Sonatype</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Ricco Deutscher</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			SOPERA GmbH</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Doug Gaff</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Committer Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Hans Kamutzki</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Sustaining Member Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			No</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			No</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			John Kellerman</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			IBM</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Jochen Krause</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Innoopract</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			No</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Stephane Lacrampe</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			OBEO</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Dennis Leung</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			No</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			No</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Paul Lipton</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			CA Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Ed Merks</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Committer Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Wolfgang Neuhaus</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			itemis AG</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			No</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			No</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Shawn Pearce</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Sustaining Member Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			No</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Mitch Sonies</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Cloudsmith Inc.</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			No</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			No</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Mike Taylor</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Sustaining Member Representative</P>
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=69>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0.0cm; padding-right: 0.0cm">
			Yes</P>
		</TD>
		<TD WIDTH=55>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			No</P>
		</TD>
		<TD WIDTH=246>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Maher Masri for Todd E. Williams</P>
		</TD>
		<TD WIDTH=253>
			<P LANG="en-US" STYLE="border-top: none; border-bottom: none; border-left: none; border-right: none; padding-top: 0cm; padding-bottom: 0.0cm; padding-left: 0cm; padding-right: 0.0cm">
			Genuitec</P>
		</TD>
	</TR>
</TABLE>
<P LANG="en-US" STYLE="text-indent: 1.27cm">Present at the invitation
of the Board was Mike Milinkovich, Executive Director, Janet
Campbell, Secretary, and Chris Larocque, Treasurer of Eclipse.org
Foundation, Inc.</P>
<P STYLE="margin-top: 0.42cm; page-break-after: avoid"><SPAN LANG="en-US"><U><B>General
Business</B></U></SPAN> 
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm"><SPAN LANG="en-US">Mike
Milinkovich introduced the minutes from the May 2009 Board meeting,
attached hereto as Exhibit A and asked for any corrections and/or
comments.&nbsp; The following resolution was unanimously passed:</SPAN></P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
there was unanimous consent to approve full and abridged version of
the minutes of the May 2009 Board Meeting.&nbsp; </SPAN>
</P>
<P LANG="en-US" STYLE="text-indent: 1.27cm">Mike Milinkovich
introduced the most recent proposed changes to the Eclipse Trademark
Guidelines, attached hereto as <a href="2009_06_exhibits/ExhibitB.pdf">Exhibit B</a> and asked if there were any
questions or comments.&nbsp; The following resolution was unanimously
passed:</P>
<P STYLE="margin-left: 1.27cm; text-indent: 1.27cm"><SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">,
there was unanimous consent to approve the updated Trademark
Guidelines.</SPAN></P>
<P LANG="en-US"><U><B>JGit</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced the topic of the
possibility of the JGit Project moving over to Eclipse and being
maintained at Eclipse under the terms of the <A HREF="../../documents/edl-v10.php">EDL</A>
alone.&nbsp; Mike indicated that having JGit at Eclipse would be very
positive for the Eclipse community.&nbsp; Mike further added that
this would be the first time that a Project would be hosted at
Eclipse solely under a license other than the <A HREF="../../documents/epl-v10.php">EPL</A>.&nbsp;
All previous instances of Project&rsquo;s adopting a license other
than the EPL, involved dual-licensing in conjunction with the EPL.&nbsp;
Solely licensing this Project under the EDL would be unique at
Eclipse and increase the risk that a committer may inadvertently
re-license code when consuming code into an EPL Project.&nbsp;&nbsp;&nbsp;
</SPAN>
</P>
<P LANG="en-US" STYLE="text-indent: 1.27cm">It was proposed that if
we were to consider such a proposal we would need to develop criteria
to use to determine when we would allow for such a case.&nbsp; The
Board discussed the possibility of such criteria including the
sponsor of the project, size of the community, and the strategic
importance to Eclipse.&nbsp; The Board decided to ask that the
Committer representatives and Janet Campbell engage the JGit Project
in additional discussions to see if dual licensing the project under
the EPL and EDL would be feasible as there appeared to be little
adverse impact to the JGit Project of doing so.&nbsp; In addition,
the dual-licensing would be consistent with all other cases at
Eclipse where a license other than the EPL has been used for a
Project and reduce the risk of inadvertent re-licensing of EDL code
at Eclipse.</P>
<P LANG="en-US"><U><B>LGPL&nbsp; </B></U>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced the topic of the
re-distribution of <A HREF="http://www.opensource.org/licenses/lgpl-license.php">LGPL</A>
code at Eclipse.&nbsp; There have been a number of projects that have
expressed an interest in distributing <A HREF="http://www.opensource.org/licenses/lgpl-license.php">LGPL</A>
code at Eclipse.&nbsp; Currently the Eclipse Foundation does not
permit it.&nbsp; The Foundation allows projects to use LGPL code as a
works-with dependency, but not as a non-exempt pre-req (See the Board
approved <A HREF="../../documents/Eclipse_Policy_and_Procedure_for_3rd_Party_Dependencies_Final.pdf">Guidelines
for the Review of Third Party Dependencies</A> for definitions of
these terms).&nbsp; There was an exchange of views on the merits of
allowing the LGPL-licensed artifacts in Eclipse projects.Mike
Milinkovich summarized the discussion indicating that there was no
consensus to change the status quo at this point in time.</SPAN></P>
<P LANG="en-US"><U><B>Committer Issues</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Doug Gaff indicated that the Committer Community
would still like to see GIT supported.&nbsp; Mike Milinkovich
indicated that eclipse.org currently provides a choice between CVS
and Subversion as the source code repository.&nbsp; Mike indicated if
we were to add support for GIT, the Foundation would like to
discontinue support for CVS or Subversion, adding that it is not only
a resource issue but a barrier to entry if people need to have to
deal with potentially three different source code repositories.&nbsp;
Dennis Leung asked Doug which two he thought the community would
choose and Doug responded with CVS and GIT.&nbsp; &nbsp;&nbsp;Boris
Bokowski indicated that Apache mirrors whatever is in Subversion and
indicated that this would provide value and help make a case for
GIT.&nbsp; Mike Milinkovich commented that this was a good idea and
said he would open a bug to initiate that discussion.&nbsp; Mike
asked if e4 would consider moving over to GIT if it was one of the
supported source code repositories and Boris indicated that he
thought they would consider it.</SPAN></P>
<P LANG="en-US"><U><B>Sustaining Member Issues</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Hans Kamutzki presented the results of the Eclipse
Sustaining Member Survey attached hereto as <a href="2009_06_exhibits/ExhibitC.pdf">Exhibit C</a>.&nbsp;&nbsp;
Within the results it was apparent that European members would like
the EPL to be more accepted in Europe&rsquo;s public sector.&nbsp;&nbsp;
Mike Milinkovich asked the European members for their assistance in
accomplishing this goal.&nbsp; </SPAN>
</P>
<P LANG="en-US"><U><B>Project Update</B></U></P>
<P LANG="en-US"><U>Galileo Release Train Update: </U>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich provided an update on the Galileo
release train, the related slides for which are attached as <a href="2009_06_exhibits/ExhibitD.pdf">Exhibit
D</a>.&nbsp;&nbsp; </SPAN>
</P>
<P LANG="en-US"><U>Collecting and Reporting Download Statistics:</U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced the topic of
collecting and reporting download statistics, which was raised in an
email to the Board mailing list June 4, 2009.&nbsp; Mike indicated
that almost nine months ago he had indicated that it was unacceptable
to ship P2 without statistics.&nbsp; Mike indicated that at that time
he should have changed the severity to blocking to escalate the
problem immediately.&nbsp; </SPAN>
</P>
<P LANG="en-US" STYLE="page-break-after: avoid"><U><B>Industry
Working Groups</B></U></P>
<P STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Jochen Krause presented an update on the German
insurance industry&rsquo;s work to establish the Prometheus
Foundation, the related slides for which are attached as <a href="2009_06_exhibits/ExhibitF.pdf">Exhibit F</a>.&nbsp;&nbsp;
Jochen indicated that the feedback that they are receiving is that
OSGi and Eclipse are the right technologies.&nbsp; There is a high
level of awareness of both technologies and an interest in using
them.&nbsp; In the insurance industry, Eclipse is perceived as the
right platform for applications.&nbsp; In the event that Prometheus
were to become a member, we would need to look at our existing
membership structure and see what, if any changes are needed to
address the needs of a consortium such as this.&nbsp;&nbsp; Mike
Milinkovich indicated that perhaps the most effective way to address
the needs of such a Member is to enable this through the Strategic
Consumer class of membership.&nbsp;&nbsp; </SPAN>
</P>
<P STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Ricco Deutscher provided an overview of the
Eclipse SOA Initiative, a copy of the related presentation for which
is attached as <a href="2009_06_exhibits/ExhibitG.pdf">Exhibit G</a>.&nbsp; Mike Milinkovich further indicated
that he had a draft revision to the SOA Charter that he would be
sending out for everyone&rsquo;s review.</SPAN></P>
<P LANG="en-US"><U><B>Review of Strategy Process</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Ricco Deutscher introduced the strategy session,
the related slides for which are attached as <a href="2009_06_exhibits/ExhibitH.pdf">Exhibit H</a>.&nbsp; The
Board discussed the vision for the Eclipse Foundation and concluded
that the vision should be revisited to be both more detailed while
retaining a degree of openness.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">In discussing the strategic goals of the Eclipse
Foundation, the Board indicated that diversity on <A HREF="http://www.eclipse.org/e4/">e4</A>
was of strategic importance to the Eclipse Foundation.&nbsp; In
addition, it was important to continue to grow a diversified revenue
model.&nbsp; As a result of the discussion, these two concepts were
introduced into the Strategic Goals of the Foundation.&nbsp;&nbsp;
In addition, it was suggested that the Eclipse Foundation may want to
consider the possibility of re-branding from a strategy standpoint.</SPAN></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">The Board then divided into groups of four to
brainstorm on each of the four elements of the SWOT (Strengths,
Weaknesses, Opportunities, and Threats).&nbsp; </SPAN>
</P>
<P LANG="en-US"><U><B>Management Reports</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced the management
reports.&nbsp; &nbsp;Mike encouraged
all Board members to support Eclipse Summit Europe by sending people,
encouraging their customers to attend and sponsoring the event.&nbsp;&nbsp;
Chris Larocque presented an Operations update.&nbsp;&nbsp; Mike
reiterated that the financial downturn has impacted the Eclipse
Foundation and will continue to do so.&nbsp; The management team is
actively monitoring the situation and looking at scenarios.&nbsp; The
budget that will be brought to the Board in Q4 will be realistic
based on the information that we have at the time.&nbsp; </SPAN>
</P>
<P LANG="en-US" STYLE="page-break-after: avoid"><U><B>Results of
Eclipse Community Survey</B></U></P>
<P STYLE="page-break-after: avoid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced the results of the
Community Survey, the related presentation material for which is
attached as <a href="2009_06_exhibits/ExhibitL.pdf">Exhibit L</a>.&nbsp; The results were generally quite
favourable as was the related press.&nbsp; </SPAN>
</P>
<P LANG="en-US">The meeting was adjourned to reconvene Thursday June
18, 2009 at 9:00 am CEST time.</P>
<P LANG="en-US" ALIGN=CENTER STYLE="text-indent: 1.27cm">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</P>
<P LANG="en-US">Thursday June 18, 2009</P>
<P LANG="en-US"><U><B>Strategy Discussions &ndash; Phase 1 &ndash;
Brainstorming</B></U></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich introduced a Board review of the
output from the SWOT (Strengths, Weaknesses, Opportunities, and
Threats) group discussions from the previous day.&nbsp;&nbsp; </SPAN>
</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US">Mike Milinkovich reviewed the EMO&rsquo;s SWOT
(Strengths, Weaknesses, Opportunities, and Threats)</SPAN> <SPAN LANG="en-US">analysis
with the Board.</SPAN></P>
<P LANG="en-US"><U><B>Strategy Discussions &ndash; Phase 2 &ndash;
Refining our Strategy Concepts</B></U></P>
<P LANG="en-US" STYLE="text-indent: 1.27cm">The initiatives that were
suggested as a result of these discussions were amalgamated and each
Board member was given $20 figurative dollars to &ldquo;vote&rdquo;
on the initiatives that they thought were those that the Eclipse
Foundation should pursue.&nbsp;&nbsp;&nbsp; Doug Gaff proposed, and
the following motion was passed unanimously (Dennis Leung
abstaining):</P>
<P STYLE="margin-left: 1.27cm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<SPAN LANG="en-US"><B>RESOLVED</B></SPAN><SPAN LANG="en-US">, that
the Eclipse Foundation implement an App Store on top of Eclipse
Plug-in Central. At the Foundation&rsquo;s discretion, member
companies may assist in the creation of the store, but the Foundation
will receive the revenue from the fees associated with selling
directly from the store. This initiative should be viewed as an
ecosystem-enabling activity and an additional source of incremental
revenue for the Foundation.</SPAN></P>
<P LANG="en-US" STYLE="text-indent: 1.27cm">The Board discussed the
value of having a donate button on the download page and within the
distribution.&nbsp; It was felt that there was insufficient time to
include it in the distribution for Galileo, but there was general
agreement that a donate button the download page was worthwhile.&nbsp;
</P>
<P LANG="en-US" STYLE="text-indent: 1.27cm">Mike Milinkovich
indicated that at the next Board meeting in September he would come
back for a proposal on what the Eclipse Foundation would like to do
in 2010 with respect to an App Store, together with a proposed budget
allocation.</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">Mike
Milinkovich declared the meeting adjourned at approximately 3:05
Berlin Time. </SPAN>
</P>
<P ALIGN=CENTER STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *</SPAN></P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm"><SPAN LANG="en-US">This
being a true and accurate record of the proceedings of this Meeting
of the Board of Directors held on June 17 and 18<SUP>th</SUP>, 2009,
is attested to and signed by me below.</SPAN></P>
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