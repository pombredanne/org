<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'


	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Platform Release Plans for Indigo";
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
	<li><a href="eclipse_plan.html">eclipse</a></li>
	<li><a href="eclipse.jdt_plan.html">eclipse.jdt</a></li>
	<li><a href="eclipse.pde_plan.html">eclipse.pde</a></li>
	<li><a href="eclipse.platform_plan.html">eclipse.platform</a></li>
	<li><a href="modeling.amalgam_plan.html">modeling.amalgam</a></li>
	<li><a href="modeling.amp_plan.html">modeling.amp</a></li>
	<li><a href="modeling.emf.cdo_plan.html">modeling.emf.cdo</a></li>
	<li><a href="modeling.emf.compare_plan.html">modeling.emf.compare</a></li>
	<li><a href="modeling.emf.emf_plan.html">modeling.emf.emf</a></li>
	<li><a href="modeling.emf.mwe_plan.html">modeling.emf.mwe</a></li>
	<li><a href="modeling.emf.query_plan.html">modeling.emf.query</a></li>
	<li><a href="modeling.emf.transaction_plan.html">modeling.emf.transaction</a></li>
	<li><a href="modeling.emf.validation_plan.html">modeling.emf.validation</a></li>
	<li><a href="modeling.emft.eef_plan.html">modeling.emft.eef</a></li>
	<li><a href="modeling.emft.egf_plan.html">modeling.emft.egf</a></li>
	<li><a href="modeling.emft.emf-facet_plan.html">modeling.emft.emf-facet</a></li>
	<li><a href="modeling.gmp.gmf-notation_plan.html">modeling.gmp.gmf-notation</a></li>
	<li><a href="modeling.gmp.gmf-runtime_plan.html">modeling.gmp.gmf-runtime</a></li>
	<li><a href="modeling.gmp.gmf-tooling_plan.html">modeling.gmp.gmf-tooling</a></li>
	<li><a href="modeling.gmp.graphiti_plan.html">modeling.gmp.graphiti</a></li>
	<li><a href="modeling.m2m.atl_plan.html">modeling.m2m.atl</a></li>
	<li><a href="modeling.m2m.qvt-oml_plan.html">modeling.m2m.qvt-oml</a></li>
	<li><a href="modeling.m2t.acceleo_plan.html">modeling.m2t.acceleo</a></li>
	<li><a href="modeling.m2t.xpand_plan.html">modeling.m2t.xpand</a></li>
	<li><a href="modeling.mdt.modisco_plan.html">modeling.mdt.modisco</a></li>
	<li><a href="modeling.mdt.ocl_plan.html">modeling.mdt.ocl</a></li>
	<li><a href="modeling.mdt.papyrus_plan.html">modeling.mdt.papyrus</a></li>
	<li><a href="modeling.mdt.uml2_plan.html">modeling.mdt.uml2</a></li>
	<li><a href="modeling.mdt.xsd_plan.html">modeling.mdt.xsd</a></li>
	<li><a href="modeling.tmf.xtext_plan.html">modeling.tmf.xtext</a></li>
	<li><a href="mylyn_plan.html">mylyn</a></li>
	<li><a href="mylyn.commons_plan.html">mylyn.commons</a></li>
	<li><a href="mylyn.context_plan.html">mylyn.context</a></li>
	<li><a href="mylyn.docs_plan.html">mylyn.docs</a></li>
	<li><a href="mylyn.tasks_plan.html">mylyn.tasks</a></li>
	<li><a href="rt.ecf_plan.html">rt.ecf</a></li>
	<li><a href="rt.eclipselink_plan.html">rt.eclipselink</a></li>
	<li><a href="rt.equinox_plan.html">rt.equinox</a></li>
	<li><a href="rt.jetty_plan.html">rt.jetty</a></li>
	<li><a href="rt.rap_plan.html">rt.rap</a></li>
	<li><a href="rt.riena_plan.html">rt.riena</a></li>
	<li><a href="soa.jwt_plan.html">soa.jwt</a></li>
	<li><a href="soa.sca_plan.html">soa.sca</a></li>
	<li><a href="technology.actf_plan.html">technology.actf</a></li>
	<li><a href="technology.dltk_plan.html">technology.dltk</a></li>
	<li><a href="technology.egit_plan.html">technology.egit</a></li>
	<li><a href="technology.gyrex_plan.html">technology.gyrex</a></li>
	<li><a href="technology.jgit_plan.html">technology.jgit</a></li>
	<li><a href="technology.jubula_plan.html">technology.jubula</a></li>
	<li><a href="technology.linux-distros_plan.html">technology.linux-distros</a></li>
	<li><a href="technology.m2e_plan.html">technology.m2e</a></li>
	<li><a href="technology.packaging_plan.html">technology.packaging</a></li>
	<li><a href="technology.packaging.mpc_plan.html">technology.packaging.mpc</a></li>
	<li><a href="technology.scout_plan.html">technology.scout</a></li>
	<li><a href="technology.subversive_plan.html">technology.subversive</a></li>
	<li><a href="tools.cdt_plan.html">tools.cdt</a></li>
	<li><a href="tools.cdt.tcf_plan.html">tools.cdt.tcf</a></li>
	<li><a href="tools.gef_plan.html">tools.gef</a></li>
	<li><a href="tools.mat_plan.html">tools.mat</a></li>
	<li><a href="tools.objectteams_plan.html">tools.objectteams</a></li>
	<li><a href="tools.pdt_plan.html">tools.pdt</a></li>
	<li><a href="tools.ptp_plan.html">tools.ptp</a></li>
	<li><a href="tools.sequoyah_plan.html">tools.sequoyah</a></li>
	<li><a href="tools.tm_plan.html">tools.tm</a></li>
	<li><a href="tools.windowbuilder_plan.html">tools.windowbuilder</a></li>
	<li><a href="webtools_plan.html">webtools</a></li>
	<li><a href="webtools.common_plan.html">webtools.common</a></li>
	<li><a href="webtools.dali_plan.html">webtools.dali</a></li>
	<li><a href="webtools.ejbtools_plan.html">webtools.ejbtools</a></li>
	<li><a href="webtools.jeetools_plan.html">webtools.jeetools</a></li>
	<li><a href="webtools.jsdt_plan.html">webtools.jsdt</a></li>
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


