<?php 
/**
 * Plugin Name: WP Rocket | Exclude JS scripts from Delay JS only at some URLs
 * Plugin URI: https://github.com/wp-media/wp-rocket-helpers/tree/master/static-files/wp-rocket-static-exclude-delay-js-per-url/
 * Description: Exclude JavaScript files from Delay JS only on specific pages instead of excluding them globally.
 * Version: 1.0
 * Author: WP Rocket Support Team
 * Author URI: https://wp-rocket.me
 * License:	GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright 2021 WP Media <support@wp-rocket.me>
 */

// Namespaces must be declared before any other declaration.
namespace WP_Rocket\Helpers\static_files\exclude\selective_delay_js_exclusions;
function exclude_from_delay( $exclusions ) {
       $exclusions[] = 'ls.unveilhooks.min.js';  
      if(is_page('gallery')) {
            //$exclusions[] = 'jquery-3.6.0.min';
            //$exclusions[] = 'masonry.pkgd.min';  
            //$exclusions[] = 'wow.min.js';  
            //$exclusions[] = 'mCustomScrollbar.js'; 
            //$exclusions[] = 'script.js'; 
            //$exclusions[] = 'gallery.js'; 
      }
       if(is_singular('galleries')) {
             $exclusions[] = 'slick.js';
             $exclusions[] = 'slider.js';  
        }
    return $exclusions;
}
add_filter( 'rocket_delay_js_exclusions',  __NAMESPACE__ . '\exclude_from_delay' );
