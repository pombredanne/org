<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse met en œuvre sa stratégie annuelle de lancement";
$pageKeywords	= "eclipse, embedded, ESC, mobile";
$pageAuthor		= "Ian Skerrett";

# Add page-specific Nav bars here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
# $Nav->addCustomNav("My Link", "mypage.php", "_self");
# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

# End: page-specific settings
#

# Paste your HTML content between the EOHTML markers!
ob_start();
?>
		<style>
		.paddedlist {margin-left:20px;margin-top:-10px;}
		.paddedlist li {padding-bottom:3px; }
		p {padding-bottom:10px;}
		</style>
<div id="widecontent">
	<div id="midcolumnwide">
		<h2>Press Release</h2>

		<center>
		<h1><?=$pageTitle?></h1>
		</center>
		<h2>Le lancement Ganymede comprend 23 équipes de projet et 18 millions de lignes de code</h2>
		
		<p><strong>OTTAWA, Canada, juin 25, 2008  - </strong> La Fondation Eclipse et l’ensemble de la communauté Eclipse sont heureux d’annoncer le lancement Ganymede, la stratégie annuelle de lancement développée par la communauté Eclipse. Ganymede est un lancement coordonné de 23 équipes de projet Eclipse différentes qui représente plus de 18 millions de lignes de code.</p>
		<p>Ganymede propose des améliorations et des caractéristiques clés dans les secteurs suivants :
			<ul class="paddedlist">
				<li>Projets Equinox et Runtime</li>
				<li>Caractéristiques de modélisation</li>
				<li>Outils de développement</li>
				<li>Soutien pour l’architecture axée sur les services  </li>
			</ul>
		</p>  
		<p><strong>Disponibilité</strong><br/>
		    Les projets du lancement Ganymede peuvent désormais être téléchargés. Sept forfaits Eclipse ont été créés afin de permettre aux développeurs de télécharger plus facilement des projets multiples. Pour de plus amples renseignements, veuillez consulter le <a href="http://www.eclipse.org/ganymede">http://www.eclipse.org/ganymede</a>.
		</p>
		<p><strong>Citations à l’appui</strong><br/>
			"Une fois de plus, la communauté Eclipse a mis en œuvre sa stratégie annuelle de lancement et continue à offrir des logiciels novateurs de manière prévisible", a déclaré Mike Milinkovich, directeur général de la Fondation Eclipse. "Les nouvelles caractéristiques, comme le système d’approvisionnement Equinox p2, les nouveaux outils de modélisation et les outils destinés aux développeurs d’architecture axée sur les services, seront populaires auprès des utilisateurs d’Eclipse."
		</p>
		<p>    Le lancement Ganymede figurera parmi les principaux sujets abordés lors du Eclipse Summit Europe (<a href="http://www.eclipsesummit.org/summiteurope2008">http://www.eclipsesummit.org/summiteurope2008</a>), qui aura lieu les 19 et 20 novembre 2008 à Ludwigsburg, en Allemagne.
		</p>	 
		
		<p><strong>À propos de la Fondation Eclipse</strong><br />
		Des renseignements au sujet d’Eclipse sont disponibles au <a href="http://www.eclipse.org/">www.eclipse.org</a></p>
		<br />
		<center># # #</center> 
		<br />Tous les noms de produits/sociétés et les marques de service peuvent être des marques de commerce ou des marques de commerce enregistrées de leurs sociétés respectives.
		
		<p><b>Contact pour les médias:</b><br>
		Chantal Yang<br>
		Page One Public Relations<br>
		+1-650-565-9800, poste 752<br>
		<a href="mailto:chantal@pageonepr.com">chantal@pageonepr.com</a><br>
		<br>
	</div>
</div>


<? 
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

