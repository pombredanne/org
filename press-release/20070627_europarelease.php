	<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Ships Largest-Ever Release of Leading Open Source Software Development Platform";
	$pageKeywords	= "europa, simultaneous, release, 2007, press release";
	$pageAuthor		= "Nathan Gervais";
	
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
		<h1 align="center">$pageTitle</h1>
		
		<h2 ALIGN="CENTER"><strong>Europa Release Consists of 21 Projects</strong></h2>
		<h2>Press Release</h2>
		<p><strong>OTTAWA – June 27, 2007</strong> - The Eclipse Foundation today announced the availability of its annual coordinated project release, this year code named Europa.  Europa features 21 Eclipse projects for software developers and is more than double the size of last year’s record-setting release.</p>  
		<p>The release consists of more than 17 million lines of code and the contributions of over 310 open source developers located in 19 different countries.   The 2006 release, code named Callisto, involved 10 project teams, 7 million lines of code, and 260 open-source developers in 12 countries.  This is the fourth year in a row the Eclipse community has shipped a major release on schedule.</p>
		<p>Innovations in the Europa release include new runtime technology for creating server applications, developer tools for service-oriented architecture (SOA), tools for improving team collaboration and support for users of the popular Ruby programming language.</p>
		<p>“Eclipse is a very successful open development platform for the software industry’, said Mike Milinkovich, Executive Director of the Eclipse Foundation. “The Eclipse Europa release is an important milestone for fulfilling our community’s strategy of providing a common development platform for embedded, rich client, rich internet and server applications.  The tremendous advantage Eclipse provides is that it spans these different types of applications with a common component model, frameworks and tools.”</p>
		<p>Some highlights of the projects being released:</p>
		<ul class="paddedlist">
			<li>Eclipse Equinox has added new services and capabilities to ease the development and deployment of server applications running on the Equinox runtime.</li>
			<li>Eclipse Business Intelligence and Reporting Tools (BIRT) has added support for dynamic crosstabs, output to Microsoft Word and Excel formats and now allows for web services to act as a data source.   These new features allow for more sophisticated reporting functionality to be integrated into Java applications.</li>
			<li>The Eclipse SOA Tools Project (STP) has made available their first release.   The release provides SOA developers tool support for SCA and JAX-WS standards, as well as a BPMN Modeler tool.</li>
			<li>The Eclipse Modeling project has updated the Eclipse Modeling Framework (EMF) to support Java 5 generics, allowing for creation and management of more complex and flexible data models.</li>
			<li>Eclipse Mylyn (formerly named Mylar) has added new collaboration features to enable task-centric collaboration for development teams.  For developers working on large applications Mylyn’s task Task-Focused UI reduces information overload and simplifies multi-tasking.</li>
			<li>Eclipse Dynamic Language Toolkit (DLTK) has introduced IDE support for Ruby and provides a framework to reduce complexity of developing IDEs for other dynamic languages, such as TCL and Python.</li>
			<li>Eclipse CDT release has made significant improvements for easier tool chain integration, specifically tighter integration with the MinGW gnu tool chain thus making it easier to develop C/C++ applications on the Windows platform.</li>
			<li>The Java development tools (JDT) project has introduced a number of features to increase the productivity of Java developers using Eclipse, including an enhanced debugger via hyperlinking and a new Quick Access feature to provide easier IDE navigation.</li> 
			<li>Eclipse Web Tools Project (WTP) has introduced a number of features to increase the productivity of Web developers including a new visual editor for HTML, JSP and JSF, as well as support for new standards, such as Axis2 and basic JEE 5 support.</li>
		</ul>
		<p>The Europa release will be available from <a hrefeclipse.org on June 29, 2007.  New download options have been created to provide complete download packages for users requiring a Java IDE, JEE IDE, C/C++ IDE and an SDK for RCP and Plugin developer.   </p>
		<p>The complete list of Eclipse projects available in the Europa release includes:</p>
		<ul class="paddedlist">
			<li><a href="http://www.eclipse.org/ajdt/">AJDT 1.5</a></li>
			<li><a href="http://www.eclipse.org/birt/">BIRT 2.2</a></li>
			<li><a href="http://www.eclipse.org/buckminster/">Buckminster 0.1.0</a></li>
			<li><a href="http://www.eclipse.org/cdt">CDT 4.0</a></li>
			<li><a href="http://www.eclipse.org/datatools/">DLTK 1.0</a></li>
			<li><a href="http://www.eclipse.org/dsdp/dd/">DSDP DD 0.9</a></li>
			<li><a href="http://www.eclipse.org/dsdp/tm/">DSDP TM  2.0</a></li>
			<li><a href="http://www.eclipse.org/dltk/">DTP 1.5</a></li>
			<li><a href="http://www.eclipse.org/ecf/">ECF 1.0</a></li>
			<li><a href="http://www.eclipse.org/eclipse/">Eclipse Platform 3.3</a> </li>
			<li><a href="http://www.eclipse.org/dash/">Dash 1.0</a></li>
			<li><a href="http://www.eclipse.org/emf/">EMF 2.3</a></li>
			<li><a href="http://www.eclipse.org/emft/">EMF-QTV 1.1</a></li>
			<li><a href="http://www.eclipse.org/m2t">M2T (JET) 0.8</a></li>
			<li><a href="http://www.eclipse.org/gef">GEF 3.3</a></li>
			<li><a href="http://www.eclipse.org/gmf/">GMF 2.0</a></li>
			<li><a href="http://www.eclipse.org/modeling/mdt/">MDT 1.0</a></li>
			<li><a href="http://www.eclipse.org/mylyn/">Mylyn 2.0</a></li>
			<li><a href="http://www.eclipse.org/stp/">STP 0.6</a></li>
			<li><a href="http://www.eclipse.org/tptp/">TPTP 4.4</a></li>
			<li><a href="http://www.eclipse.org/webtools/main.php">WTP 2.0</a></li>
		</ul>
		
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		Steve Eisenstadt<br>
		Page One Public Relations<br>
		919-781-8096<br>
		steve@pageonepr.com<br>
		<br>

		</p>
							
	</div>
	<div id="rightcolumn">
	<div class="sideitem">
		<h6>Related Links</h6>
		<ul>
			<li><a href="/europa/europaeffect.php">Europa Quotes</a></li>
		</ul>
	</div>
	</div>
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

