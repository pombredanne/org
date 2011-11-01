<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Polarsys: A New Industry Collaboration to Build Open Source Tools for Safety-Critical Software Development";
	$pageKeywords	= "polarsys, eclipse, open source, aerospace, defense, transportation, telecommunications, energy, healthcare, collaborate to define a tool chain ";
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
		.paddedlist li {	padding-bottom:7px;	}
	</style>
	
<div id="maincontent">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>

	
		<br>
  
<p><strong>Ludwigsburg, Germany – November 2, 2011</strong> -  A new open source industry collaboration, called Polarsys, is being created at the Eclipse Foundation to focus on building and maintaining tools for safety critical and embedded system development. Interested parties in Polarsys include  Airbus, Astrium Satellites, ATOS, CEA, CS (Communication & Systèmes), Ericsson, IRIT (Institut de recherche en informatique de Toulouse), Inria, Katholieke Universiteit Leuven, Obeo, Universidad Politécnica de Valencia, Tecnalia, Thales, and Xipp.  Polarsys will operate as a Eclipse Industry Working Group and be open to any organization interested in participating in the goals of the group.</p>

<p>The goal of Polarsys is to build and maintain an open source tools chain that is used by organizations building safety-critical and software intensive embedded systems.  Industries such as aerospace, defense, transportation, telecommunications, energy and healthcare require development tool chains with a number of specific requirements:</p>

<ul>
<li>They require advanced certification of their development tools to adhere to government and international regulations.</li>   
<li>They must support for full development lifecycle, from requirements capture through to system verification, deployment and in-field support and maintenance.</li>
<li>They must last for a very long time, in some cases 30-70 years</li>
</ul>

<p>The participants in Polarsys will collaborate to define a tool chain to meet these demanding requirements.

<p>Polarsys will build on the technology and innovation created in the very successful TopCased open source project of the French cluster Aerospace Valley. Key contributors and source code from the TopCased project will be moved into the Polarsys working group.  TopCased is a model-driven engineering environment for embedded development and satefy-critical application development.   The TopCased open source project has been downloaded more than 100000 times in the last past year and has more than 20 active contributors.

<p>"Since 2004, industrial and academics partners from aeronautic, space and automotive industries have developed Topcased as our platform for Model Based System Engineering. Now, we need to enlarge our ecosystem, so Airbus has joined the Eclipse Foundation Polarsys industry working group to ensure the long term support for our tool chain and to foster collaboration with other industry domains." explained Patrick Farail, Head of Software Development Methods for Avionic Software, Airbus.

<p>Polarsys is the result of the work of the existing OPEES group, an ITEA2 funded consortium.   The OPEES project was established originally as an Aerospace Valley structuring project to ensure long-term availability of innovative engineering technologies in the domain of dependable / critical software-intensive embedded systems.  OPEES has now participation from over 30 organizations from 5 different countries.   The work being done within OPEES will now be migrated to Polarsys.

<p>“We are thrilled to have Polarsys hosted at the Eclipse Foundation,” said Mike Milinkovich, Executive Director, Eclipse Foundation.  “Polarsys is going to solve some very important challenges for large organizations that rely upon open source tools chains for developing long-lived, safety critical software.   This is a great example of how industry collaboration in open source can solve complex industry requirements.”

<p>Polarsys has been established as an Eclipse Industry Working Group and will operate under the governance of the Eclipse Foundation.   Any organization may join and participate in the Polarsys working group.  The first deliverable from Polarsys is expected in mid-2012.







<p>Press Contact:<br/>
Ian Skerrett<br/>
Eclipse Foundation<br/>
<a href="mailto:ian.skerrett@eclipse.org">ian.skerrett@eclipse.org</a></p>
<br>
<br>	<strong>About the Eclipse Foundation</strong>
	<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.
	</p>
	<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at 
	 <a href="http://www.eclipse.org">www.eclipse.org</a></p>
  

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.polarsys.org">polarsys.org</a></li>
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



