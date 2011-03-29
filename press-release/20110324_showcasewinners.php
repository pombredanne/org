<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Hot New Product Showcase Winner";
	$pageKeywords	= "eclipse foundation, awards, community, winners, 2011";
	$pageAuthor		= "Donald Smith";
	
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
		
		<p>
			<b>Santa Clara, CA - March 24, 2011</b> - The Eclipse Foundation congratulates 
			<a href="http://www.chrononsystems.com/">Chronon Systems</a>, 
			the winner of
			the first <a href="http://www.eclipsecon.org/2011/sessions/?page=sessions&id=2383">
			"Eclipse Hot New Products Showcase"</a>, held during EclipseCon 2011.
			
		Facing twenty <a href="http://www.eclipsecon.org/2011/sessions/?page=sessions&id=2383">
		other competitors, </a> Chronon won with their
		<a href="http://www.chrononsystems.com/">"Time Travelling Debugger"</a>.
		</p>

		<p>"We are super excited to get this award from the Eclipse community", noted 
		Chronon Systems CTO Prashant Deva, "It is validation of many year’s hard work.  Eclipse provided 
		us a great platform to build our unique technology." 
		</p>
		<p>
			The new product showcase award is awarded to the hottest 
			Eclipse-based product built or released in the last year.  Honorable mentions go
			to the new <a href="http://eclipsesource.com/en/yoxos/yoxos-5/">Yoxos Launcher from EclipseSource</a>
			and <a href="http://wiki.eclipse.org/Reviews/R4E/User_Guide">Review4Eclipse (demoed by Ericsson)</a>.
		</p>
		
		
		<p>All company/product names and service marks may be trademarks or registered trademarks of
		their respective companies.
		</p>
							
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Awards Navigation</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community Awards</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/pastwinners.php">Past Winners</a></li>
			</ul>
		</div>
	</div>
	
</div>

EOHTML;


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

