<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Enables LocationTech";
	$pageKeywords	= "";
	$pageAuthor		= "Roxanne Joncas";
	
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
		<h1>$pageTitle</h1>
<br>
		<p><b>Ottawa, Canada – February 5, 2013</b> – The Eclipse Foundation has launched a new initiative to support user driven development of location aware systems. The new LocationTech working group will allow companies to jointly develop and deploy components that bring location awareness to Enterprise IT.</p>	
		<p>The Eclipse LocationTech initiative is led by Oracle, IBM, OpenGeo, and Actuate. The Eclipse Foundation, through LocationTech, will provide the IT infrastructure and governance to develop location aware software components and grow their user driven communities. LocationTech will also enable an ecosystem of service providers, technology providers and large enterprise consumers deploying systems using this technology. The initiative is open to any organization with an interest in adding location awareness to their business.</p>	
		<p>"Location is important to a growing range of businesses, and seamless integration with other information technology is crucial," said Mike Milinkovich, Executive Director, Eclipse Foundation. "No single vendor can address the range of issues our LocationTech working group members are going to solve. By creating a multi-vendor, open platform for location technologies we intend to spur even broader adoption of location aware products, devices and services.”</p>
		<p>“Oracle has been delivering high performance location technologies to the market for nearly two decades,” said Jim Steiner, Vice President of Oracle Server Technologies.   "We are pleased that the Eclipse LocationTech working group is becoming an emerging forum for developing this new class of open source technologies to address the location needs of social applications and high-performance computing solutions."</p>
		<p>“Location and time are integral to data analysis. The insights and critical thinking that arise from effective data analysis are important to solve challenges in business and society,” said Brenda Dietrich, IBM Fellow, Vice President & CTO for Business Analytics, Software Group, IBM. “The LocationTech working group at the Eclipse Foundation will support IBM's collaborations with others to develop innovative approaches to tackling big data at a competitive cost.”</p>
		<p>"At OpenGeo our mission is to bring spatial functions and applications into mainstream IT, avoiding the costs and inefficiencies created by forcing these functions through the traditional "GIS" process,” said Eddie Pickle, CEO, OpenGeo. “We believe our work with LocationTech and the Eclipse Foundation fits perfectly with this mission, and we are pleased to be a part of this innovative initiative."</p>
		<p>"As a company that delivers personalized business insights to a high volume of end users, Actuate is very excited to collaborate with members of the LocationTech Working Group," said Nobby Akiha, SVP of Marketing at Actuate Corporation. "This is the ideal forum to push the envelope on how combining geospatial data and analytics can solve a wider range of business problems. The Eclipse community fosters innovation while ensuring there is an emphasis on the multi-company support needed to architect and build solutions that solve the issues of the day and will become tomorrow's enduring technology standards."</p>
		<p>LocationTech has been established as an Eclipse Industry Working Group and will operate under the governance of the Eclipse Foundation. More information about LocationTech can be found at <a href="http://locationtech.org/">http://locationtech.org</a></p>
		
		<p><b>About the Eclipse Foundation</b></p>
		<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://eclipse.org/">www.eclipse.org</a></p>

	    <p>Press Contact:<br> 
		Ian Skerrett<br>
		Eclipse Foundation<br> 
		<a href="mailto:ian.skerrett@eclipse.org">ian.skerrett@eclipse.org</a></p>
				
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipse.org/">Eclipse</a></li>
				<li><a href="http://locationtech.org">LocationTech</a></li>
			</ul>
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


