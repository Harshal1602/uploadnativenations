<?php
/**
 * WFCM Uninstall
 *
 * Uninstalling WFCM deletes monitoring data and options.
 *
 * @package wfcm
 */

defined( 'WP_UNINSTALL_PLUGIN' ) || exit;

wp_clear_scheduled_hook( 'wfcm_monitor_file_changes' );

if ( get_option( 'wfcm_delete-data', false ) ) {
	global $wpdb;
	$table_name    = $wpdb->prefix . 'wfcm_file_events';

	// Delete wfcm options.	
	$wpdb->query( $wpdb->prepare( "DELETE FROM %1s WHERE ( option_name LIKE %s OR option_name LIKE %s )", $wpdb->options, 'wfcm-%', 'wfcm_%' ) );
	// Delete wfcm transients.
	$wpdb->query( $wpdb->prepare( "DELETE FROM %1s WHERE ( option_name LIKE %s OR option_name LIKE %s )", $wpdb->options, '_transient_wfcm%', '_transient_timeout_wfcm%' ) );

	// Delete wfcm_file_event posts + data.
	$wpdb->query( $wpdb->prepare( 'DROP TABLE IF EXISTS %1s', $table_name ) );
}
