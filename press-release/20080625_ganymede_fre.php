<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse met en �uvre sa strat�gie annuelle de lancement";
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
		<h2>Le lancement Ganymede comprend 23 �quipes de projet et 18 millions de lignes de code</h2>
		
		<p><strong>OTTAWA, Canada, juin 25, 2008  - </strong> La Fondation Eclipse et l�ensemble de la communaut� Eclipse sont heureux d�annoncer le lancement Ganymede, la strat�gie annuelle de lancement d�velopp�e par la communaut� Eclipse. Ganymede est un lancement coordonn� de 23 �quipes de projet Eclipse diff�rentes qui repr�sente plus de 18 millions de lignes de code.</p>
		<p>Ganymede propose des am�liorations et des caract�ristiques cl�s dans les secteurs suivants :
			<ul class="paddedlist">
				<li>Projets Equinox et Runtime</li>
				<li>Caract�ristiques de mod�lisation</li>
				<li>Outils de d�veloppement</li>
				<li>Soutien pour l�architecture ax�e sur les services  </li>
			</ul>
		</p>  
		<p><strong>Disponibilit�</strong><br/>
		    Les projets du lancement Ganymede peuvent d�sormais �tre t�l�charg�s. Sept forfaits Eclipse ont �t� cr��s afin de permettre aux d�veloppeurs de t�l�charger plus facilement des projets multiples. Pour de plus amples renseignements, veuillez consulter le <a href="http://www.eclipse.org/ganymede">http://www.eclipse.org/ganymede</a>.
		</p>
		<p><strong>Citations � l�appui</strong><br/>
			"Une fois de plus, la communaut� Eclipse a mis en �uvre sa strat�gie annuelle de lancement et continue � offrir des logiciels novateurs de mani�re pr�visible", a d�clar� Mike Milinkovich, directeur g�n�ral de la Fondation Eclipse. "Les nouvelles caract�ristiques, comme le syst�me d�approvisionnement Equinox p2, les nouveaux outils de mod�lisation et les outils destin�s aux d�veloppeurs d�architecture ax�e sur les services, seront populaires aupr�s des utilisateurs d�Eclipse."
		</p>
		<p>    Le lancement Ganymede figurera parmi les principaux sujets abord�s lors du Eclipse Summit Europe (<a href="http://www.eclipsesummit.org/summiteurope2008">http://www.eclipsesummit.org/summiteurope2008</a>), qui aura lieu les 19 et 20 novembre 2008 � Ludwigsburg, en Allemagne.
		</p>	 
		
		<p><strong>� propos de la Fondation Eclipse</strong><br />
		Des renseignements au sujet d�Eclipse sont disponibles au <a href="http://www.eclipse.org/">www.eclipse.org</a></p>
		<br />
		<center># # #</center> 
		<br />Tous les noms de produits/soci�t�s et les marques de service peuvent �tre des marques de commerce ou des marques de commerce enregistr�es de leurs soci�t�s respectives.
		
		<p><b>Contact pour les m�dias:</b><br>
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

