<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Community Awards Announcement";
	$pageKeywords	= "Eclipse Foundation, community, awards, winners, 2007, press, release";
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
		<h2 ALIGN="CENTER"><strong>Eclipse Community Awards Winners Announced</strong></h2>
		<center><i>Awards Recognize Top Individuals and Technologies in the Eclipse Community</i></center>

		<p><strong>ECLIPSECON 2007, SANTA CLARA, Calif., March 06, 2007</strong>—The Eclipse Foundation today announced the winners of its annual Eclipse Community Awards, which recognize the top individuals, products and organizations in the Eclipse community. Recipients were honored at an awards ceremony yesterday on the opening day of EclipseCon 2007.
		<br /><br />
		The Individual Awards acknowledge people that have given time and resources to make Eclipse a better community. Winners were selected by their peers in an online vote. The selection of the “Top Newcomer Evangelist” award was based on the individual that answered the most questions raised on the eclipse.newcomer newsgroup.</p>
		<ul>
			<li><strong>Top Ambassador</strong>: Chris Aniszczyk. Finalists in this category are Alex Blewitt and Doug Schaefer.</li>
			<li><strong>Top Contributor</strong>: Kimberley Peter and Tom Schindl (tie). Finalists in this category are Eugene Kuleshov and Philippe Ombredanne.</li>
			<li><strong>Top Committer</strong>: Ed Merks. Finalists in this category are Mik Kersten and Thomas Watson.</li>
			<li><strong>Top Newcomer Evangelist</strong>: Daniel Megert. Finalists in this category are Hendrik Maryns and Eric Rizzo.</li>
		</ul>
		<p>The Technology Awards recognize both Eclipse-based open source projects and commercial products. Winners were selected by a panel of judges from the Eclipse community.  Nominated RCP applications and developer tools were evaluated on their user interfaces, innovation and comprehensiveness. Organizations competing for the “Best Deployment of Eclipse Technology in an Enterprise Technology” award were evaluated based on number of Eclipse projects being used, scale of applications being deployed and the scope of deployment. </p>
		<ul>
			<li><strong>Best Open Source RCP application</strong>: PSICAT (<a href="http://portal.chronos.org/psicat-site">http://portal.chronos.org/psicat-site</a>). The finalists are EclipseTrader (<a href="http://eclipsetrader.sourceforge.net">http://eclipsetrader.sourceforge.net</a>) and RSSOwl (<a href="http://www.rssowl.org">http://www.rssowl.org</a>).</li>
			<li><strong>Best Commercial RCP application</strong>: TIBCO Business Studio (<a href="http://www.tibco.com/devnet/business_studio">http://www.tibco.com/devnet/business_studio</a>). The finalist is Ivis Technologies xProcess (<a href="http://www.ivis.com/public/products/xprocess">http://www.ivis.com/public/products/xprocess</a>).</li>
			<li><strong>Best Open Source Eclipse-based Developer tool</strong>: eclipse-cs Checkstyle Plugin (<a href="http://eclipse-cs.sourceforge.net">http://eclipse-cs.sourceforge.net</a>).</li> The finalist is EclEmma (<a href="http://www.eclemma.org">http://www.eclemma.org</a>).</li>
			<li><strong>Best Commercial Eclipse-based Developer tool</strong>: QNX Momentics IDE (<a href="http://www.qnx.com/products/development">http://www.qnx.com/products/development</a>)). The finalist is Adobe Flex 2.0 (<a href="http://www.adobe.com/products/flex">http://www.adobe.com/products/flex</a>).</li> 
			<li><strong>Best Deployment of Eclipse technology in an enterprise</strong>: JPMorgan Chase (<a href="http://www.jpmchase.com">http://www.jpmchase.com</a>).</li>
		</ul>
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		John Moran or Lori Kroll<br>
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

