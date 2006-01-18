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
	$pageTitle 		= "Thank You!";
	$pageKeywords	= "thanks, donations, foundation";
	$pageAuthor		= "Mike Milinkovich, Nov. 25, 2005";
	
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
     	<p>
        	The Eclipse Foundation would like to thank the following companies for 
        	their support of our website infrastructure:
      	</p>

	<table width="100%" border="0" cellpadding="3" cellspacing=10>
  		<tr>
    		<td width="12%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../membership/members/org-images/hplogosmall.gif" width="92" height="78"></td>
    		<td width="88%">HP for the donation of four <a href="http://www.hp.com/products1/servers/integrity/entry_level/rx2620/index.html" target="_blank">HP 
      			Integrity rx2600</a> 2-cpu Itanium systems. <br>
    		</td>
  		</tr>
  		<tr>
    		<td width="12%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../membership/members/org-images/ibmlogosmall.gif" width="95" height="41"></td>
    		<td width="88%"><br>
      		IBM for the donation of three <a href="http://www-1.ibm.com/servers/eserver/pseries/hardware/entry/550.html" target="_blank">IBM 
      		eServer p5 550</a> 4-cpu servers. <br>
    		</td>
  		</tr>
  		<tr>
    		<td width="12%"><img src="../../membership/members/org-images/intel_logo.gif" width="115" height="57"></td>
    		<td width="88%"><br>
      		Intel for the donation of eight 1.3GHz <a href="http://www.intel.com/products/processor/itanium2/index.htm" target="_blank">Intel 
      		Itanium 2 Processors</a> that went into the HP systems and for <a href="http://www.intel.com/software" target="_blank">assistance 
      		with the architecture</a> for our site. </td>
  		</tr>
  		<tr>
    		<td width="12%"><img src="../../membership/members/org-images/magmalogo.jpg" width="160" height="41"></td>
    		<td width="88%"><br>
      		Magma for providing free managed firewall services for our site.<br>
      		<br>
    		</td>
  		</tr>
  		<tr>
    		<td width="12%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../../membership/members/org-images/novell_suselinux.gif" width="88" height="31"></td>
    		<td width="88%"><br>
      		Novell for donating Suse Enterprise distributions for all of our machines.<br>
    		</td>
  		</tr>
	</table>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
