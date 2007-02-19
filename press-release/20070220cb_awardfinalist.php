<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Finalist for Eclipse Community Awards 2007";
	$pageKeywords	= "Eclipsecon, Open Source Pavillion, 2007";
	$pageAuthor		= "Nathan Gervais";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
<p><strong>February 19th, 2007</strong> - The Eclipse Foundation is pleased to announce the finalists of 
the <a href="http://www.eclipse.org/org/foundation/eclipseawards/">2007 Eclipse Community Awards.</a> </p>
 
<p>The Individual Awards recognize the people who have volunteered their time and resources in making Eclipse a 
vibrant and innovative community. Finalists were selected by their peers in an online vote. The selection of the Top 
Newcomer Evangelist is based on the individual that has answered the most questions raised on the eclipse.newcomer 
newsgroup.</p>
<p><ul>
<li>Top Ambassador:  Chris Aniszczyk, Alex Blewitt, Doug Shaefer
<li>Top Contributor:  Eugene Kuleshov, Philippe Ombredanne, Kimberley Peter, Tom Schindl
<li>Top Committer:  Mik Kersten, Ed Merks, Thomas Watson
<li>Top Newcomer Evangelist:  Hendrik Maryns, Daniel Megert, Eric Rizzo
</ul></p> 

<p>The Technology Awards recognize some of the best Eclipse-based open source projects and commercial products.  
The finalists were selected from a pool of <a href="http://www.eclipse.org/org/foundation/eclipseawards/technology_nominations.php">63
nominations</a> by a panel of judges from the Eclipse community. 
</p>
<p><ul>
<li>Best Open Source RCP application: <a href="http://eclipsetrader.sourceforge.net/">EclipseTrader</a>, 
<a href="http://portal.chronos.org/psicat-site/">PSICAT</a>, 
<a href="http://www.rssowl.org/">RSS-Owl</a>
<li>Best Commercial RCP application: <a href="http://www.tibco.com/devnet/business_studio/default.jsp">TIBCO Business Studio</a>, 
<a href="http://www.ivis.com/public/products/xprocess/index.cfm/">Ivis Technologies xProcess</a>
<li>Best Open Source Eclipse Based Developer Tool: <a href="http://www.eclemma.org/">EclEmma</a>, 
<a href="http://eclipse-cs.sourceforge.net/">eclipse-cs Checkstyle Plugin</a>
<li>Best Commercial Eclipse Based Developer Tool: <a href="http://www.adobe.com/products/flex/productinfo/overview/">Adobe Flex 2.0</a>, 
<a href="http://www.qnx.com/products/development/">QNX Momentics IDE</a>
<li>Best Deployment of Eclipse Technology in an Enterprise: Bardusch GmbH, JPMorgan Chase, NASA Ensemble Team 
</ul></p> 
<p>Winners for each category will be announced at an <a href="http://www.eclipsecon.org/2007/index.php?page=sub/&id=3964">awards ceremony</a> on March 5, 2007 at 
<a href="http://www.eclipsecon.org/2007/">EclipseCon 2007.</a><br><br>
</p>
</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

