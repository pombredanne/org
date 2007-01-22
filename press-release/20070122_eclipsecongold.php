<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gold Sponsors Announced for EclipseCon 2007";
	$pageKeywords	= "Eclipsecon, 2007, gold, sponsor";
	$pageAuthor		= "Ian Skerrett";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		<h2>Press Release</h2>
		<h1>$pageTitle</h1>
		<p><i>Conference Technical Program Now Available</i></p>
		<p><strong>OTTAWA - January 22, 2007 - </strong>The Eclipse Foundation today announced that Actuate, BEA Systems, Business Objects, IBM and Klocwork have signed on as Gold Sponsors for EclipseCon 2007, the annual conference that brings together the Eclipse community. Gold Sponsorship is the highest level of sponsorship for the conference. The third annual EclipseCon will be held at the Santa Clara Convention Center, Santa Clara, Calif., March 5-8, 2007 
		</p>
		<p>“EclipseCon is one of my favorite events for the Eclipse community. It is a great opportunity to learn new things, meet new people and reacquaint oneself with the Eclipse ecosystem,” explained Mike Milinkovich, executive director, Eclipse Foundation. “We are thrilled to have our Gold Sponsors invest the time and resource in EclipseCon. Their support is important to the overall success of the conference.”</p>
		
		<p>The EclipseCon technical program is now available. Consisting of over 200 sessions, the conference program will appeal to beginners through advanced users, developers of Eclipse-based applications, enterprise architects and other technology decision makers. Please visit <a href="http://www.eclipsecon.org">www.eclipsecon.org</a> for additional information about the program. </p>

		<p><b>Registration Information</b></br>
		Registration for EclipseCon 2007 is now open. Members of the press and analyst community are encouraged to attend EclipseCon 2007. More information about the conference, including registration, travel and hotel details, can be found at <a href="http://www.eclipsecon.org">www.eclipsecon.org</a>.
		</p>
	
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		
		<p><center><i>All company/product names and service marks may be trademarks or registered trademarks of their respective companies.</i></center></p>
		
		<br /><br /><strong>Press Contact</strong><br>	
		John Moran or Lori Kroll<br/>
		Schwartz Communications<br/>
		781-684-0770<br/>
		eclipse@schwartz-pr.com <br/>
		<br />
		
		<center># # #</center> 
		<br />
		<br>
			<br>
	</div>

</div>


		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

