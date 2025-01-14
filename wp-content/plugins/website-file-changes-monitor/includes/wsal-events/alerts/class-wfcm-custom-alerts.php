<?php
/**
 * Custom Alerts for WFCM  plugin.
 *
 * Class file for alert manager.
 *
 * @since   1.0.0
 *
 * @package wsal
 * @subpackage wsal-wfcm-forms
 */

declare(strict_types=1);

namespace WSAL\Custom_Alerts;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( '\WSAL\Custom_Alerts\WFCM_Custom_Alerts' ) ) {
	/**
	 * Custom sensor for Gravity Forms plugin.
	 *
	 * @since latest
	 */
	class WFCM_Custom_Alerts {

		/**
		 * Returns the structure of the alerts for extension.
		 *
		 * @return array
		 *
		 * @since latest
		 */
		public static function get_custom_alerts(): array {
			return array(
				__( 'File Changes', 'website-file-changes-monitor' ) => array(
					__( 'Monitor File Changes', 'website-file-changes-monitor' ) => array(
						array(
							6028,
							WSAL_HIGH,
							 __( 'File content has been modified', 'website-file-changes-monitor' ),
							 __( 'Content of file(s) on this website modified. %ReviewChangesLink%', 'website-file-changes-monitor' ),
							 'file',
							 'modified'
						 ),
			
						array(
							6029,
							WSAL_CRITICAL,
							__( 'File added to the site', 'website-file-changes-monitor' ),
							__( 'New file(s) added on this website. %ReviewAdditionsLink%', 'website-file-changes-monitor' ),
							'file',
							'added'
						),
			
						array(
							6030,
							WSAL_MEDIUM,
							__( 'File deleted from the site', 'website-file-changes-monitor' ),
							__( 'File(s) deleted from this website. %ReviewDeletionsLink%', 'website-file-changes-monitor'),
							'file',
							'deleted'
						),
			
						array(
							6031,
							WSAL_INFORMATIONAL,
							__( 'File not scanned because it is bigger than the maximum file size limit', 'website-file-changes-monitor' ),
							__( 'File not scanned because it is bigger than the maximum file size limit %LineBreak% File: %File% %LineBreak% Location: %FileLocation% %LineBreak% %ReviewChangesLink%', 'website-file-changes-monitor' ),
							'system',
							'blocked'
						),
			
						array(
							6032, WSAL_INFORMATIONAL,
							__( 'File integrity scan stopped due to the limit of 200,000 files', 'wp-security-audit-log' ),
							__( 'Your website has more than 200,000 files so the file integrity scanner cannot scan them all. Contact support for more information. %LineBreak% %ContactSupport%', 'website-file-changes-monitor' ),
							'system',
							'blocked'
						),
			
						array(
							6033,
							WSAL_INFORMATIONAL,
							__( 'File integrity scan started/stopped', 'website-file-changes-monitor' ),
							__( 'The file integrity scan has %ScanStatus%.', 'website-file-changes-monitor' ),
							'system',
							'started'
						),
					),
				),
			);
			
		}
	}
}
