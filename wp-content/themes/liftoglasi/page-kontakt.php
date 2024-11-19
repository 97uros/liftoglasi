<?php get_header(); ?>

<?php echo get_template_part('template-parts/hero'); ?>

<section class="contact">
  <div class="container">
    <h2 class="contact__heading"><?php echo the_field('contact_heading', 'option'); ?></h2>
    <p class="contact__subheading"><?php echo the_field('contact_subheading'); ?></p>
		<div class="row contact__info">
      <div class="col-lg-6 contact__info-box-group">
        <?php if( have_rows('address', 'option') ):
          while( have_rows('address', 'option') ) : the_row();
            $icon = get_sub_field('icon');
            $label = get_sub_field('label');
            $value = get_sub_field('value'); ?>
              <div class="contact__info-box text-center">
                <?php echo $icon; ?>
                <h3><?php echo $label; ?></h3>
                <a><?php echo $value; ?></a>
              </div>
          <?php endwhile;
        endif; ?>
        <?php if( have_rows('phone', 'option') ):
          while( have_rows('phone', 'option') ) : the_row();
            $icon = get_sub_field('icon');
            $label = get_sub_field('label');
            $value = get_sub_field('value'); ?>
              <div class="contact__info-box text-center">
                <?php echo $icon; ?>
                <h3><?php echo $label; ?></h3>
                <a href="tel:<?php echo $value; ?>"><?php echo $value; ?></a>
              </div>
          <?php endwhile;
        endif; ?>
        <?php if( have_rows('email', 'option') ):
          while( have_rows('email', 'option') ) : the_row();
            $icon = get_sub_field('icon');
            $label = get_sub_field('label');
            $value = get_sub_field('value'); ?>
              <div class="contact__info-box text-center">
                <?php echo $icon; ?>
                <h3><?php echo $label; ?></h3>
                <a href="mailto:<?php echo $value?>"><?php echo $value; ?></a>
              </div>
          <?php endwhile;
        endif; ?>
      </div>
      <div class="col-lg-6 contact__map">
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=bulevar arsenija carnojevica 34 beograd&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embed-googlemap.com">embed google map</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:100%;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:100%;}.gmap_iframe {height:100%!important;}</style></div>
			</div>
		</div>
	</div>
</section>
<div class="container">
  <hr>
</div>
<section class="contact__form contact__form_1">
  <div class="container">
    <?php echo do_shortcode('[contact-form-7 id="4aef147" title="Contact form 1"]'); ?>
  </div>
</section>
<section class="contact__form contact__form_2">
  <div class="container">
    <?php echo do_shortcode('[contact-form-7 id="4b9f2af" title="Contact Form 2"]'); ?>
  </div>
</section>

<?php get_footer(); ?>