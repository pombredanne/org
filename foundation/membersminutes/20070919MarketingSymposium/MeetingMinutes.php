<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "March 20, 2006 Marketing Symposium";
$pageKeywords	= "members meeting, foundation, marketing symposium";
$pageAuthor		= "Donald Smith";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">

</head>



<h1>Marketing Symposium, September 19, 2007</h1>
<h2>Minutes, Chicago, Illinois</h2>



<h3>Speakers</h3>

<p>
Jeffrey Hammond from Forrester Research, "IDE Survey"  <br>
Presentation available to attendess only.</p>

<p>Michael Cote, Redmonk, <a href="developer-marketing-dos-and-donts2059.pdf">"Developer Marketing: Do's and Dont's"</a>

</p>

<p>
Panel Discussion: "Vendor Briefings: How to brief press and analyst".  Panelist: Alan Zeichick, SD Times; 
Peter Varhol, Redmond Media; Michael Cote, Redmonk
</p>


<p>
Panel Discussion: "Maximise Google".  Panelist: Robert Horne, Business Objects; Chris McGarry, Codegear; 
Donald Smith, Eclipse Foundation
</p>

<p>
Motoki MORI, NEC, <a href="Eclipse_Japan_20070919.pdf">"Eclipse in Japan"</a>
</p>

<p>
Donald Smith, Eclipse Foundation, <a href="eclipse-web-properties.pdf">"Leveraging the Eclipse Web Properties"</a>
</p>

<p>
Ian Skerrett, Eclipse Foundation, <a href="europa-launch.pdf">"Review of the Eclipse Europa Marketing Launch"</a>
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
