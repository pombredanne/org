<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'

	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse RCP Training Series";
	$pageKeywords	= "eclipse, RCP, training";
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
	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Community Bulletin</h2>
	
		<p>
			The Eclipse Foundation is pleased to announce a new series of <a href="http://www.regonline.com/CalendarNET/EventCalendar.aspx?CustomerId=240004&EventId=188879&view=Month">
			RCP training classes</a>, to be held between May 19 and June 13.  In partnership with Eclipse member companies, the RCP
			training series is to provide in-depth education for developers building Eclipse RCP-based applications.  Classes will be
			offered in:
			<ul>
			<table cellspacing="5">
			<tr>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=194653" target="blank">Amsterdam</a>, Netherlands</li></td>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=191609" target="blank">Munich, Germany</li></td>
			</tr>
			<tr>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=194661" target="blank">Antwerp</a>, Belgium</li></td>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=193679" target="blank">Paris</a>, France</li></td>
			</tr>
			<tr>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=192029" target="blank">Bangalore</a>, India</li></td>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=195102" target="blank">Portland</a>, United States</li></td>
			</tr>
			<tr>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=194784" target="blank">Boston</a>, United States</li></td>
				<td><li><a href="http://www.regonline.com/CalendarNET/EventCalendar.aspx?CustomerId=240004&EventId=188879&view=Month" target="blank">San Jose</a>, United States</li></td>
			</tr>
			<tr>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=191593" target="blank">Braunschweig</a>, Germany</li></td>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=193691" target="blank">Sofia Antipolis</a>, France</li></td>				
			</tr>
			<tr>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=193659" target="blank">Chennai</a>, India</li></td>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=191521" target="blank">Stockholm</a>, Sweden</li></td>
			</tr>
			<tr>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=194787" target="blank">Chicago</a>, United States</li></td>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=191589" target="blank">Stuttgart</a>, Germany</li></td>
			</tr>
			<tr>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=191507" target="blank">Copenhagen</a>, Denmark</li></td>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=191600" target="blank">Vienna</a>, Austria</li></td>
			</tr>
			<tr>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=193001" target="blank">Karlsruhe</a>, Germany</li></td>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=194793" target="blank">Washington DC</a>, United States</li></td>
			</tr>
			<tr>
				<td><li><a href="https://www.regonline.com/builder/site/Default.aspx?eventid=194664" target="blank">London</a>, England</li></td>
			</ul>
				<td>&nbsp</td>
			</tr>
			</table>

		</p>

		<p>	
			Each training class will run for four days and will feature instructor-led classroom teaching and hands-on labs and tutorials. 					
			The class will help developers understand the core RCP concepts and Eclipse plug-in architecture, and provide in-depth
			insight into SWT, JFace and other RCP components. 
		</p>
		<p>
			For more information, including locations, dates and registration, visit the <a href="http://www.regonline.com/CalendarNET/EventCalendar.aspx?CustomerId=240004&EventId=188879&view=Month">
			RCP training class site</a>.  Students that register before <b>March 31, 2008</b> will receive a
			10% early bird discount on the registration price.
		</p>
		
		<p>
			The participating Eclipse member companies include <a href="http://www.ancitconsulting.com" target="blank">Ancit Consulting</a>,
			<a href="http://www.anyware-tech.com" target="blank">Anyware Technologies</a>, <a href="http://www.avantsoft.com" target="blank">AvantSoft</a>,
			<a href="http://www.bredex.de/" target="blank">BREDEX</a>, <a href="http://www.industrial-tsi.com/" target="blank">Industrial TSI</a>,
			<a href="http://www.innoopract.com" target="blank">Innoopract</a>, <a href="http://www.rcp-company.com" target="blank">The RCP Company</a>
			and <a href="http://www.weiglewilczek.com" target="blank">Weigle Wilczek</a>.
		</p>
		<br><br>
	
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
