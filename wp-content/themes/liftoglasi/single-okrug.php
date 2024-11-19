<?php get_header(); ?>

<?php echo get_template_part('template-parts/hero'); ?>

<section class="locations__single">
  <div class="container">
    <div class="locations__single__info"><?php the_field('info'); ?></div>
    <div class="row">
      <div class="col-lg-4">
        <div class="locations__single__numbers">
          <h3 class="locations__single__title">U brojkama</h3>
          <div class="row number">
            <i class="fa-solid fa-building col-2"></i>
            <div class="col-10">
              <h4><?php the_field('apartments'); ?></h4>
              <h6>Stanova</h6>   
            </div>
          </div>
          <hr>
          <div class="row number">
          <i class="fa-solid fa-user col-2"></i>
            <div class="col-10">
              <h4><?php the_field('tenants'); ?></h4>
              <h6>Stanara</h6>   
            </div>
          </div>
          <hr>
          <div class="row number">
            <i class="fa-solid fa-users col-2"></i>
            <div class="col-10">
              <h4><?php the_field('tenants_+_visitors'); ?></h4>
              <h6>Stanara + posetilaca</h6>   
            </div>
          </div>
          <hr>
        </div>
        <div class="locations__single__additional__info">
          <?php 
          $a = get_field('tenants_+_visitors');
          $b = get_field('tenants');
          if ($a !== null && $b !== null) {
            $result = $a - $b;
          } ?>
          <p>Navedeni broj predstavlja okviran broj stanova zabeleženih na terenu.
            <br>
            <br>
            Za broj stanara uzet je prosek od 3 stanara po stanu.
            <br>
            <br>
            Ako se uzme u obzir da svaki stan na mesečnom nivou ima dve posete gostiju, broj pogleda na reklamu se uvećava za dodatnih <strong><?php echo $result; ?></strong> POSETILACA.
        </p>
        </div>
        <hr>
        <div class="row locations__single__statistics desktop">
          <div class="col-lg-6 locations__single__statistics text-center">
            <?php
            $statistics = get_field('statistics');
            if( $statistics ): ?>
                <i class="fa-solid fa-chart-simple"></i>
                <p>Preuzmi statistiku za <?php echo the_title(); ?></p>
                <button class="btn-tertiary">
                  <a href="<?php echo $statistics['url']; ?>">Preuzmi</a>
                </button>
            <?php endif; ?>
          </div>
          <div class="col-lg-6 locations__single__reservation text-center">   
          <?php 
          $reservation = get_field('reservation');
          if( $reservation ): 
              $link_url = $reservation['url'];
              $link_title = $reservation['title'];
              $link_target = $reservation['target'] ? $reservation['target'] : '_self';
              ?>
              <i class="fa-solid fa-clipboard"></i>
              <p><?php echo esc_html( $link_title ); ?></p>
              <button class="btn-primary"><a class="card-text" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Rezerviši</a></button>    
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div>
        <h3 class="locations__single__title">Neke od zgrada na okrugu</h3>
        <?php $images = get_field('gallery');
        if ($images): ?>
          <div class="owl-carousel owl-theme locations__single__gallery">
            <?php foreach ($images as $image): ?>
              <div class="item locations__single-image">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <div class="info">
                  <div class="title"><?php echo esc_html($image['title']); ?></div>
                  <div class="description"><?php echo esc_html($image['description']); ?></div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        </div>
        <div>
          <h3 class="locations__single__title pt-4">Postavka reklamnog materijala </h3>
          <table class="table table-hover table-striped locations__single__table" id="adTable">
            <thead>
              <tr>
                <th>Datum postavke</th>
                <th>Trajanje reklame</th>
              </tr>
            </thead>
            <tbody>
              <?php if( have_rows('date_table') ):
                while ( have_rows('date_table') ) : the_row();
                  $date = get_sub_field('date');
                  $duration = get_sub_field('duration'); ?>
                  <tr>
                    <td><?php echo esc_html($date); ?></td>
                    <td><?php echo esc_html($duration); ?></td>
                  </tr>
              <?php endwhile;
              elseif( have_rows('date_table', 'option') ):
                while ( have_rows('date_table', 'option') ) : the_row();
                  $date = get_sub_field('date');
                  $duration = get_sub_field('duration'); ?>
                  <tr>
                    <td><?php echo esc_html($date); ?></td>
                    <td><?php echo esc_html($duration); ?></td>
                  </tr>
                <?php endwhile;
              endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>