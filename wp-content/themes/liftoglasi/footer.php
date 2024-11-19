    <footer class="footer pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer__logo mb-3">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo" class="img-fluid" width="200">
            </div>
            <div class="footer__contact footer__column">
            <?php if (have_rows('footer_contact', 'option')) :
              while (have_rows('footer_contact', 'option')) : the_row();
              $address = get_sub_field('address', 'option');
              $phone = get_sub_field('phone', 'option'); 
              $email = get_sub_field('email', 'option');
              $website = get_sub_field('website', 'option'); ?>
              <p><?php echo $address; ?></p>
              <p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
              <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
              <p><a href="<?php get_home_url(); ?>"><?php echo $website; ?></a></p>
              <?php endwhile; ?>
            <?php endif; ?>
            </div>
          </div>
          <div class="col-md-3">
            <?php wp_nav_menu(array(
              'theme_location' => 'footer_menu_col1',
              'menu_class' => 'footer__column',
              'container' => false,
              'depth' => 1
            )); ?>
          </div>
          <div class="col-md-3">
            <?php wp_nav_menu(array(
              'theme_location' => 'footer_menu_col2',
              'menu_class' => 'footer__column',
              'container' => false,
              'depth' => 1
            )); ?>
          </div>
          <div class="col-md-3">
            <div class="footer__social footer__column">
            <?php if (have_rows('footer_social', 'option')) :
              while (have_rows('footer_social', 'option')) : the_row();
              $icon = get_sub_field('icon', 'option');
              $link = get_sub_field('link', 'option'); ?>
                <?php if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <p class="footer__social-icon"><?php echo $icon; ?><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></p>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
            </div>
          </div>
        </div>
        <hr>
        <div class="footer__copyright d-flex justify-content-between">
          <div class="footer__copyright-text">
            <?php echo '© ' . date('Y') . ' LiftOglasi - Sva prava zadržana.'; ?>
          </div>
          <?php wp_nav_menu(array(
            'theme_location' => 'copyright_menu',
            'menu_class' => 'footer__copyright-links d-flex',
            'container' => false,
            'depth' => 1
          )); ?>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
 