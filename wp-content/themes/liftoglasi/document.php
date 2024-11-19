<?php /* Template Name: Document */ ?>
<?php get_header(); ?>
  <div class="container document">
    <h1 class="document__title"><?php the_title()?></h1>
    <div class="document__content">
      <?php the_content(); ?>
    </div>
  </div>
<?php get_footer(); ?>