
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Last Chance to Register for Eclipse Modeling and EclipseRT Days";
	$pageKeywords	= "eclipse, eclipsert, modeling";
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
		<h2>Community Bulletin</h2>
		
		<p>The Eclipse Foundation is organizing a series of events called the <a href="http://wiki.eclipse.org/Eclipse_Modeling_Day">Eclipse Modeling Days</a> 
		and <a href="http://wiki.eclipse.org/EclipseRT_Day">EclipseRT Days</a> in New York City (Nov16), Austin (Nov. 17) 
		and Toronto (Nov 18&19).  These one-day events provide in-depth technical presentations about the Eclipse Modeling and Eclipse Runtime projects.</p> 
		
		<p>There is no cost to attend but you need to pre-register.  The deadline to pre-register is as follows:
			<ul>
				<li>EclipseRT Day in Austin on Nov. 17 - <strong>Deadline is November 11</strong></li>
				<li>Eclipse Modeling Day in New York City on Nov 16 - <strong>Deadline is November 12</strong></li>
				<li>Eclipse Modeling and RT Day in Toronto on Nov 18 & 19 - <strong>Deadline is November 13</strong></li>
				</ul>
		</p>
		<p>Detailed agendas and registration information is available at the <a href="http://wiki.eclipse.org/EclipseRT_Day">EclipseRT Days</a> and 
		<a href="http://wiki.eclipse.org/Eclipse_Modeling_Day">Eclipse Modeling Days</a> web sites.</p>
 

 	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>



