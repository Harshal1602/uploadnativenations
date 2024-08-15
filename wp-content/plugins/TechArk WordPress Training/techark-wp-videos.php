<?php 
/*
Plugin Name: TechArk WordPress Training
Description: TechArk WordPress Training
Author: TechArk Solutions
Author URI: http://gotechark.com/
Version: 1.0.1
*/

define( 'TC_URL', plugins_url( null, __FILE__ ) );
define( 'TC_ADMIN_URL', 'https://videos.gotechark.com');

function enqueue_scripts() {
	wp_enqueue_style(
		'wp101-admin',
		TC_URL.'/css/tcvid_main.css',
		null,
		time(),
		'all'
	);

	wp_enqueue_script(
		'wp101-admin',
		TC_URL.'/js/tcvid_main.js',
		array( 'jquery'),
		time(),
		true
	);

}
add_action( 'admin_enqueue_scripts', 'enqueue_scripts' );


// Register the menu
add_action( "admin_menu", "gh_plugin_menu_func" );
function gh_plugin_menu_func() {
	
	 add_menu_page(   
		"TechArk WP Videos",               // Page title
		"TechArk  WP Videos",               // Menu title
		"manage_options",       // Minimum capability (manage_options is an easy way to target Admins)
		"techark_wp_videos",               // Menu slug
		"techark_wp_videos_listing",     // Callback that prints the markup
		"dashicons-video-alt3",
		80
	);
	
    add_submenu_page(   
		"techark_wp_videos",  // Which menu parent
		"Settings",               // Page title
		"Settings",               // Menu title
		"manage_options",       // Minimum capability (manage_options is an easy way to target Admins)
		"techark_wp_video_settings",               // Menu slug
		"gh_plugin_options"
	);
}

function gh_plugin_options() {

    if ( !current_user_can( "manage_options" ) )  {
        wp_die( __( "You do not have sufficient permissions to access this page." ) );
    }
	
	$tc_client_key = get_option('tc_client_key'); 
	
	if(!empty($tc_client_key)){
	
			
		$url = TC_ADMIN_URL.'/wp-content/plugins/techark-videos-domains/API/v1/check_key.php?activation_key=' . $tc_client_key;
		$request = wp_remote_get($url);
			
	
		if(isset($request->errors) & !empty($request->errors)){
			$msg = $request->errors['http_request_failed'][0];
		} else {
			$response = wp_remote_retrieve_body( $request );
			$response = json_decode( $response ); 
			
			if($response->status == 'yes'){
				if(empty($response->active)){
					$msg  = 'Your account is deactivated.';
				} else {
					$msg = 'Your key is successfully registered.';
				}

			} else {
				$msg =  'Your key is not registerd with us.';
			}
		}
			
			
	} else {
		$msg =  'Please provide authorization key to proceed.';
	}

    if ( isset($_GET['status']) && $_GET['status']=='success') { 
    ?>
        <div id="message" class="updated notice is-dismissible">
            <p><?php _e("Settings updated!"); ?></p>
            <button type="button" class="notice-dismiss">
                <span class="screen-reader-text"><?php _e("Dismiss this notice.", "github-api"); ?></span>
            </button>
        </div>
    <?php
    }

    ?>
   <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

    <form method="post" action="<?php echo admin_url( 'admin-post.php'); ?>">

        <input type="hidden" name="action" value="tcac_submit" />
        
        <h3>Techark WP Video Settings</h3>

        <p>
            <label><?php _e("Authorize Key:", ""); ?></label>
            <input class="" type="password" name="tc_client_key" value="<?php echo get_option('tc_client_key'); ?>" />
			<input class="button button-primary" type="submit" value="<?php _e("Authorize"); ?>" />
        </p>
    </form>
	<div>
		<?php 
		if(!empty($msg)){
			echo '<h2>'.$msg.'</h2>';
		}
		?>
	</div>
<?php

}

add_action( 'admin_post_tcac_submit', 'handle_oauth' );

function handle_oauth() {

    // If the form was just submitted, save the values
    // (Step 1 above)
    if (isset($_POST["action"]) && !empty($_POST["tc_client_key"])  ) {
        
        update_option( "tc_client_key", $_POST["tc_client_key"], TRUE );

    }
	
	 // set in the fourth parameter of add_submenu_page() above.
    $redirect_url = get_bloginfo("url") . "/wp-admin/options-general.php?page=techark_wp_video_settings&status=success";
    header("Location: ".$redirect_url);
    exit;

}


function techark_wp_videos_listing(){
	
	if ( !current_user_can( "manage_options" ) )  {
        wp_die( __( "You do not have sufficient permissions to access this page." ) );
    }
	
	$tc_client_key = get_option('tc_client_key'); 
	
	if(!empty($tc_client_key)){
	
			
			$url = TC_ADMIN_URL.'/wp-content/plugins/techark-videos-domains/API/v1/videos_list.php?activation_key=' . $tc_client_key;
			
			$request = wp_remote_get($url);
			if(isset($request->errors) & !empty($request->errors)){
				$msg = $request->errors['http_request_failed'][0];
			} else {
				
				$response = wp_remote_retrieve_body( $request );
				
				$response = json_decode( $response ); 
				if($response->status == 'yes'){
					if(empty($response->active)){
						$msg  = 'Your account is deactivated.';
					} else {
						$msg = 'Your key is successfully registered.';
					}

				} else {
					$msg =  'Your key did not registerd with us.';
				}
			}
			
			
	} else {
		$msg =  'Please provide authorize key with us.';
	}
	
	?>
	<h3>Techark WP Video Tutorials</h3>
	<?php 
	if(isset($response) && $response->status == 'yes'){
		if($response->active == 1){
			$src = '';
			$heading = '';
			
			if(!empty($response->videos)):
				$src = $response->videos[0]->url;
				$heading = $response->videos[0]->name;
			endif;
		?>
		<main class="tc-media">
			<h2 id="tc-player-title">
				<?php echo $heading; ?>
			</h2>
			<div class="tc-player-wrap">
				<iframe id="tc-player" src="<?php echo $src; ?>" allowfullscreen></iframe>
			</div>
		</main>
		
			<?php 
			if(!empty($response->videos)):
			?>
			<nav class="tc-playlist card">
			<div class="tc-series">
				<ol class="tc-topics-list">
				<?php 
				$i = 1;
				foreach ( $response->videos  as $video ) : 
					$name = $video->name;
					$url = $video->url;
					$password = $video->password;
					
					$class='';
					if($i == 1){
						$class='active';
					}
				?>
					<li>
						<a class="single_video <?php echo $class; ?>" data-media-title="<?php echo esc_attr( $name ); ?>" data-media-src="<?php echo esc_attr( $url ); ?>"><?php echo esc_html( $name ); ?></a>
						<?php 
						if(!empty($password)){
							?><span class="dashicons dashicons-privacy" title="<?php echo $password; ?>"></span><?php
						}
						?>
					</li>
				<?php $i++; endforeach; ?>
				</ol>
			</div>
			</nav>
			<?php
			else:
				echo '<h2>No videos found.</h2>';
			endif;
			?>
		
		<?php 
		} else {
			echo '<h2>'.$msg.'</h2>';
		}
		
	} else {
		echo '<h2>'.$msg.'</h2>';
	}
	
}

?>