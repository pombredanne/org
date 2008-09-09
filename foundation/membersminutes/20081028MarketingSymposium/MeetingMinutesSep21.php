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
<b>Getting Developers to Listen</b> - Matthew Schmidt from DZone/JavaLobby <br>
Matthew Schmidt is a developer and CTO of DZone and Javalobby, two successful developer oriented 
 portals. Through his  involvement with these two portals, Matthew has had first hand experience understanding 
 how developers like to learn about new technology. In this presentation, Matthew will talk about his views on 
 the right and wrong ways for getting developers to learn about your product or service.
</p>
 
 
<p>
<b>Actuate Case Study</b> - Rich Guth from Actuate <br> 
Rich Guth is the business executive responsible for Actuate's BIRT Exchange.  In this session Rich will talk about the success and
lessons they have learnt from building a community around BIRT Exchange.
</p>

<p>
<b>How to Get Good Press</b> - Alan Zeichick from SD Times and BZ Media <br> 
Alan Zeichick is the Editor-in-Chief of SD Times.  Alan will talk about the do's and don'ts of pitching stories to
editors and reporters.
</p>

<p>
<b>Leveraging the eclipse.org web site</b> - Donald Smith from the Eclipse Foundation <br> 
Donald Smith is the Director of Ecosystem Development at the Eclipse Foundation.  In this presentation, Donald will describe the 
different ways Eclipse member companies can promote their products and services on the eclipse.org web site.
</p>

<p>
<b>What are developers using in Eclipse?</b> - Ian Skerrett from the Eclipse Foundation <br> 
Ian Skerrett is the Director of Marketing at the Eclipse Foundation.  In this presentation, Ian will present some statistics on 
how and what developers are using in Eclipse.  The information preesnted will be based on the data collected byt the Usage Data Collector, 
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
