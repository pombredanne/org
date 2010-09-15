
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Summit Europe 2010 Program Annouced";
	$pageKeywords	= "eclipse summit europe, eclipse";
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
	<div id="fullcolumn">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>

	    <h2>Community Bulletin</h2>
	    
      	<p>September 16, 2010 - The Eclipse Foundation is pleased to announce the keynotes and technical program for the upcoming <a href="http://www.eclipsecon.org/summiteurope2010/">Eclipse Summit Europe (ESE)</a> conference.  	ESE is the
      	annual Eclipse European community event planned for November 2-4, 2010 in Ludwigsburg Germany.</p>
      	
		<p>The conference features three keynote speakers:
			<ul>
				<li>Prof. Hendrik Speck, Professor of Digital Media at the University of Application Sciences Kaiserslautem, will present "Code and Belief" based on his work in media theory, 
				philosophy and open source.
				<li>Dr. Jeff Norris, NASA Jet Propulsion Laboratory, will discuss how NASA is using Eclipse for the misison control and operation software for the NASA rover missions.  Dr. Norris was a 
				very popular keynote speaker at the recent EclipseCon 2009 conference.
				<li>Dr. Gunter D&uuml;ck, IBM Distiguished Engineer and Chief Technologist for strategic direction and cultural change, will present "The Industrialization of the Services Sector" will 
				explore how IT professionsals need to change their working and learning habits in a knowledge society.
			</ul>
		</p>
		
		<p>
		The <a href="http://www.eclipsecon.org/summiteurope2010/table/?page=table">Eclipse Summit Europe technical program</a> has also been announced.  The conference will featured over 80 different technical sessions, tutorials and symposiums, on topics including Eclipse Modeling, 
		Eclipse Runtime and the new Eclipse 4.0 platform.  Attendees will enjoy plenty of opportunities to meet and learn from Eclipse experts and fellow community members.
		</p>
		<p>Registration for Eclipse Summit Europe is <a href="http://www.eclipsecon.org/summiteurope2010/registration/?page=registration">now open.</a>  The cost to pre-register is &euro;500 (US$600)and the onsite fee is &euro;550 (US$726).</p>
	
      	<b>About the Eclipse Foundation</b>
		<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at eclipse.org </p>
 	<br><br>
	</div>
	</div>
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

