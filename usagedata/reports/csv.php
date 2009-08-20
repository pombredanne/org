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

$kinds = array('Bundles'=>'bundle', 'Commands'=>'command', 'Perspectives'=>'perspective', 'Views'=>'view', 'Editors'=>'editor');

$kind = 'view';
if (array_key_exists('kind', $_GET)) $kind = $_GET['kind'];
if (!in_array($kind, $kinds)) $kind = 'view';

$file_name = $kind . "s.csv";


header ("Content-type: text/csv\nContent-Disposition: \"inline; filename=$file_name\"");

include "/home/data/httpd/writable/udc/reports/data/$file_name";
?>