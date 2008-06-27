<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse stellt j�hrliches Release bereit";
$pageKeywords	= "eclipse, embedded, ESC, mobile";
$pageAuthor		= "Ian Skerrett";

# Add page-specific Nav bars here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
# $Nav->addCustomNav("My Link", "mypage.php", "_self");
# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

# End: page-specific settings
#

# Paste your HTML content between the EOHTML markers!
ob_start();
?>
		<style>
		.paddedlist {margin-left:10px;margin-top:-10px;}
		.paddedlist li {padding-bottom:3px; }
		p {padding-bottom:10px;}
		</style>
<div id="widecontent">
	<div id="midcolumnwide">
		<h2>Press Release</h2>

		<center>
		<h1><?=$pageTitle?></h1>
		</center>
		<h2>Ganymede Release beinhaltet 23 Projekte und 18 Millionen Codezeilen</h2>
		
		<p><strong>Ottawa, Kanada, 25. Juni 2008 - </strong>Die Eclipse Foundation und die gesamte Eclipse Community haben heute die Verf�gbarkeit des Ganymede Releases angek�ndigt. Mit Ganymede gibt die Eclipse Community im dritten Jahr in Folge ein �simultanes Projekt-Release� heraus. Ganymede beinhaltet Programmpakete von 23 unterschiedlichen Eclipse-Projektteams und umfasst �ber 18 Millionen Codezeilen.</p>
		<p>Das Release stellt Neuerungen und Key Features f�r unterschiedliche Bereiche bereit. Zu diesen z�hlen Equinox und Runtime-Projekte, Modeling Features und Entwicklungswerkzeuge sowie Unterst�tzung von Entwicklern von service-orientierten Architekturen (SOA).</p>
		<p>Alle Projekte von Ganymede stehen jetzt f�r den Download bereit. Die Eclipse Foundation erleichtert durch die Bereitstellung von sieben Programmpaketen, die jeweils ein bestimmtes Anwendungsgebiet abdecken, den Downloadprozess von gleich mehreren Projekten. Weiterf�hrende Informationen zu Ganymede sind �ber <a href="http://www.eclipse.org/ganymede">http://www.eclipse.org/ganymede</a> abrufbar.</p>
		<p>�Die Eclipse Community setzt mit dem Ganymede-Release die Tradition fort, innovative Software regelm��ig zu einem festen Zeitpunkt bereitzustellen�, sagt Mike Milinkovich, Gesch�ftsf�hrer der Eclipse Foundation. �Neue Features wie das Equinox p2 Provisioning System, Neue Modellierungstools und Werkzeuge f�r SOA-Entwickler werden sich zu beliebten Features der Eclipse-Anwender entwickeln.�</p>
		<p>Das Ganymede Relase wird auch ein Schwerpunktthema beim Eclipse Summit Europe (<a href="http://www.eclipsesummit.org/summiteurope2008/">http://www.eclipsesummit.org/summiteurope2008/</a>) sein, der am 19. und 20. November in Ludwigsburg stattfinden wird.</p>
		<p><strong>�ber die Eclipse Foundation</strong><br />
		Informationen �ber Eclipse sind unter <a href="http://www.eclipse.org/">http://www.eclipse.org</a> erh�ltlich.</p>
		<br />
		<center># # #</center> 
		<br />Alle Firmen- und Produktnamen sowie Service-Marken sind eingetragene Warenzeichen oder gesch�tzte Marken der jeweiligen Firmen.
		
		<p><b>Pressekontakt:</b><br>
		Chantal Yang<br>
		Page One Public Relations<br>
		++1 650-565-9800-752<br>
		<a href="mailto:chantal@pageonepr.com">chantal@pageonepr.com</a><br>
		<br>
	</div>
</div>


<? 
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

