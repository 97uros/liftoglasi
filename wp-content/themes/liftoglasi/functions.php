<?php 

// Styles and scripts 

function liftoglasi_styles() {
  // jQuery 
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js');
  // AJAX 
  wp_enqueue_script('ajax', get_template_directory_uri() . '/assets/js/ajax.js', array('jquery'), null, true);
  wp_localize_script('ajax', 'ajax_search_params', array(
    'ajax_url' => admin_url('admin-ajax.php')
  ));
  // AOS 
  wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
  wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
  // Bootstrap
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
  // Bootstrap Icons
  wp_enqueue_style('bs-icons-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
  // Datepicker 
  wp_enqueue_script('jquery-ui-datepicker');
  wp_enqueue_style('jquery-ui-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
  // FA 
  wp_enqueue_script('fa-js', 'https://kit.fontawesome.com/e6baa6768d.js');
  wp_enqueue_script('gallery-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js');
  // Owl Carousel
  wp_enqueue_style('owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
  wp_enqueue_style('owl-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
  wp_enqueue_script('owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
  // Photoswipe 
  wp_enqueue_style('photoswipe', 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.css');
  wp_enqueue_style('default-skin', 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/default-skin/default-skin.min.css');
  wp_enqueue_script('photoswipe', 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe.min.js', array(), null, true);
  wp_enqueue_script('photoswipe-ui-default', 'https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.3/photoswipe-ui-default.min.js', array('photoswipe'), null, true);
  wp_enqueue_script('photoswipe-init', get_template_directory_uri() . '/assets/js/gallery.js', array('photoswipe', 'photoswipe-ui-default'), null, true);
  // Main JS 
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js');
  // Main CSS
  wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css');
}

add_action('wp_enqueue_scripts', 'liftoglasi_styles');

register_nav_menus(array(
	'top_navigation_menu' => 'Top Navigation Menu',
	'footer_menu_col1' => 'Footer Menu 1',
  'footer_menu_col2' => 'Footer Menu 2',
  'copyright_menu' => 'Copyright Menu'
));

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page('Footer');
  acf_add_options_page('Testimonials');
  acf_add_options_page('FAQ');
  acf_add_options_page('Gallery');
  acf_add_options_page('Logos');
  acf_add_options_page('Contact');
  acf_add_options_page('Okruzi');
  acf_add_options_page('Okrug');
}

add_theme_support( 'post-thumbnails' ); 

add_theme_support('custom-logo', array(
  'width' => 200,
));

function custom_image_sizes() {
  add_image_size('blog-image', 1200, 675, true); // 1200x675px hard crop mode
}
add_action('after_setup_theme', 'custom_image_sizes');

function custom_mime_types($mimes) {
  $mimes['webp'] = 'image/webp';
  return $mimes;
}
add_filter('upload_mimes', 'custom_mime_types');

function custom_post_type() {
	register_post_type('okrug',
		array(
			'labels' => array(
				'name' => __('Okruzi', 'textdomain'),
				'singular_name' => __('Okrug', 'textdomain'),
			),
				'public' => true,
        'menu_icon' => 'dashicons-building',
				'has_archive' => true,
        'rewrite' => array( 'slug' => 'okruzi' ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
		)
	);
}
add_action('init', 'custom_post_type');

// AJAX //

  /* Search */

  function ajax_live_search() {
    $search_query = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';
    $args = array(
      'post_type' => 'post',
      's' => $search_query,
      'posts_per_page' => 6
    );
    $search_results = new WP_Query($args);
    if ($search_results->have_posts()) :
      while ($search_results->have_posts()) : $search_results->the_post(); ?>
        <article class="col-md-6 col-xl-4 p-2">
          <div class="blog-post">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                  <?php the_post_thumbnail('blog-image', array('class' => 'img-fluid')); ?>
                  <div class="hover-overlay">
                    <i class="fa-solid fa-circle-arrow-right"></i>
                  </div>
                </div>
              <?php endif; ?>
              <div class="blog-post-content">
                <div class="post-meta">
                  <div class="post-date"><i class="fa-solid fa-calendar"></i>&nbsp;<?php the_time('F j, Y'); ?></div>
                </div>
                <h3><?php the_title(); ?></h3>
                <div class="post-excerpt">
                  <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                </div>
              </div>
            </a>
          </div>
        </article>
      <?php endwhile; ?>
    <?php else: ?>
      <p>No results found</p>
    <?php endif;

    wp_die();
  }
  add_action('wp_ajax_nopriv_ajax_live_search', 'ajax_live_search');
  add_action('wp_ajax_ajax_live_search', 'ajax_live_search');

  /* Categories */

  // AJAX handler for category filtering
  add_action('wp_ajax_ajax_category_filter', 'ajax_category_filter');
  add_action('wp_ajax_nopriv_ajax_category_filter', 'ajax_category_filter');

  function ajax_category_filter() {
    check_ajax_referer('ajax-nonce', 'nonce');

    if (!isset($_POST['category_id'])) {
      wp_send_json_error('Category ID parameter is missing.');
    }

    $category_id = intval($_POST['category_id']);

    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 6,
      'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
      'cat' => $category_id // Filter by category ID
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
      ob_start(); // Start output buffering

      while ($query->have_posts()) {
        $query->the_post();
        ?>
        <article class="col-md-6 col-xl-4 p-2">
          <div class="blog-post">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                  <?php the_post_thumbnail('blog-image', array('class' => 'img-fluid')); ?>
                  <div class="hover-overlay">
                    <i class="fa-solid fa-circle-arrow-right"></i>
                  </div>
                </div>
              <?php endif; ?>
              <div class="blog-post-content">
                <div class="post-meta">
                  <div class="post-date"><i class="fa-solid fa-calendar"></i>&nbsp;<?php the_time('F j, Y'); ?></div>
                </div>
                <h3><?php the_title(); ?></h3>
                <div class="post-excerpt">
                  <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                </div>
              </div>
            </a>
          </div>
        </article>
        <?php
      }
      wp_reset_postdata();

      $response['posts'] = ob_get_clean(); // Get buffered output and clean buffer
      $response['more_posts'] = $query->max_num_pages > 1 ? true : false;

      wp_send_json_success($response);
    } else {
      wp_send_json_error('No posts found for this category.');
    }

    exit;
  }

  // Load More

  function ajax_load_more() {
    $paged = isset($_POST['page']) ? sanitize_text_field($_POST['page']) : 1;

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'paged' => $paged
    );

    $query = new WP_Query($args);
    $posts_html = '';

    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
        ob_start(); // Start output buffering
        ?>
        <article class="col-md-6 col-xl-4 p-2">
          <div class="blog-post">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                  <?php the_post_thumbnail('blog-image', array('class' => 'img-fluid')); ?>
                  <div class="hover-overlay">
                    <i class="fa-solid fa-circle-arrow-right"></i>
                  </div>
                </div>
              <?php endif; ?>
              <div class="blog-post-content">
                <div class="post-meta">
                  <div class="post-date"><i class="fa-solid fa-calendar"></i>&nbsp;<?php the_time('F j, Y'); ?></div>
                </div>
                <h3><?php the_title(); ?></h3>
                <div class="post-excerpt">
                  <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                </div>
              </div>
            </a>
          </div>
        </article>
        <?php $posts_html .= ob_get_clean(); // Get the buffered output and clean the buffer
      endwhile;
    endif;

    $more_posts = $query->max_num_pages > $paged ? true : false;
    wp_send_json_success(array('posts' => $posts_html, 'more_posts' => $more_posts));
  }
  add_action('wp_ajax_nopriv_ajax_load_more', 'ajax_load_more');
  add_action('wp_ajax_ajax_load_more', 'ajax_load_more');

?>