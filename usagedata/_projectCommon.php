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
	$Nav->addCustomNav("Reports", "results.php", "_self", 1);
	$Nav->addCustomNav("Contact Us", "mailto:eclipse_udc@eclipse.org", "_self", 1);

?>
