<aside id="secondary" class="sidebar widget-area m-2">
  <div class="widget widget_search mb-4">
    <h4 class="widget-title"><?php _e('Pretraga'); ?></h4>
    <form class="search-form form-inline" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
      <div class="input-group">
        <input type="search" id="search-field" class="form-control" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php _e('Search...'); ?>">
        <div class="input-group-append">
          <button type="submit" id="search-submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </div>
    </form>
    <div id="search-results" class="mt-3"></div>
  </div>
  <div class="widget widget_categories mb-4">
    <h4 class="widget-title"><?php _e('Kategorije'); ?></h4>
    <ul class="list-group">
      <?php
      $current_category = get_queried_object();
      wp_list_categories(array(
        'title_li' => '',
        'show_count' => true,
        'walker' => new Walker_Category_Bootstrap(),
        'current_category' => $current_category->term_id,
      ));
      ?>
    </ul>
  </div>
  <div class="widget widget_recent_posts mb-4">
    <h4 class="widget-title"><?php _e('Najnovije objave'); ?></h4>
    <ul class="list-group">
      <?php
      $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 5,
      );
      $recent_posts = new WP_Query($args);
      if ($recent_posts->have_posts()) :
        while ($recent_posts->have_posts()) :
          $recent_posts->the_post();
          ?>
          <li class="list-group-item">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
          <?php
        endwhile;
        wp_reset_postdata();
      else :
        ?>
        <li class="list-group-item"><?php _e('No posts found'); ?></li>
      <?php endif; ?>
    </ul>
  </div>
</aside>
