<?php 
      function acf_block_boilerplate_function() {
      	if( ! function_exists('acf_register_block') )
      		return;
      	

      	acf_register_block( array(
                  'name'              => 'acf-block-boilerplate',
                  'title'             => __('ACF Block Boilerplate'),
                  'description'       => __('This is a ACF Block Boilerplate '),
                  'render_callback'   => 'acf_block_boilerplate_callback',
                  'category'          => 'formatting',
                  'icon'              => 'images-alt',
                  'mode'              => 'preview',
                  'keywords'          => array( 'ACF Block', 'ACF', 'Boilerplater')
      	));

      }
      add_action('acf/init', 'acf_block_boilerplate_function' );
?>