<?php 
	function acf_carousel_callback() {
		if( have_rows('acf_slider_repeater') ): ?>
			<div id="owl" class="owl-carousel owl-theme">
				<?php while( have_rows('acf_slider_repeater') ): the_row(); 
					$acf_slider_repeater_background_image = get_sub_field('acf_slider_repeater_background_image');
				?>
			        <div class="item" style="background: <?php echo "url('" . $acf_slider_repeater_background_image . "') no-repeat center"; ?>">
			            <?php 
							if( have_rows('acf_slider_repeater_content_group') ):
								while ( have_rows('acf_slider_repeater_content_group') ) : the_row();
								    $acf_slider_group_content_background_color = get_sub_field('acf_slider_group_content_background_color');
								    $acf_slider_group_content_text = get_sub_field('acf_slider_group_content_text');
								    $acf_slider_group_content_text_color = get_sub_field('acf_slider_group_content_text_color');
								    
								?>
									<div class='acf-block-slider-content' style="color:<?php echo $acf_slider_group_content_text_color; ?>; background-color:<?php echo $acf_slider_group_content_background_color;?>;" >
								    	<?php 
										    if ($acf_slider_group_content_text !="") {
										    	echo $acf_slider_group_content_text;
										    }
										?>
									</div>
								<?php endwhile;
							else :
							// no rows found
							endif;

							if( have_rows('acf_slider_repeater_button_group') ):
								$i = 1;
								while ( have_rows('acf_slider_repeater_button_group') ) : the_row();
								    $acf_slider_button_group_button_text = get_sub_field('acf_slider_button_group_button_text');
								    $acf_slider_button_group_button_url = get_sub_field('acf_slider_button_group_button_url');	
								    $acf_slider_button_group_button_color = get_sub_field('acf_slider_button_group_button_color');
								    $acf_slider_button_group_text_color = get_sub_field('acf_slider_button_group_text_color');
								    $acf_slider_button_group_hover_color = get_sub_field('acf_slider_button_group_hover_color');
								    $acf_slider_button_group_hover_text_color = get_sub_field('acf_slider_button_group_hover_text_color');
								?>

								<a class="acf-block-slider-button acf-block-slider-button-<?php echo $i ?>" href="<?php echo $acf_slider_button_group_button_url ?>" style="background-color: <?php echo $acf_slider_button_group_button_color;?>; color:<?php echo $acf_slider_button_group_text_color;?>;"> <?php echo $acf_slider_button_group_button_text; ?> </a>
								<style>
									 .item .acf-block-slider-button-<?php echo $i ?>:hover {
									  background-color: <?php echo $acf_slider_button_group_hover_color;  ?>;
									  color: <?php echo $acf_slider_button_group_hover_text_color; ?>;
									 }
								</style>

								<?php $i++; ?>
 								<?php endwhile;
							else :
							// no rows found
							endif;
						?>
					</div>
				<?php endwhile; ?>
		    </div>
		<?php endif;?>
		<script>
			 jQuery( document ).ready(function($) {
			    $('.owl-carousel').owlCarousel({
				    loop:true,
				    margin:10,
				    nav:false,
				    items:1,
					autoplay:true,
				    autoplayTimeout:10000,
				    autoplayHoverPause:true
				});
			});
		</script>
	<?php }
?>
