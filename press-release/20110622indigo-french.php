<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "La sortie simultanée Eclipse Indigo est maintenant disponible";
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
		
		
  <p><strong>Ottawa, Canada - June 22, 2011</strong> - La fondation Eclipse est heureuse d'annoncer l'arrivée de Indigo, la sortie simultanée annuelle pour 2011. Pour la huitième année 
  consécutive, la communauté Eclipse a livré simultanément ses projets à l'heure. Indigo est disponible dès maintenant au téléchargement à l'adresse suivante : www.eclipse.org/downloads.
  </p>

<strong>Les chiffres clés</strong>
<ul>
<li>62 projets ont participé à Indigo
<li>46 millions de lignes de code livrées le même jour (calculé par Ohloh)
<li>408 développeurs ont contribué du code
<li>49 organisations ont collaboré
<li>10 packages prédéfinis (Java, JavaEE, Modeling, etc.) permettent un téléchargement et une utilisation simplifiés
</ul>

<p>Les grandes nouveautés de Indigo incluent de nouvelles fonctionnalités pour les développeurs Java, des innovations dans les technologies de modélisation, et des avancées dans les 
technologies Eclipse Runtime.</p>

<strong>Nouvelles fonctionnalités clés pour les développeurs Java</strong>
<ul>
<li>EGit 1.0 fournit le support de premier niveau pour les développeurs Java se basant sur Git comme outil de gestion de code source.
<li>WindowBuilder, constructeur d'IHM de grande renommée basé sur Eclipse, est maintenant disponible en tant que projet open source Eclipse.
<li>Les tests fonctionnels automatisés d'IHM pour les applications Java et HTML sont inclus via Jubula.
<li>m2eclipse apporte une forte intégration avec Maven et le workspace Eclipse permettant aux développeurs de travailler avec des projets Maven directement à partir d'Eclipse.
<li>Mylyn 3.6 supporte le contrôle des builds Hudson directement à partir du workspace Eclipse.
<li>Eclipse Marketplace Client supporte maintenant les installations en drag-and-drop de solutions, basées sur Eclipse, directement dans Eclipse ; facilitant l'installation de nouvelles solutions.
</ul>

<strong>Nouvelles innovations dans Eclipse Modeling</strong>
<ul>
<li>Xtext 2.0 a ajouté de nouvelles fonctionnalités pour les DSLs (Domain-specific languages) : 1) possibilité de créer des DSLs avec des expressions à la Java; 2) Xtend, un nouveau langage 
qui permet d'intégrer la génération de code dans un environnement Eclipse; 3) un nouveau framework de refactoring pour DSLs.
<li>Acceleo 3.1 intègre la génération de code dans les chaînes de build Ant et Maven, et inclut des améliorations pour l'édition de générateur.
<li>CDO Model Repository 4.0 intègre plusieurs bases de données NoSQL telles que Objectivity/DB, MongoDB, et DB40. Des optimisations de cache et autres améliorations permettent d'avoir des modèles de plusieurs gigaoctets.
<li>EMF 2.7 facilite la réplication des changements à travers les systèmes distribués de façon optimisée : un client peut renvoyer vers le serveur une description minimale des changements plutôt que de renvoyer totalement la nouvelle instance, arbitrairement large.
<li>Eclipse Extended Editing Framework (EEF) 1.0 génère des éditeurs EMF avancés et designs en un clic.
<li>EMF Compare 1.2 apporte un support dédié UML et est complétement intégré avec les outils de gestion de code source.
<li>EMF Facet, nouveau projet, permet d'étendre un métamodèle Ecore existant sans modification.
</ul>


<strong>Avancées EclipseRT</strong>
<ul>
<li>EclipseLink 2.3 supporte les entités JPA « multi-tenant », rendant possible d'incorporer la persistance JPA dans des applications de type Saas.
<li>Equinox 3.7 implémente maintenant les spécifications OSGi 4.3, incluant l'utilisation de signatures génériques, capabilities génériques, et requirements pour les bundles.
<li>Eclipse Communication Framework (ECF) implémente les standard Remote Service et Remote Service Admin OSGi 4.2.
<li>Riena 3.0 supporte maintenant la création d'applications de navigateur web en utilisant Eclipse RAP.
</ul>

<strong>Le mot du directeur</strong><br>
“Nous sommes très fiers de célébrer une nouvelle sortie simultanée annuelle de la communauté Eclipse” déclare Mike Milinkovich, directeur exécutif de la fondation Eclipse. 
“Cette sortie a une longue liste de nouvelles fonctionnalités, en particulier pour les développeurs Java. Des fonctionnalités comme le support de Git, l'intégration de Maven et Hudson, un 
constructeur d'IHM avec WindowBuilder, et notre nouvel outil de test Jubula, j'en suis certain, motivent les développeurs d'essayer Indigo.”
 

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
	$html = mb_convert_encoding($html, "HTML-ENTITIES", "auto");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


