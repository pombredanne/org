<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "Nova";
	$App->Promotion = TRUE;
	//$App->ExtraHtmlHeaders = '<link rel="stylesheet" type="text/css" href="/equinox/equinox.css">';
	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->setLinkList( array() );
	$Nav->addNavSeparator("SOA Initiative", "org/industry-workgroups/SOA-WS-TEMP/");
	$Nav->addCustomNav("Home", "org/industry-workgroups/SOA-WS-TEMP/", "_self", 1);
	$Nav->addCustomNav("Getting Started", "org/industry-workgroups/SOA-WS-TEMP/quickinstall", "_self", 1);
	$Nav->addCustomNav("Download SOA Pkg", "http://www.eclipse.org/downloads/", "_self", 1);
	$Nav->addCustomNav("Community&Support", "org/participants.php", "_self", 1);
	$Nav->addCustomNav("Consortium", "", "_self", 1);
?>