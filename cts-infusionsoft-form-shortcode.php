<?php
/*
Plugin Name: CTS InfusionSoft Form Shortcode
Plugin URI: http://nvcreativetechnology.com/cts-infusionsoft-form-shortcode/
Description: Adds a shortcode to allow you to imbed InfusionSoft webforms javascript code quickly and easily into wordpress posts and pages.
Version: 1.1
Author: Randell Miller - Creative Technology Services
Author URI: http://www.nvcreativetechnology.com
*/

/*
CTS InfusionSOFT Form Shortcode (Wordpress Plugin)
Copyright (C) 2013 Creative Technology Services
Contact us at http://www.nvcreativetechnology.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

//tell wordpress to register the demolistposts shortcode
add_shortcode('infusionsoft_form', 'infusionsoft_form_handler');

function infusionsoft_form_handler($incomingfrompost) {
  if(!strtolower(strstr($incomingfrompost['src']),".infusionsoft.com")) {
  	return "Your source appears to be invalid.";
  }
  //run function that actually does the work of the plugin
  $iff_output = infusionsoft_form_function($incomingfrompost);
  //send back text to replace shortcode in post
  return $iff_output;
}

function infusionsoft_form_function($args) {
	if($args['src']) {
		$return = '<script type="text/javascript" src="'.$args['src'].'"></script>';
		return $return;
	} else {
		//No source
		return "No src defined.";
	}
}
?>