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
	$pageTitle 		= "Contact Us";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Type your name here";
	
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
		<h2>need to contact someone at Eclipse.org?</h2>
		<table width="100%" border="0" cellpadding="5" cellspacing=5>
		  <tr>
		    <td width="37%" valign=top>Technical questions</td>
    		<td width="63%"><a href="../../newsgroups/register.php">Register</a> 
      		and join the <a href="../../newsgroups/">Newsgroups</a></td>
  		</tr>
  		<tr>
    		<td width="37%" valign=top>Legal questions</td>
    		<td width="63%"> Email: <b>license (at) eclipse.org</b> </td>
  		</tr>
  		<tr>
    		<td width="37%" valign=top>News, events or announcing a new plug-in</td>
    		<td width="63%"> Email: <b>news (at) eclipse.org</b></td>
  		</tr>
  		<tr>
    		<td width="37%" valign=top> Joining the Eclipse Foundation</td>
    		<td width="63%">Email: <b>membership (at) eclipse.org</b></td>
  		</tr>
  		<tr>
    		<td width="37%" valign=top>A project proposal for Eclipse.org</td>
    		<td width="63%">Email: <b>emo (at) eclipse.org</b></td>
  		</tr>
  		<tr>
    		<td width="37%" valign=top>Eclipse.org infrastructure</td>
    		<td width="63%">Email: <b>webmaster (at) eclipse.org</b></td>
  		</tr>
  		<tr>
    		<td valign=top width="37%">Address:</td>
    		<td width="63%"> 
      			<p>Eclipse Foundation, Inc.<br/>
      			102 Centrepointe Drive<br/>
      			Ottawa, Ontario,<br/>
        		Canada, K2G 6B1 <br/><br/>
        		<a href="directions.php">directions</a></p>
      		</td>
  		</tr>
  		<tr>
    		<td valign=top width="37%">Phone:<br>
      		Fax: </td>
    		<td width="63%">+1.613.224.9461<br>
      		+1.613.224.5172 </td>
  		</tr>
  		<tr>
    		<td valign=top width="37%">&nbsp;</td>
    		<td width="63%">&nbsp;</td>
  		</tr>
	</table>
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="directions.php">Directions</a></li>
				<li><a href="staff.php">Foundation Staff</a></li>
			</ul>
		</div>
	</div>
	

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
