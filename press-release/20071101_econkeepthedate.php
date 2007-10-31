	<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Fifth Annual Eclipse Community Conference Announces Keynotes";
	$pageKeywords	= "eclipsecon, 2008, keynote, date";
	$pageAuthor		= "Nathan Gervais";
	
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
		<h1 align="center">$pageTitle</h1>
		<h2>Press Release</h2>
		<p><strong>OTTAWA - October 31, 2007 </strong> - The Eclipse Foundation announced today the keynote speakers for its fifth annual community conference, EclipseCon 2008. The conference brings members of the Eclipse community together to explore, share and learn new techniques, ideas and technologies, as well as to provide information about the latest developments and future plans of the Eclipse projects. The conference will be held March 17-20, 2008 at the Santa Clara Convention Center. </p>  
		<p>The keynote speakers for EclipseCon 2008 will feature well known industry speakers including Cory Doctorow, science fiction author and open source advocate; Dan Lyons, also known as the Fake Steve Jobs; and Sam Ramji, Director at Microsoft Open Source Labs.</p>
		<p>“EclipseCon is an intense, technical conference that appeals to both developers and users of the many Eclipse projects and technologies,” said Doug Gaff, EclipseCon 2008 Program Chair and Wind River Engineering Manager.  “I am excited to help organize the technical program for this annual community event.”</p>
		<p>Registration for EclipseCon 2008 is <a href="http://www.eclipsecon.org/2008/index.php?page=registration/">now open</a>. The conference will feature in-depth tutorials, long-talk sessions, short-talk sessions, demos and panels.  This year, a single fee will provide access to the entire conference.  In addition, the first 100 paid registrants to the conference will receive a copy of the book <a href="http://www.eclipsewtp.org/">Eclipse Web Tools Platform:  Developing Java Web Applications.</a></p>
		<p>Members of the press and analyst community are also encouraged to attend EclipseCon 2008. More information about the conference, including how to register, can be found online at <a href="http://www.eclipsecon.org">http://www.eclipsecon.org.</a></p>

		<p>Sponsorship opportunities are available for EclipseCon.  Gold sponsors already confirmed include Oracle and Wind River.  See <a href="http://www.eclipsecon.org/2008/sponsorship">http://www.eclipsecon.org/2008/sponsorship</a> for more information on becoming a sponsor.</p>
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br/>	
		Steve Eisenstadt<br/>
		Page One Public Relations<br/>
		919-781-8096<br/>
		steve@pageonepr.com<br/>
		<br/>
		</p>
							
	</div>

</div>


EOHTML;

	$html = mb_convert_encoding($html, "HTML-ENTITIES");
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

