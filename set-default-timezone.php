<?php 

/**
 * @package Time zone
 * @version 1
 */
/*
Plugin Name: Set default timezone
Plugin URI: http://wordpress.org/plugins/set_default_timezone/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Toni Devís
Version: 1
Author URI: http://ma.tt/
* https://premium.wpmudev.org/forums/topic/set-default-timezone-for-new-blogs-in-the-network
*/
 
/* all the settings page in the multisite are missing */

add_action('init', 'set_default_timezone');
function set_default_timezone() {
	$blogs = wp_get_sites();
	foreach($blogs as $blog){
		switch_to_blog( $blog['blog_id'] );
		update_option('gmt_offset', 6);
		restore_current_blog();
	}
}

add_action( 'admin_head', 'deactivate_time_zone' );
function deactivate_time_zone() {
	?>
	<script type="text/javascript">
	jQuery(function($){
		$('#timezone_string').attr('disabled', 'disabled');
	});
	</script>
	<?php
}
