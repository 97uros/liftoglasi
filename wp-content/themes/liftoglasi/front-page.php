<?php get_header(); ?>

<?php echo get_template_part('template-parts/hero'); ?>

<?php echo get_template_part('template-parts/logos'); ?>

<section class="numbers">
	<div class="container">
		<h2 class="numbers__heading" data-aos="fade-right">Trenutno u brojkama</h2>
		<div class="row">
			<div class="col-lg-4 text-center">
				<div class="counter" data-aos="fade-right">
					<i class="counter__icon bi bi-person-plus-fill"></i>
					<h2 class="counter__title" data-count="100000">0</h2>
					<p class="counter__text ">Više od 100.000 stanara i njihovih posetilaca gleda vaše reklame.</p>
				</div>
	    </div>
			<div class="col-lg-4 text-center">
				<div class="counter" data-aos="fade-down">
					<i class="counter__icon bi bi-person-standing"></i>
					<h2 class="counter__title" data-count="200000">0</h2>
					<p class="counter__text ">Više od 200.000 dnevnih vožnji liftom od strane stanara.</p>
				</div>
	    </div>
			<div class="col-lg-4 text-center">
				<div class="counter" data-aos="fade-left">
					<i class="counter__icon bi bi-chevron-compact-up"></i>
					<h2 class="counter__title" data-count="73000000">0</h2>
					<p class="counter__text ">Više od 73 000 000 godišnjih vožnji liftom.</p>
				</div>
	    </div>
		</div>
	</div>
</section>

<div class="container">
	<hr>
</div>

<?php echo get_template_part('template-parts/services'); ?>

<div class="container">
	<hr>
</div>

<!-- <section class="overview">
	<div class="container text-center">
		<h2 class="overview__heading">Jedina firma u Beogradu sa mrežom od 1200 liftova u kojima možete postaviti svoju reklamu.</h2>
		<hr>
		<div class="row justify-content-center">
			<div class="overview__item col-lg-1 text-center">
				<div class="overview__item-icon">
					<i class="fa-solid fa-users"></i>
				</div>
				<h6>50000 Stanara</h6>
			</div>			
			<div class="overview__item col-lg-1 text-center">
				<div class="overview__item-icon">
					<i class="fa-solid fa-building-user"></i>
				</div>
				<h6>150000 Posetilaca</h6>
			</div>
			<div class="overview__item col-lg-1 text-center">
				<div class="overview__item-icon">
					<i class="fa-regular fa-building"></i>
				</div>
				<h6>550 Stambenih zgrada</h6>
			</div>
			<div class="overview__item col-lg-1 text-center">
				<div class="overview__item-icon">
					<i class="fa-solid fa-elevator"></i>
				</div>
				<h6>800 Liftova</h6>
			</div>
			<div class="overview__item col-lg-1 text-center">
				<div class="overview__item-icon">
					<i class="fa-solid fa-eye"></i>
				</div>
				<h6>Mikrotargetiranje</h6>
			</div>
			<div class="overview__item col-lg-1 text-center">
				<div class="overview__item-icon">
					<i class="fa-solid fa-camera"></i>
				</div>
				<h6>Stalna izloženost</h6>
			</div>
			<div class="overview__item col-lg-1 text-center">
				<div class="overview__item-icon">
					<i class="fa-solid fa-road-barrier"></i>
				</div>
				<h6>Zarobljenost publike</h6>
			</div>
			<div class="overview__item col-lg-1 text-center">
				<div class="overview__item-icon">
					<i class="fa-regular fa-rectangle-list"></i>
				</div>
				<h6>Manje konkurencije</h6>
			</div>
			<div class="overview__item col-lg-1 text-center">
				<div class="overview__item-icon">
					<i class="fa-solid fa-house-user"></i>
				</div>
				<h6>Blizu i lično</h6>
			</div>
		</div>
	</div>
</section> -->

<!-- <section class="options">
	<div class="container">
		<?php if (have_rows('option')) : ?>
			<?php while( have_rows('option') ): the_row(); 
				$image = get_sub_field('option_image');
				$title = get_sub_field('option_title');
				$text = get_sub_field('option_text');
				$link = get_sub_field('option_link');
				$link2 = get_sub_field('option_link_2') ?>
				<div class="row options__item">
					<div class="col-lg-6 options__text">
						<h3><?php echo $title; ?></h3>
						<p><?php echo $text; ?></p>
						<div class="options__buttons d-flex">
							<?php if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<button class="btn">
									<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								</button>
							<?php endif; ?>
							<?php if( $link2 ): 
								$link_url = $link2['url'];
								$link_title = $link2['title'];
								$link_target = $link2['target'] ? $link2['target'] : '_self';
								?>
								<button class="btn-secondary">
									<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								</button>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-6 options__image d-flex justify-content-center">
						<div class="options__image-wrapper">
							<img src="<?php echo esc_url($image['url']); ?>');">
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section> -->

<?php echo get_template_part('template-parts/locations'); ?>

<?php echo get_template_part('template-parts/benefits'); ?>

<div class="container">
	<hr>
</div>

<?php echo get_template_part('template-parts/about'); ?>

<div class="container">
	<hr>
</div>

<?php echo get_template_part('template-parts/testimonials'); ?>

<div class="container">
	<hr>
</div>

<?php echo get_template_part('template-parts/faq'); ?>

<?php get_footer();?>