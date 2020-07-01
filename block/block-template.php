<?php 
	function acf_slider_callback() {
		if( have_rows('acf_slider_repeater') ): ?>
		    <ul class="slides">
		    <?php while( have_rows('acf_slider_repeater') ): the_row(); 
		        $acf_slider_repeater_background_image = get_sub_field('acf_slider_repeater_background_image');
		        ?>
		        <li>
		            <?php echo wp_get_attachment_image( $acf_slider_repeater_background_image, 'full' ); ?>
		        </li>
		    <?php endwhile; ?>
		    </ul>
		<?php endif;
	}
?>