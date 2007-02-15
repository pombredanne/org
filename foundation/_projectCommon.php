<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Phoenix";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	$Nav->addNavSeparator("About Us", 	"/org/");
	$Nav->addCustomNav("Foundation", "/org/foundation/", "_self", 1);	
	$Nav->addCustomNav("Governance", "/org/documents/", "_self", 1);
	$Nav->addCustomNav("Legal Resources", "/legal/", "_self", 1);
	$Nav->addCustomNav("Contact Us", "/contact.php/", "_self", 1);
?>
