<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "EclipseCon 2011 Gold Sponsors and Technical Program Announced";
	$pageKeywords	= "eclipse, eclipsecon, gold, sponsors, program, register";
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
		
		<h2>Cloudsoft, IBM, Jasmine Conseil, Oracle, Sonatype and Xored Named as Gold Sponsors</h2>
		
		<p><b>Ottawa, Canada - January 26, 2011</b> - The Eclipse Foundation is pleased to announce the Gold
		Sponsors for EclipseCon 2011, the annual Eclipse community conference scheduled to be held March
		21-24 in Santa Clara, CA. CloudSoft, IBM, Jasmine Conseil, Oracle, Sonatype and Xored have all
		 agreed to be gold sponsors for the conference.</p>

		<p>"The EclipseCon Gold sponsors are leaders in helping us produce a great Eclipse community event,"
		explains Mike Milinkovich, Executive Director of the Eclipse Foundation.  "Having a diverse set of
		companies participate in our conference reflects the innovation and diversity in the Eclipse
		community.  I look forward to these companies showcasing their Eclipse oriented products at the
		conference."</p>
		
		<p>The EclipseCon technical program has also been finalized.  This year the conference will feature
		talks on a wide variety of subjects, including OSGi, Modeling, Eclipse Runtime, Mobile Development,
		Web Development, C/C++ Development and much more.  The 4-day technical program features 20
		tutorials and 120 sessions.  The complete program is available at <a href="http://www.eclipsecon.org/2011/program/">
		http://www.eclipsecon.org/2011/program/</a>.</p> 
		
		<p>Registration for EclipseCon is now open.   People that register by February 14, 2011 receive an
		early registration discount.   Sponsorship opportunities are also still available for companies to
		spotlight their products to the Eclipse community.   Registration information is available at
		<a href="http://www.eclipsecon.org/2011/registration/?page=registration">http://www.eclipsecon.org/2011/registration/?page=registration</a>.</p>
		
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
