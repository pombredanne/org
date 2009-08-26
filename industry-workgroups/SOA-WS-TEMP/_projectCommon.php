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
	$Nav->addNavSeparator("SOA Initiative", "/industry-workgroups/SOA-WS-TEMP/");
	$Nav->addCustomNav("Getting Started", "/industry-workgroups/SOA-WS-TEMP/quickinstall", "_self", 1);
	$Nav->addCustomNav("Download SOA Initiative Package", "http://www.eclipse.org/downloads/", "_self", 1);
	$Nav->addCustomNav("Webinars", "http://live.eclipse.org/", "_self", 1);
	$Nav->addCustomNav("Support", "", "_self", 1);
?>