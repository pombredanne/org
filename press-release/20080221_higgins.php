<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Eclipse Releases Its First User-Centric Identity Framework";
$pageKeywords	= "eclipse, higgins, press, release, user, centric";
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
		<p><i>Eclipse Higgins 1.0 is now available to make it easier for users to manage and use their on-line identity</i></p></center>
		<p><strong>OTTAWA - February 21, 2008  - </strong>The Eclipse Foundation today announced the availability of Eclipse Higgins 1.0, a freely downloadable identity framework designed to integrate identity, profile and social relationship information across multiple sites, applications and devices using an extensible set of components.</p>
		<p>Web 2.0, mashups, social networking and the general rise of networked applications have made Web-based identity management complex for both the end-user and the developer. The Eclipse Higgins project, a coalition of organizations and individuals, has been working to address these issues.  </p>
		<p>Multiple identity protocols have been developed to address different needs, including WS-Trust, OpenID, SAML, XDI and LDAP. This requires software developers to support multiple protocols, resulting in unnecessary complexity in managing identities. Additionally, individuals are particular about which entities they share what personal information. For example, one might not prefer to share credit card information on a social networking site as readily as with a leading on-line retailer.</p>
		<p>To address these challenges, Higgins provides a software framework that delivers three technologies:</p>
		<p>First, it provides multi-platform “identity selector” applications that end-users can use to sign-in to web sites and systems that are compatible with the emerging user-centric “Information Card”-based (or “i-card”-based) approach to authentication. This approach promises people fewer passwords, more convenience, and better security. An Information Card is a new, graphical way to refer to a collection of identity information that you might wish to send to a website or program.</p>
		<p>Second, it provides “identity provider” web services that can issue i-cards as well as the code necessary to enable web sites and applications to accept i-cards.  Software developers can incorporate this code into their applications to make it easier for their users to log-in to their sites.</p>
		<p>Third, it implements the Higgins Global Graph (HGG) data model and the Higgins Identity Attribute Service (IdAS). Developers now have a framework that provides an interoperability and portability abstraction layer over existing “silos” of identity data. For the first time, IdAS makes it possible to “mash-up” identity and social network data across highly heterogeneous data sources including directories, relational databases, and social networks. Technology built on this framework could allow users to login to their bank account with a secure authorization key, which would be automatically freshly generated for each visit. Users wouldn’t need to remember or write down passwords, which can also be long and complex enough to be secure. Additionally, this same interface also could allow users to sign into their favorite wiki or blog with just one click. </p>
		<p>Higgins is not another identity protocol like OpenID, SAML, or WS-Trust; it is a framework that allows software developers to integrate and leverage multiple protocols within their applications. Specific identity protocols, like OpenID, which is very important for solving password management for things like blog, wikis, etc., are popular with specific users for specific use cases; however, the Project Higgins community believes there will continue to be multiple identity protocols used to support differing identity scenarios. Instead of requiring a developer to become proficient in all protocols, they can now use Higgins to gain support for them all. </p>
		<p>With this initial 1.0 release of Higgins, many of the largest providers of identity management software recognize its potential. IBM, Microsoft and Novell are significant contributors to the project. Additionally, companies like Serena are already using Higgins in their commercial products. Companies such as Oracle support the goals of the project.</p>
		<p> “Serena recognizes the importance of Identity and Security as key components of business mashups. The Serena Business Mashups product leverages the Eclipse Higgins Security Token Server (STS) to provide the advantages of token-based security for Single Sign-On and web services security." Said Brian Carroll, Serena Fellow.  </p>
		<p>“This is a major milestone for the project as open-sourcing the Higgins technology ensures that there will be easy access to it, and that developers can innovate around it. It provides customers the opportunity to adopt user-centric identity management systems without getting locked into a proprietary architecture,” said Anthony Nadalin, IBM Distinguished Engineer and Chief Security Architect.  “The project helps extend IBM's identity management portfolio by putting people in the driver's seat of their personal identity information while also giving companies, governments and social networking outlets new ways to collaborate."  </p>
		<p>“Interoperable identity services that can bridge enterprise systems to readily-available identity management software are critical to helping companies solve governance, risk management and compliance challenges,” said Dale Olds, Distinguished Engineer and Bandit Project Leader, Novell. Eclipse Higgins 1.0 is a significant milestone because it involves not just specifications, but a software framework and working code that can be used now to integrate identity systems. Using an open, collaborative development process has demonstrated that the framework works with other implementations of standard protocols, yet provides developers with a protocol independent interface.”</p>
		<p>“The Eclipse Higgins 1.0 release is an important step in the development of an interoperable identity metasystem that is usable across different platforms,” said Kim Cameron, chief identity architect, at Microsoft. “With this new release, Higgins users will be able to implement information cards that are compatible with Windows CardSpace and access all the same sites that CardSpace users can.”</p>  	
		<p>“An open source framework for User-centric Identity is critical to facilitate innovative solutions in this emerging area and to improve security,” said Uppili Srinivasan, Senior Director of Identity Management and Security Products, Oracle. “The multi-protocol and platform-agnostic architecture of the Higgins framework is consistent with Oracle’s hot-pluggable Identity and Access Management architecture and helps extend the benefits of user-centric Identity to heterogeneous Identity environments” </p>
		<p>“Identity has become a focal point of privacy and regulatory concerns.  Higgins helps address those concerns by providing a common trust framework that enables applications to share identities securely", said Jeffrey Broberg, Senior Architect, Security Solutions, CA. "CA believes Higgins represents a valuable mechanism for bridging the divide between applications and identity management allowing organizations to build identity-aware applications, and incorporate user-centric concepts. CA supports the open source community and Higgins in the evolution of the identity ecosystem."</p>
		<p> “This release represents another major milestone in the Higgins project. We appreciate the growing number of companies and individuals who contribute to the Higgins project and are making it easier to develop systems that give people more control over their personal online information” said Paul Trevithick, CEO of Parity Communications Inc., and Mary Ruddy, Founder of Meristic, Inc. the Higgins project co-leads.</p>
		<p>Eclipse Higgins 1.0 is now available at <a href="http://www.eclipse.org/higgins/downloads.php">http://www.eclipse.org/higgins/downloads.php</a>.  More information about the project is available at <a href="http://www.eclipse.org/higgins">http://www.eclipse.org/higgins</a>.</p>
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		
		<p><center><i>All company/product names and service marks may be trademarks or registered trademarks of their respective companies.</i></center></p>
		
		<br /><br /><strong>Press Contact</strong><br>	
		Steve Eisenstadt<br/>
		Page One Public Relations<br/>
		919-781-8096<br/>
		steve@pageonepr.com<br/>
		
		
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

