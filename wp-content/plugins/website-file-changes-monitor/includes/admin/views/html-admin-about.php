<?php
/**
 * About tab.
 *
 * @package wfcm
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$plugins_data = array(
	array(
		'img'  => trailingslashit( WFCM_BASE_URL ) . 'assets/img/about/wp-security-audit-log-img.jpg',
		'desc' => __( 'Keep a log of users & under the hood activity on WordPress', 'website-file-changes-monitor' ),
		'alt'  => 'WP Security Audit Log', // this is a name and intentionally not translated.
		'link' => 'https://melapress.com/wordpress-activity-log/?utm_source=plugins&utm_medium=link&utm_campaign=wfcm',
	),
	array(
		'img'  => trailingslashit( WFCM_BASE_URL ) . 'assets/img/about/wp-2fa.jpg',
		'desc' => __( 'Add an extra layer of security to your login pages with 2FA & require your users to use it.', 'website-file-changes-monitor' ),
		'alt'  => 'WP 2FA', // this is a name and intentionally not translated.
		'link' => 'https://melapress.com/wordpress-2fa/?utm_source=plugins&utm_medium=link&utm_campaign=wfcm',
	),
    array(
		'img'  => trailingslashit( WFCM_BASE_URL ) . 'assets/img/about/c4wp.jpg',
		'desc' => __( 'Protect website forms & login pages from spambots & automated attacks.', 'website-file-changes-monitor' ),
		'alt'  => 'CAPTCHA 4WP', // this is a name and intentionally not translated.
		'link' => 'https://melapress.com/wordpress-captcha/?utm_source=plugins&utm_medium=link&utm_campaign=wfcm',
	),
	array(
		'img'  => trailingslashit( WFCM_BASE_URL ) . 'assets/img/melapress-login-security-logo-full-colour-horiz.svg',
		'desc' => __( 'Enforce strong password policies on your WordPress websites', 'website-file-changes-monitor' ),
		'alt'  => 'WPassword', // this is a name and intentionally not translated.
		'link' => 'https://melapress.com/wordpress-login-security/?utm_source=plugins&utm_medium=link&utm_campaign=wfcm',
	),
	array(
		'img'  => trailingslashit( WFCM_BASE_URL ) . 'assets/img/about/activity-log-for-mainwp.jpg',
		'desc' => __( 'See the child sites activity logs from the central MainWP dashboard', 'website-file-changes-monitor' ),
		'alt'  => 'Activity Log for MainWP', // this is a name and intentionally not translated.
		'link' => 'https://melapress.com/wordpress-activity-log/features/?utm_source=plugins&utm_medium=link&utm_campaign=wfcm',
	),
);

?>
<br>
<p class="wfcm-about-logo"><a href="https://melapress.com/?utm_source=plugin&utm_medium=referral&utm_campaign=WFCM&utm_content=help+page" target="_blank"><img src="<?php echo esc_url( WFCM_BASE_URL . 'assets/img/melapress-logo-horiz.svg' ); ?>" alt="<?php esc_attr_e( 'WP White Security', 'website-file-changes-monitor' ); ?>"></a></p>
<p><?php /* Translators: 1. WP plugins hyperlink 2. Contact form hyperlink */ echo sprintf( esc_html__( 'The WP File Changes Monitor plugin is developed by WP White Security, developers of %1$s. If you would like to get in touch with us, please use our %2$s.', 'website-file-changes-monitor' ), '<a href="https://melapress.com/?utm_source=plugins&utm_medium=link&utm_campaign=wfcm" target="_blank">' . esc_html__( 'high-quality niche WordPress security and admin plugins', 'website-file-changes-monitor' ) . '</a>', '<a href="https://melapress.com/contact/?utm_source=plugins&utm_medium=link&utm_campaign=wfcm" target="_blank">' . esc_html__( 'contact form', 'website-file-changes-monitor' ) . '</a>' ); ?></p>
<div class="our-wordpress-plugins full">
	<h3><?php esc_html_e( 'Our WordPress Plugins', 'website-file-changes-monitor' ); ?></h3>
	<ul>
		<?php foreach ( $plugins_data as $data ) : ?>
			<li>
				<div class="plugin-box">
					<div class="plugin-img">
						<img src="<?php echo esc_url( $data['img'] ); ?>" alt="<?php echo esc_attr( $data['alt'] ); ?>">
					</div>
					<div class="plugin-desc">
						<p><?php echo esc_html( $data['desc'] ); ?></p>
						<div class="cta-btn">
							<a href="<?php echo esc_url( $data['link'] ); ?>" target="_blank"><?php esc_html_e( 'LEARN MORE', 'website-file-changes-monitor' ); ?></a>
						</div>
					</div>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
