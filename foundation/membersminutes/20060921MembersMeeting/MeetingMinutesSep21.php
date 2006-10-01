<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "March 20, 2006 Members Meeting";
$pageKeywords	= "members meeting, foundation";
$pageAuthor		= "Donald Smith";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">

</head>



<h1>Members Meeting, September 21, 2006</h1>
<h2>Minutes, Dallas Texas, Omni Mandalay</h2>

<h3>Attendees</h3>
<p>There were approximately fifty five members present representing over 
fourty member companies.</p>

<h3>Speakers</h3>

<p>
Mike Milinkovich kicked off the meeting with a   
<a href="ExecutiveDirectorUpdate.pdf">Foundation Update</a>
and then the <a href="ProjectUpdate.pdf">Project Update</a>
.</p>

<p>Larry Abrahams from Active Grid  provided us with a new member introduction.
Larry's presentation can be
<a href="ActiveGrid.pdf">found here</a>.
</p>

<p>
Bobby Clarke from ARM provided us with a new member introduction. 
Bobby's presentation can be 
<a href="ARM.pdf">found here</a>.</p>

<p>
Because of some technical difficulties with his flights, Ashvin Radiya from AvantSoft 
missed out on providing us a presentation at the Members Reception.  Therefore, Ashvin provided
the update at the members meeting which can be 
<a href="AvantSoft.pdf">found here</a>.</p>

<p>
Mark Weitzel from IBM provided us with details of a recently proposed project called COSMOS.
Details of his presentation can be 
<a href="COSMOS.pdf">found here</a>.</p>

<p>
The EPIC Council provided an update of the themes and priorities for EPIC and
results of an EPIC survey.  The details can be  
<a href="EPICtpAndSurvey.pdf">found here</a>.</p>

<p>
Ian Skerrett provided a 
<a href="MarketingUpdate.pdf">Marketing Update</a>.</p>

<p>
Christian Kurzke provided a new member introduction for the new Strategic Member  
<a href="Motorola.pdf">Motorola</a>.</p>

<p>
Winston Damorillo provided a new member introduction for the new Strategic Member  
<a href="SimulaLabs.pdf">Simula Labs</a>.</p>

<p>
Alan Zeichick from BZMedia provided us results from an Eclipse Review survey.  The results can be  
<a href="BZMedia.pdf">found here</a>.</p>

<p>
Jochen Krause from Innoopract provided a demo of the RAP project.  This demo was live and not captured for
replay. 
</p>

<p>
Kevin Sawicki from IBM provided a demo of the ATF project.  This demo was live and not captured for
replay. 
</p>
 
<p>
Steve McClure from IDC revealed statistics from a recent IDC developer survey.  This presentation
was subject to copyright and not part of the minutes.
</p>

<h3>New Member Jumpstart</h3>

<p>
Donald Smith presented an interactive Eclipse  
<a href="20060920EclipseJumpstart.pdf">New Member Jumpstart</a>
to about twenty five attendees.
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
