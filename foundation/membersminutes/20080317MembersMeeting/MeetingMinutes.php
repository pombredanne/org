<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "September 20, 2007 Members Meeting";
$pageKeywords	= "members meeting, foundation, marketing symposium";
$pageAuthor		= "Donald Smith";

ob_start();
?>		
    <div id="maincontent">
	<div id="midcolumn">

</head>



<h1>Membership Meeting,March 17, 2008</h1>
<h2>Minutes, Santa Clara, California</h2>



<h3>Speakers</h3>


<p>In the morning, Donald Smith ran a New Members Jumpstart.  
The main slides can be found <a href="2008-03-17-Jumpstart.pdf">HERE.</a>
</p>


<p>
Mike Milinkovich, Eclipse Foundation, delivered the <a href="DirectorsReport.pdf">Executive Director Update.</a>
</p>

<p>
Guest Speaker Raven Zachary gave a presetation on <a href="451Eclipse.pdf">The State of the Open Source Industry.</a>  We thank Raven for making his slides available to our membership.
</p>

<p>
Guest Speaker Patrick Wagstrom gave a presetation on <a href="EclipseValueChains.pdf">Value Creation in the Eclipse Ecosystem.</a>  We thank Patrick for making his slides available to our membership.
</p>

<p>
There were four New Member Introductions:
<ul>
<li>Etish (slides to be posted soon)</li>
<li><a href="frog.pdf">froglogic</a> </li>
<li><a href="siemens.pdf">Siemens</a> </li>
<li><a href="innovations.pdf">Innovations</a> </li>
</ul>
</p>

<p>
There were five Project Updates:
<ul>
<li><a href="mylyn.pdf">Mylyn</a> </li>
<li><a href="equinox.pdf">Equinox</a> </li>
<li><a href="eilf.pdf">EILF</a> </li>
<li><a href="memory.pdf">Memory Analyzer</a> </li>
<li><a href="OSEE.pdf">Innovations</a> </li>
</ul>

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
