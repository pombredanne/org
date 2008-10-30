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
<li><a href="#mm">Members Meeting</a> - TELECONFERENCE, Monday, October 27, 2008.  11:30am-1:00pm (Eastern).</li>
<li><a href="#nmjs">New Member Jumpstart</a> - Monday, October 27, 2008.  2:00pm-4:00pm. "Lake Audubon" room.</li>
<li><a href="#rec">Members Reception</a> - Monday, October 27, 2008.  5:00pm-7:00pm.  "Lake Thoreau" room.</li>
<li><a href="#ms">Marketing Symposium</a> - Tuesday, October 28, 2008.  8:30am-noon.  "Lake Anne A" room.</li>
</ul>


<h2 id="mm">Members Meeting, October 27, 2008</h2>
		8:30am PT, 11:30am ET, 16:30 CET.
		<br>Dial-in information:  <b>Participant Code: 187860</b>
		<br>International: +1 613 287 8000  
		<br>US&Canada Toll Free: 866 362 7064
		<br>Finland:  990 800 2288 3502
      	<br>France (excl. Monaco):  00 800 2288 3502
      	<br>Germany:  00 800 2288 3502
      	<br>Sweden:  00 800 2288 3502
      	<br>United Kingdom:  00 800 2288 3502
<br>
<p> 
<b>Agenda</b><br>
<ul>
 <li>Executive Director Update, Mike Milinkovich</li>
 <li><b>The Enterprise and OSGi</b>.  <a href="http://www.burtongroup.com/Aboutus/Bios/PrintBio.aspx?Id=144">Kirk Knoernschild</a> - Analyst for Burton Group Application Platform Strategies.
<br>The OSGi Service Platform is a disruptive technology that stands to transform 
 enterprise Java development. But to 
 achieve greater enterprise penetration, tools and product must be built that leverage OSGi. In this brief discussion, I'll 
 talk about the gaps, risks, and rewards of OSGi in the Enterprise.</li>
</li>
 <li>Membership Updates</li>
 <li>Project Updates</li>
 <li>New Member Introductions</li>
 </ul>
</p>




<h2 id="nmjs">New Member Jumpstart, October 27, 2008</h2>
Reston Virginia, Hyatt Regency Reston, �Lake Audubon� room.<br>
2:00pm - 4:00pm
<p> <b>Agenda</b><br>
This meeting is ideally suited for people new to the Eclipse 
Ecosystem either technical or business/marketing.   It will introduce the role of the Eclipse 
Foundation, the governance structure and provide insight into the organization of the different projects.</p>


<h2 id="nmjs">Members Reception, October 27, 2008</h2>
Reston Virginia, Hyatt Regency Reston, "Lake Thoreau� room.<br>
5:00pm - 7:00pm
<p>All members of the Eclipse Foundation are welcome to attend this reception on Monday evening in Lake Thoreau.  This
is a great opportunity to mingle with Eclipse Foundation staff and your peers in the Eclipse Ecosystem.</p>


<h2 id="ms">Marketing Symposium, October 28, 2008</h2>
Reston Virginia, Hyatt Regency Reston, �Lake Anne A� room.<br>
8:30am - 12:00pm

<p>
<b>Agenda</b><br>
<b>Getting Developers to Listen</b> - Matthew Schmidt from DZone/JavaLobby <br>
Matthew Schmidt is a developer and CTO of DZone and Javalobby, two successful developer oriented 
 portals. Through his  involvement with these two portals, Matthew has had first hand experience understanding 
 how developers like to learn about new technology. In this presentation, Matthew will talk about his views on 
 the right and wrong ways for getting developers to learn about your product or service.<br><br>

<a href="./improve developer marketing.pdf">Presentation Slides</a>
</p>
 
 
<p>
<b>Actuate Case Study</b> - Rich Guth from Actuate <br> 
Rich Guth is the business executive responsible for Actuate's BIRT Exchange.  In this session Rich will talk about the success and
lessons they have experienced from building a community around BIRT Exchange.<br><br>

<a href="./Actuate Eclipse Case 3.pdf">Presentation Slides</a>
</p>

<p>
<b>How to Get Good Press</b> - Alan Zeichick from SD Times and BZ Media <br> 
Alan Zeichick is the Editor-in-Chief of SD Times.  Alan will talk about the do's and don'ts of pitching stories to
editors and reporters.<br><br>

<a href="./it press.pdf">Presentation Slides</a>
</p>

<p>
<b>Social Networking and Developer Relations Programs</b> - Pieter Humphreys from Oracle <br> 
This short talk reviews some ideas and lessons learned in leveraging social networking as an enabler for 
developers to find and communicate with each other.  As software development knowledge worldwide becomes 
increasing de-centralized and distributed, a strategy for knowledge and expert location becomes more and more 
important.<br><br>

<a href="./social network.pdf">Presentation Slides</a>


</p>

<p>
<b>Leveraging the eclipse.org Web Site</b> - Donald Smith from the Eclipse Foundation <br> 
Donald Smith is the Director of Ecosystem Development at the Eclipse Foundation.  In this presentation, Donald will describe the 
different ways Eclipse member companies can promote their products and services on the eclipse.org web site.<br><br>

<a href="./eclipse web site.pdf">Presentation Slides</a>
</p>

<p>
<b>What are Developers Using in Eclipse?</b> - Ian Skerrett from the Eclipse Foundation <br> 
Ian Skerrett is the Director of Marketing at the Eclipse Foundation.  In this presentation, Ian will present some statistics on 
how and what developers are using in Eclipse.  The information presented will be based on the data collected by the Usage Data Collector, 
a new peice of technology that was added to Eclipse to gather usage information.<br><br>

<a href="./udc report.pdf">Presentation Slides</a>
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
