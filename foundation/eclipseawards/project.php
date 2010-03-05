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
	$pageTitle 		= "Eclipse Project Awards Nominations";
	$pageKeywords	= "eclipse, awards, project, nomination, eclipsecon";
	$pageAuthor		= "Lynn Gayowski";
	
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

<style type="text/css">
.switchcontent{display:none;}
</style>

<script type="text/javascript">
function switchMenu(obj) {
	var el = document.getElementById(obj);
	el.style.display = ( el.style.display != "block" )? 'block':'none' 
}
</script>	
	
	<style>
		.paddedlist li {	padding-bottom:7px;	}
	</style>

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		
		<p>
			The following is a list of nominations submitted for the Project Awards.  Nominations closed on January 29, 2010 and voting closed February 26, 2010.  Winners will be announced March 22 at <a href="http://www.eclipse.org/go/EC10_web@awards">EclipseCon 2010</a>.
		</p>
				
		<h3>Most Innovative New Feature or Eclipse Project</h3>

		<p><a href="javascript:switchMenu('amp');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Agent Modeling Platform (AMP)</a>
		</p>
		<div id="amp" class="switchcontent">
		<p>
		<ul>
			<li>
			OK, I have to be super cheesy and nominate my own project, AMP. <a href="http://eclipse.org/amp/">http://eclipse.org/amp/</a> It may not be obvious immediately obvious what you can do with it, but you gotta admit it's different. :D
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('b3');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			b3</a>
		</p>
		<div id="b3" class="switchcontent">
		<p>
		<ul>
			<li>
			b3 is the most innovative thing that we have, with the most potential everything that we do in the Eclipse consumer and committer communities.	
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('EclipseLink');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			EclipseLink</a>
		</p>
		<div id="EclipseLink" class="switchcontent">
		<p>
		<ul>
			<li>
			I would like to nominate the EclipseLink project (<a href="http://www.eclipse.org/eclipselink" target="blank">http://www.eclipse.org/eclipselink</a>) for the 'Most Innovative New Feature or Eclipse Project' award for its delivery of two Java Community Process (JCP) reference implementations in 2009 (<a href="http://www.eclipse.org/eclipselink/downloads/ri.php" target="blank">http://www.eclipse.org/eclipselink/downloads/ri.php</a>).  EclipseLink is the first Eclipse project to deliver JCP reference implementations and has firmly established the Eclipse Foundation as a key contributor to the Java platform.
			<br><br> 
			EclipseLink 1.1.0 (March 2009) is the reference implementation of Service Data Objects (SDO) 2.1.1
			<br><br>
			EclipseLink 2.0.0 (December 2009) is the reference implementation of Java Persistence (JPA) 2.0
			<br><br>
			While infrastructure is rarely though of as 'sexy', these are major development efforts that contribute both to the Eclipse and the wider Java ecosystems advancing standards.  In 2009 the EclipseLink project delivered its first release train bundles in Galileo (JavaEE & Modelling) but has also been shipped in a number of leading open source and commercial products including Oracle WebLogic, GlassFish, Spring Framework, and JOnAS (EasyBeans).  Also in 2009 the EclipseLink project added committers from SAP who plan to leverage EclipseLink JPA in NetWeaver. 
			<br><br>
			As expected from any JCP reference implementation EclipseLink supports both Java SE and EE, but as an Eclipse RT project EclipseLink also delivers bundles and fragments that enable their usage within any OSGi framework along with advanced support for Equinox.  OSGi support has also enabled the Teneo project to bring Java standard persistence support to EMF.  EclipseLink is unique in it's support for Java persistence services in OSGi and RCP applications.	
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('EMFCDO');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Eclipse Modeling Framework (EMF) Connected Data Objects (CDO)</a>
		</p>
		<div id="EMFCDO" class="switchcontent">
		<p>
		<ul>
			<li>
			I'd like to nominate CDO.
			<br><br> 
			EMF's great in bringing modelling to people at very low costs. EMF solves a lot of pains when you have to elaborate a model layer (domain models, presentation models, generation models etc.). 
			<br><br>
			CDO greatly enhances EMF in several areas and brings'em at very low cost (just regenerate your models and switch your user code to use sessions, transactions, etc.). 
			<br><br>
			CDO brings a true 3-tier architecture to models and enables a multi-user experience (sessions, transactions, etc), extends persistency to use RDBM'ses, keeps model instances in sync, offers versioning (and soon branching) and scales pretty well up to huge models.
			<br><br>
			To sum up, I'd pretend CDO is a pretty convincing step to take if you already use EMF.
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('GEF3D');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			GEF3D</a>
		</p>
		<div id="GEF3D" class="switchcontent">
		<p>
		<ul>
			<li>
			I'd like to nominate GEF3D. 
			<br><br>
			Explanation (Although I've some bias about it...): &nbsp; 3D is becoming more and more popular. GEF3D brings 3D to software development and modeling (and Eclipse). GEF3D enables graphically editing of multiple models and visualization of inter-model connections -- which is typically required in model-driven approaches. With GEF3D, you can use benefits of 3D without the need to actually program 3D or start from scratch, since you can reuse existing 2D editors (IMHO this actually is the most innovative part). A good example is Kristian Duske's 3D-GMF-Mapping editor. However, you can do much more 3D with GEF3D, as AGF (Agent Graphics Framework, part of AMP) by Miles Parker demonstrates.
			</li>
		</ul>
		</p>
		</div>
		
		<p><a href="javascript:switchMenu('Jetty');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Jetty OSGi Integration</a>
		</p>
		<div id="Jetty" class="switchcontent">
		<p>
		<ul>
			<li>
			I'd like to nominate Hugues Malphettes on his Jetty osgi integration. Jetty on it's own is a pretty significant addition to eclipse from this year (but I would not be so bold to self nominate :).   Hugues work takes the improvied OSGi bundles of jetty-7 and makes them available either as a standard HttpService, an RFC-66 webapplication or as custom jetty contexts.  All web bundles deployed will use a common jetty service.
			<br><br>
			Through this work, not only is a first class HTTP server and servlet container available to OSGi developers, but the innovations of jetty such as async servlets and WebSocket server will now be simply usable.
			<br><br>
			Read about it here: <a href="http://wiki.eclipse.org/Jetty/Feature/Jetty_OSGi" target="blank">http://wiki.eclipse.org/Jetty/Feature/Jetty_OSGi</a> and here: <a href="http://wiki.eclipse.org/Jetty/Tutorial/Jetty-OSGi_SDK" target="blank">http://wiki.eclipse.org/Jetty/Tutorial/Jetty-OSGi_SDK</a>
			</li>
		</ul>
		</p>
		</div>	

		<p><a href="javascript:switchMenu('M2TAcceleo');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Model to Text (M2T) Acceleo</a>
		</p>
		<div id="M2TAcceleo" class="switchcontent">
		<p>
		<ul>
			<li>
			I would like to nominate Acceleo as it revamped code generation with features we've never seen before. 
			<br><br>
			Two features in particular are catching the eye:<br>
			* The  like the template based search&replace completion one can use to quickly get a generator template from an existing example.<br>
			* The code/model <-> model/code traceability enabling efficient navigation from the code to the corresponding model element.
			<br><br>
			Here is a screencast demonstrating these features : <a href="http://literate.modeling.free.fr/modeling/acceleo/create-from-example-with-advanced-completion-1.htm" target="blank">http://literate.modeling.free.fr/modeling/acceleo/create-from-example-with-advanced-completion-1.htm</a>
			<br><br>
			No other code generator in the world provide that :)
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('M2TXpand');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Model to Text (M2T) Xpand</a>
		</p>
		<div id="M2TXpand" class="switchcontent">
		<p>
		<ul>
			<li>
			I'm going to add xpand as well. (That makes two noms from me. :)) Or perhaps it would be better to combine them into xpand/xtxt since they're such complimentary technologies and the oaw guys brought them to eclipse at the same time. I think they surely qualify as innovative -- they could change the way we do a lot of things.
			</li>
		</ul>
		</p>
		</div>	

		<p><a href="javascript:switchMenu('SWTCocoa');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Standard Widget Toolkit (SWT) Cocoa Port</a>
		</p>
		<div id="SWTCocoa" class="switchcontent">
		<p>
		<ul>
			<li>
			I'd like to nominate SWT's Cocoa port. The Cocoa port made 64 bit applications possible on mac (allowing for Java 6 use on Leopard), provided new SWT tooling to simplify the generation of native code and reduce barriers to entry for potential new contributors, and was well tested and very usable from its first release with Eclipse 3.5. The SWT Cocoa port has quickly become the "go to" solution for Eclipse Developers on mac.			
			</li>
		</ul>
		</p>
		</div>	

		<p><a href="javascript:switchMenu('TMFXtext');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Textual Modeling Framework (TMF) Xtext</a>
		</p>
		<div id="TMFXtext" class="switchcontent">
		<p>
		<ul>
			<li>
			I'd like to nominate TMF Xtext. May be not the most innovative, but textual DSLs are clearly a way of the future - and Xtext has unimpaired code quality and user support among Eclipse projects.
			</li>
		</ul>
		</p>
		</div>	

		<h3>Most Open Project</h3>

		<p><a href="javascript:switchMenu('e4');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			e4</a>
		</p>
		<div id="e4" class="switchcontent">
		<p>
		<ul>
			<li>
			I'd like to nominate the e4 project.  I think it's by far as open as they can be.		
			</li>
			<li>
			+1 for e4. The process to get commit rights is very lightweight - express interest and the voting begins :-)		
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('p2');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Equinox p2</a>
		</p>
		<div id="p2" class="switchcontent">
		<p>
		<ul>
			<li>
			I'd like to nominate the RT Equinox p2 project as one of the most open projects.  This project has new committers that have come on board from EclipseSource, Cloudsmith and an individual in the academic community (Universit&eacute; d'Artois).  
			<br><br>
			They are very responsive and helpful to questions on the mailing list. They have had a number of blog entries on p2 that have been very useful to the community (I've learned a lot :-)
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('Mylyn');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Mylyn</a>
		</p>
		<div id="Mylyn" class="switchcontent">
		<p>
		<ul>
			<li>
			A wild and productive community like the one that serves Mylyn cannot be fostered and maintained without a preternatural dedication to open-ness.
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('XML');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			XML Tools in Web Tools Platform (WTP) Incubator</a>
		</p>
		<div id="XML" class="switchcontent">
		<p>
		<ul>
			<li>
			David Carver, the lead, has exemplified open development precepts in his active recruitment of contributions and committers, as well as communications of status, open-ness of testing and coverage, commitment to outreach and update through his blog and twitter.
			</li>
		</ul>
		</p>
		</div>

		<p>
		To read comments submitted for each project or feature, click on its name.
		</p>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="finalists10.php">Finalists</a></li>
				<li><a href="individual.php">Individual Nominees</a></li>
				<li><a href="project.php">Project Nominees</a></li>
				<li><a href="technology.php">Technology Nominees</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_project.php">Make a Project Nomination</a></li>				
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>