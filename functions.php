<?php
/**
 * Plugin Name: Repeater slider Gutten Block.
 * Plugin URI:  seansheadev.com
 * Description: This Plugin will create a custom Block for Guttenburg. This Plugin requires a minimun version 5.8 for Advanced Custom Fields.
 * Version:     1.0
 * Author:      Sean Shea
 * Author URI:  seansheadev.com
 * Text Domain: wporg
 * Domain Path: /languages
 */

// creates the block
include( plugin_dir_path( __FILE__ ) . 'block/register-block.php');

// creates the acf fields using php
include( plugin_dir_path( __FILE__ ) . 'acf/acf-fields.php');

//creates the block template
include( plugin_dir_path( __FILE__ ) . 'block/block-template.php');


// register jquery and style on initialization
add_action('init', 'register_script');
function register_script() {
    wp_register_script( 'owl_slider_script_min', plugins_url('/js/owl.carousel.min.js', __FILE__), array('jquery'), '2.5.1' );

    // wp_register_style( 'owl_slider_style_min', plugins_url('/css/owl.carousel.min.css', __FILE__), false, '1.0.0', 'all');
    wp_register_style( 'owl_slider_style_custom', plugins_url('/css/style.css', __FILE__), false, '1.0.0', 'all');
}

// use the registered jquery and style above
add_action('wp_enqueue_scripts', 'enqueue_style', 20, 1);

function enqueue_style(){
   wp_enqueue_script('owl_slider_script_min');

   // wp_enqueue_style( 'owl_slider_style_min' );
   wp_enqueue_style( 'owl_slider_style_custom' );
}

?>