<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon 2010 Program and Gold Sponsors Announced";
	$pageKeywords	= "eclipse, eclipsecon, gold, sponsors, program, register, keynote";
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
		
		<p><b>Ottawa, Canada - January 21, 2010</b> - The technical program and gold sponsors for EclipseCon
		2010 have been announced.  Cisco, IBM, Oracle, Red Hat, SAP and Sonatype have agreed to be Gold sponsors for
		the 7th annual Eclipse conference, to be held March 22-25, 2010 in Santa Clara, CA.</p>

		<p>"Our sponsors provide the support necessary to make EclipseCon a continued success," said Mike
		Milinkovich, Executive Director of the Eclipse Foundation. "The conference provides a vital
		opportunity for Eclipse users, developers and adopters to collaborate and advance the Eclipse
		platform.  We're privileged to have the support of Cisco, IBM, Oracle, Red Hat, SAP and Sonatype to enable
		us to put on each year a fantastic community event."</p>
		
		<p>The technical program will feature over 160 sessions and over 90 speakers.  Session tracks include
		EclipseRT, Modeling, OSGi DevCon, e4 and many more. In addition, the conference keynotes include:</p>
		<ul class="paddedlist">
			<li>Robert "Uncle Bob" Martin, a leading authority on agile software development and Founder, CEO and President of Object Mentor presenting <i>Software Professionalism and the Art of Saying "No"</i></li>
			<li>Dr. Jeff Norris, Supervisor of the Planning Software Systems Group at the NASA Jet Propulsion Laboratory presenting <i>Building Mission-Critical Tools with Eclipse for NASA Robots</i></li>
		</ul>  
		
		<p>The complete conference program is available at <a href="http://www.eclipse.org/go/EC10_program@CBJan21">www.eclipsecon.org/2010/sessions</a>.</p>
		
		<p>Registration for EclipseCon 2010 is now open, with a 20% early discount being offered until February
		14. To register, visit <a href="http://www.eclipse.org/go/EC10_register@CBJan21">www.eclipsecon.org/2010/registration</a>.
		</p>
		
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
