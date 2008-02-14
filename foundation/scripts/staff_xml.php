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
include ($_SERVER['DOCUMENT_ROOT']."/eclipse.org-common/system/xml_sax_parsing.php");

function get_staff_as_html() {
	$html = "";
	$staff = & get_staff();
	$html .= "<ul class=\"midlist\">";
	foreach ($staff as $member) {
		$member->to_html($html);
	}
	$html .= "</ul>";
	
	return $html;
}

class StaffMember {
	var $id;
	var $name;
	var $title;
	var $image;
	var $description;

	function to_html(& $html) {
		$html .= "<li style=\"display:table;\"><a name=\"$this->id\"></a><b>$this->name</b>";
		if ($this->image)
			$html .= "<img src=\"$this->image\" align=\"right\">";
		if ($this->title) 
			$html .= "<br/>$this->title";

		$html .= "<blockquote>$this->description</blockquote>";
	}
}

function & get_staff() {
	$staff_file = $_SERVER['DOCUMENT_ROOT']."/org/foundation/staff.xml";
	$handler = new StaffFileHandler();
	parse_xml_file($staff_file, $handler);
	return $handler->staff;
}

/*
 * This class is used by the SAX parser to start parsing
 * a staff file.
 */
class StaffFileHandler extends XmlFileHandler {
	var $staff;

	function StaffFileHandler() {
		parent :: XmlFileHandler();
	}

	/*
	 * This method returns the root handler for a staff file
	 * The root handler essentially represents the file itself
	 * rather than any actual element in the file. The returned
	 * element handler will deal with any elements that may occur
	 * in the root of the XML file.
	 */
	function get_root_element_handler() {
		return new StaffRootHandler();
	}

	function end_root_element_handler($handler) {
		$this->staff = & $handler->staff;
	}
}

/*
 * The StaffRootHandler class takes care of the root element 
 * in the file. This handler doesn't correspond to any particular
 * element that may occur in the XML file. It represents the file
 * itself and must deal with any elements that occur at the root
 * level in that file.
 */
class StaffRootHandler extends XmlElementHandler {
	var $staff;

	/*
	 * This method handles the <staffmembers>...</staffmembers> element.
	 */
	function & get_staffmembers_handler($attributes) {
		return new StaffMembersHandler();
	}

	function end_staffmembers_handler($handler) {
		$this->staff = & $handler->staff;
	}
}

/*
 * The StaffMembersHandler takes care of the <staffmembers> element. This
 * element is the root element in the file and is used to contain
 * all the staff members.
 * 
 * <staffmembers>
 * 		<staffmember>...</staffmember>
 * 		<staffmember>...</staffmember>
 * 		<staffmember>...</staffmember>
 * </staffmembers>
 */
class StaffMembersHandler extends XmlElementHandler {
	var $staff = array ();

	/*
	 * This method handles the <staffmember>...</staffmember> element.
	 */
	function & get_staffmember_handler(& $attributes) {
		return new StaffMemberHandler($attributes);
	}

	function end_staffmember_handler(& $handler) {
		array_push($this->staff, $handler->member);
	}
}
/*
 * The StaffMemberHandler takes care of the <category> element. This
 * element may occur multiple times inside the <categories> tag.
 * 
 * <staffmembers>
 * 		<staffmember id="...">
 * 			<title>...</title>
 * 			<description>...</description>
 * 			<title>...</title>
 * 			<image>...</image>
 * 		</staffmember>
 * 		<staffmember>...</staffmember>
 * 		<staffmember>...</staffmember>
 * </staffmembers>
 */
class StaffMemberHandler extends XmlElementHandler {
	var $member;

	function StaffMemberHandler($attributes) {
		$this->member = new StaffMember();
		$this->member->id = $attributes['ID'];
	}

	/*
	 * This method handles the <title>...</title> element.
	 */
	function & get_title_handler($attributes) {
		return new SimplePropertyHandler($this->member, "title");
	}

	/*
	 * This method handles the <description>...</description> element.
	 */
	function & get_description_handler($attributes) {
		return new SimplePropertyHandler($this->member, "description");
	}

	/*
	 * This method handles the <name>...</name> element.
	 */
	function & get_name_handler($attributes) {
		return new SimplePropertyHandler($this->member, "name");
	}
	/*
	 * This method handles the <image>...</image> element.
	 */
	function & get_image_handler($attributes) {
		return new SimplePropertyHandler($this->member, "image");
	}
}
?>



