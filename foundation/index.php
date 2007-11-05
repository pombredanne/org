<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation";
	$pageKeywords	= "legal, documents, about, foundation";
	$pageAuthor		= "Mike Milinkovich, Nov. 23, 2005";
	
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
    <div class="homeitem3col">
	    <h3>People</h3>
	      <ul>
		    <li><a href="directors.php">Board of Directors:</a>	    
	          The Board of Directors oversees the policies and strategic direction of the Eclipse Foundation.
	          <br/><br/>
	          The 2007 elections for committer and add-in provider representatives on the Board of Directors have been 
	          complated. Please see the <a href="../elections/">Eclipse elections home page</a> for the results, 
	          list of candidates, key dates, and voting process.
	        </li>    
	 		<li><A href="council.php">Eclipse Councils:</A>
	          The Eclipse Councils act to co-ordinate the activities of the Eclipse projects.
	      	</li>
          	<li><A href="staff.php">Staff:</A>
	        	Meet the cast of characters who work for the Foundation.
	      	</li>
          </ul>
	</div>
    <div class="homeitem3col">
	    <h3>Places</h3>
	      <ul>
          	<li><A href="contact.php">Contact info:</A>
	          Contact information for the Eclipse Foundation.
          	</li>
          	<li><A href="directions.php">Directions:</A>
	          How to get the Eclipse Foundation office.
          	</li>
          </ul>
	</div>
    <div class="homeitem3col">
	    <h3>Things</h3>
	      <ul>
          	<li><A href="../documents/">Governance info:</A>
	          How the Eclipse Foundation is governed.
          	</li>
          	<li><A href="../../projects/">Our projects:</A>
	          The Eclipse Foundation hosts a large community of active open source
	          projects; these pages describe the projects as well as the
	          development and IP processes they follow.
          	</li>
          	
          	<li><A href="minutes.php">Meeting minutes:</A>
	          Minutes of the Eclipse membership, board and council meetings.
          	</li>  
          	<li><A href="../press-release/">Press releases:</A>
	          Press releases issued by the Eclipse Foundation.
          	</li>        	
          	<li><A href="../../legal/">Legal resources:</A>
	          Legal resources for those who like to read those sorts of things.
          	</li>
          	<li><a href="../../artwork/">Logos and artwork</a>
	          A complete resource for those interested in using the Eclipse logos, trademarks and artwork.
	          Don&rsquo;t forget to read the <a href="../../legal/logo_guidelines.php">usage guidelines</a>.
          	</li>          	
          	<li><A href="thankyou.php">Thank you!:</A>
	          Our website infrastructure has greatly benefited from these benefactors.
	          You would&rsquo;t be looking at this page without their generousity.
          	</li>
          	
          </ul>
	</div>	
	</div>
	<div id="rightcolumn">
	    <div class="sideitem">
			<h6>Thank you!</h6>
			<p>Our thanks to <a href="thankyou.php">HP, IBM, Intel, Magma and Novell</a> for generous donations to our website infrastructure.</p>
		</div>
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="../../membership/">Membership</a></li>
				<li><a href="../../membership/become_a_member/">Become a member</a></li>
			</ul>
		</div>
	</div>
	</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
