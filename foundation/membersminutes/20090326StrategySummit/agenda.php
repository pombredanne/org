<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "Open Source Executive Strategy Summit";
$pageKeywords	= "strategy, open source, eclipse";
$pageAuthor		= "Ian Skerrett";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">
</head>

<br>
<h1>Open Source Executive Strategy Summit</h1>

<strong>Thursday, March 26, 2009 - 9:30am-5:00pm<br>
Great America Rooms<br>
Santa Clara Convention Center, Santa Clara, CA<br>
(co-located with EclipseCon 2009)</strong>
<br><br>


<P>The Eclipse Foundation is organizing an invitation-only one day
Open Source Executive Strategy Summit for  executives who
are responsible for their organizations open
source strategy and participation.&nbsp;&nbsp; The purpose of event is to answer two questions: 
1) 'What Open Source Strategies Are Working Today?' and 2) 'What Will Work in the Future?.  
The Summit will feature industry speakers, case studies and group discussions that analyze the
different aspects of an open source strategy, including product
strategy, licensing, development models and community building.&nbsp;
&nbsp;Participants will have the opportunity to learn the success factor and challenges 
of existing open source strategies.</P>

<P>The Summit agenda includes presentations and 
discussions.&nbsp; Featured speakers include:</P>
<OL>
	<LI><P><B>Open Source Is Not A Business Model</B> &ndash; Matt
	Aslett, Analyst, &nbsp;451 Group 
	</P>
	<P>Abstract: Matt Aslett writes extensively on open source topics for
		the 451 Group.&nbsp; He recently published a research paper, &lsquo;Open
		Source Is Not a Business Model&rsquo;, that attempts to answer the
		question &ldquo;How do vendors generate revenue from open source
		software?&rdquo;.&nbsp; The research is based on analysis of 114 open
		source companies and presents a framework for developing open source
		strategies.&nbsp; In this presentation Matt will present the strategy framework and
discuss how today companies are making money with open source.
	</P></li>
		<LI><P><B>Optimizing Your Open Source Licensing Decisions</B> &ndash;
	Lawrence Rosen, Rosenlaw & Einschlag Technology Law Offices</P>
	<P>Abstract: Lawrence Rosen is an expert on open source licensing and an active participant in 
	open source and open standards communities. He provides legal advice to small and large companies 
	on the legal and intellectual property considerations of an open source strategy. In this presentation, 
	Larry discusses open source licensing, issues related to contributing to open source projects and other 
	IP issues that organizations need to consider when participating in open source communities.</P></LI>


		<LI><P><B>Case Study: Actuate&rsquo;s Open Source Product Strategy</B>
	&ndash; Paul Clenahan, Actuate VP of Product Management 
	</P>


<P>Abstract:&nbsp; Actuate was an early member of the Eclipse
Foundation and the major contributor to the Eclipse Business
Intelligence and Reporting Tools (BIRT) project.&nbsp;&nbsp; In the
last couple of years, Actuate&rsquo;s open source revenue has double
every year.&nbsp; Actuate is quickly implementing an open source
product strategy that is growing their addressable market and bottom
line revenue.&nbsp; 

</P>

<P>In this presentation, Paul Clenahan, VP of Product Management,
will discuss how Actuate has incorporated BIRT into their overall
corporate product strategy.&nbsp; This session explores different
possible approaches to open source within a product strategy, the
approach Actuate has taken, and looks at the challenges you need to
consider in your strategy to ensure it is successful.</P>	</LI>


	<LI><P><B>Case Study: The transition of the RAP development team to Open Source </B> 
	&ndash; Jochen Krause, Innoopract 	</P>
	
<P>Abstract: Innoopract has been an active participant and supporter of the Eclipse community 
since its inception. The launch of the Eclipse Rich Ajax Platform (RAP) project marked a tipping 
point for Innoopract. It was Innoopract's first participation in an open source project in a 
leadership role, providing a significant code contributions and most of the committers.

</P>

<P>In this presentation, Jochen Krause discusses the necessary evolution of the project team as 
they changed their development approach to match an open development model. He will discuss the 
pros and cons of working in an open and transparent manner and how it impact Innoopract's development 
culture.</P></LI>

<LI><P><B>Panel Discussion: The Future of Open Source and Business</B></P>

<P>  What is the future of open source in the software business?  The panelist will 
highlight some of the trends, opportunities and challenges they see for 
organizations adopting an open source strategy.<br><br>

Panelist: 
<ul>
<li>Moderator: Michael Cote, Redmonk
<li>Steve Harris, Senior Vice President, Application Server Development, Oracle
<li>Michael Enescu, CTO of Open Source Initiatives, Cisco
<li>Timothy M. Golden, Senior Vice President, UNIX Engineering, Security, and Provisioning, Bank of America
<li>Mik Kersten, CEO of Tasktop
</ul>
 

</P>



</OL>



<P><Strong>Registration Information</strong></p>

<p>Attendees must be executives of their organization.&nbsp; To request an invitation, please
send an e-mail to <a href="mailto:strategysummit@eclipse.org">strategysummit@eclipse.org</a>.
&nbsp; </p>

<p>There is no cost to attend the Summit for Eclipse Foundation member companies but you must pre-register.  A $500 registration fee will be assessed to 
individuals not associated with an Eclipse Foundation member.  </p>

<p>Registration to the Summit does not include access
to EclipseCon. Individuals that want to participate in <a href="http://www.eclipsecon.org/2009/registration">EclipseCon must register</a> for the conference. </p>

<p>Space is limited for the Summit. Each organization is asked to register only two individuals.  Registration will be accepted on a first-come, first-serverd basis.</p>

</P>

<br>
<br>




      </div>
  </div>
<?php
	# Paste your HTML content between the EOHTML markers!	
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

