<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "October 28, 2008 Marketing Symposium";
$pageKeywords	= "members meeting, foundation, marketing symposium";
$pageAuthor		= "Donald Smith";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">

</head>



<h1>Marketing Symposium, October 28, 2008</h1>
<h2>Reston Virginia, Hyatt Regency Reston</h2>
<h2>8:30am - 12:00pm</h2>

<h3>Agenda</h3>

<p>
<b>Getting Develoeprs to Listen</b> - Matthew Schmidt from DZone/JavaLobby <br> <br>
 Abstract: Matthew Schmidt is a developer and CTO of DZone and Javalobby, two successful developer oriented 
 portals. Through his  involvement with these two portals, Matthew has had first hand experience understanding 
 how developers like to learn about new technology. In this presentation, Matthew will talk about his views on 
 the right and wrong ways for getting developers to learn about your product or service.
</p>
 
 
<p>
<b>Converting Web Traffic to Paying Customers</b> - Roy Russo from LoopFuse <br> <br>
Roy Russo is the CEO of Loopfuse, a company that specializes in helping companies understand who is visiting 
their web site.  Roy was one of the original people involved with JBoss and has extensive experience working 
with customer like Hyperic, SpringSource and Zimbra.  In this session, Roy will talk about the different 
techniques companies can use to qualify and nurture traffic to a corporate web site and in the end convert them 
to a paying customer.
</p>

<p>
<b>Actuate Case Study</b> - Rich Guth from Actuate <br> </br>
Rich Guth is the business executive responsible for Actuate's BIRT Exchange.  In this session Rich will talk about the success and
lessons they have learnt from building a community around BIRT Exchange.
</p>

<p>
<b>How to Get Good Press</b> - Alan Zeichick from SD Times and BZ Media <br> </br>
Alan Zeichick is the Editor-in-Chief of SD Times.  Alan will talk about the do's and don'ts of pitching stories to
editors and reporters.
</p>





      </div>
  </div>
<?php
	# Paste your HTML content between the EOHTML markers!	
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
