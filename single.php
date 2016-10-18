<?php get_header(); ?>

	<main id="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="cont-room">
				<div class="container">
					<h2 class="page-title"><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>

					<?php
						if ( is_active_sidebar('room-inset-sidebar') ) {
							dynamic_sidebar('room-inset-sidebar');
						}
					?>
					<?php $set = ci_featgal_get_attachments(); ?>
					<?php if ( $set->have_posts() ) : ?>
					<div class="room-slider flexslider">
						<ul class="slides">

							<?php while ( $set->have_posts() ) : $set->the_post(); ?>
							<li>
								<a data-rel="prettyPhoto[gal]" href="<?php echo ci_get_image_src($post->ID, 'large'); ?>">
									<img src="<?php echo ci_get_image_src($post->ID, 'ci_fullwidth'); ?>" alt="<?php echo get_the_excerpt(); ?>">
								</a>
							</li>
							<?php endwhile; wp_reset_postdata(); ?>
						</ul>
					</div>
					<?php endif; ?>

					<div class="row">
						<article class="entry amenities shadow">
							<div class="entry-content group">
								<div class="container">
									<?php
										$amenities = get_post_meta($post->ID, 'ci_cpt_room_amenities', true);
										$amenities_title = get_post_meta($post->ID, 'ci_cpt_room_amenities_title', true);
									?>
									<?php if(!empty($amenities) and count($amenities) > 0): ?>
										<?php if(!empty($amenities)): ?><h3><?php echo $amenities_title; ?></h3><?php endif; ?>
										<ul class="list-amenities">
											<?php
												foreach($amenities as $am)
												{
													echo '<li><i class="fa fa-star"></i>'.$am.'</li>';
												}
											?>
										</ul>
									<?php endif; ?>
								</div>
							</div>
						</article>
					</div>
			</div>
		<?php endwhile; endif; ?>
	</main>

<?php get_footer(); ?>