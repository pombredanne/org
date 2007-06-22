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
	    <h3>March 5, 2007</h3>
<P>_________________________________________________________________________</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm">A Meeting of the Board
of Directors (the &ldquo;<B><I>Board</I></B>&rdquo;) of Eclipse.org
Foundation, Inc., a Delaware corporation (the &ldquo;<B><I>Corporation&rdquo;</I></B>),
was held on held on March 5, 2007 at the Santa Clara Convention
Center, Santa Clara, California. This meeting was held as a regularly
scheduled quarterly face-to-face meeting.</P>
<P>Present at the meeting on March 5, 2007 were the following
Directors:</P>
<TABLE WIDTH=649 BORDER=0 CELLPADDING=0 CELLSPACING=0 STYLE="page-break-inside: avoid">
	<COL WIDTH=298>
	<COL WIDTH=351>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Tim Barnes</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> OpenMethods</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Rich Bartlett</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Nokia</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Michael Bechauf</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> SAP AG</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Ed Cobb</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> BEA</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Mark Coggins</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Actuate</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Brian Roberts
			for Paul Czarnik</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Compuware</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Philip Dodds
			for Winston Damarillo</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Simula Labs</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Richard
			Gronback</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Borland</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Andi Gutmans</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Zend</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Jochen Krause</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Elected add-in
			provider representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Dennis Leung</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Oracle</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Howard H. Lewis</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Elected add-in
			provider representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Jeff McAffer</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Elected
			committer representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Kai-Uwe Maetzel</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Elected
			committer representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Eric Newcomer</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Iona</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Brian Carroll
			for John Scumniotales</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Serena</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Steve Saunders</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Wind River</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Mitch Sonies</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Cloudsmith</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Mike Taylor</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Elected add-in
			provider representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Dave Thomson</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> IBM</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Todd Williams</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Elected add-in
			provider representative</P>
		</TD>
	</TR>
	<TR VALIGN=TOP>
		<TD WIDTH=298 HEIGHT=1>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm">Dino Brusco for
			Christy Wyatt</P>
		</TD>
		<TD WIDTH=351>
			<P STYLE="margin-left: 2cm; margin-right: -0.34cm"> Motorola</P>
		</TD>
	</TR>
</TABLE>
<P>Present at the invitation of the Board was Mike Milinkovich,
Executive Director and Janet Campbell, Secretary of Eclipse.org
Foundation, Inc., and Chris Larocque, Director of Operations.</P>
<P>In addition, at the invitation of the board, the following newly
elected board representatives were in attendance:</P>
<P STYLE="margin-left: 1.27cm">Darrin Swanson (elected committer
representative)<BR>Ed Merks (elected committer
representative)<BR>Konstantin Komissarchik (elected committer
representative)</P>
<P>Quorum was achieved at approximately 8:00am local time and the
meeting commenced.</P>
<P><B><U>New Strategic Members</U></B></P>
<OL>
	<LI><P>Cloudsmith has joined as a Strategic Developer and has
	appointed Mitch Sonies as its Board representative. 
	</P>
	<LI><P>Innoopract has changed its membership from an Add-In Provider
	to Strategic Developer and has appointed Jochen Krause as its Board
	representative. 
	</P>
	<LI><P>Oracle has changed its membership from an Add-In Provider to
	Strategic Developer and has appointed Dennis Leung as its Board
	representative. Dennis Leung provided a brief overview of Oracle&rsquo;s
	plans for its participation in Eclipse. 
	</P>
</OL>
<P><B><U>Outgoing Board Members</U></B></P>
<P>This was the last meeting for Kai-Uwe Maetzel and Scott Lewis, as
they decided not to run for re-election as committer representatives.
They were each given an opportunity to provide some parting comments
to the Board.</P>
<P><B><U>Newly Elected Board Members</U></B></P>
<P>Each newly elected Board member in attendance was given an
opportunity to introduce themselves and discuss their objectives for
their term.</P>
<P><U><B>Add-In Provider </B></U>
</P>
<P>The Add-In Provider representatives were provided an opportunity
to raise issues of import to their community.</P>
<P><I>Issue #1: IBM Jazz Initiative</I></P>
<P>The topic of the IBM Jazz initiative was discussed. In particular,
the concern for the Add-In Provider members is that it is concerning
that there is some talk in the media about Jazz being competitive to
Eclipse. No one questions IBMs right to pursue their business
strategy, but if this represents a lessening of support in Eclipse,
then it would be good to know because it could have an impact on the
ecosystem.</P>
<P>Dave Thomson, the board representative for IBM addressed the
concerns, by pointing out that there have been some inaccuracies in
the press. Jazz is the next generation platform for Rational, where
the integration point is the lifecycle, not the desktop. It is a
commercial effort. It is not an open source initiative and it isn&rsquo;t
an open source license. Jazz is built on Eclipse, not intended to
compete with it, and IBM will work with the Eclipse Foundation to
ensure that message is consistently portrayed.</P>
<P><I>Issue #2: Establishing the Infrastructure Customization Working
Group</I></P>
<P>There have been instances where various Eclipse projects have been
interested in using commercial software tools for their development.
The current policy is that the infrastructure used for Eclipse
projects is open source and supported by the EMO. Maintaining a
fairly homogenous infrastructure allows for economies of scale, and
simplifies the learning required by committers, contributors,
adopters and users when interacting with Eclipse projects. However,
since the core Jazz frameworks are not sufficient to completely host
development, there would be a requirement that a mix of open-source
and commercially-licensed infrastructure be running on Eclipse
servers in order to host Jazz-based projects at Eclipse. 
</P>
<P>The real issue for the Board is providing a level playing field.&nbsp;
If we are going to allow projects to use commercial tools and
infrastructure in their development, we would have to allow everyone
to do that.</P>
<P><B>RESOLVED</B>, that there was unanimous consent to create a
working group named &ldquo;Managing Proposed Infrastructure
Customization&rdquo; with the following terms of reference:</P>
<P STYLE="margin-left: 0.64cm">The set of infrastructure available to
developers is vast.&nbsp; Bugzilla, CVS, MediaWiki, Jira, Confluence,
Subversion, and an array of commercial projects and products such as
Jazz.&nbsp; Currently eclipse.org runs a particular subset of these.&nbsp;
Over time, various project and company communities may wish to use
additional or different infrastructure.&nbsp; The Foundation should
develop a consistent approach to allowing and implementing this
requirement should it arise.&nbsp; This working group is charged with
developing guidance for: 
</P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm">a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
maintaining a level playing field for all projects and members
(committer and corporate).&nbsp; For example, should one member be
able to mandate the use of their (or other&rsquo;s) infrastructure? 
</P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm">b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ensuring access by all members of the community (maintaining a low
barrier to entry and operating).&nbsp; For example, would having a
wide and varied set of infrastructure present an excessive barrier to
the community who must learn and use each of the different tools to
participate? 
</P>
<P STYLE="margin-left: 1.91cm; text-indent: -0.64cm">c)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
managing infrastructure on a per project and community basis.&nbsp;
For example, should the foundation&rsquo;s infrastructure team be expected
to install, maintain and update many different facilities?</P>
<P>Participants: Saunders, Steve, Dave Thomson, Jeff McAffer, Brian
Roberts, Howard Lewis, Michael Bechauf, Mike Taylor, Konstantin
Komissarchik</P>
<P><I>Issue #3: Establishing the Cross-Project Resource Allocation
Working Group</I></P>
<P>As a continuation of the previous conversation and the points
raised by the outgoing committer representatives, the question was
raised on how to increase diversity in the core platform project(s)
and to increase investment in projects and activities for the common
good of the Eclipse community. A number of different ideas were
discussed, such as: imposing a headcount &ldquo;tax&rdquo; on
strategic developers to force contributions to platform projects, and
changing the membership agreement for future strategic members. There
was no consensus on any of these ideas.</P>
<P><B>RESOLVED</B>, that there was unanimous consent to create a
working group named the Cross-Project Resource Allocation Working
Group with the following terms of reference:</P>
<P STYLE="margin-left: 0.64cm">There are a number of requirements
that cut across projects where focused efforts would benefit the
broader community (e.g. translations and Europa release train
engineer).&nbsp; This working group will examine the need for
cross-project resource allocation and examine the alternatives
available to meet any needs identified (including the possible
addition of a &ldquo;tax&rdquo; to support such efforts).</P>
<P>Participants:&nbsp; Richard Gronback, Philip Dodds, Dave Thomson,
Dino Brusco, Mitch Sonies, Brian Roberts, Ed Cobb, Tim Barnes, Denis
Leung, Konstantin Komissarchik, Steve Saunders, Darrin Swanson, Eric
Newcomer, and Mike Taylor.</P>
<P><I>Issue #4: Recognition of Skip McGaughey</I></P>
<P>Howard Lewis raised the point that Skip McGaughey is retiring from
the Eclipse Foundation at the end of May. Skip has been involved with
Eclipse since its inception: first on the staff of IBM as the
original Chairman of the Eclipse Consortium, then on the staff of the
Eclipse Foundation as Director, Ecosystem.</P>
<P><B>RESOLVED</B>, that there was unanimous agreement by the Board
of Directors to recognize the contributions of Skip McGaughey for his
many contributions to the success of the Eclipse community. 
</P>
<P><U><B>Redmonk Presentation</B></U></P>
<P>James Governor of RedMonk provided a presentation to the Board
attached hereto as <A HREF="2007_03_exhibits/ExhibitB.pdf">Exhibit B</A>.</P>
<P><B><U>Brent Williams Presentation</U></B></P>
<P>Independent equity analyst Brent Williams provided a presentation
to the Board entitled &ldquo;Delivering Material Shareholder Value
with Eclipse and Open Source Software&rdquo; attached hereto as
<A HREF="2007_03_exhibits/ExhibitC.pdf">Exhibit C</A>.</P>
<P><U><B>Eclipse RCP Strategy</B></U></P>
<P>Ian Skerrett of the EMO provided an update to the Board on the
Foundation&rsquo;s RCP Strategy attached hereto as <A HREF="2007_03_exhibits/ExhibitD.pdf">Exhibit
D</A>.</P>
<P ALIGN=JUSTIFY><B><U>Adoption of Management Recommendations</U></B>
</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
There was unanimous consent to approve the following Resolutions:</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm; page-break-after: avoid">
<B>RESOLVED, </B>that pursuant to Section 5.1 of the Bylaws, the
Board hereby creates the office of &ldquo;Treasurer&rdquo; of the
Corporation and appoints Chris Larocque to said office.</P>
<P STYLE="text-indent: 1.27cm"><B>RESOLVED</B>, that there was
unanimous consent to appoint Jess Garms and David Williams as
co-leaders of the Web Tools Platform Project PMC.</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm"><B>RESOLVED,
t</B>hat the Executive Director of the Corporation is hereby
authorized and empowered, for and on behalf of the Corporation, to
retain such advisors, to execute and deliver such documents, papers
or instruments and to do or cause to be done any and all such other
acts and things as he may deem necessary, appropriate or desirable in
connection with the organization and execution of the EclipseCon 2008
conference, including without limitation the selection of vendors
responsible for the operations and logistics of the event, and the
taking of any such action shall be conclusive evidence of the
approval thereof by this Board of Directors.</P>
<P ALIGN=JUSTIFY STYLE="text-indent: 1.27cm; margin-top: 0.42cm"><B>RESOLVED,
t</B>hat the Executive Director of the Corporation is hereby
authorized and empowered, for and on behalf of the Corporation, to
retain such advisors, to execute and deliver such documents, papers
or instruments and to do or cause to be done any and all such other
acts and things as he may deem necessary, appropriate or desirable in
connection with the organization and execution of the Eclipse Summit
Europe 2007 conference, including without limitation the selection of
vendors responsible for the operations and logistics of the event,
and the taking of any such action shall be conclusive evidence of the
approval thereof by this Board of Directors.</P>
<P STYLE="text-indent: 1.27cm"><B>RESOLVED</B>, that there was
unanimous consent to appoint Christy Wyatt and Rich Bartlett to the
IP Advisory Committee.</P>
<P STYLE="text-indent: 1.27cm"><B>RESOLVED</B>, that there was
unanimous consent to approve the 2007 Roadmap.</P>
<P STYLE="margin-top: 0.42cm"><U><B>Other Business</B></U></P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm"><U>EclipseCon 2007
Update</U>.&nbsp; Mike Milinkovich reviewed the current status of
EclipseCon 2007. Another great conference is expected.&nbsp; 
</P>
<P STYLE="text-indent: 1.27cm; margin-top: 0.42cm">The Key
Performance Indicators, <A HREF="2007_03_exhibits/ExhibitI.b.pdf">Marketing
Update</A>, <A HREF="2007_03_exhibits/ExhibitI.c.pdf">Membership
Update</A> and <A HREF="2007_03_exhibits/ExhibitI.d.pdf">Project
Update</A> were distributed previously to the Board. There was
insufficient time to review the materials in the meeting. Those with
questions or comments were invited to contact Mike Milinkovich.</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
There being no additional business to tend to, Mike Milinkovich
declared the meeting adjourned. 
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