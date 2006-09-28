<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "March 20, 2006 Marketing Symposium";
$pageKeywords	= "members meeting, foundation, marketing symposium";
$pageAuthor		= "Donald Smith";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">

</head>



<h1>Marketing Symposium, September 20, 2006</h1>
<h2>Minutes, Dallas Texas, Omni Mandalay</h2>

<h3>Attendees</h3>
<p>There were approximately forty five individuals present.</p>

<h3>Speakers</h3>

<p>
Michale Goulde from Forrester Research, "Perspectives on Open Source Evolution and Adoption"
Presentation available upon request.</p>

<p>Maher Masri, Genuitec, "Eclipse Market Research and Demographics".
Maher's presentation can be
<a href="MyEclipse Demographics.pdf">found here</a>.
</p>

<p>
Panel Discussion: "Competing with Open Source Solutions".  Panelist: Robert Day, Lynxworks; Sean Johnson, Business Objects;
Maher Massri, Genuitec.  Minutes of the panel discussion can be <a href="panel 1 minutes.pdf">found here</a>.
</p>

<p>
Eric von der Heyden, Innoopract, "Eclipse in Europe".  Eric's presentation can be  <a href="eclipse in Europe.pdf">found here</a></p>

<p>
Alan Zeichick, BZ Media, "How to Get Good Press Coverage".
Details of his presentation can be 
<a href="press eclipse 2006 shorter.pdf">found here</a>.</p>

<p>
Peter Ryce, Adobe, "Best Practices for Developer Webinars". </p>

<p>
Panel Discussion: "Viral Marketing and Evangelist".  Panelist: Jonathan Baker, Sybase; Kevin Parker, Serena Software;
Jason Weathersby, Actuate.
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
