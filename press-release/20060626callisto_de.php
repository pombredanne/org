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
		<h2 ALIGN="CENTER"><strong>Callisto zeigt Vorhersagbarkeit der Open Source-Softwareentwicklung für Großprojekte</strong></h2>
		<ul>
		<li>Eclipse Community startet mit „Callisto“ erfolgreichen Synchron-Release von zehn Open-Source-Projekten </li>
		</ul>
		<p><strong>OTTAWA, KANADA – 26. Juni 2006 </strong>– Die Eclipse Foundation kündigte heute den 
		gleichzeitigen Release von zehn Eclipse Open-Source-Projekten an. Dieses besondere Release-Ereignis 
		namens Callisto ist einer der größten Multi-Projekt-Releases, den je eine Open-Source-Community unternommen 
		hat. Die Eclipse Foundation bietet mit „Callisto“ die synchrone Einführung von zehn Einzelprojekten, die 
		Anwendern, vor allem auch Einsteigern, die Einführung von offenen Werkzeugen erleichtern. Die 
		Veröffentlichung von Callisto kennzeichnet das dritte Jahr in Folge, in dem Eclipse einen großen Release 
		innerhalb des vorgegebenen Zeitplans ausgeliefert hat. Die Projekte aus dem Callisto-Release stehen ab dem 
		30. Juni 2006 zum Download unter www.eclipse.org/callisto bereit. </p>

		<p>Callisto stellte ein voluminöses Vorhaben für die Eclipse-Community dar: mit 10 verschiedenen 
		Projektteams, 260 Beteiligten und über 7 Millionen Codezeilen. 15 verschiedene unabhängige 
		Software-Anbieter (ISVs) stellten Open-Source-Entwickler ab, um an den in Callisto enthaltenen Projekten 
		zu arbeiten, und demonstrierten damit die von zahlreichen Anbietern unterstützte und globale Natur der 
		Eclipse-Community. Diese Entwickler befanden sich in 12 verschiedenen Ländern weltweit: Kanada, USA, 
		Finnland, Türkei, China, Frankreich, Russland, Tschechien, Indien, Schweiz, Deutschland und Österreich. </p>

		<p>„Callisto verdeutlicht, dass das Open-Source-Entwicklungsmodell äußerst erfolgreich eine Plattform für 
		die Softwareentwicklung bereitstellen kann“, sagt Mike Milinkovich, Geschäftsführer der Eclipse Foundation. 
		„Als wir den Callisto-Release im letzten Jahr zum ersten Mal starteten, stellte dieser Versuch, so viele 
		Projekte zu kombinieren, ein Risiko dar. Heute haben die Eclipse-Projekte bewiesen, dass eine verteilte C
		ommunity, die gemeinsam an mehreren Projekten arbeitet und an der zahlreiche Anbieter beteiligt sind, sehr 
		effektiv sein kann, um Software innerhalb eines vorhersehbaren Zeitplans auszuliefern.“</p>

		<p>Ein wichtiges Anliegen von Callisto ist es, Unternehmen wie etwa ISVs oder Enterprise-Entwicklern zu 
		ermöglichen, Eclipse als Plattform für die Anwendungsentwicklung einfacher zu übernehmen. Die Benutzer 
		können von der modularen Architektur von Eclipse profitieren und für die Erstellung ihrer Anwendungen eine 
		Vielzahl unterschiedlicher Eclipse-Projekte heranziehen. Callisto sorgt für ein einziges Release-Ereignis, 
		das Versionskompatibilität und Zeitpläne synchronisiert. Das Synchron-Projekt ist jedoch nicht als 
		eigenes, integriertes Werkzeugpaket zu verstehen, sondern stellt eine gleichzeitige Veröffentlichung 
		verschiedener Projekte dar, die ihre eigene Roadmap beibehalten. Zu den ISVs, die planen Projekte aus 
		dem Callisto-Release zu nutzen, gehören z. B. Actuate, AvantSoft, BEA, Borland, Business Objects, IBM, 
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
			<li><p><strong>Neue Standalone-OSGi-Laufzeitumgebung:</strong> Die Entwickler genießen jetzt die 
			Flexibilität, die Eclipse OSGi-Laufzeitumgebung als Standalone-Framework nutzen zu können. Die 
			OSGi-Laufzeitumgebung, Teil des Eclipse Equinox-Projekts, bildet die Grundlage der Eclipse Rich Client 
			Platform. Als Standalone-Framework kann sie von den Entwicklern in den unterschiedlichsten 
			Anwendungsarchitekturen eingesetzt werden, unter anderem für Embedded-, Client- und 
			Server-Anwendungen.</p>

 			<li><p><strong>Web Services Tooling:</strong>Angebot von Werkzeugen, die das Erstellen, die Weitergabe 
 			und das Profiling von Webdiensten vereinfachen. Neue Werkzeuge werden im Web Tools Project (WTP) sowie 
 			in der Test and Performance Tools Platform (TPTP) bereitgestellt.</p>

			<li><p><strong>Neuer Plattform-Support für OSX auf Intel und Preview für Windows Vista:</strong>  
			Eclipse-Entwickler können jetzt Anwendungen erstellen, die auf OSX auf Intel sowie unter Windows Vista 
			laufen. </p>

 			<li><p><strong>Release 1.0 von DTP und GMF:</strong>Die Data Tools Platform (DTP) stellt die 
 			Frameworks für die Erstellung datenzentrierter Anwendungen bereit. Das Graphical Modeling Framework 
 			macht es einfacher, Anwendungen zu erstellen, die grafische Editoren beinhalten.</p>
			</ul>
			</p>

		<p>Die Projekte aus dem Callisto-Release stehen ab dem 30. Juni 2006 zum Download bereit. Weitere 
		Informationen finden Sie im Internet unter <a href="http://www.eclipse.org/callisto">www.eclipse.org/callisto. 
		</a></p>
		
		
		<p><strong>Über die Eclipse Foundation</strong><br />
		Eclipse ist eine Open Source Community mit Fokus auf erweiterbare Software-Entwicklungswerkzeuge und 
		Anwendungsplattformen. Eclipse stellt eine erweiterbare Werkzeugplattform für den gesamten Lebenszyklus 
		der Softwareentwicklung bereit und bietet Werkzeuge für Modellierung, Test und Performance, Business 
		Intelligence, Embedded Entwicklung, IDEs für Java, C++ und weitere Sprachen, sowie Werkzeuge und eine 
		Plattform für Rich Client Applikationen. Ein großes und lebendiges Ökosystem aus bedeutenden 
		Technologie-Unternehmen, innovativen Start-Ups, Universitäten, Forschungseinrichtungen und Individuen 
		erweitert, ergänzt und unterstützt die Eclipse Plattform. 
		
		Die Eclipse Foundation ist eine von Mitgliedern 
		getragene gemeinnützige Organisation nach US-Recht und stellt die Infrastruktur und Dienstleistungen für 
		Eclipse Open Source Projekte bereit. Ausführliche Informationen zu Eclipse und der Eclipse Foundation sind 
		unter <a href="http://www.eclipse.org">www.eclipse.org</a> erhältlich.
		</p>
							
	</div>

		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

