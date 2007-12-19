<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse & OMG Symposium - Call for Contributions";
	$pageKeywords	= "eclipse, omg, modeling, EclipseCon";
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
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
				
		<p>Eclipse is an open source community whose projects are focused on building an open development platform
		 comprised of extensible frameworks, tools and runtimes for building, deploying and managing software 
		 across the lifecycle. Most Eclipse projects use standards in some form - in many cases these are OMG 
		 standards. </p>
		 
		 <p>OMG is an international, open membership, not-for-profit computer industry consortium which develops 
		enterprise integration standards, many of which have been implemented in Eclipse projects.</p>
	
		<p>Eclipse and OMG are jointly organising two one-day symposia to promote and build on the partnership 
		between Eclipse's open source software and OMG's open standards - one as part of EclipseCon 2008 in Santa 
		Clara, the other during the OMG Technical Meeting in Ottawa. Each symposium will be organised as a series 
		of discussion sessions on corresponding OMG standards and Eclipse projects. In each case the purpose will 
		be to discuss the alignment between current standard and implemented software, and identify areas where 
		the cooperation could be further improved in future.</p>

		<p>Eclipse and OMG invite position papers of up to 600 words on any of the topic areas below, or any 
		other area where an OMG specification relates to Eclipse software. The programme committee will publish 
		all submitted position papers, and invite some of the paper authors to lead individual discussion 
		sessions.</p>

		<p>These symposia are a unique opportunity to participate in shaping the joint future of the Eclipse 
		Open Source community and the OMG Open Standards community. Please join us for two days of stimulating 
		technical planning and discussion. </p>
		
		<p>Topics:
		<ul>
		<li> Eclipse EMF subproject & OMG Essential Meta Object Facility (EMOF)
  		<li> Eclipse EODM component & OMG Ontology Definition Metamodel (ODM)
  		<li> Eclipse Data Tools Platform (DTP) project & OMG Information Management Metamodel (IMM)
  		<li> Eclipse SOA Tool Platform (STP) project & OMG SOA
  		<li> Eclipse BPMN subproject & OMG Business Process Modeling Notation (BPMN)
  		<li> Eclipse Model to Model Transformation (M2M) subproject & OMG Query/View/Transformation (QVT)
  		<li> Eclipse OCL component & OMG Object Constraint Language (OCL)
 		<li>  Which standards need OSS implementations?
  		<li> Which OSS implementations needs to have standardised models or interfaces?
  		</ul>
  		</p>
  		
  		<p>Instructions</p>

		<p>Interested individuals or organisations are invited to submit a brief (up to 600 words) position paper 
		by 7th January 2008 using <a href="http://www.omg.org/abstracts">this web form</a> (please select "Session Presentation"), and indicating which of 
		the two symposia (or both) they intend to attend.  The Programme Committee will send invitations to prospective session leaders for each symposium in 
		early January 2008. </p>

		<p>The final symposium agenda and registration details will be available on 21st January 2008 and posted at:
		<a href="http://www.omg.org/news/meetings/eclispe-omg-2008/index.htm">www.omg.org/news/meetings/eclispe-omg-2008/index.htm</a></p>

	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php
/*
 * Created on 20-Jan-2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
