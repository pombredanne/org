<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse presenta su tren de lanzamiento anual";
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
		.paddedlist {margin-left:10px;margin-top:-10px;}
		.paddedlist li {padding-bottom:3px; }
		p {padding-bottom:10px;}
		</style>
<div id="widecontent">
	<div id="midcolumnwide">
		<h2>Press Release</h2>

		<center>
		<h1><?=$pageTitle?></h1>
		</center>
		<h2>Ganymede Release abarca 23 equipos de proyectos y 18 millones de líneas de código</h2>
		
		<p><strong>OTTAWA, Canadá - June 25, 2008  - </strong>    La Eclipse Foundation y toda la comunidad Eclipse se complacen al anunciar la disponibilidad de Ganymede Release, el tren de lanzamiento anual desarrollado por la comunidad Eclipse. Ganymede Release es un lanzamiento coordinado de 23 equipos de proyectos de Eclipse y representa más de 18 millones líneas de código. </p>
		<p>Ganymede ofrece mejoras y funciones claves en las siguientes áreas: </p>
		<p>
			<ul class="paddedlist">
				<li>Equinox y proyectos de tiempo de ejecución </li>
				<li>Funciones de modelado </li>
				<li>Herramientas del desarrollador </li>
				<li>Asistencia para SOA</li>
			</ul>
		</p>  
		<p><strong>Disponibilidad</strong><br/>
			Los proyectos en Ganymede Release ya se pueden descargar. Se han creado siete paquetes Eclipse para facilitar a los desarrolladores la descarga de múltiples proyectos. Visite <a href="http://www.eclipse.org/ganymede">http://www.eclipse.org/ganymede</a> para más información. 
		</p>
		
		<p><strong>Comentarios adicionales</strong><br/>
		 "Una vez más la comunidad Eclipse ha ofrecido nuestro tren de lanzamiento anual y continúa ofreciendo un software innovador de una marca previsible", dijo Mike Milinkovich, director ejecutivo de la Eclipse Foundation. "Nuevas funciones como el sistema de aprovisionamiento Equinox p2, nuevas herramientas de modelado y herramientas que asisten a los desarrolladores de SOA serán funciones populares para los usuarios de Eclipse". <br/>
		 <br/>
		 Ganymede Release será el principal tema de la Eclipse Summit Europe (<a href="http://www.eclipsesummit.org/summiteurope2008/">http://www.eclipsesummit.org/summiteurope2008/</a>), que se celebrará del 19 al 20 de noviembre de 2008, en Ludwigsburg, Alemania.
		</p>
		
		<p><strong>Acerca de Eclipse Foundation</strong><br />
		Información sobre Eclipse en <a href="http://www.eclipse.org/">www.eclipse.org</a></p>
		<br />
		<center># # #</center> 
		<br />Todos los nombres de compañías y productos y marcas de servicio pueden ser marcas comerciales o marcas comerciales y registradas de sus respectivas compañías. 
		
		<p><b>Contacto de prensa:</b><br>
		Chantal Yang<br>
		Page One Public Relations<br>
		+1-650-565-9800 x752.<br>
		<a href="mailto:chantal@pageonepr.com">chantal@pageonepr.com</a><br>
		<br>
	</div>
</div>


<? 
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

