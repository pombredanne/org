<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Neue-Open-Source-Initiative für Automotive Software-Entwicklungswerkzeuge";
	$pageKeywords	= "elipse, automotive, autosar";
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
		
		<br>
  <p><strong>Ottawa, Canada - July 20, 2011</strong> - Die Eclipse Fundation freut sich, die Entstehung einer neuen Open-Source-Initiative zur Definition und Implementierung einer Standardplattform für Software-Entwicklungswerkzeuge, welche in der Automobilindustrie benutzt werden, bekannt geben zu können. Der Fahrzeughersteller BMW, die Zulieferer Robert Bosch GmbH und Continental AG und das strategische Eclipse Mitglied itemis AG sind Gründungsmitglieder der Initiative, die als eine "Eclipse Industry Working Group" tätig sein wird. Die neue "Eclipse Automotive Industry Group" wird offen für neue Mitgliederorganisationen sein, die sich an der Etablierung einer Standard-Werkzeugplattform für die Automobil-Lieferkette beteiligen möchten.</p>

  <p>Innovationen in der Automobilindustrie werden hauptsächlich durch elektronische Bauteile und Software erzielt. Das Automobil als System wird zunehmend komplexer, für die Automobilindustrie wird eine offene und gemeinsame Entwicklungsplattform entlang der kompletten Lieferkette immer wichtiger. Verbesserungen und Innovationen dieser Software Entwicklungswerkzeuge sind erforderlich, um die Produktentwicklungen zu beschleunigen, hohe Qualität der Software Funktionen zu erzeugen und die Integration über die komplette Automobil Lieferkette zu verbessern.</p>

  <p>"BMW verwendet Standards, wie zum Beispiel AUTOSAR, Flexray oder Genivi in der Automobil Softwareentwicklung. Es ist eine notwendige Voraussetzung für BMW, dass die Entwicklungswerkzeuge diese Standards unterstützen. Wir glauben, dass Eclipse-basierte Werkzeuge ein effizienter Weg sind, um Lücken in der Werkzeugkette zu reduzieren. Es könnte sehr hilfreich sein, wenn Eclipse-basierte Werkzeuge nicht nur als eigenständige Werkzeuge, sondern auch als integrierte Komponenten in einer größeren Umgebung benutzt werden können. Die Interoperabilität zwischen den verschiedenen Eclipse plug-ins von Werkzeugherstellern kann den Entwicklungsprozess beschleunigen."
"Eclipse ist ein de-facto Standard im Bereich der Software-Entwicklungswerkzeuge (zum Beispiel ARTOP) und als integrierte Entwicklungsumgebung um Software für das Automobil zu entwickeln. Eine aufeinander abgestimmte Eclipse-Distribution ist von allen EAIWG Mitgliedern beschlossen worden. Aus diesem Grund ist die zukünftige Teilname von Werkzeugherstellern in der EAIWG absolut erforderlich. Eine gemeinsame Plattform kann interne Kosten reduzieren und unternehmensübergreifende Entwicklungsprozesse beschleunigen. BMW wird die von der Working Group entwickelte Eclipse Plattform als strategische Entwicklungsumgebung benutzen."
</p>

<p>"Eine Standard Plattform für Automobil Werkzeuge zu erstellen, wird uns helfen Neuerungen schneller einzuführen, ohne Qualitätseinbußen hinnehmen zu müssen," erklärt Harald Mackamul, Senior Expert, Corporate Sector Research und Advance Engineering, Robert Bosch GmbH." Die Zusammenarbeit in einer Open Source Gemeinschaft ermöglicht uns, Kosten und best-practices mit anderen Unternehmen aus der Automobilindustrie zu teilen und gemeinsam neue Werkzeuge herzustellen. Wir sehen diese offene Form des Innovierens als die Zukunft unserer Strategie für Softwarewerkzeuge."</p>

<p>"Während wir Kräfte bündeln, um die Plattform die wir brauchen zu erstellen, bieten wir unseren Werkzeugherstellern eine Plattform an, um ihre Produkte nahtlos in unsere Werkzeuglandschaft zu integrieren. Zusätzlich ermöglicht uns die Eclipse Public License die Plattform nach unseren Bedürfnissen zu verändern und zu erweitern!" sagt Ignacio Garro, Head of IT PLM Systems and Software bei Continental Automotive.</p>

<p>Die Automotive Arbeitsgruppe wird im Rahmen der auf Software Entwicklungswerkzeuge und Laufzeit spezialisierten Eclipse Foundation arbeiten. Die "Eclipse Industry Working Groups" erlauben Organisationen an der Entwicklung von neuen technologischen Innovationen mitzuwirken. Die Ergebnisse der Arbeitsgruppe werden unter der geschäftsfreundlichen Eclipse Public License (EPL) veröffentlicht.
</p>


	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/Auto_IWG">Automotive IWG</a></li>
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

