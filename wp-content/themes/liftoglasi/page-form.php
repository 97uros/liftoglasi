<?php /* Template Name: Form */ ?>
<?php get_header(); ?>

<?php echo get_template_part('template-parts/hero');?>

<section class="order-form">
  <div class="container">
    <?php echo the_content(); ?>
  </div>
</section>
<?php get_footer(); ?>