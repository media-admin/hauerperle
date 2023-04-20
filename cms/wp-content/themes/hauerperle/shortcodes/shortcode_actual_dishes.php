<section div class="dishes">
	<div class="dishes_container wrapper">

		<table>


	<?php
		setlocale(LC_TIME, 'de_DE', 'deu_deu');
		$today = date('d.m.Y',time());

		$args = array(
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'post_type' => 'dish',
			'orderby'=> 'dish_date',
			'order' => 'ASC',
			'meta_query'  => array(
				array(
					'key'     => 'dish_date',
					'value'   => date("Y/m/d h:i A"),
					'compare' => '>=',
					'type'    => 'DATE'
				)
			)
		);

		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php

				$date = get_field( 'dish_date' );

				$weekday = date('l', strtotime($date));

				$trans = array(
					'Monday'    => 'Montag',
					'Tuesday'   => 'Dienstag',
					'Wednesday' => 'Mittwoch',
					'Thursday'  => 'Donnerstag',
					'Friday'    => 'Freitag',
					'Saturday'  => 'Samstag',
					'Sunday'    => 'Sonntag',
					'Mon'       => 'Mo',
					'Tue'       => 'Di',
					'Wed'       => 'Mi',
					'Thu'       => 'Do',
					'Fri'       => 'Fr',
					'Sat'       => 'Sa',
					'Sun'       => 'So',
					'January'   => 'Januar',
					'February'  => 'Februar',
					'March'     => 'März',
					'May'       => 'Mai',
					'June'      => 'Juni',
					'July'      => 'Juli',
					'October'   => 'Oktober',
					'December'  => 'Dezember'
				);

				$weekday = strtr($weekday, $trans);


			?>
			<tr>
				<td><?php echo $weekday ?></td>
				<td><?php the_field( 'dish_date' );?></td>
				<td><?php the_field( 'dish_soup' );?></td>
				<td><?php the_field( 'dish_plate_1' );?></td>
				<td><?php the_field( 'dish_plate_2' );?></td>
				<!-- <td><?php echo $today ?></td> -->
			</tr>

			<!-- <article class="partners__card card">
				<div class="partners__card-container card__container wrapper">
					<a class="section-partner__link" href="<?php the_field( 'partner_url' );?>" target="_blank">
					<?php the_post_thumbnail('full', ['class' => 'partners__thumbnail card__thumbnail']); ?>
						<div class="partners__content card__content">
							<h3 class="partners__title card__title"><?php the_title();?></h3>
							<div class="partners__subtitle card__subtitle">
								<?php the_excerpt() ?>
							</div>
							<a class="partners__url" href="<?php echo the_field('partner_url');?>" target="_blank"><?php the_field('partner_website');?></a>
						</div>
					</a>
				</div>
			</article> -->
		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>


		</table>

	</div>
</section>