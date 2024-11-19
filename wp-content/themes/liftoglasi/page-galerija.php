<?php get_header(); ?>

<?php echo get_template_part('template-parts/hero'); ?>

<section class="galleries">
	<div class="container">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php if (have_rows('galleries', 'options')) : ?>
					<?php while (have_rows('galleries', 'options')) : the_row(); ?>
						<?php
						$gallery_name = get_sub_field('gallery_name');
						$gallery_images = get_sub_field('gallery_images');
						if ($gallery_images) : ?>
							<div class="gallery-wrapper">
								<h2><?php echo esc_html($gallery_name); ?></h2>
								<div class="custom-gallery row" itemscope itemtype="http://schema.org/ImageGallery">
									<?php foreach ($gallery_images as $image) : ?>
										<figure class="col-12 col-md-6 col-lg-3 gallery-item" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
											<a href="<?php echo esc_url($image['url']); ?>" itemprop="contentUrl" data-size="<?php echo esc_attr($image['width']); ?>x<?php echo esc_attr($image['height']); ?>">
												<img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" itemprop="thumbnail" alt="<?php echo esc_attr($image['alt']); ?>">
												<div class="gallery-overlay">
													<i class="fa-solid fa-expand fa-beat-fade"></i>
												</div>
											</a>
											<figcaption itemprop="caption description"><?php echo esc_html($image['caption']); ?></figcaption>
										</figure>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>

<!-- PhotoSwipe Core HTML -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="pswp__bg"></div>
	<div class="pswp__scroll-wrap">
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>
		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<div class="pswp__counter"></div>
				<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
				<button class="pswp__button pswp__button--share" title="Share"></button>
				<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div>
			</div>
			<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
			<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>
		</div>
	</div>
</div>
