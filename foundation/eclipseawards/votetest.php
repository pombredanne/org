<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_list.php
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
	$pageTitle 		= "Vote for the Individual Eclipse Awards";
	$pageKeywords	= "Eclipse, awards, vote";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		
		<style>
		div.visib { display: block; }
		div.invis { display: none; }
		</style>
		
		<script language="JavaScript">
		var DHTML = (document.getElementById || document.all || document.layers);

		function getObj(name)
		{
		  if (document.getElementById)
		  {
		  	this.obj = document.getElementById(name);
			this.style = document.getElementById(name).style;
		  }
		  else if (document.all)
		  {
			this.obj = document.all[name];
			this.style = document.all[name].style;
		  }
		  else if (document.layers)
		  {
		   	this.obj = document.layers[name];
		   	this.style = document.layers[name];
		  }
		}
		
		function invi(id, flag)
		{
			if (!DHTML) return;
			var x = new getObj(id);
		//	x.className = (flag) ? 'visib' : 'invis';
		    x.style.display = (flag) ? 'block' : 'none';
		}
		function show_voter() {
			invi('div1',true); 
			invi('div2',true);
			invi('div3',true);
			invi('div4',true);
		}
		</script>
		
		<form method="POST" action="http://www.eclipse.org/projects/fragments/eclipseawards2008votemailer.php">
		
		<h2>How Voting Works</h2>
		<ol>
		  <li>You are entitled to vote once in each of 3 categories. (You may vote as many times as you want,
		   but only the last one will count.) We ask for your name and other identifying information in order
		   to validate you as an Eclipse committer or community member.
		    </li>
		  <li>After you enter your vote on this page, we will send you an email with a
		    &quot;verify this vote&quot; link. You must click on that link to complete
		    your vote. We're doing this to foil spam-form-filling robots.</li>
		</ol>
		
		<h2>Enter Your Information to Vote</h2><p>
		<p>You must select one of the two radio buttons below (and have Javascript enabled in your browser)
		and then the nominees and a "Vote!" button will appear below.</p>
		
		<p>Your full name: <input type="text" name="name" size="50"> </p>
		<p>Your email address: <input type="text" name="email" size="45"></p>
		<p><input type="radio" name="i_am" value="voter" onclick="javascript: show_voter();">
		I am an Eclipse Committer.
		<br>My dev.eclipse.org login name is: <input type="text" name="login" size="20"></p>
		<p><input type="radio" name="i_am" value="voter" onclick="javascript: show_voter();">
		I am an Eclipse Community Member because (explain why you are a community member;
		e.g. &quot;I use Eclipse&quot;, &quot;I write plug-ins for Eclipse&quot;,
		&quot;I pay the salaries of Eclipse Committers&quot;, &quot;I write articles
		about Eclipse&quot;, etc.):<br>
		<input type="text" name="reason" size="60"> </p>
		
		<div id="div1" class="invis">
		<h2>Vote for the Top Ambassador</h2><p><img border="0" src="http://www.eclipse.org/org/foundation/eclipseawards/ambassador-picture.gif" align="right" hspace="5" vspace="5" width="125" height="125">
		The <b>Top Ambassador</b> award recognizes an individual (committer or non-committer) who best promotes and supports the Eclipse
		community. One great ambassador has been nominated. We recommend that you read 
		<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=213056" target="_blank">what others have written about him</a> while
		considering your vote.</p>
		<p>The nominees are (in random order):</p>
		<p>
		<table width="100%" border="0">
		<?php
		$vote1s = array( 
		"Ed Merks"
		 );
		shuffle( $vote1s );
		$inc1 = floor((count($vote1s) + 1) / 2);
		for( $i = 0; $i < $inc1; $i++ ) {
		 ?><tr><td><input type="radio" name="vote1" value="<?= $vote1s[$i] ?>"><?= $vote1s[$i] ?></td>
		 <?php
		 $j = $i + $inc1;
		 if( $j < count($vote1s) ) {
		 	?><td><input type="radio" name="vote1" value="<?= $vote1s[$j] ?>"><?= $vote1s[$j] ?></td>
		 	<?php
		 } else {
		 	?><td>&nbsp;</td>
		 	<?php
		 }
		 ?></tr><?php
		}
		?>
		</table>
		</div>


		<div id="div2" class="invis">
		<h2>Vote for the Top Committer</h2>
		<p><img border="0" src="http://www.eclipse.org/org/foundation/eclipseawards/committer-picture.gif" align="right" hspace="5" vspace="5" width="125" height="125">
		The <b>Top Committer</b> award recognizes an Eclipse committer who best exemplifies supporting the community through newsgroups,
		Bugzilla, white papers, conference presentations, blogs and other forums. Five great committers have been nominated.  We
		recommend that you read
		<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=213059" target="_blank">what others have written about them</a> while
		considering your vote.</p>
		<p>The nominees are (in random order): 
		</p><p>
		<table width="100%" border="0">
		<?php
		$vote2s = array(
		"Nick Boldt",
		"Paul Webster",
		"Mik Kersten",
		"Chris Aniszczyk",
		"David Williams"
		 );
		shuffle( $vote2s );
		$inc2 = floor((count($vote2s) + 1) / 2);
		for( $i = 0; $i < $inc2; $i++ ) {
		 ?><tr><td><input type="radio" name="vote2" value="<?= $vote2s[$i] ?>"><?= $vote2s[$i] ?></td>
		 <?php
		 $j = $i + $inc2;
		 if( $j < count($vote2s) ) {
		 	?><td><input type="radio" name="vote2" value="<?= $vote2s[$j] ?>"><?= $vote2s[$j] ?></td>
		 	<?php
		 } else {
		 	?><td>&nbsp;</td>
		 	<?php
		 }
		 ?></tr><?php
		}
		?>
		</table>
		</div>
		
		
		<div id="div3" class="invis">
		<h2>Vote for the Top Contributor</h2>
		<p><img border="0" src="http://www.eclipse.org/org/foundation/eclipseawards/contributor-picture.gif" align="right" hspace="5" vspace="5" width="125" height="125">
		The <b>Top Contributor</b> award recognizes an individual (non-committer) who best exemplifies support for the community through
		submission of patches &amp; comments on bugs, posts to newsgroups, creation of white papers, presentations at conferences,
		blogs, IRC and other forums. Top contributors make their contributions due to their passion for making Eclipse a better
		community. In general, no one is paying them for the time they spend on making their Eclipse contributions.
		Three great contributors have been nominated. We recommend that you read
		<a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=168237" target="_blank">what others have written about them</a> while
		considering your vote.</p>
		<p>The nominees are (in random order):</p> 
		<p>
		<table width="100%" border="0">
		<?php
		$vote3s = array(
		"Tom Schindl",
		"Remy Chi Jian Suen",
		"Jacek Pospychala"
		 );
		shuffle( $vote3s );
		$inc3 = floor((count($vote3s) + 1) / 2);
		for( $i = 0; $i < $inc3; $i++ ) {
		 ?><tr><td><input type="radio" name="vote3" value="<?= $vote3s[$i] ?>"><?= $vote3s[$i] ?></td>
		 <?php
		 $j = $i + $inc3;
		 if( $j < count($vote3s) ) {
		 	?><td><input type="radio" name="vote3" value="<?= $vote3s[$j] ?>"><?= $vote3s[$j] ?></td>
		 	<?php
		 } else {
		 	?><td>&nbsp;</td>
		 	<?php
		 }
		 ?></tr><?php
		}
		?>
		</table>
		</div>


		<div id="div4" class="invis">
		<h2>Press This Button to Submit</h2>
		<p><input type="submit" value="Vote!" name="B1"> </p>
		</div>		
		

		</form>



	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>