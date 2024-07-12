<?php
/**
 * The template for displaying front page
 *
 * @package coinbullet
 */
get_header();
?>

<main id="main" class="template overflow-x-hidden bg-gray-30">
  <?php 
    while ( have_posts() ) {
      the_post();
      get_template_part( 'template-parts/content/content', 'front' );
    }
  ?>
</main>

<?php
get_footer();
?>