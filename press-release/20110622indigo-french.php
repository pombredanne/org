<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "La sortie simultan�e Eclipse Indigo est maintenant disponible";
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
		
		
  <p><strong>Ottawa, Canada - June 22, 2011</strong> - La fondation Eclipse est heureuse d'annoncer l'arriv�e de Indigo, la sortie simultan�e annuelle pour 2011. Pour la huiti�me ann�e 
  cons�cutive, la communaut� Eclipse a livr� simultan�ment ses projets � l'heure. Indigo est disponible d�s maintenant au t�l�chargement � l'adresse suivante : www.eclipse.org/downloads.
  </p>

<strong>Les chiffres cl�s</strong>
<ul>
<li>62 projets ont particip� � Indigo
<li>46 millions de lignes de code livr�es le m�me jour (calcul� par Ohloh)
<li>408 d�veloppeurs ont contribu� du code
<li>49 organisations ont collabor�
<li>10 packages pr�d�finis (Java, JavaEE, Modeling, etc.) permettent un t�l�chargement et une utilisation simplifi�s
</ul>

<p>Les grandes nouveaut�s de Indigo incluent de nouvelles fonctionnalit�s pour les d�veloppeurs Java, des innovations dans les technologies de mod�lisation, et des avanc�es dans les 
technologies Eclipse Runtime.</p>

<strong>Nouvelles fonctionnalit�s cl�s pour les d�veloppeurs Java</strong>
<ul>
<li>EGit 1.0 fournit le support de premier niveau pour les d�veloppeurs Java se basant sur Git comme outil de gestion de code source.
<li>WindowBuilder, constructeur d'IHM de grande renomm�e bas� sur Eclipse, est maintenant disponible en tant que projet open source Eclipse.
<li>Les tests fonctionnels automatis�s d'IHM pour les applications Java et HTML sont inclus via Jubula.
<li>m2eclipse apporte une forte int�gration avec Maven et le workspace Eclipse permettant aux d�veloppeurs de travailler avec des projets Maven directement � partir d'Eclipse.
<li>Mylyn 3.6 supporte le contr�le des builds Hudson directement � partir du workspace Eclipse.
<li>Eclipse Marketplace Client supporte maintenant les installations en drag-and-drop de solutions, bas�es sur Eclipse, directement dans Eclipse ; facilitant l'installation de nouvelles solutions.
</ul>

<strong>Nouvelles innovations dans Eclipse Modeling</strong>
<ul>
<li>Xtext 2.0 a ajout� de nouvelles fonctionnalit�s pour les DSLs (Domain-specific languages) : 1) possibilit� de cr�er des DSLs avec des expressions � la Java; 2) Xtend, un nouveau langage 
qui permet d'int�grer la g�n�ration de code dans un environnement Eclipse; 3) un nouveau framework de refactoring pour DSLs.
<li>Acceleo 3.1 int�gre la g�n�ration de code dans les cha�nes de build Ant et Maven, et inclut des am�liorations pour l'�dition de g�n�rateur.
<li>CDO Model Repository 4.0 int�gre plusieurs bases de donn�es NoSQL telles que Objectivity/DB, MongoDB, et DB40. Des optimisations de cache et autres am�liorations permettent d'avoir des mod�les de plusieurs gigaoctets.
<li>EMF 2.7 facilite la r�plication des changements � travers les syst�mes distribu�s de fa�on optimis�e : un client peut renvoyer vers le serveur une description minimale des changements plut�t que de renvoyer totalement la nouvelle instance, arbitrairement large.
<li>Eclipse Extended Editing Framework (EEF) 1.0 g�n�re des �diteurs EMF avanc�s et designs en un clic.
<li>EMF Compare 1.2 apporte un support d�di� UML et est compl�tement int�gr� avec les outils de gestion de code source.
<li>EMF Facet, nouveau projet, permet d'�tendre un m�tamod�le Ecore existant sans modification.
</ul>


<strong>Avanc�es EclipseRT</strong>
<ul>
<li>EclipseLink 2.3 supporte les entit�s JPA ��multi-tenant��, rendant possible d'incorporer la persistance JPA dans des applications de type Saas.
<li>Equinox 3.7 impl�mente maintenant les sp�cifications OSGi 4.3, incluant l'utilisation de signatures g�n�riques, capabilities g�n�riques, et requirements pour les bundles.
<li>Eclipse Communication Framework (ECF) impl�mente les standard Remote Service et Remote Service Admin OSGi 4.2.
<li>Riena 3.0 supporte maintenant la cr�ation d'applications de navigateur web en utilisant Eclipse RAP.
</ul>

<strong>Le mot du directeur</strong><br>
�Nous sommes tr�s fiers de c�l�brer une nouvelle sortie simultan�e annuelle de la communaut� Eclipse� d�clare Mike Milinkovich, directeur ex�cutif de la fondation Eclipse. 
�Cette sortie a une longue liste de nouvelles fonctionnalit�s, en particulier pour les d�veloppeurs Java. Des fonctionnalit�s comme le support de Git, l'int�gration de Maven et Hudson, un 
constructeur d'IHM avec WindowBuilder, et notre nouvel outil de test Jubula, j'en suis certain, motivent les d�veloppeurs d'essayer Indigo.�
 

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


