<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# industry wg process.php
	#
	# Author: 		Ian Skerrett
	# Date:			2008-11-05
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Eclipse Industry Working Group Process";
	$pageKeywords	= "industry workign groups, eclipse";
	$pageAuthor		= "Ian Skerrett";
	
	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!	

	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
	
		<h1>$pageTitle</h1>
		Revision 1.3 May 30, 2012 <img src='/images/updated.png'>
		
		<h3>Purpose and Scope</h3>
		
     	<p>This document describes the process for creating and managing Eclipse Industry Working Groups 
     	("Eclipse IWGs" or "IWGs"). In particular, it describes how the Eclipse Foundation ("Eclipse") 
     	membership (the "Members") lead, influence, and collaborate within IWGs to develop a common set of 
     	Materials (as defined below).  </p>

		<p>Eclipse IWGs are established to facilitate the collaboration between Eclipse Foundation Members.  The 
		collaboration should be intended to focus, promote and augment Eclipse technologies to meet the needs of 
		specific industries.  The collaboration can take the form of the development of Materials for use by a 
		specific community and/or joint Marketing Programs to promote Eclipse in a certain industry.  Unlike 
		Eclipse open source projects that are open to participation by anyone, participation in an Eclipse IWG is 
		open only to Eclipse Members.</p>

		<p>This document has 3 sections:
		<ol>
			<li>Terminology
			<li>Participation structure for Working Group
			<li>Working Group Lifecycle, describing Working Group creation and development 
		</ol></p>

		<p>All participants in IWGs must respect the agreements, policies and procedures of Eclipse.  In 
		particular, and without limiting the foregoing, at all times, participants in all Eclipse IWGs must 
		conform to the Eclipse IP Policies and Antitrust Policies. </p>

		<p>All IWGs must operate in an open, transparent and vendor neutral manner.  
			</p>
     		
     		
     	<h3>Terminology</h3>
     	<p><i>"Materials"</i> is used to describe an asset that is created by an IWG.  An asset could be a technology 
     	roadmap, test suite, documentation, specification, package of Eclipse technology (other than that 
     	intended for download to Eclipse end users), etc.  </p>

		<p>Unless otherwise approved by the Eclipse Management Organization (the "EMO"), any third party content 
		used by an IWG in the creation of Materials must be submitted to Eclipse under the Eclipse.org terms of 
		use.  </p>

		<p>The work product of an IWG will be Non-Code Content (as that term is defined in the Eclipse Terms of 
		Use).  Any code developed by in relation to the activities of the IWG must be developed as part of an 
		Open Source Project.  </p>

		<p><i>"Marketing Programs"</i> is used to describe a set of activities which may be undertaken by an IWG to 
		promote Eclipse technology and Members companies in a specific market or geography.  Example Marketing 
		Programs could include participation in a trade show, joint press release put out by the Eclipse 
		Foundation, the creation of a logo to identify the working group, co-sponsored webinars to create leads 
		for IWG participants, etc.</p>
		
		<h3>2. Participation Structure for Industry Working Groups</h3>
		<p>Participation in IWGs is only open to certain Members of the Eclipse Foundation.  Each IWG will have two types 
		of participants: Steering Committee Participants and Member Participants (collectively, "Participants"):</p>

		<p>The <i>Steering Committee</i> Participants shall be Participants of the IWG who
		agree to actively participate in the IWG Steering Committee and which satisfy the Steering
		Committee Participants requirements set forth in the Member Participation Guidelines (as defined herein) as 
		determined by the IWG Steering Committee.  </p>

		<p>The Steering Committee is responsible for writing and maintaining an IWG Charter (a "IWG Charter") 
		consisting of the following:
		<ul>
			<li>A description of:
				<ul><li>the purpose and scope of the IWG
					<li>the Materials and Marketing Programs to be developed by the IWG
					<li>proposed Schedule for IWG activities
					<li>the objectives, strategies, policies and plans of the IWG 
				</ul>
			<li>The guidelines for each of the Steering Committee Participants and Member Participants in the 
			IWG ("Member Participation Guidelines").  The Member Participation Guidelines in both cases must be 
			objective, fair, reasonable and non-discriminatory standards and must not be designed to exclude or i
			mpose commercially unreasonable terms on any particular Member or group of Members.   That said, 
			the expectation is that the Steering Committee Participant Guidelines will expect a greater 
			investment of time, effort and resources than the Guidelines for the Member Participants.  The Member 
			Participation Guidelines will also specify the Eclipse Foundation membership level requirements for 
			Steering Committee Participants and Member Participants of the IWG. The Member 
			Participation Guidelines must be based on Eclipse meritocratic principles that allow for a community 
			of Members to grow within an IWG.  The Eclipse Foundation Executive Director will have final approval on IWG 
			Member Participation Guidelines (including any modifications thereof). </li>
			<li>An identification of the technology features/components that are the focus of the IWG 
			<li>A statement of resource commitments for all Participants in that IWG  that will cover external 
			resources (development, marketing programs, etc.) 
			</ul> </p>

		<p><i>Member Participant</i> is a Member of the Eclipse Foundation (excluding Associate Members other 
		than research institutions, academic institutions or government agencies specifically approved 
		by the Steering Committee) ) who agrees to actively participate in the IWG 
		and meets the Member Participation Guidelines.  </p>

		<p>Any Member that satisfies the Member Participation Guidelines of an IWG must be permitted to be a 
		Participant in the IWG.   Any Member wishing to join the IWG would contact the IWG Steering Committee to 
		indicate their interest and describe how they fulfill the Membership Participation Guidelines.  The 
		Steering Committee is responsible for maintaining and publishing the list of all Participants on an 
		ongoing basis.</p>

		<p>All Participants in an IWG, whether Steering Committee Participants or Member Participants, can  
		participate and will have voting rights with respect to  all IWG matters, including scheduling meetings 
		and activities, and will have equal rights of access and participation in the development of all 
		Materials, including  Marketing Programs, Material development, mailing lists and wikis.</p>

		<p>Unless decided by the IWG Steering Committee and stated in the IWG Charter, there shall be no additional 
		charges or fees for Eclipse Members to be a Participant in an IWG. </p>
		
		<h3>3. Working Group Lifecycle</h3>
<p>Following is a description of the lifecycle of an IWG.  </p>
<b>Proposal Phase</b>

	<p>Any Eclipse Strategic, Enterprise, or Solution Member(s) (an "Initiating Member(s)") can create a draft IWG Charter 
	and request the Eclipse Foundation Executive Director to make it available in the appropriate area on Eclipse.org.  
	Upon the Eclipse Foundation Executive Director's approval of the draft Charter, the Executive Director will do so, and 
	an e-mail will be circulated announcing the availability of the draft Charter for review.  The Proposal Phase 
	will commence upon the distribution of that e-mail. </p>

	<p>The Proposal Phase will last no less than thirty (30) days.</p>

	<p>During the Proposal Phase, an individual designated by the Initiating Member(s) shall work with Members to 
	produce a proposed Charter.  Among other things, during the Proposal Phase, the Initiating Member will work 
	with the Members to<br>
	<ul><li>Define the IWG name, goal, and description 
	<li>Define the IWG's scope in terms of explicit inclusions and explicit exclusions
	<li>Refine the description of Materials and Marketing Programs to be developed.
	<li>Refine the schedule and define milestones.
	<li>Identify potential intellectual property that may be created or contributed by the IWG
	<li>Refine the Membership Participation Guidelines
	<li>Define operational rules for the IWG.  As part of such rules, the Charter shall provide that:
	<ul>
		<li>the IWG is open to participation by any Member who meet the criteria specified in the Membership 
		Participation Guidelines.
		<li>all IWG meetings are announced and open to all IWG Participants
		<li>all IWG meetings are recorded via minutes and posted to a newsgroup, mailing list and/or wiki 
		available to all Members.  Minutes will include the names of all participating Members, and record any 
		decisions made by the IWG. 
		<li> all Materials, including drafts, are available in a public forum available to all Members.
	</ul
	<li>Engage the Members to solicit additional IWG participation and define ways the IWG can be leveraged 
	across Eclipse.
	<li>Recruit Members of the IWG, including both Participating Members and Steering Committee Members. In addition, 
	recruit the IWG Chair(s). The Chair(s) must be employees of a Steering Committee Participant. 
	The Chair(s) shall act as both the Chair(s) of the IWG as a whole, and of the Steering Committee.
	</ul>
	</p>

	<p>At the end of the Proposal Phase, subject to the Initiating Member's compliance with the terms of this 
	Policy, and the Eclipse Foundation Executive Director's approval of the Charter, and based on the feedback from the 
	Eclipse community and in consultation with the proposed IWG Steering Committee, the Eclipse Foundation 
	Executive Director will determine whether to create the IWG.  Once the IWG is created, a notification will be 
	sent to the Members with the initial list of Participants and an invitation to other Members to participate.  
	At this time, the IT infrastructure for the IWG will be established.  </p>

<p>At this point, the Implementation Phase for the IWG shall commence.</p>

<b>Implementation Phase</b>

	<p>The majority of IWG's work is intended to be accomplished during its Implementation Phase.  The 
	development of the Materials and Marketing Programs for each IWG is undertaken by its Participants during 
	this phase. The IWG Steering Committee shall provide regular systematic status reporting to the EMO.  The IWG 
	Steering Committee will provide overall coordination, will monitor progress of the IWG against the IWG 
	Charter milestones and schedules, provide attention to issues involving dependencies between IWG, and publish 
	all plans, documents, reports, and interactions to the Participants in the IWG.</p>

	<p>The Implementation Phase culminates with a Release Review for Materials.  </p>

	<p>The Release Review is conducted by the EMO before each release of Materials to verify that the key goals 
	of the IWG, as anticipated in the Charter, have been accomplished and to verify that all intellectual 
	property rights issues have been resolved.   Assuming the IWG presents the Materials to the EMO sufficiently 
	in advance of the anticipated release date for the Materials, the Release Review will be conducted 
	sufficiently in advance by the EMO before the target release date to allow time for the IWG to respond to 
	feedback.   	</p>

	<p>The first step in a Release Review is a telephone conference call open to all Eclipse Members.  All 
	materials for the Release Review including at a minimum the final draft of the Working Group's Materials must 
	be made available to the public no less than fifteen (15) working days prior to the date of the Release 
	Review. 	</p>

	<p>A formal release review is not required for Marketing Programs.  The IWG Steering Committee and the 
	Eclipse EMO needs to approve any Marketing Program before they are executed.	</p>

	<p>For IWG Materials to be approved for a Release Review, a majority of Eclipse IWG Member Participants and a 
	majority of the IWG Steering Committee Participants must provide a positive vote with three (3) working days 
	of the Release Review.  In addition, the EMO must approve the Materials.  Voting will be done electronically 
	via an openly readable email list to which only IWG Members may write (the "Members Mailing List").   The 
	Executive Director has the final authority to approve the Release Review.  	</p>

	<p>In the event the IWG Materials are not approved, the Participants of the IWG are expected to reply via the 
	Members Mailing List to  achieve consensus through dialogue.  However, in the event that this dialogue is not 
	successful, the IWG Steering Committee may after a period of no less than fourteen (14) days may call a vote 
	of the Steering Committee.  The super-majority (two-thirds) decision of the IWG Steering Committee is final 
	and binding in the approval of IWG's Materials.  	</p>

	<p>At the completion of the Release Review, the IWG Steering Committee will publish the Materials, as 
	approved, on a public wiki, mailing list or newsgroup.  The Materials will be marked as being final and an 
	appropriate announcement will be made.	</p>

	<p>Some IWG Materials will go through several version releases for new features or simple maintenance.  
	For each release, the IWG is expected to cycle through an Implementation Phase and Release Review.	</p>

<b>Working Group Termination</b>

	<p>It is expected that some IWGs will exist for a specific period of time to accomplish a specific objective 
	and some IWGs will continue for an extended period of time.  Regardless, at some point in time the operation 
	of IWGs may need to be terminated.  Two events may trigger the termination of an IWG: 1) a super-majority 
	(two-thirds) of the IWG Steering Committee requests to the Eclipse Foundation Executive Director that the IWG 
	be terminated, or 2) the IWG is deemed inactive or non-compliant with the IWG's Charter by the Eclipse 
	Foundation Executive Director in their sole discretion.	</p>

	<p>The EMO will terminate a IWG by putting a public notice on the IWG mailing list.  All Materials created by 
	the Working Group will be archived.  	</p>

<b>Modifying an Industry Working Group Charter</b>

	<p>An IWG may modify their IWG Charter.   Any modifications to a Charter must be approved by: 1) a 
	super-majority (two-thirds) vote of the IWG Steering Committee and 2) the EMO.	</p>

<b>Modifying This Process</b>

	<p>This process may be modified by the EMO with thirty (30) days written notice to the Eclipse Foundation 
	membership-at-large.	</p>


 <br><br>
</div>



</div>


EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

