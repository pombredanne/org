<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Nova";
	$App->Promotion = TRUE;
	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	$Nav->addNavSeparator("Usage Data", "index.php");
	$Nav->addCustomNav("User Guide", "userguide.php", "_self", 1);
	$Nav->addCustomNav("Terms of Use", "terms.php", "_self", 1);
	$Nav->addCustomNav("FAQ", "faq.php", "_self", 1);
	$Nav->addCustomNav("Contact Us", "mailto:eclipse_udc@eclipse.org", "_self", 1);
	
	$Nav->addNavSeparator("Reports", "index.php");
	$Nav->addCustomNav("Usage Trends", "usage.php", "_self", 1);
	$Nav->addCustomNav("Views, Editors, ...", "results.php", "_self", 1);	
	
	$Nav->addNavSeparator("Reports (cvs)", null);
	$Nav->addCustomNav("Bundles", "reports/csv.php?kind=bundle", "_self", 1);
	$Nav->addCustomNav("Views", "reports/csv.php?kind=view", "_self", 1);
	$Nav->addCustomNav("Editors", "reports/csv.php?kind=editor", "_self", 1);
	$Nav->addCustomNav("Perspectives", "reports/csv.php?kind=perspective", "_self", 1);
	$Nav->addCustomNav("Commands", "reports/csv.php?kind=command", "_self", 1);
	$Nav->addCustomNav("Geography", "reports/data/geo.csv", "_self", 1);

?>
