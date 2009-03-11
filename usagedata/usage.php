<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2008 Eclipse Foundation and others.
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
# usage.php
#
# Author: 		Wayne Beaton
# Date:			June 6, 2008
#
# Description:
#
#
#****************************************************************************

# Begin: page-specific settings.  Change these.
$pageTitle 		= "Usage Data Collector Usage Report";
$pageKeywords	= "Eclipse, usage data, usagedata, cortez";
$pageAuthor		= "Wayne Beaton";
ob_start();
?>
<link
	rel="stylesheet" type="text/css" href="layout.css" media="screen" />
<div id="maincontent">
<div id="midcolumn">

<? include "reports/data/usage.html"; ?>

</div>
</div>
<?php
$html = ob_get_contents();
ob_end_clean();
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>