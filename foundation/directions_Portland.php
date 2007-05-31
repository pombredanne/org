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
      			308 SW First Avenue, Suite 110<br/>
      			Portland, OR 97211<br/>
        		USA 
      		</td>
      		</tr>
      		<tr>
      		<td valign=top width="37%">Map:</td>
      		<td width="63%"><a href="http://maps.google.com/maps?f=q&hl=en&q=308+SW+First+Avenue+Portland,+OR&sll=45.51181,-122.67568&sspn=0.339711,0.648193&ie=UTF8&om=1&z=16&iwloc=addr target="_blank">Google map</a></td>
      		</tr>
      		<tr>
    		<td valign=top width="37%">Using Tri-Met:</td>
    		<td width="63%"> 
      			The <a href="http://www.trimet.org/max/index.htm">Max light-rail</a> Oak Street stop is directly in front<br/>
      			of our building.<br/>
      		</td>
      		</tr>    		
      		<tr>
    		<td valign=top width="37%">Parking and entrance:</td>
    		<td width="63%"> 
      			There is a pay parking lot on the<br/>
      			southwest corner of SW Naito Parkway and Oak Street,<br/>
      			directly east of our building. There is also metered<br/>
        		street parking available in the area.
      		</td>
      		</tr>
		</table>
		<P><IMG SRC="../images/lawrence_bldg.jpg" NAME="Office" ALIGN=CENTER WIDTH=270 HEIGHT=300 BORDER=0><BR CLEAR=LEFT><BR/><BR/>
		</P>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
