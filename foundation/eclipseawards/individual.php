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
			The following is a list of nominations submitted for the Individual Awards.  Nominations close on January 29, 2010.
		</p>
		
		<h3>Top Committer</h3>

		<p><a href="javascript:switchMenu('KevinBarnes');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Kevin Barnes</a>
		</p>
		<div id="KevinBarnes" class="switchcontent">
		<p>
		<ul>
			<li>
			Kevin Barnes for making Eclipse on Cocoa such an awesome experience.
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('BorisBokowski');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Boris Bokowski</a>
		</p>
		<div id="BorisBokowski" class="switchcontent">
		<p>
		<ul>
			<li>
			I would like to nominate Boris Bokowski for top committer.  Boris manages to work on all things platform and is one of the driving forces behind e4.  While many sit on the side lines and criticize, Boris steps up and leads by example. Also, like many excellent committers, Boris's work on Eclipse is not isolated to his working hours.  I have had many conversations on IRC with Boris at all hours of the night.
			</li>
			<li>
			You've been faster a second than me :-) +1 for Boris
			</li>
			<li>
			+1 for Boris who I've noticed has also been pushing gently on Platform UI issues
			</li>			
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('NickBoldt');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Nick Boldt</a>
		</p>
		<div id="NickBoldt" class="switchcontent">
		<p>
		<ul>
			<li>
			I'd like to nominate Nick Boldt for building and advocating currently the simplest working Eclipse build environment - Athena. His work made it really simple to setup automated builds for new projects and has saved tons of releng pains for those who have moved to Athena.
			<br><br>
			His commitment to Athena, fixing it's bugs and work on documentation quickly gathered a helpful community around this project, which now makes Athena safer choice over other build systems.			
			</li>			
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('DaveCarver');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Dave Carver</a>
		</p>
		<div id="DaveCarver" class="switchcontent">
		<p>
		<ul>
			<li>
			I would like to nominate Dave Carver. His repeated engagements for the Eclipse community, his contributions to the Eclipse ecosystem beyond his project, his regular blogging and the energy he brings make him someone I look up to.
			</li>
			<li>
			+1 for Dave Carver.
			</li>
		</ul>
		</p>
		</div>	

		<p><a href="javascript:switchMenu('AndyClement');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Andy Clement</a>
		</p>
		<div id="AndyClement" class="switchcontent">
		<p>
		<ul>
			<li>
			[Andrew Eisenberg and] Andy Clement for fixing bugs in no time and great support on the mailing lists.
			<br><br>
			I would like to point out that they both have been very responsive and helpful.
			</li>
		</ul>
		</p>
		</div>
		
		<p><a href="javascript:switchMenu('AndrewEisenberg');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Andrew Eisenberg</a>
		</p>
		<div id="AndrewEisenberg" class="switchcontent">
		<p>
		<ul>
			<li>
			Andrew Eisenberg [and Andy Clement] for fixing bugs in no time and great support on the mailing lists.
			<br><br>
			I would like to point out that they both have been very responsive and helpful.
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('KimMoir');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Kim Moir</a>
		</p>
		<div id="KimMoir" class="switchcontent">
		<p>
		<ul>
			<li>
			Kim Moir for keeping so many builds going despite hardware, network and other infrastructure problems.
			</li>
			<li>
			Like Kevin, I would like to nominate Kim Moir for her endless patience not just with hardware, network and infrastructure but also with all the committer failures ;-)
			</li>
			<li>
			While I have nominated Boris, I would also like to give a +1 to Kim.  Spend a few days on release engineering and you soon realize just how challenging a job this is.
			</li>
			<li>
			+1 for Kim!
			</li>
			<li>
			+1 Kim too, who's cheerful and direct approach is precisely what is needed, especially when things aren't going as expected.
			</li>
			<li>
			+1 for Kim too, I couldn't agree more with Ian in comment 10.
			</li>
		</ul>
		</p>
		</div>	

		<p><a href="javascript:switchMenu('AndrewOverholt');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Andrew Overholt</a>
		</p>
		<div id="AndrewOverholt" class="switchcontent">
		<p>
		<ul>
			<li>
			I'd like to nominate Andrew Overholt for his work on the Linux Tools project. Andrew has really helped put a lot of life into the project for the past year or two and more and more Linux distribution are starting to have updated Eclipse packages in their package repository. Andrew also closely follows the EDP with N&N postings, release review requests, and committer elections and retirement.
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('PrakashRangaraj');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Prakash GR Rangaraj</a>
		</p>
		<div id="PrakashRangaraj" class="switchcontent">
		<p>
		<ul>
			<li>
			I would like to nominate Prakash GR. 
			<br><br>
			His technical blogs on Commands Framework, presentations in Eclipse Summit India, Demo camps in Bangalore and forum support are appreciable.
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('MarkusSchorn');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Markus Schorn</a>
		</p>
		<div id="MarkusSchorn" class="switchcontent">
		<p>
		<ul>
			<li>
			I would like to nominate Markus Schorn of the CDT project for top committer.
			<br><br>
			Markus continuously develops and maintains the CDT core which consists of the C/C++ parser, indexer, semantic resolution, refactoring and other components. He has also developed most of the UI tooling based on the CDT core. The list of individual features he has worked on is endless. C++ is an incredibly difficult language to handle in an IDE, and Markus has stepped up with innovative solutions to many difficult problems. Also he presents at eclipsecon every year, answers questions on the cdt-dev list and constantly tracks bugzilla activity. Markus' work is one of the main reasons that eclipse is now considered an industry leading C/C++ IDE.
			</li>
			<li>
			+1 for Markus Schorn
			</li>
		</ul>
		</p>
		</div>
		
		<p><a href="javascript:switchMenu('RemySuen');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Remy Suen</a>
		</p>
		<div id="RemySuen" class="switchcontent">
		<p>
		<ul>
			<li>
			Remy is a tireless, enthusiastic member of the Eclipse community.  He toils on IRC, helping newbies and the experienced alike.  He writes articles, tracks tonnes of bugs, and is a general conduit of information between people.  Remy is also a very talented developer and is now contributing his skills to the Platform team.
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('FrancisUpton');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Francis Upton</a>
		</p>
		<div id="FrancisUpton" class="switchcontent">
		<p>
		<ul>
			<li>
			I'd like to nominate Francis Upton for the incredibly great job he's doing in the Common Navigator Framework area.		
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('DavidWilliams');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			David Williams</a>
		</p>
		<div id="DavidWilliams" class="switchcontent">
		<p>
		<ul>
			<li>
			I would like to nominate David Williams. His work at Eclipse is extensive, from WTP source editing to organizing the Planning Council. Furthermore, he's the man behind the curtain in order to keep the annual release train trucking. In my opinion, without him, the annual release train wouldn't happen.
			<br><br>
			Thank you for your hard work David.
			</li>
			<li>
			+1 for David Williams
			</li>
		</ul>
		</p>
		</div>

		<h3>Top Contributor</h3>

		<p><a href="javascript:switchMenu('LaurensHolst');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Laurens Holst</a>
		</p>
		<div id="LaurensHolst" class="switchcontent">
		<p>
		<ul>
			<li>
			I'd like to nominate Laurens Holst for his countless bug reports in JSDT project. JSDT is one of those many small and very constrained projects, where you rarely hear back from committer. Despite that, Laurens keeps reporting any bugs he finds for 1.5 year now. That's extremely long and I don't recall anyone else, excluding committers and adopters, who would stick so long with such hopeless task! (to be fair ~50% of Laurens bugs have been fixed, cudos JSDT team)
			<br><br>
			It's wonderful to have such users like Laurens and would be cool to see similar people nominated here too.		
			</li>
		</ul>
		</p>
		</div>
		
		<p><a href="javascript:switchMenu('JamesSugrue');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			James Sugrue</a>
		</p>
		<div id="JamesSugrue" class="switchcontent">
		<p>
		<ul>
			<li>
			I would also like to nominate James Sugrue (<a href="http://eclipse.dzone.com/users/jsugrue" target="blank">http://eclipse.dzone.com/users/jsugrue</a>) for his work on evangelizing Eclipse at EclipseZone/DZone.
			</li>
		</ul>
		</p>
		</div>
		
		<p><a href="javascript:switchMenu('LarsVogel');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description">
			Lars Vogel</a>
		</p>
		<div id="LarsVogel" class="switchcontent">
		<p>
		<ul>
			<li>
			Lars Vogel (<a href="http://vogella.de" target="blank">http://vogella.de</a>) for his useful articles, blog posts, bug reports/enhancement proposals and tweets.	
			</li>
			<li>
			+1 for Lars (vogella.de)
			</li>
			<li>
			+1 for Lars - his commitment to communicating the subtleties of Eclipse technical capabilities is fantastic, and the fact that *he constantly updates* is the clincher, in my mind.
			</li>
			<li>
			+1 for Lars (<a href="http://vogella.de" target="blank">http://vogella.de</a>)
			</li>
			<li>
			+1
			</li>
			<li>
			+1 for Lars
			</li>
			<li>
			+1 for Lars :-)
			</li>
			<li>
			+1 for Lars (vogella.de)
			</li>
			<li>
			+1 for Lars
			</li>
			<li>
			A huge +1 for Lars. Find a cool Eclipse related topic, and I bet Lars already covered it in one of its articles or blog posts! :)
			</li>
		</ul>
		</p>
		</div>	

		<p>
		To read comments submitted for each candidate, click on their name.
		</p>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="index.php">Eclipse Community Awards</a></li>
				<li><a href="nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="nominate_project.php">Make a Project Nomination</a></li>				
				<li><a href="nominate_technology.php">Make a Technology Nomination</a></li>
				<li><a href="individual.php">Individual Nominees</a></li>
				<li><a href="project.php">Project Nominees</a></li>
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