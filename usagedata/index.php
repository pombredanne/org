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
# template.php
#
# Author: 		Wayne Beaton
# Date:			June 5, 2008
#
# Description:
#
#
#****************************************************************************

# Begin: page-specific settings.  Change these.
$pageTitle 		= "Usage Data Collector";
$pageKeywords	= "Eclipse, usage data, usagedata";
$pageAuthor		= "Wayne Beaton";

$tempdir = "./.metadata/.plugins/org.eclipse.epp.usagedata.recording";

ob_start();
?>
<link
	rel="stylesheet" type="text/css" href="layout.css" media="screen" />
<div id="maincontent">
<div id="midcolumn">

<h1><?= $pageTitle ?></h1>
<style>
.homeitem li {
	border-style: none
}
</style>

<p>The Usage Data Collector (UDC) collects information about how individuals
are using the Eclipse platform. This information is periodically
uploaded to servers hosted by The Eclipse Foundation. The intent is to
use this data to help committers and organizations better understand how
developers are using Eclipse.</p>
<h4>Targeted Users of the Data:</h4>
<ul>
	<li>Users of Eclipse</li>
	<li>Committers working on Eclipse projects</li>
	<li>ISVs and organizations creating Eclipse based software</li>
	<li>Enterprise IT departments that make extensive use of Eclipse
	technology</li>
	<li>Academic researchers who want to study how developers work</li>
</ul>
<h4>Data Collected</h4>
<p>Captured data is associated with a user through a combination of
workstation and workspace ids that are automatically generated by the
collector. This identification is not tied to any personal information
about the user.</p>
<p>The usage data monitors what is being used and when (timestamp),
including:</p>
<ol>
	<li>Loaded bundles</li>
	<li>Commands accessed via keyboard shortcuts</li>
	<li>Actions invoked via menus or toolbars</li>
	<li>Perspective changes</li>
	<li>View usage</li>
	<li>Editor usage</li>
</ol>
<p>Where possible, the UDC also captures the symbolic
name and version of the bundle contributing the
command/action/perspective/view/editor.</p>

<p>Please review the <a href="terms.php">Terms of Use</a>.</p>

</div>

<? include "rightcol.php"; ?>

</div>
<?php
$html = ob_get_contents();
ob_end_clean();
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>