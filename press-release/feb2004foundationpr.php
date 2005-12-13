<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Forms Independent Organization";
	$pageKeywords	= "foundation, legal, history, created, consortium";
	$pageAuthor		= "M. Milinkovich";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

    <div id="maincontent">
		<div id="midcolumn">
		<h1>$pageTitle</h1>
		<blockquote><em>
			<UL>
        		<LI>Membership Launches Not-For-Profit Corporation to Implement and Share 
          		Technology</LI>
        		<LI> Establishes Scalable Governance Model for Open Source Projects and 
          		Commercial Participation<br></LI>
      		</UL>
      		</blockquote></em>
     	<P> ECLIPSECON, ANAHEIM, CA&#8212;February 2, 2004&#8212;The Eclipse Board 
        of Stewards today announced Eclipse&#8217;s reorganization into a not-for-profit 
        corporation. Originally a consortium that formed when IBM released the 
        Eclipse Platform into Open Source, Eclipse is now an independent body 
        that will drive the platform&#8217;s evolution to benefit the providers 
        of software development offerings and end-users. All technology and source 
        code provided to this fast-growing ecosystem will remain openly available 
        and royalty-free.<br>
      </p>
      <p>With this change, a full-time Eclipse management organization is being 
        established to engage with commercial developers and consumers, academic 
        and research institutions, standards bodies, tool interoperability groups 
        and individual developers, plus coordinate Open Source projects. To maintain 
        a reliable and accessible development roadmap, a set of councils&#8211;Requirements, 
        Architecture and Planning&#8211;will guide the development done by Eclipse 
        Open Source projects. With the support of over 50 member companies, Eclipse 
        already hosts 4 major Open Source projects that include 19 subprojects.<br>
      </p>
      <P> To oversee and staff this new management organization, Eclipse has established 
        a Board of Directors drawn from four classes of membership: Strategic 
        Developers, Strategic Consumers, Add-in Providers and Open Source project 
        leaders. Strategic </p>
      <p>Developers and Strategic Consumers hold seats on this Board, as do representatives 
        elected by Add-in Providers and Open Source project leaders. Strategic 
        Developers, Strategic Consumers and Add-in Providers contribute annual 
        dues. The founding Strategic Developers and Strategic Consumers are Ericsson, 
        HP, IBM, Intel, MontaVista Software, QNX, SAP and Serena Software. In 
        the coming weeks, the Board will announce its selection of a full-time 
        Executive Director to lead the Eclipse management organization.<br>
      </p>
      <p>&quot;As mainstream IS organizations begin implementing and deploying 
        service-oriented architectures like J2EE and .NET into new computing environments, 
        having standardized, integrated and interoperable technologies will become 
        increasingly important to their success. Industry consortiums like Eclipse 
        and NetBeans that implement tools based upon standards from groups like 
        the Object Management Group (OMG) and Java Tools Community (JTC) are well-suited 
        to address these types of problems&#8211;especially if the groups can 
        coordinate their efforts.&quot; says Gartner vice-president and research 
        director, Michael Blechar.<br>
      </p>
      <p>According to Skip McGaughey, spokesperson for Eclipse, &#8220;This is 
        a significant step forward in the evolution of Eclipse. For the Open Source 
        development community, we&#8217;re establishing a strong support base 
        that will strengthen the projects and expand a powerful reusable architecture. 
        This creates long-term opportunities for reuse, interoperation and innovation 
        that enable both providers and consumers to take development tool technology 
        to the next level in functionality integration and usability.&#8221; <br>
      </p>
      <p>With more than 18 million download requests recorded since its inception, 
        adoption of the Eclipse platform continues to accelerate. Development 
        environment providers value its powerful reusable architecture that provides 
        integration &#8220;by construction,&#8221; reduces duplication of effort 
        and creates new opportunities for innovation and differentiation. Add-in 
        providers are attracted by the ease with which seamless integration can 
        be achieved as well as the large business opportunity represented by this 
        growing ecosystem. End users appreciate the common look-and-feel and off-the-shelf 
        integration across a large selection of independently developed offerings. 
        With reorganization, Eclipse&#8217;s members have established the strategic, 
        operational and financial means to effectively support and accommodate 
        continued growth.</p>
      <h2>Strategic Partner Quotes</h2>
      		<P> <strong>Hewlett Packard (HP)</strong><br>
              &quot;As an independent, not-for-profit corporation, Eclipse will 
              provide a superior environment for tool integration and interoperability 
              and will continue to cultivate a vibrant community of tool providers 
              and users,&quot; said Mike Rank, director of developer resources 
              and partner enablement for HP. &quot;HP is proud to serve on the 
              Eclipse board of directors and provide its experience and expertise 
              in both using and extending the Eclipse technology. As a strategic 
              member of the Eclipse organization, HP is committed to providing 
              developers with the tools needed to incorporate and leverage application 
              management capabilities over the entire software development lifecycle.&quot;</p>
            <p><strong>IBM</strong><br>
              &quot;IBM, a leader and champion of the Eclipse movement, is committed 
              to continuing our significant investment to improve the Eclipse 
              platform, frameworks and related tools,&quot; said Lee R. Nackman, 
              IBM vice president of desktop development tools and chief technical 
              officer of Rational software.&quot; To deliver on the promise of 
              Eclipse, accommodate future growth, and further enhance the value 
              of this technology to the open community, IBM is proud now to help 
              launch Eclipse as an independent not-for-profit organization.&quot;</p>
            <p><strong>Intel</strong><br>
              &quot;Intel is pleased to be a founding member of the new independent 
              Eclipse,&#8221; said Jonathan Khazam, general manager of Intel's 
              Software Products Division and member of the new Eclipse Board of 
              Directors. &quot;We are committed to playing an active role in the 
              new organization and believe Eclipse will enhance our Linux development 
              tool product offerings. Intel&#8217;s deep knowledge of processor 
              architecture and tools technology will enable us to participate 
              in enhancing Eclipse for the next generation of development tools.&quot;</p>
            <p><strong>MontaVista</strong><br>
              &quot;The rapid and broad adoption of Eclipse technology leverages 
              the immense resources of the Open Source community, as does Linux, 
              for the benefit of software developers worldwide,&quot; commented 
              Jim Ready, chief executive officer and president of MontaVista Software. 
              &quot;MontaVista Software has adopted Eclipse as the strategic development 
              framework, benefiting our customers, and proudly demonstrates our 
              commitment to Eclipse through our membership in the new independent 
              entity, and with our contributions to Eclipse technology.&#8221;</p>
            <p><strong>QNX Software Systems</strong><br>
              &quot;QNX is proud to be a driving force behind Eclipse since its 
              inception,&quot; said Dan Dodge, chief executive officer of QNX 
              Software Systems Ltd. &quot;With a seat on the board as a strategic 
              developer member, we are reinforcing and extending our commitment 
              to the goals of seamless tool integration and advancement of best-in-class 
              tooling for embedded software development.&quot;</p>
            <p><strong>SAP</strong><br>
              &quot;As a founding member of the new independent entity and an 
              early adopter of Eclipse technology in our SAP NetWeaver Developer 
              Studio, we are pleased to serve on the newly formed Eclipse Board 
              of Directors,&quot; said Michael Bechauf, vice president NetWeaver 
              Standards. &quot;SAP has taken a very active role in promoting the 
              Eclipse open source tools platform and we look forward to contributing 
              to its continued success. Participation in the earliest development 
              phases of Eclipse has allowed our customers to leverage the Eclipse 
              ecosystem. The momentum Eclipse has gained will help our customers 
              and partners benefit from a more rapid development of the platform 
              with increased support from a more diverse ecosystem.&quot;</p>
            <p><strong>Serena Software</strong><br>
              &quot;We are excited to participate in the new Eclipse as a strategic 
              consumer,&#8221; said Boris Kapitanski, vice president of Strategic 
              Technology at Serena Software. &#8220;Eclipse is becoming a very 
              attractive platform for a variety of companies, due mostly to its 
              highly integrated nature. Our goal is to make Eclipse even more 
              usable and robust by extending its capabilities from a development 
              platform to a complete application lifecycle support environment 
              to attract more business, marketing, and technical users to the 
              Eclipse community.&quot;</p>
   		<h2>Announced Eclipse Add-in Providers</h2>
   		<blockquote>
   		<P>Advanced Systems Concepts<br>
              Borland<br>
              Candle Corporation<br>
              CanyonBlue<br>
              Catalyst Systems Corporation<br>
              CollabNet<br>
              Embarcadero Technologies<br>
              ETRI<br>
              Exadel<br>
              Fujitsu<br>
              Genuitec<br>
              Hitachi Software<br>
              ILOG<br>
              INNOOPRACT<br>
              Instantiations, Inc.<br>
              Logic Library<br>
              M7 Corporation<br>
              Metanology Corporation<br>
              Micro Focus<br>
              MKS<br>
              Novell<br>
              Optena Corporation<br>
              Oracle<br>
              PalmSource<br>
              Parasoft Corporation<br>
              QA Systems<br>
              Red Hat<br>
              SAS<br>
              Scapa Technologies Limited<br>
              SilverMark<br>
              SlickEdit<br>
              Teamstudio<br>
              Telelogic<br>
              Tensilica<br>
              TimeSys<br>
              Unisys<br>
              VA Software, Inc.<br>
              Wasabi Systems<br>
              webMethods<br>
              Wind River<br>
            </p>
            </blockquote>
    	<h2>About Eclipse</h2>
    	<P> Eclipse has formed an independent open eco-system around royalty-free 
              technology and a universal platform for tools integration. Eclipse 
              based tools give developers freedom of choice in a multi-language, 
              multi-platform, multi-vendor environment. Eclipse provides a plug-in 
              based framework that makes it easier to create, integrate and utilize 
              software tools, saving time and money. By collaborating and exploiting 
              core integration technology, tool producers can leverage platform 
              reuse and concentrate on core competencies to create new development 
              technology. The Eclipse Platform is written in the Java language 
              and comes with extensive plug-in construction toolkits and examples. 
              It has already been deployed on a range of development workstations 
              including Linux, QNX, OSx and Windows based systems. A full description 
              of the Eclipse community and white papers documenting the design 
              and use of the Eclipse Platform are available at 
              <a href="http://www.eclipse.org">http://www.eclipse.org</a>.</p>
     	<h2>Media Contact</h2>
     	<p>Barbara Patterson<br>
        Patterson and Associates<br>
        480-488-6909<br>
        <a href="mailto:%20barbara@patterson.com">barbara@patterson.com</a></p>
        <em>
        <P>Some components of Eclipse may be governed by license terms other 
              than the CPL. </P>
        <P>&#9;Brand or product names are registered trademarks or trademarks 
        of their respective holders. Java and all Java-based trademarks 
        are trademarks or registered trademarks of Sun Microsystems, Inc. 
        in the United States and other countries.</P>
        </em>
	</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
