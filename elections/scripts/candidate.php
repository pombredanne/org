<?php

#*****************************************************************************
#
# Article.php
#
# Author: 		Wayne Beaton
# Date:			2005-11-07
#
# Description: This file defines the Article class which is used to define,
# and render as html, articles.
#
#****************************************************************************
require_once("candidate_xml.php");

$candidates_root = $_SERVER['DOCUMENT_ROOT'] . '/org/elections/';

function & get_candidate($id, $year="") {
	if (!$year) $year = date("Y"); // if no year has been provided, use the current one.
	$file_name = $GLOBALS['candidates_root'] . $year . '/' . $id . '.xml';
	
	$candidate = get_candidate_from_file($file_name, $year);
	
	return $candidate;
}

function & get_all_candidates($year = "") {
	if (!$year) $year = date("Y"); // if no year has been provided, use the current one.
	$candidates = array();
	$root = $GLOBALS['candidates_root'] . $year . '/';
	if (@$dh = opendir($root)) {
		while (($file = readdir($dh)) !== false) {
			if (ends_with($file, ".xml")) {
				$file = $root.$file;
				$candidate = get_candidate_from_file($file, $year);
				if ($candidate->name)
					array_push($candidates, $candidate);
			}
		}
		closedir($dh);
	}
	
	// Randomize the order of the candidates.
	shuffle($candidates);
//	usort($candidates, 'sort_candidates_cmp');
	
	return $candidates;
}

/*
 * Sort candidates by last name in ascending order (a-z).
 * Note that this only sorts by last name since we do not currently
 * need to be any smarter (i.e. we don't need to sort first by 
 * last name and then by first name). Also note that this algorithm
 * assumes that the last word in the name of a candidate is their
 * last name. We don't currently handle compound last names because
 * we don't need to.
 */
function sort_candidates_cmp($a, $b) {
	$a_names = explode(' ', trim($a->name));
	$b_names = explode(' ', trim($b->name));
	
	$a_last_name = end($a_names);
	$b_last_name = end($b_names);
	
	return strcmp($a_last_name, $b_last_name);
}

function & get_candidate_from_file($file_name, $year) {
	$candidate = get_candidate_from_xml($file_name);
	
	$image = trim($candidate->image);
	if ($image) {
		$image = "/org/elections/$year/$image";
		$candidate->image = $image;
	}
	
	return $candidate;
}

function & get_candidates_short_summary_as_html($year = "") {
	if (!$year) $year = date("Y"); // if no year has been provided, use the current one.
	$candidates = get_all_candidates($year);
	$html = "<ul>";
	foreach ($candidates as $candidate) {
		$html .= "<li>";
		$html .= "<a href=\"/org/elections/candidate.php?year=$year&id=$candidate->id\">$candidate->name</a>";
		$html .= "</li>";
	}
	$html .= "</ul>";
	return $html;
}

function ends_with($source, $pattern) {
	$end = substr($source, strlen($source) - strlen($pattern));
	return strcmp($end, $pattern) == 0;
}

class Candidate {
	var $id;
	var $type;
	var $name;
	var $email;
	var $phone;
	var $affiliation;
	var $eclipse_affiliation;
	var $contact;
	var $image;
	var $vision;
	var $bio;
	var $location;

	// Render this category in html format.
	function to_html(& $html) {
		$html .= "<h3><a href=\"$this->id\">$this->name</a></h3>";
		$html .= "<p>$this->type</p>";
	}
}
?>