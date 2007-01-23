<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_3col.php
	#
	# Author: 		Denis Roy
	# Date:			2005-11-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Awards Nominations";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Type your name here";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<h2>Current Nominations</h2>
		<p>The following is the current list of nominations for the Technology Awards.  
		Deadline for nominations is January 22, 2007.</p>
		<div class="homeitem3col">
			<h3>Best Open Source RCP Application</h3>
			<ul>
				<li><a href="http://eclipsetrader.sourceforge.net">EclipseTrader</a></li>			
				<li><a href="http://jlibrary.sourceforge.net/">jLibrary</a></li>
				<li><a href="http://portal.chronos.org/psicat-site/">PSICAT (Paleontological Stratigraphic Interval Construction and Analysis Tool)</a></li>				
				<li><a href="http://www.rssowl.org/">RSS-Owl</a></li>
				<li><a href="http://zdt.sourceforge.net">ZDT</a></li>				
				<li><a href="http://www.ziptie.org/">ZipTie</a></li>
			</ul>
		</div>		
		<div class="homeitem3col">

			<h3>Best Commercial RCP Application</h3>
			<ul>
				<li>ACE (Autosar Configuration Editor)</a></li>				
				<li><a href="http://www.arlanis.com">arlanis Universal Data Converter (UDC)</a></li>
				<li><a href="http://www.bea.com/support/guardian/">BEA Guardian&#153</a></li>				
				<li><a href="http://www.alterpoint.com/products/">DeviceAuthority v4.6</a></li>
				<li><a href="http://www.soyatec.com">eBPMN designer</a></li>				
				<li><a href="http://www.ibm.com/software/sw-lotus/lotus_expeditor">IBM Lotus Expeditor</a></li>
				<li><a href="http://www.jigsawarchive.com">Jigsaw Archive - eMail Archiving for IBM Lotus Notes</a></li>				
				<li><a href="http://www.polarion.com/subv/index.php">Polarion for Subversion - Application Lifecycle Management</a></li>
				<li><a href="http://www.tibco.com/devnet/business_studio/product_resources.jsp?tab=downloads">TIBCO Business Studio</a></li>					
				<li><a href="http://www.weblica.ch/">weblica</a></li>
				<li><a href="http://www.ivis.com/public/products/xprocess/index.cfm">xProcess</a></li>													
			</ul>
		</div>
		<div class="homeitem3col">
			<h3>Best Open Source Eclipse Based Developer Tool</h3>
			<ul>
				<li><a href="http://andrei.gmxhome.de/anyedit/index.html">AnyEdit Tools</a></li>
				<li><a href="http://aptana.com/">Aptana IDE</a></li>				
				<li><a href="http://www.eclemma.org/">EclEmma - Java Code Coverage for Eclipse</a></li>	
				<li><a href="http://eclipse-cs.sourceforge.net">eclipse-cs Checkstyle Plugin</a></li>
				<li><a href="http://ezingbuilder.sourceforge.net">eZingBuilder</a></li>
				<li><a href="http://www.polarion.org/index.php?page=overview&project=fasttrack">FastTrack</a></li>											
				<li><a href="http://www.sf.net/projects/gems">Generic Eclipse Modeling System (GEMS)</a></li>			
				<li><a href="http://www.googlipse.com">Googlipse</a></li>
				<li><a href="http://tools.hibernate.org">Hibernate Tools for Eclipse</a></li>
				<li><a href="http://bpms.intalio.com">Intalio|BPMS</a></li>
				<li><a href="http://www.kermeta.org">Kermeta</a></li>
				<li><a href="http://m2eclipse.codehaus.org/">Maven Integration for Eclipse</a></li>	
				<li><a href="http://relo.csail.mit.edu/">Relo - Relationship based Exploration</a></li>				
				<li><a href="http://subclipse.tigris.org/">Subclipse</a></li>								
				<li><a href="http://www.polarion.org/index.php?page=overview&project=subversive">Subversive</a></li>
				<li><a href="http://alexdp.free.fr/violetumlplugin">Violet UML Editor</a></li>																
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Commerical Eclipse Based Developer Tool</h3>
			<ul>
				<li><a href="http://www.accurev.com/accubridge-eclipse.html">AccuBridge for Eclipse</a></li>			
				<li><a href="http://www.adobe.com/products/flex/productinfo/overview/">Adobe Flex 2.0</a></li>
				<li><a href="http://www.agilej.com">AgileJ StructureViews</a></li>
				<li><a href="https://wiki.apexdevnet.com/index.php/Apex_Toolkit_for_Eclipse ">Apex Toolkit for Eclipse</a></li>				
				<li><a href="http://www.appperfect.com/products/devtest.html">AppPerfect DevTest4J</a></li>	
				<li><a href="http://www.bea.com/framework.jsp?CNT=index.htm&FP=/content/products/workshop/workshop/">BEA Workshop for WebLogic Platform 9.2</a></li>							
				<li><a href="http://www.twinsoft.fr/intl/en/cariocaweb/convertigo-ems-eclipse-studio.htm">Convertigo Enterprise Mashup Studio</a></li>
				<li><a href="http://www.businessobjects.com/eclipse">Crystal Reports for Eclipse</a></li>									
				<li><a href="http://www.e-citiz.com">e-Citiz AcceCit&#233; Studio</a></li>	
				<li><a href="http://www.soyatec.com">eUML2</a></li>
				<li><a href="http://www-304.ibm.com/jct03002c/software/awdtools/architect/swarchitect/">IBM Rational Software Architect</a></li>
				<li><a href="http://www.ilog.com/products/jrules/rulestudio.cfm">ILOG JRules 6</a></li>								
				<li><a href="http://www.codegear.com/Products/JBuilder/tabid/102/Default.aspx">JBuilder 2007</a></li>													
				<li><a href="http://www.technobuff.net/webapp/product/showProduct.do?name=jrequire">JRequire</a></li>
				<li><a href="https://developer.klocwork.com">Klocwork Developer for Java</a></li>
				<li><a href="http://www.kpitcummins.com/ats/developmenttools.htm ">KPIT Corona</a></li>				
				<li><a href="http://www.mvista.com/news/2006/tsuki.html ">MontaVista DevRocket</a></li>				
				<li><a href="http://www.myeclipseide.com">MyEclipse Enterprise Workbench</a></li>
				<li><a href="http://www.nexaweb.com/site/site07/index.html@cid=1236.html">Nexaweb Studio</a></li>				
				<li><a href="http://www.oxygenxml.com">oXygen XML Editor</a></li>				
				<li><a href="http://www.primeton.com/product/studio_en.php">Primeton EOS Studio</a></li>
				<li><a href="http://www.qnx.com/products/development">QNX Momentics Integrated Development Environment (IDE)</a></li>												
				<li><a href="http://www.instantiations.com/rcpdeveloper/index.html">RCP Developer&#153</a></li>								
				<li><a href="http://www.slickedit.com/content/view/410/240/">SlickEdit&#174 Plug-in v3.2 for Eclipse v3.2</a></li>				
				<li><a href="http://www.sybase.com/workspace">Sybase WorkSpace</a></li>
				<li><a href="http://www.instantiations.com/windowbuilderpro ">WindowBuilder Pro:  SWT Designer, Swing Designer & GWT Designer</a></li>
				<li><a href="http://www.wolfram.com/workbench">Wolfram Workbench</a></li>
			</ul>
		</div>
		<div class="homeitem3col">
		<h3>Best Deployment of Eclipse Technology in an Enterprise</h3>
			<ul>
				<li><a href="http://www.bardusch.de">Bardusch GmbH</a></li>
				<li><a href="http://www.jpmchase.com">JPMorgan Chase</a></li>
				<li><a href="http://www.jpl.nasa.gov/">NASA Ensemble Team</a></li>				
			</ul>
		</div>			
		<br>
	</div>



	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="awards_nominations.php">Submit a nomination</a></li>
				<li><a href="technology_awards_guidelines.php">Guidelines of Technology Awards</a></li>

			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>