<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package quintadimension
 */

get_header();
?>

<main id="primary" class="container max-w-7xl px-4 mx-auto py-8 md:py-16">
  <section class="error-404 not-found">
    <header class="page-header">
      <h1 class="text-2xl text-center mb-4"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'nostalgia'); ?>
      </h1>
    </header><!-- .page-header -->

    <div class="page-content">
      <p>
        <?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'nostalgia'); ?>
      </p>
    </div><!-- .page-content -->
  </section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
