<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "October 28, 2008 Marketing Symposium";
$pageKeywords	= "members meeting, foundation, marketing symposium";
$pageAuthor		= "Donald Smith";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">

</head>


<h1>Members Meeting and Marketing Symposium Agenda</h1>

<p>Please RSVP for any of these meetings via email to members.meeting@eclipse.org</p>

<ul>
<li><a href="#nmjs">New Member Jumpstart</a> - Monday, October 27, 2008.  10:00am-noon.</li>
<li><a href="#mm">Members Meeting</a> - Monday, October 27, 2008.  1:00pm-5:30pm.</li>
<li><a href="#ms">Marketing Symposium</a> - Tuesday, October 28, 2008.  8:30am-noon.</li>
</ul>


<h2 id="nmjs">New Member Jumpstart, October 27, 2008</h2>
Reston Virginia, Hyatt Regency Reston<br>
10:00am - 12:00pm
<p> <b>Agenda</b><br>
This meeting is ideally suited for people new to the Eclipse 
Ecosystem either technical or business/marketing.   It will introduce the role of the Eclipse 
Foundation, the governance structure and provide insight into the organization of the different projects.</p>


<h2 id="nmjs">Members Meeting, October 27, 2008</h2>
Reston Virginia, Hyatt Regency Reston<br>
1:00pm - 5:30pm

<p> 
<b>Agenda</b><br>
<ul>
 <li>Executive Director Update, Mike Milinkovich</li>
 <li><a href="http://www.burtongroup.com/Aboutus/Bios/PrintBio.aspx?Id=144">Kirk Knoernschild</a>, Analyst for Burton Group Application Platform Strategies.
 <ul>
 <li>Title: The Enterprise and OSGi</li>
 <li>Abstract: The OSGi Service Platform is a disruptive technology that stands to transform 
 enterprise Java development. But to 
 achieve greater enterprise penetration, tools and product must be built that leverage OSGi. In this brief discussion, I'll 
 talk about the gaps, risks, and rewards of OSGi in the Enterprise.</li>
 </ul></li>
 <li>Membership Updates</li>
 <li>Project Updates</li>
 <li>New Member Introductions</li>
 <li>Networking Reception 6-7pm</li>
 </ul>
</p>



<h2 id="mm">Marketing Symposium, October 28, 2008<br>
Reston Virginia, Hyatt Regency Reston<br>
8:30am - 12:00pm</h2>



<p>
<b>Agenda</b><br>
<b>Getting Developers to Listen</b> - Matthew Schmidt from DZone/JavaLobby <br>
Matthew Schmidt is a developer and CTO of DZone and Javalobby, two successful developer oriented 
 portals. Through his  involvement with these two portals, Matthew has had first hand experience understanding 
 how developers like to learn about new technology. In this presentation, Matthew will talk about his views on 
 the right and wrong ways for getting developers to learn about your product or service.
</p>
 
 
<p>
<b>Actuate Case Study</b> - Rich Guth from Actuate <br> 
Rich Guth is the business executive responsible for Actuate's BIRT Exchange.  In this session Rich will talk about the success and
lessons they have experienced from building a community around BIRT Exchange.
</p>

<p>
<b>How to Get Good Press</b> - Alan Zeichick from SD Times and BZ Media <br> 
Alan Zeichick is the Editor-in-Chief of SD Times.  Alan will talk about the do's and don'ts of pitching stories to
editors and reporters.
</p>

<p>
<b>Social Networking and Developer Relations Programs</b> - Pieter Humphreys from Oracle <br> 
This short talk reviews some ideas and lessons learned in leveraging social networking as an enabler for 
developers to find and communicate with each other.  As software development knowledge worldwide becomes 
increasing de-centralized and distributed, a strategy for knowledge and expert location becomes more and more 
important.


</p>

<p>
<b>Leveraging the eclipse.org Web Site</b> - Donald Smith from the Eclipse Foundation <br> 
Donald Smith is the Director of Ecosystem Development at the Eclipse Foundation.  In this presentation, Donald will describe the 
different ways Eclipse member companies can promote their products and services on the eclipse.org web site.
</p>

<p>
<b>What are Developers Using in Eclipse?</b> - Ian Skerrett from the Eclipse Foundation <br> 
Ian Skerrett is the Director of Marketing at the Eclipse Foundation.  In this presentation, Ian will present some statistics on 
how and what developers are using in Eclipse.  The information presented will be based on the data collected by the Usage Data Collector, 
a new peice of technology that was added to Eclipse to gather usage information.
</p>
<br> <br>





      </div>
  </div>
<?php
	# Paste your HTML content between the EOHTML markers!	
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
