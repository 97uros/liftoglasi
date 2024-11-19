<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Your_Theme_Name
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <section class="error-404 not-found">
      <div class="error-icon">
        <div class="magnifying-glass">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </div>
        <h1 class="page-title"><?php esc_html_e( 'Stranica nije pronađena.', 'your-theme-text-domain' ); ?></h1>
        <button onclick="goBackHome()"><?php esc_html_e( 'Nazad na početnu', 'your-theme-text-domain' ); ?></button>
      </div>
    </section>
  </main>
</div>

<script>
function goBackHome() {
  window.location.href = '<?php echo esc_url(home_url('/')); ?>';
}
</script>

<?php get_footer(); ?>