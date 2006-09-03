<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_3col.php
	#
	# Author: 		Denis Roy
	# Date:			2005-11-07
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Foundation Councils";
	$pageKeywords	= "foundation, legal, councils, emo";
	$pageAuthor		= "Mike Milinkovich, Nov. 22, 2005";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 1);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 1);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<div id="midcolumn">
		<h1>$pageTitle</h1>
		<h2>Eclipse Council Structure</h2>
		<p>As defined by the <a href="../documents/Eclipse%20Development%20Process%202003_11_09%20FINAL.pdf">Eclipse Development Process</a>, 
		the open source projects in Eclipse are guided and co-ordinated by three Councils:</p>
		<ul class="midlist">
        <li><strong><a href="#requirements">Requirements</a></strong>: The Requirements 
          Council is responsible for capturing and organizing requirements for 
          all of the projects in the Eclipse community. The Requirements Council 
          reviews and categorizes all of these incoming requirements - from all 
          residents of the Ecosystem - and proposes a coherent set of Themes and 
          Priorities that will drive the Roadmap.
          <br/><br/>
        </li>
        <li><strong><a href="#planning">Planning</a></strong>: The Planning Council 
          is responsible for establishing a coordinated Platform Release Plan 
          that supports the Roadmap, and balances the many competing requirements. 
          The Platform Release Plan describes the themes and priorities that focus 
          these Releases, and orchestrates the dependencies among Project Plans.
          <br/><br/>
        </li>
        <li><strong><a href="#architecture">Architecture</a></strong>: The Architecture 
          Council is responsible for development, articulation and maintenance 
          of the Eclipse Platform Architecture. The Architecture Council produces 
          an Architecture Plan that describes the architecture changes required 
          to achieve these themes and priorities, or required to maintain long-term 
          architectural viability. </li>
      </ul>
      <br/>
		<div class="homeitem3col">
			<h3><a name="councildocuments"></a>Eclipse council documents</h3>
			<blockquote>
			<p> As described in the previous section, the <a href="../documents/Eclipse%20Development%20Process%202003_11_09%20FINAL.pdf">Eclipse 
        		Development Process</a> calls for the Eclipse Councils to create the Eclipse 
        		Roadmap documentation for approval by the Board of Directors. The <a href="/org/councils/roadmap.html">
      			Eclipse Roadmap V2.0</a> has now been released.  If you are looking for Board or Members meeting minutes, 
      			<a href="minutes.php"> click here.</a>
        	</p> 
        	</blockquote>
        </div>
		<div class="homeitem3col">
		<h3><a name="requirements"></a>Requirements council</h3>
		<br/>
			<table width="90%" border="0" cellspacing="0" cellpadding="1" align="center">
  			 <tr>
    			<td>Dino Brusco</td>
    			<td>Motorola</td>
    			<td>Strategic Developer</td>
  			</tr>
  			<tr> 
    			<td>Brian Carroll</td>
    			<td>Serena Software, Inc.</td>
    			<td>Strategic Developer</td>
  			</tr>	
  			<tr> 
    			<td>Paul Clenahan</td>
    			<td>Actuate</td>
    			<td>Strategic Developer</td>
  			</tr>
  			<tr> 
    			<td>Bob Fraser</td>
    			<td>BEA</td>
    			<td>Strategic Developer</td>
  			</tr>
  			<tr>
    			<td>Anurag Gupta </td>
    			<td>Intel</td>
    			<td>Strategic Developer</td>
  			</tr>
  			<tr>
    			<td>Stephen Henderson</td>
    			<td>Borland</td>
    			<td>Strategic Developer</td>
  			</tr>
  			<tr> 
    			<td>John Kellerman</td>
    			<td>IBM Corporation</td>
    			<td>Strategic Developer</td>
  			</tr>
  			<tr>
    			<td>Martin Klaus</td>
    			<td>Wind River</td>
    			<td>Strategic Developer</td>
  			</tr>
  			<tr>
    			<td>Georg Lenz</td>
    			<td>SAP AG</td>
    			<td>Strategic Consumer</td>
  			</tr>
  			<tr> 
    			<td>Philip Ma</td>
    			<td>Hewlett-Packard Company</td>
    			<td>Strategic Consumer</td>
  			</tr>
  			<tr> 
    			<td>H&#229;kan Mitts</td>
    			<td>Nokia</td>
    			<td>Strategic Developer</td>
  			</tr>
  			<tr> 
    			<td>Mike Norman</td>
    			<td>Scapa Technology</td>
    			<td>Strategic Developer</td>
  			</tr>
  			<tr> 
    			<td>Karl Reti </td>
    			<td>Sybase</td>
    			<td>Strategic Developer</td>
  			</tr>
  			<tr>
    			<td>James Saliba </td>
    			<td>Computer Associates</td>
    			<td>Strategic Developer</td>
  			</tr>
  			<tr>
  			<tr> 
    			<td>Donald Smith*</td>
    			<td>Eclipse Foundation</td>
    			<td>appointed by Eclipse Foundation (chair)</td>
  			</tr>		
  			<tr>
    			<td>Paul Styles</td>
    			<td>Compuware</td>
    			<td>Strategic Developer</td>
  			</tr>
  			<tr>
    			<td><i>TBD</i></td>
    			<td>IONA</td>
    			<td>Strategic Developer</td>
  			</tr>
  			<tr>
    			<td><i>TBD</i></td>
    			<td>Zend</td>
    			<td>Strategic Developer</td>
  			</tr>
		</table>
		<br/>        	
	<ul>

		<li><a href="../councils/20060628RCMinutes.pdf">Requirements Council Meeting, 
          			June 28, 2006 (.pdf)</a><img src="../../images/new.gif" alt="new"></li>
	
		 <li><a href="../councils/20060319RCMinutes.pdf">Requirements Council Meeting, 
          			March 19, 2006 (.pdf)</a></li>
	
	 	<li><a href="../councils/rcminutes050824.html">Requirements Council Meeting, 
          			August 24, 2005</a></li>
        <li><a href="../councils/20041130RCMinutes.pdf">Requirements Council Meeting, November 30, 2004 (.pdf)</a></li>
        <li><a href="../councils/20040831RCMinutes.pdf">Requirements Council Meeting, 
            August 31, 2004 (.pdf)</a></li>
			</ul>
		</div>
	<div class="homeitem3col">
		<h3><a name="planning"></a>Planning council</h3>
		<br/>
		
		<table width="90%" border="0" cellspacing="0" cellpadding="1" align="center">
  		<tr>
  		<td>Ward Cunningham</td>
  		<td>Eclipse Foundation</td>
  		<td>appointed by Eclipse Foundation</td>
  		</tr>
  		<tr> 
    		<td>Sri Doddapaneni</td>
    		<td>Intel</td>
    		<td>Test and Performance PMC Representative</td>
  		</tr>
  		<tr> 
    		<td>John Duimovich</td>
    		<td>IBM Corporation</td>
    		<td>Tools PMC Representative</td>
  		</tr>
  		<tr> 
    		<td>Bjorn Freeman-Benson*</td>
    		<td>Eclipse Foundation</td>
    		<td>appointed by Eclipse Foundation (chair)</td>
  		</tr>
  		<tr>
    		<td>Doug Gaff </td>
    		<td>Wind River</td>
    		<td>Device Software PMC Representative</td>
  		</tr>
  		<tr> 
    		<td>John Graham</td>
    		<td>Sybase</td>
    		<td>Data Tools PMC Representative</td>
  		</tr>
  		<tr>
    		<td>Richard Gronback </td>
    		<td>Borland</td>
    		<td>appointed by Eclipse Foundation</td>
  		</tr>
  		<tr>
    		<td>Kevin Haaland</td>
    		<td>IBM Corporation</td>
    		<td>Platform PMC Representative</td>
  		</tr>
  		<tr>
    		<td>Mika Hoikkala</td>
    		<td>Nokia</td>
    		<td>Strategic Developer</td>
  		</tr>
  		<tr>
    		<td>Christian Kurzke</td>
    		<td>Motorola</td>
    		<td>Strategic Developer</td>
  		</tr>
  		<tr>
    		<td>Georg Lenz</td>
    		<td>SAP AG</td>
    		<td>Strategic Consumer</td>
  		</tr>
  		<tr>
    		<td>Yossi Leon</td>
    		<td>Zend</td>
    		<td>Strategic Developer</td>
  		</tr>
  		<tr>
    		<td>Wenfeng Li</td>
    		<td>Actuate</td>
    		<td>BIRT PMC Representative</td>
  		</tr>
  		<tr>
  		<td>Ed Merks</td>
  		<td>IBM Corporation</td>
  		<td>Modeling PMC Representative</td>
  		</tr>
  		<tr> 
    		<td>Mike Milinkovich</td>
    		<td>Eclipse Foundation</td>
    		<td>appointed by Eclipse Foundation</td>
  		</tr>
  		<tr> 
    		<td>Mike Norman</td>
    		<td>Scapa Technology</td>
    		<td>Strategic Developer</td>
  		</tr>
  		<tr>
    		<td>James Saliba </td>
    		<td>Computer Associates</td>
    		<td>Strategic Developer</td>
  		</tr>
		<tr>
  		<td>Paul Styles</td>
   		<td>Compuware</td>
   		<td>Strategic Developer</td>
		</tr>
  		<tr> 
    		<td>Tim Wagner</td>
    		<td>BEA</td>
    		<td>WebTools PMC Representative</td>
  		</tr>
  		<tr>
  			<td><i>TBD</i></td>
   			<td>Serena Software, Inc.</td>
   			<td>Strategic Developer</td>
		</tr>
		<tr>
  			<td><i>TBD</i></td>
   			<td>IONA</td>
   			<td>Strategic Developer</td>
		</tr>	
		<tr> 
    		<td><i>TBD</i></td>
    		<td></td>
    		<td>Technology PMC Representative</td>
  		</tr>
		</table>
      	<ul>
        	<li><a href="../councils/20060629PCMinutes.php">Planning
          		Council Meeting, June 29, 2006</a><img src="../../images/new.gif" alt="new"></li>
        	<li><a href="../councils/20051215PCMinutes.php">Planning
          		Council Meeting, December 15, 2005</a></li>
        	<li><a href="../councils/20050823PCMinutes.html">Planning
          		Council Meeting, August 23, 2005</a></li>
        	<li><a href="../councils/20050519PCMinutes.html">Planning
          		Council Meeting, May 19, 2005</a></li>
        	<li><a href="../councils/20041201PCMinutes.pdf">Planning Council Meeting, December 1, 2004 (.pdf)</a></li>
        	<li><a href="../councils/20040901PCMinutes.pdf">Planning Council Meeting, 
            	September 1, 2004 (.pdf)</a></li>
      </ul>
    </div>
	<div class="homeitem3col">
	<h3><a name="architecture"></a>Architecture council</h3>
	<br/>
		<table width="90%" border="0" cellspacing="0" cellpadding="1" align="center">
  			
  		<tr>
    		<td>Brian Carroll</td>
    		<td>Serena Software, Inc</td>
    		<td>Strategic Developer</td>
  		</tr>
  		<tr>
  		<td>Ward Cunningham</td>
  		<td>Eclipse Foundation</td>
  		<td>appointed by Eclipse Foundation</td>
  		</tr>
  		<tr>
		<td>Stefan Daume</td>
    		<td>Scapa Technology</td>
    		<td>Strategic Developer</td>
  		</tr>
  		<tr>
    		<td>John Duimovich</td>
    		<td>IBM Corporation</td>
    		<td>Tools PMC Representative</td>
  		</tr>
		<tr>
  		<td>Don Ebright</td>
   		<td>Compuware</td>
   		<td>Strategic Developer</td>
		</tr>
  		<tr>
    		<td>Bjorn Freeman-Benson*</td>
    		<td>Eclipse Foundation</td>
    		<td>appointed by Eclipse Foundation (chair)</td>
  		</tr>
  		<tr>
    		<td>John Graham</td>
    		<td>Sybase</td>
    		<td>Data Tools PMC Representative</td>
  		</tr>
  		<tr>
    		<td>Richard Gronback</td>
    		<td>Borland</td>
    		<td>appointed by Eclipse Foundation</td>
  		</tr>
  		<tr>
    		<td>Anurag Gupta</td>
    		<td>Intel</td>
    		<td>Strategic Developer</td>
  		</tr>
  		<tr>
    		<td>Kevin Haaland</td>
    		<td>IBM Corporation</td>
		<td>Platform PMC Representative</td>
  		</tr>
  		<tr>
  		<td>Yossi Leon</td>
   		<td>Zend</td>
   		<td>Strategic Developer</td>
		</tr>
  		<tr>
    		<td>Wenfeng Li</td>
    		<td>Actuate </td>
    		<td>BIRT PMC Representative</td>
  		</tr>
  		<tr>
  		<td>Ed Merks</td>
  		<td>IBM Corporation</td>
  		<td>Modeling PMC Representative</td>
  		</tr>
  		<tr>
    		<td>Mike Milinkovich</td>
    		<td>Eclipse Foundation</td>
    		<td>appointed by Eclipse Foundation</td>
  		</tr>
  		<tr>
    		<td>Kai Nyman</td>
    		<td>Nokia</td>
    		<td>Strategic Developer</td>
  		</tr>
  		<tr>
    		<td>Valentina Popescu</td>
    		<td>IBM Corporation</td>
    		<td>Test and Performance PMC Representative</td>
  		</tr>
  		<tr>
    		<td>Michael Scharf </td>
    		<td>Wind River</td>
    		<td>Device Software PMC Representative</td>
  		</tr>
  		<tr>
    		<td>Mark Vandenbrink</td>
    		<td>Motorola</td>
    		<td>Strategic Developer</td>
  		</tr>  		
  		<tr>
    		<td>Tim Wagner</td>
    		<td>BEA</td>
    		<td>Strategic Developer</td>
  		</tr>
  		<tr>
    		<td>John Wiegand</td>
    		<td>IBM Corporation</td>
    		<td>appointed by Eclipse Foundation</td>
  		</tr>
  		<tr>
    		<td>David Williams</td>
    		<td>IBM Corporation</td>
    		<td>WebTools PMC Representative</td>
  		</tr>
  		<tr>
    		<td>Alan Young </td>
    		<td>Computer Associates</td>
    		<td>Strategic Developer</td>
  		</tr>
		<tr>
  			<td><i>TBD</i></td>
  			<td>IONA</td>
   			<td>Strategic Developer</td>
		</tr>	
  		<tr>
  			<td><i>TBD</i></td>
   			<td></td>
   			<td>Strategic Consumers</td>
		</tr>
		<tr>
    		<td><i>TBD</i></td>
    		<td></td>
    		<td>Technology PMC Representative</td>
  		</tr>
		</table>
	
			<ul>
         	<li><a href="../councils/20060628ACMinutes.php">Architecture
          		Council Meeting, June 28, 2006</a><img src="../../images/new.gif" alt="new"></li>
        		<li><a href="../councils/20050517ACMinutes.html">Architecture Council
          			Meeting, May 17-18, 2005</a></li>
        		<li><a href="../councils/20041202ACMinutes.pdf">Architecture Council Meeting, December 2, 2004 (.pdf)</a></li>
        		<li><a href="../councils/20040902ACMinutes.pdf">Architecture Council Meeting, 
            		September 2, 2004 (.pdf)</a></li>

			</ul>
			
	</div>

	</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
