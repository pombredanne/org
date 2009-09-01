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
	<img src="http://www.eclipse.org/membership/scripts/get_image.php?id=857&size=small">	
</p>


<h3>Featured Speakers</h3>
<p>
	The Summit agenda includes presentations and discussions. Featured speakers include:
	<ol>

		<li><b>OSS Maturity Model and Ecosystems</b> &ndash;
		Tony Bailetti, Carleton University
		<br><br>
		Abstract: Coming soon
		</li>

		<li><b>Title coming soon</b> &ndash;
		Richard Seibt
		<br><br>
		Abstract: Coming soon
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
		Markus Loeffler, McKinsey & Company
		<br><br>
		Abstract: Coming soon
		</li>

		<li><b>OSS Legal Issues</b> &ndash;
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

