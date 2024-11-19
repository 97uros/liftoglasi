<?php get_header(); ?>

<div class="container blog-single mt-5">
  <div class="blog-single-back-button">
    <a href="<?php echo esc_url(home_url('/blog')); ?>"><i class="fa-solid fa-chevron-left"></i>&nbsp;<?php _e('Nazad na sve objave', 'your-text-domain'); ?></a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="row">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>
            <div class="col-12 p-2">
              <div class="blog-single-post">
                <div class="blog-single-post-featured-image">
                  <?php the_post_thumbnail('blog-image'); ?>
                </div>
                <div class="blog-single-post-top">
                  <h1 class="blog-single-post-title"><?php the_title(); ?></h1 class="blog-single-post-title">
                  <div class="blog-single-post-meta">
                    <span><i class="fa-solid fa-calendar"></i>&nbsp;<?php the_time('F j, Y'); ?></span>
                    <span><i class="fa-solid fa-user"></i>&nbsp;<?php the_author(); ?></span>
                    <span><i class="fa-solid fa-tags"></i>&nbsp;<?php the_category(', '); ?></span>
                  </div>
                </div>
                <hr>
                <div class="blog-single-post-content">
                  <?php echo the_content(); ?>
                </div>
                <div class="blog-single-post-footer">
                  <div class="tags-list">
                    <?php
                    $tags_list = get_the_tag_list('<ul class="list-inline"><li class="list-inline-item">', '</li><li class="list-inline-item">', '</li></ul>');
                    if ($tags_list) {
                      echo '<h5>' . __('Tags:') . '</h5>';
                      echo $tags_list;
                    }
                    ?>
                  </div>
                  <?php echo get_template_part('template-parts/faq', 'blog'); ?>
                  <div class="author-bio mt-4 p-3 border">
                    <div class="row">
                      <div class="col-md-2">
                        <?php echo get_avatar(get_the_author_meta('ID'), 96, '', '', array('class' => 'img-fluid rounded-circle')); ?>
                      </div>
                      <div class="col-md-10">
                        <h5 class="mb-1"><?php the_author(); ?></h5>
                        <p class="mb-0"><?php the_author_meta('description'); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="blog-single-post-share py-4">
                  <h5>Share this entry</h5>
                  <hr>
                  <a class="blog-single-post-share-icon p-1" target="_blank" aria-label="Share on Facebook" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"><span><i class="fa-brands fa-facebook"></i></span></a>
                  |
                  <a class="blog-single-post-share-icon p-1" target="_blank" aria-label="Share on Twitter" href="https://twitter.com/share?text=<?php the_permalink(); ?>"><span><i class="fa-brands fa-twitter"></i></span></a>
                  |
                  <a class="blog-single-post-share-icon p-1" target="_blank" aria-label="Share on Pinterest" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>"><span><span><i class="fa-brands fa-pinterest"></i></span></a>        
                  |        
                  <a class="blog-single-post-share-icon p-1" target="_blank" aria-label="Share on LinkedIn" href="https://linkedin.com/shareArticle?mini=true&amp;title=<?php the_permalink(); ?>"><span><i class="fa-brands fa-linkedin"></i></span></a> 
                  |
                  <a class="blog-single-post-share-icon p-1" aria-label="Share by Mail" href="mailto:?subject=<?php the_permalink(); ?>"><span><i class="fa-solid fa-envelope"></i></span></a>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
      </div>
      <?php
        wp_reset_postdata();
      else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>