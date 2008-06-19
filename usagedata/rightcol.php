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
# rightcol.php
#
# Author: 		Wayne Beaton
# Date:			June 5, 2008
#
# Description: Provides a right-column for pages that care to import this file
#
#
#****************************************************************************
?>

<div id="rightcolumn">

<div class="sideitem">
<h6>More information</h6>
<ul>
<li><a href="userguide.php">User Guide</a></li>
<li><a href="faq.php">Frequently Asked Questions</a></li>
<li><a href="terms.php">Terms of Use</a></li>
</ul>

<p>Reports</p>
<ul>
<li><a href="results.php">Aggregate data over a 14 day period</a></li>
<li><a href="usage.php">Usage trends</a></li>
<li><a href="proximity.php">Project pairings</a></li>
</ul>
</div>

<div class="sideitem">
<h6>Code</h6>
<p>The client side of the UDC is implemented in the <a href="/epp">Eclipse Packaging Project</a> (EPP).
You can find the code for it there.</p>
<ul>
<li><a href="/epp">The Eclipse Packaging Project</a></li>
<li><a href="/epp/usagedata">UDC Component</a></li>
<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.epp/?root=Technology_Project">Browse the code online</a></li>
<li><a href="/epp/usagedata/UsageData.psf">Add the code to your workspace</a></li>
<li><a href="/epp/usagedata/faq.php">Technical FAQ</a></li>
</ul>
</div>

</div>