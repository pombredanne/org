<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Governance Documents";
	$pageKeywords	= "about, documents, foundation, governance, bylaws, agreement";
	$pageAuthor		= "M. Milinkovich Nov 20/05";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

    <div id="maincontent">
	<div id="midcolumn">
        <h1>$pageTitle</h1>
                
	    <p>The basic governance of the Eclipse Foundation is laid out in the following 
	    documents. </p>
		<div class="homeitem3col">
			<h3>Eclipse Foundation Documents</h3>
			<ul>
				<li><a href="Eclipse%20BYLAWS%202008_07_24%20Final.pdf">Bylaws:</a>
					The Bylaws lay out the basic rules of governance of the Eclipse Foundation.
					</li>
				<li><a href="Eclipse%20MEMBERSHIP%20AGMT%202010_01_05%20Final.pdf">Membership Agreement:</a> 
					The Membership Agreement describes 
					the rights and responsibilities for each class of member in the Eclipse 
					Foundation.
					<img src="../../images/updated.gif" alt="updated"></li>
				<li><a href="Eclipse_IP_Policy.pdf">Intellectual Property Policy:</a> 
					The IP Policy describes the
					policies and mechanisms that the Eclipse Foundation uses for accepting and
					licensing the intellectual property developed by Eclipse projects.
					</li>
				<li><a href="Eclipse%20ANTITRUST%202003_11_10%20Final.pdf">Anti-Trust Policy:</a> The Anti-Trust Compliance Policy describes 
					the code of conduct required by all Eclipse Foundation Members to ensure
					compliance with anti-trust laws.</li>
				<li><a href="epl-v10.php">EPL (Eclipse Public License):</a> The Eclipse Public License is the software license 
					used by	all Eclipse projects. You can also read it in 
					<a href="Eclipse%20EPL%202003_11_10%20Final.pdf">pdf</a> form.</li>
				<li><a href="Eclipse%20Logo%20Agreement%20%202008_04_30%20final.pdf">Logo Agreement:</a> 
					The Logo Agreement is used to allow the Eclipse Foundation to use the
					logos of its member companies.</li>
				<li><a href="/projects/dev_process/development_process.php">Development Process:</a> 
					This document describes the fundamental rules for creating and governing
					projects at the Eclipse community. </li>
		        <li><a href="/projects/dev_process/index-quick.php">Quick and Fun Process Prose</a>
		          A quick overview of the development and IP processes in cartoons and other forms.
	    	    </li>
			</ul>
			<h3>Eclipse Board Directives and Resolutions</h3>
			<ul>
				<li><a href="Eclipse_Using_Proprietary_Tools_Final.php">Using Proprietary Tools:</a> This is a Board Resolution outlining 
					the policies and procedures for projects using proprietary tools in their development process.</li> 
				<li><a href="Eclipse_Policy_and_Procedure_for_3rd_Party_Dependencies_Final.pdf">Third-Party Dependencies:</a> This document contains
					the guidelines for the review of third-party dependencies.</li>
				<li><a href="Eclipse_SpecOrgs_final.pdf">Standards and Specifications Policy:</a>
					This document describes how the Eclipse Foundation and Eclipse projects 
					interact with standards and specifications organizations.</li>
				<li><a href="Eclipse_Project_Requirements.php">Project Requirements:</a> 
					This document is a Board Resolution about the user interface and project data 
					guidelines for Eclipse projects.</li>
				<li><a href="Eclipse_Project_Usability.php">Project Usability:</a> 
					This is a Board Resolution about requirements to improve project usability, 
					initial user experience, and extensibility.</li>
				<li><a href="Licensing_Example_Code.pdf">Licensing Example Code:</a> 
					This is a Board approved policy on how projects may license their example code.</li>
				<li><a href="LGPL_API_Policy.pdf">Usage of LGPL APIs in Eclipse Projects:</a> 
					This is a Board approved policy on how Eclipse projects may make limited use of APIs 
					licensed under the LGPL. </li>					
			</ul>
		</div>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="../../membership/">Membership</a></li>
				<li><a href="../../membership/become_a_member/">Become a member</a></li>
			</ul>
		</div>
	</div>

	</div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
