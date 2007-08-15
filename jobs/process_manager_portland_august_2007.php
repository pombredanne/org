<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "Job Opening: Process Manager, Portland, Oregon";
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
The Eclipse community has a variety of processes that help it operate and collaborate 
smoothly ranging from how we manage committers (electing new committers, removing inactive 
committers, etc) to interaction between the projects and the ecosystem (release reviews, 
creation reviews, public comment periods, etc) and more. We automate as many of these 
processes as possible, but at the margins, only good human judgment can resolve ambiguities. 
Additionally, as Eclipse grows to more developers and more projects, the new people joining the 
Eclipse revolution need training on the processes.
<p>
The ideal person for this job is a detail oriented person who loves processes. The ideal 
person is happy with a rule-based environment, but also understands that our rules are in 
place by consensus of, and for the good of, the Eclipse community and thus exceptions do occur. 
Exceptions should be treated as opportunities to further improve the processes. The ideal 
person for this job will be comfortable and competent with written electronic 
(email, IM, wiki, forum) communication. The ideal person will be competent with PHP as we 
use PHP for our process and workflow automation [<a href="http://portal.eclipse.org/">1</a>].
<p>
The duties of this position include operating the Foundation's processes (reviewing documents, 
applying rules, clarifying ambiguities, etc) [<a href="http://www.eclipse.org/projects/dev_process/">2</a>]; 
automating the processes where appropriate (using 
our existing PHP and MySQL infrastructure); and monitoring the Eclipse communities for conformance 
to the rules (reading email lists [<a href="http://www.eclipse.org/mail/">3</a>]
and news forums [<a href="http://www.eclipse.org/newsgroups/">4</a>], 
reading slide decks <a href="http://www.eclipse.org/proposals/">5</a>], etc.).
<p>
This job reports to the Director, Open Source Process [<a href="http://www.eclipse.org/org/foundation/staff.php">6</a>]
and is based in Portland, Oregon [<a href="http://www.eclipse.org/org/foundation/contact.php">7</a>].
<p>
Submit your resume or ask 
questions via email to <a href="mailto:emo@eclipse.org">Anne Jacko</a>. 

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
