<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# sample_list.php
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
	$pageTitle 		= "Press Release Guidelines";
	$pageKeywords	= "Type, page, keywords, here";
	$pageAuthor		= "Ian Skerrett";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
     <h3>Introduction</h3>
      <p>Eclipse has been very successful in developing strong press relationships resulting in Eclipse-related news frequently reported. As the number of projects and members grow, the request for press releases about Eclipse is also growing. Therefore, to maintain our strong relationship with the industry press and service the press needs of our member companies and projects, we have developed a set of guidelines on the issuance of press releases from the Eclipse Foundation. These guidelines are meant to communicate when the Eclipse Foundation will issue a press release and when it will participate in press releases with a member company.</p>
      <h3>Goals of the Guidelines</h3>
      <ul>
        <li>Maintain the positive image of Eclipse with the editors and magazines that cover Eclipse. </li>
        <li> Ensure Eclipse is viewed positively in the greater software industry.</li>
        <li>Support member&rsquo;s desires to publicize their involvement with Eclipse.</li>
        <li>Ensure a level of consistency and professionalism regarding public relations efforts around Eclipse.</li>
        <li>Maintain a level of momentum around Eclipse through regular news updates that demonstrates the activity and vitality of the Eclipse community.<br>
        </li>
      </ul>      
      <h3>Events that may trigger a press release</h3>
      <p>There are different events that may trigger an Eclipse related press release. This section provides the guidelines of what the Foundation involvement maybe in those press releases. </p>
      <p><strong>Company Joins Eclipse Foundation as a Member</strong><br>
        When a company joins the Eclipse Foundation, the company is requested to issue a press release announcing their membership in the Foundation. The Eclipse Foundation will support this press release by providing a supporting quote. The actual release is issued by the member company. Eclipse will link to the new member press release from the eclipse.org web site.</p>
      <p><strong>Company Releases a Commercial Product Based on/Integrated with Eclipse</strong><br>
        If a member company issues a press release about a product that is based on Eclipse or is integrated with Eclipse, the Eclipse Foundation will support this press release by providing a supporting quote. The actual release is issued by the member company. Eclipse will link to the new product press release from the eclipse.org web site. </p>
      <p><strong>Company Makes a Donation to Eclipse</strong><br>
        If a member company issues a press release about a code donation or contribution to Eclipse, the Eclipse Foundation will support this press release by providing a supporting quote. The actual release is issued by the member company. Eclipse will link to the new product press release from the eclipse.org web site. </p>
      <p><strong>Company Joins Eclipse as a Strategic Member</strong><br>
        When a company joins the Eclipse Foundation as a Strategic Member and hence becomes a member of the Board of Directors, the Eclipse Foundation would like to do a joint press release with the company. The decision to do a joint release is with the member company. If a joint release is desired, the Eclipse Foundation would participate in the press outreach activities. If the company would like to issue their own release, the Eclipse Foundation would be willing to provide a supporting quote. Eclipse will link to the new member press release from the eclipse.org web site.</p>
      <p><strong>Company Proposes a New Eclipse Project</strong><br>
        When a company proposes a new Eclipse project, they may wish to issue a press release. The Eclipse Foundation will support this press release with a supporting quote. It is important that the press release position the news of the project as a &lsquo;project proposal&rsquo;. This is to respect the Eclipse development process that requires a 30-day period of feedback before a project can be considered for creation. Eclipse will link to the new member press release from the eclipse.org web site.</p>
      <p><strong>New Project is created or transitioned at Eclipse</strong><br>
        When a new project is created, or an incubator project is graduated, the Eclipse Foundation and the company that initially proposed the project may decide to issue a press release. This would be a joint release between the company and the Eclipse Foundation.  The main message of the release needs to reflect the Eclipse specific news and should not contain a strong corporate message.  If appropriate, Eclipse Foundation would participate in the press outreach activities. The press release would be posted on the Eclipse.org web site.</p>
      <p><strong>Project Oriented Press Releases</strong><br>
        Press releases to announce news about a project, (ex. new version or significant milestone) are issued by the Eclipse Foundation. Top-level projects PMC are invited to propose potential press releases. To encourage a vendor neutral community, companies are encouraged to not issue press releases regarding a specific Eclipse project. </p>
      <p>In general, project oriented press releases will be focused on promoting the Eclipse top-level projects. The PMC leader is required to approve any project specific press release and act as a spokesperson for the release. The PMC will also be required to participate in the implementation of the press plan for a specific press release. </p>
      <p>In general, the press plan is guided by the current marketing strategy of the Eclipse Foundation and project oriented press releases will be written to support the marketing objectives. This will often include consolidating a number of project related announcements into one press release. Whenever possible, a key message in the press releases will be the commercial adoption of the Eclipse technology.</p>
      <p>The Eclipse Foundation will not issue press releases announcing new versions of a technology or incubation project. In general, technology and incubation projects are not intended for production use; therefore the promotion of these projects should be focused within the existing Eclipse community. New releases of technology and incubation projects can be promoted via elipse.org web site and newsgroups.</p>
      <p>Eclipse projects are able to issue &lsquo;Community Bulletins&rsquo; that may highlight a key project update. The bulletin can be posted on the project web site and linked to from the eclipse.org main page. However, the community bulletin should not be distributed to the IT press or on the news wires.</p>
      <p><strong>Foundation News Releases</strong><br>
        The Eclipse Foundation may from time to time issue press releases to support certain events or strategies. For example, press releases announcing EclipseCon, participation in a trade show or momentum in the Eclipse community.<br>
      </p>
      <h3>General Guidelines for Press Releases Issued By Eclipse Foundation</h3>
      <ul>
        <li> In general, Eclipse tries not to overstate the capabilities of Eclipse and avoid obvious hyperbole statements. Eclipse is an open source community that has a strong developer focus. Over-hyped statements are generally viewed negatively by the community. </li>
        <li>The Eclipse Foundation avoids any statements that may be viewed as competitive to an Eclipse member company.</li>
        <li>A Company leading an Eclipse project should not claim ownership of an open source project. For instance statements such as <em>ABC Company&rsquo;s Eclipse &lt;favourite project&gt; has announced&hellip;</em> should be avoided. Eclipse is about a vendor neutral open source community, so ownership claims go against this philosophy. Reinforcing a company&rsquo;s leadership in a project via a supporting quote is fine.</li>
        <li>Whenever possible, a press release should promote the fact that the Eclipse project is being adopted by a wide variety of commercial products and stress the open source nature of the project. This is to reinforce the message that Eclipse is an open platform and set of open frameworks for building commercial products. </li>
        <li>Press releases announcing future capabilities or new project versions that will be available more than 30 days after the press release should be avoided. The philosophy is to only promote what is available to the community today. Setting future directions is done via the Eclipse Roadmap document which is available in the public domain on eclipse.org.</li>
        <li>Mike Milinkovich, executive director of the Eclipse Foundation is the main press spokesperson and will be attributed all quotes from the Eclipse Foundation. For project specific press releases, the PMC leader may be the spokesperson and attributed quotes in press releases.</li>
        <li>All press releases from the Eclipse Foundation must be:
          <ul>
            <li>Approved by the Director of Marketing and the Executive Director of the Eclipse Foundation</li>
            <li>Distributed to the Eclipse Board of Directors prior to the time of release, or if that is impractical immediately upon release. </li>
          </ul>
        </li>
        <li> The &lsquo;boilerplate&rsquo; description of Eclipse and the Eclipse Foundation to be used in press releases is as follows:
          <blockquote>
            <p><strong> About the Eclipse Foundation </strong></p>
          </blockquote>
        </li>
        <blockquote>
          <p><em>Eclipse is an open source community whose projects are focused on providing an extensible development platform and application frameworks for building software. Eclipse provides extensible tools and frameworks that span the software development lifecycle, including support for modeling, language development environments for Java, C/C++ and others, testing and performance, business intelligence, rich client applications and embedded development. A large, vibrant ecosystem of major technology vendors, innovative start-ups, universities and research institutions and individuals extend, complement and support the Eclipse Platform.</em></p>
          <p><em>The Eclipse Foundation is a not-for-profit, member supported corporation that hosts the Eclipse projects. Full details of Eclipse and the Eclipse Foundation are available at www.eclipse.org.</em></p>
        </blockquote>
        <li> It is expected that as Eclipse grows and matures, what is considered newsworthy about Eclipse will evolve. Therefore, these guidelines will evolve and be updated from time to time. It is also expected that certain events may require the Eclipse Foundation to issue a press release that is not covered by or contradict these guidelines. In that case, the Executive Director of Eclipse Foundation will use his discretion and best judgment for issuing the press release.</li>
      </ul>
      <br>      

	


	</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
