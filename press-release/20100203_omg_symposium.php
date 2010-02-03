<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Call for Participation: 2nd Biannual Symposium on Eclipse Open Source Software & OMG Open Specifications";
	$pageKeywords	= "eclipse, omg, symposium, cfp, program";
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
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<p><b><i>June 23, 2010, Minneapolis, Minnesota</i></b></p>
		
     	<p>	
			Needham, MA, USA and Ottawa, ON, Canada - February 3, 2010 - <a href="http://www.omg.org" target="blank">
			OMG&trade;</a> and the Eclipse Foundation have issued a Call for Participation for the 2nd
			Biannual Symposium on Eclipse Open Source Software and OMG Open Specifications to be held
			June 23, 2010 in Minneapolis, Minn., USA. The submission deadline is February 24. For more
			information visit <a href="http://www.omg.org/eclipse-cfp" target="blank">http://www.omg.org/eclipse-cfp</a>.
     	</p>

     	<p>
     		Eclipse is an open source community whose projects are focused on building an open development
     		platform comprised of extensible frameworks, tools and runtimes for building, deploying and
     		managing software across the lifecycle. Many Eclipse projects implement one or more OMG
     		specifications. This symposium follows two successful one-day events that Eclipse and OMG
     		jointly organized in 2008 to promote and build on the partnership between Eclipse's open
     		source software and OMG's open specifications. It will include a series of discussion
     		sessions on OMG standards and corresponding Eclipse projects, to facilitate alignment between
     		current specifications and implemented software, and identify areas where the cooperation
     		could be further improved in future.
     	</p>
     	
     	<p>
			Eclipse Foundation and OMG invite position papers on any of the topic areas below, or any
			other area where an OMG specification relates to Eclipse software. The Program Committee
			will publish all submitted position papers, and invite selected paper authors to lead
			individual discussion sessions.
		</p>
		
		<p>
			Topics may include (but are not limited to) the following:
		</p>
		<ul>
		<li>Extensibility of specifications and/or open source implementations to support</li>
			<ul>
				<li>Conformant commercial implementations</li>
				<li>New application domains</li>
				<li>New requirements</li>
			</ul>
		<li>Processes for evolving specifications and/or open source implementations</li>
		<li>Open source implementations for specifications</li>
		<li>Standardized models or interfaces for open source implementations</li>
		<li>Collaboration between open source implementations</li>
		</ul>
		
		<p>
			The Program Committee particularly welcomes papers that deal with specific problems and
			solutions that may benefit from a wider discussion than that available though Eclipse Bug
			Reports or OMG Issue reporting.
		</p>
		
		<p>
			Interested individuals or organizations are invited to submit a brief (up to 600 words)
			position paper by February 24, 2010 using this web form (please select "Presentation"):
			<a href="http://www.omg.org/abstracts" target="blank">http://www.omg.org/abstracts</a>.
		</p>

		<p>
			The Program Committee will send invitations to prospective session leaders in early March
			2010. The final symposium agenda and registration details will be available on March 17,
			2010 and posted at: <a href="http://www.omg.org/news/meetings/tc/mn/special-events/Eclipse.htm" target="blank">
			http://www.omg.org/news/meetings/tc/mn/special-events/Eclipse.htm</a>.
		
		<p><strong>About the Eclipse Foundation</strong><br />
			Eclipse is an open source community, whose projects are focused on building an open development
			platform comprised of extensible frameworks, tools and runtimes for building, deploying and
			managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors,
			innovative start-ups, universities and research institutions and individuals extend, complement
			and support the Eclipse Platform. 
		</p>
		
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse
		projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.
		</p>
		
		<p>All company/product names and service marks may be trademarks or registered trademarks of
		their respective companies.
		</p>

		<p><strong>About OMG</strong><br />
			OMG&trade; is an international, open membership, not-for-profit computer industry standards
			consortium. OMG Task Forces develop enterprise integration standards for a wide range of
			technologies and an even wider range of industries. OMG's modeling standards, including the
			Unified Modeling Language&trade; (UML&reg;) and Model Driven Architecture&reg; (MDA&reg;),
			enable powerful visual design, execution and maintenance of software and other processes,
			including IT and Systems Modeling, and Business Process. OMG's middleware standards and
			profiles are based on the Common Object Request Broker Architecture (CORBA&reg;) and support
			a wide variety of industries. For more information, visit <a href="http://www.omg.org" target="blank">
			www.omg.org</a>. 
		</p>
		
	</div>
</div>
<div id="rightcolumn">
	<div class="sideitem">
	<h6>Related Links</h6>
	<ul>
		<li><a href="http://www.eclipse.org/go/EC10_program@CBJan21">EclipseCon Program</a></li>
		<li><a href="http://www.eclipse.org/go/EC10_register@CBJan21">EclipseCon Registration</a></li>
		<li><a href="http://www.eclipse.org/go/EC10_sponsor@CBJan21">EclipseCon Sponsorship</a></li>
	</ul>
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
