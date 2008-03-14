<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Announces New Runtime Initiative around Equinox";
$pageKeywords	= "eclipse, equinox, press, release, runtime, OSGi";
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
		
		<center>
		<h1>$pageTitle</h1>
		</center>
		
		<p><strong>EclipseCon 2008, SANTA CLARA, CA &#150; March 17, 2008 &#150; </strong>
		The Eclipse Foundation today announced a new initiative to develop and promote open source runtime technology based on Equinox, a
		lightweight OSGi compliant runtime.   While Eclipse is well known for its widely used development tools, this initiative
		establishes a community of Eclipse open source projects focused on runtime technology that provides a more flexible approach to
		building and deploying software on mobile, desktop and server environments.</p>
		
		<p>The move to create a community around Equinox is a logical progression for Eclipse.   Equinox, the core runtime platform for
		Eclipse, has been deployed on millions of software developers&#146; desktops, has enabled an ecosystem of thousands of Eclipse
		plug-ins and is the base of hundreds of Eclipse Rich Client Platform (RCP) based applications. Recently, the community has also
		used Equinox as the server platform for Ajax applications, SOA, enterprise client/server applications and others.  Therefore,
		this new initiative has been started to foster and promote Equinox as a platform for building and deploying general purpose
		software products and applications.</p>
		
		<p>To support the launch of the Equinox community, the Eclipse Foundation is announcing the following:
			<ul>
			<li>The Eclipse Foundation Board of Directors has approved and created a new top-level project called the Eclipse Runtime
			project (Eclipse RT).   The mission of this new top-level project is to foster, promote and house runtime efforts in the
			Eclipse community.  The Project Management Committee (PMC) will be led by Jochen Krause (Innoopract) and Jeff McAffer
			(Code 9), and will include Douglas Clarke (Oracle), Ricco Deutscher (Sopera) and Thomas Watson (IBM).  Eclipse RT will
			initially include the following sub-projects:  <a href="http://www.eclipse.org/ecf/">Eclipse Communication Framework (ECF)</a>, <a href="http://www.eclipse.org/eclipselink/">EclipseLink</a>, 
			<a href="http://www.eclipse.org/equinox/">Equinox</a>, <a href="http://www.eclipse.org/rap/">Rich Ajax Platform (RAP)</a>, <a href="http://www.eclipse.org/riena/">Riena</a>, and <a href="http://www.eclipse.org/swordfish/">Swordfish</a>.</li>
			<li>A new <a href="http://www.eclipse.org/equinox-portal/">Equinox community portal</a> has been launched on the Eclipse web site.  The portal is focused on promoting and
			educating developers on Equinox, OSGi and related Eclipse runtime projects.  Developers are able to download tutorials,
			videocasts and webinars to educate them on the new approach for building software.</li>
			<li>More than 20 companies have indicated their support and participation in the Equinox community.</li>
			</ul>
		</p>
		
		<p>Equinox introduces a new way of building and deploying software; a concept called Component Oriented Development and
		Assembly (CODA).  Component oriented development is not new, but Equinox and CODA provide some very important advantages:
			<ul>
			<li>Equinox is based on the OSGi standard, a consistent component model that spans platforms and architectural tiers.
			OSGi is used for mobile and embedded devices, desktop applications and server applications hosted on a wide variety of
			operating systems (Linux, Windows, Solaris, etc).  Other component models tend to be operating system specific or tied to
			a specific deployment tier.</li>
			<li>Developers using Equinox have much more flexibility in assembling and customizing their application and runtime
			platform.  Instead of a �one size fits all� approach, developers can now select components from a variety of component
			producers, customize the components for their specific needs and assemble the required components to create individual
			solutions.</li>
			<li>Similar to how Eclipse solved the developer tools integration challenge, Equinox provides a standard integration
			mechanism that allows organizations to easily integrate applications with their partner and customers solutions.</li>
			</ul>
		</p>
		
		<p>�Launching the Equinox community to focus on runtimes is a natural evolution of Eclipse,� said Mike Milinkovich, Executive
		Director of the Eclipse Foundation.  �Our community has already developed runtime projects like RCP, RAP, Swordfish, EclipseLink
		and ECF.  This new community will help organize and foster additional projects that focus on making it easier to develop and
		deploy software.�</p>
		
		<p>More details about the Equinox community can be found at <a href="http://www.eclipse.org/equinox-portal" target="blank">
		eclipse.org/equinox-portal</a>, including a white paper describing the concepts of CODA.</p>
		
		<p><b>About the Eclipse Foundation</b><br>
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application
		frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development
		lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and
		performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major
		technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support
		the Eclipse Platform.</p>
		
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
		Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org" target="blank">www.eclipse.org</a>.</p>
		
		<p><b>Press Contact</b><br>
		Steve Eisenstadt<br>
		Page One Public Relations<br>
		919-781-8096<br>
		<a href="mailto:steve@pageonepr.com">steve@pageonepr.com</a><br>
		<br>

	</div>

</div>

<div id="rightcolumn">
	<div class="sideitem">
		<h6>Related Links</h6>
		<ul>
			<li><a href="/equinox-portal/quotes.php">Who is using Equinox?</a></li>
			<li><a href="/equinox-portal/whitepaper/20080310_equinox.php">Whitepaper</a></li>
		</ul>
	</div>
</div>


		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

