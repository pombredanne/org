<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse stellt jährliches Release bereit";
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
		
		<p><strong>Ottawa, Kanada, 25. Juni 2008 - </strong>Die Eclipse Foundation und die gesamte Eclipse Community haben heute die Verfügbarkeit des Ganymede Releases angekündigt. Mit Ganymede gibt die Eclipse Community im dritten Jahr in Folge ein „simultanes Projekt-Release“ heraus. Ganymede beinhaltet Programmpakete von 23 unterschiedlichen Eclipse-Projektteams und umfasst über 18 Millionen Codezeilen.</p>
		<p>Das Release stellt Neuerungen und Key Features für unterschiedliche Bereiche bereit. Zu diesen zählen Equinox und Runtime-Projekte, Modeling Features und Entwicklungswerkzeuge sowie Unterstützung von Entwicklern von service-orientierten Architekturen (SOA).</p>
		<p>Alle Projekte von Ganymede stehen jetzt für den Download bereit. Die Eclipse Foundation erleichtert durch die Bereitstellung von sieben Programmpaketen, die jeweils ein bestimmtes Anwendungsgebiet abdecken, den Downloadprozess von gleich mehreren Projekten. Weiterführende Informationen zu Ganymede sind über <a href="http://www.eclipse.org/ganymede">http://www.eclipse.org/ganymede</a> abrufbar.</p>
		<p>„Die Eclipse Community setzt mit dem Ganymede-Release die Tradition fort, innovative Software regelmäßig zu einem festen Zeitpunkt bereitzustellen“, sagt Mike Milinkovich, Geschäftsführer der Eclipse Foundation. „Neue Features wie das Equinox p2 Provisioning System, Neue Modellierungstools und Werkzeuge für SOA-Entwickler werden sich zu beliebten Features der Eclipse-Anwender entwickeln.“</p>
		<p>Das Ganymede Relase wird auch ein Schwerpunktthema beim Eclipse Summit Europe (<a href="http://www.eclipsesummit.org/summiteurope2008/">http://www.eclipsesummit.org/summiteurope2008/</a>) sein, der am 19. und 20. November in Ludwigsburg stattfinden wird.</p>
		<p><strong>Über die Eclipse Foundation</strong><br />
		Informationen über Eclipse sind unter <a href="http://www.eclipse.org/">http://www.eclipse.org</a> erhältlich.</p>
		<br />
		<center># # #</center> 
		<br />Alle Firmen- und Produktnamen sowie Service-Marken sind eingetragene Warenzeichen oder geschützte Marken der jeweiligen Firmen.
		
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

