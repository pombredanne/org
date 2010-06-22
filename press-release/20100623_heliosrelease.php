
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Helios Annual Release Train Has Arrived";
	$pageKeywords	= "eclipse, helios, release";
	$pageAuthor		= "Lynn Gayowski";
	
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
		
      	<p>OTTAWA, CANADA - June 23, 2010  -  Today the Eclipse community delivers its annual release train, a coordinated release of the major Eclipse projects.  For the seventh year in a row, the 2010 release train, code named <a href="http://www.eclipse.org/helios">Helios</a>, arrives on time and is now available for download.</p>

      	<p>The Helios release is the largest release train produced by the Eclipse community, including 39 different project teams, over 33 million lines of code are released and the work of 490 committers.   The release train makes it easier for users and adopters of Eclipse technology to adopt new versions of the different Eclipse projects.   The Eclipse community also makes available <a href="http://www.eclipse.org/downloads">12 different Eclipse packages</a> that target different types of developer usage, including Java EE developers, PHP developers, C/C++ developers and many more.</p>
      	
      	<p>"The Helios release is another fantastic effort by the Eclipse committer community", explains Mike Milinkovich, Executive Director of the Eclipse Foundation.  "Besides the feat of coordinating such a large development effort, Helios introduces important innovations in areas such as Git support, Linux development and JavaScript support.  Congratulations to everyone for another great release"</p>

		<p>The Helios release including many new features and projects updates.   Some of the highlights include:</p>
		<ul>
			<li>A new Linux IDE package makes it easier for Linux developers to use an integrated tool chain for building C/C++ applications for the Linux operating system.  This package includes the new <a href="http://www.eclipse.org/linuxtools">Linux Tools</a> project which includes Eclipse integrations of popular Linux utilities such as GNU Autotools, Valgrind, OProfile, RPM, SystemTap, GCov, GProf, and LTTng.  A recent Eclipse Community Survey has shown increased use of Linux by developers. It is expected this package will help further accelerate Eclipse adoption in the Linux community.</li>
			<li><a href="http://www.eclipse.org/mpc">Eclipse Marketplace Client</a> provides developers an 'app-store' experience to easily discover and install new Eclipse plug-ins.   Eclipse Marketplace is a catalog of Eclipse based solutions.  Over 100 of these will be available from the new Marketplace Client, making it significantly easier to find and install Eclipse solutions.</li>
			<li>Support for Git, a popular distributed version control (DVCS), is provided by the new <a href="http://www.eclipse.org/egit">Eclipse EGit</a> and JGit projects.  The new EGit 0.8 release includes a new Git repositories view and support for fast forward merging and tagging. JGit 0.8 - which EGit uses under the covers to talk to Git repositories - benefited from performance enhancements of up to 50% when working with large repositories.</li>
			<li>The <a href="http://www.eclipse.org/webtools">Web Tools Platform</a> project has introduced support for creating, running, and debugging applications written for the latest Java EE Specifications (Java EE 6) including, Servlet 3.0, JPA 2.0, JSF 2.0, and EJB 3.1.</li>
			<li>Improved support in the <a href="http://wiki.eclipse.org/index.php/ATF/JSDT">JavaScript Development Tools</a> project (JSDT) for JavaScript developers, including a JavaScript debug framework that allows for integration of JavaScript debuggers, such as Rhino and Firebug.  A new JavaScript IDE package has also been created to make it easier for JavaScript developers to find, install and use an Eclipse-based IDE.</li>
			<li><a href="http://www.eclipse.org/xtext">Eclipse Xtext</a> 1.0, a popular framework for creating domain specific languages (DSL), introduces 80 new features, including improved performance and scalability by up to 30 times previous versions.  A new in-memory indexing feature makes it possible to develop more sophisticated DSL's in Xtext.</li>
			<li>A new release of <a href="http://www.eclipse.org/acceleo">Acceleo</a> 3.0 implements the OMG Model-to-text (MTL) specification and provides the features required for a code generator IDE.  This release also provides unique tools around example-base design of code generators.</li> 
		</ul>
		<p>More information about the Helios release can be found at <a href="http://www.eclipse.org/helios">www.eclipse.org/helios</a>.   The Helios packages can be downloaded now at <a href="http://www.eclipse.org/downloads">www.eclipse.org/downloads.</a></p>
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

