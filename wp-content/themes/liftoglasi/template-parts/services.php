<section class="services">
  <div class="container">
    <h2 class="services__heading" data-aos="fade-right"><?php echo the_field('services_heading'); ?></h2>
    <p class="services__subheading" data-aos="fade-left"><?php echo the_field('services_subheading'); ?></p>
    <?php if( have_rows('service') ): ?>
      <div class="row">
        <?php while( have_rows('service') ): the_row(); 
          $image = get_sub_field('service_image');
          $title = get_sub_field('service_title');
          $text = get_sub_field('service_text');
          $link = get_sub_field('service_link');
          $is_premium = get_sub_field('premium');
          ?>
          <div class="col-lg-4">
            <div class="card text-bg-dark <?php echo $is_premium ? 'premium' : ''; ?>" data-aos="flip-left">
              <img src="<?php echo esc_url($image['url']); ?>" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h3 class="card-title"><?php echo $title; ?></h3>
                <p class="card-text"><?php echo $text ?></p>
                <?php if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <a class="card-text" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i class="bi bi-arrow-right"></i></a>
                <?php endif; ?>
                <?php if( $is_premium ): ?>
                  <div class="premium-badge"><i class="fa-solid fa-crown">&nbsp;</i>Premium Selection</div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>