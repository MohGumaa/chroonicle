<?php
/**
 * The template for displaying all pages
 *
 * @package chroonicle
 */

get_header();
?>

	<main id="main" class="template overflow-x-hidden">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content/content', 'page' );
		endwhile;
		?>
	</main>

<?php
get_footer();
