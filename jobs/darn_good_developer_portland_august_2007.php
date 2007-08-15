<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Job Opening: Darn Good Developer, Portland, Oregon";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
The Eclipse Foundation provides support for the Eclipse open source 
projects and the larger Eclipse eco-system of commercial adopters. 
As part of that support, we have a variety of internal IT 
applications (for example, our <a href="http://portal.eclipse.org/">member's portal</a>) 
and common project infrastructure tools (for example, 
the <a href="http://wiki.eclipse.org/Ganymede_Simultaneous_Release#Ganymede_Builds">Europa/Ganymede build system</a> 
and the <a href="http://wiki.eclipse.org/Summer_Vacation_2007_IPzilla_Improvements">Intellectual 
Property Contribution Questionnaire plug-in</a>). 
These tools 
are mostly written in PHP (IT apps) and Java (Eclipse plug-ins) 
with a bit of Perl now and then, all connecting to MySQL and 
text file databases.
<p>
The ideal person for this job is a darn good developer 
who enjoys working on all these technologies to help
 the Eclipse open source projects be successful. Some 
 of the work will be open source and some will not be.  
 The ideal person works independently in an incremental/agile 
 delivery environment: <a href="http://agilemanifesto.org/">short development cycles with 
 frequent feedback from the community</a>.  
 Given the realities 
 of community feedback by electronic communication, a 
 moderately thick skin is a good idea (in other words, 
 people tend to provide less polite feedback via email 
 than in person).
<p>
This job reports to the <a href="http://www.eclipse.org/org/foundation/staff.php">Director, Open Source Process</a>
and is based in <a href="http://www.eclipse.org/org/foundation/contact.php">Portland, Oregon</a>.
<p>
Submit your resume or ask 
questions via email to <a href="mailto:emo@eclipse.org">Anne Jacko</a>, Development Process Operations Support. 

<h3>About the Eclipse Foundation</h3>
Eclipse is an open source community, whose projects are focused on building an open 
development platform comprised of extensible frameworks, tools and runtimes for building, 
deploying and managing software across the lifecycle. A large, vibrant ecosystem of major 
technology vendors, innovative start-ups, universities and research institutions and 
individuals extend, complement and support the Eclipse Platform.
<p>
The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the 
Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at <a href="http://www.eclipse.org/">www.eclipse.org</a>.
<p>
<em>posted: August 15, 2007</em>

	</div>	

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
