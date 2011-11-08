<?php
																													require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Celebrates 10 Years of Innovation";
	$pageKeywords	= "elipse";
	$pageAuthor		= "Ian Skerrett";
	
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
<br><br><br>	
		<h1>$pageTitle</h1>

	
		<br>
  <p><strong>Ottawa, Canada – November 2, 2011</strong> – In the month of November, the Eclipse community is celebrating 10 years since the 
  start of the Eclipse open source project. In November 2001, the Eclipse IDE and platform were first made available under an open source 
  software license. IBM made the initial $40 million contribution of technology to start the Eclipse project that has now grown to 
  technology commons with an estimated value of over $800 million.  The Eclipse community has also emerged as the leading place for 
  individuals and organizations to collaborate on innovative technology development.</p>

 <strong>Key Stats</strong><br>
<ul>
<li>273 open source projects at Eclipse.org
<li>1057 committers located around the world, more than half in Europe
<li>50+ million lines of code across all Eclipse projects
<li>174 member companies of the Eclipse Foundation 
</ul> 

<br>

 <strong>Key Accomplishments</strong>
 <br>
 <p>Eclipse began as a platform for building tools, and its first killer app was the Java IDE. But the Eclipse community has since expanded 
 into many technology areas. Some of the key accomplishments of the Eclipse ecosystem are listed below. 
 <ul>
<li>Eclipse has an estimated 65% market share in the Java IDE space and over 6 million users. Since its inception, Eclipse has driven the 
consolidation of what was once a highly fragmented Java tools market. It has been instrumental in the worldwide success and adoption of 
Java itself.</li>
<li>The Eclipse C/C++ IDE (CDT) has become the de facto standard developer IDE in the embedded and real-time operating system market. At 
least 50 companies are building their developer tool solutions based on CDT.</li>
<li>The Eclipse Modeling community has grown to become the largest and most innovative community at Eclipse. The vast majority of UML 
modeling vendors worldwide base their solutions on Eclipse. </li> 
<li> The Eclipse Mylyn project is now the industry hub for integrating tools across the application lifecycle. There are over 70 Mylyn 
connectors that integrate different ALM solutions into the Eclipse developer's desktop.</li>
<li> The annual Eclipse Release Train has demonstrated how open source communities can deliver in a predictable and reliable manner. 
For the last eight years, Eclipse has shipped a major release at the end of June, on time to the day. The 2011 release train, Indigo, 
included 62 project teams, 408 developers, 49 organizations, and 46 million lines of code.</li>
<li>The Eclipse ecosystem has millions of individuals, thousands of companies, and thousands of universities and research institutes that 
have grown up around the Eclipse industry platform.  </li>

</ul>
</p>

<p>“We are incredibly proud of what Eclipse has accomplished over the last ten years,” explained Mike Milinkovich, Executive Director of the 
Eclipse Foundation.  “The combination of a strong technology platform, a vibrant commercial ecosystem, the right community model, and 
passionate individuals has made Eclipse a worldwide industry success.  Moving forward, we see Eclipse as the place for continued industry 
innovation and collaboration. The next ten years are going to be just as exciting!  Projects like Orion, Xtext, Mylyn, JGit, Virgo will keep Eclipse an exciting place.”</p>

<p>"IBM is proud of its 10-year affiliation with the Eclipse Foundation, from founding member to one of the most active advocates of 
Eclipse-based technology and product development"  said Sal Vella, Vice President Architecture and Technology, IBM. "It is vitally important 
to encourage and enable open, transparent technology communities based on open standards and open source collaboration.  The committers, 
Eclipse Foundation, member companies and users have brought not just technical innovation, but organizational and governance innovation as 
well, all of which will endure." 
</p>

<p>The Eclipse Foundation is organizing a number of activities to celebrate the 10th birthday.
<ul>
<li><a href="http://eclipsecon.org/">EclipseCon Europe</a> will kick off the celebration with a 10th birthday party.
<li><a href="http://wiki.eclipse.org/Eclipse_DemoCamps_November_2011">Regional Eclipse birthday parties</a> are being organized around the world during the month of November.
<li>Eclipse community members are invited to add themselves to the <a href="http://eclipse.org/10birthday/">Eclipse 10th birthday timeline.</a>
</ul>
More information about the 10th birthday at available at <a href="http://eclipse.org/10years/">eclipse.org/10years</a>
</p>

<br><br>	<strong>About the Eclipse Foundation</strong>
	<p>Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible 
	frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major 
	technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the 
	Eclipse Platform.</p>
	<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse 
	and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>	</p>
  

	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://eclipse.org/10years/">10 Years of Eclipse</a></li>
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



