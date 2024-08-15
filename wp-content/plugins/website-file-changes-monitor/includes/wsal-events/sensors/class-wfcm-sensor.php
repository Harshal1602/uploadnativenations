<?php
/**
 * Custom Sensors for wpfc plugin.
 *
 * Class file for alert manager.
 *
 * @since   1.0.0
 * @package wsal
 * @subpackage wsal-wpfc
 */

declare(strict_types=1);

namespace WSAL\Plugin_Sensors;

use WSAL\Controllers\Alert_Manager;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( '\WSAL\Plugin_Sensors\WPFS_Sensor' ) ) {
	/**
	 * Custom sensor for Member Press plugin.
	 *
	 * @since latest
	 */
	class WPFS_Sensor {

		/**
		 * Here you can code your own custom sensors for triggering your custom events.
		 */
		public static function init() {
			// Call to parent constructor.
			add_action( 'wfcm_wsal_file_modified', array( __CLASS__, 'detect_wfcm_file_modified' ) );
			add_action( 'wfcm_wsal_file_added', array( __CLASS__, 'detect_wfcm_file_added' ) );
			add_action( 'wfcm_wsal_file_deleted', array( __CLASS__, 'detect_wfcm_file_deleted' ) );
			add_action( 'wfcm_wsal_file_size_exceeded', array( __CLASS__, 'detect_wfcm_file_size_exceeded' ), 10, 1 );
			add_action( 'wfcm_wsal_file_scan_started', array( __CLASS__, 'detect_wfcm_file_scan_started' ) );
			add_action( 'wfcm_wsal_file_scan_stopped', array( __CLASS__, 'detect_wfcm_file_scan_stopped' ) );
			add_action( 'wfcm_wsal_file_limit_exceeded', array( __CLASS__, 'detect_wfcm_file_limit_exceeded' ), 10, 1 );
		}

		public static function detect_wfcm_file_modified() {
			if ( ! Alert_Manager::was_triggered_recently( 6028 ) ) {
				Alert_Manager::trigger_event(
					6028
				);
			}
		}

		public static function detect_wfcm_file_added() {
			if ( ! Alert_Manager::was_triggered_recently( 6029 ) ) {
				Alert_Manager::trigger_event(
					6029
				);
			}
		}

		public static function detect_wfcm_file_deleted() {
			if ( ! Alert_Manager::was_triggered_recently( 6030 ) ) {
				Alert_Manager::trigger_event(
					6030
				);
			}
		}

		public static function detect_wfcm_file_size_exceeded( $files_over_limit ) {
			foreach ( $files_over_limit as $file ) {
				$variables = array(
					'File'         => basename( $file ),
					'FileLocation' => $file,
				);
				Alert_Manager::trigger_event(
					6031,
					$variables
				);
			}
		}

		public static function detect_wfcm_file_scan_started() {
			$variables = array(
				'ScanStatus' => __( 'started', '‘website-file-changes-monitor' ),
				'EventType'  => __( 'started', '‘website-file-changes-monitor' ),
			);
			Alert_Manager::trigger_event(
				6033,
				$variables
			);
		}

		public static function detect_wfcm_file_scan_stopped() {
			$variables = array(
				'ScanStatus' => __( 'finished', '‘website-file-changes-monitor' ),
				'EventType'  => __( 'stopped', '‘website-file-changes-monitor' ),
			);
			Alert_Manager::trigger_event(
				6033,
				$variables
			);
		}

		public static function detect_wfcm_file_limit_exceeded( $path_to_scan ) {
			$variables = array(
				'ScanStatus' => __( 'stopped', '‘website-file-changes-monitor' ),
			);
			Alert_Manager::trigger_event(
				6032,
				$variables
			);
		}
	}
}
