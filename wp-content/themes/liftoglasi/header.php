<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head id="head">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <div class="navbar-container container d-flex align-items-center justify-content-between">
      <!-- <a onclick="goBackHome()" class="navbar-brand"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" width="200"></a> -->
      <?php
          if (function_exists('the_custom_logo')) {
              the_custom_logo();
          } else {
              // Fallback if no custom logo is set
              echo '<a href="' . esc_url(home_url('/')) . '" class="navbar-brand"><img width="200" src="' . get_template_directory_uri() . '/images/logo.png" alt="' . get_bloginfo('name') . '"></a>';
          }
          ?>
      <div class="navbar-body">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'top_navigation_menu',
              'container' => 'nav',
              'container_class' => 'mega-menu-container',
              'menu_class' => 'mega-menu navbar-nav justify-content-end align-items-center flex-grow-1 pe-3',
              'fallback_cb'    => false,
            )
          );
        ?>
      </div>
    </div>
  </header>

  <script>
    function goBackHome() {
      window.location.href = '<?php echo esc_url(home_url('/')); ?>';
    }
  </script>