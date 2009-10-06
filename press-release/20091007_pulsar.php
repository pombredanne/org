<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Pulsar Gains Momentum with Mobile Industry Leaders";
$pageKeywords	= "eclipse, pulsar, mobile, ericsson, sony ericsson";
$pageAuthor		= "Lynn Gayowski";

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

		<p><i>New release of Pulsar adds support for Ericsson and Sony Ericsson</i></p>	

		<p>CTIA Wireless IT & Entertainment - <strong>SAN DIEGO, Calif. - October 7, 2009</strong> -
		The Eclipse Foundation today announced a new release of Eclipse Pulsar, an application
		development tools platform for mobile developers.  The new release extends support to the
		Ericsson and Sony Ericsson developer communities.</p>
		
		<p>Pulsar is the result of collaboration among leaders in the mobile industry to provide a
		common set of Eclipse-based tools in a single packaged distribution that supports multiple
		software development kits (SDKs). With Pulsar, developers can use a single, familiar
		development environment to create mobile applications that target different devices. With
		today's release, Pulsar now supports SDKs from Motorola, Nokia, Ericsson and Sony Ericsson.</p>
		
		<p>"Ericsson is a longtime Eclipse member, and participating in the Pulsar initiative aligns
		with our business goals," said Roland Svensson, Vice President, Portfolio Management and
		Technology at Ericsson. "We believe Pulsar has the potential to make it easier for mobile
		developers to gain access to the tools and SDKs they require."</p>

		<p>Stefan Qelthin, Head of SW Environment for Sony Ericsson, also noted: "Pulsar brings
		together a common tools platform that allows participating handset makers to focus on
		providing value added tools for their developer communities. Sony Ericsson is pleased to be
		part of this industry initiative and hope it will help fuel a broader ecosystem of mobile
		apps and opportunities for the developer."
		
		<p>Members of the Pulsar initiative aim to work across four key areas:
		<ul>
		 <li>The creation of the packaged distribution called Eclipse Pulsar Platform;</li>
		 <li>A technical roadmap to advance the capabilities of the platform;</li>
		 <li>A set of best practices which includes documentation and test suites; and</li>
		 <li>Education and outreach to drive adoption of Pulsar with mobile application developers.</li>
		</ul></p>
		
		<p>"Pulsar is delivering on its promise to streamline the development of mobile applications,
		arguably the hottest growth area in the mobile market today," noted Mike Milinkovich, Executive
		Director, Eclipse Foundation. "Pulsar is also a great example of how Eclipse continues to be a
		platform for collaboration. We are pleased that Ericsson and Sony Ericsson have joined Motorola
		and Nokia in Pulsar, and look forward to their contributions to making Pulsar a truly
		definitive mobile application development tools platform."</p>

		<p>The new Pulsar release is available immediately for download at
		<a href="http://www.eclipse.org/pulsar/" targer="blank">http://www.eclipse.org/pulsar/</a>.
		Eclipse and Pulsar leaders will be at the WIPJAM on October 8 during CTIA. Register at
		<a href="http://wipjam.com/wipjam-ctia/" target="blank">http://wipjam.com/wipjam-ctia/</a>.</p>

		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community, whose projects are focused on building an open development
		platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing
		software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative
		start-ups, universities and research institutions and individuals extend, complement and support the
		Eclipse Platform.</p>
		
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
		Eclipse and the Eclipse Foundation are available at
		<a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		
		<p>
			<strong>Press Contact:</strong><br>	
			Chantal Yang<br>
			Page One PR for Eclipse Foundation<br>
			415-875-7494<br>
			<a href="mailto:eclipse@pageonepr.com">eclipse@pageonepr.com</a><br>
			<br>
		</p>

	</div>
	<div id="midcolumn">

</div>


		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

