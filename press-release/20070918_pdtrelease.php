	<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Announces New Tools for PHP Developers";
	$pageKeywords	= "eclipse, pdt, php developers, 2007, press release";
	$pageAuthor		= "Nathan Gervais";
	
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
		<h1 align="center">$pageTitle</h1>
		
		<h2 ALIGN="CENTER"><strong>PDT 1.0 release - the first Eclipse project targeting PHP -- is now available for download</strong></h2>
		<h2>Press Release</h2>
		<p><strong>OTTAWA - September 18, 2007</strong> - The Eclipse Foundation today announced the availability of the 1.0 release of the Eclipse PHP Development Tools (PDT) project.  Eclipse PDT is a set of tools and frameworks that enhance the productivity of developers using PHP, a popular, general-purpose dynamic language that is especially suited for development of web applications and web services. This is the first Eclipse project that targets the large PHP developer community.</p>  
		<p>“'Eclipse has long been enriched by the wide number of programming languages supported” says Mike Milinkovich, general director of the Eclipse organization.    “The release of PDT 1.0 is great news as it will allow the estimated 4.5 million PHP developers to begin using Eclipse-based tools and greatly expand the entire Eclipse community.”</p>
		<p>PHP developers using PDT will now be able to leverage the large ecosystem of over 1,400 Eclipse plugins.   Many PHP developers use a number of different development languages, such as Java and C/C++. They also use development tools for tasks like source code management (SCM), testing, and profiling when building rich internet applications.  PDT enables them to use Eclipse to integrate all of these tools into one single development environment.</p>
		<p>“We have received great responses to PDT from PHP developers,” explains Yossi Leon, Eclipse PDT project leader and Product Manager for Zend Studio at Zend Technologies.  “To date we have had over 300,000 downloads of PDT and the feedback has been very positive.”</p>
		<p>Key features in PDT 1.0 include:</p>
		<ul class="paddedlist">
			<li>Context sensitive editors that provide capabilities such as syntax highlighting, code assist and code folding.</li>
			<li>Integration with the Eclipse project model that allows for inspection using the File and Project Outline Views and a new PHP Explorer View.</li>
			<li>Support for incremental debugging of PHP code</li>
			<li>Extensive frameworks and API’s that allow developers and ISVs to easily extend PDT to create new and interesting PHP oriented developer tools.</li>
		</ul>
		<p>“PDT has evolved to a mature and high-quality Eclipse toolset for PHP developers,” says Peter MacIntyre, principal at Paladin Business Solutions in Charlottetown, PE in Canada. “Its strength as a framework for creating PHP systems and applications is certainly evident, and it is exciting to think of the commercial products that can now be delivered leveraging the PDT framework.”</p>
		<p>“We like features like code expansion, linked references to libraries, manuals and code,” say Jeroen Serpieters and Michelangelo van Dam, consultants for Ausy Belgium, a system integrator in Brussels, Belgium. “PDT gives us the opportunity to deliver quality services in less time. The fact that this is delivered by an open source project with strong community backing makes adoption of PDT a no-brainer for us.”</p>
		<p>PDT 1.0 is available for download at <a href="http://download.eclipse.org/tools/pdt/downloads/">http://download.eclipse.org/tools/pdt/downloads/</a>.  More information about the PDT project can be found at <a href="http://www.eclipse.org/pdt/">http://www.eclipse.org/pdt/</a>.
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		Steve Eisenstadt<br>
		Page One Public Relations<br>
		919-781-8096<br>
		steve@pageonepr.com<br>
		<br>

		</p>
							
	</div>

</div>


EOHTML;

	$html = mb_convert_encoding($html, "HTML-ENTITIES");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

