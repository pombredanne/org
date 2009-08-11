
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Join the e4 Feedback Contest & Webinars";
	$pageKeywords	= "Eclipse, e4, webinar, feedback, review, contest, blogathon, shirt";
	$pageAuthor		= "Lynn Gayowski";
	
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
     	
      	<p>An early alpha release of <a href="http://www.eclipse.org/e4/" target="blank">e4</a>, the next
      	generation of the Eclipse platform, is now available and we want to get the community involved!
		<a href="http://download.eclipse.org/e4/downloads/drops/R-0.9-200907291930/index.html"
		target="blank">Download e4 0.9</a> now to try it out.
		
		<h4><a href="http://www.eclipse.org/community/e4contest/guidelines.php">e4 Feedback Contest</a></h4>
		
		<p>The Eclipse Foundation wants to hear what you think of e4. Enter the Feedback Contest by
		writing a review, explaining what you like or don't like about e4.
		Entries can be written in any language. Publish the review on your blog, a newsgroup or portal, and
		send us the link at <a href="mailto:e4-reviews@eclipse.org">e4-reviews@eclipse.org</a> by
		August 31, 2009. Five entries will be selected at random to win an Eclipse polo shirt. For full
		details, see the <a href="http://www.eclipse.org/community/e4contest/guidelines.php">
 		Feedback Contest guidelines</a>.</p>

		<h4><a href="http://www.eclipse.org/community/e4webinar/abstracts.php">e4 Webinars</a></h4>
		 		
 		<p>The Eclipse Foundation is presenting 2 webinars on August 18 and August 26. Join the
 		webinars to learn more about e4 and chat with the committers who are making it happen.
 		Give your feedback live!  To register, send an email to <a href="mailto:webinar-e4@eclipse.org">
 		webinar-e4@eclipse.org</a>. Abstracts and more information on the webinars are available at the
 		<a href="http://www.eclipse.org/community/e4webinar/abstracts.php">e4 Webinars page</a>.</p>

  		<p>For an entertaining promotional video, see 
 		<a href="http://www.youtube.com/watch?v=4uZVnSTYBYA" target="blank">e4 Webinars from the Eclipse Foundation</a> on YouTube:<br><br>
		<a href="http://www.youtube.com/watch?v=4uZVnSTYBYA" target="blank"><img src="../../community/e4webinar/e4_webinizzles.png" width="200" height="120" alt="e4 webinars"></a>
		</p>
				
 	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="http://www.eclipse.org/community/e4contest/guidelines.php">e4 Feedback Contest Guidelines</a></li>
				<li><a href="http://www.eclipse.org/community/e4contest/reviews.php">e4 Feedback Contest Reviews</a></li>
				<li><a href="http://www.eclipse.org/community/e4webinar/abstracts.php">e4 Webinars</a></li>
			</ul>
		</div>
	
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

