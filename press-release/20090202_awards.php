<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Voting for the Individual Eclipse Community Awards is Open";
	$pageKeywords	= "eclipse, community, awards, EclipseCon, vote";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	

	$html = <<<EOHTML

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
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
	
		<p>Nominations for the Eclipse Community Awards in the individual category are complete and <a href="http://eclipse.org/go/awardsvote09"
		target="blank">voting</a> has opened for the nominees.  Congratulations to all the worthy candidates!  Show your
		appreciation to the people that have made Eclipse a stronger community by casting your vote.</p>
	
		<p>There is also a Most Prolific Newcomer Evangelist award, which will be presented to the individual that answered the most
		questions posted on the eclipse.newcomer newsgroup.</p>

		<p>More details about the awards and the nomination process can be found
		<a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">online</a>.	 Voting for the Eclipse Community
		Awards will be open until <b>February 27, 2009 at 5:00pm EST</b> and the winner will be announced March 23, 2009 at
		<a href="http://www.eclipsecon.org" target="blank">EclipseCon.</a></p>
		
		<p><a href="http://eclipse.org/go/awardsvote09" target="blank">
		<img src="http://www.eclipse.org/membership/vote2008/vote.jpg"></a>
		</p>		
		
		<p>The nominees are:</p>
		
		<p><b><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=257950">Top Ambassador</a></b></p>

		<p><a href="javascript:switchMenu('NickBoldt');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Nick Boldt
		</p>
		<div id="NickBoldt" class="switchcontent">
		<p>
		<ul>
			<li>
			"I'd like to nominate Nick Boldt.  Look at all those fun contests he's initiated
			this year, e.g.,<br>
			<a href="http://divby0.blogspot.com/2008/05/ganymede-poster-contest.html">http://divby0.blogspot.com/2008/05/ganymede-poster-contest.html</a><br>
			<a href="http://divby0.blogspot.com/2008/11/eclipsecon-2009-t-shirt-design-contest.html">http://divby0.blogspot.com/2008/11/eclipsecon-2009-t-shirt-design-contest.html</a><br>
			<a href="http://divby0.blogspot.com/2008/11/eclipse-photoshop-challenge-better-than_25.html">http://divby0.blogspot.com/2008/11/eclipse-photoshop-challenge-better-than_25.html</a>
			<br><br>
			You'll find him on IRC answering questions.  You'll find him blogging, often in
			the form of poetry set to music.  You'll find him on newsgroups like newcomers,
			platform, PDT, and so on answering questions.  And he helps many groups set up
			their builds, especially those new to Eclipse who need a helping hand.  
			<br><br>
			Nick reflects the spirit of Eclipse with his attitude and his actions.  That's
			what ambassadors do..."
			</li>
			<li>
			"+1 for Nick. It is amazing how many (good ;-) things he manages to do,
			including being responsible to make sure that multiple builds are working and
			all the fun stuff Ed mentioned."
			</li>
			<li>
			"+1 for Nick Boldt, definitely! His contests are pure fun and he has done great
			work this year setting up better builds for PDT, blogging, helping people on
			newsgroups and IRC, and spreading the word about kiva.org :-) "
			</li>
		</ul>
		</p>
		</div>	
		
		<p><a href="javascript:switchMenu('PaulFremantle');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Paul Fremantle
		</p>
		<div id="PaulFremantle" class="switchcontent">
		<p>
		<ul>
			<li>
			"Paul Fremantle, WSO2 co-founder and CTO , has served as an ambassador for
			Eclipse and its role in contributing to a flexible, heterogeneous SOA, both
			through development of WSO2 products that support Eclipse and continuing
			education of the developer community via conferences, webinars, blogs and the
			WSO2 forum. However, his most important initiative has been around the use of
			Eclipse Equinox to fundamentally redefine the structure of SOA
			middleware—extending beyond the componentization of individual products to
			create a fully componentized SOA middleware platform. 
			<br><br>
			With WSO2 Carbon, Paul has demonstrated the power of Equinox to create an SOA
			fabric in which developers can mix and match components of different products
			to assemble highly customized products for their individual needs. Since late
			last year, Paul has not only evangelized WSO2’s specific approach, but also
			the architectural principals of creating a fully componentized SOA platform
			enabled by Eclipse Equinox."
			</li>
		</ul>
		</p>
		</div>
		
		<p><a href="javascript:switchMenu('MikKersten');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Mik Kersten
		</p>
		<div id="MikKersten" class="switchcontent">
		<p>
		<ul>
			<li>
			"I would like to nominate Mik Kersten for the Top Ambassador award. 
			<br><br>
			Mik has been evangelizing Eclipse in highly visible venues that reach beyond
			the current Eclipse ecosystem. He presented a widely attended talk at JavaOne
			that earned him a JavaOne Rock Star Hall of Fame award. Mik is the first member
			of the Eclipse ecosystem to be recognized with this award. He has also been
			promoting Eclipse and RCP at numerous other conferences, including a recent
			keynote talk at W-JAX, talks at SpringOne conferences, and some of the most
			highly rated talks on the Eclipse conference circuit. 
			<br><br>
			Mik's Eclipse Mylyn 2.2 and 3.0 videos have been viewed over 20,000 times
			(combined), making them the most highly viewed Eclipse webcasts on Eclipse
			Live. As CEO of Tasktop Technologies, Mik is demonstrating the capabilities of
			the Eclipse platform by basing all of his company's innovative products and
			services on Eclipse and RCP."
			</li>
		</ul>
		</p>
		</div>
		
		<p><a href="javascript:switchMenu('TomSchindla');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Tom Schindl
		</p>
		<div id="TomSchindla" class="switchcontent">
		<p>
		<ul>
			<li>
			"I'd like to nominate Tom Schindl. 
			<br><br>
			He is helping everywhere in the newsgroups, does an excellent promotional work
			at conferences/blogs/papers and is very active in bringing forward new and
			established Eclipse technologies."
			</li>
		</ul>
		</p>
		</div>
		
		<p><a href="javascript:switchMenu('JamesSugrue');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			James Sugrue
		</p>
		<div id="JamesSugrue" class="switchcontent">
		<p>
		<ul>
			<li>
			"I would like to nominate James Sugrue. James has worked tirelessly podcasting
			interviews with Eclipse community members, blogging and writing articles on
			Eclipse.
			<br><br>
			He's also managed to revive EclipseZone which is great. I particularly enjoyed
			reading the EMF team interview
			(<a href="http://eclipse.dzone.com/articles/eclipse-modelling-framework-qa">
			http://eclipse.dzone.com/articles/eclipse-modelling-framework-qa</a>). I can only
			hope he does more of those types of things&nbsp;;)&nbsp;"	
			</li>
		</ul>
		</p>
		</div>

		<p><b><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=257952">Top Committer</a></b></p>

		<p><a href="javascript:switchMenu('MartinOberhuber');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Martin Oberhuber
		</p>
		<div id="MartinOberhuber" class="switchcontent">
		<p>
		<ul>
			<li>
			"I would like to also nominate Martin Oberhuber. He's done a great job leading
			the TM project at Eclipse (<a href="http://www.eclipse.org/dsdp/tm/">http://www.eclipse.org/dsdp/tm/</a>) but more
			importantly, he's done something I thought impossible, revive the Eclipse
			Architecture Council (EAC). Because of Martin's leadership, the EAC has become
			a place where committers can ask questions easily
			(<a href="http://dev.eclipse.org/mhonarc/lists/eclipse.org-committers/msg00598.html">http://dev.eclipse.org/mhonarc/lists/eclipse.org-committers/msg00598.html</a>),
			look at open issues (<a href="http://wiki.eclipse.org/Architecture_Council/Open_Issues">http://wiki.eclipse.org/Architecture_Council/Open_Issues</a>),
			seek mentorship and many other things.
			<br><br>
			Thank you Martin."	
			</li>
			<li>
			"Martin gets my vote for bringing the AC back from the dead and moving towards a
			body that can provide support and services to all committers."
			</li>
			<li>
			"+1 for Martin."
			</li>
			<li>
			"I give my +1 to Martin Oberhuber. The work he's doing as Architecture Council
			lead is priceless."
			</li>
		</ul>
		</p>
		</div>	

		<p><a href="javascript:switchMenu('SteffenPingel');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Steffen Pingel
		</p>
		<div id="SteffenPingel" class="switchcontent">
		<p>
		<ul>
			<li>
			"I nominate Steffen Pingel for his contributions to the Mylyn project, in the
			form of community support via countless bugs and posts, as well as his code
			contributions.  I hate to say this, but Steffen had more than 1/2 of the
			commits on Mylyn last year.  To put that into perspective, Dash stats for 2008
			put Mylyn as the most active Tools project by a pretty wide margin. His
			increasing involvement with cross-project, build and install has also been
			helpful in the release trains."	
			</li>
		</ul>
		</p>
		</div>	

		<p><a href="javascript:switchMenu('ThomasWatson');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Thomas Watson
		</p>
		<div id="ThomasWatson" class="switchcontent">
		<p>
		<ul>
			<li>
			"I nominate Thomas Watson, the proverbial man behind the Equinox curtain. For
			those who don't know, Tom has been responsible for the Equinox framework for
			quite awhile, even back when it had a trendy name like "SMF" and OSGi was
			"revolutionizing" the home automation market. 
			<br><br>
			Tom's a quiet guy, but his careful eye in keeping the framework stable and
			pushing it to Eclipse gets a nod from me. On top of that, he represents Eclipse
			on the EEG and CPEG committees at OSGi.org..., he's even promised me that the
			EEG won't ruin OSGi ;)
			<br><br>
			Ok, +1 for Thomas Watson"
			</li>
		</ul>
		</p>
		</div>			

		<p><a href="javascript:switchMenu('JasonWeathersby');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Jason Weathersby
		</p>
		<div id="JasonWeathersby" class="switchcontent">
		<p>
		<ul>
			<li>
			"I would like to nominate Jason Weathersby as Top Committer for his work on the
			BIRT Project.  Jason's work through the PMC, writing papers, speaking at
			conferences, maintaining our website, and most importantly monitoring our
			newsgroup have been a key reason for that people have taken up BIRT.
			<br><br>
			The BIRT newsgroup is one of the busiest, most successful newsgroups in the
			Eclipse community.  Jason has been instrumental in making this happen.  Jason
			has written more than 5,000 newsgroup posts (16% of the total newsgroup
			volume).    All of the as answers or debug on customer posed questions.
			<br><br>
			He has helped our community work through some incredibly difficult and complex
			issues.  All of this without adopting any of the attitude that some experts
			seem to get."	
			</li>
			<li>
			"+1, I do agree with Scott, Jason Weathersby is really professional and warm
			hearted, every body including me can get quick reply and exact answer from
			Jason."
			</li>
			<li>
			"i would like to nominate Jason all the time..coz he is very prompt & patient
			and you can expect solutions very quick. He is really the best."
			</li>
			<li>
			"+ 1 for Jason, Jason is the man."
			</li>
			<li>
			"+ 1 for Jason Weathersby ,  he deserves it , fighting!!!"
			</li>
			<li>
			"+1 for Jason Weathersby. Anytime I've had questions I've got quick and detailed
			answers on my questions. His commitment to the BIRT project and the community
			cannot be understated.
			Keep it up Jason"
			</li>
		</ul>
		</p>
		</div>	
					
		<p><a href="javascript:switchMenu('PaulWebster');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Paul Webster
		</p>
		<div id="PaulWebster" class="switchcontent">
		<p>
		<ul>
			<li>
			"I nominate Paul Webster for his tireless efforts in helping people on IRC,
			newsgroups and elsewhere."
			</li>
			<li>
			"+1. What Chris said - Paul is an Eclipse machine.  A bitter, surly Eclipse
			machine.  :) "
			</li>
			<li>
			"+1 for Paul, this is a no-brainer."
			</li>
			<li>
			"+1 for Paul"
			</li>
		</ul>
		</p>
		</div>

		<p><a href="javascript:switchMenu('DavidWilliams');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			David Willilams
		</p>
		<div id="DavidWilliams" class="switchcontent">
		<p>
		<ul>
			<li>
			"I nominate David Williams for his contributions to the Eclipse community. He
			does a lot of important work from triage to release engineering that is
			generally considered behind the scenes. He's managed to help grow the Webtools
			project and establish a successful incubator within Webtools. He's also been
			involved in Orbit and things like the release trains. Without David, it
			wouldn't have been possible for us to have a simultaneous release."	
			</li>
		</ul>
		</p>
		</div>		
		
		<p><b><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=257953">Top Contributor</a></b></p>

		<p><a href="javascript:switchMenu('FrankBecker');" title="Description">
		<img src="http://www.eclipse.org/newsgroups/images/plus.gif" alt="Description" title="Description"></a>
			Frank Becker
		</p>
		<div id="Frank Becker" class="switchcontent">
		<p>
		<ul>
			<li>
			"I would like to nominate Frank Becker (<a href="mailto:Frank@Frank-Becker.de"Frank@Frank-Becker.de</a>>) for Top
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
			"+1 for Benjamin Cab� : for all the contests, contributions to PDE and his
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
			Equinox p2. Particularly good examples of his contributions are comments in bug
			250316, bug 255984, bug 239301, and bug 236740. I'm sure I have missed many
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
		<div id="Tom Schindlc" class="switchcontent">
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

	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/index.php">Eclipse Community Awards</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/nominate_individual.php">Make an Individual Nomination</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/nominate_technology.php">Make a Technology Nomination</a></li>
				<li><a href="http://www.eclipse.org/org/foundation/eclipseawards/technology.php">Technology Nominations</a></li>
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
