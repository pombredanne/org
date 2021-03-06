<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Indigo Release Train jetzt verf�gbar";
	$pageKeywords	= "elipse, indigo, java";
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
	
		<h1>$pageTitle</h1>
		
		
  <p><strong>Ottawa, Canada - June 22, 2011</strong> - Die Eclipse Foundation freut sich, bekannt geben zu k�nnen, dass der j�hrliche Indigo Release Train f�r 2011 nun verf�gbar ist. 
  Dies ist das achte Jahr in Folge, in dem die Eclipse Community termingerecht ein koordiniertes Release ver�ffentlicht. Indigo steht ab sofort unter <a href="http://www.eclipse.org/downloads">www.eclipse.org/downloads</a> zum Download bereit.</p>

<strong>Wichtigste Zahlen zu Indigo</strong>
<ul>
<li>62 Projekt-Teams haben an Indigo mitgewirkt.
<li>46 Millionen Zeilen Code werden am selben Tag freigegeben (berechnet von Ohloh).
<li>408 Entwickler (Committer) haben Code beigetragen.
<li>49 Organisationen haben an dem Release mitgearbeitet.
<li>zehn vordefinierte Packages vereinfachen Download und Nutzung.
</ul>

<p>H�hepunkte des Indigo Release schlie�en wichtige neue Funktionalit�ten f�r Java-Entwickler, Neuerungen bei der Modellierungs-Technologie und Fortschritte bei der Eclipse Runtime-Technologie mit ein.
</p>

<strong>Wichtigste neue Funktionen f�r Java-Entwickler</strong>
<ul>
<li>EGit 1.0 Release bietet erstklassigen Support f�r Java-Entwickler, die Git f�r das Quellcode-Management verwenden.
<li>WindowBuilder, der hervorragende GUI-Builder auf Eclipse-Basis, ist jetzt als Eclipse-Open-Source-Projekt verf�gbar.
<li>Mit Jubula ist ein automatisiertes GUI-Testtool f�r Java- und HTML-Anwendungen mit eingeschlossen.
<li>m2eclipse sorgt f�r eine straffe Integration mit Maven und dem Eclipse-Workspace, Entwickler k�nnen nun direkt aus Eclipse mit Maven-Projekten arbeiten.
<li>Mylyn 3.6 unterst�tzt Hudson-Build-Monitoring direkt aus dem Eclipse-Workspace.
<li>Eclipse Marketplace Client unterst�tzt jetzt die Drag-and-Drop-Installation von L�sungen auf Eclipse-Basis direkt in Eclipse, was die Installation neuer L�sungen erheblich vereinfacht.
</ul>

<strong>Neuerungen bei der Eclipse-Modellierung</strong>
<ul>
<li>Xtext 2.0 hat wichtige neue Funktionen f�r domainspezifische Sprachen (DSLs) hinzugef�gt: 1) die F�higkeit, DSLs mit eingebetteten Java-�hnlichen Expressions zu erzeugen; 2) Xtend, eine neue Template-Sprache, die eine straffe und integrierte Code-Erzeugung in die Eclipse-Tooling-Umgebung erm�glicht; 3) ein neues Refactoring-Framework f�r DSLs
<li>Acceleo 3.1 integriert die Code-Erzeugung in Ant- und Maven-Build-Chains und bietet eine verbesserte Ausstattung f�r die Bearbeitung von Generatoren.
<li>CDO Model Repository 4.0 integriert mit verschiedenen NoSQL-Datenbanken wie Objectivity/DB, MongoDB und DB4O. Cache-Optimierungen und viele andere Verbesserungen erlauben die Modellierung im Umfang von mehreren Gigabyte.
<li>EMF 2.7 vereinfacht auf optimale Weise die Replizierung von �nderungen in verteilten Systemen: Ein Client kann nun � statt der ganzen, beliebig gro�en, neuen Instanz � eine minimale Beschreibung der Ver�nderung an den Server zur�cksenden.
<li>Eclipse Extended Editing Framework (EEF) 1.0 erzeugt mit einem Klick ausgefeilte und gut aussehende EMF-Editoren.
<li>EMF Compare 1.2 bietet einen dedizierten UML-Support und ist vollst�ndiger mit SCM integriert.
<li>EMF Facet ist ein neues Projekt, das die Erweitung eines bestehenden Ecore-Modells ohne Modifizierung erlaubt.
</ul>


<strong>Weiterentwicklung von EclipseRT</strong>
<ul>
<li>EclipseLink 2.3 unterst�tzt mandantenf�hige JPA-Entities, wodurch SaaS-artige Anwendungen mit JPA-Persistenz ausgestattet werden k�nnen.
<li>Equinox 3.7 implementiert jetzt die OSGi 4.3-Spezifikation, einschlie�lich der Nutzung von generischen Signaturen und Ressourcen und der Ber�cksichtigung von Bundle-Anforderungen.
<li>Eclipse Communication Framework (ECF) implementiert die Standards OSGi 4.2 Remote Service und Remote Service Admin.
<li>Riena 3.0 unterst�tzt jetzt die Erzeugung von Webbrowser-Anwendungen durch die Nutzung von Eclipse RAP.
</ul>

<strong>Zitat zum Release</strong><br>
�Wir sind sehr stolz darauf, wie jedes Jahr p�nktlich einen weiteren Release Train aus der Eclipse Community feiern zu k�nnen�, so Mike Milinkovich, Executive Director der Eclipse Foundation.
 �Dieses Release zeichnet sich durch eine lange Liste neuer Funktionen aus, die besonders f�r Java-Entwickler interessant sind. Funktionen wie Git-Unterst�tzung, Maven- und 
 Hudson-Integration, ein gro�artiger GUI-Builder in WindowBuilder und unser neues Jubula-Testtool werden, da bin ich mir sicher, die Entwickler-Gemeinde dazu veranlassen, Indigo 
 auszuprobieren.�
 

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipse.org/indigo/">Indigo Site</a></li>
				<li><a href="http://eclipse.org/indigo/friends.php">Indigo 500</a></li>
				<li><a href="http://eclipse.org/downloads">Download</a></li>
			</ul>
		</div>
	</div>	
</div>


EOHTML;
	$html = mb_convert_encoding($html, "HTML-ENTITIES", "ISO-8859-1");
	$pageTitle = mb_convert_encoding($pageTitle, "HTML-ENTITIES", "ISO-8859-1");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

