<section class="testimonials">
	<div class="container">
		<h2 class="testimonials__heading" data-aos="fade-left"><?php echo the_field('testimonials_heading', 'option'); ?></h2>
		<?php if( have_rows('testimonial', 'option') ): ?>
			<div class="owl-carousel owl-theme testimonials__slider">
				<?php while( have_rows('testimonial', 'option') ): the_row(); 
					$rating = get_sub_field('rating');
					$text = get_sub_field('text');
					$name = get_sub_field('name');
					$position = get_sub_field('position');
					$company = get_sub_field('company');
					$image = get_sub_field('image'); ?>
					<div class="item">
						<div class="testimonial row">
							<div class="testimonial-content col-lg-8" data-aos="fade-left">
								<div class="testimonial-meta">
									<p class="testimonial-name font-weight-bold"><?php echo esc_html($name); ?></p>
									<?php if( $company ): 
										$link_url = $company['url'];
										$link_title = $company['title'];
										$link_target = $company['target'] ? $company['target'] : '_self';
										?>
										<p class="testimonial-position text-muted mb-0"><?php echo esc_html($position); ?>, <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></p>
									<?php endif; ?>
								</div>
								<div class="testimonial-rating my-2">
									<?php for( $i = 0; $i < 5; $i++ ): ?>
										<span class="star <?php if($i < $rating) echo 'filled'; ?>">★</span>
									<?php endfor; ?>
								</div>
								<p class="testimonial-text">"<?php echo esc_html($text); ?>"</p>
							</div>
							<div class="testimonial-image col-lg-4" data-aos="fade-right">
								<?php if( $image ): ?>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($name); ?>" class="rounded-circle mx-auto d-block" style="width: 200px; height: 200px; object-fit: cover;">
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
