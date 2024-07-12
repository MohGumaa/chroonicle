<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @package chroonicle
 */

?>

	<?php get_template_part( 'template-parts/layout/footer', 'content' ); ?>

	<footer id="colophon" class="bg-gray-30 text-center text-xs md:text-sm py-5">
		<div class="container">
			<p><?php esc_attr_e( 'All Rights Reserved', 'chroonicle' ); ?> <?php echo date( 'Y' ); ?>. <?php esc_attr_e( ' Chronicle is a Registered Trademark.', 'chroonicle' ); ?></p>
		</div>
	</footer>

</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

<?php wp_footer(); ?>

</body>
</html>
