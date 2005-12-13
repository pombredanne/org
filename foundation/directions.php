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
	$pageTitle 		= "Directions";
	$pageKeywords	= "foundation, office, directions";
	$pageAuthor		= "Mike Milinkovich, Nov. 22, 2005";
	
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
		<table>
		  	<tr>
    		<td valign=top width="37%">Address:</td>
    		<td width="63%"> 
      			Eclipse Foundation, Inc.<br/>
      			102 Centrepointe Drive<br/>
      			Ottawa, Ontario,<br/>
        		Canada, K2G 6B1 
      		</td>
      		</tr>
      		<tr>
      		<td valign=top width="37%">Map:</td>
      		<td width="63%"><a href="http://maps.google.com/maps?q=102+centrepointe+drive,+ottawa,+ontario,+canada&t=h&iwloc=A&hl=en" target="_blank">Google map</a></td>
      		</tr>
      		<tr>
      		<td valign=top width="37%">Directions from the Ottawa Airport:&nbsp;</td>
      		<td width="63%"><a href="http://maps.google.com/maps?q=from%3A+1+1st+Ave,+Gloucester,+ON,+Canada+to%3A+102+centrepointe+drive,+ottawa,+ontario,+canada&ll=45.333806,-75.708332&spn=0.084146,0.152967&t=h&f=d&hl=en" target="_blank">Google directions</a></td>
      		</tr>
      		<tr>
      		<td valign=top width="37%">Directions from downtown:</td>
      		<td width="63%"><a href="http://maps.google.com/maps?q=from%3A+1+wellington,+ottawa,+ontario,+canada+to%3A+102+centrepointe+drive,+ottawa,+ontario,+canada&spn=0.084070,0.152967&t=h&f=d&hl=en" target="_blank">Google directions</a></td>
      		</tr>
       		<tr>
      		<td valign=top width="37%">Directions from Kanata:</td>
      		<td width="63%"><a href="http://maps.google.com/maps?q=from%3A+100+March+Rd,+Kanata,+ON,+Canada+to%3A+102+centrepointe+drive,+ottawa,+ontario,+canada&t=h&f=d&hl=en" target="_blank">Google directions</a></td>
      		</tr>     		
      		<tr>
    		<td valign=top width="37%">Parking and entrance:</td>
    		<td width="63%"> 
      			Free parking and the entrance is at<br/>
      			the rear of the building. Turn onto<br/>
      			Hemmingwood Way, and then take an<br/>
        		immediate left into the parking lot.
      		</td>
      		</tr>
		</table>
		<P><IMG SRC="../../images/officeview.jpg" NAME="Office" ALIGN=CENTER WIDTH=270 HEIGHT=300 BORDER=0><BR CLEAR=LEFT><BR/><BR/>
		</P>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
