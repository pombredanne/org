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
	$Nav->addNavSeparator("SOA Initiative", "");
	$Nav->addCustomNav("Home", "./", "_self", 1);
	$Nav->addCustomNav("Download Package", "./download.php", "_self", 1);
	$Nav->addCustomNav("SOA Consortium", "./participants.php", "_self", 1);
	$Nav->addCustomNav("Getting Started", "./gettingstarted.php", "_self", 1);
	$Nav->addCustomNav("<table><tr><td>Community</td></tr><tr><td>and support</td></tr></table>", "./community.php", "_self", 1);
?>