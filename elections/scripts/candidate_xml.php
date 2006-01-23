<?php


#*****************************************************************************
#
# news.php
#
# Author: 		Wayne Beaton
# Date:			2005-11-07
#
# Description: Use the get_news($newsfile) function in this file to generate the html 
# equivalent of the provided RSS file. 
#
#****************************************************************************
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/xml_sax_parsing.php");

/*
 * This function answers an instance of Article containing the
 * information represented in $file_name. $file_name is assumed to
 * be a file name with a complete path to an XML file conforming
 * to the about.xml structure. $root is the directory that contains
 * the actual content of the article (generally this is the same
 * as the path for $file_name).
 */
function & get_candidate_from_xml($file_name) {
	$handler = new CandidateFileHandler();
	parse_xml_file($file_name, $handler);
	$candidate = $handler->candidate;
	
	$candidate->location = $file_name;
		
	$email = trim($candidate->email);
	if ($email) {
		$email = str_replace("@", " at ", $email);
		$candidate->email = $email;
	}
	
	return $candidate;
}

/*
 * This class is used by the SAX parser to start parsing
 * a Candidate file.
 */
class CandidateFileHandler extends XmlFileHandler {
	var $candidate;

	/*
	 * This method returns the root handler for a Candidate file
	 * The root handler essentially represents the file itself
	 * rather than any actual element in the file. The returned
	 * element handler will deal with any elements that may occur
	 * in the root of the XML file.
	 */
	function get_root_element_handler() {
		return new CandidateRootHandler();
	}	
	
	function end_root_element_handler(& $handler) {
		$this->candidate = $handler->candidate;
	}
}

/*
 * The CandidateRootHandler class takes care of the root element 
 * in the file. This handler doesn't correspond to any particular
 * element that may occur in the XML file. It represents the file
 * itself and must deal with any elements that occur at the root
 * level in that file.
 */
class CandidateRootHandler extends XmlElementHandler {
	var $candidate;
	
	/*
	 * This method handles the <boardmember>...</boardmember> element.
	 */
	function & get_boardmember_handler($attributes) {
		return new CandidateHandler($attributes);
	}
	
	function end_boardmember_handler(& $handler) {
		$this->candidate = $handler->candidate;
	}
}

/*
 * The CandidateHandler takes care of the <boardmember> element. This
 * element is the root element in the file and is used to contain
 * all the categories.
 * 
 * <boardmember>
 * 		<type>...</type>
 * 		<name>...</name>
 * 		<title>...</title>
 *		...
 * </boardmember>
 */
class CandidateHandler extends XmlElementHandler {
	var $candidate;

	function CandidateHandler(&$attributes) {
		$this->candidate = new Candidate();
		$this->candidate->id = $attributes['ID'];
		$type = $attributes['TYPE'];
		if (strcasecmp($type, "committer") == 0) {
			$this->candidate->type = "committer";
		} else {
			$this->candidate->type = "addin";
		}
	}

	/*
	 * This method handles the <name>...</name> element.
	 */
	function & get_name_handler(& $attributes) {
		return new SimplePropertyHandler($this->candidate, "name");
	}
	
	/*
	 * This method handles the <title>...</title> element.
	 */
	function & get_title_handler(& $attributes) {
		return new SimplePropertyHandler($this->candidate, "title");
	}
	
	/*
	 * This method handles the <email>...</email> element.
	 */
	function & get_email_handler(& $attributes) {
		return new SimplePropertyHandler($this->candidate, "email");
	}
		
	/*
	 * This method handles the <phone>...</phone> element.
	 */
	function & get_phone_handler(& $attributes) {
		return new SimplePropertyHandler($this->candidate, "phone");
	}
	
	/*
	 * This method handles the <contact>...</contact> element.
	 */
	function & get_contact_handler(& $attributes) {
		return new SimplePropertyHandler($this->candidate, "contact");
	}
	
	/*
	 * This method handles the <image>...</image> element.
	 */
	function & get_image_handler(& $attributes) {
		return new SimplePropertyHandler($this->candidate, "image");
	}
	
	/*
	 * This method handles the <vision>...</vision> element.
	 */
	function & get_vision_handler(& $attributes) {
		return new SimplePropertyHandler($this->candidate, "vision");
	}
	
	/*
	 * This method handles the <bio>...</bio> element.
	 */
	function & get_bio_handler(& $attributes) {
		return new SimplePropertyHandler($this->candidate, "bio");
	}
	
	/*
	 * This method handles the <affiliation>...</affiliation> element.
	 */
	function & get_affiliation_handler(& $attributes) {
		return new SimplePropertyHandler($this->candidate, "affiliation");
	}
	
	/*
	 * This method handles the <affiliation>...</affiliation> element.
	 */
	function & get_eclipse_affiliation_handler(& $attributes) {
		return new SimplePropertyHandler($this->candidate, "eclipse_affiliation");
	}
}

?>


