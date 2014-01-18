<?php
/*
Plugin Name: Prevent Image Linking
Plugin URI: http://stomptheweb.co.uk
Description: Turns off images linking to themselves by default in the WP Editor
Version: 1.0.0
Author: Steven Jones
Author URI: http://stomptheweb.co.uk/
License: GPL2
*/

function imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );
    
    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'imagelink_setup', 10);