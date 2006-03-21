<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Community Awards Announcement";
	$pageKeywords	= "Eclipse Foundation, php, ide, zend, ibm, actuate, PHPIDE";
	$pageAuthor		= "Nathan Gervais";
	
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
		<h2>Press Release</h2>
		<h2 ALIGN="CENTER"><strong>Eclipse Foundation, Zend Technologies, and IBM Announce the Approval of the PHP IDE Project</strong></h2>
		<ul>
			<li>A Preview of the New Eclipse PHP IDE is Scheduled at the EclipseCon Conference in Santa Clara </li>
		</ul>
		<p><strong>ECLIPSECON 2006, SANTA CLARA, Calif., March 20, 2006</strong> - The Eclipse Foundation, an open source community committed to the implementation of a universal software development platform, Zend Technologies and IBM, today announced that the Eclipse PHP IDE project has been approved by the Eclipse Foundation. The technology project was proposed by Zend and IBM on October 21, 2005. It will deliver a PHP Integrated Development Environment framework for the Eclipse Platform and will encompass the development components necessary to develop PHP-based web applications and will leverage the existing Eclipse Web Tools Project.</p> 
		<p>“Eclipse has the goal to create a universal development platform that increases efficiency in enterprise software development,” said Mike Milinkovich, executive director of the Eclipse Foundation. “The new PHP IDE project will extend the Eclipse Platform to the world of PHP and will bring two highly successful communities together. Having Zend lead this project will definitely benefit the community. We are looking forward to watching this new project develop, mature and create even more opportunities for users to develop their web applications.”</p> 
		<p>The Eclipse Platform provides a universal and vendor-neutral, open development environment. The PHP IDE will extend the Eclipse Platform to support development of next generation web applications in PHP.</p> 
		<p>The project will be an initial set of Eclipse plug-ins that will add PHP capabilities to Eclipse and will provide extension points to further extend the functionality of the project. The project will be composed of a set of extensible features covering the development life cycle including functionality that deals with developing, deploying, documenting and debugging PHP-based applications.</p>
		<p>Zend Technologies is leading a growing community of technology vendors and PHP users that have collaborated on the definition, planning and implementation of this project before its first delivery. Other entities are encouraged to participate as committers, users and developers to assist with the architecture, planning, requirements and testing of the project.</p>
		<p>“The Eclipse PHP IDE project is a key milestone in our Collaboration Initiative, in which Zend business partners and PHP community members are collaborating on initiatives to advance the use of PHP,” said Doron Gerstel, CEO of Zend Technologies, Inc. “An Eclipse IDE brings many new contributors and solutions to PHP software development. The announcement helps companies leverage their existing infrastructure for software development as they are embracing PHP for their modern web application development.”</p> 
		<p>“PHP support in Eclipse is very important to IBM,” said David Boloker, CTO, Emerging Internet Technology, IBM. “In line with our overall initiative of bringing PHP to enterprise customers, we formed a strong partnership with Zend Technologies and made contributions to PHP’s core, Zend’s Framework and partnered with Zend to bring a PHP IDE project to the Eclipse platform. The PHP IDE project will increase the acceptance of PHP within the enterprise while offering new options to companies developing next generation web applications."</p> 
		<p>"Actuate is excited about the initiation of the Eclipse PHP IDE Project,” said Pete Cittadini, president and CEO of Actuate Corporation (NASDAQ: ACTU). "Eclipse penetrated 65 percent of the 4.5 million Java Developer market in only four years. With Zend’s help, it may be possible for Eclipse to penetrate 65 percent of the 2.5 million PHP developers in half that time. Because of Zend’s work to integrate their Eclipse-based PHP IDE with BIRT, the PHP community will benefit from a first-class reporting tool and BIRT’s ecosystem will significantly expand.”</p>
 		<p>The PHP IDE project is inviting participation of new vendors and participants. The project deliverables and timeline are still being finalized. The plan calls for a first version of the PHP IDE to be generally available in the second half of this year. For more information on the PHP IDE project, please visit <a href="http://www.eclipse.org/proposals/php-ide/">www.eclipse.org/proposals/php-ide/</a>. Anyone who wishes to express interest in participating in the project should contact the newsgroup at <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.tools.php">www.eclipse.org/newsportal/thread.php?group=eclipse.tools.php</a>.	</p> 
 		<p>For a preview of the Eclipse PHP IDE at EclipseCon, visit Zend’s booth (#714) or attend the “PHP IDE Project” session scheduled for Wednesday, March 22, 2006 at 2:15 p.m.</p>
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org.</a></p>
		<p><strong>About Zend Technologies</strong><br />
		Zend Technologies, Inc., the PHP company, is the leading provider of products and services for developing, deploying and managing business-critical PHP applications. PHP is used by more than twenty-two million Web sites and has quickly become the most popular language for building dynamic web applications. Deployed at more than 15,000 companies worldwide, the Zend family of products is a comprehensive platform for supporting the entire lifecycle of PHP applications. Zend is headquartered in Cupertino, California. For more information, please visit <a href="http://www.zend.com">www.zend.com</a>, or call 1-408-253-8800.</p>
		<p><strong>About IBM</strong><br /> 
		<p>IBM is the world’s largest information technology company, with 80 years of leadership in helping businesses innovate. Drawing on resources from across IBM and key IBM Business Partners, IBM offers a wide range of services, solutions and technologies that enable customers, large and small, to take full advantage of the new era of on demand business. For more information about IBM, visit <a href="http://www.ibm.com">http://www.ibm.com</a>.</p> 
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		Rachel Imbriglio<br>
		Schwartz Communications<br>
		781-684-0770<br>
		eclipse@schwartz-pr.com <br>
		<br>

		</p>
							
	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

