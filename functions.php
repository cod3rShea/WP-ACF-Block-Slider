<?php
/**
 * Plugin Name: ACF Slider Block
 * Plugin URI:  
 * Description: This will allow for a slider Block. Must use ACF to use this extension.
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

 ?>