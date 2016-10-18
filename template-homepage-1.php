<?php
/*
* Template Name: Home with Full Slider
*/
?>

	<?php get_header(); ?>
		<div class="desktop">
				<section id="section1">
                    <div id="video_container">
	                    <?php echo do_shortcode("[hslide id=1]"); ?>
					</div>
				</section>
			</div>

		<div id="main" class="clearfix">
			<?php if(function_exists('child_pages')) child_pages("id=".$post->ID."&class=cp&childs=true"); ?>
		</div>

	<?php get_footer(); ?>