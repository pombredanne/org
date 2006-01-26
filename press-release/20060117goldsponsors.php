<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon Gold Sponsors";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Type your name here";
	
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
		<h1>$pageTitle</h1>
		<h2>Press Release</h2>
<h2 ALIGN="CENTER"><strong>Gold Sponsors Announced for EclipseCon 2006 </strong></h2>

<ul>
<li>Accelerated Technology, Actuate, BEA Systems, Business Objects, Compuware, HP, IBM, Serena and Sybase to
Provide Highest Level Support to Eclipse Community Event </li>
</ul>

<p><strong>OTTAWA, January 17, 2006 </strong> —The Eclipse Foundation today announced that Accelerated Technology, Actuate, BEA Systems, Business Objects, 
Compuware, HP, IBM, Serena and Sybase have signed on as Gold Sponsors for EclipseCon 2006, the annual conference 
that brings together the Eclipse community. Gold Sponsorship is the highest level of sponsorship for the conference.
 The third annual EclipseCon will be held at the Santa Clara Convention Center, Santa Clara, Calif., March 20-23, 
 2006.</p>

<p>“In 2005, the Eclipse community enjoyed tremendous growth and we will continue this momentum into 2006 with our 
third annual EclipseCon,” explained Mike Milinkovich, executive director, Eclipse Foundation. “The Gold Sponsors 
are technology leaders in a number of different markets and reflective of the diverse nature of the Eclipse 
community.  Their participation and sponsorship in EclipseCon is important to the overall success of the 
conference.”</p>

<p>
The EclipseCon technical program will appeal to beginners through advanced users, developers of Eclipse-based 
applications, enterprise architects and other technology decision makers. The program consists of more than 30 
tutorials and three days of sessions. Please visit <a href="http://www.eclipsecon.org">www.eclipsecon.org</a> for 
additional information about the program. </p>

<p><strong>Registration Information</strong><br>
Registration for EclipseCon 2006 is now open. Members of the press and analyst community are encouraged to attend 
EclipseCon 2006. More information about the conference, including registration, travel and hotel details, can be 
found at <a href="http://www.eclipsecon.org">www.eclipsecon.org.</a></p>

<p><strong>About the Eclipse Foundation</strong><br>
Eclipse is an open source community whose projects are focused on providing an extensible development platform and 
application frameworks for building software. Eclipse provides extensible tools and frameworks that span the 
software development lifecycle, including support for modeling, language development environments for Java, C/C++ 
and others, testing and performance, business intelligence, rich client applications and embedded development. A 
large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions 
and individuals extend, complement and support the Eclipse Platform.</p>

<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full 
details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org.</a></p>
<br>

<strong>Press Contact</strong><br>	
Chantal Yang/Laura Ackerman<br>
Schwartz Communications<br>
781-684-0770<br>
eclipse@schwartz-pr.com <br>
<br>
</div>

	
	
</div>





		
<div id="rightcolumn">
	<div class="sideitem">
		<h6>Related Links</h6>
		<ul>
			<li><a href="http://www.eclipsecon.org">EclipseCon</a></li>
		</ul>	
	</div>
	
		
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
