<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2006 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Wayne Beaton (Eclipse Foundation)- initial API and implementation
 *******************************************************************************/

#*****************************************************************************
#
# faq.php
#
# Author: 		Wayne Beaton
# Date:			June 5, 2008
#
# Description: FAQ about the UDC. This page is more concerned with
#  questions about governance and use of the data.
#
#
#****************************************************************************

# Begin: page-specific settings.  Change these.
$pageTitle 		= "UDC Frequently Asked Questions (FAQ)";
$pageKeywords	= "Eclipse, usage data, usagedata";
$pageAuthor		= "Wayne Beaton";

ob_start();
?>
<link
	rel="stylesheet" type="text/css" href="layout.css" media="screen" />
<div id="maincontent">
<div id="midcolumn">

<h1><?= $pageTitle ?></h1>
<p>This FAQ is concerned with questions regarding the capture and use
of the data by the foundation. A technical FAQ that answers questions about
the underlying technology is available on the Eclipse Packaging Project's
<a href="/epp/usagedata/faq.php">Usage Data Collector component FAQ</a>.</p>

<dl>
	<dt>Where is the information stored?</dt>
	<dd>
	<p>As the usage data is collected, it is stored locally in a working
	directory within the Eclipse workspace. After data has been successfully
	uploaded and the data has been transferred into the Eclipse
	Foundation's database, the local files are deleted.</p>
	</dd>

	<dt>What information is captured?</dt>
	<dd>
	<p>The UDC captures the the following information:</p>
	<ol>
		<li>Bundles (also known as plug-ins) that are started by the system.</li>
		<li>Commands accessed via keyboard shortcuts, and actions invoked via
		menus or toolbars.</li>
		<li>Perspective changes</li>
		<li>View and editor open, close, and activation events (activations
		occur when a view or editor is given focus).</li>
	</ol>
	<p>For each item captured, we also capture the idenfier and version of
	the bundle that contributes the item. When information is uploaded, we
	further capture the country from which the upload originated.</p>

	<p>It's valuable to also note what we <em>do not</em> capture. We <em>do
	not capture any personal information</em>. We <em>do not capture IP
	addresses</em>. We <em>do not capture any information that will allows
	us to identify the source of the information</em>.</p>

	<p>Two different keys are used to identify the source of the uploaded
	data. The first key identifies the workstation; this key is stored
	locally in your &quot;user home&quot; directory. The second key
	identifies the workspace; this key is stored in the workspace. 
	These keys are uploaded along with the
	usage data; they allow us to correlate data.</p>
	</dd>
	
	<dt>Can I see what's been uploaded?</dt>
	<dd>
	<p>You can review some aggregations of the data that we've collected <a
		href="results.php">here</a>.</p>
	</dd>
	
	<dt>How do I turn off the Usage Data Collector?</dt>
	<dd>
	<p>There is an option on the &quot;Usage Data Collection&quot;
	preferences page labeled &quot;Enable Capture&quot;. Turn this option <em>off</em>.</p>
	</dd>
</dl>
</div>

<? include "rightcol.php"; ?>

</div>
<?php
$html = ob_get_contents();
ob_end_clean();
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>