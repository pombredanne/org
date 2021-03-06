<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Thank You!";
	$pageKeywords	= "thanks, donations, foundation";
	$pageAuthor		= "Mike Milinkovich, Nov. 25, 2005";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<div id="midcolumn">
	<h1>$pageTitle</h1>
     	<p>
        	The Eclipse Foundation would like to thank the following companies for 
        	their support of our website infrastructure:
      	</p>
	<table width="100%" border="0" cellpadding="3" cellspacing=10>
  		<tr>
    		<td width="12%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="http://www.eclipse.org/membership/scripts/get_image.php?id=848&size=small" width="120"></td>
    		<td width="88%">AMD for the donation of five <a href="http://www.amd.com/us-en/Processors/ProductInformation/0,,30_118_8825,00.html">
    		Quad-Core AMD Opteron<sup>TM</sup> based</a>
    		servers to power the 
    		Eclipse Foundation web infrastructure, including the EclipseCon download server.
			 <br>
    		</td>
  		</tr>
  		
  		<tr>
    		<td width="12%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/membership/scripts/get_image.php?id=901&size=small" width="120"></td>
    		<td width="88%">Cisco, for making our networking infrastructure
    			<a href="http://www.cisco.com/en/US/products/index.html" target="_blank"> 
      				Gigabit Ready</a> with firewalls, load balancers and switches. <br>
    		</td>
  		</tr>  
  		
  		<tr>
    		<td width="12%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/membership/scripts/get_image.php?id=663&size=small" width="120"></td>
    		<td width="88%">HP for the donation of four <a href="http://www.hp.com/products1/servers/integrity/entry_level/rx2620/index.html" target="_blank">HP 
      			Integrity rx2600</a> 2-cpu Itanium systems. <br>
    		</td>
  		</tr>  		
  		<tr>
    		<td width="12%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/membership/scripts/get_image.php?id=656&size=small" width="120"></td>
    		<td width="88%"><br>
      		IBM for the donation of three <a href="http://www-1.ibm.com/servers/eserver/pseries/hardware/entry/550.html" target="_blank">IBM 
      		eServer p5 550</a> 4-cpu servers. <br>
    		</td>
  		</tr>
  		<tr>
    		<td width="12%"><img src="/membership/scripts/get_image.php?id=657&size=small" width="120"></td>
    		<td width="88%"><br>
      		Intel for the donation of eight 1.3GHz <a href="http://www.intel.com/products/processor/itanium2/index.htm" target="_blank">Intel 
      		Itanium 2 Processors</a> that went into the HP systems and for <a href="http://www.intel.com/software" target="_blank">assistance 
      		with the architecture</a> for our site. </td>
  		</tr>
  		<tr>
    		<td width="12%"><img src="../../membership/members/org-images/magmalogo.jpg" width="160"></td>
    		<td width="88%"><br>
      		Magma for providing free managed firewall services for our site.<br>
      		<br>
    		</td>
  		</tr>
  		<tr>
    		<td width="12%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/membership/scripts/get_image.php?id=716&size=small" width="120"></td>
    		<td width="88%"><br>
      		Novell for donating <a href="http://www.novell.com/linux/">SUSE Linux Enterprise</a> distributions for all of our machines.<br>
    		</td>
  		</tr>
	</table>
	</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>