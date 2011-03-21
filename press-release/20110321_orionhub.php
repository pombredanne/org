<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Launches Open Beta of OrionHub";
	$pageKeywords	= "elipse, orion, javascript, html";
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

	<h1>Eclipse Foundation Launches Open Beta of OrionHub</h1>
<br>


	<p><strong>EclipseCon 2011, Santa Clara, CA - March 21, 2011 </strong>- The Eclipse Foundation is pleased to announce that developers 
	may now sign-up for access to a beta version of the OrionHub service, a hosted implementation of <a href="http://www.eclipse.org/orion">Orion</a>. Orion is a new 
	Eclipse initiative to define a platform for building and integrating web development tools. An early release of Orion provides web 
	developers with an editor for JavaScript, HTML and CSS that runs in popular browsers and the ability to easily link with popular 
	web-based tools. The OrionHub service provided by the Eclipse Foundation will allow developers to experiment with Orion and provide 
	feedback to the Orion open source community.</p>

	<p>More and more applications are being moved to the web and cloud infrastructure.  A key question is how software development tools 
	will move from the desktop to support a web-focused development workflow. Orion moves software development to the web, as a web 
	experience. It implements the workflows required by web developers building open web applications - workflows that dramatically 
	different from those implemented by existing desktop-based IDEs. Orion enables the creation and integration of browser-based tools 
	for open web development that are both powerful and flexible.</p>

	<p>Orion will be an open source project at the Eclipse Foundation. An important goal of this open beta is to reach out to the web 
	developer community to solicit feedback and input into the future directions of Orion. The first Orion Planning Summit was held 
	March 17-18 in Palo Alto to establish the scope and roadmap of the Orion project.</p>

	<p>Some key features of Orion include:<br>
	<ul>
	<li>A very fast, scalable and responsive editor for JavaScript, HTML and CSS development.  </li>
	<li>A new client-side plugin architecture, using HTML5, that allows tools written in JavaScript to be integrated into the Orion 
	client. Examples of existing integrations include JSLint and jsbeautify. </li>
	<li>Orion is supported in Google Chrome, Mozilla Firefox 3.6 & 4.0, Microsoft IE 8 & 9 and Safari 5.  The Orion client is written in 
	JavaScript and provides full integration with browser capabilities such as tabs, bookmarks, url sharing, etc.  </li>  
	<li>Initial integration with git provides local history for Orion projects.   A new git comparison tools allows for easy identification 
	of changes.   Future support for git commands (fetch, tag, logo) will be added.</li>
	</ul>
	</p>

	<p>'Orion is an exciting new initiative for the Eclipse community,' explains Mike Milinkovich, Executive Director of the Eclipse 
	Foundation.  'It is still very early days but I expect Orion will be as important for web developers as the initial Eclipse Java IDE 
	was for Java developers. Right now we are looking for people who are interested in using or adopting Orion and who are interested in 
	participating in the community.'</p>

	<p>'JavaScript developers need flexible lightweight tools available from a browser,' explains Andre Charland, CEO of Nitobi.  
	'Orion's approach to providing browser-based tools is something we may integrate into our PhoneGap Build service.  Adopting the Orion 
	tools would allow us to provide our JavaScript developers access to lightweight tools that make it easier to develop and build 
	cross-platform mobile applications.'  </p>

	<p>The Orion hosted service is open to the first 5000 developers who <a href="http://www.eclipse.org/orion">sign-up</a>. In the future, additional slots 
	may be added as the Orion community grows. The Orion server is also available for download for developers who want to install Orion on 
	their own computers.  The Orion source code is licensed under the Eclipse Public License (EPL).</p>

	<strong>About the Eclipse Foundation</strong>
	<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible 
	frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major 
	technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the 
	Eclipse Platform.</p>
	<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse 
	and the Eclipse Foundation are available at www.eclipse.org.	</p>

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Orion</h6>
			<ul>
				<li><a href="http://www.eclipse.org/orion">Orion Home</a></li>
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
	