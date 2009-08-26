<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_list.php
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
	$pageTitle 		= "Pulsar QuickInstall";
	$pageKeywords	= "pulsar quickinstall";
	$pageAuthor		= "Nathan Gervais";
		
	# Paste your HTML content between the EOHTML markers!	
	ob_start();
	?>
	<div id="midcolumn">
		<h1>Pulsar - QuickInstall </h1>
		
<h2 id="QuickInstall">QuickInstall view</h2>
<div><p>The QuickInstall view enables you to easily manage provider Software Development Kits (SDKs) from within Eclipse Pulsar. In this view, you can install, remove, and view details or more information for available SDKs and providers. The view provides a list of available SDK installers, displays the status of the SDK (Installed or Uninstalled), and the version number.</p>
<p><img id="T789134__image_A45F04BF53FA480F8EDE93A4B0AA5C95" src="QuickInstall_view_789321_11.jpg"></p>
<p>The QuickInstall view is open by default in Eclipse Pulsar. If it has been closed or is not already open, open it by selecting <b>Window &gt; Show View &gt; Other</b>, and then expand <b>Pulsar</b> and select <b>Mobile SDKs</b>.</p>
<p>To refresh the list of SDKs, click the <img id="T789134__image_AF9D6B030C894B96B499B4BD007D7F69" src="QuickInstall_refresh_button_789305_11.jpg" width="22" height="21"/> <b>Refresh</b> button.</p>
</div>

<p><b>Related topics</b></p>
<UL>
<LI><a href="#SDK_details">Displaying SDK details</a></LI>
<LI><a href="#More_info">Getting more information about an SDK</a></LI>
<LI><a href="#Install_SDK">Installing an SDK</a></LI>
<LI><a href="#Uninstall_SDK">Uninstalling an SDK</a></LI>
</UL>


<title>Displaying SDK details</title>
<h2 id="SDK_details">Displaying SDK details</h2>
<div class="section" id="T789137__context_9FF50E4A574347589807E44DA3A9FE01"><a name="T789137__context_9FF50E4A574347589807E44DA3A9FE01"><!-- --></a>Each SDK includes relevant information about the installation package, such as what is included in the SDK, dependencies,  and registration information for access, if applicable.<p><a name="T789137__image_B471D427B0FB4642A3902827F854BF3F"><!-- --></a><img id="T789137__image_B471D427B0FB4642A3902827F854BF3F" src="QuickInstall_details_789281_11.jpg" width=717></p>
<p>To display details for an SDK, select the SDK in the left pane. The description for that SDK appears on the right.</p>
<p>For installed SDKs, you can also view the device management preferences by selecting the SDK and clicking the <a name="T789137__image_9DEB050891B743FDA4D501C20DBE0EB2"><!-- --></a><img id="T789137__image_9DEB050891B743FDA4D501C20DBE0EB2" src="QuickInstall_details_button_789285_11.jpg" width="20" height="20"/> <b>Open SDK Details</b> button. This opens the Device Management category in the Preferences dialog.</p>
<p><a name="T789137__image_D45F2EA821B44F54A31330406ED63403"><!-- --></a><img id="T789137__image_D45F2EA821B44F54A31330406ED63403" src="QuickInstall_SDK_details_789313_11.jpg"></p>
</div>

<p><b>Related topics</b></p>
<UL>
<LI><a href="#QuickInstall">QuickInstall view</a></LI>
<LI><a href="#More_info">Getting more information about an SDK</a></LI>
<LI><a href="#Install_SDK">Installing an SDK</a></LI>
<LI><a href="#Uninstall_SDK">Uninstalling an SDK</a></LI>
</UL>

<title>Getting more information about an SDK</title>
<h2 id="More_info">Getting more information about an SDK</h2>
<div><div class="section" id="T789138__context_86922874B7C84CF5818C5A24D1AD2BE3"><a name="T789138__context_86922874B7C84CF5818C5A24D1AD2BE3"><!-- --></a>When you select an SDK to view its description, you can view more detailed information by clicking the links provided below the description.</div>
<a name="T789138__steps_F31C07F833564CEFAAE61E44E5E8F285"><!-- --></a><ol id="T789138__steps_F31C07F833564CEFAAE61E44E5E8F285"><li class="stepexpand" id="T789138__step_FB6626D61A9944098BEEF03167AD13C7"><a name="T789138__step_FB6626D61A9944098BEEF03167AD13C7"><!-- --></a><span>To view copyright information, the license agreement, and general information for an SDK, click the <b>More</b> link.</span>
</li>
<li class="stepexpand" id="T789138__step_A2C37BEEBE8048EAB6D3D6FCB8342720"><a name="T789138__step_A2C37BEEBE8048EAB6D3D6FCB8342720"><!-- --></a><span>To browse the web site for the provider of the SDK, click the <b>Web Site</b> link. The web site appears in the internal web browser.</span> <a name="T789138__image_B84DC316E8DE4B44914153644053BA54"><!-- --></a><img id="T789138__image_B84DC316E8DE4B44914153644053BA54" src="QuickInstall_website_789325_11.jpg" width="717" height="689"/></li>
</ol>
</div>

<p><b>Related topics</b></p>
<UL>
<LI><a href="#QuickInstall">QuickInstall view</a></LI>
<LI><a href="#SDK_details">Displaying SDK details</a></LI>
<LI><a href="#Install_SDK">Installing an SDK</a></LI>
<LI><a href="#Uninstall_SDK">Uninstalling an SDK</a></LI>
</UL>

<title>Installing an SDK</title>
<h2 id="Install_SDK">Installing an SDK</h2>
<div><div class="section" id="T789135__context_637EFD67F0714470916CBB10D87FC71C"><a name="T789135__context_637EFD67F0714470916CBB10D87FC71C"><!-- --></a>Each SDK may have different requirements for installation, and some may require a user name and password. Visit the associated provider web site for more information on registering and accessing their SDKs.</div>
<a name="T789135__steps_3D486A211BE643A7AF3FDAAE127D2390"><!-- --></a><ol id="T789135__steps_3D486A211BE643A7AF3FDAAE127D2390"><li class="stepexpand" id="T789135__step_4E7350E2DDC448F4982936AB5C41F463"><a name="T789135__step_4E7350E2DDC448F4982936AB5C41F463"><!-- --></a><span>To install one of the available SDKs, select an SDK and click the <a name="T789135__image_25A488E85A40440CB0EB9AC852586223"><!-- --></a><img id="T789135__image_25A488E85A40440CB0EB9AC852586223" src="QuickInstall_install_button_789293_11.jpg" width="19" height="18"/>
	<b>Install this SDK</b> button.
After determining the requirements, the Install dialog appears.</span> <a name="T789135__image_5052FE6BEF194D56AD041C4A0B4DB9A6"><!-- --></a><img id="T789135__image_5052FE6BEF194D56AD041C4A0B4DB9A6" src="QuickInstall_install_789289_11.jpg" width="447" height="448"/></li>
<li class="stepexpand" id="T789135__step_75A7E57B4B644562980B1BFDD3628BAC"><a name="T789135__step_75A7E57B4B644562980B1BFDD3628BAC"><!-- --></a><span>Ensure that the appropriate items or features are selected, and click <b>Next</b> to continue.</span></li>
<li class="stepexpand" id="T789135__step_2A8735AE5CF94EE6A710386D05C992C5"><a name="T789135__step_2A8735AE5CF94EE6A710386D05C992C5"><!-- --></a><span>Review the install details and click <b>Finish</b>. Note that the installation time will vary, depending on the size and complexity of the SDK. Follow the prompts that appear for the particular provider installation.</span></li>
<li class="stepexpand" id="T789135__step_5FDF368256704C26819CB54B5B42F0E5"><a name="T789135__step_5FDF368256704C26819CB54B5B42F0E5"><!-- --></a><span>Once the installation has completed, you may be prompted to restart Eclipse. Click <b>Yes</b> to restart the environment and complete the installation.</span></li>
</ol>
</div>

<p><b>Related topics</b></p>
<UL>
<LI><a href="#QuickInstall">QuickInstall view</a></LI>
<LI><a href="#SDK_details">Displaying SDK details</a></LI>
<LI><a href="#More_info">Getting more information about an SDK</a></LI>
<LI><a href="#Uninstall_SDK">Uninstalling an SDK</a></LI>
</UL>

<title>Uninstalling an SDK</title>
<h2 id="Uninstall_SDK">Uninstalling an SDK</h2>
<div><a name="T789136__steps_EF98E9E4FC304D8B8F654FF5A47B70FC"><!-- --></a><ol id="T789136__steps_EF98E9E4FC304D8B8F654FF5A47B70FC"><li class="stepexpand" id="T789136__step_681E96C9C0F941229C31C32B1B342200"><a name="T789136__step_681E96C9C0F941229C31C32B1B342200"><!-- --></a><span>To remove an installed SDK, select an SDK and click the <a name="T789136__image_D6D04FB0C6714087A797ABC05663A64A"><!-- --></a><img id="T789136__image_D6D04FB0C6714087A797ABC05663A64A" src="QuickInstall_remove_button_789309_11.jpg" width="19" height="18"/>
					<b>Uninstall this SDK</b> button.
After determining the requirements and dependencies, the Uninstall dialog appears.</span> <a name="T789136__image_0ACA50F2552A4E3FBF1EEB2BB3E1E81F"><!-- --></a><img id="T789136__image_0ACA50F2552A4E3FBF1EEB2BB3E1E81F" src="QuickInstall_uninstall_789317_11.jpg" width="447" height="448"/></li>
<li class="stepexpand" id="T789136__step_115FA0D8F024494EB24E391B4C3C4CD6"><a name="T789136__step_115FA0D8F024494EB24E391B4C3C4CD6"><!-- --></a><span>Review the information in the dialog and click <b>Finish</b> to continue.</span></li>
<li class="stepexpand" id="T789136__step_AE028C1E11FA4E4184717349A19349FB"><a name="T789136__step_AE028C1E11FA4E4184717349A19349FB"><!-- --></a><span>Once the uninstallation has completed, you may be prompted to restart Eclipse. Click <b>Yes</b> to restart the environment and complete the removal of the SDK.</span></li>
</ol>
</div>

<p><b>Related topics</b></p>
<UL>
<LI><a href="#QuickInstall">QuickInstall view</a></LI>
<LI><a href="#SDK_details">Displaying SDK details</a></LI>
<LI><a href="#More_info">Getting more information about an SDK</a></LI>
<LI><a href="#Install_SDK">Installing an SDK</a></LI>
</UL>


		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="/dsdp/mtj/development/tutorial/gettingstarted.php">Getting Started with MTJ</a></li>
			</ul>
		</div>
	</div>

	
	<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage('Nova', $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>