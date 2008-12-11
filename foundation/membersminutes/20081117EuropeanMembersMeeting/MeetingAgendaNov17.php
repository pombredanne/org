<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "European Members' Meeting and Marketing Symposium";
$pageKeywords	= "members meeting, foundation, marketing symposium";
$pageAuthor		= "Ian Skerrett";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">
</head>

<h1>Members Meeting and Marketing Symposium Agenda</h1>


<ul>
<li><a href="#mm">Members Meeting</a> - Monday, November 17, 2008.  2:00pm-6:00pm.</li>
<li><a href="#ms">Marketing Symposium</a> - Tuesday, 18, 2008.  8:30am-noon.</li>
</ul>

<h2 id="mm">Members Meeting, November 17, 2008<br>
Schubartsaal Room, Forum am Schlosspark<br>
Ludwigsburg, Germany
<br>
2:00pm - 6:00pm</h2>

<p> 
<b>Agenda</b><br>
<ul>
 <li><p><b>Executive Director Update </b>-  Mike Milinkovich<br/>
 <a href="./v5 Nov-08 ESE executive director report.pdf">Presentation</a></p></li>
 <li><p><b>The SAP Eclipse Story </b>-  Karsten Schmidt, SAP<br>
 <a href="./The SAP Eclipse Story.pdf">Presentation</a></p></li>
 
 Abstract:Eclipse as the basis of SAP NetWeaver Developer Studio is a central building block of SAP NetWeaver 
Composition Environment. With the recent decision to base SAP's next generation Java server on OSGi and Equinox, 
Eclipse technology will also reach into the server runtime. Karsten Schmidt, Development Project Director at SAP 
NetWeaver Java Tools Infrastructure, will give an overview of the history and challenges of SAP's Eclipse 
involvement, describe the current status, and provide an outlook for the future.
</p></li>
 <li><p><b>Project Updates</b>
 	<ul>
 		<li>Eclipse RT and Equinox - Jeff McAffer</li>
 		<li>Eclipse 4.0 (e4) - Jochen Krause</li>
 		<li>SMILA - Hans-Christian Brockmann      <a href="./Eclipse Summit  Europe SMILA Project Update.pdf">Presentation</a></p></li>
 		</li>
 	</ul>
 	</p></li>
<li><p><b>Introduction to Mobile Industry Working Group</b><br>
Abstract: A new industry working group for the mobile industry is being proposed for Eclipse.  This presentation will 
explain the purpose and vision of the Mobile Industry Working Group. </p></li>
 	<li><p><b>Architecture Council Update</b> - Martin Oberhuber<br>
 	 <a href="./EAC_Update.pdf">Presentation</a></p></li>
 	</p></li>
 	<li><p><b>Planning Council Update: Galileo Release</b> - Bjorn Freeman-Benson<br>
 	Abstract: The next major release train is Galileo, scheduled for June 2009.  This presentation will update the membership
on the activities for this release.</p></li>
 
  <li><p><b>New Member Introductions</b>
  <ul><li>Innovations  - Stefanie Peitzker</li>
  </ul>
   </p></li>
  
  
  <li><p><b>European Update</b> - Ralph Mueller</p></li>
    <li><p><b>Marketing Update</b> - Ian Skerrett</p></li>
   <li><p><b>Reception</b></p>
   </ul>
 
</p>

<br><br>

<h2 id="ms">Marketing Symposium<br>
November 18, 2008, 8:30am - 12:00pm<br>
Film- und Medienzentrum<br>
Ludwigsburg GmbH <br>
K&ouml;nigsallee 43 <br>
71638 Ludwigsburg <br>
</h2>



<p>
<b>Agenda</b><br>
</p>

<p>
<b>Business opportunities found in the active participation with open source organizations
</b> <br>Sylvain Wallez, Co-founder Anyware Technologies and past Vice President of Apache Software Foundation<br><br>

Abstract:
The rise of open source has heavily changed the sofware industry, as lots of high quality software is now available for free, and this has 
challenged the traditional business of many software publishing companies. But new opportunities have also emerged, and active participation with 
open source organizations can be a key asset in a company in many areas: technical, business and marketing. The talk will introduce the various 
members of an open source project's ecosystem, and how each of them can benefit in having an active role in the community.

</p>
 
 
<p>
<b>Short Talks and Case Studies from the Community</b><br>
Members of the Eclipse marketing community will give short presentations that reflect their experiences of marketing
in the Eclipse community.<br>

 		<li>SMILA - Hans-Christian Brockmann      <a href="./Eclipse Summit  Europe SMILA Project Update.pdf">Presentation</a></p></li>


<ul>
<li>How to Get Good Press - Manuela Duft - compeople     <a href="../20081118EuropeanMarketingSymposium/Successful-Webinars.pdf">Presentation</a></li>
<li>Tips for doing successful webinars - Stefanie Peitzker, Innovations</li>
<li>Organizing an Eclipse events in France - Jocya Leroy, Anyware Technologies</li> 
<li>Experiences from the first Eclipse Banking Day - Joern Weigle, Weigle Wilczek</li>
</ul>
</p>

<p>
<b>Leveraging the eclipse.org Web Site</b> - Ian Skerrett, Eclipse Foundation <br> 
In this presentation, Ian will describe the 
different ways Eclipse member companies can promote their products and services on the eclipse.org web site.
</p>

<p>
<b>Roundtable Discussion: Selling Eclipse to Senior Executives</b><br>
Eclipse is well known and understood in the developer and engineering community.  However, senior executives at large
corporations are typically less informed of the benefits Eclipse to their organizations.  In this session, we will
have a round table discussion to brainstorm different benefits, messages and tactics that can be used to sell Eclipse
and Eclipse-based products to senior executives.
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
