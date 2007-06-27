	<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse liefert den bisher größten Release der führenden Open Source Software-Entwicklungsplattform aus";
	$pageKeywords	= "europa, simultaneous, release, 2007, press release, german";
	$pageAuthor		= "Nathan Gervais";
	
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
		<h1 align="center">$pageTitle</h1>
		
		<h2 ALIGN="CENTER"><strong>Der Europa-Release besteht aus 21 Projekten</strong></h2>
		
		<p><strong>OTTAWA – Juni 27, 2007</strong> - Die Eclipse Foundation kündigte heute die Verfügbarkeit ihres jährlichen koordinierten Projekt-Release an, der in diesem Jahr den Codenamen Europa trägt. Europa beinhaltet 21 Eclipse-Projekte für Software-Entwickler und ist mehr als doppelt so groß wie der letztjährige Rekord-Release.</p>  
		<p>Der Release besteht aus über 17 Millionen Codezeilen und den Beiträgen von über 310 Open Source-Entwicklern aus 19 verschiedenen Ländern. Der Release von 2006 unter dem Namen Callisto umfasste 10 Projektteams, 7 Millionen Codezeilen, 260 Open Source-Entwickler aus 12 Ländern. Dies ist das vierte Jahr in Folge, in der die Eclipse-Community einen großen Release planmäßig ausliefert.</p>
		<p>Innovationen im Europa-Release sind unter anderem eine neue Laufzeittechnologie für die Erstellung von Server-Anwendungen, Entwicklerwerkzeuge für serviceorientierte Architekturen (SOA), Werkzeuge für eine verbesserte Zusammenarbeit im Team sowie eine Unterstützung für Benutzer der beliebten Programmiersprache Ruby.</p>
		<p>„Eclipse ist eine sehr erfolgreiche offene Entwicklungsplattform für die Softwareindustrie“, so Mike Milinkovich, Executive Director der Eclipse Foundation. „Der Europa-Release von Eclipse ist ein wichtiger Meilenstein für die Einhaltung der Strategie unserer Gemeinschaft, eine allgemeine Entwicklungsplattform für eingebettete, Rich Client-, Rich Internet- und Server-Anwendungen bereitzustellen. Der ungeheuere Vorteil von Eclipse ist, dass es alle diese verschiedenen Anwendungstypen mit einem allgemeinen Komponentenmodell, Frameworks und Tools abdeckt.“</p>
		<p>Einige Highlights der veröffentlichten Projekte:</p>
		<ul class="paddedlist">
			<li>Eclipse Equinox hat neue Services und Funktionalitäten hinzugefügt, die die Entwicklung und die Weitergabe von Server-Anwendungen unter der Equinox-Laufzeitumgebung vereinfachen.</li>
			<li>Eclipse Business Intelligence and Reporting Tools (BIRT) hat eine Unterstützung für dynamische Kreuztabellen hinzugefügt, ebenso wie Ausgaben in Microsoft Word- und Excel-Formaten, und erlaubt jetzt, dass sich Webservices als Datenquelle verhalten. Diese neuen Funktionsmerkmale gestatten, eine komplexere Berichtsfunktionalität in Java-Anwendungen zu integrieren.</li>
			<li>Das Eclipse SOA Tools Project (STP) hat seinen ersten Release bereitgestellt. Der Release bietet SOA-Entwicklern Werkzeugunterstützung für SCA- und JAX-WS-Standards sowie ein BPMN Modeler-Tool.</li>
			<li>Das Eclipse Modeling-Projekt hat das Eclipse Modeling Framework (EFM) aktualisiert, so dass es jetzt auch Java 5-Generics unterstützt und damit das Erstellen und die Verwaltung komplexerer und flexiblerer Datenmodelle gestattet.</li>
			<li>Eclipse Mylyn (früher unter dem Namen Mylar geführt) hat neue Funktionen für die Zusammenarbeit hinzugefügt, um Entwicklungsteams eine aufgabenzentrierte Zusammenarbeit zu ermöglichen. Für Entwickler, die an großen Anwendungen arbeiten, reduziert die aufgabenorientierte Benutzeroberfläche von Mylyn die Informationsüberlast. Außerdem vereinfacht sie das Multitasking.</li>
			<li>Eclipse Dynamic Language Toolkit (DLTK) hat eine IDE-Unterstützung für Ruby eingeführt und präsentiert ein Framework, das die Komplexität bei der Entwicklung von IDEs für andere dynamische Sprachen wie etwa TCL oder Python reduziert.</li>
			<li>Der Eclipse CDT-Release bringt wesentliche Verbesserungen für die einfachere Tool-Chain-Integration mit sich, insbesondere eine engere Integration mit der MinGW Gnu Tool-Chain, wodurch es einfacher wird, C/C++-Anwendungen auf der Windows-Plattform zu entwickeln.</li>
			<li>Das Java Development Tools-Projekt (JDT) hat mehrere Funktionsmerkmale eingeführt, um die Produktivität von Java-Entwicklern zu steigern, die Eclipse einsetzen, wie unter anderem einen fortgeschrittenen Debugger via Hyperlinking sowie eine neue Quick Access-Funktion, die eine einfachere IDE-Navigation ermöglicht.</li> 
			<li>Eclipse Web Tools Project (WTP) hat mehrere Funktionsmerkmale eingeführt, um die Produktivität von Webentwicklern zu steigern, einschließlich eines neuen visuellen Editors für HTML, JSP und JSF sowie eine Unterstützung neuer Standards, wie etwa Axis2, sowie eine grundlegende JEE 5-Unterstützung.</li>
		</ul>
		<p>Der Europa-Release steht ab dem 29. Juni 2007 unter <a href="http://www.eclipse.org/downloads/">eclipse.org</a> zur Verfügung. Es wurden neue Download-Optionen geschaffen, um vollständige Download-Pakete für Benutzer zur Verfügung stellen zu können, die eine Java IDE, JEE IDE, C/C++ IDE sowie einen SDK für RCP- und Plugin-Entwickler benötigen.</p>
		<p>Die vollständige Liste der im Europa-Release enthaltenen Eclipse-Projekte beinhaltet:</p>
		<ul class="paddedlist">
			<li><a href="http://www.eclipse.org/ajdt/">AJDT 1.5</a></li>
			<li><a href="http://www.eclipse.org/birt/">BIRT 2.2</a></li>
			<li><a href="http://www.eclipse.org/buckminster/">Buckminster 0.1.0</a></li>
			<li><a href="http://www.eclipse.org/cdt">CDT 4.0</a></li>
			<li><a href="http://www.eclipse.org/datatools/">DLTK 1.0</a></li>
			<li><a href="http://www.eclipse.org/dsdp/dd/">DSDP DD 0.9</a></li>
			<li><a href="http://www.eclipse.org/dsdp/tm/">DSDP TM  2.0</a></li>
			<li><a href="http://www.eclipse.org/dltk/">DTP 1.5</a></li>
			<li><a href="http://www.eclipse.org/ecf/">ECF 1.0</a></li>
			<li><a href="http://www.eclipse.org/eclipse/">Eclipse Platform 3.3</a> </li>
			<li><a href="http://www.eclipse.org/dash/">Dash 1.0</a></li>
			<li><a href="http://www.eclipse.org/emf/">EMF 2.3</a></li>
			<li><a href="http://www.eclipse.org/emft/">EMF-QTV 1.1</a></li>
			<li><a href="http://www.eclipse.org/m2t">M2T (JET) 0.8</a></li>
			<li><a href="http://www.eclipse.org/gef">GEF 3.3</a></li>
			<li><a href="http://www.eclipse.org/gmf/">GMF 2.0</a></li>
			<li><a href="http://www.eclipse.org/modeling/mdt/">MDT 1.0</a></li>
			<li><a href="http://www.eclipse.org/mylyn/">Mylyn 2.0</a></li>
			<li><a href="http://www.eclipse.org/stp/">STP 0.6</a></li>
			<li><a href="http://www.eclipse.org/tptp/">TPTP 4.4</a></li>
			<li><a href="http://www.eclipse.org/webtools/main.php">WTP 2.0</a></li>
		</ul>
		
		<p><strong>Informationen über Eclipse</strong><br />
		Eclipse ist eine Open Source-Community, deren Projekte sich auf die Entwicklung einer offenen Entwicklungsplattform konzentrieren, bestehend aus erweiterbaren Frameworks, Tools und Laufzeitumgebungen für die Entwicklung, Verteilung und Verwaltung von Software über ihren gesamten Lebenszyklus hinweg. Es handelt sich dabei um ein großes, lebendiges Umfeld aus maßgeblichen Technologieanbietern, innovativen Startup-Unternehmen, Universitäten, Forschungsinstitutionen und Einzelpersonen, die die Eclipse-Plattform erweitern, ergänzen und unterstützen.</p>
		<p>Die Eclipse Foundation ist eine Non-Profit-Organisation und wird von ihren Mitgliedern unterstützt, die die Eclipse-Projekte verwalten. Weitere Informationen über Eclipse und die Eclipse Foundation erhalten Sie unter <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		Alle Unternehmens- und Produktnamen sowie Dienstleistungsmarken können Marken oder eingetragene Marken der jeweiligen Unternehmen sein.
		<br /><br /><strong>Pressekontakt:</strong><br>	
		Alin Frädrich<br>
		saalto Agentur und Redaktion GmbH<br>
		Rappenstraße 5<br/>
		76227 Karlsruhe<br/>
		Tel. +49 (0)721-160 88 78<br>
		eMail: alin (at) saalto.de<br>
		www.saalto.de<br>
		<br/>
		<br/><strong>Weitere Informationen:</strong><br>
		Ralph Müller<br/>
		Director, Eclipse Ecosystems – Europe<br/>
		Eclipse Foundation Inc.<br/>
		eMail: ralph.mueller (at) eclipse.org<br/>
		www.eclipse.org<br/>
		</p>
							
	</div>
	<div id="rightcolumn">
	<div class="sideitem">
		<h6>Related Links</h6>
		<ul>
			<li><a href="/europa/europaeffect.php">Europa Quotes</a></li>
		</ul>
	</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

