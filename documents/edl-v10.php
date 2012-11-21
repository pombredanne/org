<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
	$pageTitle 		= "Eclipse Distribution License";
	$pageKeywords	= "edl, legal, license";
	$pageAuthor		= "Mike Milinkovich, January 25, 2008";
	
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
		<h1>$pageTitle  - v 1.0</h1>

<p>Copyright (c) 2007, Eclipse Foundation, Inc. and its licensors. </p>

<p>All rights reserved.</p>
<p>Redistribution and use in source and binary forms, with or without modification, 
	are permitted provided that the following conditions are met:</p>
<ul><li>Redistributions of source code must retain the above copyright notice, 
	this list of conditions and the following disclaimer. </li>
<li>Redistributions in binary form must reproduce the above copyright notice, 
	this list of conditions and the following disclaimer in the documentation 
	and/or other materials provided with the distribution. </li>
<li>Neither the name of the Eclipse Foundation, Inc. nor the names of its 
	contributors may be used to endorse or promote products derived from 
	this software without specific prior written permission. </li></ul>

<p>THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" 
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED 
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. 
IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, 
INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT 
NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR 
PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, 
WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) 
ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE 
POSSIBILITY OF SUCH DAMAGE.</p>
</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>OSI Approved</h6>The Eclipse Distribution License is an OSI Approved Open Source License by means of the 
			<a href="http://www.opensource.org/licenses/BSD-3-Clause" target="blank">New BSD License</a>.
			<p align="center"><a href="http://www.opensource.org/licenses/BSD-3-Clause" target="blank"><img align="center" src="../../images/osi-certified-60x50.gif" border="0"/>&nbsp</a></p>
			<h6>Purpose</h6>
			Use of the Eclipse Distribution License by any project at the Eclipse Foundation must 
			be reviewed and unanimously approved by the <a href="../foundation/directors.php">Board of Directors</a>.
			<h6>Related Links</h6>
			<ul>
			<li>The standard Eclipse license is the <a href="epl-v10.php">Eclipse Public License</a>.</li>
			<li><a href="edl-v10.html">EDL in plain HTML</a></li>
			</ul>
		</div>
	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
