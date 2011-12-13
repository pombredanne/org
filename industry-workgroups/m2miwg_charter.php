<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# m2miwg_charter.php
	#
	# Author: 		Ian Skerrett
	# Date:			2011-12-13
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse M2M Industry Working Group";
	$pageKeywords	= "m2m, eclipse  ";
	$pageAuthor		= "Ian Skerrett";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>
		
		<h2>Charter</h2>
		
		<h3>Introduction to M2M</h3>
<p>
Many industry domains such as smart metering, energy management, inventory control, fleet management, healthcare, and security have an 
inherent need for technology, products and solutions that interface physical world events from sensors, actuators and other types of 
devices, with Enterprise and Web applications. M2M technology enables these domains, supporting not only the devices and device networks, 
but also integration with a wide range of enterprise middleware and Web programming models.
</p>
<p>An M2M solution is generally composed of:
<ul>
<li>Physical assets and devices (sensors, actuators, controllers, LCD display, etc.)
<li>M2M Gateway to manage assets and server communication. These include communication modules with wireless connectivity (GPRS, 3G, WiFi, Wimax, etc.)
<li>Monitoring or other domain-specific server infrastructure, with which gateways, communication modules and assets in the field communicate. 
</ul>

<p>Usually, the M2M server infrastructure has to be interfaced with other information systems. Examples are telecom operators 
(e.g. SIM card subscription management or billing), and enterprise systems (e.g. cargo tracking and vehicle maintenance). An M2M server
 also needs to expose interfaces allowing third-party applications to access collected data, accept and process control functions, and to 
 perform management and provisioning operations on modules and assets in the field.

<h3>Concerns Adressed by M2M IWG</h3>
<p>The objective of the M2M Working group is to encourage, develop, and promote opens source solutions that can be used to overcome market 
inhibitors found in most M2M ecosystems, such as:</p>
<ul>
<li>Fragmented market: wide range of embedded platforms, programming models, connection types, communication protocols.
<li>No widely accepted M2M architectural guidelines.
<li>Limited choices in accepted open, standard communication protocols to deal with M2M requirements and constraints such as; power, CPU, cost, connection availability, and bandwidth.
<li>Unnecessarily tight coupling between applications, systems and communication interfaces.
<li>Lack of Open Source M2M development solutions (development environment, development boards)
<li>Lack of integration with open source Enterprise and Web development tools and environments.
<li>Monolithic applications and lack of reusable software components (e.g. drivers, communication protocols)
<li>High barrier of entry to developers who need to integrate M2M, Enterprise, and Web application systems. e.g. hardware and infrastructure costs, no relevant software engineering environment, proprietary  interfaces, numerous and complex programming models.
<li>Inadequate open source support for M2M-oriented middleware, including M2M integration with established middleware solutions.
</ul>
</p>
<h3>Purpose and scope of the Working Group</h3>

<p>The Eclipse Foundation is a place where people collaborate to deliver exemplary, extensible tools, frameworks and runtime components. 
The Machine-to-Machine (M2M) Industry Working Group aims at defining an open development environment and key runtimes for M2M solutions 
that will enable open solutions.  The M2M Industry Working Group will address the following topics:  </p>
<ul>
<li>Development tools, including simulators/emulators
<li>Reference architecture and programming model
<li>Effective decoupling between applications, systems and communication interfaces
<li>Open and standard communication protocols
<li>Open and standard APIs (embedded & server).
<li>Communicate and evangelize the solutions produced by the M2M IWG.
</ul>
</p>

<p>Because M2M developers currently lack an Integrated Development Environment, the M2M Industry Working Group will initially focus on the 
definition of such an environment, along with key enabling runtime components for open interfaces.</p>

<h3>Connections with other Eclipse Working Groups</h3>

<p>The M2M Industry Working Group may have interactions with the Polarsys Working Group.
</p>

<h3>Connections with other standards and industry groups</h3>

<p>The M2M Industry Working Group will also work in collaboration with other M2M Industry Groups and Standards organizations in order to 
avoid fragmentation and duplication of effort. The Technical Committee M2M at ETSI  is, for example, already working on the definition of 
an end-to-end overall high level architecture for M2M applications.</p>

<h3>Work areas</h3>
<p>The M2M Industry Working Group will work on the following topics: </p>

<h4>M2M tooling</h4

<p>The M2M Industry Working Group will work on the specification of the engineering tools needed to develop M2M solutions. The Koneki 
Eclipse Technology Incubator Project will host the implementation of the tools specified by the Working Group.</p>

<p>The M2M Industry Working Group will work on the requirements and specifications to support the integration of M2M tooling, with 
relevant Eclipse tooling that is used by developers of the Enterprise and Web applications who integrate with M2M embedded and server 
applications.
</p>

<h4>M2M software components</h4>

<p>The M2M Industry Working Group will identify and specify software components needed to efficiently develop M2M solutions 
(communication services, industrial protocol implementations).</p>

<h4>M2M use cases</h4>

<p>The M2M working group will identify and maintain common use cases that represent typical M2M environments. The goal is to highlight the 
capabilities and requirements that need to be standardized to ensure open interoperability, portability, reusability, and ease of 
integration.</p>

<h4>Reference architecture</h4>

<p>The M2M Industry Working Group will work on the definition of a set of architectural guidelines ("M2M Blueprints") for M2M solutions, 
derived from the identified use cases.</p>

<h4>Open communication and messaging protocol</h4>

<p>The M2M Industry Working Group will identify, reference and specify open specifications for lightweight communication protocol 
supporting two-way communication between devices and servers. The Working Group will be responsible for the creation and the maintenance 
of the standard, Linux-based, implementation of this protocol; and will also create and maintain a Compatibility Test Suite to enable 
validation of other implementations.
</p>

<h4>APIs</h4>

<p>The M2M Industry Working Group will work on the definition of Application Programming Interfaces both on the embedded and on the 
server-side in order to help increase the modularity, extensibility and effective decoupling of M2M solutions.</p>

<h4>M2M software components repository</h4>

<p>The M2M Industry Working Group will define the technical requirements for allowing the delivery of M2M-oriented software components 
(industrial protocol drivers, embedded devices models, code generators, etc.) via the Eclipse Marketplace.</p>

<h4>M2M "hacker place" and sandbox</h4>

<p>Because M2M development requires actual hardware, and likely prepaid airtime, in order to perform end-to-end experiments, the M2M 
Working Group may work on the definition of a so-called "hacker place", which will take the form of a website easing the ordering of 
M2M developer kits (development boards, wireless sensors, 3G modems, etc.). The M2M Working Group will work together with the Eclipse 
Foundation and hardware providers to propose discounts on developer kits, airtime, etc.
</p>
<p>Developing and testing M2M integration with Enterprise and Web applications requires access to middleware, monitoring servers, 
enterprise servers and various Web application interfaces. The M2M Working Group will work to define and promote the availability of 
a "sandbox" of accessible server environments for the development, testing and integration of M2M systems with Enterprise, Web, and 
cloud-based software to developers using Eclipse M2M tools and runtimes.
</p>

<h4>Communication and Evangelism</h4>

<p>The M2M Industry Working Group will work to communicate and evangelize the solutions developed by the M2M IWG.  The activities may 
include joint press releases, joint trade show participation, publishing white papers and/or preparing other content that communicates the 
vision and solutions of the IWG.</p>



<h3>Participation Guidelines - Membership</h3>

<h4>Steering committee member</h4>

Steering committee member are required to: 
<ul>
<li>Be a Strategic, Enterprise or Solutions member of the Eclipse Foundation. 
<li>Provide at least 2 full-time equivalent resources, on an annualized basis, that contribute to the activities of the M2M IWG.  The activities can include  1) committers working on Eclipse open source projects that support the M2M roadmap, 2) creation of roadmaps and technical documents (including, for example, architectures, blueprints and best practices) supporting the IWG work, 3) evangelism and community development for the IWG and 4) other activities agreed to by the Steering committee.
<li>Regularly participate in all M2M working group meetings and provide timely feedback on the M2M working group documents. 
<li>Provide announcement support for the official releases of the working group (specifications, tools) and ongoing promotion to M2M actors (solution providers, telcos, etc.).
</ul>

<h4>Member participants</h4>

Member participants are required to: 
<ul>
<li>Be an Eclipse Foundation member at Strategic, Enterprise or Solution level. 
<li>Regularly participate in the Working Group meetings.
</ul>

<h3>Initial Members</h3>
<ul>
<li>Sierra Wireless,
<li>IBM,
<li>Eurotech,
<li>Band XI,
<li>Axeda.
</ul>
	
	
<h3>Industry Working Group Process</h3>
<p>The M2M Industry Working Group will follow the <a href="industry_wg_process.php">Eclipse Industry Working Group Process</a>.</p>
		
 <br><br>
</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

