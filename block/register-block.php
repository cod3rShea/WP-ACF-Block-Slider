<?php 
      function acf_slider_block_function() {
      	if( ! function_exists('acf_register_block') )
      		return;
      	

      	acf_register_block( array(
                  'name'              => 'acf-slider-block',
                  'title'             => __('ACF Slider Block'),
                  'description'       => __('This will add a ACF slider Block'),
                  'render_callback'   => 'acf_slider_block_callback',
                  'category'          => 'formatting',
                  'icon'              => 'images-alt',
                  'mode'              => 'preview',
                  'keywords'          => array( 'Slider', 'Owl', 'carousel')
      	));

      }
      add_action('acf/init', 'acf_slider_block_function' );
?>

