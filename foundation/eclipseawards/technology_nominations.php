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
		
		<p>
			The following is a list of nominations for the Technology Awards.  Nominations closed on January 25, 2008.
		</p>
		
		<div class="homeitem3col">
			<h3>Best Commerical Eclipse-Based Developer Tool</h3>
			<ul>
				<li><a href="http://www.tibco.com/software/soa/activematrix_service_grid/default.jsp">ActiveMatrix Service Grid</a></li>
				<li><a href="http://www.agilej.com">AgileJ StructureViews</a></li>
				<li><a href="http://arlanis.de/index.php?lang=en">arlanis Universal Data Converter UDC Version 2.3</a></li>				
				<li><a href="http://www.soyatec.com/eface">eFace</a></li>	
				<li><a href="http://www.bea.com/framework.jsp?CNT=index.htm&FP=/content/products/workshop/workshop/">BEA Workshop for WebLogic 10.1</a></li>							
				<li><a href="http://wiki.apexdevnet.com/index.php/Force.com_IDE">Force.com IDE</a></li>
				<li><a href="http://www.intalio.com/main/products/designer/">Intalio|BPMS</a></li>
				<li><a href="http://www.jboss.com/products/devstudio">JBoss Developer Studio</a></li>
				<li><a href="http://www.codegear.com/products/jbuilder">JBuilder 2007</a></li>				
				<li><a href="http://www.myeclipseide.com">MyEclipse</a></li>
				<li><a href="http://www.nexaweb.com/home/us/index.html@cid=2301.html">Nexaweb Studio</a></li>				
				<li><a href="http://www.oxygenxml.com">&lt;oXygen/&gt; XML Editor</a></li>				
				<li><a href="http://www.polarion.com/products/alm/team.php">Polarion&reg; ALM <i>Team</i> for Subversion&trade;</a></li>
				<li><a href="http://www.polarion.com/products/svn/fasttrack.php">Polarion FastTrack</a></li>				
				<li><a href="http://www.protecode.com">Protecode</a></li>
				<li><a href="http://replaysolutions.com/technology/replay-director-java.php">ReplayDIRECTOR for Java EE</a></li>
				<li><a href="https://www.sdn.sap.com/irj/sdn/javaee5?rid=/webcontent/uuid/f0cf5ac0-1044-2a10-9a95-d7dbf7fd618e#section4">SAP Netweaver&reg; Developer Studio</a></li>
				<li><a href="http://stan4j.com/">STAN - Structure Analysis for Java</a></li>
				<li><a href="http://www.teamprise.com/product/plugin_eclipse.html ">Teamprise Plug-in for Eclipse</a></li>				
				<li><a href="http://www.testingtech.de/products_services/ttwb_intro.php">TTworkbench</a></li>					
				<li><a href="http://www.instantiations.com/windowbuilder/">WindowBuilder Pro</a></li>
				<li><a href="http://www.windriver.com/products/development_suite/">Wind River Workbench</a></li>					
				<li><a href="http://www.zend.com/en/products/studio/eclipse/">Zend Studio for Eclipse</a></li>
			</ul>
		</div>
				
		<div class="homeitem3col">
			<h3>Best Open Source Eclipse-Based Developer Tool</h3>
			<ul>
				<li><a href="http://andrei.gmxhome.de/anyedit/index.html">AnyEdit Tools</a></li>
				<li><a href="http://www.eclemma.org/">EclEmma</a></li>
				<li><a href="http://www.jboss.org/tools">JBoss Tools</a></li>				
				<li><a href="http://eclipse-jutils.sourceforge.net">JUtils ToString Generator Plugin for Eclipse</a></li>
				<li><a href="http://sourceforge.net/projects/modulipse/">Modulipse</a></li>
				<li><a href="http://openrules.com">OpenRules&reg;</a></li>
				<li><a href="http://springide.org">Spring IDE</a></li>			
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Best Commercial Equinox Application</h3>
			<ul>
				<li><a href="http://www.birt-exchange.com/modules/products/index.php?productid=3 ">BusinessReport Studio</a></li>
				<li><a href="http://www.bandxi.com/cyrano/index.html">CYRANO</a></li>
				<li><a href="http://bea.com/framework.jsp?CNT=index.htm&FP=/content/products/weblogic/event_server/">WebLogic Event Server 2.0</a></li>
				<li><a href="http://www.innoopract.com/en/products/yoxos-eclipse-distros/yoxos-enterprise.html">Yoxos Enterprise</a></li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Best Open Source Equinox Application</h3>
			<ul>
				<li><a href="http://www.eclipse.org"></a></li>			
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Best Commercial RCP Application</h3>
			<ul>
				<li><a href="http://www.tibco.com/software/soa/default.jsp">ActiveMatrix Service Bus</a></li>
				<li><a href="http://www.xjtek.com/anylogic/">AnyLogic</a></li>
				<li><a href="http://www.bea.com/support/guardian/">BEA Guardian&trade;</a></li>
				<li><a href="http://www.bea.com/jrockit">BEA JRockit Mission Control</a></li>				
				<li><a href="http://www.embarcadero.com/products/eastudio/index.html">EA/Studio</a></li>
				<li><a href="http://www.guidancer.com">GUIdancer</a></li>
				<li><a href="http://www.ibm.com/software/lotus/products/expeditor/">IBM Lotus&reg; Expeditor Software</a></li>				
				<li><a href="http://www.openmakesoftware.com">OpenMake Meister</a></li>
				<li><a href="http://www.openmethods.com/products.php">openVXML</a></li>
				<li><a href="http://www.poweredbypulse.com">Pulse</a></li>
				<li><a href="http://www.sophoracms.com/">Sophora</a></li>
				<li><a href="http://tasktop.com/">Tasktop</a></li>								
				<li><a href="http://www.xmind.org/us/">XMIND 2008</a></li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3>Best Open Source RCP Application</h3>
			<ul>
				<li><a href="http://directory.apache.org/studio">Apache Directory Studio</a></li>	
				<li><a href="http://www.escapek.org">EscapeK</a></li>
				<li><a href="http://mytourbook.sourceforge.net/ ">MyTourbook</a></li>					
				<li><a href="http://relations-rcp.sourceforge.net/">Relations</a></li>		
			</ul>
		</div>
	<br><br>	
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Awards Categories</a></li>
				<li><a href="awards_nominations.php">Make a Nomination</a></li>
				<li><a href="individual_awards_guidelines.php">Guidelines for Individual Awards</a></li>
				<li><a href="technology_awards_guidelines.php">Guidelines for Technology Awards</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>