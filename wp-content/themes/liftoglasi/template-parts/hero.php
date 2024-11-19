<section class="hero">
	<?php $image = get_field('hero_image');
	if( !empty( $image ) ): ?>
		<div class="hero__background" style="background-image: linear-gradient(0deg, rgb(45 103 200 / 70%) 35%, rgba(255,255,255,0) 100%), url('<?php echo esc_url($image['url']); ?>');">
			<div class="hero__container" data-aos="zoom-out">
				<?php if(get_field('hero_title')) : ?>
					<h1><?php echo the_field('hero_title'); ?></h1>
				<?php else : ?>
					<h1><?php echo the_title(); ?></h1>
				<?php endif; ?>
				<h2><?php the_field('hero_subtitle'); ?></h2>
				<?php if (is_singular('okrug')) : ?>
					<div class="hero_info">
						<p>Vaša reklama u 50 zgrada | 2 meseca oglašavanja - <strong><?php the_field('tenants_+_visitors'); ?></strong> potencijalnih klijenata</p>
					</div>
				<?php endif; ?>
				<?php $link = get_field('hero_button');
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>
</section>