<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "About Us";
	$pageKeywords	= "about, documents, history";
	$pageAuthor		= "M. Milinkovich Nov 20/05";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

    <div id="maincontent">
	<div id="midcolumn">
        <h1><a name="top"></a>$pageTitle</h1>
        <blockquote>
        <ul>
			<li><a href="#about">What is Eclipse?</a></li>
			<li><a href="#history">What is the history of Eclipse?</a></li>
		</ul>
		</blockquote>
	    <h3><a name="about"></a>What is Eclipse?</h3>

			<p>Eclipse is an open source community whose projects are focused on providing a vendor-neutral 
			open development platform and application frameworks for building software. The Eclipse Foundation 
			is a not-for-profit corporation formed to advance the creation, evolution, 
			promotion, and support of the Eclipse Platform and to cultivate both an open source community 
			and an ecosystem of complementary products, capabilities, and services.</p>
			
			<p>As it says in the Purposes section of the Foundation&rsquo;s <a href="documents/Eclipse%20BYLAWS%202003_11_10%20Final.pdf">Bylaws</a>:
			
			<blockquote><em>
			The purpose of Eclipse Foundation Inc.,(the &quot;Eclipse Foundation&quot;), is to advance the creation, 
			evolution, promotion, and support of the Eclipse Platform and to cultivate both an open source 
			community and an ecosystem of complementary products, capabilities, and services. 
			</em></blockquote> 
			</p>

			<p>Eclipse has formed an independent open eco-system around royalty-free technology and a universal 
			platform for tools integration. Eclipse based tools give developers freedom of choice in a 
			multi-language, multi-platform, multi-vendor environment. Eclipse provides a plug-in based 
			framework that makes it easier to create, integrate and utilize software tools, saving time 
			and money. By collaborating and exploiting core integration technology, tool producers can 
			leverage platform reuse and concentrate on core competencies to create new development 
			technology. The Eclipse Platform is written in the Java language and comes with extensive 
			plug-in construction toolkits and examples. It has already been deployed on a range of 
			development workstations including Linux, HP-UX, AIX, Solaris, QNX, Mac OS X and Windows based 
			systems. A full description of the Eclipse community and white papers documenting the design 
			and use of the Eclipse Platform are available at <a href="../">http://www.eclipse.org</a>.</p>

			<p>You can learn more about the structure and mission of the Eclipse Foundation by reading the 
			<a href="documents/">formal documents</a> that establish how the foundation operates, and by reading the 
			<a href="press-release/feb2004foundationpr.php">press release</a> 
			announcing the creation of the independent organization.</p>

			<p>For software licensing, website terms of use, and legal FAQs, please see our 
			<a href="../legal/">legal stuff</a> page. 
			Eclipse logos and graphics are found on our eclipse 
			<a href="http://www.eclipse.org/artwork/main.html">logos page</a>.</p>
			<p align="right"><small><a href="#top">go to top</a></small></p>
		<h3><a name="history">History of Eclipse</a></h3>
	      	<p>Industry leaders Borland, IBM, MERANT, QNX Software Systems, Rational Software, Red Hat, 
	      	SuSE, TogetherSoft and Webgain formed the initial eclipse.org Board of Stewards in November 
	      	2001. By the end of 2003, this initial consortium had grown to over 80 members.</p>
	      	
	      	<p> On Feb 2, 2004 the Eclipse Board of Stewards <a href="press-release/feb2004foundationpr.php">announced</a> Eclipse&rsquo;s reorganization into 
	      	a not-for-profit corporation. Originally a consortium that formed when IBM released the Eclipse 
	      	Platform into Open Source, Eclipse became an independent body that will drive the platform&rsquo;s 
	      	evolution to benefit the providers of software development offerings and end-users. All technology 
	      	and source code provided to and developed by this fast-growing community is made  
	      	available royalty-free via the Eclipse Public License.</p>
	      	
	      	<p>With the change to an independent not-for-profit corporation, a full-time 
	      	Eclipse management organization has been established to engage 
	      	with commercial developers and consumers, academic and research institutions, standards bodies, 
	      	tool interoperability groups and individual developers, plus coordinate the open source projects. To 
	      	maintain a reliable and accessible development roadmap, a set of councils � Requirements, 
	      	Architecture and Planning � will guide the development done by Eclipse Open Source projects. With 
	      	the support of over 115 member companies, Eclipse already hosts 9 major Open Source projects that 
	      	include a total of over 50 subprojects.</p>

			<p>To oversee and staff this new management organization, Eclipse has established a Board of Directors 
			drawn from four classes of membership: Strategic Developers, Strategic Consumers, Add-in Providers 
			and Open Source project leaders.</p>

			<p>Developers and Strategic Consumers hold seats on this Board, as do representatives elected by 
			Add-in Providers and Open Source project leaders. Strategic Developers, Strategic Consumers and 
			Add-in Providers contribute annual dues. The founding Strategic Developers and Strategic Consumers 
			are Ericsson, HP, IBM, Intel, MontaVista Software, QNX, SAP and Serena Software. In August 2004, 
			Actuate joined the Eclipse Board as a Strategic Developer.</p>

			<p>In the Eclipse Platform, code access and use is controlled through the Eclipse Public License, 
			which allows individuals to create derivative works with worldwide re-distribution rights that 
			are royalty free. Those who use the Eclipse Platform may also want to use one or more of the 
			official Eclipse logos found on our artwork page.</p>
	      	<p align="right"><small><a href="#top">go to top</a></small></p>
	      	<p></p>
      </div>
      <div id="rightcolumn">
      	<div class="sideitem">
			<h6>Thank you!</h6>
			<p>Our thanks to <a href="foundation/thankyou.php">HP, IBM, Intel, Magma and Novell</a> for generous donations to our website infrastructure.</p>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="./press-release/">Press Releases</a></li>
				<li><a href="../membership/">Membership</a></li>
				<li><a href="../membership/become_a_member/">Become a member</a></li>
			</ul>
		</div>
		
	  </div>
  </div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
