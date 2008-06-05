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
	# index.php
	#
	# Author: 		Wayne Beaton
	# Date:			2007-02-20
	#
	# Description: Terms of Use for the Usage Data Collector (UDC). Original
	#   text provided by Ian Skerrett.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Usage Data Collection Terms of Use";
	$pageKeywords	= "eclipse, packaging, usage data, usagedata, udc";
	$pageAuthor		= "Wayne Beaton";
	

	ob_start();
?>

<div id="maincontent">

<!-- MIDCOLUMN START -->
<div id="midcolumn">

<h1><?= $pageTitle ?></h1>
<p>This document describes
how the Eclipse Foundation will treat the data provided by
individuals and organizations through the Eclipse Usage Collector.  
</p>
<ul>
	<li>A unique id is
	generated for every workstation (or Eclipse workspace) that submits
	data using the Usage Data Collector.  This session id is transmitted every
	time data is sent to the Eclipse Foundation.</li>
	<li>The Eclipse
	Foundation does not intend for the Usage Data Collector to collect
	information that can uniquely identify you as an individual. 
	However, it may inadvertently collect information that is included
	in plug-in names, which information may identify an individual or
	organization. </li>
	<li>The data that is
	being collected relates to how you are using Eclipse and any
	third-party plug-ins that you have added to your Eclipse workspace. 
	This includes, but is not limited to, information on plug-in names,
	version numbers, length of time spent in a specific editor/view or
	perspective, actions and commands that you invoked, etc.   You can
	imagine it to be similar to &quot;click stream&quot; data that is
	collected at certain web sites.</li>
	<li>The Usage Data Collector
	may collect and transmit the country where you are located.   You
	may also optionally specify general demographic information.  
	</li>
</ul>
<h2>Uses of the Information</h2>
<ul>
	<li>The Eclipse
	Foundation may, in its sole discretion, make available to
	organizations and individuals, on a case-by case-basis, the data
	that it collects through the Usage Data Collector, whether in raw or
	aggregated form. 
	</li>
	<li>The Eclipse
	Foundation will publish summary reports based on the data obtained. 
	These reports will be made available in machine readable format that
	will allow individuals and organizations to undertake further
	analysis.</li>
	<li>Potential uses of
	the summary reports may include, but not limited to: 1) Eclipse
	project committers who want to better understand how individuals are
	using their projects, 2) usage of Eclipse projects and third-party
	Eclipse plug-ins, and 3) an estimate to the number of individuals
	using Eclipse.  It is expected that the summary reports and raw data
	may be used for other purposes that we have not envisioned at this
	point in time.</li>
</ul>

<h2>Interactions with
the Usage Data Collector</h2>

<ul>
	<li>With your
	permission, the Usage Data Collector will periodically transmit your usage
	data to the Eclipse Foundation.  The first time it attempts to
	transmit the data, you will be requested to grant permission of
	transmission.  If you decline the request, the Usage Data Collector will
	stop functioning, until you decide to re-enable it.  If you grant
	permission, you will have the option of allowing the Usage Data Collector
	to automatically transmit data without further interaction or to
	request your permission each time it attempts to transmit data.</li>
	<li>You can choose to
	limit the range of plug-ins on which the Usage Data Collector collects
	information.  You may limit the list of plug-ins to be only those
	that are provided by the Eclipse Foundation.  In addition, you may
	exclude plug-ins that include a specific text string in their name. 
	 To limit the range of plug-in, go to the &quot;Usage Data Collection | Preview&quot;
	 page in the workspace preferences and add one or more filters.</li>
	<li> At anytime, you
	may view the data that is being collected.  To view your current
	information, go to the
	&quot;Usage Data Collection | Preview&quot; preferences page.</li>
	<li>After providing
	your initial permission, you may discontinue use of the Usage
	Monitor by turning off the &quot;Enable Capture&quot; checkbox
	on the &quot;Usage Data Collection&quot; preferences page.</li>
</ul>
<h2>More Information</h2>
<p>If you have any questions or would like additional information about the Eclipse
Usage Data Collector, please contact eclipse_udc@eclipse.org.</p>
</div>
</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
