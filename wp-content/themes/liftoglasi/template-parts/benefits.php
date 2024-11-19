<section class="benefits">
	<div class="container">
		<h2 class="benefits__heading" data-aos="fade-left">Prednosti oglašavanja u liftovima</h2>
		<?php if (have_rows('benefit')) : ?>
			<div class="row">
				<?php while( have_rows('benefit') ): the_row(); 
					$icon = get_sub_field('benefit_icon');
					$title = get_sub_field('benefit_title');
					$text = get_sub_field('benefit_text'); ?>
					<div class="col-lg-6 col-xl-3 benefits__item" data-aos="fade-right">
						<div class="card text-center">		
							<i class="card-img-top" data-aos="zoom-out-up"><?php echo $icon; ?></i>	
							<div class="card-body" data-aos="zoom-out-down">
								<h3 class="card-title"><?php echo $title; ?></h3>
								<p class="card-text"><?php echo $text; ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section>