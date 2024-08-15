<?php
/**
 * Website File Changes Monitor.
 *
 * @package wfcm
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Main Plugin Class.
 */
final class Website_File_Changes_Monitor {

	/**
	 * Plugin version.
	 *
	 * @var string
	 */
  	public $version = '1.9.0';

	/**
	 * Single instance of the plugin.
	 *
	 * @var Website_File_Changes_Monitor
	 */
	protected static $instance = null;

	/**
	 * Main WP File Changes Monitor Instance.
	 *
	 * Ensures only one instance of WP File Changes Monitor is loaded or can be loaded.
	 *
	 * @return Website_File_Changes_Monitor
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->define_constants();
		$this->includes();
		$this->register_hooks();

		//  initialize background processes
		new WFCM_Background_Event_Deletion();
		new WFCM_Background_Scanner();
		new WFCM_Background_Check_For_Changes();

		do_action( 'website_file_changes_monitor_loaded' );
	}

	/**
	 * Define constants.
	 */
	public function define_constants() {
		$uploads_dir = wp_upload_dir();

		$this->define( 'WFCM_VERSION', $this->version );
		$this->define( 'WFCM_BASE_NAME', plugin_basename( WFCM_PLUGIN_FILE ) );
		$this->define( 'WFCM_BASE_URL', trailingslashit( plugin_dir_url( WFCM_PLUGIN_FILE ) ) );
		$this->define( 'WFCM_BASE_DIR', trailingslashit( plugin_dir_path( WFCM_PLUGIN_FILE ) ) );
		$this->define( 'WFCM_REST_NAMESPACE', 'website-file-changes-monitor/v1' );
		$this->define( 'WFCM_OPT_PREFIX', 'wfcm_' );
		$this->define( 'WFCM_OPT_PREFIX_OLD', 'wfcm-' );
		$this->define( 'WFCM_MIN_PHP_VERSION', '5.5.0' );
		$this->define( 'WFCM_UPLOADS_DIR', trailingslashit( $uploads_dir['basedir'] ) );
		$this->define( 'WFCM_LOGS_DIR', 'wfcm-logs' );
		$this->define( 'WFCM_FILE_EVENTS_TABLE', 'wfcm_file_events' );
	}

	/**
	 * Define constant if not defined already.
	 *
	 * @param string $name  - Constant name.
	 * @param string $value - Constant value.
	 */
	public function define( $name, $value ) {
		if ( ! defined( $name ) ) {
			define( $name, $value );
		}
	}

	/**
	 * Include plugin files.
	 */
	public function includes() {
		require_once WFCM_BASE_DIR . 'includes/class-wfcm-autoloader.php';
		require_once WFCM_BASE_DIR . 'includes/interface-wfcm-hash-comparator.php';
		require_once WFCM_BASE_DIR . 'includes/wfcm-functions.php';
		require_once WFCM_BASE_DIR . 'includes/class-wfcm-post-types.php';
		require_once WFCM_BASE_DIR . 'includes/class-wfcm-monitor.php';
		require_once WFCM_BASE_DIR . 'includes/class-wfcm-rest-api.php';

		// Data stores.
		require_once WFCM_BASE_DIR . 'includes/data-stores/class-wfcm-database-data-store.php';
		require_once WFCM_BASE_DIR . 'includes/data-stores/class-wfcm-events-data.php';

		if ( is_admin() ) {
			require_once WFCM_BASE_DIR . 'includes/admin/class-wfcm-admin.php';
		}

		// plugin, themes and core install/upgrade/delete monitoring
		require_once WFCM_BASE_DIR . 'includes/class-wfcm-plugins.php';
		require_once WFCM_BASE_DIR . 'includes/class-wfcm-themes.php';
		require_once WFCM_BASE_DIR . 'includes/class-wfcm-system.php';
		require_once WFCM_BASE_DIR . 'includes/class-wfcm-upgrader.php';

		// WSAL Events
		require_once WFCM_BASE_DIR . 'includes/wsal-events/sensor-functions.php';

		//  background processes
		require_once WFCM_BASE_DIR . 'includes/bg/class-wfcm-background-event-deletion.php';
		require_once WFCM_BASE_DIR . 'includes/bg/class-wfcm-background-scanner.php';
		require_once WFCM_BASE_DIR . 'includes/bg/class-wfcm-background-check-changes.php';
	}

	/**
	 * Checks if the plugin has just been updated and runs any update routines
	 * before the rest of the plugin is setup. After it's done it updates the
	 * `plugin_version` option with the latest version string.
	 *
	 * @method check_updated
	 * @since  1.4.0
	 */
	public function check_updated() {
		$version_key = WFCM_OPT_PREFIX . 'plugin_version';
		$old_version = get_option( $version_key, '0.0.0' );
		if ( WFCM_VERSION !== $old_version ) {
			require_once WFCM_BASE_DIR . 'includes/update/update-wrapper-interface.php';
			require_once WFCM_BASE_DIR . 'includes/update/abstract-update-wrapper.php';
			require_once WFCM_BASE_DIR . 'includes/class-wfcm-update-runner.php';
			$updater = new WFCM_Update_Runner( $old_version, WFCM_VERSION );
			$updater->run();
			// update the option holding the version string.
			update_option( $version_key, WFCM_VERSION );
		}
	}

	/**
	 * Register Hooks.
	 */
	public function register_hooks() {
		register_activation_hook( WFCM_PLUGIN_FILE, 'wfcm_install' );
		add_action( 'init', array( $this, 'check_updated' ) );
		add_action( 'admin_init', array( $this, 'redirect_on_activation' ) );
		add_action( 'admin_notices', array( $this, 'update_wsal_notice' ) );
		add_action( 'current_screen', array( $this, 'init_upgrade_notice' ) );
	}

	public function init_upgrade_notice() {
		global $current_screen;

		if ( ! isset( $current_screen ) ) {
			return;
		}

		if ( 'plugins' === $current_screen->id ) {
			add_action( 'in_plugin_update_message-website-file-changes-monitor/website-file-changes-monitor.php', array( $this, 'plugin_update_message' ), 10, 2 );
		}
	}

	public function plugin_update_message( $data, $response ) {
		$current_version_parts = explode( '.', WFCM_VERSION );
		$new_version_parts     = explode( '.', $response->new_version );

		// If user has already moved to the minor version, we don't need to flag up anything.
		if ( version_compare( $current_version_parts[0] . '.' . $current_version_parts[1] . '.' . $current_version_parts[2], $new_version_parts[0] . '.' . $new_version_parts[1] . '.' . $new_version_parts[2], '>' ) ) {
			//return;
		}

		$upgrade_notice = self::get_upgrade_notice( $response->new_version );

		if ( isset( $upgrade_notice ) && ! empty( $upgrade_notice ) ) {
			printf(
				'</p><div class="update-message">%s</div><p class="dummy">',
				$upgrade_notice // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			);
		}
	}

	private static function get_upgrade_notice( $version ) {
		$transient_name = 'wfcm_upgrade_notice_' . $version;
		$upgrade_notice = get_transient( $transient_name );

		if ( false === $upgrade_notice ) {
			$response = wp_safe_remote_get( 'https://plugins.svn.wordpress.org/website-file-changes-monitor/trunk/readme.txt' );

			if ( ! is_wp_error( $response ) && ! empty( $response['body'] ) ) {
				$upgrade_notice = self::parse_update_notice( $response['body'], $version );
				set_transient( $transient_name, $upgrade_notice, DAY_IN_SECONDS );
			}
		}

		return $upgrade_notice;
	}

	private static function parse_update_notice( $content, $new_version ) {
		$version_parts     = explode( '.', $new_version );
		$check_for_notices = array(
			// $version_parts[0] . '.0', // Major.
			// $version_parts[0] . '.0.0', // Major.
			// $version_parts[0] . '.' . $version_parts[1], // Minor.
			$version_parts[0] . '.' . $version_parts[1] . '.' . $version_parts[2], // Patch.
		);
		$notice_regexp     = '~==\s*Upgrade Notice\s*==\s*=\s*(.*)\s*=(.*)(=\s*' . preg_quote( $new_version ) . '\s*=|$)~Uis';
		$upgrade_notice    = '';

		$style = '';

		foreach ( $check_for_notices as $check_version ) {
			if ( version_compare( WFCM_VERSION, $check_version, '>' ) ) {
				continue;
			}

			$matches = null;
			if ( preg_match( $notice_regexp, $content, $matches ) ) {
				$notices = (array) preg_split( '~[\r\n]+~', trim( $matches[2] ) );

				if ( version_compare( trim( $matches[1] ), $check_version, '=' ) ) {
					$style = '<style>
						.wsal_plugin_upgrade_notice {
							font-weight: normal;
							background: #fff8e5 !important;
							border-left: none !important;
							border-top: 1px solid #ffb900;
							padding: 9px 0 20px 32px !important;
							margin: 0 -12px 0 -20px !important;
						}
						p.wsal_plugin_upgrade_notice::before {
								content: "\f348" !important;
								display: inline-block;
								font: 400 18px/1 dashicons;
								speak: never;
								margin: 0 8px 0 -2px;
								vertical-align: top;
						}
						.dummy {
							display: none;
						}
						.update-message {
							margin: 9px !important;
						}
					</style>';
					$upgrade_notice .= '<p class="wsal_plugin_upgrade_notice">';

					foreach ( $notices as $line ) {
						$upgrade_notice .= preg_replace( '~\[([^\]]*)\]\(([^\)]*)\)~', '<a href="${2}">${1}</a>', $line ) . '<br>';
					}

					$upgrade_notice .= '</p>';

					break;
				}
				continue;
			}
		}

		return $style . ( $upgrade_notice );
	}

	/**
	 * Redirect on activation.
	 */
	 public function redirect_on_activation() {
 		if ( wfcm_get_setting( 'redirect-on-activate', false ) ) {
 			wfcm_delete_setting( 'redirect-on-activate' );

 			// Check for multisite.
 			if ( is_multisite() ) {
 				$redirect_url = add_query_arg( 'page', 'wfcm-file-changes', network_admin_url( 'admin.php' ) );
 			} else {
 				$redirect_url = add_query_arg( 'page', 'wfcm-file-changes', admin_url( 'admin.php' ) );
 			}

 			wp_safe_redirect( $redirect_url );
 			exit();
 		}
 	}

	// Show notice to users of older versions than 4.1.2
	public function update_wsal_notice() {
		if ( defined( 'WSAL_VERSION' ) ) {
			if ( version_compare( WSAL_VERSION , '4.1.2') >= 0 ) {
				delete_site_option( 'wfcm_update_wsal_notice' );
			} else {
				update_site_option( 'wfcm_update_wsal_notice', true );
			}

			if ( get_site_option( 'wfcm_update_wsal_notice' ) ) {
				echo '<div class="notice notice-success">
					<p>'. __( 'The Website File Changes Monitor plugin requires WP Activity Log version 4.1.2. Please upgrade that plugin.', 'website-file-changes-monitor' ) .'</p>
				</div>';
			}
		}
	}

	/**
	 * Error Logger
	 *
	 * Logs given input into debug.log file in debug mode.
	 *
	 * @param mixed $message - Error message.
	 */
	public function error_log( $message ) {
		if ( WP_DEBUG === true ) {
			if ( is_array( $message ) || is_object( $message ) ) {
				error_log( print_r( $message, true ) );
			} else {
				error_log( $message );
			}
		}
	}
}
