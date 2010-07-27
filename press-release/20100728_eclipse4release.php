
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse SDK 4.0 Now Available for Early Adopters";
	$pageKeywords	= "eclipse, e4, eclipse 4.0";
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
	<div id="fullcolumn">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>
		
      	<p>OTTAWA, Canada - July 28, 2010 - The Eclipse Foundation is pleased to announce the availability of Eclipse SDK 4.0, the next generation Eclipse platform.  Eclipse has a very large and successful ecosystem of 
      	plugin providers and RCP application developers.  Eclipse 4.0 introduces new features that make it easier for the members of the ecosystem to build and assemble Eclipse plugins and RCP applications.  </p>  
      	
		<p>Some of the new features introduced in Eclipse 4.0 include:
			<ul>
			<li>A model-based user interface to specifying the widgets in an application's user interface.  This provides the developer a lot more flexibility to design a modern looking UI and remove the 'IDE-ness' that was often introduced into RCP applications.
			<li>A new CSS-based declarative mechanism for application styling allows you to change the skin of an application with CSS style sheets.
			<li>A new services-oriented programming model makes it easier to use the services provided by the Eclipse platform.  
			</ul>
		</p>
		
		<p>Eclipse 4.0 is for early adopters of Eclipse technology.  It is highly recommended that plug-in and RCP developers should begin to migrate their existing solutions to the 4.0 platform.   Full binary 
		compatibility with API from previous platform releases makes the migration process as simple as possible.		</p>
		
		<p>Users of Eclipse tools, such as the Eclipse Java IDE (JDT) or Eclipse Web Tools, are not expected to benefit from migrating to Eclipse 4.0 at this time.  Users will benefit from the new user interface 
		improvements in Eclipse 4.0 but they will need to wait for the value-add tools and plugins provided by other Eclipse Foundation projects and the broader ecosystem to migrate to the 4.0 platform.</p>

		<p>The Eclipse e4 incubation project is also releasing several new technologies to support the adoption of Eclipse 4.0, including:
		<ul>
			<li>The XWT declarative UI design tool.
			<li>Tools to help create model-based user interfaces.
			<li>Semantic file system: a mechanism for connecting the platform resource model to remote resources exposed via REST-style APIs.
			<li>Support for integrating JavaScript and OpenSocial-based views in a rich client.
		</ul>
		</p>
		
		<p>More information about Eclipse 4.0, including the download, can be found at <a href="http://www.eclipse.org/eclipse4">eclipse.org/eclipse4</a>.  The Eclipse e4 incubation projects can be downloaded from a p2 update sites located at <insert url>.
		
				
      	
      	<b>About the Eclipse Foundation</b>
		<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at eclipse.org </p>
 	<br><br>
	</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

