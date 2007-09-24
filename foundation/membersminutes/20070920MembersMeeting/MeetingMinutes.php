<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "September 20, 2007 Members Meeting";
$pageKeywords	= "members meeting, foundation, marketing symposium";
$pageAuthor		= "Donald Smith";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">

</head>



<h1>Membership Meeting, September 20, 2007</h1>
<h2>Minutes, Chicago, Illinois</h2>



<h3>Speakers</h3>


<p>On September 19th, Donald Smith ran a New Members Jumpstart.  
The main slides can be found <a href="2007-09-17-Jumpstart.pdf">HERE.</a>  Donald also spoke
about <a href="07.09.12-Eclipse-Open-Innovation.pdf">Innovation Networks.</a>
</p>


<p>
Mike Milinkovich, Eclipse Foundation, delivered the <a href="DirectorReport.pdf">Executive Director Update.</a>
</p>

<p>
Bjorn Freeman-Benson, began a discussion about <a href="DevProcessChanges.pdf">changes to the Eclipse Development Process.</a>
</p>


<p>
Peter Krogh, Oracle, presented an update on the <a href="EclipseLink.pdf">EclipseLink Project.</a>
</p>

<p>
Jochen Krause, Innoopract, presented an update on the RAP Project (DEMO, no slides available).
</p>

<p>
Bjorn Freeman-Benson, presented a <a href="ProjectUpdate.pdf">Projects update.</a>
</p>

<p>
Donald Smith and Donna Esposito, described some ideas for <a href="EclipseEvents.pdf">getting the most out of Eclipse Events.</a>
</p>

<p>
Adam Lieber, Webtide, presented the <a href="WebTideIntro.pdf">Webtide New Member Introduction.</a>
</p>

<p>
Shubra Sinha, Replay Solutions, presented the <a href="ReplaySolutionsIntro.pdf">Replay Solutions New Member Introduction.</a>
</p>

<p>
Guest Speaker Matt Lawton, IDC, Presented - Generating Revenue With Open Source Software: IDC's Outlook on Business Models and Where They Are Headed.
Matt's slides are only available to those in attendance.
</p>

<p>
Ian Skerrett, Eclipse Foundation, delivered the <a href="MarketingUpdate.pdf">Marketing Update.</a>
</p>

<p>
Guest Speaker Tony Bailetti, Carleton University, Presented - <a href="MakeMoney.pdf">Appropriating Value (Make Money) from Open Source Projects</a>.
</p>


<br><br>

      </div>
  </div>
<?php
	# Paste your HTML content between the EOHTML markers!	
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
