<?php
/*
Plugin Name:  Creative Services Sample App
Description:  Sample App for Assessment
Plugin URI:   https://profiles.wordpress.org/
Author:       Layna Oyervides
Version:      1.0
Text Domain:  creativeservices
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/



// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

//if admin area

if (is_admin()) {

	//include dependencies
	require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php'
	require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php'

}


