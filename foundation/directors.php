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
	$pageTitle 		= "Eclipse Foundation Board of Directors";
	$pageKeywords	= "foundation, board, legal";
	$pageAuthor		= "Mike Milinkovich, Nov. 22, 2005";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<table border=0 cellspacing=5 cellpadding=2 width="67%" >
  		<tr>  
    		<td width="49%"> 
      		<p><b>Director</b><b> </b></p>
    		</td>  
    		<td width="51%"> 
      		<p><b>Organization</b></p>
    		</td>
    	</tr>
 		<tr>
    		<td width="49%">Michael Bechauf</td>
    		<td width="51%">SAP AG</td>
		</tr>
 		<tr>
    		<td width="49%">Ed Cobb</td>
    		<td width="51%">BEA</td>
 		</tr>
 		<tr>
    		<td width="49%">Mark Coggins</td>
    		<td width="51%">Actuate Corporation</td>
 		</tr>
 		<tr>
    		<td width="49%">Paul Czarnik</td>
    		<td width="51%">Compuware</td>
 		</tr>
 		<tr height=17 style='height:12.75pt'>
    		<td width="49%">Tomas Evensen</td>
    		<td width="51%">Wind River</td>
 		</tr>
 		<tr>
    		<td width="49%">Sam Greenblatt</td>
    		<td width="51%">Computer Associates</td>
 		</tr>
 		<tr>
    		<td width="49%">Andi Gutmans</td>
    		<td width="51%">Zend</td>
 		</tr>
 		<tr>
    		<td width="49%">Boris Kapitanski</td>
    		<td width="51%">Serena Software</td>
 		</tr>
 		<tr>
    		<td width="49%">Jonathan Khazam</td>
    		<td width="51%">Intel</td>
 		</tr>
 		<tr>
    		<td width="49%">Heikki Koivu</td>
    		<td width="51%">Nokia</td>
 		</tr>
 		<tr>
    		<td width="49%">Howard H. Lewis</td>
    		<td width="51%">Elected add-in provider representative (from 
      			SlickEdit and Discovery Machine, Inc)</td>
 		</tr>
 		<tr>
    		<td width="49%"> Scott Lewis</td>
    		<td width="51%">Elected committer representative</td>
 		</tr>
 		<tr>
    		<td  width="49%">Philip Ma</td>
    		<td width="51%">Hewlett Packard</td>
 		</tr>
 		
 		<tr>
    		<td width="49%">Kai-Uwe Maetzel</td>
    		<td width="51%">Elected committer representative</td>
 		</tr>
 		<tr>
    		<td width="49%">Rich Main </td>
    		<td  width="51%">Elected add-in provider representative (from SAS)</td>
 		</tr>
 		<tr>
    		<td width="49%">Kevin Morgan</td>
    		<td width="51%">MontaVista Software</td>
 		</tr>
 		 <tr>
    		<td width="49%">Michael Norman</td>
    		<td width="51%">Scapa Technologies</td>
 		</tr>
		<tr>
    		<td width="49%">Raaj Shinde</td>
    		<td width="51%">Borland</td>
 		</tr>
		<tr>
    		<td hwidth="49%">Dave Thomson</td>
    		<td width="51%">IBM</td>
 		</tr>
		<tr>
    		<td width="49%"> David Tong</td>
    		<td width="51%">Sybase</td>
 		</tr>
		<tr>
    		<td width="49%"> Carl Trieloff</td>
    		<td width="51%">Iona</td>
 		</tr>
		<tr>
    		<td width="49%">John Wiegand</td>
    		<td width="51%">Elected committer representative</td>
 		</tr>
		<tr>
    		<td width="49%">Todd Williams</td>
    		<td width="51%">Elected add-in provider representative (from Genuitec)</td>
 		</tr>
		<tr>
    		<td width="49%">&nbsp;</td>
    		<td width="51%">&nbsp;</td>
 		</tr>
	</table>	
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
