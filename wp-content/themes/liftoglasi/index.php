<?php get_header(); ?>

<?php echo get_template_part( 'template-parts/hero' ); ?>

<section class="blog">
  <div class="container">
    <div class="row">
      <div class="widget widget_search mb-4 col-md-6">
        <form class="search-form form-inline" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
          <div class="input-group">
            <input type="search" id="search-field" class="form-control" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php _e('Pretražite objave...'); ?>">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button" disabled><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </div>
        </form>
      </div>
      <div class="widget widget_categories mb-4 col-md-6">
      <?php $current_category = get_queried_object(); ?>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo __('Izaberite Kategoriju'); ?>&nbsp;<i class="fa-solid fa-chevron-down"></i>
          </button>
          <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
            <?php
            $categories = get_categories(array(
              'orderby' => 'name',
              'show_count' => true,
              'hide_empty' => false,
            ));
            foreach ($categories as $category) {
              $selected = ($current_category instanceof WP_Term && $current_category->term_id == $category->term_id) ? ' active' : '';
              echo '<li><a class="dropdown-item' . $selected . '" href="#" data-category-id="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . ' (' . $category->count . ')</a></li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="row" id="post-container">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'paged' => 1
      );
      $query = new WP_Query($args);
      
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
          <article class="col-md-6 col-xl-4 p-2">
            <div class="blog-post">
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
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
      <?php endif; ?>
    </div>
    <?php if ($query->max_num_pages > 1): ?>
      <div class="text-center mt-4">
        <button id="load-more" class="btn btn-primary"><?php _e('Učitaj više', 'textdomain'); ?></button>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>