<section div class="partners">
	<div class="partners__container wrapper">
	<?php
		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'post_type' => 'partner',
			'partner-category' => 'lieferant',
		);

		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<article class="partners__card card">
				<div class="partners__card-container card__container wrapper">
					<a class="section-partner__link" href="<?php the_field( 'partner_url' );?>" target="_blank">
					<?php the_post_thumbnail('full', ['class' => 'partners__thumbnail']); ?>
						<div class="partners__content card__content">
							<h3 class="partners__title"><?php the_title();?></h3>
							<div class="partners__location"><?php the_field( 'partner_location' );?></div>
							<div class="partners__goods"><?php the_field( 'partner_goods' );?></div>
						</div>
					</a>
				</div>
			</article>
		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>
	</div>
</section>