<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Community Awards Announcement";
	$pageKeywords	= "Eclipse Foundation, community, awards, winners, 2006, press, release";
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
		<ul>
			<li>Inaugural Awards Honor Individuals and Products that Have Contributed to the Growth and Reach of the Eclipse Community</li>
		</ul>
		<p><strong>ECLIPSECON 2006, SANTA CLARA, Calif., March 21, 2006</strong>—The Eclipse Foundation today announced the winners of its inaugural Eclipse Community Awards. Winners were selected by the Eclipse community and were honored at an awards ceremony last night on the opening day of EclipseCon 2006. The awards honor individuals and products that have helped further the reach of the Eclipse community and extended the ecosystem.
		<br /><br />
		The Individual Awards recognize the people who have volunteered their time and resources in making Eclipse a vibrant and innovative community. Winners were selected by their peers in an online vote.</p>
		<ul>
			<li><strong>Top Contributor</strong>: Linda Watson. Finalists in this category are Gunnar Wagenknecht and Mik Kersten.</li>
			<li><strong>Top Committer</strong>: Alain Magloire. Finalists in this category are Ed Merks and Jeff McAffer.</li>
			<li><strong>Top Ambassador</strong>: Ed Burnette. Finalists in this category are Erich Gamma and Pat McCarthy.</li>
		</ul>
		<p>The Technology Awards recognize the open source projects and products that are being developed around the Eclipse Rich Client Platform (RCP) and developer tools. Technology Award winners were selected by a panel of judges chosen from the Eclipse community.</p>
		<ul>
			<li><strong>Best open source RCP application</strong>: Gumtree (<a href="http://gumtree.sourceforge.net">http://gumtree.sourceforge.net</a>). The finalist is uDig (<a href="http://udig.refractions.net">http://udig.refractions.net</a>).</li>
			<li><strong>Best commercial RCP application</strong>: Lombardi Teamworks (<a href="http://www.lombardisoftware.com">www.lombardisoftware.com</a>). The finalist is Future Management Logic MindGuide (<a href="http://www.logicmindguide.com">www.logicmindguide.com</a>).</li>
			<li><strong>Best open source Eclipse-based developer tool</strong>: RadRails (<a href="http://www.radrails.org">www.radrails.org</a>).</li>
			<li><strong>Best commercial Eclipse-based developer tool</strong>: BEA Workshop Studio 3.0 (<a href="http://www.bea.com">www.bea.com</a>). Finalists in this category are Exadel Studio Pro (<a href="http://www.exadel.com">www.exadel.com</a>) and QNX Momentics (<a href="http://www.qnx.com">www.qnx.com</a>).</li> 
			<li><strong>Best deployment of Eclipse technology in an enterprise</strong>: Compass Group (Pty) Ltd & Jigsaw Interactive CC (<a href="http://www.ji.co.za">www.ji.co.za</a>).</li>
		</ul>
		<p>“We’re extremely pleased to recognize these individuals and products for their outstanding contributions to the Eclipse community,” said Mike Milinkovich, executive director, Eclipse Foundation. “As Eclipse expands its projects into new technology areas, the most important element of our success remains the strength of the community. These awards are a small token of appreciation for the community by the community.” </p>
		<p><strong>About the Eclipse Foundation</strong><br />
		Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</p>
		<p>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org">www.eclipse.org</a>.</p>
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

	<div id="rightcolumn">
	<div class="sideitem">
		<h6>Related Links</h6>
		<ul>
			<li><a href="/org/foundation/eclipseawards/winners.php">Eclipse 2006 Community Awards Home page</a></li>
		</ul>	
	</div>
	</div>
		
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

