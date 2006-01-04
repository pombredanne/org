<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse In Motion Seminar Series";
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
<h2 ALIGN="CENTER"><strong>Eclipse Foundation Kicks Off Seminar Series:  
“Eclipse In Motion”</strong></h2>

<ul>
<li>Educational Seminars Offer Executives and IT Professionals Best Practices for Using Eclipse in the Enterprise
</ul>

<p><strong>OTTAWA, January 4, 2006 </strong>— The Eclipse Foundation today introduced “Eclipse in Motion,” a 
four-city seminar series focused on using Eclipse in the enterprise. Designed to offer CIOs, IT managers and 
developers a practical introduction to Eclipse, the seminar will offer best practices for adopting Eclipse as a 
strategic integration platform, insights into open source licensing and in-depth case studies of how Eclipse and 
related technologies are successfully being used in enterprises today.</p>

<p>The one-day seminar is comprised of two tracks: a morning session for executives and an afternoon session for 
developers. The morning session will feature presentations by Carl Zetie, vice president, application development 
and infrastructure, Forrester Research; Cliff Schmidt, vice president of Legal Affairs, Apache Foundation; and 
executives from sponsoring Eclipse member companies Exadel, IBM, Serena and Sybase. </p>

<p>In the afternoon, Eclipse developers will be invited to participate in a code clinic where Eclipse technical 
experts will be on hand to help developers building Eclipse plug-ins or applications built on the Eclipse Rich 
Client Platform (RCP).  </p>

<p>“By helping developers and IT professionals to gain practical, hands-on knowledge of Eclipse, we continue to 
build on the increasing awareness and momentum surrounding Eclipse,” said Mike Milinkovich, executive director of 
the Eclipse Foundation. “These seminars highlight the benefits of the Eclipse model and will aide decision makers 
in planning their continued implementation and growth of Eclipse at all levels of the enterprise.”</p>

<p>The “Eclipse in Motion” seminar series, sponsored by Eclipse member companies and BZ Media, will take place in 
the following locations:

<ul>
<li>February 7, 2006	San Diego, Calif., (Manchester Grand Hyatt) 
<li>February 9, 2006	Dallas, Tex., (Adam’s Mark Hotel) 
<li>February 28, 2006	Raleigh, N.C. (Hilton Durham)
<li>March 2, 2006		Atlanta, Ga., (Hyatt Regency)
</ul> </p>
	
<p>Seminar registration is required and space is limited. For registration information, visit 
<a href="http://www.regonline.com/CalendarNET/EventCalendar.aspx?CustomerId=240004&EventId=86349&view=Location">Seminar Registration</a></p>


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
			<li><a href="http://www.regonline.com/CalendarNET/EventCalendar.aspx?CustomerId=240004&EventId=86349&view=Location">Seminar Registration</a></li>
		</ul>	
	</div>
	
		
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
