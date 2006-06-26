<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Callisto Press Release";
	$pageKeywords	= "";
	$pageAuthor		= "Ian Skerrett";
	
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
		<h2></h2>
		<h2 ALIGN="CENTER"><strong>Callisto zeigt Vorhersagbarkeit der Open Source-Softwareentwicklung f�r Gro�projekte</strong></h2>
		<ul>
		<li>Eclipse Community startet mit �Callisto� erfolgreichen Synchron-Release von zehn Open-Source-Projekten </li>
		</ul>
		<p><strong>OTTAWA, KANADA � 26. Juni 2006 </strong>� Die Eclipse Foundation k�ndigte heute den 
		gleichzeitigen Release von zehn Eclipse Open-Source-Projekten an. Dieses besondere Release-Ereignis 
		namens Callisto ist einer der gr��ten Multi-Projekt-Releases, den je eine Open-Source-Community unternommen 
		hat. Die Eclipse Foundation bietet mit �Callisto� die synchrone Einf�hrung von zehn Einzelprojekten, die 
		Anwendern, vor allem auch Einsteigern, die Einf�hrung von offenen Werkzeugen erleichtern. Die 
		Ver�ffentlichung von Callisto kennzeichnet das dritte Jahr in Folge, in dem Eclipse einen gro�en Release 
		innerhalb des vorgegebenen Zeitplans ausgeliefert hat. Die Projekte aus dem Callisto-Release stehen ab dem 
		30. Juni 2006 zum Download unter www.eclipse.org/callisto bereit. </p>

		<p>Callisto stellte ein volumin�ses Vorhaben f�r die Eclipse-Community dar: mit 10 verschiedenen 
		Projektteams, 260 Beteiligten und �ber 7 Millionen Codezeilen. 15 verschiedene unabh�ngige 
		Software-Anbieter (ISVs) stellten Open-Source-Entwickler ab, um an den in Callisto enthaltenen Projekten 
		zu arbeiten, und demonstrierten damit die von zahlreichen Anbietern unterst�tzte und globale Natur der 
		Eclipse-Community. Diese Entwickler befanden sich in 12 verschiedenen L�ndern weltweit: Kanada, USA, 
		Finnland, T�rkei, China, Frankreich, Russland, Tschechien, Indien, Schweiz, Deutschland und �sterreich. </p>

		<p>�Callisto verdeutlicht, dass das Open-Source-Entwicklungsmodell �u�erst erfolgreich eine Plattform f�r 
		die Softwareentwicklung bereitstellen kann�, sagt Mike Milinkovich, Gesch�ftsf�hrer der Eclipse Foundation. 
		�Als wir den Callisto-Release im letzten Jahr zum ersten Mal starteten, stellte dieser Versuch, so viele 
		Projekte zu kombinieren, ein Risiko dar. Heute haben die Eclipse-Projekte bewiesen, dass eine verteilte C
		ommunity, die gemeinsam an mehreren Projekten arbeitet und an der zahlreiche Anbieter beteiligt sind, sehr 
		effektiv sein kann, um Software innerhalb eines vorhersehbaren Zeitplans auszuliefern.�</p>

		<p>Ein wichtiges Anliegen von Callisto ist es, Unternehmen wie etwa ISVs oder Enterprise-Entwicklern zu 
		erm�glichen, Eclipse als Plattform f�r die Anwendungsentwicklung einfacher zu �bernehmen. Die Benutzer 
		k�nnen von der modularen Architektur von Eclipse profitieren und f�r die Erstellung ihrer Anwendungen eine 
		Vielzahl unterschiedlicher Eclipse-Projekte heranziehen. Callisto sorgt f�r ein einziges Release-Ereignis, 
		das Versionskompatibilit�t und Zeitpl�ne synchronisiert. Das Synchron-Projekt ist jedoch nicht als 
		eigenes, integriertes Werkzeugpaket zu verstehen, sondern stellt eine gleichzeitige Ver�ffentlichung 
		verschiedener Projekte dar, die ihre eigene Roadmap beibehalten. Zu den ISVs, die planen Projekte aus 
		dem Callisto-Release zu nutzen, geh�ren z. B. Actuate, AvantSoft, BEA, Borland, Business Objects, IBM, 
		ILOG, Innoopract, Intalio, Intervoice, Klocwork, Lattix, LogicLibrary, Lombardi, Lynxworks, Oracle, QNX 
		und Scapa Technologies.</p>
		
		<p>Callisto beinhaltet den funktionalen Haupt-Release der folgenden Eclipse-Projekte:
		<ul><br>
			<li>Business Intelligence and Reporting Tools (BIRT) 2.1
			<li>C/C++ IDE (CDT) 3.1
			<li>Data Tools Platform (DTP) 1.0
			<li>Eclipse Modeling Framework (EMF) 2.2
			<li>Graphical Editor Framework (GEF) 3.2
			<li>Graphical Modeling Framework (GMF)1.0
			<li>Eclipse Project 3.2
			<li>Test and Performance Tools Platform (TPTP) 4.2, 
			<li>Web Tools Platform (WTP) 1.5
			<li>Visual Editor (VE) 1.2.
		</ul>
		</p>

		<p>Einige der Technologie-Highlights der Projekt-Releases sind unter anderem:
 
			<ul><br>
			<li><p><strong>Neue Standalone-OSGi-Laufzeitumgebung:</strong> Die Entwickler genie�en jetzt die 
			Flexibilit�t, die Eclipse OSGi-Laufzeitumgebung als Standalone-Framework nutzen zu k�nnen. Die 
			OSGi-Laufzeitumgebung, Teil des Eclipse Equinox-Projekts, bildet die Grundlage der Eclipse Rich Client 
			Platform. Als Standalone-Framework kann sie von den Entwicklern in den unterschiedlichsten 
			Anwendungsarchitekturen eingesetzt werden, unter anderem f�r Embedded-, Client- und 
			Server-Anwendungen.</p>

 			<li><p><strong>Web Services Tooling:</strong>Angebot von Werkzeugen, die das Erstellen, die Weitergabe 
 			und das Profiling von Webdiensten vereinfachen. Neue Werkzeuge werden im Web Tools Project (WTP) sowie 
 			in der Test and Performance Tools Platform (TPTP) bereitgestellt.</p>

			<li><p><strong>Neuer Plattform-Support f�r OSX auf Intel und Preview f�r Windows Vista:</strong>  
			Eclipse-Entwickler k�nnen jetzt Anwendungen erstellen, die auf OSX auf Intel sowie unter Windows Vista 
			laufen. </p>

 			<li><p><strong>Release 1.0 von DTP und GMF:</strong>Die Data Tools Platform (DTP) stellt die 
 			Frameworks f�r die Erstellung datenzentrierter Anwendungen bereit. Das Graphical Modeling Framework 
 			macht es einfacher, Anwendungen zu erstellen, die grafische Editoren beinhalten.</p>
			</ul>
			</p>

		<p>Die Projekte aus dem Callisto-Release stehen ab dem 30. Juni 2006 zum Download bereit. Weitere 
		Informationen finden Sie im Internet unter <a href="http://www.eclipse.org/callisto">www.eclipse.org/callisto. 
		</a></p>
		
		
		<p><strong>�ber die Eclipse Foundation</strong><br />
		Eclipse ist eine Open Source Community mit Fokus auf erweiterbare Software-Entwicklungswerkzeuge und 
		Anwendungsplattformen. Eclipse stellt eine erweiterbare Werkzeugplattform f�r den gesamten Lebenszyklus 
		der Softwareentwicklung bereit und bietet Werkzeuge f�r Modellierung, Test und Performance, Business 
		Intelligence, Embedded Entwicklung, IDEs f�r Java, C++ und weitere Sprachen, sowie Werkzeuge und eine 
		Plattform f�r Rich Client Applikationen. Ein gro�es und lebendiges �kosystem aus bedeutenden 
		Technologie-Unternehmen, innovativen Start-Ups, Universit�ten, Forschungseinrichtungen und Individuen 
		erweitert, erg�nzt und unterst�tzt die Eclipse Plattform. 
		
		Die Eclipse Foundation ist eine von Mitgliedern 
		getragene gemeinn�tzige Organisation nach US-Recht und stellt die Infrastruktur und Dienstleistungen f�r 
		Eclipse Open Source Projekte bereit. Ausf�hrliche Informationen zu Eclipse und der Eclipse Foundation sind 
		unter <a href="http://www.eclipse.org">www.eclipse.org</a> erh�ltlich.
		</p>
							
	</div>

		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

