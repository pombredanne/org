<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon Keynote: What Is Watson?";
	$pageKeywords	= "eclipsecon, jeopardy, watson, ibm";
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
		<h1>$pageTitle</h1>

		<h2>Community Bulletin</h2>
	
		<p>
			The Eclipse Foundation is pleased to announce a featured <a href="http://www.eclipsecon.org/2011/">EclipseCon 2011</a> keynote presentation, <a href="http://www.eclipsecon.org/2011/sessions/?page=sessions&id=2366">'What is Watson'</a>. David Gondek of the IBM DeepQA/Watson 
			Project will take attendees on a tour of the technologies that power Watson, the IBM machine that recently won a Jeopardy! match against two of the best contestants to ever play the game. </p>

		<p>
			EclipseCon will also feature two other industry keynote presentations:
		<ul><li><a href="http://www.eclipsecon.org/2011/sessions/?page=sessions&id=2360">The Java Renaissanance:</a> Mark Reinhold (Oracle) and John Duimovich (IBM) will give us an in-depth view of the recent developments in Java, focusing on the introduction of Java 
		SE 7 and the participation in OpenJDK by both Apple and IBM.</li>
		<li><a href="http://www.eclipsecon.org/2011/sessions/?page=sessions&id=2370">On Apache Hadoop:</a> The Hadoop project at Apache is 
		an open-source framework for storing and analyzing large quantities of diverse data. Todd Lipcon of Cloudera will explain why the system was built, outline the technical details, 
		and then share the experience and lessons learned by the Hadoop team.</li>
		</ul>
		</p>
		<p>EclipseCon 2011 is March 21-24 in Santa Clara, CA.   <a href="http://www.eclipsecon.org/2011/registration/?page=registration">Registration</a> is now open.
			
		</p>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>EclipseCon</h6>
			<ul>
				<li><a href="http://www.eclipsecon.org/2011/registration/?page=registration">Registration</a></li>
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
