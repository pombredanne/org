<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Planned Down Time for Eclipse.org on Feb. 9";
	$pageKeywords	= "";
	$pageAuthor		= "Ian Skerrett";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
<br>
<p>On Saturday, February 9, 2013 the Eclipse Foundation will be moving its servers to a new data centre.  This modern facility will provide improved server 
cooling, substantial increases to our bandwidth, available AC power and cabinet (rack) space while reducing our hosting costs.  During the move, all 
eclipse.org services will be offline, including Bugzilla, Wiki, Git, Gerrit and our website, www.eclipse.org.  Our plans are to begin the move on Saturday 
morning (Eastern time), February 9, 2013 and have all services restored by Sunday afternoon, February 10, 2013. </p>

<p>We'd like to apologize in advance for the inconveniences that this move will cause.  However, the benefits are compelling and will provide the Eclipse 
Foundation with the infrastructure needed to continue its growth for many years to come.</p>

<p>If you have any questions or concerns, please contact <a href="mailto:webmaster@eclipse.org">webmaster@eclipse.org</a></p>



	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->

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

