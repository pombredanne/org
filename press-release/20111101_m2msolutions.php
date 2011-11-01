<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'


#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "Industry leaders join to provide open source tools and protocols to simplify development of M2M solutions";
$pageKeywords	= "M2M, machine-to-machine, developer, Koneki, Eclipse, Lua, Industry Working Group, Sierra Wireless, IBM ";
$pageAuthor		= "Christopher Guindon";

# Add page-specific Nav bars here
# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
# $Nav->addCustomNav("My Link", "mypage.php", "_self");
# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

# End: page-specific settings
#

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML
	<style>
		#headline{font-style:italic;font-size:1.2em;line-height:1.6em;}
		blockquote{
 			font-size:14px;
 			line-height:22px;
  			margin-top: 10px;
 			margin-bottom: 20px;
  			margin-left: 50px;
  			padding-left: 15px;
  			border-left: 3px solid #ccc;
}
		
	</style>
	
<div id="maincontent">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>

	
		<br>
  
<p id="headline">Sierra Wireless, IBM, Eurotech, and the Eclipse Foundation establish an M2M Industry Working Group to ease the development, testing, and deployment of machine-to-machine solutions<p>
 
<p><strong>Vancouver, Canada – November 1, 2011</strong> – Sierra Wireless (NASDAQ: SWIR) (TSX: SW) and the Eclipse Foundation today announced the formation of a new Industry Working Group to define and implement an open standard platform for the software development tools used in developing machine-to-machine (M2M) communications applications. IBM and Eurotech are also founding members of the M2M Industry Working Group, which is open to any organization with an interest in M2M solutions, including both vendors and potential clients.</p>
<p>&#8220;M2M communications represents an exciting and challenging opportunity to positively impact the way our world operates in fields as varied as energy management, transportation, and healthcare,&#8221; said Mike Milinkovich, Executive Director of the Eclipse Foundation. &#8220;We believe the formation of this M2M Industry Working Group comes at a critical time. The open source contributions of M2M tools and protocols will help to reduce development time and costs, and ensure that mission critical systems maintain interoperability as deployments evolve over the lifetime of a project.&#8221;</p>
<p>The market for M2M solutions is growing, but rapid growth is hindered by incompatible platforms and protocols that require developers to continually reinvent solutions that have already been created. This situation slows innovation and creates maintenance and upgrade problems as deployments evolve over time. The founding members of the Industry Working Group believe the creation of open tools, open protocols, open interfaces and open application programming interfaces (APIs) are the best approach to addressing these problems, bringing tremendous value to the M2M ecosystem.</p>
 
 
 <blockquote>&#8220;The Eclipse Machine-to-Machine Industry Working Group and the related open source projects will enable customers to integrate physical world systems into their enterprise solutions,&#8221; said Dr. Angel Diaz, vice president, software standards, IBM Software Group. &#8220;Data is being captured today as never before, the Eclipse M2M initiative helps expand the spectrum of information and intelligence into the systems and processes that make the world work and become a smarter planet.&#8221;</blockquote>
<p>The M2M Industry Working Group is the umbrella for M2M-related Eclipse projects for open source, the first of which is the Koneki project. The goal of Koneki is to provide M2M solution developers with tools that ease the development, simulation, testing/debugging and deployment of such solutions. The initial open source contributions provide a common set of tools and APIs that simplify development of solutions across multiple environments (such as Linux, Java, and proprietary environments such as Open AT® from Sierra Wireless), as well as standard communications protocols. The benefit to M2M customers is more flexibility, with systems that are interoperable and don’t lock them into a long-term relationship with a single solution vendor. Sierra Wireless has made the first significant contribution to the Koneki project, providing a full-featured embedded development environment for the Lua programming language.</p>
<p>&#8220;We consider it critically important to provide the M2M developer community with the tools and support needed to deploy applications as efficiently as possible, and ensure that they can be easily maintained over time. Because of this, we have been developing Eclipse-based tools for many years,&#8221; said Emmanuel Walckenaer, Senior Vice President and General Manager, Solutions and Services for Sierra Wireless. &#8220;This collaboration with the Eclipse Foundation and our other working group partners is an extension of our commitment to build an open M2M ecosystem, not only for the benefit of our customers, but also for the long-term development of the industry.&#8221;</p>
<p>Sierra Wireless is a premium sponsor of EclipseCon Europe, happening this week in Ludwigsburg, Germany, and developers attending the event are welcome to contact the onsite team for more information about the M2M Industry Working Group and the Koneki project. Developers unable to attend the event are invited to visit <a href="http://www.sierrawireless.com/productsandservices/AirVantage/Koneki.aspx" target="_blank">http://www.sierrawireless.com/productsandservices/AirVantage/Koneki.aspx</a> for more information about Sierra Wireless initiatives that support M2M application development, as well as the open source tools and libraries the company makes available to the developer community.</p> 
<p>The M2M Industry Working Group charter is publicly available at <a href="http://wiki.eclipse.org/M2MIWG_charter_draft" target="_blank">http://wiki.eclipse.org/M2MIWG_charter_draft</a>. </p>
<p>The Koneki project is hosted by the Eclipse Foundation and can be accessed at <a href="http://www.eclipse.org/koneki/" target="_blank">http://www.eclipse.org/koneki/</a>. </p>
<p>To contact the Sierra Wireless Sales Desk, call +1 (604) 232-1488 or email <a href="mailto:sales@sierrawireless.com">sales@sierrawireless.com</a>.</p>




<p><strong>About Eurotech</strong><br>
Eurotech is a listed global company (ETH.MI) that integrates hardware, software, services and expertise to deliver embedded computing platforms and sub-systems to leading OEMs, system integrators and enterprise customers for successful and efficient deployment of their products and services. Drawing on concepts of minimalist computing, Eurotech lowers power draw, minimizes physical size and reduces coding complexity to bring sensors, embedded platforms, sub-systems, ready-to-use devices and high performance computers to market, specializing in healthcare, defense, transportation, industrial and energy segments. By combining domain expertise in wireless connectivity as well as communications protocols, Eurotech architects integrated solutions that simplify data capture, processing and transfer over unified communications networks. Our customers rely on us to simplify their access to state-of-art embedded technologies so they can focus on their core competencies. Learn more about Eurotech at <a href="http://www.eurotech.com" target="_blank">www.eurotech.com</a>.</p>  

<p><strong>About the Eclipse Foundation</strong><br> 
Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at www.eclipse.org.  


<p><strong>About Sierra Wireless</strong><br> 
Sierra Wireless (NASDAQ: SWIR) (TSX: SW) offers industry-leading mobile computing and machine-to-machine (M2M) communications products and solutions that connect people, devices, and applications over cellular networks. Wireless service providers, equipment manufacturers, enterprises and government organizations around the world depend on us for reliable wireless technology. We offer 2G, 3G and 4G wireless modems, routers and gateways as well as a comprehensive suite of software, tools, and services that ensure our customers can successfully bring wireless applications to market.  For more information about Sierra Wireless, visit <a href="http://www.sierrawireless.com" target="_blank">www.sierrawireless.com</a>. </p> 
<p>&#8220;Open AT&#8221; is a registered trademark of Sierra Wireless. Other product or service names mentioned herein may be the trademarks of their respective owners. </p> 

<p><strong>Forward Looking Statements</strong><br> 
This press release contains forward-looking statements that involve risks and uncertainties. These forward-looking statements relate to, among other things, plans and timing for the introduction or enhancement of our services and products, statements about future market conditions, supply conditions, channel and end customer demand conditions, revenues, gross margins, operating expenses, profits, and other expectations, intentions, and plans contained in this press release that are not historical fact. Our expectations regarding future revenues and earnings depend in part upon our ability to successfully develop, manufacture, and supply products that we do not produce today and that meet defined specifications. When used in this press release, the words "plan", "expect", "believe", and similar expressions generally identify forward-looking statements. These statements reflect our current expectations. They are subject to a number of risks and uncertainties, including, but not limited to, changes in technology and changes in the wireless data communications market. In light of the many risks and uncertainties surrounding the wireless data communications market, you should understand that we cannot assure you that the forward-looking statements contained in this press release will be realized.</p>




<p><strong>Press Contact:</strong><br/>
Ian Skerrett<br/>
Eclipse Foundation<br/>
<a href="mailto:ian.skerrett@eclipse.org">ian.skerrett@eclipse.org</a></p>

<p>Sharlene Myers<br/>
Sierra Wireless<br/>
Phone: +1 (604) 232 1445<br/>
<a href="mailto:smyers@sierrawireless.com">smyers@sierrawireless.com</a></p>
  

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/M2MIWG_charter_draft" target="_blank">The M2M Industry Working Group charter</a></li>
				<li><a href="http://www.eclipse.org/koneki/" target="_blank">The Koneki project</a></li>
				<li><a href="http://www.sierrawireless.com" target="_blank">Sierra Wireless</a></li>
				<li><a href="http://www.eurotech.com" target="_blank">Eurotech</a></li>
				
			</ul>
		</div>
	</div>	
</div>


EOHTML;
$html = mb_convert_encoding($html, "HTML-ENTITIES", "ISO-8859-1");
$pageTitle = mb_convert_encoding($pageTitle, "HTML-ENTITIES", "ISO-8859-1");
# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>



