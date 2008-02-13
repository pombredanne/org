<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Riena project enhances building enterprise applications using Eclipse RCP";
	$pageKeywords	= "eclipse, riena, press, release";
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
		<p><i>compeople AG is leading the project</i></p></center>
		<p><strong>Ottawa, Canada, and Frankfurt, Germany - February 13, 2008 - </strong>The Eclipse Foundation and compeople AG today announced that Riena has been successfully established as an open-source project within the Eclipse community. The Riena project will provide a homogeneous platform for business enterprise applications from the user interface to the back-end integration, based entirely on the Eclipse Equinox platform. By doing so, Riena will make it easier and much more comfortable to build multi-tier enterprise client/server applications, using Eclipse RCP (Rich Client Platform). 
		</p>
		<p>Riena aims to broaden the usage of the service oriented architecture of Equinox by providing access to local and remote services in a transparent way. Using this consistent component model, the components of the enterprise application can be developed regardless of their target location. Components are later easily placed on client or server, depending on the business requirements. </p>
		
		<p>In order to achieve this goal, the Riena project team will adapt components from existing Eclipse projects to support the distributed aspect of enterprise applications. Furthermore, it will provide new components to support the special needs of building and running large enterprise applications. As an example, the Riena user interface will support a business process oriented user interface visualization and navigation metaphor which can be used as an alternative to the default workbench layout.</p>

		<p>“With Riena, we add another important project to our community,” said Mike Milinkovich, executive director of the Eclipse Foundation. “Riena promises to seamlessly integrate the Eclipse client and server tiers. By providing a scalable platform, Riena will support the growth of Eclipse Equinox and RCP as a solution for developing enterprise applications with sophisticated user interfaces.”
		</p>
		<p>
				The Eclipse Riena project was proposed and is now being led by compeople AG, a German IT-Service provider.
		</p> 
		<p>“compeople is excited to play a major role in the Riena project and in this way to extend our involvement in the Eclipse community,” said Jürgen Wiesmaier, member of the board of directors and CTO of compeople.. “As an expert in developing Smart Client based applications, compeople is delighted to be offering our extensive IT know-how to the community by contributing with Riena to the further establishment of the Eclipse RCP in the field of enterprise applications.”</p>
		<p>Components which are in the scope of Riena include Remote Services, Software Update, as well as Authentication and Authorization. Additional components are Reporting, External Application Integration and an alternative to the current work bench UI paradigm. As a next step, the first code contribution will be submitted by the Riena-team by the end of February.  More details about Riena can be found at <a href="http://www.eclipse.org/riena">www.eclipse.org/riena</a>.</p>
	
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>

		<p><strong>About compeople AG</strong><br />
		compeople AG is a European IT-service provider located in Frankfurt, Germany. Their core competence and business is supplying innovative, smart client-based sales- and distribution systems. As a member of the Eclipse Foundation compeople does not only use open source technology to develop innovative IT Systems, but  also  actively supports the further development of the Eclipse platform. </p>
		<p>In the field of IT-projects, compeople offers their customers a complete range of services which include technology consultancy, design and implementation as well as handling entire IT-projects. </p>
		
		<p><center><i>All company/product names and service marks may be trademarks or registered trademarks of their respective companies.</i></center></p>
		
		<br /><br /><strong>Press Contact</strong><br>	
		Steve Eisenstadt<br/>
		Page One Public Relations<br/>
		919-781-8096<br/>
		steve@pageonepr.com<br/>
		<br /><br/>
		Manuela Duft<br/>
		compeople AG<br/>
		Cell: +49 (0)176 62072610<br/>
		mdu@compeople.de<br/>
		<br />
		
		
		<center># # #</center> 
		<br />
		<br>
			<br>
	</div>

</div>


		

EOHTML;


	$html = mb_convert_encoding($html, "HTML-ENTITIES", "auto");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

