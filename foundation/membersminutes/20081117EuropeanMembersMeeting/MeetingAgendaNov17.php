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

<p>Please RSVP for any of these meetings via email to <a href="mailto:members.meeting@eclipse.org?subject=RSVP to European Member Meeting">members.meeting@eclipse.org</p>

<ul>
<li><a href="#mm">Members Meeting</a> - Monday, November 17, 2008.  2:00pm-6:00pm.</li>
<li><a href="#ms">Marketing Symposium</a> - Tuesday, 18, 2008.  8:30am-noon.</li>
</ul>




<h2 id="mm">Members Meeting, November 17, 2008<br>
Ludwigsburg, Germany
<br>
2:00pm - 6:00pm</h2>

<p> 
<b>Agenda</b><br>
<ul>
 <li><p>Executive Director Update, Mike Milinkovich</p></li>
 <li><p>Guest Speaker</p></li>
 <li><p>Membership Updates</p></li>
  <li><p>New Member Introductions</p></li>
 <li><p>Project Updates
 	<ul>
 		<li>Eclipse RT and Equinox - Jeff McAffer</li>
 		<li>Eclipse 4.0 (e4) - Jochen Krause</li>
 	</ul>
 	</p></li>
 	<li><p>Architecture Council Update - Martin Oberhuber</p></li>
   <li><p>Marketing Update</p></li>
 	
 
  </ul>
 
</p>

<br><br><br>

<h2 id="ms">Marketing Symposium, November 18, 2008<br>
Ludwigsburg, Germany<br>
8:30am - 12:00pm</h2>



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
<ul>
<li>How to Get Good Press - Manuela Duft - compeople </li>
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