<article>
	<div class="container overflow-hidden pt-5 pb-5">
		<h2 class="text-uppercase h3">Important Announcements</h2>
		<div class="horizon-bar mb-5"></div>
		<div class="row gx-5">
			<div class="col-lg-6 pt-5">
					<?php
						// the query
						$the_query = new WP_Query( array(
							'category_name' => 'news',
							'posts_per_page' => 1,
						));
					?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<h2 class="h1"><?php the_title(); ?></h2>
							<p><?php the_excerpt(); ?></p>
						<?php endwhile; ?>
					
				</div>
				<div class="col-lg-6">
					<?php $featImg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full' );?>
					<img src="<?php echo $featImg[0]; ?>" class="img-fluid" alt="<?php the_title(); ?>" loading="lazy" />
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php __('No News'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</article>