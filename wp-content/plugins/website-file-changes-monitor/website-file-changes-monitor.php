<?php
/**
 * Plugin Name: Website File Changes Monitor
 * Plugin URI: https://melapress.com/website-file-changes-monitor/
 * Description: A hassle-free way to get alerted of file changes on your WordPress site & boost security.
 * Author: Melapress
 * Contributors: Melapress
 * Version: 1.9.0
 * Text Domain: website-file-changes-monitor
 * Author URI: http://melapress.com/
 * License: GPL3
 *
 * @package wfcm
 */

/*
	Website Files Monitor
	Copyright(c) 2023  Melapress  (email : info@melapress.com)
	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 3, as
	published by the Free Software Foundation.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define plugin file.
if ( ! defined( 'WFCM_PLUGIN_FILE' ) ) {
	define( 'WFCM_PLUGIN_FILE', __FILE__ );
}

// include the Composer autoload file
$composer_autoloader_file = dirname( __FILE__ ) . '/vendor/autoload.php';
if ( file_exists( $composer_autoloader_file ) ) {
	require_once $composer_autoloader_file;
}

// Include main plugin class.
if ( ! class_exists( 'Website_File_Changes_Monitor' ) ) {
	include_once dirname( __FILE__ ) . '/includes/class-website-file-changes-monitor.php';
}

/**
 * Loads the plugins text domain.
 */
function wfcm_load_textdomain() {
	load_plugin_textdomain( 'website-file-changes-monitor' );
}
add_action( 'init', 'wfcm_load_textdomain' );

/**
 * Main instance of Website File Changes Monitor.
 *
 * Returns the main instance of the plugin.
 *
 * @return Website_File_Changes_Monitor
 */
function wfcm_instance() {
	return Website_File_Changes_Monitor::instance();
}
wfcm_instance();
