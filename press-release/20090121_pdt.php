<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Announces Latest PHP Development Tools (PDT) ";
	$pageKeywords	= "eclipse, php, pdt, php development tools";
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
		<h1>$pageTitle</h1>
		
		<p><b>Ottawa, Canada -- January 21, 2008</b> -- The Eclipse Foundation is pleased to announce a major upgrade to the popular Eclipse PHP Development Tools (PDT) project. PDT is an open source development tool that provides all the basic code editing capabilities developers need to get started developing PHP applications. The focus of the PDT 2.0 release is to add support for the object-oriented programming features of PHP and to improve the overall user experience of the PDT environment.</p>
	
		<p><h3>To support the object-oriented features of PHP, PDT 2.0 now includes:</h3>
		<ul class="paddedlist">
			<li>Type Hierarchy view that navigates object-oriented PHP code faster and more easily.</li>
			<li>Type and method navigation that allows for easy searching of PHP code based on type information.</li>
			<li>Override indicators that visually tag PHP methods that have been overridden.</li>
		</ul></p><br/>
		
		<p><h3>Usability improvements to PDT 2.0 include:</h3>
		<ul class="paddedlist">
			<li>A new indexing and caching engine, based on the Eclipse Dynamic Language Toolkit (DLTK), which significantly improves the overall performance of common PDT operations.</li>
			<li>A new Mark Occurrences indicator that makes it easier for developers to see where an element is referenced.</li>
			<li>A more sophisticated Code Assist feature that is smarter about providing code completion options based on PHP variable types.</li>
		</ul></p><br/>
		<p>The enhancements provided by release 2.0 make PDT a compelling choice for anyone looking to build simple PHP applications. PDT 2.0 is also ideal for Java programmers who want to write PHP code by providing them with an environment similar to the Eclipse Java Development Tools (JDT) they are already familiar with.  </p>
		<p>"PDT is one of our most popular downloads at Eclipse," said Mike Milinkovich, Executive Director of the Eclipse Foundation. "Since the initial release it has been downloaded over 1 million times. Clearly PDT adoption has been very successful in the Eclipse and PHP communities."
		<p>"Release 2.0 demonstrates our continued commitment to the Eclipse community," said Andi Gutmans, co-founder and SVP of R&D and Alliances at Zend Technologies, contributor to the PDT project. "PDT is not only the premier open source PHP development tool, but is also the basis for Zend's commercial, professional-grade IDE for PHP, Zend Studio for Eclipse. Additionally, in order to further align with Eclipse, PDT will become part of the Eclipse Galileo simultaneous release."</p>
		<p>PDT is now available for download at <a href="http://www.eclipse.org/pdt/">www.eclipse.org/pdt</a>. </p>
				
		<p><b>About the Eclipse Foundation</b><br />
		Eclipse is an open source community, whose projects are focused on building an open development platform comprised of extensible frameworks, tools and runtimes for building, deploying and managing software across the lifecycle. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
		Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		
		<p><b>About Zend</b><br />
		Zend Technologies, Inc., The PHP Company, is the leading provider of products and services for developing, deploying, and managing business-critical PHP applications.  PHP is used by more than twenty million web sites and has quickly become the most popular language for building dynamic web applications.  Deployed at more than 25,000 companies worldwide, the Zend family of products is a comprehensive platform for supporting the entire lifecycle of PHP applications. Zend is headquartered in Cupertino, California. </p>

		<p>Zend downloads and product information:<br/>
		PDT information and downloads on Zend.com: <a href="http://www.zend.com/en/community/pdt">http://www.zend.com/en/community/pdt</a><br/>
		Zend Studio for Eclipse: <a href="http://www.zend.com/en/products/studio/">http://www.zend.com/en/products/studio/</a> <br/><br/>
		For more, please visit <a href="http://www.zend.com">http://www.zend.com</a> or call +1 408-253-8800.<br/>
		</p><br />
		
		<p><b>Contacts:</b><br/>
		Chantal Yang<br/>
		Page One PR for Eclipse Foundation<br/>
		415-875-7494<br/>
		eclipse@pageonepr.com<br/>
		<br/>
		Brad Cottel<br/>
		Zend Technologies<br/>
		408-253-8812<br/>
		brad@zend.com <br/>
		</p>
		</div>
</div>
<div id="rightcolumn">
	<div class="sideitem">
	<h6>Related Links</h6>
	<ul>
		<li><a href="http://www.eclipse.org/pdt/">PDT Homepage</a></li>
		<li><a href="http://www.zend.com">Zend Homepage</a></li>
	</ul>
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
