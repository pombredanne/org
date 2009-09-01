<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "Open Source Executive Strategy Summit";
$pageKeywords	= "strategy, open source, eclipse, summit, europe";
$pageAuthor		= "Lynn Gayowski";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">
</head>

<h1>Open Source Executive Strategy Summit</h1>
<p>
	<strong>Tuesday, October 27, 2009 - 9:00am-5:00pm<br>
	<a href="http://en.nestor-hotels.de/nestor-Hotels/Ludwigsburg" target="blank">Nestor Hotel</a><br>
	Ludwigsburg, Germany<br>
	(co-located with Eclipse Summit Europe 2009)</strong>
</p>

<p>
	The Eclipse Foundation is organizing an invitation-only, one-day Open Source Executive Strategy
	Summit for  executives who are responsible for their organizations' open source strategy and
	participation. The purpose of event is to answer two questions: <br>
	&nbsp; &nbsp; &nbsp; 1. What Open Source Strategies Are Working Today?<br>
	&nbsp; &nbsp; &nbsp; 2. What Will Work in the Future?
</p>
 
<p>
	The Summit will feature industry speakers, case studies and group discussions that analyze the
	different aspects of an open source strategy, including product strategy, licensing,
	development models and community building. Participants will have the opportunity to learn the
	success factors and challenges of existing open source strategies.
</p>

<h3>Sponsors</h3>
<p>
	Thanks to the following companies for sponsoring the Strategy Summit:<br><br>
	<img src="http://www.eclipse.org/artwork/images/eclipse_pos_logo_fc_sm.jpg">	
</p>


<h3>Featured Speakers</h3>
<p>
	The Summit agenda includes presentations and discussions. Featured speakers include:
	<ol>

		<li><b>Lessons Learned by Building Ecosystems Modeled on Eclipse</b> &ndash;
		Tony Bailetti, Carleton University
		<br><br>
		<b>Abstract:</b> The talk describes the key lessons learned from (i) designing the Coral CEA and Lead to
		Win ecosystems and (ii) using the maturity model for company engagement with ecosystems anchored
		around open source projects.  The objective of the Coral CEA ecosystem is to enable programmers to
		easily embed communications-related web services into IT applications and commercialize innovative
		applications globally.
		<br><br>
		The worldwide market for communications enabled applications in 2010 is
		expected to be in the $1.6-$3.3 billion range. It has high potential for sustainable growth over
		the long term. The Lead to Win ecosystem is designed to create jobs and retain talent in a
		geographical region. The maturity model identifies the different ways a company can interact with
		an ecosystem. The talk is most relevant to senior managers interested in benefitting from their
		companies' interactions with open source projects.
		<br><br>
		<b>About Tony:</b> Dr. Tony Bailetti is the Director of Ontario's Talent First Network and the
		Executive Director of Coral CEA. He founded Lead to Win in 2002 and was part of the faculty that
		delivered the original program. Professor Bailetti holds a tenured faculty appointment in both the
		Eric Sprott School of Business and the Department of Systems and Computer Engineering at Carleton
		University. His teaching and research interests are in commercialization of new technology. He was
		the Director of Carleton University's School of Business from 1981 to 1988 and worked at
		Bell-Northern Research (today a part of Nortel) from 1988 to 1992. Professor Bailetti has
		published in engineering management journals such as IEEE Transactions on Engineering Management,
		Journal of Product Innovation Management, Research Policy, and R&D Management. He won a Fulbright
		scholarship to study in the United States. In 1996 he won a Carleton University Teaching Award and
		in 2007 a Carleton University Leadership Breakthrough Award. 
		</li>
		
		<li><b>Title coming soon</b> &ndash;
		Dr. Stephan Ferber, Robert Bosch GmbH
		<br><br>
		Abstract: Coming soon
		</li>

		<li><b>Title coming soon</b> &ndash;
		SAP
		<br><br>
		Abstract: Coming soon
		</li>

		<li><b>OSS Legal Issues</b> &ndash;
		Martin Braun, WilmerHale
		<br><br>
		Abstract: Coming soon
		</li>

		<li><b>OSS Strategies</b> &ndash;
		Markus Loeffler, McKinsey & Company
		<br><br>
		Abstract: Coming soon
		</li>

	</ol>
</p>

<h3>Registration Information</h3>

<p>
	Attendees must be executives of their organization. To request an invitation, please
	send an e-mail to <a href="mailto:strategysummit@eclipse.org">strategysummit@eclipse.org</a>.
</p>

<p>
	There is no cost to attend the Strategy Summit for Eclipse Foundation member companies, but you must
	pre-register.  A $500 registration fee will be assessed to individuals not associated with an
	Eclipse Foundation member.
</p>

<p>
	Registration to the Stragy Summit does not include access to Eclipse Summit Europe. Individuals that
	want to participate in <a href="http://www.eclipsecon.org/summiteurope2009/registration/" target="blank">
	Eclipse	Summit Europe</a> as well, must register separately for the conference.
</p>

<p>
	Space is limited for the Summit. Each organization is asked to register only two individuals.
	 Registration will be accepted on a first-come, first-serverd basis.
</p>

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

