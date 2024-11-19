<section class="locations">
	<img class="locations__bg"src="<?php echo get_template_directory_uri(); ?>/assets/images/buildings3.png" alt="">
	<div class="container">
		<h2 class="locations__heading" data-aos="fade-left"
		data-aos-anchor-placement="bottom-center">Spisak dostupnih oglasnih okruga</h2>
		<p class="locations__subheading">Izaberite deo grada za postavku vaše reklame <br> 50 zgrada / 2 meseca oglašavanja</p>
		<div class="owl-carousel owl-theme locations__slider">
			<?php
				$args = array(
				'post_type' => 'okrug', // Your custom post type
				'posts_per_page' => -1,
				'orderby' => 'title',
				'order' => 'ASC',
				);

			$loop = new WP_Query($args);

			if ($loop->have_posts()) :
					while ($loop->have_posts()) : $loop->the_post(); ?>
						<div class="card location" data-aos="fade-left">
							<div class="card-img-top">
								<?php the_post_thumbnail('medium'); ?>
							</div>
							<div class="card-body">
								<h3 class="card-title"><?php echo the_title(); ?></h3>
								<p class="card-text"><?php echo the_field('subtitle'); ?></p>
								<a class="card-link" href="<?php echo the_permalink(); ?>" class="btn btn-primary">Više informacija za&nbsp;<?php echo the_title(); ?>&nbsp;</a>
							</div>
						</div>
				<?php endwhile;
			endif; wp_reset_postdata(); ?>
		</div>
  </div>
</section>
