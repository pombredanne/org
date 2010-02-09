<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse RoadMap v5";
	$pageKeywords	= "about, documents, history";
	$pageAuthor		= "Donald Smith";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

    <div id="maincontent">
	<div id="midcolumn">
        <h1><a name="top"></a>$pageTitle</h1>
        <ol>
			<li><a href="#introduction">Introduction</a></li>
			<li><a href="#background">Background</a></li>
			<li><a href="#strategic">Strategic Goals</a></li>
			<li><a href="#futures">Future Directions</a>
			<ol>
				<li><a href="#cloud">cloud</a></li>
				<li><a href="#RT">eclipseRT</a></li>
				<li><a href="#Etc">TBD PLACE HOLDER</a></li>
			</ol>
			<li><a href="#Unique">The Road Map Process</a></li>	

		</ol>
		
	    <h2><a name="introduction"></a>Introduction</h2>
		<p>As required by the Eclipse Development Process, this document describes the 2008 Eclipse Roadmap.</p>

		<p>The Roadmap is intended to be a living document which will see future iterations. This document is the 
		fourth version of the Eclipse Roadmap, and is labeled as version 4.0. In order to preserve this document 
		while the underlying information evolves, the pages have been frozen by copying them from their original 
		project hosted locations.</p>

		<p>The goal of the Roadmap is to provide the Eclipse ecosystem with guidance and visibility on the future 
		directions of the Eclipse open source community. An important element in this visibility is that the 
		Roadmap help the EMO and the Board of Directors in determining which projects will be accepted by Eclipse 
		during the life of this revision of the Roadmap. In other words, new projects must be consistent with the 
		Roadmap. This does not mean that every new project must be explicitly envisaged by the Roadmap. It does 
		mean that new projects cannot be inconsistent with the stated directions of Eclipse. In particular, Eclipse 
		expects that incubator projects created in the Technology PMC will cover areas not explicitly described 
		in the Roadmap. </p>

		<a name="background"></a><h2>Background</h2>
		<p>As defined on our website, the role of the Foundation is:
		</p>
		<i>Eclipse is an open source community, whose projects are focused on building an open development 
		platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software 
		across the lifecycle. The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the 
		Eclipse projects and helps cultivate both an open source community and an ecosystem of complementary products 
		and services.</i>

		<p>As defined in our Bylaws the Purposes of the Eclipse Foundation are:
		</p>
		<i>The Eclipse technology is a vendor-neutral, open development platform supplying 
		frameworks and exemplary, extensible tools (the "Eclipse Platform"). Eclipse Platform tools are exemplary in 
		that they verify the utility of the Eclipse frameworks, illustrate the appropriate use of those frameworks, 
		and support the development and maintenance of the Eclipse Platform itself; Eclipse Platform tools are 
		extensible in that their functionality is accessible via documented programmatic interfaces. The 
		purpose of Eclipse Foundation Inc., (the "Eclipse Foundation"), is to advance the creation, evolution, promotion, and support of the Eclipse Platform and to cultivate both an open source community and an ecosystem of complementary products, capabilities, and services.</i>
		
		<a name="strategic"></a><h2>Strategic Goals</h2>
		<p>The following are the strategic goals of Eclipse.
		</p>
		<ol><li> Establish Eclipse as a leading provider of open source runtime technologies. At least since 
		2004, Eclipse projects have been shipping innovative runtime technologies such as Equinox and the 
		Rich Client Platform. The last several years have seen steady growth in runtime technologies at Eclipse. 
		At the same time, there has been rapid growth in the interest in OSGi, which is the standard upon 
		which Eclipse is based. Moving forward, we expect to see rapid growth in Eclipse runtime technologies.
		<br /><br /></li>
		
		<li> Maintain global leadership in open source tools platforms. As an open development platform, 
		Eclipse provides support for multiple operating environments and multiple programming languages. 
		The goal of Eclipse is to define for the industry a development platform which is freely licensed, 
		open source and provides support for the full breadth of the application lifecycle, in many disparate 
		problem domains, across the development and deployment platforms of choice.<br /><br /></li>
		
		<li> Create value for all its membership classes. The Eclipse Foundation exists to serve its members 
		whose primary interest in leveraging Eclipse technologies in commercial offerings such as products a
		nd services. The Eclipse Foundation will focus its energies to ensure that commercial opportunity 
		exists within the Eclipse ecosystem.<br /><br />Committers are also members of the Eclipse Foundation 
		and are in many ways its backbone. The Eclipse Foundation and its staff will continue to look for 
		opportunities to continually improve its service to its project community throughout 2009.<br /><br /></li>
		
		<li> Foster growth of the ecosystem, particularly in verticals. The creation of a large community of 
		commercial and open source organizations which rely on and/or complement Eclipse technology has been 
		a major factor in the success of Eclipse. Each time Eclipse technology is used in the development of 
		a product, service or application the Eclipse community is strengthened. Our goal in 2009 is to focus 
		our attention on the creation of industry working groups and new Eclipse projects which focus on 
		particular industry segments such as mobile, automotive, insurance and finance.<br /><br /></li>
		</ol>
				
				
		<a name="#futures"></a><h2>Future Directions</h2>
		<p>Lorem Ipsum whateverum.</p>
		
		<a name="#cloud"></a><h2>Cloud</h2>
		<p>Cloudium</p>

		<a name="#RT"></a><h2>eclipseRT</h2>
		<p>Runtiunum.</p>
		
		
		
      </div>
      <div id="rightcolumn">
      
 
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="./press-release/">Press Releases</a></li>
				<li><a href="../membership/">Membership</a></li>
				<li><a href="../membership/become_a_member/">Become a member</a></li>
			</ul>
		</div>
     	<div class="sideitem">
			<h6>Thank you!</h6>
			<p>Our thanks to <a href="foundation/thankyou.php">AMD, Cisco, HP, IBM, Intel, Novell and Primus</a> for generous donations to our website infrastructure.</p>
		</div>		
	  </div>
  </div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

