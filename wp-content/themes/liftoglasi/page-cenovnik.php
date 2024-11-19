<?php get_header(); ?>

<?php echo get_template_part('template-parts/hero'); ?>

<?php if (have_rows('prices_locations')) : 
  while (have_rows('prices_locations')) : the_row(); ?>
    <section class="prices prices__location">
      <div class="container">
        <?php 
          $heading = get_sub_field('prices_locations_heading');
          $subheading = get_sub_field('prices_locations_subheading');
          $info = get_sub_field('prices_locations_info');
          $link = get_sub_field('prices_locations_button');
        ?>
        <h2 class="prices__heading"><?php echo $heading; ?></h2>
        <p class="prices__subheading"><?php echo $subheading; ?></p>
        <div class="row">
          <div class="col-md-6">
            <table class="table table-hover prices__table" id="adTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Dimenzija vaše reklame</th>
                  <th>Cena dvomesečnog oglašavanja</th>
                </tr>
              </thead>
              <tbody>
                <?php if( have_rows('prices_locations_table') ):
                  $row_number = 1;
                  while ( have_rows('prices_locations_table') ) : the_row();
                    $dimension = get_sub_field('dimension');
                    $price = get_sub_field('price'); ?>
                    <tr data-dimension="<?php echo esc_attr($dimension); ?>" data-price="<?php echo esc_attr($price); ?>">
                      <td><?php echo esc_html($row_number); ?></td>
                      <td><?php echo esc_html($dimension); ?></td>
                      <td><?php echo esc_html($price); ?></td>
                    </tr>
                  <?php $row_number++;
                  endwhile;
                endif; ?>
              </tbody>
            </table>
            <div class="prices__content">
              <p class="prices__info"><?php echo $info; ?></p>
              <hr>
              <?php if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-6 d-flex flex-column align-items-center">
            <div class="position-relative prices__image">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/cenovnik-za-okruge.png'; ?>" alt="Elevator Ad Dimensions" class="img-fluid">
              <?php if( have_rows('prices_locations_table') ):
                  $counter = 1;
                  while ( have_rows('prices_locations_table') ) : the_row();
                    $dimension = get_sub_field('dimension');
                    $price = get_sub_field('price'); ?>
                    <div class="pulsating-circle pulsating-circle-<?php echo $counter; ?>" data-dimension="<?php echo esc_attr($dimension); ?>" data-price="<?php echo esc_attr($price); ?>"></div>
                <?php
                    $counter++;
                  endwhile;
                endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="tooltip-custom" id="tooltip"></div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>

<div class="container">
  <hr>
</div>

<?php echo get_template_part('template-parts/locations'); ?>

<div class="container">
  <hr>
</div>

<?php if (have_rows('prices_full')) : 
  while (have_rows('prices_full')) : the_row(); ?>
  <section class="prices prices__full">
    <div class="container">
      <?php 
        $heading = get_sub_field('prices_full_heading');
        $subheading = get_sub_field('prices_full_subheading');
        $info = get_sub_field('prices_full_info');
        $file = get_sub_field('prices_full_file');
        $link = get_sub_field('prices_full_button');
        $image = get_sub_field('prices_full_image');
        ?>
      <h2 class="prices__heading"><?php echo $heading; ?></h2>
      <p class="prices__subheading"><?php echo $subheading; ?></p>
      <div class="row">
        <div class="col-md-6 d-flex flex-column align-items-center">
          <div class="position-relative prices__image">
            <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid">
              <div class="pulsating-circle pulsating-circle-full" data-dimension="33x48.7cm" data-price="<?php echo esc_attr($price); ?>"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="prices__content text-center">
            <div class="prices__file text-center">
                <p>Pogledajte ponudu najviših stambenih zgrada u našoj ponudi</p>
                <?php if( $file ): ?>
                  <button class="btn-tertiary"><a href="<?php echo $file['url']; ?>">Preuzmi</a></button>
                  
                <?php endif; ?>
            </div>
            <p class="prices__info text-center"><?php echo $info; ?></p>
            <?php if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <div class="tooltip-custom" id="tooltip"></div>
  </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('prices_premium')) : 
  while (have_rows('prices_premium')) : the_row(); ?>
    <section class="prices prices__premium" style="background-image: linear-gradient(97deg, rgb(0 0 0 / 70%) 46%, rgba(45,103,200,1) 100%), url('<?php echo get_template_directory_uri() ?>/assets/images/premium.jpg');">
      <div class="container">
      <?php 
        $heading = get_sub_field('prices_premium_heading');
        $subheading = get_sub_field('prices_premium_subheading');
        $info = get_sub_field('prices_premium_info');
        $video = get_sub_field('prices_premium_video');
        $link = get_sub_field('prices_premium_button');
        $image = get_sub_field('prices_premium_image');
        ?>
        <h2 class="prices__heading"><?php echo $heading; ?></h2>
        <p class="prices__subheading"><?php echo $subheading; ?></p>
        <div class="row">
          <div class="col-md-6">
            <div class="prices__content">
              <p class="prices__info"><?php echo $info; ?></p>
              <?php if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <button class="btn btn-tertiary">
                  <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><i class="fa-solid fa-crown">&nbsp;</i><?php echo esc_html( $link_title ); ?></a>
                </button>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-6 d-flex flex-column align-items-center">
            <div class="position-relative prices__image">
              <?php if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid">
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>         
    </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php echo get_template_part('template-parts/faq'); ?>

<?php get_footer(); ?>