<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Galileo Release Now Available";
$pageKeywords	= "galileo, eclipse, annual release";
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
		<h2>Press Release</h2>

		<h1>$pageTitle</h1>

		<p><i>Highlights include Mac Cocoa support, Domain Specific Language modeling and updates to Equinox; multi-language support immediately available </i></p>	

		<p><strong>OTTAWA, CANADA – June 24, 2009</strong> – For the sixth year in a row, the Eclipse community has 
		delivered its annual release train on its scheduled date. Galileo, the 2009 release train, is the largest 
		ever release from the Eclipse community, comprising 33 projects and over 24 million lines of code. Over 
		380 committers from 44 different organizations participated to make this release possible. </p>
		
		<p>Each year the Eclipse community coordinates an annual release of projects during the last week of June.
		 The coordinated release makes it easier for Eclipse users and adopters to take advantage of the 
		 innovations and new features created by the different Eclipse projects. Millions of Eclipse users and 
		 thousands of organizations that build software on top of Eclipse can now upgrade to this release. 
		</p>
		
		<p>The new features in the Galileo release reflect three important trends in the Eclipse community: 1) 
		Expanding adoption of Eclipse in the enterprise, 2) innovation of Eclipse modeling technology and 3) 
		advancement of EclipseRT runtime technology. Each project has published “new and noteworthy” 
		documentation for their specific release. Overall, highlights from the Galileo release include:
		</p>
		
		<p>
		<strong>Expanded Enterprise Adoption</strong><br>
		Adoption of Eclipse in the enterprise continues to grow.  New features in Galileo help expand the use 
		of Eclipse by enterprise developers, including:
		<ul>
		 <li>New support for Mac Cocoa 32 and 64 bit.
		 <li>New <a href="http://eclipse.org/mat/">Memory Analyzer</a> tool to help analyze memory consumption of Java applications
		 <li><a href="http://eclipse.org/pdt/">PHP Development Tools</a> (PDT) 2.1 is first PHP toolkit to support the new PHP 5.3 language release, including namespaces and closures.
		 <li>New <a href="http://eclipse.org/mylyn/">Mylyn</a> WikiText support for editing and parsing wiki markup.
		 <li>New <a href="http://eclipse.org/webtools/sse/">XSL tooling</a> for XSL editing and debugging.
		 <li>Developer productivity improvements to <a href="http://eclipse.org/birt/phoenix/">Business Intelligence Reporting Tools</a> (BIRT) report designer and performance.
		</ul></p>
		
		<p>
		<strong>Advancement of EclipseRT Runtime Technology</strong><br>

		EclipseRT is the set of Eclipse technologies that provide OSGi-based frameworks and runtimes useful in 
		building software systems. The Galileo release includes a dedicated category of EclipseRT components 
		including elements from Equinox, RAP, RCP, Riena, BIRT, Swordfish, EclipseLink, ECF and EMF. Notable 
		feature updates that advance the EclipseRT technology stack include:
		<ul>
			<li>Eclipse <a href="http://eclipse.org/equinox/">Equinox</a> has been updated to support the draft OSGi Release 4, v 4.2 specification.
			<li>Target Platform provisioning support in the <a href="http://eclipse.org/pde/">Plugin Development Environment</a> (PDE) makes it easier to develop, test and deploy software to EclipseRT runtimes.
			<li>The Equinox p2 provisioning system has been updated to be faster, more robust and make provisioning OSGi bundles to embedded, desktop and server environments easy.
		</ul></p>

		<p>
		<strong>Innovation in Eclipse Modeling Technology</strong><br>

		The Eclipse Modeling community continues to create new innovative technology for model-based development 
		frameworks, tools and standards. Key new innovations in Galileo include:

		<ul>
			<li><a href="http://www.eclipse.org/Xtext/">Xtext</a>, a new Eclipse project that allows for the creation of Domain Specific Languages (DSL). 
			Xtext will create customized Eclipse editors for the DSL, making it easier for developers to focus on 
			a smaller set of APIs and write less code.
			<li><a href="http://www.eclipse.org/cdo/">Connected Data Objects</a> (CDO) is a framework for distributed shared EMF models focused on 
			scalability, transaction and persistence.  New enhancements in CDO include distributed transactions, 
			pessimistic locking and save points, change subscription policies, an asynchronous query framework 
			and security hooks in the repository.
		</ul></p>

		<p>For the first time ever, language translations of the Eclipse Platform project v3.5 will be available 
		on the release date. Language packs for Simplified Chinese, Traditional Chinese, French, German, Japanese 
		and Korean will be <a href="http://www.eclipse.org/babel/downloads.php">available immediately</a>, and other languages and projects will be available when 
		completed. In previous years, Eclipse language translations have taken two to three months to become 
		available. This simultaneous release has been made possible by the Eclipse <a href="http://www.eclipse.org/babel/">Babel</a> project and the 
		community of individuals and organizations that have provided translations.   </p>

		<p>“The release train continues to be a great achievement of the Eclipse community,” explained Mike 
		Milinkovich, Executive Director of the Eclipse Foundation. “Galileo demonstrates that large distributed 
		software development can be done on a predictable schedule. This predictability makes it possible for our 
		user and adopter community to quickly adopt new releases from Eclipse.”</p>

		<p>The projects in the Galileo release train are now available for download at 
		<a href="http://www.eclipse.org/downloads/">www.eclipse.org/downloads</a>. More information about Galileo is available at 
		<a href="http://www.eclipse.org/galileo/">www.eclipse.org/galileo</a>.

	
		<p>
			<strong>About the Eclipse Foundation</strong><br />
			Eclipse is an open source community, whose projects are focused on building an open development
			platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing
			software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative
			start-ups, universities and research institutions and individuals extend, complement and support the
			Eclipse Platform.
		</p>
		
		<p>
			The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
			Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.
		</p>
		
		<p>
			<br>		
			<i>All company/product names and service marks may be trademarks or registered trademarks of
			their respective companies.</i>
			<br><br>
		</p>
		
		<p>
			<strong>Press Contact:</strong><br>	
			Chantal Yang<br>
			Page One PR for Eclipse Foundation<br>
			415-875-7494<br>
			<a href="mailto:eclipse@pageonepr.com">eclipse@pageonepr.com</a><br>
			<br>
		</p>

	</div>

</div>


		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

