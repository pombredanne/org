<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Write a Review, Win an Eclipse Shirt";
	$pageKeywords	= "Eclipse Foundation, Europa, community, bulletin";
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
		<h2>Community Bulletin</h2>
      	<p> We want to hear what you think of the <a href="http://www.eclipse.org/europa/projects.php">Eclipse projects</a>
      	 that are being released as part of <a href="http://www.eclipse.org/europa/">Europa</a>.  
      	In fact, we will give you an Eclipse shirt for writing a Europa review.  One lucky winner will also 
      	win a pass to <a href="http://www.eclipsecon.org/2007/">EclipseCon 2008</a> or <a href="http://www.eclipsecon.org/summiteurope2007/">
      	Eclipse Summit Europe 2007</a>.</p>

 		<p>To qualify, all you need to do is write a review about one or more of the projects that are part of 
 		the Eclipse Europa release.   Have the review published on your blog, a newsgroup, or portal 
 		(such as EclipseZone, Javalobby, The Serverside, InfoQ, etc.) and then send us a link to 
 		<a href="mailto:europa-reviews@eclipse.org">europa-reviews@eclipse.org</a>.   We would also ask that you 
 		please add a link to your review to <a href="http://www.dzone.com/">dzone</a> and use the 'eclipse' tag.</p>
 		
 		<p>A review will be deemed worthy of an Eclipse shirt, if the content conveys sufficient technical 
 		content.  We aren't looking for long essays, but at least 3-5 points of what you like or don't like about a project(s).
 		Simply saying 'Europa is available', 'Europa Rocks', 'Europa Sucks' won't get you a shirt.  </p>
 		
 		<p>We will also be giving out brand new Eclipse jackets to the 'top 3' reviews and the person the writes 
 		the 'best' review will receive a pass to the next EclipseCon 2008 or Eclipse Summit Europe 2007.   The 
 		'top 3' and the 'best' reviews will be selected by a panel of judges.  The judges will select the winners 
 		from the list of reviews submitted to dzone.  The judging will take place after July 31, 2007. </p>

 		<p>Important Details: <br>
 		
 		<ul><li>Anyone can write a review.  You can also write multiple reviews but if you do please follow the 
 		submission guidlelines for each review.  However, we will only send one shirt per person.</li>
 		<li>The EclipseCon or Eclipse Summit Europe pass only covers the conference registration.  It does not 
 		include any travel expenses.  The pass is non-transferable, non-refundable and it has no cash value.  
 		Meaning if you can't go to either conference or you received a free pass some other way (ie. a speaker 
 		pass), you won't be able to take advantage of the prize. </li>
 		<li>Eclipse is a global community, so feel free to write a review in your native tongue.</li>
 		<li>Informed, insightful, educated reviews&mdash;postitive and negative&mdash;are always welcomed.  However, anti-Eclipse, 
 		FUD-spewers, propogandists, vile, mean-spirited curmudgeons need not apply.  </li>
 		</ul>
      </p>
      <br>
	</div>
</div>


	<div id="rightcolumn">
	<div class="sideitem">
		<h6>Related Links</h6>
		<ul>
			<li><a href="/europa/europareviews.php">Europa Reviews</a></li>
		</ul>
	</div>
	</div>



		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

