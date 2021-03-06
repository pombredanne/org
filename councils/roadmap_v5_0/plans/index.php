<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Platform Release Plans for Helios";
	$pageKeywords	= "about, documents, history";
	$pageAuthor		= "Donald Smith";
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

    <div id="maincontent">
	<div id="midcolumn">
        <h1><a name="top"></a>$pageTitle</h1>
<p>The following projects from the Helios release have created Project Plans that you can review at the links
below.</p>

<ul>
	<li><a href="birt_plan.html">birt</a></li>
	<li><a href="datatools_plan.html">datatools</a></li>
	<li><a href="dsdp.mtj_plan.html">dsdp.mtj</a></li>
	<li><a href="dsdp.tm_plan.html">dsdp.tm</a></li>
	<li><a href="dsdp.tml_plan.html">dsdp.tml</a></li>
	<li><a href="eclipse_plan.html">eclipse</a></li>
	<li><a href="eclipse.jdt_plan.html">eclipse.jdt</a></li>
	<li><a href="eclipse.pde_plan.html">eclipse.pde</a></li>
	<li><a href="eclipse.platform_plan.html">eclipse.platform</a></li>
	<li><a href="modeling.amalgam_plan.html">modeling.amalgam</a></li>
	<li><a href="modeling.emf_plan.html">modeling.emf</a></li>
	<li><a href="modeling.emf.cdo_plan.html">modeling.emf.cdo</a></li>
	<li><a href="modeling.emf.compare_plan.html">modeling.emf.compare</a></li>
	<li><a href="modeling.emf.emf_plan.html">modeling.emf.emf</a></li>
	<li><a href="modeling.emf.net4j_plan.html">modeling.emf.net4j</a></li>
	<li><a href="modeling.emf.teneo_plan.html">modeling.emf.teneo</a></li>
	<li><a href="modeling.emft.eef_plan.html">modeling.emft.eef</a></li>
	<li><a href="modeling.emft.mint_plan.html">modeling.emft.mint</a></li>
	<li><a href="modeling.emft.mtf_plan.html">modeling.emft.mtf</a></li>
	<li><a href="modeling.emft.mwe_plan.html">modeling.emft.mwe</a></li>
	<li><a href="modeling.gmf_plan.html">modeling.gmf</a></li>
	<li><a href="modeling.gmt.modisco_plan.html">modeling.gmt.modisco</a></li>
	<li><a href="modeling.m2m.atl_plan.html">modeling.m2m.atl</a></li>
	<li><a href="modeling.m2m.qvt-oml_plan.html">modeling.m2m.qvt-oml</a></li>
	<li><a href="modeling.m2t_plan.html">modeling.m2t</a></li>
	<li><a href="modeling.m2t.acceleo_plan.html">modeling.m2t.acceleo</a></li>
	<li><a href="modeling.m2t.jet_plan.html">modeling.m2t.jet</a></li>
	<li><a href="modeling.m2t.xpand_plan.html">modeling.m2t.xpand</a></li>
	<li><a href="modeling.mdt.ocl_plan.html">modeling.mdt.ocl</a></li>
	<li><a href="modeling.mdt.uml2_plan.html">modeling.mdt.uml2</a></li>
	<li><a href="modeling.mdt.xsd_plan.html">modeling.mdt.xsd</a></li>
	<li><a href="modeling.tmf.xtext_plan.html">modeling.tmf.xtext</a></li>
	<li><a href="rt.ecf_plan.html">rt.ecf</a></li>
	<li><a href="rt.eclipselink_plan.html">rt.eclipselink</a></li>
	<li><a href="rt.equinox_plan.html">rt.equinox</a></li>
	<li><a href="rt.jetty_plan.html">rt.jetty</a></li>
	<li><a href="rt.rap_plan.html">rt.rap</a></li>
	<li><a href="soa.swordfish_plan.html">soa.swordfish</a></li>
	<li><a href="stp_plan.html">stp</a></li>
	<li><a href="stp.bpmnmodeler_plan.html">stp.bpmnmodeler</a></li>
	<li><a href="stp.sca_plan.html">stp.sca</a></li>
	<li><a href="technology.actf_plan.html">technology.actf</a></li>
	<li><a href="technology.dltk_plan.html">technology.dltk</a></li>
	<li><a href="technology.egit_plan.html">technology.egit</a></li>
	<li><a href="technology.jgit_plan.html">technology.jgit</a></li>
	<li><a href="technology.jwt_plan.html">technology.jwt</a></li>
	<li><a href="technology.linux-distros_plan.html">technology.linux-distros</a></li>
	<li><a href="technology.mat_plan.html">technology.mat</a></li>
	<li><a href="technology.packaging_plan.html">technology.packaging</a></li>
	<li><a href="technology.subversive_plan.html">technology.subversive</a></li>
	<li><a href="tools.buckminster_plan.html">tools.buckminster</a></li>
	<li><a href="tools.cdt_plan.html">tools.cdt</a></li>
	<li><a href="tools.gef_plan.html">tools.gef</a></li>
	<li><a href="tools.mylyn_plan.html">tools.mylyn</a></li>
	<li><a href="tools.pdt_plan.html">tools.pdt</a></li>
	<li><a href="tools.ptp_plan.html">tools.ptp</a></li>
	<li><a href="tptp_plan.html">tptp</a></li>
	<li><a href="webtools_plan.html">webtools</a></li>
	<li><a href="webtools.common_plan.html">webtools.common</a></li>
	<li><a href="webtools.dali_plan.html">webtools.dali</a></li>
	<li><a href="webtools.ejbtools_plan.html">webtools.ejbtools</a></li>
	<li><a href="webtools.jeetools_plan.html">webtools.jeetools</a></li>
	<li><a href="webtools.jsdt_plan.html">webtools.jsdt</a></li>
	<li><a href="webtools.jsf_plan.html">webtools.jsf</a></li>
	<li><a href="webtools.servertools_plan.html">webtools.servertools</a></li>
	<li><a href="webtools.sourceediting_plan.html">webtools.sourceediting</a></li>
	<li><a href="webtools.webservices_plan.html">webtools.webservices</a></li>
</ul>

     </div>
      <div id="rightcolumn">
      
 
		<div class="sideitem">
			<h6>Related Links</h6>
			<ul>
				<li><a href="./press-release/">Press Releases</a></li>
				<li><a href="../membership/">Membership</a></li>
				<li><a href="../membership/become_a_member/">Become a member</a></li>
			</ul>
		</div>
     	<div class="sideitem">
			<h6>Thank you!</h6>
			<p>Our thanks to <a href="/corporate_sponsors/">our many corporate sponsors</a> for generous donations to our infrastructure.</p>
		</div>		
	  </div>
  </div>

EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


