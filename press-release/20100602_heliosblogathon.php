
<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Write a Review for the Helios Blogathon";
	$pageKeywords	= "eclipse, helios, review, blog, blogathon, contest";
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
		
      	<p> We want to hear what you think of the <a href="http://wiki.eclipse.org/Helios#Projects">Eclipse
      	projects</a> that are being released as part of Helios. We will give you a 
      	an Eclipse shirt for writing a review.  One lucky winner will also win a pass to
      	<a href="http://www.eclipsecon.org/2011">EclipseCon 2011</a> or
      	<a href="http://www.eclipsecon.org/summiteurope2010/">Eclipse Summit Europe 2010</a>!</p>

 		<p>To enter the blogathon, all you need to do is write a review or record a video about one or more of
 		the projects that are a part of the Eclipse Helios release. Publish the review on your blog, a newsgroup
 		or portal and then send us a link to <a href="mailto:helios.reviews@eclipse.org"> 
 		helios.reviews@eclipse.org</a>.</p>
 		
 		<p>A review will be deemed worthy of a thank you gift, if the content conveys sufficient technical 
 		content.  We aren't looking for long essays, so 3 to 5 points of what you like or don't like about
 		one or more Helios projects is enough. Eclipse is a global community, so feel free to write
 		the review in your native language. You can also write multiple reviews, however we will only award
 		one shirt per person. The top 3 reviews will receive Eclipse jackets and the best review will
 		receive a pass to the next EclipseCon 2011 or Eclipse Summit Europe 2010.</p>

 		<p>The top 3 and the best reviews will be selected by a panel of judges. All entries must be received by
 		<b>July 31, 2010</b>.  For full details, see the <a href="http://www.eclipse.org/helios/blogathon/guidelines.php">
 		blogathon page</a>.</p>

 	<br><br>
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="/../../helios/blogathon/guidelines.php">Blogathon Details</a></li>
				<li><a href="/../../helios/blogathon/reviews.php">Submitted Reviews</a></li>
			</ul>
		</div>
	</div>	
</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

