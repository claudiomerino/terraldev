<?php
/*
* Template Name: Promociones
*/
?>

	<?php get_header(); ?>

		<!--main-->
		<div id="main" class="clearfix">
			<div id="intro" class="clearfix block">
				<div class="container">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-float">
							<div class="clearfix">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/imag/auxi/shape.png" class="no-float" />
							</div>
							<? the_content();?>
						</div>
					<?php endwhile; else: ?>
						<div class="col-xs-12">
							<p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!--/main-->

	<?php get_footer(); ?>