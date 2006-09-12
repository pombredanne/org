<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Final Opportunity to Register for Eclipse Membership Meeting and Marketing Seminar";
	$pageKeywords	= "Eclipse Foundation, EPIC, community, bulletin";
	$pageAuthor		= "Donald Smith";
	
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
		<h2>Members Bulletin</h2>
		
		<p>Registration will close at 5pm EDT on September 18th for the 
     	<a href="https://www.regonline.com/EventInfo.asp?EventId=103174">
     	Eclipse Membership Meeting and Marketing Seminar</a>, 
     	September 20th and 21st in Dallas, Texas.</p>
    
 	    <p>
 	   Hear and share experiences with industry veterans at the Marketing Symposium on the 
 	   afternoon of September 20th. 
 	   This is a valuable event for anyone working in Open Source.  The agenda includes:
 	    <ul>
 	      <li> Michael Goulde, Forrester Research, "Perspectives on Open Source Evolution and Adoption" </li>
     <li>  Maher Massi, Genuitech, "Eclipse Market Research and Demographics" </li>
     <li> Panelists:  Robert Dasy, Lynxworks; Sean Johnson, Business Objects; Panel:  "Competing with Open Source Solutions" </li>
     <li> Alan Zeichick, BZ Media, "How to Get Good Press Coverage" </li>
     <li> Peter Ryce, Adobe, "Best Practices for Developer Webinars" </li>
     <li> Panelists:  Jonathan Baker, Sybase; Kevin Parker, Serena Software; Jason Weathersby, Actuate; Panel:  "Viral Marketing and Evangelist" </li>
    </ul>
 	   </p> 
 	   
 	  <p>
 	  Familiarize yourself with, and impact the direction of, the 
 	  Eclipse Ecosystem at the Members Meeting on September 21st. 
 	  You will learn about the goings on in the Ecosystem from Eclipse Projects, 
 	  fellow members and The Eclipse Foundation.  There will be many networking events
 	  and opportunities to provide feedback and direction on Eclipse.
 	    <ul>
 	      <li>Mike Milikovich, The Eclipse Foundation, "Executive Director Update"</li>
 	      <li>Steve McClure, IDC, "IDC Eclipse Adoption Study"</li>
 	      <li>John Cunningham, Band XI, "Cyrano - National Guard Application demo using RCP Technology"</li>
 	      <li>Various Speakers - New Member Introductions</li>
 	      <li>Various Speakers - Eclipse Project Updates</li>
 	      <li>Various Speakers - Interactive Panel and discussion on Membership value and projects</li>      	      
 	    </ul>
 	  </p>
 	  
 	  <p> There will also be a "New member jumpstart" meeting on the morning of September 20th.
 	  This jumpstart meeting is designed for both a technical (committers) and 
 	  business (marketing, organization, business development) audience.  Even if you've 
 	  been involved with Eclipse for a while, this session is a great opportunity to learn 
 	  about the role of the Eclipse Foundation, key dynamics in the Ecosystem and the 
 	  various roles people play.
 	  </p>
 	  
		<table width="100%">
			<tr>
				<td width="50%" valign="top">

 	  
     <p> These meetings are exclusively for employees of
     	<a href="http://www.eclipse.org/membership/">
     	Eclipse Member Organizations
     	</a> and Eclipse committers.
     </p>
      	<a href="https://www.regonline.com/EventInfo.asp?EventId=103174">Click here to register.</a>
     		
     	
     		</td>
				<td width="40%">
					
					<a href="https://www.regonline.com/EventInfo.asp?EventId=103174"><img src="http://www.eclipse.org/artwork/foundationmember/images/mem_eclipse_pos_logo_fc_sm.jpg" border=0 alt="Register Now!" title="Register Now!"></a>					
				</td>
			</tr>
		</table>
      	<p>
    	
     	  </p>
		
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

