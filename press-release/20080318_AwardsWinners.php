<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Community Awards Announcement";
	$pageKeywords	= "Eclipse Foundation, community, awards, winners, 2008, press, release";
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

		<p><strong>ECLIPSECON 2008, SANTA CLARA, Calif., March 18, 2008</strong> &#150; The Eclipse Foundation today announced the winners of
		its annual Eclipse Community Awards, which recognize the top individuals and products in the Eclipse community. Recipients were
		honored at an awards ceremony yesterday on the opening day of EclipseCon 2008.
		<br /><br />
		The Individual Awards acknowledge people that have given time and resources to make Eclipse a better community. Winners were
		selected by their peers in an online vote. The selection of the &#146;Top Newcomer Evangelist&#147; award was based on the individual that
		answered the most questions raised on the eclipse.newcomer newsgroup.</p>
		<ul>
			<li><strong>Top Ambassador</strong>: name.
				<ul><li>The finalist is Jeff McAffer and Ed Merks.</li></ul></li>
			<li><strong>Top Committer</strong>: name.
				<ul><li>The finalists are Chris Aniszczyk, Mik Kersten and Paul Webster.</li></ul></li>
			<li><strong>Top Contributor</strong>: name.
				<ul><li>The finalist is Jacek Pospychala and Remy Chi Jian Suen.</li></ul></li>
			<li><strong>Top Newcomer Evangelist</strong>: name.
				<ul><li>The finalists are Mark Dexter, Walter Harley and Eric Rizzo.</li></ul></li>
		</ul>
		<p>The Technology Awards recognize both Eclipse-based open source projects and commercial products. Winners were selected by a
		panel of judges from the Eclipse community.  Nominated developer tools, Equinox applications and RCP applications were evaluated
		on their user interfaces, innovation and comprehensiveness.</p>
		<ul>
			<li><strong>Best Commercial Eclipse-Based Developer Tool</strong>: product (<a href="website">website</a>).
			<ul><li>The finalists are Nexaweb Studio (<a href="http://www.nexaweb.com/home/us/index.html@cid=2301.html">http://www.nexaweb.com/home/us/index.html@cid=2301.html</a>),
			Polarion ALM Team for Subversion (<a href="http://www.polarion.com/products/alm/team.php">http://www.polarion.com/products/alm/team.php</a>)
			and Wind River Workbench (<a href="http://www.windriver.com/products/development_suite/">http://www.windriver.com/products/development_suite/</a>).</li></ul></li>
			
			<li><strong>Best Open Source Eclipse-Based Developer Tool</strong>: product (<a href="website">website</a>).
			<ul><li>The finalist is EclEmma (<a href="http://www.eclemma.org">http://www.eclemma.org</a>)
			and Spring IDE (<a href="http://springide.org/blog/">http://springide.org/blog/</a>).</li></ul></li>
			 
			<li><strong>Best Commercial Equinox Application</strong>: product (<a href="website">website</a>).
			<ul><li>The finalist is BusinessReport Studio (<a href="http://www.birt-exchange.com/modules/products/index.php?productid=3">http://www.birt-exchange.com/modules/products/index.php?productid=3</a>)
			and CYRANO (<a href="http://www.bandxi.com/cyrano/index.html">http://www.bandxi.com/cyrano/index.html</a>).</li></ul></li>
			
			<li><strong>Best Commercial RCP Application</strong>: product (<a href="website">website</a>).
			<ul><li>The finalist is openVXML (<a href="http://www.openmethods.com/products.php">http://www.openmethods.com/products.php</a>)
			and XMIND 2008 (<a href="http://www.xmind.org/us/">http://www.xmind.org/us/</a>).</li></ul></li>
						
			<li><strong>Best Open Source RCP Application</strong>: product (<a href="website">website</a>).
			<ul><li>The finalist is Apache Directory Studio (<a href="http://directory.apache.org/studio/">http://directory.apache.org/studio/</a>)
			and MyTourbook (<a href="http://mytourbook.sourceforge.net/mytourbook/">http://mytourbook.sourceforge.net/mytourbook/</a>).</li></ul></li>			
		</ul>
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application
		frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle,
		including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business
		intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors,
		innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse
		Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of
		Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
		<br />
		<center># # #</center> 
		<br />
		All company/product names and service marks may be trademarks or registered trademarks of their respective companies.
		<br /><br /><strong>Press Contact</strong><br>	
		Jasmine Teer<br>
		Page One PR<br>
		415.321.2348<br>
		<a href="mailto:jasmine@pageonepr.com">jasmine@pageonepr.com</a><br>
		<br>

		</p>
							
	</div>
		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

