<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Broadens Participation Options for Community Members";
	$pageKeywords	= "eclipse, members, membership, corporate, sponsor";
	$pageAuthor		= "Lynn Gayowski";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank)
	# $Nav->addCustomNav("My Link", "mypage.php", "_self");
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank");

	# End: page-specific settings
	#
	
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
	<style>
		.paddedlist li {	padding-bottom:7px;	}
	</style>

<div id="maincontent">
	<div id="fullcolumn">
	<div id="midcolumn">
		<h1>$pageTitle</h1>
			

		<p>
			<b>Ottawa, Canada - February 23, 2010</b> - To broaden participation in the Eclipse community,
			the Eclipse Foundation is introducing two new initiatives to encourage both large corporations
			and small technology companies to participate in the Eclipse community. Eclipse is a global
			community that benefits organizations of all types: small/large, ISVs, consultants, enterprise
			IT, tech companies, services providers, universities, non-profit, etc. However, the support
			of the Eclipse Foundation is mainly funded through the membership dues of tech companies, such
			as ISVs, hardware vendors and services providers.  These new initiative will broaden the
			participation options for both large corporations and small technology companies.
		</p>
		
		<p>
			The <a href="http://www.eclipse.org/corporate_sponsors/">Eclipse Corporate Sponsor Program</a>
			encourages large corporate users of Eclipse technology
			to contribute back to the community. Many large companies use Eclipse technology internally
			but for a variety of reasons can not easily contribute back to the community in terms of
			committers or membership. The Corporate Donor program allows these companies to financially
			sponsor the Eclipse Foundation and thus support the services the Foundation provides to the
			overall community. The Corporate Sponsor Program will recognize three tiers of sponsors:
			1) Platinum Sponsor for sponsorship of more than $100K, 2) Gold Sponsor for sponsorship of
			more than $25K and 3) Silver Sponsor for sponsorship of more than $5K. Companies that have
			already joined the program include Cisco, Amazon Web Services, IBM and Novell.
		</p>
 	
     	<p>
     		The Eclipse Foundation has also extended the membership criteria to make it easier for small
     		technology companies to join as members of the Foundation. The Eclipse Board has approved
     		a $1,500 Solutions Membership Dues for organizations with annual corporate revenues less than
     		$1 million and not more than ten employees or contractors on staff. Previously, the lowest
     		membership option available was $5,000. Companies that have already taken advantage of this
     		change and joined the Eclipse Foundation include Modular Mind and ANCiT Consulting.
		</p>

		<p>
			<b>About the Eclipse Foundation</b><br>
			Eclipse is an open source community, whose projects are focused on building an open
			development platform comprised of extensible frameworks, tools and runtimes for building,
			deploying and managing software across the lifecycle. A large, vibrant ecosystem of major
			technology vendors, innovative start-ups, universities and research institutions and
			individuals extend, complement and support the Eclipse Platform.
		</p>

		<p>
			The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the
			Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at
			<a href="http://www.eclipse.org">www.eclipse.org</a>. 
		</p>	
		
	</div>
</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
<?php
/*
 * Created on 20-Jan-2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
