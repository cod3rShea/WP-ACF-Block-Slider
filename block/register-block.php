<?php 
      function acf_slider_register_blocks() {
      	if( ! function_exists('acf_register_block') )
      		return;
      	

      	acf_register_block( array(
                  'name'              => 'acf-slider',
                  'title'             => __('Carousel'),
                  'description'       => __('A simple carousel block'),
                  'render_callback'   => 'acf_icon_title_callback',
                  'category'          => 'formatting',
                  'icon'              => 'images-alt',
                  'mode'              => 'preview',
                  'keywords'          => array( 'carousel', 'slider')
      	));

      }
      add_action('acf/init', 'acf_slider_register_blocks' );
?>