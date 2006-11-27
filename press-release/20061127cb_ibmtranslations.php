<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "IBM Donates Translations for Eclipse 3.2.1";
	$pageKeywords	= "Eclipse, IBM, Donation, Translations";
	$pageAuthor		= "Nathan Gervais";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
		
<p>IBM is pleased to contribute translations for the Eclipse
Project,
the Eclipse Web Tools Platform (WTP) Project, the Eclipse Test and
Performance Tools Platform (TPTP) Project, the Business Intelligence
and Reporting Tools (BIRT) Project, the Eclipse Modeling Project, the
Eclipse Data Tools Platform (DTP) Project and for several subprojects
of the Eclipse Tools Project for the Callisto releases.</p>

<p>The language packs are distributed as zips, which you can
install by
downloading the zip file and unzipping into your Eclipse directory
before starting Eclipse. These zips
appear on each project's download pages. Please read the details
below concerning the zip files and their contents before using these
translations.</p>

<p>Some projects may choose to add these to their update sites as
well. Each NL feature description, that would appear when
browsing an update site, contains a list of the language translations
provided by that NL feature. NL features are new features that
did not exist for the component prior to translation. NL features
parallel the set of features defined by the component and contain the
NL fragments that in turn contain the translations for the component's
plugins.</p>

<h2>Translation Pack Zip File Types</h2>

<p>For all the projects there are these types of language pack
zip files:</p>

<dl>

  <dt style="font-weight: bold;">NLpack1</dt>

  <dd>Contains the NL fragments and the NL features that contain
those fragments for: German, Spanish, French, Italian, Japanese,
Korean, Portuguese (Brazil), Traditional Chinese and Simplified
Chinese.</dd>

  <dt style="font-weight: bold;">NLpack2</dt>

  <dd>Contains the NL fragments and the NL features that contain
those fragments for: Czech, Hungarian, Polish and Russian.</dd>

  <dt style="font-weight: bold;">NLpack2a</dt>

  <dd>Contains the NL fragments and the NL features that contain
those
fragments for: Danish, Dutch, Finnish, Greek, Norwegian, Portuguese,
Swedish and Turkish.</dd>

  <dt style="font-weight: bold;">NLpackBidi</dt>

  <dd>Contains the NL fragments and the NL features that contain
those
fragments for: Arabic and Hebrew (note that Hebrew translations are
limited
to the Eclipse runtime, GEF runtime and EMF runtime).</dd>

</dl>

<h2>Translated Projects</h2>

<p>These are the projects and subprojects that have been
translated.</p>

<dl>

  <dt style="font-weight: bold;">Eclipse Project</dt>

  <dd>The translation are comprised of the RCP Platform, IDE
Platform, JDT,
PDE, SDK and several of the Equinox OSGi Services.
    <ul>

      <li><a href="http://download.eclipse.org/eclipse/downloads/drops/L-3.2.1_Language_Packs-200609210945/index.php">http://download.eclipse.org/eclipse/downloads/drops/L-3.2.1_Language_Packs-200609210945/index.php</a>
      </li>

    </ul>

  </dd>

  <dt style="font-weight: bold;">Eclipse Web Tools
Platform Project</dt>

  <dd>Translations
are comprised of the Web Standard Tools and J2EE Standard Tools.
    <ul>

      <li><a href="http://download.eclipse.org/webtools/downloads/translations/R1.5/R-1.5.1-200609230508/index.html">http://download.eclipse.org/webtools/downloads/translations/R1.5/R-1.5.1-200609230508/index.html</a>
      </li>

    </ul>

  </dd>

  <dt style="font-weight: bold;">Eclipse Test and
Performance Tools Platform Project</dt>

  <dd>The translations are comprised of TPTP Platform, Monitoring
Tools,
Testing Tools and Tracing and Profiling Tools.
    <ul>

      <li><a href="http://www.eclipse.org/tptp/home/downloads/drops/TPTP-4.2-NL.html">http://www.eclipse.org/tptp/home/downloads/drops/TPTP-4.2-NL.html</a>
      </li>

    </ul>

  </dd>

  <dt style="font-weight: bold;">Eclipse Business
Intelligence and Reporting Tools Project</dt>

  <dd>The BIRT report framework has been translated.
    <ul>

      <li><a href="http://download.eclipse.org/birt/downloads/lang.php?build=R-R1-2_1_1-200609260959">http://download.eclipse.org/birt/downloads/lang.php?build=R-R1-2_1_1-200609260959</a>
      </li>

    </ul>

  </dd>

  <dt style="font-weight: bold;">Eclipse Modeling Project</dt>

  <dd>The translations are comprised of several subprojects:
EMF/XSD, GMF,
UML2 subprojects and several of the EMFT components (JET, Transaction,
OCL, Query, Validation).
    <ul>

      <li>EMF/XSD - <a href="http://www.eclipse.org/emf/downloads/#NLS2.2.x">http://www.eclipse.org/emf/downloads/#NLS2.2.x</a></li>

      <li>GMF - <a href="http://download.eclipse.org/modeling/gmf/downloads/drops/L-1.0.1_Language_Packs-200611031200/index.php">http://download.eclipse.org/modeling/gmf/downloads/drops/L-1.0.1_Language_Packs-200611031200/index.php</a></li>

      <li>UML2 - <a href="http://www.eclipse.org/modeling/mdt/downloads/?project=uml2-uml#NLS2.0.x">http://www.eclipse.org/modeling/mdt/downloads/?project=uml2-uml#NLS2.0.x</a></li>

      <li>EMFT</li>

      <ul>

        <li>JET - <a href="http://www.eclipse.org/emft/downloads/index.php?project=jet&amp;showAll=0&amp;showMax=5#NLS0.7.x">http://www.eclipse.org/emft/downloads/index.php?project=jet&amp;showAll=0&amp;showMax=5#NLS0.7.x</a></li>

        <li>Transaction - <a href="http://www.eclipse.org/emft/downloads/index.php?project=transaction&amp;showAll=0&amp;showMax=5#NLS1.0.x">http://www.eclipse.org/emft/downloads/index.php?project=transaction&amp;showAll=0&amp;showMax=5#NLS1.0.x</a></li>

        <li>OCL - <a href="http://www.eclipse.org/emft/downloads/index.php?project=ocl&amp;showAll=0&amp;showMax=5#NLS1.0.x">http://www.eclipse.org/emft/downloads/index.php?project=ocl&amp;showAll=0&amp;showMax=5#NLS1.0.x</a></li>

        <li>Query - <a href="http://www.eclipse.org/emft/downloads/index.php?project=query&amp;showAll=0&amp;showMax=5#NLS1.0.x">http://www.eclipse.org/emft/downloads/index.php?project=query&amp;showAll=0&amp;showMax=5#NLS1.0.x</a></li>

        <li>Validation - <a href="http://www.eclipse.org/emft/downloads/index.php?project=validation&amp;showAll=0&amp;showMax=5#NLS1.0.x">http://www.eclipse.org/emft/downloads/index.php?project=validation&amp;showAll=0&amp;showMax=5#NLS1.0.x</a></li>

      </ul>

    </ul>

  </dd>

  <dt style="font-weight: bold;">Eclipse Data Tools
Platform Project</dt>

  <dd>The DTP SDK has been translated.
    <ul>

      <li><a href="http://www.eclipse.org/datatools/nl_packs.html">http://www.eclipse.org/datatools/nl_packs.html</a>
      </li>

    </ul>

  </dd>

  <dt style="font-weight: bold;">Eclipse Tools Project</dt>

  <dd>The translations are comprised of two subprojects: the
Visual Editor (VE)
and the Graphical Editor Framework (GEF).
    <ul>

      <li>VE - <a href="http://www.eclipse.org/vep/WebContent/docs/translations/translation.html">http://www.eclipse.org/vep/WebContent/docs/translations/translation.html</a></li>
      <li>GEF - <a href="http://www.eclipse.org/gef/translations/translation.html">http://www.eclipse.org/gef/translations/translation.html</a></li>

    </ul>

  </dd>

</dl>
	</div>
</div>





		

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

