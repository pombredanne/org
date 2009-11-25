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
	$pageTitle 		= "Eclipse Individual Awards Nominations";
	$pageKeywords	= "eclipse, awards, individual, nomination, eclipsecon";
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
			The following is a list of nominations submitted for the Individual Awards.  Nominations close on January 29, 2009.
		</p>
		
		<h3>Top Committer</h3>

		<p><a href="javascript:switchMenu('MartinOberhuber');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Name1
		</p>
		<div id="Name1" class="switchcontent">
		<p>
		<ul>
			<li>
			Comment 1	
			</li>
			<li>
			Comment 2
			</li>
		</ul>
		</p>
		</div>	

		<p>
		To read more about the candidates, click on the plus sign beside each name.
		</p>		
		
		<h3>Top Contributor</h3>

		<p><a href="javascript:switchMenu('FrankBecker');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Frank Becker
		</p>
		<div id="FrankBecker" class="switchcontent">
		<p>
		<ul>
			<li>
			"I would like to nominate Frank Becker (<a href="mailto:Frank@Frank-Becker.de">Frank@Frank-Becker.de</a>) for Top
			Contributor. Frank has been an tireless contributor to the Mylyn project
			(<a href="http://eclipse.org/mylyn">http://eclipse.org/mylyn</a>) for over a year, and has implemented a number of
			excellent features in Mylyn (some you may have seen already, others due in
			Mylyn 3.1):
			<br><br>
			* Porting to support Bugzilla 3.2
			* Custom attributes (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=226851">bug 226851</a>)
			* Flags support (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=186265">bug 186265</a>)
			* Attachment deprecation/mark obsolete (<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=152065">bug 152065</a>)
			<br><br>
			Those are just the highlights. To date Frank has resolved 89 bugs and has
			numerous patches awaiting review.  In addition to contributing code, Frank is
			also involved with end users and integrators through discussion on both the
			Mylyn newsgroup and mailing lists.  
			<br><br>
			Last but not least, Frank has recently received a round of +1 from all
			committers on the Mylyn project in favor of Frank's nomination as a committer
			on the Mylyn project.
			<br><br>
			+1  Frank Becker for Top Contributor award"		
			</li>
			<li>
			"+ for Frank Becker.
			<br><br>
			Through countless patches Frank has provided the other Mylyn committers help in
			improving and evolving the Bugzilla connector.  This connector is used by a
			large portion of bugs.eclipse.org users, and is one of the few "common good"
			projects within the Eclipse community that has no official support from the
			Eclipse Foundation.  It has been encouraging for the Mylyn project to see
			community contributions on this connector, in the form of Frank's patches and
			interactions with the bugzilla.mozilla.org community."
			</li>
		</ul>
		</p>
		</div>	

		<p><a href="javascript:switchMenu('BenjaminCabe');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Benjamin Cabe
		</p>
		<div id="BenjaminCabe" class="switchcontent">
		<p>
		<ul>
			<li>
			"I would like to nominate Benjamin Cabe. Benjamin has done a lot of great
			contributions to PDE and other areas in Eclipse. He's extremely active on
			bugzilla and does a good job of bug triage across various Eclipse components.
			His recent contributions to PDE allowed him to join the PDE Incubator as a
			committer to explore PDE/EMF integrations.
			<br><br>
			As a bonus, he also managed to turn me onto kiva.org, so +1 for him!"		
			</li>
			<li>
			"+1 for contributing to Modeling, photoshop contests, and turning me on to Kiva,
			too."
			</li>
			<li>
			"+1 for Benjamin Cab&eacute; : for all the contests, contributions to PDE and his
			activity on bugzilla, newsgroups and mailing lists"
			</li>
		</ul>
		</p>
		</div>	

		<p><a href="javascript:switchMenu('DaveCarver');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Dave Carver
		</p>
		<div id="DaveCarver" class="switchcontent">
		<p>
		<ul>
			<li>
			"I'm going to nominate Dave Carver for this. While I don't really work with Dave
			on anything yet (which is unfortunate because Dave knows what he's talking
			about), I _have_ seen Dave's posts on the various communication channels of
			Eclipse (his own blog, newsgroups, the mailing lists, IRC, and so forth) and he
			is really, really active. I don't know where he finds the time for all of this
			because I'm pretty sure he's not doing all of these things on company time.
			<br><br>
			Dave really just kind of "came out of nowhere" some time in 2007 (or early
			2008?) and has contributed a tremendous amount to the Eclipse ecosystem since
			then. He works closely with the WTP SSE folks in his work for XSL tooling and
			has also helped push the VEX project from SourceForge over to Eclipse.org
			recently. I see a bright future for anything related to XML editing at
			Eclipse.org with Dave around and I hope Dave continues to stick around for many
			years to come. :) "		
			</li>
			<li>
			"+1 for Dave Carver.
			Dave work on the XSL tooling, his way of using his blog for communication and
			reaching out to the community is exemplar.
			Dave also accepted to mentor the BPMN sub-project on top of his many duties."	
			</li>
		</ul>
		</p>
		</div>			

		<p><a href="javascript:switchMenu('EugeneKuleshov');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Eugene Kuleshov
		</p>
		<div id="EugeneKuleshov" class="switchcontent">
		<p>
		<ul>
			<li>
			"I would like to nominate Eugene Kuleshov for top contributor. Eugene is highly
			active in the Eclipse community and has reported or commented on almost 3000
			bugs in 7 years. He has done amazing work on the m2eclipse project, and an
			incredibly dedicated Eclipse advocate."		
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('MilesParker');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Miles Parker
		</p>
		<div id="MilesParker" class="switchcontent">
		<p>
		<ul>
			<li>
			"I would like to nominate Miles Parker as a top contributor. Miles may be a
			surprising choice because he hasn't (to my knowledge) contributed any code.
			However, he is an excellent example of the fact that code isn't the only way
			someone in the community can make a positive contribution to the project. From
			the perspective of the Equinox p2 team, he has contributed something far more
			valuable than patches: an end-user perspective that is different from that of
			Eclipse developers. As committers we often fall victim to focusing too much on
			the user community we know best: ourselves. As a result we often tailor our
			solutions to a very narrow conception of end-user expectations and behavior.
			Therefore to have different end-user perspectives that are well thought out and
			articulated is absolutely vital to our success. Having a contributor like Miles
			providing constructive feedback early and often during development has been a
			great asset to the team. It is easy to provide criticism, but when the critique
			is polite, constructive, and thoroughly detailed, it is a refreshing change
			from the all too common slings and arrows from irate users.
			<br><br>
			From a quick search, there are about a 100 bugs Miles has created or commented
			on in the recent past, mostly in the areas of the new SWT Cocoa port, and
			Equinox p2. Particularly good examples of his contributions are comments in
			<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=250316">bug
			250316</a>, <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=255984">bug 255984</a>,
			<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=239301">bug 239301</a>, and
			<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=236740">bug 236740</a>.
			I'm sure I have missed many
			others."	
			</li>
			<li>
			"+1 for Miles, he has added valuable insight as we evolve the p2 UI in 3.5 (and
			before that as well, but I think I never noticed him in particular under the
			flood of 3.4 bugs)..."			
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('TomSchindlc');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Tom Schindl
		</p>
		<div id="TomSchindlc" class="switchcontent">
		<p>
		<ul>
			<li>
			"I would like to nominate Tom Schindl for top contributor.
			<br><br>
			He has helped shaping Platform UI and Databinding and recently brought the
			UFacekit project over to Eclipse. But what's really been making me jump is the
			fundamental impact he has on the future of Eclipse through his contributions to
			the e4 project - which also led to voting him into the Eclipse Architecture
			Council.
			<br><br>			
			Few may know that he's been doing all this in his private spare time, he's even
			been funding EclipseCon visits privately. He's been contributing his time and
			energy out of passion for Open Source and Technology, that's why I'm nominating
			him for Top Contributor (although he is a committer)."			
			</li>
			<li>
			"+1 for Tom Schindl. His talks at Eclipse Summit Europe this year were
			fantastic."				
			</li>
		</ul>
		</p>
		</div>
		
		<p>
		To read more about the candidates, click on the plus sign beside each name.
		</p>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>
				<li><a href="individual.php">Individual Nominees</a></li>
				<li><a href="technology.php">Technology Nominees</a></li>
				<li><a href="pastwinners.php">Past Winners</a></li>
			</ul>
		</div>
	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>