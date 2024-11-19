<section class="logos">
	<?php if( have_rows('logo_slider', 'option') ): ?>
		<div class="logo-slider owl-carousel">
			<?php while( have_rows('logo_slider', 'option') ): the_row(); 
				$logo = get_sub_field('logo');
				if( !empty( $logo ) ): ?>
					<div class="item logo">
						<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</section>