<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "New Open Source Initiative for Automotive Software Development Tools";
	$pageKeywords	= "elipse, automotive, autosar";
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
		
		<br>
  <p><strong>Ottawa, Canada - July 20, 2011</strong> - The Eclipse Foundation is pleased to announce the creation of a new open source initiative to define and implement a standard platform 
  for the software development tools used in the automotive industry.   German carmaker BMW Group, the automotive suppliers Robert Bosch GmbH and Continental AG, and the Eclipse Strategic 
  Member itemis AG from Lünen, Germany are founding members of the initiative that will operate as an Eclipse Industry Working Group.   The new <a href="http://wiki.eclipse.org/Auto_IWG">Eclipse Automotive Industry Working Group</a> will 
  be open to any organizations that want to participate in the goal of establishing a standard tools platform that will be used throughout the automotive supply chain.</p>

  <p>Innovation in the automotive industry is mostly achieved by electronics and software functions.  The system automobile is becoming increasingly complex, an open developer tool workbench 
  that extends throughout the supply-chain is becoming a must for the industry.  Improvements and innovations to these software development tools are required to accelerate product 
  development, create high quality software features and improve integration across the automotive supply chain.  </p>

  <p>“BMW uses standards such as AUTOSAR, Flexray or Genivi in the development of automotive software. It is a necessary condition for BMW, that the tool chain supports these standards. We 
  believe that tools based on Eclipse are an efficient way to reduce gaps in the tool chain. It can be very helpful if Eclipse-based tools can not only be used as a stand-alone tool but also 
  as integrated components in a larger environment. The interoperability between the different Eclipse plug-ins from tool vendors can accelerate the development process,” 
“Eclipse is a de-facto standard in the field of developing software development tools (for example ARTOP) and as integrated  development environment for programming automotive software.  
Therefore, a unified Eclipse platform is to be agreed on by all participants in the EAIWG. For this reason, the future participation of tool manufacturers in the EAIWG is absolutely necessary. 
A single platform can reduce internal costs and accelerate cross-company development processes. BMW will use the Eclipse platform developed by the Working Group as a strategic development 
environment.” 
</p>

<p>“Creating a standard platform for automotive tools will help us to faster innovate without compromising quality,” explains Harald Mackamul, Senior Expert, Corporate Sector Research and 
Advance Engineering, Robert Bosch GmbH. “Collaborating with an open source community will allow us to share the costs and best practices for building new tools with other companies in the 
automotive industry. We see this open innovation as the future for our software tools strategy.”</p>

<p>“While we bundle forces to create the platform that we need, we provide a platform to our tools vendors that they can use to seamlessly integrate their products in our workbench. In 
addition, the Eclipse Public License enables us to modify and extend the platform to our needs!” says Ignacio Garro, Head of IT PLM Systems and Software at Continental Automotive.</p>

<p>The Automotive Industry Working Group will operate under the Eclipse Foundation, an open source Foundation that specializes in software development tools and runtime.   Eclipse Industry 
Working Groups allow organizations to collaborate on the development of new technology innovation.  The results of the working group will be made available under the Eclipse Public License 
(EPL), a commercial friendly open source license.  </p>


	<strong>About the Eclipse Foundation</strong>
	<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible 
	frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major 
	technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the 
	Eclipse Platform.</p>
	<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse 
	and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>	</p>
  

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/Auto_IWG">Automotive IWG</a></li>
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

