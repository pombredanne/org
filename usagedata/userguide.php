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
# userguide.php
#
# Author: 		Wayne Beaton
# Date:			June 5, 2008
#
# Description:
#
#
#****************************************************************************

# Begin: page-specific settings.  Change these.
$pageTitle 		= "UDC User Guide";
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

<p>The UDC is designed to have a minimal impact on user
experience. The impact on performance is negligible.</p>

<p>Once installed, the UDC immediately starts
monitoring your use of Eclipse. In particular, it takes note of the
views, editors, perspectives, and commands that you use. It also keeps
track of when you bring the Eclipse workbench window into focus. At a
lower level, the UDC records the bundles (plug-ins)
that are loaded by Eclipse. The information collected amounts to the id
of the entity (view, editor, perspective, etc.), the symbolic name and
version of the bundle that contains the entity, and the time of the
event.</p>

<p>We recognize that the data collected may contain sensitive
information. Symbolic names for bundles can potentially include company
and product names; bundle versions, as well as view, editor, and
perspective ids could potentially also contain sensitive information.
With this in mind, the UDC includes a filtering
framework that can be used to restrict the type of information that is
uploaded.</p>

<p>After a configurable period of time (defaults to five days) passes, 
the UDC asks you for permission to upload.</p>

<p align="center"><img src="images/UploadWiz.png" /></p>

<p>At this point, you can tell the UDC what you want to
do:</p>

<ul>
	<li><em>Upload now</em> tells the UDC to upload the
	data that has been captured to date. After the same configurable period
	of time passes, you will be asked again.</li>

	<li><em>Upload always</em> tells the UDC to upload the
	data that has been captured to date and not ask again. Henceforth, the
	data will be uploaded without asking.</li>

	<li><em>Don't upload</em> tells the UDC not to upload
	the data that has been captured. After that same configurable period of
	time passes, you will be asked again. All the data collected to this
	point will be retained.</li>

	<li><em>Turn UDC feature off</em> tells the UDC not to
	upload the data and to stop collecting the data altogether. This turns
	off the usage data collection.</li>
</ul>

<p>The period of time between requests to upload the usage data can be
configured by changing the &quot;Upload Period&quot; field on the
&quot;Usage Data Collection | Uploading&quot; preferences page.</p>

<p align="center"><img src="images/UploadingPrefs.png" /></p>

<p>The target for uploads is a server hosted by The Eclipse Foundation.
The data is stored in its collected form in a foundation database.</p>

<p>Two different keys are used to identify the source of the uploaded
data. The first key identifies the workstation; this key is stored
locally in your &quot;user home&quot; directory. The second key
identifies the workspace; this key is stored in the <em><?= $tempdir ?></em>
directory for the workspace. These keys are uploaded along with the
usage data.</p>

<p>Please review the <a href="terms.php">Terms of Use</a>.</p>

</div>

<? include "rightcol.php"; ?>

</div>
<?php
$html = ob_get_contents();
ob_end_clean();
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>