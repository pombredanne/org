<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# m2miwg_charter.php
	#
	# Author: 		Mike Milinkovich
	# Date:			2012-06-04
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "2012 Annual Community Report";
	$pageKeywords	= "eclipse, foundation";
	$pageAuthor		= "Mike Milinkovich";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>
		<br/><strong>Published June 2012</strong><br/><br/>
		
<P>Welcome to the first annual Eclipse Foundation Community Report.
When our community last revised its Bylaws in August 2011, one of the
changes was the replacement of the annual Roadmap document with an
Annual Community Report. This is the first such report, and as such
it is a bit of an experiment. Comments and feedback on the style and
content would be appreciated at <A HREF="mailto:emo@eclipse.org">emo@eclipse.org</A>.</P>
<P>Other than the financial information, this report will cover the
period April 1, 2011 to March 31, 2012. 
</P>
<H2 CLASS="western">Who We Are</H2>
<P>Our Bylaws define the Eclipse Foundation in this way:</P>
<P STYLE="margin-left: 2cm"><I>The Eclipse technology is a
vendor-neutral, open development platform supplying frameworks and
exemplary, extensible tools (the &quot;Eclipse Platform&quot;).
Eclipse Platform tools are exemplary in that they verify the utility
of the Eclipse frameworks, illustrate the appropriate use of those
frameworks, and support the development and maintenance of the
Eclipse Platform itself; Eclipse Platform tools are extensible in
that their functionality is accessible via documented programmatic
interfaces. The purpose of Eclipse Foundation Inc., (the &quot;Eclipse
Foundation&quot;), is to advance the creation, evolution, promotion,
and support of the Eclipse Platform and to cultivate both an open
source community and an ecosystem of complementary products,
capabilities, and services.</I></P>
<P STYLE="font-style: normal">This makes the Eclipse community a
unique open source community. Not only are we interested in building
open source code, we are equally committed to creating a commercially
successful ecosystem around that code. This combination of interests
has been a key part of Eclipse's success in the software industry.</P>
<H2 CLASS="western">Strategy</H2>
<P>The following are the strategic goals of the Eclipse Foundation
for 2012, as set by the Board of Directors.</P>
<OL>
	<LI>Establish and maintain Eclipse as a leading provider of open
	source tools and runtime technologies. The goal of Eclipse is to
	define for the industry a development platform that is freely
	licensed, open source and provides support for the full breadth of
	the application lifecycle, in many disparate problem domains, and
	across the development and deployment platforms of choice, including
	both desktop and the web. At least since 2004, Eclipse projects have
	been shipping innovative runtime technologies such as Equinox and
	the Rich Client Platform. The last several years have seen steady
	growth in runtime technologies at Eclipse. At the same time, there
	has been rapid growth in interest in OSGi, which is the standard
	upon which the Eclipse plug-in model is based. Moving forward, we
	expect to see rapid growth in both the projects building and the
	adoption of Eclipse runtime technologies. 
	</LI>
	<LI>Create value for all its membership classes. The Eclipse
	Foundation serves many members whose primary interest is leveraging
	Eclipse technologies in commercial offerings such as products and
	services. The Eclipse Foundation will focus its energies to ensure
	that commercial opportunity exists within the Eclipse ecosystem.
	Look for continuous improvements to Eclipse Marketplace, and for
	other initiatives that benefit members. 
	<br/><br/>
	Committers are also members of the Eclipse Foundation and are in
	many ways its backbone. The Eclipse Foundation and its staff will
	continue to look for opportunities to improve services to its
	project community throughout the year. Look for enhancements to our
	web, download, code management, build and other key components of
	project infrastructure in 2012.</LI>
	<LI>Foster growth of the ecosystem, particularly in verticals.
	The creation of a large community of commercial and open source
	organizations that rely on and/or complement Eclipse technology has
	been a major factor in the success of Eclipse. Each time Eclipse
	technology is used in the development of a product, service or
	application the Eclipse community is strengthened. Our goal in 2012
	is to focus our attention on the creation of industry working groups
	and new Eclipse projects that focus on particular industry segments
	such as mobile, automotive, insurance, and finance.</LI>
	<LI>Run a good ship. This Eclipse Foundation employs staff and
	represents thousands of stakeholders. It is important that the
	Foundation be a well run organization internally and externally.</LI>
	<LI>Continue to grow a diversified revenue model. Reliance on a
	single source of revenue to fund the Foundation puts us at greater
	risk of being negatively impacted by industry specific business
	cycles. It is a goal of the Eclipse Foundation to ensure revenue
	sources from multiple types of organizations, and seek other sources
	such as events and sponsorships.</LI>
</OL>
<H2 CLASS="western">Some Key Decisions</H2>
<P>Over the past year, the Board has made a number of strategic
decisions that will impact how Eclipse evolves in the future. A brief
summary of these is listed below. More details can be found in the
<A HREF="http://www.eclipse.org/org/foundation/minutes.php">minutes</A>
of the Board, found on our website.</P>
<UL>
	<LI><B>Definition of an Eclipse Project:</B> <SPAN STYLE="font-weight: normal">The
	definition of what projects will be accepted by the Eclipse
	community has evolved over the years. In 2011, the Board instructed
	the Executive Director to approve open source software projects at
	Eclipse that meet the following the criteria:</SPAN></LI>
	<UL>
	<LI>The project will conform to the	Eclipse Development Process</LI>
	<LI>The project will conform to the
	Eclipse Intellectual Property Policies and its related procedures</LI>
	<LI>The project will be licensed
	under the Eclipse Public License unless otherwise and unanimously
	approved by the Board.</LI>
	</UL>
	<P STYLE="font-weight: normal">There is no requirement that Eclipse
	projects must utilize the Java language or OSGi modularity (plug-in)
	model.</LI>
	<LI><B>Industry Working Groups:</B> <SPAN STYLE="font-weight: normal">The
	Eclipse Foundation believes that there will be an increasing number
	of enterprises participating in open source in the coming years. The
	Eclipse Foundation has created the concept of <A HREF="http://www.eclipse.org/org/industry-workgroups/">industry
	working groups</A> (IWGs) in order to facilitate their participation
	at Eclipse. In June 2011, the Eclipse Board passed a number of
	important resolutions to facilitate these groups, including:</SPAN></LI>
	<UL>
	<LI>the creation of a private,
	members-only IT infrastructure for the exclusive use of
	participating members of IWGs, hosted and supported by the Eclipse
	Foundation; </LI>
	<LI>IWGs may, in certain cases,
	create software binary releases made available only to their
	participating members, made available via that private IT
	infrastructure; and</LI>
	<LI>with the approval of the Board,
	IWGs may be allowed greater flexibility in their allowed licenses,
	provided that the IWG's projects must be clearly identified as
	separate and distinct from Eclipse Foundation projects, hosted on a
	web property other than eclipse.org, and not using the org.eclipse
	namespace. For example, the Polarsys IWG focused primarily on
	aerospace will be allowed to host projects under the LGPL.</LI>
	</UL>
	<LI><B>Common Build Infrastructure: </B><SPAN STYLE="font-weight: normal">The
	Board authorized the EMO to create and host a common build
	infrastructure (CBI) for the use of all Eclipse projects.
	Historically, each Eclipse project was responsible for creating and
	maintaining its own build and build infrastructure. In the future,
	we expect that the CBI will be a key service provided by the EMO for
	the Eclipse project community. The EMO has been actively working on
	building the CBI using Maven, Tycho, and Hudson technologies, and
	expects many projects will migrate to this service during 2012.</SPAN></LI>
</UL>
<H2 CLASS="western">Membership</H2>
<P>The Foundation finished 2011 with a total of 175 members. By the
end of March 2012, that number had increased to 181. A total of 32
companies joined as new members of the Foundation in 2011 and Q1
2012. These companies include: Cloudsoft, Inspire, Totvs, eXXcellent
Solutions, Open APC Foundation, Intuit, GitHub, Juniper, Chronon,
Proxiad, Verit, Sungard, Tech Unverisity Darmstadt, Jaspersoft,
CloudBees, Appcelerator, Univiersity of Milano, PostFinance, Airbus,
Corisecio, Fosslc e.V., Industrial TSI, Monta Vista, Suprematic,
WedRatio, Antelink, Validas, Micromata, Kompetenzzentrum, SMB, Brox
and Axeda.</P>
<img src="../../../images/reports/2012_membership.png" alt="2012 Membership Numbers" height="409" width="600" />

<H3 CLASS="western">Member Value</H3>
<P>The recruitment of new members has been greatly assisted by the
strategy of creating industry working groups (IWG). As participation
in IWGs grows, our membership has grown and diversified into
different industries such as automotive, machine-to-machine
communications, and aerospace.</P>
<UL>
	<LI><P><B>Automotive: </B><SPAN STYLE="font-weight: normal">The
	Automotive Industry Working Group was created </SPAN>to define and
	implement a standard platform for the software development tools
	used in the automotive industry. German car maker BMW Group, the
	automotive suppliers Robert Bosch GmbH and Continental AG, and the
	Eclipse Strategic Member itemis AG from L&uuml;nen, Germany were
	founding members of the initiative. 
	</P>
	<LI><P><B>Machine-to-Machine (M2M):</B> The M2M Industry Working
	Group was created to define and implement an open standard platform
	for the software development tools used in developing
	machine-to-machine (M2M) communications applications. Sierra
	Wireless, IBM and Eurotech are the founding members of the M2M IWG. 
	</P>
	<LI><P><B>Polarsys (aerospace): </B><SPAN STYLE="font-weight: normal">T</SPAN>he
	goal of Polarsys is to build and maintain an open source tools chain
	that is used by organizations building safety-critical and software
	intensive embedded systems. Industries such as aerospace, defense,
	transportation, telecommunications, energy and healthcare require
	development tool chains with a number of specific requirements,
	including very long term support and maintenance requirements.
	The initial Polarsys members are Airbus, Astrium Satellites, Ericsson, 
	Intecs, Itemis, Obeo, Soyatec, Thales. Interested parties in Polarsys 
	which should soon join the IWG include ATOS, CEA, CS (Communication & Systemes), 
	IRIT (Institut de recherche en informatique de Toulouse), Inria, 
	Katholieke Universiteit Leuven, Universidad Politecnica de Valencia, Tecnalia.  
	</P>
</UL>
<H2 CLASS="western">Conferences and Events</H2>
<P>No description of the Eclipse Foundation's activities can fail to
mention our community's successful conferences. EclipseCon and
EclipseCon Europe were both enormously successful. Both events were
beyond our expectations with regard to participants, sponsors, and
positive attendee feedback. As but one sample metric, over 84% of
EclipseCon 2012 attendees rated the conference as either &ldquo;Excellent&rdquo;
or &ldquo;Very Good&rdquo;. The EclipseCon conferences, Eclipse Days
and DemoCamps are the primary events that the Eclipse Foundation
supports to help foster the strong personal relationships in the
community that only face-to-face contact can create. We highly
encourage all Eclipse community participants to participate in these
events.</P>
<H2 CLASS="western">Financials</H2>
<P>The Eclipse Foundation's fiscal year end is December 31. Our
auditors are the firm Deloitte &amp; Touche, LLP. The Eclipse
Foundation is incorporated in the State of Delaware, USA as a 501(c)6
not-for-profit. Its headquarters is located in Ottawa, Canada.</P>
<P>2011 was a solid year financially for the Eclipse Foundation.
Despite losing Nokia as a major funder, and Strategic Developer
Member, overall revenue was up slightly over 2010. Our website
advertising program, initiated in 2011, was an important part of that
success. Despite originally budgeting a $300K loss, the Eclipse
Foundation made a small surplus for the year, which was contributed
to its cash reserves. The organization continues to be on a solid
financial footing.</P>
<TABLE WIDTH=397 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<COL WIDTH=64>
	<COL WIDTH=64>
	<COL WIDTH=68>
	<COL WIDTH=60>
	<COL WIDTH=13>
	<COL WIDTH=64>
	<COL WIDTH=64>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			In US $ millions
		</TD>
		<TD WIDTH=64></TD>
		<TD COLSPAN=2 WIDTH=128>
			vs. Budget
		</TD>
		<TD WIDTH=13></TD>
		<TD COLSPAN=2 WIDTH=128>
			vs. Actual
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64></TD>
		<TD WIDTH=64></TD>
		<TD WIDTH=68>
			Budget
		</TD>
		<TD WIDTH=60>
			Actual
		</TD>
		<TD WIDTH=13></TD>
		<TD WIDTH=64>
			2010
		</TD>
		<TD WIDTH=64>
			2011
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			Revenue
		</TD>
		<TD WIDTH=64></TD>
		<TD WIDTH=68>
			4.1
		</TD>
		<TD WIDTH=60>
			4.1
		</TD>
		<TD WIDTH=13></TD>
		<TD WIDTH=64>
			4.0
		</TD>
		<TD WIDTH=64>
			4.1
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD WIDTH=64>
			Expenses
		</TD>
		<TD WIDTH=64></TD>
		<TD WIDTH=68>
			4.4
		</TD>
		<TD WIDTH=60>
			4.0
		</TD>
		<TD WIDTH=13></TD>
		<TD WIDTH=64>
			4.1
		</TD>
		<TD WIDTH=64>
			4.0
		</TD>
	</TR>
	<TR VALIGN=BOTTOM>
		<TD COLSPAN=2 WIDTH=128>
			<P>Net Income</P>
		</TD>
		<TD WIDTH=68>
			<P ALIGN=RIGHT STYLE="border-top: 1.00pt solid #000000; border-bottom: 2.60pt double #000000; border-left: none; border-right: none; padding: 0.05cm 0cm">
			-0.3</P>
		</TD>
		<TD WIDTH=60>
			<P ALIGN=RIGHT STYLE="border-top: 1.00pt solid #000000; border-bottom: 2.60pt double #000000; border-left: none; border-right: none; padding: 0.05cm 0cm">
			0.1</P>
		</TD>
		<TD WIDTH=13></TD>
		<TD WIDTH=64>
			<P ALIGN=RIGHT STYLE="border-top: 1.00pt solid #000000; border-bottom: 2.60pt double #000000; border-left: none; border-right: none; padding: 0.05cm 0cm">
			-0.1</P>
		</TD>
		<TD WIDTH=64>
			<P ALIGN=RIGHT STYLE="border-top: 1.00pt solid #000000; border-bottom: 2.60pt double #000000; border-left: none; border-right: none; padding: 0.05cm 0cm">
			0.1</P>
		</TD>
	</TR>
</TABLE>

<H2 CLASS="western">Intellectual Property Management</H2>

<P>During the time period spanning April 1, 2011 to March 31, 2012, the 
Eclipse Foundation received 1325 requests for code review and completed review 
of 1337 requests. With the January 2012 deadline to submit IP requirements for Juno came a high 
volume of submissions. As a result, The backlog of IP review requirements reached 
an all time high this past January that is likely to result in delays for the committer 
community for several months to come.  The overall backlog of committer requests increased 
rom 79 on April 1, 2011 to 273 on March 31, 2012.  As of the time of this writing 
all code requested for Juno has been reviewed for the community and significant progress 
has been made in Q1 2012 such that the backlog currently sits at 114.</P>

<P>Approximately 60% of the backlog consists of requirements from Incubating Projects 
that will benefit from parallel IP. To address the backlog, improve wait times for the 
community, and prepare the Foundation 
to deal effectively with IP contributions from new projects and Industry Working Groups, the 
Foundation intends to hire an additional IP Analyst in 2012.</P>
	
<H2 CLASS="western">Innovation</H2>
<P>The past year has seen an enormous amount of innovation within the
Eclipse community. A few key projects and technology areas are listed
below, with comments on both their recent past, and their future
direction. This is certainly not intended to be exhaustive, but will
hopefully provide some of the highlights of the exciting technologies
being built by the Eclipse community.</P>
<img src="../../../images/reports/2012_Active_Projects.png" alt="2012 Active Projects" height="335" width="565" />
<H3 CLASS="western">Indigo Simultaneous Release</H3>
<P>In June, 2011 the Eclipse community shipped Indigo, its sixth
annual simultaneous release. Including previous releases of the
Eclipse Platform, this was the eighth release that was shipped on
time to the day. Sixty-two projects participated in the Indigo
simultaneous release, comprising 46 million lines of code. Over
250,000 downloads were recorded for Indigo in its first three days.
This predictable release schedule has been a key part of Eclipse's
success over the years, and is an important part of the success of
the Eclipse ecosystem.</P>
<img src="../../../images/reports/2011_release_train.png" alt="2011 Release Train Numbers" height="426" width="600" />
<P>Highlights of the Indigo release include the addition of
world-class GUI building support from the WindowBuilder project,
Maven integration from the m2e project, and automated functional GUI
testing for Java and HTML applications from the Jubula project.</P>
<P>The complete list of new projects that joined the release train
for the first time include</P>
<UL>
	<LI>Agent Modeling Platform</LI>
	<LI>Eclipse Generation Factories (EGF)</LI>
	<LI>Eclipse Gyrex Project</LI>
	<LI>Eclipse Runtime Packaging Project</LI>
	<LI>Eclipse Scout</LI>
	<LI>EMF Facet</LI>
	<LI>Graphiti</LI>
	<LI>Jubula Functional Testing Tool</LI>
	<LI>Maven Integration</LI>
	<LI>Object Teams</LI>
	<LI>WindowBuilder</LI>
</UL>
<H3 CLASS="western">Eclipse 4.x</H3>
<P>2011 saw another release of the Eclipse 4 stream &ndash; Eclipse
4.1. Version 4 of the Eclipse Platform has had two releases since
graduating from the e4 incubator, but was still treated as secondary
to the 3.x platform generation. In the 2012 Juno release we will take
the final steps to make version 4.2 the primary platform for
enterprise level adoption. This work includes refactoring and cleanup
of the workbench compatibility code, implementing Intro support,
improving performance, addressing globalization and accessibility
bugs, and regularly running the full suite of Eclipse SDK regression
tests against Platform version 4.</P>
<P>The major goals of the 4.x release stream of the Eclipse platform
include:</P>
<UL>
	<LI>Making it easier to write plug-ins (e.g. making Eclipse an
	even better Rich Client Platform)</LI>
	<LI>Allowing better control over the look of Eclipse based
	products</LI>
	<LI>Increasing diversity of contributors to the platform</LI>
	<LI>Maintaining backward compatibility for API-clean clients</LI>
</UL>
<P>Eclipse 4.2 shipping as the platform for the Eclipse Juno
simultaneous release marks the first major revision of the Eclipse
platform since 3.0 in 2004. This has been a major undertaking by the
Eclipse platform team, one that will well situate Eclipse for future
success.</P>
<H3 CLASS="western">Orion</H3>
<P>Eclipse tools have historically had a very strong correlation with
the Java language. However, with the rapid growth of Rich Internet
Application languages and technologies such as JavaScript and Ajax,
the Eclipse community must support the requirements of these
developers as well. Orion's objective is to create a browser-based
open tool integration platform that is entirely focused on developing
for the web, in the web. Tools are written in JavaScript and run in
the browser. Unlike other attempts at creating browser-based
development tools, this is not an IDE running in a single tab. Links
work and can be shared. You can open a file in a new tab. Great care
has been taken to provide a web experience for development.</P>
<P>The Orion project's focus is creating components, services, and
libraries for building web-based development tools. This includes
browser client infrastructure built using widely adopted web
technologies such as HTML, JavaScript, and CSS. Also included is
server-side infrastructure needed by such development tools. This
includes infrastructure supporting file management, search, user
management, preferences, generic source control, compare, file
history, editors, and user interface widgets and controls required to
build development tools.</P>
<P>Orion launched in early 2011 and continue to receive emphasis and
promotion throughout the year. Orion is not targeted at the classic
Eclipse developer, but is instead targeted at Web and RIA developers.
This new development model and target audience will even further
diversify and grow our community in new and exciting directions. 
</P>
<P>Orion is expected to ship its 1.0 release in Q4 2012.</P>

<H3 CLASS="western" STYLE="page-break-after: avoid">Modeling</H3>
<P>The increasing popularity of modeling and model-driven development continues 
to be an important driver for the growth of Eclipse.  The modeling ecosystem 
is active and diverse with commiters from more than 30 different companies.  
New projects are created with regularity and are inherently integrated by 
virtue of their reuse of EMF's core APIs.</P>
<UL>
<LI>In 2012, modeling extends its community by addressing the need of a broad range of domains.</LI>
<LI>DSLs for programming languages using Xtext's extensible expression language are 
exploited by Xcore, a textual syntax for EMF's Ecore and by Xtend, an concise 
JVM-based language.  Both support rich textual editors reminiscent of JDT's Java editor. </LI>
<LI>A DSL for business modeling with GMF 3.0 and EEF 1.1 that supports the creation of custom 
graphical and forms-based editors.</LI>
<LI>Support OMG standards, including Acceleo 3.3 for code generation, OCL 4.0 with more 
efficient API and tooling, and support for the UML 2.4 and BPMN 2 specifications.</LI>
<LI>Massively scalable deployment with CDO for collaborative and distributed repositories 
as well as EGF to manage the assembly of software factories.</LI>
</UL>
<P>With the launch of Juno, EMF will be in heart of Eclipse 4.2 SDK's workbench model.  
This is a great opportunity for end users to discover the various interesting modeling innovations.</P>

<H2 CLASS="western">Committer and Project Community</H2>
<img src="../../../images/reports/2012_Active_Committers.png" alt="2012 Active Committers" height="335" width="565" />
<P>The EMO is committed to providing steadily improving services to
the Eclipse Committers and the projects they work on. Here is a
sampling of some infrastructure metrics, plus some improvements we've
put into place over the past year.</P>
<UL>
	<LI>In 2011, the EMO announced that CVS will be deprecated as a
	source code management system at Eclipse, and that git will become
	the new standard SCM for the community. All projects using CVS will
	be required to migrate to git by December 21, 2012.</LI>
	<LI>The Gerrit Code review system was deployed at Eclipse.org for
	use by Eclipse projects. By the end of March 2012, 14 Eclipse
	projects were making use of Gerrit.</LI>
	<LI>Overall service availability for 2011 was 99.96%. Three
	hardware failures in May caused unexpected downtime.</LI>
	<LI>We've entered 2012 with storage, database, and network
	hardware that is mostly two years old or newer, a significant
	improvement as much of our server infrastructure was quite old going
	into 2011. For example, a pair of new NFS file servers have been
	deployed. New servers provide additional disk space and ensure
	adequate performance to allow for future growth.</LI>
	<LI>The EMO rolled an open source PBX called Asterisk to provide
	a community-wide conference call facility. This facility provides
	phone numbers that can be accessed using a regular or mobile phones
	in Canada, the US, the UK, France, and Germany. Additionally, those
	with voice over IP (VoIP) capability can participate in conference
	calls using VoIP protocols. It is expected this facility will
	provide the same or better quality conference calls as our previous
	facility at significantly lower cost. 
	</LI>
	<LI>We simplified Eclipse.org authentication thanks to the
	consolidation of our Committer accounts and Bugzilla accounts and
	the introduction of LDAP</LI>
	<LI>We upgraded to Bugzilla to 4.0</LI>
	<LI>We improved server throughput to Europe, improving response
	times and download times for the Eclipse community in Europe.</LI>
	<H3 CLASS="western" STYLE="page-break-after: avoid">Project
			Management Infrastructure</H3>
	<P>In addition to the above, in 2011 the Eclipse Foundation began a
	new effort to replace the existing project management infrastructure
	&ndash; which includes the Developer Portal &ndash; with a new
	unified infrastructure with the intent of making project management
	activities more consistent and generally easier for all involved.
	Themes of this effort include:</P>
	<LI><B>Improved consistency:</B> <SPAN STYLE="font-weight: normal">We
	implemented configuration</SPAN>/data-driven project web presence,
	and direct linkage among releases, reviews, and plans. Information &ndash;
	including basic project metadata, project plans, and release review
	information &ndash; is captured and retained in a consistent (and
	easily leveraged) data-based format (rather than in multiple
	documents in arbitrary formats).</LI>
	<LI><B>All-in-one-place: </B>Committers are able to edit
	information in place on the project information pages.
	Text/information in one place with links in another is eliminated
	wherever possible. Comments and discussion related to reviews,
	elections, etc. are connected directly to the item being discussed.</LI>
	<LI><B>Get started faster: </B>By default, projects are provided
	with a data-driven website that includes consistent links to project
	releases, reviews, downloads, etc. Projects can opt to override the
	default and provide their own customized web presence.Setting up a
	project presence is a matter of configuration, not PHP programming
	against proprietary APIs.</LI>
</UL>
		
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

