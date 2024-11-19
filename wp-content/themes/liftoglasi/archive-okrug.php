<?php
/* Template Name: Okrug Archive Page */
get_header(); ?>

<section class="hero">
	<?php $image = get_field('okruzi_hero_image', 'option');
	if( !empty( $image ) ): ?>
		<div class="hero__background" style="background-image: linear-gradient(0deg, rgb(45 103 200 / 70%) 35%, rgba(255,255,255,0) 100%), url('<?php echo esc_url($image['url']); ?>');">
			<div class="hero__container" data-aos="zoom-out">
				<?php if(get_field('okruzi_hero_title', 'option')) : ?>
					<h1><?php echo the_field('okruzi_hero_title', 'option'); ?></h1>
				<?php else : ?>
					<h1><?php echo the_title(); ?></h1>
				<?php endif; ?>
				<h2><?php the_field('okruzi_hero_subtitle', 'option'); ?></h2>
				<?php $link = get_field('okruzi_hero_button', 'option');
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

<section class="locations">
<img class="locations__bg"src="<?php echo get_template_directory_uri(); ?>/assets/images/buildings3.png" alt="">
	<div class="container">
		<h2 class="locations__heading" data-aos="fade-left">Spisak dostupnih oglasnih okruga</h2>
		<p class="locations__subheading">Izaberite deo grada za postavku vaše reklame <br> 50 zgrada / 2 meseca oglašavanja</p>
    <?php
      $args = array(
      'post_type' => 'okrug', // Your custom post type
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'ASC',
      );

    $loop = new WP_Query($args); ?>
    <?php if ($loop->have_posts()) : ?>
      <div class="row">
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100" data-aos="fade-left">
                <div class="card-img-top">
                  <?php the_post_thumbnail('medium'); ?>
                </div>
              <div class="card-body">
                <h5 class="card-title">
                  <?php the_title(); ?>
                </h5>
                <p class="card-text"><?php the_field('subtitle'); ?></p>
                <a href="<?php the_permalink(); ?>">Više informacija za&nbsp;<?php the_title(); ?>&nbsp;</a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>