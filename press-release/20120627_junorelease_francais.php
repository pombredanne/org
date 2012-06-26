<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "La sortie simultan�e Eclipse Juno est maintenant disponible";
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
<p><strong>Ottawa,Canada - June 27, 2012</strong> - Ottawa, Canada � 27 Juin, 2012 � Comme le veut la tradition de fin Juin, la communaut� 
Eclipse c�l�bre la sortie simultan�e d�Eclipse qui cette ann�e se nomme Juno. Pour la 9�me ann�e cons�cutive la communaut� a men� � bon port 
cette version, toujours de plus en plus importante. Juno repr�sente le travail de 72 �quipes de projets impliquant 445 committers sur 55 millions de
lignes de code, et la participation de plus de 40 organismes membres de la fondation Eclipse.</p>

<p>Pour cette sortie la taille rend difficile le listing exhaustif des nouvelles fonctionnalit�s, mais voici quelques-unes des principales :
<ul>
<li><a href="http://www.eclipse.org/eclipse4/">Eclipse 4.2</a> est maintenant la plateforme de r�f�rence pour la communaut� 
Eclipse. La plateforme Eclipse 3.X passe en mode maintenance. Eclipse 4.2 inclut une couche de compatibilit� qui permet aux plugins Eclipse 
et applications RCP existants de fonctionner sur la nouvelle plateforme.
<li><a href="http://www.eclipse.org/recommenders/">Code Recommenders</a> est un nouveau projet qui rend la compl�tion de code plus 
intelligente. Code Recommenders analyse comment les applications utilisent des API Java sp�cifiques pour d�velopper une base de donn�es de 
bonnes pratiques. Ensuite il fournit des conseils pertinents au d�veloppeur essayant de construire des applications utilisant ces API Java. 
Comme Amazon vous recommande des achats, Code Recommenders recommande une bonne utilisation d�API.
<li>Eclipse <a href="http://www.eclipse.org/virgo/">Virgo</a> embarque le nouveau noyau Nano qui fournit la possibilit� de construire de tr�s petites applications web bas�es sur OSGi.
<li>Le nouveau  <a href="http://www.eclipse.org/koneki/">projet Koneki</a> fournit un IDE pour Lua. Lua est un 
langage de script, pouvant �tre embarqu�, populaire dans l�industrie du jeu et de plus en plus utilis� dans l�industrie M2M. Koneki est une 
part importante de l�initiative autour de l�Industry Working Group M2M.
<li><a href="http://www.eclipse.org/Xtext/">Xtext</a> a ajout� le support pour le d�bogage int�gr� de DSLs bas�s sur des JVM utilisant Xtext, et une plus fine int�gration avec le Java Development Tools (JDT).
<li>Eclipse <a href="http://www.eclipse.org/equinox/">Equinox</a> embarque l�impl�mentation de r�f�rence des nouvelles sp�cifications OSGi R5.
<li>Deux nouveaux packages ont �t� ajout�s : 1) Un IDE Eclipse pour D�veloppeur de Logiciel Automobile contenant les outils et les 
frameworks n�cessaires pour le d�veloppement de logiciels automobiles embarqu�s. Il est le r�sultat d�un travail compl�t� par l�Eclipse 
Automotive Industry Working Group. 2) Eclipse for Mobile Developers simplifie, pour les d�veloppeurs, le t�l�chargement et l�utilisation 
d�Eclipse avec nombre de SDK mobiles, incluant le SDK Android.
</ul>
</p>
<p>� Chaque ann�e l�engagement et le d�vouement des committers Eclipse d�montrent qu�Eclipse est un exemple r�ussi de d�veloppement Open 
Source distribu� qui livre r�guli�rement plusieurs dizaines de millions de lignes de code � l�heure pr�vue � explique Mike Milinkovich, 
Directeur Ex�cutif de la fondation Eclipse. � Je suis particuli�rement heureux que Juno soit bas� sur la plateforme Eclipse 4.2, fournissant 
ainsi une plateforme stable pour faire perdurer l�innovation dans la communaut� Eclipse. �</p>
<p>Plus d�informations sur Juno, ses projets, et les t�l�chargements sont disponibles � l�adresse suivante : <a href="http://eclipse.org/juno/">eclipse.org/juno</a>.</p>

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

