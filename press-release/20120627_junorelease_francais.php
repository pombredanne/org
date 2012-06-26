<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "La sortie simultanée Eclipse Juno est maintenant disponible";
	$pageKeywords	= "eclipse, release, open source, Juno";
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
		#midcolumn ul ul{padding-bottom:0px;}
	</style>
	
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
<br>
<p><strong>Ottawa,Canada - June 27, 2012</strong> - Ottawa, Canada – 27 Juin, 2012 – Comme le veut la tradition de fin Juin, la communauté 
Eclipse célèbre la sortie simultanée d’Eclipse qui cette année se nomme Juno. Pour la 9ème année consécutive la communauté a mené à bon port 
cette version, toujours de plus en plus importante. Juno représente le travail de 72 équipes de projets impliquant 445 committers sur 55 millions de
lignes de code, et la participation de plus de 40 organismes membres de la fondation Eclipse.</p>

<p>Pour cette sortie la taille rend difficile le listing exhaustif des nouvelles fonctionnalités, mais voici quelques-unes des principales :
<ul>
<li><a href="http://www.eclipse.org/eclipse4/">Eclipse 4.2</a> est maintenant la plateforme de référence pour la communauté 
Eclipse. La plateforme Eclipse 3.X passe en mode maintenance. Eclipse 4.2 inclut une couche de compatibilité qui permet aux plugins Eclipse 
et applications RCP existants de fonctionner sur la nouvelle plateforme.
<li><a href="http://www.eclipse.org/recommenders/">Code Recommenders</a> est un nouveau projet qui rend la complétion de code plus 
intelligente. Code Recommenders analyse comment les applications utilisent des API Java spécifiques pour développer une base de données de 
bonnes pratiques. Ensuite il fournit des conseils pertinents au développeur essayant de construire des applications utilisant ces API Java. 
Comme Amazon vous recommande des achats, Code Recommenders recommande une bonne utilisation d’API.
<li>Eclipse <a href="http://www.eclipse.org/virgo/">Virgo</a> embarque le nouveau noyau Nano qui fournit la possibilité de construire de très petites applications web basées sur OSGi.
<li>Le nouveau  <a href="http://www.eclipse.org/koneki/">projet Koneki</a> fournit un IDE pour Lua. Lua est un 
langage de script, pouvant être embarqué, populaire dans l’industrie du jeu et de plus en plus utilisé dans l’industrie M2M. Koneki est une 
part importante de l’initiative autour de l’Industry Working Group M2M.
<li><a href="http://www.eclipse.org/Xtext/">Xtext</a> a ajouté le support pour le débogage intégré de DSLs basés sur des JVM utilisant Xtext, et une plus fine intégration avec le Java Development Tools (JDT).
<li>Eclipse <a href="http://www.eclipse.org/equinox/">Equinox</a> embarque l’implémentation de référence des nouvelles spécifications OSGi R5.
<li>Deux nouveaux packages ont été ajoutés : 1) Un IDE Eclipse pour Développeur de Logiciel Automobile contenant les outils et les 
frameworks nécessaires pour le développement de logiciels automobiles embarqués. Il est le résultat d’un travail complété par l’Eclipse 
Automotive Industry Working Group. 2) Eclipse for Mobile Developers simplifie, pour les développeurs, le téléchargement et l’utilisation 
d’Eclipse avec nombre de SDK mobiles, incluant le SDK Android.
</ul>
</p>
<p>« Chaque année l’engagement et le dévouement des committers Eclipse démontrent qu’Eclipse est un exemple réussi de développement Open 
Source distribué qui livre régulièrement plusieurs dizaines de millions de lignes de code à l’heure prévue » explique Mike Milinkovich, 
Directeur Exécutif de la fondation Eclipse. « Je suis particulièrement heureux que Juno soit basé sur la plateforme Eclipse 4.2, fournissant 
ainsi une plateforme stable pour faire perdurer l’innovation dans la communauté Eclipse. »</p>
<p>Plus d’informations sur Juno, ses projets, et les téléchargements sont disponibles à l’adresse suivante : <a href="http://eclipse.org/juno/">eclipse.org/juno</a>.</p>

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipse.org/juno/">Juno</a></li>
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
<?php
/*
 * Created on 20-Jan-2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>

