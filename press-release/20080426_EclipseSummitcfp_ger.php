<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Vorschl�ge f�r Konferenzbeitr�ge k�nnen jetzt eingereicht werden";
$pageKeywords	= "eclipse summit europe, call for papers, 2008";
$pageAuthor		= "Ian Skerrett";

# Add page-specific Nav bars here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
# $Nav->addCustomNav("My Link", "mypage.php", "_self");
# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

# End: page-specific settings
#

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
		<style>
		.paddedlist li {	padding-bottom:7px;	}
	</style>
<div id="maincontent">
	<div id="midcolumn">
		<h2>Press Release</h2>

		<center>
		<h1>$pageTitle</h1>
		</center>

		<p><strong>Ludwigsburg, Deutschland, 26. Mai 2008.</strong> - 
		Die Eclipse Foundation veranstaltet vom 19. � 20. November 2008 ihren dritten Europa-Jahresgipfel, den �Eclipse Summit�, in Ludwigburg. Die Konferenz stellt den bedeutendsten Event f�r die europ�ische Eclipse Community dar. Hier erhalten die Teilnehmer die aktuellsten Informationen �ber die Eclipse Technologie, die Eclipse Foundation und deren Mitglieder, k�nnen sich austauschen sowie Kontakte f�r Kooperationen kn�pfen.</p>
		
		<p>W�hrend am Vortag des Eclipse Europa-Gipfels eine Symposien-Reihe angeboten wird, stehen an den beiden Konferenztagen, dem 19. und 20. November, IT-Technologie und Business-orientierte Vortr�ge und Keynotes sowie Demos und das Netzwerken der Teilnehmer im Mittelpunkt. Die Veranstaltung bietet zahlreiche Anregungen � sowohl f�r diejenigen, die an der Eclipse Plattform selbst mitarbeiten als auch f�r diejenigen, die kommerzielle oder nicht-kommerzielle Erweiterungen auf Basis der Plattform realisieren oder Services und Schulungen im Eclipse �kosystem anbieten. F�r sie alle stellt der Eclipse Europa-Gipfel eine gute Gelegenheit dar, ihr Fachwissen zu erweitern und neue Ideen f�r IT-L�sungen im Eclipse �kosystem zu erhalten. </p> 

		<p>Vorschl�ge f�r Konferenzbeitr�ge k�nnen bis zum 1. September eingereicht werden. Diese sollten auf eine der folgenden vier Kategorien zugeschnitten sein: Anwenderberichte (1), Technik-Demonstrationen (2), Ganymede Updates (3) oder News & Noteworthy (4.) Die Richtlinien f�r die einzureichenden Vortr�ge sind �ber folgende Website abrufbar: <a href="http.//eclipsesummit.org/summiteurope2008/submissions">http.//eclipsesummit.org/summiteurope2008/submissions</a>.</p>
 
		<p>Informationen zu den Sponsoring-Paketen f�r den Eclipse Europa-Gipfel k�nnen ab sofort abgerufen und gebucht werden unter: <a href="http://eclipsesummit.org/summiteurope2008/sponsorship">http://eclipsesummit.org/summiteurope2008/sponsorship</a>. Die Website f�r die Registrierung der Konferenzteilnahme steht ab Sommer bereit. </p>
				
		<p><b>�ber die Eclipse Foundation</b><br>
		Eclipse ist eine Open Source Community. In ihren Projekten geht es schwerpunktm��ig um das Entwickeln einer offenen und erweiterbaren Tools- und Runtime-Plattform. Diese Plattform erlaubt es, sowohl Tools als auch Unternehmensanwendungen zu entwickeln, zu verteilen und �ber den Life-Cycle hinweg zu betreuen. Die Eclipse Technologie wird von einem gro�en �kosystem unterst�tzt. Hier bringen sich neben den gro�en Software-Herstellern auch innovative kleinere Firmen, Universit�ten, Service-Anbieter und Unternehmen aus den vertikalen M�rkten ein.</p>
		
		<p>Die Eclipse Foundation ist eine von Mitgliedern getragene, gemeinn�tzige Organisation nach US-Recht und stellt die Infrastruktur und Dienstleistungen f�r Eclipse Open Source Projekte bereit. Ausf�hrliche Informationen zu Eclipse und der Eclipse Foundation sind unter <a href="http://www.eclipse.org">http://www.eclipse.org</a> erh�ltlich.</p>

		<p><center>###</center><p>
		
		<p>All company/product names and service marks may be trademarks or registered trademarks of their respective companies.</p>
				
		<p><b>Pressekontakt:</b><br/>
		Ian Skerrett<br/>
		Director of Marketing<br/>
		Eclipse Foundation<br/>
		<a href="mailto:ian.skerrett@eclipse.org">ian.skerrett@eclipse.org</a><br>
		+1 -613-224-9461 (ext. 227)<br>
		<br>

	</div>

</div>


		

EOHTML;

	$html = mb_convert_encoding($html, "HTML-ENTITIES");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

