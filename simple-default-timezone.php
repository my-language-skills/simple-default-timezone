<?php

/*
* Plugin Name: Simple default timezone
* Plugin URI: https://github.com/my-language-skills/simple-default-timezone
* Description: This plugin gives network administrators ability to set default time zone in all blogs of multisite and blocking ability to change it from single site settings.
* Version: 1.0.1
* Author: My Language Skills team
* Author URI: https://github.com/my-language-skills
* Based on: https://premium.wpmudev.org/forums/topic/set-default-timezone-for-new-blogs-in-the-network
* Network: True
* Text Domain: simple-default-timezone
* Domain Path: /languages
*/

// If this file is called directly, abort.
defined ("ABSPATH") or die ("No script assholes!");


//Creating new field in Network Settings page
add_action('wpmu_options', 'sdt_add_settings_section');
function sdt_add_settings_section (){
	$gmt_offset = get_site_option('sdt_network_timezone');
    ?>
    <h2><?php _e('Timezone Settings', 'simple-default-timezone'); ?></h2>
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row"><?php _e('Default Timezone','simple-default-timezone'); ?></th>
                <td>
                    <label>
                        <select id="sdt_network_timezone" name="sdt_network_timezone">
							<option <?php if('-12' == $gmt_offset){ echo 'selected'; }?> value="-12">UTC-12</option>
							<option <?php if('-11.5' == $gmt_offset){ echo 'selected'; }?> value="-11.5">UTC-11:30</option>
							<option <?php if('-11' == $gmt_offset){ echo 'selected'; }?> value="-11">UTC-11</option>
							<option <?php if('-10.5' == $gmt_offset){ echo 'selected'; }?> value="-10.5">UTC-10:30</option>
							<option <?php if('-10' == $gmt_offset){ echo 'selected'; }?> value="-10">UTC-10</option>
							<option <?php if('-9.5' == $gmt_offset){ echo 'selected'; }?> value="-9.5">UTC-9:30</option>
							<option <?php if('-9' == $gmt_offset){ echo 'selected'; }?> value="-9">UTC-9</option>
							<option <?php if('-8.5' == $gmt_offset){ echo 'selected'; }?> value="-8.5">UTC-8:30</option>
							<option <?php if('-8' == $gmt_offset){ echo 'selected'; }?> value="-8">UTC-8</option>
							<option <?php if('-7.5' == $gmt_offset){ echo 'selected'; }?> value="-7.5">UTC-7:30</option>
							<option <?php if('-7' == $gmt_offset){ echo 'selected'; }?> value="-7">UTC-7</option>
							<option <?php if('-6.5' == $gmt_offset){ echo 'selected'; }?> value="-6.5">UTC-6:30</option>
							<option <?php if('-6' == $gmt_offset){ echo 'selected'; }?> value="-6">UTC-6</option>
							<option <?php if('-5.5' == $gmt_offset){ echo 'selected'; }?> value="-5.5">UTC-5:30</option>
							<option <?php if('-5' == $gmt_offset){ echo 'selected'; }?> value="-5">UTC-5</option>
							<option <?php if('-4.5' == $gmt_offset){ echo 'selected'; }?> value="-4.5">UTC-4:30</option>
							<option <?php if('-4' == $gmt_offset){ echo 'selected'; }?> value="-4">UTC-4</option>
							<option <?php if('-3.5' == $gmt_offset){ echo 'selected'; }?> value="-3.5">UTC-3:30</option>
							<option <?php if('-3' == $gmt_offset){ echo 'selected'; }?> value="-3">UTC-3</option>
							<option <?php if('-2.5' == $gmt_offset){ echo 'selected'; }?> value="-2.5">UTC-2:30</option>
							<option <?php if('-2' == $gmt_offset){ echo 'selected'; }?> value="-2">UTC-2</option>
							<option <?php if('-1.5' == $gmt_offset){ echo 'selected'; }?> value="-1.5">UTC-1:30</option>
							<option <?php if('-1' == $gmt_offset){ echo 'selected'; }?> value="-1">UTC-1</option>
							<option <?php if('-0.5' == $gmt_offset){ echo 'selected'; }?> value="-0.5">UTC-0:30</option>
							<option <?php if('0' == $gmt_offset){ echo 'selected'; }?> value="0">UTC+0</option>
							<option <?php if('0.5' == $gmt_offset){ echo 'selected'; }?> value="0.5">UTC+0:30</option>
							<option <?php if('1' == $gmt_offset){ echo 'selected'; }?> value="1">UTC+1</option>
							<option <?php if('1.5' == $gmt_offset){ echo 'selected'; }?> value="1.5">UTC+1:30</option>
							<option <?php if('2' == $gmt_offset){ echo 'selected'; }?> value="2">UTC+2</option>
							<option <?php if('2.5' == $gmt_offset){ echo 'selected'; }?> value="2.5">UTC+2:30</option>
							<option <?php if('3' == $gmt_offset){ echo 'selected'; }?> value="3">UTC+3</option>
							<option <?php if('3.5' == $gmt_offset){ echo 'selected'; }?> value="3.5">UTC+3:30</option>
							<option <?php if('4' == $gmt_offset){ echo 'selected'; }?> value="4">UTC+4</option>
							<option <?php if('4.5' == $gmt_offset){ echo 'selected'; }?> value="4.5">UTC+4:30</option>
							<option <?php if('5' == $gmt_offset){ echo 'selected'; }?> value="5">UTC+5</option>
							<option <?php if('5.5' == $gmt_offset){ echo 'selected'; }?> value="5.5">UTC+5:30</option>
							<option <?php if('5.75' == $gmt_offset){ echo 'selected'; }?> value="5.75">UTC+5:45</option>
							<option <?php if('6' == $gmt_offset){ echo 'selected'; }?> value="6">UTC+6</option>
							<option <?php if('6.5' == $gmt_offset){ echo 'selected'; }?> value="6.5">UTC+6:30</option>
							<option <?php if('7' == $gmt_offset){ echo 'selected'; }?> value="7">UTC+7</option>
							<option <?php if('7.5' == $gmt_offset){ echo 'selected'; }?> value="7.5">UTC+7:30</option>
							<option <?php if('8' == $gmt_offset){ echo 'selected'; }?> value="8">UTC+8</option>
							<option <?php if('8.5' == $gmt_offset){ echo 'selected'; }?> value="8.5">UTC+8:30</option>
							<option <?php if('8.75' == $gmt_offset){ echo 'selected'; }?> value="8.75">UTC+8:45</option>
							<option <?php if('9' == $gmt_offset){ echo 'selected'; }?> value="9">UTC+9</option>
							<option <?php if('9.5' == $gmt_offset){ echo 'selected'; }?> value="9.5">UTC+9:30</option>
							<option <?php if('10' == $gmt_offset){ echo 'selected'; }?> value="10">UTC+10</option>
							<option <?php if('10.5' == $gmt_offset){ echo 'selected'; }?> value="10.5">UTC+10:30</option>
							<option <?php if('11' == $gmt_offset){ echo 'selected'; }?> value="11">UTC+11</option>
							<option <?php if('11.5' == $gmt_offset){ echo 'selected'; }?> value="11.5">UTC+11:30</option>
							<option <?php if('12' == $gmt_offset){ echo 'selected'; }?> value="12">UTC+12</option>
							<option <?php if('12.75' == $gmt_offset){ echo 'selected'; }?> value="12.75">UTC+12:45</option>
							<option <?php if('13' == $gmt_offset){ echo 'selected'; }?> value="13">UTC+13</option>
							<option <?php if('13.75' == $gmt_offset){ echo 'selected'; }?> value="13.75">UTC+13:45</option>
							<option <?php if('14' == $gmt_offset){ echo 'selected'; }?> value="14">UTC+14</option>
                        </select>
                    <p class="description"><?php _e('This value will be applied to all blogs in multisite.','simple-default-timezone'); ?></p>
                    </label>
                </td>
            </tr>
        </tbody>
    </table>
    <?php
}


//Applying option update over all sites
add_action( 'update_wpmu_options', 'sdt_update_option' );
function sdt_update_option() {

	if( isset( $_POST['sdt_network_timezone'] ) ){
    	update_site_option( 'sdt_network_timezone', filter_var($_POST['sdt_network_timezone'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ));
    	$blogs_ids = get_sites(['fields' => 'ids']);
		$gmt_offset = get_site_option('sdt_network_timezone');
		foreach($blogs_ids as $blog_id){
			switch_to_blog( $blog_id );
			update_option('gmt_offset', $gmt_offset);
		}
		restore_current_blog();
	}
}

//Blocking changing of timezone in single sites
add_action( 'admin_head', 'sdt_deactivate_time_zone' );
function sdt_deactivate_time_zone() {
	?>
	<script type="text/javascript">
	jQuery(function($){
		$('#timezone_string').attr('disabled', true);
		$('#timezone_string').after('<input type="hidden" name="timezone_string" value="'+ $('#timezone_string option:selected').val() +'">');
		$('#timezone-description').text(__('You are not allowed to change timezone. Please, contact network administrator.', 'simple-default-timezone');
	});
	</script>
	<?php
}

/**
 * For Internalization
 * It loads the MO file for plugin's translation from the folder ./languages
 *
 * @param void
 *
 * @since 1.0.1
 * @author Davide Cazzorla @davideC00
 *
 * @return void
 */
	function sdt_load_plugin_textdomain() {
    load_plugin_textdomain( 'simple-default-timezone', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}

/**
 * For Internalization
 * Called when the activated plugin has been loaded
 */
add_action( 'plugins_loaded', 'sdt_load_plugin_textdomain' );
