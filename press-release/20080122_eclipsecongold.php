<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon 2008 Attracts Eleven Industry-Leading Companies as Gold Sponsors";
	$pageKeywords	= "Eclipsecon, 2008, gold, sponsor";
	$pageAuthor		= "Ian Skerrett";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		<center>
		<h2>Press Release</h2>
		<h1>$pageTitle</h1>
		<p><i>AMD Announced as Hardware sponsor; BlackBerry Developer Day and Jazz Developer Day added to conference program</i></p></center>
		<p><strong>OTTAWA - January 22, 2008 - </strong>The Eclipse Foundation today announced the support of eleven industry-leading companies as Gold Sponsors for EclipseCon 2008, the annual conference of the Eclipse community.
		</p>
		<p>The Gold Sponsors -- Actuate, AMD, BEA, Cloudsmith, IBM, Oracle, Replay Solutions, Research In Motion (RIM), Skyway Software, SOPERA and Wind River -- will join an impressive list of keynote speakers and presenters for the fifth annual conference to be held March 17-20, 2008, in Santa Clara, CA.</p>
		
		<p>"We are delighted to have these eleven companies express their support of EclipseCon, an event that's essential to the Eclipse community's collaborative environment,” said Mike Milinkovich, executive director of the Eclipse Foundation. “The support of these premier sponsors helps make EclipseCon an extraordinary event year after year". </p>

		<p>In addition to the Gold sponsors, three other premier sponsors have been announced:</br>
			<ul>
				<li>AMD has agreed to be the hardware sponsor of the conference.   AMD will contribute several Quad-Core AMD Opteron™ processors to power the Eclipse Foundation web infrastructure, including the EclipseCon download server.  </li>
				<li>Research In Motion has agreed to sponsor a BlackBerry® Developer Day during the conference.   Conference attendees will be able to attend in-depth technical session about the BlackBerry development platform.</li>
				<li>IBM is sponsoring a Developer Day during EclipseCon. Attendees will be able to attend technical sessions about IBM's Eclipse-based Jazz team platform and products such as Rational Team Concert Express.</li>
			</ul>
		</p>
		<p>
		EclipseCon 2008 will feature over 350 tutorials and presentations covering all aspects of Eclipse technology. For additional information about the program, please visit <a href="http://www.eclipsecon.org">www.eclipsecon.org.</a></p>
		<p><b>Registration Information</b>
		<br/><br/>Registration for EclipseCon 2008 is now open. More information about the conference, including registration, travel and hotel details, can be found at <a href="http://www.eclipsecon.org">www.eclipsecon.org.</a>
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		
		<p><center><i>All company/product names and service marks may be trademarks or registered trademarks of their respective companies.</i></center></p>
		
		<br /><br /><strong>Press Contact</strong><br>	
		Steve Eisenstadt<br/>
		Page One Public Relations<br/>
		919-781-8096<br/>
		steve@pageonepr.com<br/>
		<br />
		
		<center># # #</center> 
		<br />
		<br>
			<br>
	</div>

</div>


		

EOHTML;


	$html = mb_convert_encoding($html, "HTML-ENTITIES", "auto");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

